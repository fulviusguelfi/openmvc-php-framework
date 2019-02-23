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
<a role="button" class="btn btn-primary" href="/" ><span class="glyphicon glyphicon-home"></span> Home</a><br>
<?php echo $forms->open(array("class"=>"openmvc-form"));?>
<div class="col-md-12 ">
<div class="form-group">
<?php
 $forms->fields["username"] = new CharField(true);
 $forms->fields["username"]->value = $obj->getUsername();
 echo $forms->label("username", "Username<br>");
 echo $forms->render("username",array("class"=>"form-control","placeholder"=>"Username"));
?>
</div>
</div>
<div class="col-md-12 ">
<div class="form-group">
<?php
 $forms->fields["email"] = new CharField(false);
 $forms->fields["email"]->value = $obj->getEmail();
 echo $forms->label("email", "Email<br>");
 echo $forms->render("email",array("class"=>"form-control","placeholder"=>"Email"));
?>
</div>
</div>
<div class="col-md-12 ">
<div class="form-group">
<?php
 $forms->fields["password"] = new CharField(true);
 $forms->fields["password"]->value = $obj->getPassword();
 echo $forms->label("password", "Password<br>");
 echo $forms->render("password",array("class"=>"form-control","placeholder"=>"Password"));
?>
</div>
</div>
<div class="col-md-12 ">
<div class="form-group">
<?php
 $forms->fields["create_time"] = new CharField(false);
 $forms->fields["create_time"]->value = $obj->getCreate_time();
 echo $forms->label("create_time", "Create_time<br>");
 echo $forms->render("create_time",array("class"=>"form-control","placeholder"=>"Create_time"));
?>
</div>
</div>
<?php
 $forms->fields["id"] = new HiddenField(false);
 $forms->fields["id"]->value = hash_id($obj->getId());
 echo $forms->render("id");
?>
<div class="col-md-12">
<?php echo $forms->reset('<span class="glyphicon glyphicon-remove-circle"></span> Limpar',array("class"=>"w50 btn btn-danger","role"=>"button"));?>
<?php echo $forms->submit('<span class="glyphicon glyphicon-ok-circle"></span> Enviar',array("class"=>"w50 btn btn-success","role"=>"button"));?>
</div>
<?php echo $forms->close();?>
</div>
</div>
</div>
</div>
<?php execute_action("common", "footer"); ?>
