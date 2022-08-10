<?php


namespace App\Http\Classes;


class MegaChild extends MegaParent
{
    public function doStuff() {
        print_r('stuff');
    }

    public static function doStaticStuff() {
        print_r(__CLASS__);
    }
}
