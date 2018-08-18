# Ruan Reis Template

* * *

Após muito pesquisar e conversar com o cliente, decidimos utilizar do Wordpress como CMS padrão ao invés de criar um do zero.

![Primeiro Print do Site](/uploads/fotoreadme.png)

*Este template é uma remodelação do template criado pelo cliente via plataforma Wix.*

`style.css`:
```css
/*
Theme Name: Ruan Reis
Theme URI: http://ruanreisfotografia.com
Author: Gabriel Coelho
Author URI: http://devcoelho.com/
Description: Tema criado para a divulgação dos trabalhos de fotografia - Ruan Reis
Version: 1.0
*/
```

* * * 

## Passos para Instalação

1. Criar as páginas
    1.1. Início
    1.2. Sobre
    1.3. Contato
    1.4. Parceiros
    1.5. O Que Fazemos
2. Criar Categorias (Post>Categorias)
    2.1. Casamento
    2.2. Aniversario
    2.3. Familia
    2.4. Ensaio
3. Instalar Custom Field Suite (CFS)
4. Criar Field de Slider:
    4.1. Loop (slider_inicial)
    4.2. Nome Ensaio
    4.3. Imagem Slider
    4.4. Link
5.  Criar Field dos Posts:
    5.1. Tab 1
        5.1.1. Nome do Ensaio
        5.1.2. Descricao do Ensaio
        5.1.3. Data e Local
    5.2. Tab 2
        5.2.1. Imagem Cliente
        5.2.2. Depoimento Cliente
6. Instalar Plugin de Galeria "WordPress Gallery Plugin" by Imagely
    6.1. Gallery Settings > Basic Thumbnails
        6.1.1. Override Yes - 1280x720
        6.1.2. Images per page - 0
        6.1.3. Modelo - gallery.php
        6.1.4. Show Slide Link - no
    6.2. Other Options > Lightbox
        6.2.1. Shutter
    6.3. Other Options > Miscellaneous
        6.3.1. Permalink -> ruanreis-gallery
    6.4. Other options > Image Options
        6.4.1. Resize: 1280x720 100%