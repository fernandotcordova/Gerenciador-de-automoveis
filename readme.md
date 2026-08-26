# 👨‍💻 Sistema de Gerenciamento de Automóveis

<p align="center">
  <img src="https://github.com/fernandotcordova/Gerenciador-automoveis/blob/main/imagens-aplicacao/tela-principal.png?raw=true" alt="Imagem da página principal da aplicação" width="100%">
</p>

> ⚠️ **AVISO IMPORTANTE:** Este é um sistema estritamente acadêmico e amador. **Não deve ser utilizado em ambientes de produção sob nenhuma hipótese.**

---

## 📌 Sobre o Projeto
Este projeto foi desenvolvido com objetivos puramente acadêmicos para consolidar conceitos de desenvolvimento web, lógica de programação e manipulação de bancos de dados relacionais.

### 👥 Créditos e Autoria
* **Desenvolvedor Principal:** Luiz Fernando Turela Cordova (sob licença MIT).
* **Colaborações Acadêmicas:** Parte da lógica de backend foi baseada nos ensinamentos do professor Roger Machado (Instituto Federal).
* **Estilização (CSS):** Interface visual adaptada a partir dos layouts disponibilizados por Gustavo Guanabara.



## 🛠️ Tecnologias Utilizadas
* **PHP** (Lógica de servidor e ambiente backend)
* **MySQL / MariaDB** (Armazenamento de dados)
* **HTML5 & CSS3** (Estruturação e design responsivo)
* **XAMPP** (Ambiente local de desenvolvimento)

## 🎬 Como Executar o Projeto Localmente

Para rodar esta aplicação, você precisará de um ambiente de servidor local Apache, MySQL e PHP (Stack AMP). Recomenda-se o uso do **XAMPP**.

### Passo 1: Preparar o Ambiente
1. Baixe e instale o [XAMPP](https://www.apachefriends.org/pt_br/index.html) para o seu sistema operacional.
2. Abra o painel de controle do XAMPP e **o servidor Apache e o banco de dados MySQL**.

### Passo 2: Configurar o Banco de Dados
1. Acesse o gerenciador de banco de dados no seu navegador através do link: `http://localhost/phpmyadmin/`.
2. Crie um novo banco de dados e **importe o arquivo `cadastro.sql`** incluído neste repositório.

### Passo 3: Configurar as Credenciais
1. Na pasta raiz do projeto, localize o arquivo `conecta_exemplo.php`.
2. Renomeie o arquivo exatamente para **`conecta.php`**.
3. Se necessário, abra-o e ajuste os dados de conexão (usuário, senha e nome do banco) conforme as configurações do seu MySQL local.

### Passo 4: Mover os Arquivos para o Servidor Local
Crie uma pasta para o projeto (ex: `gerenciador-carros`) dentro do diretório de documentos públicos do XAMPP, dependendo do seu sistema:

* 🪟 **Windows:** `C:\xampp\htdocs\gerenciador-carros`
* 🐧 **Linux:** `/opt/lampp/htdocs/gerenciador-carros`
* 🍏 **macOS:** `/Applications/XAMPP/xamppfiles/htdocs/gerenciador-carros`

> 🛑 **Aviso para usuários Linux:** Se você encontrar falhas no upload de fotos, ajuste as permissões de escrita das pastas `upload` e `upload-carro` usando o comando:
> ```bash
> sudo chmod -R 775 upload upload-carro
> ```
> Para mais detalhes sobre gerenciamento de permissões, consulte o [Tutorial de chmod da Hostinger](https://www.hostinger.com.br/tutoriais/como-alterar-permissoes-e-propriedades-no-linux).

### Passo 5: Acessar a Aplicação
Abra o seu navegador de preferência e digite o endereço correspondente ao nome da pasta criada:
```text
http://localhost/gerenciador-carros
```


## 🗄️ Estrutura de Arquivos

A arquitetura do projeto diferencia claramente arquivos de **Interface (Telas)** e arquivos de **Ação (Scripts/Controladores)**:

### 📂 Diretórios
* `upload/` — Armazena as fotos de perfil dos usuários.
* `upload-carro/` — Armazena as imagens dos veículos cadastrados.

### 📄 Telas (Visualização e Formulários)
* `index.php` — Página principal contendo a listagem de carros e o menu de opções do usuário.
* `login.php` / `login-cadastro.php` — Interfaces para autenticação e triagem de usuários.
* `cadastro.php` — Formulário de registro de novos perfis.
* `perfil.php` — Painel de informações do usuário logado.
* `adicionar-carro.php` — Formulário para cadastrar novos veículos.
* `editar-carro.php` — Formulário para modificação de dados de carros existentes.
* `remover-carro.php` — Tela de confirmação para exclusão de veículos.
* `principal.php` — Interface dedicada à recuperação de senhas.
* `menu.php` — Componente estrutural do menu de navegação responsivo.

### ⚙️ Controladores e Configurações (Scripts de Ação)
* `conecta.php` — Configuração da conexão com a base de dados via PHP.
* `cadastro.sql` — Estrutura de tabelas exportada do MariaDB/MySQL.
* `acoes.php` — Script responsável pelo processamento do cadastro de novos usuários.
* `acoes-entrar.php` — Processa a validação de login e início da sessão.
* `acoes-recuperar.php` — Lógica de tratamento de recuperação de acessos.
* `acoes-carros.php` — Executa inserções e regras de negócio para os automóveis.
* `editar-acoes.php` — Processa as atualizações de dados de veículos no banco.
* `remover-acoes.php` — Realiza a exclusão física/lógica de registros do banco de dados.
* `logout.php` — Destrói a sessão ativa e desloga o usuário de forma segura.


## 🧠 Aprendizados Obtidos
O desenvolvimento desta aplicação permitiu a fixação prática de competências cruciais em engenharia de software:
* Estruturação de arquitetura monolítica organizada (Separação entre lógica e visualização).
* Domínio em instruções e manipulação de bancos de dados relacionais (**SQL / CRUD**).
* Tratamento de sessões, segurança básica de dados e gerenciamento de uploads no servidor local.
* Configurações de ambientes de infraestrutura local através de ferramentas AMP.

---
💡 *Sugestões construtivas, relatos de bugs e feedbacks sempre serão muito bem-vindos através de Issues ou Pull Requests!*
