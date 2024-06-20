<?php
session_start(); // Iniciar la sesión
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Bienvenido a mi portafolio de programación, donde podrás ver mis proyectos y habilidades en el desarrollo web, software y aplicaciones móviles. Descubre cómo he resuelto problemas de programación y cómo he utilizado las tecnologías más actuales para crear soluciones innovadoras." />
  <meta name="keywords"
    content="C, C++, HTML5, CSS3, SASS, JavaScript, Node.js, Express, React.js, Python, MySQL, MongoDB, PHP, Visual Basic, JSON, programación, desarrollo web, desarrollo de software, aplicaciones móviles, proyectos de programación" />
  <link rel="stylesheet" href="../css/stylessss.css" />
  <link rel="icon" href="../imgs/favicon.ico" />
  <title>Sombre mi</title>
</head>

<body id="inicio">
  <header class="header">
    <a href="../index.php" class="header--logo">Mi Portafolio</a>
    <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg">
      <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
    </svg>

    <nav class="header--navbar">
      <a href="../index.php">Inicio</a>
      <a href="#" class="header--item-active">Sobre mi</a>
      <a href="habilidades.php">Habilidades</a>
      <a href="trabajos.php">Portafolio</a>
      <a href="contacto.php">Contacto</a>
      <?php include ('../components/btnUsers.php') ?>
    </nav>
  </header>

  <main class="main--sobre_mi">
    <div class="main--div hidden">
      <section class="main--img_yo">
        <img class="lazy" data-src="../imgs/programadorbarba.webp" alt="Programador programando" width="100%"
          height="100%" />
      </section>
      <section class="main--content">
        <h1 class="main--h1_cross">
          Acerca de
          <span id="main--span-text">Mi</span>
        </h1>
        <h4>Full stack developer!</h4>
        <p class="main--parrafo">
          ¡Hola! Soy Rodrigo, un programador apasionado con más de 6 años de experiencia en el mundo del desarrollo.
          Nacido y criado en Argentina, estudié en una escuela técnica
          donde aprendí los fundamentos de la programación y desarrollé mi amor por la tecnología. Desde entonces, he
          estado construyendo y mejorando mis habilidades en el campo
          de la programación, trabajando en varios proyectos y desafiándome a mí mismo para crear soluciones
          innovadoras. He trabajado en diferentes proyectos, desde aplicaciones
          web y móviles hasta soluciones empresariales personalizadas.
        </p>
        <a href="#titulo" class="main--btn">Leer mas</a>
      </section>
    </div>
    <div class="main--div hidden">
      <section class="main--img_titulo">
        <img class="lazy" data-src="../imgs/titulo.webp" alt="Mi titulo" />
      </section>
      <section class="main--content">
        <h1 class="main--h1_cross">
          Mi
          <span id="main--span-text">Educacion</span>
        </h1>
        <h4>Full stack developer!</h4>
        <p class="main--p_education">
          Mi trayectoria educativa ha sido muy satisfactoria y estoy orgulloso de los logros que he alcanzado. Desde que
          comencé a estudiar, siempre tuve una gran pasión por la tecnología y la programación. Por esta razón, decidí
          estudiar en la Escuela Técnica Nº 3 Nikola Tesla, una institución altamente reconocida y rigurosa. Me gradué
          con el tercer promedio más alto de toda mi tecnicatura, lo cual fue un logro muy significativo para mí.
          Durante mi tiempo en la escuela, aprendí los fundamentos de la programación tanto del lado del front-end como
          del back-end, lo que me permitió desarrollar habilidades sólidas y versátiles en programación. Posteriormente,
          realicé
          <span class="hide" id="hideText">
            un curso intensivo en Coderhouse, en el que me recibí como desarrollador Full Stack. Este curso me permitió
            adquirir habilidades avanzadas en diseño web y desarrollo de
            aplicaciones, además de trabajar en proyectos prácticos en equipo. Esto me enseñó habilidades importantes de
            trabajo en equipo y colaboración, que son esenciales para
            el éxito en el campo de la tecnología. En resumen, estoy muy satisfecho con mi trayectoria educativa y
            siento
            que he adquirido habilidades valiosas que me permitirán
            desarrollarme en el campo de la tecnología y la programación en el futuro. Estoy emocionado de ver dónde me
            llevará esta pasión en el futuro y estoy listo para
            enfrentar nuevos desafíos y seguir aprendiendo.
          </span>
        </p>

        <button class="main--btn_read" id="hideText_btn">Leer mas</button>
      </section>
    </div>
    <div class="main--div hidden">
      <section class="main--img_titulo">
        <img class="lazy" data-src="../imgs/desarrollowebTitulo.png" alt="Mi titulo" />
      </section>
      <section class="main--content">
        <h1 class="main--h1_cross">
          Mi
          <span id="main--span-text">Educacion</span>
        </h1>
        <h4>Desarrollo web!</h4>
        <p class="main--p_education">
          Mi trayectoria educativa en Coderhouse sobre Desarrollo Web ha sido intensiva y enriquecedora, proporcionando
          una sólida base en los principios y prácticas del desarrollo web moderno. A lo largo de 10 semanas, completé
          un total de 38 horas de formación práctica y teórica, cubriendo una amplia gama de temas esenciales para el
          desarrollo web.

          El curso comenzó con un onboarding y un trayecto introductorio que sentaron las bases para un aprendizaje
          estructurado y efectivo. A lo largo del programa, aprendí los fundamentos del HTML y CSS, incluyendo la
          creación de prototipos, la estilización de páginas web y la construcción de estructuras de página robustas
          utilizando técnicas avanzadas como Flexbox y Grid. Estas herramientas me permitieron diseñar layouts complejos
          y responsivos de manera eficiente.
          <span class="hide" id="hideText">
            También me introduje en la metodología BEM (Block, Element, Modifier) para mantener el código CSS organizado
            y
            escalable. El uso de frameworks CSS como Bootstrap aceleró el desarrollo de mis proyectos, asegurando
            consistencia en los diseños. Además, aprendí a utilizar GIT y GitHub para el control de versiones y la
            colaboración en proyectos, herramientas esenciales para cualquier desarrollador moderno.

            La introducción a SASS mejoró significativamente la eficiencia en la escritura de CSS, permitiéndome
            utilizar
            variables, mixins y anidamiento para optimizar y modularizar el código. Exploré técnicas de animación en CSS
            para crear interfaces web dinámicas e interactivas, mejorando la experiencia del usuario.
          </span>
        </p>

        <button class="main--btn_read" id="hideText_btn">Leer mas</button>
      </section>
    </div>
    <div class="main--div hidden">
      <section class="main--img_titulo">
        <img class="lazy" data-src="../imgs/javascriptTitulo.png" alt="Mi titulo" />
      </section>
      <section class="main--content">
        <h1 class="main--h1_cross">
          Mi
          <span id="main--span-text">Educacion</span>
        </h1>
        <h4>Desarrollo Web con JavaScript!</h4>
        <p class="main--p_education">
          Mi trayectoria educativa en Coderhouse sobre Desarrollo Web con JavaScript ha sido intensiva y enriquecedora,
          proporcionando una sólida base en los principios y prácticas del desarrollo web moderno. A lo largo de 10
          semanas, completé un total de 38 horas de formación práctica y teórica, cubriendo una amplia gama de temas
          esenciales para el desarrollo web con JavaScript.

          El curso comenzó con una introducción a JavaScript, donde aprendí los conceptos generales, la sintaxis básica
          y cómo declarar y manipular variables. A medida que avanzaba, el curso se profundizó en el control de flujos,
          incluyendo estructuras de control como condicionales y bucles, que son fundamentales para manejar la lógica en
          las aplicaciones web.

          Aprendí sobre funciones, tanto básicas como de orden superior, que son esenciales para escribir código modular
          y reutilizable.
          <span class="hide" id="hideText">
            El curso también abordó la manipulación del Document Object Model (DOM), permitiéndome
            interactuar y modificar el contenido de las páginas web de manera dinámica. Esto fue crucial para el
            desarrollo de aplicaciones web interactivas.

            Otro aspecto clave del curso fue el manejo de eventos, que me permitió crear aplicaciones web que responden
            a
            las acciones del usuario, y el uso de almacenamiento local (Storage) y JSON para gestionar datos de manera
            eficiente.

            La formación incluyó también el estudio de operadores avanzados, lo que mejoró mi comprensión de la lógica y
            la funcionalidad más compleja en JavaScript. Además, aprendí a trabajar con librerías y frameworks que
            facilitan el desarrollo y mejoran la eficiencia del proceso de codificación.

            La asincronía y el manejo de promesas fueron temas cruciales, especialmente para trabajar con Ajax y Fetch
            para realizar solicitudes HTTP y manejar datos de manera asíncrona. Esto es esencial para crear aplicaciones
            web modernas y responsivas que interactúan con servidores y APIs.

            Finalmente, el curso incluyó una introducción a NodeJS, que me permitió entender cómo JavaScript puede ser
            utilizado en el servidor, y me dio una visión integral del stack de desarrollo web completo.

            Durante el curso, desarrollé un proyecto de ecommerce con carrito de compras, lo que me permitió aplicar
            todos
            los conocimientos adquiridos en un contexto práctico. Este proyecto fue una experiencia valiosa que
            consolidó
            mi aprendizaje y me preparó para enfrentar desafíos reales en el desarrollo web.
          </span>
        </p>

        <button class="main--btn_read" id="hideText_btn">Leer mas</button>
      </section>
    </div>
    <div class="main--div hidden">
      <section class="main--img_titulo">
        <img class="lazy" data-src="../imgs/reactTitulo.png" alt="Mi titulo" />
      </section>
      <section class="main--content">
        <h1 class="main--h1_cross">
          Mi
          <span id="main--span-text">Educacion</span>
        </h1>
        <h4>Full stack developer!</h4>
        <p class="main--p_education">
          Mi trayectoria educativa en Coderhouse sobre Desarrollo Web con React Js ha sido intensiva y enriquecedora,
          proporcionando una sólida base en los principios y prácticas del desarrollo web moderno con este potente
          framework. A lo largo de 8 semanas, completé un total de 30 horas de formación práctica y teórica, cubriendo
          una amplia gama de temas esenciales para el desarrollo web con React Js.

          El curso comenzó con una introducción a React Js, donde aprendí sobre los conceptos básicos y la importancia
          de este framework en el desarrollo moderno de aplicaciones web. A continuación, configuré el entorno de
          desarrollo, lo que incluyó la instalación de Node.js y la creación de mi primer proyecto React utilizando
          Create React App.

          A medida que avanzaba en el curso, me familiaricé con JSX, una extensión de sintaxis que permite escribir
          elementos de React de manera similar al HTML.
          <span class="hide" id="hideText">
            Aprendí sobre el proceso de transpiling, que convierte el código
            JSX en JavaScript estándar que los navegadores pueden entender.

            El curso se profundizó en la creación y manejo de componentes, que son la base de las aplicaciones en React.
            Estudié cómo crear componentes funcionales y de clase, y cómo manejar estados y propiedades para gestionar
            datos y comportamientos dinámicos en la interfaz de usuario.

            La asincronía y el manejo de promesas fueron temas cruciales, especialmente para trabajar con API's y
            manejar
            datos de manera asíncrona.Aprendí a consumir API's y a manejar la respuesta de manera eficiente, integrando
            los datos obtenidos en mis componentes React.

            Exploré el uso de Hooks, una característica poderosa de React que permite usar estados y otras
            funcionalidades
            en componentes funcionales. Aprendí sobre Hooks básicos como useState y useEffect, y cómo crear mis propios
            Hooks personalizados. Además, estudié patrones de diseño avanzados y el uso de children para crear
            componentes
            más flexibles y reutilizables.

            La navegación en aplicaciones React fue otro tema clave, donde aprendí a usar React Router para implementar
            rutas y navegación dinámica, permitiendo crear aplicaciones de una sola página (SPA) con múltiples vistas.

            El manejo de eventos y el contexto de React me permitieron crear aplicaciones más interactivas y gestionar
            el
            estado global de la aplicación de manera eficiente. Aprendí técnicas de rendering para optimizar el
            rendimiento de mis aplicaciones, asegurando que se carguen y funcionen de manera rápida y eficiente.

            La integración con Firebase, una plataforma de desarrollo de aplicaciones, fue una parte crucial del curso.
            Aprendí a utilizar Firebase para autenticar usuarios, almacenar datos en tiempo real y desplegar
            aplicaciones
            React, facilitando la creación de aplicaciones web completas y funcionales.
          </span>
        </p>

        <button class="main--btn_read" id="hideText_btn">Leer mas</button>
      </section>
    </div>
    <div class="main--div hidden">
      <section class="main--img_titulo">
        <img class="lazy" data-src="../imgs/backendTitulo.png" alt="Mi titulo" />
      </section>
      <section class="main--content">
        <h1 class="main--h1_cross">
          Mi
          <span id="main--span-text">Educacion</span>
        </h1>
        <h4>Full stack developer!</h4>
        <p class="main--p_education">
          Mi trayectoria educativa en Coderhouse sobre Desarrollo Backend con JavaScript ha sido intensiva y
          enriquecedora, proporcionando una sólida base en los principios y prácticas del desarrollo backend moderno. A
          lo largo de 6 meses, completé un extenso programa que cubrió una amplia gama de temas esenciales para el
          desarrollo backend.

          El curso comenzó con una introducción a los principios básicos de JavaScript, donde revisé los fundamentos y
          las nuevas funcionalidades de ECMAScript. Este conocimiento fue crucial para avanzar hacia temas más complejos
          como la programación sincrónica y asincrónica, y el manejo de archivos en JavaScript.

          A medida que el curso progresaba, aprendí sobre el administrador de paquetes NPM, que es esencial para
          gestionar las dependencias de los proyectos de Node.js. Esto me permitió trabajar de manera más eficiente y
          organizada en mis proyectos.

          El curso profundizó en el desarrollo de servidores web utilizando Express, donde adquirí habilidades avanzadas
          como el uso de routers y la integración de Multer para la gestión de archivos. 
          <span class="hide" id="hideText">
        También exploré motores de
          plantillas para la creación de vistas dinámicas y el uso de Websockets para aplicaciones en tiempo real,
          culminando en el desarrollo de una aplicación de chat.

          En la sección dedicada a bases de datos, aprendí a trabajar con MongoDB, realizando operaciones CRUD y
          utilizando Mongoose para la gestión de datos. Estas habilidades fueron puestas a prueba en varias prácticas
          integradoras, asegurando una comprensión sólida y aplicada de los conceptos.

          La seguridad y la autenticación fueron temas cruciales, donde estudié el uso de cookies, sesiones, JWT, y
          estrategias avanzadas de autorización con Passport. Estos conocimientos son fundamentales para asegurar la
          protección y la integridad de las aplicaciones web.

          El curso también cubrió técnicas avanzadas de optimización y escalabilidad, incluyendo el uso de clusters y la
          orquestación de contenedores. Esto me permitió entender cómo manejar aplicaciones de gran escala y alto
          rendimiento.

          Finalmente, el curso abordó la documentación de APIs y el testing avanzado, incluyendo la creación de tests
          unitarios y mocks, asegurando que las aplicaciones sean robustas y fiables.

          En resumen, mi formación en Desarrollo Backend con JavaScript en Coderhouse ha sido exhaustiva, cubriendo
          todos los aspectos esenciales y avanzados del desarrollo backend moderno. Esta experiencia me ha preparado
          para enfrentar desafíos en el desarrollo de aplicaciones backend robustas y escalables.
        </span>
        </p>

        <button class="main--btn_read" id="hideText_btn">Leer mas</button>
      </section>
    </div>
  </main>
  <footer class="footer">
    <a href="#inicio" class="footer--btn_up">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
        style="fill: rgba(255, 255, 255, 1)">
        <path d="m12 3.879-7.061 7.06 2.122 2.122L12 8.121l4.939 4.94 2.122-2.122z"></path>
        <path d="m4.939 17.939 2.122 2.122L12 15.121l4.939 4.94 2.122-2.122L12 10.879z"></path>
      </svg>
    </a>
    <p>Copyright &copy; Rodrigo Arias 2023. Todos los derechos reservados.</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.min.js"></script>
  <script src="https://kit.fontawesome.com/4989dcb279.js" crossorigin="anonymous"></script>
  <script src="../Js/renderizadoImg.js"></script>
  <script src="../Js/header.js"></script>
  <script src="../Js/readMoree.js"></script>
</body>

</html>