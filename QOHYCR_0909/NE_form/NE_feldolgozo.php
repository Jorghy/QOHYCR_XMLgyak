<html>
	<body>
		<strong>Név: <?php echo $_POST["nev"]; ?></strong><br />
		<strong>PIN kód: <?php echo $_POST["pin"]; ?></strong><br />
		<strong>Kedvenc gyümölcs: <?php echo $_POST["gyumolcs"]; ?></strong><br />
		<strong>Életkor: <?php echo $_POST["eletkor"]; ?></strong><br />
		<strong>Lábméret: <?php echo $_POST["labmeret"]; ?></strong><br />
		<strong>Önbizalom: <?php echo $_POST["onbizalom"]; ?></strong><br />
		
		<input type="button" onclick="location.href='NE_form.html';" value="Vissza" />
	</body>
</html>