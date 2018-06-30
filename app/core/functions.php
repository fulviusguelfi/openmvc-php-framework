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
@session_start();
Class Files {

    public function readTemplate($file_name) {

        $file = fopen($file_name, "r");
        $read = fread($file, 100000);
        if (!$read)
            trigger_error("Erro inexperado ao tentar abrir o arquivo!", E_ERROR);
        return $read;
    }

    public function writeTemplate($file_name, $string) {

        $file = fopen($file_name, "w");
        $write = fwrite($file, $string, 100000);
        if (!$write)
            trigger_error("Erro inexperado ao tentar gravar o arquivo!", E_ERROR);

        return $write;
    }

}

/**
 * 	@Author Thiago Valentoni Guelfi
 * 	@Since 06-02-2010
 *
 * 	Imprime na tela o dump de um variavel php
 * 
 */
function debug($var = false, $backTrace = false, $showHtml = false, $showFrom = true) {
    if ($showFrom) {
        $calledFrom = debug_backtrace();
        $time = date("H:i:s", time());
        echo '<strong>Debug =>' . substr($calledFrom[0]['file'], 1) . '</strong>';
        echo ' (Hora: <strong>' . $time . '</strong>) (line <strong>' . $calledFrom[0]['line'] . '</strong>)';
    }
    echo "\n<pre>\n";

    $var = print_r($var, true);
    if ($showHtml) {
        $var = str_replace('<', '&lt;', str_replace('>', '&gt;', $var));
    }

    if ($backTrace) {
        backtrace();
        echo "<h2>Dump:</h2>";
    }
    echo $var . "\n</pre>\n";
}

function backtrace() {
    $backtrace = array_reverse(debug_backtrace());
    echo "<h2>Backtrace:</h2>";
    $dados = "";
    foreach ($backtrace as $executado):
        $dados .= "<br><strong>Tempo:</strong> " . date("H:i:s");
        if (isset($executado["file"]))
            $dados .= "<br><strong>Arquivo:</strong><a href='file://{$executado["file"]}'>{$executado["file"]}</a>";
        if (isset($executado["line"]))
            $dados .= "  <strong>Linha:</strong> {$executado["line"]}";
        if (isset($executado["function"]))
            $dados .= "<br><strong>Metodo:</strong>  {$executado["function"]}";
        if (isset($executado["args"]))
            $dados .= "<br><strong>Parametros:</strong><br> <pre>" . print_r($executado["args"], true) .
                    "</pre><br>";
    endforeach;

    echo $dados;
}

/**
 * @Author Thiago Valentoni Guelfi
 * @since  07-10-2010
 * 
 *  Geração de arquivo log basiado no metodo "$this->log()" 
 *  do CakePHP
 *   
 * @param Mixed $var
 */
function to_log($var, $file_path = null) {
    $out = array();
    $calledFrom = debug_backtrace();
    $out[] = "Data:  " . date("F j, Y, g:i a");
    $out[] = 'Arquivo:' . substr($calledFrom[0]['file'], 1);
    $out[] = 'Linha: ' . $calledFrom[0]['line'];
    $out[] = "\n\n";
    $out[] = print_r($var, true);
    $out[] = "\n\n";

    $log_file = "logs/debug.log";
    if (null !== $file_path) {
        $log_file = $file_path;
    }

    if (!file_exists($log_file)) {
        $newLogFile = fopen($log_file, "w");
        touch($log_file);
        chmod($log_file, 0777);
    }

    file_put_contents($log_file, join("\n", $out), FILE_APPEND);
}

/**
 * POG para funcionar o strptime no Windows
 */
if (!function_exists('date_parse_from_format')) {

    function date_parse_from_format($format, $date) {
        $returnArray = array('hour' => 0, 'minute' => 0, 'second' => 0,
            'month' => 0, 'day' => 0, 'year' => 0);

        $dateArray = array();

        // array of valid date codes with keys for the return array as the values
        $validDateTimeCode = array('Y' => 'year', 'y' => 'year',
            'm' => 'month', 'n' => 'month',
            'd' => 'day', 'j' => 'day',
            'H' => 'hour', 'G' => 'hour',
            'i' => 'minute', 's' => 'second');

        /* create an array of valid keys for the return array
         * in the order that they appear in $format
         */
        for ($i = 0; $i <= strlen($format) - 1; $i++) {
            $char = substr($format, $i, 1);

            if (array_key_exists($char, $validDateTimeCode)) {
                $dateArray[$validDateTimeCode[$char]] = '';
            }
        }

        // create array of reg ex things for each date part
        $regExArray = array('.' => '\.', // escape the period
            // parse d first so we dont mangle the reg ex
            // day
            'd' => '(\d{2})',
            // year
            'Y' => '(\d{4})',
            'y' => '(\d{2})',
            // month
            'm' => '(\d{2})',
            'n' => '(\d{1,2})',
            // day
            'j' => '(\d{1,2})',
            // hour
            'H' => '(\d{2})',
            'G' => '(\d{1,2})',
            // minutes
            'i' => '(\d{2})',
            // seconds
            's' => '(\d{2})');

        // create a full reg ex string to parse the date with
        $regEx = str_replace(array_keys($regExArray), array_values($regExArray), $format);

        // Parse the date
        preg_match("#$regEx#", $date, $matches);

        // some checks...
        if (!is_array($matches) ||
                $matches[0] != $date ||
                sizeof($dateArray) != (sizeof($matches) - 1)) {
            return $returnArray;
        }

        // an iterator for the $matches array
        $i = 1;

        foreach ($dateArray AS $key => $value) {
            $dateArray[$key] = $matches[$i++];

            if (array_key_exists($key, $returnArray)) {
                $returnArray[$key] = $dateArray[$key];
            }
        }

        return $returnArray;
    }

}

function isAndroid() {

    $agent = $_SERVER['HTTP_USER_AGENT'];
    if (preg_match("/Android/", $agent) != false)
        $android = true;
    else
        $android = false;

    return $android;
}

function url_atual() {
    $pageURL = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}

if (!function_exists('pogtime')) {

    function pogtime($date, $format) {
        $dateArray = array();

        $dateArray = date_parse_from_format($format, $date);

        if (is_array($dateArray)) {
            return mktime($dateArray['hour'], $dateArray['minute'], $dateArray['second'], $dateArray['month'], $dateArray['day'], $dateArray['year']);
        } else {
            return 0;
        }
    }

}

if (!function_exists('is_multisite')) {

    function is_multisite() {
        return false;
    }

}

