<?php

require_once  __DIR__ . '/../../config/bootstrap.php';
require_once  __DIR__ . '/../controller/contact.php';

global $contact;
global $entityManager;

if(isset($_POST['update'])) {
    $contact = $entityManager->find('Contato\contact', $_POST['id']);

    $client = $contact->getClient();

    $contact->setDescription($_POST['desc']);
    $entityManager->persist($contact);
    $entityManager->flush();

    header('Location: ../view/contact.php?id='. $client);
}