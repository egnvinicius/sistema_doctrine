<?php
require_once __DIR__ . '/../../config/bootstrap.php';
require_once __DIR__ . '/../controller/client.php';

global $entityManager;

$id = $_GET['id'];

if(isset($id)){
    $client = $entityManager->find('Pessoa\client', $id);
    $entityManager->remove($client);
    $entityManager->flush();

    header('Location: ../view/clientList.php?success=0');
}