CREATE DATABASE `test_sql_injection`;

USE  `test_sql_injection`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=UTF8;

INSERT INTO `categories` VALUES 
(1, 'Mobiles & Accessories'),
(2, 'TV & Audio'),
(3, 'Watches & Jewelry'),
(4, 'Perfumes & Fragrances'),
(5, 'Health & Beauty'),
(6, 'Bags & Handbags'),
(7, 'Clothing & Shoes'),
(8, 'Baby & Toddlers'),
(9, 'Toys & Gaming');

