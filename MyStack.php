<?php

class MyStack
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 10)
    {
        $this->stack = array();
        $this->limit = $limit;
    }
 
    public function push($value)
    {
        if (count( $this->stack) < $this->limit )
        {
            array_unshift($this->stack, $value);
        }
        else
        {
            throw new RunTimeException('The Stack is full..!!'); 
        }
    }
 
    public function pop()
    {
        if ( $this->isEmpty() )
        {
          throw new RunTimeException('The Stack is empty..!!');
        }
        else
        {
            return array_shift( $this->stack );
        }
    }
 
    public function top()
    {
        return current( $this->stack );
    }
 
    public function isEmpty()
    {
        return empty( $this->stack );
    }

}

?>