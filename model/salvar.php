
<?php
  include '../banco/conexao.php';
  $conectar = getConnection();
?>

<?php



if (isset($_POST['cadastrar'])) {

// FUNÇÃO    
$numero_de_bytes = 4;
$resultado_bytes = random_bytes($numero_de_bytes); 
// FUNÇÃO 


$n = 3;
function getName($n,$nome) {
    $characters = '0123456789'; // Valores que poderão fazer parte da senha.
    $randomString = '';
  
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index]; // Amazena o valor da posição $i da variável $characters 
        //$palavras = array('Adm', 'Téc', 'Op'); // Armazena Palavras Padrões
        //$aleatorio = rand(0, 2); // Gera as posições 0,1,2.  posições palavras. 
    }
  
    //return $palavras[$aleatorio]."-".$randomString;
    return $nome."@".$randomString;
}

/* ******************************* */

    $sql = 'INSERT INTO usuarios (nome,telefone,email,pais,usuario,senha) VALUES (:nome,:telefone,:email,:pais,:usuario,:senha)';

  
    $nome = $_POST['nome'];
    //$nome = $_POST['nome'];
    
    $telefone = filter_input(INPUT_POST, 'telefone',FILTER_SANITIZE_STRING);

    $email = $_POST['email'];//filter_input(INPUT_POST, 'email',FILTER_SANITIZE_NUMBER_INT);

    $pais = $_POST['país'];    

    $usuario = getName($n,$nome);
    $senha = bin2hex($resultado_bytes);


    $inserir = $conectar->prepare($sql);
    $inserir->bindParam(':nome', $nome);
    $inserir->bindParam(':telefone', $telefone);
    $inserir->bindParam(':email', $email);
    $inserir->bindParam(':pais', $pais);
    $inserir->bindParam(':usuario', $usuario);
    $inserir->bindParam(':senha', $senha);


    if($inserir->execute()){
        header("location: ../view/cadastro.php");        
    }else{
        echo ' Erro ao salvar!';        
    }




} else {
   echo ' Acho que não deu certo, Só acho !!!';
}

 

?>
