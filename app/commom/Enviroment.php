<?php
    namespace App\Commom;

    class Enviroment{

        //metodo responsavel por carregar as variaveis de ambiente do projeto
        public static function load($dir){
            //VERIFICA se o arquivo .env existe

            if(!file_exists($dir.'/.env')){
                
                return false;
            }

            //DEFINE AS VARIAVEIS DE AMBIENTE

            $lines = file($dir.'/.env');

            foreach($lines as $line){
                putenv(trim($line));
            }
        }

    }
