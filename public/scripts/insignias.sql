DROP TABLE IF EXISTS participantes;
DROP TABLE IF EXISTS cursos;
DROP TABLE IF EXISTS carreras;
DROP TABLE IF EXISTS intentos;
DROP TABLE IF EXISTS usuarios;

-- usuarios
-- usuario_id
-- usuario_nombre
-- usuario_pass
-- usuario_correo
-- usuario_activo
-- usuario_area
-- usuario_tipo
CREATE TABLE usuarios (
    usuario_id      INT GENERATED ALWAYS AS IDENTITY,
    usuario_nombre  VARCHAR (200) NOT NULL,
    usuario_pass    VARCHAR (100) NOT NULL,
    usuario_correo  VARCHAR (200) UNIQUE NOT NULL,
    usuario_activo  BOOLEAN NOT NULL DEFAULT TRUE,
    usuario_area    VARCHAR (200) NOT NULL,
    usuario_tipo    VARCHAR (50) NOT NULL DEFAULT 'user',
    PRIMARY KEY(usuario_id)
);

-- intentos
-- intento_id
-- intento_ip
-- intento_date
CREATE TABLE intentos (
    intento_id      INT GENERATED ALWAYS AS IDENTITY,
    intento_ip      VARCHAR (100) NOT NULL,
    intento_date    TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(intento_id)
);

-- carrera
-- carrera_id
-- carrera_nombre
-- carrera_descripcion
-- carrera_img
-- carrera_insignia
CREATE TABLE carreras (
    carrera_id          INT GENERATED ALWAYS AS IDENTITY,
    carrera_nombre      VARCHAR (200) UNIQUE NOT NULL,
    carrera_descripcion VARCHAR (700) NOT NULL,
    carrera_img         VARCHAR (300) NOT NULL,
    carrera_insignia    VARCHAR (300) NOT NULL,
    PRIMARY KEY(carrera_id)
);

-- cursos
-- curso_id
-- usuario_id
-- carrera_id
-- curso_nombre
-- curso_descripcion

-- curso_modo
-- curso_status
-- curso_duracion
-- curso_instructor
-- curso_fecha

-- curso_insignia
-- curso_datec
CREATE TABLE cursos (
    curso_id            INT GENERATED ALWAYS AS IDENTITY,
    usuario_id          INT NOT NULL,
    carrera_id          INT NOT NULL,
    curso_nombre        VARCHAR (200) NOT NULL,
    curso_descripcion   VARCHAR (700) NOT NULL,
    curso_modo          VARCHAR (200) NOT NULL,
    curso_status        BOOLEAN NOT NULL DEFAULT FALSE,
    curso_duracion      INT NOT NULL,
    curso_instructor    INT NOT NULL,
    curso_fecha         DATE,
    curso_horario       VARCHAR (300) NOT NULL,
    curso_insignia      VARCHAR (300) NOT NULL,
    curso_datec         TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(curso_id),
      CONSTRAINT fk_cursos_usuarios
        FOREIGN KEY(usuario_id) 
          REFERENCES usuarios(usuario_id),
      CONSTRAINT fk_cursos_carrera
        FOREIGN KEY(carrera_id) 
          REFERENCES carreras(carrera_id)
);

-- participantes
-- participante_id
-- usuario_id
-- curso_id
-- participante_terminado
CREATE TABLE participantes (
    participante_id         INT GENERATED ALWAYS AS IDENTITY,
    usuario_id              INT NOT NULL,
    curso_id                INT NOT NULL,
    participante_terminado  BOOLEAN NOT NULL DEFAULT FALSE,
    PRIMARY KEY(participante_id),
      CONSTRAINT fk_participantes_usuarios
        FOREIGN KEY(usuario_id) 
          REFERENCES usuarios(usuario_id),
      CONSTRAINT fk_participantes_cursos
        FOREIGN KEY(curso_id) 
          REFERENCES cursos(curso_id)
);

-- insert de usuario de Bart
insert into usuarios (usuario_nombre, usuario_pass, usuario_correo, usuario_activo,usuario_area, usuario_tipo) values ('Bart Lopez', '$2y$04$Cxa03AYd4nQxM1gbEb4H.eyTftjt4OJ7qvt/Pui3jf3f4KBmhN/aq', 'dalopez@uach.mx', 't', 'CIET','admin');

