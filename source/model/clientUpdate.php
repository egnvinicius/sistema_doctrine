<?php

require_once  __DIR__ . '/../../config/bootstrap.php';
require_once  __DIR__ . '/../controller/client.php';

global $client;
global $entityManager;
global $erroCpf;

if(isset($_POST['update'])) {
    $client = $entityManager->find('Pessoa\client', $_POST['id']);

    $cpf    = $_POST['cpf'];
    $id     = $_POST['id'];
    $sql    = "SELECT COUNT(a.id) FROM Pessoa\client a WHERE a.cpf = ?1 and a.id <> ?2";
    $result = $entityManager->createQuery($sql)
                            ->setParameter(1, $cpf)
                            ->setParameter(2, $id)
                            ->getSingleScalarResult();

    if($result > 1){
       header('Location: ../view/clientEdit.php?id='.$id.'&cpf=1');

    } else {
        $client->setName($_POST['name']);
        $client->setCpf($cpf);
        $client->setUpdated();

        $entityManager->flush();
        header('Location: ../view/clientList.php?success=1');
    }
}