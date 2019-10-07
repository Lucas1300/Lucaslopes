<?php

   spl_autoload_register(
        function($classe){
            require "cl_$classe.php";
        }
    );

    ?>