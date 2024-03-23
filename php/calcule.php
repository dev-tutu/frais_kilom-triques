<?php

    class Calculator {
        public static function calculate($formule) {
            return eval("return $formule;");
        }
    }
    
?>
