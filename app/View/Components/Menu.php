<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
    public $label;
    public $items;
    public $color;

    public function __construct($label = "Menu", $items = [], $color = "bg-white")
    {
        $this->label = $label;
        $this->items = $items;
        $this->color = $color;
    }

    public function render()
    {
        return view('components.menu');
    }
}
