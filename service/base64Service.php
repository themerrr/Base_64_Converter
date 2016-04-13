<?php
/**
 * Created by PhpStorm.
 * User: themer
 * Date: 12/04/16
 * Time: 12:07 م
 */
namespace base64ConverterBundle\Services;

    class base64Service
    {
        private $file;

        public function __construct($container)
        {
            $this->container=$container;
        }


        public function imageToBase64($file)
        {
            $this->file=$file;

            $im = file_get_contents($file);

            return(base64_encode($im));

        }

        public function Base64ToImage($base64,$file)
        {

            $ifp = fopen($file, "wb");

            $data = explode(',', $base64);

            fwrite($ifp, base64_decode($data[0]));
            fclose($ifp);

            return $file;
        }


    }
