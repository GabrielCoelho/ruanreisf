<?php
// Template Name: Sobre
get_header();
?>

<div class="sobre my-0">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="sobre-familia">Sobre Nossa Família</h2>
                <!-- Ruan Reis -->
                <div class="col-xs-12 sobre-fundo">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= get_template_directory_uri();?>/uploads/ruanreis-sobre.jpg" alt="Ruan Reis" class="imagem-sobre-inicio"/>
                        </div>
                        <div class="col-sm-9">
                            <div class="informacao">
                                <h4 class="nome">Ruan Reis</h4>
                                <p class="titulo">Fotógrafo e Papai</p>
                                <p class="mini-descricao">
                                    Sou papai da Ellie e marido da Ana Paula! A fotografia pra mim é poder marcar histórias com a visão e o coração!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim Ruan -->
                <!-- Ana Paula -->
                <div class="col-xs-12 sobre-fundo">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= get_template_directory_uri();?>/uploads/ruanreis-sobre.jpg" alt="Ruan Reis" class="imagem-sobre-inicio"/>
                        </div>
                        <div class="col-sm-9">
                            <div class="informacao">
                                <h4 class="nome">Ana Paula</h4>
                                <p class="titulo">Mamãe e Patroa</p>
                                <p class="mini-descricao">
                                    Amo ser esposa do Ruan e mamãe da Ellie, eu me apaixono ainda mais a cada dia por eles! Fotografia não é só clicar, é sentir o ambiente, vai muito mais alem.                        
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fim Ana -->
                <!-- Ellie -->
                <div class="col-xs-12 sobre-fundo">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= get_template_directory_uri();?>/uploads/ruanreis-sobre.jpg" alt="Ruan Reis" class="imagem-sobre-inicio"/>
                        </div>
                        <div class="col-sm-9">
                            <div class="informacao">
                                <h4 class="nome">Ellie</h4>
                                <p class="titulo">Filinha e talvez um dia fotógrafa</p>
                                <p class="mini-descricao">
                                    Sou Filha dos meus Papais e também sou chefe de tudo isso aqui!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fim Ellie -->
            <div class="col-md-4 ">
                <h2 class="sobre-familia">Sobre Mim</h2>
                <div class="sobre-fundo sobre-mim">
                    <p>
                        Olá, meu nome é Ruan, nascido e atualmente morando em Mogi Guaçu, estado de São Paulo. Minha esposa Ana Paula e eu temos
                        uma linda filha que se chama Ellie.
                    </p>
                    <p>
                        Uma pessoa muito sábia me ensinou que os melhores momentos da vida são aqueles em
                        que estamos presentes de corpo e alma!
                    </p>
                    <p>
                        Sou fotografo, e acredito que a fotografia é essencial em nossa vida, ela tem
                        a capacidade de nos fazer viajar no tempo, e recordar as emoções que sentimos no momento da foto. A fotografia pode mudar
                        nossos dias, nossa vida e a nossa história, e eu posso te dar o poder para recordar!
                    </p>

                    <img src="<?= get_template_directory_uri();?>/uploads/gabriel-taina.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>