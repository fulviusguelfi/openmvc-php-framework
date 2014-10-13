----OpenMvc PHP Framework----
=============================
O OpenMvc é uma framework PHP Open Source baseada no conceito de MVC ou seja, Models(Banco de Dados), Views(Html e Css) e Controllers(Regras de Negócio).

Requisitos:
============
- Apache2 + Mod_rewirte 
- PHP5
- Mysql

Instalação:
===========

 - Passo 1: Clonar o OpenMvc e iniciar um projeto
 

 
git clone https://thiago-bsws@bitbucket.org/thiago-bsws/openmvc.git

git remote set-url origin https://github.com/user/$NOVO_REPOSITORIO.git

____________________________________________________________________________________________________________________


 - Passo 2: config.php
 
Dentro do arquivo localizado na raiz do OpenMvc "/config.php" configurar as constantes de Banco de Dados como abaixo:



/* Nome do host do MySQL */
define('DB_NAME', '$NOME_DO_BANCO_DE_DADOS');



/* Usuário do banco de dados MySQL */
define('DB_USER', '$USUARIO_DO_BANCO_DE_DADOS');



/* Senha do banco de dados MySQL */
define('DB_PASSWORD', '$SENHA_DO_BANCO_DE_DADOS');



/* IP do host do MySQL */
define('DB_HOST', '$ENDEREÇO_DO_BANCO_DE_DADOS');

______________________________________________________________________________________________________________________



- Passo 3: Apontamento do Domínio ou Virtual Host

Crie o seu Domínio ou Virtual Host apontando diretamente para a raiz do OpenMvc como abaixo:


< VirtualHost openmvc.exemplo:80>



	ServerName openmvc.exemplo



	DocumentRoot /$LOCAL_DA_PASTA_DO_OPENMVC



< /VirtualHost>

________________________________________________________________________________________________________________________


Rotas:
======

- 1: O OpenMvc assim que instalado tem como rota padrão de sua raiz o Controller 'home.php' na action 'index()'.


 - Para apontar para uma rota determinada basta colocar na URL o controller/action, por exemplo:

No endereço http://openmvc.exemplo.com/home/teste a rota traçada seria dentro do controller 'home.php' a action 'teste()'.
__________________________________________________________________________________________________________________________


 - No caso de passar parametros para a mesma action o exemplo seria assim:


No endereço http://openmvc.exemplo.com/home/teste/param1/param2 a rota traçada seria dentro do controller 'home.php' a action 'teste($param)'.

Nesse caso dentro da action 'teste($param)' a variável $param assume o tipo Array sendo de que a mesma obteria o formato abaixo:


array(
0 => 'home',
1 => 'teste',
2 => 'param1',
3 => 'param2'
)

__________________________________________________________________________________________________________________________________
 
 
- 2: Action default do Controller:

 - Todo Controller deve conter uma action 'index()' pois a mesma serve como action default do Controller. Por exemplo:

No endereço http://openmvc.exemplo.com/home a rota traçada seria dentro do controller 'home.php' a action 'index()'.


Controllers:
===========

 - 1: Criando novo Controller
 
  - No exemplo abaixo criaremos o arquivo /controllers/meu_controller.php, como mostrado o nome da Classe deve ser o mesmo nome do arquivo criado, sendo que no nome da Classe a primeira letra é maiúscula.
  
  - Ao criar um novo controler deve-se extender a classe Controller para que a mesma seja carragada na variável $this do seu controller.

Exemplo:

class Meu_controller extends Controller {

    public function index() {}

}
_____________________________________________________________________________________________________


 - 2: Variável $this do seu Controller
  
  - A variável $this contém todo o seu controller mais a classe Controller que foi extendida anteriormente, e pode também pode conter outras classes carregadas através da função $this->load().

_____________________________________________________________________________________________________


 - 3: Função Construtora do Controller "init()"
  
  - Ao criar uma action denominada 'init()' dentro de um controller, a mesma é automaticamente processada como função contrutora deste mesmo controller.

_____________________________________________________________________________________________________


 - 4: Função $this->load() do Controller
  
  - Essa função serve para carregar Módulos ou outros Controllers dentro da variável $this do seu controller.
  - A mesma recebe dois parâmetros, sendo o primeiro "models" ou "controllers" e o segundo o nome do arquivo que deseja carregar sem a extensão '.php' no final.
   
  Por Exemplo:
  
