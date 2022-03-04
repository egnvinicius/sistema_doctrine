<?php
require_once __DIR__ . '/../../config/bootstrap.php';
require_once __DIR__ . '/../controller/contact.php';

global $entityManager;

$id = $_GET['id'];

if(isset($id)){
    $contact = $entityManager->find('Contato\contact', $id);

    $client = $contact->getClient();

    $entityManager->remove($contact);
    $entityManager->flush();

    header('Location: ../view/contact.php?id='. $client);
}