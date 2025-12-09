<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cardWidget extends Component
{

    public $title;
    public $description;
    public $nameIcon;

    /**
     * Create a new component instance.
     */
    public function __construct($title, $description, $nameIcon = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->nameIcon = $nameIcon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-widget');
    }
}
