<?php
require_once __DIR__ . '/../../config/bootstrap.php';

$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cad | Novo contato</title>
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
            <h5 class="modal-title">Novo contato</h5>
        </div>
            <form action="../model/contactModel.php" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3">
                            <label for="name" class="form-label">Tipo</label>
                            <select class="form-select" aria-label="Default select example" name="tipo">
                                <option value="1">Telefone</option>
                                <option value="2">Email</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="desc" class="form-label">Descrição</label>
                            <input type="text" class="form-control" id="desc" name="desc" required>
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
