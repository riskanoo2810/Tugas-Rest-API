<?php

function getKey() {
    return ["2810", "key1", "apikeynya"];
}

function isValid($input) {
    $apikey = $input["api_key"];
    if (in_array($apikey, getKey())) {
        return true;
    } else {
        return false;
    }
}

function jsonOut($status, $message, $data) {
    $respon = ["status" => $status, "message" => $message, "data" => $data];

    header("Content-type: application/json");
    echo json_encode($respon);
}

function getFilm() {
    $film = [
        ["title" => "CONJURING1", "konten" => "film ini film The Conjuring 1"],
        ["title" => "CONJURING2", "konten" => "film ini The Conjuring 2"],
        ["title" => "CONJURING3", "konten" => "film ini film The Conjuring 3"]
    ];
    return $film;
}

if (isValid($_GET)) {
    jsonOut("berhasil", "apikey valid", getFilm());
} else {
    jsonOut("gagal", "apikey not valid!!!", null);
}

?>