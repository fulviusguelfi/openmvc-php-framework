
<?php
/*
  Este arquivo é parte do OpenMvc PHP Framework

  OpenMvc PHP Framework é um software livre; você pode redistribuí-lo e/ou
  modificá-lo dentro dos termos da Licença Pública Geral GNU como
  publicada pela Fundação do Software Livre (FSF); na versão 2 da
  Licença, ou (na sua opinião) qualquer versão.

  Este programa é distribuído na esperança de que possa ser  útil,
  mas SEM NENHUMA GARANTIA; sem uma garantia implícita de ADEQUAÇÃO a qualquer
  MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a
  Licença Pública Geral GNU para maiores detalhes.

  Você deve ter recebido uma cópia da Licença Pública Geral GNU
  junto com este programa, se não, escreva para a Fundação do Software
  Livre(FSF) Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
?>
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
                <a href="/<?php echo $value->$DB_KEY; ?>/adicionar"><button>Ver Cadastro</button></a>&nbsp;
            <? } else { ?>
                <a href="/?crud=<?php echo($value->$DB_KEY); ?>"> clique aqui para gerar o CRUD desta tabela</a>
            <? } ?>
        </div><hr/>
    <?php endforeach; ?>
</div>