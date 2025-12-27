<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cardArticle extends Component
{
    public $date;
    public $time;
    public $title;
    public $image;
    public $description;
    public $routeLink;
    /**
     * Create a new component instance.
     */
    public function __construct($date, $time, $title, $image, $description, $routeLink)
    {
        $this->date = $date;
        $this->time = $time;
        $this->title = $title;
        $this->image = $image;
        $this->description = $description;
        $this->routeLink = $routeLink;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-article');
    }
}
