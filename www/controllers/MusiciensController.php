<?php
declare(strict_types = 1);

namespace controllers;

class MusiciensController
{
    public function defaultAction(){
//        $tabFinale = [];
        $tabMusiciens = array(
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
        $tabGroupes = array(
            "1" => "ACDC",
            "2" => "Pink Floyd",
            "3" => "Skillet",
            "4" => "ABA",
            "5" => "Queen",
        );
        for($x=0; $x <= 5; $x++) {
            $randMusicien = rand(1, 9);
            $randGroupe = rand(1,5);
            $tabFinale[] = array("Musiciens" => $tabMusiciens[$randMusicien],
                                 "Groupes" => $tabGroupes[$randGroupe]);
        }
        require ('views/musiciens.php');

    }
}