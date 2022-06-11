<?php

include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUS.php';

$cpf = '12345678911'; 
$docX = '12345678901234'; 

$br = new ValidarBR();
$br->validarDocumento($cpf);

$us = new ValidarUS();
$us->validarDocumento($docX);

echo 'Funcionou';
