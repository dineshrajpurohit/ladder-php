-- Database: `ladder`
-- this is temporary basic database design.. need to modify after more functionality is added

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `rank` int(10) NOT NULL,
  `role` int(11) NOT NULL,
  `challenge_flag` tinyint(4) NOT NULL,
  `elo` int(11) NOT NULL,
  `last_login` date NOT NULL,
  `last_ip` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT;



--
-- Table structure for table `challenge`
--

CREATE TABLE IF NOT EXISTS `challenge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `challenger_id` int(11) NOT NULL,
  `challengee_id` int(11) NOT NULL,
  `completed` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT;

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `challender_id` int(11) NOT NULL,
  `challengee_id` int(11) NOT NULL,
  `game1` varchar(10) NOT NULL,
  `game2` varchar(10) NOT NULL,
  `game3` varchar(10) NOT NULL,
  `date_played` varchar(10) NOT NULL,
  `time_played` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT;
