-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 02:53 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaisreeram`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `emailid` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `admin_type` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `emailid`, `password`, `admin_type`) VALUES
(1, 'Suman Das', 'suman@gmail.com', '202cb962ac59075b964b07152d234b70', '0');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `banner_image` varchar(250) NOT NULL,
  `short_desc` text NOT NULL,
  `link_url` varchar(250) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `banner_image`, `short_desc`, `link_url`, `is_active`, `created_date`, `updated_date`, `deleted_date`) VALUES
(1, 'dvsdvsdvsd', '', 'vsdvsdv', 'sdvsd', '0', '2021-12-28 15:45:49', '2021-12-29 05:46:53', '2021-12-29 05:46:53'),
(2, 'hjbh', '94766--free-download-image5.png', '', 'bkh', '0', '2021-12-29 12:31:47', '2021-12-29 14:33:41', '2021-12-29 14:33:41'),
(3, 'Banner 2', 'slider2.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'https://www.google.com/', '1', '2021-12-29 14:15:54', '2022-02-12 13:11:26', NULL),
(4, 'Banner 1', 'slider1.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'https://www.google.com/', '1', '2022-01-18 12:58:18', '2022-02-12 13:11:22', NULL),
(5, 'Banner 3', 'slider3.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'https://www.google.com/', '1', '2022-02-12 11:55:44', '2022-02-12 13:11:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donation_maincategory`
--

