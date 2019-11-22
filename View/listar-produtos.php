<div class="my-3 p-3 bg-white rounded shadow-sm">
    <span class="d-block text-center mb-3">
        <a href="/adicionar-produto-form" class="fas fa-plus text-dark text-decoration-none"></a>
    </span>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">descrição</th>
                <th scope="col">estoque</th>
                <th scope="col">preco_custo</th>
                <th scope="col">preco_venda</th>
                <th scope="col">codigo_barras</th>
                <th scope="col">data_cadastro</th>
                <th scope="col">origem</th>
                <th scope="col">Custo Total</th>
                <th scope="col">ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($produtos as $produto){ ?>
            <tr>
                <th scope="row"><?=$produto->id?></th>
                <td><?=$produto->descricao?></td>
                <td><?=$produto->estoque?></td>
                <td><?=$produto->preco_custo?></td>
                <td><?=$produto->preco_venda?></td>
                <td><?=$produto->codigo_barras?></td>
                <td><?=$produto->data_cadastro?></td>
                <td><?=$produto->origem?></td>
                <td><?=$produto->getTotalCusto()?></td>
                <td>
                    <a href="\apagar-produto?id=<?=$produto->id?>" class="fas fa-eraser text-dark text-decoration-none mr-2"></a>
                    <a href="\editar-produto-form?id=<?=$produto->id?>" class="fas fa-edit text-dark text-decoration-none mr-2"></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>