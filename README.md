# 🚀 Actividades del Taller: Creación de Portafolio Web

Aquí llevaremos el registro de nuestro avance en cada sesión. Si te pierdes en algún momento, revisa en qué paso vamos y apóyate con tu equipo. Nuestro objetivo final es construir un portafolio profesional basado en [este diseño de Figma](https://www.figma.com/design/XUBbeQRfPIwIEfSFBgzEjW/Illustration-Based-Portfolio-Website-Template--Community-?node-id=0-1&t=2z3KwNk2RVX5XoB1-1).

## ✅ Clase 1: Preparación del Entorno (Virtual)
*¡Completada el miércoles 03 de marzo!*
- [x] **Paso 1:** Instalación de servidor local (Laragon) y editor de código (Visual Studio Code).
- [x] **Paso 2:** Instalación de gestores de dependencias (Node.js y Composer).
- [x] **Paso 3:** Configuración del navegador (Extensiones de Chrome para desarrolladores).
- [x] **Paso 4:** Creación y configuración de cuenta en GitHub y Git local.
- [x] **Paso 5:** Creación de cuenta y verificación en Figma Education.

## 🎨 Clase 2: Del Diseño a la Estructura (Figma a HTML)

- [ ] **Paso 1:** Exploración de la plantilla de Figma e introducción al *Dev Mode*.
      
      https://www.figma.com/files/project/566141154
      
- [ ] **Paso 2:** Descargar la estructura inicial. Abre la terminal, dirígete a la carpeta de Laragon (`cd C:\laragon\www`) y clona el repositorio del taller:
      
      `git config --global user.name "TU_USUARIO_EN_GITHUB"`

      `git config --global user.email "TU_CORREO_EN_GITHUB"`
      
      `git clone https://github.com/paoGonzalezUDG/proyecto-taller-web.git`
      
 https://github.com/user-attachments/assets/ec6b69eb-6207-418d-b3cc-b0c00261bb4e

- [ ] **Paso 3:** Abre la nueva carpeta descargada (`proyecto-taller-web`) en Visual Studio Code y verifica que el prefijo NPM no marque error.
      
      npm i         

https://github.com/user-attachments/assets/0c3350a6-ec40-40a2-ab9c-539d860c1529

- [ ] **Paso 4:** Corregir errores.
      
     <img width="1699" height="487" alt="Captura de pantalla 2026-03-10 150829" src="https://github.com/user-attachments/assets/b07dd54a-21ad-4f6b-9eff-5751884a5968" />

https://github.com/user-attachments/assets/dc566af8-db9a-40e7-bc60-87d708023177

Si aún no se corrige el problema, intenta con los siguientes videos

[Can't run the code "npm-install" in Visual Studio Code | Running Scripts is disabled on this System](https://www.youtube.com/watch?v=t9_ziPwYUWI)

[NodeJS término npm no sé reconoce como nombre de un cmdlet](https://www.youtube.com/shorts/mKwI95AtunA)
      
- [ ] **Paso 5:** Ejecutar Laragon y mostrar proyecto.

      npm cache clean --force
      
      npm run watch

https://github.com/user-attachments/assets/3a9b7382-3941-45f7-bd94-8c47da2b00f6

- [ ] **Paso 6:** Extraer assets (ilustraciones) y variables de diseño (colores, tipografías) desde Figma.

https://github.com/user-attachments/assets/efe92bb0-c4eb-4437-b435-76055a92531e
      
- [ ] **Paso 7:** Crea tu propia rama y muévete a ella (cambia "TU_NOMBRE" por tu nombre real sin espacios ni acentos):

  Actualiza tu repositorio

  `git pull origin main`

  Crea tu propia rama
      
  `git checkout -b portafolio-TU_NOMBRE`

  Ejemplo:
      
  `git checkout -b portafolio-paola-gonzalez`

  Si te equivocaste, no pasa nada, solo reenómbralo
  Asegúrate de estar dentro de la rama creada

  `git branch -m portafolio-TU_NOMBRE_CORREGIDO`

  Ejemplo:
      
  `git branch -m portafolio-paola-delgado`

https://github.com/user-attachments/assets/9ead90da-3735-456c-b5a0-1768d688d279

  [No hagas este paso] Ya lo subí a GitHub (ya hice push):

  `git push -u origin portafolio-TU_NOMBRE_CORREGIDO`

  `git push origin --delete portafolio-TU_NOMBRE_EQUIVOCADO`

- [ ] **Paso 8:** Maquetar el esqueleto HTML semántico en el archivo `index.php` base: Hero, About, Projects y Contact.

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

        Solo fíjate en la estructura de las carpetas, los iconos y tema de Visual Studio Code varían según tus extensiones

  <img width="213" height="686" alt="Captura de pantalla 2026-03-11 083002" src="https://github.com/user-attachments/assets/b15b0ff8-378e-47a6-bbed-49f76dd7faeb" />

- [ ] **Paso 9:** Especificar tus cambios (meterlos al carrito):
      
  `git add .`

- [ ] **Paso 10:** Especificar el cambio realizado con un mensaje descriptivo:
      
  `git commit -m "Estructura HTML base creada"`

- [ ] **Paso 11:** Subir tu avance a **TU** rama específica en GitHub por primera vez:
      
  `git push -u origin portafolio-TU_NOMBRE`

![Git cheatsheet](https://github.com/user-attachments/assets/cca72d61-256d-42c1-83ff-903b1c30f0d2)

[¿Cómo descargar actualizaciones de Paola?](https://github.com/paoGonzalezUDG/proyecto-taller-web/wiki/%23%23-%F0%9F%94%84-Gu%C3%ADa-de-Supervivencia:-%C2%BFC%C3%B3mo-descargar-actualizaciones-de-Paola%3F)