CREATE TABLE `donation_maincategory` (
  `id` int(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `image` varchar(250) NOT NULL,
  `banner` varchar(250) NOT NULL,
  `short_description` text NOT NULL,
  `slug` varchar(250) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation_maincategory`
--

INSERT INTO `donation_maincategory` (`id`, `title`, `image`, `banner`, `short_description`, `slug`, `is_active`, `created_date`, `updated_date`, `deleted_date`) VALUES
(1, 'Donation 1', 'about.jpg', 'slider2.jpg', 'We come from hundreds of ethnic and language backgrounds', 'donation-1', '1', '2022-02-20 03:46:05', NULL, NULL),
(2, 'Donation 2', 'about-img.png', 'slider3.jpg', 'Bible and the Creator of all things. We do our best to imitate Jesus ', 'donation-2', '1', '2022-02-20 03:46:29', '2022-02-20 09:19:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(250) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `short_desc` text NOT NULL,
  `long_desk` text NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `slug`, `image`, `banner`, `short_desc`, `long_desk`, `is_active`, `created_date`, `updated_date`, `deleted_date`) VALUES
(1, 'Bible Questions Answered', 'bible-question-answered', 'about1.jpg', 'slider11.jpg', 'Get a free interactive Bible study with one-on-one instruction.', '<p>We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.</p>\r\n', '1', '2022-02-20 03:09:10', NULL, NULL),
(2, 'Peace & Happiness', 'peace-and-happiness', 'about-img.png', 'slider2.jpg', 'Discuss a Bible question, or learn more about Jehovah’s Witnesses.', '<p>We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.</p>\r\n', '1', '2022-02-20 03:09:46', NULL, NULL),
(3, 'aaaaaaa', 'aaaaaaaaa', '', '', '', '<p>vfddfdfb</p>\r\n', '0', '2022-02-20 03:15:03', '2022-02-20 08:46:15', '2022-02-20 08:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `founderacarya`
--

CREATE TABLE `founderacarya` (
  `id` int(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `image` varchar(250) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `founderacarya`
--

INSERT INTO `founderacarya` (`id`, `title`, `image`, `banner`, `short_description`, `updated_date`) VALUES
(1, 'His divine grace A.C. Bhaktivedanta Swami Srila Prabhupada', 'bg.png', 'slider21.jpg', 'The dear most friend and ever well-wisher of one and all, who travelled the world to give the same transcendental bliss of Krishna consciousness that he constantly relished.', '2022-02-20 06:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `founderacarya_banner`
--

CREATE TABLE `founderacarya_banner` (
  `id` int(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `banner_image` varchar(250) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `founderacarya_banner`
--

INSERT INTO `founderacarya_banner` (`id`, `title`, `banner_image`, `is_active`, `created_date`, `updated_date`, `deleted_date`) VALUES
(1, 'aaa', 'photo-1559116315-702b0b4774ce.jpg', '0', '2021-12-30 09:09:43', '2021-12-30 14:45:54', '2021-12-30 14:45:54'),
(2, 'bbbb', '94766--free-download-image1.png', '0', '2021-12-30 09:09:56', '2021-12-30 14:45:47', '2021-12-30 14:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `founderacarya_section`
--

CREATE TABLE `founderacarya_section` (
  `id` int(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `image` varchar(250) NOT NULL,
  `short_description` text NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `founderacarya_section`
--

INSERT INTO `founderacarya_section` (`id`, `title`, `image`, `short_description`, `is_active`, `created_date`, `updated_date`, `deleted_date`) VALUES
(1, 'aaa', '77-774806_crash-testing-dummy-silhouette-black-crash-test-dummy3.png', 'aaa', '0', '2021-12-30 09:25:39', '2021-12-30 15:00:53', '2021-12-30 15:00:53'),
(2, 'bbb', 'photo-1559116315-702b0b4774ce2.jpg', 'bbb', '0', '2021-12-30 09:25:46', '2021-12-30 15:00:47', '2021-12-30 15:00:47'),
(3, 'Section 1', 'about.jpg', '<p>We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.</p>\r\n', '1', '2022-02-20 01:12:11', '2022-02-20 06:42:37', NULL),
(4, 'Section 2', 'about-img.png', '<p>We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.</p>\r\n', '1', '2022-02-20 01:12:58', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `iskconpanihati`
--

CREATE TABLE `iskconpanihati` (
  `id` int(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `image` varchar(250) NOT NULL,
  `banner` varchar(250) NOT NULL,
  `short_description` text NOT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iskconpanihati`
--

INSERT INTO `iskconpanihati` (`id`, `title`, `image`, `banner`, `short_description`, `updated_date`) VALUES
(1, 'Iskcon Panihati', 'about.jpg', 'slider3.jpg', '<p>We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and Gods Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovahs Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.</p>\r\n', '2022-02-20 07:00:25');

-- --------------------------------------------------------

--
-- Table structure for table `iskconpanihati_banner`
--

CREATE TABLE `iskconpanihati_banner` (
  `id` int(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `banner_image` varchar(250) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iskconpanihati_banner`
--

INSERT INTO `iskconpanihati_banner` (`id`, `title`, `banner_image`, `is_active`, `created_date`, `updated_date`, `deleted_date`) VALUES
(1, 'aaa', '77-774806_crash-testing-dummy-silhouette-black-crash-test-dummy2.png', '0', '2021-12-30 09:58:11', '2021-12-30 15:32:46', '2021-12-30 15:32:46'),
(2, 'bbb', '77-774806_crash-testing-dummy-silhouette-black-crash-test-dummy3.png', '0', '2021-12-30 09:58:18', '2021-12-30 15:32:41', '2021-12-30 15:32:41');

-- --------------------------------------------------------

--
-- Table structure for table `iskconpanihati_section`
--

CREATE TABLE `iskconpanihati_section` (
  `id` int(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `image` varchar(250) NOT NULL,
  `short_description` text NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iskconpanihati_section`
--

INSERT INTO `iskconpanihati_section` (`id`, `title`, `image`, `short_description`, `is_active`, `created_date`, `updated_date`, `deleted_date`) VALUES
(1, 'aaa', '94766--free-download-image3.png', 'aaa', '0', '2021-12-30 10:08:15', '2021-12-30 15:42:22', '2021-12-30 15:42:22'),
(2, 'bbb', 'photo-1559116315-702b0b4774ce.jpg', 'bbb', '0', '2021-12-30 10:08:23', '2021-12-30 15:42:19', '2021-12-30 15:42:19'),
(3, 'gnfgnfg', '', '', '0', '2022-01-18 08:28:05', '2022-02-20 07:06:41', '2022-02-20 07:06:41'),
(4, 'Section 1', 'about1.jpg', '<p>We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.</p>\r\n', '1', '2022-02-20 01:38:24', '2022-02-20 07:08:28', NULL),
(5, 'Section 2', 'about-img.png', '<p>We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.</p>\r\n', '1', '2022-02-20 01:38:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `krishna_maincategory`
--

CREATE TABLE `krishna_maincategory` (
  `id` int(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `image` varchar(250) NOT NULL,
  `banner` varchar(250) NOT NULL,
  `short_description` text NOT NULL,
  `slug` varchar(250) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krishna_maincategory`
--

INSERT INTO `krishna_maincategory` (`id`, `title`, `image`, `banner`, `short_description`, `slug`, `is_active`, `created_date`, `updated_date`, `deleted_date`) VALUES
(1, 'aaaa', '77-774806_crash-testing-dummy-silhouette-black-crash-test-dummy.png', '94766--free-download-image.png', 'aaaa', 'aaaa', '0', '2021-12-30 05:05:36', '2022-02-19 12:34:02', '2022-02-19 12:34:02'),
(2, 'bbbb', 'photo-1559116315-702b0b4774ce1.jpg', 'photo-1559116315-702b0b4774ce2.jpg', 'bbbb', 'bbbb', '0', '2021-12-30 05:06:11', '2022-02-19 12:33:59', '2022-02-19 12:33:59'),
(3, 'cccc', '94766--free-download-image3.png', '94766--free-download-image4.png', 'cccc', 'cccc', '0', '2021-12-30 05:06:25', '2022-02-19 12:33:57', '2022-02-19 12:33:57'),
(6, 'Bible Questions Answered', 'about.jpg', 'slider1.jpg', 'Get a free interactive Bible study with one-on-one instruction.', 'bible-questions-answered', '1', '2022-02-19 07:04:38', '2022-02-19 17:07:29', NULL),
(7, 'gfgnfgnfn', '', '', '', 'fbdfbdf', '0', '2022-02-19 11:34:41', '2022-02-19 17:04:49', '2022-02-19 17:04:49'),
(8, 'Faith in God', 'about1.jpg', 'slider2.jpg', 'Learn about our meetings. Find a meeting location near you.', 'faith-in-god', '1', '2022-02-19 11:37:15', NULL, NULL),
(9, 'Peace & Happiness', 'about2.jpg', 'slider3.jpg', 'Discuss a Bible question, or learn more about Jehovah’s Witnesses.', 'peace-and-happiness', '1', '2022-02-19 11:38:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `krishna_subcategory`
--

CREATE TABLE `krishna_subcategory` (
  `id` int(10) NOT NULL,
  `maincat_id` int(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `image` varchar(250) NOT NULL,
  `banner` varchar(250) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `slug` varchar(250) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krishna_subcategory`
--

INSERT INTO `krishna_subcategory` (`id`, `maincat_id`, `title`, `image`, `banner`, `short_description`, `long_description`, `slug`, `is_active`, `created_date`, `updated_date`, `deleted_date`) VALUES
(1, 1, 'xxx', '77-774806_crash-testing-dummy-silhouette-black-crash-test-dummy2.png', '94766--free-download-image5.png', 'xxx', '', 'xxx', '0', '2021-12-30 06:15:27', '2022-02-19 19:32:46', '2022-02-19 19:32:46'),
(2, 2, 'yyy', '94766--free-download-image6.png', '94766--free-download-image7.png', 'yyy', '', 'yyy', '0', '2021-12-30 06:15:52', '2022-02-19 19:32:44', '2022-02-19 19:32:44'),
(3, 1, 'zzzz', 'photo-1559116315-702b0b4774ce3.jpg', '94766--free-download-image8.png', 'zzzz', '', 'zzzz', '0', '2021-12-30 06:16:11', '2022-02-19 19:32:43', '2022-02-19 19:32:43'),
(4, 2, 'kkkk', '77-774806_crash-testing-dummy-silhouette-black-crash-test-dummy3.png', 'photo-1559116315-702b0b4774ce4.jpg', 'kkkk', '', 'kkkk', '0', '2021-12-30 06:16:43', '2022-02-19 19:32:41', '2022-02-19 19:32:41'),
(5, 6, 'God', 'about3.jpg', 'slider11.jpg', 'Who Is God?', '<h3>Why is the pronunciation of God&rsquo;s name in ancient Hebrew unknown?</h3>\r\n\r\n<p>&nbsp;Ancient Hebrew was written without vowels, using only consonants. The Hebrew-speaking reader could easily provide the appropriate vowels. However, after the Hebrew Scriptures (&ldquo;Old Testament&rdquo;) were completed, some Jews adopted the superstitious belief that it was wrong to utter God&rsquo;s personal name. When they read aloud a scripture that contained God&rsquo;s name, they substituted expressions such as &ldquo;Lord&rdquo; or &ldquo;God.&rdquo; As centuries passed, this superstition spread and the ancient pronunciation was eventually lost.&nbsp;<a href=\"https://www.jw.org/en/bible-teachings/questions/who-is-jehovah/#footnote2\">*</a></p>\r\n\r\n<p>&nbsp;Some feel that the divine name was pronounced &ldquo;Yahweh,&rdquo; while others suggest different possibilities. A Dead Sea Scroll containing a portion of Leviticus in Greek transliterates the name&nbsp;<em>Iao.</em>&nbsp;Early Greek writers also suggest the pronunciations&nbsp;<em>Iae, I&middot;a&middot;beʹ,</em>&nbsp;and&nbsp;<em>I&middot;a&middot;ou&middot;eʹ,</em>&nbsp;but none of these can be proved to be the pronunciation used in ancient Hebrew.&nbsp;</p>\r\n', 'god', '1', '2022-02-19 14:03:39', '2022-02-19 19:43:53', NULL),
(6, 6, 'The Bible', 'about-img.png', 'slider21.jpg', 'What Is the Bible?', '<h2>The Bible&rsquo;s answer</h2>\r\n\r\n<p>&nbsp;Many people are told that we can&rsquo;t be sure who wrote the Bible. But the Bible is often clear about who penned its contents. Some parts begin with such phrases as &ldquo;the words of Nehemiah,&rdquo; &ldquo;the vision of Isaiah,&rdquo; and &ldquo;the word of Jehovah that occurred to Joel.&rdquo;&mdash;<a href=\"https://www.jw.org/en/library/bible/study-bible/books/nehemiah/1/#v16001001\" target=\"_blank\">Nehemiah 1:1;</a><a href=\"https://www.jw.org/en/library/bible/study-bible/books/isaiah/1/#v23001001\" target=\"_blank\">&nbsp;Isaiah 1:1;</a><a href=\"https://www.jw.org/en/library/bible/study-bible/books/joel/1/#v29001001\" target=\"_blank\">&nbsp;Joel 1:1</a>.</p>\r\n\r\n<p>&nbsp;Most Bible writers acknowledged that they wrote in the name of Jehovah, the one true God, and that they were guided by him. Prophets who wrote the Hebrew Scriptures proclaimed more than 300 times: &ldquo;This is what Jehovah has said.&rdquo; (<a href=\"https://www.jw.org/en/library/bible/study-bible/books/amos/1/#v30001003\" target=\"_blank\">Amos 1:3;</a><a href=\"https://www.jw.org/en/library/bible/study-bible/books/micah/2/#v33002003\" target=\"_blank\">&nbsp;Micah 2:3;</a><a href=\"https://www.jw.org/en/library/bible/study-bible/books/nahum/1/#v34001012\" target=\"_blank\">&nbsp;Nahum 1:12</a>) Other writers received God&rsquo;s message through angels.&mdash;<a href=\"https://www.jw.org/en/library/bible/study-bible/books/zechariah/1/#v38001007\" target=\"_blank\">Zechariah 1:7,</a><a href=\"https://www.jw.org/en/library/bible/study-bible/books/zechariah/1/#v38001009\" target=\"_blank\">&nbsp;9</a>.</p>\r\n\r\n<p>&nbsp;The Bible was written by some 40 men over the course of 1,600 years. Some men were used to write more than one book of the Bible. In fact, the Bible is a miniature library of 66 books. It consists of the 39 books of the Hebrew Scriptures, called by many the Old Testament, and the 27 books of the Christian Greek Scriptures, often called the New Testament.</p>\r\n', 'the-bible', '1', '2022-02-19 14:14:40', '2022-02-19 20:15:03', NULL),
(7, 8, 'Jesus', 'about4.jpg', 'slider31.jpg', 'Who is Jesus?', '<p><strong>Jesus died for &ldquo;the forgiveness of our sins.&rdquo;​&mdash;</strong><a href=\"https://www.jw.org/en/library/bible/study-bible/books/colossians/1/#v51001014\" target=\"_blank\"><strong>Colossians 1:​14</strong></a><strong>.</strong></p>\r\n\r\n<p>&nbsp;The first human, Adam, was created perfect, without&nbsp;<a href=\"https://www.jw.org/en/bible-teachings/questions/what-is-sin/\">sin</a>. However, he chose to disobey God. Adam&rsquo;s disobedience, or sin, profoundly affected all his descendants. &ldquo;Through the disobedience of the one man,&rdquo; the Bible explains, &ldquo;many were made sinners.&rdquo;​&mdash;<a href=\"https://www.jw.org/en/library/bible/study-bible/books/romans/5/#v45005019\" target=\"_blank\">Romans 5:​19</a>.</p>\r\n\r\n<p>&nbsp;Jesus was also perfect, but he never sinned. Therefore, he could be &ldquo;an atoning sacrifice for our sins.&rdquo; (<a href=\"https://www.jw.org/en/library/bible/study-bible/books/1-john/2/#v62002002\" target=\"_blank\">1&nbsp;John 2:2</a>; footnote) Just as Adam&rsquo;s disobedience contaminated the human family with sin, so Jesus&rsquo; death removed the stain of sin from all who exercise faith in him.</p>\r\n\r\n<p>&nbsp;In a sense, Adam sold the human race into sin. Jesus, by willingly dying in our behalf, repurchased humankind as his own. As a result, &ldquo;if anyone does commit a sin, we have a helper with the Father, Jesus Christ, a righteous one.&rdquo;​&mdash;<a href=\"https://www.jw.org/en/library/bible/study-bible/books/1-john/2/#v62002001\" target=\"_blank\">1&nbsp;John 2:1</a>.</p>\r\n', 'jesus', '1', '2022-02-19 14:15:38', NULL, NULL),
(8, 9, 'God’s Kingdom', 'about5.jpg', 'slider12.jpg', 'What is God’s Kingdom', '<h2>The Bible&rsquo;s answer</h2>\r\n\r\n<p>&nbsp;God&rsquo;s Kingdom will replace all human governments and rule over the entire earth. (<a href=\"https://www.jw.org/en/library/bible/study-bible/books/daniel/2/#v27002044\" target=\"_blank\">Daniel 2:44;</a><a href=\"https://www.jw.org/en/library/bible/study-bible/books/revelation/16/#v66016014\" target=\"_blank\">&nbsp;Revelation 16:14</a>) Once that happens, God&rsquo;s Kingdom will . . .</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>&nbsp;Remove the wicked, whose selfishness harms us all. &ldquo;As regards the wicked, they will be cut off from the very earth.&rdquo;&mdash;<a href=\"https://www.jw.org/en/library/bible/study-bible/books/proverbs/2/#v20002022\" target=\"_blank\">Proverbs 2:22</a>.</p>\r\n	</li>\r\n	<li>\r\n	<p>&nbsp;End all wars. &ldquo;[God] is making wars to cease to the extremity of the earth.&rdquo;&mdash;<a href=\"https://www.jw.org/en/library/bible/study-bible/books/psalms/46/#v19046009\" target=\"_blank\">Psalm 46:9</a>.</p>\r\n	</li>\r\n	<li>\r\n	<p>&nbsp;Bring prosperity and security to the earth. &ldquo;Everyone will live in peace among their own vineyards and fig trees, and no one will make them afraid.&rdquo;&mdash;<a href=\"https://www.jw.org/en/library/bible/study-bible/books/micah/4/#v33004004\" target=\"_blank\">Micah 4:4</a>,&nbsp;<em>Good News Translation.</em></p>\r\n	</li>\r\n	<li>\r\n	<p>&nbsp;Make the earth into a paradise. &ldquo;Thirsty deserts will be glad; barren lands will celebrate and blossom with flowers.&rdquo;&mdash;<a href=\"https://www.jw.org/en/library/bible/study-bible/books/isaiah/35/#v23035001\" target=\"_blank\">Isaiah 35:1</a>,&nbsp;<em>Contemporary English Version.</em></p>\r\n	</li>\r\n	<li>\r\n	<p>&nbsp;Provide everyone with meaningful, enjoyable work. &ldquo;The work of their own hands [God&rsquo;s] chosen ones will use to the full. They will not toil for nothing.&rdquo;&mdash;<a href=\"https://www.jw.org/en/library/bible/study-bible/books/isaiah/65/#v23065021-v23065023\" target=\"_blank\">Isaiah 65:21-23</a>.</p>\r\n	</li>\r\n	<li>\r\n	<p>&nbsp;Eliminate disease. &ldquo;No resident will say: &lsquo;I am sick.&rsquo;&rdquo;&mdash;<a href=\"https://www.jw.org/en/library/bible/study-bible/books/isaiah/33/#v23033024\" target=\"_blank\">Isaiah 33:24</a>.</p>\r\n	</li>\r\n</ul>\r\n', 'gods-kingdom', '1', '2022-02-19 14:16:17', '2022-02-19 19:47:11', NULL),
(9, 9, 'Spirit Realm', 'about-img1.png', 'slider22.jpg', 'What is Spirit Realm?', '<h2>The Bible&rsquo;s answer</h2>\r\n\r\n<p>&nbsp;Michael, referred to by some religions as &ldquo;Saint Michael,&rdquo; is evidently a name given to Jesus before and after his life on earth.&nbsp;<a href=\"https://www.jw.org/en/bible-teachings/questions/archangel-michael/#footnote1\">*</a>&nbsp;Michael disputed with Satan after the death of Moses and helped an angel deliver God&rsquo;s message to the prophet Daniel. (<a href=\"https://www.jw.org/en/library/bible/study-bible/books/daniel/10/#v27010013\" target=\"_blank\">Daniel 10:13,</a><a href=\"https://www.jw.org/en/library/bible/study-bible/books/daniel/10/#v27010021\" target=\"_blank\">&nbsp;21;</a><a href=\"https://www.jw.org/en/library/bible/study-bible/books/jude/1/#v65001009\" target=\"_blank\">&nbsp;Jude&nbsp;9</a>) Michael lives up to the meaning of his name​&mdash;&ldquo;Who Is Like God?&rdquo;​&mdash;by defending God&rsquo;s rulership and fighting God&rsquo;s enemies.​&mdash;<a href=\"https://www.jw.org/en/library/bible/study-bible/books/daniel/12/#v27012001\" target=\"_blank\">Daniel 12:1;</a><a href=\"https://www.jw.org/en/library/bible/study-bible/books/revelation/12/#v66012007\" target=\"_blank\">&nbsp;Revelation 12:7</a>.</p>\r\n', 'spirit-realm', '1', '2022-02-19 14:16:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `spiritual_oasis`
--

CREATE TABLE `spiritual_oasis` (
  `id` int(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(250) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `short_desc` text NOT NULL,
  `long_desk` text NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spiritual_oasis`
--

INSERT INTO `spiritual_oasis` (`id`, `title`, `slug`, `image`, `banner`, `short_desc`, `long_desk`, `is_active`, `created_date`, `updated_date`, `deleted_date`) VALUES
(1, 'Section 1', 'section-1', 'about.jpg', 'slider1.jpg', 'Learn about our meetings. Find a meeting location near you.', '<p>We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.</p>\r\n', '1', '2022-02-20 02:07:41', '2022-02-20 08:05:20', NULL),
(2, 'Section 2', 'section-2', 'about-img.png', 'slider11.jpg', 'Discuss a Bible question, or learn more about Jehovah’s Witnesses.', '<p>We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.</p>\r\n', '1', '2022-02-20 02:13:05', '2022-02-20 08:05:03', NULL),
(3, 'dvsdvd', '', '', '', '', '', '0', '2022-02-20 02:23:29', '2022-02-20 07:53:34', '2022-02-20 07:53:34'),
(4, 'Peace & Happiness', 'peace-and-happiness', 'about.jpg', 'slider1.jpg', 'Get a free interactive Bible study with one-on-one instruction.', '<p>We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.</p>\r\n', '1', '2022-02-20 03:07:31', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `whoarewe`
--

CREATE TABLE `whoarewe` (
  `id` int(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `image` varchar(250) NOT NULL,
  `banner` varchar(250) NOT NULL,
  `short_description` text NOT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `whoarewe`
--

INSERT INTO `whoarewe` (`id`, `title`, `image`, `banner`, `short_description`, `updated_date`) VALUES
(1, 'Iskcon Who are we', 'about-img.png', 'slider2.jpg', 'We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God’s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah’s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.', '2022-02-19 16:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `whoarewe_banner`
--

CREATE TABLE `whoarewe_banner` (
  `id` int(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `banner_image` varchar(250) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `whoarewe_banner`
--

INSERT INTO `whoarewe_banner` (`id`, `title`, `banner_image`, `is_active`, `created_date`, `updated_date`, `deleted_date`) VALUES
(1, 'aaa', '94766--free-download-image15.png', '0', '2021-12-30 01:12:46', '2021-12-30 06:43:02', '2021-12-30 06:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `whoarewe_section`
--

CREATE TABLE `whoarewe_section` (
  `id` int(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `image` varchar(250) NOT NULL,
  `short_description` text NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `whoarewe_section`
--

INSERT INTO `whoarewe_section` (`id`, `title`, `image`, `short_description`, `is_active`, `created_date`, `updated_date`, `deleted_date`) VALUES
(1, 'aaa', '77-774806_crash-testing-dummy-silhouette-black-crash-test-dummy6.png', 'aaaa', '0', '2021-12-30 02:11:43', '2021-12-30 11:00:34', '2021-12-30 11:00:34'),
(2, 'bbb', '94766--free-download-image16.png', 'bbb', '0', '2021-12-30 02:11:55', '2021-12-30 07:50:10', '2021-12-30 07:50:10'),
(3, 'abc', 'git_error.png', 'fgdffdb', '0', '2022-02-19 06:38:26', '2022-02-19 16:18:42', '2022-02-19 16:18:42'),
(4, 'Section 1', 'about-img1.png', '<p>We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.</p>\r\n', '1', '2022-02-19 10:53:35', '2022-02-19 16:25:11', NULL),
(5, 'Section 2', 'about.jpg', '<p>We come from hundreds of ethnic and language backgrounds, yet we are united by common goals. Above all, we want to honor Jehovah, the God of the Bible and the Creator of all things. We do our best to imitate Jesus Christ and are proud to be called Christians. Each of us regularly spends time helping people learn about the Bible and God&rsquo;s Kingdom. Because we witness, or talk, about Jehovah God and his Kingdom, we are known as Jehovah&rsquo;s Witnesses. Explore our site. Read the Bible online. Learn more about us and our beliefs.</p>\r\n', '1', '2022-02-19 10:55:35', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation_maincategory`
--
ALTER TABLE `donation_maincategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `founderacarya`
--
ALTER TABLE `founderacarya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `founderacarya_banner`
--
ALTER TABLE `founderacarya_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `founderacarya_section`
--
ALTER TABLE `founderacarya_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iskconpanihati`
--
ALTER TABLE `iskconpanihati`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iskconpanihati_banner`
--
ALTER TABLE `iskconpanihati_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iskconpanihati_section`
--
ALTER TABLE `iskconpanihati_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `krishna_maincategory`
--
ALTER TABLE `krishna_maincategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `krishna_subcategory`
--
ALTER TABLE `krishna_subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spiritual_oasis`
--
ALTER TABLE `spiritual_oasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whoarewe`
--
ALTER TABLE `whoarewe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whoarewe_banner`
--
ALTER TABLE `whoarewe_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whoarewe_section`
--
ALTER TABLE `whoarewe_section`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donation_maincategory`
--
ALTER TABLE `donation_maincategory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `founderacarya`
--
ALTER TABLE `founderacarya`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `founderacarya_banner`
--
ALTER TABLE `founderacarya_banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `founderacarya_section`
--
ALTER TABLE `founderacarya_section`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `iskconpanihati`
--
ALTER TABLE `iskconpanihati`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `iskconpanihati_banner`
--
ALTER TABLE `iskconpanihati_banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `iskconpanihati_section`
--
ALTER TABLE `iskconpanihati_section`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `krishna_maincategory`
--
ALTER TABLE `krishna_maincategory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `krishna_subcategory`
--
ALTER TABLE `krishna_subcategory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `spiritual_oasis`
--
ALTER TABLE `spiritual_oasis`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `whoarewe`
--
ALTER TABLE `whoarewe`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whoarewe_banner`
--
ALTER TABLE `whoarewe_banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whoarewe_section`
--
ALTER TABLE `whoarewe_section`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
