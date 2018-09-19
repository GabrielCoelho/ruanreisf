<?php
// Template Name: Parceiros
get_header();?>
<a href="http://www.grafis.com.br/" target="_blank">
<div class="bg-parceiro-box">
    <div class="mascara">
        <div class="centered">
            <img src="<?= get_template_directory_uri();?>/uploads/graphis.jpg" alt="Grafis" class="img-fluid">
        </div>
    </div>
</div>
</a>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 offset-md-2">
            <h2>Empresa</h2>
            <p>
                A Grafis, fundada em 2011, é uma empresa de tecnologia aplicada às necessidades de fotógrafos e estúdios fotográficos.
                Contamos com um moderno parque gráfico, onde são produzidos álbuns e fotoprodutos com a mesma excelência que são desenvolvidos 
                os nossos sistemas de informática.
            </p>
            <p>
                Nossos produtos, seja na área tecnológica ou gráfica, são aprimorados constantemente pelos nossos próprios clientes. 
                Portanto, cada sugestão, ideia ou até mesmo reclamação é muito bem-vinda, pois assim, podemos melhorar ainda mais os nossos 
                produtos e facilitar ainda mais a vida do cliente.
            </p>
            <p>
                O objetivo da Grafis é: criar o mais completo sistema para o gerenciamento das atividades do fotógrafo ou estúdio fotográfico, 
                e produzir álbuns e fotoprodutos com o melhor acabamento e prazo de entrega do mercado.
            </p>
            <p><strong>
                Junte-se a nós e descubra o quanto a Grafis tem a lhe oferecer!
            </strong></p>
        </div>
        <div class="col-md-6 pt-3">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/AFHRAVLYyvo" frameborder="0"></iframe>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6">
            <div id="carousel-produto-parceiro" class="owl-carousel owl-theme produto-parceiros">
                <div class="item">
                    <img src="<?= get_template_directory_uri();?>/uploads/grafis_prod01.jpg" alt="Produtos Grafis">
                </div>
                <div class="item">
                    <img src="<?= get_template_directory_uri();?>/uploads/grafis_prod02.jpg" alt="Produtos Grafis">
                </div>
                <div class="item">
                    <img src="<?= get_template_directory_uri();?>/uploads/grafis_prod03.jpg" alt="Produtos Grafis">
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center mt-5 pt-5">
            <strong>Grafis Sistemas de Informática LTDA</strong> <br>
            <em>CNPJ: 13.579.690/0001-27 - Rua Presidente Getúlio Vargas, 953 <br> - 1º andar - Centro - CEP 85010-280 - Guarapuava - PR <br>
            Atendimento ao cliente: (42) 3036 8600 - atendimento@grafis.com.br</em>
        </div>
    </div>
</div>

<?php get_footer();?>