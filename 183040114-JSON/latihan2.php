<?php

$data = file_get_contents('../183040114-JSON/json/coba.json');
$mahasiswa = json_decode($data, true);

var_dump($mahasiswa);
