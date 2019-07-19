<?php
declare(strict_types = 1);

namespace controllers;


class MusiciensController
{
    public function defaultAction(){
        $tempTest = [];
        $test = array(
            "1" => "Toto",
            "2" => "Titi",
            "3" => "Tata",
            "4" => "Tutu",
            "5" => "Yolo",
            "6" => "Musi",
            "7" => "Nom",
            "8" => "Min",
            "9" => "Max",
        );
        for($x=0; $x <= 5; $x++) {
            $rand = rand(1, 9);
            $tempTest[] = $test[$rand];
        }
        echo implode(' ', $tempTest);
    }
}