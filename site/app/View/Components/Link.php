<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Link extends Component
{
    public $active;
    public $href;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($active, $href)
    {
        $this->active = $active;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.link');
    }
}
