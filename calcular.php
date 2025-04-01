<?php
include "funcao.php";

$_POST['numero1'];
$_POST['numero2'];
$_POST['op'];
$resultado;

switch($_POST['op']){
    case '+':
        $resultado = soma($_POST['numero1'], $_POST['numero2']);
        break;
    case '-':
        $resultado = sub($_POST['numero1'], $_POST['numero2']);
        break;
    case '*':
        $resultado = mult($_POST['numero1'], $_POST['numero2']);
        break;
    case '/':
        $resultado = div($_POST['numero1'], $_POST['numero2']);
        break;
    default: //default sempre fica em ultimo 
        $resultado="Operação inválida";
        break;
}

?>

<div class="row">
    <div class="col bg success">total: <?php echo $resultado?></div>
</div>
