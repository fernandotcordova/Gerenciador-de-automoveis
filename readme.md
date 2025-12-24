# Trabalho de PII V

<p>Os arquivos são divididos em interfaces e ações. Os arquivos com prefixo ou sufixo ação realizam alguma modificação no banco de dados ou no próprio página PHP</p>

-pastas upload e upload-carro
Armazenam as fotos submetidas pelo usuário. Enquanto upload armazena a foto do perfil do usuário a upload-carro armazena as dos carros cadastrados

-index.php
Página principal, que irá realizar a listagem dos carros e apresentar os às ações relacionadas ao usuário (recuperar senha, perfil etc)

-aoces-carros.php
Fazem modificações relacionadas aos carros dos cadastradas pelo usuário. Não é uma tela e sim um modificar do banco de dados

acoes-entrar
Script que controla a entrada de usuários no sistema

acoes-recuperar
Script que faz a recuperação da senha do usuário

acoes.php
Cria novos usuário no sistema

adicionar-carro.php
Tela de formulário de adicionar carros ao banco de dados

cadastro.php
Tela de formulário para cadastro de novos usuários

cadastro.sql
Banco de dados MariaDB, criado pelo PHPMyAdmin

conecta.php
Arquivo que estabelece a conexão com o banco de dados

editar-acoes.php
Fazem a edição de carros cadastrados no sistema

editar-carro.php
Tela de formulário de edição dos carros cadastrados no banco de dados

login-cadastro.php
Página de login ou cadastro, conforme o usuário escolher

login.php
Tela de formulário de login de usuário

logout.php
Script para fazer a saída de usuários

menu.php
Script para realizar a construção de um menu responsivo

perfil.php
Mostra informações relacionadas ao perifl, como nome, e-mail e recuperação de senha

principal.php
Mostra um formulário de recuperação de senha

remover-acoes.php
Remoção de carros do sistema, não é uma tela e sim um controlador

remover-carro.php
Tela de remoção de carros do sistema

