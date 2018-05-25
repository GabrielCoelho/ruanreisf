<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card text-center">
                <div class="card-header alert alert-primary" role="alert">
                    /*Saudação + NomeSuperUser*/, Como está o seu dia?
                </div>
                <div class="card-body">
                    <h5 class="card-title">Última história postada a /*X dias*/</h5>
                    <p class="card-text">Continue com o bom trabalho!</p>
                    <a href="#" class="btn btn-primary">Ver Estatísticas</a>
                </div>
                <div class="card-footer text-muted">
                    Deseja alterar algo?
                    <?= Html::mail_to('soares@workmail.com', 'envie-me um email', 'Alteração requerida');?>
                </div>
            </div>
        </div>
    </div>
</div>
