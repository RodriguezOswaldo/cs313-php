CREATE TABLE book(
    id SERIAL PRIMARY KEY,
    book_title VARCHAR(100) NOT NULL UNIQUE,
    author VARCHAR(100) NOT NULL UNIQUE,
    book_release_year TIMESTAMP,
    book_category_name VARCHAR(25) NOT NULL,
    client_id INT NOT NULL
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