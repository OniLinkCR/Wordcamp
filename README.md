# Wordcamp
Este es el codigo ya debidamente depurado de la charla que hice ayer (themes desde cero). Cualquier duda, me pueden preguntar [por Twitter](https://twitter.com/MarcoBL10)

Enlaces útiles
======
Voy a ponerle enlaces de cada archivo o cosas que siento que pueden investigar por su propia cuenta para que puedan ir expandiendo su conocimiento en cuanto a cómo desarrollar sus propios temas.

## Como crear themes en WordPress
Este es un excelente enlace, que se los recomiendo a ciegas: [Developing a WordPress Theme from Scratch ](https://www.google.com "Tania Rascia"). La documentación oficial de WordPress es: [Getting Started with themes](https://developer.wordpress.org/themes/getting-started/)

## El archivo functions.php
El archivo `functions.php` sirve para ejecutar el código de nuestra plantilla. La documentación oficial del `functions.php` [es ésta](https://developer.wordpress.org/themes/basics/theme-functions/)

## Jerarquía de un template en WordPress
Para saber cuáles archivos de WordPress utiliza para cargar, la documentación oficial es la siguiente: [Template Hierarchy in WordPress](https://developer.wordpress.org/themes/basics/template-hierarchy/). Asimismo, si desean estudiar la anatomía de una página en WordPress, la siguiente [guía de Yoast](https://yoast.com/wordpress-theme-anatomy/) es excepcional.

## The Loop
The Loop, como dije ayer, es el corazón de WordPress, por que es por donde itera sobre los posts según el tipo de template file que encuentra. La documentación oficial de WordPress es un poco extensa pero vale la pena leerla: [The Loop](https://codex.wordpress.org/The_Loop). Recomendación adicional, la siguiente guía: [The WordPress Loop Explained For Beginners](https://www.elegantthemes.com/blog/tips-tricks/the-wordpress-loop-explained-for-beginners)

## Template Parts
Los template parts en WordPress ayudan a tener un código más limpio y ordenado además de que son componentes muy útiles para posteriormente re-utilizar en otros proyectos. Es tratar de no repetir lo mismo. La [documentación oficial de WordPress](https://developer.wordpress.org/reference/functions/get_template_part/), y [ésta tutoría.](http://buildwpyourself.com/get-template-part/)

## Alter Main Loop
Por si quieren alterar [el main loop](https://codex.wordpress.org/Plugin_API/Action_Reference/pre_get_posts) para un caso o necesidad en específico. Esta [guía de Tom McFarlin](https://tommcfarlin.com/exclude-categories-from-wordpress-loop/) es muy buena.

## Body Class
Si necesitan alterar la clase del body de una página servida en WordPress, para referenciarla mediante CSS, [la documentación oficial](https://codex.wordpress.org/Plugin_API/Filter_Reference/body_class) te sugiere el cómo. 
