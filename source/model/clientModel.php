<?php

require_once __DIR__ . '/../../config/bootstrap.php';
require_once __DIR__ . '/../controller/client.php';
require_once __DIR__ . '/../controller/contact.php';

global $entityManager;

$newClient = new Pessoa\client();

$name = $_POST['name'];
$cpf = $_POST['cpf'];
$telefone = $_POST['phone'];
$email = $_POST['mail'];

/*Cliente*/
$entityManager->beginTransaction();
$newClient->setName($name);
$newClient->setCpf($cpf);
$newClient->setUpdated();
$newClient->setCreated();
$entityManager->persist($newClient);
$entityManager->flush();
$entityManager->commit();

header('Location: ../view/client.php?&success=1');