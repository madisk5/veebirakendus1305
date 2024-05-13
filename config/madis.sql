-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2024 at 05:40 PM
-- Server version: 10.11.6-MariaDB-0+deb12u1
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proov`
--

-- --------------------------------------------------------

--
-- Table structure for table `madis`
--

CREATE TABLE `madis` (
  `id` int(11) NOT NULL,
  `pealkiri` varchar(255) NOT NULL,
  `tekst` text NOT NULL,
  `autor` varchar(100) NOT NULL,
  `aeg` datetime NOT NULL,
  `pildi_aadress` varchar(500) DEFAULT NULL,
  `minust` text DEFAULT NULL,
  `kontakt_email` varchar(255) DEFAULT NULL,
  `kontakt_telefon` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `madis`
--

INSERT INTO `madis` (`id`, `pealkiri`, `tekst`, `autor`, `aeg`, `pildi_aadress`, `minust`, `kontakt_email`, `kontakt_telefon`) VALUES
(1, 'Nerja vaated', ' JOTTTTTTTTLorem ipsum dolor sit amet consectetur adipisicing elit. Officia enim voluptatum distinctio animi illo sed veritatis est unde. Ut labore distinctio iure tenetur beatae id nobis praesentium natus necessitatibus laudantium?\r\n    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem, ex tempora suscipit est quam, quia harum, rerum totam facilis blanditiis ducimus incidunt sed excepturi magni voluptatem repellendus? Quo, repudiandae consectetur.\r\n    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus voluptas itaque, est, enim rem quaerat autem fuga error accusantium dolorum magni illo dicta ipsa vero, ipsam molestias recusandae asperiores! Quidem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non illum obcaecati aliquid sunt, ut quo quod quas amet, voluptatum quaerat officiis, ad perferendis culpa harum! Quidem maiores beatae perspiciatis. Suscipit?\r\n    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde recusandae aliquid iure! Ex illo tempora consequatur voluptas ab porro quaerat deserunt aliquam, corrupti fuga adipisci sunt cumque, cum, ipsum eius. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim eum excepturi dolore deserunt vitae expedita est, iste corporis mollitia magni doloremque quos! Dolore dicta incidunt corporis suscipit expedita ipsum non?\r\n', 'Madis K', '2024-05-01 09:04:42', 'https://www.quorumspain.com/wp-content/uploads/2018/04/spanishlearnbg.jpg', NULL, NULL, NULL),
(2, 'Nerja vanalinn11', 'ipsum dolor sit amet consectetur adipisicing elit. Officia enim voluptatum distinctio animi illo sed veritatis est unde. Ut labore distinctio iure tenetur beatae id nobis praesentium natus necessitatibus laudantium?\r\n    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem, ex tempora suscipit est quam, quia harum, rerum totam facilis blanditiis ducimus incidunt sed excepturi magni voluptatem repellendus? Quo, repudiandae consectetur.\r\n    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus voluptas itaque, est, enim rem quaerat autem fuga error accusantium dolorum magni illo dicta ipsa vero, ipsam molestias recusandae asperiores! Quidem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non illum obcaecati aliquid sunt, ut quo quod quas amet, voluptatum quaerat officiis, ad perferendis culpa harum! Quidem maiores beatae perspiciatis. Suscipit?\r\n    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde recusandae aliquid iure! Ex illo tempora consequatur voluptas ab porro quaerat deserunt aliquam, corrupti fuga adipisci sunt cumque, cum, ipsum eius. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim eum excepturi dolore deserunt vitae expedita est, iste corporis mollitia magni doloremque quos! Dolore dicta incidunt corporis suscipit expedita ipsum non?', 'Madis K', '2024-05-01 13:30:35', 'https://blog.fuertehoteles.com/wp-content/uploads/2018/09/nerja-vista-anochecer.jpg', NULL, NULL, NULL),
(5, 'Tere', 'Olen Madisdfhdfdfdfhd', 'Madis', '2024-05-01 20:53:01', 'https://www.yourviva.com/storage/app/media/en/AREA%20GUIDES/Nerja/Area-Guide-Nerja-Balcon-Europa_00.jpg', NULL, NULL, NULL),
(6, 'Terere', 'Hohohohohooh', 'Mad', '2024-05-01 20:55:35', 'https://www.yourviva.com/storage/app/media/en/AREA%20GUIDES/Nerja/Area-Guide-Nerja-Balcon-Europa_00.jpg', NULL, NULL, NULL),
(10, '', '', '', '2024-05-01 18:59:30', NULL, '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea quaerat aut rem ab aperiam debitis, soluta error sunt deserunt et. Accusantium, voluptates quasi! Facere laborum asperiores totam ut? Distinctio, eveniet!Lorem Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt cum magnam sunt mollitia illo dolorem recusandae quo et, consequatur magni voluptatum minus non voluptatibus quas atque unde iste voluptatem provident!\r\n', NULL, NULL),
(11, '', '', '', '2024-05-01 19:00:13', NULL, NULL, 'madis@madis.ee', '+372 5555599999'),
(13, 'Tere', 'Mina olen Mart ja Sina oled Mart', 'Mas', '2024-05-02 19:24:10', 'https://www.yourviva.com/storage/app/media/en/AREA%20GUIDES/Nerja/Area-Guide-Nerja-Balcon-Europa_00.jpg', NULL, NULL, NULL),
(14, 'JOOOOOOO', 'UUUUUUUUUUUU', 'MM', '2024-05-02 20:38:47', 'https://upload.wikimedia.org/wikipedia/en/thumb/9/9a/Flag_of_Spain.svg/1200px-Flag_of_Spain.svg.png', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `madis`
--
ALTER TABLE `madis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `madis`
--
ALTER TABLE `madis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
