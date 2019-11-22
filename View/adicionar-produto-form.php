<div class="my-3 p-3 bg-white rounded shadow-sm">
    <form action="/adicionar-produto" method="post">
        <div class="form-row mb-3">
            <div class="col">
                <input name="descricao" type="text" class="form-control" placeholder="descrição">
            </div>
        </div>
        <div class="form-row mb-3">
            <div class="col">
                <input name="estoque" type="text" class="form-control" placeholder="estoque">
            </div>
            <div class="col">
                <input name="preco_custo" type="text" class="form-control" placeholder="preco_custo">
            </div>
            <div class="col">
                <input name="preco_venda" type="text" class="form-control" placeholder="preco_venda">
            </div>
        </div>
        <div class="form-row mb-3">
            <div class="col">
                <input name="codigo_barras" type="text" class="form-control" placeholder="codigo_barras">
            </div>
            <div class="col">
                <input name="origem" type="text" class="form-control" placeholder="origem">
            </div>
        </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
</div>