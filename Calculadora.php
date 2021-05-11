<?php
    class Calculadora {
        public function Calcular() {

            if (isset($_POST['action'])) {

               switch ($_POST['operacao']){
                   case 'somar':
                        $resultado = $_POST['v1'] + $_POST['v2'];
                        return $resultado;
                        break;

                    case 'subtrair':
                        $resultado = $_POST['v1'] - $_POST['v2'];
                        return $resultado;
                        break;

                    case 'multiplicar':
                        $resultado = $_POST['v1'] * $_POST['v2'];
                        return $resultado;
                        break;

                    case 'dividir':
                        $resultado = $_POST['v1'] / $_POST['v2'];
                        return $resultado;
                        break;
                    
               }
            }
        }
    }
?>