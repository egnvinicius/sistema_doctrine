<?php

require_once __DIR__ . '/../../config/bootstrap.php';
require_once __DIR__ . '/../controller/client.php';

function getClient(){
    global $entityManager;
    $clientRepository = $entityManager->getRepository('Pessoa\client');
    return $clientRepository->findAll();
}

function getClientById($id){
    global $entityManager;
    $clientRepository = $entityManager->getRepository('Pessoa\client');
    return $clientRepository->findBy(array('id' => $id));
}