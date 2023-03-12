-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2023 at 09:15 AM
-- Server version: 8.0.32-0ubuntu0.20.04.2
-- PHP Version: 7.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storzo_ship1`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_label_user`
--

CREATE TABLE `assign_label_user` (
  `id` int NOT NULL,
  `sender_id` int NOT NULL,
  `label_type` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `assign_label_user`
--

INSERT INTO `assign_label_user` (`id`, `sender_id`, `label_type`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-03-11 22:04:10', '2023-03-11 22:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `assign_logistic_sender`
--

CREATE TABLE `assign_logistic_sender` (
  `id` bigint NOT NULL,
  `sender_id` bigint NOT NULL,
  `logistic_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `assign_logistic_sender`
--

INSERT INTO `assign_logistic_sender` (`id`, `sender_id`, `logistic_id`) VALUES
(5, 1, 5),
(15, 1, 20),
(21, 3, 1),
(22, 3, 2),
(23, 3, 3),
(24, 3, 4),
(25, 3, 5),
(26, 3, 6),
(27, 3, 7),
(28, 3, 8),
(29, 3, 9),
(30, 3, 10),
(31, 3, 11),
(32, 3, 12),
(33, 3, 13),
(34, 3, 14),
(35, 3, 15),
(36, 3, 16),
(37, 3, 17),
(38, 3, 18),
(39, 3, 19),
(40, 3, 20),
(41, 3, 21),
(47, 5, 20),
(55, 5, 4),
(58, 9, 5),
(60, 9, 20),
(74, 11, 15),
(76, 11, 21),
(78, 3, 25),
(79, 1, 25),
(82, 3, 24),
(83, 3, 26),
(85, 3, 30),
(86, 14, 37),
(89, 8, 24),
(90, 5, 23),
(91, 9, 25),
(92, 10, 37),
(93, 11, 22),
(94, 15, 37),
(97, 16, 37),
(100, 17, 37),
(103, 18, 37),
(106, 19, 37),
(111, 20, 24),
(112, 20, 25),
(115, 21, 24),
(116, 21, 25),
(117, 21, 29),
(118, 21, 30),
(119, 10, 24),
(132, 25, 37),
(134, 26, 5),
(137, 21, 5),
(138, 21, 6),
(139, 23, 6),
(149, 28, 6),
(152, 29, 37),
(153, 29, 38),
(154, 29, 40),
(161, 31, 24),
(163, 31, 37),
(167, 32, 37),
(172, 33, 5),
(173, 33, 8),
(174, 33, 20),
(178, 35, 21),
(181, 35, 24),
(182, 10, 26),
(183, 36, 5),
(190, 38, 2),
(191, 38, 5),
(192, 38, 25),
(193, 38, 30),
(194, 39, 5),
(202, 44, 24),
(203, 45, 37),
(207, 47, 5),
(208, 47, 25),
(210, 48, 6),
(214, 50, 24),
(216, 50, 37),
(219, 6, 39),
(220, 10, 21),
(223, 47, 20),
(225, 56, 6),
(228, 58, 6),
(229, 62, 2),
(231, 62, 25),
(232, 64, 6),
(233, 64, 24),
(234, 64, 37),
(235, 64, 38),
(236, 27, 37),
(239, 65, 24),
(242, 74, 21),
(243, 73, 37),
(244, 73, 38),
(245, 75, 21),
(247, 77, 5),
(250, 77, 20),
(251, 10, 9),
(252, 10, 39),
(253, 50, 9),
(254, 50, 39),
(255, 82, 14),
(256, 82, 16),
(257, 82, 20),
(260, 83, 5),
(261, 83, 6),
(262, 83, 8),
(263, 83, 9),
(264, 83, 24),
(265, 83, 25),
(266, 83, 37),
(267, 83, 38),
(268, 83, 39),
(269, 89, 37),
(271, 22, 21),
(272, 90, 37),
(273, 90, 38),
(274, 90, 39),
(275, 95, 6),
(278, 75, 6),
(279, 43, 6),
(280, 43, 21),
(282, 98, 6),
(283, 98, 21),
(285, 74, 6),
(286, 103, 6),
(288, 105, 6),
(291, 101, 24),
(293, 108, 25),
(294, 106, 5),
(295, 106, 25),
(296, 77, 8),
(299, 30, 24),
(300, 30, 37),
(302, 23, 21),
(303, 95, 21),
(306, 116, 6),
(308, 65, 9),
(309, 105, 21),
(310, 121, 37),
(311, 121, 38),
(312, 121, 39),
(313, 120, 37),
(315, 120, 39),
(316, 122, 6),
(317, 122, 21),
(318, 122, 24),
(319, 31, 9),
(320, 103, 21),
(321, 123, 6),
(322, 123, 21),
(323, 7, 6),
(324, 116, 21),
(325, 113, 5),
(328, 133, 24),
(329, 131, 5),
(330, 131, 20),
(331, 131, 25),
(332, 137, 37),
(334, 137, 39),
(335, 58, 21),
(337, 141, 25),
(339, 142, 25),
(341, 148, 24),
(342, 113, 25),
(343, 152, 6),
(344, 152, 21),
(345, 151, 6),
(346, 151, 21),
(347, 153, 6),
(348, 153, 21),
(349, 154, 6),
(350, 154, 21),
(352, 156, 21),
(353, 26, 20),
(355, 113, 8),
(356, 160, 6),
(357, 160, 21),
(358, 152, 24),
(359, 116, 24),
(360, 162, 6),
(361, 162, 21),
(362, 89, 21),
(363, 182, 21),
(364, 182, 37),
(366, 182, 39),
(367, 10, 57),
(370, 186, 8),
(371, 186, 25),
(375, 188, 37),
(377, 188, 39),
(380, 193, 25),
(382, 148, 9),
(383, 194, 5),
(384, 194, 20),
(387, 196, 24),
(388, 204, 6),
(390, 193, 37),
(392, 205, 20),
(393, 205, 37),
(394, 205, 39),
(397, 210, 37),
(399, 210, 39),
(401, 198, 24),
(403, 232, 5),
(404, 232, 8),
(405, 232, 25),
(406, 233, 37),
(408, 233, 39),
(410, 1, 60),
(413, 234, 59),
(414, 234, 60),
(415, 234, 61),
(416, 234, 62),
(417, 33, 60),
(419, 231, 25),
(420, 235, 37),
(422, 235, 39),
(423, 10, 60),
(424, 10, 62),
(425, 231, 60),
(426, 193, 60),
(427, 182, 62),
(428, 19, 62),
(429, 205, 62),
(430, 45, 62),
(432, 244, 8),
(433, 244, 25),
(434, 243, 5),
(435, 242, 37),
(437, 242, 39),
(439, 13, 8),
(440, 13, 25),
(441, 248, 21),
(442, 248, 37),
(444, 248, 39),
(445, 248, 62),
(446, 250, 37),
(448, 250, 62),
(450, 253, 8),
(451, 253, 20),
(452, 255, 37),
(453, 255, 38),
(454, 255, 62),
(455, 257, 37),
(457, 257, 39),
(458, 252, 37),
(460, 252, 39),
(461, 77, 60),
(462, 267, 5),
(463, 267, 8),
(464, 267, 20),
(465, 267, 25),
(466, 268, 37),
(468, 268, 39),
(470, 270, 6),
(471, 270, 9),
(472, 270, 24),
(473, 270, 37),
(474, 270, 38),
(475, 270, 39),
(476, 37, 6),
(477, 37, 9),
(479, 267, 60),
(480, 234, 5),
(481, 234, 8),
(482, 234, 20),
(484, 288, 37),
(486, 288, 39),
(487, 288, 62),
(488, 289, 37),
(490, 289, 39),
(491, 289, 62),
(492, 279, 37),
(493, 279, 38),
(494, 279, 39),
(495, 279, 62),
(496, 234, 64),
(498, 253, 5),
(499, 244, 64),
(500, 15, 65),
(501, 25, 65),
(502, 120, 65),
(503, 268, 65),
(504, 148, 66),
(505, 210, 65),
(506, 50, 65),
(507, 50, 66),
(508, 10, 65),
(509, 10, 66),
(510, 10, 68),
(511, 18, 65),
(512, 141, 64),
(513, 205, 65),
(514, 248, 65),
(515, 137, 65),
(516, 193, 64),
(517, 193, 65),
(518, 31, 65),
(519, 31, 66),
(520, 235, 65),
(521, 108, 64),
(522, 198, 66),
(523, 8, 66),
(524, 16, 65),
(525, 35, 66),
(526, 133, 66),
(527, 20, 69),
(528, 101, 66),
(529, 30, 65),
(530, 30, 66),
(531, 89, 65),
(532, 182, 65),
(533, 257, 65),
(534, 188, 65),
(535, 32, 65),
(536, 250, 65),
(537, 231, 64),
(538, 142, 64),
(539, 17, 65),
(540, 19, 65),
(541, 186, 64),
(542, 242, 65),
(543, 62, 64),
(544, 65, 66),
(545, 45, 65),
(546, 233, 65),
(547, 13, 64),
(548, 288, 65),
(549, 252, 65),
(550, 303, 37),
(551, 303, 62),
(552, 303, 65),
(553, 45, 39),
(554, 303, 39),
(555, 309, 37),
(557, 309, 62),
(558, 311, 37),
(559, 311, 38),
(560, 311, 39),
(561, 313, 6),
(562, 313, 20),
(563, 313, 60),
(564, 315, 5),
(565, 315, 20),
(566, 315, 60),
(567, 196, 66),
(568, 318, 37),
(569, 318, 39),
(570, 318, 65),
(571, 309, 65),
(572, 27, 39),
(573, 27, 62),
(574, 27, 65),
(575, 338, 37),
(576, 338, 39),
(577, 338, 62),
(578, 338, 65),
(579, 353, 21),
(580, 353, 37),
(581, 353, 39),
(582, 353, 62),
(583, 353, 65),
(584, 289, 65),
(585, 359, 5),
(586, 360, 37),
(587, 360, 39),
(588, 360, 62),
(589, 360, 65),
(590, 361, 20),
(591, 361, 25),
(592, 361, 64),
(593, 363, 8),
(594, 363, 25),
(595, 363, 64),
(596, 364, 9),
(597, 364, 24),
(598, 364, 66),
(599, 365, 9),
(600, 365, 24),
(601, 365, 66),
(602, 371, 8),
(603, 371, 25),
(604, 371, 64);

-- --------------------------------------------------------

--
-- Table structure for table `billing_address`
--

CREATE TABLE `billing_address` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `address_1` text NOT NULL,
  `address_2` text NOT NULL,
  `pincode` varchar(191) NOT NULL,
  `state` varchar(191) NOT NULL,
  `city` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_address`
--

INSERT INTO `billing_address` (`id`, `user_id`, `address_1`, `address_2`, `pincode`, `state`, `city`, `created_at`) VALUES
(1, 362, '9466666666', 'ddsgs', '133001', 'Haryana', 'Ambala', '2023-03-11 21:26:40'),
(2, 1, '9466666666', 'ddsgs', '133001', 'Haryana', 'Ambala', '2023-03-11 21:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `cod_remittance_detail`
--

CREATE TABLE `cod_remittance_detail` (
  `cod_remittance_detail_id` bigint NOT NULL,
  `sender_id` bigint DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `cod_remittance_amount` decimal(10,2) DEFAULT NULL,
  `cod_remittance_note` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `couriers`
--

CREATE TABLE `couriers` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `document_master`
--

CREATE TABLE `document_master` (
  `id` int UNSIGNED NOT NULL,
  `document_name` varchar(25) DEFAULT NULL,
  `doc_type` enum('1','2','3','4','5') NOT NULL COMMENT '1-doc1,2-doc2,3-pikupproof,4-cancelledCheque,5-otherDocuments',
  `is_active` enum('0','1') DEFAULT NULL COMMENT '0-No,1-Yes'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `document_master`
--

INSERT INTO `document_master` (`id`, `document_name`, `doc_type`, `is_active`) VALUES
(1, 'Aadhar Card', '1', '1'),
(2, 'Pan Card', '2', '1'),
(3, 'Gst certificate', '3', '1'),
(4, 'Driving License', '3', '1'),
(5, 'Light bill', '3', '1'),
(6, 'Voter ID Card', '3', '1'),
(7, 'Cancelled Cheque', '4', '1'),
(8, 'OtherDocuments', '5', '1');

-- --------------------------------------------------------

--
-- Table structure for table `error_order_master`
--

CREATE TABLE `error_order_master` (
  `id` bigint NOT NULL,
  `user_id` bigint NOT NULL,
  `pickup_address_id` bigint NOT NULL,
  `order_product_detail_id` bigint NOT NULL,
  `logistic_id` int NOT NULL,
  `deliver_address_id` bigint NOT NULL,
  `order_no` varchar(25) NOT NULL,
  `customer_order_no` varchar(50) DEFAULT NULL,
  `order_type` enum('0','1') NOT NULL COMMENT '0-prepaid,1-cod',
  `sgst_amount` decimal(10,2) NOT NULL,
  `cgst_amount` decimal(10,2) DEFAULT NULL,
  `igst_amount` decimal(10,2) DEFAULT NULL,
  `total_shipping_amount` decimal(10,2) NOT NULL,
  `awb_number` varchar(25) DEFAULT NULL,
  `paid_amount` decimal(10,2) DEFAULT NULL,
  `remain_amount` decimal(10,2) DEFAULT NULL,
  `is_seller_info` enum('0','1') DEFAULT NULL COMMENT '0-no, 1-yes',
  `packing_slip_warehouse_name` varchar(25) DEFAULT NULL,
  `is_return_address_same_as_pickup` enum('0','1') DEFAULT NULL COMMENT '0-no, 1-yes',
  `return_address_id` bigint DEFAULT NULL,
  `is_reverse` enum('0','1') DEFAULT NULL COMMENT '0-no, 1-yes',
  `is_cancelled` enum('0','1','2') DEFAULT NULL COMMENT '0-no, 1-yes, 2-cancelled but remain in api',
  `is_pre_awb` enum('0','1') NOT NULL DEFAULT '0' COMMENT ' 0-simple order, 1-pre awb order',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `is_delete` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0-not_deleted,1-deleted',
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forward_order_master`
--

CREATE TABLE `forward_order_master` (
  `id` bigint NOT NULL,
  `user_id` bigint NOT NULL,
  `pickup_address_id` bigint NOT NULL,
  `order_product_detail_id` bigint NOT NULL,
  `logistic_id` int NOT NULL,
  `deliver_address_id` bigint NOT NULL COMMENT 'receiver address id\r\n',
  `order_no` varchar(25) NOT NULL,
  `customer_order_no` varchar(100) DEFAULT NULL,
  `order_type` enum('0','1') DEFAULT NULL COMMENT '0-prepaid, 1-cod',
  `sgst_amount` decimal(10,2) DEFAULT NULL,
  `cgst_amount` decimal(10,2) DEFAULT NULL,
  `igst_amount` decimal(10,2) DEFAULT NULL,
  `total_shipping_amount` decimal(10,2) NOT NULL,
  `awb_number` varchar(25) DEFAULT NULL,
  `paid_amount` decimal(10,2) DEFAULT NULL,
  `remain_amount` decimal(10,2) DEFAULT NULL,
  `is_seller_info` enum('0','1') DEFAULT NULL COMMENT '0-no, 1-yes',
  `packing_slip_warehouse_name` varchar(25) DEFAULT NULL,
  `is_return_address_same_as_pickup` enum('0','1') DEFAULT NULL COMMENT '0-no, 1-yes',
  `return_address_id` bigint DEFAULT NULL,
  `is_reverse` enum('0','1') DEFAULT '0' COMMENT '0-no, 1-yes',
  `is_cancelled` enum('0','1','2') DEFAULT '0' COMMENT '0-no, 1-yes, 2-cancelled but remain in api',
  `is_refund` enum('0','1') NOT NULL DEFAULT '0',
  `is_pre_awb` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0-simple order, 1-pre awb order ',
  `is_delete` enum('0','1','2') NOT NULL COMMENT '0-not_delete,1-delete, 2-delete from all order list',
  `tracking_id` varchar(35) DEFAULT NULL,
  `cod_remittance_detail_id` int DEFAULT NULL,
  `is_cod_remittance` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0-cod_remmitance,1-cod_remmited',
  `is_cod_remittance_close_datetime` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kyc_document_master`
--

CREATE TABLE `kyc_document_master` (
  `id` bigint NOT NULL,
  `kyc_id` bigint DEFAULT NULL,
  `doc_id` int DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kyc_document_master`
--

INSERT INTO `kyc_document_master` (`id`, `kyc_id`, `doc_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1678589801-66.jpg', '2023-03-11 21:26:41', '2023-03-11 21:26:41'),
(2, 1, 1, '1678589801-74.jpg', '2023-03-11 21:26:41', '2023-03-11 21:26:41'),
(3, 1, 2, '1678589802-19.jpg', '2023-03-11 21:26:42', '2023-03-11 21:26:42'),
(4, 1, 2, '1678589802-57.jpg', '2023-03-11 21:26:42', '2023-03-11 21:26:42'),
(5, 1, 3, '1678589802-71.jpg', '2023-03-11 21:26:42', '2023-03-11 21:26:42'),
(6, 1, 7, '1678589803-42.jpg', '2023-03-11 21:26:43', '2023-03-11 21:26:43'),
(7, 1, 8, '1678589803-24.jpg', '2023-03-11 21:26:43', '2023-03-11 21:26:43'),
(8, 2, 1, '1678590358-100.jpg', '2023-03-11 21:35:58', '2023-03-11 21:35:58'),
(9, 2, 1, '1678590358-31.jpg', '2023-03-11 21:35:58', '2023-03-11 21:35:58'),
(10, 2, 2, '1678590359-67.jpg', '2023-03-11 21:35:59', '2023-03-11 21:35:59'),
(11, 2, 2, '1678590359-92.jpg', '2023-03-11 21:35:59', '2023-03-11 21:35:59'),
(12, 2, 5, '1678590359-81.jpg', '2023-03-11 21:35:59', '2023-03-11 21:35:59'),
(13, 2, 7, '1678590359-91.jpg', '2023-03-11 21:35:59', '2023-03-11 21:35:59'),
(14, 2, 8, '1678590359-92.jpg', '2023-03-11 21:35:59', '2023-03-11 21:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `kyc_verification_master`
--

CREATE TABLE `kyc_verification_master` (
  `id` bigint NOT NULL,
  `sender_id` bigint NOT NULL,
  `billing_address_id` bigint NOT NULL,
  `profile_type` tinyint(1) NOT NULL,
  `company_type` tinyint(1) DEFAULT NULL,
  `company_name` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pan_no` varchar(20) NOT NULL,
  `gst_no` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kyc_verification_master`
--

INSERT INTO `kyc_verification_master` (`id`, `sender_id`, `billing_address_id`, `profile_type`, `company_type`, `company_name`, `pan_no`, `gst_no`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 362, 1, 0, NULL, NULL, 'BMUPM1555P', NULL, '2023-03-11 21:26:40', 362, '2023-03-11 21:26:40', 0),
(2, 1, 2, 1, 0, 'Company Name', 'BMUPM1555P', '12345', '2023-03-11 21:35:57', 1, '2023-03-11 21:35:57', 0);

-- --------------------------------------------------------

--
-- Table structure for table `logistic_master`
--

CREATE TABLE `logistic_master` (
  `id` int UNSIGNED NOT NULL,
  `logistic_name` varchar(35) DEFAULT NULL,
  `api_name` varchar(35) DEFAULT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1' COMMENT '0-inactive,1-active',
  `cod_price` decimal(10,2) NOT NULL,
  `cod_percentage` decimal(10,2) NOT NULL,
  `logo_image_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `logistic_master`
--

INSERT INTO `logistic_master` (`id`, `logistic_name`, `api_name`, `is_active`, `cod_price`, `cod_percentage`, `logo_image_name`, `created_at`, `updated_at`) VALUES
(1, 'Bluedart', 'Bluedart_Direct', '0', '50.00', '2.50', 'default.png', '2022-05-19 07:01:30', '2023-02-23 02:14:17'),
(2, 'Ecom', 'Ecom_Direct', '1', '50.00', '2.50', 'default.png', '2022-05-19 07:06:57', '2022-05-19 07:06:57'),
(3, 'Xpressbees', 'Xpressbees_Direct', '1', '50.00', '2.50', 'default.png', '2022-05-19 09:51:46', '2022-05-19 09:51:46'),
(4, 'Delhivery', 'Delhivery_Direct', '1', '50.00', '2.50', 'default.png', '2022-05-23 10:24:02', '2022-05-23 10:24:02'),
(5, 'Delhivery_500F', 'Delhivery_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-02 11:12:58', '2022-06-02 11:12:58'),
(6, 'Delhivery_1F', 'Delhivery_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-02 11:13:19', '2022-06-02 11:13:19'),
(7, 'Delhivery_2F', 'Delhivery_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-02 11:13:28', '2022-06-02 11:13:28'),
(8, 'Xpressbees_500F', 'Xpressbees_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-02 11:13:47', '2022-06-02 11:13:47'),
(9, 'Xpressbees_1F', 'Xpressbees_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-02 11:13:57', '2022-06-02 11:13:57'),
(10, 'Xpressbees_2F', 'Xpressbees_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-02 11:14:13', '2022-06-02 11:14:13'),
(11, 'Bluedart_500F', 'Bluedart_Direct', '0', '50.00', '2.50', 'default.png', '2022-06-02 11:14:28', '2022-09-16 09:31:06'),
(12, 'Bluedart_1F', 'Bluedart_Direct', '0', '50.00', '2.50', 'default.png', '2022-06-02 11:14:40', '2023-02-23 02:14:16'),
(13, 'Bluedart_2F', 'Bluedart_Direct', '0', '50.00', '2.50', 'default.png', '2022-06-02 11:14:51', '2023-02-23 02:14:15'),
(14, 'Delhivery_EXP', 'Delhivery_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-02 11:15:25', '2022-06-02 11:15:25'),
(15, 'Delhivery_Lite', 'Delhivery_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-02 11:15:38', '2022-06-02 11:15:38'),
(16, 'Xpressbees_Exp', 'Xpressbees_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-02 11:15:54', '2022-06-02 11:15:54'),
(17, 'Xpressbees_Lite', 'Xpressbees_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-02 11:16:04', '2022-06-02 11:16:04'),
(18, 'Bluedart_Exp', 'Bluedart_Direct', '0', '50.00', '2.50', 'default.png', '2022-06-02 11:16:15', '2022-09-16 09:31:10'),
(19, 'Bluedart_Lite', 'Bluedart_Direct', '0', '50.00', '2.50', 'default.png', '2022-06-02 11:16:28', '2022-09-16 09:31:16'),
(20, 'ECOM_Exp', 'Ecom_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-02 11:16:47', '2022-06-02 11:16:47'),
(21, 'Ecom_Lite', 'Ecom_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-02 11:16:58', '2022-06-02 11:16:58'),
(22, 'Smartr_lite', 'Smartrexpress_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-14 12:47:14', '2022-06-14 12:47:14'),
(23, 'Smartr_exp', 'Smartrexpress_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-14 12:47:50', '2022-06-14 12:47:50'),
(24, 'Smartr_1F', 'Smartrexpress_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-14 12:48:13', '2022-06-15 13:59:14'),
(25, 'Smartr_F500', 'Smartrexpress_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-14 12:48:45', '2022-06-14 12:48:45'),
(26, 'Smartr_2F', 'Smartrexpress_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-14 12:49:49', '2022-06-14 12:49:49'),
(27, 'Dtdc_air_lite', 'Dtdcair_Direct', '0', '50.00', '2.50', 'default.png', '2022-06-14 12:50:56', '2022-08-03 05:35:33'),
(28, 'Dtdc_air_exp', 'Dtdcair_Direct', '0', '50.00', '2.50', 'default.png', '2022-06-14 12:51:34', '2022-08-03 05:35:21'),
(29, 'Dtdc_air_1F', 'Dtdcair_Direct', '0', '50.00', '2.50', 'default.png', '2022-06-14 12:51:34', '2022-08-03 05:35:09'),
(30, 'Dtdc_air_F500', 'Dtdcair_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-14 12:51:34', '2022-12-16 06:37:35'),
(31, 'Dtdc_air_2F', 'Dtdcair_Direct', '0', '50.00', '2.50', 'default.png', '2022-06-14 12:51:34', '2022-08-03 05:35:14'),
(32, 'Dtdc_surface_lite', 'Dtdcsurface_Direct', '0', '50.00', '2.50', 'default.png', '2022-06-14 12:54:07', '2022-08-03 05:36:05'),
(33, 'Dtdc_surface_exp', 'Dtdcsurface_Direct', '0', '50.00', '2.50', 'default.png', '2022-06-14 12:54:07', '2022-08-03 05:35:51'),
(34, 'Dtdc_surface_1F', 'Dtdcsurface_Direct', '0', '50.00', '2.50', 'default.png', '2022-06-14 12:54:07', '2022-08-03 05:35:39'),
(35, 'Dtdc_surface_F500', 'Dtdcsurface_Direct', '0', '50.00', '2.50', 'default.png', '2022-06-14 12:54:07', '2022-08-03 05:35:58'),
(36, 'Dtdc_surface_2F', 'Dtdcsurface_Direct', '0', '50.00', '2.50', 'default.png', '2022-06-14 12:54:07', '2022-08-03 05:35:44'),
(37, 'Smartr_1.5F', 'Smartrexpress_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-17 10:47:23', '2022-06-17 10:47:23'),
(38, 'Delhivery_1.5F', 'Delhivery_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-20 08:25:21', '2022-06-20 08:25:21'),
(39, 'Xpressbees_1.5F', 'Xpressbees_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-20 08:29:12', '2022-06-20 08:29:12'),
(40, 'Dtdc_air_1.5F', 'Dtdcair_Direct', '0', '50.00', '2.50', 'default.png', '2022-07-04 10:01:09', '2022-08-03 05:35:03'),
(41, 'Ecom_2kg_Flat', 'Ecomhevy_Direct', '1', '50.00', '2.50', 'default.png', '2022-08-16 10:55:47', '2022-08-16 10:55:47'),
(42, 'Ecom_2.5kg_Flat', 'Ecomhevy_Direct', '1', '50.00', '2.50', 'default.png', '2022-08-16 10:55:47', '2022-08-16 10:55:47'),
(43, 'Ecom_3kg_Flat', 'Ecomhevy_Direct', '1', '50.00', '2.50', 'default.png', '2022-08-16 10:55:47', '2022-08-16 10:55:47'),
(44, 'Delhiveryexpress', 'Delhiveryexpress_Direct', '1', '50.00', '2.50', 'default.png', '2022-08-17 10:43:49', '2022-08-17 10:43:49'),
(45, 'Delhiveryexpress_1.5F', 'Delhiveryexpress_Direct', '1', '50.00', '2.50', 'default.png', '2022-08-17 10:43:49', '2022-08-17 10:43:49'),
(46, 'Delhiveryexpress_1F', 'Delhiveryexpress_Direct', '1', '50.00', '2.50', 'default.png', '2022-08-17 10:43:49', '2022-08-17 10:43:49'),
(47, 'Delhiveryexpress_2F', 'Delhiveryexpress_Direct', '1', '50.00', '2.50', 'default.png', '2022-08-17 10:43:49', '2022-08-17 10:43:49'),
(48, 'Delhiveryexpress_500F', 'Delhiveryexpress_Direct', '1', '50.00', '2.50', 'default.png', '2022-08-17 10:43:49', '2022-08-17 10:43:49'),
(49, 'Delhiveryexpress_EXP', 'Delhiveryexpress_Direct', '1', '50.00', '2.50', 'default.png', '2022-08-17 10:43:49', '2022-08-17 10:43:49'),
(50, 'Delhiveryexpress_Lite', 'Delhiveryexpress_Direct', '1', '50.00', '2.50', 'default.png', '2022-08-17 10:43:49', '2022-08-17 10:43:49'),
(51, 'Smartrlogi_lite', 'Smartrexpresshevy_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-14 12:47:14', '2022-06-14 12:47:14'),
(52, 'Smartrlogi_exp', 'Smartrexpresshevy_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-14 12:47:50', '2022-06-14 12:47:50'),
(53, 'Smartrlogi_1F', 'Smartrexpresshevy_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-14 12:48:13', '2022-06-15 13:59:14'),
(54, 'Smartrlogi_F500', 'Smartrexpresshevy_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-14 12:48:45', '2022-06-14 12:48:45'),
(55, 'Smartrlogi_2F', 'Smartrexpresshevy_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-14 12:49:49', '2022-06-14 12:49:49'),
(56, 'Smartrlogi_1.5F', 'Smartrexpresshevy_Direct', '1', '50.00', '2.50', 'default.png', '2022-06-17 10:47:23', '2022-06-17 10:47:23'),
(57, 'Smartr_5F', 'Smartrexpress_Direct', '1', '50.00', '2.50', 'default.png', '2022-11-03 06:20:17', '2022-11-03 06:20:17'),
(58, 'Delhivery_4F', 'Delhivery_Direct', '1', '50.00', '2.50', 'default.png', '2022-11-03 06:29:50', '2022-11-03 06:29:50'),
(59, 'AMAZON ATS', 'Amazon_Direct', '1', '50.00', '2.50', 'default.png', '2022-11-22 10:43:05', '2023-03-11 19:34:56'),
(60, 'Amazon_Flat_1kg', 'Amazon_Direct', '1', '50.00', '2.50', 'default.png', '2022-11-22 16:06:41', '2022-11-22 16:06:41'),
(61, 'Amazon_Flat_2kg', 'Amazon_Direct', '1', '50.00', '2.50', 'default.png', '2022-11-22 16:07:05', '2022-11-22 16:07:05'),
(62, 'Amazon_Flat_1.5kg', 'Amazon_Direct', '1', '50.00', '2.50', 'default.png', '2022-11-22 16:14:07', '2022-11-22 16:14:07'),
(63, 'DelhiveryG_', 'Delhiverylogi_Direct', '1', '50.00', '2.50', 'default.png', '2022-12-23 11:20:11', '2022-12-23 11:20:11'),
(64, 'DelhiveryG_500F', 'Delhiverylogi_Direct', '1', '50.00', '2.50', 'default.png', '2022-12-23 11:21:06', '2022-12-23 11:21:06'),
(65, 'DelhiveryG_1.5F', 'Delhiverylogi_Direct', '1', '50.00', '2.50', 'default.png', '2022-12-23 11:22:07', '2022-12-23 11:22:07'),
(66, 'DelhiveryG_1F', 'Delhiverylogi_Direct', '1', '50.00', '2.50', 'default.png', '2022-12-23 11:22:31', '2022-12-23 11:22:31'),
(67, 'DelhiveryG_2F', 'Delhiverylogi_Direct', '1', '50.00', '2.50', 'default.png', '2022-12-23 11:26:08', '2022-12-23 11:26:08'),
(68, 'DelhiveryG_4F', 'Delhiverylogi_Direct', '1', '50.00', '2.50', 'default.png', '2022-12-23 11:26:27', '2022-12-23 11:26:27'),
(69, 'DelhiveryG_Lite', 'Delhiverylogi_Direct', '1', '50.00', '2.50', 'default.png', '2022-12-23 11:26:42', '2022-12-23 11:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `logistic_priorities`
--

CREATE TABLE `logistic_priorities` (
  `id` int NOT NULL,
  `user_id` bigint DEFAULT NULL,
  `logistic_id` varchar(20) DEFAULT NULL,
  `priority` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logistic_priority`
--

CREATE TABLE `logistic_priority` (
  `id` int NOT NULL,
  `sender_id` bigint DEFAULT NULL,
  `logistic_id` varchar(20) DEFAULT NULL,
  `priority` int DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '0-inactive,1-active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `logistic_priority`
--

INSERT INTO `logistic_priority` (`id`, `sender_id`, `logistic_id`, `priority`, `status`, `created_at`) VALUES
(1, 362, '59', 1, '1', '2023-03-11 22:03:16'),
(2, 362, '4', 2, '1', '2023-03-11 22:03:25'),
(3, 362, '44', 3, '1', '2023-03-11 22:03:34'),
(4, 362, '63', 4, '1', '2023-03-11 22:03:44');

-- --------------------------------------------------------

--
-- Table structure for table `manage_price`
--

CREATE TABLE `manage_price` (
  `id` int NOT NULL,
  `logistic_id` varchar(50) DEFAULT NULL,
  `shipment_type` enum('1','2') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT '1' COMMENT '1-forward,2-reverse',
  `rule` varchar(50) DEFAULT NULL,
  `rule_index` int NOT NULL,
  `within_city` float DEFAULT NULL,
  `within_state` float DEFAULT NULL,
  `within_zone` float DEFAULT NULL,
  `metro` float DEFAULT NULL,
  `metro_2` float DEFAULT NULL,
  `rest_of_india` float DEFAULT NULL,
  `rest_of_india_2` float DEFAULT NULL,
  `special_zone` float DEFAULT NULL,
  `jammu_kashmir` float NOT NULL DEFAULT '0',
  `cod_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `cod_percentage` decimal(10,2) NOT NULL DEFAULT '0.00',
  `is_cod_charge_return` enum('1','2') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT '1' COMMENT '1-No,2-yes',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_price`
--

INSERT INTO `manage_price` (`id`, `logistic_id`, `shipment_type`, `rule`, `rule_index`, `within_city`, `within_state`, `within_zone`, `metro`, `metro_2`, `rest_of_india`, `rest_of_india_2`, `special_zone`, `jammu_kashmir`, `cod_price`, `cod_percentage`, `is_cod_charge_return`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', 1, 55, 55, 45, 65, 65, 75, 75, 80, 80, '0.00', '0.00', '2', '2022-05-19 07:04:26', '2023-01-28 10:48:03'),
(2, '1', '2', '1', 2, 55, 55, 45, 65, 65, 75, 75, 80, 80, '0.00', '0.00', '2', '2022-05-19 07:05:28', '2023-01-28 10:48:03'),
(5, '2', '1', '1', 5, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '2', '2022-05-19 07:07:33', '2023-01-28 10:48:03'),
(6, '2', '2', '1', 6, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '2', '2022-05-19 07:07:59', '2023-01-28 10:48:03'),
(7, '2', '1', '2', 7, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '2', '2022-05-19 07:08:30', '2023-01-28 10:48:03'),
(8, '2', '2', '2', 8, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '2', '2022-05-19 07:09:15', '2023-01-28 10:48:03'),
(9, '3', '1', '1', 9, 60, 60, 50, 65, 65, 70, 70, 80, 80, '0.00', '0.00', '2', '2022-05-19 09:54:08', '2023-01-28 10:48:03'),
(10, '3', '2', '1', 10, 60, 60, 50, 65, 65, 70, 70, 80, 80, '0.00', '0.00', '2', '2022-05-19 09:54:45', '2023-01-28 10:48:03'),
(11, '3', '1', '2', 11, 60, 60, 50, 65, 65, 70, 70, 80, 80, '0.00', '0.00', '2', '2022-05-19 09:55:26', '2023-01-28 10:48:03'),
(12, '3', '2', '2', 12, 60, 60, 50, 65, 65, 70, 70, 80, 80, '0.00', '0.00', '2', '2022-05-19 09:55:50', '2023-01-28 10:48:03'),
(13, '4', '1', '1', 13, 60, 60, 50, 65, 65, 70, 70, 80, 80, '0.00', '0.00', '2', '2022-05-23 10:25:06', '2023-01-28 10:48:03'),
(14, '4', '2', '1', 14, 60, 60, 50, 65, 65, 70, 70, 80, 80, '0.00', '0.00', '2', '2022-05-23 10:25:40', '2023-01-28 10:48:03'),
(15, '4', '1', '2', 15, 60, 60, 50, 65, 65, 70, 70, 80, 80, '0.00', '0.00', '2', '2022-05-23 10:26:04', '2023-01-28 10:48:03'),
(16, '4', '2', '2', 16, 60, 60, 50, 65, 65, 70, 70, 80, 80, '0.00', '0.00', '2', '2022-05-23 10:26:25', '2023-01-28 10:48:03'),
(17, '5', '1', '1', 101, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '1', '2022-06-02 11:19:23', '2023-01-28 10:48:13'),
(18, '5', '2', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-02 11:19:46', '2023-01-28 10:48:13'),
(19, '5', '1', '2', 103, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '1', '2022-06-02 11:20:08', '2023-01-28 10:48:13'),
(20, '5', '2', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-02 11:20:30', '2023-01-28 10:48:13'),
(21, '6', '1', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '1', '2022-06-02 11:21:17', '2023-01-28 10:48:13'),
(22, '6', '2', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-02 11:21:29', '2023-01-28 10:48:13'),
(23, '6', '1', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '1', '2022-06-02 11:23:45', '2023-01-28 10:48:13'),
(24, '6', '2', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-02 11:24:14', '2023-01-28 10:48:13'),
(25, '7', '1', '3', 109, 350, 350, 350, 350, 350, 350, 350, 350, 350, '0.00', '0.00', '1', '2022-06-02 12:57:42', '2023-01-28 10:48:13'),
(26, '7', '2', '3', 110, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-02 12:58:16', '2023-01-28 10:48:13'),
(27, '7', '1', '5', 111, 350, 350, 350, 350, 350, 350, 350, 350, 350, '0.00', '0.00', '1', '2022-06-02 12:59:31', '2023-01-28 10:48:13'),
(28, '7', '2', '4', 112, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-02 12:59:48', '2023-01-28 10:48:13'),
(29, '8', '1', '1', 113, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '1', '2022-06-02 13:00:34', '2023-01-28 10:48:13'),
(30, '8', '2', '1', 114, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-02 13:00:54', '2023-01-28 10:48:13'),
(31, '8', '1', '2', 115, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '1', '2022-06-02 13:09:34', '2023-01-28 10:48:13'),
(33, '8', '2', '2', 116, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-02 13:11:13', '2023-01-28 10:48:13'),
(34, '9', '1', '2', 117, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '1', '2022-06-02 13:11:43', '2023-01-28 10:48:13'),
(35, '9', '2', '2', 118, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-02 13:11:57', '2023-01-28 10:48:13'),
(42, '9', '1', '4', 119, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '1', '2022-06-02 13:18:04', '2023-01-28 10:48:13'),
(43, '9', '2', '4', 120, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-02 13:18:41', '2023-01-28 10:48:13'),
(44, '10', '1', '3', 121, 350, 350, 350, 350, 350, 350, 350, 350, 350, '0.00', '0.00', '1', '2022-06-02 13:19:16', '2023-01-28 10:48:13'),
(45, '10', '2', '3', 122, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-02 13:19:33', '2023-01-28 10:48:13'),
(46, '10', '1', '5', 123, 350, 350, 350, 350, 350, 350, 350, 350, 350, '0.00', '0.00', '1', '2022-06-02 13:19:51', '2023-01-28 10:48:13'),
(47, '10', '2', '5', 124, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-02 13:20:05', '2023-01-28 10:48:13'),
(48, '11', '1', '1', 125, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '1', '2022-06-02 13:21:29', '2023-01-28 10:48:13'),
(49, '11', '2', '1', 126, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-02 13:21:42', '2023-01-28 10:48:13'),
(50, '11', '1', '2', 127, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '1', '2022-06-02 13:22:09', '2023-01-28 10:48:13'),
(51, '11', '2', '2', 128, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-02 13:22:33', '2023-01-28 10:48:13'),
(52, '12', '1', '2', 129, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '1', '2022-06-02 13:23:02', '2023-01-28 10:48:13'),
(53, '12', '2', '2', 130, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-02 13:23:18', '2023-01-28 10:48:13'),
(54, '12', '1', '4', 131, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '1', '2022-06-02 13:23:38', '2023-01-28 10:48:13'),
(55, '12', '2', '4', 132, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-02 13:23:58', '2023-01-28 10:48:13'),
(56, '13', '1', '3', 133, 350, 350, 350, 350, 350, 350, 350, 350, 350, '0.00', '0.00', '1', '2022-06-02 13:24:18', '2023-01-28 10:48:13'),
(57, '13', '2', '3', 134, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-02 13:24:32', '2023-01-28 10:48:13'),
(58, '13', '1', '5', 135, 350, 350, 350, 350, 350, 350, 350, 350, 350, '0.00', '0.00', '1', '2022-06-02 13:24:52', '2023-01-28 10:48:13'),
(59, '13', '2', '5', 136, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-02 13:25:09', '2023-01-28 10:48:13'),
(60, '14', '1', '1', 137, 55, 55, 45, 65, 65, 75, 75, 80, 80, '0.00', '0.00', '2', '2022-06-02 13:32:04', '2023-01-28 10:48:03'),
(61, '14', '2', '1', 138, 55, 55, 45, 65, 65, 75, 75, 80, 80, '0.00', '0.00', '2', '2022-06-02 13:32:40', '2023-01-28 10:48:03'),
(62, '14', '1', '2', 139, 55, 55, 45, 65, 65, 75, 75, 80, 80, '0.00', '0.00', '2', '2022-06-02 13:33:25', '2023-01-28 10:48:03'),
(63, '14', '2', '2', 140, 55, 55, 45, 65, 65, 75, 75, 80, 80, '0.00', '0.00', '2', '2022-06-02 13:33:48', '2023-01-28 10:48:03'),
(68, '15', '1', '2', 141, 99, 99, 81, 117, 117, 135, 135, 144, 144, '0.00', '0.00', '2', '2022-06-02 13:39:28', '2023-01-28 10:48:03'),
(69, '15', '2', '2', 142, 99, 99, 81, 117, 117, 135, 135, 144, 144, '0.00', '0.00', '2', '2022-06-02 13:39:58', '2023-01-28 10:48:03'),
(70, '15', '1', '4', 143, 99, 99, 81, 117, 117, 135, 135, 144, 144, '0.00', '0.00', '2', '2022-06-02 13:40:43', '2023-01-28 10:48:03'),
(71, '15', '2', '4', 144, 99, 99, 81, 117, 117, 135, 135, 144, 144, '0.00', '0.00', '2', '2022-06-02 13:41:07', '2023-01-28 10:48:03'),
(72, '16', '1', '1', 145, 55, 55, 45, 65, 65, 75, 75, 80, 80, '0.00', '0.00', '2', '2022-06-02 13:42:36', '2023-01-28 10:48:03'),
(73, '16', '2', '1', 146, 55, 55, 45, 65, 65, 75, 75, 80, 80, '0.00', '0.00', '2', '2022-06-02 13:43:00', '2023-01-28 10:48:03'),
(74, '16', '1', '2', 147, 55, 55, 45, 65, 65, 75, 75, 80, 80, '0.00', '0.00', '2', '2022-06-02 13:43:21', '2023-01-28 10:48:03'),
(75, '16', '2', '2', 148, 55, 55, 45, 65, 65, 75, 75, 80, 80, '0.00', '0.00', '2', '2022-06-02 13:43:46', '2023-01-28 10:48:03'),
(76, '17', '1', '2', 149, 99, 99, 81, 117, 117, 135, 135, 144, 144, '0.00', '0.00', '2', '2022-06-02 13:44:18', '2023-01-28 10:48:03'),
(77, '17', '2', '2', 150, 99, 99, 81, 117, 117, 135, 135, 144, 144, '0.00', '0.00', '2', '2022-06-02 13:44:41', '2023-01-28 10:48:03'),
(78, '17', '1', '4', 151, 99, 99, 81, 117, 117, 135, 135, 144, 144, '0.00', '0.00', '2', '2022-06-02 13:45:07', '2023-01-28 10:48:03'),
(79, '17', '2', '4', 152, 99, 99, 81, 117, 117, 135, 135, 144, 144, '0.00', '0.00', '2', '2022-06-02 13:45:31', '2023-01-28 10:48:03'),
(80, '18', '1', '1', 153, 55, 55, 45, 65, 65, 75, 75, 80, 80, '0.00', '0.00', '2', '2022-06-02 13:46:18', '2023-01-28 10:48:03'),
(81, '18', '2', '1', 154, 55, 55, 45, 65, 65, 75, 75, 80, 80, '0.00', '0.00', '2', '2022-06-02 13:46:41', '2023-01-28 10:48:03'),
(82, '18', '1', '2', 155, 55, 55, 45, 65, 65, 75, 75, 80, 80, '0.00', '0.00', '2', '2022-06-02 13:47:01', '2023-01-28 10:48:03'),
(83, '18', '2', '2', 156, 55, 55, 45, 65, 65, 75, 75, 80, 80, '0.00', '0.00', '2', '2022-06-02 13:47:30', '2023-01-28 10:48:03'),
(84, '19', '1', '2', 157, 99, 99, 81, 117, 117, 135, 135, 144, 144, '0.00', '0.00', '2', '2022-06-02 13:47:55', '2023-01-28 10:48:03'),
(85, '19', '2', '2', 158, 99, 99, 81, 117, 117, 135, 135, 144, 144, '0.00', '0.00', '2', '2022-06-02 13:48:20', '2023-01-28 10:48:03'),
(86, '19', '1', '4', 159, 99, 99, 81, 117, 117, 135, 135, 144, 144, '0.00', '0.00', '2', '2022-06-02 13:48:45', '2023-01-28 10:48:03'),
(87, '19', '2', '4', 160, 99, 99, 81, 117, 117, 135, 135, 144, 144, '0.00', '0.00', '2', '2022-06-02 13:49:04', '2023-01-28 10:48:03'),
(88, '20', '1', '1', 161, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '2', '2022-06-02 13:49:42', '2023-01-28 10:48:03'),
(89, '20', '2', '1', 162, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '2', '2022-06-02 13:50:01', '2023-01-28 10:48:03'),
(90, '20', '1', '2', 163, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '2', '2022-06-02 13:50:27', '2023-01-28 10:48:03'),
(91, '20', '2', '2', 164, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '2', '2022-06-02 13:50:48', '2023-01-28 10:48:03'),
(92, '21', '1', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '0.00', '0.00', '2', '2022-06-02 13:51:28', '2023-01-28 10:48:03'),
(93, '21', '2', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '0.00', '0.00', '2', '2022-06-02 13:51:55', '2023-01-28 10:48:03'),
(94, '21', '1', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '0.00', '0.00', '2', '2022-06-02 13:52:35', '2023-01-28 10:48:03'),
(95, '21', '2', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '0.00', '0.00', '2', '2022-06-02 13:53:04', '2023-01-28 10:48:03'),
(98, '25', '1', '1', 168, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '1', '2022-06-15 13:49:33', '2023-01-28 10:48:13'),
(99, '25', '2', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-15 13:49:58', '2023-01-28 10:48:13'),
(100, '25', '1', '2', 170, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '1', '2022-06-15 13:57:37', '2023-01-28 10:48:13'),
(101, '25', '2', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-15 13:57:54', '2023-01-28 10:48:13'),
(102, '24', '1', '2', 172, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '1', '2022-06-15 14:00:11', '2023-01-28 10:48:13'),
(103, '24', '2', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-15 14:00:41', '2023-01-28 10:48:13'),
(104, '24', '1', '4', 174, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '1', '2022-06-15 14:01:18', '2023-01-28 10:48:13'),
(105, '24', '2', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-15 14:01:38', '2023-01-28 10:48:13'),
(106, '26', '1', '3', 176, 300, 300, 300, 300, 300, 300, 300, 300, 300, '0.00', '0.00', '1', '2022-06-15 14:02:15', '2023-01-28 10:48:13'),
(107, '26', '2', '3', 177, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-15 14:02:34', '2023-01-28 10:48:13'),
(108, '26', '1', '5', 178, 300, 300, 300, 300, 300, 300, 300, 300, 300, '0.00', '0.00', '1', '2022-06-15 14:03:00', '2023-01-28 10:48:13'),
(109, '26', '2', '5', 179, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-15 14:03:24', '2023-01-28 10:48:13'),
(110, '30', '1', '1', 180, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '1', '2022-06-15 14:09:04', '2023-01-28 10:48:13'),
(111, '30', '2', '1', 181, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-15 14:09:21', '2023-01-28 10:48:13'),
(112, '30', '1', '2', 182, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '1', '2022-06-15 14:12:05', '2023-01-28 10:48:13'),
(113, '30', '2', '2', 183, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-15 14:12:33', '2023-01-28 10:48:13'),
(114, '29', '1', '2', 184, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '1', '2022-06-15 16:17:01', '2023-01-28 10:48:13'),
(115, '29', '2', '2', 185, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-15 16:17:26', '2023-01-28 10:48:13'),
(116, '29', '1', '4', 186, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '1', '2022-06-15 16:18:27', '2023-01-28 10:48:13'),
(117, '29', '2', '4', 187, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-15 16:18:52', '2023-01-28 10:48:13'),
(118, '31', '1', '3', 188, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '1', '2022-06-15 16:19:22', '2023-01-28 10:48:13'),
(119, '31', '2', '3', 189, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-15 16:19:49', '2023-01-28 10:48:13'),
(120, '31', '1', '5', 190, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '1', '2022-06-15 16:20:18', '2023-01-28 10:48:13'),
(121, '31', '2', '5', 191, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-15 16:20:41', '2023-01-28 10:48:13'),
(122, '35', '1', '1', 192, 95, 95, 95, 95, 95, 95, 95, 95, 95, '0.00', '0.00', '1', '2022-06-15 16:21:21', '2023-01-28 10:48:13'),
(123, '35', '2', '1', 193, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-15 16:21:58', '2023-01-28 10:48:13'),
(124, '35', '1', '2', 194, 95, 95, 95, 95, 95, 95, 95, 95, 95, '0.00', '0.00', '1', '2022-06-15 16:22:50', '2023-01-28 10:48:13'),
(125, '35', '2', '2', 195, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-15 16:23:19', '2023-01-28 10:48:13'),
(126, '34', '1', '2', 196, 135, 135, 135, 135, 135, 135, 135, 135, 135, '0.00', '0.00', '1', '2022-06-15 16:24:23', '2023-01-28 10:48:13'),
(127, '34', '2', '2', 197, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-15 16:24:48', '2023-01-28 10:48:13'),
(128, '34', '1', '4', 198, 135, 135, 135, 135, 135, 135, 135, 135, 135, '0.00', '0.00', '1', '2022-06-15 16:25:09', '2023-01-28 10:48:13'),
(129, '34', '2', '4', 199, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-15 16:25:26', '2023-01-28 10:48:13'),
(130, '36', '1', '3', 200, 180, 180, 180, 180, 180, 180, 180, 180, 180, '0.00', '0.00', '1', '2022-06-15 16:26:06', '2023-01-28 10:48:13'),
(131, '36', '2', '3', 201, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-15 16:26:28', '2023-01-28 10:48:13'),
(132, '36', '1', '5', 202, 180, 180, 180, 180, 180, 180, 180, 180, 180, '0.00', '0.00', '1', '2022-06-15 16:26:54', '2023-01-28 10:48:13'),
(133, '36', '2', '5', 203, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-15 16:27:10', '2023-01-28 10:48:13'),
(134, '23', '1', '1', 204, 48, 48, 45, 60, 60, 63, 63, 70, 70, '0.00', '0.00', '2', '2022-06-15 16:28:33', '2023-01-28 10:48:03'),
(135, '23', '2', '1', 205, 48, 48, 45, 60, 60, 63, 63, 70, 70, '0.00', '0.00', '2', '2022-06-15 16:30:35', '2023-01-28 10:48:03'),
(136, '23', '1', '2', 206, 48, 48, 45, 60, 60, 63, 63, 70, 70, '0.00', '0.00', '2', '2022-06-15 16:31:42', '2023-01-28 10:48:03'),
(137, '23', '2', '2', 207, 48, 48, 45, 60, 60, 63, 63, 70, 70, '0.00', '0.00', '2', '2022-06-15 16:32:09', '2023-01-28 10:48:03'),
(138, '22', '1', '2', 208, 95, 95, 92, 120, 120, 125, 125, 135, 135, '0.00', '0.00', '2', '2022-06-15 16:35:27', '2023-01-28 10:48:03'),
(139, '22', '2', '2', 209, 95, 95, 92, 120, 120, 125, 125, 135, 135, '0.00', '0.00', '2', '2022-06-15 16:41:14', '2023-01-28 10:48:03'),
(140, '22', '1', '4', 210, 95, 95, 92, 120, 120, 125, 125, 135, 135, '0.00', '0.00', '2', '2022-06-15 16:44:48', '2023-01-28 10:48:03'),
(141, '22', '2', '4', 211, 95, 95, 92, 120, 120, 125, 125, 135, 135, '0.00', '0.00', '2', '2022-06-15 16:45:53', '2023-01-28 10:48:03'),
(142, '28', '1', '1', 212, 39, 39, 37, 58, 58, 61, 61, 68, 68, '0.00', '0.00', '2', '2022-06-15 16:47:32', '2023-01-28 10:48:03'),
(143, '28', '2', '1', 213, 39, 39, 37, 58, 58, 61, 61, 68, 68, '0.00', '0.00', '2', '2022-06-15 16:48:05', '2023-01-28 10:48:03'),
(144, '28', '1', '2', 214, 39, 39, 37, 58, 58, 61, 61, 68, 68, '0.00', '0.00', '2', '2022-06-15 16:48:42', '2023-01-28 10:48:03'),
(145, '28', '2', '2', 215, 39, 39, 37, 58, 58, 61, 61, 68, 68, '0.00', '0.00', '2', '2022-06-15 16:49:26', '2023-01-28 10:48:03'),
(146, '27', '1', '2', 216, 69, 69, 65, 102, 102, 107, 107, 120, 120, '0.00', '0.00', '2', '2022-06-15 16:51:04', '2023-01-28 10:48:03'),
(147, '27', '2', '2', 217, 69, 69, 65, 102, 102, 107, 107, 120, 120, '0.00', '0.00', '2', '2022-06-15 16:51:31', '2023-01-28 10:48:03'),
(148, '27', '1', '4', 218, 69, 69, 65, 102, 102, 107, 107, 120, 120, '0.00', '0.00', '2', '2022-06-15 16:52:01', '2023-01-28 10:48:03'),
(149, '27', '2', '4', 219, 69, 69, 65, 102, 102, 107, 107, 120, 120, '0.00', '0.00', '2', '2022-06-15 16:52:26', '2023-01-28 10:48:03'),
(150, '33', '1', '1', 220, 39, 39, 37, 44, 44, 47, 47, 69, 69, '0.00', '0.00', '2', '2022-06-15 16:53:27', '2023-01-28 10:48:03'),
(151, '33', '2', '1', 221, 39, 39, 37, 44, 44, 47, 47, 69, 69, '0.00', '0.00', '2', '2022-06-15 16:54:09', '2023-01-28 10:48:03'),
(152, '33', '1', '2', 222, 39, 39, 37, 44, 44, 47, 47, 69, 69, '0.00', '0.00', '2', '2022-06-15 16:54:37', '2023-01-28 10:48:03'),
(153, '33', '2', '2', 223, 39, 39, 37, 44, 44, 47, 47, 69, 69, '0.00', '0.00', '2', '2022-06-15 16:55:05', '2023-01-28 10:48:03'),
(154, '32', '1', '2', 224, 69, 69, 65, 77, 77, 83, 83, 121, 121, '0.00', '0.00', '2', '2022-06-15 16:55:46', '2023-01-28 10:48:03'),
(155, '32', '2', '2', 225, 69, 69, 65, 77, 77, 83, 83, 121, 121, '0.00', '0.00', '2', '2022-06-15 16:56:19', '2023-01-28 10:48:03'),
(156, '32', '1', '4', 226, 69, 69, 65, 77, 77, 83, 83, 121, 121, '0.00', '0.00', '2', '2022-06-15 16:56:41', '2023-01-28 10:48:03'),
(157, '32', '2', '4', 227, 69, 69, 65, 77, 77, 83, 83, 121, 121, '0.00', '0.00', '2', '2022-06-15 16:57:08', '2023-01-28 10:48:03'),
(158, '37', '1', '6', 228, 250, 250, 250, 250, 250, 250, 250, 250, 250, '0.00', '0.00', '1', '2022-06-17 10:48:01', '2023-01-28 10:48:13'),
(159, '37', '2', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-17 10:48:36', '2023-01-28 10:48:13'),
(160, '38', '1', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '1', '2022-06-20 08:33:59', '2023-01-28 10:48:13'),
(161, '38', '2', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-20 08:34:18', '2023-01-28 10:48:13'),
(162, '39', '1', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '1', '2022-06-20 08:34:55', '2023-01-28 10:48:13'),
(163, '39', '2', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-06-20 08:35:28', '2023-01-28 10:48:13'),
(164, '40', '1', '6', 234, 180, 180, 180, 180, 180, 180, 180, 180, 180, '0.00', '0.00', '1', '2022-07-04 10:01:54', '2023-01-28 10:48:13'),
(165, '40', '2', '6', 235, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-07-04 10:02:26', '2023-01-28 10:48:13'),
(166, '57', '1', '7', 236, 400, 400, 400, 400, 400, 400, 400, 400, 400, '0.00', '0.00', '1', '2022-11-03 06:21:44', '2023-01-28 10:48:13'),
(167, '57', '2', '1', 237, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-11-03 06:22:12', '2023-01-28 10:48:13'),
(168, '58', '1', '7', 238, 600, 600, 600, 600, 600, 600, 600, 600, 600, '0.00', '0.00', '1', '2022-11-03 06:30:30', '2023-01-28 10:48:13'),
(169, '58', '2', '7', 239, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-11-03 06:31:25', '2023-01-28 10:48:13'),
(170, '60', '1', '2', 401, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '1', '2022-11-22 16:08:49', '2023-01-28 10:48:13'),
(171, '60', '2', '2', 402, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-11-22 16:09:13', '2023-01-28 10:48:13'),
(172, '61', '1', '3', 403, 350, 350, 350, 350, 350, 350, 350, 350, 350, '0.00', '0.00', '1', '2022-11-22 16:10:20', '2023-01-28 10:48:13'),
(173, '61', '2', '3', 404, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-11-22 16:10:33', '2023-01-28 10:48:13'),
(174, '59', '1', '2', 405, 80, 100, 100, 115, 115, 130, 130, 145, 145, '0.00', '0.00', '2', '2022-11-22 16:11:36', '2023-01-28 10:48:03'),
(175, '59', '2', '2', 406, 80, 100, 100, 115, 115, 130, 130, 145, 145, '0.00', '0.00', '2', '2022-11-22 16:12:13', '2023-01-28 10:48:03'),
(176, '59', '1', '4', 407, 80, 100, 100, 115, 115, 130, 130, 145, 145, '0.00', '0.00', '2', '2022-11-22 16:12:56', '2023-01-28 10:48:03'),
(177, '59', '2', '4', 408, 80, 100, 100, 115, 115, 130, 130, 145, 145, '0.00', '0.00', '2', '2022-11-22 16:13:31', '2023-01-28 10:48:03'),
(178, '62', '1', '6', 409, 300, 300, 300, 300, 300, 300, 300, 300, 300, '0.00', '0.00', '1', '2022-11-22 16:14:44', '2023-01-28 10:48:13'),
(179, '62', '2', '6', 410, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-11-22 16:15:09', '2023-01-28 10:48:13'),
(180, '64', '1', '1', 411, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '1', '2022-12-24 05:37:56', '2023-01-28 10:48:13'),
(181, '64', '2', '1', 412, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-12-24 05:38:14', '2023-01-28 10:48:13'),
(182, '64', '1', '2', 413, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '1', '2022-12-27 07:53:52', '2023-01-28 10:48:13'),
(183, '64', '2', '2', 414, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-12-27 07:54:21', '2023-01-28 10:48:13'),
(184, '66', '1', '2', 415, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '1', '2022-12-27 07:54:55', '2023-01-28 10:48:13'),
(185, '66', '2', '2', 416, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-12-27 07:55:27', '2023-01-28 10:48:13'),
(186, '66', '1', '4', 417, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '1', '2022-12-27 07:56:01', '2023-01-28 10:48:13'),
(187, '66', '2', '4', 418, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-12-27 07:56:22', '2023-01-28 10:48:13'),
(188, '65', '1', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '1', '2022-12-27 07:57:13', '2023-01-28 10:48:13'),
(189, '65', '2', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-12-27 07:57:35', '2023-01-28 10:48:13'),
(190, '67', '1', '3', 421, 350, 350, 350, 350, 350, 350, 350, 350, 350, '0.00', '0.00', '1', '2022-12-27 07:58:03', '2023-01-28 10:48:13'),
(191, '67', '2', '3', 422, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-12-27 07:59:18', '2023-01-28 10:48:13'),
(192, '67', '1', '5', 423, 350, 350, 350, 350, 350, 350, 350, 350, 350, '0.00', '0.00', '1', '2022-12-27 07:59:55', '2023-01-28 10:48:13'),
(193, '67', '2', '5', 424, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '1', '2022-12-27 08:00:14', '2023-01-28 10:48:13');

-- --------------------------------------------------------

--
-- Table structure for table `metrocity`
--

CREATE TABLE `metrocity` (
  `id` int NOT NULL,
  `name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `is_active` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '2' COMMENT '1- Inactive, 2- Active',
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `metrocity`
--

INSERT INTO `metrocity` (`id`, `name`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Ambala', '2', 362, NULL, '2023-03-11 21:47:25', '2023-03-11 21:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ndr_comment_detail`
--

CREATE TABLE `ndr_comment_detail` (
  `ndr_comment_detail_id` bigint NOT NULL,
  `order_id` varchar(150) NOT NULL,
  `forder_id` int NOT NULL,
  `provider_comment` varchar(255) DEFAULT NULL,
  `client_comment` varchar(255) DEFAULT NULL,
  `storzoship_comment` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `client_update_datetime` datetime DEFAULT CURRENT_TIMESTAMP,
  `storzoship_update_datetime` datetime DEFAULT CURRENT_TIMESTAMP,
  `final_status` varchar(255) DEFAULT NULL,
  `created_by_user` int DEFAULT NULL,
  `created_by_sender` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `next_cod_remittance_list`
--

CREATE TABLE `next_cod_remittance_list` (
  `id` bigint NOT NULL,
  `sender_id` bigint DEFAULT NULL,
  `order_count` varchar(150) DEFAULT NULL,
  `cod_remittance_amount` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_airwaybill_detail`
--

CREATE TABLE `order_airwaybill_detail` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `airwaybill_no` varchar(25) NOT NULL,
  `ecart_request_id` varchar(150) DEFAULT NULL,
  `airwaybill_barcode_img` varchar(50) NOT NULL,
  `order_status_id` int NOT NULL,
  `delivery_date` date DEFAULT NULL,
  `order_type` enum('0','1') NOT NULL COMMENT '0-forward, 1-reverse',
  `ecom_rto_reference_number` varchar(250) DEFAULT NULL,
  `smartr_rto_airwaybill_number` varchar(45) DEFAULT NULL,
  `smartrhevy_rto_airwaybill_number` varchar(45) DEFAULT NULL,
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tracking_flag` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '0-not track, 1-track, 2-details not found from api',
  `pending_order_status` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_error_log`
--

CREATE TABLE `order_error_log` (
  `id` bigint NOT NULL,
  `order_Error_id` bigint NOT NULL,
  `error` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_product_detail`
--

CREATE TABLE `order_product_detail` (
  `id` bigint NOT NULL,
  `cod_amount` decimal(10,2) DEFAULT '0.00' COMMENT 'collecteble_amount',
  `cod_charge` decimal(10,2) NOT NULL DEFAULT '0.00',
  `length` decimal(10,2) DEFAULT '0.00',
  `width` decimal(10,2) DEFAULT '0.00',
  `height` decimal(10,2) DEFAULT '0.00',
  `volumetric_weight` decimal(10,2) DEFAULT '0.00',
  `physical_weight` decimal(10,2) DEFAULT '0.00',
  `product_value` decimal(10,2) DEFAULT '0.00',
  `product_name` varchar(150) DEFAULT NULL,
  `product_quantity` varchar(10) DEFAULT NULL,
  `product_sku` varchar(50) DEFAULT NULL,
  `package_count` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `order_status_id` int NOT NULL,
  `status_name` varchar(100) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_tracking_detail`
--

CREATE TABLE `order_tracking_detail` (
  `id` bigint NOT NULL,
  `order_id` int NOT NULL,
  `scan_date_time` datetime NOT NULL,
  `scan` varchar(50) NOT NULL,
  `order_status_id` int DEFAULT NULL,
  `location` varchar(150) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pincode_detail`
--

CREATE TABLE `pincode_detail` (
  `id` bigint NOT NULL,
  `pincode_id` int NOT NULL,
  `logistic_id` int NOT NULL,
  `zone_mapping` varchar(25) DEFAULT NULL,
  `area_code` varchar(25) DEFAULT NULL,
  `zone_name` varchar(25) DEFAULT NULL,
  `is_cod` enum('0','1') DEFAULT NULL COMMENT '0-not available,1-available',
  `is_prepaid` enum('0','1') DEFAULT NULL COMMENT '0-not available,1-available',
  `is_pickup` enum('0','1') DEFAULT NULL COMMENT '0-not available,1-available',
  `is_reverse_pickup` enum('0','1') DEFAULT NULL COMMENT '0-not available,1-available',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pincode_master`
--

CREATE TABLE `pincode_master` (
  `id` int NOT NULL,
  `pincode` int DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receiver_address`
--

CREATE TABLE `receiver_address` (
  `id` bigint NOT NULL,
  `sender_id` bigint NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `address_1` varchar(100) DEFAULT NULL,
  `address_2` varchar(100) DEFAULT NULL,
  `state` varchar(25) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `pincode` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rule_master`
--

CREATE TABLE `rule_master` (
  `id` int NOT NULL,
  `name` varchar(55) NOT NULL,
  `from_kg` float NOT NULL,
  `to_kg` float NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1' COMMENT '0-inactive,1-active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rule_master`
--

INSERT INTO `rule_master` (`id`, `name`, `from_kg`, `to_kg`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '0.5', 0, 0.5, '1', NULL, '2023-02-08 03:08:44'),
(2, '1kg', 0.51, 1, '1', NULL, NULL),
(3, '2kg', 0, 2, '1', NULL, NULL),
(4, 'more Than 1	', 1.01, 2, '1', NULL, NULL),
(5, 'morethan2', 2.0001, 3, '1', NULL, NULL),
(6, '1.5kg', 1.01, 1.5, '1', NULL, NULL),
(7, 'More than 3', 3.0001, 5, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sender_address_master`
--

CREATE TABLE `sender_address_master` (
  `id` int NOT NULL,
  `sender_id` int NOT NULL,
  `direct_delhivery_address_availblity` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0-not create in api, 1-create in api',
  `direct_delhiveryexpress_address_availblity` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0-not create in api, 1-create in api',
  `direct_delhiverylogi_address_availblity` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0-not create in api, 1-create in api',
  `custom_api_sender_pickup_address_id` varchar(150) DEFAULT NULL,
  `warehouse_name` varchar(191) NOT NULL,
  `contact_person_name` varchar(191) DEFAULT NULL,
  `contact_no` varchar(191) NOT NULL,
  `contact_email` varchar(191) NOT NULL,
  `website` varchar(191) NOT NULL,
  `address_line_1` text NOT NULL,
  `address_line_2` text NOT NULL,
  `pincode` int NOT NULL,
  `state` varchar(191) NOT NULL,
  `city` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sender_address_master`
--

INSERT INTO `sender_address_master` (`id`, `sender_id`, `direct_delhivery_address_availblity`, `direct_delhiveryexpress_address_availblity`, `direct_delhiverylogi_address_availblity`, `custom_api_sender_pickup_address_id`, `warehouse_name`, `contact_person_name`, `contact_no`, `contact_email`, `website`, `address_line_1`, `address_line_2`, `pincode`, `state`, `city`, `created_at`) VALUES
(1, 1, '0', '0', '0', NULL, 'Testing', 'Tarun', '8168295841', 'testing@gmail.com', 'https://cl.storzoship.com/', 'Address Line 1', 'Address Line 2', 133001, 'Haryana', 'Ambala', '2023-03-11 21:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `sender_manage_price`
--

CREATE TABLE `sender_manage_price` (
  `id` int NOT NULL,
  `logistic_id` int DEFAULT NULL,
  `sender_id` bigint DEFAULT NULL,
  `manage_price_id` int DEFAULT NULL,
  `shipment_type` enum('0','1') DEFAULT NULL COMMENT '0-forward,1-reverse',
  `rule` varchar(50) DEFAULT NULL,
  `rule_index` int NOT NULL,
  `within_city` float DEFAULT NULL,
  `within_state` float DEFAULT NULL,
  `within_zone` float DEFAULT NULL,
  `metro` float DEFAULT NULL,
  `metro_2` float DEFAULT NULL,
  `rest_of_india` float DEFAULT NULL,
  `rest_of_india_2` float DEFAULT NULL,
  `special_zone` float DEFAULT NULL,
  `jammu_kashmir` float NOT NULL DEFAULT '0',
  `cod_price` decimal(10,2) NOT NULL,
  `cod_percentage` decimal(10,2) NOT NULL,
  `is_cod_charge_return` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0-No,1-yes',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sender_manage_price`
--

INSERT INTO `sender_manage_price` (`id`, `logistic_id`, `sender_id`, `manage_price_id`, `shipment_type`, `rule`, `rule_index`, `within_city`, `within_state`, `within_zone`, `metro`, `metro_2`, `rest_of_india`, `rest_of_india_2`, `special_zone`, `jammu_kashmir`, `cod_price`, `cod_percentage`, `is_cod_charge_return`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '0', '1', 1, 55, 55, 45, 65, 65, 75, 75, 80, 80, '50.00', '2.50', '0', '2022-05-20 09:13:49', '2022-05-20 09:14:06'),
(2, 1, 1, 2, '1', '1', 2, 55, 55, 45, 65, 65, 75, 75, 80, 80, '50.00', '2.50', '0', '2022-05-20 09:13:49', '2022-05-20 09:14:06'),
(5, 2, 1, 5, '0', '1', 5, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-05-20 09:13:49', '2022-05-20 09:14:06'),
(6, 2, 1, 6, '1', '1', 6, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-05-20 09:13:49', '2022-05-20 09:14:06'),
(7, 2, 1, 7, '0', '2', 7, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-05-20 09:13:49', '2022-05-20 09:14:06'),
(8, 2, 1, 8, '1', '2', 8, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-05-20 09:13:49', '2022-05-20 09:14:06'),
(9, 3, 1, 9, '0', '1', 9, 60, 60, 50, 65, 65, 70, 70, 80, 80, '50.00', '2.50', '0', '2022-05-20 09:13:49', '2022-05-20 09:14:06'),
(10, 3, 1, 10, '1', '1', 10, 60, 60, 50, 65, 65, 70, 70, 80, 80, '50.00', '2.50', '0', '2022-05-20 09:13:49', '2022-05-20 09:14:06'),
(11, 3, 1, 11, '0', '2', 11, 60, 60, 50, 65, 65, 70, 70, 80, 80, '50.00', '2.50', '0', '2022-05-20 09:13:49', '2022-05-20 09:14:06'),
(12, 3, 1, 12, '1', '2', 12, 60, 60, 50, 65, 65, 70, 70, 80, 80, '50.00', '2.50', '0', '2022-05-20 09:13:49', '2022-05-20 09:14:06'),
(13, 16, 5, 72, '0', '1', 145, 55, 55, 45, 65, 65, 75, 75, 80, 80, '50.00', '2.50', '0', '2022-06-04 07:42:59', '2022-06-06 05:32:18'),
(14, 16, 5, 73, '1', '1', 146, 55, 55, 45, 65, 65, 75, 75, 80, 80, '50.00', '2.50', '0', '2022-06-04 07:42:59', '2022-06-06 05:32:18'),
(15, 16, 5, 74, '0', '2', 147, 55, 55, 45, 65, 65, 75, 75, 80, 80, '50.00', '2.50', '0', '2022-06-04 07:42:59', '2022-06-06 05:32:18'),
(16, 16, 5, 75, '1', '2', 148, 55, 55, 45, 65, 65, 75, 75, 80, 80, '50.00', '2.50', '0', '2022-06-04 07:42:59', '2022-06-06 05:32:18'),
(17, 18, 5, 80, '0', '1', 153, 55, 55, 45, 65, 65, 75, 75, 80, 80, '50.00', '2.50', '0', '2022-06-04 07:42:59', '2022-06-06 05:32:18'),
(18, 18, 5, 81, '1', '1', 154, 55, 55, 45, 65, 65, 75, 75, 80, 80, '50.00', '2.50', '0', '2022-06-04 07:42:59', '2022-06-06 05:32:18'),
(19, 18, 5, 82, '0', '2', 155, 55, 55, 45, 65, 65, 75, 75, 80, 80, '50.00', '2.50', '0', '2022-06-04 07:42:59', '2022-06-06 05:32:18'),
(20, 18, 5, 83, '1', '2', 156, 55, 55, 45, 65, 65, 75, 75, 80, 80, '50.00', '2.50', '0', '2022-06-04 07:42:59', '2022-06-06 05:32:18'),
(21, 20, 5, 88, '0', '1', 161, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-06-04 07:42:59', '2023-03-10 21:01:09'),
(22, 20, 5, 89, '1', '1', 162, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-06-04 07:42:59', '2023-03-10 21:01:10'),
(23, 20, 5, 90, '0', '2', 163, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-06-04 07:42:59', '2023-03-10 21:01:10'),
(24, 20, 5, 91, '1', '2', 164, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-06-04 07:42:59', '2023-03-10 21:01:10'),
(25, 16, 1, 72, '0', '1', 145, 55, 55, 45, 65, 65, 75, 75, 80, 80, '0.00', '0.00', '0', '2022-06-04 08:10:48', '2022-06-04 08:10:48'),
(26, 16, 1, 73, '1', '1', 146, 55, 55, 45, 65, 65, 75, 75, 80, 80, '0.00', '0.00', '0', '2022-06-04 08:10:48', '2022-06-04 08:10:48'),
(27, 16, 1, 74, '0', '2', 147, 55, 55, 45, 65, 65, 75, 75, 80, 80, '0.00', '0.00', '0', '2022-06-04 08:10:48', '2022-06-04 08:10:48'),
(28, 16, 1, 75, '1', '2', 148, 55, 55, 45, 65, 65, 75, 75, 80, 80, '0.00', '0.00', '0', '2022-06-04 08:10:48', '2022-06-04 08:10:48'),
(33, 17, 1, 76, '0', '2', 149, 99, 99, 81, 117, 117, 135, 135, 144, 144, '50.00', '2.50', '0', '2022-06-04 08:12:41', '2022-06-04 08:13:10'),
(34, 17, 1, 77, '1', '2', 150, 99, 99, 81, 117, 117, 135, 135, 144, 144, '50.00', '2.50', '0', '2022-06-04 08:12:41', '2022-06-04 08:13:10'),
(35, 17, 1, 78, '0', '4', 151, 99, 99, 81, 117, 117, 135, 135, 144, 144, '50.00', '2.50', '0', '2022-06-04 08:12:41', '2022-06-04 08:13:10'),
(36, 17, 1, 79, '1', '4', 152, 99, 99, 81, 117, 117, 135, 135, 144, 144, '50.00', '2.50', '0', '2022-06-04 08:12:41', '2022-06-04 08:13:10'),
(37, 4, 1, 13, '0', '1', 13, 60, 60, 50, 65, 65, 70, 70, 80, 80, '50.00', '2.50', '0', '2022-06-04 08:27:17', '2022-06-04 08:29:16'),
(38, 4, 1, 14, '1', '1', 14, 60, 60, 50, 65, 65, 70, 70, 80, 80, '50.00', '2.50', '0', '2022-06-04 08:27:17', '2022-06-04 08:29:16'),
(39, 4, 1, 15, '0', '2', 15, 60, 60, 50, 65, 65, 70, 70, 80, 80, '50.00', '2.50', '0', '2022-06-04 08:27:17', '2022-06-04 08:29:16'),
(40, 4, 1, 16, '1', '2', 16, 60, 60, 50, 65, 65, 70, 70, 80, 80, '50.00', '2.50', '0', '2022-06-04 08:27:17', '2022-06-04 08:29:16'),
(41, 5, 1, 17, '0', '1', 101, 500, 500, 500, 500, 500, 500, 500, 500, 500, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2023-03-11 22:03:03'),
(42, 5, 1, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2023-03-11 22:03:03'),
(43, 5, 1, 19, '0', '2', 103, 500, 500, 500, 500, 500, 500, 500, 500, 500, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2023-03-11 22:03:03'),
(44, 5, 1, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2023-03-11 22:03:03'),
(45, 6, 1, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2022-06-04 08:27:17'),
(46, 6, 1, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2022-06-04 08:27:17'),
(47, 6, 1, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2022-06-04 08:27:17'),
(48, 6, 1, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2022-06-04 08:27:17'),
(49, 7, 1, 25, '0', '3', 109, 350, 350, 350, 350, 350, 350, 350, 350, 350, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2022-06-04 08:27:17'),
(50, 7, 1, 26, '1', '3', 110, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2022-06-04 08:27:17'),
(51, 7, 1, 27, '0', '5', 111, 350, 350, 350, 350, 350, 350, 350, 350, 350, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2022-06-04 08:27:17'),
(52, 7, 1, 28, '1', '4', 112, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2022-06-04 08:27:17'),
(53, 8, 1, 29, '0', '1', 113, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2022-06-04 08:27:17'),
(54, 8, 1, 30, '1', '1', 114, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2022-06-04 08:27:17'),
(55, 8, 1, 31, '0', '2', 115, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2022-06-04 08:27:17'),
(56, 8, 1, 33, '1', '2', 116, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2022-06-04 08:27:17'),
(57, 9, 1, 34, '0', '2', 117, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2022-06-04 08:27:17'),
(58, 9, 1, 35, '1', '2', 118, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2022-06-04 08:27:17'),
(59, 9, 1, 42, '0', '4', 119, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2022-06-04 08:27:17'),
(60, 9, 1, 43, '1', '4', 120, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2022-06-04 08:27:17'),
(61, 10, 1, 44, '0', '3', 121, 350, 350, 350, 350, 350, 350, 350, 350, 350, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2022-06-04 08:27:17'),
(62, 10, 1, 45, '1', '3', 122, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2022-06-04 08:27:17'),
(63, 10, 1, 46, '0', '5', 123, 350, 350, 350, 350, 350, 350, 350, 350, 350, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2022-06-04 08:27:17'),
(64, 10, 1, 47, '1', '5', 124, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-04 08:27:17', '2022-06-04 08:27:17'),
(65, 14, 1, 60, '0', '1', 137, 55, 55, 45, 65, 65, 75, 75, 80, 80, '50.00', '2.50', '0', '2022-06-04 08:27:17', '2022-06-04 08:29:16'),
(66, 14, 1, 61, '1', '1', 138, 55, 55, 45, 65, 65, 75, 75, 80, 80, '50.00', '2.50', '0', '2022-06-04 08:27:17', '2022-06-04 08:29:16'),
(67, 14, 1, 62, '0', '2', 139, 55, 55, 45, 65, 65, 75, 75, 80, 80, '50.00', '2.50', '0', '2022-06-04 08:27:17', '2022-06-04 08:29:16'),
(68, 14, 1, 63, '1', '2', 140, 55, 55, 45, 65, 65, 75, 75, 80, 80, '50.00', '2.50', '0', '2022-06-04 08:27:17', '2022-06-04 08:29:16'),
(69, 15, 1, 68, '0', '2', 141, 99, 99, 81, 117, 117, 135, 135, 144, 144, '50.00', '2.50', '0', '2022-06-04 08:27:17', '2022-06-04 08:29:16'),
(70, 15, 1, 69, '1', '2', 142, 99, 99, 81, 117, 117, 135, 135, 144, 144, '50.00', '2.50', '0', '2022-06-04 08:27:17', '2022-06-04 08:29:16'),
(71, 15, 1, 70, '0', '4', 143, 99, 99, 81, 117, 117, 135, 135, 144, 144, '50.00', '2.50', '0', '2022-06-04 08:27:17', '2022-06-04 08:29:16'),
(72, 15, 1, 71, '1', '4', 144, 99, 99, 81, 117, 117, 135, 135, 144, 144, '50.00', '2.50', '0', '2022-06-04 08:27:17', '2022-06-04 08:29:16'),
(73, 20, 1, 88, '0', '1', 161, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-06-04 08:27:17', '2023-03-11 22:03:03'),
(74, 20, 1, 89, '1', '1', 162, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-06-04 08:27:17', '2023-03-11 22:03:03'),
(75, 20, 1, 90, '0', '2', 163, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-06-04 08:27:17', '2023-03-11 22:03:04'),
(76, 20, 1, 91, '1', '2', 164, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-06-04 08:27:17', '2023-03-11 22:03:04'),
(77, 21, 1, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-06-04 08:27:17', '2022-06-04 08:29:16'),
(78, 21, 1, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-06-04 08:27:17', '2022-06-04 08:29:16'),
(79, 21, 1, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-06-04 08:27:17', '2022-06-04 08:29:16'),
(80, 21, 1, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-06-04 08:27:17', '2022-06-04 08:29:16'),
(81, 20, 6, 88, '0', '1', 161, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2022-06-06 08:35:54', '2022-06-06 08:35:54'),
(82, 20, 6, 89, '1', '1', 162, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2022-06-06 08:35:54', '2022-06-06 08:35:54'),
(83, 20, 6, 90, '0', '2', 163, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2022-06-06 08:35:54', '2022-06-06 08:35:54'),
(84, 20, 6, 91, '1', '2', 164, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2022-06-06 08:35:54', '2022-06-06 08:35:54'),
(85, 9, 6, 34, '0', '2', 117, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-06 08:35:54', '2022-06-06 08:35:54'),
(86, 9, 6, 35, '1', '2', 118, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-06 08:35:54', '2022-06-06 08:35:54'),
(87, 9, 6, 42, '0', '4', 119, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-06 08:35:54', '2022-06-06 08:35:54'),
(88, 9, 6, 43, '1', '4', 120, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-06 08:35:54', '2022-06-06 08:35:54'),
(89, 21, 6, 92, '0', '2', 165, 100, 100, 85, 120, 120, 135, 135, 155, 155, '50.00', '2.50', '0', '2022-06-06 09:14:45', '2022-07-11 07:09:32'),
(90, 21, 6, 93, '1', '2', 166, 100, 100, 85, 120, 120, 135, 135, 155, 155, '50.00', '2.50', '0', '2022-06-06 09:14:45', '2022-07-11 07:09:32'),
(91, 21, 6, 94, '0', '4', 165, 100, 100, 85, 120, 120, 135, 135, 155, 155, '50.00', '2.50', '0', '2022-06-06 09:14:45', '2022-07-11 07:09:32'),
(92, 21, 6, 95, '1', '4', 167, 100, 100, 85, 120, 120, 135, 135, 155, 155, '50.00', '2.50', '0', '2022-06-06 09:14:45', '2022-07-11 07:09:32'),
(93, 6, 7, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-08 08:22:13', '2022-06-08 08:22:13'),
(94, 6, 7, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-08 08:22:13', '2022-06-08 08:22:13'),
(95, 6, 7, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-08 08:22:14', '2022-06-08 08:22:14'),
(96, 6, 7, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-08 08:22:14', '2022-06-08 08:22:14'),
(97, 6, 6, 21, '0', '2', 105, 175, 175, 175, 175, 1751, 175, 175, 175, 175, '0.00', '0.00', '0', '2022-06-08 08:25:00', '2022-07-12 12:05:05'),
(98, 6, 6, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-08 08:25:00', '2022-06-08 08:25:00'),
(99, 6, 6, 23, '0', '4', 107, 175, 175, 1751, 175, 175, 175, 175, 175, 175, '0.00', '0.00', '0', '2022-06-08 08:25:00', '2022-07-12 12:05:05'),
(100, 6, 6, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-08 08:25:00', '2022-06-08 08:25:00'),
(101, 4, 5, 13, '0', '1', 13, 60, 60, 50, 65, 65, 70, 70, 80, 80, '50.00', '2.50', '0', '2022-06-08 08:26:15', '2023-03-10 21:01:10'),
(102, 4, 5, 14, '1', '1', 14, 60, 60, 50, 65, 65, 70, 70, 80, 80, '50.00', '2.50', '0', '2022-06-08 08:26:15', '2023-03-10 21:01:10'),
(103, 4, 5, 15, '0', '2', 15, 60, 60, 50, 65, 65, 70, 70, 80, 80, '50.00', '2.50', '0', '2022-06-08 08:26:15', '2023-03-10 21:01:10'),
(104, 4, 5, 16, '1', '2', 16, 60, 60, 50, 65, 65, 70, 70, 80, 80, '50.00', '2.50', '0', '2022-06-08 08:26:15', '2023-03-10 21:01:11'),
(105, 6, 8, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-13 07:36:32', '2022-06-13 07:36:32'),
(106, 6, 8, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-13 07:36:32', '2022-06-13 07:36:32'),
(107, 6, 8, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-13 07:36:32', '2022-06-13 07:36:32'),
(108, 6, 8, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-13 07:36:32', '2022-06-13 07:36:32'),
(109, 9, 8, 34, '0', '2', 117, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-13 07:36:32', '2022-06-13 07:36:32'),
(110, 9, 8, 35, '1', '2', 118, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-13 07:36:32', '2022-06-13 07:36:32'),
(111, 9, 8, 42, '0', '4', 119, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-13 07:36:32', '2022-06-13 07:36:32'),
(112, 9, 8, 43, '1', '4', 120, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-13 07:36:32', '2022-06-13 07:36:32'),
(113, 5, 9, 17, '0', '1', 101, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-06-14 08:37:54', '2022-06-14 08:37:54'),
(114, 5, 9, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-14 08:37:54', '2022-06-14 08:37:54'),
(115, 5, 9, 19, '0', '2', 103, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-06-14 08:37:54', '2022-06-14 08:37:54'),
(116, 5, 9, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-14 08:37:54', '2022-06-14 08:37:54'),
(117, 8, 9, 29, '0', '1', 113, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-06-14 08:37:54', '2022-06-14 08:37:54'),
(118, 8, 9, 30, '1', '1', 114, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-14 08:37:54', '2022-06-14 08:37:54'),
(119, 8, 9, 31, '0', '2', 115, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-06-14 08:37:54', '2022-06-14 08:37:54'),
(120, 8, 9, 33, '1', '2', 116, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-14 08:37:54', '2022-06-14 08:37:54'),
(121, 20, 9, 88, '0', '1', 161, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-06-14 08:37:54', '2022-06-14 08:38:14'),
(122, 20, 9, 89, '1', '1', 162, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-06-14 08:37:54', '2022-06-14 08:38:14'),
(123, 20, 9, 90, '0', '2', 163, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-06-14 08:37:55', '2022-06-14 08:38:14'),
(124, 20, 9, 91, '1', '2', 164, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-06-14 08:37:55', '2022-06-14 08:38:14'),
(125, 6, 10, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-14 08:40:28', '2022-08-04 07:56:46'),
(126, 6, 10, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-14 08:40:28', '2022-08-04 07:56:46'),
(127, 6, 10, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-14 08:40:28', '2022-08-04 07:56:46'),
(128, 6, 10, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-14 08:40:28', '2022-08-04 07:56:46'),
(129, 9, 10, 34, '0', '2', 117, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-14 08:40:28', '2022-06-14 08:40:28'),
(130, 9, 10, 35, '1', '2', 118, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-14 08:40:28', '2022-06-14 08:40:28'),
(131, 9, 10, 42, '0', '4', 119, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-14 08:40:28', '2022-06-14 08:40:28'),
(132, 9, 10, 43, '1', '4', 120, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-14 08:40:28', '2022-06-14 08:40:28'),
(133, 2, 11, 5, '0', '1', 5, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-06-15 06:17:11', '2022-06-15 06:18:00'),
(134, 2, 11, 6, '1', '1', 6, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-06-15 06:17:11', '2022-06-15 06:18:00'),
(135, 2, 11, 7, '0', '2', 7, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-06-15 06:17:11', '2022-06-15 06:18:00'),
(136, 2, 11, 8, '1', '2', 8, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-06-15 06:17:11', '2022-06-15 06:18:00'),
(137, 3, 11, 9, '0', '1', 9, 60, 60, 50, 65, 65, 70, 70, 80, 80, '50.00', '2.50', '0', '2022-06-15 06:17:11', '2022-06-15 06:18:00'),
(138, 3, 11, 10, '1', '1', 10, 60, 60, 50, 65, 65, 70, 70, 80, 80, '50.00', '2.50', '0', '2022-06-15 06:17:11', '2022-06-15 06:18:00'),
(139, 3, 11, 11, '0', '2', 11, 60, 60, 50, 65, 65, 70, 70, 80, 80, '50.00', '2.50', '0', '2022-06-15 06:17:11', '2022-06-15 06:18:00'),
(140, 3, 11, 12, '1', '2', 12, 60, 60, 50, 65, 65, 70, 70, 80, 80, '50.00', '2.50', '0', '2022-06-15 06:17:11', '2022-06-15 06:18:00'),
(141, 4, 11, 13, '0', '1', 13, 60, 60, 50, 65, 65, 70, 70, 80, 80, '50.00', '2.50', '0', '2022-06-15 06:17:11', '2022-06-15 06:18:00'),
(142, 4, 11, 14, '1', '1', 14, 60, 60, 50, 65, 65, 70, 70, 80, 80, '50.00', '2.50', '0', '2022-06-15 06:17:11', '2022-06-15 06:18:00'),
(143, 4, 11, 15, '0', '2', 15, 60, 60, 50, 65, 65, 70, 70, 80, 80, '50.00', '2.50', '0', '2022-06-15 06:17:11', '2022-06-15 06:18:00'),
(144, 4, 11, 16, '1', '2', 16, 60, 60, 50, 65, 65, 70, 70, 80, 80, '50.00', '2.50', '0', '2022-06-15 06:17:11', '2022-06-15 06:18:00'),
(145, 15, 11, 68, '0', '2', 141, 99, 99, 81, 117, 117, 135, 135, 144, 144, '50.00', '2.50', '0', '2022-06-15 06:57:56', '2022-06-15 08:22:33'),
(146, 15, 11, 69, '1', '2', 142, 99, 99, 81, 117, 117, 135, 135, 144, 144, '50.00', '2.50', '0', '2022-06-15 06:57:56', '2022-06-15 08:22:33'),
(147, 15, 11, 70, '0', '4', 143, 99, 99, 81, 117, 117, 135, 135, 144, 144, '50.00', '2.50', '0', '2022-06-15 06:57:56', '2022-06-15 08:22:33'),
(148, 15, 11, 71, '1', '4', 144, 99, 99, 81, 117, 117, 135, 135, 144, 144, '50.00', '2.50', '0', '2022-06-15 06:57:56', '2022-06-15 08:22:33'),
(149, 17, 11, 76, '0', '2', 149, 99, 99, 81, 117, 117, 135, 135, 144, 144, '50.00', '2.50', '0', '2022-06-15 06:57:56', '2022-06-15 08:22:33'),
(150, 17, 11, 77, '1', '2', 150, 99, 99, 81, 117, 117, 135, 135, 144, 144, '50.00', '2.50', '0', '2022-06-15 06:57:56', '2022-06-15 08:22:33'),
(151, 17, 11, 78, '0', '4', 151, 99, 99, 81, 117, 117, 135, 135, 144, 144, '50.00', '2.50', '0', '2022-06-15 06:57:56', '2022-06-15 08:22:33'),
(152, 17, 11, 79, '1', '4', 152, 99, 99, 81, 117, 117, 135, 135, 144, 144, '50.00', '2.50', '0', '2022-06-15 06:57:56', '2022-06-15 08:22:33'),
(153, 21, 11, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-06-15 08:29:15', '2022-06-15 08:29:31'),
(154, 21, 11, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-06-15 08:29:15', '2022-06-15 08:29:31'),
(155, 21, 11, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-06-15 08:29:15', '2022-06-15 08:29:31'),
(156, 21, 11, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-06-15 08:29:15', '2022-06-15 08:29:31'),
(157, 25, 1, 98, '0', '1', 168, 500, 500, 500, 500, 500, 500, 500, 500, 500, '0.00', '0.00', '0', '2022-06-15 14:04:47', '2023-03-11 22:03:04'),
(158, 25, 1, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-15 14:04:47', '2023-03-11 22:03:04'),
(159, 25, 1, 100, '0', '2', 170, 500, 500, 500, 500, 500, 500, 500, 500, 500, '0.00', '0.00', '0', '2022-06-15 14:04:47', '2023-03-11 22:03:04'),
(160, 25, 1, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-15 14:04:47', '2023-03-11 22:03:05'),
(161, 37, 14, 158, '0', '6', 228, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-18 04:35:14', '2022-06-18 04:35:14'),
(162, 37, 14, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-18 04:35:14', '2022-06-18 04:35:14'),
(163, 37, 13, 158, '0', '6', 228, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-18 04:37:48', '2022-06-18 04:37:48'),
(164, 37, 13, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-18 04:37:48', '2022-06-18 04:37:48'),
(165, 24, 6, 102, '0', '2', 172, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-06-18 04:40:48', '2022-07-05 08:29:34'),
(166, 24, 6, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-18 04:40:48', '2022-06-18 04:40:48'),
(167, 24, 6, 104, '0', '4', 174, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-06-18 04:40:48', '2022-07-05 08:29:34'),
(168, 24, 6, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-18 04:40:48', '2022-06-18 04:40:48'),
(169, 24, 8, 102, '0', '2', 172, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-06-18 04:41:48', '2022-06-18 04:41:48'),
(170, 24, 8, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-18 04:41:48', '2022-06-18 04:41:48'),
(171, 24, 8, 104, '0', '4', 174, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-06-18 04:41:48', '2022-06-18 04:41:48'),
(172, 24, 8, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-18 04:41:48', '2022-06-18 04:41:48'),
(173, 23, 5, 134, '0', '1', 204, 48, 48, 45, 60, 60, 63, 63, 70, 70, '50.00', '2.50', '0', '2022-06-18 04:43:51', '2023-03-10 21:01:11'),
(174, 23, 5, 135, '1', '1', 205, 48, 48, 45, 60, 60, 63, 63, 70, 70, '50.00', '2.50', '0', '2022-06-18 04:43:51', '2023-03-10 21:01:11'),
(175, 23, 5, 136, '0', '2', 206, 48, 48, 45, 60, 60, 63, 63, 70, 70, '50.00', '2.50', '0', '2022-06-18 04:43:51', '2023-03-10 21:01:11'),
(176, 23, 5, 137, '1', '2', 207, 48, 48, 45, 60, 60, 63, 63, 70, 70, '50.00', '2.50', '0', '2022-06-18 04:43:51', '2023-03-10 21:01:11'),
(177, 25, 9, 98, '0', '1', 168, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-06-18 04:45:21', '2022-06-18 04:45:21'),
(178, 25, 9, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-18 04:45:21', '2022-06-18 04:45:21'),
(179, 25, 9, 100, '0', '2', 170, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-06-18 04:45:21', '2022-06-18 04:45:21'),
(180, 25, 9, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-18 04:45:21', '2022-06-18 04:45:21'),
(181, 37, 10, 158, '0', '6', 228, 230, 230, 230, 230, 230, 230, 230, 230, 230, '0.00', '0.00', '0', '2022-06-18 04:46:40', '2022-06-21 06:39:37'),
(182, 37, 10, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-18 04:46:40', '2022-06-18 04:46:40'),
(183, 22, 11, 138, '0', '2', 208, 95, 95, 92, 120, 120, 125, 125, 135, 135, '50.00', '2.50', '0', '2022-06-18 04:48:09', '2022-06-18 04:48:28'),
(184, 22, 11, 139, '1', '2', 209, 95, 95, 92, 120, 120, 125, 125, 135, 135, '50.00', '2.50', '0', '2022-06-18 04:48:09', '2022-06-18 04:48:28'),
(185, 22, 11, 140, '0', '4', 210, 95, 95, 92, 120, 120, 125, 125, 135, 135, '50.00', '2.50', '0', '2022-06-18 04:48:09', '2022-06-18 04:48:28'),
(186, 22, 11, 141, '1', '4', 211, 95, 95, 92, 120, 120, 125, 125, 135, 135, '50.00', '2.50', '0', '2022-06-18 04:48:09', '2022-06-18 04:48:28'),
(187, 37, 15, 158, '0', '6', 228, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-20 09:35:28', '2022-08-04 05:47:46'),
(188, 37, 15, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-20 09:35:28', '2022-06-20 09:35:28'),
(189, 38, 15, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-06-20 09:35:28', '2022-06-20 09:35:28'),
(190, 38, 15, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-20 09:35:28', '2022-06-20 09:35:28'),
(191, 39, 15, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-06-20 09:35:28', '2022-06-20 09:35:28'),
(192, 39, 15, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-20 09:35:28', '2022-06-20 09:35:28'),
(193, 37, 16, 158, '0', '6', 228, 180, 180, 180, 180, 180, 180, 180, 180, 180, '0.00', '0.00', '0', '2022-06-20 09:39:17', '2022-08-30 06:02:09'),
(194, 37, 16, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-20 09:39:17', '2022-06-20 09:39:17'),
(195, 38, 16, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-06-20 09:39:17', '2022-06-20 09:39:17'),
(196, 38, 16, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-20 09:39:17', '2022-06-20 09:39:17'),
(197, 39, 16, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-06-20 09:39:17', '2022-06-20 09:39:17'),
(198, 39, 16, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-20 09:39:17', '2022-06-20 09:39:17'),
(199, 37, 17, 158, '0', '6', 228, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-20 09:45:39', '2022-08-04 05:48:38'),
(200, 37, 17, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-20 09:45:39', '2022-06-20 09:45:39'),
(201, 38, 17, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-06-20 09:45:39', '2022-06-20 09:45:39'),
(202, 38, 17, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-20 09:45:39', '2022-06-20 09:45:39'),
(203, 39, 17, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-06-20 09:45:39', '2022-06-20 09:45:39'),
(204, 39, 17, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-20 09:45:39', '2022-06-20 09:45:39'),
(205, 37, 18, 158, '0', '6', 228, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-06-20 09:46:29', '2022-08-04 05:51:34'),
(206, 37, 18, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-20 09:46:29', '2022-06-20 09:46:29'),
(207, 38, 18, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-06-20 09:46:29', '2022-06-20 09:46:29'),
(208, 38, 18, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-20 09:46:29', '2022-06-20 09:46:29'),
(209, 39, 18, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-06-20 09:46:29', '2022-06-20 09:46:29'),
(210, 39, 18, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-20 09:46:29', '2022-06-20 09:46:29'),
(211, 37, 19, 158, '0', '6', 228, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-06-20 09:46:59', '2022-09-26 06:43:34'),
(212, 37, 19, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-20 09:46:59', '2022-06-20 09:46:59'),
(213, 38, 19, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-06-20 09:46:59', '2022-06-20 09:46:59'),
(214, 38, 19, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-20 09:46:59', '2022-06-20 09:46:59'),
(215, 39, 19, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-06-20 09:46:59', '2022-06-20 09:46:59'),
(216, 39, 19, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-20 09:46:59', '2022-06-20 09:46:59'),
(217, 14, 20, 60, '0', '1', 137, 51, 51, 42, 60, 60, 69, 69, 74, 74, '50.00', '2.50', '0', '2022-06-21 06:19:34', '2022-06-21 06:20:01'),
(218, 14, 20, 61, '1', '1', 138, 51, 51, 42, 60, 60, 69, 69, 74, 74, '50.00', '2.50', '0', '2022-06-21 06:19:34', '2022-06-21 06:20:01'),
(219, 14, 20, 62, '0', '2', 139, 51, 51, 42, 60, 60, 69, 69, 74, 74, '50.00', '2.50', '0', '2022-06-21 06:19:34', '2022-06-21 06:20:01'),
(220, 14, 20, 63, '1', '2', 140, 51, 51, 42, 60, 60, 69, 69, 74, 74, '50.00', '2.50', '0', '2022-06-21 06:19:34', '2022-06-21 06:20:01'),
(221, 15, 20, 68, '0', '2', 141, 92, 92, 75, 108, 108, 125, 125, 133, 133, '50.00', '2.50', '0', '2022-06-21 06:19:34', '2022-06-21 06:20:01'),
(222, 15, 20, 69, '1', '2', 142, 92, 92, 75, 108, 108, 125, 125, 133, 133, '50.00', '2.50', '0', '2022-06-21 06:19:34', '2022-06-21 06:20:01'),
(223, 15, 20, 70, '0', '4', 143, 92, 92, 75, 108, 108, 125, 125, 133, 133, '50.00', '2.50', '0', '2022-06-21 06:19:34', '2022-06-21 06:20:01'),
(224, 15, 20, 71, '1', '4', 144, 92, 92, 75, 108, 108, 125, 125, 133, 133, '50.00', '2.50', '0', '2022-06-21 06:19:34', '2022-06-21 06:20:01'),
(225, 24, 20, 102, '0', '2', 172, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-06-21 06:19:34', '2022-06-21 06:19:34'),
(226, 24, 20, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-21 06:19:34', '2022-06-21 06:19:34'),
(227, 24, 20, 104, '0', '4', 174, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-06-21 06:19:34', '2022-06-21 06:19:34'),
(228, 24, 20, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-21 06:19:34', '2022-06-21 06:19:34'),
(229, 25, 20, 98, '0', '1', 168, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-06-21 06:20:44', '2022-06-21 06:20:44'),
(230, 25, 20, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-21 06:20:44', '2022-06-21 06:20:44'),
(231, 25, 20, 100, '0', '2', 170, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-06-21 06:20:44', '2022-06-21 06:20:44'),
(232, 25, 20, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-21 06:20:44', '2022-06-21 06:20:44'),
(233, 24, 7, 102, '0', '2', 172, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-06-25 06:10:41', '2022-07-18 07:33:50'),
(234, 24, 7, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-25 06:10:41', '2022-06-25 06:10:41'),
(235, 24, 7, 104, '0', '4', 174, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-06-25 06:10:41', '2022-07-18 07:33:50'),
(236, 24, 7, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-25 06:10:41', '2022-06-25 06:10:41'),
(237, 29, 7, 114, '0', '2', 184, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-06-25 06:10:41', '2022-07-18 07:33:50'),
(238, 29, 7, 115, '1', '2', 185, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-25 06:10:42', '2022-06-25 06:10:42'),
(239, 29, 7, 116, '0', '4', 186, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-06-25 06:10:42', '2022-07-18 07:33:50'),
(240, 29, 7, 117, '1', '4', 187, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-25 06:10:42', '2022-06-25 06:10:42'),
(241, 21, 7, 92, '0', '2', 165, 118, 118, 105, 136, 136, 154, 154, 190, 190, '50.00', '2.50', '0', '2022-06-25 06:12:30', '2022-07-18 07:33:50'),
(242, 21, 7, 93, '1', '2', 166, 118, 118, 105, 136, 136, 154, 154, 190, 190, '50.00', '2.50', '0', '2022-06-25 06:12:30', '2022-07-18 07:33:50'),
(243, 21, 7, 94, '0', '4', 165, 118, 118, 105, 136, 136, 154, 154, 190, 190, '50.00', '2.50', '0', '2022-06-25 06:12:30', '2022-07-18 07:33:50'),
(244, 21, 7, 95, '1', '4', 167, 118, 118, 105, 136, 136, 154, 154, 190, 190, '50.00', '2.50', '0', '2022-06-25 06:12:30', '2022-07-18 07:33:50'),
(245, 31, 25, 118, '0', '3', 188, 180, 180, 180, 180, 180, 180, 180, 180, 180, '0.00', '0.00', '0', '2022-06-30 05:34:19', '2022-06-30 05:34:19'),
(246, 31, 25, 119, '1', '3', 189, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-30 05:34:19', '2022-06-30 05:34:19'),
(247, 31, 25, 120, '0', '5', 190, 180, 180, 180, 180, 180, 180, 180, 180, 180, '0.00', '0.00', '0', '2022-06-30 05:34:19', '2022-06-30 05:34:19'),
(248, 31, 25, 121, '1', '5', 191, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-30 05:34:19', '2022-06-30 05:34:19'),
(249, 37, 25, 158, '0', '6', 228, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-06-30 05:34:19', '2022-06-30 05:34:19'),
(250, 37, 25, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-30 05:34:19', '2022-06-30 05:34:19'),
(251, 38, 25, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-06-30 05:34:19', '2022-06-30 05:34:19'),
(252, 38, 25, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-30 05:34:19', '2022-06-30 05:34:19'),
(253, 5, 26, 17, '0', '1', 101, 145, 145, 145, 145, 145, 145, 145, 145, 145, '0.00', '0.00', '0', '2022-06-30 07:51:17', '2022-07-16 04:56:16'),
(254, 5, 26, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-30 07:51:17', '2022-06-30 07:51:17'),
(255, 5, 26, 19, '0', '2', 103, 145, 145, 145, 145, 145, 145, 145, 145, 145, '0.00', '0.00', '0', '2022-06-30 07:51:17', '2022-07-16 04:56:16'),
(256, 5, 26, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-30 07:51:17', '2022-06-30 07:51:17'),
(257, 25, 26, 98, '0', '1', 168, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-06-30 07:51:17', '2022-07-16 04:56:16'),
(258, 25, 26, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-30 07:51:17', '2022-06-30 07:51:17'),
(259, 25, 26, 100, '0', '2', 170, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-06-30 07:51:17', '2022-07-16 04:56:16'),
(260, 25, 26, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-30 07:51:17', '2022-06-30 07:51:17'),
(261, 30, 26, 110, '0', '1', 180, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-06-30 07:51:17', '2022-07-16 04:56:16'),
(262, 30, 26, 111, '1', '1', 181, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-30 07:51:17', '2022-06-30 07:51:17'),
(263, 30, 26, 112, '0', '2', 182, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-06-30 07:51:17', '2022-07-16 04:56:16'),
(264, 30, 26, 113, '1', '2', 183, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-06-30 07:51:17', '2022-06-30 07:51:17'),
(265, 6, 23, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-01 07:15:45', '2022-07-01 07:15:45'),
(266, 6, 23, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-01 07:15:45', '2022-07-01 07:15:45'),
(267, 6, 23, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-01 07:15:45', '2022-07-01 07:15:45'),
(268, 6, 23, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-01 07:15:45', '2022-07-01 07:15:45'),
(269, 21, 23, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-07-01 07:15:45', '2022-07-01 07:16:01'),
(270, 21, 23, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-07-01 07:15:45', '2022-07-01 07:16:01'),
(271, 21, 23, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-07-01 07:15:45', '2022-07-01 07:16:01'),
(272, 21, 23, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-07-01 07:15:45', '2022-07-01 07:16:01'),
(273, 29, 23, 114, '0', '2', 184, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-01 07:15:45', '2022-07-01 07:15:45'),
(274, 29, 23, 115, '1', '2', 185, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-01 07:15:45', '2022-07-01 07:15:45'),
(275, 29, 23, 116, '0', '4', 186, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-01 07:15:45', '2022-07-01 07:15:45'),
(276, 29, 23, 117, '1', '4', 187, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-01 07:15:45', '2022-07-01 07:15:45'),
(277, 6, 22, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-01 07:17:29', '2022-07-01 07:17:29'),
(278, 6, 22, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-01 07:17:29', '2022-07-01 07:17:29'),
(279, 6, 22, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-01 07:17:29', '2022-07-01 07:17:29'),
(280, 6, 22, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-01 07:17:29', '2022-07-01 07:17:29'),
(281, 24, 22, 102, '0', '2', 172, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-01 07:17:29', '2022-07-01 07:17:29'),
(282, 24, 22, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-01 07:17:29', '2022-07-01 07:17:29'),
(283, 24, 22, 104, '0', '4', 174, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-01 07:17:29', '2022-07-01 07:17:29'),
(284, 24, 22, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-01 07:17:29', '2022-07-01 07:17:29'),
(285, 29, 22, 114, '0', '2', 184, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-01 07:17:29', '2022-07-01 07:17:29'),
(286, 29, 22, 115, '1', '2', 185, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-01 07:17:29', '2022-07-01 07:17:29'),
(287, 29, 22, 116, '0', '4', 186, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-01 07:17:29', '2022-07-01 07:17:29'),
(288, 29, 22, 117, '1', '4', 187, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-01 07:17:29', '2022-07-01 07:17:29'),
(289, 40, 16, 164, '0', '6', 234, 180, 180, 180, 180, 180, 180, 180, 180, 180, '0.00', '0.00', '0', '2022-07-05 05:40:46', '2022-07-05 05:40:46'),
(290, 40, 16, 165, '1', '6', 235, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-05 05:40:46', '2022-07-05 05:40:46'),
(291, 21, 22, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-07-05 05:58:51', '2022-07-05 05:59:19'),
(292, 21, 22, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-07-05 05:58:51', '2022-07-05 05:59:19'),
(293, 21, 22, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-07-05 05:58:51', '2022-07-05 05:59:19'),
(294, 21, 22, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-07-05 05:58:51', '2022-07-05 05:59:19'),
(295, 37, 27, 158, '0', '6', 228, 170, 170, 170, 170, 170, 170, 170, 170, 170, '0.00', '0.00', '0', '2022-07-05 10:56:14', '2023-01-06 08:13:33'),
(296, 37, 27, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-05 10:56:14', '2022-07-05 10:56:14'),
(297, 40, 27, 164, '0', '6', 234, 180, 180, 180, 180, 180, 180, 180, 180, 180, '0.00', '0.00', '0', '2022-07-05 10:56:14', '2022-07-05 10:56:14'),
(298, 40, 27, 165, '1', '6', 235, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-05 10:56:14', '2022-07-05 10:56:14'),
(299, 6, 28, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-06 06:43:11', '2022-07-06 06:43:11'),
(300, 6, 28, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 06:43:11', '2022-07-06 06:43:11'),
(301, 6, 28, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-06 06:43:11', '2022-07-06 06:43:11'),
(302, 6, 28, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 06:43:11', '2022-07-06 06:43:11'),
(303, 24, 28, 102, '0', '2', 172, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-06 06:43:11', '2022-07-06 06:43:11'),
(304, 24, 28, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 06:43:11', '2022-07-06 06:43:11'),
(305, 24, 28, 104, '0', '4', 174, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-06 06:43:11', '2022-07-06 06:43:11'),
(306, 24, 28, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 06:43:11', '2022-07-06 06:43:11'),
(307, 29, 28, 114, '0', '2', 184, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-06 06:43:11', '2022-07-06 06:43:11'),
(308, 29, 28, 115, '1', '2', 185, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 06:43:11', '2022-07-06 06:43:11'),
(309, 29, 28, 116, '0', '4', 186, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-06 06:43:11', '2022-07-06 06:43:11'),
(310, 29, 28, 117, '1', '4', 187, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 06:43:11', '2022-07-06 06:43:11'),
(311, 37, 29, 158, '0', '6', 228, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-07-06 06:44:10', '2022-07-06 06:44:10'),
(312, 37, 29, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 06:44:10', '2022-07-06 06:44:10'),
(313, 38, 29, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-07-06 06:44:10', '2022-07-06 06:44:10'),
(314, 38, 29, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 06:44:10', '2022-07-06 06:44:10'),
(315, 40, 29, 164, '0', '6', 234, 180, 180, 180, 180, 180, 180, 180, 180, 180, '0.00', '0.00', '0', '2022-07-06 06:44:11', '2022-07-06 06:44:11'),
(316, 40, 29, 165, '1', '6', 235, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 06:44:11', '2022-07-06 06:44:11'),
(317, 6, 30, 21, '0', '2', 105, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-07-06 10:35:29', '2022-07-06 10:35:29'),
(318, 6, 30, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 10:35:29', '2022-07-06 10:35:29'),
(319, 6, 30, 23, '0', '4', 107, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-07-06 10:35:29', '2022-07-06 10:35:29'),
(320, 6, 30, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 10:35:29', '2022-07-06 10:35:29'),
(321, 24, 30, 102, '0', '2', 172, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-07-06 10:35:29', '2022-07-06 10:35:29'),
(322, 24, 30, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 10:35:29', '2022-07-06 10:35:29'),
(323, 24, 30, 104, '0', '4', 174, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-07-06 10:35:29', '2022-07-06 10:35:29'),
(324, 24, 30, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 10:35:29', '2022-07-06 10:35:29'),
(325, 29, 30, 114, '0', '2', 184, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-07-06 10:35:29', '2022-07-06 10:35:29'),
(326, 29, 30, 115, '1', '2', 185, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 10:35:29', '2022-07-06 10:35:29'),
(327, 29, 30, 116, '0', '4', 186, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-07-06 10:35:29', '2022-07-06 10:35:29'),
(328, 29, 30, 117, '1', '4', 187, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 10:35:29', '2022-07-06 10:35:29'),
(329, 37, 30, 158, '0', '6', 228, 175, 175, 175, 175, 175, 175, 175, 175, 175, '0.00', '0.00', '0', '2022-07-06 10:35:29', '2022-07-06 10:35:29'),
(330, 37, 30, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 10:35:29', '2022-07-06 10:35:29'),
(331, 40, 30, 164, '0', '6', 234, 180, 180, 180, 180, 180, 180, 180, 180, 180, '0.00', '0.00', '0', '2022-07-06 10:35:29', '2022-07-06 10:35:29'),
(332, 40, 30, 165, '1', '6', 235, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 10:35:29', '2022-07-06 10:35:29'),
(333, 6, 31, 21, '0', '2', 105, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-07-06 10:38:25', '2022-07-06 10:38:25'),
(334, 6, 31, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 10:38:25', '2022-07-06 10:38:25'),
(335, 6, 31, 23, '0', '4', 107, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-07-06 10:38:25', '2022-07-06 10:38:25'),
(336, 6, 31, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 10:38:25', '2022-07-06 10:38:25'),
(337, 24, 31, 102, '0', '2', 172, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-07-06 10:38:25', '2022-07-06 10:38:25'),
(338, 24, 31, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 10:38:25', '2022-07-06 10:38:25'),
(339, 24, 31, 104, '0', '4', 174, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-07-06 10:38:25', '2022-07-06 10:38:25'),
(340, 24, 31, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 10:38:25', '2022-07-06 10:38:25'),
(341, 29, 31, 114, '0', '2', 184, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-07-06 10:38:25', '2022-07-06 10:38:25'),
(342, 29, 31, 115, '1', '2', 185, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 10:38:25', '2022-07-06 10:38:25'),
(343, 29, 31, 116, '0', '4', 186, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-07-06 10:38:25', '2022-07-06 10:38:25'),
(344, 29, 31, 117, '1', '4', 187, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 10:38:25', '2022-07-06 10:38:25'),
(345, 37, 31, 158, '0', '6', 228, 175, 175, 175, 175, 175, 175, 175, 175, 175, '0.00', '0.00', '0', '2022-07-06 10:38:25', '2022-07-06 10:38:25'),
(346, 37, 31, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 10:38:25', '2022-07-06 10:38:25'),
(347, 40, 31, 164, '0', '6', 234, 180, 180, 180, 180, 180, 180, 180, 180, 180, '0.00', '0.00', '0', '2022-07-06 10:38:25', '2022-07-06 10:38:25'),
(348, 40, 31, 165, '1', '6', 235, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-06 10:38:25', '2022-07-06 10:38:25'),
(349, 38, 30, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-07-07 05:57:18', '2022-07-07 05:57:18'),
(350, 38, 30, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-07 05:57:18', '2022-07-07 05:57:18'),
(351, 38, 31, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-07-07 05:57:42', '2022-07-07 05:57:42'),
(352, 38, 31, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-07 05:57:42', '2022-07-07 05:57:42'),
(353, 37, 32, 158, '0', '6', 228, 175, 175, 175, 175, 175, 175, 175, 175, 175, '0.00', '0.00', '0', '2022-07-08 08:01:15', '2022-07-12 12:21:47'),
(354, 37, 32, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-08 08:01:15', '2022-07-08 08:01:15'),
(355, 38, 32, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-07-08 08:01:15', '2022-07-08 08:01:15'),
(356, 38, 32, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-08 08:01:15', '2022-07-08 08:01:15'),
(357, 40, 32, 164, '0', '6', 234, 180, 180, 180, 180, 180, 180, 180, 180, 180, '0.00', '0.00', '0', '2022-07-08 08:01:15', '2022-07-08 08:01:15'),
(358, 40, 32, 165, '1', '6', 235, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-08 08:01:15', '2022-07-08 08:01:15'),
(359, 22, 1, 138, '0', '2', 208, 95, 95, 92, 120, 120, 125, 125, 135, 135, '50.00', '2.50', '0', '2022-07-08 09:30:56', '2022-07-08 09:31:12'),
(360, 22, 1, 139, '1', '2', 209, 95, 95, 92, 120, 120, 125, 125, 135, 135, '50.00', '2.50', '0', '2022-07-08 09:30:56', '2022-07-08 09:31:12'),
(361, 22, 1, 140, '0', '4', 210, 95, 95, 92, 120, 120, 125, 125, 135, 135, '50.00', '2.50', '0', '2022-07-08 09:30:56', '2022-07-08 09:31:12'),
(362, 22, 1, 141, '1', '4', 211, 95, 95, 92, 120, 120, 125, 125, 135, 135, '50.00', '2.50', '0', '2022-07-08 09:30:56', '2022-07-08 09:31:12'),
(363, 38, 27, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-07-08 11:01:37', '2022-07-08 11:01:37'),
(364, 38, 27, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-08 11:01:37', '2022-07-08 11:01:37'),
(365, 5, 33, 17, '0', '1', 101, 400, 400, 400, 400, 400, 400, 400, 400, 400, '0.00', '0.00', '0', '2022-07-08 11:20:55', '2022-07-08 11:20:55'),
(366, 5, 33, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-08 11:20:55', '2022-07-08 11:20:55'),
(367, 5, 33, 19, '0', '2', 103, 400, 400, 400, 400, 400, 400, 400, 400, 400, '0.00', '0.00', '0', '2022-07-08 11:20:55', '2022-07-08 11:20:55'),
(368, 5, 33, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-08 11:20:55', '2022-07-08 11:20:55'),
(369, 8, 33, 29, '0', '1', 113, 400, 400, 400, 400, 400, 400, 400, 400, 400, '0.00', '0.00', '0', '2022-07-08 11:20:55', '2022-07-08 11:20:55'),
(370, 8, 33, 30, '1', '1', 114, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-08 11:20:55', '2022-07-08 11:20:55'),
(371, 8, 33, 31, '0', '2', 115, 400, 400, 400, 400, 400, 400, 400, 400, 400, '0.00', '0.00', '0', '2022-07-08 11:20:55', '2022-07-08 11:20:55'),
(372, 8, 33, 33, '1', '2', 116, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-08 11:20:55', '2022-07-08 11:20:55');
INSERT INTO `sender_manage_price` (`id`, `logistic_id`, `sender_id`, `manage_price_id`, `shipment_type`, `rule`, `rule_index`, `within_city`, `within_state`, `within_zone`, `metro`, `metro_2`, `rest_of_india`, `rest_of_india_2`, `special_zone`, `jammu_kashmir`, `cod_price`, `cod_percentage`, `is_cod_charge_return`, `created_at`, `updated_at`) VALUES
(373, 20, 33, 88, '0', '1', 161, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2022-07-08 11:20:55', '2022-07-08 11:20:55'),
(374, 20, 33, 89, '1', '1', 162, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2022-07-08 11:20:55', '2022-07-08 11:20:55'),
(375, 20, 33, 90, '0', '2', 163, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2022-07-08 11:20:55', '2022-07-08 11:20:55'),
(376, 20, 33, 91, '1', '2', 164, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2022-07-08 11:20:55', '2022-07-08 11:20:55'),
(377, 25, 33, 98, '0', '1', 168, 400, 400, 400, 400, 400, 400, 400, 400, 400, '0.00', '0.00', '0', '2022-07-08 11:20:55', '2022-07-08 11:20:55'),
(378, 25, 33, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-08 11:20:55', '2022-07-08 11:20:55'),
(379, 25, 33, 100, '0', '2', 170, 400, 400, 400, 400, 400, 400, 400, 400, 400, '0.00', '0.00', '0', '2022-07-08 11:20:55', '2022-07-08 11:20:55'),
(380, 25, 33, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-08 11:20:55', '2022-07-08 11:20:55'),
(381, 30, 33, 110, '0', '1', 180, 400, 400, 400, 400, 400, 400, 400, 400, 400, '0.00', '0.00', '0', '2022-07-08 11:20:55', '2022-07-08 11:20:55'),
(382, 30, 33, 111, '1', '1', 181, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-08 11:20:55', '2022-07-08 11:20:55'),
(383, 30, 33, 112, '0', '2', 182, 400, 400, 400, 400, 400, 400, 400, 400, 400, '0.00', '0.00', '0', '2022-07-08 11:20:55', '2022-07-08 11:20:55'),
(384, 30, 33, 113, '1', '2', 183, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-08 11:20:55', '2022-07-08 11:20:55'),
(385, 6, 35, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-13 08:34:38', '2022-07-13 08:34:38'),
(386, 6, 35, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-13 08:34:38', '2022-07-13 08:34:38'),
(387, 6, 35, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-13 08:34:38', '2022-07-13 08:34:38'),
(388, 6, 35, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-13 08:34:38', '2022-07-13 08:34:38'),
(389, 21, 35, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '0.00', '0.00', '0', '2022-07-13 08:34:38', '2022-07-13 08:34:38'),
(390, 21, 35, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '0.00', '0.00', '0', '2022-07-13 08:34:38', '2022-07-13 08:34:38'),
(391, 21, 35, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '0.00', '0.00', '0', '2022-07-13 08:34:38', '2022-07-13 08:34:38'),
(392, 21, 35, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '0.00', '0.00', '0', '2022-07-13 08:34:38', '2022-07-13 08:34:38'),
(393, 24, 35, 102, '0', '2', 172, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-13 08:34:38', '2022-07-13 08:34:38'),
(394, 24, 35, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-13 08:34:38', '2022-07-13 08:34:38'),
(395, 24, 35, 104, '0', '4', 174, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-13 08:34:38', '2022-07-13 08:34:38'),
(396, 24, 35, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-13 08:34:38', '2022-07-13 08:34:38'),
(397, 29, 35, 114, '0', '2', 184, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-13 08:34:38', '2022-07-13 08:34:38'),
(398, 29, 35, 115, '1', '2', 185, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-13 08:34:38', '2022-07-13 08:34:38'),
(399, 29, 35, 116, '0', '4', 186, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-13 08:34:38', '2022-07-13 08:34:38'),
(400, 29, 35, 117, '1', '4', 187, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-13 08:34:38', '2022-07-13 08:34:38'),
(401, 24, 23, 102, '0', '2', 172, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-13 08:36:47', '2022-07-13 08:36:47'),
(402, 24, 23, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-13 08:36:47', '2022-07-13 08:36:47'),
(403, 24, 23, 104, '0', '4', 174, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-13 08:36:47', '2022-07-13 08:36:47'),
(404, 24, 23, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-13 08:36:47', '2022-07-13 08:36:47'),
(405, 5, 36, 17, '0', '1', 101, 145, 145, 145, 145, 145, 145, 145, 145, 145, '0.00', '0.00', '0', '2022-07-14 06:48:23', '2022-07-19 05:23:10'),
(406, 5, 36, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-14 06:48:23', '2022-07-14 06:48:23'),
(407, 5, 36, 19, '0', '2', 103, 145, 145, 145, 145, 145, 145, 145, 145, 145, '0.00', '0.00', '0', '2022-07-14 06:48:23', '2022-07-19 05:23:10'),
(408, 5, 36, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-14 06:48:23', '2022-07-14 06:48:23'),
(409, 25, 36, 98, '0', '1', 168, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-14 06:48:23', '2022-07-19 05:23:10'),
(410, 25, 36, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-14 06:48:23', '2022-07-14 06:48:23'),
(411, 25, 36, 100, '0', '2', 170, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-14 06:48:23', '2022-07-19 05:23:10'),
(412, 25, 36, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-14 06:48:23', '2022-07-14 06:48:23'),
(413, 30, 36, 110, '0', '1', 180, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-14 06:48:23', '2022-07-19 05:23:10'),
(414, 30, 36, 111, '1', '1', 181, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-14 06:48:23', '2022-07-14 06:48:23'),
(415, 30, 36, 112, '0', '2', 182, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-14 06:48:23', '2022-07-19 05:23:10'),
(416, 30, 36, 113, '1', '2', 183, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-14 06:48:23', '2022-07-14 06:48:23'),
(417, 2, 37, 5, '0', '1', 5, 60, 60, 50, 70, 70, 80, 80, 90, 90, '2.50', '50.00', '0', '2022-07-14 08:48:21', '2022-10-10 08:52:16'),
(418, 2, 37, 6, '1', '1', 6, 60, 60, 50, 70, 70, 80, 80, 90, 90, '2.50', '50.00', '0', '2022-07-14 08:48:21', '2022-10-10 08:52:16'),
(419, 2, 37, 7, '0', '2', 7, 60, 60, 50, 70, 70, 80, 80, 90, 90, '2.50', '50.00', '0', '2022-07-14 08:48:21', '2022-10-10 08:52:16'),
(420, 2, 37, 8, '1', '2', 8, 60, 60, 50, 70, 70, 80, 80, 90, 90, '2.50', '50.00', '0', '2022-07-14 08:48:21', '2022-10-10 08:52:16'),
(421, 5, 37, 17, '0', '1', 101, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-07-14 08:48:21', '2022-07-14 08:48:21'),
(422, 5, 37, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-14 08:48:21', '2022-07-14 08:48:21'),
(423, 5, 37, 19, '0', '2', 103, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-07-14 08:48:21', '2022-07-14 08:48:21'),
(424, 5, 37, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-14 08:48:21', '2022-07-14 08:48:21'),
(429, 30, 37, 110, '0', '1', 180, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-14 08:48:21', '2022-07-14 08:48:21'),
(430, 30, 37, 111, '1', '1', 181, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-14 08:48:21', '2022-07-14 08:48:21'),
(431, 30, 37, 112, '0', '2', 182, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-14 08:48:21', '2022-07-14 08:48:21'),
(432, 30, 37, 113, '1', '2', 183, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-14 08:48:21', '2022-07-14 08:48:21'),
(433, 2, 38, 5, '0', '1', 5, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2022-07-14 08:55:25', '2022-07-14 08:55:25'),
(434, 2, 38, 6, '1', '1', 6, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2022-07-14 08:55:25', '2022-07-14 08:55:25'),
(435, 2, 38, 7, '0', '2', 7, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2022-07-14 08:55:25', '2022-07-14 08:55:25'),
(436, 2, 38, 8, '1', '2', 8, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2022-07-14 08:55:25', '2022-07-14 08:55:25'),
(437, 5, 38, 17, '0', '1', 101, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-07-14 08:55:25', '2022-07-14 08:55:25'),
(438, 5, 38, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-14 08:55:25', '2022-07-14 08:55:25'),
(439, 5, 38, 19, '0', '2', 103, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-07-14 08:55:25', '2022-07-14 08:55:25'),
(440, 5, 38, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-14 08:55:25', '2022-07-14 08:55:25'),
(441, 25, 38, 98, '0', '1', 168, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-14 08:55:25', '2022-07-14 08:55:25'),
(442, 25, 38, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-14 08:55:25', '2022-07-14 08:55:25'),
(443, 25, 38, 100, '0', '2', 170, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-14 08:55:25', '2022-07-14 08:55:25'),
(444, 25, 38, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-14 08:55:25', '2022-07-14 08:55:25'),
(445, 30, 38, 110, '0', '1', 180, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-14 08:55:25', '2022-07-14 08:55:25'),
(446, 30, 38, 111, '1', '1', 181, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-14 08:55:25', '2022-07-14 08:55:25'),
(447, 30, 38, 112, '0', '2', 182, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-14 08:55:25', '2022-07-14 08:55:25'),
(448, 30, 38, 113, '1', '2', 183, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-14 08:55:25', '2022-07-14 08:55:25'),
(449, 5, 39, 17, '0', '1', 101, 145, 145, 145, 145, 145, 145, 145, 145, 145, '0.00', '0.00', '0', '2022-07-15 10:26:55', '2022-07-16 06:27:31'),
(450, 5, 39, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-15 10:26:55', '2022-07-15 10:26:55'),
(451, 5, 39, 19, '0', '2', 103, 145, 145, 145, 145, 145, 145, 145, 145, 145, '0.00', '0.00', '0', '2022-07-15 10:26:55', '2022-07-16 06:27:31'),
(452, 5, 39, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-15 10:26:55', '2022-07-15 10:26:55'),
(453, 25, 39, 98, '0', '1', 168, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-15 10:26:55', '2022-07-16 06:27:31'),
(454, 25, 39, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-15 10:26:55', '2022-07-15 10:26:55'),
(455, 25, 39, 100, '0', '2', 170, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-15 10:26:55', '2022-07-16 06:27:31'),
(456, 25, 39, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-15 10:26:55', '2022-07-15 10:26:55'),
(457, 30, 39, 110, '0', '1', 180, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-15 10:26:55', '2022-07-16 06:27:31'),
(458, 30, 39, 111, '1', '1', 181, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-15 10:26:55', '2022-07-15 10:26:55'),
(459, 30, 39, 112, '0', '2', 182, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-15 10:26:55', '2022-07-16 06:27:31'),
(460, 30, 39, 113, '1', '2', 183, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-15 10:26:55', '2022-07-15 10:26:55'),
(461, 2, 43, 5, '0', '1', 5, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-07-21 05:33:11', '2022-07-21 05:33:38'),
(462, 2, 43, 6, '1', '1', 6, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-07-21 05:33:11', '2022-07-21 05:33:38'),
(463, 2, 43, 7, '0', '2', 7, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-07-21 05:33:11', '2022-07-21 05:33:38'),
(464, 2, 43, 8, '1', '2', 8, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-07-21 05:33:11', '2022-07-21 05:33:38'),
(465, 5, 43, 17, '0', '1', 101, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-07-21 05:33:11', '2022-07-21 05:33:11'),
(466, 5, 43, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-21 05:33:11', '2022-07-21 05:33:11'),
(467, 5, 43, 19, '0', '2', 103, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-07-21 05:33:11', '2022-07-21 05:33:11'),
(468, 5, 43, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-21 05:33:11', '2022-07-21 05:33:11'),
(469, 25, 43, 98, '0', '1', 168, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-21 05:33:11', '2022-07-21 05:33:11'),
(470, 25, 43, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-21 05:33:11', '2022-07-21 05:33:11'),
(471, 25, 43, 100, '0', '2', 170, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-21 05:33:11', '2022-07-21 05:33:11'),
(472, 25, 43, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-21 05:33:11', '2022-07-21 05:33:11'),
(473, 30, 43, 110, '0', '1', 180, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-21 05:33:11', '2022-07-21 05:33:11'),
(474, 30, 43, 111, '1', '1', 181, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-21 05:33:11', '2022-07-21 05:33:11'),
(475, 30, 43, 112, '0', '2', 182, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-21 05:33:11', '2022-07-21 05:33:11'),
(476, 30, 43, 113, '1', '2', 183, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-21 05:33:11', '2022-07-21 05:33:11'),
(477, 6, 44, 21, '0', '2', 105, 175, 175, 175, 175, 175, 175, 175, 175, 175, '0.00', '0.00', '0', '2022-07-21 07:50:46', '2022-07-21 07:50:46'),
(478, 6, 44, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-21 07:50:46', '2022-07-21 07:50:46'),
(479, 6, 44, 23, '0', '4', 107, 175, 175, 175, 175, 175, 175, 175, 175, 175, '0.00', '0.00', '0', '2022-07-21 07:50:46', '2022-07-21 07:50:46'),
(480, 6, 44, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-21 07:50:46', '2022-07-21 07:50:46'),
(481, 24, 44, 102, '0', '2', 172, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-07-21 07:50:46', '2022-07-21 07:50:46'),
(482, 24, 44, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-21 07:50:46', '2022-07-21 07:50:46'),
(483, 24, 44, 104, '0', '4', 174, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-07-21 07:50:46', '2022-07-21 07:50:46'),
(484, 24, 44, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-21 07:50:46', '2022-07-21 07:50:46'),
(485, 37, 45, 158, '0', '6', 228, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-07-22 08:29:27', '2022-07-22 08:29:27'),
(486, 37, 45, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-22 08:29:27', '2022-07-22 08:29:27'),
(487, 38, 45, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-07-22 08:29:27', '2022-07-22 08:29:27'),
(488, 38, 45, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-22 08:29:27', '2022-07-22 08:29:27'),
(489, 40, 45, 164, '0', '6', 234, 180, 180, 180, 180, 180, 180, 180, 180, 180, '0.00', '0.00', '0', '2022-07-22 08:29:27', '2022-07-22 08:29:27'),
(490, 40, 45, 165, '1', '6', 235, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-22 08:29:27', '2022-07-22 08:29:27'),
(491, 5, 47, 17, '0', '1', 101, 140, 140, 140, 140, 140, 140, 140, 140, 140, '0.00', '0.00', '0', '2022-07-27 05:30:12', '2022-11-09 04:57:07'),
(492, 5, 47, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-27 05:30:12', '2022-07-27 05:30:12'),
(493, 5, 47, 19, '0', '2', 103, 140, 140, 140, 140, 140, 140, 140, 140, 140, '0.00', '0.00', '0', '2022-07-27 05:30:12', '2022-11-09 04:57:07'),
(494, 5, 47, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-27 05:30:12', '2022-07-27 05:30:12'),
(495, 25, 47, 98, '0', '1', 168, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-27 05:30:12', '2022-07-27 05:30:12'),
(496, 25, 47, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-27 05:30:12', '2022-07-27 05:30:12'),
(497, 25, 47, 100, '0', '2', 170, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-27 05:30:12', '2022-07-27 05:30:12'),
(498, 25, 47, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-27 05:30:12', '2022-07-27 05:30:12'),
(499, 30, 47, 110, '0', '1', 180, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-27 05:30:12', '2022-07-27 05:30:12'),
(500, 30, 47, 111, '1', '1', 181, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-27 05:30:12', '2022-07-27 05:30:12'),
(501, 30, 47, 112, '0', '2', 182, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-07-27 05:30:12', '2022-07-27 05:30:12'),
(502, 30, 47, 113, '1', '2', 183, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-27 05:30:12', '2022-07-27 05:30:12'),
(503, 6, 48, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-27 06:23:55', '2022-07-27 06:23:55'),
(504, 6, 48, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-27 06:23:55', '2022-07-27 06:23:55'),
(505, 6, 48, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-27 06:23:55', '2022-07-27 06:23:55'),
(506, 6, 48, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-27 06:23:55', '2022-07-27 06:23:55'),
(507, 24, 48, 102, '0', '2', 172, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-07-27 06:23:55', '2022-07-27 06:23:55'),
(508, 24, 48, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-27 06:23:55', '2022-07-27 06:23:55'),
(509, 24, 48, 104, '0', '4', 174, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-07-27 06:23:55', '2022-07-27 06:23:55'),
(510, 24, 48, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-27 06:23:55', '2022-07-27 06:23:55'),
(511, 29, 48, 114, '0', '2', 184, 159, 159, 159, 159, 159, 159, 159, 159, 159, '0.00', '0.00', '0', '2022-07-27 06:23:55', '2022-07-27 06:23:55'),
(512, 29, 48, 115, '1', '2', 185, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-27 06:23:55', '2022-07-27 06:23:55'),
(513, 29, 48, 116, '0', '4', 186, 159, 159, 159, 159, 159, 159, 159, 159, 159, '0.00', '0.00', '0', '2022-07-27 06:23:55', '2022-07-27 06:23:55'),
(514, 29, 48, 117, '1', '4', 187, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-27 06:23:55', '2022-07-27 06:23:55'),
(515, 37, 50, 158, '0', '6', 228, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2022-07-28 11:09:44', '2022-07-28 11:09:44'),
(516, 37, 50, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-28 11:09:44', '2022-07-28 11:09:44'),
(517, 38, 50, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-07-28 11:09:44', '2022-07-28 11:09:44'),
(518, 38, 50, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-28 11:09:44', '2022-07-28 11:09:44'),
(519, 40, 50, 164, '0', '6', 234, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-07-28 11:09:44', '2022-07-28 11:09:44'),
(520, 40, 50, 165, '1', '6', 235, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-07-28 11:09:44', '2022-07-28 11:09:44'),
(521, 20, 47, 88, '0', '1', 161, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-08-04 09:36:21', '2022-08-04 09:36:38'),
(522, 20, 47, 89, '1', '1', 162, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-08-04 09:36:21', '2022-08-04 09:36:38'),
(523, 20, 47, 90, '0', '2', 163, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-08-04 09:36:21', '2022-08-04 09:36:38'),
(524, 20, 47, 91, '1', '2', 164, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-08-04 09:36:21', '2022-08-04 09:36:38'),
(525, 6, 56, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-06 06:08:02', '2022-08-06 06:08:02'),
(526, 6, 56, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-06 06:08:03', '2022-08-06 06:08:03'),
(527, 6, 56, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-06 06:08:03', '2022-08-06 06:08:03'),
(528, 6, 56, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-06 06:08:04', '2022-08-06 06:08:04'),
(529, 21, 56, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '0.00', '0.00', '0', '2022-08-06 06:08:04', '2022-08-06 06:08:04'),
(530, 21, 56, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '0.00', '0.00', '0', '2022-08-06 06:08:04', '2022-08-06 06:08:04'),
(531, 21, 56, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '0.00', '0.00', '0', '2022-08-06 06:08:05', '2022-08-06 06:08:05'),
(532, 21, 56, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '0.00', '0.00', '0', '2022-08-06 06:08:05', '2022-08-06 06:08:05'),
(533, 24, 56, 102, '0', '2', 172, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-06 06:08:06', '2022-08-06 06:08:06'),
(534, 24, 56, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-06 06:08:06', '2022-08-06 06:08:06'),
(535, 24, 56, 104, '0', '4', 174, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-06 06:08:06', '2022-08-06 06:08:06'),
(536, 24, 56, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-06 06:08:07', '2022-08-06 06:08:07'),
(537, 6, 58, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-08 06:28:26', '2022-08-08 06:28:26'),
(538, 6, 58, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-08 06:28:26', '2022-08-08 06:28:26'),
(539, 6, 58, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-08 06:28:26', '2022-08-08 06:28:26'),
(540, 6, 58, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-08 06:28:26', '2022-08-08 06:28:26'),
(541, 2, 62, 5, '0', '1', 5, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-08-12 05:06:58', '2022-09-17 12:13:19'),
(542, 2, 62, 6, '1', '1', 6, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-08-12 05:06:58', '2022-09-17 12:13:19'),
(543, 2, 62, 7, '0', '2', 7, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-08-12 05:06:58', '2022-09-17 12:13:19'),
(544, 2, 62, 8, '1', '2', 8, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-08-12 05:06:58', '2022-09-17 12:13:19'),
(545, 5, 62, 17, '0', '1', 101, 140, 140, 140, 140, 140, 140, 140, 140, 140, '0.00', '0.00', '0', '2022-08-12 05:06:58', '2022-08-12 05:06:58'),
(546, 5, 62, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-12 05:06:58', '2022-08-12 05:06:58'),
(547, 5, 62, 19, '0', '2', 103, 140, 140, 140, 140, 140, 140, 140, 140, 140, '0.00', '0.00', '0', '2022-08-12 05:06:58', '2022-08-12 05:06:58'),
(548, 5, 62, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-12 05:06:58', '2022-08-12 05:06:58'),
(549, 25, 62, 98, '0', '1', 168, 100, 100, 100, 100, 100, 100, 100, 100, 100, '0.00', '0.00', '0', '2022-08-12 05:06:58', '2022-08-12 05:06:58'),
(550, 25, 62, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-12 05:06:58', '2022-08-12 05:06:58'),
(551, 25, 62, 100, '0', '2', 170, 100, 100, 100, 100, 100, 100, 100, 100, 100, '0.00', '0.00', '0', '2022-08-12 05:06:58', '2022-08-12 05:06:58'),
(552, 25, 62, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-12 05:06:58', '2022-08-12 05:06:58'),
(553, 6, 64, 21, '0', '2', 105, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-08-12 06:27:11', '2022-08-12 06:27:11'),
(554, 6, 64, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-12 06:27:11', '2022-08-12 06:27:11'),
(555, 6, 64, 23, '0', '4', 107, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-08-12 06:27:11', '2022-08-12 06:27:11'),
(556, 6, 64, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-12 06:27:11', '2022-08-12 06:27:11'),
(557, 24, 64, 102, '0', '2', 172, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-08-12 06:27:11', '2022-08-12 06:27:11'),
(558, 24, 64, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-12 06:27:11', '2022-08-12 06:27:11'),
(559, 24, 64, 104, '0', '4', 174, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-08-12 06:27:11', '2022-08-12 06:27:11'),
(560, 24, 64, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-12 06:27:11', '2022-08-12 06:27:11'),
(561, 37, 64, 158, '0', '6', 228, 175, 175, 175, 175, 175, 175, 175, 175, 175, '0.00', '0.00', '0', '2022-08-12 06:27:11', '2022-08-12 06:27:11'),
(562, 37, 64, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-12 06:27:11', '2022-08-12 06:27:11'),
(563, 38, 64, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-08-12 06:27:11', '2022-08-12 06:27:11'),
(564, 38, 64, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-12 06:27:11', '2022-08-12 06:27:11'),
(565, 6, 65, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-16 09:42:21', '2022-08-16 09:42:21'),
(566, 6, 65, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-16 09:42:21', '2022-08-16 09:42:21'),
(567, 6, 65, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-16 09:42:21', '2022-08-16 09:42:21'),
(568, 6, 65, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-16 09:42:21', '2022-08-16 09:42:21'),
(569, 21, 65, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-08-16 09:42:21', '2022-08-16 09:42:40'),
(570, 21, 65, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-08-16 09:42:21', '2022-08-16 09:42:40'),
(571, 21, 65, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-08-16 09:42:21', '2022-08-16 09:42:40'),
(572, 21, 65, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-08-16 09:42:21', '2022-08-16 09:42:40'),
(573, 24, 65, 102, '0', '2', 172, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-08-16 09:42:21', '2022-08-16 09:42:21'),
(574, 24, 65, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-16 09:42:21', '2022-08-16 09:42:21'),
(575, 24, 65, 104, '0', '4', 174, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-08-16 09:42:21', '2022-08-16 09:42:21'),
(576, 24, 65, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-16 09:42:21', '2022-08-16 09:42:21'),
(577, 6, 74, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-22 11:41:28', '2022-08-22 11:41:28'),
(578, 6, 74, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-22 11:41:28', '2022-08-22 11:41:28'),
(579, 6, 74, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-22 11:41:28', '2022-08-22 11:41:28'),
(580, 6, 74, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-22 11:41:28', '2022-08-22 11:41:28'),
(581, 24, 74, 102, '0', '2', 172, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-22 11:41:28', '2022-08-22 11:41:28'),
(582, 24, 74, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-22 11:41:28', '2022-08-22 11:41:28'),
(583, 24, 74, 104, '0', '4', 174, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-22 11:41:28', '2022-08-22 11:41:28'),
(584, 24, 74, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-22 11:41:28', '2022-08-22 11:41:28'),
(585, 21, 74, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-08-22 11:55:33', '2022-08-22 11:55:52'),
(586, 21, 74, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-08-22 11:55:33', '2022-08-22 11:55:52'),
(587, 21, 74, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-08-22 11:55:33', '2022-08-22 11:55:52'),
(588, 21, 74, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-08-22 11:55:33', '2022-08-22 11:55:52'),
(589, 37, 73, 158, '0', '6', 228, 210, 210, 210, 210, 210, 210, 210, 210, 210, '0.00', '0.00', '0', '2022-08-23 04:50:46', '2022-08-23 04:50:46'),
(590, 37, 73, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-23 04:50:46', '2022-08-23 04:50:46'),
(591, 38, 73, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-08-23 04:50:46', '2022-08-23 04:50:46'),
(592, 38, 73, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-23 04:50:46', '2022-08-23 04:50:46'),
(593, 21, 75, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-08-23 05:06:22', '2022-08-23 05:06:37'),
(594, 21, 75, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-08-23 05:06:22', '2022-08-23 05:06:37'),
(595, 21, 75, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-08-23 05:06:22', '2022-08-23 05:06:37'),
(596, 21, 75, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-08-23 05:06:22', '2022-08-23 05:06:37'),
(597, 24, 75, 102, '0', '2', 172, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-23 05:06:22', '2022-08-23 05:06:22'),
(598, 24, 75, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-23 05:06:22', '2022-08-23 05:06:22'),
(599, 24, 75, 104, '0', '4', 174, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-23 05:06:22', '2022-08-23 05:06:22'),
(600, 24, 75, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-23 05:06:22', '2022-08-23 05:06:22'),
(601, 5, 77, 17, '0', '1', 101, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-08-24 12:20:57', '2022-08-24 12:20:57'),
(602, 5, 77, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-24 12:20:57', '2022-08-24 12:20:57'),
(603, 5, 77, 19, '0', '2', 103, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-08-24 12:20:57', '2022-08-24 12:20:57'),
(604, 5, 77, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-24 12:20:57', '2022-08-24 12:20:57'),
(605, 25, 77, 98, '0', '1', 168, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-08-24 12:20:57', '2022-08-24 12:20:57'),
(606, 25, 77, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-24 12:20:57', '2022-08-24 12:20:57'),
(607, 25, 77, 100, '0', '2', 170, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-08-24 12:20:57', '2022-08-24 12:20:57'),
(608, 25, 77, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-24 12:20:57', '2022-08-24 12:20:57'),
(609, 20, 77, 88, '0', '1', 161, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-08-24 12:23:04', '2022-08-24 12:23:20'),
(610, 20, 77, 89, '1', '1', 162, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-08-24 12:23:04', '2022-08-24 12:23:20'),
(611, 20, 77, 90, '0', '2', 163, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-08-24 12:23:04', '2022-08-24 12:23:20'),
(612, 20, 77, 91, '1', '2', 164, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-08-24 12:23:04', '2022-08-24 12:23:20'),
(613, 39, 50, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-08-29 06:28:30', '2022-08-29 06:28:30'),
(614, 39, 50, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 06:28:30', '2022-08-29 06:28:30'),
(615, 6, 50, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-29 06:29:29', '2022-08-29 06:29:29'),
(616, 6, 50, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 06:29:29', '2022-08-29 06:29:29'),
(617, 6, 50, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-29 06:29:29', '2022-08-29 06:29:29'),
(618, 6, 50, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 06:29:29', '2022-08-29 06:29:29'),
(619, 9, 50, 34, '0', '2', 117, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-29 06:29:29', '2022-08-29 06:29:29'),
(620, 9, 50, 35, '1', '2', 118, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 06:29:29', '2022-08-29 06:29:29'),
(621, 9, 50, 42, '0', '4', 119, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-29 06:29:29', '2022-08-29 06:29:29'),
(622, 9, 50, 43, '1', '4', 120, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 06:29:29', '2022-08-29 06:29:29'),
(623, 24, 50, 102, '0', '2', 172, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-08-29 06:29:29', '2022-08-29 06:29:29'),
(624, 24, 50, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 06:29:29', '2022-08-29 06:29:29'),
(625, 24, 50, 104, '0', '4', 174, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-08-29 06:29:29', '2022-08-29 06:29:29'),
(626, 24, 50, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 06:29:29', '2022-08-29 06:29:29'),
(627, 14, 82, 60, '0', '1', 137, 65, 65, 55, 75, 75, 85, 85, 90, 90, '50.00', '2.50', '0', '2022-08-29 07:35:09', '2023-01-06 08:13:06'),
(628, 14, 82, 61, '1', '1', 138, 65, 65, 55, 75, 75, 85, 85, 90, 90, '50.00', '2.50', '0', '2022-08-29 07:35:09', '2023-01-06 08:13:06'),
(629, 14, 82, 62, '0', '2', 139, 65, 65, 55, 75, 75, 85, 85, 90, 90, '50.00', '2.50', '0', '2022-08-29 07:35:09', '2023-01-06 08:13:06'),
(630, 14, 82, 63, '1', '2', 140, 65, 65, 55, 75, 75, 85, 85, 90, 90, '50.00', '2.50', '0', '2022-08-29 07:35:09', '2023-01-06 08:13:06'),
(631, 16, 82, 72, '0', '1', 145, 65, 65, 55, 75, 75, 85, 85, 90, 90, '50.00', '2.50', '0', '2022-08-29 07:35:09', '2023-01-06 08:13:06'),
(632, 16, 82, 73, '1', '1', 146, 65, 65, 55, 75, 75, 85, 85, 90, 90, '50.00', '2.50', '0', '2022-08-29 07:35:09', '2023-01-06 08:13:06'),
(633, 16, 82, 74, '0', '2', 147, 65, 65, 55, 75, 75, 85, 85, 90, 90, '50.00', '2.50', '0', '2022-08-29 07:35:09', '2023-01-06 08:13:06'),
(634, 16, 82, 75, '1', '2', 148, 65, 65, 55, 75, 75, 85, 85, 90, 90, '50.00', '2.50', '0', '2022-08-29 07:35:09', '2023-01-06 08:13:06'),
(635, 20, 82, 88, '0', '1', 161, 65, 65, 55, 75, 75, 85, 85, 100, 110, '50.00', '2.50', '0', '2022-08-29 07:35:09', '2023-01-06 08:13:06'),
(636, 20, 82, 89, '1', '1', 162, 65, 65, 55, 75, 75, 85, 85, 100, 110, '50.00', '2.50', '0', '2022-08-29 07:35:09', '2023-01-06 08:13:06'),
(637, 20, 82, 90, '0', '2', 163, 65, 65, 55, 75, 75, 85, 85, 100, 110, '50.00', '2.50', '0', '2022-08-29 07:35:09', '2023-01-06 08:13:06'),
(638, 20, 82, 91, '1', '2', 164, 65, 65, 55, 75, 75, 85, 85, 100, 110, '50.00', '2.50', '0', '2022-08-29 07:35:09', '2023-01-06 08:13:06'),
(639, 23, 82, 134, '0', '1', 204, 48, 48, 45, 60, 60, 63, 63, 70, 70, '50.00', '2.50', '0', '2022-08-29 07:35:09', '2022-08-29 07:35:37'),
(640, 23, 82, 135, '1', '1', 205, 48, 48, 45, 60, 60, 63, 63, 70, 70, '50.00', '2.50', '0', '2022-08-29 07:35:09', '2022-08-29 07:35:37'),
(641, 23, 82, 136, '0', '2', 206, 48, 48, 45, 60, 60, 63, 63, 70, 70, '50.00', '2.50', '0', '2022-08-29 07:35:09', '2022-08-29 07:35:37'),
(642, 23, 82, 137, '1', '2', 207, 48, 48, 45, 60, 60, 63, 63, 70, 70, '50.00', '2.50', '0', '2022-08-29 07:35:09', '2022-08-29 07:35:37'),
(643, 5, 83, 17, '0', '1', 101, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(644, 5, 83, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(645, 5, 83, 19, '0', '2', 103, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(646, 5, 83, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(647, 6, 83, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(648, 6, 83, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(649, 6, 83, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(650, 6, 83, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(651, 8, 83, 29, '0', '1', 113, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(652, 8, 83, 30, '1', '1', 114, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(653, 8, 83, 31, '0', '2', 115, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(654, 8, 83, 33, '1', '2', 116, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(655, 9, 83, 34, '0', '2', 117, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(656, 9, 83, 35, '1', '2', 118, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(657, 9, 83, 42, '0', '4', 119, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(658, 9, 83, 43, '1', '4', 120, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(659, 25, 83, 98, '0', '1', 168, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(660, 25, 83, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(661, 25, 83, 100, '0', '2', 170, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(662, 25, 83, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(663, 24, 83, 102, '0', '2', 172, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(664, 24, 83, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(665, 24, 83, 104, '0', '4', 174, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(666, 24, 83, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(667, 37, 83, 158, '0', '6', 228, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(668, 37, 83, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(669, 38, 83, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(670, 38, 83, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(671, 39, 83, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(672, 39, 83, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-08-29 08:12:02', '2022-08-29 08:12:02'),
(673, 37, 89, 158, '0', '6', 228, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-02 08:55:28', '2022-09-02 08:55:28'),
(674, 37, 89, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-02 08:55:28', '2022-09-02 08:55:28'),
(675, 38, 89, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-09-02 08:55:28', '2022-09-02 08:55:28'),
(676, 38, 89, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-02 08:55:28', '2022-09-02 08:55:28'),
(677, 37, 90, 158, '0', '6', 228, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-05 05:45:05', '2022-09-05 05:45:05'),
(678, 37, 90, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-05 05:45:05', '2022-09-05 05:45:05'),
(679, 38, 90, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-09-05 05:45:05', '2022-09-05 05:45:05'),
(680, 38, 90, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-05 05:45:05', '2022-09-05 05:45:05'),
(681, 39, 90, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-09-05 05:45:05', '2022-09-05 05:45:05'),
(682, 39, 90, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-05 05:45:05', '2022-09-05 05:45:05'),
(683, 6, 95, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-06 10:56:13', '2022-09-06 10:56:13'),
(684, 6, 95, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-06 10:56:13', '2022-09-06 10:56:13'),
(685, 6, 95, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-06 10:56:13', '2022-09-06 10:56:13'),
(686, 6, 95, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-06 10:56:13', '2022-09-06 10:56:13'),
(687, 21, 95, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-06 10:56:13', '2022-09-06 10:56:31'),
(688, 21, 95, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-06 10:56:13', '2022-09-06 10:56:31'),
(689, 21, 95, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-06 10:56:13', '2022-09-06 10:56:31'),
(690, 21, 95, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-06 10:56:13', '2022-09-06 10:56:31'),
(691, 24, 95, 102, '0', '2', 172, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-06 10:56:13', '2022-09-06 10:56:13'),
(692, 24, 95, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-06 10:56:13', '2022-09-06 10:56:13'),
(693, 24, 95, 104, '0', '4', 174, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-06 10:56:13', '2022-09-06 10:56:13'),
(694, 24, 95, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-06 10:56:13', '2022-09-06 10:56:13'),
(695, 6, 75, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-07 03:59:58', '2022-09-07 03:59:58'),
(696, 6, 75, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-07 03:59:58', '2022-09-07 03:59:58'),
(697, 6, 75, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-07 03:59:58', '2022-09-07 03:59:58'),
(698, 6, 75, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-07 03:59:58', '2022-09-07 03:59:58'),
(699, 6, 43, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-07 04:02:02', '2022-09-07 04:02:02'),
(700, 6, 43, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-07 04:02:02', '2022-09-07 04:02:02'),
(701, 6, 43, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-07 04:02:02', '2022-09-07 04:02:02'),
(702, 6, 43, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-07 04:02:02', '2022-09-07 04:02:02'),
(703, 21, 43, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-07 04:02:02', '2022-09-07 04:02:20'),
(704, 21, 43, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-07 04:02:02', '2022-09-07 04:02:20'),
(705, 21, 43, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-07 04:02:02', '2022-09-07 04:02:20'),
(706, 21, 43, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-07 04:02:02', '2022-09-07 04:02:20'),
(707, 24, 43, 102, '0', '2', 172, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-07 04:02:02', '2022-09-07 04:02:02'),
(708, 24, 43, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-07 04:02:02', '2022-09-07 04:02:02'),
(709, 24, 43, 104, '0', '4', 174, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-07 04:02:02', '2022-09-07 04:02:02'),
(710, 24, 43, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-07 04:02:02', '2022-09-07 04:02:02'),
(711, 6, 98, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-07 05:49:39', '2022-09-07 05:49:39'),
(712, 6, 98, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-07 05:49:39', '2022-09-07 05:49:39'),
(713, 6, 98, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-07 05:49:40', '2022-09-07 05:49:40'),
(714, 6, 98, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-07 05:49:40', '2022-09-07 05:49:40'),
(715, 21, 98, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-07 05:49:41', '2022-09-07 05:50:23'),
(716, 21, 98, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-07 05:49:41', '2022-09-07 05:50:23'),
(717, 21, 98, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-07 05:49:41', '2022-09-07 05:50:23'),
(718, 21, 98, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-07 05:49:42', '2022-09-07 05:50:23'),
(719, 24, 98, 102, '0', '2', 172, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-07 05:49:42', '2022-09-07 05:49:42'),
(720, 24, 98, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-07 05:49:42', '2022-09-07 05:49:42'),
(721, 24, 98, 104, '0', '4', 174, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-07 05:49:42', '2022-09-07 05:49:42'),
(722, 24, 98, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-07 05:49:43', '2022-09-07 05:49:43'),
(723, 6, 103, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-09 04:47:38', '2022-09-09 04:47:38'),
(724, 6, 103, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-09 04:47:38', '2022-09-09 04:47:38'),
(725, 6, 103, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-09 04:47:38', '2022-09-09 04:47:38'),
(726, 6, 103, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-09 04:47:38', '2022-09-09 04:47:38'),
(727, 24, 103, 102, '0', '2', 172, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-09 04:47:38', '2022-09-09 04:47:38'),
(728, 24, 103, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-09 04:47:38', '2022-09-09 04:47:38'),
(729, 24, 103, 104, '0', '4', 174, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-09 04:47:38', '2022-09-09 04:47:38'),
(730, 24, 103, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-09 04:47:38', '2022-09-09 04:47:38'),
(731, 6, 105, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-12 05:34:40', '2022-09-12 05:34:40'),
(732, 6, 105, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-12 05:34:40', '2022-09-12 05:34:40'),
(733, 6, 105, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-12 05:34:40', '2022-09-12 05:34:40'),
(734, 6, 105, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-12 05:34:40', '2022-09-12 05:34:40'),
(735, 24, 105, 102, '0', '2', 172, 200, 200, 200, 200, 200, 200, 200, 200, 160, '0.00', '0.00', '0', '2022-09-12 05:34:40', '2022-09-12 05:34:40'),
(736, 24, 105, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-12 05:34:40', '2022-09-12 05:34:40'),
(737, 24, 105, 104, '0', '4', 174, 200, 200, 200, 200, 200, 200, 200, 200, 160, '0.00', '0.00', '0', '2022-09-12 05:34:40', '2022-09-12 05:34:40'),
(738, 24, 105, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-12 05:34:40', '2022-09-12 05:34:40'),
(739, 6, 101, 21, '0', '2', 105, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-09-12 15:30:56', '2022-09-12 15:30:56'),
(740, 6, 101, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-12 15:30:56', '2022-09-12 15:30:56'),
(741, 6, 101, 23, '0', '4', 107, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-09-12 15:30:56', '2022-09-12 15:30:56');
INSERT INTO `sender_manage_price` (`id`, `logistic_id`, `sender_id`, `manage_price_id`, `shipment_type`, `rule`, `rule_index`, `within_city`, `within_state`, `within_zone`, `metro`, `metro_2`, `rest_of_india`, `rest_of_india_2`, `special_zone`, `jammu_kashmir`, `cod_price`, `cod_percentage`, `is_cod_charge_return`, `created_at`, `updated_at`) VALUES
(742, 6, 101, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-12 15:30:56', '2022-09-12 15:30:56'),
(743, 24, 101, 102, '0', '2', 172, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-09-12 15:30:56', '2022-09-12 15:30:56'),
(744, 24, 101, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-12 15:30:56', '2022-09-12 15:30:56'),
(745, 24, 101, 104, '0', '4', 174, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-09-12 15:30:56', '2022-09-12 15:30:56'),
(746, 24, 101, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-12 15:30:56', '2022-09-12 15:30:56'),
(747, 5, 108, 17, '0', '1', 101, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-09-14 06:11:49', '2022-09-14 06:11:49'),
(748, 5, 108, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-14 06:11:49', '2022-09-14 06:11:49'),
(749, 5, 108, 19, '0', '2', 103, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-09-14 06:11:49', '2022-09-14 06:11:49'),
(750, 5, 108, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-14 06:11:49', '2022-09-14 06:11:49'),
(751, 25, 108, 98, '0', '1', 168, 120, 120, 120, 120, 120, 120, 120, 120, 120, '0.00', '0.00', '0', '2022-09-14 06:11:49', '2022-09-14 06:11:49'),
(752, 25, 108, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-14 06:11:49', '2022-09-14 06:11:49'),
(753, 25, 108, 100, '0', '2', 170, 120, 120, 120, 120, 120, 120, 120, 120, 120, '0.00', '0.00', '0', '2022-09-14 06:11:49', '2022-09-14 06:11:49'),
(754, 25, 108, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-14 06:11:49', '2022-09-14 06:11:49'),
(755, 5, 106, 17, '0', '1', 101, 140, 140, 140, 140, 140, 140, 140, 140, 140, '0.00', '0.00', '0', '2022-09-16 05:24:24', '2022-09-16 05:24:24'),
(756, 5, 106, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-16 05:24:24', '2022-09-16 05:24:24'),
(757, 5, 106, 19, '0', '2', 103, 140, 140, 140, 140, 140, 140, 140, 140, 140, '0.00', '0.00', '0', '2022-09-16 05:24:24', '2022-09-16 05:24:24'),
(758, 5, 106, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-16 05:24:24', '2022-09-16 05:24:24'),
(759, 25, 106, 98, '0', '1', 168, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-09-16 05:24:24', '2022-09-16 05:24:24'),
(760, 25, 106, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-16 05:24:24', '2022-09-16 05:24:24'),
(761, 25, 106, 100, '0', '2', 170, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-09-16 05:24:24', '2022-09-16 05:24:24'),
(762, 25, 106, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-16 05:24:24', '2022-09-16 05:24:24'),
(763, 8, 77, 29, '0', '1', 113, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-09-16 09:16:32', '2022-09-16 09:16:32'),
(764, 8, 77, 30, '1', '1', 114, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-16 09:16:32', '2022-09-16 09:16:32'),
(765, 8, 77, 31, '0', '2', 115, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-09-16 09:16:32', '2022-09-16 09:16:32'),
(766, 8, 77, 33, '1', '2', 116, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-16 09:16:32', '2022-09-16 09:16:32'),
(767, 6, 113, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-19 11:38:13', '2022-09-19 11:38:13'),
(768, 6, 113, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-19 11:38:13', '2022-09-19 11:38:13'),
(769, 6, 113, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-19 11:38:13', '2022-09-19 11:38:13'),
(770, 6, 113, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-19 11:38:13', '2022-09-19 11:38:13'),
(771, 24, 113, 102, '0', '2', 172, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-09-19 11:38:13', '2022-09-19 11:38:13'),
(772, 24, 113, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-19 11:38:13', '2022-09-19 11:38:13'),
(773, 24, 113, 104, '0', '4', 174, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-09-19 11:38:13', '2022-09-19 11:38:13'),
(774, 24, 113, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-19 11:38:13', '2022-09-19 11:38:13'),
(775, 6, 116, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-20 04:32:41', '2022-09-20 04:32:41'),
(776, 6, 116, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-20 04:32:41', '2022-09-20 04:32:41'),
(777, 6, 116, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-20 04:32:41', '2022-09-20 04:32:41'),
(778, 6, 116, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-20 04:32:41', '2022-09-20 04:32:41'),
(779, 24, 116, 102, '0', '2', 172, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-20 04:32:41', '2022-09-20 04:32:41'),
(780, 24, 116, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-20 04:32:41', '2022-09-20 04:32:41'),
(781, 24, 116, 104, '0', '4', 174, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-20 04:32:41', '2022-09-20 04:32:41'),
(782, 24, 116, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-20 04:32:41', '2022-09-20 04:32:41'),
(783, 9, 65, 34, '0', '2', 117, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-20 05:43:06', '2022-09-20 05:43:06'),
(784, 9, 65, 35, '1', '2', 118, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-20 05:43:06', '2022-09-20 05:43:06'),
(785, 9, 65, 42, '0', '4', 119, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-20 05:43:06', '2022-09-20 05:43:06'),
(786, 9, 65, 43, '1', '4', 120, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-20 05:43:06', '2022-09-20 05:43:06'),
(787, 21, 105, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-22 04:58:43', '2022-09-22 04:59:01'),
(788, 21, 105, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-22 04:58:43', '2022-09-22 04:59:01'),
(789, 21, 105, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-22 04:58:43', '2022-09-22 04:59:01'),
(790, 21, 105, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-22 04:58:43', '2022-09-22 04:59:01'),
(791, 37, 121, 158, '0', '6', 228, 210, 210, 210, 210, 210, 210, 210, 210, 210, '0.00', '0.00', '0', '2022-09-22 07:40:04', '2022-09-22 07:40:04'),
(792, 37, 121, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-22 07:40:04', '2022-09-22 07:40:04'),
(793, 38, 121, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-09-22 07:40:04', '2022-09-22 07:40:04'),
(794, 38, 121, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-22 07:40:04', '2022-09-22 07:40:04'),
(795, 39, 121, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-09-22 07:40:04', '2022-09-22 07:40:04'),
(796, 39, 121, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-22 07:40:04', '2022-09-22 07:40:04'),
(797, 37, 120, 158, '0', '6', 228, 210, 210, 210, 210, 210, 210, 210, 210, 210, '0.00', '0.00', '0', '2022-09-22 07:44:24', '2022-09-22 07:44:24'),
(798, 37, 120, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-22 07:44:24', '2022-09-22 07:44:24'),
(799, 38, 120, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-09-22 07:44:24', '2022-09-22 07:44:24'),
(800, 38, 120, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-22 07:44:24', '2022-09-22 07:44:24'),
(801, 39, 120, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-09-22 07:44:24', '2022-09-22 07:44:24'),
(802, 39, 120, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-22 07:44:24', '2022-09-22 07:44:24'),
(803, 6, 122, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-22 09:53:59', '2022-09-22 09:53:59'),
(804, 6, 122, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-22 09:53:59', '2022-09-22 09:53:59'),
(805, 6, 122, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-22 09:53:59', '2022-09-22 09:53:59'),
(806, 6, 122, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-22 09:53:59', '2022-09-22 09:53:59'),
(807, 21, 122, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-22 09:53:59', '2022-09-22 09:57:18'),
(808, 21, 122, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-22 09:53:59', '2022-09-22 09:57:18'),
(809, 21, 122, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-22 09:53:59', '2022-09-22 09:57:18'),
(810, 21, 122, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-22 09:53:59', '2022-09-22 09:57:18'),
(811, 24, 122, 102, '0', '2', 172, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-22 09:53:59', '2022-09-22 09:57:18'),
(812, 24, 122, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-22 09:53:59', '2022-09-22 09:53:59'),
(813, 24, 122, 104, '0', '4', 174, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-22 09:53:59', '2022-09-22 09:57:18'),
(814, 24, 122, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-22 09:53:59', '2022-09-22 09:53:59'),
(815, 9, 31, 34, '0', '2', 117, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-22 10:13:12', '2022-09-22 10:13:12'),
(816, 9, 31, 35, '1', '2', 118, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-22 10:13:12', '2022-09-22 10:13:12'),
(817, 9, 31, 42, '0', '4', 119, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-22 10:13:12', '2022-09-22 10:13:12'),
(818, 9, 31, 43, '1', '4', 120, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-22 10:13:12', '2022-09-22 10:13:12'),
(819, 21, 103, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-22 10:38:59', '2022-09-22 10:39:18'),
(820, 21, 103, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-22 10:38:59', '2022-09-22 10:39:18'),
(821, 21, 103, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-22 10:38:59', '2022-09-22 10:39:18'),
(822, 21, 103, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-22 10:38:59', '2022-09-22 10:39:18'),
(823, 6, 123, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-22 11:40:42', '2022-09-22 11:40:42'),
(824, 6, 123, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-22 11:40:42', '2022-09-22 11:40:42'),
(825, 6, 123, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-09-22 11:40:42', '2022-09-22 11:40:42'),
(826, 6, 123, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-22 11:40:42', '2022-09-22 11:40:42'),
(827, 21, 123, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-22 11:40:42', '2022-09-22 11:40:56'),
(828, 21, 123, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-22 11:40:42', '2022-09-22 11:40:56'),
(829, 21, 123, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-22 11:40:42', '2022-09-22 11:40:56'),
(830, 21, 123, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-22 11:40:42', '2022-09-22 11:40:56'),
(831, 21, 116, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-23 08:38:02', '2022-09-23 08:38:30'),
(832, 21, 116, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-23 08:38:04', '2022-09-23 08:38:30'),
(833, 21, 116, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-23 08:38:05', '2022-09-23 08:38:30'),
(834, 21, 116, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-23 08:38:06', '2022-09-23 08:38:30'),
(835, 5, 113, 17, '0', '1', 101, 145, 145, 145, 145, 145, 145, 145, 145, 145, '0.00', '0.00', '0', '2022-09-26 05:56:05', '2022-09-26 05:56:05'),
(836, 5, 113, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-26 05:56:05', '2022-09-26 05:56:05'),
(837, 5, 113, 19, '0', '2', 103, 145, 145, 145, 145, 145, 145, 145, 145, 145, '0.00', '0.00', '0', '2022-09-26 05:56:05', '2022-09-26 05:56:05'),
(838, 5, 113, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-26 05:56:05', '2022-09-26 05:56:05'),
(839, 25, 113, 98, '0', '1', 168, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-09-26 05:56:05', '2022-09-26 05:56:05'),
(840, 25, 113, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-26 05:56:05', '2022-09-26 05:56:05'),
(841, 25, 113, 100, '0', '2', 170, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-09-26 05:56:05', '2022-09-26 05:56:05'),
(842, 25, 113, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-26 05:56:05', '2022-09-26 05:56:05'),
(843, 6, 133, 21, '0', '2', 105, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-09-26 06:08:23', '2022-10-04 06:54:46'),
(844, 6, 133, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-26 06:08:23', '2022-09-26 06:08:23'),
(845, 6, 133, 23, '0', '4', 107, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-09-26 06:08:23', '2022-10-04 06:54:46'),
(846, 6, 133, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-26 06:08:23', '2022-09-26 06:08:23'),
(847, 24, 133, 102, '0', '2', 172, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-09-26 06:08:23', '2022-10-04 06:53:25'),
(848, 24, 133, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-26 06:08:23', '2022-09-26 06:08:23'),
(849, 24, 133, 104, '0', '4', 174, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-09-26 06:08:23', '2022-10-04 06:53:25'),
(850, 24, 133, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-26 06:08:23', '2022-09-26 06:08:23'),
(851, 5, 131, 17, '0', '1', 101, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-09-26 12:40:34', '2022-09-26 12:40:34'),
(852, 5, 131, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-26 12:40:34', '2022-09-26 12:40:34'),
(853, 5, 131, 19, '0', '2', 103, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-09-26 12:40:34', '2022-09-26 12:40:34'),
(854, 5, 131, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-26 12:40:34', '2022-09-26 12:40:34'),
(855, 20, 131, 88, '0', '1', 161, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-09-26 12:40:34', '2022-09-26 12:40:59'),
(856, 20, 131, 89, '1', '1', 162, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-09-26 12:40:34', '2022-09-26 12:40:59'),
(857, 20, 131, 90, '0', '2', 163, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-09-26 12:40:34', '2022-09-26 12:40:59'),
(858, 20, 131, 91, '1', '2', 164, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-09-26 12:40:34', '2022-09-26 12:40:59'),
(859, 25, 131, 98, '0', '1', 168, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-09-26 12:40:34', '2022-09-26 12:40:34'),
(860, 25, 131, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-26 12:40:34', '2022-09-26 12:40:34'),
(861, 25, 131, 100, '0', '2', 170, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-09-26 12:40:34', '2022-09-26 12:40:34'),
(862, 25, 131, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-26 12:40:34', '2022-09-26 12:40:34'),
(863, 37, 137, 158, '0', '6', 228, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-09-28 11:26:32', '2022-09-29 06:05:40'),
(864, 37, 137, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-28 11:26:32', '2022-09-28 11:26:32'),
(865, 38, 137, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-09-28 11:26:32', '2022-09-28 11:26:32'),
(866, 38, 137, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-28 11:26:32', '2022-09-28 11:26:32'),
(867, 39, 137, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-09-28 11:26:32', '2022-09-28 11:26:32'),
(868, 39, 137, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-28 11:26:32', '2022-09-28 11:26:32'),
(869, 21, 58, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-29 05:52:17', '2022-09-29 05:53:16'),
(870, 21, 58, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-29 05:52:17', '2022-09-29 05:53:16'),
(871, 21, 58, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-29 05:52:17', '2022-09-29 05:53:16'),
(872, 21, 58, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-09-29 05:52:17', '2022-09-29 05:53:16'),
(873, 5, 141, 17, '0', '1', 101, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-09-30 07:43:10', '2022-09-30 07:43:10'),
(874, 5, 141, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-30 07:43:10', '2022-09-30 07:43:10'),
(875, 5, 141, 19, '0', '2', 103, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-09-30 07:43:10', '2022-09-30 07:43:10'),
(876, 5, 141, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-30 07:43:10', '2022-09-30 07:43:10'),
(877, 25, 141, 98, '0', '1', 168, 120, 120, 120, 120, 120, 120, 120, 120, 120, '0.00', '0.00', '0', '2022-09-30 07:43:10', '2022-09-30 07:43:10'),
(878, 25, 141, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-30 07:43:10', '2022-09-30 07:43:10'),
(879, 25, 141, 100, '0', '2', 170, 120, 120, 120, 120, 120, 120, 120, 120, 120, '0.00', '0.00', '0', '2022-09-30 07:43:10', '2022-09-30 07:43:10'),
(880, 25, 141, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-30 07:43:10', '2022-09-30 07:43:10'),
(881, 5, 142, 17, '0', '1', 101, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-09-30 07:43:57', '2022-09-30 07:43:57'),
(882, 5, 142, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-30 07:43:57', '2022-09-30 07:43:57'),
(883, 5, 142, 19, '0', '2', 103, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-09-30 07:43:57', '2022-09-30 07:43:57'),
(884, 5, 142, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-30 07:43:57', '2022-09-30 07:43:57'),
(885, 25, 142, 98, '0', '1', 168, 120, 120, 120, 120, 120, 120, 120, 120, 120, '0.00', '0.00', '0', '2022-09-30 07:43:57', '2022-09-30 07:43:57'),
(886, 25, 142, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-30 07:43:57', '2022-09-30 07:43:57'),
(887, 25, 142, 100, '0', '2', 170, 120, 120, 120, 120, 120, 120, 120, 120, 120, '0.00', '0.00', '0', '2022-09-30 07:43:57', '2022-09-30 07:43:57'),
(888, 25, 142, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-09-30 07:43:57', '2022-09-30 07:43:57'),
(889, 8, 113, 29, '0', '1', 113, 145, 145, 145, 145, 145, 145, 145, 145, 145, '0.00', '0.00', '0', '2022-10-03 04:39:05', '2022-10-03 04:39:05'),
(890, 8, 113, 30, '1', '1', 114, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-03 04:39:05', '2022-10-03 04:39:05'),
(891, 8, 113, 31, '0', '2', 115, 145, 145, 145, 145, 145, 145, 145, 145, 145, '0.00', '0.00', '0', '2022-10-03 04:39:05', '2022-10-03 04:39:05'),
(892, 8, 113, 33, '1', '2', 116, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-03 04:39:05', '2022-10-03 04:39:05'),
(893, 24, 148, 102, '0', '2', 172, 170, 170, 170, 170, 170, 170, 170, 170, 170, '0.00', '0.00', '0', '2022-10-04 08:51:37', '2022-10-04 08:51:37'),
(894, 24, 148, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-04 08:51:37', '2022-10-04 08:51:37'),
(895, 24, 148, 104, '0', '4', 174, 170, 170, 170, 170, 170, 170, 170, 170, 170, '0.00', '0.00', '0', '2022-10-04 08:51:37', '2022-10-04 08:51:37'),
(896, 24, 148, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-04 08:51:37', '2022-10-04 08:51:37'),
(897, 6, 151, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-10-06 16:27:15', '2022-10-06 16:27:15'),
(898, 6, 151, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-06 16:27:15', '2022-10-06 16:27:15'),
(899, 6, 151, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-10-06 16:27:15', '2022-10-06 16:27:15'),
(900, 6, 151, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-06 16:27:15', '2022-10-06 16:27:15'),
(901, 21, 151, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-06 16:27:15', '2022-10-06 16:27:33'),
(902, 21, 151, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-06 16:27:15', '2022-10-06 16:27:33'),
(903, 21, 151, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-06 16:27:15', '2022-10-06 16:27:33'),
(904, 21, 151, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-06 16:27:15', '2022-10-06 16:27:33'),
(905, 6, 152, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-10-06 16:29:02', '2022-10-06 16:29:02'),
(906, 6, 152, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-06 16:29:02', '2022-10-06 16:29:02'),
(907, 6, 152, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-10-06 16:29:02', '2022-10-06 16:29:02'),
(908, 6, 152, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-06 16:29:02', '2022-10-06 16:29:02'),
(909, 21, 152, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-06 16:29:02', '2022-10-06 16:29:38'),
(910, 21, 152, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-06 16:29:02', '2022-10-06 16:29:38'),
(911, 21, 152, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-06 16:29:02', '2022-10-06 16:29:38'),
(912, 21, 152, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-06 16:29:02', '2022-10-06 16:29:38'),
(913, 6, 153, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-10-07 07:41:07', '2022-10-07 07:41:07'),
(914, 6, 153, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-07 07:41:07', '2022-10-07 07:41:07'),
(915, 6, 153, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-10-07 07:41:07', '2022-10-07 07:41:07'),
(916, 6, 153, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-07 07:41:07', '2022-10-07 07:41:07'),
(917, 21, 153, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-07 07:41:07', '2022-10-07 07:41:31'),
(918, 21, 153, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-07 07:41:07', '2022-10-07 07:41:31'),
(919, 21, 153, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-07 07:41:07', '2022-10-07 07:41:31'),
(920, 21, 153, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-07 07:41:07', '2022-10-07 07:41:31'),
(921, 6, 154, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-10-08 06:17:17', '2022-10-08 06:17:17'),
(922, 6, 154, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-08 06:17:17', '2022-10-08 06:17:17'),
(923, 6, 154, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-10-08 06:17:17', '2022-10-08 06:17:17'),
(924, 6, 154, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-08 06:17:17', '2022-10-08 06:17:17'),
(925, 21, 154, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-08 06:17:18', '2022-10-08 06:17:31'),
(926, 21, 154, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-08 06:17:18', '2022-10-08 06:17:32'),
(927, 21, 154, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-08 06:17:18', '2022-10-08 06:17:32'),
(928, 21, 154, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-08 06:17:18', '2022-10-08 06:17:32'),
(929, 21, 156, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-10 15:26:51', '2022-10-10 15:27:04'),
(930, 21, 156, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-10 15:26:51', '2022-10-10 15:27:04'),
(931, 21, 156, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-10 15:26:51', '2022-10-10 15:27:04'),
(932, 21, 156, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-10 15:26:51', '2022-10-10 15:27:04'),
(933, 20, 26, 88, '0', '1', 161, 65, 65, 55, 75, 75, 85, 85, 95, 95, '50.00', '2.50', '0', '2022-10-11 06:02:37', '2022-10-11 06:04:40'),
(934, 20, 26, 89, '1', '1', 162, 65, 65, 55, 75, 75, 85, 85, 95, 95, '50.00', '2.50', '0', '2022-10-11 06:02:37', '2022-10-11 06:04:40'),
(935, 20, 26, 90, '0', '2', 163, 65, 65, 55, 75, 75, 85, 85, 95, 95, '50.00', '2.50', '0', '2022-10-11 06:02:37', '2022-10-11 06:04:40'),
(936, 20, 26, 91, '1', '2', 164, 65, 65, 55, 70, 75, 85, 85, 95, 95, '50.00', '2.50', '0', '2022-10-11 06:02:37', '2022-10-11 06:04:40'),
(937, 6, 160, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-10-12 16:56:11', '2022-10-12 16:56:11'),
(938, 6, 160, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-12 16:56:11', '2022-10-12 16:56:11'),
(939, 6, 160, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-10-12 16:56:11', '2022-10-12 16:56:11'),
(940, 6, 160, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-12 16:56:11', '2022-10-12 16:56:11'),
(941, 21, 160, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-12 16:56:11', '2022-10-12 16:56:23'),
(942, 21, 160, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-12 16:56:11', '2022-10-12 16:56:23'),
(943, 21, 160, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-12 16:56:11', '2022-10-12 16:56:23'),
(944, 21, 160, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-12 16:56:11', '2022-10-12 16:56:23'),
(945, 24, 152, 102, '0', '2', 172, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-10-14 09:50:27', '2022-10-14 09:50:27'),
(946, 24, 152, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-14 09:50:27', '2022-10-14 09:50:27'),
(947, 24, 152, 104, '0', '4', 174, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-10-14 09:50:27', '2022-10-14 09:50:27'),
(948, 24, 152, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-14 09:50:27', '2022-10-14 09:50:27'),
(949, 6, 162, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-10-15 05:17:23', '2022-10-15 05:17:23'),
(950, 6, 162, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-15 05:17:23', '2022-10-15 05:17:23'),
(951, 6, 162, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-10-15 05:17:23', '2022-10-15 05:17:23'),
(952, 6, 162, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-15 05:17:23', '2022-10-15 05:17:23'),
(953, 21, 162, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-15 05:17:23', '2022-10-15 05:17:42'),
(954, 21, 162, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-15 05:17:23', '2022-10-15 05:17:42'),
(955, 21, 162, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-15 05:17:23', '2022-10-15 05:17:42'),
(956, 21, 162, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-15 05:17:23', '2022-10-15 05:17:42'),
(957, 21, 89, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-15 06:25:43', '2022-10-15 06:25:57'),
(958, 21, 89, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-15 06:25:43', '2022-10-15 06:25:57'),
(959, 21, 89, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-15 06:25:43', '2022-10-15 06:25:57'),
(960, 21, 89, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-15 06:25:43', '2022-10-15 06:25:57'),
(961, 21, 182, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-27 10:58:03', '2022-10-27 10:58:26'),
(962, 21, 182, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-27 10:58:03', '2022-10-27 10:58:26'),
(963, 21, 182, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-27 10:58:03', '2022-10-27 10:58:26'),
(964, 21, 182, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-10-27 10:58:03', '2022-10-27 10:58:26'),
(965, 37, 182, 158, '0', '6', 228, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-10-27 10:58:03', '2022-10-31 07:40:44'),
(966, 37, 182, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-27 10:58:03', '2022-10-27 10:58:03'),
(967, 38, 182, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-10-27 10:58:03', '2022-10-27 10:58:03'),
(968, 38, 182, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-27 10:58:03', '2022-10-27 10:58:03'),
(969, 39, 182, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-10-27 10:58:03', '2022-10-27 10:58:03'),
(970, 39, 182, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-10-27 10:58:03', '2022-10-27 10:58:03'),
(971, 57, 10, 166, '0', '7', 236, 400, 400, 400, 400, 400, 400, 400, 400, 400, '0.00', '0.00', '0', '2022-11-03 06:23:26', '2022-11-03 06:23:26'),
(972, 57, 10, 167, '1', '1', 237, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-03 06:23:26', '2022-11-03 06:23:26'),
(973, 38, 10, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-11-03 06:32:33', '2022-11-03 06:32:33'),
(974, 38, 10, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-03 06:32:33', '2022-11-03 06:32:33'),
(975, 39, 10, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-11-03 06:32:33', '2022-11-03 06:32:33'),
(976, 39, 10, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-03 06:32:33', '2022-11-03 06:32:33'),
(977, 58, 10, 168, '0', '7', 238, 600, 600, 600, 600, 600, 600, 600, 600, 600, '0.00', '0.00', '0', '2022-11-03 06:32:33', '2022-11-03 06:32:33'),
(978, 58, 10, 169, '1', '7', 239, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-03 06:32:33', '2022-11-03 06:32:33'),
(979, 5, 186, 17, '0', '1', 101, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-11-04 12:17:21', '2022-11-04 12:17:21'),
(980, 5, 186, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-04 12:17:21', '2022-11-04 12:17:21'),
(981, 5, 186, 19, '0', '2', 103, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-11-04 12:17:21', '2022-11-04 12:17:21'),
(982, 5, 186, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-04 12:17:21', '2022-11-04 12:17:21'),
(983, 8, 186, 29, '0', '1', 113, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-11-04 12:17:21', '2022-11-04 12:17:21'),
(984, 8, 186, 30, '1', '1', 114, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-04 12:17:21', '2022-11-04 12:17:21'),
(985, 8, 186, 31, '0', '2', 115, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-11-04 12:17:21', '2022-11-04 12:17:21'),
(986, 8, 186, 33, '1', '2', 116, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-04 12:17:21', '2022-11-04 12:17:21'),
(987, 25, 186, 98, '0', '1', 168, 120, 120, 120, 120, 120, 120, 120, 120, 120, '0.00', '0.00', '0', '2022-11-04 12:17:21', '2022-11-04 12:17:21'),
(988, 25, 186, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-04 12:17:21', '2022-11-04 12:17:21'),
(989, 25, 186, 100, '0', '2', 170, 120, 120, 120, 120, 120, 120, 120, 120, 120, '0.00', '0.00', '0', '2022-11-04 12:17:21', '2022-11-04 12:17:21'),
(990, 25, 186, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-04 12:17:21', '2022-11-04 12:17:21'),
(991, 6, 188, 21, '0', '2', 105, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-11-05 05:43:45', '2022-11-05 05:52:55'),
(992, 6, 188, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-05 05:43:45', '2022-11-05 05:43:45'),
(993, 6, 188, 23, '0', '4', 107, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-11-05 05:43:45', '2022-11-05 05:52:55'),
(994, 6, 188, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-05 05:43:45', '2022-11-05 05:43:45'),
(995, 9, 188, 34, '0', '2', 117, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-11-05 05:43:45', '2022-11-05 05:52:55'),
(996, 9, 188, 35, '1', '2', 118, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-05 05:43:45', '2022-11-05 05:43:45'),
(997, 9, 188, 42, '0', '4', 119, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-11-05 05:43:45', '2022-11-05 05:52:55'),
(998, 9, 188, 43, '1', '4', 120, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-05 05:43:45', '2022-11-05 05:43:45'),
(999, 24, 188, 102, '0', '2', 172, 120, 120, 120, 120, 120, 120, 120, 120, 120, '0.00', '0.00', '0', '2022-11-05 05:43:45', '2022-11-05 05:52:55'),
(1000, 24, 188, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-05 05:43:45', '2022-11-05 05:43:45'),
(1001, 24, 188, 104, '0', '4', 174, 120, 120, 120, 120, 120, 120, 120, 120, 120, '0.00', '0.00', '0', '2022-11-05 05:43:45', '2022-11-05 05:52:55'),
(1002, 24, 188, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-05 05:43:45', '2022-11-05 05:43:45'),
(1003, 37, 188, 158, '0', '6', 228, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-11-05 06:07:56', '2022-11-05 06:08:25'),
(1004, 37, 188, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-05 06:07:56', '2022-11-05 06:07:56'),
(1005, 38, 188, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-11-05 06:07:56', '2022-11-05 06:07:56'),
(1006, 38, 188, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-05 06:07:56', '2022-11-05 06:07:56'),
(1007, 39, 188, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-11-05 06:07:56', '2022-11-05 06:07:56'),
(1008, 39, 188, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-05 06:07:56', '2022-11-05 06:07:56'),
(1009, 5, 193, 17, '0', '1', 101, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-11-09 08:00:10', '2022-11-09 08:00:10'),
(1010, 5, 193, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-09 08:00:10', '2022-11-09 08:00:10'),
(1011, 5, 193, 19, '0', '2', 103, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-11-09 08:00:10', '2022-11-09 08:00:10'),
(1012, 5, 193, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-09 08:00:10', '2022-11-09 08:00:10'),
(1013, 25, 193, 98, '0', '1', 168, 120, 120, 120, 120, 120, 120, 120, 120, 120, '0.00', '0.00', '0', '2022-11-09 08:00:10', '2022-11-09 08:00:10'),
(1014, 25, 193, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-09 08:00:10', '2022-11-09 08:00:10'),
(1015, 25, 193, 100, '0', '2', 170, 120, 120, 120, 120, 120, 120, 120, 120, 120, '0.00', '0.00', '0', '2022-11-09 08:00:10', '2022-11-09 08:00:10'),
(1016, 25, 193, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-09 08:00:10', '2022-11-09 08:00:10'),
(1017, 6, 148, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-11-10 05:12:18', '2022-11-10 05:12:18'),
(1018, 6, 148, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-10 05:12:18', '2022-11-10 05:12:18'),
(1019, 6, 148, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-11-10 05:12:18', '2022-11-10 05:12:18'),
(1020, 6, 148, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-10 05:12:18', '2022-11-10 05:12:18'),
(1021, 9, 148, 34, '0', '2', 117, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-11-10 05:12:18', '2022-11-10 05:12:18'),
(1022, 9, 148, 35, '1', '2', 118, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-10 05:12:18', '2022-11-10 05:12:18'),
(1023, 9, 148, 42, '0', '4', 119, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-11-10 05:12:18', '2022-11-10 05:12:18'),
(1024, 9, 148, 43, '1', '4', 120, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-10 05:12:18', '2022-11-10 05:12:18'),
(1025, 5, 194, 17, '0', '1', 101, 145, 145, 145, 145, 145, 145, 145, 145, 145, '0.00', '0.00', '0', '2022-11-10 10:53:00', '2022-11-10 10:53:00'),
(1026, 5, 194, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-10 10:53:00', '2022-11-10 10:53:00'),
(1027, 5, 194, 19, '0', '2', 103, 145, 145, 145, 145, 145, 145, 145, 145, 145, '0.00', '0.00', '0', '2022-11-10 10:53:00', '2022-11-10 10:53:00'),
(1028, 5, 194, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-10 10:53:00', '2022-11-10 10:53:00'),
(1029, 20, 194, 88, '0', '1', 161, 65, 65, 55, 75, 75, 85, 85, 95, 95, '50.00', '2.50', '0', '2022-11-10 10:53:00', '2022-11-10 10:53:18'),
(1030, 20, 194, 89, '1', '1', 162, 65, 65, 55, 75, 75, 85, 85, 95, 95, '50.00', '2.50', '0', '2022-11-10 10:53:00', '2022-11-10 10:53:18'),
(1031, 20, 194, 90, '0', '2', 163, 65, 65, 55, 75, 75, 85, 85, 95, 95, '50.00', '2.50', '0', '2022-11-10 10:53:00', '2022-11-10 10:53:18'),
(1032, 20, 194, 91, '1', '2', 164, 65, 65, 55, 75, 75, 85, 85, 95, 95, '50.00', '2.50', '0', '2022-11-10 10:53:00', '2022-11-10 10:53:18'),
(1033, 25, 194, 98, '0', '1', 168, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-11-10 10:53:00', '2022-11-10 10:53:00'),
(1034, 25, 194, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-10 10:53:00', '2022-11-10 10:53:00'),
(1035, 25, 194, 100, '0', '2', 170, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-11-10 10:53:00', '2022-11-10 10:53:00'),
(1036, 25, 194, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-10 10:53:00', '2022-11-10 10:53:00'),
(1037, 6, 196, 21, '0', '2', 105, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-11-11 06:33:18', '2022-11-11 06:33:18'),
(1038, 6, 196, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-11 06:33:18', '2022-11-11 06:33:18'),
(1039, 6, 196, 23, '0', '4', 107, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-11-11 06:33:18', '2022-11-11 06:33:18'),
(1040, 6, 196, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-11 06:33:18', '2022-11-11 06:33:18'),
(1041, 24, 196, 102, '0', '2', 172, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-11-11 06:33:18', '2022-11-11 06:33:18'),
(1042, 24, 196, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-11 06:33:18', '2022-11-11 06:33:18'),
(1043, 24, 196, 104, '0', '4', 174, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-11-11 06:33:18', '2022-11-11 06:33:18'),
(1044, 24, 196, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-11 06:33:18', '2022-11-11 06:33:18'),
(1045, 6, 204, 21, '0', '2', 105, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-11-14 06:31:22', '2022-11-14 06:31:22'),
(1046, 6, 204, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-14 06:31:22', '2022-11-14 06:31:22'),
(1047, 6, 204, 23, '0', '4', 107, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-11-14 06:31:22', '2022-11-14 06:31:22'),
(1048, 6, 204, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-14 06:31:22', '2022-11-14 06:31:22'),
(1049, 24, 204, 102, '0', '2', 172, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-11-14 06:31:22', '2022-11-14 06:31:22'),
(1050, 24, 204, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-14 06:31:22', '2022-11-14 06:31:22'),
(1051, 24, 204, 104, '0', '4', 174, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-11-14 06:31:22', '2022-11-14 06:31:22'),
(1052, 24, 204, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-14 06:31:22', '2022-11-14 06:31:22'),
(1053, 37, 193, 158, '0', '6', 228, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-11-15 06:09:57', '2022-11-15 06:09:57'),
(1054, 37, 193, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-15 06:09:57', '2022-11-15 06:09:57'),
(1055, 38, 193, 160, '0', '6', 230, 270, 270, 270, 270, 270, 270, 270, 270, 270, '0.00', '0.00', '0', '2022-11-15 06:09:57', '2022-11-15 06:09:57'),
(1056, 38, 193, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-15 06:09:57', '2022-11-15 06:09:57'),
(1057, 20, 205, 88, '0', '1', 161, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-11-17 06:33:54', '2022-11-17 06:36:52'),
(1058, 20, 205, 89, '1', '1', 162, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-11-17 06:33:54', '2022-11-17 06:36:52'),
(1059, 20, 205, 90, '0', '2', 163, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-11-17 06:33:54', '2022-11-17 06:36:52'),
(1060, 20, 205, 91, '1', '2', 164, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2022-11-17 06:33:54', '2022-11-17 06:36:52'),
(1061, 37, 205, 158, '0', '6', 228, 170, 170, 170, 170, 170, 170, 170, 170, 170, '0.00', '0.00', '0', '2022-11-17 06:33:54', '2023-01-05 07:39:18'),
(1062, 37, 205, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-17 06:33:54', '2022-11-17 06:37:16'),
(1063, 38, 205, 160, '0', '6', 230, 250, 250, 250, 250, 250, 250, 250, 250, 250, '0.00', '0.00', '0', '2022-11-17 06:33:54', '2022-11-17 06:33:54'),
(1064, 38, 205, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-17 06:33:54', '2022-11-17 06:33:54'),
(1065, 39, 205, 162, '0', '6', 232, 240, 240, 240, 240, 240, 240, 240, 240, 240, '0.00', '0.00', '0', '2022-11-17 06:33:54', '2023-01-05 07:39:42'),
(1066, 39, 205, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-17 06:36:52', '2022-11-17 06:36:52'),
(1067, 37, 210, 158, '0', '6', 228, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-11-18 11:45:57', '2022-11-18 11:45:57'),
(1068, 37, 210, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-18 11:45:57', '2022-11-18 11:45:57'),
(1069, 38, 210, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-11-18 11:45:57', '2022-11-18 11:45:57'),
(1070, 38, 210, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-18 11:45:57', '2022-11-18 11:45:57'),
(1071, 39, 210, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-11-18 11:45:57', '2022-11-18 11:45:57'),
(1072, 39, 210, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-18 11:45:57', '2022-11-18 11:45:57'),
(1073, 6, 198, 21, '0', '2', 105, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-11-21 09:25:13', '2022-11-21 09:25:13'),
(1074, 6, 198, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-21 09:25:13', '2022-11-21 09:25:13'),
(1075, 6, 198, 23, '0', '4', 107, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-11-21 09:25:13', '2022-11-21 09:25:13'),
(1076, 6, 198, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-21 09:25:13', '2022-11-21 09:25:13'),
(1077, 24, 198, 102, '0', '2', 172, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-11-21 09:25:13', '2022-11-21 09:25:13'),
(1078, 24, 198, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-21 09:25:13', '2022-11-21 09:25:13'),
(1079, 24, 198, 104, '0', '4', 174, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-11-21 09:25:13', '2022-11-21 09:25:13'),
(1080, 24, 198, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-21 09:25:13', '2022-11-21 09:25:13'),
(1081, 8, 194, 29, '0', '1', 113, 145, 145, 145, 145, 145, 145, 145, 145, 145, '0.00', '0.00', '0', '2022-11-23 06:35:32', '2022-11-23 06:35:32'),
(1082, 8, 194, 30, '1', '1', 114, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-23 06:35:32', '2022-11-23 06:35:32'),
(1083, 8, 194, 31, '0', '2', 115, 145, 145, 145, 145, 145, 145, 145, 145, 145, '0.00', '0.00', '0', '2022-11-23 06:35:32', '2022-11-23 06:35:32'),
(1084, 8, 194, 33, '1', '2', 116, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-23 06:35:32', '2022-11-23 06:35:32'),
(1085, 5, 232, 17, '0', '1', 101, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-11-23 06:39:55', '2022-11-23 06:39:55'),
(1086, 5, 232, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-23 06:39:55', '2022-11-23 06:39:55'),
(1087, 5, 232, 19, '0', '2', 103, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-11-23 06:39:55', '2022-11-23 06:39:55'),
(1088, 5, 232, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-23 06:39:55', '2022-11-23 06:39:55'),
(1089, 8, 232, 29, '0', '1', 113, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-11-23 06:39:55', '2022-11-23 06:39:55'),
(1090, 8, 232, 30, '1', '1', 114, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-23 06:39:55', '2022-11-23 06:39:55'),
(1091, 8, 232, 31, '0', '2', 115, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-11-23 06:39:55', '2022-11-23 06:40:36'),
(1092, 8, 232, 33, '1', '2', 116, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-23 06:39:55', '2022-11-23 06:39:55'),
(1093, 25, 232, 98, '0', '1', 168, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-11-23 06:40:36', '2022-11-23 06:40:36'),
(1094, 25, 232, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-23 06:40:36', '2022-11-23 06:40:36'),
(1095, 25, 232, 100, '0', '2', 170, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-11-23 06:40:36', '2022-11-23 06:40:36'),
(1096, 25, 232, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-23 06:40:36', '2022-11-23 06:40:36'),
(1097, 37, 233, 158, '0', '6', 228, 180, 180, 180, 180, 180, 180, 180, 180, 180, '0.00', '0.00', '0', '2022-11-24 07:25:04', '2022-11-24 07:25:04'),
(1098, 37, 233, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-24 07:25:04', '2022-11-24 07:25:04'),
(1099, 38, 233, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-11-24 07:25:04', '2022-11-24 07:25:04'),
(1100, 38, 233, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-24 07:25:04', '2022-11-24 07:25:04'),
(1101, 39, 233, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-11-24 07:25:04', '2022-11-24 07:25:04');
INSERT INTO `sender_manage_price` (`id`, `logistic_id`, `sender_id`, `manage_price_id`, `shipment_type`, `rule`, `rule_index`, `within_city`, `within_state`, `within_zone`, `metro`, `metro_2`, `rest_of_india`, `rest_of_india_2`, `special_zone`, `jammu_kashmir`, `cod_price`, `cod_percentage`, `is_cod_charge_return`, `created_at`, `updated_at`) VALUES
(1102, 39, 233, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-24 07:25:04', '2022-11-24 07:25:04'),
(1103, 60, 1, 170, '0', '2', 401, 220, 220, 220, 220, 220, 220, 220, 220, 220, '50.00', '2.50', '0', '2022-11-24 08:01:00', '2023-03-11 22:03:05'),
(1104, 60, 1, 171, '1', '2', 402, 0, 0, 0, 0, 0, 0, 0, 0, 0, '50.00', '2.50', '0', '2022-11-24 08:01:00', '2023-03-11 22:03:05'),
(1105, 61, 1, 172, '0', '3', 403, 350, 350, 350, 350, 350, 350, 350, 350, 350, '50.00', '2.50', '0', '2022-11-24 08:01:00', '2022-11-24 08:01:32'),
(1106, 61, 1, 173, '1', '3', 404, 0, 0, 0, 0, 0, 0, 0, 0, 0, '50.00', '2.50', '0', '2022-11-24 08:01:00', '2022-11-24 08:01:32'),
(1107, 59, 1, 174, '0', '2', 405, 80, 100, 100, 115, 115, 130, 130, 145, 145, '50.00', '2.50', '0', '2022-11-24 08:01:00', '2022-11-24 08:01:32'),
(1108, 59, 1, 175, '1', '2', 406, 80, 100, 100, 115, 115, 130, 130, 145, 145, '50.00', '2.50', '0', '2022-11-24 08:01:00', '2022-11-24 08:01:32'),
(1109, 59, 1, 176, '0', '4', 407, 80, 100, 100, 115, 115, 130, 130, 145, 145, '50.00', '2.50', '0', '2022-11-24 08:01:00', '2022-11-24 08:01:32'),
(1110, 59, 1, 177, '1', '4', 408, 80, 100, 100, 115, 115, 130, 130, 145, 145, '50.00', '2.50', '0', '2022-11-24 08:01:00', '2022-11-24 08:01:32'),
(1111, 62, 1, 178, '0', '6', 409, 300, 300, 300, 300, 300, 300, 300, 300, 300, '50.00', '2.50', '0', '2022-11-24 08:01:00', '2022-11-24 08:01:32'),
(1112, 62, 1, 179, '1', '6', 410, 0, 0, 0, 0, 0, 0, 0, 0, 0, '50.00', '2.50', '0', '2022-11-24 08:01:00', '2022-11-24 08:01:32'),
(1113, 60, 234, 170, '0', '2', 401, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2022-11-24 08:14:09', '2022-11-24 08:14:09'),
(1114, 60, 234, 171, '1', '2', 402, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-24 08:14:09', '2022-11-24 08:14:09'),
(1115, 61, 234, 172, '0', '3', 403, 350, 350, 350, 350, 350, 350, 350, 350, 350, '0.00', '0.00', '0', '2022-11-24 08:14:09', '2022-11-24 08:14:09'),
(1116, 61, 234, 173, '1', '3', 404, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-24 08:14:09', '2022-11-24 08:14:09'),
(1117, 59, 234, 174, '0', '2', 405, 80, 100, 100, 115, 115, 130, 130, 145, 145, '50.00', '2.50', '0', '2022-11-24 08:14:09', '2022-11-24 08:14:23'),
(1118, 59, 234, 175, '1', '2', 406, 80, 100, 100, 115, 115, 130, 130, 145, 145, '50.00', '2.50', '0', '2022-11-24 08:14:09', '2022-11-24 08:14:23'),
(1119, 59, 234, 176, '0', '4', 407, 80, 100, 100, 115, 115, 130, 130, 145, 145, '50.00', '2.50', '0', '2022-11-24 08:14:09', '2022-11-24 08:14:23'),
(1120, 59, 234, 177, '1', '4', 408, 80, 100, 100, 115, 115, 130, 130, 145, 145, '50.00', '2.50', '0', '2022-11-24 08:14:09', '2022-11-24 08:14:23'),
(1121, 62, 234, 178, '0', '6', 409, 300, 300, 300, 300, 300, 300, 300, 300, 300, '0.00', '0.00', '0', '2022-11-24 08:14:09', '2022-11-24 08:14:09'),
(1122, 62, 234, 179, '1', '6', 410, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-24 08:14:09', '2022-11-24 08:14:09'),
(1123, 60, 33, 170, '0', '2', 401, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2022-11-24 08:24:22', '2022-11-24 08:24:22'),
(1124, 60, 33, 171, '1', '2', 402, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-24 08:24:22', '2022-11-24 08:24:22'),
(1125, 5, 231, 17, '0', '1', 101, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-11-25 08:05:14', '2022-11-25 11:40:35'),
(1126, 5, 231, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-25 08:05:14', '2022-11-25 08:05:14'),
(1127, 5, 231, 19, '0', '2', 103, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-11-25 08:05:14', '2022-11-25 11:40:35'),
(1128, 5, 231, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-25 08:05:14', '2022-11-25 08:05:14'),
(1129, 25, 231, 98, '0', '1', 168, 120, 120, 120, 120, 120, 120, 120, 120, 120, '0.00', '0.00', '0', '2022-11-25 08:05:14', '2022-11-25 11:40:35'),
(1130, 25, 231, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-25 08:05:14', '2022-11-25 08:05:14'),
(1131, 25, 231, 100, '0', '2', 170, 120, 120, 120, 120, 120, 120, 120, 120, 120, '0.00', '0.00', '0', '2022-11-25 08:05:14', '2022-11-25 11:40:35'),
(1132, 25, 231, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-25 08:05:14', '2022-11-25 08:05:14'),
(1133, 37, 235, 158, '0', '6', 228, 175, 175, 175, 175, 175, 175, 175, 175, 175, '0.00', '0.00', '0', '2022-11-25 10:57:12', '2022-11-25 10:57:12'),
(1134, 37, 235, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-25 10:57:12', '2022-11-25 10:57:12'),
(1135, 38, 235, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-11-25 10:57:12', '2022-11-25 10:57:12'),
(1136, 38, 235, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-25 10:57:12', '2022-11-25 10:57:12'),
(1137, 39, 235, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-11-25 10:57:12', '2022-11-25 10:57:12'),
(1138, 39, 235, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-25 10:57:12', '2022-11-25 10:57:12'),
(1139, 60, 10, 170, '0', '2', 401, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-11-26 07:45:36', '2022-11-26 07:45:36'),
(1140, 60, 10, 171, '1', '2', 402, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-26 07:45:36', '2022-11-26 07:45:36'),
(1141, 62, 10, 178, '0', '6', 409, 270, 270, 270, 270, 270, 270, 270, 270, 270, '0.00', '0.00', '0', '2022-11-26 07:45:36', '2022-11-26 07:45:36'),
(1142, 62, 10, 179, '1', '6', 410, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-26 07:45:36', '2022-11-26 07:45:36'),
(1143, 60, 231, 170, '0', '2', 401, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2022-11-28 08:07:58', '2022-11-28 08:07:58'),
(1144, 60, 231, 171, '1', '2', 402, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-28 08:07:58', '2022-11-28 08:07:58'),
(1145, 60, 193, 170, '0', '2', 401, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2022-11-28 08:08:25', '2022-11-28 08:08:25'),
(1146, 60, 193, 171, '1', '2', 402, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-28 08:08:25', '2022-11-28 08:08:25'),
(1147, 62, 182, 178, '0', '6', 409, 270, 270, 270, 270, 270, 270, 270, 270, 270, '0.00', '0.00', '0', '2022-11-28 08:11:59', '2022-11-28 08:11:59'),
(1148, 62, 182, 179, '1', '6', 410, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-28 08:11:59', '2022-11-28 08:11:59'),
(1149, 62, 19, 178, '0', '6', 409, 270, 270, 270, 270, 270, 270, 270, 270, 270, '0.00', '0.00', '0', '2022-11-28 08:12:57', '2022-11-28 08:12:57'),
(1150, 62, 19, 179, '1', '6', 410, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-28 08:12:57', '2022-11-28 08:12:57'),
(1151, 62, 205, 178, '0', '6', 409, 270, 270, 270, 270, 270, 270, 270, 270, 270, '0.00', '0.00', '0', '2022-11-28 08:14:05', '2022-11-28 08:14:05'),
(1152, 62, 205, 179, '1', '6', 410, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-28 08:14:05', '2022-11-28 08:14:05'),
(1153, 62, 45, 178, '0', '6', 409, 270, 270, 270, 270, 270, 270, 270, 270, 270, '0.00', '0.00', '0', '2022-11-28 08:17:28', '2022-11-28 08:17:28'),
(1154, 62, 45, 179, '1', '6', 410, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-28 08:17:28', '2022-11-28 08:17:28'),
(1155, 5, 244, 17, '0', '1', 101, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-11-29 05:38:36', '2022-11-29 05:38:36'),
(1156, 5, 244, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-29 05:38:36', '2022-11-29 05:38:36'),
(1157, 5, 244, 19, '0', '2', 103, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-11-29 05:38:36', '2022-11-29 05:38:36'),
(1158, 5, 244, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-29 05:38:36', '2022-11-29 05:38:36'),
(1159, 8, 244, 29, '0', '1', 113, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-11-29 05:38:36', '2022-11-29 05:38:36'),
(1160, 8, 244, 30, '1', '1', 114, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-29 05:38:36', '2022-11-29 05:38:36'),
(1161, 8, 244, 31, '0', '2', 115, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-11-29 05:38:36', '2022-11-29 05:38:36'),
(1162, 8, 244, 33, '1', '2', 116, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-29 05:38:36', '2022-11-29 05:38:36'),
(1163, 25, 244, 98, '0', '1', 168, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-11-29 05:38:36', '2022-11-29 05:38:36'),
(1164, 25, 244, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-29 05:38:36', '2022-11-29 05:38:36'),
(1165, 25, 244, 100, '0', '2', 170, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-11-29 05:38:36', '2022-11-29 05:38:36'),
(1166, 25, 244, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-29 05:38:36', '2022-11-29 05:38:36'),
(1167, 5, 243, 17, '0', '1', 101, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-11-29 07:35:25', '2022-11-29 07:35:25'),
(1168, 5, 243, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-29 07:35:25', '2022-11-29 07:35:25'),
(1169, 5, 243, 19, '0', '2', 103, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-11-29 07:35:25', '2022-11-29 07:35:25'),
(1170, 5, 243, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-29 07:35:25', '2022-11-29 07:35:25'),
(1171, 37, 242, 158, '0', '6', 228, 210, 210, 210, 210, 210, 210, 210, 210, 210, '0.00', '0.00', '0', '2022-11-29 08:50:53', '2022-11-29 08:50:53'),
(1172, 37, 242, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-29 08:50:53', '2022-11-29 08:50:53'),
(1173, 38, 242, 160, '0', '6', 230, 270, 270, 270, 270, 270, 270, 270, 270, 270, '0.00', '0.00', '0', '2022-11-29 08:50:53', '2022-11-29 08:50:53'),
(1174, 38, 242, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-29 08:50:53', '2022-11-29 08:50:53'),
(1175, 39, 242, 162, '0', '6', 232, 270, 270, 270, 270, 270, 270, 270, 270, 270, '0.00', '0.00', '0', '2022-11-29 08:50:53', '2022-11-29 08:50:53'),
(1176, 39, 242, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-29 08:50:53', '2022-11-29 08:50:53'),
(1177, 5, 13, 17, '0', '1', 101, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-11-30 06:45:29', '2022-11-30 06:45:29'),
(1178, 5, 13, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-30 06:45:29', '2022-11-30 06:45:29'),
(1179, 5, 13, 19, '0', '2', 103, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-11-30 06:45:29', '2022-11-30 06:45:29'),
(1180, 5, 13, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-30 06:45:29', '2022-11-30 06:45:29'),
(1181, 8, 13, 29, '0', '1', 113, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-11-30 06:45:29', '2022-11-30 06:45:29'),
(1182, 8, 13, 30, '1', '1', 114, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-30 06:45:29', '2022-11-30 06:45:29'),
(1183, 8, 13, 31, '0', '2', 115, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-11-30 06:45:29', '2022-11-30 06:45:29'),
(1184, 8, 13, 33, '1', '2', 116, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-30 06:45:29', '2022-11-30 06:45:29'),
(1185, 25, 13, 98, '0', '1', 168, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-11-30 06:45:29', '2022-11-30 06:45:29'),
(1186, 25, 13, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-30 06:45:29', '2022-11-30 06:45:29'),
(1187, 25, 13, 100, '0', '2', 170, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-11-30 06:45:29', '2022-11-30 06:45:29'),
(1188, 25, 13, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-11-30 06:45:29', '2022-11-30 06:45:29'),
(1189, 37, 250, 158, '0', '6', 228, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-12-01 07:11:43', '2022-12-01 07:11:43'),
(1190, 37, 250, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-01 07:11:43', '2022-12-01 07:11:43'),
(1191, 38, 250, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-01 07:11:43', '2022-12-01 07:11:43'),
(1192, 38, 250, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-01 07:11:43', '2022-12-01 07:11:43'),
(1193, 62, 250, 178, '0', '6', 409, 270, 270, 270, 270, 270, 270, 270, 270, 270, '0.00', '0.00', '0', '2022-12-01 07:11:43', '2022-12-01 07:11:43'),
(1194, 62, 250, 179, '1', '6', 410, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-01 07:11:43', '2022-12-01 07:11:43'),
(1195, 5, 253, 17, '0', '1', 101, 100, 100, 100, 100, 100, 100, 100, 100, 100, '0.00', '0.00', '0', '2022-12-01 12:19:44', '2022-12-01 12:19:44'),
(1196, 5, 253, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-01 12:19:44', '2022-12-01 12:19:44'),
(1197, 5, 253, 19, '0', '2', 103, 100, 100, 100, 100, 100, 100, 100, 100, 100, '0.00', '0.00', '0', '2022-12-01 12:19:44', '2022-12-01 12:19:44'),
(1198, 5, 253, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-01 12:19:44', '2022-12-01 12:19:44'),
(1199, 8, 253, 29, '0', '1', 113, 100, 100, 100, 100, 100, 100, 100, 100, 100, '0.00', '0.00', '0', '2022-12-01 12:19:44', '2022-12-01 12:19:44'),
(1200, 8, 253, 30, '1', '1', 114, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-01 12:19:44', '2022-12-01 12:19:44'),
(1201, 8, 253, 31, '0', '2', 115, 100, 100, 100, 100, 100, 100, 100, 100, 100, '0.00', '0.00', '0', '2022-12-01 12:19:44', '2022-12-01 12:19:44'),
(1202, 8, 253, 33, '1', '2', 116, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-01 12:19:44', '2022-12-01 12:19:44'),
(1203, 37, 248, 158, '0', '6', 228, 170, 170, 170, 170, 170, 170, 170, 170, 170, '0.00', '0.00', '0', '2022-12-02 05:29:30', '2023-01-05 07:37:21'),
(1204, 37, 248, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-02 05:29:30', '2022-12-02 05:29:30'),
(1205, 38, 248, 160, '0', '6', 230, 250, 250, 250, 250, 250, 250, 250, 250, 250, '0.00', '0.00', '0', '2022-12-02 05:29:30', '2022-12-02 05:29:30'),
(1206, 38, 248, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-02 05:29:30', '2022-12-02 05:29:30'),
(1207, 39, 248, 162, '0', '6', 232, 240, 240, 240, 240, 240, 240, 240, 240, 240, '0.00', '0.00', '0', '2022-12-02 05:29:30', '2023-01-05 07:37:21'),
(1208, 39, 248, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-02 05:29:30', '2022-12-02 05:29:30'),
(1209, 62, 248, 178, '0', '6', 409, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-02 05:29:30', '2023-01-05 07:37:21'),
(1210, 62, 248, 179, '1', '6', 410, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-02 05:29:30', '2022-12-02 05:29:30'),
(1211, 21, 248, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-12-02 05:30:07', '2022-12-02 05:30:22'),
(1212, 21, 248, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-12-02 05:30:07', '2022-12-02 05:30:22'),
(1213, 21, 248, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-12-02 05:30:07', '2022-12-02 05:30:22'),
(1214, 21, 248, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '50.00', '2.50', '0', '2022-12-02 05:30:07', '2022-12-02 05:30:22'),
(1215, 37, 255, 158, '0', '6', 228, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-12-02 06:50:13', '2022-12-02 06:50:13'),
(1216, 37, 255, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-02 06:50:13', '2022-12-02 06:50:13'),
(1217, 38, 255, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-02 06:50:13', '2022-12-02 06:50:13'),
(1218, 38, 255, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-02 06:50:13', '2022-12-02 06:50:13'),
(1219, 62, 255, 178, '0', '6', 409, 270, 270, 270, 270, 270, 270, 270, 270, 270, '0.00', '0.00', '0', '2022-12-02 06:50:13', '2022-12-02 06:50:13'),
(1220, 62, 255, 179, '1', '6', 410, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-02 06:50:13', '2022-12-02 06:50:13'),
(1221, 37, 257, 158, '0', '6', 228, 180, 180, 180, 180, 180, 180, 180, 180, 180, '0.00', '0.00', '0', '2022-12-02 14:31:45', '2022-12-02 14:31:45'),
(1222, 37, 257, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-02 14:31:45', '2022-12-02 14:31:45'),
(1223, 38, 257, 160, '0', '6', 230, 240, 240, 240, 240, 240, 240, 240, 240, 240, '0.00', '0.00', '0', '2022-12-02 14:31:45', '2022-12-02 14:31:45'),
(1224, 38, 257, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-02 14:31:46', '2022-12-02 14:31:46'),
(1225, 39, 257, 162, '0', '6', 232, 240, 240, 240, 240, 240, 240, 240, 240, 240, '0.00', '0.00', '0', '2022-12-02 14:31:46', '2022-12-02 14:31:46'),
(1226, 39, 257, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-02 14:31:47', '2022-12-02 14:31:47'),
(1227, 37, 252, 158, '0', '6', 228, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-12-02 14:34:09', '2023-01-04 11:43:34'),
(1228, 37, 252, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-02 14:34:09', '2022-12-02 14:34:09'),
(1229, 38, 252, 160, '0', '6', 230, 240, 240, 240, 240, 240, 240, 240, 240, 240, '0.00', '0.00', '0', '2022-12-02 14:34:09', '2022-12-02 14:34:09'),
(1230, 38, 252, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-02 14:34:10', '2022-12-02 14:34:10'),
(1231, 39, 252, 162, '0', '6', 232, 240, 240, 240, 240, 240, 240, 240, 240, 240, '0.00', '0.00', '0', '2022-12-02 14:34:10', '2022-12-02 14:34:10'),
(1232, 39, 252, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-02 14:34:11', '2022-12-02 14:34:11'),
(1233, 5, 267, 17, '0', '1', 101, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-12-07 06:36:43', '2022-12-07 06:36:43'),
(1234, 5, 267, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-07 06:36:43', '2022-12-07 06:36:43'),
(1235, 5, 267, 19, '0', '2', 103, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-12-07 06:36:43', '2022-12-07 06:36:43'),
(1236, 5, 267, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-07 06:36:43', '2022-12-07 06:36:43'),
(1237, 8, 267, 29, '0', '1', 113, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-12-07 06:36:43', '2022-12-07 06:36:43'),
(1238, 8, 267, 30, '1', '1', 114, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-07 06:36:43', '2022-12-07 06:36:43'),
(1239, 8, 267, 31, '0', '2', 115, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-12-07 06:36:43', '2022-12-07 06:36:43'),
(1240, 8, 267, 33, '1', '2', 116, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-07 06:36:43', '2022-12-07 06:36:43'),
(1241, 20, 267, 88, '0', '1', 161, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2022-12-07 06:36:43', '2022-12-07 06:36:43'),
(1242, 20, 267, 89, '1', '1', 162, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2022-12-07 06:36:43', '2022-12-07 06:36:43'),
(1243, 20, 267, 90, '0', '2', 163, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2022-12-07 06:36:43', '2022-12-07 06:36:43'),
(1244, 20, 267, 91, '1', '2', 164, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2022-12-07 06:36:43', '2022-12-07 06:36:43'),
(1245, 25, 267, 98, '0', '1', 168, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-12-07 06:36:43', '2022-12-07 06:36:43'),
(1246, 25, 267, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-07 06:36:43', '2022-12-07 06:36:43'),
(1247, 25, 267, 100, '0', '2', 170, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2022-12-07 06:36:43', '2022-12-07 06:36:43'),
(1248, 25, 267, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-07 06:36:43', '2022-12-07 06:36:43'),
(1249, 37, 268, 158, '0', '6', 228, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-12-07 06:49:26', '2022-12-07 06:49:26'),
(1250, 37, 268, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-07 06:49:26', '2022-12-07 06:49:26'),
(1251, 38, 268, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-07 06:49:26', '2022-12-07 06:49:26'),
(1252, 38, 268, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-07 06:49:26', '2022-12-07 06:49:26'),
(1253, 39, 268, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-07 06:49:26', '2022-12-07 06:49:26'),
(1254, 39, 268, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-07 06:49:26', '2022-12-07 06:49:26'),
(1255, 6, 270, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-12-12 07:14:15', '2022-12-12 07:14:15'),
(1256, 6, 270, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-12 07:14:15', '2022-12-12 07:14:15'),
(1257, 6, 270, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-12-12 07:14:15', '2022-12-12 07:14:15'),
(1258, 6, 270, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-12 07:14:15', '2022-12-12 07:14:15'),
(1259, 9, 270, 34, '0', '2', 117, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-12-12 07:14:15', '2022-12-12 07:14:15'),
(1260, 9, 270, 35, '1', '2', 118, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-12 07:14:15', '2022-12-12 07:14:15'),
(1261, 9, 270, 42, '0', '4', 119, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-12-12 07:14:15', '2022-12-12 07:14:15'),
(1262, 9, 270, 43, '1', '4', 120, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-12 07:14:15', '2022-12-12 07:14:15'),
(1263, 24, 270, 102, '0', '2', 172, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-12-12 07:14:15', '2022-12-12 07:14:15'),
(1264, 24, 270, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-12 07:14:15', '2022-12-12 07:14:15'),
(1265, 24, 270, 104, '0', '4', 174, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-12-12 07:14:15', '2022-12-12 07:14:15'),
(1266, 24, 270, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-12 07:14:15', '2022-12-12 07:14:15'),
(1267, 37, 270, 158, '0', '6', 228, 250, 250, 250, 250, 250, 250, 250, 250, 250, '0.00', '0.00', '0', '2022-12-12 07:14:15', '2022-12-12 07:14:15'),
(1268, 37, 270, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-12 07:14:15', '2022-12-12 07:14:15'),
(1269, 38, 270, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-12 07:14:15', '2022-12-12 07:14:15'),
(1270, 38, 270, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-12 07:14:15', '2022-12-12 07:14:15'),
(1271, 39, 270, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-12 07:14:15', '2022-12-12 07:14:15'),
(1272, 39, 270, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-12 07:14:15', '2022-12-12 07:14:15'),
(1273, 6, 37, 21, '0', '2', 105, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-12-13 05:50:33', '2022-12-13 05:50:33'),
(1274, 6, 37, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-13 05:50:33', '2022-12-13 05:50:33'),
(1275, 6, 37, 23, '0', '4', 107, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-12-13 05:50:33', '2022-12-13 05:50:33'),
(1276, 6, 37, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-13 05:50:33', '2022-12-13 05:50:33'),
(1277, 9, 37, 34, '0', '2', 117, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-12-13 05:50:33', '2022-12-13 05:50:33'),
(1278, 9, 37, 35, '1', '2', 118, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-13 05:50:33', '2022-12-13 05:50:33'),
(1279, 9, 37, 42, '0', '4', 119, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-12-13 05:50:33', '2022-12-13 05:50:33'),
(1280, 9, 37, 43, '1', '4', 120, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-13 05:50:33', '2022-12-13 05:50:33'),
(1281, 24, 37, 102, '0', '2', 172, 180, 180, 180, 180, 180, 180, 180, 180, 180, '0.00', '0.00', '0', '2022-12-13 05:50:33', '2022-12-13 05:50:33'),
(1282, 24, 37, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-13 05:50:33', '2022-12-13 05:50:33'),
(1283, 24, 37, 104, '0', '4', 174, 180, 180, 180, 180, 180, 180, 180, 180, 180, '0.00', '0.00', '0', '2022-12-13 05:50:33', '2022-12-13 05:50:33'),
(1284, 24, 37, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-13 05:50:33', '2022-12-13 05:50:33'),
(1285, 60, 267, 170, '0', '2', 401, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2022-12-14 09:10:04', '2022-12-14 09:10:04'),
(1286, 60, 267, 171, '1', '2', 402, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-14 09:10:04', '2022-12-14 09:10:04'),
(1287, 5, 234, 17, '0', '1', 101, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-12-14 09:30:39', '2022-12-14 09:30:39'),
(1288, 5, 234, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-14 09:30:39', '2022-12-14 09:30:39'),
(1289, 5, 234, 19, '0', '2', 103, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-12-14 09:30:39', '2022-12-14 09:30:39'),
(1290, 5, 234, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-14 09:30:39', '2022-12-14 09:30:39'),
(1291, 8, 234, 29, '0', '1', 113, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-12-14 09:30:39', '2022-12-14 09:30:39'),
(1292, 8, 234, 30, '1', '1', 114, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-14 09:30:39', '2022-12-14 09:30:39'),
(1293, 8, 234, 31, '0', '2', 115, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-12-14 09:30:39', '2022-12-14 09:30:39'),
(1294, 8, 234, 33, '1', '2', 116, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-14 09:30:39', '2022-12-14 09:30:39'),
(1295, 20, 234, 88, '0', '1', 161, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2022-12-14 09:30:39', '2022-12-14 09:30:39'),
(1296, 20, 234, 89, '1', '1', 162, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2022-12-14 09:30:39', '2022-12-14 09:30:39'),
(1297, 20, 234, 90, '0', '2', 163, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2022-12-14 09:30:39', '2022-12-14 09:30:39'),
(1298, 20, 234, 91, '1', '2', 164, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2022-12-14 09:30:39', '2022-12-14 09:30:39'),
(1299, 37, 288, 158, '0', '6', 228, 210, 210, 210, 210, 210, 210, 210, 210, 210, '0.00', '0.00', '0', '2022-12-17 08:07:05', '2022-12-17 08:07:05'),
(1300, 37, 288, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-17 08:07:05', '2022-12-17 08:07:05'),
(1301, 38, 288, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-17 08:07:05', '2022-12-17 08:07:05'),
(1302, 38, 288, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-17 08:07:05', '2022-12-17 08:07:05'),
(1303, 39, 288, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-17 08:07:05', '2022-12-17 08:07:05'),
(1304, 39, 288, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-17 08:07:05', '2022-12-17 08:07:05'),
(1305, 62, 288, 178, '0', '6', 409, 280, 280, 280, 280, 280, 280, 280, 280, 280, '0.00', '0.00', '0', '2022-12-17 08:07:05', '2022-12-17 08:07:05'),
(1306, 62, 288, 179, '1', '6', 410, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-17 08:07:05', '2022-12-17 08:07:05'),
(1307, 37, 289, 158, '0', '6', 228, 210, 210, 210, 210, 210, 210, 210, 210, 210, '0.00', '0.00', '0', '2022-12-17 08:12:23', '2022-12-17 08:12:23'),
(1308, 37, 289, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-17 08:12:23', '2022-12-17 08:12:23'),
(1309, 38, 289, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-17 08:12:24', '2022-12-17 08:12:24'),
(1310, 38, 289, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-17 08:12:24', '2022-12-17 08:12:24'),
(1311, 39, 289, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-17 08:12:24', '2022-12-17 08:12:24'),
(1312, 39, 289, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-17 08:12:24', '2022-12-17 08:12:24'),
(1313, 62, 289, 178, '0', '6', 409, 280, 280, 280, 280, 280, 280, 280, 280, 280, '0.00', '0.00', '0', '2022-12-17 08:12:24', '2022-12-17 08:12:24'),
(1314, 62, 289, 179, '1', '6', 410, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-17 08:12:24', '2022-12-17 08:12:24'),
(1315, 37, 279, 158, '0', '6', 228, 175, 175, 175, 175, 175, 175, 175, 175, 175, '0.00', '0.00', '0', '2022-12-22 05:44:53', '2022-12-22 05:44:53'),
(1316, 37, 279, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-22 05:44:53', '2022-12-22 05:44:53'),
(1317, 38, 279, 160, '0', '6', 230, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-22 05:44:53', '2022-12-22 05:44:53'),
(1318, 38, 279, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-22 05:44:53', '2022-12-22 05:44:53'),
(1319, 39, 279, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-22 05:44:53', '2022-12-22 05:44:53'),
(1320, 39, 279, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-22 05:44:53', '2022-12-22 05:44:53'),
(1321, 62, 279, 178, '0', '6', 409, 270, 270, 270, 270, 270, 270, 270, 270, 270, '0.00', '0.00', '0', '2022-12-22 05:44:53', '2022-12-22 05:44:53'),
(1322, 62, 279, 179, '1', '6', 410, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-22 05:44:53', '2022-12-22 05:44:53'),
(1323, 64, 234, 180, '0', '1', 411, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-12-24 05:39:27', '2022-12-24 05:39:27'),
(1324, 64, 234, 181, '1', '1', 412, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-24 05:39:28', '2022-12-24 05:39:28'),
(1325, 64, 253, 180, '0', '1', 411, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-12-24 05:40:48', '2022-12-24 05:40:48'),
(1326, 64, 253, 181, '1', '1', 412, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-24 05:40:48', '2022-12-24 05:40:48'),
(1327, 64, 244, 180, '0', '1', 411, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-12-27 15:07:07', '2022-12-27 15:07:07'),
(1328, 64, 244, 181, '1', '1', 412, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 15:07:07', '2022-12-27 15:07:07'),
(1329, 64, 244, 182, '0', '2', 413, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-12-27 15:07:07', '2022-12-27 15:07:07'),
(1330, 64, 244, 183, '1', '2', 414, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 15:07:07', '2022-12-27 15:07:07'),
(1331, 65, 15, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 15:09:35', '2022-12-27 15:09:35'),
(1332, 65, 15, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 15:09:35', '2022-12-27 15:09:35'),
(1333, 65, 25, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 15:10:20', '2022-12-27 15:10:20'),
(1334, 65, 25, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 15:10:20', '2022-12-27 15:10:20'),
(1335, 65, 120, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 15:11:20', '2022-12-27 15:11:20'),
(1336, 65, 120, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 15:11:20', '2022-12-27 15:11:20'),
(1337, 65, 268, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 15:12:16', '2022-12-27 15:12:16'),
(1338, 65, 268, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 15:12:16', '2022-12-27 15:12:16'),
(1339, 66, 148, 184, '0', '2', 415, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-12-27 15:13:35', '2022-12-27 15:13:35'),
(1340, 66, 148, 185, '1', '2', 416, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 15:13:35', '2022-12-27 15:13:35'),
(1341, 66, 148, 186, '0', '4', 417, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-12-27 15:13:35', '2022-12-27 15:13:35'),
(1342, 66, 148, 187, '1', '4', 418, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 15:13:35', '2022-12-27 15:13:35'),
(1343, 65, 210, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 15:14:56', '2022-12-27 15:14:56'),
(1344, 65, 210, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 15:14:56', '2022-12-27 15:14:56'),
(1345, 66, 50, 184, '0', '2', 415, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-12-27 15:27:00', '2022-12-27 15:27:00'),
(1346, 66, 50, 185, '1', '2', 416, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 15:27:00', '2022-12-27 15:27:00'),
(1347, 66, 50, 186, '0', '4', 417, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-12-27 15:27:00', '2022-12-27 15:27:00'),
(1348, 66, 50, 187, '1', '4', 418, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 15:27:00', '2022-12-27 15:27:00'),
(1349, 65, 50, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 15:27:00', '2022-12-27 15:27:00'),
(1350, 65, 50, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 15:27:00', '2022-12-27 15:27:00'),
(1351, 66, 10, 184, '0', '2', 415, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-12-27 15:31:58', '2022-12-27 15:31:58'),
(1352, 66, 10, 185, '1', '2', 416, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 15:31:58', '2022-12-27 15:31:58'),
(1353, 66, 10, 186, '0', '4', 417, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-12-27 15:31:58', '2022-12-27 15:31:58'),
(1354, 66, 10, 187, '1', '4', 418, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 15:31:58', '2022-12-27 15:31:58'),
(1355, 65, 10, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 15:31:58', '2022-12-27 15:31:58'),
(1356, 65, 10, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 15:31:58', '2022-12-27 15:31:58'),
(1357, 65, 18, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 16:13:33', '2022-12-27 16:13:33'),
(1358, 65, 18, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 16:13:33', '2022-12-27 16:13:33'),
(1359, 64, 141, 180, '0', '1', 411, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-12-27 16:15:27', '2022-12-27 16:15:27'),
(1360, 64, 141, 181, '1', '1', 412, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 16:15:27', '2022-12-27 16:15:27'),
(1361, 64, 141, 182, '0', '2', 413, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-12-27 16:15:27', '2022-12-27 16:15:27'),
(1362, 64, 141, 183, '1', '2', 414, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 16:15:27', '2022-12-27 16:15:27'),
(1363, 65, 205, 188, '0', '6', 419, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2022-12-27 16:17:00', '2023-01-05 07:39:44'),
(1364, 65, 205, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 16:17:00', '2022-12-27 16:17:00'),
(1365, 65, 248, 188, '0', '6', 419, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2022-12-27 16:18:07', '2023-01-05 07:37:21'),
(1366, 65, 248, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 16:18:07', '2022-12-27 16:18:07'),
(1367, 65, 137, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 16:19:21', '2022-12-27 16:19:21'),
(1368, 65, 137, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 16:19:21', '2022-12-27 16:19:21'),
(1369, 64, 193, 180, '0', '1', 411, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-12-27 16:21:11', '2022-12-27 16:21:11'),
(1370, 64, 193, 181, '1', '1', 412, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 16:21:11', '2022-12-27 16:21:11'),
(1371, 64, 193, 182, '0', '2', 413, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-12-27 16:21:11', '2022-12-27 16:21:11'),
(1372, 64, 193, 183, '1', '2', 414, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 16:21:11', '2022-12-27 16:21:11'),
(1373, 65, 193, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 16:21:11', '2022-12-27 16:21:11'),
(1374, 65, 193, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 16:21:11', '2022-12-27 16:21:11'),
(1375, 66, 31, 184, '0', '2', 415, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-12-27 16:23:57', '2022-12-27 16:23:57'),
(1376, 66, 31, 185, '1', '2', 416, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 16:23:57', '2022-12-27 16:23:57'),
(1377, 66, 31, 186, '0', '4', 417, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-12-27 16:23:57', '2022-12-27 16:23:57'),
(1378, 66, 31, 187, '1', '4', 418, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 16:23:57', '2022-12-27 16:23:57'),
(1379, 65, 31, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 16:23:57', '2022-12-27 16:23:57'),
(1380, 65, 31, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 16:23:57', '2022-12-27 16:23:57'),
(1381, 65, 235, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 16:25:22', '2022-12-27 16:25:22'),
(1382, 65, 235, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 16:25:22', '2022-12-27 16:25:22'),
(1383, 64, 108, 180, '0', '1', 411, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-12-27 16:27:00', '2022-12-27 16:27:00'),
(1384, 64, 108, 181, '1', '1', 412, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 16:27:00', '2022-12-27 16:27:00'),
(1385, 64, 108, 182, '0', '2', 413, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2022-12-27 16:27:00', '2022-12-27 16:27:00'),
(1386, 64, 108, 183, '1', '2', 414, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 16:27:00', '2022-12-27 16:27:00'),
(1387, 66, 198, 184, '0', '2', 415, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-12-27 16:29:12', '2022-12-27 16:29:12'),
(1388, 66, 198, 185, '1', '2', 416, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 16:29:12', '2022-12-27 16:29:12'),
(1389, 66, 198, 186, '0', '4', 417, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-12-27 16:29:12', '2022-12-27 16:29:12'),
(1390, 66, 198, 187, '1', '4', 418, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 16:29:12', '2022-12-27 16:29:12'),
(1391, 66, 8, 184, '0', '2', 415, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-12-27 16:31:41', '2022-12-27 16:31:41'),
(1392, 66, 8, 185, '1', '2', 416, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 16:31:41', '2022-12-27 16:31:41'),
(1393, 66, 8, 186, '0', '4', 417, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-12-27 16:31:41', '2022-12-27 16:31:41'),
(1394, 66, 8, 187, '1', '4', 418, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 16:31:41', '2022-12-27 16:31:41'),
(1395, 65, 16, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 17:02:41', '2022-12-27 17:02:41'),
(1396, 65, 16, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:02:41', '2022-12-27 17:02:41'),
(1397, 66, 35, 184, '0', '2', 415, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-12-27 17:04:21', '2022-12-27 17:04:21'),
(1398, 66, 35, 185, '1', '2', 416, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:04:21', '2022-12-27 17:04:21'),
(1399, 66, 35, 186, '0', '4', 417, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-12-27 17:04:21', '2022-12-27 17:04:21'),
(1400, 66, 35, 187, '1', '4', 418, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:04:21', '2022-12-27 17:04:21'),
(1401, 66, 133, 184, '0', '2', 415, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-12-27 17:07:03', '2022-12-27 17:07:03'),
(1402, 66, 133, 185, '1', '2', 416, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:07:03', '2022-12-27 17:07:03'),
(1403, 66, 133, 186, '0', '4', 417, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-12-27 17:07:03', '2022-12-27 17:07:03'),
(1404, 66, 133, 187, '1', '4', 418, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:07:03', '2022-12-27 17:07:03'),
(1405, 66, 101, 184, '0', '2', 415, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-12-27 17:12:06', '2022-12-27 17:12:06'),
(1406, 66, 101, 185, '1', '2', 416, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:12:06', '2022-12-27 17:12:06'),
(1407, 66, 101, 186, '0', '4', 417, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-12-27 17:12:06', '2022-12-27 17:12:06'),
(1408, 66, 101, 187, '1', '4', 418, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:12:06', '2022-12-27 17:12:06'),
(1409, 66, 30, 184, '0', '2', 415, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-12-27 17:15:33', '2022-12-27 17:15:33'),
(1410, 66, 30, 185, '1', '2', 416, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:15:33', '2022-12-27 17:15:33'),
(1411, 66, 30, 186, '0', '4', 417, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-12-27 17:15:33', '2022-12-27 17:15:33'),
(1412, 66, 30, 187, '1', '4', 418, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:15:33', '2022-12-27 17:15:33'),
(1413, 65, 30, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 17:15:43', '2022-12-27 17:15:43'),
(1414, 65, 30, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:15:43', '2022-12-27 17:15:43'),
(1415, 65, 89, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 17:18:27', '2022-12-27 17:18:27'),
(1416, 65, 89, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:18:27', '2022-12-27 17:18:27'),
(1417, 65, 182, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 17:19:21', '2022-12-27 17:19:21'),
(1418, 65, 182, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:19:21', '2022-12-27 17:19:21'),
(1419, 65, 257, 188, '0', '6', 419, 240, 240, 240, 240, 240, 240, 240, 240, 240, '0.00', '0.00', '0', '2022-12-27 17:23:05', '2022-12-27 17:23:05'),
(1420, 65, 257, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:23:05', '2022-12-27 17:23:05'),
(1421, 65, 188, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 17:24:38', '2022-12-27 17:24:38'),
(1422, 65, 188, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:24:38', '2022-12-27 17:24:38'),
(1423, 65, 32, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 17:29:31', '2022-12-27 17:29:31'),
(1424, 65, 32, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:29:31', '2022-12-27 17:29:31'),
(1425, 65, 250, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 17:30:30', '2022-12-27 17:30:30'),
(1426, 65, 250, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:30:30', '2022-12-27 17:30:30'),
(1427, 64, 231, 180, '0', '1', 411, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-12-27 17:31:54', '2022-12-27 17:31:54'),
(1428, 64, 231, 181, '1', '1', 412, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:31:54', '2022-12-27 17:31:54'),
(1429, 64, 231, 182, '0', '2', 413, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-12-27 17:31:54', '2022-12-27 17:31:54'),
(1430, 64, 231, 183, '1', '2', 414, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:31:54', '2022-12-27 17:31:54'),
(1431, 64, 142, 180, '0', '1', 411, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-12-27 17:33:19', '2022-12-27 17:33:19'),
(1432, 64, 142, 181, '1', '1', 412, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:33:19', '2022-12-27 17:33:19'),
(1433, 64, 142, 182, '0', '2', 413, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-12-27 17:33:19', '2022-12-27 17:33:19'),
(1434, 64, 142, 183, '1', '2', 414, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:33:19', '2022-12-27 17:33:19'),
(1435, 65, 17, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 17:34:43', '2022-12-27 17:34:43'),
(1436, 65, 17, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:34:43', '2022-12-27 17:34:43'),
(1437, 65, 19, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 17:35:52', '2022-12-27 17:35:52'),
(1438, 65, 19, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:35:52', '2022-12-27 17:35:52'),
(1439, 64, 186, 180, '0', '1', 411, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-12-27 17:37:25', '2022-12-27 17:37:25'),
(1440, 64, 186, 181, '1', '1', 412, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:37:25', '2022-12-27 17:37:25'),
(1441, 64, 186, 182, '0', '2', 413, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-12-27 17:37:25', '2022-12-27 17:37:25'),
(1442, 64, 186, 183, '1', '2', 414, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:37:25', '2022-12-27 17:37:25'),
(1443, 64, 62, 180, '0', '1', 411, 140, 140, 140, 140, 140, 140, 140, 140, 140, '0.00', '0.00', '0', '2022-12-27 17:39:49', '2022-12-27 17:39:49'),
(1444, 64, 62, 181, '1', '1', 412, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:39:49', '2022-12-27 17:39:49'),
(1445, 64, 62, 182, '0', '2', 413, 140, 140, 140, 140, 140, 140, 140, 140, 140, '0.00', '0.00', '0', '2022-12-27 17:39:49', '2022-12-27 17:39:49'),
(1446, 64, 62, 183, '1', '2', 414, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:39:49', '2022-12-27 17:39:49'),
(1447, 66, 65, 184, '0', '2', 415, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-12-27 17:42:49', '2022-12-27 17:42:49'),
(1448, 66, 65, 185, '1', '2', 416, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:42:49', '2022-12-27 17:42:49'),
(1449, 66, 65, 186, '0', '4', 417, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2022-12-27 17:42:49', '2022-12-27 17:42:49'),
(1450, 66, 65, 187, '1', '4', 418, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:42:49', '2022-12-27 17:42:49'),
(1451, 65, 45, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 17:44:02', '2022-12-27 17:44:02'),
(1452, 65, 45, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:44:02', '2022-12-27 17:44:02'),
(1453, 65, 233, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 17:44:57', '2022-12-27 17:44:57'),
(1454, 65, 233, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:44:57', '2022-12-27 17:44:57'),
(1455, 64, 13, 180, '0', '1', 411, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-12-27 17:46:23', '2022-12-27 17:46:23'),
(1456, 64, 13, 181, '1', '1', 412, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:46:23', '2022-12-27 17:46:23'),
(1457, 64, 13, 182, '0', '2', 413, 130, 130, 130, 130, 130, 130, 130, 130, 130, '0.00', '0.00', '0', '2022-12-27 17:46:23', '2022-12-27 17:46:23'),
(1458, 64, 13, 183, '1', '2', 414, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:46:23', '2022-12-27 17:46:23'),
(1459, 65, 288, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-27 17:49:44', '2022-12-27 17:49:44'),
(1460, 65, 288, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-27 17:49:44', '2022-12-27 17:49:44'),
(1461, 65, 252, 188, '0', '6', 419, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2022-12-28 05:20:08', '2023-01-04 11:43:42');
INSERT INTO `sender_manage_price` (`id`, `logistic_id`, `sender_id`, `manage_price_id`, `shipment_type`, `rule`, `rule_index`, `within_city`, `within_state`, `within_zone`, `metro`, `metro_2`, `rest_of_india`, `rest_of_india_2`, `special_zone`, `jammu_kashmir`, `cod_price`, `cod_percentage`, `is_cod_charge_return`, `created_at`, `updated_at`) VALUES
(1462, 65, 252, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-28 05:20:08', '2022-12-28 05:20:08'),
(1463, 37, 303, 158, '0', '6', 228, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2022-12-28 06:59:06', '2022-12-28 06:59:06'),
(1464, 37, 303, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-28 06:59:06', '2022-12-28 06:59:06'),
(1465, 62, 303, 178, '0', '6', 409, 270, 270, 270, 270, 270, 270, 270, 270, 270, '0.00', '0.00', '0', '2022-12-28 06:59:06', '2022-12-28 06:59:06'),
(1466, 62, 303, 179, '1', '6', 410, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-28 06:59:06', '2022-12-28 06:59:06'),
(1467, 65, 303, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-28 06:59:06', '2022-12-28 06:59:06'),
(1468, 65, 303, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-28 06:59:06', '2022-12-28 06:59:06'),
(1469, 39, 303, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2022-12-28 07:07:01', '2022-12-28 07:07:01'),
(1470, 39, 303, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-28 07:07:01', '2022-12-28 07:07:01'),
(1471, 37, 309, 158, '0', '6', 228, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2022-12-31 12:39:36', '2023-01-04 11:40:05'),
(1472, 37, 309, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-31 12:39:36', '2022-12-31 12:39:36'),
(1473, 38, 309, 160, '0', '6', 230, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2022-12-31 12:39:36', '2023-01-04 08:11:12'),
(1474, 38, 309, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-31 12:39:36', '2022-12-31 12:39:36'),
(1475, 62, 309, 178, '0', '6', 409, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2022-12-31 12:39:36', '2023-01-04 08:14:11'),
(1476, 62, 309, 179, '1', '6', 410, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2022-12-31 12:39:36', '2022-12-31 12:39:36'),
(1477, 37, 311, 158, '0', '6', 228, 240, 240, 240, 240, 240, 240, 240, 240, 240, '0.00', '0.00', '0', '2023-01-01 12:29:23', '2023-01-01 12:29:23'),
(1478, 37, 311, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-01 12:29:23', '2023-01-01 12:29:23'),
(1479, 38, 311, 160, '0', '6', 230, 240, 240, 240, 240, 240, 240, 240, 240, 240, '0.00', '0.00', '0', '2023-01-01 12:29:23', '2023-01-01 12:29:23'),
(1480, 38, 311, 161, '1', '6', 231, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-01 12:29:23', '2023-01-01 12:29:23'),
(1481, 39, 311, 162, '0', '6', 232, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2023-01-01 12:29:23', '2023-01-01 12:29:23'),
(1482, 39, 311, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-01 12:29:23', '2023-01-01 12:29:23'),
(1483, 6, 313, 21, '0', '2', 105, 150, 150, 150, 150, 150, 150, 150, 200, 200, '0.00', '0.00', '0', '2023-01-02 07:05:53', '2023-01-02 07:05:53'),
(1484, 6, 313, 22, '1', '2', 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-02 07:05:54', '2023-01-02 07:05:54'),
(1485, 6, 313, 23, '0', '4', 107, 150, 150, 150, 150, 150, 150, 150, 200, 200, '0.00', '0.00', '0', '2023-01-02 07:05:54', '2023-01-02 07:05:54'),
(1486, 6, 313, 24, '1', '4', 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-02 07:05:54', '2023-01-02 07:05:54'),
(1487, 20, 313, 88, '0', '1', 161, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2023-01-02 07:05:55', '2023-01-02 07:06:26'),
(1488, 20, 313, 89, '1', '1', 162, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2023-01-02 07:05:55', '2023-01-02 07:06:26'),
(1489, 20, 313, 90, '0', '2', 163, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2023-01-02 07:05:55', '2023-01-02 07:06:26'),
(1490, 20, 313, 91, '1', '2', 164, 60, 60, 50, 70, 70, 80, 80, 90, 90, '50.00', '2.50', '0', '2023-01-02 07:05:55', '2023-01-02 07:06:26'),
(1491, 60, 313, 170, '0', '2', 401, 200, 200, 200, 200, 200, 200, 200, 220, 220, '0.00', '0.00', '0', '2023-01-02 07:05:55', '2023-01-02 07:05:55'),
(1492, 60, 313, 171, '1', '2', 402, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-02 07:05:56', '2023-01-02 07:05:56'),
(1493, 5, 315, 17, '0', '1', 101, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2023-01-02 21:29:05', '2023-01-02 21:29:05'),
(1494, 5, 315, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-02 21:29:05', '2023-01-02 21:29:05'),
(1495, 5, 315, 19, '0', '2', 103, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2023-01-02 21:29:05', '2023-01-02 21:29:05'),
(1496, 5, 315, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-02 21:29:05', '2023-01-02 21:29:05'),
(1497, 20, 315, 88, '0', '1', 161, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2023-01-02 21:29:05', '2023-01-02 21:29:05'),
(1498, 20, 315, 89, '1', '1', 162, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2023-01-02 21:29:05', '2023-01-02 21:29:05'),
(1499, 20, 315, 90, '0', '2', 163, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2023-01-02 21:29:05', '2023-01-02 21:29:05'),
(1500, 20, 315, 91, '1', '2', 164, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2023-01-02 21:29:05', '2023-01-02 21:29:05'),
(1501, 60, 315, 170, '0', '2', 401, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2023-01-02 21:29:05', '2023-01-02 21:29:05'),
(1502, 60, 315, 171, '1', '2', 402, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-02 21:29:05', '2023-01-02 21:29:05'),
(1503, 66, 196, 184, '0', '2', 415, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2023-01-03 09:19:38', '2023-01-03 09:19:38'),
(1504, 66, 196, 185, '1', '2', 416, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-03 09:19:38', '2023-01-03 09:19:38'),
(1505, 66, 196, 186, '0', '4', 417, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2023-01-03 09:19:38', '2023-01-03 09:19:38'),
(1506, 66, 196, 187, '1', '4', 418, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-03 09:19:38', '2023-01-03 09:19:38'),
(1507, 37, 318, 158, '0', '6', 228, 200, 200, 200, 200, 200, 200, 200, 200, 200, '0.00', '0.00', '0', '2023-01-04 06:46:31', '2023-01-04 06:46:31'),
(1508, 37, 318, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-04 06:46:31', '2023-01-04 06:46:31'),
(1509, 39, 318, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2023-01-04 06:46:31', '2023-01-04 06:46:31'),
(1510, 39, 318, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-04 06:46:31', '2023-01-04 06:46:31'),
(1511, 65, 318, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2023-01-04 06:46:31', '2023-01-04 06:46:31'),
(1512, 65, 318, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-04 06:46:31', '2023-01-04 06:46:31'),
(1513, 65, 309, 188, '0', '6', 419, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2023-01-04 11:37:01', '2023-01-04 11:37:01'),
(1514, 65, 309, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-04 11:37:01', '2023-01-04 11:37:01'),
(1515, 39, 27, 162, '0', '6', 232, 240, 240, 240, 240, 240, 240, 240, 240, 240, '0.00', '0.00', '0', '2023-01-07 09:00:13', '2023-01-07 09:00:13'),
(1516, 39, 27, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-07 09:00:13', '2023-01-07 09:00:13'),
(1517, 62, 27, 178, '0', '6', 409, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2023-01-07 09:00:13', '2023-01-07 09:00:13'),
(1518, 62, 27, 179, '1', '6', 410, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-07 09:00:13', '2023-01-07 09:00:13'),
(1519, 65, 27, 188, '0', '6', 419, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2023-01-07 09:00:13', '2023-01-07 09:00:13'),
(1520, 65, 27, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-07 09:00:13', '2023-01-07 09:00:13'),
(1521, 37, 338, 158, '0', '6', 228, 210, 210, 210, 210, 210, 210, 210, 210, 210, '0.00', '0.00', '0', '2023-01-10 06:04:16', '2023-01-10 06:04:16'),
(1522, 37, 338, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-10 06:04:16', '2023-01-10 06:04:16'),
(1523, 39, 338, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2023-01-10 06:04:16', '2023-01-10 06:04:16'),
(1524, 39, 338, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-10 06:04:16', '2023-01-10 06:04:16'),
(1525, 62, 338, 178, '0', '6', 409, 280, 280, 280, 280, 280, 280, 280, 280, 280, '0.00', '0.00', '0', '2023-01-10 06:04:16', '2023-01-10 06:04:16'),
(1526, 62, 338, 179, '1', '6', 410, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-10 06:04:16', '2023-01-10 06:04:16'),
(1527, 65, 338, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2023-01-10 06:04:16', '2023-01-10 06:04:16'),
(1528, 65, 338, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-10 06:04:16', '2023-01-10 06:04:16'),
(1529, 21, 353, 92, '0', '2', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '0.00', '0.00', '0', '2023-01-19 05:50:42', '2023-01-19 05:50:42'),
(1530, 21, 353, 93, '1', '2', 166, 108, 108, 90, 126, 126, 144, 144, 162, 162, '0.00', '0.00', '0', '2023-01-19 05:50:42', '2023-01-19 05:50:42'),
(1531, 21, 353, 94, '0', '4', 165, 108, 108, 90, 126, 126, 144, 144, 162, 162, '0.00', '0.00', '0', '2023-01-19 05:50:42', '2023-01-19 05:50:42'),
(1532, 21, 353, 95, '1', '4', 167, 108, 108, 90, 126, 126, 144, 144, 162, 162, '0.00', '0.00', '0', '2023-01-19 05:50:42', '2023-01-19 05:50:42'),
(1533, 37, 353, 158, '0', '6', 228, 170, 170, 170, 170, 170, 170, 170, 170, 170, '0.00', '0.00', '0', '2023-01-19 05:50:42', '2023-01-19 05:50:42'),
(1534, 37, 353, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-19 05:50:42', '2023-01-19 05:50:42'),
(1535, 39, 353, 162, '0', '6', 232, 240, 240, 240, 240, 240, 240, 240, 240, 240, '0.00', '0.00', '0', '2023-01-19 05:50:42', '2023-01-19 05:50:42'),
(1536, 39, 353, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-19 05:50:42', '2023-01-19 05:50:42'),
(1537, 62, 353, 178, '0', '6', 409, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2023-01-19 05:50:42', '2023-01-19 05:50:42'),
(1538, 62, 353, 179, '1', '6', 410, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-19 05:50:42', '2023-01-19 05:50:42'),
(1539, 65, 353, 188, '0', '6', 419, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2023-01-19 05:50:42', '2023-01-19 05:50:42'),
(1540, 65, 353, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-19 05:50:42', '2023-01-19 05:50:42'),
(1541, 65, 289, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2023-01-28 07:11:57', '2023-01-28 07:11:57'),
(1542, 65, 289, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-28 07:11:57', '2023-01-28 07:11:57'),
(1543, 5, 359, 17, '0', '1', 101, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2023-01-30 05:46:28', '2023-01-30 05:46:28'),
(1544, 5, 359, 18, '1', '1', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-30 05:46:28', '2023-01-30 05:46:28'),
(1545, 5, 359, 19, '0', '2', 103, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2023-01-30 05:46:28', '2023-01-30 05:46:28'),
(1546, 5, 359, 20, '1', '2', 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-30 05:46:28', '2023-01-30 05:46:28'),
(1547, 37, 360, 158, '0', '6', 228, 190, 190, 190, 190, 190, 190, 190, 190, 190, '0.00', '0.00', '0', '2023-01-30 06:36:33', '2023-01-30 06:36:33'),
(1548, 37, 360, 159, '1', '6', 229, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-30 06:36:33', '2023-01-30 06:36:33'),
(1549, 39, 360, 162, '0', '6', 232, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2023-01-30 06:36:33', '2023-01-30 06:36:33'),
(1550, 39, 360, 163, '1', '6', 233, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-30 06:36:33', '2023-01-30 06:36:33'),
(1551, 62, 360, 178, '0', '6', 409, 300, 300, 300, 300, 300, 300, 300, 300, 300, '0.00', '0.00', '0', '2023-01-30 06:36:33', '2023-01-30 06:36:33'),
(1552, 62, 360, 179, '1', '6', 410, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-30 06:36:33', '2023-01-30 06:36:33'),
(1553, 65, 360, 188, '0', '6', 419, 260, 260, 260, 260, 260, 260, 260, 260, 260, '0.00', '0.00', '0', '2023-01-30 06:36:33', '2023-01-30 06:36:33'),
(1554, 65, 360, 189, '1', '6', 420, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-01-30 06:36:33', '2023-01-30 06:36:33'),
(1555, 20, 361, 88, '0', '1', 161, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2023-02-01 10:31:17', '2023-02-01 10:31:17'),
(1556, 20, 361, 89, '1', '1', 162, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2023-02-01 10:31:17', '2023-02-01 10:31:17'),
(1557, 20, 361, 90, '0', '2', 163, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2023-02-01 10:31:17', '2023-02-01 10:31:17'),
(1558, 20, 361, 91, '1', '2', 164, 60, 60, 50, 70, 70, 80, 80, 90, 90, '0.00', '0.00', '0', '2023-02-01 10:31:17', '2023-02-01 10:31:17'),
(1559, 25, 361, 98, '0', '1', 168, 100, 100, 100, 100, 100, 100, 100, 100, 100, '0.00', '0.00', '0', '2023-02-01 10:31:17', '2023-02-01 10:31:17'),
(1560, 25, 361, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-01 10:31:18', '2023-02-01 10:31:18'),
(1561, 25, 361, 100, '0', '2', 170, 100, 100, 100, 100, 100, 100, 100, 100, 100, '0.00', '0.00', '0', '2023-02-01 10:31:18', '2023-02-01 10:31:18'),
(1562, 25, 361, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-01 10:31:18', '2023-02-01 10:31:18'),
(1563, 64, 361, 180, '0', '1', 411, 100, 100, 100, 100, 100, 100, 100, 100, 100, '0.00', '0.00', '0', '2023-02-01 10:31:18', '2023-02-01 10:31:18'),
(1564, 64, 361, 181, '1', '1', 412, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-01 10:31:18', '2023-02-01 10:31:18'),
(1565, 64, 361, 182, '0', '2', 413, 100, 100, 100, 100, 100, 100, 100, 100, 100, '0.00', '0.00', '0', '2023-02-01 10:31:18', '2023-02-01 10:31:18'),
(1566, 64, 361, 183, '1', '2', 414, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-01 10:31:18', '2023-02-01 10:31:18'),
(1567, 8, 363, 29, '0', '1', 113, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2023-02-02 11:11:04', '2023-02-02 11:11:04'),
(1568, 8, 363, 30, '1', '1', 114, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-02 11:11:04', '2023-02-02 11:11:04'),
(1569, 8, 363, 31, '0', '2', 115, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2023-02-02 11:11:04', '2023-02-02 11:11:04'),
(1570, 8, 363, 33, '1', '2', 116, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-02 11:11:04', '2023-02-02 11:11:04'),
(1571, 25, 363, 98, '0', '1', 168, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2023-02-02 11:11:04', '2023-02-02 11:11:04'),
(1572, 25, 363, 99, '1', '1', 169, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-02 11:11:04', '2023-02-02 11:11:04'),
(1573, 25, 363, 100, '0', '2', 170, 110, 110, 110, 110, 110, 110, 110, 110, 110, '0.00', '0.00', '0', '2023-02-02 11:11:04', '2023-02-02 11:11:04'),
(1574, 25, 363, 101, '1', '2', 171, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-02 11:11:04', '2023-02-02 11:11:04'),
(1575, 64, 363, 180, '0', '1', 411, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2023-02-02 11:11:04', '2023-02-02 11:11:04'),
(1576, 64, 363, 181, '1', '1', 412, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-02 11:11:04', '2023-02-02 11:11:04'),
(1577, 64, 363, 182, '0', '2', 413, 150, 150, 150, 150, 150, 150, 150, 150, 150, '0.00', '0.00', '0', '2023-02-02 11:11:04', '2023-02-02 11:11:04'),
(1578, 64, 363, 183, '1', '2', 414, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-02 11:11:04', '2023-02-02 11:11:04'),
(1579, 9, 364, 34, '0', '2', 117, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2023-02-04 13:48:37', '2023-02-04 13:48:37'),
(1580, 9, 364, 35, '1', '2', 118, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-04 13:48:37', '2023-02-04 13:48:37'),
(1581, 9, 364, 42, '0', '4', 119, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2023-02-04 13:48:37', '2023-02-04 13:48:37'),
(1582, 9, 364, 43, '1', '4', 120, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-04 13:48:37', '2023-02-04 13:48:37'),
(1583, 24, 364, 102, '0', '2', 172, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2023-02-04 13:48:37', '2023-02-04 13:48:37'),
(1584, 24, 364, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-04 13:48:37', '2023-02-04 13:48:37'),
(1585, 24, 364, 104, '0', '4', 174, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2023-02-04 13:48:37', '2023-02-04 13:48:37'),
(1586, 24, 364, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-04 13:48:37', '2023-02-04 13:48:37'),
(1587, 66, 364, 184, '0', '2', 415, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2023-02-04 13:48:37', '2023-02-04 13:48:37'),
(1588, 66, 364, 185, '1', '2', 416, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-04 13:48:37', '2023-02-04 13:48:37'),
(1589, 66, 364, 186, '0', '4', 417, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2023-02-04 13:48:37', '2023-02-04 13:48:37'),
(1590, 66, 364, 187, '1', '4', 418, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-04 13:48:37', '2023-02-04 13:48:37'),
(1591, 9, 365, 34, '0', '2', 117, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2023-02-04 13:49:49', '2023-02-04 13:49:49'),
(1592, 9, 365, 35, '1', '2', 118, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-04 13:49:49', '2023-02-04 13:49:49'),
(1593, 9, 365, 42, '0', '4', 119, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2023-02-04 13:49:49', '2023-02-04 13:49:49'),
(1594, 9, 365, 43, '1', '4', 120, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-04 13:49:49', '2023-02-04 13:49:49'),
(1595, 24, 365, 102, '0', '2', 172, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2023-02-04 13:49:49', '2023-02-04 13:49:49'),
(1596, 24, 365, 103, '1', '2', 173, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-04 13:49:49', '2023-02-04 13:49:49'),
(1597, 24, 365, 104, '0', '4', 174, 160, 160, 160, 160, 160, 160, 160, 160, 160, '0.00', '0.00', '0', '2023-02-04 13:49:49', '2023-02-04 13:49:49'),
(1598, 24, 365, 105, '1', '4', 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-04 13:49:49', '2023-02-04 13:49:49'),
(1599, 66, 365, 184, '0', '2', 415, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2023-02-04 13:49:49', '2023-02-04 13:49:49'),
(1600, 66, 365, 185, '1', '2', 416, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-04 13:49:49', '2023-02-04 13:49:49'),
(1601, 66, 365, 186, '0', '4', 417, 220, 220, 220, 220, 220, 220, 220, 220, 220, '0.00', '0.00', '0', '2023-02-04 13:49:49', '2023-02-04 13:49:49'),
(1602, 66, 365, 187, '1', '4', 418, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0', '2023-02-04 13:49:49', '2023-02-04 13:49:49'),
(1603, 1, 3, 1, '1', '1', 1, 55, 55, 45, 65, 65, 75, 75, 80, 80, '0.00', '0.00', '0', '2023-02-21 03:02:22', '2023-02-23 03:32:04'),
(1604, 1, 3, 2, '1', '1', 2, 55, 55, 45, 65, 65, 75, 75, 80, 80, '0.00', '0.00', '0', '2023-02-21 03:03:46', '2023-02-23 03:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerID` int NOT NULL,
  `CustomerName` varchar(250) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(250) NOT NULL,
  `PostalCode` varchar(30) NOT NULL,
  `Country` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temp_forward_order_master`
--

CREATE TABLE `temp_forward_order_master` (
  `id` bigint NOT NULL,
  `user_id` bigint DEFAULT NULL,
  `pickup_address_id` bigint DEFAULT NULL,
  `order_product_detail_id` bigint DEFAULT NULL,
  `logistic_id` int DEFAULT NULL,
  `deliver_address_id` bigint DEFAULT NULL COMMENT 'receiver address id\r\n',
  `order_no` varchar(25) DEFAULT NULL,
  `customer_order_no` varchar(100) DEFAULT NULL,
  `order_type` enum('0','1') DEFAULT NULL COMMENT '0-prepaid, 1-cod',
  `sgst_amount` decimal(10,2) DEFAULT '0.00',
  `cgst_amount` decimal(10,2) DEFAULT '0.00',
  `igst_amount` decimal(10,2) DEFAULT '0.00',
  `total_shipping_amount` decimal(10,2) DEFAULT NULL,
  `awb_number` varchar(25) DEFAULT NULL,
  `paid_amount` decimal(10,2) DEFAULT NULL,
  `remain_amount` decimal(10,2) DEFAULT NULL,
  `is_seller_info` enum('0','1') DEFAULT NULL COMMENT '0-no, 1-yes',
  `packing_slip_warehouse_name` varchar(25) DEFAULT NULL,
  `is_return_address_same_as_pickup` enum('0','1') DEFAULT NULL COMMENT '0-no, 1-yes',
  `return_address_id` bigint DEFAULT NULL,
  `is_reverse` enum('0','1') DEFAULT '0' COMMENT '0-no, 1-yes',
  `is_cancelled` enum('0','1','2') DEFAULT '0' COMMENT '0-no, 1-yes, 2-cancelled but remain in api',
  `is_pre_awb` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0-simple order, 1-pre awb order ',
  `is_created` enum('0','1') NOT NULL COMMENT '0-not_created,1-created',
  `created_at` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_order_master`
--

CREATE TABLE `temp_order_master` (
  `id` bigint NOT NULL,
  `user_id` bigint NOT NULL,
  `pickup_address_id` bigint NOT NULL,
  `order_product_detail_id` int DEFAULT NULL,
  `logistic_id` int DEFAULT NULL,
  `total_shipping_amount` float(10,2) NOT NULL DEFAULT '0.00',
  `awb_number` varchar(25) DEFAULT NULL,
  `deliver_address_id` bigint NOT NULL,
  `order_no` varchar(25) DEFAULT NULL,
  `customer_order_no` varchar(100) DEFAULT NULL,
  `order_type` enum('0','1') NOT NULL COMMENT '	0-prepaid, 1-cod',
  `sgst_amount` decimal(10,2) NOT NULL,
  `cgst_amount` decimal(10,2) DEFAULT NULL,
  `igst_amount` decimal(10,2) DEFAULT NULL,
  `is_process` enum('0','1') NOT NULL COMMENT '0-success,1-error',
  `is_flag` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '0-hold,1-process, 2-in creation queue',
  `is_pre_awb` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0-simple order, 1-pre awb order',
  `is_created` enum('0','1') NOT NULL COMMENT '0-not_created,1-created',
  `is_running` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0-not running,1- running',
  `error_message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int NOT NULL,
  `paid_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `remain_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `remarks` varchar(150) DEFAULT NULL,
  `source` enum('0','1') DEFAULT '0' COMMENT '0-for Bulk,  1-for Shopify'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `original_password` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `phone` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `website` varchar(35) DEFAULT NULL,
  `wallet_balance` decimal(10,2) DEFAULT '0.00',
  `type` enum('1','2','3','4') NOT NULL DEFAULT '4' COMMENT '1-admin,2-member,3-accountant,4-customer',
  `status` enum('1','2','3') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '1' COMMENT '''1 Pending'',''2 Approved'',''3 Rejected''',
  `rejection_reason` text,
  `is_active` enum('1','2') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '2' COMMENT '1-inactive, 2-active',
  `api_is_web_access` enum('0','1') DEFAULT NULL COMMENT '0-no, 1-yes',
  `api_pickup_address_id` int DEFAULT NULL,
  `api_key` varchar(100) DEFAULT NULL,
  `api_user_id` varchar(100) DEFAULT NULL,
  `allow_credit` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0' COMMENT '0-no, 1-yes',
  `allow_credit_limit` decimal(10,2) DEFAULT '0.00',
  `facebook_id` varchar(255) DEFAULT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `is_online` enum('1','2') NOT NULL DEFAULT '1',
  `is_pre_awb_allow` enum('1','2') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '1' COMMENT '1- Not Allowed,2- Allowed',
  `is_cod_allow` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0-not allow, 1-allow',
  `is_prepaid_allow` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0-not allow, 1-allow',
  `logo_image_name` varchar(256) DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `first_name`, `last_name`, `name`, `company_name`, `email`, `email_verified_at`, `password`, `original_password`, `phone`, `website`, `wallet_balance`, `type`, `status`, `rejection_reason`, `is_active`, `api_is_web_access`, `api_pickup_address_id`, `api_key`, `api_user_id`, `allow_credit`, `allow_credit_limit`, `facebook_id`, `google_id`, `remember_token`, `is_online`, `is_pre_awb_allow`, `is_cod_allow`, `is_prepaid_allow`, `logo_image_name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, NULL, 'AKASH', 'PANDYA', 'AKASH PANDYA', 'AKASH PANDYA', 'expresscourier444@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Akash@2409', '9998432442', '', '-20805.06', '4', '1', NULL, '1', '1', NULL, NULL, NULL, '1', '10000.00', NULL, NULL, NULL, '1', '', '0', '0', '1656139752.png', NULL, 1, '2022-05-18 11:37:35', '2023-02-24 03:30:37'),
(3, NULL, NULL, NULL, 'Start Dealing', NULL, 'startdealing@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '123456789', '7894561235', '', '-210.00', '4', '1', NULL, '1', '', 3, NULL, NULL, '1', '100000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2022-06-03 06:52:57', '2023-02-09 04:02:21'),
(6, NULL, NULL, NULL, 'mehul NAKARANI', NULL, 'ttfashion94@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'mehul@1998', '9638420189', 'https://ttfashion.in/', '-134.96', '4', '1', NULL, '1', '1', 4, '5f9cb211f2c9d99a95d2645fcdc3bc11', '635a9e0fa89ff17d74fabc553c0bfecf', '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', '1654662088.jpg', NULL, 3, '2022-06-06 07:40:32', '2022-11-14 06:32:54'),
(5, NULL, NULL, NULL, 'Shivshakti Mobileaccessories', NULL, 'shivshaktimobileaccessories16@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '7096859563', '7096859563', '', '55.75', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-06-04 07:22:39', '2023-02-09 04:02:52'),
(7, NULL, NULL, NULL, 'sagarkumar rakholiya', NULL, 'roshnifashion1@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'sagar@123', '9265534061', '', '-52093.30', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '100.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-06-08 07:16:56', '2023-02-10 11:23:00'),
(8, NULL, NULL, NULL, 'Gotisdesign ', NULL, 'gotisdesignculture@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9913500601', '9913500601', 'https://www.gotisdesign.com/', '140.00', '4', '1', NULL, '1', '0', 7, '341460a54ab8a6c12ef5a5f1947dd346', 'c6f88805a9c7f3db84b91a9800089f94', '1', '0.00', NULL, NULL, NULL, '1', '', '0', '0', '1655277004.png', NULL, 3, '2022-06-13 07:32:03', '2022-08-16 11:34:34'),
(9, NULL, NULL, NULL, 'Vijay Vaghasiya', NULL, 'trishulomcloths143@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Vijay888$#@', '9316471862', 'www.littlefolk.in', '0.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-06-14 07:38:13', '2022-06-14 08:38:51'),
(10, NULL, NULL, NULL, 'chiragbhai kevadiya', NULL, 'kevadiyachirag24@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'chirag@1996', '9558639922', '', '1432.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-06-14 08:21:17', '2023-02-01 10:37:56'),
(11, NULL, NULL, NULL, 'VIVEK VAGHANI', NULL, 'info.newmarutienterprise@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Vivek@81', '9510107059', '', '-161.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '200.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-06-15 05:53:49', '2022-09-10 06:22:10'),
(12, NULL, NULL, NULL, 'PARAKASH RAMANI', NULL, '24FASHION@123GMAIL.COM', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Bhavesh@123', '8469035893', 'https://devanshitrend.com/', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-06-16 08:45:56', '2022-06-16 08:45:56'),
(13, NULL, NULL, NULL, 'RAVI', NULL, '24fashion123@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Bhavesh@123', '8469035893', 'https://devanshitrend.com/', '0.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-06-16 08:46:57', '2023-01-27 08:37:47'),
(14, NULL, NULL, NULL, 'Mavani Dharmik', NULL, 'adahstyle.india@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'A@8140420119', '8140420119', 'https://adahstyle.com/', '0.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-06-17 08:09:50', '2022-06-18 04:36:06'),
(269, NULL, NULL, NULL, 'Althaf Hussain Shaik', NULL, 'shaikalthaf101@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'AZ1026@Anr', '9000509095', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-08 03:16:13', '2022-12-08 03:16:13'),
(15, NULL, NULL, NULL, 'Ajay Rathod', NULL, 'info.justlook.com@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'just@123', '9316702120', 'roopmati.com', '0.00', '4', '1', NULL, '1', '1', 14, '39b9a10815c6b4ba85e2d967d09b9f28', '279257f756abc16653cb4d45a5dbfa76', '1', '100000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-06-20 06:58:05', '2023-02-10 10:45:59'),
(16, NULL, NULL, NULL, 'Harsh Vora', NULL, 'info.besimshop@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'vora@4592', '7863801083', 'https://haldicloth.com/', '0.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-06-20 08:00:28', '2022-08-30 08:16:26'),
(17, NULL, NULL, NULL, 'looks andlike', NULL, 'looksandlike.in@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Ravi@123', '9316192676', '', '0.00', '4', '1', NULL, '1', '1', 11, '356572bbd64426a577ff1ea4a9409e32', 'c116a6cab21b800937c844cf52bcae14', '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-06-20 09:05:10', '2022-07-26 07:30:27'),
(18, NULL, NULL, NULL, 'DA- MILANO', NULL, 'damilanoo.com@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Khushal@123', '9316062722', 'https://da-milano.com/', '0.00', '4', '1', NULL, '1', '1', 12, '0c9ebd9b9657f0cb77fb55e479535003', 'ad284e171c5cf88960fbcddab9c65fe2', '1', '100000.00', NULL, NULL, NULL, '1', '', '0', '0', '1655805726.jpg', NULL, 3, '2022-06-20 09:10:22', '2022-12-02 11:57:13'),
(19, NULL, NULL, NULL, 'Looksandlike', NULL, 'laadkifashion.in@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'laadki@123', '9316192676', 'https://laadkifashion.in/', '260.00', '4', '1', NULL, '1', '1', 18, '45cda414ac5ca98ac40ae6b670c2f161', '89766bfc4878fe7567d6439d041b79de', '1', '150000.00', NULL, NULL, NULL, '1', '', '0', '0', '1659092037.png', NULL, 3, '2022-06-20 09:17:16', '2022-12-21 06:20:25'),
(20, NULL, NULL, NULL, 'IM  DARJI', NULL, 'IMDARJI.INDIA@GMAIL.COM', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Mavani@12345', '7016825376', '', '-178.00', '4', '1', NULL, '1', '0', 16, 'a48823dcaefbd14039e7ac7c86d79b35', '9d28a6402cfde51b7d7f008c4078ce32', '1', '10000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2022-06-20 11:33:45', '2022-09-06 12:57:33'),
(21, NULL, NULL, NULL, 'twinkle movaliya', NULL, 'lalitmovaliya2007@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Lwals@123', '8200388302', 'https://saugaat.in/', '0.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '1000.00', NULL, NULL, NULL, '1', '', '0', '0', '1655959182.png', NULL, 2, '2022-06-21 07:28:35', '2022-10-09 11:53:43'),
(22, NULL, NULL, NULL, 'rohit bhai gajera', NULL, 'Mkenterprise796@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'gajera@123', '9081270543', '', '-39421.92', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '300000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-06-28 07:31:57', '2023-01-04 15:41:23'),
(23, NULL, NULL, NULL, 'Alakh Creation', NULL, 'alakhcreation13@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9081270297', '9081270297', '', '-48517.04', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '100000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-06-29 09:14:58', '2023-01-04 15:40:44'),
(24, NULL, NULL, NULL, 'Sameer  Khan', NULL, 'sameer.khan@shop101.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Sameer@30', '9372722527', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-06-29 09:51:50', '2022-06-29 09:51:50'),
(25, NULL, NULL, NULL, 'Amit suvagiya', NULL, 'brightwinfashion2202@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'amit@123', '9662378116', 'https://brightwinfasion.com/', '0.00', '4', '1', NULL, '1', '1', 21, 'd72899872c8c8085a66a03d3e4984455', '15c4b60e1a19b859afa3847457254e0f', '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', '1657191419.jpg', NULL, 3, '2022-06-30 04:52:44', '2022-08-22 13:15:38'),
(26, NULL, NULL, NULL, 'KINJAL  KANANI', NULL, 'KANANIKINJAL2398@GMAIL.COM', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Jal@9712', '9316723461', 'https://wavboxshop.myshopify.com/', '0.00', '4', '1', NULL, '1', '1', 36, 'a694eef5f90d1568d85f40bba5eb791d', '7df2d50e4c23321377bd01596dfce8b2', '1', '10000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-06-30 07:39:15', '2023-01-03 09:53:14'),
(27, NULL, NULL, NULL, 'THE STORE OF BUFANI', NULL, 'thestoreofbufani@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Bufani@1326', '7778834675', 'https://www.thestoreofbufani.com/', '0.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', '1659082680.jpg', NULL, 3, '2022-07-05 09:00:05', '2023-01-09 12:39:11'),
(28, NULL, NULL, NULL, 'rangani rohit', NULL, 'aksharenterprise148@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Reva@1995', '7383083715', '', '0.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-07-05 10:48:55', '2022-07-08 14:14:14'),
(29, NULL, NULL, NULL, 'Siya fashion ', NULL, 'info.lehengahouse@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'malani@123', '8980116272', '', '450.00', '4', '1', NULL, '1', '1', 83, '9bdf57276c2ca1630c6e21495e0fb193', 'a4e7190263fc8a58fa4da0a755600971', '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-07-06 06:09:54', '2022-12-21 06:20:33'),
(30, NULL, NULL, NULL, 'JIGNESH KUMAR DHAMELIYA', NULL, 'PALAVFASHION.INFO@GMAIL.COM', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'jignesh@2000', '9099913403', 'https://palavfashion.com', '160.00', '4', '1', NULL, '1', '1', 104, '48486a37d643871a0dd1f70d69ac55ea', 'c496945ab7b60869a61762d82026c025', '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-07-06 09:47:11', '2022-12-21 06:19:56'),
(31, NULL, NULL, NULL, 'DIVYESH BHAI DAKHRA', NULL, 'chocoleza222@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'divyesh@1995', '8153961451', 'https://chocoleza.com', '0.00', '4', '1', NULL, '1', '1', 90, '08ca70754ada0623065c92bf3f1923eb', '56d0e732afea9edcb80cb57a495c6cea', '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-07-06 10:04:57', '2022-12-20 09:02:38'),
(32, NULL, NULL, NULL, 'KISHANBHAI SAKADASARIYA', NULL, 'newzarinafashion@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'zarina@123', '9104797535', 'https://zarinafashion.com', '-300.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-07-08 06:35:25', '2022-09-10 06:20:50'),
(33, NULL, NULL, NULL, 'Nikhil Patel', NULL, 'karanjilubhai1@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Ayz@1234', '7383686099', '', '-1820.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '1000000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2022-07-08 11:11:57', '2023-01-04 15:42:13'),
(34, NULL, NULL, NULL, 'Srivalli  Medikonda ', NULL, 'srivallimedikonda2001@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Srivalli24@2001', '9666599639', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-07-08 11:59:32', '2022-07-08 11:59:32'),
(35, NULL, NULL, NULL, 'Harshil Thummar', NULL, 'thumarharshil764@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Harshil@123', '9023142947', 'Meesho', '-666.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-07-12 06:43:45', '2022-12-22 18:13:00'),
(36, NULL, NULL, NULL, 'out wear', NULL, 'apanabazzar1@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Darshan@6092', '9737293086', '', '0.00', '4', '1', NULL, '1', '1', 35, 'ea6d8f1f42c041f8362bd30942ca0a20', '2e858c6f936f378edc07bf88695cb6cc', '1', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-07-14 06:21:09', '2022-10-21 10:59:50'),
(37, NULL, NULL, NULL, 'SNAPPY CHOICE', NULL, 'Relxocod100@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'dilip9925793341', '7567464928', '', '0.00', '4', '1', NULL, '1', '1', 40, '978b3242ee9e6a06b3ce79ea7f8a0601', 'a40a78e7dd9f4127d7c226e81a5847d3', '1', '1000000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-07-14 08:12:32', '2023-01-23 14:01:54'),
(38, NULL, NULL, NULL, 'Fashion House', NULL, 'fashionhouseindia2021@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '7265932097', '7265932097', '', '-500.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '100000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-07-14 08:51:39', '2022-07-14 08:56:49'),
(39, NULL, NULL, NULL, 'Care Wizard', NULL, 'care.wizard26@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9316723461', '9316723461', '', '-100.00', '4', '1', NULL, '1', '1', 38, '6efa21f572171ae5bf5d097bdd872bd4', 'cc11be8d0b7cf99366ad2838a4c6ef4f', '1', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-07-15 10:04:25', '2022-09-10 06:22:36'),
(40, NULL, NULL, NULL, 'Javed Rahman', NULL, 'iphonesales.in@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Coolwater@123', '+919839099687', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-07-20 07:19:16', '2022-07-20 07:19:16'),
(41, NULL, NULL, NULL, 'Javed Rehman', NULL, 'bestdealever7890@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Akash@2409', '8013505502', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-07-20 07:27:35', '2022-07-20 07:27:35'),
(42, NULL, NULL, NULL, 'Vijay Chauhan', NULL, 'pandyaakash4@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Akash@2409', '8013505502', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-07-20 07:28:36', '2022-07-20 07:28:36'),
(43, NULL, NULL, NULL, 'Ethnic Empires', NULL, 'Ethnicempires@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9265534061', '9265534061', '', '0.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-07-21 05:28:30', '2022-09-23 07:38:28'),
(44, NULL, NULL, NULL, 'ishikaben kakadiya', NULL, 'jaynejadhari555@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'mehul@123', '9638420189', '', '-300.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '15000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-07-21 07:28:00', '2022-08-31 06:31:54'),
(45, NULL, NULL, NULL, 'parth munjapara', NULL, 'info.womensila@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '4321@parth', '9979536880', 'https://womensila.com/', '0.00', '4', '1', NULL, '1', '1', 174, '993e659f3cee4bbb989d01883ba48323', '73b97fc3f7122830da06e2032ef68d91', '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-07-22 07:55:34', '2022-12-27 10:58:29'),
(46, NULL, NULL, NULL, 'Dulesh Verma', NULL, 'duleshverma143@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'johndeer', '9301637798', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-07-26 07:22:29', '2022-07-26 07:22:29'),
(47, NULL, NULL, NULL, 'Spyker Zon', NULL, 'Help.Spykerzon@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Spyker@0961', '9016784384', 'https://spykerzon.com/', '4190.00', '4', '1', NULL, '1', '1', 73, 'aec27e544d16684f2a9ffc2839469d96', '87c5cf389569d7a537c196ea82db6c1f', '1', '100000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-07-27 05:13:06', '2022-10-20 15:15:42'),
(48, NULL, NULL, NULL, 'vijay bambhaniya', NULL, 'styleicone39@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Gmail@30535325', '9574858693', '', '318.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-07-27 05:57:34', '2022-09-06 07:12:55'),
(49, NULL, NULL, NULL, 'VISHALKUMAR RAJANI', NULL, 'vishalrajanivd@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'vishal@1996', '9879138791', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-07-28 07:33:22', '2022-07-28 07:33:22'),
(50, NULL, NULL, NULL, 'bhanuben rajani', NULL, 'rajanivishalvd@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'bhanuben@12345', '9879138791', '', '1210.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-07-28 07:48:30', '2023-02-01 09:12:26'),
(51, NULL, NULL, NULL, 'Nihitha Peddisetty', NULL, 'nihitha205@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Nihi1420', '09494469484', 'Ttfashion', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-07-30 19:14:12', '2022-07-30 19:14:12'),
(52, NULL, NULL, NULL, 'Sompa  Acharjee ', NULL, 'acharjeejhuma10@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Jhuma@1991', '7640979278', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-01 08:33:35', '2022-08-01 08:33:35'),
(53, NULL, NULL, NULL, 'Wasifa Guroo', NULL, 'Wasifawaseembat@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'wasifa123', '09541575380', 'Newzarinafashion@gmail.com', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-02 11:50:58', '2022-08-02 11:50:58'),
(54, NULL, NULL, NULL, 'The  B Store', NULL, 'bman.queries@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Youtube@123', '9892104613', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-03 04:06:31', '2022-08-03 04:06:31'),
(55, NULL, NULL, NULL, 'Preety Bansal', NULL, 'Rajanbansal27@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '1234567890pb', '9465918588', 'WWW.STORZOSHIP.COM', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-04 12:54:03', '2022-08-04 12:54:03'),
(56, NULL, NULL, NULL, 'Jaysukhbhai Pambhar', NULL, 'artphoto5686@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '12345678', '8874584685', 'Meesho', '-22641.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-08-04 13:26:01', '2023-01-04 15:40:32'),
(57, NULL, NULL, NULL, 'Purbasha Barik', NULL, 'lucybarik2000@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Abc@1234', '6370661816', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-05 09:15:45', '2022-08-05 09:15:45'),
(58, NULL, NULL, NULL, 'Ranga Billa', NULL, 'rangabilla776@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Nikunj@3654', '9737973808', '', '-14912.70', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '100000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-08-08 06:18:42', '2022-11-28 17:46:02'),
(59, NULL, NULL, NULL, 'AKSHAy  Kamla', NULL, 'akshayktm131@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'akshay131', '7680989131', 'Crome', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-09 12:06:29', '2022-08-09 12:06:29'),
(60, NULL, NULL, NULL, 'Manjeet Yadav', NULL, 'lavishmomsin@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Happy@123#', '+917985470049', 'https://Bodycoach.in', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-09 18:40:54', '2022-08-09 18:40:54'),
(61, NULL, NULL, NULL, 'MANPREET  SINGH', NULL, 'MANPREETSINGH70854@GMAIL.COM', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'SANTRO1922', '9599602724', 'easterlifestyleshop.in', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-09 19:18:06', '2022-08-09 19:18:06'),
(62, NULL, NULL, NULL, 'manpreet  singh', NULL, 'easterlifestyleshop@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'santro1922', '9599602724', 'easterlifestyleshop.in', '-620.00', '4', '1', NULL, '1', '1', 82, '73adf52576855ea54de081d9d07e282d', '10b1762d184c17dca5cf2d927ecb6297', '1', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-08-10 18:33:58', '2022-11-14 06:35:59'),
(63, NULL, NULL, NULL, 'Rahul Uthaman', NULL, 'rahulammu784@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'ponnus12', '08714305675', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-11 10:01:41', '2022-08-11 10:01:41'),
(64, NULL, NULL, NULL, 'viral bavisi', NULL, 'vastraparidhan.abril@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'viral@123', '9726626623', 'https://vastraparidhan.com', '0.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '10000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-08-12 05:47:54', '2022-12-20 09:01:34'),
(65, NULL, NULL, NULL, 'Marvelcom', NULL, 'skyrolly303@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'sahil@123', '9624028517', '', '0.00', '4', '1', NULL, '1', '1', 75, 'f29b1f2d27a97bc5f32baf4ef8bf1f8f', '17d95ba180f995a13b8589a2a8bb20a5', '1', '10000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-08-15 05:40:57', '2022-10-09 11:55:00'),
(66, NULL, NULL, NULL, 'Som Somnath', NULL, 'somsomnath85634@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9500654498', '9500654498', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-16 06:24:55', '2022-08-16 06:24:55'),
(67, NULL, NULL, NULL, 'Diksha  Dhiman ', NULL, 'dhimandishu003@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Diksha@1995', '8219910495', 'dhimandiksha552@gmail.com', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-16 08:03:07', '2022-08-16 08:03:07'),
(68, NULL, NULL, NULL, 'Avika Wali', NULL, 'avikawali097@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'avika097', '7889979738', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-18 07:51:18', '2022-08-18 07:51:18'),
(69, NULL, NULL, NULL, 'Pooja Dhiman', NULL, 'pooja181997dhiman@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'dhimanpoojaricky', '0828 755 8965', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-18 08:47:24', '2022-08-18 08:47:24'),
(70, NULL, NULL, NULL, 'Pravin kumar', NULL, 'kpravin254@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Kumar@123', '08851933593', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-19 12:54:47', '2022-08-19 12:54:47'),
(71, NULL, NULL, NULL, 'Nahid Shaikh ', NULL, 'shaikhnahid371@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'nahid#123', '9137663922', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-20 07:04:06', '2022-08-20 07:04:06'),
(72, NULL, NULL, NULL, 'Niranjan  M', NULL, 'niranjanranju683@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'ramyaranju', '09343159328', 'Storzoship', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-20 07:05:15', '2022-08-20 07:05:15'),
(73, NULL, NULL, NULL, 'mishita enterprise', NULL, 'help.mishitaenterprise@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'MISHITA@123', '9316016162', 'https://www.mishitaenterprise.in/', '0.00', '4', '1', NULL, '1', '1', 78, 'c9192e481cebc5313f4b8082d809ee52', 'f7b79574c000e5f8f34c61e81e3ca953', '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', '1661226298.jpeg', NULL, 3, '2022-08-20 13:23:48', '2022-09-13 06:48:31'),
(74, NULL, NULL, NULL, 'Veer Solanki', NULL, 'Veersolanki104@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '7487817636', '7487817636', '', '-1106.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-08-22 11:03:21', '2022-11-18 09:41:09'),
(75, NULL, NULL, NULL, 'Green Velly', NULL, 'Greenvelly06@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9265534061', '9265534061', '', '-5389.65', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '200000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-08-23 04:59:18', '2022-11-28 17:46:02'),
(76, NULL, NULL, NULL, 'Damini Dorugade', NULL, 'daminidorugade123@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Mumbai@123', '8082305018', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-23 13:32:23', '2022-08-23 13:32:23'),
(77, NULL, NULL, NULL, 'Nikhil Thakor', NULL, 'npenterprise1920@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Naima@9349', '7567568666', 'www.perfumudio.com', '-102020.00', '4', '1', NULL, '1', '1', 79, 'a6f3009adf405a065c0e01a4beb6bb74', '725ae2af233a56a22d5c5582a9f64412', '1', '200000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2022-08-24 12:05:04', '2023-01-31 13:44:11'),
(78, NULL, NULL, NULL, 'Ashwini Waghale', NULL, 'ashwiniwaghale00@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'waghale123', '9146667594', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-25 07:11:29', '2022-08-25 07:11:29'),
(79, NULL, NULL, NULL, 'Mehul Sangadiya ', NULL, 'dhavalbarvaliya011@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Dhaval@2003', '9723893616', '', '0.00', '4', '', NULL, '', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-25 13:48:15', '2023-01-27 02:57:47'),
(80, NULL, NULL, NULL, 'Mehul Sangadiya ', NULL, 'mehulsangdiya11@gmail.co', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Mehul@2003', '9723893616', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-26 11:08:16', '2022-08-26 11:08:16'),
(81, NULL, NULL, NULL, 'Arbeena  Arbeena', NULL, 'mirm91200@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'maqboolmir', '91495 37703', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-27 08:09:45', '2022-08-27 08:09:45'),
(82, NULL, NULL, NULL, 'Afzal  Shaikh', NULL, 'storedj13@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Admin@123#', '8452944423', '', '584.04', '4', '1', NULL, '2', NULL, NULL, NULL, NULL, '1', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2022-08-28 09:54:31', '2023-02-10 10:45:57'),
(83, NULL, NULL, NULL, 'HITAXKUMAR  SAVANI', NULL, 'rajstrifashion@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Hitax@007', '09723764384', 'https://www.rajstri.com', '-500.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '20000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-08-29 07:50:29', '2022-08-29 08:13:15'),
(84, NULL, NULL, NULL, 'MEHULKUMAR  SANGADIYA ', NULL, 'mehulsangdiya11@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Mehul@2003', '6359609560', 'https://kerala.mallsmarket.com/onli', '0.00', '4', '', NULL, '', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-29 17:18:28', '2023-01-27 02:47:15'),
(85, NULL, NULL, NULL, 'Priya Kaushik', NULL, 'kaushikpriya370@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'kanak@2020', '9084199352', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-30 08:22:33', '2022-08-30 08:22:33'),
(86, NULL, NULL, NULL, 'Atul Jadhav', NULL, 'atuljadhav1715@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'tinajadhav@45', '9623999650', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-30 15:02:12', '2022-08-30 15:02:12'),
(87, NULL, NULL, NULL, 'Mahendar  Panday', NULL, 'mahendarpandey7@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '956925mm', '7307743061', 'Wwwstorzoship', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-08-31 16:30:00', '2022-08-31 16:30:00'),
(88, NULL, NULL, NULL, 'Raghav  Kushwah ', NULL, 'raghavkushwah743@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '99887766', '7047708529', 'Hhshj', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-01 12:49:26', '2022-09-01 12:49:26'),
(89, NULL, NULL, NULL, 'just look2', NULL, 'info.justlook2.com@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'justlook2@123', '9327256304', 'https://glamourcoutures.in/', '-214.50', '4', '1', NULL, '1', '1', 127, '74019edab0e2567a6aa1ead758e9f15e', '5cfa4a221c6c1e0e7bb8ad1a2d78ccfc', '1', '200000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-09-02 08:40:46', '2022-11-28 17:42:13'),
(90, NULL, NULL, NULL, 'TUSHAR LAKHANI', NULL, 'just4ufab@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'justfab@123', '8160667741', 'https://just4ufab.com/', '0.00', '4', '1', NULL, '1', '1', 88, '24cf1341d971990c5cb0fb3743968a99', '1a1e30b402c6e0f33405e342d098a971', '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-09-03 05:09:05', '2022-12-02 11:58:20'),
(91, NULL, NULL, NULL, 'Kajal  Rana ', NULL, 'kajalrana858585@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'kajalrana@123', '6204308995', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-03 05:09:14', '2022-09-03 05:09:14'),
(92, NULL, NULL, NULL, 'Song Kipu  Lepcha ', NULL, 'emolahhpachenpa@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'namgyall', '9083233539', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-03 11:26:39', '2022-09-03 11:26:39'),
(93, NULL, NULL, NULL, 'Shams Ansari', NULL, 'shamsansari996@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'sameer786...', '8193869126', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-04 06:38:52', '2022-09-04 06:38:52'),
(94, NULL, NULL, NULL, 'Rohit Kumar', NULL, 'rohitsam787@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Rohit@1994', '9716615200', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-05 07:12:03', '2022-09-05 07:12:03'),
(95, NULL, NULL, NULL, 'Sarthak V Lathiya', NULL, 'miyanienterprise123@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '12345678', '9081270297', '', '-7631.70', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '100000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-09-06 10:43:33', '2022-11-28 17:39:43'),
(96, NULL, NULL, NULL, 'AMIT PANCHAL', NULL, 'asquareservicesshopify@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '27@Dec1990', '9737263050', 'http://yourtrendbazaar.in/', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-06 19:23:15', '2022-09-06 19:23:15'),
(97, NULL, NULL, NULL, 'Nams Surj', NULL, 'namratasolanki.ce@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Viaanlove3@', '+27795196940', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-06 20:14:37', '2022-09-06 20:14:37'),
(98, NULL, NULL, NULL, 'Creation Zone', NULL, 'creationzone79@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9909671529', '9909671529', '', '0.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-09-07 05:41:04', '2022-09-30 08:17:49'),
(99, NULL, NULL, NULL, 'Shilpa. Rathod Shilpa', NULL, 'sr3659962@gamil.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '8073155702', '08073155702', 'WWW.STORZOSHIP.COM', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-07 09:41:36', '2022-09-07 09:41:36'),
(100, NULL, NULL, NULL, 'Shilpa. Rathod Shilpa', NULL, 'sr3659962@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '8073155702', '08073155702', 'WWW.STORZOSHIP.COM', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-07 09:42:30', '2022-09-07 09:42:30'),
(101, NULL, NULL, NULL, 'Indianlehenga Store', NULL, 'indianlehengastore2022@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9723097988', '9723097988', '', '0.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2022-09-08 08:57:10', '2022-10-15 08:47:14'),
(102, NULL, NULL, NULL, 'Nandita  Khandait ', NULL, 'nanditakhandait@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'shivholic', '7000438485', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-08 09:15:46', '2022-09-08 09:15:46'),
(103, NULL, NULL, NULL, 'Babaraj Store', NULL, 'babaraj7779@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '7622897894', '7622897894', '', '-2479.99', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', '1662968955.jpg', NULL, 3, '2022-09-09 04:42:03', '2022-11-28 17:45:55'),
(104, NULL, NULL, NULL, 'Apeksha Gandhi ', NULL, 'apeksha7730@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '@yamunaji07', '9727000556', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-10 10:43:51', '2022-09-10 10:43:51'),
(105, NULL, NULL, NULL, 'Galaxy Hub', NULL, 'Galaxyhub0001@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Nikunj@3654', '9737973808', 'https://cl.storzoship.com/profile', '-15037.90', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '200000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-09-12 05:24:36', '2023-01-04 15:40:49'),
(106, NULL, NULL, NULL, 'hareshbhai nadiyara', NULL, 'shop.mannatfashion@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9904819985', '7096842928', '', '560.00', '4', '1', NULL, '1', '1', 107, '08c176fcd2382c6a714149b1134fcf30', '270f4470b58084819ba5d91214ab1aeb', '1', '100000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-09-12 07:14:09', '2022-10-17 07:27:50'),
(107, NULL, NULL, NULL, 'Pavan sai', NULL, 'Chinthakuntapavansai0@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Mounikaa.7', '09133269297', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-14 05:46:07', '2022-09-14 05:46:07'),
(108, NULL, NULL, NULL, 'GHANSHYAMBHAI BHOLANI', NULL, 'mimiclothing.In@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Bhavesh@1326', '8200541554', '', '-360.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-09-14 05:55:49', '2023-02-01 12:35:42'),
(109, NULL, NULL, NULL, 'Vaghasiya Vijay', NULL, 'otrishul@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Vijay888$#@', '9316471862', 'www.babycharm.in', '0.00', '4', '', NULL, '', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-14 07:07:43', '2023-01-27 02:57:13'),
(110, NULL, NULL, NULL, 'Dipika soni', NULL, 'medipikasoni@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'amoldipika2209', '7492803682', 'google', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-15 12:53:45', '2022-09-15 12:53:45'),
(111, NULL, NULL, NULL, 'Aman Singh', NULL, 'amansingh8837285@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'aman@258', '9366284809', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-16 09:32:24', '2022-09-16 09:32:24'),
(112, NULL, NULL, NULL, 'Sujeet Kumar', NULL, 'sujeetsk43309@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Sujeet@1998', '9155218048', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-17 06:36:09', '2022-09-17 06:36:09'),
(113, NULL, NULL, NULL, 'ethnic bazzar', NULL, 'care.ethnicbazzar@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Darshan@6092', '7863892842', 'https://trackiye.myshopify.com/', '0.00', '4', '1', NULL, '1', '1', 112, 'cfb65129df692f1cba5482b12238fdb7', 'e9c0f05669877e774063536411fb9a44', '1', '200000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-09-17 06:50:09', '2022-10-20 11:30:11'),
(114, NULL, NULL, NULL, 'sita Chetri', NULL, 'sitachetry420@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '12345678', '9394658115', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-18 14:25:54', '2022-09-18 14:25:54'),
(115, NULL, NULL, NULL, 'test test', NULL, 'test@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '123123123', '8574514541', 'na', '0.00', '4', '', NULL, '', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-19 12:17:36', '2022-09-23 10:18:39'),
(116, NULL, NULL, NULL, 'Fresh King', NULL, 'Freshking51236@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9104772818', '9104772818', '', '-14800.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-09-20 04:28:58', '2023-01-04 15:40:52'),
(117, NULL, NULL, NULL, 'Indu Reddy', NULL, 'indureddy61@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'indu2002', '9125858222', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-20 11:11:26', '2022-09-20 11:11:26'),
(118, NULL, NULL, NULL, 'Mina Singh', NULL, 'minasingh41998@gmail.Com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Bongaigaon', '8822469081', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-20 12:10:17', '2022-09-20 12:10:17'),
(119, NULL, NULL, NULL, 'Mandeep Singh', NULL, 'Mandeeppatwan3@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Mandeep@123', '8199047609', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-21 08:04:32', '2022-09-21 08:04:32'),
(120, NULL, NULL, NULL, 'amit suvagiya', NULL, 'amitsuvagiya100@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Amit@3011', '9106743521', '', '-500.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '2', '0', '0', NULL, NULL, 3, '2022-09-22 05:54:36', '2023-02-09 20:24:53'),
(121, NULL, NULL, NULL, 'MITESH virani', NULL, 'Info.vastralable@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'mitesh@123', '8200373851', '', '260.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-09-22 06:09:48', '2023-01-18 09:29:10'),
(122, NULL, NULL, NULL, 'Ridhi Creation', NULL, 'ridhicreation06@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '8264364990', '8264364990', '', '-25201.98', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '100000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-09-22 09:42:45', '2023-01-04 15:40:50'),
(123, NULL, NULL, NULL, 'Makeit Fashion', NULL, 'Makeitfashion@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9081270554', '9081270554', '', '-18357.96', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-09-22 11:36:30', '2023-01-04 15:40:49'),
(124, NULL, NULL, NULL, 'Neha Rai', NULL, 'raineha9024@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'neharai12345', '+916294119191', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-23 00:19:44', '2022-09-23 00:19:44'),
(125, NULL, NULL, NULL, 'Pintu  Kumar', NULL, 'nkp090786@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'nkp8777@#$%', '8004624524', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-23 05:57:25', '2022-09-23 05:57:25'),
(126, NULL, NULL, NULL, 'Sunaina Kushwaha ', NULL, 'nainapathan40@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'samim786', '7433066093', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-23 10:40:49', '2022-09-23 10:40:49'),
(127, NULL, NULL, NULL, 'FAIZ KHAN', NULL, 'fabstore280@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Arhaan070317**', '9891370786', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-23 17:29:53', '2022-09-23 17:29:53'),
(128, NULL, NULL, NULL, 'Farhan Shaikh', NULL, 'farhanshaikh341@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Task@123', '8169553377', 'https://amazewatchstore.in/', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-24 07:18:00', '2022-09-24 07:18:00'),
(129, NULL, NULL, NULL, 'Nalina K', NULL, 'nalinasai94@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'nalinarakshith', '09916102017', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-24 07:30:34', '2022-09-24 07:30:34'),
(130, NULL, NULL, NULL, 'indu reddy', NULL, 'dwarapulakshmi917@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'indu2002', '81258 58222', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-24 08:52:05', '2022-09-24 08:52:05'),
(131, NULL, NULL, NULL, 'SMART STORE', NULL, 'berribon1428@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Berribon@0511', '7041873319', '', '0.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2022-09-24 09:05:55', '2022-10-18 05:51:34'),
(132, NULL, NULL, NULL, 'Karina Sikddar', NULL, 'rishikarishika133@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'bhagbhosdike', '06901730714', 'Ethnicwere', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-25 08:45:57', '2022-09-25 08:45:57'),
(133, NULL, NULL, NULL, 'HIRVA FASHION', NULL, 'myhirvafashion@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Parth@1997', '9924919614', 'https://www.hirvafashion.com/collec', '0.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', '1664177195.jpeg', NULL, 3, '2022-09-26 05:52:45', '2022-10-21 07:49:40'),
(134, NULL, NULL, NULL, 'Joshna Devulapally ', NULL, 'jyothsnadevulapally532@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'chitti2517', '70326272027', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-26 08:26:03', '2022-09-26 08:26:03'),
(135, NULL, NULL, NULL, 'Rohit  Sakpal ', NULL, 'rohitsakpal4671@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'anushka2807', '7303195733', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-26 17:58:13', '2022-09-26 17:58:13'),
(136, NULL, NULL, NULL, 'Rajnish kumar', NULL, 'rajnish1234five@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'storzoship', '+917870450341', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-27 02:03:23', '2022-09-27 02:03:23');
INSERT INTO `users` (`id`, `user_id`, `first_name`, `last_name`, `name`, `company_name`, `email`, `email_verified_at`, `password`, `original_password`, `phone`, `website`, `wallet_balance`, `type`, `status`, `rejection_reason`, `is_active`, `api_is_web_access`, `api_pickup_address_id`, `api_key`, `api_user_id`, `allow_credit`, `allow_credit_limit`, `facebook_id`, `google_id`, `remember_token`, `is_online`, `is_pre_awb_allow`, `is_cod_allow`, `is_prepaid_allow`, `logo_image_name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(137, NULL, NULL, NULL, 'Dharmanandan Mart', NULL, 'Help.dharmanandanmart@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '7984009589', '7984009589', '', '0.00', '4', '1', NULL, '1', '1', 134, '2633081086d684eb32cb2aa91e744b7f', 'fe0f9ee85db915c0f3549a9ff96c5c2a', '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-09-27 06:24:53', '2023-01-21 08:38:07'),
(138, NULL, NULL, NULL, 'SANJOY SAHOO', NULL, 'brokenheartsanjoy@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'somu1234', '+918250381346', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-28 05:39:59', '2022-09-28 05:39:59'),
(139, NULL, NULL, NULL, 'Dwipayan  Ghosh', NULL, 'dwipayanghosh001@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'tumba@#001', '7602480892', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-28 11:01:11', '2022-09-28 11:01:11'),
(140, NULL, NULL, NULL, 'Kritika Nagvani', NULL, 'nagvanikritika@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '6czjLJgxC3JMG8X', '7307517286', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-28 17:08:01', '2022-09-28 17:08:01'),
(141, NULL, NULL, NULL, 'Denim Town', NULL, 'Info.denimtown@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Ravi@123', '9023399788', 'https://denimtown.in/', '0.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2022-09-30 07:19:39', '2022-11-18 09:28:47'),
(142, NULL, NULL, NULL, 'LK Fabs', NULL, 'Info.lkfab@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Khushal@123', '9316062722', 'https://lkfab.in/', '0.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2022-09-30 07:35:57', '2023-01-03 09:53:54'),
(143, NULL, NULL, NULL, 'Anitha K', NULL, 'mahithab45@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9980704259', '9980704259', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-09-30 11:48:44', '2022-09-30 11:48:44'),
(144, NULL, NULL, NULL, 'Parul Agarwal', NULL, 'parul.agarwal014@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '0987parul', '07668561442', 'Vadtralable.com', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-02 10:06:59', '2022-10-02 10:06:59'),
(145, NULL, NULL, NULL, 'akshay vohra', NULL, 'akstraders22@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '22Akshay@9873', '9315424672', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-02 18:36:58', '2022-10-02 18:36:58'),
(146, NULL, NULL, NULL, 'Anusuiya  Pandey ', NULL, 'anusuiyapandey00@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'ansu1209', '9140494570', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-03 05:53:04', '2022-10-03 05:53:04'),
(147, NULL, NULL, NULL, 'Usha Kashyap', NULL, 'ushakashyap493@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'usha123@Ww', '8394850877', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-03 07:16:27', '2022-10-03 07:16:27'),
(148, NULL, NULL, NULL, 'atishkumar panchani', NULL, 'fabtrone.surat@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'ajay@1993', '9328470320', '', '2040.00', '4', '1', NULL, '1', '1', 141, '6f0299961dbc7aa01270665138b89ec2', '92ec44e776e7ac968d351becc8eb35f3', '1', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-10-03 07:26:59', '2022-12-31 04:41:05'),
(149, NULL, NULL, NULL, 'Aayushi Avi', NULL, 'aayushii.112001@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'aayushi11', '9650818879', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-03 07:58:24', '2022-10-03 07:58:24'),
(150, NULL, NULL, NULL, 'Santosh k', NULL, 'ksantosh0908@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '123santosh', '+17838321117', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-05 06:14:28', '2022-10-05 06:14:28'),
(151, NULL, NULL, NULL, 'Kirit Patel', NULL, 'kiritpatel8993@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '8153941468', '8153941468', '', '-185580.39', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '250000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-10-06 16:05:00', '2023-01-23 11:25:16'),
(152, NULL, NULL, NULL, 'Capital Raj', NULL, 'Capitalraj2244@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9104772818', '9104772818', '', '-6201.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-10-06 16:07:19', '2022-11-28 17:45:33'),
(153, NULL, NULL, NULL, 'Bhalala Jeel', NULL, 'zeelbhalala5212@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '12345678', '9081021045', 'Meesho', '-500.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-10-07 07:27:17', '2022-10-07 07:42:41'),
(154, NULL, NULL, NULL, 'Alex Fashion', NULL, 'Alexfashion1990@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9737973808', '9737973808', '', '-19972.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '100000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-10-08 06:13:44', '2023-01-04 15:40:53'),
(155, NULL, NULL, NULL, 'Pankaj Kumar', NULL, 'dimpi4200@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'HP745984', '+917559685907', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-09 05:59:23', '2022-10-09 05:59:23'),
(156, NULL, NULL, NULL, 'Nv Enterprise', NULL, 'Nventerprise757@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9081584703', '9081584703', '', '-8003.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-10-10 15:21:35', '2022-11-28 17:45:09'),
(157, NULL, NULL, NULL, 'Shilpi  Kumari ', NULL, 'shilpisingh4u.ss@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'nhibataungi', '6299858242', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-11 09:34:24', '2022-10-11 09:34:24'),
(158, NULL, NULL, NULL, 'Shree MR', NULL, 'shreelakshmimr1212@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '@mpramesh22$', '9035932201', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-11 22:14:33', '2022-10-11 22:14:33'),
(159, NULL, NULL, NULL, 'Rahul  Bhilwara', NULL, 'rahulbhilwara099@gmail.cim', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'nisharahul', '7505209582', 'Google', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-12 02:33:52', '2022-10-12 02:33:52'),
(160, NULL, NULL, NULL, 'Maharaja Film', NULL, 'Maharaja2860@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '7622897894', '7622897894', 'https://cl.storzoship.com/', '-36802.98', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '250000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-10-12 16:47:21', '2022-12-22 18:13:01'),
(161, NULL, NULL, NULL, 'Ratna Kotoky', NULL, 'ratnakotoky@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '12345678', '9678881729', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-14 13:41:01', '2022-10-14 13:41:01'),
(162, NULL, NULL, NULL, 'Fashion Rangila', NULL, 'Fashionrangila@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9081270554', '9081270554', '', '-16254.99', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '100000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-10-15 05:12:36', '2022-12-22 18:13:01'),
(163, NULL, NULL, NULL, 'Chetana Lavhate', NULL, 'Chetanalavhate2001@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'samu8090guddi', '8605244222', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-17 10:54:35', '2022-10-17 10:54:35'),
(164, NULL, NULL, NULL, 'Harsh Singh', NULL, 'harshk870@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '123456789', '8797496504', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-17 14:15:09', '2022-10-17 14:15:09'),
(165, NULL, NULL, NULL, 'Rashi Sharma ', NULL, 'rashisharma987144@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'rashi9090', '9599318107', 'Storzship.com', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-17 14:55:12', '2022-10-17 14:55:12'),
(166, NULL, NULL, NULL, 'Rashi Sharma', NULL, 'rashisharma9144@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'pooja9090', '9599318107', 'Storzship.com', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-17 14:59:17', '2022-10-17 14:59:17'),
(167, NULL, NULL, NULL, 'Sakshi Matta', NULL, 'sakshimatta1@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Sakshi@123', '09871482021', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-18 16:02:48', '2022-10-18 16:02:48'),
(168, NULL, NULL, NULL, 'Fghh vbbbn', NULL, 'vvbb@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '3PqR6iCKsuJps85', '34567889999', 'Fggjkk', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-19 08:03:34', '2022-10-19 08:03:34'),
(169, NULL, NULL, NULL, 'Raghuvansh  Raushan ', NULL, 'raghuvanshraushan@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'mahakall', '9905956107', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-19 10:23:13', '2022-10-19 10:23:13'),
(170, NULL, NULL, NULL, 'Yogita Sehwag', NULL, 'yogitasehwag289@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'yogita@123', '9717344604', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-19 13:08:52', '2022-10-19 13:08:52'),
(171, NULL, NULL, NULL, 'Prashanta Rabha', NULL, 'marshinrava9@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'browser123', '9395591371', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-21 03:03:13', '2022-10-21 03:03:13'),
(172, NULL, NULL, NULL, 'Ashok  Sharma ', NULL, 'lata34756@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '78707870', '7870544919', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-21 05:25:54', '2022-10-21 05:25:54'),
(173, NULL, NULL, NULL, 'Saleema Shaik', NULL, 'sksaleema2000@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '1234567890', '6302796305', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-21 13:14:09', '2022-10-21 13:14:09'),
(174, NULL, NULL, NULL, 'sanskriti chawan', NULL, 'sanskritichawanwork@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '2121@Ssss', '9167953839', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-22 11:39:12', '2022-10-22 11:39:12'),
(175, NULL, NULL, NULL, 'Shreya Ghosh', NULL, 'shreyaghoshstm@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Shreyaghosh1998', '9110155179', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-22 12:06:33', '2022-10-22 12:06:33'),
(176, NULL, NULL, NULL, 'Mahak Vijayvargiya ', NULL, 'mahakvijayvargiya612@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'mahak1234', '94245 34497', 'Meesho', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-22 13:39:12', '2022-10-22 13:39:12'),
(177, NULL, NULL, NULL, 'Mahak Vijayvargiya ', NULL, 'harshjoshi9193@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'mahak1234', '94245 34497', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-22 13:43:42', '2022-10-22 13:43:42'),
(178, NULL, NULL, NULL, 'Pranav  Kumbhar', NULL, 'Pranavkumbhar177@Gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Pranavk4777', '9527178160', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-23 05:59:54', '2022-10-23 05:59:54'),
(179, NULL, NULL, NULL, 'Anil kumar Dwivedi', NULL, 'dwivedianil196@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'nandini1212', '9829373777', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-23 06:20:53', '2022-10-23 06:20:53'),
(180, NULL, NULL, NULL, 'Rupa Devi', NULL, 'rupa7549singh@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '7549796084', '7549796084', 'Ww', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-24 02:18:53', '2022-10-24 02:18:53'),
(181, NULL, NULL, NULL, 'Shaik Moulali', NULL, 'shaikmoulali1988@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'jasmine143', '9494688025', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-25 08:22:18', '2022-10-25 08:22:18'),
(182, NULL, NULL, NULL, 'just looks', NULL, 'info.justlook3@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'justlook3@123', '8140014672', 'https://maxifab.in/', '-76.98', '4', '1', NULL, '1', '1', 166, '45e25393e61b95b465b2b951702dde44', 'ca51dc1a7a508c24e1307ce299f1f64d', '1', '300000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-10-27 09:59:31', '2023-01-23 11:25:15'),
(183, NULL, NULL, NULL, 'Siddharth D', NULL, 'siddharthd@kustomizedbazar.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'R@nbir!930', '8217066062', 'https://www.kustomizedbazar.com', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-28 00:23:32', '2022-10-28 00:23:32'),
(184, NULL, NULL, NULL, 'Arun Kumar', NULL, 'arungurjar26@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'gurjar26', '09999048796', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-30 11:15:13', '2022-10-30 11:15:13'),
(185, NULL, NULL, NULL, 'Jamil Laskar', NULL, 'jamilahmed1231231@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'jamil786', '08638972590', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-10-31 07:47:16', '2022-10-31 07:47:16'),
(186, NULL, NULL, NULL, 'Lorofy .in', NULL, 'help.lorofy@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Tushar@123', '9023399788', 'https://lorofy.in/', '0.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '100000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2022-11-03 10:20:44', '2022-12-02 12:00:14'),
(187, NULL, NULL, NULL, 'Farha Hussain', NULL, 'farha.hussain329@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Imraniden629', '+12107087293', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-04 20:47:44', '2022-11-04 20:47:44'),
(188, NULL, NULL, NULL, 'Kalista Ethics', NULL, 'kalistaethics.india@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Y@8140420119', '8140420119', '', '1000.00', '4', '1', NULL, '1', '1', 168, 'f54e979cce3b734bb438a21033fc4838', '6e7ebcb3da9786c1faab2996cd09df7f', '1', '0.00', NULL, NULL, NULL, '1', '', '0', '0', '1667628945.jpg', NULL, 3, '2022-11-05 05:37:53', '2022-11-25 06:36:01'),
(189, NULL, NULL, NULL, 'Nitesh  Hathile ', NULL, 'niteshhathile5075@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '62603406', '6260340633', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-05 07:05:24', '2022-11-05 07:05:24'),
(190, NULL, NULL, NULL, 'Thumma Harish', NULL, 'harishthumma205@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Thumma123', '8790565922', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-08 07:48:24', '2022-11-08 07:48:24'),
(191, NULL, NULL, NULL, 'Tanu Mirza', NULL, 'taheniyathbegum@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'tanu7860', '08247229426', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-09 02:35:11', '2022-11-09 02:35:11'),
(192, NULL, NULL, NULL, 'Anjali Sharma ', NULL, 'sharmaanjali7379@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Anjali@123', '9569926141', 'Cl.storezoship.com', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-09 05:25:09', '2022-11-09 05:25:09'),
(193, NULL, NULL, NULL, 'Divine lifestyle', NULL, 'divinelifestyle171@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Divine@123', '9428044466', 'https://lkdeals.in/', '0.00', '4', '1', NULL, '1', '1', 181, '2404973f2a2b77a3755c8d0cdad26056', 'b73963209eabb1aac5a5f9fa41e38581', '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2022-11-09 07:16:03', '2022-12-06 11:11:21'),
(194, NULL, NULL, NULL, 'wsalemart Firm', NULL, 'wsalemart@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Jal@9712', '9104578490', '', '-175.00', '4', '1', NULL, '1', '1', 170, '5bbbd50db1c346b2c10abb130a0555c0', 'dfb65a3b5cbc935b0f2942fdaac34512', '1', '100000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-11-10 06:46:17', '2023-01-23 11:25:20'),
(195, NULL, NULL, NULL, 'Monika Sahu', NULL, 'vishalsahu528@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'monika123', '09540706147', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-10 16:31:03', '2022-11-10 16:31:03'),
(196, NULL, NULL, NULL, 'mayurbhai talaviya', NULL, 'zeepkart@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'talaviya@123', '8000474797', 'https://mismimi.com/', '-290.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', '1669875469.png', NULL, 2, '2022-11-11 06:01:28', '2023-02-01 05:06:23'),
(197, NULL, NULL, NULL, 'Qirat Zainab', NULL, '0alishayan@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'qirat@111', '6001447057', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-11 06:24:41', '2022-11-11 06:24:41'),
(198, NULL, NULL, NULL, 'gopalbhai sakhareliya', NULL, 'info.hirvafashion@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Hirva@123', '9408294566', 'https://www.hirvafashion.com/', '-610.00', '4', '1', NULL, '1', '1', 184, 'ba34f2fbd833a8dc58a066ad293c08d6', 'c3fd6d0aa3c8e59675ba2701da11a61a', '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-11-11 06:51:56', '2023-01-31 06:38:11'),
(199, NULL, NULL, NULL, 'Gori Bansal', NULL, 'gori_bansal80@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'bansalgori', '8168069551', 'Storzoship', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-12 07:24:46', '2022-11-12 07:24:46'),
(200, NULL, NULL, NULL, 'Kavita Bombarde', NULL, 'kavitabombarde123@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'kavita@123', '8381072417', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-12 08:41:24', '2022-11-12 08:41:24'),
(201, NULL, NULL, NULL, 'Neha  Vardani ', NULL, 'vardanineha19@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'bhumi@123', '9893540100', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-12 19:23:52', '2022-11-12 19:23:52'),
(202, NULL, NULL, NULL, 'Bithika  Halder ', NULL, 'bithikah21@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '12345678', '7063977277', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-13 04:50:36', '2022-11-13 04:50:36'),
(203, NULL, NULL, NULL, 'Kishan  Choudhary', NULL, 'kishanchoudhary.3427@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Kishan00', '8824561280', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-13 15:52:20', '2022-11-13 15:52:20'),
(204, NULL, NULL, NULL, 'paresh patel', NULL, 'pareshpm1100@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '12@Asdfghjkl', '8128298395', '', '2040.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-11-14 06:25:58', '2022-11-15 08:26:04'),
(205, NULL, NULL, NULL, 'devanshi  Trends', NULL, 'help.devanshitrends@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Khunt@728399', '9537162474', 'https://devanshitrend.com/', '-1220.92', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '100000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2022-11-17 04:40:50', '2023-02-01 12:48:25'),
(206, NULL, NULL, NULL, 'debjani sahu', NULL, 'debjani.sahu1@yahoo.in', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Dennis@12', '9666135448', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-17 06:08:21', '2022-11-17 06:08:21'),
(207, NULL, NULL, NULL, 'Vicky  Naveen', NULL, 'vickynemalikonda1987@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Naveen@143', '7893787379', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-17 08:08:33', '2022-11-17 08:08:33'),
(208, NULL, NULL, NULL, 'Sumankhoday Suman', NULL, 'sumankhoday1435@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'suman1995', '+919964373061', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-18 04:26:49', '2022-11-18 04:26:49'),
(209, NULL, NULL, NULL, 'Prafful Mundra ', NULL, 'praffulmundra30@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '123456789', '7014301383', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-18 04:40:32', '2022-11-18 04:40:32'),
(210, NULL, NULL, NULL, 'Aza Fashion', NULL, 'azafashion4545@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Hirr@4545', '8200389140', 'https://azafashion', '0.00', '4', '1', NULL, '1', '1', 198, '972d5d6263e9cc480d5c5ec6563805f5', '55aa3394f4861cbd591454a6abe9742f', '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-11-18 11:02:43', '2022-12-16 13:01:28'),
(211, NULL, NULL, NULL, 'Vinod  soni j', NULL, 'viinodsoni286@gmail.con', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'king1985', '9845157684', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-18 12:26:16', '2022-11-18 12:26:16'),
(212, NULL, NULL, NULL, 'priy pal', NULL, 'priyapalxyz@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'priyapal1996', '9310436806', 'www.storzoship.com', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-18 12:27:42', '2022-11-18 12:27:42'),
(213, NULL, NULL, NULL, 'Deepali Chalke', NULL, 'deepalichalke1237@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '8652173421', '8652173421', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-19 06:22:35', '2022-11-19 06:22:35'),
(214, NULL, NULL, NULL, 'Vaghela Dharmistha ', NULL, 'dharmishta081@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '8140459547', '9662489737', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-19 09:07:15', '2022-11-19 09:07:15'),
(215, NULL, NULL, NULL, 'Shariya  Ahmad ', NULL, 'shariyaahmadmallick.13@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'shariyaahmad', '9006765594', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-19 14:57:24', '2022-11-19 14:57:24'),
(216, NULL, NULL, NULL, 'Anisha Singh', NULL, 'singhanisha269491@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9135428900@A', '9334780687', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-20 06:11:03', '2022-11-20 06:11:03'),
(217, NULL, NULL, NULL, 'Kanchan Kaushal', NULL, 'bhartisoni898@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9026352514@', '9026352514', 'WWW.STOTZOSHIP.COM', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-20 06:46:14', '2022-11-20 06:46:14'),
(218, NULL, NULL, NULL, 'Rekha  Devi', NULL, 'durgasharma7688@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'durgasharma123', '8252485993', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-20 09:22:57', '2022-11-20 09:22:57'),
(219, NULL, NULL, NULL, 'Vikas upadhyay', NULL, 'Vikas.upadhyay406@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'vikas1993', '09997925435', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-21 05:11:52', '2022-11-21 05:11:52'),
(220, NULL, NULL, NULL, 'Pratik  Sharma ', NULL, 'prateeksharma10931@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '24363338', '8068895269', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-21 06:12:33', '2022-11-21 06:12:33'),
(221, NULL, NULL, NULL, 'MD sahil ali', NULL, 'sahil.ali6205579@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'sahil.ali', '8521104753', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-21 06:58:37', '2022-11-21 06:58:37'),
(222, NULL, NULL, NULL, 'vibhudi chandhini', NULL, 'chandhiniram5@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'destiny@7227', '9949731395', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-21 07:37:12', '2022-11-21 07:37:12'),
(223, NULL, NULL, NULL, 'Natasha Gupta ', NULL, 'natashagupta144@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'krisha0144', '9899010210', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-21 11:08:09', '2022-11-21 11:08:09'),
(224, NULL, NULL, NULL, 'Nikki Nikhat', NULL, 'nikhatjabbi1994@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Nikhat@9', '8210789973', 'Vrijashop', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-21 11:48:48', '2022-11-21 11:48:48'),
(225, NULL, NULL, NULL, 'ram rai', NULL, 'raraiashoknagar@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Ram@@@123', '9644432018', 'www.storzoship.com', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-21 14:33:00', '2022-11-21 14:33:00'),
(226, NULL, NULL, NULL, 'Sumita  Kumari', NULL, 'sumitaspj78084@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Metlife!1', '8298426696', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-21 15:44:22', '2022-11-21 15:44:22'),
(227, NULL, NULL, NULL, 'Shariya Ahmad', NULL, 'shariyaahmadmallick@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'shariyaahmad', '9006765594', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-22 06:37:39', '2022-11-22 06:37:39'),
(228, NULL, NULL, NULL, 'Shariya  Ahmad ', NULL, 'naureenahmad786@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'shariyaahmad', '9006765594', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-22 06:45:12', '2022-11-22 06:45:12'),
(229, NULL, NULL, NULL, 'Nisha  Singh', NULL, 'ns13nwaterfall@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Nisha1234@@', '8999323306', 'Www.instagram.com', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-22 08:32:10', '2022-11-22 08:32:10'),
(230, NULL, NULL, NULL, 'Nisha Singh', NULL, 'nishasingh22ws@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Nisha1234@@', '8999323306', 'Www.instagram.vom', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-22 08:35:16', '2022-11-22 08:35:16'),
(231, NULL, NULL, NULL, 'Lexa menswear', NULL, 'Lexamenswear@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Sagar@123', '9428044466', '', '-2380.00', '4', '1', NULL, '1', '1', 189, '49d3f4c4f6947f502c06758bd5f7a6b5', 'a510d29f7f79140aae8e2cb17aa00697', '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-11-22 09:37:40', '2022-11-30 07:50:05'),
(232, NULL, NULL, NULL, 'sonalben vekariya', NULL, 'Slleekstyle@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'pankaj@1992', '8160664748', '', '0.00', '4', '1', NULL, '1', '1', 185, '9666752fb4cba25f1e8e5dcdc85a13bf', '17347337862f57a07d0386fe17dbf36b', '1', '25000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2022-11-23 06:27:11', '2022-12-23 09:04:34'),
(233, NULL, NULL, NULL, 'Rakshit Mandaviya', NULL, 'riyastudios.online@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Aa@8140420119', '7698658196', 'https://riyastudios.com/', '0.00', '4', '1', NULL, '1', '1', 186, '0cf07d326e3e641581fb4d5bf4fd8ed8', '78250684ef81e3316215cd6235309a91', '1', '10000.00', NULL, NULL, NULL, '1', '', '0', '0', '1669299344.jpg', NULL, 3, '2022-11-24 07:17:31', '2022-12-06 11:12:59'),
(234, NULL, NULL, NULL, 'paras mehta', NULL, 'paras@napsums.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9820138782', '9820138782', 'napsums.com', '3178.02', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '500000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2022-11-24 08:10:43', '2023-02-01 04:31:24'),
(235, NULL, NULL, NULL, 'Gauri Creation', NULL, 'help.gauricreation@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '7069123960', '7069123960', 'https://gauricreation.in/', '1500.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', '1670302768.jpeg', NULL, 3, '2022-11-25 10:50:39', '2023-01-18 08:30:59'),
(236, NULL, NULL, NULL, 'Gajendra  Kumar', NULL, 'gajendrakumarjs@its.edu.in', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'gsraghav', '8860022457', 'http://sprw.io/sntt-3fcd1f?sprw.io/', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-25 12:36:50', '2022-11-25 12:36:50'),
(237, NULL, NULL, NULL, 'Bhawna Karn', NULL, 'bhawnakri1999@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'nishu123', '9693585924', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-26 07:16:55', '2022-11-26 07:16:55'),
(238, NULL, NULL, NULL, 'Nandini  Kaushik', NULL, 'nandinikaushik172@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'nandu2704', '8814030681', 'Vrijashop', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-26 14:46:27', '2022-11-26 14:46:27'),
(239, NULL, NULL, NULL, 'Poonam chib', NULL, 'poonamchiblogin@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '123456780', '07051481552', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-27 05:32:58', '2022-11-27 05:32:58'),
(240, NULL, NULL, NULL, 'Namrata Joshi', NULL, 'namratajoshi643@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Welcome@23', '8080367070', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-27 13:08:02', '2022-11-27 13:08:02'),
(241, NULL, NULL, NULL, 'Reema Upadhyay', NULL, 'reemaupadhyay450@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'reema@02', '9044493626', 'No', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-27 21:06:55', '2022-11-27 21:06:55'),
(242, NULL, NULL, NULL, 'Mahaveer Gothi', NULL, 'help.lifeslooks@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Hardik@123', '9925878295', 'https://www.lifeslooks.in/', '-2750.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-11-28 08:43:54', '2023-01-31 06:46:26'),
(243, NULL, NULL, NULL, 'Perfumudio Official', NULL, 'perfumudioofficial@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Np@12344321', '6352151765', 'xxx.com', '-19588.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '100000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2022-11-28 13:12:53', '2023-01-18 09:22:20'),
(244, NULL, NULL, NULL, 'abhaykumar dobariya', NULL, 'gjsonscreation68@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'dobariya@123', '8980353343', '', '0.00', '4', '1', NULL, '2', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '2', '0', '0', NULL, NULL, 3, '2022-11-29 05:24:22', '2023-02-13 01:40:01'),
(245, NULL, NULL, NULL, 'Ashwvni Chauhan ', NULL, 'cashwani497@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '12347890', '9306614810', 'Storzoship', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-29 06:30:16', '2022-11-29 06:30:16'),
(246, NULL, NULL, NULL, 'Giri  Priya', NULL, 'priya17giri@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Rudra@1234', '8487936687', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-29 11:35:08', '2022-11-29 11:35:08'),
(247, NULL, NULL, NULL, 'Ritesh Kumar', NULL, 'iamritshkumar@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'ritesh@123', '09140031707', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-11-30 05:56:45', '2022-11-30 05:56:45'),
(248, NULL, NULL, NULL, 'Devanshi Trend', NULL, 'info.devanshitrends@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Khunt@728399', '9537162474', 'https://devanshitrend.com/', '1122.12', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '200000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-11-30 12:07:06', '2023-01-31 12:35:22'),
(249, NULL, NULL, NULL, 'Arvind  Gami', NULL, 'kushegami693@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '8271618973', '8252623264', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-01 06:28:56', '2022-12-01 06:28:56'),
(250, NULL, NULL, NULL, 'Lehenga villa', NULL, 'lehengavilla.com@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Khushal@123', '9316062722', 'https://lehengavilla.com/', '590.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '200000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-12-01 06:32:20', '2022-12-30 04:20:07'),
(251, NULL, NULL, NULL, 'Ramya  Umesh ', NULL, 'ramyakamal56@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Ramya@2309', '6374782800', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-01 06:42:56', '2022-12-01 06:42:56'),
(252, NULL, NULL, NULL, 'Vastra Rani', NULL, 'vastrarani04@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Rani@123', '8799139038', 'https://vastrarani.in/', '-8360.00', '4', '1', NULL, '1', '1', 200, '5d1866935a161dd86a68c98a1a360a22', '7dde9da5cb5bca0854daad72690ff0f0', '1', '500000.00', NULL, NULL, NULL, '1', '', '0', '0', '1670252571.png', NULL, 3, '2022-12-01 08:56:38', '2023-02-01 15:10:17'),
(253, NULL, NULL, NULL, 'Karan Jilubhai', NULL, 'bestdealever789@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'India@2020', '972317492', '', '-1871210.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '99999999.99', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2022-12-01 12:14:38', '2023-01-23 11:25:34'),
(254, NULL, NULL, NULL, 'kaushal Gautam ', NULL, 'kaushalgautam464@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'indar9685', '8081642778', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-02 03:09:32', '2022-12-02 03:09:32'),
(255, NULL, NULL, NULL, 'Milan Fab', NULL, 'info.milanfab@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9909790455', '9909790455', '', '0.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-12-02 06:44:48', '2023-01-06 10:49:05'),
(256, NULL, NULL, NULL, 'Riya Rawat', NULL, 'himanshusinhg04@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '6387023980', '9559057767', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-02 08:47:19', '2022-12-02 08:47:19'),
(257, NULL, NULL, NULL, 'just looks', NULL, 'info.justlook4@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'just@12345', '9909578846', 'vrijashop.com', '420.00', '4', '1', NULL, '1', '1', 201, 'ccd4ea2800ba785b69fe4638bb830c70', '6a096c70121622002364d5dd5fba63a6', '1', '300000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-12-02 13:24:16', '2023-01-10 12:22:59'),
(258, NULL, NULL, NULL, 'Jayshree  Parmar', NULL, 'jayshreeparmar290@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'jayshree', '9833365562', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-03 17:50:30', '2022-12-03 17:50:30'),
(259, NULL, NULL, NULL, 'Surbhi  Sharma ', NULL, 'surbhianuu96@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Neeuanu2020', '9326266784', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-05 10:55:13', '2022-12-05 10:55:13'),
(260, NULL, NULL, NULL, 'Nikitha nikitha', NULL, 'nikithasubha9090@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Nikitha@123', '7093880733', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-05 13:13:40', '2022-12-05 13:13:40'),
(261, NULL, NULL, NULL, 'Anushka Belsare', NULL, 'anushka.belsare@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'chocopie$4', '+918208036232', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-06 05:18:49', '2022-12-06 05:18:49'),
(262, NULL, NULL, NULL, 'Mohmd Hasina', NULL, 'mohmdhasina611@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Haseenaa', '8179352647', 'https://cl.storzoship.com/sign-up', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-06 05:53:29', '2022-12-06 05:53:29'),
(263, NULL, NULL, NULL, 'Vikash  Saini ', NULL, 'vikassaini76100@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'vikas@12345', '8078614049', 'Vikassaini76100@gmail.com', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-06 06:47:29', '2022-12-06 06:47:29'),
(264, NULL, NULL, NULL, 'dev  pindariya ', NULL, 'dwarkainsurance2021@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '8140110826', '8140110826', 'dddddddd', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-06 07:44:13', '2022-12-06 07:44:13'),
(265, NULL, NULL, NULL, 'Raghavendra Pratap Singh', NULL, 'raghavolympian@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Bugati53!!', '9877236602', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-06 08:43:20', '2022-12-06 08:43:20'),
(266, NULL, NULL, NULL, 'Aashish  Kumar ', NULL, 'aashishk28545@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '79703553', '9060614483', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '2', '0', '0', NULL, NULL, NULL, '2022-12-07 05:10:33', '2023-02-09 20:24:33'),
(267, NULL, NULL, NULL, 'Zip Zop', NULL, 'zenylogistics@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'India@2020', '9723117492', '', '-530360.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '1000000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2022-12-07 06:30:00', '2023-02-01 08:08:16'),
(268, NULL, NULL, NULL, 'ashish donga', NULL, 'help.lehengafab.com@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'ashish@123', '9265286505', '', '0.00', '4', '1', NULL, '1', '1', 204, '5ba38ef0f7565b55690327282aa84073', '0ae1b0a74d37721d6444ae6852c2edc3', '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-12-07 06:38:10', '2022-12-27 11:02:19'),
(270, NULL, NULL, NULL, 'Indian Classy Wear', NULL, 'anujmahur12801@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'anuj@123', '8094515873', '', '600.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '1000.00', NULL, NULL, NULL, '1', '', '0', '0', '1670927192.png', NULL, 2, '2022-12-08 07:17:44', '2022-12-16 13:41:25'),
(271, NULL, NULL, NULL, 'Aryan Arya', NULL, 'rajanarya064@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'arya@1234', '9310174673', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-09 05:51:13', '2022-12-09 05:51:13'),
(272, NULL, NULL, NULL, 'PriyA Sahani', NULL, 'Sunitasahani14409@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'pakhiiii', '8737929436', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-11 08:30:47', '2022-12-11 08:30:47'),
(273, NULL, NULL, NULL, 'Harsh jha', NULL, 'harshkashyaprohit@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '11032002', '08051622544', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-11 10:25:27', '2022-12-11 10:25:27'),
(274, NULL, NULL, NULL, 'shweta g', NULL, 'shwetagajakosh@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'shweta30@G', '9380768197', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-11 18:19:21', '2022-12-11 18:19:21'),
(275, NULL, NULL, NULL, 'Vishal Khunt', NULL, 'nationera@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'JvOnline@886633', '8866338607', 'https://indianretro.com/', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-12 09:20:40', '2022-12-12 09:20:40'),
(276, NULL, NULL, NULL, 'Kinnari  Vaghele ', NULL, 'kinnarivaghela8@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Ayudh143', '7859805085', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-13 14:00:43', '2022-12-13 14:00:43');
INSERT INTO `users` (`id`, `user_id`, `first_name`, `last_name`, `name`, `company_name`, `email`, `email_verified_at`, `password`, `original_password`, `phone`, `website`, `wallet_balance`, `type`, `status`, `rejection_reason`, `is_active`, `api_is_web_access`, `api_pickup_address_id`, `api_key`, `api_user_id`, `allow_credit`, `allow_credit_limit`, `facebook_id`, `google_id`, `remember_token`, `is_online`, `is_pre_awb_allow`, `is_cod_allow`, `is_prepaid_allow`, `logo_image_name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(277, NULL, NULL, NULL, 'Lakshmi Lucky', NULL, 'attalaxmi722@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'yugi@123', '9390574733', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-14 04:25:05', '2022-12-14 04:25:05'),
(278, NULL, NULL, NULL, 'Ranjith Kumar', NULL, 'ranjithvrk123dog@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '12345678', '9514947852', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-14 07:39:09', '2022-12-14 07:39:09'),
(279, NULL, NULL, NULL, 'Saurav Sorathiya', NULL, 'info.gajrifashion@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Saurav@1234', '7046093315', 'https://gajri.in/', '-500.00', '4', '1', NULL, '1', '1', 210, 'd8250914ce52936e75d8d9db83e02ed3', '089f7112c4949f381e38160cc92e5f78', '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', '1671608803.png', NULL, 3, '2022-12-14 11:22:59', '2023-01-23 05:00:50'),
(280, NULL, NULL, NULL, 'Nitin Gupta', NULL, 'nitin1166@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '123456789', '+919958113304', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-15 05:02:20', '2022-12-15 05:02:20'),
(281, NULL, NULL, NULL, 'Jyotirmayee  Behera', NULL, 'jyotirmayeebehera46@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'zxcvbnm@123', '8249550884', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-15 06:28:08', '2022-12-15 06:28:08'),
(282, NULL, NULL, NULL, 'Alisha Alisha', NULL, 'ericanongbriericaericanongbrie@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'aliya20030201', '09362042181', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-15 09:20:41', '2022-12-15 09:20:41'),
(283, NULL, NULL, NULL, 'Janhavi Pawar', NULL, 'janhavigirishpwr31@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Parinita@123', '9324039633', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-15 13:16:01', '2022-12-15 13:16:01'),
(284, NULL, NULL, NULL, 'Amiya  Kuila ', NULL, 'amiyakulia09@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'amiya9987', '9987430941', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-16 04:57:03', '2022-12-16 04:57:03'),
(285, NULL, NULL, NULL, 'Siddiq Pasha', NULL, 'pashasiddiq868@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'izhan143', '9019686702', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-17 04:13:05', '2022-12-17 04:13:05'),
(286, NULL, NULL, NULL, 'shyam  fashion', NULL, 'Shyamfashion4343@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Akshay@9250', '9093302937', 'https://www.karagiri.com/', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-17 06:58:35', '2022-12-17 06:58:35'),
(287, NULL, NULL, NULL, 'Dhiraj barman', NULL, 'dhirajbarman105@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'immad@105', '8399087067', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-17 07:06:37', '2022-12-17 07:06:37'),
(288, NULL, NULL, NULL, 'rinaben mavani', NULL, 'lehengashop3080@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'mavani@1981', '8780337388', 'lehengashop.in', '140.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-12-17 07:28:13', '2023-01-24 04:03:59'),
(289, NULL, NULL, NULL, 'ronakbhai bhalodiya', NULL, 'royalbride2023@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Hiren@123', '9909339632', 'royalbride.in', '30.00', '4', '1', NULL, '1', '1', 220, 'e917fcfa7da8587e1f53d6674536bb1c', '61be059f20193391a532aad77e2f2dbf', '1', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-12-17 07:55:52', '2023-01-28 07:16:10'),
(290, NULL, NULL, NULL, 'ShivShanker Gaur', NULL, 'shivshankerdigital@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Zeqtas@29', '9350287248', 'Www.truthza.in', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-17 22:25:36', '2022-12-17 22:25:36'),
(291, NULL, NULL, NULL, 'Prem Kukreja', NULL, 'prem65287@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'premkukreja05', '07058100377', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-18 21:11:04', '2022-12-18 21:11:04'),
(292, NULL, NULL, NULL, 'Ramji Shivhare', NULL, 'rjshivhare841@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'radhe@123', '7860755796', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-19 11:06:16', '2022-12-19 11:06:16'),
(293, NULL, NULL, NULL, 'Yamini Thakur  Thakur ', NULL, 'thakuryami624@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'mp20sj4174', '9098132925', 'cl.storzoship.com', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-20 11:28:40', '2022-12-20 11:28:40'),
(294, NULL, NULL, NULL, 'Massa Khiangte', NULL, 'massakhiangte777@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'lallawmsanga', '07085258416', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-22 07:24:58', '2022-12-22 07:24:58'),
(295, NULL, NULL, NULL, 'Sapra Vijay', NULL, 'sapravijay11@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9978763223', '+919106883789', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-24 06:23:56', '2022-12-24 06:23:56'),
(296, NULL, NULL, NULL, 'Ranjana  Hatila ', NULL, 'hatilaranjana5@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'ranju@20', '9575697601', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-25 07:13:12', '2022-12-25 07:13:12'),
(297, NULL, NULL, NULL, 'Prabhmehar Singh', NULL, 'blips_01sonar@icloud.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Mehar1314', '7780000013', 'Www.google.com', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-26 03:09:00', '2022-12-26 03:09:00'),
(298, NULL, NULL, NULL, 'Masoom Raza', NULL, 'masoomraza32312@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Masum@7906', '7906209088', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-27 05:27:39', '2022-12-27 05:27:39'),
(299, NULL, NULL, NULL, 'Priya Barman', NULL, 'barmanpriya992@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'lehengasite@98', '9365620264', 'virjashop.com', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-27 06:32:34', '2022-12-27 06:32:34'),
(300, NULL, NULL, NULL, 'Govardhan KB', NULL, 'kunjilanakbg@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'ASDFGHJKL', '09980395595', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-27 08:25:25', '2022-12-27 08:25:25'),
(301, NULL, NULL, NULL, 'Unme Ayesha ', NULL, 'amturmariya64@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '7uR4t5sM3VMQ', '09100836370', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-27 11:28:14', '2022-12-27 11:28:14'),
(302, NULL, NULL, NULL, 'Sivaranjani Palani', NULL, 'ranjani251096@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Siva@2510', '+919500156252', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-27 13:49:19', '2022-12-27 13:49:19'),
(303, NULL, NULL, NULL, 'Womensila 2 Frim', NULL, 'womensila2@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '1221@Parth', '9979536880', '', '-2720.00', '4', '1', NULL, '1', '1', 212, '66f5c49c8fd0dbb17c8186b8d18ce0ca', 'c434621f9bff214e046324f70404d8ea', '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2022-12-28 06:47:22', '2023-02-01 10:29:49'),
(304, NULL, NULL, NULL, 'Atifa Iqbal', NULL, 'atifaiqbal88@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'rashidaa', '9073889964', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-28 10:18:38', '2022-12-28 10:18:38'),
(305, NULL, NULL, NULL, 'Sneha  Suresan ', NULL, 'itsbambu@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'bambu123', '9001052777', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-28 11:13:50', '2022-12-28 11:13:50'),
(306, NULL, NULL, NULL, 'Arun Babu', NULL, 'aruns364672@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9567364672', '+919567077088', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-30 11:05:59', '2022-12-30 11:05:59'),
(307, NULL, NULL, NULL, 'AK  Srivastava', NULL, 'bajrangisingh7202@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'fashionaajkal', '9616736819', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-30 14:31:45', '2022-12-30 14:31:45'),
(308, NULL, NULL, NULL, 'Pritam Sanghvi', NULL, 'sanghvipritam@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '55555555', '9490909180', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2022-12-31 02:49:30', '2022-12-31 02:49:30'),
(309, NULL, NULL, NULL, 'roop mati', NULL, 'halp.roopmati04@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'roop@123', '9909578846', 'lehengahosue.in', '-3660.00', '4', '1', NULL, '1', '1', 215, 'c4821952813a4488dbc6a290b1b56674', '34f93799a94ac275b896362bb5f2f2f2', '1', '500000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2022-12-31 07:13:08', '2023-01-31 17:16:47'),
(310, NULL, NULL, NULL, 'Chamanpreet  Kaur', NULL, 'chaman.chandhoke@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Lilypotter100%', '9988607512', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-01 06:58:29', '2023-01-01 06:58:29'),
(311, NULL, NULL, NULL, 'AKASH PANDYA', NULL, 'xyz@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'test123333', '9998432442', '', '0.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2023-01-01 12:20:41', '2023-01-18 09:17:45'),
(312, NULL, NULL, NULL, 'Priyadarshini  Majumdar', NULL, 'priyam251284@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'khushihashi', '7257851759', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-02 04:26:12', '2023-01-02 04:26:12'),
(313, NULL, NULL, NULL, 'Flexy Mall', NULL, 'flexymall125@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'flexy@123', '9723117492', '', '-26850.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '1000000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2023-01-02 07:00:28', '2023-01-23 11:30:53'),
(314, NULL, NULL, NULL, 'Madhumitha S', NULL, 'madhumithasaravanan23@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Madhumitha23*', '6374206146', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-02 12:33:39', '2023-01-02 12:33:39'),
(315, NULL, NULL, NULL, 'Akshay Patil', NULL, 'akshay@patil.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Akshay123', '9723117492', '', '-1417280.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '99999999.99', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2023-01-02 21:23:07', '2023-01-31 05:20:08'),
(316, NULL, NULL, NULL, 'Ishita  Aahu', NULL, 'ishita2005.2018@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Ishita@1234', '7848915837', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-03 09:16:55', '2023-01-03 09:16:55'),
(317, NULL, NULL, NULL, 'Sofia Angel', NULL, 'Sophia.saimon98@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Sophia@98', '8610681430', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-03 13:15:26', '2023-01-03 13:15:26'),
(318, NULL, NULL, NULL, 'Vastra Lable', NULL, 'newvastralable@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'vastra@123', '8160667741', 'vastralable.in', '0.00', '4', '1', NULL, '1', '1', 219, '6dc6787065fec9df9f38d3a37dfa9ffe', '337da7a3b947064bbb02da5d3d288155', '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2023-01-04 06:19:41', '2023-01-31 12:36:54'),
(319, NULL, NULL, NULL, 'Sanam  singh', NULL, 'sanamkumari116@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'sanam@1234', '7003054221', 'Storzqship', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-05 06:23:38', '2023-01-05 06:23:38'),
(320, NULL, NULL, NULL, 'Sameena  Begum', NULL, 'sameena.shaik442@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'sameer123', '8977655573', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-05 07:00:29', '2023-01-05 07:00:29'),
(321, NULL, NULL, NULL, 'Malik Junaid', NULL, 'iqbaljunaid97@gmail.con', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Malik123', '8178712642', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-05 08:31:56', '2023-01-05 08:31:56'),
(322, NULL, NULL, NULL, 'Vipin  Kumar', NULL, 'vk9732666@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Vkumar@123', '9997725009', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-05 09:08:04', '2023-01-05 09:08:04'),
(323, NULL, NULL, NULL, 'Malik Junaid', NULL, 'iqbaljunaid97@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Malik123', '8178712642', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-05 10:15:08', '2023-01-05 10:15:08'),
(324, NULL, NULL, NULL, 'Hyma Sabu', NULL, 'hymasabu3749@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'hymasabu', '9847893512', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-05 15:53:53', '2023-01-05 15:53:53'),
(325, NULL, NULL, NULL, 'Alisha Naik', NULL, 'naikalisha98@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Zini@3194', '7008286358', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-06 11:39:41', '2023-01-06 11:39:41'),
(326, NULL, NULL, NULL, 'test test', NULL, 'iteeipsa.mohanty@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'tsa123A@', '9000212121', 'https://test.com', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', '1673152017.png', NULL, NULL, '2023-01-07 11:04:31', '2023-01-08 04:26:57'),
(327, NULL, NULL, NULL, 'test test', NULL, 'tsa@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'tsa123A@', '9000212121', 'https://test.com', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', '1673152036.png', NULL, NULL, '2023-01-08 04:21:21', '2023-01-08 04:27:16'),
(328, NULL, NULL, NULL, 'Mansi Arora', NULL, 'mansi25nov@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'sahilwamana', '9453093001', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-08 10:19:00', '2023-01-08 10:19:00'),
(329, NULL, NULL, NULL, 'Archi Singh', NULL, 'singharchi684@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'archi9012', '09971471884', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-08 15:41:18', '2023-01-08 15:41:18'),
(330, NULL, NULL, NULL, 'Gurpreet  Kaur', NULL, 'gurpreetk.240799@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'lalalaa@07', '8081873232', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-08 17:09:13', '2023-01-08 17:09:13'),
(331, NULL, NULL, NULL, 'Kalyani  Kumar ', NULL, 'kalyanisk2000@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'blablabla', '9744266811', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-09 05:09:51', '2023-01-09 05:09:51'),
(332, NULL, NULL, NULL, 'Yaseen Khan', NULL, 'viratkohlivk62@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Yaseen786@', '+918169810553', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-09 05:12:51', '2023-01-09 05:12:51'),
(333, NULL, NULL, NULL, 'pooja kumari', NULL, 'order.salus@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'UNIVERSE', '7018991271', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-09 06:00:44', '2023-01-09 06:00:44'),
(334, NULL, NULL, NULL, 'Shweta Singh', NULL, 'shweta.singh89@live.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Ved@2131', '9971163919', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-09 16:11:21', '2023-01-09 16:11:21'),
(335, NULL, NULL, NULL, 'Sarika Pandey', NULL, 'sarikapandey_1983@rediffmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Avi@1210', '9999404405', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-10 01:07:38', '2023-01-10 01:07:38'),
(336, NULL, NULL, NULL, 'Sarika Pandey', NULL, 'sarika.pandey@blkhospital.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Avi@1210', '9999404405', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-10 01:09:27', '2023-01-10 01:09:27'),
(337, NULL, NULL, NULL, 'Jinu Jiji', NULL, 'jinujiji2019@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '8089234755', '8606320182', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-10 05:11:22', '2023-01-10 05:11:22'),
(338, NULL, NULL, NULL, 'Nisar Patel', NULL, 'Nisarpatel4444@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '7359831835', '7359831835', '', '340.00', '4', '1', NULL, '1', '1', 221, '36f3fc66eb391b76c0672d0420dca3ba', '36e0569dac64089a54a77575a059d449', '1', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2023-01-10 05:56:47', '2023-01-12 07:33:04'),
(339, NULL, NULL, NULL, 'Rashmita Panda', NULL, 'rash06784@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Rash@pp07.', '8209367813', 'Rashmita', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-10 11:27:58', '2023-01-10 11:27:58'),
(340, NULL, NULL, NULL, 'Rk  Goud', NULL, 'raviveeramalla1@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Abhigna6', '9000009335', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-10 14:10:09', '2023-01-10 14:10:09'),
(341, NULL, NULL, NULL, 'Jansi Rani', NULL, 'jansirani100797@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Jansi@10', '9578464452', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-11 06:43:02', '2023-01-11 06:43:02'),
(342, NULL, NULL, NULL, 'Akanksha Verma', NULL, 'akanksha4953@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Akanksha123@', '7080972749', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-12 13:13:50', '2023-01-12 13:13:50'),
(343, NULL, NULL, NULL, 'Smiksha  Mahajan', NULL, 'mahajansmiksha143@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'smiksha@007', '09419134343', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-13 08:00:53', '2023-01-13 08:00:53'),
(344, NULL, NULL, NULL, 'Sanjeev Saini', NULL, 'sanjeevsaini0316@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '12345678', '9588007316', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-13 10:28:10', '2023-01-13 10:28:10'),
(345, NULL, NULL, NULL, 'Sanjeev Saini', NULL, 'sanjeevkapoor322@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '12345678', '9588007316', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-13 10:33:56', '2023-01-13 10:33:56'),
(346, NULL, NULL, NULL, 'Deepika Singh', NULL, 'deepika.jdb61@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'poojadeepika', '09667532579', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-14 07:35:45', '2023-01-14 07:35:45'),
(347, NULL, NULL, NULL, 'Jaspreet Dhaliwal', NULL, 'jaspreetkdhaliwal1313@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'J@spreet007', '8872127472', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-14 14:25:44', '2023-01-14 14:25:44'),
(348, NULL, NULL, NULL, 'Karunya Konde', NULL, 'konde.karunya@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Karunya10', '8746844056', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-15 16:37:07', '2023-01-15 16:37:07'),
(349, NULL, NULL, NULL, 'payel roy', NULL, 'sutanunaskar@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'SUTANU@1986', '9038392675', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-16 05:34:08', '2023-01-16 05:34:08'),
(350, NULL, NULL, NULL, 'Miss Vishakha', NULL, 'miss.vishakha1998@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'vishu890', '09625094986', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-16 07:10:46', '2023-01-16 07:10:46'),
(351, NULL, NULL, NULL, 'Renuka Ankalagi', NULL, 'ankalagirenuka434@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'renukiii', '7975135104', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-16 08:07:10', '2023-01-16 08:07:10'),
(352, NULL, NULL, NULL, 'Jaya  Mistri', NULL, 'mistrimayank827@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Divya@123', '7567312178', 'www.storzoship.com', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-18 08:53:16', '2023-01-18 08:53:16'),
(353, NULL, NULL, NULL, 'Devanshi  Trend ', NULL, 'Trenddevanshi@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Khunt@728399', '9537162474', 'https://devanshitrend.com/', '-19980.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2023-01-19 05:31:30', '2023-02-01 12:38:23'),
(354, NULL, NULL, NULL, 'Swathi Kurmam', NULL, 'kurmamswathi72@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'swathi@2119', '9381286878', 'Insta', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-22 03:55:35', '2023-01-22 03:55:35'),
(355, NULL, NULL, NULL, 'Madhuri Poddar', NULL, 'g08madhuri@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Arsh@2707', '8802234320', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-23 09:55:48', '2023-01-23 09:55:48'),
(356, NULL, NULL, NULL, 'Lakshmi Prasanna', NULL, 'borigorla.lakshmiprasanna@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'bathala@17', '09640477415', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-23 13:57:44', '2023-01-23 13:57:44'),
(357, NULL, NULL, NULL, 'Krishna Patel', NULL, 'krinap2296@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Kp#12345', '9662526782', '', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-23 18:40:40', '2023-01-23 18:40:40'),
(358, NULL, NULL, NULL, 'PRAKASH RAMANI', NULL, 'logicrd358@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'Virgo@6424', '9023022708', 'https://www.indianlhengacholi.store', '0.00', '4', '', NULL, '1', NULL, NULL, NULL, NULL, '', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, NULL, '2023-01-27 14:02:53', '2023-01-27 14:02:53'),
(359, NULL, NULL, NULL, 'Sahil Khokhariya', NULL, 'sahil.khokhariya06@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9586425305', '9586425305', '', '0.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '0.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2023-01-28 08:35:38', '2023-01-30 05:47:02'),
(360, NULL, NULL, NULL, 'HP. Dhupiyan', NULL, 'hp.dhupiyan@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', '9104110732', '9104110732', '', '-1020.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '50000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 3, '2023-01-30 06:29:35', '2023-01-30 07:00:24'),
(361, NULL, NULL, NULL, 'Hitesh Chauhan', NULL, 'phoneix02@gmail.com', NULL, '$2y$10$pWhmI4YFOUrlRgCMZSE1NuQ.ej2EYf0ufY27PKaZVD6/Ksmg.r7iO', 'phoneix123', '9785590736', '', '-390.00', '4', '1', NULL, '1', NULL, NULL, NULL, NULL, '1', '100000.00', NULL, NULL, NULL, '1', '', '0', '0', NULL, NULL, 2, '2023-02-01 10:21:33', '2023-02-01 11:05:03'),
(362, '1', 'Admin', 'Admin', 'Admin Admin', NULL, 'admin@gmail.com', NULL, '$2y$10$zuyOwB5vsY/hV0zv58hGo.n3qZEDSfYd6ZHV83U.ucgWBdiTnO.rG', NULL, '8168295841', NULL, '0.00', '1', '2', NULL, '2', NULL, NULL, NULL, NULL, '0', '0.00', NULL, NULL, NULL, '1', '2', '0', '0', NULL, NULL, NULL, '2023-03-06 00:47:13', '2023-03-09 01:53:16'),
(363, '362', 'Member 1', 'Member 1', 'Member 1 Member 1', NULL, 'member1@gmail.com', NULL, '$2y$10$6cIOrkmF935Yx68XF1pa9.SA0tG0rWdQSuhe0CeUIkd/JuyvvevH6', NULL, '09466666666', NULL, '0.00', '2', '1', NULL, '2', NULL, NULL, NULL, NULL, '0', '0.00', NULL, NULL, NULL, '1', '1', '0', '0', NULL, NULL, NULL, '2023-03-06 01:03:41', '2023-03-06 01:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_transaction`
--

CREATE TABLE `wallet_transaction` (
  `id` bigint NOT NULL,
  `sender_id` bigint DEFAULT NULL,
  `order_id` bigint DEFAULT NULL,
  `debit` decimal(10,2) DEFAULT '0.00',
  `credit` decimal(10,2) DEFAULT '0.00',
  `runningbalance` decimal(10,2) DEFAULT NULL,
  `remarks` varchar(150) DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landmark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_label_user`
--
ALTER TABLE `assign_label_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_logistic_sender`
--
ALTER TABLE `assign_logistic_sender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_address`
--
ALTER TABLE `billing_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cod_remittance_detail`
--
ALTER TABLE `cod_remittance_detail`
  ADD PRIMARY KEY (`cod_remittance_detail_id`);

--
-- Indexes for table `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_master`
--
ALTER TABLE `document_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `error_order_master`
--
ALTER TABLE `error_order_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forward_order_master`
--
ALTER TABLE `forward_order_master`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `kyc_document_master`
--
ALTER TABLE `kyc_document_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kyc_verification_master`
--
ALTER TABLE `kyc_verification_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logistic_master`
--
ALTER TABLE `logistic_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logistic_priorities`
--
ALTER TABLE `logistic_priorities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logistic_priority`
--
ALTER TABLE `logistic_priority`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_price`
--
ALTER TABLE `manage_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metrocity`
--
ALTER TABLE `metrocity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ndr_comment_detail`
--
ALTER TABLE `ndr_comment_detail`
  ADD PRIMARY KEY (`ndr_comment_detail_id`);

--
-- Indexes for table `next_cod_remittance_list`
--
ALTER TABLE `next_cod_remittance_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_airwaybill_detail`
--
ALTER TABLE `order_airwaybill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `airwaybill_no` (`airwaybill_no`,`order_status_id`),
  ADD KEY `order_id` (`order_id`,`airwaybill_no`,`order_status_id`);

--
-- Indexes for table `order_error_log`
--
ALTER TABLE `order_error_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product_detail`
--
ALTER TABLE `order_product_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`order_status_id`);

--
-- Indexes for table `order_tracking_detail`
--
ALTER TABLE `order_tracking_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pincode_detail`
--
ALTER TABLE `pincode_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pincode_detail_ibfk_1` (`pincode_id`);

--
-- Indexes for table `pincode_master`
--
ALTER TABLE `pincode_master`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pincode` (`pincode`);

--
-- Indexes for table `receiver_address`
--
ALTER TABLE `receiver_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rule_master`
--
ALTER TABLE `rule_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sender_address_master`
--
ALTER TABLE `sender_address_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sender_manage_price`
--
ALTER TABLE `sender_manage_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `temp_forward_order_master`
--
ALTER TABLE `temp_forward_order_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_order_master`
--
ALTER TABLE `temp_order_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `wallet_transaction`
--
ALTER TABLE `wallet_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_label_user`
--
ALTER TABLE `assign_label_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assign_logistic_sender`
--
ALTER TABLE `assign_logistic_sender`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=605;

--
-- AUTO_INCREMENT for table `billing_address`
--
ALTER TABLE `billing_address`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cod_remittance_detail`
--
ALTER TABLE `cod_remittance_detail`
  MODIFY `cod_remittance_detail_id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `couriers`
--
ALTER TABLE `couriers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `document_master`
--
ALTER TABLE `document_master`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `error_order_master`
--
ALTER TABLE `error_order_master`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forward_order_master`
--
ALTER TABLE `forward_order_master`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kyc_document_master`
--
ALTER TABLE `kyc_document_master`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kyc_verification_master`
--
ALTER TABLE `kyc_verification_master`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logistic_master`
--
ALTER TABLE `logistic_master`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `logistic_priorities`
--
ALTER TABLE `logistic_priorities`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logistic_priority`
--
ALTER TABLE `logistic_priority`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manage_price`
--
ALTER TABLE `manage_price`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `metrocity`
--
ALTER TABLE `metrocity`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ndr_comment_detail`
--
ALTER TABLE `ndr_comment_detail`
  MODIFY `ndr_comment_detail_id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `next_cod_remittance_list`
--
ALTER TABLE `next_cod_remittance_list`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_airwaybill_detail`
--
ALTER TABLE `order_airwaybill_detail`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_error_log`
--
ALTER TABLE `order_error_log`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_product_detail`
--
ALTER TABLE `order_product_detail`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `order_status_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_tracking_detail`
--
ALTER TABLE `order_tracking_detail`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pincode_detail`
--
ALTER TABLE `pincode_detail`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pincode_master`
--
ALTER TABLE `pincode_master`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receiver_address`
--
ALTER TABLE `receiver_address`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rule_master`
--
ALTER TABLE `rule_master`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sender_address_master`
--
ALTER TABLE `sender_address_master`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sender_manage_price`
--
ALTER TABLE `sender_manage_price`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1605;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `CustomerID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_forward_order_master`
--
ALTER TABLE `temp_forward_order_master`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_order_master`
--
ALTER TABLE `temp_order_master`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364;

--
-- AUTO_INCREMENT for table `wallet_transaction`
--
ALTER TABLE `wallet_transaction`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pincode_detail`
--
ALTER TABLE `pincode_detail`
  ADD CONSTRAINT `pincode_detail_ibfk_1` FOREIGN KEY (`pincode_id`) REFERENCES `pincode_master` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
