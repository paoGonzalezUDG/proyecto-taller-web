# 🚀 Actividades del Taller: Creación de Portafolio Web

Aquí llevaremos el registro de nuestro avance en cada sesión. Si te pierdes en algún momento, revisa en qué paso vamos y apóyate con tu equipo. Nuestro objetivo final es construir un portafolio profesional basado en [este diseño de Figma](https://www.figma.com/design/XUBbeQRfPIwIEfSFBgzEjW/Illustration-Based-Portfolio-Website-Template--Community-?node-id=0-1&t=2z3KwNk2RVX5XoB1-1).

## ✅ Clase 1: Preparación del Entorno (Virtual)
*¡Completada el miércoles pasado!*
- [x] **Paso 1:** Instalación de servidor local (Laragon) y editor de código (Visual Studio Code).
- [x] **Paso 2:** Instalación de gestores de dependencias (Node.js y Composer).
- [x] **Paso 3:** Configuración del navegador (Extensiones de Chrome para desarrolladores).
- [x] **Paso 4:** Creación y configuración de cuenta en GitHub y Git local.
- [x] **Paso 5:** Creación de cuenta y verificación en Figma Education.

## 🎨 Clase 2: Del Diseño a la Estructura (Figma a HTML)

- [ ] **Paso 1:** Exploración de la plantilla de Figma e introducción al *Dev Mode*.
      
      https://www.figma.com/design/XUBbeQRfPIwIEfSFBgzEjW/Illustration-Based-Portfolio-Website-Template--Community-?node-id=0-1&m=dev&t=2z3KwNk2RVX5XoB1-1
      
      https://www.figma.com/design/KG8CyCI5EtWvMDibQBZxO1/Personal-Portfolio-%7C-Figma-Portfolio-%7C-Portfolio--Community-?node-id=2-2&m=dev&t=XviHA48FD6t1l2vC-1
      
      https://www.figma.com/design/UwQchzFvLvhMJIoEHZReOS/simply-portfolio-desing--Community-?node-id=0-1&m=dev&t=OrQQTfGeHt3XuGHV-1
      
      https://www.figma.com/design/lBxDnkhkiKtwZR2sllPIty/Personal-Portfolio-Website-Template-%7C-Mobile---Desktop--Community-?node-id=333-789&m=dev&t=zrKgXPGuAMYxppqT-1
      
      https://www.figma.com/design/TZxOCQ0KVCviMrt3kuKzfe/Personal-Portfolio-Landing-Page-Design--Community-?node-id=0-1&m=dev&t=pmxJVUSydb4F0Nsz-1
      
- [ ] **Paso 2:** Descargar la estructura inicial. Abre la terminal, dirígete a la carpeta de Laragon (`cd C:\laragon\www`) y clona el repositorio del taller:
      
  `git clone https://github.com/paoGonzalezUDG/proyecto-taller-web.git`

- [ ] **Paso 3:** Abre la nueva carpeta descargada (`proyecto-taller-web`) en Visual Studio Code y carga las librerías con NPM.
      
      `npm i`
      
      `npm cache clean --force`
      
      `npm run watch`
      
- [ ] **Paso 4:** Configurar tu identidad en Git. Abre la terminal en VS Code y escribe:
      
  `git config --global user.name "TU_USUARIO_EN_GITHUB"`

  `git config --global user.email "TU_CORREO_EN_GITHUB"`

- [ ] **Paso 5:** Extraer assets (ilustraciones) y variables de diseño (colores, tipografías) desde Figma.
- [ ] **Paso 6:** Crea tu propia rama y muévete a ella (cambia "TU_NOMBRE" por tu nombre real sin espacios):
      
  `git checkout -b portafolio-TU_NOMBRE`

- [ ] **Paso 7:** Maquetar el esqueleto HTML semántico en el archivo `index.php` base: Hero, About, Projects y Contact.
- [ ] **Paso 8:** Especificar tus cambios (meterlos al carrito):
      
  `git add .`

- [ ] **Paso 9:** Especificar el cambio realizado con un mensaje descriptivo:
      
  `git commit -m "Estructura HTML base creada"`

- [ ] **Paso 10:** Subir tu avance a **TU** rama específica en GitHub por primera vez:
      
  `git push -u origin portafolio-TU_NOMBRE`