-- insert de carreras/rutas
INSERT INTO carreras (carrera_nombre, carrera_descripcion, carrera_img, carrera_insignia)
VALUES ('PRODUCTIVIDAD', 'PRODUCTIVIDAD', '1.png', '2.png');

INSERT INTO carreras (carrera_nombre, carrera_descripcion, carrera_img, carrera_insignia)
VALUES ('DISEÑO, INTERACCIÓN Y CONTENIDO DIGITAL', 'DISEÑO, INTERACCIÓN Y CONTENIDO DIGITAL', '3.png', '4.png');

INSERT INTO carreras (carrera_nombre, carrera_descripcion, carrera_img, carrera_insignia)
VALUES ('DESARROLLO Y GESTIÓN DE APLICACIONES', 'DESARROLLO Y GESTIÓN DE APLICACIONES', '5.png', '6.png');

INSERT INTO carreras (carrera_nombre, carrera_descripcion, carrera_img, carrera_insignia)
VALUES ('GESTIÓN Y VISUALIZACIÓN DE DATOS', 'GESTIÓN Y VISUALIZACIÓN DE DATOS', '7.png', '8.png');

INSERT INTO carreras (carrera_nombre, carrera_descripcion, carrera_img, carrera_insignia)
VALUES ('ESTRATEGIAS DIDÁCTICAS DIGITALES I', 'ESTRATEGIAS DIDÁCTICAS DIGITALES I', '9.png', '10.png');

-- inserts de cursos
INSERT INTO cursos (usuario_id, carrera_id, curso_nombre, curso_descripcion, curso_modo, curso_status, curso_duracion, curso_instructor, curso_fecha, curso_horario, curso_insignia, curso_datec)
VALUES (1, 2, 'Visualización de datos con Tableau Matutino', 'Acerca del taller:<br>Conocer el entorno de trabajo<br>Preparar y conectar datos<br>Crear hojas de visualización de datos<br>Integrar las visualizaciones en un dashboard<br>Nivel: Principiante<br>Modalidad: Online<br>Herramienta: Tableau<br>Producto a generar: Dashboard en Tableau public<br>Requisitos: Computadora o laptop.', 'virtual', 't', 4, 1, '2024-01-22', '9:00 am a 13:00 pm', '65612d43eed3f.png', '2023-11-24 16:09:55.979484-07');

INSERT INTO cursos (usuario_id, carrera_id, curso_nombre, curso_descripcion, curso_modo, curso_status, curso_duracion, curso_instructor, curso_fecha, curso_horario, curso_insignia, curso_datec)
VALUES (1, 3, 'Mejora tu gestión de proyectos con Trello, Kanban y Scrum Matutino', 'Aprenderás:ABC de Agile y ScrumDividir un proyecto en tareasEstimar la complejidad de cada tareaGestionar tareas en un tablero KanbanBonus: Mide el avance con un gráfico de burndown Nivel: PrincipianteModalidad: OnlineHerramienta: TrelloProducto a generar: Tablero Kanban en TrelloRequisitos: Computadora o laptop.', 'virtual', 't', 4, 1, '2024-01-19', '9:00 a 13:00', '656123363e15b.png', '2023-11-24 15:27:02.255197-07');

INSERT INTO cursos (usuario_id, carrera_id, curso_nombre, curso_descripcion, curso_modo, curso_status, curso_duracion, curso_instructor, curso_fecha, curso_horario, curso_insignia, curso_datec)
VALUES (1, 3, 'Crea y publica tu primera app de Realidad Aumentada', 'Crearás 2 filtros de Realidad Aumentada con seguimiento de rostro en tiempo real e interacciones básicas en pantalla. Publicaras tus filtros en Instagram o Facebook (taller sugerido como continuación del curso de Alternativas a Photoshop).', 'virtual', 't', 12, 1, '2024-01-17', '9:00 hrs - 13:00 hrs', '6561259469eee.png', '2023-11-24 15:37:08.435246-07');

INSERT INTO cursos (usuario_id, carrera_id, curso_nombre, curso_descripcion, curso_modo, curso_status, curso_duracion, curso_instructor, curso_fecha, curso_horario, curso_insignia, curso_datec)
VALUES (1, 3, 'Creación y consumo de APIs desde cero', '¡Todos podemos crear software! Conoce las bases de la integración de software consultando, extrayendo y presentando datos en una aplicación básica.', 'virtual', 't', 5, 1, '2024-01-24', '9:00 a 14:00 horas', '65612684d7d03.png', '2023-11-24 15:41:08.88491-07');
