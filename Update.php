<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>Cursos gratuítos de desenvolvimento Android</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="src/css/landing-page.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="src/js/jquery.mask.min.js" type="text/javascript"/>
    </script>
    <script src="src/js/jquery.validate.min.js"></script>

    <?php
    include_once('Controller/Produtocontroller.php');
    $prod = new Produtocontroller();
    $dados = $prod->filtro($_POST['id']);

    ?>

</head>
<script>


</script>
<main class="terms-wrapper">


        <div class="mobile-app" id="formContainer2">
            <h3 class="form-title">
                <center>Registro de Solicitação</center>
            </h3>
            <form action="request.php" enctype="multipart/form-data" id="form" method="post"
                  name="contentForm">
                <input class="form-control" id="metodo" name="metodo" required size="" type="hidden" value="update">
                <input class="form-control" id="idprod" name="idprod" required size="" type="hidden"
                       value="<?php echo $dados[0]['idprod'] ?>">
                <div class="formAside">
                    <div class="form-group">
                        <label for="produto">Produto<span
                                    class="asteriks">&nbsp;*</span></label><input class="form-control"
                                                                                  id="produto" name="produto"
                                                                                  required size=""
                                                                                  type="text"
                                                                                  value="<?php echo $dados[0]['nome'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="preco">Preço<span class="asteriks">&nbsp;*</span></label>
                        <input class="form-control validate[required]" id="preco" name="preco" required size=""
                               type="text" value="<?php echo $dados[0]['preco'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria<span class="asteriks">&nbsp;*</span></label>
                        <select class="form-control validate[required]" name="categoria" id="categoria">
                            <?php
                            include_once('Controller/Produtocontroller.php');
                            $prod = new Produtocontroller();
                            $dados = $prod->busca();

                            foreach ($dados as $key => $value) {

                                echo "<option value='{$dados[$key]['idcateg']}'>{$dados[$key]['categoria']}</option>";

                            }
                            ?>

                        </select>
                    </div>


                    <div class="text-center ct-u-paddingTop30">

                        <input class="btn btn-large btn-motive submit " type="submit"
                               value="Gravar">
                    </div>
                </div>
            </form>


        </div>

    </div>
    </div>
    </div>
    </div>
</main>
</body>
</html>
