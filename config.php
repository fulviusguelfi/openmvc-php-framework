<?php

define("NOW_ACTION", $_SERVER['REQUEST_URI']);

// ** Configuraações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //

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
?>
