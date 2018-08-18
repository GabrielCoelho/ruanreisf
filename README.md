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
    1. Início
    2. Sobre
    3. Contato
    4. Parceiros
    5. O Que Fazemos
2. Criar Categorias (Post>Categorias)
    1. Casamento
    2. Aniversario
    3. Familia
    4. Ensaio
3. Instalar Custom Field Suite (CFS)
4. Criar Field de Slider:
    1. Loop (slider_inicial)
    2. Nome Ensaio
    3. Imagem Slider
    4. Link
5.  Criar Field dos Posts:
    1. Tab 1
        1. Nome do Ensaio
        2. Descricao do Ensaio
        3. Data e Local
    2. Tab 2
        1. Imagem Cliente
        2. Depoimento Cliente
6. Instalar Plugin de Galeria "WordPress Gallery Plugin" by Imagely
    1. Gallery Settings > Basic Thumbnails
        1. Override Yes - 1280x720
        2. Images per page - 0
        3. Modelo - gallery.php
        4. Show Slide Link - no
    2. Other Options > Lightbox
        1. Shutter
    3. Other Options > Miscellaneous
        1. Permalink -> ruanreis-gallery
    4. Other options > Image Options
        1. Resize: 1280x720 100%