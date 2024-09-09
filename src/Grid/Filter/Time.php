<?php

namespace CodalityAdmin\Admin\Grid\Filter;

class Time extends Date
{
    /**
     * {@inheritdoc}
     */
    protected $query = 'whereTime';

    /**
     * @var string
     */
    protected $fieldName = 'time';
}
