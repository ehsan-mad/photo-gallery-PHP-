-- Active: 1736345950032@@127.0.0.1@3306@photos_gallery
CREATE database photos_gallery;

create Table photos(
    id int AUTO_INCREMENT PRIMARY KEY,
    title varchar(255) NOT NULL,
    image_path varchar(255) not NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp default current_timestamp on update CURRENT_TIMESTAMP
)

SELECT * FROM photos;

DELETE  FROM photos WHERE id = 3;



