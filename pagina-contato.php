<?php
// Template Name: Contato
get_header();
?>

<div class="bg-contato-box">
    <div class="container">
        <span class="texto-contato animated fadeInRight">
            Sua história merece ser eternizada!
        </span>
    </div>
</div>
<div class="barra-social">
    <div class="container">
        <div class="row">
            <!-- Facebook -->
            <div class="col-md-3">
                <a href="http://facebook.com/RuanR.Fotografia/" target="_blank">
                    <div class="float-left mx-2">
                        <i class="ion-social-facebook"></i>
                    </div> 
                    <div class="float-right">
                        Facebook
                        <br> /RuanR.Fotografia/
                    </div>
                </a>
            </div>
            <!-- Fim Facebook -->
            <!-- WhatsApp -->
            <div class="col-md-3">
                <a href="tel:19998050851">
                    <div class="float-left mx-2">
                        <i class="ion-social-whatsapp"></i>
                    </div> 
                    <div class="float-right">
                        Whatsapp
                        <br> 19 99805 0851
                    </div>
                </a>
            </div>
            <!-- Fim Whatsapp -->
            <!-- Instagram -->
            <div class="col-md-3">
                 <a href="http://instagram.com/ruan_reis/" target="_blank">
                    <div class="float-left mx-2">
                        <i class="ion-social-instagram"></i>
                    </div> 
                    <div class="float-right">
                        Instagram
                        <br> @ruan_reis
                    </div>
                </a>
            </div>
            <!-- Fim Instagram -->
            <!-- Email -->
            <div class="col-md-3">
                <a href="mailto:ruanjreis@gmail.com">
                    <div class="float-left mx-2">
                        <i class="ion-email"></i>
                    </div> 
                    <div class="float-right">
                        Email
                        <br> ruanjreis@gmail.com
                    </div>
                </a>
            </div>
            <!-- Fim email -->
        </div>
    </div>
</div>

<div class="formulario-orcamento">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center">
                <h2>Faça um Orçamento</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nomeCompleto">Nome Completo</label>
                        <input type="text" name="nomeCompleto" id="nomeCompleto" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                        <small class="form-text text-muted">Nós nunca compartilharemos seu e-mail</small>
                    </div>
                    <div class="form-group">
                        <label for="diaEvento">Data do Evento</label>
                        <input type="date" name="diaEvento" id="diaEvento" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="tel" name="telefone" id="telefone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="local">Local do Evento</label>
                        <input type="text" name="local" id="local" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Mensagem" name="mensagem" id="mensagem" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-dark btn-lg btn-block">Enviar!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>