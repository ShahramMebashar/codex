CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(140) NOT NULL,
  `text` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `article` int(10) DEFAULT NULL,
  `name` varchar(140) DEFAULT NULL,
  `comment` text,
  `answer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

