<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-8 offset-md-2">
            <form action="" class="border border-dark px-5">
                <div class="form-row">
                    <div class="form-group col-sm-12 col-lg-6">
                        <label for="storyName">Nome do Ensaio:</label>
                        <input class="form-control" type="text" name="nomeEnsaio" id="storyName" placeholder="ARRAY" required>
                    </div>
                    <div class="form-group col-sm-12 col-lg-6">
                        <label for="storyDate">Data do Ensaio</label>
                        <input class="form-control" type="date" name="dataEnsaio" id="storyDate" required>
                    </div>
                </div> <!-- Closing Form Row 1 -->
                <div class="form-row">
                    <div class="form-group col-sm-12 col-lg-4">
                        <label for="categorySelection">Categoria</label>
                        <select id="categorySelection" class="form-control" required>
                            <option selected>Escolha uma categoria</option>
                            <?php foreach($categoria as $c){ ?>
                                <option name="category_id|<?= $c['id_categoria']?>"><?= $c['nome_categoria']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-sm-12 col-lg-8">
                        <label for="locationStory">Local do Ensaio</label>
                        <input class="form-control" type="text" name="localStory" id="locationStory" required>
                    </div>
                </div> <!-- Closing Form Row 2 -->
                <div class="form-row">
                    <label for="smallDescription">Descrição breve</label>
                    <input class="form-control" type="text" name="smalldesc" id="smallDescription" required>
                </div> <!-- Closing Form Row 3 -->
                <div class="form-row">
                    <label for="description">Descrição</label>
                    <textarea class="form-control mb-3" name="desc" id="description" cols="15" rows="2" required></textarea>
                </div> <!-- Closing Form Row 4 -->
                <!-- Adicionar Uppy aqui -->
                <div class="form-row">
                    <div class="form-group col-md-11">
                        <button role="button" class="btn btn-outline-primary btn-lg form-control" type="submit">Adicionar História</button>
                    </div>
                    <div class="form-group col-md-1">
                        <button class="rounded-circle btn-lg btn-success oi oi-arrow-thick-bottom"></button>
                    </div>
                </div> <!-- Closing Form Row 5 -->
            </form>
        </div> <!-- Closing col-sm12 -->
    </div> <!-- Closing Row -->
</div> <!-- Closing Container -->