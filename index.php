<?php
session_start();

@$user=$_POST["number"];
@$pass=$_POST["pass"];
@$valider=$_POST["submit"];

if(isset($valider)){

 if($user=="9588593686" && $pass=="879035"){
 $_SESSION["autoriser"]="oui";
 header("location:Solde.php");
 }
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Connexion - Mon compte BNP la banque d'un monde qui change</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
		<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet">
		<link href="https://www.fonts.com/font/yellow-design-studio/veneer-clean" />

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   		 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  
<link rel="stylesheet" type="text/css" href="Style.css"/>

<script type="text/javascript" src="Java.js"></script>

	</head>
	<body>
	<div class="navbar">
	<img src="https://logos-marques.com/wp-content/uploads/2020/12/BNP-Paribas-logo.png"></a>
	</div>
	
	<form method="POST" action="">
	<div class="slog">
	<h1>ACCEDER À MON<br/>COMPTE</h1>
	<div class="log">
	<label><strong>1. Mon numero client</strong><br/>
	<input type="tel" name="number" id="i" maxlength="10"></label><br/>
	<label><strong>2. Mon code secret (6 chiffres)</strong><br/>
	<input type="password" pattern="[0-9]*" inputmode="numeric" maxlength="6" name="pass" id="o" onclick="dlt()"></label>
	
<!--	<div class="tab">
	<table class="car">
	<tr>
	<td><button class="y" onclick="a()">0</button></td>
	<td><button class="y"onclick="b()">1</button></td>
	<td><button class="y"onclick="c()">2</button></td>
	<td><button class="y"onclick="d()">3</button></td>
	<td><button class="y"onclick="e()">4</button></td>
	</tr>
	<tr>
	<td><button class="y"onclick="f()">5</button></td>
	<td><button class="y"onclick="g()">6</button></td>
	<td><button class="y"onclick="h()">7</button></td>
	<td><button class="y"onclick="i()">8</button></td>
	<td><button class="y"onclick="j()">9</button></td>
	</tr>
	</table>
	</div>-->
	
	
	
	
	<button name="submit" class="b"><strong>Acceder a mes Comptes</strong></button>
	</div>
	</div>
	</form>
	
	<div class="info">
	<p><strong>vos codes d'acces</strong></p>
	<a href="">obtenir ses code d'acces<br/></a>
<a href="">code secret oublier</a><br/><br/>

	</div>
	<div class="suite">
<hr style="color:#C0C0C0">
	<p><strong>conseils de securite</strong></p>
	<p>verifier que l'adresse du site commennce bien par:</p>
<br />
<p>https://connexion-mabanque.bnpparibas</p>
<br />
<p>preceder par une icone cadenas et contient un <strong>https://</strong>qui garantiront une connexion securiser</p>
<a href="#">decouvrez nos conseil securite</a><p>et les bonne pratiques pour consulter et<br/>identifier les dangers du web.</p>
<hr style="color:#C0C0C0">
<p</strong>pour une meilleure accessibilité</strong></p><br/>
<a href="#">connectez-vous</a><p>grace a la grille contrastée agrandi et beneficiez d'un accompagnement vocale</p><br/>
<a href="#">utilisez facil'iti</a><p>pour personnaliser l'affichage en fonction de votre situation (handicap visuel et cognitif).</p><br/>
<hr style="color:#C0C0C0">
<p><strong>Information client</strong></p>
<p>Si vous rencontrez des problèmes techniques lors de votre navigation, nous vous invitons à contacter nos conseillers en ligne au :<br/>

ou à nous signaler un problème technique. 
Vous pouvez également gérer vos comptes depuis votre mobile ou votre tablette via l'application Mes comptes.</p>
	</div>
	
	
	
<!--	<footer>
<center><p style="color:white;font-weight:500;">suivez-nous sur:</p></center>-->
<div class="follow">

</div>
	
	</footer>
	</body>
</html>