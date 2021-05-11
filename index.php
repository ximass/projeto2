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
    include_once("Calculadora.php");

    $calculadora = new Calculadora();

    echo $calculadora -> Calcular();

?>