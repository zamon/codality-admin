<?php

namespace CodalityAdmin\Admin\Form\Field;

use CodalityAdmin\Admin\Form\Field;

class Display extends Field
{
    public function prepare($value)
    {
        return $this->original();
    }
}
