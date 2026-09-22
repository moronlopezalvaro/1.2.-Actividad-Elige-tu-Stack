# 1. Cliente vs. Servidor
En una aplicación web existen dos partes, el cliente y el servidor. Cada una tiene unas funciones diferentes dentro del funcionamiento de una página web.

### El cliente
El código que se ejecuta en el cliente es el que se procesa directamente en el navegador del usuario. Este código se descarga desde el servidor y luego el navegador lo interpreta y ejecuta en el ordenador del usuario.

Por ejemplo, una validación de un formulario realizada mediante JavaScript se ejecuta en el propio navegador.

### El servidor
El código del servidor se ejecuta en el servidor donde se encuentra alojada la aplicación web.

En el servidor se pueden utilizar lenguajes como PHP, Java o Python. Su función es recibir las peticiones del navegador, procesarlas y realizar operaciones que no deben hacerse directamente en el cliente.

Por ejemplo, el servidor puede consultar una base de datos, comprobar los datos de un usuario o realizar operaciones relacionadas con la lógica de la aplicación. Después, devuelve una respuesta al navegador.

### ¿Por qué no debemos confiar en los datos del cliente?
La regla de oro de la seguridad web es "nunca confíes en el cliente" porque el usuario tiene control sobre lo que ocurre en su propio navegador. Por seguridad, nunca debemos confiar únicamente en las validaciones realizadas en el cliente, ya que los datos enviados desde el navegador pueden ser manipulados por el usuario. Por eso toda validación crítica de negocio y seguridad debe realizarse en el servidor, independientemente de lo que se haga en el navegador.

# 2. Web Estática vs. Dinámica

Para una tienda online una página web dinámica ofrece varias ventajas frente a una página estática tradicional, principalmente porque permite trabajar con información que cambia constantemente y con datos almacenados en una base de datos.

Una web estática muestra prácticamente el mismo contenido a todos los usuarios y para cambiar un producto habría que modificar los archivos de la página manualmente. Esto puede resultar poco práctico para una tienda online con muchos productos. Mientras que una web dinámica genera el contenido en el momento en el que el usuario realiza una petición. El servidor puede consultar una base de datos y mostrar la información actualizada.

### Ventajas para una tienda online

- Gestión de productos: podemos almacenar los productos en una base de datos y mostrar automáticamente su nombre, precio, imagen y descripción.
- Información actualizada: si cambia el precio o el stock de un producto, podemos modificarlo en la base de datos sin tener que cambiar manualmente cada página.
- Carrito de compra: permite crear un carrito personalizado para cada usuario y mantener los productos que ha seleccionado.

# 3. La Infraestructura (Servidores)

Un servidor web es el encargado de recibir las peticiones que realizan los usuarios desde su navegador y devolverles una respuesta. Algunos servidores web muy utilizados son Apache y Nginx.

Por ejemplo, cuando un usuario entra en una tienda online, el servidor web recibe la petición y se encarga de entregar los archivos necesarios o de enviar la petición al sistema que ejecuta PHP.

### Apache y Nginx

Apache y Nginx pueden encargarse de servir archivos estáticos como HTML, CSS, JavaScript e imágenes. También pueden trabajar junto con PHP para generar páginas dinámicas.

Apache utiliza una arquitectura basada principalmente en procesos o hilos, es muy flexible y permite configuraciones mediante archivos, mientras que Nginx utiliza una arquitectura basada en eventos, por lo que puede gestionar muchas conexiones simultáneas utilizando pocos recursos.

### PHP-FPM frente a CGI

Para ejecutar código PHP existen diferentes métodos. Uno de los más antiguos es CGI (Common Gateway Interface). Con CGI, cada vez que llega una petición que necesita ejecutar PHP, se puede crear un nuevo proceso para ejecutar el programa PHP. Esto supone un mayor consumo de recursos cuando hay muchas peticiones al mismo tiempo.

PHP-FPM (PHP FastCGI Process Manager) en lugar de crear un proceso nuevo para cada petición, mantiene varios procesos PHP preparados para atender las solicitudes. Esto tiene varias ventajas como mejor rendimiento, menor consumo de recursos y una mejor gestión de muchas peticiones.

Por eso PHP-FPM es una opción más adecuada que el CGI tradicional para una aplicación web moderna, especialmente cuando esperamos que nuestra tienda online tenga bastantes usuarios.

### Papel de Laravel

Laravel es un framework de PHP que facilita el desarrollo de aplicaciones web. No sustituye exactamente al servidor web como Apache o Nginx, sino que trabaja junto a ellos.

Laravel se encarga de muchas tareas relacionadas con la lógica de la aplicación como:

- Gestionar las rutas de la aplicación.
- Procesar las peticiones de los usuarios.
- Trabajar con bases de datos.
- Gestionar usuarios y autenticación.
- Validar los datos recibidos mediante formularios.
- Organizar la lógica del proyecto.
- Generar las respuestas que se enviarán al usuario.

Por ejemplo, en nuestra tienda online, Nginx podría recibir la petición de un usuario y enviarla a PHP-FPM, que ejecutaría Laravel. Laravel podría entonces consultar la base de datos para obtener los productos y devolver la información correspondiente.

# 4. Evaluación de Herramientas y Frameworks

Para el desarrollo de la tienda online se va a utilizar PHP junto con el framework Laravel 12 ya que ambos permiten desarrollar aplicaciones web dinámicas de una forma organizada y adecuada para un proyecto de comercio electrónico.

### ¿Por qué utilizar PHP?

Una de las principales ventajas de PHP es que puede ejecutarse en el servidor y generar contenido dinámico dependiendo de las peticiones realizadas por los usuarios, además tiene una gran cantidad de documentación, herramientas y frameworks disponibles. También se integra fácilmente con diferentes sistemas de bases de datos, como MySQL, PostgreSQL o SQLite, que son importantes para almacenar información de productos, usuarios y pedidos.
Por eso es una opción adecuada para desarrollar la parte backend de nuestra tienda online.

## ¿Por qué Laravel 12?

Laravel 12 es un framework de PHP que proporciona una estructura y diferentes herramientas para facilitar el desarrollo de aplicaciones web. La versión 12 requiere PHP 8.2 o superior y recibió mejoras y actualizaciones de sus dependencias.

Las principales ventajas que considero importantes para el proyecto es que Laravel permite organizar la aplicación siguiendo el patrón Modelo-Vista-Controlador (MVC). Proporciona diferentes herramientas que ayudan a desarrollar aplicaciones más seguras. Por ejemplo, dispone de mecanismos para la validación de datos, autenticación, protección de sesiones y cifrado.Esto es especialmente importante en una tienda online, ya que vamos a trabajar con cuentas de usuarios, pedidos y otros datos que deben estar protegidos. Otra ventaja de Laravel es que proporciona una estructura de carpetas definida, por lo que cada parte de la aplicación tiene un lugar determinado.