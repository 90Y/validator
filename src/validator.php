<?php
/**
 * epregboy/validator
 * for check params
 */
namespace epregboy\validator;

class validator
{
    protected $valid;

    protected $data;

    public function __construct($valid, $data)
    {
        $this->valid = $valid;
        $this->data = $data;
    }
}
