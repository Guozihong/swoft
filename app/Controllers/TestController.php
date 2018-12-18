<?php

namespace App\Controllers;

/**
 *  @Controller("demo")
 */
class DemoController
{
    /**
     * @RequestMapping("index")
     */
    public function index(Request $request)
    {
        return 'test';
    }
}