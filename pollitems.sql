SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `pollitems` (
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `votes` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `pollitems` (`name`, `image`, `votes`) VALUES
('Green Day', 'green-day.jpg', 0),
('Blink-182', 'blink-182.jpg', 0),
('NOFX', 'nofx.jpg', 0);
COMMIT;
