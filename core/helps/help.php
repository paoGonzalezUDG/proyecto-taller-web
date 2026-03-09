<?php
    /**
     * [str_replace_string description]
     *
     * @param  [type] $search  [description]
     * @param  [type] $replace [description]
     * @param  [type] $subject [description]
     * @return [type]          [description]
     */

    function str_replace_string($search, $replace, $subject)
    {
        //$replace puede venir vacio
        if(!empty($search) && !empty($subject)){
            return str_replace($search, $replace, $subject);
        }
    }

    /**
     * [generate_username description]
     * 
     * @param  integer $length   [description]
     * @param  string  $password [description]
     * @return [type]            [description]
     */

    function generate_username($length = 6,$password = '') {
        // Conjunto de caracteres de la contraseña, puede agregar los caracteres que necesita.
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

        for ( $i = 0; $i < $length; $i++ )
        {
            // Aquí ofrece métodos de adquisición de dos caracteres.
            // El primero es cualquiera de los caracteres en $ caracteres utilizando SUBSTR;
            // El segundo es cualquier elemento de tomar un grupo de números de personajes $ caracteres
            // $password .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
            $password .= $chars[ mt_rand(0, strlen($chars) - 1) ];
        }

        return $password;
    }