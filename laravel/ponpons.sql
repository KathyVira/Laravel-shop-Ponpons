-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 05:34 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ponpons`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `source` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `source`, `created_at`, `updated_at`) VALUES
(7, 'https://customizeyourimage.com/wp-content/plugins/wp-easycart-data/products/pics1/B1_d01772b97e8807e6311be7954e72b116.jpg', '2020-01-14 15:34:20', '2020-01-14 15:34:20');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Small', 'Small pompons of different col', 'small2.jpg', '2019-12-06 11:11:02', '2019-12-06 11:11:02'),
(2, 'Medium', 'Medium pompoms', 'grey.jpg', '2019-12-06 11:13:03', '2020-01-17 14:55:47'),
(3, 'Large', 'Custom hand made', 'orange.jpg', '2020-01-04 17:05:45', '2020-01-05 18:09:32'),
(38, 'Custom_made', 'Custom mede unique pompom to you gift', '1579274044special2.jpg', '2020-01-17 15:12:37', '2020-01-17 15:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `adress`, `phone`, `fax`, `email`, `created_at`, `updated_at`) VALUES
(2, 'The best pompom\'s store in the area', 'Yavne city', '+123456789123', '+321654987987', 'info@pompoms.com', '2020-01-14 15:01:29', '2020-01-17 14:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `subtotal` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `content`, `subtotal`, `created_at`, `updated_at`) VALUES
(2, 1, '{\"5\":{\"id\":5,\"name\":\"Blue\",\"price\":15,\"quantity\":1,\"attributes\":[],\"conditions\":[]},\"6\":{\"id\":6,\"name\":\"pink blue\",\"price\":15,\"quantity\":1,\"attributes\":[],\"conditions\":[]}}', '30', '2019-12-24 15:46:56', '2019-12-24 15:46:56'),
(7, 6, '{\"8\":{\"id\":8,\"name\":\"uniqorn\",\"price\":20,\"quantity\":1,\"attributes\":[],\"conditions\":[]},\"9\":{\"id\":9,\"name\":\"special\",\"price\":20,\"quantity\":2,\"attributes\":[],\"conditions\":[]},\"30\":{\"id\":30,\"name\":\"panda\",\"price\":20,\"quantity\":4,\"attributes\":[],\"conditions\":[]}}', '140', '2020-01-08 14:53:04', '2020-01-08 14:53:04'),
(8, 11, '{\"30\":{\"id\":30,\"name\":\"panda\",\"price\":20,\"quantity\":2,\"attributes\":[],\"conditions\":[]},\"5\":{\"id\":5,\"name\":\"Blue\",\"price\":15,\"quantity\":3,\"attributes\":[],\"conditions\":[]},\"8\":{\"id\":8,\"name\":\"uniqorn\",\"price\":20,\"quantity\":3,\"attributes\":[],\"conditions\":[]},\"27\":{\"id\":27,\"name\":\"Orange\",\"price\":15,\"quantity\":4,\"attributes\":[],\"conditions\":[]}}', '205', '2020-01-08 17:15:44', '2020-01-08 17:15:44'),
(9, 1, '{\"25\":{\"id\":25,\"name\":\"Yellow\",\"price\":10,\"quantity\":1,\"attributes\":[],\"conditions\":[]},\"2\":{\"id\":2,\"name\":\"Yellow\",\"price\":10,\"quantity\":2,\"attributes\":[],\"conditions\":[]}}', '30', '2020-01-11 14:56:49', '2020-01-11 14:56:49'),
(11, 12, '{\"25\":{\"id\":25,\"name\":\"Grey\",\"price\":10,\"quantity\":1,\"attributes\":[],\"conditions\":[]},\"6\":{\"id\":6,\"name\":\"Blue\",\"price\":15,\"quantity\":1,\"attributes\":[],\"conditions\":[]},\"27\":{\"id\":27,\"name\":\"Orange\",\"price\":15,\"quantity\":1,\"attributes\":[],\"conditions\":[]},\"1\":{\"id\":1,\"name\":\"Red\",\"price\":100,\"quantity\":3,\"attributes\":[],\"conditions\":[]}}', '340', '2020-01-17 18:09:00', '2020-01-17 18:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `title_main` varchar(50) NOT NULL,
  `text_main` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `image`, `title_main`, `text_main`, `created_at`, `updated_at`) VALUES
(1, 'About_Us', '1578754434ga2.jpg', 'More About Us', 'OPENING HOURS\r\n\r\nShop: Monday to Saturday 9.00am to 5.30pm, Sunday and Bank Holidays 10.00am to 4.00pm.\r\n\r\nOur shop is open every day except the first May Day Bank Holiday, Christmas Day, Boxing Day and New Year\'s Day.\r\n\r\nNormal Mail Order hours are Monday to Friday 9.00am to 5.30pm, Saturday 9.00am to 3.00pm, Closed on Sunday and Bank Holidays.\r\n\r\nOn the 24th and 31st of December we close at 4:00pm\r\n\r\nOur showrooms and shop are located in the Cumbrian Town of Penrith on the edge of the British Lake District, a popular North West tourist area. We are very close to the M6 motorway, the main route north to Scotland. Why not break your journey and have a browse round? We are only a couple of minutes from Junction 40. Find us on Google Maps', '2020-01-10 22:34:36', '2020-01-11 14:53:54'),
(2, 'Car Parking', '1578928523ga3.jpg', 'Car Parking', 'In addition to our car park situated next door to our shop, there is now 3 hours of free parking at the Penrith New Squares development.\r\n\r\n \r\n\r\nPenrith\'s new shopping centre, New Squares, has opened for business and a number of national retail brands are opening soon.\r\n\r\n \r\n\r\nThe car park, next to the Sainsbury\'s superstore is directly opposite our shop, and the 3 hour time frame should give you plenty of time to experience all we have to offer.', '2020-01-10 21:11:28', '2020-01-13 15:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `name`, `description`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Red', 'Pompons - a collection of pompons for those who care. You clearly understand what we are talking about.\r\n\r\nMaterials of artificial fur made of chemical fibers are not eaten by moths; there are also a number of other advantages:\r\n\r\n- light and airy\r\n\r\n- practical\r\n- low cost,\r\n- allergy is excluded.\r\n\r\nMiniature pompons are now in trend. On hats, slippers, on scarves, on keys or on a bag or sweatshirts - fantasize.', 'small.jpg', 100, '2019-12-06 17:56:16', '2020-01-13 15:14:53'),
(4, 2, 'Yellow', 'Pompons - a collection of pompons for those who care. You clearly understand what we are talking about.\r\n\r\nMaterials of artificial fur made of chemical fibers are not eaten by moths; there are also a number of other advantages:\r\n\r\n- light and airy\r\n- practical\r\n- low cost,\r\n- allergy is excluded.\r\n\r\nMiniature pompons are now in trend. On hats, slippers, on scarves, on keys or on a bag or sweatshirts - fantasize.', '1579273145orange.jpg', 15, '2019-12-06 18:05:51', '2020-01-17 15:03:48'),
(6, 2, 'Blue', 'Blue color ponpon', '1579273164blue.jpg', 15, '2019-12-06 18:06:50', '2020-01-17 15:03:34'),
(7, 3, 'panda', 'Pompons - a collection of pompons for those who care. You clearly understand what we are talking about.\r\n\r\nMaterials of artificial fur made of chemical fibers are not eaten by moths; there are also a number of other advantages:\r\n\r\n- light and airy\r\n- practical\r\n- low cost,\r\n- allergy is excluded.\r\n\r\nMiniature pompons are now in trend. On hats, slippers, on scarves, on keys or on a bag or sweatshirts - fantasize.', 'panda.jpg', 20, '2019-12-06 18:07:49', '2019-12-06 18:07:49'),
(8, 3, 'uniqorn', 'uniqorn color ponpon', 'special2.jpg', 20, '2019-12-06 18:07:49', '2019-12-06 18:07:49'),
(9, 3, 'special', 'special color ponpon', 'special1.jpg', 20, '2019-12-06 18:08:19', '2019-12-06 18:08:19'),
(25, 1, 'Grey', 'Grey\r\n- Diameter: 1.5 cm\r\n- Color: multi-colored\r\n- Material: Acrylic Yarn', '1579273225grey.jpg', 10, '2019-12-06 17:57:09', '2020-01-17 15:03:09'),
(27, 2, 'Orange', 'Pompons - a collection of pompons for those who care. You clearly understand what we are talking about.\r\n\r\nMaterials of artificial fur made of chemical fibers are not eaten by moths; there are also a number of other advantages:\r\n\r\n- light and airy\r\n- practical\r\n- low cost,\r\n- allergy is excluded.\r\n\r\nMiniature pompons are now in trend. On hats, slippers, on scarves, on keys or on a bag or sweatshirts - fantasize.', '1579273361orange2.jpg', 15, '2019-12-06 18:05:51', '2020-01-17 15:02:41'),
(33, 1, 'Red', 'Pompons - a collection of pompons for those who care. You clearly understand what we are talking about.\r\n\r\nMaterials of artificial fur made of chemical fibers are not eaten by moths; there are also a number of other advantages:\r\n\r\n- light and airy\r\n\r\n- practical\r\n- low cost,\r\n- allergy is excluded.\r\n\r\nMiniature pompons are now in trend. On hats, slippers, on scarves, on keys or on a bag or sweatshirts - fantasize.', 'small.jpg', 10, '2019-12-06 17:56:16', '2019-12-06 17:56:16'),
(53, 1, 'Red', 'Pompons - a collection of pompons for those who care. You clearly understand what we are talking about.\r\n\r\nMaterials of artificial fur made of chemical fibers are not eaten by moths; there are also a number of other advantages:\r\n\r\n- light and airy\r\n\r\n- practical\r\n- low cost,\r\n- allergy is excluded.\r\n\r\nMiniature pompons are now in trend. On hats, slippers, on scarves, on keys or on a bag or sweatshirts - fantasize.', 'small.jpg', 100, '2019-12-06 17:56:16', '2020-01-13 15:14:53'),
(54, 1, 'Grey', 'Grey\r\n- Diameter: 1.5 cm\r\n- Color: multi-colored\r\n- Material: Acrylic Yarn', '1579273225grey.jpg', 10, '2019-12-06 17:57:09', '2020-01-17 15:03:09'),
(55, 1, 'Red', 'Pompons - a collection of pompons for those who care. You clearly understand what we are talking about.\r\n\r\nMaterials of artificial fur made of chemical fibers are not eaten by moths; there are also a number of other advantages:\r\n\r\n- light and airy\r\n\r\n- practical\r\n- low cost,\r\n- allergy is excluded.\r\n\r\nMiniature pompons are now in trend. On hats, slippers, on scarves, on keys or on a bag or sweatshirts - fantasize.', 'small.jpg', 10, '2019-12-06 17:56:16', '2019-12-06 17:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$o5.Xy3O6FCEnLZQBxTpN9u8f.byJ4YZaryx9X650KAXJ2iG.BzgWq', 7, '2019-12-20 18:50:42', '2019-12-20 18:50:42'),
(6, 'mama', 'mama@gmail.com', '$2y$10$UDiy13uX9uInWuyHDmw5h.IqvjFa/mflhW.qu8/KHccEZcQMklwxu', 5, '2020-01-07 15:29:19', '2020-01-07 15:29:19'),
(12, 'Batel Shim', 'batelshimanov@gmail.com', '$2y$10$zBFifjEDy3G5DJOGHlhY8.gYoxKCe2wk/GQe2g0XKoV5YwRaFUsr.', 5, '2020-01-17 18:07:54', '2020-01-17 18:07:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
