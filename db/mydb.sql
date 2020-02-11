CREATE TABLE book(
    id SERIAL PRIMARY KEY NOT NULL,
    book_title VARCHAR(100) NOT NULL UNIQUE,
    author VARCHAR(100) NOT NULL UNIQUE,
    book_release_year INT,
    book_category_name VARCHAR(25) NOT NULL,
    client_name VARCHAR(100) NOT NULL UNIQUE 
);
CREATE TABLE book_category(
    id SERIAL PRIMARY KEY,
    book_category_name VARCHAR(25),
    book_id int UNIQUE REFERENCES book(id)
);
CREATE TABLE client(
    id SERIAL PRIMARY KEY,
    client_name VARCHAR(100) NOT NULL UNIQUE,
    book_title VARCHAR(100) NOT NULL REFERENCES book(book_title)
);
DROP TABLE book_category;
DROP TABLE client;
DROP TABLE book;
--Insert data into the new table
INSERT INTO book (book_title, author, book_release_year, book_category_name, client_name)
VALUES ('Open Veins of Latin America', 'Eduardo Galeano', 1971, 'Political', 'Lucas Rodríguez');
INSERT INTO book (book_title, author, book_release_year, book_category_name, client_name)
VALUES ('One Hundred Years of Solitude', 'Gabriel García Marquez', 1967, 'Magic Realism', 'Arthur Rodríguez');
INSERT INTO book (book_title, author, book_release_year, book_category_name, client_name)
VALUES ('Hopscotch', 'Julio Cortazar', 1963, 'Stream-of-consciousness', 'Own Rodríguez');
INSERT INTO book (book_title, author, book_release_year, book_category_name, client_name)
VALUES ('Thus Spoke Zarathustra', 'Friedrich Nietzsche', 1883, 'Philosophical Novel ', 'Oswaldo Rodríguez');
INSERT INTO book (book_title, author, book_release_year, book_category_name, client_name)
VALUES ('The Dark Tower: The Gunslinger', 'Stephen King', 1982, 'Fantasy Novel', 'Leo Rodríguez');

INSERT INTO book_category(book_category_name) VALUES('Political');
INSERT INTO book_category(book_category_name) VALUES('Magic Realism');
INSERT INTO book_category(book_category_name) VALUES('Stream-of-consciousness');
INSERT INTO book_category(book_category_name) VALUES('Philosophical Novel');
INSERT INTO book_category(book_category_name) VALUES('Fantasy Novel');

INSERT INTO client(client_name, book_title) VALUES('Lucas Rodríguez','Open Veins of Latin America' );
INSERT INTO client(client_name,book_title) VALUES('Arthur Rodríguez','One Hundred Years of Solitude');
INSERT INTO client(client_name,book_title) VALUES('Own Rodríguez','Hopscotch');
INSERT INTO client(client_name,book_title) VALUES('Oswaldo Rodríguez','Thus Spoke Zarathustra');
INSERT INTO client(client_name,book_title) VALUES('Leo Rodríguez','The Dark Tower: The Gunslinger');
--Joins
SELECT c.name, n.content FROM note n 
JOIN course c ON n.course_id = c.id
WHERE c.code = 'CS 313';

SELECT b.book_title, b.author, b.book_release_year, b.book_category_name, cl.client_name FROM book b 
JOIN client cl ON cl.book_title = b.book_title WHERE b.id = 1; 