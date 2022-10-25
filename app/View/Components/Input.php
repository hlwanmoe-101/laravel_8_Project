<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $name,$title,$type,$value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name="input Name",$title="title",$type="text",$value=null)
    {
        $this->name=$name;
        $this->title=$title;
        $this->type=$type;
        $this->value=$value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
