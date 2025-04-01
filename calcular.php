<?php
include "funcao.php";

$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];
$operacao = $_POST['op'];
$resultado;

switch($operacao){
    case '+':
        $resultado = soma( $num1,$num2);
        break;

    case '-':
        $resultado = sub( $num1,$num2);
        break;
    
    case '/':
        $resultado = div( $num1,$num2);
        break;
    
    case '*':
        $resultado = mult( $num1,$num2);
        break;
    
    default: //default sempre fica em ultimo 
        $resultado="";
        break;
}
?>

<div class="row">
    <div class="col bg success">total: <?php echo $resultado?></div>
</div>