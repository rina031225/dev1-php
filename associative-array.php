<?php
    $languages = ["en"=>"English", "fr"=>"French"];

    // $languages =array("en"=>"English", "fr"=>"French");

    // $languages["en"] = "English";

    echo $languages["en"]; //English
    print_r($languages);

    foreach($languages as $key => $value){
        echo $key.": ".$value."<br>";
    }

    /*
        en: English
        fr: French



        $languages                              $key    $value
        ["en"=>"English", "fr"=>"French"]       en      English
                                                fr      French
     */

?>