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
 * 
 *  ---GERADOR DE CRUD AUTOMÁTICO---
 * Arquivo criado por OpenMvc PHP Framework CrudGenerator
 */
?>
<?php execute_action("common", "header", $title); ?>
<div class="m-portlet  m-portlet--unair">
<div class="m-portlet__body  m-portlet__body--no-padding">
<div class="row m-row--no-padding m-row--col-separator-xl">
<div class="col-md-12 ">
<a role="button" class="btn btn-primary" href="#" onclick="window.history.back();" ><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a> 
<a role="button" class="btn btn-primary" href="/user/adicionar" ><span class="glyphicon glyphicon-plus-sign"></span> Adicionar</a><br>
<div class="table-responsive-xl ">
<table class='openmvc-table table table-striped table-bordered table-hover'>
<thead>
<tr>
<th>Username</th>
<th>Email</th>
<th>Password</th>
<th>Create_time</th>
<th>A&ccedil;&otilde;es</th>
</tr>
</thead>
<tbody>
<?php foreach($list as $key => $obj): ?>
<tr>
<td><?php echo $obj->getUsername(); ?></td>
<td><?php echo $obj->getEmail(); ?></td>
<td><?php echo $obj->getPassword(); ?></td>
<td><?php echo $obj->getCreate_time(); ?></td>
<td><a title="Editar" role="button" class="btn btn-xs btn-primary" href="/user/editar/<?php echo hash_id($obj->getId()); ?>"><span class="glyphicon glyphicon-pencil"></span><i class="fa fa-edit"></i></a>&nbsp;<a title="Deletar" role="button" class="btn btn-xs btn-danger" onclick="confirmDelete(this,'/user/deletar/<?php echo hash_id($obj->getId()); ?>')" href="#"><span class="glyphicon glyphicon-trash"></span><i class="fa fa-trash"></i></a></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<?php execute_action("common", "footer"); ?>
