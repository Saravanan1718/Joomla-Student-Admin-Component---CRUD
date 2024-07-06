DROP TABLE IF EXISTS `helloworld`;

CREATE TABLE `helloworld` (
  `Id` int(11) NOT NULL auto_increment,
  `Name` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `Email` Varchar(30) NOT NULL,
   PRIMARY KEY  (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO `helloworld` (`Name`, `Age`, `Email`) VALUES
	('Saravanan',23,'saravanan@gmail.com'),
	('Selva',22,'selva@gmail.com');
