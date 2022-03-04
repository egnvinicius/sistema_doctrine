<?php
    require_once __DIR__ . '/../model/clientListModel.php';
    global $entityManager;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cad | Consulta</title>
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
    </div>
</nav>
<?php
if($_GET['success'] == 1){
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Registro atualizado com sucesso!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
}
?>
<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Pessoas</h5>
        </div>
        <div class="modal-body">
            <table class="table table-hover" id="tableClients">
                <tr>
                    <th class="col-md-2">Código</th>
                    <th class="col-md-5">Nome</th>
                    <th class="col-md-4">Cpf</th>
                    <th class="col-md-2">...</th>
                </tr>
                <tbody id="registros">
                    <?php
                        $clients = getClient();

                        if (is_iterable($clients)) {
                            foreach ($clients as $key=>$val){
                                $edit   = "clientEdit.php?id=" .$val->getId().'&cpf=0';
                                $delete = "../model/clientDelete.php?id=" .$val->getId();
                                $id = $val->getId();

                                echo "<tr ondblclick='redirect($id)'>" ;
                                echo '<td id="id">'. $id .'</td>';
                                echo '<td id="name">'. $val->getName() .'</td>';
                                echo '<td id="cpf">'. $val->getCpf() .'</td>';
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
</div>
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
<script src="js/client.js"></script>
</html>