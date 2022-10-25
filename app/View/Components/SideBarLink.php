<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SideBarLink extends Component
{
    public $name,$link,$icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name="Page Name",$link="#",$icon="fa-file")
    {
        $this->name=$name;
        $this->link=$link;
        $this->icon=$icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.side-bar-link');
    }
}
