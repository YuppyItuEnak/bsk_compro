<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cardProduct extends Component
{
    public $title;
    public $harga;
    public $image;
    public $description;
    public $routeLink;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $harga, $image, $description, $routeLink)
    {
        $this->title = $title;
        $this->harga = $harga;
        $this->image = $image;
        $this->description = $description;
        $this->routeLink = $routeLink;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-product');
    }
}
