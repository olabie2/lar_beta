{{--
|--------------------------------------------------------------------------
| LTR/RTL Friendly Dropdown Menu with Hover Delay
|--------------------------------------------------------------------------
|
| Dependencies: Alpine.js, Tailwind CSS
|
| This component uses a single Alpine.js data object to manage the
| visibility of the main dropdown and any nested submenus. It
| introduces intentional delays on mouse enter and leave to provide a
| smoother user experience and prevent accidental opening/closing.
|
--}}

@props(['label' => 'Menu', 'items' => []])

<div 
    x-data="{
        // --- State for the main dropdown ---
        isOpen: false,
        openTimeout: null,
        leaveTimeout: null,
        openDelay: 200,      // Delay in ms before showing the dropdown
        leaveDelay: 300,     // Delay in ms before hiding the dropdown

        // --- State for the submenus ---
        activeSubmenu: null,
        submenuOpenTimeout: null,
        submenuLeaveTimeout: null,
        submenuOpenDelay: 150, // Submenus can open a bit faster
        submenuLeaveDelay: 300,

        // --- Methods for the main dropdown ---
        dropdownEnter() {
            clearTimeout(this.leaveTimeout); // Cancel any pending close command
            if (this.isOpen) return;
            this.openTimeout = setTimeout(() => { this.isOpen = true; }, this.openDelay);
        },
        dropdownLeave() {
            clearTimeout(this.openTimeout); // Cancel any pending open command
            this.leaveTimeout = setTimeout(() => {
                this.isOpen = false;
                this.activeSubmenu = null; // Ensure submenu closes with parent
            }, this.leaveDelay);
        },

        // --- Methods for the submenus ---
        submenuEnter(index) {
            clearTimeout(this.submenuLeaveTimeout); // Cancel pending submenu close
            this.submenuOpenTimeout = setTimeout(() => { this.activeSubmenu = index; }, this.submenuOpenDelay);
        },
        submenuLeave() {
            clearTimeout(this.submenuOpenTimeout); // Cancel pending submenu open
            this.submenuLeaveTimeout = setTimeout(() => { this.activeSubmenu = null; }, this.submenuLeaveDelay);
        }
    }"
    class="relative inline-block text-start" 
    @mouseenter="dropdownEnter()" 
    @mouseleave="dropdownLeave()"
>
    <!-- Trigger Button -->
    <button 
        type="button"
        class="inline-flex items-center justify-center px-4 py-2 rounded-md border border-gray-300 bg-white text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        aria-haspopup="true"
        :aria-expanded="isOpen"
    >
        <span>{{ $label }}</span>
        <svg class="ms-2 -me-1 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
    </button>

    <!-- Dropdown Panel -->
    <div
        x-show="isOpen"
        x-cloak
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute z-20 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none inset-inline-end-0 ltr:origin-top-right rtl:origin-top-left"
        role="menu" aria-orientation="vertical"
    >
        <ul class="py-1" role="none">
            @foreach ($items as $index => $item)
                <li 
                    class="relative" 
                    @mouseenter="submenuEnter({{ $index }})" 
                    @mouseleave="submenuLeave()"
                >
                    @if(isset($item['children']))
                        <!-- Parent item with submenu -->
                        <div class="flex items-center justify-between w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-default">
                            <span>{{ $item['label'] }}</span>
                            <svg class="ms-3 h-4 w-4 text-gray-400 rtl:-rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" /></svg>
                        </div>

                        <!-- Submenu Panel -->
                        <div
                            x-show="activeSubmenu === {{ $index }}"
                            x-cloak
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute top-0 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 inset-inline-start-full ms-1"
                        >
                            <ul class="py-1" role="menu">
                                @foreach ($item['children'] as $child)
                                    <li>
                                        <a href="{{ $child['url'] ?? '#' }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ $child['label'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @else
                        <!-- Simple item -->
                        <a href="{{ $item['url'] ?? '#' }}" class="block w-full text-start px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ $item['label'] }}</a>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>