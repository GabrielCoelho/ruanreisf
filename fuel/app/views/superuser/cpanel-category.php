<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome da Categoria</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($categoria as $c){?>
                    <tr>
                        <th scope="row">
                            <?= $c['id_categoria']?>
                        </th>
                        <td>
                            <?= $c['nome_categoria']?>
                        </td>
                        <td>
                        <form style="float: left;" class="mr-1" action="/deleteCategory" method="POST">
                            <button role="button" type="submit" name="buttonClicked"
                                value="id|<?=$c['id_categoria']?>" class="btn btn-danger align-text-top oi oi-delete"
                                data-toggle="tooltip" data-placement="right" title="Excluir">
                            </button>
                        </form>
                        <form style="float: left;" class="mr-1" action="/updateCategory" method="POST">
                            <button role="button" type="submit" name="buttonClicked"
                                value="id|<?=$c['id_categoria']?>" class="btn btn-secondary align-text-top oi oi-pencil"
                                data-toggle="tooltip" data-html="true" title="Editar Categoria <?= $c['nome_categoria']?>">
                            </button>
                        </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <a data-toggle="collapse" role="button" href="#adicionarCategoria" aria-expanded="false" aria-controls="adicionarCategoria">Adicionar uma nova Categoria</a>
    </div>
    <div class="collapse" id="adicionarCategoria">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <form action="/addCategory" method="POST">
                    <div class="form-group">
                        <label for="CategoryName">Nome da nova Categoria:</label>
                        <input type="text" class="form-control" id="CategoryName" name="category" placeholder="ex: Newborn">
                    </div>
                    <button type="submit" class="btn btn-outline-success">Adicionar</button>
                </form>
            </li>
        </ul>
    </div>
</div>