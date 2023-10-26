# Expert Framework Helpers

*Expert Framework Helpers* é um pacote PHP que fornece um conjunto de funções para simplificar tarefas comuns no desenvolvimento web.

Componente pertencente ao framework *Jonaselias\ExpertFramework* https://github.com/jonas-elias/mercado-software-expert

## Instalação 🚀

Você pode instalar este pacote via Composer:

bash
composer require expert-framework/helpers


## Uso ✅

### 1. env()

A função `env()` permite que você recupere variáveis de ambiente de um arquivo `.env` no diretório raiz do seu projeto. 

Exemplo de uso:

php
require_once __DIR__.'/../../vendor/expert-framework/helpers/src/helpers.php';

$apiKey = env('API_KEY');


### 2. config()

A função `config()` é usada para acessar parâmetros de configuração armazenados em arquivos PHP.

Exemplo de uso:

php
require_once __DIR__.'/../../vendor/expert-framework/helpers/src/helpers.php';

$nome = config('app.nome');


### 3. render()

A função `render()` simplifica a renderização de conteúdo HTML. Ela carrega modelos HTML do diretório app/View e apresenta o conteúdo HTML na saída.

Exemplo de uso:

php
require_once __DIR__.'/../../vendor/expert-framework/helpers/src/helpers.php';

$documentacaoHtml = render('docs');


## Dúvidas 🤔
Caso exista alguma dúvida sobre como instalar, utilizar ou gerenciar o projeto, entre em contato com o email: jonasdasilvaelias@gmail.com

Um grande abraço!
