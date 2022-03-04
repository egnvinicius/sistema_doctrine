<?php
require_once __DIR__ . '/../model/contactUpdate.php';
require_once __DIR__ . '/../model/contactList.php';
require_once __DIR__ . '/../../config/bootstrap.php';
require_once __DIR__ . '/../controller/contact.php';

$contact = getContactById($_GET['id']);
$id = $contact[0]->getId();
$tipo = $contact[0]->getType();
$desc = $contact[0]->getDescription();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cad | Editar</title>
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
                <a class="nav-link" href="client.php">Cadastro</a>
                <a class="nav-link active" aria-current="page">Consulta</a>
            </div>
        </div>
        <div class="navbar-nav justify-content-end"">
        <a class="nav-link" href="clientList.php?success=0">Voltar</a>
    </div>
    </div>
</nav>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Editar</h5>
        </div>
        <form action="../model/contactUpdate.php" method="post">
            <div class="modal-body">
                <div class="row">
                    <div class="mb-3">
                        <label for="name" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="type" name="type" value="<?php echo $tipo ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label">Descrição</label>
                        <input type="text" class="form-control" id="desc" name="desc" value="<?php echo $desc ?>" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update" class="btn btn-primary" value="Gravar">
            </div>
        </form>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/client.js"></script>
</html>