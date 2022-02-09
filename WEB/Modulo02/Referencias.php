<?php 
    // HEADER
    include('layout/header.php');
?>
<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

        <div id="main">
            <!-- NAV TOP -->
            <?php include('layout/nav.php') ?>
            <!-- CONTEUDO INICIO -->
            <div class="main-content container-fluid">
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">
                    
                            <h2 class="Titulo">REFERÊNCIAS</h2>
                            <hr>

                            <p></p>

                            <p class="Texto">ALLEN, Steve. <strong>Aprenda como Einstein.</strong> 2017.</p>

                            <p class="Texto">JONES, Ryan. <strong>Produtividade para Procrastinadores.</strong> Editora Amazon, 2020.</p>

                            <p class="Texto">LAWRENCE, Steven. <strong>O poder da execução de metas.</strong> 2019.</p>

                            <p class="Texto">MOURA, Jaqueline. <strong>O poder do Não.</strong> Editora Ristretto, 2021.</p>

                            <p class="Texto">RIBEIRO, Haroldo. <strong>Bíblia do 5S, da implantação à excelência: conheça a metodologia que levou empresas no Brasil a serem benchmarking mundiais em 5S.</strong> Casa da Qualidade, 2006.</p><br>

                            <p class="Texto"><strong>Leitura adicional sugerida:</p>

                            <p>Leia o livro Estratégias práticas para ganhar mais tempo, Christian Barbosa, Editora Sextante.</p><br><br>

                          
          
                            <!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });                    
                            </script>

                        </div> <!-- CLASS PAGE TITLE FIM -->
                    </div> <!-- End col-md-10 -->

                    <div class="col-md-1"></div>
                </div> <!-- End row-->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico04.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="#" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-tasks"></i> Realização Avaliação 01 </a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
