<?php

use controllers\Pessoa;

include_once("./controllers/Pessoa.php");

$pessoa = new Pessoa();

echo json_encode($pessoa->todos());