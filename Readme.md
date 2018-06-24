# LeoWP Workflow

Framework Wordpress para a criação de temas com foco em performance

## Autor
* Leonardo Pereira
* E-mail: leonardo@leowpdeveloper.com.br
* Site: https://leowpdeveloper.com.br

## Tecnologias utilizadas
* PHP
* HTML5
* CSS3
* SASS ( BEM )
* Gulp

## Configuração do projeto
Baixe o framework no formato .zip e após extrair, arraste para dentro da pasta *wp-content/themes* dentro do seu Wordpress

### Utilização do Gulp
+ `npm install` para a instalação dos pacotes necessários para o funcionamento do gulp
+ `gulp` para compilar os arquivos
+ `gulp watch` para deixar o gulp rodando enquanto o projeto está sendo desenvolvido
Os arquivos da pasta *dev* são compilados e enviados para a pasta *dist* já minificados

## Customizações do framework

### Buttons
* `leowp-button` classe para o botāo
* `leowp-button leowp-button__red` classe para o botāo com cor definida.
* `leowp-button leowp-button__red leowp-button__medium` classe para o botāo com cor e tamanho.
#### Classes de cores ja definidas
* `leowp-button leowp-button__red`
* `leowp-button leowp-button__blue`
* `leowp-button leowp-button__green`
* `leowp-button leowp-button__yellow`
* `leowp-button leowp-button__purple`
* `leowp-button leowp-button__orange`
#### Classes de tamanho ja definidas
* `leowp-button`
* `leowp-button leowp-button__small`
* `leowp-button leowp-button__medium`
* `leowp-button leowp-button__large`
#### Utilização dos botões
```html
<a href="leowp-button">Button</a>    
<a href="leowp-button leowp-button__small">Button Small</a>    
<a href="leowp-button leowp-button__medium">Button Medium</a>    
<a href="leowp-button leowp-button__large">Button Large</a> 

<a href="leowp-button leowp-button__red">Button Red</a>    
<a href="leowp-button leowp-button__medium leowp-button__red">Button Medium Red</a>    
```

### Grid
* `leowp-grid` Classe pai do grid
#### Opções do Grid
* `leowp-grid__one`
* `leowp-grid__two`
* `leowp-grid__three`
* `leowp-grid__four`
* `leowp-grid__five`
* `leowp-grid__six`
#### Utilizaçāo do Grid
```html
<div class="leowp-grid">
    <div class="leowp-grid__one"></div>
</div>

<div class="leowp-grid">
    <div class="leowp-grid__two"></div>
    <div class="leowp-grid__two"></div>
</div>

<div class="leowp-grid">
    <div class="leowp-grid__three"></div>
    <div class="leowp-grid__three"></div>
    <div class="leowp-grid__three"></div>
</div>

<div class="leowp-grid">
    <div class="leowp-grid__four"></div>
    <div class="leowp-grid__four"></div>
    <div class="leowp-grid__four"></div>
    <div class="leowp-grid__four"></div>
</div>

<div class="leowp-grid">
    <div class="leowp-grid__five"></div>
    <div class="leowp-grid__five"></div>
    <div class="leowp-grid__five"></div>
    <div class="leowp-grid__five"></div>
    <div class="leowp-grid__five"></div>
</div>

<div class="leowp-grid">
    <div class="leowp-grid__six"></div>
    <div class="leowp-grid__six"></div>
    <div class="leowp-grid__six"></div>
    <div class="leowp-grid__six"></div>
    <div class="leowp-grid__six"></div>
</div>
```