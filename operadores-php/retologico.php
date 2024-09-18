
<?php

$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

// resultados

$es_un_michi_grande && $le_gusta_comer; #verdadero

$es_un_michi_grande || $sabe_volar; # verdadero

$sabe_volar || $tiene_2_patas; #falso

!$le_gusta_comer; # falso

!$le_gusta_comer || $es_un_michi_grande; // verdadero

