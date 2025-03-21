<body>
	<h2>Calculadora bàsica en PHP</h2>
	<form method="post" action=""></form>
		<label for="numero1">Nùmero 1:</label>
		<input type="number" name="numero1" id="numero1" required>
		<br><br>
		<label for="numero1">Nùmero 2:</label>
		<input type="number" name="numero2" id="numero2" required>
		<br><br>
		<label for="operation">Operaciòn:</label>
		<select name="operacion" id="operacion">
			<option value="suma">Suma</option>
			<option value="resta">Resta</option>
			<option value="multiplicacion">Multiplicaciòn</option>
			<option></option>
		</select>
		<br><br>
		<button type="submit" name="calcular">Calcular</button>
	</form>
	<br>
</body>

<?php
	if(isset($_POST['calcular'])){ // Usar corchetes []
		$numero1 = $_POST['numero1']; // Usar corchetes []
		$numero2 = $_POST['numero2']; // Usar corchetes []
		$operacion = $_POST['operacion']; // Usar corchetes []
		$resultado = null;
		$error = "";

		if(is_numeric($numero1) && is_numeric($numero2)){
			switch($operacion){
				case "suma":
					$resultado = $numero1 + $numero2;
					break;
				case "resta":
					$resultado = $numero1 - $numero2; // Corregir la variable $numero
					break;
				case "multiplicacion":
					$resultado = $numero1 * $numero2;
					break;
				case "division":
					if($numero2 != 0){ // Corregir comillas y sintaxis
						$resultado = $numero1 / $numero2;
					} else{
						$error = "Error: No se puede dividir por cero.";
					}
					break;
				default:
					$error = "Operación no válida";
			}
		} else{
			$error = "Por favor, ingresa números válidos.";
		}
		if($error != ""){
			echo "<p style='color:red;'>$error</p>"; // Corregir comillas
		} else{
			echo "<h3>Resultado: $resultado</h3>"; // Corregir comillas y cierre de etiqueta
		}
	}
?>
