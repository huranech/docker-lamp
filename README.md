# Proyecto SGSSI - Docker LAMP

#### Hugo Ran, Paula Pinto y Oier Diez

Para desplegar el proyecto mediante docker, seguir las siguientes instrucciones:
1. Situar la carpeta docker-lamp en el directorio elegido, por ejemplo, en __/home/user/SGSSI__
2. En la terminal, introducir los siquientes comandos:

- Primero, nos __situamos la terminal dentro del directorio__ donde se encuentre nuestro proyecto, en este caso:
```bash
$ cd /home/user/SGSSI/docker-lamp
```
- Después, construimos la __imagen web__:
```bash
$ sudo docker build -t="web" ./
```
- Por último, se __despliegan los servicios__ mediante:
```bash
$ sudo docker-compose up
```
3. Ahora, para importar la base de datos que utiliza el sistema, visitamos la dirección __[localhost:8890](http://localhost:8890/)__

- Ingresamos en phpMyAdmin con las credenciales: usuario = admin y contraseña = test.

- Ahora tenemos que seleccionar __database__ a la izquierda de la pantalla y hacer click en __importar__ en la parte superior de la pantalla.

- A continuación pinchamos en __examinar__ y seleccionamos el archivo __database.sql__ que se encuentra dentro de la carpeta __docker-lamp__ en el directorio donde lo hemos situado.

- Finalmente, pulsamos el botón __importar__ que aparece en la parte inferior de la pantalla y la base de datos debería haberse importado.

4. Una vez hemos completado estos pasos, visitamos la direccion __[localhost:81](http://localhost:81)__
Tras haber hecho esto, ya deberiamos de ser capaces de visualizar correctamente el sistema.