<div class="my-3 p-3 bg-white rounded shadow-sm">
    <span class="d-block text-center mb-3">
        <a href="/adicionar-produto-form" class="fas fa-plus text-dark text-decoration-none"></a>
    </span>
    <div id="tabela">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Cpf</th>
            <th scope="col">Matricula</th>
            <th scope="col">ações</th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach($funcionarios as $funcionario){ ?>
                <tr>
                <th scope="row"><?=$funcionario->id?></th>
                <td><?=$funcionario->nome?></td>
                <td><?=$funcionario->cpf?></td>
                <td><?=$funcionario->matricula?></td>
                <td>
                    <a href="\apagar-produto?id=<?=$funcionario->id?>" class="fas fa-eraser text-dark text-decoration-none mr-2"></a>
                    <a href="\editar-produto-form?id=<?=$funcionario->id?>" class="fas fa-edit text-dark text-decoration-none mr-2"></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    </div>
</div>
