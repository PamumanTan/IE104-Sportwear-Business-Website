CREATE TABLE product_objects
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    object_name VARCHAR(255) NOT NULL
);

CREATE TABLE product_types
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    type_name VARCHAR(255) NOT NULL
);

CREATE TABLE products
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    product_price INT NOT NULL,
    rating INT,
    purchasing_quantity INT,
    amount INT,
    production_day DATE,
    product_description VARCHAR(255),
    product_size VARCHAR(255),
    product_color VARCHAR(255),
    product_image VARCHAR(255),
    product_object_id INT,
    product_type_id INT,
    FOREIGN KEY(product_object_id) REFERENCES product_objects(id),
    FOREIGN KEY(product_type_id) REFERENCES product_types(id)
);

CREATE TABLE discounts
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    begin_at DATE,
    end_at DATE,
    discount_percent INT
);

CREATE TABLE discount_products
(
    discount_id INT,
    product_id INT,
    PRIMARY KEY(discount_id, product_id),
    FOREIGN KEY(discount_id) REFERENCES discounts(id),
    FOREIGN KEY(product_id) REFERENCES products(id)
);

CREATE TABLE users
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(255) NOT NULL,
    PASSWORD VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phonenumber VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    is_admin BOOLEAN NOT NULL
);

CREATE TABLE comments
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    content VARCHAR(255),
    rating INT,
    product_id INT,
    user_id INT,
    FOREIGN KEY(product_id) REFERENCES products(id),
    FOREIGN KEY(user_id) REFERENCES USERS(id)
);

CREATE TABLE orders
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    total_money INT,
    FOREIGN KEY(user_id) REFERENCES USERS(id)
);

CREATE TABLE order_products
(
    order_id INT,
    product_id INT,
    amount INT,
    PRIMARY KEY(order_id, product_id),
    FOREIGN KEY(order_id) REFERENCES ORDERS(id),
    FOREIGN KEY(product_id) REFERENCES products(id)
);

CREATE TABLE shopping_carts
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    product_id INT,
    FOREIGN KEY(user_id) REFERENCES USERS(id),
    FOREIGN KEY(product_id) REFERENCES products(id)
);
