<?php

/**
 * Test Cases to check the entered number is Prime number or not.
 * 
 * 
 *  
 * @Date 04.06.2019
 * @author   Prativa Sahoo <prativasa86@gmail.com>
 */

use PHPUnit\Framework\TestCase;

class primemultiplicationTest extends TestCase
{  
    protected $primenum_cnt;
    protected function setUp()
    {
        $this->primenum_cnt = [];
    }
    public function testReturnPrimeTrue()
    {
        $this->assertTrue(2);
    }
}
?>