
<!DOCTYPE html>
<html>
<head>
	<title> AULA 2 </title>

<!--	<meta http-equiv="refresh" content="2"> -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcode/1.5.1/qrcode.min.js" integrity="sha512-PEhlWBZBrQL7flpJPY8lXx8tIN7HWX912GzGhFTDqA3iWFrakVH3lVHomCoU9BhfKzgxfEk6EG2C3xej+9srOQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!--
	<link rel="stylesheet" type="text/css" href="../form.css">
-->
<style>

@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap');


body{
	background-image: url("../imagens/consoler1.jpg");
	background-size: 2000px 2800px;
	background-repeat: no-repeat;
	background-attachment: fixed;
}

form{
	margin-top: 200px;
	width: 1300px;
	height: 750px;
	
	padding-top: 80px;
	padding-left: 200px;
	
	border-radius: 10px;
	background-color: #614F99;
	color: white;
}

#formulario{
	margin-left: 1550px;
	margin-top: 300px;
}

label{
	font-family: 'Nunito', sans-serif;
	font-size: 60px;
}

#campos{
	width: 450px;
	height: 70px;

	margin-top: -30px;
	margin-left: 150px;
	border-radius: 8px;
}

#btnCadastrar{
	margin-left: 350px;
	width: 350px;
	height: 85px;

    font-family: 'Nunito', sans-serif;
	font-size: 55px;
	color: white;
	background-color: #614F99;
	border: 0px;

}

#btnCadastrar:hover{
	background-color:white;
	color: #614F99;

	border: 2px solid #614F99;
	border-radius: 10px;
}

h3{
	margin-left: 1100px;
	font-family: 'Nunito', sans-serif;
	font-size: 100px;
	color: #614F99;

	margin-bottom: -50px;
}

</style>

</head>

<body>

<div id="formulario">

<h3>CRIAR CONTA</h3>

<form action="../model/salvar.php" method="POST" style="margin-left: 800px;">

<label>Nome</label>
<input type="text" name="nome" id="campos" placeholder="Seu Primeiro Nome">

<br>

<label>Telefone</label>
<input type="text" name="telefone" id="campos" style="margin-left: 95px;"> 

<br>

<label>Email</label>
<input type="email" name="email" id="campos" style="margin-left: 165px;">

<br>

<label>País</label>
<input type="text" name="país" id="campos" style="margin-left: 200px;">

<br><br><br><br><br><br> 

<input type="submit" name="cadastrar" value="Cadastrar" id="btnCadastrar">


</form>
</div>

</body>


</html>