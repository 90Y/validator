<?php
/**
 * epregboy/validator
 * for check params
 */
namespace epregboy\validator;

class validator implements validInter
{
    protected $valid;

    public function __construct($valid)
    {
        $this->valid = $valid;
    }

    public function verify(array $data)
    {
        var_dump($data);
    }
}
