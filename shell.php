
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
<?php

set_include_path('/var/www/html/repositorio/RIQUEZA');
$_SERVER['DOCUMENT_ROOT'] = '/var/www/html/repositorio/RIQUEZA';
$_SERVER['HTTP_HOST'] = 'api.wta3.com.br';

//print_r($argv);

$_REQUEST['c'] = $argv[1];
$_REQUEST['a'] = $argv[2];
$_REQUEST['p'] = array($argv[1], $argv[2], $argv[3]);

require_once("core/min.php");

if (isset($_REQUEST["p"])) {
    execute_action($_REQUEST['c'], $_REQUEST['a'], $_REQUEST["p"]);
} else {
    execute_action($_REQUEST['c'], $_REQUEST['a']);
}

    
