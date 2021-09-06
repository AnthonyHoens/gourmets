<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Exhibitor extends Component
{
    public $tags;
    public $exhibitor;
    public $class;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tags, $exhibitor, $class)
    {
        $this->tags = $tags;
        $this->exhibitor = $exhibitor;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.exhibitor');
    }
}
