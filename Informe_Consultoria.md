# 1. Cliente vs. Servidor
En una aplicación web existen dos partes, el cliente y el servidor. Cada una tiene unas funciones diferentes dentro del funcionamiento de una página web.

El código que se ejecuta en el cliente es el que se procesa directamente en el navegador del usuario. Este código se descarga desde el servidor y luego el navegador lo interpreta y ejecuta en el ordenador del usuario. Mientras que el código del servidor se ejecuta en el servidor donde se encuentra alojada la aplicación web, en el servidor se pueden utilizar lenguajes como PHP, Java o Python. Su función es recibir las peticiones del navegador, procesarlas y realizar operaciones que no deben hacerse directamente en el cliente.

### ¿Por qué no debemos confiar en los datos del cliente?
La regla de oro de la seguridad web es "nunca confíes en el cliente" porque el usuario tiene control sobre lo que ocurre en su propio navegador. Por seguridad, nunca debemos confiar únicamente en las validaciones realizadas en el cliente, ya que los datos enviados desde el navegador pueden ser manipulados por el usuario. Por eso toda validación crítica de negocio y seguridad debe realizarse en el servidor, independientemente de lo que se haga en el navegador.

# 2. Web Estática vs. Dinámica

Una web estática muestra contenido que normalmente debe modificarse manualmente en sus archivos cuando cambia la información.
Una web dinámica genera el contenido según la petición del usuario y puede obtener información actualizada desde una base de datos.
Para una tienda online permite gestionar productos, precios y stock de forma centralizada.
Además, permite funcionalidades como carritos de compra, usuarios y pedidos personalizados.

# 3. La Infraestructura (Servidores)

Un servidor web como Apache o Nginx recibe las peticiones de los usuarios y entrega archivos o las dirige hacia la aplicación.
PHP-FPM utiliza un conjunto de procesos preparados para ejecutar PHP, evitando crear un proceso nuevo para cada petición como en el CGI (Common Gateway Interface)tradicional.
Esto mejora el rendimiento y el uso de recursos cuando existen muchas peticiones simultáneas.
Laravel se ejecuta sobre PHP y se encarga de la lógica de la aplicación, como rutas, bases de datos, validaciones y respuestas.

# 4. Evaluación de Herramientas y Frameworks

Se utilizará PHP porque permite ejecutar código en el servidor, crear páginas dinámicas y trabajar con diferentes bases de datos.
Laravel 12 facilita el desarrollo de aplicaciones web mediante una estructura organizada y herramientas integradas.
Una ventaja es el uso del patrón MVC, que separa los datos, la interfaz y la lógica de la aplicación.
Otra ventaja es que proporciona mecanismos de seguridad y validación, además de una estructura de directorios definida.
