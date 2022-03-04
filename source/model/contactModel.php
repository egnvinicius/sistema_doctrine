<?php

require_once __DIR__ . '/../controller/contact.php';
require_once __DIR__ . '/../../config/bootstrap.php';

global $entityManager;

$client = $_POST['id'];
$type = $_POST['tipo'];
$desc = $_POST['desc'];

$newContact =  new Contato\contact;

$entityManager->beginTransaction();
$newContact->setClient($client);
$newContact->setType($type);
$newContact->setDescription($desc);
$entityManager->persist($newContact);
$entityManager->flush();
$entityManager->commit();

header('Location: ../view/contact.php?&id='. $client. '&success=1');