<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tipos, Vetores, Loops...</title>
</head>
	<body>
		<?php
		
			$vetor = array();
			$vetor[0] = 10;
			$vetor[1] = 11;
			$vetor[2] = 12;
			
			array_push($vetor, 13);
			array_push($vetor, 14);
			array_push($vetor, 16);
			
			$vetor['projeto'][0] = "Futxicaiada";
			$vetor['projeto'][1] = "Secreto";
			$vetor['mini-curso'] = "PHP e MyQL";			
			
			echo "<br />Quantidade de elementos: ".count($vetor);
			echo "<br />Quantidade de elementos no projeto: "
					.count($vetor['projeto']);
			
			/*for ($i=0;$i<count($vetor);$i++) {
				echo "<br />".$vetor[$i];
			}*/
						
			foreach ($vetor as $k => $item) {
				if (is_array($item)) {
					foreach($item as $k1 => $subitem) {
			echo "<br />pos: ".$k." ".$k1." ".$subitem;
					}
				}
				else {
					echo "<br />pos: ".$k." valor: ".$item;
				}
			}
			
			
			
			
			
			
			$vetor1 = array(0 => 10, 1 => 11, 2 => 12);
		
		
		
		
		
		
		
		
		
		
		$a = null;
		$a = "11";
		
		$b = false;
		
		//if ($b == true) {
		if ($b) { //forma abreviada
			echo "<br />B é verdadeiro!";
		}
		
		/*if (is_int($a)) {
		}*/
		
		//sempre vai entrar no if
		$a = "str"; //string não vazia
		$a = 111; //inteiro diferente de zero
		$a = null; //entra no else
		//isset() para saber se já foi declarada
		if (isset($c) && $c) { //se fizer esse tipo de teste
			echo "<br />Entrou no IF";
		}
		else {
			echo "<br />Entrou no else";
		}
		
		$d="false";
		//preciso saber se meu $d de fato é booleano ou não
		//if ($d===true) {
		if (is_bool($d) && ($d===true)) {
			echo "<br />d não é booleano ou não é verdadeiro";
		}
		else {
		
		}
		
		$e = "1024";
		$f = (int) $e;
		$g = 123;
		$h = (bool) $g;
		
		
		
		
		
		
		
		
		
		
		
	for ($i=11;$i<=40;$i++) {
		
		echo "<p style=\"font-size: ".$i."px\">PHP</p>";
		
	}
			
	for ($i=11;$i<=40;$i++) {
		?>
		<p style="font-size: <?php echo $i ?>px">PHP</p>
		<?php
	}
			
		
		?>
	</body>
</html>