CREATE TABLE usuarios (
	enfermera_id int NOT NULL,
    contrasena varchar(40) NOT NULL,
    nombres varchar(20) NOT NULL,
    apellidos varchar(50) NOT NULL,
    departamento varchar(30),
    turno varchar(30),
    PRIMARY KEY(enfermera_id)
);

CREATE TABLE entradas ( 
    entrada_id int NOT NULL AUTO_INCREMENT, 
    enfermera_id int NOT NULL, 
    fecha datetime NOT NULL, 
    cuerpo text(16383), 
    PRIMARY KEY(entrada_id), 
    FOREIGN KEY(enfermera_id) REFERENCES usuarios(enfermera_id) 
); 


-- Dummmy records
-- insert into usuarios values (1, "Francisco", "Sánchez Garza", "Pediatría", "M");
-- insert into usuarios values (2, "Ana", "Gómez López", "Pediatría", "V");

-- insert INTO entradas VALUES (1,1,'2011-12-18 13:17:17',"Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, suscipit aperiam! Tempora, porro quasi repudiandae excepturi veniam ipsum consectetur minus optio repellat saepe nihil eum sunt doloremque rerum fugiat natus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum maiores est, modi harum facilis, dolores obcaecati ducimus consequatur odit, asperiores nisi alias atque aspernatur. Voluptate doloribus accusantium quaerat magnam consequatur?");
-- insert INTO entradas VALUES (2,1,'2020-12-20 14:00:00',"Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, suscipit aperiam! Tempora, porro quasi repudiandae excepturi veniam ipsum consectetur minus optio repellat saepe nihil eum sunt doloremque rerum fugiat natus.");
-- insert INTO entradas VALUES (4,2,'2021-01-23 21:14:00',"Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, suscipit aperiam! Tempora, porro quasi repudiandae excepturi veniam ipsum consectetur minus optio repellat saepe nihil eum sunt doloremque rerum fugiat natus. Lorem ipsum dolor sit.");
-- insert into usuarios values (6, "Miguel", "González López", "Terapia Intensiva", "V");
-- insert INTO entradas VALUES (5,3,'2011-12-18 13:17:17',"Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, suscipit aperiam! Tempora, porro quasi repudiandae excepturi veniam ipsum consectetur minus optio repellat saepe nihil eum sunt doloremque rerum fugiat natus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum maiores est, modi harum facilis, dolores obcaecati ducimus consequatur odit, asperiores nisi alias atque aspernatur. Voluptate doloribus accusantium quaerat magnam consequatur?");