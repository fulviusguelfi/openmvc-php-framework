<center>
    <h2>Bem Vindo ao OpenMVC</h2>
    <br/>
    <br/>
    <h4>Lista de Tabelas Encontradas no DB</h4>
</center>
<div style="margin:0px 80px;">
    <?php foreach ($tables as $key => $value): ?>
        <div>
            <? $DB_KEY = "Tables_in_" . DB_NAME; ?>
            <b><?php echo($value->$DB_KEY); ?></b>
            <?
            $controller = $_SERVER[DOCUMENT_ROOT] . "/controllers/{$value->$DB_KEY}.php";
            if (file_exists($controller)) {
                ?>
                <b>-----CRUD(MVC) ENCONTRADO-----</b>
                <a href="/<?php echo $value->$DB_KEY; ?>/listar"><button>Ver Listagem</button></a>&nbsp;
                <a href="/<?php echo $value->$DB_KEY; ?>/editar"><button>Ver Cadastro</button></a>&nbsp;
            <? } else { ?>
                <a href="/bin/crud/<?php echo($value->$DB_KEY); ?>"> clique aqui para gerar o CRUD desta tabela</a>
            <? } ?>
        </div><hr/>
    <?php endforeach; ?>
</div>