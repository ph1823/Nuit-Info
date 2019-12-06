
<?php

if(!file_exists("users.json"))
    file_put_contents("users.json", "{}");

$users = json_decode(file_get_contents("users.json"), true);

$users["THomas"] = array("password" => "encryptedpasscord", "age" => 18, "mail" => "pdgdegoogle@gmail.com", "school" => "Univ BDX", "formation" => "MISIPCG", "state" => 1,
 "job" => true, "jobIncome" => 100, "monthIncome" => 500, 
"monthExpends" => ["feed" => 10, "rent" => 300,"moving" => 20, "other" => 10]);
var_dump($users);
?>
