<?php
function html_to_unicode($string)
{   
    $codes = array(
        '&aacute;' => '\u00E1', // á
        '&eacute;' => '\u00E9', // é
        '&iacute;' => '\u00ED', // í
        '&oacute;' => '\u00F3', // ó
        '&uacute;' => '\u00FA', // ú
        '&ntilde;' => '\u00F1', // ñ
        '&Aacute;' => '\u00C1', // Á
        '&Eacute;' => '\u00C9', // É
        '&Iacute;' => '\u00CD', // Í
        '&Oacute;' => '\u00C3', // Ó
        '&Uacute;' => '\u00DA', // Ú
        '&Ntilde;' => '\u00D1', // Ñ
        '&iexcl;'  => '\u00A1', // ¡
        '&iquest;' => '\u00BF'  // ¿
    );
    return strtr($string, $codes);
}