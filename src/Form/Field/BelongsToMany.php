<?php

namespace CodalityAdmin\Admin\Form\Field;

use CodalityAdmin\Admin\Form\Field\Traits\BelongsToRelation;

class BelongsToMany extends MultipleSelect
{
    use BelongsToRelation;

    protected $relation_prefix = 'belongstomany-';
    protected $relation_type = 'many';
    protected $multiple = true;

    protected function getOptions()
    {
        $options = [];

        if ($this->value()) {
            $options = array_combine($this->value(), $this->value());
        }

        return $options;
    }
}