-No caso abaixo carregaremos dentro da variável $this o aqruivo /models/exemploModel.php, e a mesma terá toda a Classe ExemploModel carregada no objeto $this->exemploModel

$this->load('models','exemploModel');


- No caso abaixo carregaremos dentro da variável $this o aqruivo /controllers/meu_controller2.php, e a mesma terá toda a Classe Meu_controller2 carregada no objeto $this->meu_controller2

$this->load('controllers','meu_controller2');
___________________________________________________________________________________________________________________



 - 5: Função $this->redirect() do Controller
  
  - Esta função serve para redirecionar para uma outra action e recebe um único parâmetro sendo este '/controller/action'. Por Exemplo:

Nesse caso redirecionamos para o arquivo /controllers/meu_controller.php na action 'exemplo()'.

$this->redirect('/meu_controller/exemplo');
____________________________________________________________________________________________________________________



 - 6: Função $this->view() do Controller
  
  - Esta função serve para carregar uma view dentro de uma action e recebe dois parâmetros sendo o primeiro o arquivo da view que
 deseja carregar sem a extensão '.php' no final e o segundo(não obrigatorio) é um array de variáveis que a View recebe. Por Exemplo:

Nesse caso carregaremos o arquivo /views/home/index.php e passaremos a variável $var_exemplo para a ele.

 $this->view("home/index", array("var_exemplo" => $VALOR_DA_VARIAVEL));
____________________________________________________________________________________________________________________



Models:
=======

 - 1: Criando um novo Model para uma tabela de Banco de Dados

    - No exemplo abaixo criaremos o arquivo /models/minhaTabelaModel.php, como mostrado o nome da Classe deve ser o mesmo nome do arquivo criado, sendo que no nome da Classe a primeira letra é maiúscula.
    - Ao criar um novo model deve-se extender a classe Model para que a mesma seja carragada na variável $this do seu model.
    - Ao criar um novo model deve-se criar variável global $name que será o nome da tabela default que este model irá controlar.

Exemplo:

class MinhaTabelaModel extends Model {  

var $name = "$NOME_DA_TABELA_NO_DB";  

}
_____________________________________________________________________________________________________________

- 2: Variável $this do seu Model
  
  - A variável $this contém todo o seu model mais a classe Model que foi extendida anteriormente, essa classe contém funções padrão tais como: deletar(), salvar(), listar(), get() e query().

_____________________________________________________________________________________________________________
  
- 3: Função deletar() do Model 

    - Esta função serve para apagar uma linha da tabela default do model.
    
    PARÂMETROS:

    (int)  $id - //* id da linha a ser excluída na tabela default */

    RETORNO:

    (Bool) TRUE ou FALSE - //* Retorno da ação de deletar no Mysql  */

Exemplo:

return $this->deletar($id);
______________________________________________________________________________________________________________
  
- 4: Função salvar() do Model 

    - Esta função serve para salvar uma linha na tabela default do model.
    - Caso dentro do objeto recebido a posição 'id' não esteja vazia executa UPDATE se não executa INSERT  
    
    PARÂMETROS:

    (object or array)  $dados - //* Objeto para salvar onde as posições tenham o mesmo nome que as colunas da tabela default */

    RETORNO:

    (Bool) TRUE ou FALSE - //* Retorno da ação de UPDATE ou INSERT no Mysql  */

Exemplo:

-Tabela no MySql
 _______________________________________
|-id-|-----nome-----|-----------email-----------|

| 1  | Lorem Ipsum  | exemplo@abcd.com  |


Neste caso faremos o UPDATE da linha com id=1 e trocaremos o email 'exemplo@abcd.com' pelo 'aaaa@xpto.com'.

$dados = (object) array("id"=> 1, "email"=>"aaaa@xpto.com" );

return $this->salvar($dados);



Neste caso faremos o INSERT de uma nova linha da tabela default.

$dados = (object) array("nome"=>"teste", "email"=>"bbb@exemplo.com" );

return $this->salvar($dados);
______________________________________________________________________________________________________________

  
- 5: Função listar() do Model 

    - Esta função serve para listar as linhas da tabela default do model.
    - A função recebe três parâmetos sendo os dois primeiros para gerar paginação com base na coluna 'id'.
    
    PARÂMETROS:

    (int)  $pagina (não obrigatorio);       //* Página em que se encontra dentro da paginação */

    (int)  $max_per_page (não obrigatorio); //* Máximo de resultados por página */

    (int) $status (não obrigatorio);       //* Caso exista uma coluna 'status' na tabela, traz apenas resultados com o status desejado */

    RETORNO:

    (object) $lista - //* Retorna a lista de objetos encontrados na tabela default */

