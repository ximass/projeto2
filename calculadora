
<form method="post" action="">
            <input type="int" name="v1" placeholder="Digite o primeiro valor" />
            <select name="operacao">
                <option value="somar">+</option>
                <option value="subtrair">-</option>
                <option value="multiplicar">*</option>
                <option value="dividir">/</option>
            </select>
            <input type="int" name="v2" placeholder="Digite o segundo valor" />
            <input type="submit" name="action" value="Calcular" />
</form>
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

    $teste = new Calculadora();

    echo $teste->Calcular();

?>
