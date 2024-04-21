<?php
    require_once "topo.php";
?>

<?php
// navegação do site
    if(isset($_GET['p'])){
        $p = $_GET['p'];
        // echo "Escolhi a página " .$p;
        switch($p){
            case 1: require_once "meio.php";
            break;
            case 2: require_once "catalogo.php";
            break;
            case 3: require_once "faleConosco.php";
            break;
            case 4: require_once "login.php";
            break;
            case 5: require_once "cadastro.php";
            break;
            case 6: require_once "cadastroItem.php";
            break;
            case 7: require_once "alugar.php";
            break;
            case 8: require_once "pagamento.php";
            break;
            
            default: require_once "404.php";
        }
    } 
    else{
        require_once "meio.php";
    }
    
?>

<?php
    require_once "rodape.php";
?>