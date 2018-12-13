
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> mjailton - erp</title>

        <link  rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style.css">
        <link  rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/grade.css">		

        <script type="text/javascript" src="<?php echo URL_BASE ?>assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo URL_BASE ?>assets/js/js.js"></script>


    </head>
    <body>
        <?php include "cabecalho.php" ?>;
        <?php include "menu.php" ?>;
        <section>
            <div class="conteudo">
                <div class="base-centro">
                    <?php $this->load($view, $viewData) ?>;
                </div>
            </div>
        </section>
    </body>
</html>
