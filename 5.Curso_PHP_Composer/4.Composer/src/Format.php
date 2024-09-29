<?php

namespace Text; 

/** 
 * Se recomienda que la clase tenga el mismo nombre del archivo.
 * Esta función recibe un valor y por medio de strtoupper la convetimos
 * MAYUSCULAS
*/
class Format{

    public static function upperText($value)
    {
        return strtoupper($value);
    }

    public static function lowerText($value)
    {
        return strtolower($value);
    }
}
