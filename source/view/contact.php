<?php
    require_once __DIR__ . '/../model/contactList.php';
    require_once __DIR__ . '/../model/clientListModel.php';
    require_once __DIR__ . '/../../config/bootstrap.php';

    $client  = getClientById($_GET['id']);
    $id      = $client[0]->getId();
    $nome    = $client[0]->getName();
    $cpf     = $client[0]->getCpf();
    $newCont = "contactNew.php?id=". $id;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cad | Contato</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Cad</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="../../index.html">Home</a>
                <a class="nav-link" href="client.php?success=0">Cadastro</a>
                <a class="nav-link active" aria-current="page">Consulta</a>
            </div>
        </div>
        <div class="navbar-nav justify-content-end">
            <a class="nav-link" href="clientList.php?success=0">Voltar</a>
        </div>
    </div>
</nav>
<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Contato</h5>
            <div class="justify-content-end">
                <a class="btn btn-sm btn-secondary" title="Novo contato" href="<?php echo $newCont ?>" >
                    <img src="https://img.icons8.com/ios/17/000000/add--v2.png"/>
                </a>
            </div>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-2">
                    <label for="id" class="form-label">Código</label>
                    <input type="text" class="form-control" id="id-client" name="id" value="<?php echo $id ?>" disabled>
                </div>
                <div class="col-7">
                    <label for="name" class="form-label">Nome completo</label>
                    <input type="text" class="form-control" id="name-client" name="name" value="<?php echo $nome?>" disabled>
                </div>
                <div class="col-3">
                    <label for="cpf" class="form-label">Cpf</label>
                    <input type="text" class="form-control" id="cpf-client" name="cpf" value="<?php echo $cpf?>" disabled>
                </div>
            <div>
        </div>
        <div class="modal-body">
            <table class="table table-hover" id="tableContacts">
                <tr>
                    <th class="col-md-2">Código</th>
                    <th class="col-md-5">Tipo</th>
                    <th class="col-md-4">Descrição</th>
                    <th class="col-md-2">...</th>
                </tr>
                <tbody>
                <?php
                    $contact = getContact($id);

                    if(is_iterable($contact)){
                        foreach ($contact as $key=>$val){
                            $edit   = "contactEdit.php?id=" .$val->getId();
                            $delete = "../model/contactDelete.php?id=" .$val->getId();
                            $id = $val->getId();
                            $tipo = $val->getType();
                            $descricao = $val->getDescription();

                            echo '<tr>';
                            echo '<td>'. $id .'</td>';
                            echo '<td>'. $tipo .'</td>';
                            echo '<td>'. $descricao .'</td>';
                            echo '<td>
                                       <a class="btn btn-sm btn-primary" href='.$edit .' title="Editar">
                                            <img src="https://img.icons8.com/small/16/000000/edit-property.png"/>
                                       </a>                                           
                    
                                       <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                          <img src="https://img.icons8.com/material-outlined/16/000000/trash--v1.png"/>
                                        </button>                                           
                                    </td>';
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <br>
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deseja realmente excluir o registro?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Após confirmação o registro não ficará mais disponível!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-sm btn-primary" data-bs-dismiss="modal">Cancelar</button>
                <a class="btn btn-sm btn-danger" href='<?php echo $delete ?>' id="btnDelete">
                    Confirmar
                </a>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/contact.js"></script>
</html>