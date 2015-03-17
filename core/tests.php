
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

class Test extends Model {

    var $assertions;

    public function __construct() {
        parent::__construct();
        error_reporting(0);
        $this->assertions = array();
        try {
            $this->exec();
        } catch (TestException $e) {
            // Nada
        }
        $this->results();
    }

    public function exec() {
        throw new TestException("Não implementado");
    }

    public function results() {
        $resultados = $this->assertions;
        $sucesso = true;
        foreach ($resultados as $resultado) {
            if (!$resultado['result']) {
                $sucesso = false;
                break;
            }
        }
        $mensagem = ($sucesso) ? "sucesso" : "falhou";
        require_once("views/test/resultado.php");
    }

    protected function assertEquals($expected, $value, $text = NULL) {
        $json_expected = json_encode($expected);
        $json_value = json_encode($value);
        $test = ($text !== NULL) ? $text : "{$json_expected} equals {$json_value}?";
        $response = $expected === $value;
        $result = array("test" => $test, "result" => $response);
        $this->assertions[] = $result;
        if (!$response) {
            throw new TestException();
        }
    }

    protected function assertNotEmpty($value, $text = NULL) {
        $json_value = json_encode($value);
        $test = ($text !== NULL) ? $text : "{$json_value} is NOT empty?";
        $response = !empty($value);
        $result = array("test" => $test, "result" => $response);
        $this->assertions[] = $result;
        if (!$response) {
            throw new TestException();
        }
    }

    protected function assertEmpty($value, $text = NULL) {
        $json_value = json_encode($value);
        $test = ($text !== NULL) ? $text : "{$json_value} is empty?";
        $response = empty($value);
        $result = array("test" => $test, "result" => $response);
        $this->assertions[] = $result;
        if (!$response) {
            throw new TestException();
        }
    }

    protected function execute_action($controller, $action) {
        ob_start();
        execute_action($controller, $action);
        ob_clean();
    }

    protected function truncate($table) {
        $this->query("TRUNCATE TABLE {$table}");
    }

}
