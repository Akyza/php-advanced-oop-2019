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
            "6" => "Muse",
            "7" => "Codplay",
            "8" => "Mettalica",
            "9" => "Scorpion",
        );
        for($x=0; $x <= 5; $x++) {
            $rand = rand(1, 9);
            $tabFinale[] = array("Musiciens" => $tabMusiciens[$rand],
                                 "Groupes" => $tabGroupes[$rand]);
        }
        require ('views/musiciens.php');

    }
}