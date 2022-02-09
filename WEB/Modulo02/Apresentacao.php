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
            
                <div class="main-content container-fluid" id="#Apresentacao"> <!-- Begin main-content -->
                    <div class="row"> <!-- Begin row -->
                        <div class="col-md-1"></div>
                        
                        <div class="col-md-10"> <!-- Begin col-md-10 -->
                            <div class="page-title Texto">
                            
                            <h2 class="Titulo">Apresentação</h2>
                            <hr>

                            <br>

                            <p>Na primeira parte deste curso, você aprendeu sobre os aspectos mais gerais da Gestão do Tempo e fez algumas atividades práticas para consolidar sua nova visão de vida e planejar ações que as concretize. Neste ponto, você já compreende que a sua mente trabalha ativamente para realizar aquilo que ela acredita ser real ou estar alinhada com suas emoções.</p>
                            <p class="img-fluid wow fadeInDown" data-wow-delay="0.3s">Você também já aprendeu que os objetivos pessoais e profissionais podem estar relacionados a ações diferentes e que devemos decidir sobre onde nosso foco deve se direcionar para que nosso tempo seja corretamente utilizado, uma vez que se trata de um recurso não renovável.</p>
                            <p>Nesta segunda parte, eu lhe conduzirei de forma mais profunda na compreensão da Gestão do Tempo que se relaciona com uma mentalidade realizadora e com os hábitos necessários para transformar seus sonhos em realidade. Como foi mencionado, a longo prazo, essas mudanças poderão ser traduzidas em uma melhor qualidade de vida, melhoria da motivação e até na ampliação da felicidade.</p><br><br>


                            
                                                        
                            <!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });   

                                $(function () {
                                  $('[data-toggle="tooltip"]').tooltip()
                              })                 
                            </script>



                            </div> <!-- End page-title -->                            
                        </div> <!-- End page-title -->

                        <div class="col-md-1"></div>
                    </div> <!-- End row -->
                    
                    <!-- Botões de navegação -->
                    <div class="text-center">
                        <a href="Apresentacao.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                        <a href="Topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                    </div>

                </div> <!-- End main-content -->                 

            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
