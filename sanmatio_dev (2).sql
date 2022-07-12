-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 12, 2022 at 03:18 PM
-- Server version: 10.3.35-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanmatio_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shop_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shop_logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '1= admin || 2 = vendor',
  `status` int(11) NOT NULL COMMENT '1= active| 0 = blocked',
  `wallet_amount` double NOT NULL DEFAULT 0,
  `admin_commission` int(11) NOT NULL DEFAULT 10,
  `vat_tax` int(11) NOT NULL DEFAULT 9,
  `about_shop` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `contact_number`, `address`, `shop_name`, `shop_logo`, `user_type`, `status`, `wallet_amount`, `admin_commission`, `vat_tax`, `about_shop`, `created_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '1234567', '78968875451', 'Dublin, CA11																																																																											', '', 'assets/uploads/user.png', 1, 0, 0, 10, 9, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '/assets/site/img/name-logo.png',
  `banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '/assets/site/img/name-logo.png',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `user_id`, `image`, `banner`, `created_at`, `updated_at`) VALUES
(8, 'Bracelets', 0, 'assets/upload/15539930741657374981.webp', 'assets/upload/1653672441657374981.webp', '2022-07-09 00:00:00', NULL),
(9, 'Anklets', 0, 'assets/upload/3288548711657375098.webp', 'assets/upload/2111975181657375098.webp', '2022-07-09 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `title`, `state_id`, `created_at`, `updated_at`) VALUES
(1, 'Indore', 1, '2022-07-05 15:38:57', '0000-00-00 00:00:00'),
(6, 'Mumbai ', 5, '2022-07-06 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '/assets/site/img/name-logo.png',
  `banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '/assets/site/img/name-logo.png',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `user_id`, `title`, `image`, `banner`, `created_at`, `updated_at`) VALUES
(1, 0, 'Gold Finish', 'assets/upload/3536304241657375478.jpg', 'assets/upload/15764066421657375478.webp', '2022-07-06 12:56:14', '0000-00-00 00:00:00'),
(3, 0, 'Oxidised Jewellery', 'assets/upload/21380369721657375435.jpg', 'assets/upload/8455559241657375435.webp', '2022-07-06 00:00:00', '0000-00-00 00:00:00'),
(6, 0, 'Enamel', 'assets/upload/7451482761657375523.jpg', 'assets/upload/14230868171657375523.webp', '2022-07-09 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `content_management`
--

CREATE TABLE `content_management` (
  `id` int(11) NOT NULL,
  `page` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` blob NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `content_management`
--

INSERT INTO `content_management` (`id`, `page`, `content`, `created_at`, `updated_at`) VALUES
(1, 'welcome', 0x3c703e647366647366647367647366673c2f703e, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'norms', 0x3c703e63666478736664736766647367663c2f703e, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'privacy', 0x3c64697620636c6173733d22493654587165223e0d0a3c6469762069643d225f6950325f597369684a647173342d45506a4b4739634133302220636c6173733d226f7372702d626c6b223e0d0a3c6469763e0d0a3c64697620636c6173733d224b6f743778223e0d0a3c6469762069643d226b702d77702d7461622d636f6e742d6f766572766965772220646174612d68766569643d224345635141772220646174612d7665643d22326168554b45776a4968666653344e6e3441685661316a6747485978514477345179646f424b4142364241684845414d223e0d0a3c64697620636c6173733d22616f50664f63223e0d0a3c6469762069643d226b702d77702d7461622d6f766572766965772220646174612d68766569643d224345305141412220646174612d7665643d22326168554b45776a4968666653344e6e3441685661316a674748597851447734516b7434424b4142364241684e454141223e0d0a3c64697620636c6173733d22547a4842366220634c6a416963204c4d524366632220646174612d68766569643d2243466f5141412220646174612d7665643d22326168554b45776a4968666653344e6e3441685661316a67474859785144773451303467434b41423642416861454141223e0d0a3c6469763e0d0a3c64697620636c6173733d22734154534865223e0d0a3c6469763e0d0a3c64697620636c6173733d224c7556455563204230336833642050364f5a69205631346e4b6320693871713862207074634c494f737a514a755f5f77686f6c65706167652d636172642077702d6d732220646174612d68766569643d2243466b514141223e0d0a3c64697620636c6173733d2255445a6559204f5446614166223e0d0a3c64697620636c6173733d2277445978686322206c616e673d22656e2d494e2220646174612d6d643d2235302220646174612d68766569643d224346415141412220646174612d7665643d22326168554b45776a4968666653344e6e3441685661316a674748597851447734516b436c3642416851454141223e0d0a3c64697620636c6173733d22505a505a6c66206862385341632220646174612d6174747269643d226465736372697074696f6e2220646174612d68766569643d224346415141512220646174612d7665643d22326168554b45776a4968666653344e6e3441685661316a674748597851447734517a69416f41486f45434641514151223e0d0a3c6469763e0d0a3c64697620636c6173733d226b6e6f2d7264657363223e6768666173686167686164766820767663627863623c2f6469763e0d0a3c2f6469763e0d0a3c2f6469763e0d0a3c2f6469763e0d0a3c2f6469763e0d0a3c2f6469763e0d0a3c2f6469763e0d0a3c2f6469763e0d0a3c2f6469763e0d0a3c2f6469763e0d0a3c2f6469763e0d0a3c2f6469763e0d0a3c2f6469763e0d0a3c2f6469763e0d0a3c2f6469763e0d0a3c64697620636c6173733d226c3363555364223ec2a03c2f6469763e0d0a3c2f6469763e0d0a3c2f6469763e0d0a3c64697620636c6173733d227270424d5962206b6e6f2d667472223ec2a03c2f6469763e, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `occasion`
--

CREATE TABLE `occasion` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `occasion`
--

INSERT INTO `occasion` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Just Because!', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Anniversary', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Birthday', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Marriage', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Womens Day', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Festival', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE `other` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'perfumes', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` blob NOT NULL,
  `style` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `regular_price` float NOT NULL,
  `sale_price` float DEFAULT NULL,
  `featured` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'new | bestsellers',
  `recipient` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `occasion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_recommend` int(11) NOT NULL DEFAULT 0 COMMENT '0=no|1=yes',
  `quantity` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `style`, `category`, `color`, `regular_price`, `sale_price`, `featured`, `recipient`, `occasion`, `others`, `is_recommend`, `quantity`, `created_at`, `updated_at`) VALUES
(2, 'Pure Silver ring', 0x3c64697620636c6173733d226465736372697074696f6e20746578742d7365636f6e64617279206d742d34223e0d0a3c7020636c6173733d2268656164696e67206d792d302070792d3020746578742d7365636f6e646172792066772d626f6c642066732d35223e54686520696e737069726174696f6e3c2f703e0d0a3c7020636c6173733d226465736372697074696f6e2020746578742d7365636f6e64617279223e4c6f72656d20697073756d20646f6c6f722c2073697420616d657420636f6e7365637465747572206164697069736963696e6720656c69742e20486172756d2c20706572666572656e64697320696e76656e746f726520666163696c69732064697374696e6374696f2c20656172756d2062656174616520617574656d207574206d61676e692063756d7175652065737365207175617320696e207265696369656e64697320717561736920646f6c6f72656d7175652063756d3f204469637461207175696120656c6967656e6469206173706572696f7265732e3c2f703e0d0a3c2f6469763e0d0a3c64697620636c6173733d226465736372697074696f6e206d742d34223e0d0a3c7020636c6173733d2268656164696e67206d792d302070792d3020746578742d7365636f6e646172792066772d626f6c642066732d35223e5468652044657369676e3c2f703e0d0a3c7020636c6173733d226465736372697074696f6e2020746578742d7365636f6e64617279223e4c6f72656d20697073756d20646f6c6f722c2073697420616d657420636f6e7365637465747572206164697069736963696e6720656c69742e20486172756d2c20706572666572656e64697320696e76656e746f726520666163696c69732064697374696e6374696f2c20656172756d2062656174616520617574656d207574206d61676e692063756d7175652065737365207175617320696e207265696369656e64697320717561736920646f6c6f72656d7175652063756d3f204469637461207175696120656c6967656e6469206173706572696f7265732e3c2f703e0d0a3c2f6469763e0d0a3c64697620636c6173733d226465736372697074696f6e206d742d34223e0d0a3c7020636c6173733d2268656164696e67206d792d302070792d3020746578742d7365636f6e646172792066772d626f6c642066732d35223e546865205374796c696e673c2f703e0d0a3c7020636c6173733d226465736372697074696f6e2020746578742d7365636f6e64617279223e4c6f72656d20697073756d20646f6c6f722c2073697420616d657420636f6e7365637465747572206164697069736963696e6720656c69742e2048613c2f703e0d0a3c756c20636c6173733d22223e0d0a3c6c6920636c6173733d22746578742d7365636f6e64617279223e4c6f72656d20697073756d20646f6c6f722073697420616d65742e3c2f6c693e0d0a3c6c6920636c6173733d22746578742d7365636f6e64617279223e4c6f72656d20697073756d20646f6c6f722073697420616d65742e3c2f6c693e0d0a3c6c6920636c6173733d22746578742d7365636f6e64617279223e4c6f72656d20697073756d20646f6c6f722073697420616d65742e3c2f6c693e0d0a3c6c6920636c6173733d22746578742d7365636f6e64617279223e4c6f72656d20697073756d20646f6c6f722073697420616d65742e3c2f6c693e0d0a3c6c6920636c6173733d22746578742d7365636f6e64617279223e4c6f72656d20697073756d20646f6c6f722073697420616d65742e3c2f6c693e0d0a3c2f756c3e0d0a3c2f6469763e0d0a3c64697620636c6173733d226465736372697074696f6e206d742d34223e0d0a3c7020636c6173733d2268656164696e67206d792d302070792d3020746578742d7365636f6e646172792066772d626f6c642066732d35223e5368697070696e6720262052657475726e733a3c2f703e0d0a3c756c20636c6173733d22223e0d0a3c6c6920636c6173733d22746578742d7365636f6e64617279223e467265652045787072657373205368697070696e673c2f6c693e0d0a3c6c6920636c6173733d22746578742d7365636f6e64617279223e333020446179732052657475726e733c2f6c693e0d0a3c2f756c3e0d0a3c2f6469763e, '3,1', '9,8', '3,1', 200, 230, 'new', '6,5,4', '6', '', 0, 10, '2022-07-09 08:59:00', '2022-07-09 08:59:00'),
(3, 'Test Product', 0x3c6469763e0d0a3c68323e57686174206973204c6f72656d20497073756d3f3c2f68323e0d0a3c703e3c7374726f6e673e4c6f72656d20497073756d3c2f7374726f6e673ec2a069732073696d706c792064756d6d792074657874206f6620746865207072696e74696e6720616e64207479706573657474696e6720696e6475737472792e204c6f72656d20497073756d20686173206265656e2074686520696e6475737472792773207374616e646172642064756d6d79207465787420657665722073696e6365207468652031353030732c207768656e20616e20756e6b6e6f776e207072696e74657220746f6f6b20612067616c6c6579206f66207479706520616e6420736372616d626c656420697420746f206d616b65206120747970652073706563696d656e20626f6f6b2e20497420686173207375727669766564206e6f74206f6e6c7920666976652063656e7475726965732c2062757420616c736f20746865206c65617020696e746f20656c656374726f6e6963207479706573657474696e672c2072656d61696e696e6720657373656e7469616c6c7920756e6368616e6765642e2049742077617320706f70756c61726973656420696e207468652031393630732077697468207468652072656c65617365206f66204c657472617365742073686565747320636f6e7461696e696e67204c6f72656d20497073756d2070617373616765732c20616e64206d6f726520726563656e746c792077697468206465736b746f70207075626c697368696e6720736f667477617265206c696b6520416c64757320506167654d616b657220696e636c7564696e672076657273696f6e73206f66204c6f72656d20497073756d2e3c2f703e0d0a3c2f6469763e0d0a3c6469763e0d0a3c68323e57687920646f207765207573652069743f3c2f68323e0d0a3c703e49742069732061206c6f6e672065737461626c6973686564206661637420746861742061207265616465722077696c6c206265206469737472616374656420627920746865207265616461626c6520636f6e74656e74206f6620612070616765207768656e206c6f6f6b696e6720617420697473206c61796f75742e2054686520706f696e74206f66207573696e67204c6f72656d20497073756d2069732074686174206974206861732061206d6f72652d6f722d6c657373206e6f726d616c20646973747269627574696f6e206f66206c6574746572732c206173206f70706f73656420746f207573696e672027436f6e74656e7420686572652c20636f6e74656e742068657265272c206d616b696e67206974206c6f6f6b206c696b65207265616461626c6520456e676c6973682e204d616e79206465736b746f70207075626c697368696e67207061636b6167657320616e6420776562207061676520656469746f7273206e6f7720757365204c6f72656d20497073756d2061732074686569722064656661756c74206d6f64656c20746578742c20616e6420612073656172636820666f7220276c6f72656d20697073756d272077696c6c20756e636f766572206d616e7920776562207369746573207374696c6c20696e20746865697220696e66616e63792e20566172696f75732076657273696f6e7320686176652065766f6c766564206f766572207468652079656172732c20736f6d6574696d6573206279206163636964656e742c20736f6d6574696d6573206f6e20707572706f73652028696e6a65637465642068756d6f757220616e6420746865206c696b65292e3c2f703e0d0a3c2f6469763e, '3,1', '9,8', '3', 1000, 900, '', '6,2', '6,5,1', '1', 1, 20, '2022-07-09 08:58:00', '2022-07-09 08:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(2, 'assets/product_images/10889966341657301940.webp', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'assets/product_images/20688076141657374824.jpeg', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `recipient`
--

CREATE TABLE `recipient` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `recipient`
--

INSERT INTO `recipient` (`id`, `title`, `created_at`, `updated_at`) VALUES
(2, 'Mother', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Sister', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Special One', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'For Him', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Couples', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Madhya Pradesh', '2022-07-05 15:20:16', '0000-00-00 00:00:00'),
(5, 'MH', '2022-07-05 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `styles`
--

CREATE TABLE `styles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '/assets/site/img/name-logo.png',
  `banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '/assets/site/img/name-logo.png',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `styles`
--

INSERT INTO `styles` (`id`, `user_id`, `title`, `image`, `banner`, `created_at`, `updated_at`) VALUES
(1, 0, 'Everyday Staples', '/assets/site/img/name-logo.png', '/assets/site/img/name-logo.png', '2022-07-06 12:56:14', '0000-00-00 00:00:00'),
(3, 0, 'Office Minimals', '/assets/site/img/name-logo.png', '/assets/site/img/name-logo.png', '2022-07-06 00:00:00', '2022-07-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prononus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about_me` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `my_skills` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `free_time_act` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dumbest_act` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `career_goals` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `privacy_status` int(11) NOT NULL COMMENT '1=private || 0 = public',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1= active| 0 = blocked',
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `first_name`, `last_name`, `email`, `image`, `username`, `linkedin_id`, `prononus`, `state`, `city`, `street_address`, `about_me`, `my_skills`, `free_time_act`, `dumbest_act`, `category`, `career_goals`, `privacy_status`, `status`, `token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'hakim', 'saifee', 'hakim.webwiders@gmail.com', 'assets/upload/7537001751656748483.png', 'hakim123', '0SVhdsd%fDgS^rg6', 'sdsad', 'MP', 'Indore', 'Indore', 'PHP developer', 'HTML , CSS , JQUERY , PHP', 'mobile games , movies', 'NONE', '2,3', '1,2', 0, 1, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c', '2022-07-18 16:24:52', '0000-00-00 00:00:00'),
(8, '', 'Manish', 'Talreja', 'manishtalreja0510@gmail.com', '', '', 'l-dCsYqnWY', '', '1', '1', '', '', '', NULL, NULL, NULL, NULL, 0, 1, 'AQXT-XwRJws4GQXVJtv_kpeUpiyxdu2Bl2erA3o5dV7pgclda78NPHmaJRgjtVz9Dw9LUW7Z8qny4ETS-83dl46u9hDD52FumiG8-8Zt7b9wTs52n_ulQv8EZuW5W7PPKp4ujUqfLvMx1gfG_vOmm428Mw6_JwJAkTyQ_Hdjk0scp_SqYBNhaxQktBZZPpuR-iBlse7RqnRZ2BCWQq9sJvOxeeiEW1NoszdhJncCC6mFHLYq7LprWGfBAYZ6Kix', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '', 'Manish', 'Talreja', 'manish.1webwiders@gmail.com', '', '', 'epMv8hk4mi', '', '1', '1', '', 'hsnsns', '', NULL, NULL, '5', NULL, 1, 1, 'AQX2jgta9zP_oFq05TapCRUFlEDNhOkyBJ7HpfZkJBxAC4JOqUvbs4LBo14tKCCGQpbjsUItky4WrxLS5liSYsGxLXlqdg3DdgY2PeeX1r8fxDY2LJqFThBFO9LU5lu1_IGecWAt82strBNcEIGw_M0iy3QxEjzSPXlr09ioLy9Exm1GyTjlNRFBvjOvdpiln5naxkbmvGkf83CXUkMEZKLLNlRhG-6bSw4BIik7E0byGFP0D1vYeTGrAD2mieQ', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_images`
--

CREATE TABLE `user_images` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_main` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_images`
--

INSERT INTO `user_images` (`id`, `user_id`, `image`, `is_main`, `created_at`, `updated_at`) VALUES
(1, 1, 'https://www.webwiders.com/WEB01/LinkedInApp/assets/upload/19621585011657009806.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'https://www.webwiders.com/WEB01/LinkedInApp/assets/upload/19733590831657009806.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 'https://www.webwiders.com/WEB01/LinkedInApp/assets/upload/6324168581657010171.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 'https://www.webwiders.com/WEB01/LinkedInApp/assets/upload/12890011701657010171.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 'https://www.webwiders.com/WEB01/LinkedInApp/assets/upload/6485285081657010181.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 'https://www.webwiders.com/WEB01/LinkedInApp/assets/upload/4151890571657010181.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 'https://www.webwiders.com/WEB01/LinkedInApp/assets/upload/8435606571657010227.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1, 'https://www.webwiders.com/WEB01/LinkedInApp/assets/upload/20024104541657010227.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 9, 'https://www.webwiders.com/WEB01/LinkedInApp/assets/upload/11034267671657089006.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 9, 'https://www.webwiders.com/WEB01/LinkedInApp/assets/upload/4684329081657089006.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 9, 'https://www.webwiders.com/WEB01/LinkedInApp/assets/upload/18499890511657089534.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 9, 'https://www.webwiders.com/WEB01/LinkedInApp/assets/upload/1283030411657089534.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 9, 'https://www.webwiders.com/WEB01/LinkedInApp/assets/upload/5122501761657089534.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 9, 'https://www.webwiders.com/WEB01/LinkedInApp/assets/upload/16292865741657089959.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 9, 'https://www.webwiders.com/WEB01/LinkedInApp/assets/upload/12202042211657089959.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 9, 'https://www.webwiders.com/WEB01/LinkedInApp/assets/upload/7698942221657089959.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 9, 'https://www.webwiders.com/WEB01/LinkedInApp/assets/upload/18381886091657090581.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 9, 'https://www.webwiders.com/WEB01/LinkedInApp/assets/upload/11017243201657090581.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 9, 'https://www.webwiders.com/WEB01/LinkedInApp/assets/upload/17538396161657090581.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 9, 'https://www.webwiders.com/WEB01/LinkedInApp/assets/upload/975164111657113269.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_management`
--
ALTER TABLE `content_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occasion`
--
ALTER TABLE `occasion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipient`
--
ALTER TABLE `recipient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `styles`
--
ALTER TABLE `styles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_images`
--
ALTER TABLE `user_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_imge` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `content_management`
--
ALTER TABLE `content_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `occasion`
--
ALTER TABLE `occasion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recipient`
--
ALTER TABLE `recipient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `styles`
--
ALTER TABLE `styles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_images`
--
ALTER TABLE `user_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_images`
--
ALTER TABLE `user_images`
  ADD CONSTRAINT `user_imge` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
