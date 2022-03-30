# ProjectoDAW

Para el projecto final tengo pensado una página web de restaurantes de comida donde puedas valorar, comentar y observar distintos restaurantes y sus menus.

DWES:
Pense en 5 tablas: Usuarios, restaurantes, platos, ciudad y tipo de restaurante.
-Usuario contendra los datos del mismo y podra ser cliente, dueño de restaurante o administrador.
-Restaurante contendra una Fk de "tipoDeRestaurante" que indicara el tipo de comida principal, la Fk de usuario que indicara el dueño y la Fk de ciudad.
-Platos tendrá registrados todos los platos con una pequeña descrición
-Ciudad saldrán las ciudades que tengan al menos un restaurante registrado
-TipoDeRestaurante saldrán los tipos de restaurante con al menos un restaurante 

DI:
El diseño sera sujeto a ligeros cambios pero la idea es seguir el modelo creado con figma https://www.figma.com/file/TXGC0n9MJL0pu3Ghq9FhyS/I%C3%A1n-Banderas-Tomillo?node-id=0%3A1 donde habra un login que redigira a un registro o a la página de inicio, en la página de inicio estarán los restaurantes ordenados por defecto y se pondran ordenar con un menu en el nav por ciudad, tipo de restaurante y valoración. 
Desde el inicio tambien se podrá acceder al perfil para modificar datos y desde el inicio se podrá también acceder a los restaurante donde puedes ver los platos y acceder a los platos para ver la descripción o valorar el restaurante y ver la ubicación y número de teléfono desde otra página.
En todas las páginas habrá botones para volver directamente a las anteriores y también para deslogear, el orden natural de la página esta indicado con flechas.

La review tendrá un chart indicando las puntiaciones, habrá un logo animado con el nombre de la página,las imagenes de los platos iran en canvas y sonara un sonido cuando eligas un restaurante 

