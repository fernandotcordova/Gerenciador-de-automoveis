# Sistema de gerenciamento de automóveis

<img src = "https://github.com/fernandotcordova/Gerenciador-de-automoveis/blob/main/imagens-aplicacao/tela-principal.png" alt = "Imagem da página principal da aplicação">

## Informações importantes
- Esse projeto não tem nenhuma intenção de venda ou algo similar, mas sim de intenção acadêmica;
- Além dos autores citados anteriormente, esse projeto é de autoria de Luiz Fernando Turela Cordova, sob licença de MIT.
- Esse projeto não tem intenção de venda ou algo similar, mas sim de intenção acadêmica.
- Fico agradecido a todos que se disponham a deixar comentários construtivos ao meu projeto!
- **Os arquivos são divididos em interfaces e ações. Os arquivos com prefixo ou sufixo ação realizam alguma modificação no banco de dados ou no próprio página PHP.**

## Como posso rodar esse projeto?
1. Para rodar esse projeto é necessário algum tipo de AMP (Apache, MySQL, PHP) em sua máquina ou, caso prefira, a própria máquina virtual do PHP. Obs.: Recomendo o uso do XAMPP, ele está disponível para todos os sistemas operacionais! É com ele que prosseguiremos o passo-a-passo. O XAMPP está disponível em: [Download XAMPP](https://www.apachefriends.org/pt_br/index.html);
2. Depois de instalar o XAMPP, entre e ative o servidor Apache e o MySQL;
3. Acesso o SGBD (Sistema Gerenciador de Banco de dados) do XAMPP (o PHPMyAdmin) e importe o arquivo "cadastro.sql";
4. Renomeio o arquivo "conecta_exemplo.php" para "conecta.php";
5. Mova todos os arquivos da aplicação para pasta htdocs (variando em cada sistema). No Windows (caso você não tenha mudado) está em: C:\xampp\htdocs; no Linux: /opt/lampp/htdocs; no MacOS: /Applications/XAMPP/xamppfiles/htdocs. Crie uma pasta antes de mover os arquivos. Aviso: Caso sua máquina rode uma distribuição Linux você deverá mudar a permissão das pastas upload e upload-carro; Sobre isso, esse [tutorial](www.hostinger.com/br/tutoriais/como-alterar-permissoes-e-proprietarios-via-linha-de-comando) pode ajudar!
6. Acesse no navegador: localhost/nome_pasta_projeto;
7. Pronto! Agora é so testar a aplicação e ser feliz 😄

## Como os arquivos são organizados
- pastas upload e upload-carro
  * Armazenam as fotos submetidas pelo usuário. Enquanto upload armazena a foto do perfil do usuário a upload-carro armazena as dos carros cadastrados

- index.php
  * Página principal, que irá realizar a listagem dos carros e apresentar os às ações relacionadas ao usuário (recuperar senha, perfil etc)

- acoes-carros.php
  * Fazem modificações relacionadas aos carros dos cadastradas pelo usuário. Não é uma tela e sim um modificar do banco de dados

- acoes-entrar
  * Script que controla a entrada de usuários no sistema

- acoes-recuperar
  * Script que faz a recuperação da senha do usuário

- acoes.php
  * Cria novos usuário no sistema

- adicionar-carro.php
  * Tela de formulário de adicionar carros ao banco de dados

- cadastro.php
  * Tela de formulário para cadastro de novos usuários

- cadastro.sql
  * Banco de dados MariaDB, criado pelo PHPMyAdmin

- conecta.php
  * Arquivo que estabelece a conexão com o banco de dados

- editar-acoes.php
  * Fazem a edição de carros cadastrados no sistema

- editar-carro.php
  * Tela de formulário de edição dos carros cadastrados no banco de dados

- login-cadastro.php
  * Página de login ou cadastro, conforme o usuário escolher

- login.php
  * Tela de formulário de login de usuário

- logout.php
  * Script para fazer a saída de usuários

- menu.php
  * Script para realizar a construção de um menu responsivo

- perfil.php
  * Mostra informações relacionadas ao perifl, como nome, e-mail e recuperação de senha

- principal.php
  * Mostra um formulário de recuperação de senha

- remover-acoes.php
  * Remoção de carros do sistema, não é uma tela e sim um controlador

- remover-carro.php
  * Tela de remoção de carros do sistema

## O que foi aprendido através desse projeto
- Além de aprofundar conceitos das linguagens mais usadas na web, pude desenvolve ainda mais a lógica de programação e o domínio de instruções SQL. Foi,também, foi uma experiência extremamente construtiva no uso de ambientes AMPs e na configuração da máquina virtual do PHP. 
