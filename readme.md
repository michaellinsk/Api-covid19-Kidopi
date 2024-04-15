# Consulte Covid - Documentação do Projeto

Este é um projeto simples de uma aplicação web para consultar dados sobre casos de COVID-19 em diferentes países.

![image](https://github.com/michaellinsk/Api-covid19-Kidopi/assets/121871171/87a883ad-5ccd-4d2c-bca7-eacd58064ab1)

## Conteúdo do Repositório

O repositório contém os seguintes arquivos:

- `index.php`: Arquivo principal da aplicação web.
- `style.css`: Arquivo de estilo para estilizar a página HTML.
- `script.js`: Arquivo de script JavaScript para interatividade na página.
- `conexao.php`: Arquivo PHP para estabelecer a conexão com o banco de dados.
- `Banco de dados MySQL`: Um banco de dados MySQL para receber a data e hora da ultimaconsulta.

## Como Executar

Para executar a aplicação, siga os passos abaixo:

1. Clone o repositório para o seu ambiente local.
2. Certifique-se de ter um servidor web (como Apache) e PHP instalados no seu sistema.
3. Coloque os arquivos no diretório raiz do seu servidor web.
4. Inicie o servidor web.
5. Acesse a página `index.php` no seu navegador.
6. Não se esqueça de Criar um banco de dados para os registro de consultas realizadas
   
Segue abaixo a estrutura de criação do banco de dados e da tabela:

CREATE DATABASE api_covid_19;

CREATE TABLE `acessos_api` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_hora` timestamp NOT NULL DEFAULT current_timestamp(),
  `pais` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci
## Funcionalidades

A aplicação permite:

- Selecionar um país para consultar os dados de COVID-19.
- Visualizar os casos confirmados e mortes por COVID-19 no país selecionado.
- Enviar os dados do país para um backend.

## Contribuindo

Se deseja contribuir com este projeto, siga estas etapas:

1. Faça um fork do repositório.
2. Crie uma branch para a sua feature (`git checkout -b feature/SuaFeature`).
3. Faça commit das suas alterações (`git commit -am 'Adiciona nova feature'`).
4. Faça push para a branch (`git push origin feature/SuaFeature`).
5. Abra um Pull Request.

## Autor

[MICHAEL RODRIGUES] - [michael.linsak01@gmail.com]

