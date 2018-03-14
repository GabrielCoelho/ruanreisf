<div class="container">
    <div class="row">
            <!-- B-Card show with PHP -->
            <?php foreach ($historia as $ensaio) { ?>  
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-2">      
                    <div class="card border-right rounded-left">
                        <?= Asset::img('historias/ensaios/gabriel-taina/teste.jpg', 
                            array(
                                "alt"   =>  "Ensaio ".$ensaio['nome_histora'],
                                "class" =>  "card-img-top rounded"
                            )
                        ); ?>
                        <div class="card-body">
                            <h4 class="card-title"><?= $ensaio['nome_historia'] ?></h4>
                            <p class="card-text"><?= "Descrição Ensaio"?></p>
                            <button value="id|<?= $ensaio['id_historia'];?>" type="button" data-toggle="modal" data-target="#informationModal" class="btn btn-outline-primary">Ver informações</button>
                        </div>
                    </div>
                </div> <!-- Col-sm-12 closing -->
            <?php } ?>
            <!-- Closing card show -->
    </div> <!-- Row closing -->
</div> <!-- Container closing -->

<!-- Modal -->
<div class="modal fade" id="informationModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="informationModalLabel">
                    NOME ENSAIO
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><strong>Data Ensaio:</strong> 2018-03-14</p>
                <p><strong>Local Ensaio:</strong> Santuário Nacional de Aparecida</p>
                <p><strong>Categoria:</strong> Casamento</p>
                <p><strong>Descrição:</strong> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est qui quia cumque saepe veniam magni porro, assumenda dignissimos ipsum exercitationem?</p>
                <p><strong>Descrição breve:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, consequatur.</p>
                <p><strong>Equipe de filmagem:</strong> Santo Rei Filmes</p>
                <p><strong>Equipe cerimonial:</strong> Alguma que Exista</p>
                <p><strong>Buffet:</strong> Crisol</p>
                <p><strong>Decoração:</strong> RA TIM BUM Decorações</p>
                <p><strong>Maquiagem:</strong> Tainá Vilela</p>
                <p><strong>Vestuário:</strong> Ambiance Moda Clássica</p>
                <p><strong>Confeitaria:</strong> Mariana Martins</p>
                <p><strong>Músicos:</strong> Galo Grow</p>
                <p><strong>Iluminação</strong> Natural</p>
                <p><strong>Celebrante</strong> Pe. Antônio Celso</p>
                <p><strong>Penteados</strong> Tainá Vilela</p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Alterar Informações</button> 
            </div>
        </div>
    </div>
</div>