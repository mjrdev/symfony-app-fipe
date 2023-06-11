<?php
namespace App;

class App 
{
    public function __construct(
        private readonly mixed $ok
    ) {

    }

    public function test() {
        try {
         //code here
        } catch (\Exception $e) {
          throw $e;
        }
    }
}

