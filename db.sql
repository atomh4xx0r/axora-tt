CREATE DATABASE `vanilladb` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;

CREATE TABLE `students` (
                            `id` bigint(20) NOT NULL AUTO_INCREMENT,
                            `surname` varchar(30) COLLATE utf8_bin NOT NULL,
                            `first_name` varchar(30) COLLATE utf8_bin NOT NULL,
                            `middle_name` varchar(30) COLLATE utf8_bin NOT NULL,
                            `birth_date` date NOT NULL,
                            `age` int(50) NOT NULL,
                            PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO vanilladb.students (id, surname, first_name, middle_name, birth_date, age) VALUES (1, 'Смелоч', 'Поликарп', 'Кондратович', '2001-12-01', 17);
INSERT INTO vanilladb.students (id, surname, first_name, middle_name, birth_date, age) VALUES (2, 'Перова', 'Лидия', 'Петровна', '2004-05-02', 15);
INSERT INTO vanilladb.students (id, surname, first_name, middle_name, birth_date, age) VALUES (3, 'Мисалова', 'Инга', 'Евгеньевна', '2003-06-03', 16);
INSERT INTO vanilladb.students (id, surname, first_name, middle_name, birth_date, age) VALUES (4, 'Энговатов', 'Казимир', 'Никанорович', '2002-06-04', 17);
INSERT INTO vanilladb.students (id, surname, first_name, middle_name, birth_date, age) VALUES (5, 'Козлова', 'Любовь', 'Федоровна', '2003-08-02', 16);

