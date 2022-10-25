<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Vimage extends Component
{
    public $gall,$big,$small;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($gall=null,$big=null,$small=null)
    {
        $this->gall=$gall;
        $this->big=$big;
        $this->small=$small;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.vimage');
    }
}
