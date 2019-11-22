<div class="my-3 p-3 bg-white rounded shadow-sm">
    <form action="/editar-produto" method="post">
        <input name="id" type="text" class="d-none" value="<?=$produto->id?>">
        <div class="form-row mb-3">
            <div class="col">
                <input name="descricao" type="text" class="form-control" value="<?=$produto->descricao?>">
            </div>
        </div>
        <div class="form-row mb-3">
            <div class="col">
                <input name="estoque" type="text" class="form-control" value="<?=$produto->estoque?>">
            </div>
            <div class="col">
                <input name="preco_custo" type="text" class="form-control" value="<?=$produto->preco_custo?>">
            </div>
            <div class="col">
                <input name="preco_venda" type="text" class="form-control" value="<?=$produto->preco_venda?>">
            </div>
        </div>
        <div class="form-row mb-3">
            <div class="col">
                <input name="codigo_barras" type="text" class="form-control" value="<?=$produto->codigo_barras?>">
            </div>
            <div class="col">
                <input name="origem" type="text" class="form-control" value="<?=$produto->origem?>" >
            </div>
        </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
</div>