CREATE TABLE menus(
    id INT AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    PRIMARY KEY(id)
);
CREATE TABLE profiles(
    id INT AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    PRIMARY KEY(id)
);
CREATE TABLE menu_profile(
    id_menu INT NOT NULL,
    id_profile INT NOT NULL,
    FOREIGN KEY(id_menu) REFERENCES menus(id),
    FOREIGN KEY(id_profile) REFERENCES profiles(id)
);

CREATE TABLE users(
    id INT AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(250) NOT NULL,
    password VARCHAR(250) NOT NULL,
    id_profile INT NOT NULL,
    PRIMARY KEY(id),
    date_create DATETIME,
    date_update DATETIME NULL,
    FOREIGN KEY(id_profile) REFERENCES profiles(id)
);

CREATE TABLE categories(
    id INT AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    father INT NULL,
    date_create DATETIME,
    date_update DATETIME NULL,
    PRIMARY KEY(id)
);
CREATE TABLE contents(
    id INT AUTO_INCREMENT,
    id_user INT NOT NULL,
    name VARCHAR(140) NOT NULL,
    slug VARCHAR(140) NOT NULL,
    id_category INT NULL,
    content TEXT NULL,
    description VARCHAR(300) NULL,
    image VARCHAR(250) NULL,
    date_create DATETIME,
    date_update DATETIME NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(id_user) REFERENCES users(id),
    FOREIGN KEY(id_category) REFERENCES categories(id)
);
CREATE TABLE contents_categories(
    id_content INT NOT NULL,
    id_category INT NOT NULL,
    FOREIGN KEY(id_content) REFERENCES contents(id),
    FOREIGN KEY(id_category) REFERENCES categories(id)
);
CREATE TABLE messages(
    id INT AUTO_INCREMENT,
    name VARCHAR(140) NOT NULL,    
    email VARCHAR(250) NOT NULL,
    phone VARCHAR(40) NOT NULL,
    affair VARCHAR(140) NOT NULL,
    message VARCHAR(500) NOT NULL,
    PRIMARY KEY(id)
);
CREATE TABLE images(
    id INT AUTO_INCREMENT,
    title VARCHAR(250) NULL,
    alt VARCHAR(250) NULL,
    url VARCHAR(250) NOT NULL,
    PRIMARY KEY(id)
);
CREATE TABLE contents_images(
    id_content INT NOT NULL,
    id_image INT NOT NULL,
    FOREIGN KEY(id_content) REFERENCES contents(id),
    FOREIGN KEY(id_image) REFERENCES images(id)
);