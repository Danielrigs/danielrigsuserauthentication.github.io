

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(8) NOT NULL AUTO_INCREMENT,
  `usernev` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `displaynev` varchar(55) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


INSERT INTO `users` (`userId`, `usernev`, `password`, `displaynev`) VALUES
(1, 'testadmin', 'admin1234', 'TestAdmin');
