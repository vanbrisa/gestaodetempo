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
                                <p class="Titulo">Apresentação</p>
                                
                                <p>Bem-vindo ao curso de Gestão do Tempo. Se você tem a
                                    percepção de que todas as suas horas passam voando e você nunca
                                    realiza todos os planos ou nem consegue planejar nada e apenas lida
                                    com as coisas de acordo com a ordem em que aparecem, este curso vai
                                    te ajudar a tornar-se um <strong>realizador muito mais eficiente</strong> . Embora não exista uma única forma correta de lidar com o tempo, você aprenderá boas práticas para utilização do seu próprio tempo e talvez passe a percebê-lo de forma diferente. O que importa é que ao final dessa breve jornada espera-se que você possa estar completamente consciente da importância do tempo e possa decidir, de acordo com suas próprias necessidades, se vale a pena mudar sua gestão pessoal do tempo.
                                </p>
                                <p>Durante as próximas horas, eu, Kamila Nascimento , te conduzirei 1
                                    em uma jornada que lhe permitirá organizar sua vida e realizar seus
                                    objetivos de curto, médio e longo prazo. Eu vou repassar todos os
                                    conhecimentos e técnicas que eu utilizei para concluir o doutorado em
                                    três anos, mesmo sendo professora, pesquisadora do Banco Mundial e
                                    tendo me mudado de casa, cidade e país nesse período.Z
                                </p>
                                <p>Note que cada ser humano possui exatamente a mesma
                                    quantidade de horas diárias para realizar suas atividades, mas a nossa
                                    percepção sobre o tempo pode ser completamente diferente. Já
                                    perceberam que o minuto do microondas é diferente do minuto que
                                    passamos com alguém que amamos? É essa mudança de percepção
                                    sobre o tempo que vai mudar completamente a sua vida e eu vou te
                                    ajudar nessa caminhada.
                                </p>
                                <p>Tendo tudo isso como base, nas próximas seções deste curso
                                    você perceberá os benefícios da gestão do tempo, como visualizar uma
                                    nova vida para si mesmo e planejar a sua realização através de
                                    objetivos e hábitos.
                                </p>
                                <p style="font-size: 16px;"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Kamila Nascimento</strong> é professora universitária, atuando em diversas disciplinas de Sociologia e Gestão de Pessoas. Formada em Ciência Sociais, Mestre e Doutora em Ciência Política.</p>


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
                        <a href="Topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                    </div>

                </div> <!-- End main-content -->                 

            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
