<?php
include 'Cliente.class.php';
$cliente = new Cliente;
$cliente->setNome("Fabio Claret");
$meuCliente = $cliente ->getNome();

$cliente->conectar();
echo $meuCliente;
