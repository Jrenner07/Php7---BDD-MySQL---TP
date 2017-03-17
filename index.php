<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> App Web </title>
		<link rel="stylesheet" href="css.css" >
	</head>

	<body>
		<div class="cadre" align="center">
			<h2> Connection <br/></h2>
			<link rel="stylesheet"  href="css.css" >
			<br/>
			<form method="POST" action="login.php">
				<table>
					<tr>
						<td align="right">
							<label for="pseudo">Pseudo :</label>
						</td>
						<td>
							<input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" required/>
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="password">Mot de passe :</label>
						</td>
						<td>
							<input type="password" placeholder="Votre mot de passe" id="password" name="password" required/>
						</td>
					</tr>
					<tr>
						<td></td>
						<td align="left">
							<br/>
							<input type="submit" value="Connection" />
						</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>
