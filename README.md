## Projeto treinado no curso de Clean Arch na Alura

##

### Conceitos e técnicas aprendidos no treinamento:

##

**Conhecendo o sistema**:

* O que é arquitetura de software

* O que são entidades e que elas possuem uma identidade única

* Sobre Value Objects e que a sua igualdade se dá pela comparação dos seus valores


**Enriquecendo o domínio**:

* Sobre o relacionamento entre entidades e Value Objects

* O conceito de fábrica no mundo do estudo de design de código

* Sobre named constructors e suas vantagens na legibilidade


**Camadas**:

* Que podemos utilizar namespaces do PHP para separar a nossa aplicação em módulos que façam sentido

* Alguns padrões arquiteturais

* A aplicar conceitos de padrões arquiteturais ao separar nossa aplicação em camadas. 
Começamos pelo domínio



**Repositórios**:

* O conceito de repositórios, já visto no treinamento de PDO

* A motivação para separar os repositórios em mais de uma camada

* Que é possível criar implementações que sejam mais fáceis de utilizar em nossos testes



**Services**:

* O conceito de Services

* Que há Domain, Application e Infrastructure Services

    * Domain Services são classes que representam uma ação entre mais de uma entidade

    * Application Services controlam o fluxo de alguma regra em nossa aplicação

    * Infrastructure Services são implementações de interfaces presentes nas camadas de domínio ou de aplicação



**Use cases**:

* Como fornecer acesso à nossa aplicação, através de Use Cases

* Na prática, que web, persistência e frameworks podem ser meras ferramentas

* Na prática, as vantagens de modelar uma aplicação, partindo do seu domínio
