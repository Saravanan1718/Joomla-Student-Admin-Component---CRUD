DROP TABLE IF EXISTS `#__helloworld`;

CREATE TABLE `#__helloworld` (
  `Id` int(11) NOT NULL auto_increment,
  `Name` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `Email` Varchar(30) NOT NULL,
   PRIMARY KEY  (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO `#__helloworld` (`id`,`Name`, `Age`, `Email`) VALUES
	(NULL,'Saravanan',23,'saravanan@gmail.com'),
	(NULL,'Selva',22,'selva@gmail.com');
