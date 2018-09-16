-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2018 at 04:04 AM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `binaryWorldDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Laptop'),
(2, 'Monitor'),
(3, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `product_description` text,
  `product_image` varchar(255) DEFAULT NULL,
  `product_specs` text,
  PRIMARY KEY (`product_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `cat_id`, `brand`, `price`, `product_description`, `product_image`, `product_specs`) VALUES
(1, 'Apple 13" Macbook Pro with Touch Bar(2.9Ghz i5, 512 GB, Sliver)', 1, 'Apple', 2499, 'The trademark Macbook beauty and performance gets a definite upgrade with this model, featuring a lighter, thinner body and the hotly awaited Touch Bar.<br><br>\r\n\r\nUp to 17% thinner than previous models\r\nStunning LED-backlit Retina display with IPS<br><br>\r\n\r\nCutting-edge Intel Iris graphics<br><br>\r\n\r\nBlistering-fast Intel Core i5 processor with Turbo Boost up to 3.3GHz<br><br>\r\n\r\nFull-sized backlit keyboard<br><br>\r\n\r\nForce Touch trackpad for pixel-precise cursor control<br><br>\r\n\r\n802.11ac Wi-Fi wireless networking<br><br>\r\n\r\nImpressive battery life<br><br>\r\n\r\nBoost your productivity, see finer details, work smarter not harder, and look good as you do it with the Macbook Pro.<br><br>\r\n', '1.jpg', '<strong>Audio</strong><br>\r\nSpeakers  &nbsp &nbsp Stereo Speakers<br><br>\r\n\r\n<strong>Camera</strong><br>\r\nWebcam &nbsp &nbsp 720p FaceTime HD camera<br><br>\r\n\r\n<strong>Connectivity</strong><br>\r\nBluetooth &nbsp &nbsp 4.2 <br>\r\nUSB &nbsp &nbsp	4 x USB-C <br>\r\nWi-Fi &nbsp &nbsp 802.11ac Wi-Fi wireless networking; IEEE 802.11a/b/g/n compatible <br><br>\r\n\r\n<strong>Dimensions</strong><br>\r\nDimensions &nbsp &nbsp 21.24 x 30.41 x 1.49 cm <br>\r\nWeight &nbsp &nbsp 1.37 kg <br><br>\r\n\r\n<strong>Display</strong> <br>\r\nResolution &nbsp &nbsp Native resolution: 2560 by 1600 pixels (Retina); scaled resolutions: 1680 by 1050, 1440 by 900, 1024 by 640 pixels <br><br>\r\n\r\n<strong>General</strong> <br>\r\nModel &nbsp &nbsp MNQF2 <br><br>\r\n\r\n<strong>Inputs</strong> <br>\r\nLine In/Microphone &nbsp &nbsp Three Microphones <br><br>\r\n\r\n<strong>Laptop</strong> <br>\r\nCPU &nbsp &nbsp	i5 <br>\r\nGPU &nbsp &nbsp Integrated <br>\r\nRAM &nbsp &nbsp 8GB <br>\r\nResolution &nbsp &nbsp 2560x1600 <br>\r\nScreen Size &nbsp &nbsp 13" <br>\r\nStorage Capacity &nbsp &nbsp 512GB <br><br>\r\n\r\n<strong>Model</strong><br>\r\nType &nbsp &nbsp MacBook Pro <br><br>\r\n\r\n<strong>Performance</strong> <br>\r\nBattery &nbsp &nbsp 49.2-watt-hour lithium-polymer battery <br>\r\nCPU &nbsp &nbsp Intel Core i5 <br>\r\nCPU Speed &nbsp &nbsp 2.9GHz, Turbo Boost up to 3.3GHz <br>\r\nGPU &nbsp &nbsp Intel Iris Graphics 550 <br>\r\nOS &nbsp &nbsp Mac <br>\r\nOS Version &nbsp &nbsp macOS Sierra<br>\r\nRAM &nbsp &nbsp 8GB of 2133MHz LPDDR3 onboard memory\r\n'),
(2, 'Apple 13" MacBook Air (256GB, 1.8GHz, i5)', 1, 'Apple', 1649, 'An incredible amount of power in a sleek, lightweight design, the power-efficient Intel Core processor lets the battery live on and on.<br><br>\r\n\r\n13” LED-backlit glossy widescreen display<br><br>\r\nMulti-touch trackpad and backlit keyboard<br><br>\r\nAll day battery<br><br>\r\nFifth-generation Intel Core processor\r\n256GB storage<br><br>\r\nWith a battery that lasts up to a staggering 12 hours, the Apple 13” MacBook Air allows you to work and play, all day long.<br><br>\r\n\r\nBuilt-in apps allow you keep up-to-date with emails, browse the web and make FaceTime video calls straight out of the box, and the Thunderbolt and USB 3 connections make this laptop a complete media and workstation.<br><br>\r\n\r\n', '2.jpg', '<strong> Audio </strong><br>\r\nSpeakers  &nbsp &nbsp	Stereo Speakers <br><br>\r\n<strong> Camera </strong><br>\r\nWebcam	&nbsp &nbsp  720p FaceTime HD camera <br><br>\r\n<strong> Connectivity </strong><br>\r\nBluetooth &nbsp &nbsp 4.0 <br>\r\nUSB &nbsp &nbsp	2 x USB 3 <br>\r\nWi-Fi &nbsp &nbsp 802.11ac Wi-Fi wireless networking; IEEE 802.11a/b/g/n compatible <br><br>\r\n\r\n<strong> Dimensions </strong><br>\r\nDimensions &nbsp &nbsp	32.5 x 22.7 x 1.7cm <br>\r\nWeight &nbsp &nbsp 1.35kg <br>\r\n\r\n<strong> Display </strong><br>\r\nLaptop Size  &nbsp &nbsp 13"\r\nResolution  &nbsp &nbsp	Supported resolutions: 1440 by 900 (native), 1280 by 800, 1152 by 720, and 1024 by 640 pixels at 16:10 aspect ratio; and 1024 by 768 and 800 by 600 pixels at 4:3 aspect ratio <br><br>\r\n\r\n<strong> Size &nbsp &nbsp 13.3"" </strong><br>\r\n<strong> General </strong> <br>\r\nInternal Storage &nbsp &nbsp 256GB PCIe-based SSD <br>\r\nModel &nbsp &nbsp MQD42 <br>\r\n\r\n<strong> Inputs </strong> <br>\r\nLine In/Microphone &nbsp &nbsp Dual microphones <br>\r\n\r\n<strong> Laptop </strong> <br>\r\nCPU &nbsp &nbsp	i5 <br>\r\nGPU &nbsp &nbsp	Integrated <br>\r\nRAM &nbsp &nbsp	8GB <br>\r\nResolution &nbsp &nbsp	1440x900 <br>\r\nScreen Size &nbsp &nbsp	13" <br>\r\nStorage Capacity &nbsp &nbsp 256GB <br>\r\nStorage Type &nbsp &nbsp SSD <br>\r\n\r\n<strong> Model </strong><br>\r\nType &nbsp &nbsp MacBook Air <br>\r\n\r\n<strong> Performance </strong> <br>\r\nBattery	&nbsp &nbsp 54-watt-hour lithium-polymer battery <br>\r\nCPU &nbsp &nbsp	Intel Core i5 (Turbo Boost up to 2.9GHz) <br>\r\nCPU Speed &nbsp &nbsp 1.8GHz dual-core <br>\r\nGPU &nbsp &nbsp	Intel HD Graphics 6000 <br>\r\nOS &nbsp &nbsp	Mac <br>\r\nOS Version &nbsp &nbsp	macOS Sierra <br> \r\nRAM &nbsp &nbsp	8GB of 1600MHz LPDDR3 onboard memory <br>\r\n\r\n<strong> Storage </strong> <br>\r\nCard Slots &nbsp &nbsp	1 x SDXC <br>'),
(3, 'Apple 13" MacBook Pro (2.3GHz i5, 256GB, Space Grey)', 1, 'Apple', 2199, 'Please check the What’s In The Box section to see what is included with this product. <br><br>\r\n\r\nThe stringent refurbishment process includes:<br>\r\nFull testing <br>\r\nRefurbishment with replacement parts if necessary. <br>\r\nA thorough clean and inspection <br>\r\nRepackaging in a new box <br><br>\r\n\r\nThe refurbished Apple 13” Macbook is as good as new. Each individual MacBook undergoes a stringent refurbishment process which includes the replacement of defective parts, a thorough clean and a full inspection. It is then repackaged in a new box. This stringent refurbishment process is conducted by Apple. <br><br>\r\n\r\nWhen you purchase a refurbished MacBook you are guaranteed a fully functional laptop. Laptops may have minor cosmetic imperfections, such as scratches or marks, but everything will be working perfectly. Each laptop meets premiere quality standards. <br><br>\r\n\r\nThe trademark Macbook beauty and performance gets a definite upgrade with this model, featuring a lighter, thinner body, a mind-blowing display and next-level processor performance. <br>\r\nUp to 17% thinner than previous models\r\nStunning LED-backlit Retina display with IPS <br>\r\nCutting-edge Intel Iris Graphics 640 <br>\r\nBlistering-fast 2.3GHz dual-core Intel Core i5 processor with Turbo Boost up to 3.6GHz <br>\r\nFull-sized backlit keyboard <br>\r\nForce Touch trackpad for pixel-precise cursor control <br>\r\n802.11ac Wi-Fi wireless networking\r\nImpressive battery life <br>\r\nBoost your productivity, see finer details, work smarter not harder, and look good as you do it with the Macbook Pro. <br><br>\r\n\r\nWith 25% more colours than sRGB and 500 nits brightness, immerse yourself in more brighter and vibrant colours on a breathtaking 13” LED-backlit Retina display with IPS. <br><br>\r\n\r\nUsing advanced innovations, Apple have developed an efficient heat elimination system that increases airflow throughout the ultra-thin MacBook Pro during demanding tasks. That way you can play games, transfer large files and edit videos without worrying about overheating. <br><br>\r\n\r\nThe Apple 13” MacBook Pro delivers a stunningly optimised display, a larger, more precise touchpad, faster graphics and louder speakers. What’s more – you can enjoy all of this in the thinnest, most lightweight Macbook Pro body to date. <br><br>', '3.jpg', '<strong> Audio </strong><br>\r\nSpeakers &nbsp &nbsp Stereo speakers with high dynamic range\r\n\r\n<strong> Camera </strong><br>\r\nWebcam	&nbsp &nbsp 720p FaceTime HD camera <br><br>\r\n\r\n<strong> Connectivity </strong><br>\r\nBluetooth &nbsp &nbsp 4.2 <br>\r\nUSB &nbsp &nbsp	2 x Thunderbolt 3 (USB-C) ports <br>\r\nWi-Fi &nbsp &nbsp 802.11ac <br>\r\nWi-Fi wireless networking; IEEE 802.11a/b/g/n compatible <br><br>\r\n\r\n<strong> Dimensions </strong><br>\r\nDimensions &nbsp &nbsp 30.41 x 21.24 x 1.37cm <br>\r\nWeight	&nbsp &nbsp 1.37 kg <br><br>\r\n\r\n<strong> Display </strong><br>\r\nLaptop Size &nbsp &nbsp	13" <br><br>\r\n\r\n<strong> Resolution </strong><br> 	Native resolution: 2560 by 1600 pixels (Retina);<br>\r\nScaled resolutions: 1680 by 1050, 1440 by 900, 1024 by 640 pixels <br><br>\r\n\r\nSize &nbsp &nbsp 13.3"" <br>\r\n\r\n<strong> General </strong><br>\r\nInternal Storage &nbsp &nbsp 256GB PCle-based onboard SDD <br>\r\nModel &nbsp &nbsp MPXT2 <br><br>\r\n\r\n<strong> Inputs </strong><br>\r\nLine In/Microphone &nbsp &nbsp	2 x Microphones <br><br>\r\n\r\n<strong> Laptop </strong><br>\r\nCPU &nbsp &nbsp	i5 <br>\r\nGPU &nbsp &nbsp	Integrated <br>\r\nRAM &nbsp &nbsp	8GB <br>\r\nResolution &nbsp &nbsp	2560x1600 <br>\r\nScreen Size &nbsp &nbsp	13" <br>\r\nStorage Capacity &nbsp &nbsp 256GB <br>\r\nStorage Type &nbsp &nbsp SSD <br><br>\r\n\r\n<strong> Model </strong><br>\r\nType &nbsp &nbsp MacBook Pro <br><br>\r\n\r\n<strong> Performance <strong><br>\r\nBattery	&nbsp &nbsp  54.5-watt-hour lithium-polymer battery <br>\r\nCPU &nbsp &nbsp	Intel Core i5 (Turbo Boost up to 3.6GHz) <br>\r\nCPU Speed &nbsp &nbsp	2.3GHz dual-core <br>\r\nGPU &nbsp &nbsp	Intel Iris Plus Graphics 640 <br>\r\nOS &nbsp &nbsp	Mac <br>\r\nOS Version &nbsp &nbsp	macOS Sierra <br>\r\nRAM &nbsp &nbsp 8GB of 2133MHz LPDDR3 onboard memory<br><br>'),
(4, 'Apple 15" MacBook Pro with Touch Bar', 1, 'Apple', 3599, 'The trademark Macbook beauty and performance gets a definite upgrade with this model, featuring a lighter, thinner body and the hotly awaited Touch Bar.<br><br>\r\n\r\nUp to 17% thinner than previous models <br><br>\r\nStunning LED-backlit Retina display with IPS<br><br>\r\nRadeon Pro 455 <br><br>\r\nBlistering-fast Intel Core i7 processor with Turbo Boost up to 3.6GHz <br><br>\r\nFull-sized backlit keyboard <br><br>\r\nForce Touch trackpad for pixel-precise cursor control <br><br>\r\n802.11ac Wi-Fi wireless networking <br><br>\r\nImpressive battery life <br><br>\r\nBoost your productivity, see finer details, work smarter not harder, and look good as you do it with the Macbook Pro. <br><br>\r\n\r\nThe 2016 model rolls out marked improvements on its predecessors, with a stunningly optimised display (up to 67% brighter), a larger, more precise touchpad, up to 130% faster graphics and up to 58% louder speakers. What’s more – you can enjoy all of this in the thinnest, most lightweight Macbook Pro body to date. <br><br>\r\n\r\nIntroducing Touch Bar <br><br>\r\n\r\nOnce you’ve used Touch Bar, you won’t know how you lived without it. Touch Bar replaces the standard function keys at the top of the keyboard, and changes automatically depending on your activity. This means that the tools you need are right there when you need them, making browsing, typing emojis, or adjusting system controls more efficient than ever. You can even use fingerprint ID for one-touch login access and to purchase via Apple Pay <br><br>', '4.jpg', '<strong> Audio </strong><br>\r\nSpeakers &nbsp &nbsp Stereo Speakers <br><br>\r\n\r\n<strong> Camera <strong><br>\r\nWebcam &nbsp &nbsp 720p FaceTime HD camera <br><br>\r\n\r\n<strong> Connectivity </strong><br>\r\nBluetooth &nbsp &nbsp 4.2 <br>\r\nUSB &nbsp &nbsp	4 x USB-C <br>\r\nWi-Fi &nbsp &nbsp 802.11ac Wi-Fi wireless networking; IEEE 802.11a/b/g/n compatible <br><br>\r\n\r\n<strong> Dimensions </strong> <br>\r\nDimensions &nbsp &nbsp	24.07 x 34.93 x 1.55 cm <br>\r\nWeight &nbsp &nbsp 1.83 kg <br>\r\n\r\n<strong> Display </strong><br>\r\nResolution &nbsp &nbsp <br>	\r\nNative resolution: 2880 by 1800 pixels (Retina);<br>\r\nScaled resolutions: 1920 by 1200, 1680 by 1050, 1440 by 900, 1024 by 640 pixels <br><br>\r\n\r\n<strong> General </strong><br>\r\nModel &nbsp &nbsp MLH42 <br><br>\r\n\r\n<strong> Inputs </strong> <br>\r\nLine In/Microphone &nbsp &nbsp Three Microphones <br><br>\r\n\r\n<strong> Laptop </strong> <br>\r\nCPU &nbsp &nbsp	i7 <br>\r\nGPU &nbsp &nbsp	Dedicated <br>\r\nRAM &nbsp &nbsp	16GB <br>\r\nResolution &nbsp &nbsp	2880x1800 <br>\r\nScreen Size &nbsp &nbsp	15" <br>\r\nStorage Capacity &nbsp &nbsp	512GB <br><br>\r\n\r\n<strong> Model </strong><br>\r\nType &nbsp &nbsp MacBook Pro <br><br>\r\n\r\n<strong> Performance </strong> <br>\r\nBattery &nbsp &nbsp 76.0-watt-hour lithium-polymer battery <br>\r\nCPU &nbsp &nbsp	Intel Core i7 <br>\r\nCPU Speed &nbsp &nbsp	2.7GHz, Turbo Boost up to 3.6GHz <br>\r\nGPU &nbsp &nbsp	Radeon Pro 455 <br>\r\nOS &nbsp &nbsp	Mac <br>\r\nOS Version &nbsp &nbsp	macOS Sierra <br>\r\nRAM &nbsp &nbsp 16GB of 2133MHz LPDDR3 onboard memory <br>'),
(5, 'Apple 15" MacBook Pro with Touch Bar (2.9Ghz i7, 512GB, Silver)', 1, 'Apple', 3649, 'Apple 15" MacBook Pro with Touch Bar (2.9Ghz i7, 512GB, Silver) - MPTV2\r\nPure Genius. <br><br>\r\n\r\nThe trademark Macbook beauty and performance gets a definite upgrade with this model, featuring a lighter, thinner body, a mind-blowing display and next-level processor performance. <br><br>\r\n\r\nUp to 17% thinner than previous models<br><br>\r\nStunning LED-backlit Retina display with IPS<br><br>\r\nRadeon Pro 560<br><br>\r\nBlistering-fast 2.9GHz quad-core Intel Core i7 processor with Turbo Boost up to 3.9GHz <br><br>\r\nFull-sized backlit keyboard <br><br>\r\nForce Touch trackpad for pixel-precise cursor control <br><br>\r\n802.11ac Wi-Fi wireless networking\r\nImpressive battery life <br><br>\r\nFeatures advanced split-blade fan design to increase airflow and reduce noise\r\nTouch ID technology <br><br>\r\nBoost your productivity, see finer details, work smarter not harder, and look good as you do it with the Macbook Pro.<br><br>\r\n\r\nWith 25% more colours than sRGB and 500 nits brightness, immerse yourself in more brighter and vibrant colours on a breathtaking 15" LED-backlit Retina display with IPS. <br><br>\r\n\r\nUsing advanced innovations, Apple have developed an efficient heat elimination system that increases airflow throughout the ultra-thin MacBook Pro during demanding tasks. That way you can play games, transfer large files and edit videos without worrying about overheating. <br><br>\r\n\r\nThe Apple 15" MacBook Pro delivers a stunningly optimised display, a larger, more precise touchpad, faster graphics and louder speakers. What''s more - you can enjoy all of this in the thinnest, most lightweight Macbook Pro body to date. <br><br>\r\n\r\nIntroducing Touch Bar\r\n\r\nOnce you''ve used Touch Bar, you won''t know how you lived without it. Touch Bar replaces the standard function keys at the top of the keyboard, and changes automatically depending on your activity. This means that the tools you need are right there when you need them, making browsing, typing emojis, or adjusting system controls more efficient than ever. You can even use fingerprint ID for one-touch login access and to purchase via Apple Pay.', '5.jpg', '<strong> Audio </strong><br>\r\nSpeakers  &nbsp &nbsp Stereo speakers with high dynamic range<br><br>\r\n\r\n<strong> Camera </strong><br>\r\nWebcam &nbsp &nbsp 720p FaceTime HD camera <br><br>\r\n\r\n<strong> Connectivity </strong><br>\r\nBluetooth &nbsp &nbsp 4.2 <br>\r\nUSB &nbsp &nbsp	4 x Thunderbolt 3 (USB-C) ports <br>\r\nWi-Fi &nbsp &nbsp 802.11ac <br>\r\nWi-Fi wireless networking; IEEE 802.11a/b/g/n compatible <br><br>\r\n\r\n<strong> Dimensions </strong><br>\r\nDimensions &nbsp &nbsp	34.93 x 24.07 x 1.55cm <br>\r\nWeight &nbsp &nbsp 1.83kg <br><br>\r\n\r\n<strong> Display </strong> <br>\r\nLaptop Size &nbsp &nbsp	15" <br>\r\nResolution &nbsp &nbsp Native resolution: 2880 by 1800 pixels  (Retina); Scaled resolutions: 1920 by 1200, 1680 by 1050, 1280 by 800, 1024 by 640 pixels <br><br>\r\n\r\n<strong> General </strong><br>\r\nInternal Storage &nbsp &nbsp 512GB PCIe-based onboard SSD <br>\r\nModel &nbsp &nbsp MPTV2 <br><br>\r\n\r\n<strong> Inputs </strong> <br>\r\nLine In/Microphone &nbsp &nbsp	3 x Microphones <br><br>\r\n\r\n<strong> Laptop </strong><br>\r\nCPU &nbsp &nbsp	i7 <br>\r\nGPU &nbsp &nbsp	Dedicated <br>\r\nRAM &nbsp &nbsp	16GB <br>\r\nResolution &nbsp &nbsp	2880x1800 <br>\r\nScreen Size &nbsp &nbsp	15" <br>\r\nStorage Capacity &nbsp &nbsp 512GB <br>\r\nStorage Type &nbsp &nbsp SSD <br><br>\r\n\r\n<strong> Model </strong><br>\r\nType &nbsp &nbsp MacBook Pro <br><br>\r\n\r\n<strong> Performance </strong><br>\r\nBattery	&nbsp &nbsp 76.0-watt-hour lithium-polymer battery <br>\r\nCPU &nbsp &nbsp	Intel Core i7 (Turbo Boost up to 3.9GHz) <br>\r\nCPU Speed &nbsp &nbsp	2.9GHz quad-core <br>\r\nGPU &nbsp &nbsp	Radeon Pro 560 <br>\r\nOS &nbsp &nbsp	Mac<br>\r\nOS Version &nbsp &nbsp	macOS Sierra <br>\r\nRAM &nbsp &nbsp	16GB of 2133MHz LPDDR3 onboard memory <br>'),
(6, 'Dell U-Series 27" 16:9 2560 x 1440 QHD IPS LED UltraSharp Monitor (U2715H)', 2, 'Dell', 599, 'Discover next-level sensational viewing with this monitor featuring stunning Full HD clarity and the world’s thinnest display border.<br><br>\r\n\r\nWatch your images come to life with gorgeously rich and vivid colours\r\nAmazingly thin 6.05mm display border – the thinnest in the world! <br><br>\r\nUltra-wide 178 degree viewing angle<br><br> \r\nImpeccable images at any angle with 6.5 degree forward or 22 degree backward tilt 90-degree clockwise/counter-clockwise pivoting capability for portrait or landscape viewing <br><br>\r\nVESA-mount compatibility <br><br>\r\nHeight adjustable with tilt, swivel and rotate capabilities <br><br>\r\nView HD content directly from your compatible smartphone or tablet with the MHL port <br><br>\r\n3 USB 3.0 ports for fast data transfers <br><br>\r\n1 high-current USB 3.0 port for rapid charging and powering compatible USB devices <br><br>\r\n3 year warranty included! <br><br>\r\n\r\nImmerse yourself in your viewing with the impressive capabilities of the Dell U Series UltraSharp 27” U2714H WLED Monitor. <br><br>\r\n\r\nIdeal for dual or multi-monitor setup, the stunning clear display is almost bezel-less, boasting the world’s thinnest 6.05mm display border at its outside edges. Easily pivot the monitor 90 degree clockwise or counter-clockwise, placing the thinnest edges side-by-side for seamless viewing experience. <br><br>', '6.jpg', '<strong> Dimensions </strong><br>\r\nDimensions  &nbsp &nbsp	363.4 x 612.7 x 46.4 mm <br>\r\nWeight  &nbsp &nbsp 4.91 kg <br><br>\r\n\r\n<strong> Display </strong> <br>\r\nActual Contrast Ratio  &nbsp &nbsp 1000:1(ANSI) <br>\r\nBacklight  &nbsp &nbsp	LED <br>\r\nBrightness  &nbsp &nbsp	305 cd/m² <br>\r\nColours  &nbsp &nbsp 16.78 million <br>\r\nImage Resolution  &nbsp &nbsp 2560 x 1440 <br>\r\nPanel Technology  &nbsp &nbsp IPS <br>\r\nPixel/Dot Pitch  &nbsp &nbsp 0.2331 mm <br>\r\nResponse Time  &nbsp &nbsp 8 ms (gray to gray) Normal Mode; 6 ms ( gray to gray) FAST Modems <br>\r\nSize  &nbsp &nbsp 27" <br>\r\nType  &nbsp &nbsp Widescreen Flat Panel Display <br>\r\n\r\n<strong> Inputs </strong><br>\r\nDisplayPort  &nbsp &nbsp Yes - 1x Mini DisplayPort, 1x DisplayPort (version 1.2), 1x DisplayPort out (MST) <br>\r\nHDMI  &nbsp &nbsp Yes - 2x HDMI (MHL) <br>\r\nUSB  &nbsp &nbsp Yes - 5x USB 3.0 downstream, 1x USB 3.0 upstream <br><br>\r\n\r\n<strong> Optical </strong><br>\r\nViewing/Filming Angle  &nbsp &nbsp 178 degree vertical / 178 degree horizontal <br>'),
(7, 'Dell U Series UltraSharp 24" U2414H WLED Monitor', 2, 'Dell', 399, 'Discover next-level sensational viewing with this monitor featuring stunning Full HD clarity and the world’s thinnest display border. <br>\r\nWatch your images come to life with gorgeously rich and vivid colours\r\nAmazingly thin 6.05mm display border – the thinnest in the world!<br><br>\r\n\r\nUltra-wide 178 degree viewing angle<br><br>\r\nImpeccable images at any angle with 6.5 degree forward or 22 degree backward tilt <br><br>\r\n90-degree clockwise/counter-clockwise pivoting capability for portrait or landscape viewing <br><br>\r\nVESA-mount compatibility <br><br>\r\nHeight adjustable with tilt, swivel and rotate capabilities <br><br>\r\nView HD content directly from your compatible smartphone or tablet with the MHL port <br><br>\r\n3 USB 3.0 ports for fast data transfers <br><br>\r\n1 high-current USB 3.0 port for rapid charging and powering compatible USB devices <br><br>\r\n3 year warranty included! <br><br>\r\n\r\nImmerse yourself in your viewing with the impressive capabilities of the Dell U Series UltraSharp 24” U2414H WLED Monitor. <br><br>\r\n\r\nIdeal for dual or multi-monitor setup, the stunning clear display is almost bezel-less, boasting the world’s thinnest 6.05mm display border at its outside edges. Easily pivot the monitor 90 degree clockwise or counter-clockwise, placing the thinnest edges side-by-side for seamless viewing experience.<br><br>', '7.jpg', '<strong> Dimensions </strong><br>\r\nDimensions  &nbsp &nbsp	321.1 × 539.1 × 45.6 mm <br>\r\nWeight  &nbsp &nbsp 3.61kg<br><br>\r\n\r\n<strong> Display </strong><br>\r\nActual Contrast Ratio  &nbsp &nbsp 1000:1(ANSI) <br>\r\nBacklight  &nbsp &nbsp	LED <br>\r\nBrightness  &nbsp &nbsp	250cd/m² <br>\r\nColours  &nbsp &nbsp	16.77 million <br>\r\nImage Resolution  &nbsp &nbsp 1920 x 1080 <br>\r\nPanel Technology  &nbsp &nbsp IPS <br>\r\nPixel/Dot Pitch  &nbsp &nbsp 0.274 mm <br>\r\nResponse Time  &nbsp &nbsp 8 msms <br>\r\nSize  &nbsp &nbsp 24"<br>\r\nType  &nbsp &nbsp Widescreen Flat Panel Display<br><br>\r\n\r\n<strong> Inputs </strong><br>\r\nDisplayPort  &nbsp &nbsp Yes - 1x Mini DisplayPort, 1x DisplayPort 1.2a,\r\n 1 DisplayPort out (MST)<br>\r\nHDMI  &nbsp &nbsp 2x HDMI (MHL)<br>\r\nUSB  &nbsp &nbsp Yes - 4 USB 3.0 downstream, 1x USB 3.0 upstream<br><br>\r\n\r\n<strong> Optical </strong><br>\r\nViewing/Filming Angle &nbsp &nbsp 178 degree vertical / 178 degree horizontal <br>'),
(8, 'Acer Predator X34P 34" 21:9 3440x1440 QHD 100Hz Ultrawide Curved IPS Gaming Monitor with G-Sync (X34P)', 2, 'Acer', 1499, 'The Acer Predator X34 34” QHD 100Hz Ultrawide Curved IPS Gaming Monitor creates an entirely different kind of game experience. Get in. <br><br>\r\n\r\n34” Curved 21:9 UltraWide QHD <br><br>(3440×1440) display and IPS panel <br><br>\r\nSmooth 100Hz refresh rate <br><br>\r\nNVIDIA G-SYNC technology keeps gameplay smooth <br><br>\r\nOverclock to 120Hz refresh rate <br><br>\r\nCustom game profiles with Predator GameView <br><br>\r\n\r\nFill your field of vision with 34 inches of curved screen immersion in 21:9 for a view that is both wide and magnificent. IPS panels are known for two things: great colour accuracy and being viewable from up to 178deg. With an UltraWide display, these things are paramount.<br><br> \r\n\r\nErgonomic design <br>\r\nTwo silver-hued aluminium arms extend from the base of the ambiently lit 34” display. Finding the sweet spot for such a large display can be challenging, which is why it’s ergonomically-designed for tilt, swivel and height adjustment. The ZeroFrame design, while ideal for a multi-monitor set up, rids the display of bulky bezels for more viewable screen and less obtrusive borders. <br><br>\r\n\r\nPowerful audio<br>\r\nOn the off chance you don’t have speakers or a headset; Acer has got you covered with two powerful 7-watt speakers, so you’re always ready for the battlefield.<br><br>', '8.jpg', '<strong> Audio </strong><br>\r\nSpeakers <br><br> 2x 7W <br><br>\r\n\r\n<strong> Connectivity </strong><br>\r\nHDMI  &nbsp &nbsp Yes <br><br>\r\n\r\n<strong> Dimensions </strong><br>\r\nDimensions  &nbsp &nbsp 81.68 x 44.07-57.07 x 29.91cm<br>\r\n\r\n<strong> Display </strong><br>\r\nBrightness  &nbsp &nbsp 300cd/m² <br>\r\nColour Gamut  &nbsp &nbsp 100% sRGB <br>\r\nColours  &nbsp &nbsp 1.07 billion <br>\r\nContrast Ratio  &nbsp &nbsp 1000:1 <br>\r\nMax. Resolution  &nbsp &nbsp 3440 x 1440 <br>\r\nPanel Technology  &nbsp &nbsp IPS LED <br>\r\nRefresh Rate  &nbsp &nbsp Normal mode: 100Hz|Overclocking mode: 120Hz <br>\r\nSize  &nbsp &nbsp 34" <br>\r\nViewing Angle  &nbsp &nbsp <br>\r\nHorizontal: 172 degree|Vertical: 178 degree <br><br>\r\n\r\n<strong> General </strong> <br>\r\nHeight Adjustment &nbsp &nbsp 130mm <br>\r\nResponse Time &nbsp &nbsp 4ms <br>\r\nTilt Angle &nbsp &nbsp -5 ~ 35° <br>\r\nWall Mountable &nbsp &nbsp VESA 100 x 100 <br><br>\r\n\r\n<strong> Inputs </strong><br>\r\nDisplayPort &nbsp &nbsp	1x <br>\r\nUSB 3.0 &nbsp &nbsp 4x <br><br>\r\n\r\n<strong> Power</strong><br>\r\nPower Consumption &nbsp &nbsp Off: 0.4W|Sleep: 0.5W|On: 54W <br>\r\nPower Supply &nbsp &nbsp 100V-240V (External adapter)<br><br>'),
(9, 'ASUS 34" Designo Curve Ultra-wide Curved 21:9 UWQHD Monitor\r\n', 2, 'Asus', 1209, 'The ASUS 34” Designo Curve Ultra-wide Curved 21:9 Monitor will bring photos and videos to life with its incredibly clear display. <br><br>\r\n\r\n178-degree wide-view angle <br><br>\r\n8-Watts stereo speakers <br><br>\r\nHDMI and DP ports for multi device connections <br><br>\r\nUltra-wide QHD <br><br>\r\nHigh contrast ratio for vibrant colours <br><br>\r\n\r\n<strong> Amazing Images </strong> <br>\r\nSurround yourself with the highest quality images imaginable. The ultra-wide QHD monitor features 2.5x the resolution of a typical Full HD display; this allows it to provide 35% more onscreen space than other Full HD monitors of a similar size. <br><br>\r\n\r\n<strong> Premium Sound </strong> <br>\r\nThanks to ASUS’ SonicMaster technology you will be immersed in theatre-quality audio. With four pre-set modes (music, movie, gaming & user) you can enhance the quality of sound depending on what you are watching.<br><br>\r\n\r\n<strong> ASUS Eye Care Technology </strong> <br>\r\nUtilising an exclusive ultra-low blue light to help protect your eyes from long exposure to screens it will help you be as productive as possible. Plus, with its flicker-free technology you can enjoy a more comfortable viewing experience by minimising instances of eyestrain and other damaging ailments.<br><br>\r\n\r\nThe sleek and stylish design of the ASUS 34” Designo Curve Ultra-wide Curved 21:9 Monitor, partnered with its amazing features, will quickly make it your favourite monitor. The Ultra-wide QHD screen, wireless charger and wide-view angle will allow you to get the most out of this monitor.<br><br>', '9.jpg', '<strong> Dimensions </strong> <br>\r\nDimensions  &nbsp &nbsp 810.6 x 456.8 x 239.7mm <br>\r\nWeight  &nbsp &nbsp 8.4kg <br><br>\r\n\r\n<strong> Display </strong><br>\r\nBacklight  &nbsp &nbsp W-LED <br>\r\nBrightness  &nbsp &nbsp 300 cd/m² <br>\r\nColours	 &nbsp &nbsp 1073.7 M (10 bits) <br>\r\nContrast Ratio  &nbsp &nbsp 100000000:1 <br>\r\nImage Resolution  &nbsp &nbsp 3440 x 1440 <br>\r\nPanel Technology  &nbsp &nbsp VA <br>\r\nResponse Time  &nbsp &nbsp 4msms <br>\r\nType  &nbsp &nbsp Ultra Widescreen <br><br>\r\n\r\n<strong> Inputs </strong><br>\r\nDisplayPort  &nbsp &nbsp Yes <br>\r\nOptical\r\nViewing/Filming Angle  &nbsp &nbsp 	178° vertical / 178° horizontal <br><br>'),
(10, 'Samsung 32" 16:9 1920x1080 Full HD Curved LED Monitor (LC32F391FWEXXY)', 2, 'Samsung', 339, 'Whether you are watching blockbuster movies, designing, gaming or analysing spreadsheets, the Samsung 32” Full HD Curved LED Monitor provides a truly immersive viewing experience. <br><br>\r\n\r\n32” Full HD LED display <br><br>\r\n1920 × 1080 pixels <br><br>\r\nFlicker-free technology <br><br>\r\n1x HDMI and 1x DisplayPort <br><br>\r\nEco Saving Plus <br><br>\r\nEye Saver Mode <br><br>\r\n\r\nBrilliant picture quality with Samsung’s advanced display technology <br><br>\r\n\r\nThe superb 3000:1 contrast ratio delivers deep blacks and bright whites so you can clearly see even in the darkest or brightest scene. <br><br>\r\n\r\nEnhanced gaming experience with Game mode <br><br>\r\n\r\nGame mode instantly optimises screen colours and contrast for gaming to ensure you enjoy every scene at its best.<br><br>', '10.jpg', '<strong> Camera </strong><br>\r\nViewing Angle  &nbsp &nbsp 178degree/178degree <br><br>\r\n\r\n<strong> Dimensions </strong><br>\r\nDimensions  &nbsp &nbsp \r\nWith Stand: 724.3 x 522.2 x 247.7mm|Without Stand: 724.3 x 428.0 x 94.4mm <br>\r\n\r\nPower Cable Length  &nbsp &nbsp 1.5m\r\nVESA Wall Mount Pattern  &nbsp &nbsp 75 x 75mm <br>\r\nWeight	 &nbsp &nbsp \r\nWith Stand: 6.2kg|Without Stand: 5.4kg <br><br>\r\n\r\n<strong> Display </strong><br>\r\nBrightness  &nbsp &nbsp Typical: 250|Min: 200cd/m²<br>\r\nColour Gamut  &nbsp &nbsp 72% <br>\r\nColour Support  &nbsp &nbsp 16.7M <br>\r\nContrast Ratio  &nbsp &nbsp 3,000:1(Typ) <br>\r\nCurvature  &nbsp &nbsp 	22degree <br>\r\nNative Aspect Ratio  &nbsp &nbsp 16:9 <br>\r\nRefresh Rate  &nbsp &nbsp 60HzHz <br>\r\nResolution  &nbsp &nbsp 1920 x 1080 <br>\r\nResponse Time  &nbsp &nbsp ~5msms <br>\r\nScreen Size  &nbsp &nbsp 32" <br>\r\nSize  &nbsp &nbsp 698.40 x 392.85mmmm <br>\r\nType  &nbsp &nbsp Full HD Display <br><br>\r\n\r\n<strong> Features </strong><br>\r\nFlicker-free  &nbsp &nbsp Yes <br><br>\r\n\r\n<strong> General </strong> <br>\r\nColour  &nbsp &nbsp White high Glossy<br><br>\r\n\r\n<strong> Features </strong> <br>\r\nSamsung MagicBright, Samsung MagicUpscale, Eco Saving Plus, Eye Saver Mode, Game Mode, Image Size, Power Cable, HDMI Cable\r\nOperating System  &nbsp &nbsp Windows 10 <br>\r\nPanel Type  &nbsp &nbsp Vertical Alignment (VA) <br>\r\nTilt Angle  &nbsp &nbsp -2.0degree ~ 22.0degree° <br>\r\nType  &nbsp &nbsp Curved LED Monitor <br><br>\r\n\r\n<strong> Inputs </strong><br>\r\nDisplayPort  &nbsp &nbsp 1x <br>\r\nHDMI  &nbsp &nbsp 1x <br><br>\r\n\r\n<strong> Inputs/ Outputs </strong><br>\r\nHeadphone Jack  &nbsp &nbsp 1x <br><br>\r\n\r\n<strong> Operating Environment </strong><br>\r\nHumidity  &nbsp &nbsp 10~80, non-condensing <br><br>\r\n\r\n<strong> Performance </strong><br>\r\nOperating Temperature  &nbsp &nbsp 10~40 degreeC<br><br>\r\n\r\n<strong> Power </strong><br>\r\nMaximum Power Consumption  &nbsp &nbsp 35W <br>\r\nPower Consumption  &nbsp &nbsp Off Mode: Less than 0.3W <br>\r\nPower Supply  &nbsp &nbsp AC 100-240V <br><br>'),
(11, 'G-Technology 1TB G-DRIVE mobile USB-C Portable Hard Drive', 3, 'Apple', 69.95, '\r\nFeaturing a plug-and-play USB-C port and transfer speeds up to 140 MBps. <br>\r\n The G-Technology G-DRIVE mobile USB-C hard drive offers portable storage in a stylish, aluminum design to complement your Mac—along with plenty of capacity to back up or take your favorite videos, photos, music, and documents with you wherever you go.<br><br>', '11.jpg', '<strong> Features </strong><br>\r\nTime Machine compatible <br><br>\r\n\r\n<strong> Connections: </strong> Thunderbolt 3 (USB-C), USB, USB-C <br><br>\r\n\r\n<strong> Power Source:</strong> Bus Powered <br><br>\r\n\r\n<strong> Height:</strong> 0.41 in./1.04 cm <br>\r\n\r\n<strong>Length:</strong> 4.33 in./11 cm <br>\r\n\r\n<strong>Width:</strong> 3.23 in./8.2 cm <br>\r\n\r\n<strong>Weight:</strong> 4.8 oz./136.08 g<br><br>'),
(12, 'Logitech MK550 Wireless Wave Desktop Combo (920-002555)', 3, 'Logitech', 129, 'Your fingers vary in length. So with its gradual wave-shaped contour, this keyboard supports the actual, varied lengths of your fingers.<br><br>\r\n\r\nThe palm rest helps position your hands comfortably on the keyboard—and offers a comfortable place to rest your palms when you’re not typing.<br><br>\r\n\r\nContoured sides and soft rubber grips keep your hand comfortable, supported, and in control. You’ll enjoy smooth, precise tracking on virtually any surface.<br><br>\r\n\r\nA battery life of up to three years for the keyboard and two years for the mouse practically eliminates the need to replace batteries.<br><br>\r\n\r\n', '12.jpg', '<strong> Features: </strong> <br>\r\nWave-Shaped Key Frame<br>\r\nCushioned, Contoured Palm Rest <br>\r\nHand-Friendly Laser Mouse <br>\r\nBatteries Without Hassle <br>\r\nLogitech Unifying Receiver <br>\r\n128-Bit AES Encryption <br>\r\nAdjustable Keyboard Height <br>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `usertbl`
--

CREATE TABLE IF NOT EXISTS `usertbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userlevel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Table with Users used for Log In ' AUTO_INCREMENT=10 ;

--
-- Dumping data for table `usertbl`
--

INSERT INTO `usertbl` (`id`, `username`, `password`, `email`, `userlevel`) VALUES
(2, 'Shambhu', '$2y$10$Xb7WLTzYmHtEhPkuAtDqrezDFAM4sRiAbmMa6WQlnlopXo9qkBoMO', 'shambhu.bhujel@gmail.com', NULL),
(3, 'Abiral', '$2y$10$kP3lUKMGJmcJC2pAwDGN6.rerqCpUFzR/XI6381qFTVridGy630IG', 'coolrai182@gmail.com', NULL),
(4, 'Bishow', '$2y$10$Cd98aSWkwegaarGknrgxy.xCGg0sAZrqEIHAKThwdIjsK2s2aCVRW', 'bishow@gmail.com', NULL),
(5, 'Jhon', '$2y$10$L8aL8z4lnT42tbVfrtaihuJVGExipF0fd6CT4FcL16HQr9vS7mL2e', 'jhon@gmail.com', NULL),
(6, 'Harry', '$2y$10$hZn4xQLgx1z8zL7JMFf/kOG8rLSa.L74sef0HRzS2Md/rA5H4dq1C', 'harry@mail.com', NULL),
(7, 'Sham', '$2y$10$zlc0L0VXbXmywmJS6Vgt4utdJ4bgJ5DnWMy2ezfRtj23dZxf5X0qq', 'sham@mail.com', NULL),
(8, 'rai', '$2y$10$TZSwQQBl652lcHp97.2ppOqkTVkQJbN9Ku5GvydP7XwkHv5.OzPzm', 'rai@gmail.com', NULL),
(9, 'Sam', '$2y$10$1m3rDpeN1WgFlM9LeEncd.twkkNlCzxpMDPj3iyLd9RcLG2KemEv.', 'sam@mail.com', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;