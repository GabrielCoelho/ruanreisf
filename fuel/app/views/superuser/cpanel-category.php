<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome da Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i=1, $c = count($categoria); $i<=$c; $i++){?>
                        <tr>
                            <th scope="row"><?= $categoria[$i]['id_categoria']?></th>
                            <td><?= $categoria[$i]['nome_categoria']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>