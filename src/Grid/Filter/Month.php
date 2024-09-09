<?php

namespace CodalityAdmin\Admin\Grid\Filter;

class Month extends Date
{
    /**
     * {@inheritdoc}
     */
    protected $query = 'whereMonth';

    /**
     * @var string
     */
    protected $fieldName = 'month';
}
