<?php

namespace App;

class Guest
{
    public $id;

    public function __construct(Request $request)
    {
        $this->id = $request->ip();
    }
}
