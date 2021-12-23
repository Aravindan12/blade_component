<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $message;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = null,$message)
    {
        //
        $this->type = $type;
        $this->message = $message;
    }
    public function typeClass(){

        if($this->type == "error"){
            return "bg-danger";
        }else{
            return "bg-primary";
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
