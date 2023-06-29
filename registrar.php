<?php

setlocale(LC_CTYPE, "pt_BR.ISO-8859-1");

$r = $_REQUEST["r"];

$arquivo = "atividade.txt";

$arq2 = fopen($arquivo,"a+");
fwrite($arq2, "\n".$r);
fclose($arq2);


echo "registrada"
?>