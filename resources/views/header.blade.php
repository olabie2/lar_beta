 <header class="absolute top-0 left-0 w-full p-6">
            <nav class="container mx-auto flex justify-between items-center">
                <!-- Logo/Brand Name -->
                <a href="/{{ app()->getLocale() }}" class="text-xl font-bold tracking-tight text-zinc-800">
                    MyWebsite
                </a>
                
                <a href="/about">about</a>
                <!-- Language Switcher Dropdown -->
               <x-langSwitcherButton  />
            </nav>
</header>