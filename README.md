# Hamburgueria

Um sistema de e-commerce para uma hamburgueria, desenvolvido com Laravel. Este projeto está atualmente em desenvolvimento e inclui funcionalidades de carrinho de compras, gerenciamento de produtos, pedidos e pagamentos.

## Índice

- [Visão Geral](#visão-geral)
- [Status do Projeto](#status-do-projeto)
- [Instalação](#instalação)
- [Configuração](#configuração)
- [Uso](#uso)
- [Funcionalidades Planejadas](#funcionalidades-planejadas)
- [Contribuição](#contribuição)
- [Licença](#licença)

## Visão Geral

Esta aplicação está sendo desenvolvida para gerenciar os pedidos de uma hamburgueria online. Os clientes poderão navegar pelo menu, adicionar itens ao carrinho, fazer pedidos e efetuar pagamentos.

## Status do Projeto

**Status Atual:** Em desenvolvimento 🚧

Atualmente, estamos trabalhando nas seguintes funcionalidades:
- Configuração inicial do projeto
- Implementação da autenticação de usuários
- Criação das primeiras rotas e controladores

## Instalação

Para começar, clone este repositório em sua máquina local:

```bash
$ git clone https://github.com/seu-usuario/hamburgueria-online.git
```
Em seguida, navegue até o diretório do projeto:

```bash
$ cd hamburgueria-online
```

Instale as dependências do PHP com o Composer:

```bash
$ composer install
```

## Configuração
Crie um arquivo .env a partir do arquivo de exemplo:

```bash
$ cp .env.example .env
```
Gere a chave da aplicação:

```bash
$ php artisan key:generate
```

Configure suas variáveis de ambiente no arquivo .env:

- Configurações do banco de dados
- Configurações de e-mail
- Configurações de pagamento

Execute as migrações para preparar o banco de dados:

```bash
$ php artisan migrate
```

## Uso
Para iniciar o servidor de desenvolvimento, execute:

```bash
$ php artisan serve
```

acesse a aplicação em `http://localhost:8000`.

## Funcionalidades Planejadas
- Autenticação de Usuários: Registro, login e gerenciamento de contas.
- Gestão de Produtos: Adicionar, editar e remover produtos do menu.
- Carrinho de Compras: Adicionar itens ao carrinho e calcular o total.
- Pedidos: Realizar e visualizar pedidos.
- Pagamentos: Integrado com gateways de pagamento para processar transações.
- Administração: Painel administrativo para gerenciar a aplicação.

## Licença

Este projeto está licenciado sob a licença MIT. Isso significa que você é livre para usar, modificar e distribuir o código conforme as condições da licença. Para mais detalhes, consulte o arquivo [LICENSE](LICENSE).
