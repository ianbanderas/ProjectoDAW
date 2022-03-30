# ProyectoDAW

Para el proyecto final tengo pensado una página web de restaurantes de comida donde puedas valorar, comentar y observar distintos restaurantes y sus menús.

DWES:<br>
Pensé en 5 tablas: Usuarios, restaurantes, platos, ciudad y tipo de restaurante.
<ul><li>
Usuario contendrá los datos del mismo y podrá ser cliente, dueño de restaurante o administrador.</li>
<li>Restaurante contendrá una Fk de "tipoDeRestaurante" que indicara el tipo de comida principal, la Fk de usuario que indicara el dueño y la Fk de ciudad.</li>
<li>Platos tendrá registrados todos los platos con una pequeña descripción</li>
<li>Ciudad saldrán las ciudades que tengan al menos un restaurante registrado</li>
<li>TipoDeRestaurante saldrán los tipos de restaurante con al menos un restaurante</li> 
</ul>
DI:<br>
El diseño será sujeto a ligeros cambios, pero la idea es seguir el modelo creado con figma: https://www.figma.com/file/TXGC0n9MJL0pu3Ghq9FhyS/I%C3%A1n-Banderas-Tomillo?node-id=0%3A1<br><br>
Habrá un login que redigirá a un registro o a la página de inicio, en la página de inicio estarán los restaurantes ordenados por defecto y se podrán ordenar con un menú en el nav por ciudad, tipo de restaurante y valoración, desde el inicio también se podrá acceder al perfil para modificar datos y desde el inicio se podrá también acceder a los restaurantes donde puedes ver los platos y acceder a los platos para ver la descripción o valorar el restaurante y ver la ubicación y número de teléfono desde otra página.<br>

La review tendrá un chart indicando las puntuaciones, habrá un logo animado con el nombre de la página, las imágenes de los platos irán en canvas y sonará un sonido cuando elijas un restaurante<br><br>
En todas las páginas habrá botones para volver directamente a las anteriores y también para deslogear, el orden natural de la página está indicado con flechas.


