# ProyectoDAW

Para el proyecto final tengo pensado una página web de restaurantes de comida donde puedas valorar, comentar y observar distintos restaurantes y sus menús.

DWES:<br>
Usaré Laravel 8 y php para el backend<br>
Pensé en 5 tablas: Usuarios, restaurantes, platos, ciudad y Plato_Restaurante.
![ERProyectoDaw](https://user-images.githubusercontent.com/72411758/161502722-a416585b-4978-4dd9-8f35-1f79d10f7f9c.png)
![Screenshot 2022-04-07 at 13 24 00](https://user-images.githubusercontent.com/72411758/162188398-abd93ff3-21d2-4e45-9be4-291fb99b49e9.png)

<ul><li>
Usuario contendrá los datos del mismo y podrá ser cliente, dueño de restaurante o administrador.</li>
<li>Restaurante contendrá una Fk de "tipoDeRestaurante" que indicara el tipo de comida principal, la Fk de usuario que indicara el dueño y la Fk de ciudad.</li>
<li>Platos tendrá registrados todos los platos con una pequeña descripción</li>
<li>Ciudad saldrán las ciudades que tengan al menos un restaurante registrado</li>
<li>Plato restaurante sera la tabla intermedia</li> 
</ul>
DI:<br>
El diseño será sujeto a ligeros cambios, pero la idea es seguir el modelo creado con figma: https://www.figma.com/file/TXGC0n9MJL0pu3Ghq9FhyS/I%C3%A1n-Banderas-Tomillo?node-id=0%3A1<br><br>
Habrá un login que redigirá a un registro o a la página de inicio, en la página de inicio estarán los restaurantes ordenados por defecto y se podrán ordenar con un menú en el nav por ciudad, tipo de restaurante y valoración, desde el inicio también se podrá acceder al perfil para modificar datos y desde el inicio se podrá también acceder a los restaurantes donde puedes ver los platos y acceder a los platos para ver la descripción o valorar el restaurante y ver la ubicación y número de teléfono desde otra página.<br>

La review tendrá un chart indicando las puntuaciones, habrá un logo animado con el nombre de la página, las imágenes de los platos irán en canvas y sonará un sonido cuando elijas un restaurante<br><br>
En todas las páginas habrá botones para volver directamente a las anteriores y también para deslogear, el orden natural de la página está indicado con flechas.


DWEC usaré ajax,js y jquery como requiere el proyecto.<br>
DAW desplegare con AWS si es posible aunque no descarto cambiar de opinión si encuentro algo que me llame la atención, desplegare la base de datos con AWS si acabo usandolo y mirare si es posible hacer el dominio con AWS gratis.
<br>
<br>
####Historico de cambios####<br>
10/11 Creacion del proyecto y la base de datos<br>
12/11 Poblacion de la base de datos<br>
13/11 Login y puesta de placeholders para pruebas<br>
19/11 cambios en la base de datos para añadir categorias y comentarios, esqueleto de la pagina principal y botones<br>
20/11 backend, ordenacion por ciudades y categorias<br>
27/11 css del login, el registro y la pagina principal<br>
2/12 Más css<br>
3/12 Más css y terminar el la pagina principal y el formulario del perfil<br>
4/12 Página de platos<br>
6/12 Más css<br>
8/12 Más css<br>
10/12 Finalizar el backend<br>
11/12 Finalizar funcionalidades extra<br>
13/12 finalizar Css<br>
14/12 intentar desplegar<br>
15/12 no conseguir desplegar<br>
16/12 no desplegar y retoques finales<br>


####Fin historico de  cambios####<br>
<br>
