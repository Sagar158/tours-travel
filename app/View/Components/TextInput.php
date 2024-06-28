<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextInput extends Component
{
    public $name;
    public $type;
    public $placeholder;

    public $disabled;

    public $value;

    public $extraLabelClass;

    /**
     * Create a new component instance.
     */
    public function __construct($name, $type, $placeholder = '', $disabled = false, $value = '', $extraLabelClass = '')
    {
        $this->name = $name;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->disabled = $disabled;
        $this->value = $value;
        $this->extraLabelClass = $extraLabelClass;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.text-input');
    }
}
