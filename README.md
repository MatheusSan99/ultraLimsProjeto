[![Typing SVG](https://readme-typing-svg.herokuapp.com/?lines=Welcome+To+My+GitHub;Project+Ultra+Lims+Author+Matheus;Please+Feel+Free+To+Contact+Me)](https://git.io/typing-svg)

### Este é o repositório para desenvolvimento do projeto ConsultSystem

## Projeto: Ultra Lims!

## ℹ️ O que é?

Trata-se de um projeto com fins de estudo, onde se consulta um cep através da API dos correios e salva ela no banco de dados, podendo consultar os dados cadastrados e exclui-los, também é possivel incluir uma lista de ceps via API JSON importada.

## 🔧 Como foi desenvolvido? 
Utilizando os conceitos estudados até o momento foi construído um sistema de consultas de endereços com banco de dados MySql 
utilizando recursos para registrar endereços, adicioná-los com a API dos correios, e importar via JSON. 

As páginas foram desenvolvidas utilizando PHP, Laravel e Bootstrap. 

Está incluído dentro do sistema áreas para: visualização dos endereços, adicionar novos, também existe um sistema de validação e um sistema de mensagens após as requisições ao servidor.

## 📚 Como Funciona ?

- Antes de tudo, é necessário criar um schema no sql com o nome 'ultralims'.

- Não esqueça de renomear o .env.example para .env e colocar o nome do database que criou, caso contrário o servidor não funcionará

- Para fazer o projeto funcionar, clonar o repositório, e rodar os seguintes comandos no terminal: NPM INSTALL, COMPOSER INSTALL, e não se esqueça de ligar o servidor MYSQL, após isso, rodar as migrations (php artisan migrate:fresh).

- Subir o servidor com php artisan serve e acessar o projeto.

- Caso peça uma key rode o comando  php artisan key:generate

- Caso encontre algum erro, sinta-se livre para me contatar.
## 📚 Autor

* [Matheus](https://www.linkedin.com/in/matheussan/)
