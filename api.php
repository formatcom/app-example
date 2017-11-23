<?php

header('Content-Type: application/json; charset=utf8');

// Esto simula ser los datos de tu base de datos
$data = [
		Array('id' => 1, 'name' => 'vinicio'),
		Array('id' => 2, 'name' => 'ronnel')
	];

// Esto simula ser un insert, tu haces con los datos lo que se
// te de la gana

if(isset($_POST['name'])) {
	array_push($data, Array('id' => 3, 'name' => $_POST['name']));
}

print(json_encode($data));

?>