Exemplo:

Neste caso listaremos todas as linhas da tabela default do model

$lista = $this->listar();



Neste caso listaremos as 10 primeiras linhas para a pagina 1 da paginaçao da tabela default do model

$lista = $this->listar(1,10);



Neste caso listaremos as 10 proximas linhas para a pagina 2 da paginaçao da tabela default do model

$lista = $this->listar(2,10);



Neste caso listaremos as 10 primeiras linhas para a pagina 1 da paginaçao onde a coluna 'status' seja igual 123 da tabela default do model

$lista = $this->listar(1,10,123);



Neste caso listaremos todas as linhas onde a coluna 'status' seja igual 123 da tabela default do model

$lista = $this->listar('','',123);
______________________________________________________________________________________________________________
  

- 6: Função get() do Model 

    - Esta função serve para retornar através do 'id' uma linha da tabela default do model.
    
    PARÂMETROS:

    (int)  $id - //* id da linha a ser retornada na tabela default */

    RETORNO:

    (object ou FALSE) $linha - //* Retorno do objeto encontrado na tabela default ou FALSE  */

Exemplo:

$linha = $this->get($id);
______________________________________________________________________________________________________________
  
  

- 7: Função query() do Model 

    - Esta função serve para escrver uma Query manualmente.
    
    PARÂMETROS:

    (string)  $query - //* Query a ser executada no Mysql */

    RETORNO:

    (array ou FALSE) $objeto - //* Retorna um array de objetos com os resultados encontrados pela Query ou FALSE  */

Exemplo:

$query = "SELECT * FROM tabela_exemplo";

$objeto = $this->query($query);
______________________________________________________________________________________________________________
  
  
  

- 8: Função row() do Model 

    - Esta função serve para escrver uma Query manualmente e retornar apenas uma linha.
    
    PARÂMETROS:

    (string)  $query - //* Query a ser executada no Mysql */

    RETORNO:

    (array ou FALSE) $objeto - //* Retorna um objeto encontrados pela Query ou FALSE  */

Exemplo:

$query = "SELECT * FROM tabela_exemplo WHERE id=10";

$objeto = $this->row($query);
______________________________________________________________________________________________________________
  


Views:
======
 
 - 1: Criando uma nova View.
    
    - Ao criar uma nova view deve-se atentar a organização das pastas onde as mesmas ficaram alocadas.
    - Dentro de cada View pode-se receber n variáveis que são definidas pelo controller que a chamar.

______________________________________________________________________________________________________________
 

 - 2: Executando Ajax em uma View.
    
    - Ao executar uma chamada Ajax em uma view para dentro do próprio OpenMvc pode-se chamar na url o arquivo /ajax.php localizado na raiz
do OpenMVC passando os parametros '$_REQUEST[c]'(controller), '$_REQUEST[a]'(action), '$_REQUEST[p]'($params)(não obrigatório).

Exemplo:

Nesse caso iremos fazer uma requisição por post no controller 'home' na action 'teste()'


jQuery.ajax({
                url: "/ajax.php",
                type: "post",
                data: {c:'home', a:'teste'}
            })

______________________________________________________________________________________________________________


GERADOR DE CRUD AUTOMÁTICO (1.0 beta)
=====================================
CrudGenerator CRUD - Create, Read, Update, Delete

- 1: O OpenMvc assim que instalado já vem com o CrudGenerator funcionando, em sua tela inicial será exibida uma mensagem "Bem Vindo ao OpenMVC"
seguido pela lista de Tabelas encontradas no Mysql conectado.
    - Para gerar o crud de uma tabela basta clicar no link exibido na lista ou acessar a url /bin/crud/$NOME_DA_TABELA
    - Para que o CrudGenerator relacione automaticamente duas ou mais tabelas basta que na tabela em questão exista a coluna 
com o seguinte nome 'id_$NOME_DA_TABELA_A_RELACIONAR' ou '$NOME_DA_TABELA_A_RELACIONAR_id', 
neste caso o crud irá gerar um select com os ids dos objetos da tabela relacionada

__________________________________________________________________________________________________


Licença:
========

- Copyright (c) 2013 Thiago Valentoni Guelfi - BSWS
- Open Source - MIT License (MIT)
