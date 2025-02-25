 Aplicación de Asistencia Escolar
Esta es una aplicación web para gestionar la asistencia escolar, basada en PHP, MariaDB y Nginx dentro de contenedores Docker.

 Instalación y despliegue
1️. Clonar el repositorio
bash
Copiar
Editar
git clone https://github.com/raptorn0000/cuakcuak.git
cd cuakcuak
2️. Construcción de la imagen Docker
Ejecuta el siguiente comando para crear la imagen de la aplicación:

bash
Copiar
Editar
docker build -t mi-web-dockerizada .
3️. Ejecutar el contenedor
bash
Copiar
Editar
docker run -d -p 8080:80 mi-web-dockerizada
Accede a la aplicación en el navegador:
 http://localhost:8080

Uso de Docker Compose
Para desplegar la app junto con MariaDB, sigue estos pasos:

1️. Instalar Docker Compose
Si no lo tienes instalado:

bash
Copiar
Editar
sudo apt install docker-compose
2️. Ejecutar los contenedores
bash
Copiar
Editar
docker-compose up -d
3️. Verificar que los contenedores están corriendo
bash
Copiar
Editar
docker ps
🛠️ Personalización
Puedes modificar los estilos editando los archivos HTML y CSS en la carpeta pages/.
Para cambiar la configuración de la base de datos, edita el archivo docker-compose.yaml.
