
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

// ** Configuraações do OpenMvcPHP - Essas configurações são ultilizadas para as chamadas via console do framework ** //
//
/** Raiz da include_path do PHP */
define('OPENMVC_INCLUDE_PATH', '/var/www/html/openmvc-php-framework');

/** Raiz da aplicação OpenMvcPHP */
define('OPENMVC_DOCUMENT_ROOT', '/var/www/html/openmvc-php-framework');

/** URL aplicação OpenMvcPHP */
define('OPENMVC_HTTP_HOST', 'openmvc.local');


// ** Configuraações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
//
/** Nome do host do MySQL */
define('DB_NAME', 'openmvc');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'guelfi');

/** IP do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

define('INC', 'includes');

define('MULTIPLE_DB', FALSE);

/**
 *  Timezone adequado a região
 */
define('TIMEZONE', 'America/Sao_Paulo');



define("NOW_ACTION", $_SERVER['REQUEST_URI']);
?>
