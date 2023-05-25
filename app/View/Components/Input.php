<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $label;
    public $type;
    public $value;
    public $error;
    /**
     * Create a new component instance.
     */
    public function __construct($name,$label,$type,$value=null,$error=null)
    {
        $this->name=$name;
        $this->label=$label;
        $this->type=$type;
        $this->value=$value;
        $this->error=$error;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
