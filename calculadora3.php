<!-- Método: $_POST | Action em branco porque executaremos na própria página -->
<form method="post" action="">
            <!-- Input que receberá o primeiro valor a ser calculado -->
            <input type="int" name="v1" placeholder="Digite o primeiro valor" />

            <!-- Select com o tipo de operação (Somar, Diminuir, Multiplicar ou Dividir -->
            <select name="operacao">
                <option value="somar">+</option>
                <option value="subtrair">-</option>
                <option value="multiplicar">*</option>
                <option value="dividir">/</option>
            </select>

            <!-- Input que receberá o segundo valor a ser calculado -->
            <input type="int" name="v2" placeholder="Digite o segundo valor" />

            <!-- Input que enviará os valores para a função de cálculo -->
            <input type="submit" name="action" value="Calcular" />
</form>
<?php
    # classe :: Calculadora
    class Calculadora {

        # Função "Calcular" para executar o cálculo dos valores (v1 e v2)
        public function Calcular() {

            # Se for setado algum valor ao submit (doCalc), executa a operação
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

    # Instancia a classe CALCULADORA()
    $teste = new Calculadora();

    # Executa a função
    echo $teste->Calcular();

?>