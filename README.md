# 🚀 Actividades del Taller: Creación de Portafolio Web

Aquí llevaremos el registro de nuestro avance en cada sesión. Si te pierdes en algún momento, revisa en qué paso vamos y apóyate con tu equipo. Nuestro objetivo final es construir un portafolio profesional basado en [este diseño de Figma](https://www.figma.com/files/project/566141154).

## ✅ Clase 1: Preparación del Entorno (Virtual)
*¡Completada el miércoles 03 de marzo!*
- [x] **Paso 1:** Instalación de servidor local (Laragon) y editor de código (Visual Studio Code). [Guía](https://github.com/paoGonzalezUDG/proyecto-taller-web/wiki/Gu%C3%ADa-de-Instalaci%C3%B3n:-Laragon-(Windows))
- [x] **Paso 2:** Instalación de gestores de dependencias (Node.js y Composer). [Guía](https://github.com/paoGonzalezUDG/proyecto-taller-web/wiki/Gu%C3%ADa:-Instalando-Node.js-y-Composer-(Los-Motores-de-tu-C%C3%B3digo))
- [x] **Paso 3:** Configuración del navegador (Extensiones de Chrome para desarrolladores). [Guía](https://github.com/paoGonzalezUDG/proyecto-taller-web/wiki/Gu%C3%ADa:-Potenciando-tu-Navegador-con-Extensiones-de-Chrome)
- [x] **Paso 4:** Creación y configuración de cuenta en GitHub y Git local. [Guía](https://github.com/paoGonzalezUDG/proyecto-taller-web/wiki/Gu%C3%ADa:-Instalando-Git-y-Creando-tu-Cuenta-en-GitHub)
- [x] **Paso 5:** Creación de cuenta y verificación en Figma Education. [Guía](https://github.com/paoGonzalezUDG/proyecto-taller-web/wiki/Gu%C3%ADa:-Obteniendo-Figma-Premium-%C2%A1Gratis-para-Estudiantes!)

## 🎨 Clase 2: Del Diseño a la Estructura (Figma a HTML)

- [ ] **Paso 1:** ¿Cómo veo mis plantillas de Figma? y activo *Dev Mode*.
      
      https://www.figma.com/files/project/566141154

https://github.com/user-attachments/assets/fa416156-5d13-48f9-aeac-ce11cef68a5a

Ahora elige tu proyecto en Figma

Si no tienes conocimientos previos en `CSS` y/o `HTML`, vamos a trabajar con el `proyecto base` donde nos iremos paso a paso.

      https://www.figma.com/design/7WS34YV1PlTk9uVWf6c03M/Proyecto-base

Si ya tienes conocimientos, te invito a elegir alguno de los proyectos disponibles. Tómalo como un reto: una oportunidad para aprender algo nuevo, practicar y salir un poco de tu zona de confort.

Recuerda `no usar IA` para resolver las actividades.

La idea del taller es que desarrolles tu propio criterio y habilidades. Si la usas para hacer el trabajo, el aprendizaje se pierde… y entonces este taller no tendría sentido.

Reto 1
      
      https://www.figma.com/design/TZxOCQ0KVCviMrt3kuKzfe/Proyecto-reto-1?m=auto&t=hqsGCKyfLTKdUMgi-6
      
Reto 2

      https://www.figma.com/design/dO2PQd4nZb0EnOVwIr7fEs/Proyecto-reto-2?m=auto&t=hqsGCKyfLTKdUMgi-6
      
Reto 3

      https://www.figma.com/design/UwQchzFvLvhMJIoEHZReOS/Proyecto-reto-3?m=auto&t=hqsGCKyfLTKdUMgi-6
      
Reto 4

      https://www.figma.com/design/KG8CyCI5EtWvMDibQBZxO1/Proyecto-reto-4?m=auto&t=hqsGCKyfLTKdUMgi-6
      
Reto 5

      https://www.figma.com/design/lBxDnkhkiKtwZR2sllPIty/Proyecto-reto-5?m=auto&t=hqsGCKyfLTKdUMgi-6

- [ ] **Paso 2:** Descargar la estructura inicial. Abre la terminal, dirígete a la carpeta de Laragon (`cd C:\laragon\www`) y clona el repositorio del taller:
      
      `git config --global user.name "TU_USUARIO_EN_GITHUB"`

      `git config --global user.email "TU_CORREO_EN_GITHUB"`
      
      `git clone https://github.com/paoGonzalezUDG/proyecto-taller-web.git`
      
 https://github.com/user-attachments/assets/ec6b69eb-6207-418d-b3cc-b0c00261bb4e

- [ ] **Paso 3:** Abre la nueva carpeta descargada (`proyecto-taller-web`) en Visual Studio Code y verifica que el prefijo `npm` no marque error.
      
      npm i         

https://github.com/user-attachments/assets/0c3350a6-ec40-40a2-ab9c-539d860c1529

Corregir errores. (`En caso de que marque alguno`)
      
     <img width="1699" height="487" alt="Captura de pantalla 2026-03-10 150829" src="https://github.com/user-attachments/assets/b07dd54a-21ad-4f6b-9eff-5751884a5968" />

https://github.com/user-attachments/assets/dc566af8-db9a-40e7-bc60-87d708023177

      Si aún no se corrige el problema, intenta con los siguientes videos

[Can't run the code "npm-install" in Visual Studio Code | Running Scripts is disabled on this System](https://www.youtube.com/watch?v=t9_ziPwYUWI)

[NodeJS término npm no sé reconoce como nombre de un cmdlet](https://www.youtube.com/shorts/mKwI95AtunA)
      
- [ ] **Paso 4:** Ejecutar Laragon y mostrar proyecto.

Borrar cache

      npm cache clean --force

Correr servicios

      npm run watch

https://github.com/user-attachments/assets/3a9b7382-3941-45f7-bd94-8c47da2b00f6

- [ ] **Paso 5:** Extraer assets (ilustraciones) y variables de diseño (colores, tipografías) desde Figma.

https://github.com/user-attachments/assets/40a88f2b-d212-4990-94fb-72117b18b954
      
- [ ] **Paso 6:** Crea tu propia rama y muévete a ella (`cambia "TU_NOMBRE" por tu nombre real sin espacios ni acentos`):

Actualiza tu repositorio

  `git pull origin main`

Crea tu propia rama
      
  `git checkout -b portafolio-TU_NOMBRE`

Ejemplo:
      
  `git checkout -b portafolio-paola-gonzalez`

Si te equivocaste, no pasa nada, solo (`reenómbralo`)

Asegúrate de estar dentro de la rama creada (`portafolio-TU_NOMBRE_CORREGIDO`)

  `git branch -m portafolio-TU_NOMBRE_CORREGIDO`

Ejemplo:
      
  `git branch -m portafolio-paola-delgado`

https://github.com/user-attachments/assets/9ead90da-3735-456c-b5a0-1768d688d279

(`No hagas este paso`)

Ya lo subí a GitHub (ya hice push):

  `git push -u origin portafolio-TU_NOMBRE_CORREGIDO`

  `git push origin --delete portafolio-TU_NOMBRE_EQUIVOCADO`

- [ ] **Paso 7:** Maquetar el esqueleto HTML semántico en el archivo `index.php` base: Hero, About, Projects y Contact.

      A continuación, te explico la arquitectura completa de nuestro proyecto web MVC (Modelo-Vista-Controlador). 
      Para este paso, enfócate únicamente en la carpeta "views/index":

      proyecto-taller-web/
      ├── assets/                  <-- 1. Archivos crudos de diseño (SASS, JS modular). Aquí daremos estilo a la web.
      │   ├── common-sass/               <-- Librerías externas de diseño (Bootstrap, FontAwesome, etc.).
      │   ├── front/                     <-- Variables generales, colores base, configuración de temas.
      │   ├── js/                        <-- Scripts de JavaScript separados en módulos funcionales.
      │   ├── pages/                     <-- Estilos SASS y JS específicos por cada página (ej. home).
      │   ├── app.js                     <-- Script principal que agrupa todo el código de JS.
      │   └── app.scss                   <-- Archivo principal de SASS que importa todos los estilos.
      ├── controllers/             <-- 2. (Lógica PHP). Procesan la información antes de mostrar la pantalla.
      ├── core/                    <-- 3. (Núcleo). Configuraciones maestras, variables globales y accesos.
      ├── css/                     <-- 4. Estilos compilados listos para usar (Generados automáticamente, NO EDITAR NI ELIMINAR).
      ├── fonts/                   <-- 5. Tipografías locales del proyecto (.woff, .ttf).
      ├── images/                  <-- 6. Imágenes que se crean con Node.js en formato (.webp). (Generados automáticamente, NO EDITAR NI ELIMINAR).
      ├── img/                     <-- 7. Imágenes públicas, logotipos e ilustraciones (.jpg, .png, .webp).
      ├── js/                      <-- 8. JavaScript minificado (Generado automáticamente, NO EDITAR NI ELIMINAR).
      ├── languages/               <-- 9. Diccionarios PHP con textos para hacer la web bilingüe.
      ├── node_modules/            <-- 10. Paquetes instalados por NPM. (Pesa mucho y Git lo ignora).
      ├── templates/               <-- 11. Plantillas reutilizables para toda la página.
      │   ├── head.php                   <-- Metadatos, SEO, título de pestaña y vínculos a CSS.
      │   ├── header.php                 <-- Menú de navegación principal (la barra de arriba).
      │   └── footer.php                 <-- Pie de página (sección inferior con copyright/redes).
      ├── views/                   <-- 12. (Vistas) Las pantallas de nuestro sistema (Páginas).
      │   ├── aviso-de-privacidad/       <-- Vista legal del sitio. (toda página debe tener una)
      │   ├── error/                     <-- Páginas personalizadas si el usuario se pierde (Ej. Error 404).
      │   └── index/                     <-- 🎯 ¡EL ÁREA DE TRABAJO DE HOY!
      │       └── index.php                    <-- 🎯 ARCHIVO DONDE MAQUETARÁN EL CÓDIGO HTML DE SU PORTAFOLIO.
      ├── .gitignore               <-- Le dice a Git qué archivos privados/pesados debe ignorar.
      ├── .htaccess                <-- Configura nuestro servidor web (URLs limpias, caché, seguridad).
      ├── index.php                <-- Portero principal. Todo el tráfico de la web pasa por aquí primero.
      ├── package.json             <-- Lista de compras de Node.js (Nos dice qué instalar con "npm i").
      └── webpack.mix.js           <-- Laravel Mix para compilar nuestro SASS a CSS.

Así debe verse tu proyecto clonado

Solo fíjate en la `estructura de las carpetas`, los iconos y tema de Visual Studio Code varían según tus extensiones instaladas

  <img width="213" height="686" alt="Captura de pantalla 2026-03-11 083002" src="https://github.com/user-attachments/assets/b15b0ff8-378e-47a6-bbed-49f76dd7faeb" />

Ahora editemos el `index.php` y agreguemos un párrafo `<p>` nuevo en la etiqueta `<body>`.

Recuerda que de ahora en adelante, debes estar en tu rama creada (`portafolio-TU_NOMBRE`)

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu interdum mauris. Nunc eu sem quis odio egestas consectetur. Mauris posuere fermentum mi, sed finibus lectus tincidunt vitae. Phasellus rhoncus congue dolor, et vehicula sapien ornare mattis. Duis ac nisl congue, rutrum nisl non, maximus nisl. Sed ultrices interdum nisl, eget viverra lacus ultricies vitae. Ut arcu purus, condimentum mattis semper eget, ultricies et metus. Praesent magna nibh, cursus id tempor a, blandit ac dolor. Nam faucibus ullamcorper dolor eget euismod. Etiam placerat purus ut nisl sagittis tempus. Donec commodo eleifend tellus id fermentum. Mauris porta consequat ligula. Donec diam augue, aliquet at elit sit amet, volutpat blandit mauris. Nunc nunc nisl, placerat id tincidunt nec, tempor a ipsum.</p>

https://github.com/user-attachments/assets/41587fd2-8140-4e12-bdbc-728b14b88394

- [ ] **Paso 8:** Ya quiero subir mis cambios al repositorio remoto (`el que está en línea`):

Agregar los archivos del proyecto

  `git add .`

Al realizar un `commit`, es indispensable incluir un `mensaje claro y descriptivo` que explique el cambio realizado. Entre más específico sea el mensaje, mejor.

`Evita repetir` el mismo mensaje en todos tus commits. Cada cambio debe tener un `mensaje único`, ya que usar mensajes genéricos es una mala práctica y dificulta entender el historial del proyecto.

  `git commit -m "TU_CAMBIO_DE_CODIGO_ESPECIFICO"`

Ejemplo

  `git commit -m "Agrega párrafo de texto en la sección de contenido"`

Sube tu avance a tu rama específica (`portafolio-TU_NOMBRE`) en GitHub por primera vez:
      
  `git push -u origin portafolio-TU_NOMBRE`

Ejemplo

  `git push -u origin portafolio-paola-delgado`

https://github.com/user-attachments/assets/57775b0a-7da7-402b-916c-ca16425e6036


![Git cheatsheet](https://github.com/user-attachments/assets/cca72d61-256d-42c1-83ff-903b1c30f0d2)

[¿Cómo descargar actualizaciones de Paola?](https://github.com/paoGonzalezUDG/proyecto-taller-web/wiki/%23%23-%F0%9F%94%84-Gu%C3%ADa-de-Supervivencia:-%C2%BFC%C3%B3mo-descargar-actualizaciones-de-Paola%3F)
