# Proyecto SGSSI - Docker LAMP

#### Hugo Ran, Paula Pinto y Oier Diez

Para desplegar el proyecto mediante docker, seguir las siguientes instrucciones:
1. Situar la carpeta docker-lamp en el directorio elegido, por ejemplo, en ==/home/user/SGSSI==
2. En la terminal, introducir los siquientes comandos:

- Primero, nos ==situamos la terminal dentro del directorio== donde se encuentre nuestro proyecto, en este caso:
```bash
$ cd /home/user/SGSSI/docker-lamp
```
- Después, construimos la ==imagen web==:
```bash
$ sudo docker build -t="web" ./
```
- Por último, se ==despliegan los servicios== mediante:
```bash
$ sudo docker-compose up
```
3. Una vez hemos completado estos pasos, visitamos la direccion ==[localhost:81](http://localhost:81)==
Tras haber hecho esto, ya deberiamos de ser capaces de visualizar correctamente el sistema.