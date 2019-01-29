<html>
	<head>

	</head>
	<body> 
		<h1>Message</h1>
			<p>
				<?php 
				if (isset($_POST["message"])){
					$message = $_POST['message'];
					if($message == ""){
						echo "Vous n'avez rien saisi";
					}
					else{
						echo "Vous avez saisi \"".$message."\""; 
					}
				}
				else{
					echo "Vous n'avez rien saisi";
				}
				?>
			</p>
		<form action="index.php" method="post">
			 <input type="text" name="message" />
			 <input type="submit" value="Envoyer">
		</form>
	</body>
</html>

