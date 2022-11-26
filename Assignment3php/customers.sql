CREATE DATABASE PHPdatabase;
use PHPdatabase;


CREATE TABLE customers (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `postal code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `customers` (`id`,`name`,`email`,`postal code`) VALUES
('1','ravi','ravi@gmail.com','382225'),
('2','pratik','pratik@gmail.com','382227'),
('3','mandar','mandar@yahoo.com','382229'),
('4','shivang','shivang@hotmail.com','382231');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

