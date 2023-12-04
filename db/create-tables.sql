-- Database: ecommerce-sportswear

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
    product_promote_price INT,
    rating INT,
    purchasing_quantity INT DEFAULT 0,
    quantity INT,
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
    username VARCHAR(255) NOT NULL,
    firstname VARCHAR(255),
    lastname VARCHAR(255),
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phonenumber VARCHAR(255),
    address VARCHAR(255),
    is_admin BOOLEAN NOT NULL DEFAULT false,
    avatar VARCHAR(255) DEFAULT 'https://pbs.twimg.com/media/FoUoGo3XsAMEPFr?format=jpg&name=4096x4096'
);

CREATE TABLE comments
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    content VARCHAR(255),
    rating INT,
    product_id INT,
    user_id INT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(product_id) REFERENCES products(id),
    FOREIGN KEY(user_id) REFERENCES users(id)
);

CREATE TABLE orders
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,   
    total_money INT NOT NULL,
    payed BOOLEAN NOT NULL DEFAULT false,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    shipping_address VARCHAR(255),
    shipping_phonenumber VARCHAR(255),
    FOREIGN KEY(user_id) REFERENCES USERS(id)
);

CREATE TABLE order_details
(
    order_id INT,
    product_id INT,
    quantity INT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(order_id, product_id),
    FOREIGN KEY(order_id) REFERENCES ORDERS(id),
    FOREIGN KEY(product_id) REFERENCES products(id)
);

-- trigger to update total money of order after insert order detail
DELIMITER $$

CREATE TRIGGER update_total_money_order
AFTER INSERT ON order_details
FOR EACH ROW
BEGIN
    UPDATE orders
    SET total_money = total_money + NEW.quantity * (SELECT product_price FROM products WHERE id = NEW.product_id)
    WHERE id = NEW.order_id;
END$$

-- trigger to update total money of order after update order detail
DELIMITER $$
CREATE TRIGGER update_total_money_order_after_update_order_detail
AFTER UPDATE ON order_details
FOR EACH ROW
BEGIN
    UPDATE orders
    SET total_money = total_money + (NEW.quantity - OLD.quantity) * (SELECT product_price FROM products WHERE id = NEW.product_id)
    WHERE id = NEW.order_id;
END$$

