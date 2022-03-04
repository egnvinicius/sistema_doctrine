<?php
require_once __DIR__ . '/../../config/bootstrap.php';
require_once __DIR__ . '/../controller/contact.php';

function getContact($client){
    global $entityManager;
    $contactRepository = $entityManager->getRepository('Contato\contact');
    return $contactRepository->findBy(array('client' => $client));
}

function getContactById($id){
    global $entityManager;
    $contactRepository = $entityManager->getRepository('Contato\contact');
    return $contactRepository->findBy(array('id' => $id));
}