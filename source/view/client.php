<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cad | Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<!-- inicio nav -->
<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cad</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="../../index.html">Home</a>
                    <a class="nav-link active" aria-current="page">Cadastro</a>
                    <a class="nav-link" href="clientList.php?success=0">Consulta</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- fim nav-->

<div class="w-100"></div>
<?php
if($_GET['success'] == 1){
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Registro incluído com sucesso!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
}
?>
<!-- inicio form -->
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Informações pessoais</h5>
        </div>
        <div class="modal-body">
            <div class="container">
                <form class="was-validated" action="../model/clientModel.php" method="post">
                    <div class="row">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome completo</label>
                            <input type="text" class="form-control" id="name-client" name="name" placeholder="Insira o nome completo" required>
                            <div class="valid-feedback">
                                Ok!
                            </div>
                            <div class="invalid-feedback">
                                Informe este campo!
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="number" class="form-control" id="cpf" name="cpf" placeholder="Somente números" max="99999999999" required>
                            <div class="valid-feedback">
                                Ok!
                            </div>
                            <div class="invalid-feedback">
                                Informe este campo!
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" name="update" class="btn btn-dark">Gravar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- fim form -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>