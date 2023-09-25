<?php
class MyClass
{
    // Constructor
    public function __construct($nums)
    {
        // Create member variables
        $this->$nums = $nums;
        $this->$size = count($nums);
    }

    public function getLength()
    {
        return $this->$size;
    }

    public function getDoubleLength()
    {
        return 2 * $this->getLength();
    }
}

$myObj = new MyClass([1, 2, 3]);
echo $myObj->getLength() . PHP_EOL;
echo $myObj->getDoubleLength() . PHP_EOL;
