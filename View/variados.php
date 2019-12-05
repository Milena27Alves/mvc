<div class="Container">
    <div class="row" id="corpo-do-formulario">
        <div id="formulario">
            <form action="/editar-funcionario" method="post">
                <input name="id" type="text" class="d-none visible-xs" value="<?=$funcionario->id?>">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name ="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$funcionario->nome?>">
                </div>
                <div class="form-group">
                    <label>cpf</label>
                    <input type="text" name="cpf" class="form-control" id="exampleInputPassword1" value="<?=$funcionario->cpf?>">
                </div>
                <div class="form-group">
                    <label>Matricula</label>
                    <input type="text" name= "matricula" class="form-control" id="exampleInputPassword1" value="<?=$funcionario->matricula?>">
                </div>
                <div class="form-group">
                    <label>login/e-mail</label>
                    <input type="text" name= "email" class="form-control" id="exampleInputPassword1" value="<?=$funcionario->email?>" >
                </div>
                <div class="form-group">
                    <label>senha</label>
                    <input type="text" name= "senha" class="form-control" id="exampleInputPassword1" value="<?=$funcionario->senha?>">
                </div>
                <div class="form-group">
                    <label>Tipo de funcionario</label>
                    <select name="tipo" class=" form-control" value="<?=$funcionario->tipo?>">
                        <option value="1">secretario</option>
                        <option value="2">Agente de saúde</option>
                        <option value="3">Enfermeiro</option>
                        <option value="4">Médico</option>
                        <option value="5">Dentista</option>
                        <option value="6">Atendente</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div><?php


$a = $funcionario->endereco;
$endereco = \Ifnc\Tads\Entity\Endereco::find($a);
var_dump($endereco);