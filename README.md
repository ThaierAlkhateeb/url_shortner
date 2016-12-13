# simple url-shortner
just create the db and links tabel
--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `url` varchar(255) DEFAULT NULL,
  `code` varchar(12) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
