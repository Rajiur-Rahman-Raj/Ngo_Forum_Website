-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2021 at 08:11 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devcnbou_angioforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutcategories`
--

CREATE TABLE `aboutcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutcategories`
--

INSERT INTO `aboutcategories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Mission', '2019-12-16 09:07:49', '2019-12-16 09:15:48'),
(2, 'Goals', '2019-12-16 09:08:35', NULL),
(3, 'Core Values', '2019-12-16 09:08:49', NULL),
(4, 'Programmatic Strategic Issues', '2019-12-16 09:08:59', '2020-01-13 04:40:00'),
(5, 'Network', '2019-12-16 09:09:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aboutnetworks`
--

CREATE TABLE `aboutnetworks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `development_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'development.jpg',
  `networking_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'networking.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutnetworks`
--

INSERT INTO `aboutnetworks` (`id`, `title`, `development_image`, `networking_image`, `created_at`, `updated_at`) VALUES
(2, 'title one', '2.png', '1030944772.png', '2019-12-16 00:18:31', '2019-12-16 00:18:33');

-- --------------------------------------------------------

--
-- Table structure for table `abouutnogforms`
--

CREATE TABLE `abouutnogforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_ngo_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'about_ngo_image.jpg',
  `about_ngo_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_ngo_description_two` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_ngo_vision_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_ngo_vision_bg_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'about_ngo_vision_bg_image.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouutnogforms`
--

INSERT INTO `abouutnogforms` (`id`, `about_ngo_image`, `about_ngo_description`, `about_ngo_description_two`, `about_ngo_vision_title`, `about_ngo_vision_bg_image`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', 'At the backdrop of grim scenario around the globe in the area of water supply and sanitation resulting in dangerously high incidences of mortality and morbidity, the United Nations General Assembly launched the International Drinking Water Supply and Sanitation Decade (IDWSSD) for the period 1981-1990. The Decade was observed with the mission to help reduce mortality and morbidity caused by water-borne diseases at the grassroots. And to implement the Decade programme in Bangladesh.NGO Forum was established in 1982 as the brainchild of the United Nations Steering Committee in line with the International Drinking Water Supply and Sanitation Decade (IDWSSD). Following a long evolution process, the organization has evolved in the development sector with legal entity in the year 1991. Presently it is involved as the apex networking and service delivery body of NGOs, CBOs and private sector operators in the WASH sector of Bangladesh. In line with the multi-dimensional aspects & challenges in WASH sector, the Forum widened its programmatic domain beyond WASH. Since 2001 the organization is being renamed as the NGO Forum for Public Health. NGO Forum is thus, serving as a national networking and rights-based service delivery organization.', 'It is engaged to promote WASH, nutrition, health, governance, humanitarian responsiveness, safe migration and climate resilience to contribute to the improvement of public health and safety, especially for the poor, marginalized and excluded segments of the society. NGO Forum implemented several governance focused projects in which successful efforts were made to engage the relevant Local Government Institutions in promoting LGI-led & community-managed services. Climate change adaptation and resilience building is an integral component of these governance focused projects. Maximum projects were implemented in climate vulnerable and hard-to-reach areas of the country. The organization implemented at least 11 humanitarian focused projects. It is also serving emergency WASH interventions incorporating DRR component to the Rohingya refugee population. Disaster risk measures against landslides, flash floods, etc. have been incorporated in these interventions.', 'Everyone is living quality life in a healthy society', '1358965903.jpg', '2020-01-13 04:46:43', '2020-01-13 04:46:43');

-- --------------------------------------------------------

--
-- Table structure for table `allabouts`
--

CREATE TABLE `allabouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_category_id` int(11) NOT NULL,
  `bg_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_bg_image.jpg',
  `ck_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allabouts`
--

INSERT INTO `allabouts` (`id`, `about_category_id`, `bg_image`, `ck_description`, `created_at`, `updated_at`) VALUES
(1, 1, '2.jpg', '<p>NGO Forum is a national networking and service delivery organization engaged to promote WaSH, health, governance and climate resilience to contribute to the improvement of public health situation, especially for the poor and hard-to-reach segments of the society.</p>\r\n<p>Being a rights-based organization, NGO Forum utilizes its proven experiences of working as development partner with all concerned government bodies, LGIs and duty bearers, NGOs, CBOs, private sector, civil society, media, national and international agencies, development partners and other stakeholders.</p>\r\n<p>With a competent and decentralized work-force and strong network, NGO Forum strives to bring an enabling environment by complementing the implementation of all relevant national policies.</p>', '2019-12-16 09:19:32', '2019-12-16 09:19:35'),
(7, 4, '7.jpg', '<ul style=\"list-style-type: disc;\">\r\n<li>Public Health</li>\r\n<li>Environment and Disaster Management</li>\r\n<li>Water Quality and Management</li>\r\n<li>Arsenic Mitigation</li>\r\n<li>Sustainable WaSH Management</li>\r\n<li>Hard-to-Reach and Equity</li>\r\n<li>Gender Equity</li>\r\n<li>Capacity Development</li>\r\n<li>Governance and Transparency</li>\r\n<li>Urban WaSH &amp; Health Management</li>\r\n<li>Waste Management</li>\r\n<li>Food Security and Safety</li>\r\n<li>Humanitarian Assistance</li>\r\n<li>Networking and Advocacy</li>\r\n</ul>', '2020-01-13 05:30:03', '2020-01-13 05:30:04'),
(12, 5, '12.jpg', '<p style=\"text-align: justify;\">NGO Forum maintains a nation-wide working structure to facilitate the supports in a decentralized fashion. Through its working structure in communion with around 850 partner NGOs &amp; CBOs, NGO Forum&rsquo;s entire working area is encompassed into 14 Regions with administrative and management set-up at each of the Regional Offices. In line with its mandate NGO Forum maintains a dynamic network with all relevant national and international agencies and stakeholders ranging from the policy-makers and civil society to the resource sharing partners</p>', '2020-01-13 05:54:46', '2020-01-13 05:54:47'),
(15, 2, '15.jpg', '<ul>\r\n<li>Contributing to improvement of overall public health scenario of Bangladesh</li>\r\n<li>Contributing to poverty alleviation through ending any kind of discrimination and exclusion, and reducing inequalities and vulnerabilities</li>\r\n<li>Ensuring access to safe and sustainable water, safely managed sanitation, and health care services</li>\r\n<li>Promoting sustainable environment in adaptation to climate change</li>\r\n</ul>', '2020-08-11 02:12:40', '2020-08-11 02:12:41'),
(17, 3, '17.jpg', '<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Concern for the poor, hard-to-reach, disadvantaged and socially excluded people with special focus on women and children</li>\r\n<li>People&rsquo;s rights and human dignity</li>\r\n<li>Gender and equality</li>\r\n<li>Humanitarian and emergency response</li>\r\n<li>Good governance</li>\r\n<li>Advocacy, networking and partnership</li>\r\n<li>Green environment and climate resilience</li>\r\n</ul>', '2020-08-11 02:17:43', '2020-08-11 02:17:44');

-- --------------------------------------------------------

--
-- Table structure for table `allgenerals`
--

CREATE TABLE `allgenerals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `general_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allgenerals`
--

INSERT INTO `allgenerals` (`id`, `general_name`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Ms. Rasheda K. Choudhury', 'Executive Director, Campaign for Popular Education (CAMPE)', '2019-12-02 07:51:14', NULL),
(4, 'Dr. A. Atiq Rahman', 'Executive Director, Bangladesh Centre for Advanced Studies (BCAS)', '2019-12-02 07:51:40', NULL),
(5, 'Mr. Anish K. Barua', 'Executive Director,Communica', '2019-12-02 07:52:05', NULL),
(7, 'Mr. Syed Nurul Alam', 'Executive Director, South Asia Partnership - Bangladesh', '2019-12-02 07:52:54', NULL),
(8, 'Dr. K.S. Huda', 'Director, Environment & Climate Change, Dhaka Ahsania Mission', '2020-01-13 15:05:18', '2020-01-13 15:05:18'),
(9, 'Mr. Fariduddin Ahmed Mia', 'Sector Specialist, Water and Sanitation', '2019-12-16 00:05:59', NULL),
(10, 'Mr. Kazi Rafiqul Alam', 'President, Dhaka Ahsania Mission', '2019-12-16 00:08:04', NULL),
(11, 'Dr. Dibalok Singha', 'Executive Director, Dustha Shasthya Kendra (DSK)', '2019-12-16 00:10:21', NULL),
(12, 'Mr. Haroon-Ur-Rashid', 'Professor, Department of Architecture, North South University', '2019-12-16 00:11:04', NULL),
(13, 'Dr. Md. Mujibur Rahman', 'Professor, Department of Civil Engineering, Environmental Engineering Division, BUET', '2019-12-16 00:11:51', NULL),
(14, 'Dr. Profulla C. Sarker', 'Vice-Chancellor, Prime University', '2019-12-16 00:12:33', NULL),
(15, 'Mr. Jeffrey S. Pereira', 'Former Executive Director, CARITAS-Bangladesh', '2020-01-13 15:07:17', '2020-01-13 15:07:17'),
(16, 'Ms. Syeda Rizwana Hasan', 'Chief Executive, BELA', '2019-12-16 00:14:21', NULL),
(18, 'Mr. Abu Taher Khan', 'Director, Procurement & Corporate Affair Bangladesh Diabetic Association', '2020-01-13 15:07:47', NULL),
(19, 'Dr. M. Feroze Ahmed', 'Vice Chancellor, Stamford University Bangladesh', '2020-01-13 15:07:58', NULL),
(20, 'Prof. Dr. Golam Samdani Fakir', 'Vice Chancellor, Green University of Bangladesh', '2020-01-13 15:08:09', NULL),
(21, 'Mr. Md. Shafiqul Haq Chowdhury', 'President, ASA (Association for Social Advancement)', '2020-01-13 15:08:22', NULL),
(22, 'Mr. Fariduddin Ahmed Mia', 'Sector Specialist, Water and Sanitation', '2020-12-01 02:54:52', NULL),
(23, 'Professor Dr. Ashraf Ali', 'Director, ITN-BUET (Bangladesh University of Engineering and Technology)', '2020-12-01 02:56:03', '2020-12-01 02:56:03'),
(24, 'Dr. Mahfuzar Rahman', 'Programme Head, Research & Evaluation Division, BRAC', '2020-12-01 02:56:45', NULL),
(25, 'Mr. Musharrof Hossain', 'Head, Human Resources Management, ICDDR,B', '2020-12-01 02:57:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `allmetarials`
--

CREATE TABLE `allmetarials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `metarials_category_id` int(11) NOT NULL,
  `metarials_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'metarials_image.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allmetarials`
--

INSERT INTO `allmetarials` (`id`, `metarials_category_id`, `metarials_title`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'example title', '1.jpg', '2019-12-07 17:02:00', '2019-12-07 17:02:04'),
(2, 1, 'example title', '2.jpg', '2019-12-07 17:03:03', '2019-12-07 17:03:07'),
(3, 1, 'example title', '3.jpg', '2019-12-07 17:03:44', '2019-12-07 17:03:44'),
(5, 1, 'example title', '5.jpg', '2020-01-11 05:31:05', '2020-01-11 05:31:07'),
(6, 1, 'example title', '6.jpg', '2020-01-11 05:32:12', '2020-01-11 05:32:14'),
(7, 1, 'example title', '7.jpg', '2020-01-11 05:32:42', '2020-01-11 05:32:44'),
(8, 1, 'example title', '8.jpg', '2020-01-11 05:43:32', '2020-01-11 05:43:34'),
(11, 2, 'example title', '11.jpg', '2020-01-11 05:56:49', '2020-01-11 05:56:50'),
(12, 2, 'example title', '12.jpg', '2020-01-11 06:06:40', '2020-01-11 06:06:41'),
(13, 2, 'example title', '13.jpg', '2020-01-11 06:06:54', '2020-01-11 06:06:55'),
(14, 2, 'example title', '14.jpg', '2020-01-11 06:07:05', '2020-01-11 06:07:06'),
(15, 3, 'example title', '15.jpg', '2020-01-11 06:09:02', '2020-01-11 06:09:03'),
(16, 3, 'example title', '16.jpg', '2020-01-11 06:10:19', '2020-01-11 06:10:20'),
(17, 3, 'example title', '17.jpg', '2020-01-11 06:10:30', '2020-01-11 06:10:31'),
(18, 3, 'example title', '18.jpg', '2020-01-11 06:10:46', '2020-01-11 06:10:47'),
(20, 3, 'example title', '20.jpg', '2020-01-11 06:12:49', '2020-01-11 06:12:50'),
(21, 4, 'example title', '21.jpg', '2020-01-11 06:16:16', '2020-01-11 06:16:17'),
(22, 4, 'example title', '22.jpg', '2020-01-11 06:16:40', '2020-01-11 06:16:41'),
(23, 4, 'example title', '23.jpg', '2020-01-11 06:16:54', '2020-01-11 06:16:55'),
(24, 4, 'example title', '24.jpg', '2020-01-11 06:17:11', '2020-01-11 06:17:12'),
(25, 4, 'example title', '25.jpg', '2020-01-11 06:18:07', '2020-01-11 06:18:08'),
(26, 4, 'example title', '26.jpg', '2020-01-11 06:18:25', '2020-01-11 06:18:26'),
(27, 4, 'example title', '27.jpg', '2020-01-11 06:18:41', '2020-01-11 06:18:42'),
(29, 5, 'example title', '29.JPG', '2020-01-11 06:21:04', '2020-01-11 06:21:05'),
(30, 5, 'example title', '30.JPG', '2020-01-11 06:21:13', '2020-01-11 06:21:14'),
(31, 5, 'example title', '31.JPG', '2020-01-11 06:21:23', '2020-01-11 06:21:24'),
(32, 5, 'example title', '32.JPG', '2020-01-11 06:21:33', '2020-01-11 06:21:34'),
(33, 5, 'example title', '33.JPG', '2020-01-11 06:21:44', '2020-01-11 06:21:45'),
(34, 5, 'example title', '34.JPG', '2020-01-11 06:21:55', '2020-01-11 06:21:56'),
(35, 5, 'example title', '35.JPG', '2020-01-11 06:22:31', '2020-01-11 06:22:32'),
(36, 5, 'example title', '36.JPG', '2020-01-11 06:22:42', '2020-01-11 06:22:43'),
(37, 5, 'example title', '37.JPG', '2020-01-11 06:22:51', '2020-01-11 06:22:52'),
(38, 5, 'example title', '38.JPG', '2020-01-11 06:23:03', '2020-01-11 06:23:04'),
(39, 5, 'example title', '39.JPG', '2020-01-11 06:23:13', '2020-01-11 06:23:14');

-- --------------------------------------------------------

--
-- Table structure for table `allpolicies`
--

CREATE TABLE `allpolicies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mamber_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'mamber_image.jpg',
  `mamber_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mamber_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `possession` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allpolicies`
--

INSERT INTO `allpolicies` (`id`, `mamber_image`, `mamber_name`, `mamber_title`, `possession`, `created_at`, `updated_at`) VALUES
(9, '9.jpg', 'Mrs. Tahrunnesa Abdullah', 'Freelance Consultant', 'Chairperson', '2020-01-13 14:23:54', '2020-01-13 14:23:54'),
(10, '10.jpg', 'Dr. Salehuddin Ahmed', 'Former Governor, Bangladesh Bank', 'Vice-Chairperson', '2020-01-13 14:26:55', '2020-01-13 14:26:55'),
(11, '11.jpg', 'Ms. Shireen S. Mainuddin', 'Managing Director,ASAAN', 'Treasurer', '2020-01-13 14:27:17', '2020-01-13 14:27:17'),
(12, '12.jpg', 'Professor Dr. Ainun Nishat', 'Professor Emeritus, BRAC University', 'Member', '2020-01-13 14:27:38', '2020-01-13 14:27:38'),
(13, '13.jpg', 'Mrs. Jowshan A. Rahman', 'Former Chief Programme, Planning Section, UNICEF', 'Member', '2020-01-13 14:28:29', '2020-01-13 14:28:29'),
(14, '14.jpg', 'Dr. Benedict Alo D’ Rozario', 'Ex-Executive Director, CARITAS - Bangladesh', 'Member', '2020-01-13 14:28:50', '2020-01-13 14:28:51'),
(15, '15.jpg', 'Dr. Naim Ahmed', 'Advocate, Supreme Court, Bangaldesh', 'Member', '2020-01-13 14:29:13', '2020-01-13 14:29:13'),
(16, '16.jpg', 'Mr. S.M.A. Rashid', 'Executive Director, NGO Forum for Public Health', 'Secretary (Ex-officio)', '2020-01-13 14:30:16', '2020-01-13 14:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `allresources`
--

CREATE TABLE `allresources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `resources_category_id` int(11) NOT NULL,
  `resources_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_new_image.jpg',
  `image_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_download` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ck_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allresources`
--

INSERT INTO `allresources` (`id`, `resources_category_id`, `resources_image`, `image_title`, `file_download`, `ck_description`, `created_at`, `updated_at`) VALUES
(11, 8, '11.jpg', 'Anti-Corruption Policy', '1577729303.pdf', NULL, '2019-12-31 05:08:23', '2019-12-31 05:08:23'),
(12, 8, '12.jpg', 'Child Protection Policy', '1577729394.pdf', NULL, '2019-12-31 05:09:54', '2019-12-31 05:09:54'),
(13, 8, '13.JPG', 'Conflict of Interest Policy', '1577729599.pdf', NULL, '2019-12-31 05:13:19', '2019-12-31 05:13:19'),
(14, 8, '14.jpg', 'Code of Ethics', '1577729673.pdf', NULL, '2019-12-31 05:14:32', '2019-12-31 05:14:33'),
(15, 8, '15.png', 'Constitution NGO Forum for Public Health', '1577729733.pdf', NULL, '2019-12-31 05:15:33', '2019-12-31 05:15:33'),
(16, 8, '16.jpg', 'Contingency Plan NGOF', '1577729795.pdf', NULL, '2019-12-31 05:16:35', '2019-12-31 05:16:35'),
(17, 8, '17.jpg', 'Disciplinary Action Policy', '1577729858.pdf', NULL, '2019-12-31 05:17:37', '2019-12-31 05:17:38'),
(18, 8, '18.jpg', 'Diversity & Inclusion Policy', '1577729884.pdf', NULL, '2019-12-31 05:18:04', '2019-12-31 05:18:04'),
(19, 8, '19.png', 'Finacial Procedure 2017', NULL, NULL, '2019-12-31 05:20:44', '2019-12-31 05:20:44'),
(20, 8, '20.jpg', 'Fraud Management Policy', NULL, NULL, '2019-12-31 05:22:01', '2019-12-31 05:22:01'),
(21, 8, '21.jpg', 'Gender Policy NGOF', NULL, NULL, '2019-12-31 05:39:08', '2019-12-31 05:39:09'),
(24, 8, '24.jpg', 'HR Policy NGO Forum 2017', '1577731211.pdf', NULL, '2019-12-31 05:40:11', '2019-12-31 05:40:11'),
(25, 8, '25.jpg', 'HR Policy-English', '1577731250.pdf', NULL, '2019-12-31 05:40:50', '2019-12-31 05:40:50'),
(26, 8, '26.jpg', 'Human Rights Policy', '1577731285.pdf', NULL, '2019-12-31 05:41:25', '2019-12-31 05:41:25'),
(27, 8, '27.JPG', 'Intenal Audit Manual_2015', '1577731331.pdf', NULL, '2019-12-31 05:42:11', '2019-12-31 05:42:12'),
(28, 8, '28.JPG', 'Procurement Manual_NGOF_2016', '1577731459.pdf', NULL, '2019-12-31 05:44:19', '2019-12-31 05:44:19'),
(29, 8, '29.JPG', 'Procurement Procedure January 2018', '1577731495.pdf', NULL, '2019-12-31 05:44:55', '2019-12-31 05:44:55'),
(30, 8, '30.jpg', 'Recruitment Policy', '1577731548.pdf', NULL, '2019-12-31 05:45:48', '2019-12-31 05:45:48'),
(31, 8, '31.jpg', 'Safeguarding Policy', '1577731588.pdf', NULL, '2019-12-31 05:46:28', '2019-12-31 05:46:28'),
(32, 8, '32.jpg', 'Staff Development Policy', '1577731630.pdf', NULL, '2019-12-31 05:47:09', '2019-12-31 05:47:10'),
(33, 8, '33.JPG', 'Transport Policy_NGOF', '1577731661.pdf', NULL, '2019-12-31 05:47:41', '2019-12-31 05:47:41'),
(34, 8, '34.jpg', 'Whistleblower Policy', '1577731691.pdf', NULL, '2019-12-31 05:48:11', '2019-12-31 05:48:11'),
(35, 9, '35.JPG', 'Annual Report 2015', '1577731972.pdf', NULL, '2019-12-31 05:52:52', '2019-12-31 05:52:52'),
(36, 9, '36.JPG', 'Annual Report 2016', '1577732147.pdf', NULL, '2019-12-31 05:55:47', '2019-12-31 05:55:47'),
(37, 9, '37.JPG', 'Annual Report 2017', '1577732193.pdf', NULL, '2019-12-31 05:56:33', '2019-12-31 05:56:33'),
(38, 10, '38.JPG', 'NGOF-UNHCR Project Brochure', '1577732293.pdf', NULL, '2019-12-31 05:58:13', '2019-12-31 05:58:13'),
(39, 10, '39.JPG', 'Org Brochure new 2016', '1577732350.pdf', NULL, '2019-12-31 05:59:10', '2019-12-31 05:59:10'),
(40, 12, '40.jpg', 'Paniprobaha', '1577732443.pdf', NULL, '2019-12-31 06:00:43', '2019-12-31 06:00:43'),
(41, 12, '41.jpg', 'Watsan', '1577732473.pdf', NULL, '2019-12-31 06:01:13', '2019-12-31 06:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `allservices`
--

CREATE TABLE `allservices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_category_id` int(11) NOT NULL,
  `meals` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rates` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allservices`
--

INSERT INTO `allservices` (`id`, `service_category_id`, `meals`, `rates`, `food`, `created_at`, `updated_at`) VALUES
(10, 1, 'Breakfast', 'Tk.110.00', 'Parata/Ruti, Vegetable, Egg and Tea or Bhuna Khichuri, Egg and Tea', '2020-01-09 07:51:31', NULL),
(11, 1, 'Snacks & Tea Morning', 'Tk. 80.00', 'Sandwich/ Veg. Roll, sweets and Tea', '2020-01-09 07:51:54', NULL),
(12, 1, 'Lunch', 'Tk.200.00', 'Plain Rice, Chicken/Fish, Vegetable, Dal & Salad', '2020-01-09 07:52:25', NULL),
(13, 1, 'Snacks & Tea Evening', 'Tk. 60.00', 'Vegetable Roll/ Samusa/ Cake and Tea', '2020-01-09 07:52:54', NULL),
(14, 1, 'Dinner', 'Tk.200.00', 'Plain Rice, Fish/Chicken, Vegetable, Dal & Salad', '2020-01-09 07:53:15', NULL),
(15, 1, 'Special Lunch/Dinner', 'Tk.380.00', 'Polao/ Fried Rice, Chicken Roast, Fish fry, Vegetable, Salad and soft drinks', '2020-01-09 07:53:36', NULL),
(16, 2, 'Breakfast', 'Tk.150.00', 'Bread/Parata/Ruti, Vegetable, Egg, fruits and Tea/coffee', '2020-01-09 08:00:45', NULL),
(17, 2, 'Morning Snacks', 'Tk.120.00', 'Sandwich/patties/ Samusa, Sweets and Tea/coffee', '2020-01-09 08:01:15', NULL),
(18, 2, 'Lunch', 'Tk.280.00', 'Plain Rice, Chicken, Fish, Vegetable, dal and Salad', '2020-01-09 08:01:35', NULL),
(19, 2, 'Evening Snacks', 'Tk.110.00', 'Sandwich/Pitha/ Fruits, Sweets and Tea/coffee', '2020-01-09 08:01:51', NULL),
(20, 2, 'Dinner', 'Tk.270.00', 'Plain Rice, Fish, Chicken, Vegetable, dal and Salad', '2020-01-09 08:02:08', NULL),
(21, 2, 'Special Lunch/Dinner', 'Tk.405.00', 'Polao/Fried Rice, Chicken Roast, Fish fry, Vegetable, Salad and desert', '2020-01-09 08:03:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `allwqtltestrates`
--

CREATE TABLE `allwqtltestrates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testrate_category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parameters` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `all_news`
--

CREATE TABLE `all_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_category_id` int(11) NOT NULL,
  `news_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_new_image.jpg',
  `news_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `ck_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_news`
--

INSERT INTO `all_news` (`id`, `news_category_id`, `news_title`, `news_description`, `news_image`, `news_status`, `ck_description`, `created_at`, `updated_at`) VALUES
(13, 7, 'Blog writeup of Mr.Md.Ahasan Habib', NULL, '13.png', 'active', '<div class=\"media_element\">&copy; GlobalDev GDN</div>\r\n<section class=\"post-content\">\r\n<div class=\"meta\">\r\n<p style=\"text-align: left;\">01 Dec 19, Posted by Cocciolo, Serena , Habib, Ahasan , Tompsett, Anna</p>\r\n</div>\r\n<h2 style=\"text-align: left;\"><a href=\"http://globaldev.blog/blog/participatory-governance-how-citizens-value-inclusive-institutions\">Participatory governance: how citizens value inclusive institutions</a></h2>\r\n<div class=\"post_desc\">\r\n<div class=\"field field-name-body field-type-text-with-summary field-label-hidden\">\r\n<div class=\"field-items\">\r\n<div class=\"field-item even\">\r\n<p style=\"text-align: justify;\"><em><strong>Citizen engagement, community mobilization, local governance, and decentralized service delivery are at the core of institutional reforms in many countries. But are these participatory initiatives able to transform local decision-making or empower the poor in any enduring way? There is little evidence that &lsquo;community-driven development&rsquo; can transform community decision-making and local institutions. This column investigates one possible reason why.</strong></em></p>\r\n<p style=\"text-align: justify;\">As discussed in the <a href=\"https://www.worldbank.org/en/publication/wdr2017\">2017 World Development Report</a>, recent institutional reforms in many countries focus on social accountability, citizen engagement, community mobilization, local governance, and decentralized service delivery. In the development sector, <a href=\"https://openknowledge.worldbank.org/handle/10986/11859\">&lsquo;community-driven development&rsquo;</a> (CDD) has emerged as one of the dominant approaches for the delivery of development interventions.</p>\r\n<p style=\"text-align: justify;\">But are these participatory initiatives able to transform local decision-making or empower the poor in any enduring way?</p>\r\n<p style=\"text-align: justify;\">For example, as part of Bangladesh&rsquo;s reform agenda on open and transparent government, the Union Parishads Act (2009) mandates local administrative units to hold a series of consultation meetings, open to all citizens, before approving the local budget. Yet <a href=\"http://bigd.bracu.ac.bd/index.php/resources/sub-menu-item/download/6-policy-notes/138-social-accountability-in-public-procurement-how-citizen-engagement-can-make-a-difference\">despite formal compliance</a>, the reception and implementation of the &lsquo;Open Budget&rsquo; process have been <a href=\"https://onlinelibrary.wiley.com/doi/pdf/10.1111/j.2040-0209.2013.00419.x\">lukewarm</a>.</p>\r\n<p style=\"text-align: justify;\">Promoters of CDD interventions often hope that their programs have <a href=\"http://www.macartan.nyc/comments/cdd-what-is-it-good-for/\">spillover effects</a> on local institutions and social dynamics &ndash; for example, by increasing citizens&rsquo; demand for public consultations and opportunities to engage in local decision-making. Unfortunately, as summarized in a recent <a href=\"http://www.3ieimpact.org/media/filer_public/2018/03/12/cdd-brief-wp30.pdf\">report</a> by the International Initiative for Impact Evaluation, there is little evidence that CDD can transform community decision-making and local institutions.</p>\r\n<p style=\"text-align: justify;\">Here, we report some evidence that helps elucidate why that is the case. We draw lessons from a CDD program implemented in Bangladesh between 2015 and 2018 by the <a href=\"http://www.ngof.org/\">NGO Forum for Public Health</a>. As part of a broader research agenda on CDD and community decision-making, we run a &lsquo;<a href=\"https://www.dropbox.com/s/a2s7p4xbckk8g3r/CDD%20and%20value%20of%20participation_20190626.pdf?dl=0\">lab-in-the-field&rsquo; experiment</a> and a <a href=\"https://www.dropbox.com/s/meyyn2otmpwio7s/PAP.pdf?dl=0\">field experiment</a> to explore what citizens think about participatory practices. Our findings challenge some widely held beliefs about the links between participatory practices and institutional development.</p>\r\n<p style=\"text-align: justify;\"><strong>Citizens value inclusive institutions</strong></p>\r\n<p style=\"text-align: justify;\">Advocates of citizen engagement in public service delivery and monitoring often argue that consulting and involving program beneficiaries in decision-making is valuable per se and that deliberative processes create a sense of legitimacy for project decisions. But the exercise of voice and choice can be costly, for example, because of the opportunity cost of the time dedicated to participation, the psychological costs of contentious deliberations, or the material and social costs of taking positions that are contrary to the interests of powerful groups.</p>\r\n<p style=\"text-align: justify;\">One <a href=\"https://www.annualreviews.org/doi/abs/10.1146/annurev-economics-080217-053339\">recent study</a> of &lsquo;radical decentralization&rsquo; stresses the need for a better understanding of the overall welfare impact of CDD programs, considering the perceived benefits and costs of participation.</p>\r\n<p style=\"text-align: justify;\">We find clear evidence that <em>most citizens prefer taking collective decisions via an inclusive process.</em> Citizens prefer community decisions to be delegated to the community itself, but they also express an unmet demand for regulating local decision-making to make it more democratic and participative.</p>\r\n<p style=\"text-align: justify;\"><strong>Previous experience of participatory governance via a CDD program increases citizens&rsquo; value of inclusive institutions</strong></p>\r\n<p style=\"text-align: justify;\">Experiencing a CDD program provides communities with new tools to avoid or solve conflicts and tensions during public deliberations, therefore reducing the non-monetary costs (conflicts) associated with future participatory practices. Through a CDD program, citizens learn about the intrinsic qualities of these types of institutional arrangements (legitimacy and agency, for example), especially in communities in which the CDD program is more inclusive and where more citizens participated in the process.</p>\r\n<p style=\"text-align: justify;\">Through these channels, experiencing a CDD program can boost citizens&rsquo; demand for the adoption of participatory processes for future collective decisions.</p>\r\n<p style=\"text-align: justify;\"><strong>Policy lessons</strong></p>\r\n<p style=\"text-align: justify;\">But despite some changes in citizens&rsquo; value of participatory practices, <em>we find little evidence for changes in individual participation choices or local government practices</em>, consistent with many other studies. Nor do realized institutions reflect the social and political preferences of the majority of the population. Our evidence suggests that institutions may be persistent because they are constrained by the existing social and political power structures within society.</p>\r\n<p style=\"text-align: justify;\">Overall, our findings have important policy implications. Reforms aimed at improving governance through decentralization and citizen engagement may be most effective if they focus on removing the barriers that prevent the full and meaningful participation of all community members.</p>\r\n<p style=\"text-align: justify;\">For example, active measures should be taken to ensure that all households are informed and invited to participatory fora. Community meetings should be mediated and organized so that the clientelist relationships that govern local communities do not prevent community members from freely expressing their opinions and views.</p>\r\n<p style=\"text-align: justify;\">More optimistically, it is encouraging that exposure to new democratic and inclusive institutions (for example through a CDD program) leads to some changes in how citizens value alternative institutional arrangements. These shifts in preferences and attitudes may represent a fertile ground for follow-up interventions to strengthen civil society and support citizen engagement in public consultations and demands for political transformations.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>Authors:</strong></p>\r\n<p style=\"text-align: justify;\"><img style=\"width: 80px; height: 109px;\" src=\"http://globaldev.blog/sites/default/files/download_5.jpg\" alt=\"\" /></p>\r\n<p style=\"text-align: justify;\"><a href=\"http://globaldev.blog/users/serena-cocciolo\">Serena Cocciolo</a> is a Young Professional at the Governance Global Practice, World Bank, Washington DC. She has a Ph.D. from Stockholm University, Sweden.</p>\r\n<p style=\"text-align: justify;\"><img style=\"width: 80px; height: 80px;\" src=\"http://globaldev.blog/sites/default/files/Ahsan.jpg\" alt=\"\" /></p>\r\n<p style=\"text-align: justify;\"><a href=\"http://globaldev.blog/users/ahasan-habib\">Ahasan Habib </a>is the Head of Research, Monitoring &amp; Evaluation at the NGO Forum for Public Health, Bangladesh. He has an M.Sc. from Bangabandhu Sheikh Mujibur Rahman Agricultural University.</p>\r\n<p style=\"text-align: justify;\"><img style=\"width: 80px; height: 100px;\" src=\"http://globaldev.blog/sites/default/files/unnamed_1.jpg\" alt=\"\" /></p>\r\n<p style=\"text-align: justify;\"><a href=\"http://globaldev.blog/users/anna-tompsett\">Anna Tompsett</a> is an Assistant Professor in the Department of Economics, Stockholm University, Sweden. She has a Ph.D. from Columbia University, New York.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', '2019-12-28 05:43:30', '2019-12-31 06:10:32'),
(21, 1, 'The International Anti Corruption Day is being observed across Bangladesh', 'The International Anti Corruption Day is being observed across Bangladesh as well as other regions of the world, with the aim of raising voice against the growing culture of corruption. The theme of this year\'s Anti-Corruption Day, which is being observed on Monday, is \"United Against Corruption.\"To mark this date, the Anti-Corruption Commission (ACC) including some other bodies have arranged various programs comprising discussion, human-chain, mass signature campaign, posters and cartoon exhibitions throughout the day, NGO Forum for Public Health was participated this event.', '21.jpg', 'active', '<p><img src=\"/photos/2/78455375_440929660192993_4500591964852322304_o.jpg\" alt=\"\" width=\"508\" height=\"425\" /></p>', '2019-12-29 04:21:33', '2020-01-02 14:41:24'),
(22, 2, 'Global Hand Washing Day 2019 has been observed', '15 October 2019\r\n\r\nGlobal Hand Washing Day 2019 has been observed at Camp-6 being the camp focal agency.\r\n\r\nHand Washing Demonstration at different spaces/ levels.\r\n\r\nChild friendly Space cum Learning Centers: operated by other actors in Camp- 6, where we also conduct Hygiene Promotion Sessions. 2 soap bars in 291 such CFS Learning Centers were kept along with handwashing devices so that every child could learn and be aware of hand washing.\r\n\r\nCamp In-Charge Office: 6 handwashing devices were kept in front of the CIC Office, Camp- 6 so that all who entered the office could wash their hands and understand the importance of handwashing and mark the Day observation.\r\n\r\nOrganized the Meeting with Stakeholders especially the Religious Leaders (Imam) in the presence of the Assistant Camp In-Charge and other WASH and Education actors working in Camp-6.', '22.jpg', 'active', '<p><img src=\"/photos/2/72599604_394859368133356_7368849787447148544_o.jpg\" alt=\"\" width=\"254\" height=\"169\" /> <img src=\"/photos/2/72602802_394859324800027_8585775989915648000_o.jpg\" alt=\"\" width=\"251\" height=\"167\" /></p>\r\n<p><img src=\"/photos/2/73031517_394859431466683_1649111328192724992_o.jpg\" alt=\"\" width=\"510\" height=\"287\" /></p>\r\n<p><img src=\"/photos/2/73513758_394859048133388_8964079604155285504_o.jpg\" alt=\"\" width=\"257\" height=\"171\" /> <img src=\"/photos/2/74209895_394859204800039_720330032026746880_o.jpg\" alt=\"\" width=\"255\" height=\"170\" /></p>', '2019-12-29 04:34:40', '2020-01-02 14:41:18'),
(23, 8, 'Annual Meeting on \"Review and Planning on Service Promotion and Capacity Building of RTC Management\"', 'Annual Meeting on \"Review and Planning on Service Promotion and Capacity Building of RTC Management\" at Central Office.NGO Forum\r\nDate: 26-27 November 2019.', '23.jpg', 'active', '<p><img src=\"/photos/2/76908111_429338904685402_6761386286163951616_o.jpg\" alt=\"\" width=\"234\" height=\"163\" /> <img src=\"/photos/2/78177543_429339004685392_5811212432206462976_o.jpg\" alt=\"\" width=\"288\" height=\"162\" /></p>\r\n<p><img src=\"/photos/2/78363420_429339151352044_4040693244823076864_o.jpg\" alt=\"\" width=\"526\" height=\"296\" /></p>\r\n<p><img src=\"/photos/2/78787987_429338831352076_1060590127333507072_o.jpg\" alt=\"\" width=\"525\" height=\"295\" /></p>', '2019-12-29 04:43:56', '2020-01-02 14:41:10'),
(24, 1, 'The Commissioner of RRRC, Cox\'s Bazar Mr. Mahbub Alam Inaugurated our newly constructed 95000 liters capacity Inline', '20th November, 2019 - \r\nThe Commissioner of RRRC, Cox\'s Bazar Mr. Mahbub Alam Talukdar as the Chief guest Inaugurated our newly constructed 95000 liters capacity Inline \'Chlorinated Piped Water Distribution Network\' that will serve 1090 targeted household and new ABR Fecal Sludge Management (FSM) System in Block B, Camp- 6. Honorable Executive Director Mr. S.M.A. Rashid, Camp In-Charge (CIC) Mr. Khalilur Rahman Khan, Asst. CIC Mr. Rabiul Islam, UNICEF WASH Officer Mr. Aynul Huda & Mr. Mohammad Ashfaqur Rahman along with Project Staffs and other stakeholders were present in the occasion. Apart from this, NGO Forum Executive Director also accompanied the RRRC Commissioner inaugurating the \"Dream Garden\" built on CIC Office premises co-funded by NGOF.', '24.jpg', 'active', '<p><img src=\"/photos/2/76945681_424723338480292_7931959045500436480_o.jpg\" alt=\"\" width=\"617\" height=\"411\" /></p>\r\n<p><img src=\"/photos/2/75242087_424723805146912_7955520389977735168_o.jpg\" alt=\"\" width=\"617\" height=\"411\" /></p>', '2019-12-29 04:50:06', '2020-01-02 14:40:56'),
(26, 1, 'Dental Camp has been organized successfully', NULL, '26.jpg', 'active', '<p>Dental Camp has been organized successfully <br />Project: AusBangla Care for Dental ABCD</p>\r\n<p>Month: September 2019,<br />Venue:<span class=\"text_exposed_show\"><br />Tejgaon Shilpo Elaka Government Primary School, Tejgaon Industrial Area, Dhaka-1208.<br />Day: Sunday &amp; Monday,<br />Date: 29 - 30 September 2019<br />Global grant project of RC Dhaka.<br />International partner: <br />RC Dee Why Warringah, Australia.<br />Support partner: NGOF for Public Health.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span class=\"text_exposed_show\"><img src=\"/photos/2/71101380_2081238648644686_3918177692091940864_o.jpg\" alt=\"\" width=\"260\" height=\"195\" /> <img src=\"/photos/2/71577879_2081239188644632_5721363515965440000_o.jpg\" alt=\"\" width=\"260\" height=\"195\" /></span></p>\r\n<p><span class=\"text_exposed_show\"><img src=\"/photos/2/71294973_2081239975311220_7758764347555315712_o.jpg\" alt=\"\" width=\"525\" height=\"394\" /></span></p>', '2019-12-29 04:57:10', '2019-12-31 06:10:19'),
(29, 8, 'LIVE Telecast : From The Daily Bhorer Kagoj', 'Roundtable Discussion | WaSh Governance and Sustainable Development Goals | Organized by: Bhorer Kagoj and NGO FORUM | Supported by: Water Integrity Network (WIN) | Conference Room, The Daily Bhorer Kagoj.', '29.jpg', 'active', '<p>https://video.fdac20-1.fna.fbcdn.net/v/t42.26565-2/10000000_472982289990565_230673177003253660_n.mp4?_nc_cat=110&amp;efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9zZCJ9&amp;_nc_oc=AQkKImlN7Cb824e5TCxfVYe_5NFw7kRdIra7nM9D9z6kx8Nsbz6W3FrWRnP9MbjWHS4&amp;_nc_ht=video.fdac20-1.fna&amp;oh=8decc0de0495b55e33b2e561a1e2148b&amp;oe=5E07CB0D</p>', '2019-12-29 05:05:57', '2020-01-02 14:41:02'),
(31, 2, 'National Sanitation Month and Global Handwashing Day 2019', 'Photo animated documentation presented by team members of UNICEF-supported Improved Wash Project (Camps)', '31.png', 'active', '<p><a href=\"https://www.facebook.com/ngoforumforpublichealth/videos/pcb.406999730252653/406999110252715/?type=3&amp;theater\">https://www.facebook.com/ngoforumforpublichealth/videos/pcb.406999730252653/406999110252715/?type=3&amp;theater</a></p>\r\n<p><a href=\"https://www.facebook.com/ngoforumforpublichealth/videos/pcb.406999730252653/406999343586025/?type=3&amp;theater\">https://www.facebook.com/ngoforumforpublichealth/videos/pcb.406999730252653/406999343586025/?type=3&amp;theater</a></p>\r\n<p>&nbsp;</p>', '2019-12-29 05:19:41', '2020-01-02 14:40:43'),
(32, 1, 'Inception Workshop 29-31-2019 Promotion of Sanitation Marketing SanMark System', 'Inception Workshop 29-31-2019 Promotion of Sanitation Marketing SanMark System.\r\nPhoto credit : Rizwan Ahmed', '32.jpg', 'active', '<p><img src=\"/photos/2/73090445_406994020253224_5387174245262426112_n.jpg\" alt=\"\" width=\"524\" height=\"393\" /></p>\r\n<p><img src=\"/photos/2/74942857_406994160253210_4005216668929228800_n.jpg\" alt=\"\" width=\"523\" height=\"392\" /></p>\r\n<p><img src=\"/photos/2/75223758_406994256919867_6679092853051752448_n.jpg\" alt=\"\" width=\"523\" height=\"392\" /></p>', '2019-12-29 05:25:03', '2020-01-02 14:40:49'),
(33, 1, 'Training participants of UNICEF WASH in Emergency visited at Camp-6', 'UNICEF Chief WASH Dara Johnston, WASH Specialist Moustapha Niang, WASH Officer Aynul Huda, Kabita Yesmin, Mohammad Ali, Ms Tazrina along with UNICEF delegates from Germany, United Kingdom, India, Nepal, Pakistan, Srilanka, and from Afganistan visited Camp- 6 WASH Activities and Infrastructures. They have visited 95,000 liters capacity Water Distribution Network, Fecal Sludge Management(FSM), Communal Latrines, Hygiene Sessions, MHM Learning Center and Waste Management which is maintained by NGO Forum as WASH Focal Agency of Camp-6 and Implementing Partners of UNICEF.NGOF Senior Technical Manager Mr. Toriqul Islam, Project Coordinator Mr. Mosarraf Hossain with other officers of the project accompanied the delegates.', '33.jpg', 'active', '<p><img src=\"/photos/2/71219110_921786218197053_5855818227375931392_o.jpg\" alt=\"\" width=\"364\" height=\"547\" /> <img src=\"/photos/2/70903082_921787321530276_6138182502835027968_o.jpg\" alt=\"\" width=\"627\" height=\"417\" /></p>', '2019-12-29 05:29:41', '2019-12-31 06:10:04'),
(35, 5, 'Water, Sanitation and Hygiene (Source: UNWATER)', 'The benefits of having access to an improved drinking water source can only be fully realized when there is also access to improved sanitation and adherence to good hygiene practices. Beyond the immediate, obvious advantages of people being hydrated and healthier, access to water, sanitation and hygiene – known collectively as WASH – has profound wider socio-economic impacts, particularly for women and girls.\r\n\r\nThe fact that WASH is the subject of dedicated targets within the Sustainable Development Goal (SDG 6) is testament to its fundamental role in public health and therefore in the future of sustainable development. Indeed, access to safe water and sanitation are human rights, as recognized in 2010 by the United Nations General Assembly. For universal fulfilment of these rights to become reality, we will need the right systems: well-resourced, capable institutions delivering services and changing behaviour in resilient and appropriate ways.', '35.jpg', 'active', '<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner \">\r\n<div class=\"wpb_wrapper\">\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner \">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"widget subtitle-and-text \">\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner \">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"widget single-image\">\r\n<figure><img class=\"img-responsive lazy-loaded\" src=\"https://www.unwater.org/app/uploads/2017/05/Screen-Shot-2017-05-07-at-17.39.29.png\" sizes=\"(max-width: 750px) 100vw, 750px\" srcset=\"https://www.unwater.org/app/uploads/2017/05/Screen-Shot-2017-05-07-at-17.39.29.png 750w, https://www.unwater.org/app/uploads/2017/05/Screen-Shot-2017-05-07-at-17.39.29-300x230.png 300w\" alt=\"The WHO/UNICEF Joint Monitoring Programme monitors and reports on progress on WASH. \" width=\"750\" height=\"574\" data-lazy-type=\"image\" data-src=\"https://www.unwater.org/app/uploads/2017/05/Screen-Shot-2017-05-07-at-17.39.29.png\" data-image-id=\"1149\" data-srcset=\"\" />\r\n<figcaption class=\"flex-row\">\r\n<p>The WHO/UNICEF Joint Monitoring Programme monitors and reports on progress on WASH.</p>\r\n</figcaption>\r\n</figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner \">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"widget subtitle-and-text \">\r\n<h3>Current situation</h3>\r\nToday, 2.2 billion people lack access to&nbsp;safely managed drinking water services and 4.2 billion people lack&nbsp;safely managed sanitation services. Unsafe hygiene practices are widespread, compounding the effects on people&rsquo;s health. The impact on child mortality rates is devastating with more than 297 000 children under five who die annually from diarrhoeal diseases due to poor sanitation, poor hygiene, or unsafe drinking water.\r\n<p>&nbsp;</p>\r\n<p><a href=\"https://www.unwater.org/water-facts/water-sanitation-and-hygiene/#_ftnref1\" name=\"_ftn1\"></a></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner \">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"widget single-image\">\r\n<figure><img class=\"img-responsive lazy-loaded\" src=\"https://www.unwater.org/app/uploads/2016/03/548215.jpg\" sizes=\"(max-width: 3600px) 100vw, 3600px\" srcset=\"https://www.unwater.org/app/uploads/2016/03/548215.jpg 3600w, https://www.unwater.org/app/uploads/2016/03/548215-300x200.jpg 300w, https://www.unwater.org/app/uploads/2016/03/548215-768x512.jpg 768w, https://www.unwater.org/app/uploads/2016/03/548215-1024x683.jpg 1024w\" alt=\"Collecting water tap in Liberia. UN Photo/Emmanuel Tobey\" width=\"416\" height=\"277\" data-lazy-type=\"image\" data-src=\"https://www.unwater.org/app/uploads/2016/03/548215.jpg\" data-image-id=\"710\" data-srcset=\"\" />\r\n<figcaption class=\"flex-row\">\r\n<p>Collecting water tap in Liberia. UN Photo/Emmanuel Tobey</p>\r\n</figcaption>\r\n</figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner \">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"widget subtitle-and-text \">\r\n<h3>Water</h3>\r\nA person without access to improved drinking water &ndash; for example from a protected borehole well or municipal piped supply for instance &ndash; is forced to rely on sources such as surface water, unprotected and possibly contaminated wells, or vendors selling water of unverifiable provenance and quality.\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<p><a href=\"https://www.unwater.org/water-facts/water-sanitation-and-hygiene/#_ftnref1\" name=\"_ftn1\"></a></p>\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner \">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"widget single-image\">\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner \">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"widget subtitle-and-text \">\r\n<p>For many communities, water sources are usually far from their homes, and it typically falls to women and girls to spend much of their time and energy fetching water, a task which often exposes them to attack from men and even wild animals.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner \">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"widget single-image\">\r\n<figure><img class=\"img-responsive lazy-loaded\" src=\"https://www.unwater.org/app/uploads/2017/04/522407.jpg\" sizes=\"(max-width: 3600px) 100vw, 3600px\" srcset=\"https://www.unwater.org/app/uploads/2017/04/522407.jpg 3600w, https://www.unwater.org/app/uploads/2017/04/522407-300x200.jpg 300w, https://www.unwater.org/app/uploads/2017/04/522407-768x512.jpg 768w, https://www.unwater.org/app/uploads/2017/04/522407-1024x683.jpg 1024w\" alt=\"Women at the new women center in Kuma Garadayat, North Darfur, constructed by UNAMID. Photo by Albert Gonz&aacute;lez Farran - UNAMID\" width=\"450\" height=\"300\" data-lazy-type=\"image\" data-src=\"https://www.unwater.org/app/uploads/2017/04/522407.jpg\" data-image-id=\"1109\" data-srcset=\"\" />\r\n<figcaption class=\"flex-row\">\r\n<p>Women at the new women center in Kuma Garadayat, North Darfur, constructed by UNAMID. Photo by Albert Gonz&aacute;lez Farran - UNAMID</p>\r\n</figcaption>\r\n</figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner \">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"widget subtitle-and-text \">\r\n<h3>Sanitation</h3>\r\nWithout improved sanitation &ndash; a facility that safely separates human waste from human contact &ndash; people have no choice but to use inadequate communal latrines or to practise open defecation. For women and girls, finding a place to go to the toilet outside, often having to wait until the cover of darkness, can leave them vulnerable to abuse and sexual assault.\r\n<p>&nbsp;</p>\r\n<p>In the immediate environment, exposed faecal matter will be transferred back into people&rsquo;s food and water resources, helping to spread serious diseases such as cholera. Beyond the community, the lack of effective waste disposal or sewerage systems can contaminate ecosystems and contribute to disease pandemics.</p>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner \">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"widget single-image\">\r\n<figure><img class=\"img-responsive lazy-loaded\" src=\"https://www.unwater.org/app/uploads/2017/04/619394.jpg\" sizes=\"(max-width: 2700px) 100vw, 2700px\" srcset=\"https://www.unwater.org/app/uploads/2017/04/619394.jpg 2700w, https://www.unwater.org/app/uploads/2017/04/619394-300x200.jpg 300w, https://www.unwater.org/app/uploads/2017/04/619394-768x512.jpg 768w, https://www.unwater.org/app/uploads/2017/04/619394-1024x683.jpg 1024w\" alt=\"Family provided with buckets and chlorine and taught how to wash hands properly at home during an Ebola outbreak. Photo UNMEER /Martine Perret\" width=\"459\" height=\"306\" data-lazy-type=\"image\" data-src=\"https://www.unwater.org/app/uploads/2017/04/619394.jpg\" data-image-id=\"1110\" data-srcset=\"\" />\r\n<figcaption class=\"flex-row\">\r\n<p>Family provided with buckets and chlorine and taught how to wash hands properly at home during an Ebola outbreak. Photo UNMEER /Martine Perret</p>\r\n</figcaption>\r\n</figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner \">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"widget subtitle-and-text \">\r\n<h3>Hygiene</h3>\r\nIn some parts of the world there is little or no awareness of good hygiene practices and their role in reducing the spread of disease. However, it is often the case that even when people do have knowledge of good hygiene behaviour, they lack the soap, safe water and washing facilities they need to make positive changes to protect themselves and their community.</div>\r\n<div class=\"widget subtitle-and-text \">\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner \">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"widget subtitle-and-text \">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner \">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"widget single-image\">\r\n<figure><img class=\"img-responsive lazy-loaded\" src=\"https://www.unwater.org/app/uploads/2017/05/Drinking-water-Nepal.jpg\" sizes=\"(max-width: 1500px) 100vw, 1500px\" srcset=\"https://www.unwater.org/app/uploads/2017/05/Drinking-water-Nepal.jpg 1500w, https://www.unwater.org/app/uploads/2017/05/Drinking-water-Nepal-300x200.jpg 300w, https://www.unwater.org/app/uploads/2017/05/Drinking-water-Nepal-768x512.jpg 768w, https://www.unwater.org/app/uploads/2017/05/Drinking-water-Nepal-1024x683.jpg 1024w\" alt=\"Drinking water in a village in Nepal\" width=\"384\" height=\"256\" data-lazy-type=\"image\" data-src=\"https://www.unwater.org/app/uploads/2017/05/Drinking-water-Nepal.jpg\" data-image-id=\"1140\" data-srcset=\"\" />\r\n<figcaption class=\"flex-row\">\r\n<p>Drinking water in a village in Nepal</p>\r\n</figcaption>\r\n</figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner \">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"widget subtitle-and-text \">\r\n<h3>WASH and livelihoods</h3>\r\nThe disease and time burden associated with lack of access to WASH prevents many adults from earning a living or fulfilling their potential in the professional arena. Not only could access to WASH free up adults, particularly women, to do more productive activities, the establishment and maintenance of WASH services would create associated employment.\r\n<p>&nbsp;</p>\r\n<p>Indeed, access to WASH will help drive progress towards the SDGs concerned with poverty, work and economic growth, not least because it will help achieve gender equity. It is women and girls who bear the burden of collecting water and caring for relatives made sick by lack of WASH, and who often miss out on education due to the domestic roles assigned to them. Lack of WASH exacerbates the marginalization of females by locking them into a cycle of poverty and drudgery, with wider consequences for society and national economies.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner \">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"widget single-image\">\r\n<figure><img class=\"img-responsive lazy-loaded\" src=\"https://www.unwater.org/app/uploads/2017/04/522403.jpg\" sizes=\"(max-width: 3600px) 100vw, 3600px\" srcset=\"https://www.unwater.org/app/uploads/2017/04/522403.jpg 3600w, https://www.unwater.org/app/uploads/2017/04/522403-300x200.jpg 300w, https://www.unwater.org/app/uploads/2017/04/522403-768x512.jpg 768w, https://www.unwater.org/app/uploads/2017/04/522403-1024x683.jpg 1024w\" alt=\"Girls in Kuma Garadayat, North Darfur, celebrate the inauguration of their new school. Photo by Albert Gonz&aacute;lez Farran - UNAMID\" width=\"377\" height=\"251\" data-lazy-type=\"image\" data-src=\"https://www.unwater.org/app/uploads/2017/04/522403.jpg\" data-image-id=\"1108\" data-srcset=\"\" />\r\n<figcaption class=\"flex-row\">\r\n<p>Girls in Kuma Garadayat, North Darfur, celebrate the inauguration of their new school. Photo by Albert Gonz&aacute;lez Farran - UNAMID</p>\r\n</figcaption>\r\n</figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner \">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"widget subtitle-and-text \">\r\n<h3>WASH and education</h3>\r\nSchool and childhood should go hand in hand, but many children in low-income communities with no access to WASH are unable to attend class because they are sick with a diarrhoeal disease or, particularly in the case of girls in rural areas, because they have to spend large parts of each day fetching water for their family.\r\n<p>&nbsp;</p>\r\n<p>For children who are in school, the situation may be no better than at home: globally, around a third of schools have no safe water supply or adequate sanitation,&nbsp;leaving children dehydrated and less able to concentrate, and forcing pupils to use inadequate latrines or go to the toilet outside in the school grounds.</p>\r\n<p>For adolescent girls, the presence of a safe water supply and clean, functioning, private toilet facilities can be the difference between dropping out and getting an education. Furthermore, hygiene education at school can begin a lifetime of better health for all children.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner \">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"widget single-image\">\r\n<figure><img class=\"img-responsive lazy-loaded\" src=\"https://www.unwater.org/app/uploads/2017/04/638539.jpg\" sizes=\"(max-width: 3600px) 100vw, 3600px\" srcset=\"https://www.unwater.org/app/uploads/2017/04/638539.jpg 3600w, https://www.unwater.org/app/uploads/2017/04/638539-300x200.jpg 300w, https://www.unwater.org/app/uploads/2017/04/638539-768x512.jpg 768w, https://www.unwater.org/app/uploads/2017/04/638539-1024x683.jpg 1024w\" alt=\"Handover of solar-powered water pump to local community to the community of Gormoyok village in Rejaf Payam in South Sudan. \" width=\"438\" height=\"292\" data-lazy-type=\"image\" data-src=\"https://www.unwater.org/app/uploads/2017/04/638539.jpg\" data-image-id=\"1116\" data-srcset=\"\" />\r\n<figcaption class=\"flex-row\">\r\n<p>Handover of solar-powered water pump to local community to the community of Gormoyok village in Rejaf Payam in South Sudan.</p>\r\n</figcaption>\r\n</figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner \">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"widget subtitle-and-text \">\r\n<h3>WASH and health</h3>\r\nThe impact of universal access to WASH on global health would be profound. There is the potential to save the lives of the 829,000 people who currently die every year from diseases directly caused by unsafe water, inadequate sanitation and poor hygiene practices, and we could also drastically reduce child malnourishment, and help alleviate physical and mental under-development. Today, 50% of child malnutrition is associated with unsafe water, inadequate sanitation and poor hygiene.&nbsp;Women and girls would have the facilities and knowledge to be able to manage their menstrual cycles in safety and dignity. Similarly, during pregnancy, childbirth, and post-natal care, medical staff, expectant mothers and their families will be better equipped to ensure newborn children are given the safest and healthiest possible start in life.\r\n<p>&nbsp;</p>\r\n<p><a href=\"https://www.unwater.org/water-facts/water-sanitation-and-hygiene/#_ftnref1\" name=\"_ftn1\"></a></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner \">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_text_column wpb_content_element \">\r\n<div class=\"wpb_wrapper\">\r\n<h5><strong>Links</strong></h5>\r\n<ul>\r\n<li>IRC (2016): <a href=\"http://www.ircwash.org/blog/it-all-about-systems\" target=\"_blank\" rel=\"noopener noreferrer\">It is all about systems</a></li>\r\n<li>UNHCR (2016): <a href=\"http://www.unhcr.org/water-sanitation-and-hygiene.html\" target=\"_blank\" rel=\"noopener noreferrer\">Water, Sanitation and Hygiene</a></li>\r\n<li>UNDP:&nbsp;<a href=\"http://www.undp.org/content/undp/en/home/ourwork/sustainable-development/natural-capital-and-the-environment/water-and-oceans/goal-wash.html\" target=\"_blank\" rel=\"noopener noreferrer\">GoAL WaSH Programme</a></li>\r\n<li>UNECE: <a href=\"http://www.unece.org/?id=2975\" target=\"_blank\" rel=\"noopener noreferrer\">Protocol on Water and Health</a></li>\r\n<li>UNICEF (2015): <a href=\"https://www.unicef.org/wash/schools/files/Advancing_WASH_in_Schools_Monitoring(1).pdf\" target=\"_blank\" rel=\"noopener noreferrer\">Advancing WASH in Schools&nbsp;</a></li>\r\n<li>UNICEF (2015): <a href=\"https://data.unicef.org/topic/child-health/diarrhoeal-disease/\" target=\"_blank\" rel=\"noopener noreferrer\">Child health data</a></li>\r\n<li>UNICEF: <a href=\"https://www.unicef.org/wash/\" target=\"_blank\" rel=\"noopener noreferrer\">Water, sanitation and hygiene</a></li>\r\n<li>United Nations (2015): <a href=\"https://sustainabledevelopment.un.org/sdgs\" target=\"_blank\" rel=\"noopener noreferrer\">Sustainable Development Knowledge Platform</a></li>\r\n<li>UNICEF (2019):&nbsp;<a href=\"https://www.unicef.org/media/62371/file/Convention-rights-child-at-crossroads-2019.pdf\" target=\"_blank\" rel=\"noopener\">For Every Child, Every Right: The Convention on the Rights of the Child at a crossroads</a></li>\r\n<li>WHO (2017):&nbsp;<a href=\"http://www.who.int/water_sanitation_health/publications/drinking-water-quality-guidelines-4-including-1st-addendum/en/.\" target=\"_blank\" rel=\"noopener\">Guidelines for Drinking-Water Quality, Fourth Edition</a>.</li>\r\n<li>WHO (2012): <a href=\"http://www.who.int/water_sanitation_health/publications/2012/globalcosts.pdf\" target=\"_blank\" rel=\"noopener noreferrer\">Global costs and benefits of drinking-water supply and sanitation interventions to reach the MDG target and universal coverage</a></li>\r\n<li>WHO (2008): <a href=\"http://apps.who.int/iris/handle/10665/43840\" target=\"_blank\" rel=\"noopener noreferrer\">Safer Water, Better Health: Costs, Benefits, and Sustainability of Interventions to Protect and Promote Health</a></li>\r\n<li>WHO (2012): <a href=\"http://www.who.int/gho/phe/water_sanitation/burden/en/\" target=\"_blank\" rel=\"noopener noreferrer\">Global Health Observatory: Mortality and burden of disease from water and sanitation</a></li>\r\n<li>WHO/UNICEF (2015):<a href=\"https://washdata.org/reports\" target=\"_blank\" rel=\"noopener noreferrer\"> Progress on sanitation and drinking water &ndash; 2015 update and MDG assessment&nbsp;</a></li>\r\n<li>WHO/UNICEF (2016):<a href=\"https://washdata.org/reports\" target=\"_blank\" rel=\"noopener noreferrer\"> WASH in the 2030 Agenda</a></li>\r\n<li>WHO/UNICEF (2019):&nbsp;<a href=\"https://www.unwater.org/publications/wash-in-health-care-facilities-global-baseline-report-2019/\" target=\"_blank\" rel=\"noopener\">WASH in Health Care Facilities</a>.</li>\r\n<li>WHO/UNICEF (2019):&nbsp;<a href=\"https://www.unwater.org/publications/water-sanitation-and-hygiene-in-health-care-facilities-practical-steps-to-achieve-universal-access-for-quality-care/\" target=\"_blank\" rel=\"noopener\">Water, sanitation, and hygiene in health care facilities: Practical steps to achieve universal access for quality care</a>.</li>\r\n<li>WHO/UNICEF (2019):&nbsp;<a href=\"https://www.unwater.org/publications/whounicef-joint-monitoring-program-for-water-supply-sanitation-and-hygiene-jmp-progress-on-household-drinking-water-sanitation-and-hygiene-2000-2017/\">Progress on household drinking water, sanitation and hygiene 2000-2017: Special focus on inequalities</a>.</li>\r\n<li>World Bank Group (2016): <a href=\"https://openknowledge.worldbank.org/bitstream/handle/10986/23833/9781464803482.pdf?sequence=3\" target=\"_blank\" rel=\"noopener noreferrer\">Disease Control Priorities: Reproductive, maternal, newborn, and child health</a></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '2019-12-29 05:40:43', '2019-12-29 05:40:44'),
(40, 2, 'NGOF-UNHCR WASH & NGOF-UNICEF project colleagues have celebrated New Year 2020', 'NGOF-UNHCR WASH & NGOF-UNICEF project colleagues have celebrated New Year 2020 and Mr. S.M.A. Rashid, Honorable Executive Director’s Birthday at Cox’s Bazar Office in a colorful manner.', '40.jpg', 'active', '<p><img src=\"/photos/2/80870326_462309414721684_2675358583494803456_n.jpg\" alt=\"\" width=\"344\" height=\"229\" />&nbsp; <img src=\"/photos/2/81023585_462309421388350_6716398810135789568_n.jpg\" alt=\"\" width=\"344\" height=\"229\" /></p>', '2020-01-02 05:00:00', '2020-11-30 02:40:02'),
(41, 1, 'Upazila Administration of Ukhiya, Cox\'sbazar organized an Advocacy Workshop with the assisted by NGO Forum for Public Health.', 'Upazila Administration of Ukhiya, Cox\'sbazar organized an Advocacy Workshop with the assisted by NGO Forum for Public Health on 11 February 2020 at Upazila Parishad conference room, Ukhiya.  The event is organized under the WaSH and protection support program assisted by AAR Japan. The workshop is chaired by Mr. Mohammd Amimul Ehsan Khan, Acting Upazila Nirbahi officer, Ukhiya. Assistant Commissioner and Executive Magistrate Mr. Mahmudur Rahman Rubel, SAE-DPHE Mr.Alamin Bishwas,  Upazila Education officer Mr. Subroto, Project officer of AAR Japan Mr. Sabbir Hossain, UP representative,  NGO representatives, and civil society representatives participated in the Workshop. Progress, achievement, learning, and challenges of the project are shared in the workshop. Guests and participants expressed their valuable recommendations on the project activities. Acting UNO gave thanks to NGO Forum AAR Japan project for implementing Health-related activities in both camp and Host communities in Ukhiya Upazila and he is committed to continuing their assistance to the NGO forum.', '41.jpg', 'active', '<p><img src=\"/photos/2/86394088_495336761418949_3156744994841165824_o.jpg\" alt=\"\" width=\"318\" height=\"238\" /> &nbsp;<img src=\"/photos/2/86474772_495336588085633_4729528243013550080_o (1).jpg\" alt=\"\" width=\"508\" height=\"238\" /></p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"/photos/2/86293615_495336731418952_1519930136542052352_o.jpg\" alt=\"\" width=\"312\" height=\"416\" /> &nbsp;<img src=\"/photos/2/86312832_495336808085611_8875111877764448256_o.jpg\" alt=\"\" width=\"312\" height=\"416\" /></p>\r\n<p>&nbsp;</p>', '2020-02-11 05:00:00', '2020-11-30 03:01:20'),
(43, 1, 'Training on Basic Hygiene Promotion and  Project orientation program', '3 days Training on Basic Hygiene Promotion and Project orientation program has been successfully performed from January 04 to January 06, 2020, under the CATS_Project funded by #UNICEF. Total 28 participants has attended the training program. 11 from CATS-1 and 17 from CATS 4 project attended at the training.1st & 2nd day discussed on Hygiene Promotion, Water Safety Plan and improved sanitation facilities and 3rd day discussed in Financial Management, Procurement, HR policies, etc.', '43.jpg', 'active', '<p><img src=\"/photos/2/81345511_466953304257295_7461467093578285056_o.jpg\" alt=\"\" width=\"411\" height=\"274\" />&nbsp; <img src=\"/photos/2/81365138_466953750923917_1701093364620853248_o.jpg\" alt=\"\" width=\"411\" height=\"274\" /></p>\r\n<p><img src=\"/photos/2/82463151_466953614257264_1118448460706611200_o.jpg\" alt=\"\" width=\"410\" height=\"273\" />&nbsp; <img src=\"/photos/2/82668757_466953474257278_4852243760832053248_o.jpg\" alt=\"\" width=\"410\" height=\"273\" /></p>', '2020-01-06 05:00:00', '2020-11-30 03:10:29'),
(44, 1, 'Strengthening Integrity for achieving SDG: Bangladesh Perspective', 'On the occasion of next budget year this parallel session titled \"Strengthening Integrity for achieving SDG: Bangladesh Perspective\" at 4th ICSD Conference can play a vital role to draw attention of the concerns. Still we are far beyond securing optimum budget allocation for SDG-6 while only 10 years left for achieving SDG targets . This is undeniable fact that without community participation, good governance, CSO involvement and optimum budget allocation it is impossible to achieve SDG-6 targets. Hope policy makers( parliament members) will initiate the discussion at parliament that how to accelerate the process of achieving the goals on time.yesterday in this parallel session honorable member of parliament, sdg focal of bbs, senior reporter of a leading english newspaper and different wash related stakeholders were present to highlight the issues', '44.jpg', 'active', '<p><img src=\"/photos/2/86810228_2598100540426748_3603809884438528000_o - Copy (2) - Copy - Copy - Copy.jpg\" alt=\"\" width=\"261\" height=\"173\" /> &nbsp;<img src=\"/photos/2/86935792_2598100110426791_7550886830917287936_o.jpg\" alt=\"\" width=\"260\" height=\"173\" /></p>', '2020-02-20 05:00:00', '2020-11-30 03:13:08'),
(46, 1, 'The Honorable Refugee Relief And Repatriation Commissioner along with the Camp In-Charge (CiC) have Visited NGO Forum’s newly constructed Dam in Damdamia, Teknaf', 'The Honorable Refugee Relief And Repatriation Commissioner Mr. Md. Mahbub Alam Talukder along with the Camp In-Charge (CiC) of Camp 26 Mr. Khalid Hossain and Camp In-Charge (CiC)  of NYP RC Mr. Mohammad Abdul Hannan have Visited NGO Forum’s newly constructed Dam in Damdamia, Teknaf on January 15, 2020. During this visit UNHCR Head of sub-office Mr. Marin Din Kaidomcaj and Head of WASH Mr. Murry Wilson were present. They also have visited the proposed sites for the water reservoir at Damdamia and mega Faecal Sludge Treatment Plant at Camp 26.', '46.jpg', 'active', '<p><img src=\"/photos/2/82829926_477598696526089_6506505377582940160_o.jpg\" alt=\"\" width=\"380\" height=\"285\" />&nbsp; <img src=\"/photos/2/82842922_477598716526087_3642040569456230400_o.jpg\" alt=\"\" width=\"380\" height=\"285\" /></p>\r\n<p><img src=\"/photos/2/82543595_477598576526101_4641057577482846208_o.jpg\" alt=\"\" width=\"380\" height=\"286\" /></p>', '2020-01-15 05:00:00', '2020-11-30 03:23:07'),
(47, 3, 'A Roundtable discussion jointly organized with the Daily Bhorer Kagoj', 'A Roundtable discussion jointly organized with the Daily Bhorer Kagoj on \"WASH in Health Care Facilities & Sustainable Development Goal 6\"\r\nChief Guest: Mr. Zahid Maleque, MP, Honorable Health Minister, Ministry of Health and Family Welfare, Government of the People’s Republic of Bangladesh. \r\nKey Note Presenter: Mr. Ahasan Habib,Head of Research, Monitoring & Evaluation,NGO Forum for Public Health and Ph.D. Student (KTH-Sweden)', '47.jpg', 'active', '<p><img src=\"/photos/2/82662018_2306308882804327_6161396148234878976_o.jpg\" alt=\"\" width=\"350\" height=\"233\" />&nbsp; <img src=\"/photos/2/83435726_2306309342804281_5655486135053320192_o.jpg\" alt=\"\" width=\"350\" height=\"233\" /></p>\r\n<p><img src=\"/photos/2/82672769_2306308969470985_7861038544054124544_o.jpg\" alt=\"\" width=\"257\" height=\"385\" />&nbsp; <img src=\"/photos/2/82781115_2306309049470977_2357718616352227328_o.jpg\" alt=\"\" width=\"257\" height=\"385\" /></p>', '2020-01-23 05:00:00', '2020-11-30 03:29:56'),
(48, 5, '4th International Conference on Sustainable Development (ICSD) 2020', '4th International Conference on Sustainable Development (ICSD) 2020 has been organized by United International University, Dhaka, DORP and Water Integrity Network (WIN) as a Co-Organizer. In the parallel session, a keynote paper on \"WASH Governance and Sustainable Development Goals\" presented by Mr. S.M.A Rashid. Executive Director, NGO Forum for Public Health.', '48.jpg', 'active', '<p><img src=\"/photos/2/87285317_2356225054479376_3934850591926255616_o - Copy.jpg\" alt=\"\" width=\"402\" height=\"267\" /> &nbsp;<img src=\"/photos/2/87174834_2356224954479386_5033499017175105536_o.jpg\" alt=\"\" width=\"401\" height=\"267\" /></p>', '2020-02-18 05:00:00', '2020-11-30 03:31:48'),
(49, 2, 'Inaugurated Groundbreaking Ceremony for the construction of 43,000 liters capacity Piped Water Distribution Network', 'Mr. Nikaruzzaman Chowdhury, UNO, Ukhiya Upazila, Cox\'s Bazar, inaugurated groundbreaking ceremony for the construction of 43,000 liters capacity Piped Water Distribution Network at Upazila Parishad premise. UNICEF WASH Officer Mr. Aynul Huda & Sajeda Begum, DPHE Sub-Assistant Engineer Mr. Al-Amin, NGOF-UNICEF WASH Project Coordinator Mr. Mosarraf Hossain along with other project staffs and other stakeholders were present on the occasion. The WDN will serve 7,532 households.', '49.jpg', 'active', '<p><img src=\"/photos/2/83179872_483970785888880_8977900933467865088_o.jpg\" alt=\"\" width=\"419\" height=\"279\" />&nbsp; <img src=\"/photos/2/84546351_483970469222245_2255149067837374464_o.jpg\" alt=\"\" width=\"419\" height=\"279\" /></p>\r\n<p><img src=\"/photos/2/84166093_483970705888888_5238781750796091392_o.jpg\" alt=\"\" width=\"418\" height=\"278\" />&nbsp; <img src=\"/photos/2/84482304_483970755888883_3419762130553929728_o.jpg\" alt=\"\" width=\"418\" height=\"278\" /></p>', '2020-01-27 05:00:00', '2020-11-30 03:40:09');
INSERT INTO `all_news` (`id`, `news_category_id`, `news_title`, `news_description`, `news_image`, `news_status`, `ck_description`, `created_at`, `updated_at`) VALUES
(50, 1, 'Dental Project of NGO Forum  Aus-Bangla Care for Dental ABCD', 'In February 24 - 25  2020, 2 days dental camps were organized at Mirpur Shaheen School, Dhaka. Total 148 patients had received dental treatment  as teeth extractions, fillings and the application of sliver fluoride out of  227 screened students.\r\nBeing the networking and service delivery agency in the domain of public health, NGO Forum for Public Health, with support from the Rotary Club of Dee Why Warringah, Australia and the Rotary Club of Dhaka, Bangladesh, has launched a Three years (2018 to July 2021) dental project titled “Aus-Bangla Care for Dental (ABCD) with the aim to providing essential dental care/services for the poor people living in Urban slum areas in Dhaka and in few selected rural areas of Bangladesh targeting the poor school children.', '50.jpg', 'active', '<p><img src=\"/photos/2/88030031_2375622082539673_7961744862741528576_o.jpg\" alt=\"\" width=\"549\" height=\"253\" /></p>\r\n<p><img src=\"/photos/2/88321347_2375618412540040_6168062753522057216_o.jpg\" alt=\"\" width=\"185\" height=\"246\" /> &nbsp;<img src=\"/photos/2/88363675_2375618239206724_4391399452212985856_o.jpg\" alt=\"\" width=\"185\" height=\"247\" /></p>', '2020-02-29 05:00:00', '2020-11-30 04:41:26'),
(51, 1, 'Dental Camps has been organized again at Mirpur Shaheen School Dhaka', 'In March 03 - 04 2020, 2 days dental camps has been organized again at Mirpur Shaheen School Dhaka for full students coverage. Total 150 number of students had received dental treatment as teeth extractions, fillings and the application of sliver fluoride out of 204 screened students.', '51.jpg', 'active', '<p><img src=\"/photos/2/88321501_2385170938251454_1930866761972842496_o.jpg\" alt=\"\" width=\"487\" height=\"223\" />&nbsp; <img src=\"/photos/2/88445849_2385160981585783_8779524163661463552_o.jpg\" alt=\"\" width=\"481\" height=\"222\" /></p>\r\n<p><img src=\"/photos/2/88098359_2385162168252331_8300303090142150656_o.jpg\" alt=\"\" width=\"486\" height=\"224\" />&nbsp; <img src=\"/photos/2/89341926_2385166101585271_402672833475379200_o.jpg\" alt=\"\" width=\"485\" height=\"224\" /></p>', '2020-03-05 05:00:00', '2020-11-30 04:45:08'),
(52, 2, 'বিশ্ব স্বাস্থ্য দিবস', NULL, '52.jpg', 'active', '<p>আজ ৭ এপ্রিল &lsquo;বিশ্ব স্বাস্থ্য দিবস&rsquo;। ১৯৪৬ সালের ফেব্রুয়ারিতে জাতিসংঘ অর্থনীতি ও সমাজ পরিষদ আন্তর্জাতিক স্বাস্থ্য ক্ষেত্রের সম্মেলন ডাকার সিদ্ধান্ত নেয়। একই বছরের জুন ও জুলাই মাসে আন্তর্জাতিক স্বাস্থ্য সম্মেলন অনুষ্ঠিত হয় এবং বিশ্ব স্বাস্থ্য সংস্থার সাংগঠনিক আইন গৃহীত হয়, ১৯৪৮ সালের ৭ এপ্রিল এই সংগঠন আইন আনুষ্ঠানিকভাবে কার্যকর হয়। এইদিন বিশ্ব স্বাস্থ্য দিবস বলে নির্ধারিত হয়।</p>\r\n<p><br />ভয়াবহ ছোঁয়াচে করোনাভাইরাসের সংক্রমণ প্রতিরোধ ও নিয়ন্ত্রণে গোটা বিশ্ব যখন হিমশিম খাচ্ছে, প্রতিদিন হাজার হাজার মানুষ আক্রান্ত ও মারা যাচ্ছে, সংকটাপূর্ণ স্বাস্থ্য পরিস্থিতি নিয়ন্ত্রণে ডাক্তার, নার্স, টেকনোলজিস্টসহ স্বাস্থ্যকর্মীরা হিমশিম খাচ্ছেন, এমনই এক বৈশ্বিক দুর্যোগময় পরিস্থিতিতে আজ (৭ এপ্রিল) &lsquo;বিশ্ব স্বাস্থ্য দিবস ২০২০&rsquo; পালিত হবে। এ বছর দিবসের প্রতিপাদ্য &lsquo;সেবিকা ও ধাত্রীদের সহায়তা করুন&rsquo;।</p>\r\n<p><br />প্রতি বছর সংস্থাটি এমন একটি স্বাস্থ্য ইস্যু বেছে নেয়, যা বিশেষ করে সারা পৃথিবীর জন্যই গুরুত্বপূর্ণ। সেদিন স্থানীয় ও আন্তর্জাতিকভাবে পালিত হয় এ দিবসটি।<br />বিশ্ব স্বাস্থ্য সংস্থার প্রতিষ্ঠাবার্ষিকী উপলক্ষে সংস্থার সদস্যভুক্ত দেশগুলোতে প্রতি বছর যথাযথ গুরুত্বের সঙ্গে দিবসটি পালিত হয়। স্বাধীনতার পর ১৯৭২ সালে বিশ্ব স্বাস্থ্য সংস্থার সদস্যপদ পাওয়ার পর থেকে বাংলাদেশ অত্যন্ত গুরুত্বের সঙ্গে দিবসটি পালন করে আসছে।</p>\r\n<p><br />প্রতি বছর বিশ্বের অন্যান্য দেশের মতো বাংলাদেশও যথাযোগ্য মর্যাদায় দিবসটি পালনে বিভিন্ন কর্মসূচি হাতে নিলেও এবার তা হচ্ছে না। এই প্রথম স্বাস্থ্যমন্ত্রী জাহিদ মালিক আজ বিকেল ৩টায় স্বাস্থ্য অধিদফতরের সম্মেলনকক্ষ থেকে অনলাইন ভিডিও কনফারেন্সের মাধ্যমে বিশ্ব স্বাস্থ্য দিবসের উদ্বোধন করবেন।</p>\r\n<p><br />ভিডিও কনফারেন্সে দেশের সকল বিভাগীয় পরিচালক, হাসপাতাল পরিচালক, সিভিল সার্জন ও উপজেলা স্বাস্থ্য ও পরিবারকল্যাণ কর্মকর্তারা স্ব স্ব কার্যালয় থেকে অংশগ্রহণ করবেন। এ দিবসে মূলত করোনাভাইরাস নিয়ন্ত্রণে সরকার গৃহীত বিভিন্ন কার্যক্রম জোরদার করার ব্যাপারে আলোচনা হবে।</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"/photos/2/92205788_534050224214269_6937841620200980480_n.jpg\" alt=\"\" width=\"302\" height=\"302\" /></p>', '2020-04-07 04:00:00', '2020-11-30 05:12:12'),
(53, 1, 'Poor menstrual hygiene', 'Poor menstrual hygiene caused by a lack of education on the issue, persisting taboos and stigma, limited access to hygienic menstrual products and poor sanitation infrastructure undermines the educational opportunities, health and overall social status of women and girls around the world. As a result, millions of women and girls are kept from reaching their full potential.\r\nMenstrual Hygiene Day (MH Day) is a global advocacy platform that brings together the voices and actions of non-profits, government agencies, individuals, the private sector and the media to promote good menstrual hygiene management (MHM) for all women and girls. More specifically, MH Day:\r\nbreaks the silence, raises awareness and changes negative social norms around MHM, and\r\nengages decision-makers to increase the political priority and catalyse action for MHM, at global, national and local levels.\r\nMH Day has grown tremendously since it’s first celebration in 2014.', '53.jpg', 'active', '<p><img src=\"/photos/2/100086943_571480650471226_4790198543014952960_n.jpg\" alt=\"\" width=\"406\" height=\"197\" />&nbsp; &nbsp;<img src=\"/photos/2/100897505_571480587137899_7082224517883363328_n.jpg\" alt=\"\" width=\"352\" height=\"196\" /></p>\r\n<p><img src=\"/photos/2/100495142_571480620471229_1484500358611861504_n.jpg\" alt=\"\" width=\"318\" height=\"444\" />&nbsp; &nbsp;<img src=\"/photos/2/100699816_571480713804553_2065217908836925440_o.jpg\" alt=\"\" width=\"334\" height=\"447\" /></p>', '2020-05-28 04:00:00', '2020-11-30 05:35:44'),
(54, 1, 'NGO Forum for Public Health has been distributed Cleaning materials in Camp level of Ukhiya and Teknaf', 'NGO Forum for Public Health has been distributed Cleaning materials in Camp level of Ukhiya and Teknaf under the AAR Japan WaSH and Protection Support Program. Mr. AHM Obaidullah, CiC-Camp 5 & 17 inaugurated the distribution event as a Chief Guest at Camp 5 on 10 March 2020. Ms. Bithika Hazra, Project Manager, Mr. Rabiul Islam, Technical officer, Mr. Prodip Naya, Procurement officer, Mr. Abdul Alim, Field officer, and others Project staff of NGO Forum AAR Japan Project was present in the event facilitated by Mr. Md. Iqbal Hossain, DPM WaSH.  Caretaker\'s representatives from 491 WaSH facilities have been received those materials on behalf of the user group of the WaSH facilities but alsmost10,000 beneficiaries from Rohingya Refugee will have been using those materials. There are a bucket, Mug, Toilet brush, Liquid Toilet cleaner and Coconut broom in each materials package.', '54.jpg', 'active', '<p><img src=\"/photos/2/89019503_514595179493107_5496284724026408960_o.jpg\" alt=\"\" width=\"375\" height=\"290\" />&nbsp; <img src=\"/photos/2/89124246_514595319493093_6279522996008779776_o.jpg\" alt=\"\" width=\"526\" height=\"290\" />&nbsp;</p>\r\n<p><img src=\"/photos/2/89549541_514595286159763_6706267463320862720_n.jpg\" alt=\"\" width=\"532\" height=\"455\" /></p>', '2020-03-11 04:00:00', '2020-11-30 05:39:10'),
(55, 1, 'Resilient, inclusive & innovative cities in Bangladesh Project', 'Oxfam Australia CEO Ms. Lyn Morgain along with her team and Oxfam in Bangladesh Country Director Mr. Dipankar Datta along with his senior management team visited \'Resilient, inclusive & innovative cities in Bangladesh Project\' sites at Mymensingh which is implementing by NGO Forum incorporation with Mymensingh City Corporation on 8th March 2020.Mr. S M A Rashid, Executive Director, Mr. Toriqul Islam Sr. Technical Manager of NGO Forum with project team were welcome them. In this short visit they went \'Fecal sludge treatment plant \' and \'Inclusive WASH Block (public toilet). In the evening they also attended an all-partner joint meeting followed by dinner where city corporation honorable mayor Mr. Ekramul Haque Titu, Superintending Engineer of MCC and Urban Planner of MCC were also present.', '55.jpg', 'active', '<p><img src=\"/photos/2/89250092_2398247780277103_4728398357377056768_o.jpg\" alt=\"\" width=\"469\" height=\"264\" />&nbsp; <img src=\"/photos/2/89475334_2398247140277167_2576669937363845120_o.jpg\" alt=\"\" width=\"469\" height=\"264\" />&nbsp;</p>\r\n<p><img src=\"/photos/2/89475334_2398247140277167_2576669937363845120_o.jpg\" alt=\"\" width=\"469\" height=\"264\" />&nbsp;</p>', '2020-03-12 04:00:00', '2020-11-30 05:44:47'),
(56, 2, 'আজ ২২ শে মার্চ ২০২০ বিশ্ব পানি দিবস', NULL, '56.jpg', 'active', '<div class=\"\" dir=\"auto\">\r\n<div id=\"jsc_c_1sl\" class=\"ecm0bbzt hv4rvrfc ihqw7lf3 dati1w0a\" data-ad-comet-preview=\"message\" data-ad-preview=\"message\">\r\n<div class=\"j83agx80 cbu4d94t ew0dbk1b irj2b8pg\">\r\n<div class=\"qzhwtbm6 knvmm38d\">\r\n<div class=\"kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">আজ ২২ শে মার্চ ২০২০ বিশ্ব পানি দিবস।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">দিবসটির এবারের প্রতিপাদ্য &lsquo;পানি ও জলবায়ু পরিবর্তন&rsquo;।</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">দিবস উপলক্ষে রাষ্ট্রপতি মো. আবদুল হামিদ ও প্রধানমন্ত্রী শেখ হাসিনা পৃথক বাণী দিয়েছেন।রাষ্ট্রপতি মো. আবদুল হামিদ টেকসই পানি ব্যবস্থাপনার মাধ্যমে জলবায়ু পরিবর্তনের বিরূপ প্রভাব মোকাবিলার ওপর গুরুত্ব আরোপ করেছেন।তিনি বলেন, &lsquo;জলবায়ুর পরিবর্তনের অনিবার্য পরিণতি হিসেবে বৈশ্বিক উষ্ণতা বৃদ্ধি, খরা, অতিবৃষ্টি, বন্যাসহ অন্যান্য প্রাকৃতিক দুর্যোগের প্রকোপ ক্রমশ বাড়ছে। এ পরিস্থিতিতে ক্রমবর্ধমান পানির চাহিদা যেন কোনোভাবেই পরিবেশের ভারসাম্য ব্যাহত না করে, সেদিকে আমাদের দৃষ্টি রাখতে হবে। আমি প্রত্যাশা করি টেকসই পানি ব্যবস্থাপনার মাধ্যমে জলবায়ু পরিবর্তনের বিরূপ প্রভাব মোকাবিলায় বাংলাদেশ সক্ষম হবে।&rsquo;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">প্রধানমন্ত্রী শেখ হাসিনা বলেছেন, &lsquo;পানি সম্পদ দক্ষতার সঙ্গে আহরণ এবং এর ফলপ্রসূ ব্যবহারের মাধ্যমে টেকসই উন্নয়নের লক্ষ্যে আমাদেরকে পরিবেশবান্ধব উন্নয়ন পরিকল্পনা গ্রহণ করতে হবে।&rsquo;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">উল্লেখ্য, জাতিসংঘের সাধারণ পরিষদের গৃহীত এক প্রস্তাব অনুযায়ী প্রতিবছর ২২ মার্চ বিশ্ব পানি দিবস হিসেবে পালিত হচ্ছে। ১৯৯২ সালে ব্রাজিলের রিও&rsquo;তে এই প্রস্তাব গ্রহণ করা হয়। সেখানে পানি সম্পদের জন্য একটি বিশেষ দিন ঘোষণার দাবি তোলা হয়।</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">১৯৯৩ সালে প্রথম বিশ্ব পানি দিবস পালিত হয় এবং তার পর থেকে এই দিবস পালনের গুরুত্ব ক্রমশ বৃদ্ধি পেতে থাকে।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n<div dir=\"auto\" style=\"text-align: start;\"><img src=\"/photos/2/90199085_522566658695959_5406260495810297856_n.jpg\" alt=\"\" width=\"632\" height=\"320\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '2020-03-22 04:00:00', '2020-11-30 05:52:47'),
(57, 1, 'জন হপকিন্স ইউনিভার্সিটি থেকে করোনা ভাইরাস সম্পর্কিত একটা পোস্টের বাংলা অনুবাদ।', NULL, '57.jpg', 'active', '<div>\r\n<div class=\"\" dir=\"auto\">\r\n<div id=\"jsc_c_1pr\" class=\"ecm0bbzt hv4rvrfc e5nlhep0 dati1w0a\" data-ad-comet-preview=\"message\" data-ad-preview=\"message\">\r\n<div class=\"j83agx80 cbu4d94t ew0dbk1b irj2b8pg\">\r\n<div class=\"qzhwtbm6 knvmm38d\">\r\n<div class=\"kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">এ পর্যন্ত করোনা ভাইরাসের ব্যাপারে যতটুকু জানা গেছে তা সহজে বুঝতে হলে এবং সংক্রমণ এড়াতে হলে জন হপকিন্স বিশ্ববিদ্যালয় থেকে প্রকাশিত নিম্নলিখিত তথ্যগুলো অনুসরণ করা যেতে পারে।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">* ভাইরাস জীবন্ত প্রাণী নয়। এটি প্রোটিনের অণু (ডিএনএ) যা লিপিডের (চর্বি) মোড়কে মোড়ানো।এটা আমাদের নাক-চোখ-মুখের মাধ্যমে শরীরে ঢুকে গেলে নিজের জেনেটিক কোড বদলে ফেলে শক্তিশালী ও আত্রমণাত্মক হয়ে ওঠে।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">* ভাইরাস যেহেতু কেবলই একটি প্রোটিন অণু এবং জীবন্ত নয় তাই এটাকে মেরেও ফেলা যায় না। তবে সে নিজে থেকে ধ্বংস হতে পারে। এটা কতক্ষণে ধ্বংস বা ক্ষয় হবে তা নির্ভর করে এর থাকার স্থানটির তাপমাত্রা, আর্দ্রতা ও স্থানটি কী উপাদানে তৈরি, তার উপরে।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">* করোনা ভাইরাস ভঙ্গুর কারণ সুরক্ষার জন্য তা কেবল একটি চর্বির স্তর দিয়ে মোড়ানো। এ কারণেই সাবান ও ডিটারজেন্ট ভাইরাসটি থেকে মুক্ত হবার সহজ উপায়। সাবান ও ডিটারজেন্ট মূলত যে কোনো স্থানের তেল বা চর্বি সরাতে পারে। তেল বা চর্বি সরানোর উদ্দেশ্যে আমাদের অন্তত টানা ২০ সেকেন্ড ধরে সাবান বা ডিটারজেন্ট ব্যবহার করতে হয় যাতে করে প্রচুর ফেনা তৈরি হতে পারে। এর ফলে ভাইরাসের উপরের চর্বির স্তর ভেঙে গিয়ে পুরোপুরি অকার্যকর হয়ে যায়।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">* গরম তাপমাত্রা চর্বি গলাতে কার্যকর। এজন্যে হাত বা কাপড় ধোয়ার ক্ষেত্রে অন্তত ২৫ ডিগ্রি সেলসিয়াস তাপমাত্রার পানি ব্যবহার করা উচিত। এ ছাড়া, সাবান ব্যবহারের ক্ষেত্রে গরম পানি ঠান্ডা পানির চেয়ে বেশি ফেনা তৈরি করতে পারে বলে ভাইরাসটিকে আরো দ্র&aelig;ত অকার্যকর করতে পারে।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">* অ্যালকোহল কিংবা অন্তত ৬৫% অ্যালকোহলের মিশ্রণ যে কোনো ধরনের তেল অথবা চর্বি ভাঙার জন্য উপযুক্ত। ভাইরাসের শরীরের বাইরের চর্বির স্তর ভাঙতে অ্যালকোহলের মিশ্রণ অত্যন্ত কার্যকর একটি উপায়।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">* এক ভাগ ব্লিচ ও পাঁচ ভাগ পানির মিশ্রণ সরাসরি প্রয়োগে প্রোটিন ভেঙে যায়। তাই এই মিশ্রণ ভাইরাসটিকে ভিতর পর্যন্ত গলিয়ে ধ্বংস করতে পারে।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">* সাবান, অ্যালকোহল এবং ক্লোরিন যদি অক্সিজেন চালনা করা পানির (অক্সিজেনেটেড ওয়াটার) সঙ্গে ব্যবহার করা হয় তবে তা অপেক্ষকৃত দীর্ঘ সময় ধরে ভাইরাসের কার্যক্ষমতা ঠেকাতে সাহায্য করে। এর কারণ অক্সিজেন চালনা করা পানিতে থাকা পারঅক্সাইড ভাইরাসের প্রোটিনকে গলিয়ে ফেলতে পারে। এটি বিশুদ্ধ হলে ব্যবহার করা যেতে পারে তবে ত্বকের জন্য সুবিধাজনক নয়।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">* ব্যাকটেরিয়া ধ্বংসে যা ব্যবহার করা হয় তা দিয়ে ভাইরাস থেকে মুক্ত হওয়া সম্ভব না। ভাইরাস ব্যাকটেরিয়ার মতো জীবন্ত প্রাণী নয়। যা জীবন্ত নয় তাকে অ্যান্টিবায়োটিক ব্যবহার করে হত্যা করার প্রশ্ন নেই। তবে আগে যা যা উপায় বলা হলো সেসব অনুসরণ করে ভাইরাসকে ভেঙে ধ্বংস করা সম্ভব।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">* ব্যবহৃত বা অব্যবহৃত পোশাক, কাপড় বা চাদর ঝাড়া দেয়া যাবে না। কাপড় ঝাড়লে তা থেকে নিসৃত ভাইরাস কোথাও পড়লে সেখানেই আটকে থাকে। কাপড় বা সমধর্মী জিনিসে ৩ ঘণ্টা, তামা বা কাঠে ৪ ঘণ্টা (যেহেতু তামা নিজেই জীবাণু ধ্বংস করতে পারে এবং কাঠ ক্রমাগত আর্দ্রতা হারাতে থাকে), হার্ডবোর্ডের উপরে ২৪ ঘণ্টা, ধাতব জিনিসে ৪২ ঘণ্টা এবং প্লাস্টিকে ৭২ ঘণ্টা পর্যন্ত ভাইরাসটি টিকে থাকতে পারে। ভাইরাস আছে এমন কিছুকে ঝাড়া দিলে বা তার উপরে পালকের ডাস্টার ব্যবহার করলে ভাইরাসের অণুগুলো বাতাসে তিন ঘণ্টা পর্যন্ত ভাসতে পারে এবং মানুষের নাকে ঢুকে যেতে পারে।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">* ভাইরাস অণুগুলো ঠান্ডা আবহাওয়ায়, এমনকি শীতাতপ নিয়ন্ত্রিত বাড়ি বা গাড়িতে অত্যন্ত ভালোভাবে টিকে থাকতে পারে। বেশি কার্যকর থাকার জন্য ভাইরাসটির আর্দ্রতা এবং অন্ধকারের উপস্থিতির প্রয়োজন পড়ে। এ কারণে একদিকে শুকনো বা কম আর্দ্রতাবিশিষ্ট আবহাওয়া, অন্যদিকে, গরম এবং উজ্জ্বল পরিবেশে ভাইরাসটি দ্র&aelig;ত ধ্বংস হয়।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">* ইউভি লাইট ভাইরাসটিকে তার প্রোটিন ভেঙে যে কোনো কিছুর উপর থেকে ধ্বংস করতে পারে। এভাবে একটি মাস্ককে ব্যবহারের পর ভাইরাসমুক্ত করে আবারো ব্যবহার করা যেতে পারে। কিন্তু ইউভি লাইট যেহেতু ত্বকের কোলাজেন ভেঙে দেয় তাই মুখে বলিরেখা থেকে শুরু করে ত্বকের ক্যানসার পর্যন্ত হতে পারে।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">* ভাইরাসটি সুস্থ এবং স্বাভাবিক ত্বকের ভিতরে সরাসরি প্রবেশ করতে পারে না।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">* করোনা ভাইরাস থেকে মুক্ত হতে ভিনেগার কার্যকর নয় কারণ ভিনেগার প্রোটিন ধ্বংস করতে পারে না।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">* স্প্রিট বা ভদকা ভাইরাসটি ধ্বংস করতে করতে কার্যকর নয়। ভদকায় অ্যালকোহলের সর্বোচ্চ মাত্রা হতে পারে ৪০% কিন্তু ভাইরাসটি ধ্বংস হতে কমপক্ষে ৬৫% অ্যালকোহল দরকার।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">* করোনা ভাইরাসকে ধ্বংস করে, অ্যালকোহলসমৃদ্ধ এমন কিছুর কথা ভাবলে একমাত্র বলা যেতে পারে কোনো কোনো লিসটারিনের (মাউথ ওয়াশ) কথা যাতে ৬৫% অ্যালকোহল থাকে। তবে বেশিরভাগ লিসটারিনে থাকে ২০% থেকে ৩০% অ্যালকোহল যা ভাইরাসটি ধ্বংসে কার্যকর নয়।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">* বদ্ধ স্থানে ভাইরাসটির প্রকোপ বেশি হবে। উলটোদিকে উন্মুক্ত এবং বাতাস চলাচল করে এমন স্থানে ভাইরাসের উপস্থিতি কম হবে।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">* এটা অবশ্য অনেকবার বলা হয়েছে, তবু আরেকবার বললে ক্ষতি নেই যে, নাক, খাবার, দরজার লক, যে কোনো সুইচ, রিমোট কন্ট্রোলার, সেল ফোন, ঘড়ি, কম্পিউটার, টেবিল ও টেলিভিশন জাতীয় জিনিস ধরার আগে ও পরে হাত ধোয়া জরুরি। ওয়াশরুম ব্যবহার করলে হাত তো ধুতে হবেই।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">* বারে বারে ধোয়া হাত ভালোমতো শুকাতেও হবে। কারণ ত্বকের যে কোনো ফাটলে ভাইরাস লুকিয়ে থাকতে পারে। ত্বক আর্দ্রতাকারী লোশন বা ক্রিম যত ভারি ও তৈলাক্ত হয় তত ভালো।</div>\r\n<div dir=\"auto\" style=\"text-align: start;\">&nbsp;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">* হাতের নখ ছোটো করে কেটে রাখা উচিত যেন তাতে ভাইরাস ঢুকে থাকতে না পারে।</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\" style=\"text-align: start;\">সবাই সুস্থ থাকুন, ভাল থাকুন।</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '2020-03-29 04:00:00', '2020-11-30 06:00:22'),
(58, 2, 'বিশ্ব পরিবেশ দিবস', NULL, '58.jpg', 'active', '<p>৫ জুন বিশ্ব পরিবেশ দিবস। বিশ্বব্যাপী জলবায়ুর পরিবর্তন এবং তার হাত থেকে প্রকৃতিকে রক্ষা করার জন্য সারা দুনিয়ার মানুষকে উৎসাহিত করার জন্য যে দিনটির বিশেষ তাৎপর্য রয়েছে। পরিবেশ সচেতনতা তৈরির জন্য রাষ্ট্রপুঞ্জের সবচেয়ে বড় মঞ্চ হল #বিশ্ব_পরিবেশ_দিবস। দিনটি পালনের উদ্দেশ্য হল পরিবেশ সুরক্ষা নিয়ে বিশ্বব্যাপী সচেতনতা গড়ে তোলা। ১৯৭৪ সাল থেকে প্রত্যেক বছর ৫ জুন পালিত হয় বিশ্ব পরিবেশ দিবস। পরিবেশের ভারসাম্য রক্ষায় জীববৈচিত্রের গুরুত্ব অপরিসীম। পৃথিবীতে খাদ্য, জল ও খনিজ দ্রব্যাদির জোগান ঠিক রাখে জীববৈচিত্র। <br />চলতি বছরের বিশ্ব পরিবেশ দিবসের ভাবনা #Biodiversity বা #জীববৈচিত্র। এবছরের আয়োজক দেশ কলম্বিয়া। জার্মানির সহযোগে তারা আয়োজন করবে মূল অনুষ্ঠান। গোটা বিশ্বের জীববৈচিত্রের ১০ শতাংশই রয়েছে কলম্বিয়ায়। অ্যামাজন রেনফরেস্টের একটা বড় অংশ রয়েছে কলম্বিয়ায় এবং পৃথিবীর পক্ষী ও অর্কিডের বৈচিত্রের নিরিখে প্রথম এই দেশ। উদ্ভিদ, প্রজাপতি, স্বচ্ছ জলের মাছ এবং উভচর বৈচিত্রের নিরিখে কলম্বিয়ার স্থান বিশ্বে দ্বিতীয়। আয়োজক দেশের তরফে জানানো হয়েছে যে প্রায় দশ লক্ষ জীববৈচিত্র বিলুপ্তির পথে। জীববৈচিত্র রক্ষায় এর চেয়ে গুরুত্বপূর্ণ সময় আসেনি ।</p>\r\n<p><br />পরিবেশের ভারসাম্য রক্ষায় জীববৈচিত্রের গুরুত্ব অপরিসীম। পৃথিবীতে খাদ্য, জল ও খনিজ দ্রব্যাদির জোগান ঠিক রাখে জীববৈচিত্র। পাশাপাশি জলবায়ুর পরিবর্তন, দূষণ ও বন্যা নিয়ন্ত্রণ করা এবং পৌষ্টিক উপাদানগুলো সঠিকভাবে পুনর্ব্যবহারযোগ্য করে তোলায় গোটা বাস্তুতন্ত্রের জীববৈচিত্র রক্ষা করা ভীষণ জরুরি। আশঙ্কার বিষয় হল, বিশ্বের মোট জীববৈচিত্রের প্রায় ৯৮ শতাংশ বিলুপ্ত হয়ে গিয়েছে।</p>', '2020-06-05 04:00:00', '2020-11-30 06:06:38'),
(59, 5, 'The UNDP is calling on Hackster\'s global community', NULL, '59.jpg', 'active', '<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\">THE UNITED NATIONS DEVELOPMENT PROGRAMME CENTRE FOR TECHNOLOGY, INNOVATION AND SUSTAINABLE DEVELOPMENT ANNOUNCES THE COVID-19 DETECT AND PROTECT CHALLENGE.</div>\r\n<div dir=\"auto\">&nbsp;</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\">The UNDP is calling on Hackster\'s global community to support developing countries through the sharing and transfer of open source technology. This challenge has three priority actions:</div>\r\n</div>\r\n<div class=\"o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\">Design replicable, low-cost tools and resources to aid viral detection</div>\r\n<div dir=\"auto\">Flatten the curve in communities with preventive solutions</div>\r\n<div dir=\"auto\">Reduce the disease\'s impact on the economies of these vulnerable areas</div>\r\n</div>', '2020-06-06 04:00:00', '2020-11-30 06:12:55'),
(60, 1, 'Resilient, inclusive & innovative cities in Bangladesh project', 'On the 7th June 2020 NGO Forum under Oxfam & Australian Aid supported  \'Resilient, inclusive & innovative cities in Bangladesh project\' handed over a 1000 liter Vacutag for Fecal Sludge collection & transportation and some COVID response hygiene materials for individual & household level at Mymensingh City Corporation.', '60.jpg', 'active', '<p><img src=\"/photos/2/101101460_2591116884323524_3346222793269990109_o.jpg\" alt=\"\" width=\"334\" height=\"188\" /> &nbsp;<img src=\"/photos/2/101894273_2591116967656849_5209191362620329077_n.jpg\" alt=\"\" width=\"249\" height=\"188\" /></p>\r\n<p><img src=\"/photos/2/101540508_2591117210990158_4637200763103343462_n.jpg\" alt=\"\" width=\"335\" height=\"251\" /> &nbsp;<img src=\"/photos/2/102768222_2591117130990166_5419818380957217781_n.jpg\" alt=\"\" width=\"188\" height=\"252\" /></p>\r\n<p>&nbsp;</p>', '2020-06-08 04:00:00', '2020-11-30 06:24:09'),
(61, 1, 'The presentation was about the research of Participation and Sustainability project, objectives, methodology and outlines.', 'Attended the PhD seminar of Ahasan Habib vai. The presentation was about the research of Participation and Sustainability project, objectives, methodology and outlines.\r\nParticipation can be a solution in case of the elite capture and dictatorship for the decision making in case of different social aspect and can be a better gateway towards sustainability.', '61.jpg', 'active', '<p><img src=\"/photos/2/103423251_3294849767232942_728486369493269366_o.jpg\" alt=\"\" width=\"373\" height=\"210\" /> &nbsp;&nbsp;<img src=\"/photos/2/102937772_3294849560566296_6130811674790922959_o.jpg\" alt=\"\" width=\"366\" height=\"206\" /></p>\r\n<p><img src=\"/photos/2/102873749_3294881707229748_747311917323216955_o.jpg\" alt=\"\" width=\"372\" height=\"209\" />&nbsp; &nbsp;<img src=\"/photos/2/102412051_3294881883896397_8816896702626627701_o.jpg\" alt=\"\" width=\"369\" height=\"208\" /> &nbsp;</p>', '2020-06-10 04:00:00', '2020-11-30 06:34:15'),
(62, 5, 'UNICEF Cox’s Bazar has visited newly established WASH services', 'Mr. Tomoo Hozumi, Unicef Bangladesh Country representative, Ms. Shairose Mawji, Chief of Field Office (OIC), UNICEF Cox’s Bazar, Martin Worth, UNICEF WASH Manager, Arulrajah Sriskandarajah (Sri), UNICEF Programme Manager, Cox’s Bazar, Mr. Mashrur Tusar, Security Officer, UNICEF Cox’s Bazar has visited newly established WASH services i.e FSM, Production Bore hole and water strorage tank at icddrb, Taknaf premises of Unicef supported COVID-19 response project. The team was leaded by Senior Technical Manager Mr. Toriqul Islam, along with Project Coordinator Mr. Mosarraf Hossain, and concern project staffs of NGO Forum for Public Health. UNICEF County Representative and other officials of Cox’s Bazar were highly impressed and satisfied to visit newly constructed WASH infrastructure.', '62.jpg', 'active', '<p><img src=\"/photos/2/107375534_605964267022864_7807324105788621004_o.jpg\" alt=\"\" width=\"527\" height=\"296\" />&nbsp; <img src=\"/photos/2/107664834_605964080356216_8442021238929620033_o.jpg\" alt=\"\" width=\"295\" height=\"295\" /></p>\r\n<p><img src=\"/photos/2/107703339_605964233689534_8840995587167120001_o.jpg\" alt=\"\" width=\"313\" height=\"234\" />&nbsp; <img src=\"/photos/2/107963875_605963993689558_8619641123432815689_o.jpg\" alt=\"\" width=\"509\" height=\"235\" /></p>', '2020-07-13 04:00:00', '2020-11-30 06:34:34'),
(63, 1, 'NGO Forum newly constructed Water Distribution Network at Taipalong Village', '15th July 2020 at 3.30 pm Mr. Tomoo Hozumi, Unicef Bangladesh Country representative, Ms. Shairose Mawji, Chief of Field Office (OIC), UNICEF Cox’s Bazar, Martin Worth, UNICEF WASH Manager, Mrs. Karen Reidy Communication Specialist , UNICEF Cox’s Bazar, Mr. Zahidul Mamun, WASH Specialist, Mr. Aynul Huda, Wash Officer, Mr. Mohammad Ali, WASH Officer, Cox’s Bazar, Mr. Ritthick Chowdhury, Ex.En- DPHE, Cox’s Bazar, Mohammod Amimul Ahsan  Khan, Assistant Commissioner (AC Land), Ukhia, Mr. Jahangir Kobir Chowdhury, Rajapalong UP Chairman, Ukhia, Mr. Alamin Bishwash, SAE-DPHE has inaugurated newly installed Water Distribution Network at Taipalong Village and visited ongoing construction work of Water Distribution Network at Ukhiya Upazila premises of Unicef supported “Improved WASH Services for the Host Community Population in Ukhia project”, Cox’s Bazar. NGO Forum Senior Technical Manager Mr. Toriqul Islam was led the visit team and Project Coordinator Mr. Mosarraf Hossain and concern project staffs have assisted to field visit. UNICEF country representatives and UNICEF officials of Cox’s Bazar and Govt. representatives were highly impressed and satisfied to visit NGO Forum newly constructed Water Distribution Network at Taipalong Village. It is to be mentioned that NGO Form has constructed three (03) water distribution network at Ukhiya Upazila (Taipalong, Horinmara and Upazila Complex) to ensure chlorinated safe drinking water for the host community people. Through these three WDN, more than 18,000 people will be benefitted with safe drinking water.', '63.jpg', 'active', '<p><img src=\"/photos/2/107636943_607512456868045_1995891021558673380_o.jpg\" alt=\"\" width=\"439\" height=\"292\" />&nbsp; <img src=\"/photos/2/107815084_607512520201372_8819164833090763915_o.jpg\" alt=\"\" width=\"437\" height=\"291\" /></p>\r\n<p><img src=\"/photos/2/107837457_607512383534719_6648953503060862656_o.jpg\" alt=\"\" width=\"440\" height=\"293\" />&nbsp; <img src=\"/photos/2/107923913_607512286868062_6131387173731257124_o.jpg\" alt=\"\" width=\"440\" height=\"293\" /></p>', '2020-07-15 04:00:00', '2020-11-30 06:42:03'),
(65, 1, 'Reduce The Risk Of COVID-19', 'NGO Forum has been implementing WASH and Protection services to reduce the risk of COVID-19 of the vulnerable communities in Teknaf at Cox\'s Bazar supported by #AAR_Japan. \r\nSome pictures on Volunteer Orientation, Door to session on Hygiene promotion and COVID 19 including Distribution of Hygiene Kits and Hand Washing Device at Hnila Union of Teknaf Upazila, District Cox\'sbazar.', '65.jpg', 'active', '<p><img src=\"/photos/2/102821822_582965735989384_7344183400223524045_n.jpg\" alt=\"\" width=\"211\" height=\"282\" /> &nbsp;<img src=\"/photos/2/102776817_582966222656002_1356721316461634564_o.jpg\" alt=\"\" width=\"375\" height=\"282\" /></p>\r\n<p><img src=\"/photos/2/103399680_582965779322713_6702937247024346691_o.jpg\" alt=\"\" width=\"365\" height=\"173\" /> &nbsp;<img src=\"/photos/2/103257326_582965999322691_6015150081798526036_o.jpg\" alt=\"\" width=\"363\" height=\"172\" /></p>', '2020-06-12 04:00:00', '2020-11-30 07:00:13'),
(66, 1, 'NGO Forum for Public Health has organised a Capacity Building Training on WASH Project Management', NULL, '66.jpg', 'active', '<p>NGO Forum for Public Health has organised a Capacity Building Training on WASH Project Management under NGOF_NCA WASH project at Neeshorgo Hotel &amp; Resort Ltd in Cox&rsquo;s Bazar.</p>\r\n<p><br />The objective of this training is to develop the capacity of existing team members of NGO_NCA WASH Project team. Today we had an inclusive discussion session from NGO Forum leadership team including project operation modality, project management, sectoral reporting, project implementation, Procurement policies, Audit and compliance and stock management and Internal Control Procedure audit, Financial policy, Grant Management and Financial Reporting in line with Project Agreement &amp; NGOAB Approval.</p>\r\n<p>Mr. Ataur Rahman, Project Coordinator of NGOF UNHCR WASH Project, Mr. Toriqul Islam, Senior Technical Manager, Mr. Md. Saiful Islam Sarker, Manager-Resource Mobilization and NGOF-NCA WASH project Focal, Mr. Mosarraf Hossain, Project Coordinator- UNICEF funded WASH project, Mr. Simson Palma, Manager- Finance &amp; Accounts Mr. Injamamul Hoque Ayon, Internal Auditor, and Mr. Hashem Bhuiyan, Manager, NGOF-NCA WASH project have attended and facilitated the sessions.</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"/photos/2/118083645_639466613672629_8040378862590750745_o.jpg\" alt=\"\" width=\"366\" height=\"274\" />&nbsp; <img src=\"/photos/2/118397524_639466653672625_5216088329331160478_o.jpg\" alt=\"\" width=\"486\" height=\"273\" /></p>\r\n<p><img src=\"/photos/2/118476559_639466537005970_6242823345133459360_o.jpg\" alt=\"\" width=\"487\" height=\"274\" />&nbsp; <img src=\"/photos/2/118204833_639466903672600_3442258579368051615_o.jpg\" alt=\"\" width=\"366\" height=\"274\" /></p>', '2020-08-26 04:00:00', '2020-11-30 07:08:20'),
(68, 1, 'COVID19 Response & Emergency WASH Activities', 'NGO Forum has been continuing COVID19 response & Emergency WASH activities under Improved WASH Services for Rohingya Refugee Population in Ukhiya,Funded by UNICEF at intervention area Camp-6 & Camp-7, Kutupalang, Ukhiya, Cox\'s Bazar and playing an active role as WASH Focal agency during the Lockdown period.\r\nTotal Population:  49,897 \r\nTotal Household: 13.075', '68.jpg', 'active', '<p><img src=\"/photos/2/103548139_583029355983022_8701190179540876086_o.jpg\" alt=\"\" width=\"740\" height=\"351\" /></p>\r\n<p><img src=\"/photos/2/102821827_583029335983024_2942809556498192142_o.jpg\" alt=\"\" width=\"173\" height=\"369\" /> &nbsp;<img src=\"/photos/2/103099057_583029435983014_2717109100457630979_o.jpg\" alt=\"\" width=\"184\" height=\"368\" /> &nbsp;<img src=\"/photos/2/103461463_583029689316322_8684051682621604916_o.jpg\" alt=\"\" width=\"207\" height=\"368\" /></p>\r\n<p>&nbsp;</p>', '2020-06-12 06:25:35', '2020-11-30 07:25:35'),
(69, 2, 'World Environment Day', 'Every year 5th June is World Environment Day.NGO Forum celebrated Global WASH events in Refugee camps under the Maintaining Access to Safe Water and Sanitation for Rohingyas in Bangladesh Project, funded by UNHCR. This year it falls on a holiday. Therefore, NGO Forum celebrates the day on 8th June, Monday. The theme of the day in 2020 is “Time_for_Nature”. The Day was celebrated in Camp 5, Camp 17, Camp 26, Kutupalong RC, and Nayapara RC. Mr.Abu Saleh Mohammad, Honorable CiC of the Camps was the main guest of the program, due to the COVID-19 pandemic, all kinds of mass gathering activities were avoided. The day was celebrated with small participants ensuring health safety guidelines.', '69.jpg', 'active', '<p><img src=\"/photos/2/103453567_585049769114314_8932746240279207951_n - Copy - Copy.jpg\" alt=\"\" /> &nbsp;<img src=\"/photos/2/103457804_585049822447642_6258972528014969814_n - Copy - Copy.jpg\" alt=\"\" width=\"156\" height=\"224\" /></p>\r\n<p>&nbsp;</p>', '2020-06-13 04:00:00', '2020-11-30 07:40:33'),
(71, 1, 'COVID-19 Response', 'Currently, the whole world is suffering due to the Corona Virus named ‘COVID-19’ and along with the world, Bangladesh is also affected by the COVID-19. The COVID-19 is one of the deadly viruses in the history of the world and the World Health Organization (WHO) has already declared COVID-19 as a global pandemic. According to the guidance of UNHCR, WHO, and as well as local administration, NGO Forum has been responding against the pandemic COVID-19 to reduce the risk. However, the below initiatives have been taken so far as on 11 May 2020 to prevent the COVID-19 at camp level.', '71.jpg', 'active', '<p><img src=\"/photos/2/103465927_585347545751203_5597283637398297797_n.jpg\" alt=\"\" width=\"279\" height=\"209\" /> &nbsp;<img src=\"/photos/2/104151730_585347569084534_1957720257172429367_o.jpg\" alt=\"\" width=\"439\" height=\"207\" /></p>\r\n<p><img src=\"/photos/2/103409963_585347979084493_777190640445008791_o.jpg\" alt=\"\" width=\"460\" height=\"345\" /> &nbsp;<img src=\"/photos/2/103625248_585347652417859_2219541664376597470_o.jpg\" alt=\"\" width=\"196\" height=\"346\" /></p>\r\n<p>&nbsp;</p>', '2020-06-12 04:00:00', '2020-11-30 08:02:56'),
(72, 1, 'International Inter University Short Film Festival', 'The Official Selections on Short Film on Refugee category is here!\r\nIn this category, we have received some remarkable films this year. Congratulations to all the filmmakers whose film have made it into the official selections.\r\nWatch these films online as we observe World Refugee Day 2020.', '72.jpg', 'active', '<p><img src=\"/photos/2/103554149_2969003553217567_6072353986551744138_o.jpg\" alt=\"\" width=\"297\" height=\"371\" /></p>\r\n<p>&nbsp;</p>', '2020-06-17 04:00:00', '2020-11-30 08:10:52'),
(73, 8, 'Meeting With European Union', 'Our Executive Director Mr. S. M. A Rashid has conducted the online video conference with European Union Headquarters in Brussels and the Country office along with their partners, international delegates on future funding strategies.', '73.jpg', 'active', '<p><img src=\"/photos/2/105647907_591260101826614_6419486591403927375_n.jpg\" alt=\"\" width=\"586\" height=\"329\" /></p>\r\n<p>&nbsp;</p>', '2020-06-18 04:00:00', '2020-11-30 13:57:58'),
(74, 1, 'Mass awareness campaign on COVID-19', NULL, '74.jpg', 'active', '<div dir=\"auto\">Mass awareness campaign on COVID-19 broadcasted through popular community \"Radio Naf\" at Cox\'s Bazar. This activity initiated by NGO Forum for Public Health under the Project \"WaSH &amp; Protection Support Program\" funded by AAR Japan.</div>\r\n<div dir=\"auto\">[Click to open from Sound Cloud</div>\r\n<div dir=\"auto\">&nbsp;</div>\r\n<div dir=\"auto\">&nbsp;</div>', '2020-06-20 04:00:00', '2020-11-30 14:03:32'),
(75, 2, 'Global Handwashing Day', 'October 15 is marked as Global Handwashing Day. A global advocacy day dedicated to increasing awareness and understanding about the importance of handwashing with soap as an easy, effective, and affordable way to prevent diseases and save lives. This year the COVID-19 pandemic provides an important reminder that hand washing is one of the most effective and simplest ways to stop the spread of infection and also reinforce the message that hand hygiene is equally important in preventing diseases and protecting our health. The 2020 Global Handwashing Day theme is “Hand Hygiene for All.” This year\'s theme follows the recent global initiative calling on all of society to scale up hand hygiene, especially through handwashing with soap.', '75.jpg', 'active', '<p>&nbsp; <img src=\"/photos/2/121605708_680076662944957_4838996889747496637_o - Copy.jpg\" alt=\"\" width=\"229\" height=\"344\" /> &nbsp;<img src=\"/photos/2/121313223_680174032935220_3126862796680150124_o.jpg\" alt=\"\" width=\"601\" height=\"342\" /></p>\r\n<p><img src=\"/photos/2/121296430_680174086268548_8974450581681514460_o.jpg\" alt=\"\" width=\"403\" height=\"244\" /> &nbsp;<img src=\"/photos/2/121775790_680174052935218_339063740889713463_o.jpg\" alt=\"\" width=\"441\" height=\"245\" /></p>\r\n<p>&nbsp;</p>', '2020-10-15 04:00:00', '2020-11-30 14:16:35'),
(77, 2, 'Global handwashing Day', 'On 15 October 2020,\' the Department of Public Health Engineering(DPHE), Divisional Commissioner Office of Mymensingh, District administration of Mymensingh, City Corporation & NGO Forum For Public Health jointly celebrated \"National Sanitation Month & Global Hand Washing Day 2020\". The Handwashing demonstration has been presented by the volunteers of the \"Resilient  Inclusive and Innovative Cities in Bangladesh\" project of NGO Forum, funded by AusAID, implemented by OXFAM. Divisional Commissioner of Mymensingh Mr. Md. Kamrul Hasan was the Chief Guest of this program. Also present as Special Guest Dr. Porikkhit Kumar (Deputy Civil Surgeon), Mr.Md. Samiul Haque Executive Engineer, DPHE, Chairman of Zilla Parishad, and another guest Deputy Commissioner Mr.Md. Mizanur Rahman presided over the program. Other Government departments and NGOs also participated in this program', '77.jpg', 'active', '<p><img src=\"/photos/2/121484714_680412869578003_5537971385307421826_n.jpg\" alt=\"\" width=\"444\" height=\"250\" /> &nbsp;<img src=\"/photos/2/121235906_680412962911327_1654273038860562821_n.jpg\" alt=\"\" width=\"445\" height=\"250\" /></p>\r\n<p><img src=\"/photos/2/121575322_680412946244662_5042258226710427639_n.jpg\" alt=\"\" width=\"445\" height=\"250\" /> &nbsp;<img src=\"/photos/2/121568549_680412866244670_2900490661532716630_n.jpg\" alt=\"\" width=\"446\" height=\"251\" /></p>', '2020-10-15 04:00:00', '2020-11-30 14:39:26'),
(78, 2, 'NGO Forum for Public Health participated in Farmer\'s market display for the World Food Day celebration 2020', 'NGO Forum for Public Health participated in Farmer\'s market display for the World Food Day celebration 2020. The event was organized by Cox\'s Bazar Food Security Sector (Date: 15th October 2020). NGO Forum was nominated by UNHCR to promote their Diversified Jute Bag products & Reusable Sanitary PAD. Under the Self Reliance Project supported by UNHCR, NGO Forum is working to improve the socio-economic condition of vulnerable women.\r\nWorld Food Day promotes global awareness and action for those who suffer from hunger and for the need to ensure healthy diets for all. The Food and Agriculture Organization of the UN (FAO) designated 16 October as World Food Day in 1979. World Food Day is celebrated every year with different themes to focus on areas that require action and offer a common objective. This year the World Food Day 2020 theme is \"Grow, nourish, sustain. Together. Our actions are our future\".', '78.jpg', 'active', '<p><img src=\"/photos/2/121538633_680771052875518_5256633470638898889_o.jpg\" alt=\"\" width=\"404\" height=\"303\" /> &nbsp;<img src=\"/photos/2/121539415_680771069542183_667971165916989864_o.jpg\" alt=\"\" width=\"404\" height=\"302\" /></p>\r\n<p><img src=\"/photos/2/121621255_680771002875523_8834148501008699685_o.jpg\" alt=\"\" width=\"587\" height=\"440\" /></p>', '2020-10-15 04:00:00', '2020-11-30 14:43:18'),
(79, 1, 'NGO Forum-UNHCR Project of Cox’s Bazar observing the Global handwashing day 2020', 'NGO Forum-UNHCR Project of Cox’s Bazar has been observed the Global handwashing day 2020 highlighting the theme of this year ‘Hand Hygiene for all’ in the working camps of Camp 5, 17, 26, NYP RC, KTP RC, and KTP TC. The major events are; Set-up handwashing demonstration site, a short discussion with the presence of CICs, leaflet, festoon and T-shirt distribution, quiz competition, and street song.', '79.jpg', 'active', '<p><img src=\"/photos/2/121260766_680356459583644_6862505264686820468_o.jpg\" alt=\"\" width=\"386\" height=\"217\" /> &nbsp;<img src=\"/photos/2/121227300_680357082916915_9068230777902923623_o - Copy.jpg\" alt=\"\" width=\"326\" height=\"217\" /></p>\r\n<p><img src=\"/photos/2/121170167_680356976250259_3303201451573886077_o.jpg\" alt=\"\" width=\"387\" height=\"258\" /> &nbsp;<img src=\"/photos/2/121484513_680356932916930_6233781635579398754_o.jpg\" alt=\"\" width=\"386\" height=\"258\" /></p>\r\n<p><img src=\"/photos/2/121170167_680356976250259_3303201451573886077_o - Copy.jpg\" alt=\"\" width=\"447\" height=\"298\" /></p>\r\n<p>&nbsp;</p>', '2020-10-15 04:00:00', '2020-11-30 14:52:28'),
(80, 1, 'NGO Forum AAR Japan WASH and Protection Support project observing the Global Hand Washing Day 2020', 'NGO Forum AAR Japan WASH and Protection Support project Observed the Global Hand Washing Day 2020 in light with the theme in this year \"Hand Hygiene for All\". Some limited events are organized in the community level of Hinila Union at Teknaf Upazila, Cox\'s Bazar on 15 October 2020 participated by students of different schools and Madrasah facilitated by Student leader, School teacher, and UP member of Hnila Union, Teknaf, Cox\'s Bazar. Major activities were Role Play/short drama on focusing the lack of handwashing practice and its negative effects, Awareness session on HW, Hand washing Demonstration, Handwashing campaign to a limited extent. The WASH team of the project has participated in those activities.', '80.jpg', 'active', '<p><img src=\"/photos/2/121552011_681629802789643_3942525133280678395_n.jpg\" alt=\"\" width=\"429\" height=\"194\" /> &nbsp;<img src=\"/photos/2/121692145_681629776122979_1433848895835837601_o.jpg\" alt=\"\" width=\"411\" height=\"193\" /></p>\r\n<p><img src=\"/photos/2/121681846_681629712789652_4120796324954560840_o.jpg\" alt=\"\" width=\"503\" height=\"236\" />&nbsp; <img src=\"/photos/2/121621252_681629859456304_5936964836867628840_n.jpg\" alt=\"\" width=\"434\" height=\"235\" /></p>', '2020-10-17 04:00:00', '2020-11-30 15:02:41'),
(81, 1, 'Global Handwashing Day  and National Sanitation Month Observation 2020', 'Upazila Administration and Department of Public Health Engineering (DPHE), Teknaf Observed the National Sanitation Sanitation Month and Global Handwashing Day 2020 on 21 October 2020 through different types of activities. WASH partner organization  who are implementing the WASH activities at Teknaf Host community assisted the Upazila Administration and Department of Public Health Engineering (DPHE) in these events and participated accordingly. \r\nNGO Forum AAR Japan Project, NGO Forum CATS project and NGO Forum NCA Project actively participated in the different activities on National Sanitation Month and Global Handwashing Day 2020 in the Upazila Parishad Hall Room and Upazila Parishad premises, Teknaf. Major activities were discussion meetings including WASH progress sharing, Display and campaign on the Day and Hand washing demonstration. \r\nMr. Nurul Alam, Upazila Parishad Chairman, Mr. Mohammad Saiful Islam, UNO Teknaf, Sub Assistant Engineer of Department of Public Health Engineering, UPs Chairmen, Representatives of Civil Society, NGO Repreprentatives participated in those events.', '81.jpg', 'active', '<p><img src=\"/photos/2/122006078_686174705668486_837020668159340430_n.jpg\" alt=\"\" width=\"294\" height=\"289\" /> &nbsp;<img src=\"/photos/2/122237520_686174942335129_2753140357041671286_n.jpg\" alt=\"\" width=\"546\" height=\"289\" /></p>\r\n<p><img src=\"/photos/2/122114024_686174909001799_339366249079972447_n.jpg\" alt=\"\" width=\"430\" height=\"242\" /> &nbsp;<img src=\"/photos/2/122259023_686174875668469_1473934831450729736_n.jpg\" alt=\"\" width=\"321\" height=\"241\" /></p>', '2020-10-22 04:00:00', '2020-11-30 15:15:15'),
(82, 1, 'Visiting \'Provision for Life Saving WASH Services to Vulnerable Communities at Cox\'s Bazar', 'Head of Mission, Norwegian Church Aid (NCA) in Bangladesh, Mr. Jack T. Chow, visited \'Provision for Life Saving WASH Services to Vulnerable Communities at Cox\'s Bazar 2020\' project activities on 1st November 2020 which is implementing by NGO Forum for Public Health at Camp 25 and Hnlia Union, Teknaf, Cox\'s Bazar. Mr. Muhammad Saiful Islam, Project Focal, Mr. Hashem Bhuiyan, Project Manager and the Project team accompanied Mr. Jack during the visit.\r\nMr. Jack visited Households session on COVID at camp 25 and MHM group session at Jele Para, Nhila Union. He also visited the ongoing works of Production Borehole and Water Network, Solid Waste Management and Toilet and Bathing construction work in the same areas.\r\nMr. Jack T. Chow was highly impressed and expressed his satisfaction over the completed activities and progress made considering the COVID Pandemic situations and short span of time.', '82.jpg', 'active', '<p><img src=\"/photos/2/123118240_695243004761656_5466517207676651034_n.jpg\" alt=\"\" width=\"433\" height=\"327\" /> &nbsp;<img src=\"/photos/2/123135847_695243064761650_238227867280303148_n.jpg\" alt=\"\" width=\"436\" height=\"327\" /></p>\r\n<p><img src=\"/photos/2/123335886_695243184761638_1332463263018681224_n.jpg\" alt=\"\" width=\"435\" height=\"326\" /></p>', '2020-11-01 04:00:00', '2020-11-30 15:22:14'),
(83, 1, 'Providing  support to Sufia govt. Primary School', 'NGO Forum AAR Japan WASH and Protection project provided the support to Sufia govt. Primary school for major Repairing of School Latrine including Construction and and installation of Hand washing space. Those activities are inaugurated by Mr. Rashed Mahmud Ali, UP Chairman of Hnila Union on 2nd November 2020. Head teacher of the school Ms. Wahida Begum, president of govt primary teachers Association, Teknaf Mr. Mahmud Rahman, Project officer AAR Japan Mr. Sabbir Hossain, members of school management committee, Respective staff of NGO Forum AAR Japan project and civil society representatives also participated in the inauguration ceremony. Guests and school authority given special thanks to NGO Forum for excellent work the WASH facility.', '83.jpg', 'active', '<p><img src=\"/photos/2/123141169_695983198020970_8084469861203103420_n.jpg\" alt=\"\" width=\"477\" height=\"357\" /> &nbsp;<img src=\"/photos/2/123414484_695982908020999_4643339940421557365_n.jpg\" alt=\"\" width=\"474\" height=\"356\" /></p>\r\n<p>&nbsp;</p>', '2020-11-02 05:00:00', '2020-11-30 15:28:26'),
(84, 1, 'Visiting the Water Distribution Network at Camp 6', 'The UNHCR Country Representative in Bangladesh, Mr. Steven Corliss and Mr. Tomoo Hozumi - UNICEF  Country Representative along with Shairose Mawji from UNICEF, Dr. Ezatullah Majeed - UNICEF Chief of field office cox\'s Bazar, Louise from UNHCR successfully have jointly visited the Water Distribution Network at Camp 6, Ukhiya despite the heavy rain. The team was led by Mr. Aynul Huda, WASH officer UNICEF and Mr. Toriqul Islam, Senior Technical Manager NGO Forum. During the visit, the team was briefed on water network management modalities, technical issues, community engagement, and also the coverage areas by the water networks. The visitors talked with the community people and tried to understand their previous situation and the present condition of water supply. After listening to their words, the visitors were happy to see the community people’s satisfaction and praised NGO Forum for implementing this kind of activity.', '84.jpg', 'active', '<p><img src=\"/photos/2/123220246_697427721209851_1281598264022013275_o.jpg\" alt=\"\" width=\"414\" height=\"276\" /> &nbsp;<img src=\"/photos/2/123437669_697427831209840_6043389377564679534_o.jpg\" alt=\"\" width=\"418\" height=\"278\" /></p>\r\n<p>&nbsp;</p>', '2020-11-04 05:00:00', '2020-11-30 15:33:53');
INSERT INTO `all_news` (`id`, `news_category_id`, `news_title`, `news_description`, `news_image`, `news_status`, `ck_description`, `created_at`, `updated_at`) VALUES
(85, 1, 'Visiting (NGOF-UNHCR WASH Project) to perceive WASH facilities ,Hygiene activities & Community and  Self Reliance Project  (Sanitary production center) at Camp-17', 'Today Cox\'s Bazar WASH (HP Twig) sector representative Ms.Mariangela D\'ADAMO (WASH Sector-Hygiene Promotion Specialist) along with her colleagues Ms.Samia Aboni and Mr.Mahmudur Rahman from WASH Sector, Ms.Sabila Rabbi from Gender Hub, and NGO Forum Project office representative Dr. Salina Shelly, visited (NGOF-UNHCR WASH Project) to perceive WASH facilities ,Hygiene activities & Community engagement achievement in the field level, later the team visited  Self Reliance Project  (Sanitary production center) at Camp-17. The WASH sector team was highly glad after seeing WASH facilities around the camp, hygiene practices & community engagement activities. Sector representative Mariangela talked with some of the community women who are doing their own tasks at the community level.  Afterward, the team looks over the Women Friendly WASH block both at camp-5 & 17 & during the visiting time the team also looks through the wash facilities & obtains their very constructive feedback on NGOF-UNHCR WASH Project new scheme.', '85.jpg', 'active', '<p><img src=\"/photos/2/123391692_697644587854831_5018794018104041801_o.jpg\" alt=\"\" width=\"419\" height=\"314\" /> &nbsp;<img src=\"/photos/2/123399126_697644534521503_7851215658877454022_o.jpg\" alt=\"\" width=\"417\" height=\"313\" /></p>\r\n<p><img src=\"/photos/2/123243091_697644851188138_1383251105376291655_o.jpg\" alt=\"\" width=\"492\" height=\"368\" /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2020-11-04 05:00:00', '2020-11-30 15:47:35'),
(86, 1, 'Visiting CERF Amphan response project', 'Today, Mr. Moustapha Niang, WASH Specialist, WASH section UNICEF WASH Bangladesh along with his colleague Mr. Furqan Ahmed, WASH Officer Barishal and Executive Engineer, Department of Public Health Engineering, Patuakhali visited CERF Amphan response project. Mr. Md. Toriqul Islam, Programme Focal, NGO Forum for Public Health along with Project team were participated in the visit. The Project has been implementing in two sub-district Kalapara and Patharghata under Patuakhali and Barguna districts, respectively. Under this project, it has demonstrated different types disable friendly latrines and Hygiene pronation activity.', '86.jpg', 'active', '<p><img src=\"/photos/2/124154703_701121860840437_290042832338312402_o.jpg\" alt=\"\" width=\"498\" height=\"280\" /> &nbsp;<img src=\"/photos/2/123548735_701122027507087_3655271073771874596_o.jpg\" alt=\"\" width=\"373\" height=\"280\" /></p>', '2020-11-08 05:00:00', '2020-11-30 15:54:29'),
(87, 1, 'Visiting GOB-UNICEF ASWA-II, MHM facilities, hygiene corner, community clinic, water facility and observed hygiene session with the community youth group.', 'Mr. Moustapha Niang, WASH Specialist, WASH Section UNICEF WASH Bangladesh along with his colleague Mr. Furqan Ahmed, WASH Officer Barishal and Abu Musa Mohammad Faisal, Executive Engineer, Department of Public Health Engineering, Pirojpur visited GoB-UNICEF ASWA-II (Accelerated Sanitation and Water for All) Project ASWA-II  project area under Kawkhali Upazila. Mr. Md. Toriqul Islam Programme Focal, NGO Forum for Public Health along with project team participated in the visit. We have visited MHM facilities, hygiene corner, community clinic, water facility and observed hygiene session with the community youth group.', '87.jpg', 'active', '<p><img src=\"/photos/2/124099725_3008234585945083_5765880572485931993_o.jpg\" alt=\"\" width=\"473\" height=\"315\" /> &nbsp;<img src=\"/photos/2/124355974_3008233465945195_4444903914214966887_o.jpg\" alt=\"\" width=\"473\" height=\"315\" /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2020-11-09 05:00:00', '2020-11-30 16:04:30'),
(88, 8, 'Honorable Executive Director participating at UNHCR Refugee WASH Partners Meeting', 'Our honorable Executive Director Mr. S.M.A Rashid has participated UNHCR Refugee WASH Partners Meeting, organized by UNHCR Headquarter, Geneva.', '88.jpg', 'active', '<p><img src=\"/photos/2/124352152_703722377247052_8303757137367581891_o.jpg\" alt=\"\" width=\"799\" height=\"450\" /></p>\r\n<p>&nbsp;</p>', '2020-11-11 05:00:00', '2020-11-30 16:10:00'),
(89, 2, 'World Toilet Day', 'World Toilet Day is a United Nations Observance that celebrates toilets and raises awareness of the 4.2 billion people living without access to safely managed sanitation. It is about taking action to tackle the global sanitation crisis and achieve Sustainable Development Goal 6: water and sanitation for all by 2030', '89.jpg', 'active', '<p><img src=\"/photos/2/126361950_710006713285285_5069969870740684523_o.jpg\" alt=\"\" width=\"344\" height=\"344\" /> &nbsp;<img src=\"/photos/2/126468079_710006549951968_4877128695621804732_o.jpg\" alt=\"\" width=\"344\" height=\"344\" /></p>\r\n<p>&nbsp;</p>', '2020-11-19 05:00:00', '2020-11-30 16:15:51'),
(90, 2, 'Celebrating World Toilet Day', 'NGO Forum for Public Health has celebrated World Toilet Day 2020 in 06 working locations (Camp 5, Camp 17, Camp 26, KTP RC, NYP RC & KTP TC) under NGOF-UNHCR Project. The theme of WTD 2020 is Sustainable Sanitation and Climate Change. NGOF also conducted the WASH Fair in Camp 5 & NYP RC. The main items of WTD & WASH Fair was WASH facilities demonstration, Art Competition, Hand Washing Demonstration, Awareness campaign through megaphone and Hygienic latrine demonstration.', '90.jpg', 'active', '<p><img src=\"/photos/2/125543660_710366179916005_7712453150635549143_o.jpg\" alt=\"\" width=\"360\" height=\"271\" /> &nbsp;<img src=\"/photos/2/126307011_710366389915984_4056603796965919702_o.jpg\" alt=\"\" width=\"483\" height=\"272\" /></p>\r\n<p><img src=\"/photos/2/125853713_710366029916020_3393604042688517530_o.jpg\" alt=\"\" width=\"412\" height=\"274\" /> &nbsp;<img src=\"/photos/2/126396253_710366616582628_3713937676343612688_o.jpg\" alt=\"\" width=\"413\" height=\"275\" /></p>', '2020-11-19 05:00:00', '2020-11-30 16:24:14'),
(91, 2, 'Focusing on the theme of \'Sustainable sanitation and climate change\'', 'Focusing on the theme of \'Sustainable sanitation and climate change\' NGO Forum - NCA WASH project celebrated World Toilet Day 2020 in collaboration with other WASH agencies at camp – 25, Teknaf, Cox’s Bazar. Honorable CIC of camp 24 -25 Mr. Abdul Hannan, National Program Officer of IOM, Mr. Mamun Parvez Pallab, Wash Focal Mr. Rubel Sheikh of Camp 25, and NGO Forum-NCA project staffs-Hygiene Promotion Officer Ms. Mahmuda Azam Ruma, Advocacy Officer Dr. Mahbubur Rahman Rajib were present in the event. Honorable CIC inaugurated the event by cutting ribbon. In his speech, he emphasized on maintaining our health security and stop the spread of deadly infectious diseases such as COVID-19, cholera and typhoid, we should be aware of proper use of toilet. The event featured sessions on sanitation, quiz competitions and given prize for those who regularly clean their toilets in different blocks at camp areas.', '91.jpg', 'active', '<p><img src=\"/photos/2/125966901_710372109915412_1153255203403171810_o.jpg\" alt=\"\" width=\"383\" height=\"255\" /> &nbsp;<img src=\"/photos/2/125763875_710372179915405_6935580186784268321_o.jpg\" alt=\"\" width=\"380\" height=\"253\" /></p>\r\n<p><img src=\"/photos/2/125541683_710372299915393_5451814604247687817_o.jpg\" alt=\"\" width=\"553\" height=\"338\" /></p>', '2020-11-19 05:00:00', '2020-11-30 16:31:24'),
(92, 1, '\"NGO Forum AAR Japan WASH and Protection project observing the World Toilet Day 2020', '\"NGO Forum AAR Japan WASH and Protection project observed the World Toilet Day 2020 in light of the theme \"Sustainable Sanitation and Climate change\" in the premises of Khadijatul Kubra Girls Dakhil Madrasah at Hnila Union.  \r\nMajor Activities were Demonstration an ideal Village focusing on Sustainable and climate-friendly Toilet facility, Campaign and Handwashing demonstration specially promotions of tippy tap system. Mr. Rashed Mahmud Ali, UP Chairman of Hnila Union was the Chief guest in the event. Main Audience of the event is school and Madrasah students in the Host community of Hnila Union.  LGI members, teachers from Khadijatul Kubra Madrasah and other institutes, Civil society representatives and NGO Forum staffs participated in those activities of the World Toilet Day. The event was attractive and children of school and Madrasah have learnt with an enjoyable environment. \"', '92.jpg', 'active', '<p><img src=\"/photos/2/127599637_714498599502763_7677125848011582721_n.jpg\" alt=\"\" width=\"477\" height=\"228\" /> &nbsp;<img src=\"/photos/2/127623919_714498626169427_343734164988698077_n.jpg\" alt=\"\" width=\"362\" height=\"227\" /></p>\r\n<p><img src=\"/photos/2/127712682_714498652836091_4938441021140878205_n.jpg\" alt=\"\" width=\"476\" height=\"229\" /> &nbsp;<img src=\"/photos/2/126838090_714498689502754_1320380192376472740_n.jpg\" alt=\"\" width=\"486\" height=\"228\" /></p>', '2020-11-25 05:00:00', '2020-11-30 16:39:52'),
(93, 1, 'Visiting Water Network Distribution(WDN) point and observing World Chorldren\'s Day', 'Today, 25th November, 2020, Mr. Shah Rezwan Hayat, Honorable Refugee Relief and Repatriation Commissioner (RRRC), Cox’s Bazar visited Water Network Distribution(WDN) point in Camp 7 under NGOF-UNICEF Project.During the visit, modalities of WDN was briefed by Mr. Mosarraf Hossain, Project Coordinator of NGO Forum for Public Health. At that time, all of the CICs of camp 2-west, 2-east, camp-6 and Camp 7 and the officials of RRRC from Cox’s Bazar office were present in the visit as well. In addition, World Children\'s Day has been observed in Camp 6 at the same day. Besides,Mr. Md.Musfiqul Alam Halim, CIC of Camp-6 has inaugurated a FSM in Camp 6 and also visited the working area of NGO Forum as well. On the other hand, yesterday 24th November, 2020- World Toilet Day was observed in camp-7 in the presence of the CIC, Md, Nazmul Hoque Sumon.', '93.jpg', 'active', '<p><img src=\"/photos/2/127588638_714697829482840_8666222966764832158_o.jpg\" alt=\"\" width=\"437\" height=\"339\" /> &nbsp;<img src=\"/photos/2/127871167_714698346149455_8037664093635724805_o.jpg\" alt=\"\" width=\"453\" height=\"340\" /></p>', '2020-11-25 05:00:00', '2020-11-30 16:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `all_programmes`
--

CREATE TABLE `all_programmes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `programme_category_id` int(11) NOT NULL,
  `programme_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `programme_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ck_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_programmes`
--

INSERT INTO `all_programmes` (`id`, `programme_category_id`, `programme_title`, `programme_image`, `image_description`, `ck_description`, `created_at`, `updated_at`) VALUES
(17, 2, 'Community Mobilization', '17.jpg', 'The priority concern of NGO Forum is to create awareness among community people to change the behavioral pattern related to basic WatSan and hygiene practices. NGO Forum realizes that it is a challenge to change people’s long practiced behavior. But it has been proved that Community Mobilization held the potential to create a permanent impact in the target areas. Realizing this NGO Forum facilitates a wide range of Community Mobilization activities through its partners since it believes that sustainable WatSan promotion can only be possible if changes come in people’s knowledge, attitude and practice (KAP).', NULL, '2020-01-21 14:48:38', '2020-01-21 14:48:38'),
(19, 2, 'Development Communication', '19.jpg', 'Development communication has already been recognized one of the most important and central issue of the development process. The main aspect of development communication is communication for development. In this line the main objective of the IEC and BCC materials are to provide information, creating awareness and to motivate in practicing a new habit and help enhancing the skill thus being positive changes in the traditional/ongoing practices of the community people.', NULL, '2020-01-21 14:51:18', '2020-01-21 14:51:19'),
(20, 4, 'Promoting Governance and Human Rights', '20.jpg', 'In recent times, NGO Forum has implemented several governance focused projects creating space for the community people to speak out for its demands and engage with participatory planning process of relevant LGIs. In 2017, NGO Forum completed the implementation of such a people centric intervention that addressed human rights of the socially excluded extreme poor and marginalized population in terms of their access to safe drinking water, primary healthcare, agriculture and social safety net services. Equitable allocation of the available public resources through participatory planning has been the critical issue here. A greater way for community people’s engagement with service providing institutions and creating the opportunity for participatory monitoring of basic service delivery by target communities were addressed through the intervention.', NULL, '2020-01-21 14:58:27', '2020-01-21 14:58:28'),
(25, 7, 'Climate Change', '25.jpg', 'The 2016 Monsoon season started on 22 July 2016 and the impact of the monsoon increased over the following weeks. An estimated 3.7 million people across 19 districts of Bangladesh were affected by the monsoon-induced floods. Seven thousand four hundred people sought refuge in 69 flood shelters and education institutions. The official estimates indicated that at least 250,000 houses had been destroyed or damaged. Riverbank erosion resulted in a large number of houses and homesteads getting washed away. 16,770 houses and homesteads were reported completely lost with a further 65,156 partially damaged by erosion.', NULL, '2020-01-21 15:11:05', '2020-01-21 15:11:06'),
(28, 1, 'Safe Water Supply', '28.jpg', 'Safe drinking water scarcity has been increasing in Bangladesh alarmingly. Due to rapidly growing population, declining of groundwater table, Arsenic contamination, saline intrusion in coastal belt, surface water pollution, etc are major causes of this scarcity. Therefore, people have to collect drinking water from distant places and use to spend a significant amount of time for collecting drinking water. From the commitment of NGO Forum to serve the people, especially disadvantaged and unserved people, appropriate water technologies have been promoted. Focusing on groundwater, surface water and rain-water based options including with some treatment processes, NGO Forum has promoted different types of water facilities to ensure safe water as per the need, availability of water sources and context specific requirements. The major activities were surface water treatment, establishing water distribution networks, mini piped water supply, installation of deep tube well, Community Based Rain water harvesting, Reverse Osmosis, construction of ring wells etc. NGO Forum offered the following water supply technologies as alternative water supply options to address the needs of communities at different geo-physical and hydro-geological context.', '<p><strong>1. Water Distribution Network Systems </strong></p>\r\n<p>The solar-powered safe water system has been established by NGO Forum in di&shy;fferent settings to supply safe, clean drinking water to Rohingya refugees living at Cox&rsquo;s Bazar. The improved water networks are completely solar powered with green and non-polluting technologies in order to reduce energy costs and fuel emissions. The safe water systems run entirely on electricity which is generated through solar panels. Motorized pumps draw water from newly-installed two 95,000 liters, one 30,000 liters, one 20,000 liters and one 10,000 liters chlorinated water tanks which ensured to provide at least 20 liters of safe and clean water to every single refugee on a daily basis. Chlorinating water helps in maintaining safe water and eliminates any risk of the spread of diseases. Then the water is supplied to collective taps strategically installed throughout the blocks. These new systems improved the daily supply of safe, clean drinking water.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>2. Surface Water Treatment Plant</strong></p>\r\n<p>Surface water treatment plant through Solar system A prospective option for development of surface water-based water supply system is the construction of community type Slow Sand Filters system. The technology with very high efficiency in turbidity and bacterial removal. It has received preference as an alternative water supply system for medium size settlements in arsenic and saline affected areas. In this very simple process, raw water from pond is pumped up from a pond; the turbidity gets down through the roughing filter and then discharged into the filtration unit. The water is filtered and then collected in a clear water reservoir by an under-drainage system. The main precondition is to preserve pond water from any sorts of external pollution or contamination.</p>\r\n<p>A surface water treatment plant has been constructed which treated water through the Reverse Osmosis (RO) treatment process. In the reporting period, 3 treatment plants have been installed in di&shy;erent capacities of 30,000 liters, 20,000 liters and 10,000 liters which cover a total of 1337 population. NGO Forum also conducted the water quality testing on a regular basis including FRC, pH, Cl, DO, TDS, Salinity, Resistivity, and Electrical Conductivity to ensure the quality of the water.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>3. Rain-water Harvesting System</strong></p>\r\n<p>Rainwater Harvesting System is something that simply collects the rain which falls onto roofs, then stores it in a tank on over ground or underground and ensures uses over the year round. &nbsp;Rainwater harvesting system has 3 basic units, the catchment area (like corrugated roof top), supporting collection system (gutter and collection pipe) and Storage tank, made of ferro-cement, burned clay (motka), brick wall etc. The collection pipe has an exit way beyond the connection with storage tank to let the first flush flow away. The down pipe has net to bar mosquitoes, flies and dirt from entering into the storage tank. There is an end plug to stop flush discharge to enter water into the storage tank after flushing. In many rainwater harvesting system an additional filtration unit is added on the top of the tank to ensure bacteria free water, sourced from catchment area.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>4. Pond Sand Filter ( Slow Sand Filter) </strong></p>\r\n<p>A prospective and low-cost option for development of surface water-based water supply system is the construction of community type Slow Sand Filters commonly known as PSF. The PSF is a low-cost technology with high efficiency in turbidity and bacterial removal. It has received preference as an alternative water supply system for medium size settlements in arsenic affected areas. In this very simple process, raw water from pond is pumped up from a pond; the turbidity gets down through the roughing filter and then discharged into the filtration unit. The water is filtered and then collected in a clear water reservoir by an under-drainage system. The main precondition is to preserve pond water from any sorts of external pollution or contamination.</p>\r\n<p>&nbsp;</p>\r\n<p>The horizontal roughing filter is divided into 3 parts: inlet tank, gravel zone and outlet tank. The gravel zone consists of 3 chambers loaded by different size of gravel (5-15 mm). The Sand Filter bed should be composed of 0.22 &ndash; 0.35 mm fine sand with a thickness of 60 to 120 cm. There is also a layer of coarse aggregate below the fine sand to support the sand against washing out through under drainage system. The uniformity coefficient of sand should be from 2 to 3, which is indicated as well sorted sand grains. The size of the gravel zone is 5-15 mm. On average the operating period of a PSF between cleaning is usually two months, after which the sand in the bed needs to be cleaned and replaced. Iron content exceeding 5 mg/l will require treatment using Iron Removal Unit (IRU). Dissolved iron in water is converted into insoluble ferric form in contact with air. This form will be removed by settling in the sedimentation tank and remaining by the filtration through sand filter.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>5. Ring-well / Dug-well</strong></p>\r\n<p>The flow in a dug well is actuated by lowering of water table in the well due to withdrawal of water. The water of the dug well has been found to be free from dissolved arsenic and iron even in locations where shallow tubewells are contaminated. Dug wells are feasible in areas with stable soil layer at the top (a clay layer is preferable) and presence of sandy layer within 9 to 12 m.</p>\r\n<p>&nbsp;</p>\r\n<p>For construction by manual digging, the wells should be at least 1.2 meters in diameter. Large diameter wells may be constructed for community water supplies. The depth of the well is dependent on the depth of the water table and its</p>\r\n<p>&nbsp;</p>\r\n<p><strong>6. Shallow Tubewell</strong></p>\r\n<p>Shallow hand tubewell (STW) is the most widely used low cost tube-well technology in Bangladesh that operates in suction mode. STW generally consists of no. 6 pump head with 38.0 mm (1.5 inch) diameter well pipes and filters. The foot valve and piston assembly are located into the pump head which is mounted at top of the ground level. This Suction Mode hand tubewell lift water by creating vacuum within the cylinder of the pump by raising the piston and allowing water to enter into the cylinder to fill-up the vacuum. This pump can lift water when groundwater table is within 7.5 m from the ground surface. Where aquifer formation consists of very fine sand, artificial sand packing is required around the screen of the tubewell which is called shrouding or gravel packing that increases the yield of the tubewell and prevents entry of fine sand into the screen.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>7. Deep Tubewell/ Deep-set Pump</strong></p>\r\n<p>Deep hand tubewell (DTW) also operates in suction mode to withdraw groundwater from the deep aquifer where potentiometric surface of groundwater table exists within 7.5 m below ground surface. The deep aquifer is separated from the overlying aquifers generally by one or more impermeable or leaky permeable clay layers of varied thickness. The depths of the deep aquifers are generally more than 250 in the basin part. This water bearing zone comprises with medium to coarse sand in places inter-bedded with fine sand, silt and clay.</p>\r\n<p>The term of deep aquifer is used in a number of ways depending on the target of its use. Considering geology and hydro-stratigraphy, it may be defined as deeper aquifer (Holocene/Late Pleistocene) separated by impermeable or leaky clay/silty clay layer from the upper aquifers. The depth of deep aquifers varies depending on geology and depositional environment of the sediment. Where the deep aquifer is separated from the shallow aquifer by substantially thick (&gt;10m) impervious layer, the aquifer water can sustainably be drawn for drinking purpose. The deep aquifers in Bangladesh have been found to be relatively free from arsenic contamination and in coastal belt generally safe from salinity too. DTW were selected in areas where deep aquifer is separated from arsenic contaminated and saline affected upper aquifers by substantially thick impervious layer. The annular space of the vertically straight bore holes of the DTWs were sealed at the level of impermeable strata.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>8. Piped water supply:</strong> Piped water supply system is running water supply system in rural Bangladesh using both STW and DTW as well as treated pond water for clustered rural settlements. In respect of convenience in collection and use, only piped water can compete with existing system of tubewell water supply. Good numbers of standposts with water delivery taps are connected for group of households upto kilometer distances.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>9. Arsenic iron removal plant:</strong> Arsenic-iron removal plants (AIRP) is a relatively inexpensive way of removing/reducing arsenic content from groundwater for access to safer drinking water. Different options are provisionally certified by Bangladesh Council of Scientific and Industrial Research (BCSIR) of which most are household basis and one is community based. These can be selected as an ultimate option particularly where tubewell and Dug well is not feasible. Filter media needs to be changed after the media being clogged.</p>\r\n<p>Chemical processes that may influence AIRP performance are iron and arsenic oxidation, arsenic co-precipitation with iron, multiple iron additions, interference by organics, and iron crystallization. Overall, AIRPs were shown to possess considerable promise for use in areas with high natural iron where users are concerned about arsenic and iron in their drinking water. However the performance of AIRP is influenced by arsenic speciation, oxidant type, point of oxidant application etc.</p>\r\n<p>Dual platform tubewell both STW and DTW are useful in flood-prone areas for using water options in the dry and flood seasons as well as ensuring supply during heavy flood. One platform is constructed about 1.0 to 1.5 m high which is thus free from flood threats and can be used during flood seasons and another platform is at homestead land level which is being used in the dry season. An elbow pipe has been connected from the main boring pipe of the lower platform to the higher platform. This is thus an innovative system for the char, flood plain and low elevated coastal plain areas and highly context specific. During flood seasons, the head of the tubewell will be set with the pipe of high platform to keep the tubewell free from flood water and surface pollutants. This technology is also useful for coastal areas to protect quality of water during storm surges and waterlogged haor areas.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>10. Desalinization plant:</strong> In the late 1960s, reverse osmosis (RO) was developed for desalting saline water supplies. This process is based on the principal of osmosis and requires a membrane barrier to separate salts from water. Because RO technology required considerably less energy to operate than distillation, it is considered to be the technology that would make desalination much more attainable to the world&rsquo;s saline prone water scarce areas.</p>\r\n<p>Desalination by RO requires the use of an osmotic membrane (allows water to pass through it at much higher rates than dissolved salts). Osmotic membranes occur naturally in living organisms everywhere. The osmotic membrane also is referred to as a semi-permeable membrane because of its capability to allow some constituents to pass through it while holding back others. In the RO desalination process, a pressure greater than the osmotic pressure applied to the saline water will cause fresh water to flow through the membrane while holding back the salts.</p>\r\n<p>Saline water can be drawn from a surface water supply, a beach header-lateral face well system or a tubewell. Typically, groundwater is preferred because it provides a low turbidity feedwater requiring less pretreatment. Shallow groundwater of the coastal belt with moderate salinity concentration (EC 5000-6000 &micro;S/cm) are using as raw water for desalinization plants.</p>\r\n<p>Artificial recharge: Managed Aquifer Recharge (MAR) i.e. the augmentation of infiltration of treated safe and fresh surface water and harvested rain water into groundwater by different technologies is useful for aquifers subject to declining water levels, salinity encroachment etc. To meet-up the food security of huge population, Bangladesh became the world&rsquo;s fourth biggest rice-producing country (Scott and Sharma, 2009 and IRRI, 2010), but unavailability of adequate water is a common phenomenon in the north-western part of the country mainly during dry period. The agro-based drought-prone north-western part of Bangladesh is well-known as &lsquo;Barind Area&rsquo; dominated by uplifted Pleistocene Terraces. To support the irrigation demand, use of groundwater has been increased since years. At the same time the hydrogeological complexity, meteorological variability and climatic factors influence to increase the stress on this resource significantly. To combat the situation and explore the potential of MAR, a pilot project was undertaken in the Barind area installing recharge wells and using rainwater as source of recharge water. The study considered assessment of aquifer condition, groundwater quality, water level trend and recharge potentiality using primary and secondary data. In the study area, permanent lowering of ground water table was observed due to excessive withdrawal of groundwater in comparison to inadequate groundwater recharge during dry irrigation period. After application of MAR technique, ground water table started to raise in monsoon above the minimum depth to water table of previous years with the impact of artificial recharge. Therefore, the MAR, as an artificial groundwater recharge process, can be used as the potential groundwater recharge through rainwater in the drought prone area to improve groundwater conditions. Authorization for MAR should be granted only if the hydro-geological situation environmental condition and the recharge-water quality permit injection, percolation or infiltration of water taking into account all other relevant aspects, including ecological ones.</p>', '2020-12-01 05:56:14', '2020-12-01 05:56:15'),
(29, 1, 'Hygienic Sanitation', '29.jpg', 'NGO Forum has extensively worked on ensuring the adequate and hygienic sanitation services to prevent communicable diseases and epidemics while ensuring good health and dignity. Even though the rate of latrine users has increased still coverage on Total Sanitation is not up to the mark. The situation in the hard-to-reach areas because of its geophysical realities is fragile in compare to plain land. In this regard, besides promotional activities, NGO Forum has taken initiatives in two ways to improve the sanitation condition, one is distribution of latrines and another is establishment of Village Sanitation Centre (VSCs). The Forum provides different hardware supports to the community people through VSCs and makes availability of latrines, especially low-cost and appropriate sanitary latrines among the target people. NGO Forum promoted the following sanitation technologies to increase the sanitation.', '<ul>\r\n<li>Pit Latrine: Pit latrines usually consist of a single pit covered by a slab with a drop hole and a superstructure. The slab made of wood (sometimes covered with mud) or reinforced concrete. Concrete made rings are generally used to cover the drop hole walls. The superstructure provides shelter and privacy for the user. Basic improvements include, a hygienic self-draining floor made of smooth, durable material and with raised footrests, a floor raised at least 0.15 m above ground level, to prevent flooding, an adequate foundation, to prevent damage of the slab and superstructure etc.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Ventilated Improved Pit (VIP) latrines are designed to reduce bad odors and insect proliferation. A VIP latrine differs from a traditional latrine by having a vent pipe that is covered with a fly screen. Wind blowing across the top of the vent pipe creates a flow of air which draws out odors from the pit. As a result, fresh air is drawn into the pit through the drop hole and the superstructure is kept free of smells. Pit latrines have been constructed in all unions under PWASH project.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Raised pit latrine: The most common solution for excreta disposal in areas of high water table as well as in flood prone areas is to build raised pit latrines. These can be in the form of simple pit latrines or VIP latrines in which the pit is built upwards above ground level using bricks, blocks, stone, concrete rings, corrugated-iron culverts or earth-covered bamboo or wood reinforced mounds. To prevent contamination of groundwater, the bottom of the pit should be sufficiently above the maximum groundwater table.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Sealed pit: Groundwater contamination can also be prevented if the disposal pit or tank is fully lined and sealed, so that the contents are unable to infiltrate into the surrounding ground. This can be done using locally available materials such as concrete, cement blocks, bricks, plastic tanks and concrete or metal culvert rings. The construction of fully lined pits is expensive and time-consuming, however, is likely to be impractical where family latrines are desired.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Floating latrines: Floating latrines are useful in flood prone and waterlogged areas and generally usable during flooding. Floating latrines are designed so that feces fall directly into a river or into floodwaters. The base of the latrine superstructure is commonly made from timber/bamboo so that it floats like a raft. A number of large buckets/containers or barrels with squatting slabs of some sort over the top can be set up so people can defecate in them. A safe system of bucket collection and final disposal of excreta is essential to have minimal negative impacts.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Eco-san latrine: Eco-san (ecological sanitation) latrines are used in areas of shallow groundwater table and water scarcity areas. These normally consist of two chambers and are raised above the ground to facilitate easy emptying. One chamber is used until it is full, at which point it is sealed and the second chamber is used. If the contents of the first are left to stand for 1-2 years the waste will be relatively safe to handle and the pit can be emptied. Chambers must be sized so that each takes 1-2 years to fill in order to allow the contents of the first to decompose while the second is being used. Once both pits are full the first can then be emptied and used again. The concept of eco-san is built on the idea that human excrement is not a waste, but can be a valuable fertilizer if it is properly treated and composted.</li>\r\n</ul>', '2020-12-01 06:11:40', '2020-12-01 06:11:41'),
(31, 1, 'Faecal Sludge Management', '31.jpg', 'NGO Forum has been implementing improved and sustainable intervention for faecal sludge management in different context in line with the second generation challenges of sanitation as well as to achieve the SDG goal regarding this. Faecal sludge treatment plant has been in operation at Mymensingh City Corporation (MCC) since 2018 to tackle both the generated FS and organic waste with a due attention to exploring co-treatment option. The co-compost plant at MCC has created an opportunity to gain scientific and hands-on knowledge on the technical and operational aspects of co-composting of FS and MOW. The City Corporation Authority has played the central role in realizing their need of FSM and allocated 0.46 acres land at the outskirt of the city corporation area for the co-compost plant. The plant has contributed to safe management and removal of human waste of nearly 2 lakh citizens of the city corporation and contributed to reduce the incidence of water and faecal related diseases.  Besides this, under the humanitarian response program, NGO Forum has constructed different type of faecal sludge treatment technique i.e lime stabilization, Anaerobic Baffle Reactor system, constructed wetland, drying bed  with the capacity of decontaminating faecal waste in refugee settings.', '<p><img src=\"/photos/2/dfg.jpg\" alt=\"\" width=\"571\" height=\"297\" /></p>\r\n<p><strong>Bio- Gas Plant</strong></p>\r\n<p>Bio-gas Sanitation and Cooking facilities</p>\r\n<p>Construction of Bio-gas plant with community kitchen is another faecal sludge treatment technique which contribute to cooking facilities at house hold level. During the reporting period, NGO Forum has successfully established and maintaining biogas plant which has proven solution of manage faecal sludge, reduced volume of dislodging frequency, provided cooking facilities to vulnerable people, reduced fuel and firewood consumptions and contributed to save forestry and environment. In addition to these, the health hazards of women has reduced due to less exposure to smoke.</p>\r\n<p>&nbsp;</p>', '2020-12-01 17:27:17', '2020-12-01 17:27:17'),
(32, 7, 'Emergency Support', '32.jpg', 'NGO Forum for Public Health has been implemented the project titled “Life Saving WASH services for the Amphan cyclone affected people of the selected sub-districts (Upazilas) in Barguna and Patuakhali districts” since July 09, 2020 – November 08, 2020 and successfully completed the project with the financial support by the United Nations Central Emergency Response Fund. In this project period, the working locations were Patharghata upazila under Barguna district and Kalapara upazila under Patuakhali district.', '<p><strong>The expected results of the projects are given below</strong></p>\r\n<p>&nbsp;</p>\r\n<ol>\r\n<li>1,432 people with disabilities with their families (7700 people) are benefited from hygiene promotion session and 300 affected elderly, people with disability and their families (1500 people) are benefited from 300 rehabilitated latrines and handwashing devices.</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<ol>\r\n<li>100,000 affected people reached with key hygiene messages through community level awareness session (on handwashing with soap, menstrual hygiene management, and water safety plan) and message dissemination using mass media channel by cable network and miking (loudspeaker).</li>\r\n</ol>', '2020-12-03 02:38:36', '2020-12-03 02:38:37'),
(33, 7, 'Solid Waste Management', '33.png', 'NGO Forum’s intervention in solid waste management dates back to 2004 when the Forum along with its local partners successfully implemented community- based waste management system covering some wards of Chittagong City Corporation (CCC) in collaboration with CWASA, CCC and CDA. Both solid and liquid waste management was covered in the intervention. NGO Forum’s collaborative research ‘Value at the End of the Sanitation Value-Chain’ also explored potential business opportunities for waste transporters and compost producers in a country where access to sanitation is now widespread but challenges of managing waste remain. With an approximately 5 lacs population, the daily production of solid waste in the Municipality area of Mymensingh is about 120-250 tons where about 30-40% wastes remain unmanaged by the Municipality itself due to its limited resources. To promote effective solid waste management in the municipality area a plan was adopted in collaboration with the Municipality. It has introduced house to house collection system for all the households of Ward no. 11 covering household waste collection to safe disposal under the “Clean City Movement”. The existing disposal practice included open dumping at the main roads resulting in environmental and Public Health hazards of around 15,000 people of the Ward.', '<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">A number of new initiatives were introduced under the pilot scheme especially for primary and secondary collection of wastes, and its disposal. The Ward Council, Ward Disaster Management Committee members and Volunteers selected from the community played the key functions in bringing changes in conventional behavior of present waste management by the residents. The initial challenges lied in educating, motivating and mobilizing the mass towards that change. The Municipality Mayor led the cleaning campaign that set the ground for taking the Clean City Movement forward. Simultaneously they started replacing the prevailing road corner dustbin disposal system with improved and higher capacity of waste collection bins within the low-income and reluctant household premises. Each of the 75 waste bins placed have the capacity of containing 60-65 kgs of wastes covering 8-10 HHs. So far this has helped to avoid dumping household waste in the lanes and main roadsides. It has enabled primary waste collection in a more systematic manner bringing immediate effects to reducing blockage in the drains along the narrow lanes of the Ward. The secondary level waste transportation is done through the use of a 0.5 ton capacity Power Tiller Trolley that disposes the waste in a landfill away from the city area. Previously the Municipality workers typically used wheelbarrow, vans, etc to transfer wastes from the primary points to secondary bins, from where the Municipality trucks transferred those wastes to the final dumping place/landfill. These small sized masonry bins, made by the Municipality lacked the capacity to contain garbage resulting in overflowing and obstruction of drainage system. Water-logging was a constant problem during the monsoon due to this obstruction as well as lack of regular cleaning by the Municipality cleaner. Through the billing system salary of the laborers and supervisors has been ensured. The households are paying a fee of Tk. 30 to 70 which is directly deposited at the Municipality.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">The entire process is led by the Ward Councilor. A billing system for house to house waste collection has been introduced of which the Field Supervisor is in charge of. The process also carefully engaged other relevant government representatives and officials, local NGOs, CBOs and civil society which accelerated the whole initiative. Developing capacities of actors in the new method of waste collection and disposal, motivational activities, health and hygiene practices were carried out at different levels. The sustainability is being sought through facilitating the Municipality in increasing its revenue collection and investment in improved waste collection, treatment, recycling and disposal.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>', '2020-12-03 06:22:27', '2020-12-03 06:22:30');

-- --------------------------------------------------------

--
-- Table structure for table `ataglancecategories`
--

CREATE TABLE `ataglancecategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ataglancecategories`
--

INSERT INTO `ataglancecategories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Programme Intervention Area', '2019-11-29 09:34:32', NULL),
(2, 'Water Supply Support to the Community', '2019-11-29 09:39:59', NULL),
(3, 'Hygienic Sanitation Support to the Community', '2019-11-29 09:40:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ataglances`
--

CREATE TABLE `ataglances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `at_a_glance_category_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ck_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ataglances`
--

INSERT INTO `ataglances` (`id`, `at_a_glance_category_id`, `title`, `amount`, `ck_description`, `created_at`, `updated_at`) VALUES
(6, 1, 'Regional Ofﬁce', '14', NULL, '2019-11-29 10:28:32', NULL),
(7, 1, 'NGO & CBO Involved in Partnership', '857', NULL, '2019-11-29 10:28:54', NULL),
(8, 1, 'Total District', '68', NULL, '2019-11-29 10:29:13', NULL),
(9, 1, 'Total Upazila/City Corporation/Municipality', '455', NULL, '2019-11-29 10:29:26', NULL),
(10, 2, 'Promotion of Safe Water Supply Options', '432,425', NULL, '2019-11-29 10:29:45', NULL),
(11, 1, 'Total Household', '8,243,959', NULL, '2019-11-29 10:30:01', NULL),
(12, 2, 'Water Quality Testing in Laboratory', '146,151 samples', NULL, '2019-11-29 10:30:24', NULL),
(13, 2, 'Tubewell Screening for Arsenic by Field Kits', '576,216 water points', NULL, '2019-11-29 10:30:40', NULL),
(14, 2, 'Programmes Centering Water Safety Plan (WSP)', '14,127 events', NULL, '2019-11-29 10:30:52', NULL),
(15, 3, 'Promotion of Hygienic Sanitation', 'Options  8,474,802', NULL, '2019-11-29 10:31:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bannercategories`
--

CREATE TABLE `bannercategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bannercategories`
--

INSERT INTO `bannercategories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'About Us', '2019-12-14 17:48:10', NULL),
(2, 'palicy banner', '2019-12-14 17:49:28', NULL),
(3, 'network affiliation', '2019-12-14 17:50:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'banner_image.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Safe Water And Sanitation For   Safer Environment', '1.jpg', '2019-12-14 19:06:32', '2019-12-14 19:06:34'),
(2, 'Everyone is living quality life in a healthy society', '2.jpg', '2019-12-14 19:07:30', '2019-12-14 19:07:32'),
(3, 'Ensuring  Access To Safe And Sustainable Water', '3.jpg', '2019-12-14 19:08:29', '2019-12-14 19:08:31'),
(4, 'Contributing To Proverty Alleveation Focusing On Social inclusion', '4.jpg', '2019-12-14 19:09:43', '2019-12-14 19:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_tatile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Salary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deadline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cells_departments`
--

CREATE TABLE `cells_departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cells_departments`
--

INSERT INTO `cells_departments` (`id`, `position_name`, `name`, `position`, `email`, `created_at`, `updated_at`) VALUES
(3, 'Training :', 'Mr.Syed Waliul Islam', 'Head of Training', 'wali@ngof.org', '2019-12-27 16:02:04', NULL),
(4, 'Finance & Accounts :', 'Mr. Paul D\' Costa', 'Senior Manager, Finance & Accounts', 'paul@ngof.org', '2019-12-27 16:08:06', NULL),
(5, 'Research, Monitoring & Evaluation :', 'Mr. Ahasan Habib', 'Head of Research, M&E', 'ahasan@ngof.org', '2019-12-27 16:09:01', NULL),
(6, 'Engineering & Technical :', 'Engr. Md. Toriqul Islam', 'Senior Technical Manager', 'toriqul@ngof.org', '2019-12-27 16:13:32', NULL),
(7, 'Human Resources & Administration :', 'Mr. Iqbal Rabbani', 'Manager, HR & Admin', 'iqbal@ngof.org, hr@ngof.org', '2019-12-27 16:15:37', NULL),
(8, 'Environment & Water Quality Management :', 'Mr. S M Shahidullah', 'Manager, Environment & Water Quality Management', 'shahidullah@ngof.org', '2019-12-27 16:17:16', NULL),
(9, 'Development Communication :', 'Mr. Waresul Haque', 'Manager, Development Communication', 'waresul@ngof.org', '2019-12-27 16:18:31', NULL),
(10, 'Internal Audit :', 'Mr. Injamamaul Haque Ayon', 'Financial Monitoring & Internal Control Officer', 'ayon.audit@ngof.org', '2019-12-27 16:19:38', NULL),
(11, 'Resource Mobilization :', 'Mr. Md.Saiful Islam Sarker', 'Manager, Resource Mobilization', 'saiful@ngof.org', '2019-12-27 16:19:09', NULL),
(12, 'Research, Monitoring & Evaluation :', 'Mr. S. M. Salim Akter', 'Manager-Research, M &amp; E', 'salim@ngof.org', '2020-12-01 06:29:15', '2020-12-01 06:29:42'),
(13, 'Project - Integrity Management in WASAs in BD', 'Mr. Kazi Monir Mosharof', 'Project Focal', 'kazi.monir@ngof.org', '2020-12-01 06:31:13', NULL),
(14, 'Management Information System:', 'Mr. Kazi Tanvir Ahmed', 'MIS Officer', 'tanvir@ngof.org', '2019-12-27 16:20:49', NULL),
(15, 'Logistics & Procurement :', 'Mr. M. K. Anam', 'Logistics & Procurement Officer', 'anam@ngof.org', '2019-12-27 16:20:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `centerdetails`
--

CREATE TABLE `centerdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `center_category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `rates` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `centerdetails`
--

INSERT INTO `centerdetails` (`id`, `center_category_id`, `category_name`, `description`, `capacity`, `rates`, `created_at`, `updated_at`) VALUES
(1, '1', 'Venue', '<p>Conference Hall A/C 4th Floor</p><p>Conference Hall A/C Ground Floor</p>', '<p>30-50  Participants</p> <p>30-50  Participants</p>', '<p>Tk.8,000/- Per day</p> <p>Tk.7,000/- Per day</p>', '2020-01-09 06:00:36', '2020-01-09 06:00:36'),
(3, '1', 'Accommodation', 'Non A/C (Double bed with attached bathroom)', '15', 'Tk.800/ Per Room', '2019-12-04 09:52:40', NULL),
(4, '1', 'Logistic facilities', '<p>Multi-media with screen</p> <p>Computer, Internet</p>\r\n<p>Sound System with Microphone</p><p>Photocopy</p>\r\n<p>Computer printing</p>', '<p>1</p><br><p>1</p>', '<p>Tk.2,000/- Per Day</p>\r\n<p>Tk. 20/- Per Hour </p>\r\n<p>Tk.1500/- Per Day </p>\r\n<p>Tk. 2/- Per Page</p>\r\n<p>Tk. 10/- Per Page</p>', '2020-01-09 06:19:50', '2020-01-09 06:19:50'),
(6, '2', 'Venue', '<p>Conference Hall A/C</p>\r\n<p>Conference Hall Non A/C</p>', '<p>25- 40 Participants</p><p>25- 40 Participants</p>', '<p>Tk. 4,000/- Per Day</p>\r\n<p>Tk. 3,000/- Per Day</p>', '2020-01-09 07:13:05', '2020-01-09 07:13:05'),
(11, '2', 'Accommodation', '<p>A/C Room Single bed with attached bathroom</p>\r\n<p>A/C Room Double bed with attached bathroom</p>\r\n<p>Non A/C Room (Shared bed)</p>', '<p>30-50 persons</p>\r\n<p>30-50 persons</p> \r\n<p>30-50 persons</p>', '<p>Tk. 1,000/- Per Day</p>\r\n<p>Tk. 1,500/- Per Day </p>\r\n<p>Tk. 250/- Per Seat</p>', '2020-01-09 07:00:41', NULL),
(12, '2', 'Logistic facilities', '<p>Multi-media with screen</p> <p>Computer, Internet</p> <p>Sound System with Microphone</p><p>Photocopy</p> <p>Computer printing</p>', '<p>1</p><br><p>1</p>', '<p>Tk.1,500/- Per Day</p> <p>Tk. 20/- Per Hour </p> <p>Tk.1500/- Per Day </p> <p>Tk. 2/- Per Page</p> <p>Tk. 10/- Per Page</p>', '2020-01-09 07:03:59', '2020-01-09 07:03:59'),
(13, '3', 'Venue', '<p>Conference Hall A/C</p>\r\n<p>Conference Hall A/C </p>', '<p>40- 60 Participants</p> <p>25-35 Participants</p>', '<p>Tk.5,000/- Per day </p>\r\n<p>Tk.3,500/- Per day </p>', '2020-01-09 07:13:56', '2020-01-09 07:13:56'),
(14, '3', 'Accommodation', '<p>A/C Single bed with attached bathroom </p>\r\n<p>A/C (Double bed with attached bathroom)</p>\r\n<p>Non A/C Room Single bed with attached bathroom</p>\r\n<p>Non A/C shared (two bed with attached bathroom)</p>\r\n<p>Non A/C shared (three bed with attached bathroom)</p>', '<p>30-50 persons</p><p>30-50 persons</p><p>30-50 persons</p><br><p>30-50 persons</p><br><p>30-50 persons</p>', '<p>Tk.1,000/- Per room/ Per day</p>\r\n<p>Tk.1,500/- Per room/ Per day </p>\r\n<p>Tk.500/- Per room/ Per day </p>\r\n<p>Tk.350 Per day/ per person </p>\r\n<p>Tk.250 Per day /per person </p>', '2020-01-09 07:11:56', '2020-01-09 07:11:56'),
(15, '3', 'Logistic facilities', '<p>Multi-media with screen</p> <p>Sound System with Microphone</p><p>Photocopy</p> <p>Computer printing</p>', '<p>1</p><p>1</p>', '<p>Tk.1,500/- Per day</p>\r\n<p>Tk.1000/- Per Day</p>\r\n<p>Tk. 2/- Per Page</p>\r\n<p>Tk. 10/- Per page</p>', '2020-01-09 07:18:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

CREATE TABLE `centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `centers`
--

INSERT INTO `centers` (`id`, `region`, `person`, `designation`, `address`, `tel_phone`, `number`, `email`, `fax`, `created_at`, `updated_at`) VALUES
(1, 'Training Cell', 'Mr. Syed Waliul Islam', 'Head of Training', 'NGO Forum for Public Health', '880-2-58154273-4', '01715942681, 01815002113', 'wali@ngof.org', '880-2-9141234', '2020-12-01 03:04:17', '2020-12-01 03:04:17'),
(2, 'Barishal', 'Mr. Md. Mostafa Kamal', 'RTC Officer', 'NGO Forum Regional Office & Training Centre - Jakaria Monjil, Shahjahan Chowdhury Sarak Chumatha, (Beside BADC Office)  C&B Road, North Sagardi  Barishal-8200', '64699 (0431)', '01713298523', 'barishal@ngof.org', NULL, '2020-12-01 18:39:50', '2020-12-01 18:39:50'),
(3, 'Bogura', 'Dr. Mohammad Rezwanul Karim', 'Regional Manager', 'NGO Forum for Public Health (Previous Polli Biddyut Office Bhaban) Lichutola, Betgari, Banani, Bogura.', 'Tel: 051-63290', 'Mobile.01712762855, 01713347056', 'bogura@ngof.org', NULL, '2021-02-03 20:05:07', '2021-02-03 20:05:07'),
(4, 'Cumilla', 'Mr. Hashibur Rahman', 'Regional Accountant', 'NGO Forum Regional Office & Training Centre - Imroz Building, 1st Floor, House-03, Section-02  Housing More, Housing Estate, Medical  College road, Cumilla 3500', '68786 (081)', '01713322320', 'cumilla@ngof.org', NULL, '2020-12-01 02:51:51', '2020-12-01 02:51:51'),
(5, 'Chattogram', 'Mr. Md. Anamul Haque', 'RTC Officer', 'NGO Forum Regional Office & Training Centre - ouse No.482, Road No.01, Block-B Chandgaon R/A, Chattogram-4212', '670900 (031)', '01713393516', 'chattogram@ngof.org', NULL, '2020-12-01 18:56:48', '2020-12-01 18:56:48'),
(6, 'Dinajpur', 'Mr. Md. Rashidul Haque', 'Regional Manager', 'NGO Forum Regional Office & Training Centre - 1744/8 Mirzapur (Bus Tarminal Road) Suihari, Dinajpur-5200', '61113 (0531)', '01713341304, 01716434602', 'dinajpur@ngof.org', NULL, '2020-12-06 21:36:13', '2020-12-06 21:36:13'),
(7, 'Faridpur', 'Mr.Md.Monirul Islam', 'Regional Manager', 'NGO Forum Regional Office & Training Centre - Ramkrishna Mission Road, Beside Charkamlapur Primary School,  Faridpur-7800', '64685 (0631)', '01713357466', 'faridpur@ngof.org', NULL, '2020-12-01 18:56:21', '2020-12-01 18:56:21'),
(8, 'Jashore', 'Mr. Md. Monirul Islam', 'Regional Manager', 'NGO Forum Regional Office & Training Centre - Biman Bandar Road, Arabpur  Jashore-7400', '68831 (0421)', '01713346133', 'jashore@ngof.org', NULL, '2020-12-01 02:43:13', '2020-12-01 02:43:13'),
(9, 'Khulna', 'Mr. G.K.M Lutfar Rahim', 'Regional Manager', 'NGO Forum Regional Office & Training Centre - House No.165, Rd. No.11,Sonadanga R/A  Khulna-9100', '720249 (041)', '01713340789, 01711131152', 'khulna@ngof.org', NULL, '2020-12-06 21:37:42', '2020-12-06 21:37:42'),
(10, 'Mymensingh', 'Mr. Md. Rainul Hoque', 'RTC Officer', 'NGO Forum Regional Office & Training Centre - Sainpukur Garden, House# 309/25,  Sugandha R/A, Mashkanda.  Mymensingh-2200', '67216 (091)', '01713349778, 01724864726', 'mymensingh@ngof.org', NULL, '2020-12-06 21:36:51', '2020-12-06 21:36:51'),
(11, 'Rajshahi', 'Mr. Md. Rabiul Haque', 'Regional Manager', 'NGO Forum Regional Office & Training Centre - 367/344, Kazihata (In front of Bangladesh Betar & Mission Hospital), Rajshahi-6100', '773523 (0721)', '01713348306, 01714693266', 'rajshahi@ngof.org', NULL, '2020-12-06 21:42:48', '2020-12-06 21:42:48'),
(12, 'Rangpur', 'Mr. Shah M.A Habib', 'Regional Manager', 'NGO Forum Regional Office & Training Centre - Holding No. 671, Road No. 18, R.K. Road Rangpur-5400', '64456 (0521)', '01713345265,01750044599', 'rangpur@ngof.org', NULL, '2020-12-06 21:43:23', '2020-12-06 21:43:23'),
(13, 'Sylhet', 'Mr. Khandoker Mosiur Rahman', 'Regional Manager', 'NGO Forum Regional Office & Training Centre - House No. 41, Road.No.14, Block No. B  Shahjalal Upashahar, Sylhet-3100', '727725 (0821)', '01713469724', 'sylhet@ngof.org', NULL, '2020-12-01 02:56:00', '2020-12-01 02:56:00'),
(14, 'Tangail', 'Mr. SM Shamim Al Mamun', 'RTC Officer', 'NGO Forum Regional Office & Training Centre - D/1, Abhawa Road, Akurtakur Para, Tangail-1900', '0921-51539', '01713392312', 'tangail@ngof.org', NULL, '2020-12-01 02:56:34', '2020-12-01 02:56:34');

-- --------------------------------------------------------

--
-- Table structure for table `contactoffices`
--

CREATE TABLE `contactoffices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `office_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_link` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'office_image.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactoffices`
--

INSERT INTO `contactoffices` (`id`, `user_id`, `office_location`, `office_phone`, `office_fax`, `office_email`, `office_website`, `name`, `designation`, `phone`, `fax`, `email`, `map_link`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, '4/6, Block - E, Lalmatia, Dhaka-1207,Bangladesh.', '+880-2-58154273-4, +880-2- 8128258-9', '+880-2-9141234', 'ngof@bangla.net', 'www.ngof.org', NULL, NULL, '+880-2-58154273-4, +880-2-58128258-9', '+880-2-9141234', 'ngof@bangla.net', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14607.125005995265!2d90.3672959!3d23.7551788!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8a19083f21fc2dc5!2sNGO%20Forum!5e0!3m2!1sen!2sbd!4v1577421766706!5m2!1sen!2sbd', '1.jpg', '2019-12-27 15:48:35', '2019-12-27 15:48:35');

-- --------------------------------------------------------

--
-- Table structure for table `coxlabs`
--

CREATE TABLE `coxlabs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'coxlab_logo.jpg',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `focal_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `focal_designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `focal_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `focal_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `focal_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coxlabs`
--

INSERT INTO `coxlabs` (`id`, `logo`, `title`, `description`, `name`, `designation`, `phone`, `email`, `location`, `focal_name`, `focal_designation`, `focal_phone`, `focal_email`, `focal_location`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', 'An Extended Service Facilities of WQTL , NGO Forum for Public Health', 'The WQTL also expanded its service facilities through establishing new testing facilities ‘CoxLab’ in Cox’s Bazar. Providing water quality testing services for ensuring safe drinking water through Water Quality Testing Laboratory (WQTL), located at Central Office of NGO Forum at competitive price is one of NGO Forum’s major commitments to the society.', 'Saleh Uddin Mahmud', 'Chemist, CoxLab', '01911 914 055', 'coxlab.ngof@gmail.com', 'Sayeman Pink Pearl, Plot # 71 (3rd Floor) Block – A, Saykat Residential Area  Kolatoli Road, Cox’s Bazar', 'S M Shahidullah', 'Manager, Env. & WQ Management Central Office,', '0197 33 66 139', 'shahidullah@ngof.org', 'NGO Forum for Public Health 3/11, Block-E, Lalmatia, Dhaka -1207,Bangladesh', '2019-12-08 16:07:13', '2019-12-08 16:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `coxlabservices`
--

CREATE TABLE `coxlabservices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coxlabservices`
--

INSERT INTO `coxlabservices` (`id`, `service`, `created_at`, `updated_at`) VALUES
(4, '<p>Sample collection support at field</p>', '2020-01-11 18:38:38', NULL),
(5, '<p>Ice box facilities for collecting samples</p>', '2020-01-11 18:38:49', NULL),
(6, '<p>Connecting to WQTL, NGO Froum, Dhaka</p>', '2020-01-11 18:39:03', NULL),
(7, '<p>Written water sample collection procedure</p>', '2020-01-11 18:39:09', NULL),
(8, '<p>MicroKit related services including orientation</p>', '2020-01-11 18:39:17', NULL),
(9, '<p>Providing testing report within short period of time</p>', '2020-01-11 18:39:23', NULL),
(10, '<p>Training/orientation on sample collection procedures</p>', '2020-01-11 18:39:29', NULL),
(11, '<p>Sample collection containers with appropriate preservatives</p>', '2020-01-11 18:39:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coxlabtestrates`
--

CREATE TABLE `coxlabtestrates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parameters` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coxlabtestrates`
--

INSERT INTO `coxlabtestrates` (`id`, `serial_number`, `parameters`, `method`, `cost`, `created_at`, `updated_at`) VALUES
(1, '1', 'pH', 'pH meter', '118', '2019-12-08 16:37:14', '2019-12-08 16:37:14'),
(2, '2', 'Alkalinity', 'Titrimetric', '176', '2019-12-08 16:49:12', '2019-12-08 16:49:12'),
(3, '3', 'Conductivity', 'Potentiometry', '235', '2019-12-08 16:49:32', '2019-12-08 16:49:32'),
(4, '4', 'Hardness', 'Titrimetric', '294', '2019-12-08 16:48:54', NULL),
(5, '5', 'Salinity', 'Potentiometry', '176', '2020-01-11 18:33:16', NULL),
(6, '6', 'TDS', 'Dried at 180', '412', '2020-01-11 18:33:34', NULL),
(7, '7', 'TS', '353', 'Dried at 103-105', '2020-01-11 18:35:32', NULL),
(8, '8', 'TSS', '4571', 'Dried at 103-105', '2020-01-11 18:35:53', NULL),
(9, '9', 'Turbidity', 'Nephelometric', '176', '2020-01-11 18:36:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `existing_projects`
--

CREATE TABLE `existing_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl_no` int(11) DEFAULT 0,
  `existing_title` varchar(255) DEFAULT NULL,
  `description_one` longtext DEFAULT NULL,
  `existing_period` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `existing_donar` varchar(255) DEFAULT NULL,
  `total_baget` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `existing_description` longtext DEFAULT NULL,
  `existing_image` varchar(255) DEFAULT NULL,
  `existing_details_image` varchar(255) DEFAULT NULL,
  `focal_name` varchar(255) DEFAULT NULL,
  `focal_designation` varchar(255) DEFAULT NULL,
  `focal_phone` varchar(255) DEFAULT NULL,
  `focal_email` varchar(255) DEFAULT NULL,
  `thematic_area` varchar(255) DEFAULT NULL,
  `related_link` varchar(255) DEFAULT NULL,
  `related_document` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `existing_projects`
--

INSERT INTO `existing_projects` (`id`, `sl_no`, `existing_title`, `description_one`, `existing_period`, `year`, `existing_donar`, `total_baget`, `location`, `existing_description`, `existing_image`, `existing_details_image`, `focal_name`, `focal_designation`, `focal_phone`, `focal_email`, `thematic_area`, `related_link`, `related_document`, `created_at`, `updated_at`) VALUES
(2, 2, 'AusBangla Care for Dental Program(ABCD)', 'To provide essential dental care/services for the poor people in schools and slum areas in Dhaka and in Rural areas of Bangladesh.', 'September 2018 - August \'2021', '2018', 'Rotary Club of Dee Why Warringah, Australia,', '4,064,307.00', 'Urban and Rural area of Bangladesh', NULL, NULL, NULL, 'Mr. S. M. Salim Akter', 'Manager-Research, M & E', NULL, 'salim@ngof.org', 'Dental Health', NULL, NULL, '2020-12-01 10:01:16', '2020-12-01 10:01:16'),
(3, 1, 'Resilient, Inclusive & Innovative Cities in Bangladesh Project', '• 20% fecal sludge managed safely in selected areas per year.\r\n• Public-private business driven approach in operation                                                      • 10% Volunteers empowered through skill development.\r\n• Contamination in selected areas’ water bodies and wetlands reduced potentially.', 'July\'18 to Jun\'20', '2018', 'Australian Aid through OXFAM Bangladesh', '14,219,409', 'Mymensingh City', NULL, NULL, NULL, 'Engr. Md. Toriqul Islam', 'Senior Technical Manager', '01712-029554', 'toriqul@ngof.org', 'Solid waste management', NULL, NULL, '2020-12-08 13:55:09', '2020-12-08 13:55:09'),
(4, 3, 'WASH in Health Care Facility-Advocacy Strategy', 'To define the WASH problem and root causes in HCF.', 'Dec\'18 - Jan\'20', '2018', 'IRC, Netherlands', '12,41,431', 'Rangpur, Bhola, Faridpur', NULL, NULL, NULL, 'Mr. Ahasan Habib', 'Head of Research, M&E', '01917232200', 'ahasan@ngof.org', 'Advocacy in WASH', NULL, NULL, '2020-12-02 12:32:19', '2020-12-02 12:32:19'),
(5, 4, 'Improved WASH services to the Myanmer Refuges Population in Ukhiya, Cox\'s Bazar District', 'Improved WASH services for targeted Rohingya people', 'February 2019 - January 2020', '2019', 'UNICEF', '17,12,81,792', 'Cox\'sbazar', NULL, NULL, NULL, 'Md. Mosarraf Hossain', 'Project Coordinator', '01712-003560', 'ngof.ukhia2@gmail.com', 'Humanitarian Response', NULL, NULL, '2020-12-02 11:36:38', '2020-12-02 11:36:38'),
(6, 5, 'Implementation of Community Approaches to Total Sanitation (CATS) in Bangladesh under GoB-UNICEF project', 'To achieve the desired positive public health impact from zero open defecation, use of improved sanitation facilities, safe hygiene behavior for the selected areas of Bangladesh', 'Jan\'19 - Dec\'21', '2019', 'UNICEF', '45,037,963.00', 'Cox\'sbazar', NULL, NULL, NULL, 'Engr. Md. Toriqul Islam', 'Senior Technical Manager', '01712-029554', 'toriqul@ngof.org', 'Humanitarian Response', NULL, NULL, '2020-12-02 12:32:59', '2020-12-02 12:32:59'),
(7, 6, 'Maintaining Access to Safe Water and Sanitation for Rohingyas in Bangladesh', 'The Project seeks to ensure water supply, sanitation, hygiene practices, and waste management in official camps of Nayapara & Kutupalong and theirextensions, focusing on meeting the UNHCR standards of the services.\r\n\r\nThe Project objective is to provide maintenance of sanitation facilities, fecal\r\nsludge and solid waste management and promote alternative renewable\r\nenergy to ensure that sanitation standards are met for the camp population.\r\nThe Project seeks to achieve the following two goals and objectives for each\r\ngoals:\r\n\r\nGoal: Protection and Mixed Solution\r\n\r\nObjective- 1 : Population living in satisfactory conditions of sanitation and\r\n hygiene\r\nOutput 1.1: Community sanitary facilities/ latrines constructed\r\nOutput 1.2: Household sanitary facilities /latrines constructed\r\nObjective-2 : Supply of potable water increased or maintained\r\nOutput 2.1: Water system constructed, expanded and/or upgraded', 'January 2020 - December 2020', '2019', 'UNHCR', '478,378,891', 'Cox\'sbazar', NULL, NULL, NULL, 'Mr. Ataur Rahman', 'Project Coordinator', '01712-029554', 'ngoforum.coxsbazar@gmail.com', 'Humanitarian Response', NULL, NULL, '2020-12-08 13:54:21', '2020-12-08 13:54:21'),
(8, 7, 'Strengthening Pro-Poor and Participatory local Governance in Rangpur City Corporation', '• Service receivers are not enough aware on official procedure for claiming their demand and rights regarding WASH facilities.\r\n• Lack of responsiveness of service providers.\r\n• Insufficient urban facilities service for the pro-poor and marginalized people\r\n• Lack of responsiveness of service providers.\r\n• Insufficient urban facilities service for the pro-poor and marginalized people', 'January 2019 - December 2021', '2019', 'DFID through Manusher Jonno Foundation (MJF)', '2,99,99,575', 'Rangpur City Corporation', NULL, NULL, NULL, 'Mr. S. M. Salim Akter', 'Manager-Research, M & E', '01710936484', 'salim@ngof.org', 'Rights & Governance Project', NULL, NULL, '2020-12-02 12:35:26', '2020-12-02 12:35:26'),
(9, 8, 'Collaborative research: Enhancing Informal risk-sharing and private initiative to mitigate local environmental risks', 'To combine empirical analysis and data collection to understand how a higher level of mitigation to local environmental and health risks can be achieved with individual and community-level efforts to share privately-owned resources in a social group.', 'March 2019 - February 2020', '2019', 'The Trustees of Columbia University in the City of NY, USA', '1,08,97,900', 'Narshingdi, Brammanbaria', NULL, NULL, NULL, 'Mr. Ahasan Habib', 'Head of Research, M&E', '01917232200', 'ahasan@ngof.org', 'Research - Environmental and Health Risk', NULL, NULL, '2020-12-02 12:36:27', '2020-12-02 12:36:27'),
(10, 9, 'Participation and sustainability: experimental evidence from safe water sources in Bangladesh', 'To provide causal evidence regarding the impact of participation in the design, financing and construction of the water source on sustainability.', 'February 2019 - January 2022', '2019', 'FORMAS (Swedish Research Council for sustainable development)', '2,99,98,500', 'Bogra, Gaibandha, Gopalganj, Chandpur', NULL, NULL, NULL, 'Mr. Ahasan Habib', 'Co-Principal Investigator', '01707132200', 'ahasan@ngof.org', 'Safe Driniking Water Supply', NULL, NULL, '2020-12-02 12:23:42', '2020-12-02 12:23:42'),
(12, 10, 'WASH and Protection Support Program for Rohingya Refugee Camps and Host Communities in Cox’s Bazar, Bangladesh', 'To bring vulnerable Rohingya women and girls under safe WASH coverage.  ·to facilitate access of women and girls from identified host communities to safe WASH facilities. ·to facilitate protection of Rohingya women and children from immediate and long-term effects of refugee crisis.', 'July 2019 - July 2020', NULL, 'Association for Aid and Relief, Japan (AAR Japan)', '12,090,415', 'Cox’s Bazar, Bangladesh', NULL, NULL, NULL, 'S.M. Shahidullah', 'Manager, Environment & Water Quality Management', '01713366139', 'shahidullah@ngof.org', NULL, NULL, NULL, '2020-12-08 14:01:44', '2020-12-08 14:01:44'),
(13, 11, 'Improved WASH services to the Host Community Population in Ukhiya, Cox\'s Bazar District', 'Improved WASH services for targeted Rohingya people', 'May 2019 - May 2020', NULL, 'UNICEF', '17,12,81,792', 'Cox\'s Bazar', NULL, NULL, NULL, 'Engr. Md. Toriqul Islam', 'Senior Technical Manager', NULL, 'toriqul@ngof.org', NULL, NULL, NULL, '2020-12-01 13:04:38', '2020-12-01 13:04:38'),
(14, 12, 'Implementation of Cox’s Bazar WASH Programme following Community Approaches to Total Sanitation (CATS) and Promotion of Water Safety Plans under GoB-UNICEF Project (Ukhiya Upazila)', 'To achieve the desired positive public health impact from zero open defecation, use of improved sanitation facilities, safe hygiene behavior for the selected areas of Bangladesh', 'September 2019 - October 2021', NULL, 'UNICEF and DFID', '2,04,21,738', 'Ukhiya, Cox\'s Bazar', NULL, NULL, NULL, 'Engr. Md.Toriqul Islam', 'Senior Technical Manager', NULL, 'toriqul@ngof.org', NULL, NULL, NULL, '2020-12-01 13:05:41', '2020-12-01 13:05:41'),
(15, 13, 'Implementation of Cox’s Bazar WASH Programme following Community Approaches to Total Sanitation (CATS) and Promotion of Water Safety Plans under GoB-UNICEF project (Asharayan Project)', 'GoB-UNICEF project (Asharayan Project)', 'September 2019 - October 2021', NULL, 'UNICEF and DFID', '2,94,73,228', 'Cox\'s Bazar', NULL, NULL, NULL, 'Engr. Md. Toriqul Islam', 'Senior Technical Manager', NULL, 'toriqul@ngof.org', NULL, NULL, NULL, '2020-12-01 09:49:20', NULL),
(16, 14, 'Integrity Management in WASAs in Bangladesh', 'Improved levels of integrity in KWASA and CWASA\r\nIntroduction of IM project for RWASA', 'January 2020 - December 2020', NULL, 'WIN', '46,44,200', 'Khulna and Chattogram', NULL, NULL, NULL, 'Mr. Kazi Monir Mosharof', 'Project Focal', NULL, 'kazi.monir@ngof.org', NULL, NULL, NULL, '2020-12-01 09:54:28', NULL),
(17, 15, 'Provision for Life Saving WASH Service to Vulnerable Communities at Cox\'s Bazar', 'Provision for Life Saving WASH Service to Vulnerable Communities at Cox\'s Bazar.', 'May- 2020 to  December 2020', NULL, 'Norwegian Church Aid (NCA)', '28,598,800', 'Cox\'s Bazar', NULL, NULL, NULL, 'Mr. Md.Saiful Islam Sarker', 'Project Focal', NULL, 'saiful@ngof.org', NULL, NULL, NULL, '2020-12-01 09:55:55', NULL),
(18, 16, 'Life saving WASH services for the Amphan cyclone affected people of the selected sub-districts in Barguna and Patuakhali districts', 'Life saving WASH services for the Amphan cyclone affected people of the selected sub-districts in Barguna and Patuakhali districts', 'July 2020 to November 2020', NULL, 'UNICEF', '81,91,404', 'Barguna & Patuakhali', NULL, NULL, NULL, 'Engr. Md. Toriqul Islam', 'Senior Technical Manager', NULL, 'toriqul@ngof.org', NULL, NULL, NULL, '2020-12-01 09:57:21', NULL),
(19, 17, 'Solar Irrigation for Agricultural Resilience in South Asia (SoLAR-SA) Project', 'Solar Irrigation for Agricultural Resilience in South Asia (SoLAR-SA) Project', 'June 15 , 2020 to September 30, 2023', NULL, 'IWMI', '10,986,012', 'Some district of North Bengal', NULL, NULL, NULL, 'Mr. Ahasan Habib', 'Research Coordinator & Head of Research, M&E', '01917232200', 'ahasan@ngof.org', NULL, NULL, NULL, '2020-12-08 14:04:04', '2020-12-08 14:04:04'),
(20, 20, 'Role of groundwater in agrarian change in West Bengal and Bangladesh: A comparative Analysis', 'The main purpose of this study is to fill the following two (2) research gaps - \r\n\r\n1. Compare and contrast the trends in agricultural growth and changes in groundwater irrigation in West Bengal and Bangladesh using secondary district-level data from the early 1990s to recent years. \r\n\r\n2.Understand the role of policies and institutions of groundwater irrigation in the agrarian trajectory of these two regions. This data will help to find out a comparative picture of growth in agriculture between Bangladesh and West Bengal before and after the 1990s. This will help us to understand the policy differences that account for differences in agricultural growth in West Bengal and Bangladesh, given their very similar agro-ecological conditions.', 'November 2020 - February 2021', NULL, 'International Water Management Institute - IWMI', NULL, 'Rangpur, Rajshahi, Khulna Division', NULL, NULL, NULL, 'Mr. Ahasan Habib', 'Research Coordinator & Head of Research, M&E', '01917232200', 'ahasan@ngof.org', NULL, NULL, NULL, '2020-12-02 13:43:34', '2020-12-02 13:43:34'),
(21, 19, 'Consulting Services for Arsenic Screening, Training, Orientation and Supervision activities of \"Arsenic Risk Reduction Project (ARRP)', 'Consulting Services for Arsenic Screening, Training, Orientation and Supervision activities of \"Arsenic Risk Reduction Project (ARRP)', '2020 - 2021', NULL, 'Department of Public Health Engineering (DPHE)', NULL, 'not finalized', NULL, NULL, NULL, 'Mr. Ahasan Habib', 'Team Leader and Head of Research, M&E', '01917232200', 'ahasan@ngof.org', NULL, NULL, NULL, '2020-12-02 13:29:06', NULL),
(22, 18, 'Reducing Public Health Risks through Promotion of Integrated WASH Services in Cox\'s Bazar District.', 'Promotion of Integrated WASH Services in Cox\'s Bazar District.', '2020-21', NULL, 'UNICEF', '44,764,110', 'Cox\'s Bazar', NULL, NULL, NULL, 'Engr. Md. Toriqul Islam', 'Senior Technical Manager', '01712-029554', 'toriqul@ngof.org', NULL, NULL, NULL, '2020-12-08 13:58:54', '2020-12-08 13:58:54');

-- --------------------------------------------------------

--
-- Table structure for table `existing_project_file`
--

CREATE TABLE `existing_project_file` (
  `id` int(11) NOT NULL,
  `existing_project_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `existing_project_gallery`
--

CREATE TABLE `existing_project_gallery` (
  `id` int(11) NOT NULL,
  `existing_project_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `foundingagencies`
--

CREATE TABLE `foundingagencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agency_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'agency_logo.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foundingagencies`
--

INSERT INTO `foundingagencies` (`id`, `title`, `agency_logo`, `created_at`, `updated_at`) VALUES
(20, 'sample title', '20.jpg', '2019-12-25 22:26:45', '2019-12-25 22:26:45'),
(21, 'sample title', '21.png', '2019-12-25 22:27:02', '2019-12-25 22:27:03'),
(25, 'sample title', '25.png', '2019-12-25 22:28:42', '2019-12-25 22:28:42'),
(27, 'sample title', '27.png', '2019-12-25 22:29:28', '2019-12-25 22:29:28'),
(29, 'sample title', '29.png', '2019-12-25 22:31:48', '2019-12-25 22:31:48'),
(30, 'sample title', '30.jpg', '2019-12-25 22:32:19', '2019-12-25 22:32:19'),
(42, 'sample title', '42.jpg', '2019-12-25 22:39:42', '2019-12-25 22:39:42'),
(44, 'sample title', '44.png', '2019-12-25 22:40:06', '2019-12-25 22:40:06'),
(54, 'sample title', '54.jpeg', '2019-12-25 22:44:07', '2019-12-25 22:44:07'),
(59, 'sample title', '59.png', '2019-12-25 22:45:42', '2019-12-25 22:45:42'),
(76, 'sample title', '76.jpg', '2019-12-25 22:54:13', '2019-12-25 22:54:13'),
(79, 'sample title', '79.png', '2019-12-25 22:54:54', '2019-12-25 22:54:54'),
(81, 'sample title', '81.png', '2019-12-25 22:55:39', '2019-12-25 22:55:39'),
(94, 'sample title', '94.png', '2019-12-27 17:42:15', '2019-12-27 17:42:15');

-- --------------------------------------------------------

--
-- Table structure for table `globalevents`
--

CREATE TABLE `globalevents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `globalevents`
--

INSERT INTO `globalevents` (`id`, `date`, `manth`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, '22', 'mar', 'World Water Day', 'is an annual UN observance day that highlights the importance of freshwater', '2019-12-11 11:13:04', NULL),
(3, '07', 'apr', 'World Health Day', 'is a global health awareness day celebrated every year under the sponsorship of the WHO', '2019-12-11 11:13:56', NULL),
(4, '05', 'jun', 'World Environment Day', 'is the UN\'s principal vehicle for encouraging awareness for the protection of our environment', '2019-12-11 11:14:43', NULL),
(5, '20', 'jun', 'World Refugee Day', 'is dedicated to raising awareness of the situation of refugees throughout the world', '2019-12-11 11:15:32', NULL),
(6, '16', 'oct', 'World Food Day', 'World Food Day is a day of action dedicated to tackling global hunger', '2019-12-11 11:16:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `humanprojects`
--

CREATE TABLE `humanprojects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_donor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thematic_area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `humanprojects`
--

INSERT INTO `humanprojects` (`id`, `project_name`, `project_duration`, `year`, `project_donor`, `thematic_area`, `created_at`, `updated_at`) VALUES
(1, 'Improved WASH Services to the Rohingya Refugees and Host Communities in Cox\'s Bazar District', '17 January 2018 – 16 January 2019', '2018', 'Unicef-Bangladesh', 'Humanitarian Response', '2019-12-16 08:20:22', '2019-12-16 08:20:22'),
(2, 'Improved WASH Services for the Rohingya Refugees and Host Communities in Cox’s Bazar', 'January 2018 - January 2019', '2018', 'UNICEF', 'Humanitarian Response', '2019-12-16 08:21:12', NULL),
(3, 'Improving WASH Services for Rohingya new arrivals and Host Communities in Ukhia and Teknaf Upazilas of Cox\'s Bazar district', 'July 2017 - December 2017', '2017', 'UNICEF', 'Humanitarian Response', '2019-12-16 08:21:57', NULL),
(4, 'Improving WASH Services for Rohingya new arrivals and Host Communities in Ukhia and Teknaf Upazilas of Cox\'s Bazar district', 'July 2017 - December 2017', '2017', 'UNICEF', 'Humanitarian Response', '2019-12-16 08:21:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `humans`
--

CREATE TABLE `humans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ck_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'human_image.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `humans`
--

INSERT INTO `humans` (`id`, `description`, `ck_description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Since August 25, 2017, almost 750,000 Rohingya refugees have taken shelter in Bangladesh to escape persecution in their own country, bringing the refugee population in Cox\'s Bazar to around 1.1 million. During the reporting years, Bangladesh has had to bear the greatest impact of the worst humanitarian crisis in recent times. Similarly, the adjacent host communities have also become vulnerable with losing of their lands, sudden rise of the living costs, and massive degradation of the environment. NGO Forum has responded significantly with the support from the development partners like UNHCR, UNICEF, AAR Japan, Helvetas Swiss Intercooperation and ensured the quality WASH services including solid waste and fecal sludge management, livelihood support for the vulnerable communities, provided Biogas sanitation and cooking facilities. It has also provided the Protection Supports for Rohingya Refugees and host communities in Cox’s Bazar to mitigate the risks against any kind of violence that may a ect the lives of vulnerable women and children of the Rohingya community. NGO Forum’s intervention for reducing Gender Based Violence (GBV) and Child Protection initiatives in Rohingya Refugee camp area was significant during the reporting period. The major programmatic operations under its protection initiatives were number of awareness raising on protection issues in refugee context and psychosocial support for the identified trauma & necessitous victims, mainly targeting children, adolescents and women.', '<p style=\"text-align: justify;\">This activity was mainly associated with support to cases by providing Psychological First Aid (PFA), Counseling, di erent kinds of therapeutic sessions (Work therapy), Safety planning with the beneficiary and parents as well in case of children, referral support and establish linked the case and concerned service center. The &lsquo;Women Friendly Space&rsquo; and the Child protection sub-sector services through &rsquo;Child Friendly Space&rsquo; complemented in the interventions. NGO Forum has provided dignified sanitation and cooking facilities in the Rohingya camps by installing forty latrine blocks of five to eight cabins, each connected to twelve sets of biogas plants with a kitchen. The biogas plants consist of a biogas reactor, a hydraulic chamber and a slurry pit. This added a high value given the negative impact of wood cutting and use of firewood where risk of harassment, erosion and smoke emission when cooking reduced. In the early periods of Rohingya Refugees arrival in 2017, the emergency requirement was to improve the access of safe water and sanitation facilities of the makeshift settlements. The host community was also provided by better construction practices for tube wells and by the water distribution network. Though water scarcity is acute at Teknaf but NGO Forum has provided chlorinated water through a Piped Water Supply System along with earlier measures to distribute water purification tablets to treatment at household level and promoting good hygiene practices through di erent promotional activities. During the reporting period, di erent types and number of latrines, Bath house, garbage pits, landfill sites, faecal sludge treatment plant, solid waste management facilities and other WASH facilities was constructed including operation &amp; maintenance of di erent facilities. NGO Forum has installed Anaerobic Baed Reactor System to ensure safely managed of Faecal Sludge, which is in operation since 2018 to tackle Faecal Sludge generated from pit latrines and septic tanks. Under the goal of &lsquo;Protection and mixed solutions&rsquo; NGO Forum has ensured that people lives in satisfactory conditions of sanitation and hygiene, Supply of potable water increased or maintained, Peaceful co-existence with local communities. NGO Forum&rsquo;s interventions has also addressed the vulnerable people who were required special attentions like people with disabilities, elderly, pregnant women.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Initiatives taken for Child Protection</strong></p>\r\n<ul>\r\n<li>Reduction of armed violence</li>\r\n<li>Reduction of Child labor and Child marriage</li>\r\n<li>Protect from Sexually abuse</li>\r\n<li>Child protection and information communication technologies</li>\r\n<li>Protect from recruitment by armed force or armed group</li>\r\n<li>Child tra&shy;cking</li>\r\n<li>Care for the child without parent and children with disabilities</li>\r\n<li>Child friendly spaces</li>\r\n<li>Education for Children</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>Initiatives taken for the protection of Aged people</strong></p>\r\n<ul>\r\n<li>Taken them safely in a safe place in the emergency situation</li>\r\n<li>Ensure that they are not hungry</li>\r\n<li>Proper shelter for them</li>\r\n<li>Open space for recreation</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>Initiatives taken for Women Protection</strong></p>\r\n<ul>\r\n<li>Reduction of Gender Based Violence</li>\r\n<li>To enable them to understand the connections between poverty, vulnerability and gender</li>\r\n<li>Orient them to develop strategies and ways of working which would facilitate women&rsquo;s empowerment</li>\r\n<li>Make them understand on how structural discrimination, embedded in social, political, ideological, economic and cultural institutions results in the widespread violation of women&rsquo;s rights</li>\r\n<li>To foster a commitment to the justice and necessity of the rights based approach</li>\r\n<li>Physical protection, security and dignity of person</li>\r\n<li>Basic needs - food, water, healthcare, sanitation, shelter</li>\r\n<li>Economic right to livelihood and to support one&rsquo;s family</li>\r\n<li>Social and cultural rights - access to education and freedom to practice culture etc.</li>\r\n<li>Call to ensure safe water, sanitation for unprivileged people</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>Sani Mart Centre</strong></p>\r\n<p>NGO Forum has involved the MHM volunteers in producing sanitary napkins, conduct MHM sessions, house hold visit and distribute pads among the menstruating girls and women. The centre is equipped of cotton refining machine, autoclave machine, sealing machine, sewing machine, organic cotton for pad, net cotton, gadar.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>Support to existing Sani Marts </strong></p>\r\n<ul>\r\n<li>Training and Refresher training on low cost napkin production &amp; market promotion</li>\r\n<li>Upgradation of solar power system of Sanimart Production Center</li>\r\n<li>Regular Operation &amp; Maintenance of Learning Center &amp; Child Friendly Space Materials (Cloths, Cottons and others) for the production of under garments and napkin</li>\r\n<li>Regular Operation &amp; Maintenance of Sanimart Production Center</li>\r\n</ul>', '1.jpg', '2020-12-01 15:33:21', '2020-12-01 15:33:21');

-- --------------------------------------------------------

--
-- Table structure for table `implementeds`
--

CREATE TABLE `implementeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `project_logo` varchar(255) DEFAULT NULL,
  `short_description` longtext DEFAULT NULL,
  `project_duration` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `project_donor` varchar(255) DEFAULT NULL,
  `thematic_area` varchar(255) DEFAULT NULL,
  `total_baget` varchar(255) DEFAULT NULL,
  `location` longtext DEFAULT NULL,
  `details_image` varchar(255) DEFAULT NULL,
  `details_description` longtext DEFAULT NULL,
  `focal_name` varchar(255) DEFAULT NULL,
  `focal_designation` varchar(255) DEFAULT NULL,
  `focal_phone` varchar(255) DEFAULT NULL,
  `focal_email` varchar(255) DEFAULT NULL,
  `related_link` longtext DEFAULT NULL,
  `related_document` longtext DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `implementeds`
--

INSERT INTO `implementeds` (`id`, `project_name`, `project_logo`, `short_description`, `project_duration`, `year`, `project_donor`, `thematic_area`, `total_baget`, `location`, `details_image`, `details_description`, `focal_name`, `focal_designation`, `focal_phone`, `focal_email`, `related_link`, `related_document`, `created_at`, `updated_at`) VALUES
(1, 'Rehabilitation Programme of Water and Sanitation Support of NGO (RWSS)', NULL, NULL, 'Jul, 1989 to Dec, 1990', '1989', 'MISEREOR-Germany', 'Emergency Support', '10,183,794.00', '154 Upazillas', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-01-19 10:53:42'),
(2, 'Rehabilitation Programme on Water and Sanitation for the Cyclone Hit Peoples of the Coastal Areas', NULL, '', '1991', '1991', 'CAFOD/MISEREOR', 'Emmergency Support', ' 10,001,544.00 ', '', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(3, 'Dewatering of the Salinated and Polluted Ponds in the Coastal Areas', NULL, '', '1991', '1991', 'Australian High Commission', 'Safe Water Supply', ' 872,700.00 ', '', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(4, 'Alternative Low-cost Latrine to Expedite the Water and Sanitation Equation through NGOs', NULL, '', '1991', '1991', 'UNDP', 'Sanitation', ' 280,000.00 ', '', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(5, 'Drinking Water Supply and Latrine Building Programme after Cyclone Catastrophe in Bangladesh', NULL, '', '1991', '1991', 'MISEREOR', 'Emmergency Support', ' 879,832.00 ', '', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(6, 'Integrated Water and Sanitation Programme through NGOs', NULL, '', '1991', '1991', 'CAFOD', 'WatSan', ' 4,074,328.00 ', '', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(7, 'Cyclone & Flood 1991', NULL, 'Dewatering 12729 no of ponds, besides also installed tube wells to ensure supply of drinking water and build latrines to facilitate proper sanitation under normal programme, water purifying tablets and antibiotics distributed. Flood\nDuring August 91 NGO Forum came forward to participated in the relief activities to help flood affected people of the North Bangle', 'April 29,1991', '1991', 'BADC', 'Emergency Support', ' 2,650,000.00 ', '17 Upazilas Under  3 district', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(8, 'Water and Environmental Sanittion Programme for Rohingya Refugees', NULL, '', 'January 1992 - November 1993', '1992', 'OXFAM\n(UK)', 'Humanitarian Response', ' 6,635,560.00 ', '', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(9, 'Rehabilitation Programme on Water and Sanitation for the Cyclone Hit Peoples of the Coastal Areas', NULL, '', 'Januar 1992 -June 1993', '1992', 'MISEREOR', 'Emmergency Support', ' 31,017,420.00 ', '', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(10, 'Water and Sanitation Programme for Rohinghya Refugees', NULL, NULL, 'Jan, 1992-Nov,  1993', '1992', 'OXFAM(UK)', 'Emergency Support', '400,000.00', '1 Upazilla under 1 district', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-24 16:42:40'),
(11, 'Rehabilitation Programme on Water and Sanitation for the Cyclone Hit People of the Coastal Areas', NULL, '', 'Jan,1992 to Jun,1993', '1992', 'MISEREOR & CAFOD', 'Emergency Support', ' 31,429,200.00 ', '6 Districts', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(12, 'Integrated Water and Sanitation Programme through NGOs', NULL, '', 'July 1992 - June 1995', '1992', 'SDC-DANIDA', 'WatSan', ' 41,693,825.00 ', '', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(13, 'Integrated Water and Sanitation Programme for the Coastal Region', NULL, '', 'January 1993 - December 1995', '1993', 'CAFOD -EEC', 'WatSan', ' 20,030,820.00 ', '', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(14, 'Social Mobilization for Sanitation Project', NULL, 'To imporve excreta disposal, personal hygiene practice and use of safe water in order to reduce diarrhoeal diseases and improve the quality of life in the rural areas of Bangladesh', 'January 1993 - December 1995', '1993', 'DPHE-UNICEF', 'Emergency Support', ' 11,699,000.00 ', '7 Upazilla of 5 Districts of Barisal Division', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(15, 'Rehabilitation Programme on Water and Sanitation for the Cyclone Hit People of the Coastal Areas', NULL, '', 'Jul,1994 to Jun,1995', '1994', 'MISEREOR-Germany', 'Emergency Support', ' 5,797,000.00 ', '3 districts', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(16, 'Post-Flood Water and Sanitation Rehabilitation Programme', NULL, '', 'Jan,1999 to Aug 1999', '1999', 'CAFOD-ECHO', 'Emergency Support', ' 40,707,021.00 ', '150 Thana under 46 Districts', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(17, 'Flood Rehabilitation Programme 2000-2001', NULL, '', 'December , 2000 to March, 2001', '2000', 'SDC', 'Emergency Support', ' 10,00,000 ', '6 Upazilla under 1 district', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(18, 'NGO Forum Component under the DANIDA SPS (NFC)', NULL, 'Improve access to safe,sustainable and affordable water and sanitation services and hygiene facilities with increased emphasis on access to those services facilities by the poor.', 'January 2000 - December 2006', '2000', 'DANIDA', 'WatSan', ' 388,920,000.00 ', '240 Villages ', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(19, 'Rain Water Harvesting System?An Action Research Project', NULL, ' Demonstrating the view that Rain Water Harvesting Systems can provide a suitable, safe, socially acceptable and sustainable\nalternative source of water for drinking and cooking in rural Bangladesh for 8-10 months of the year. ', 'May 2000 -December 2003', '2000', 'SDC', 'RWHS', '', 'RAJSHAHI - Bagha, Charghat', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(20, 'Community Based Safe Water Supply & Arsenic Mitigation Project', NULL, 'To mitigate Social and Health problem through awareness of the community and increase the access of safe drinking water in arsenic affected areas.\r\n\r\n1. During the 1st year of the project no mitigation option was provided according to the project implementation strategy. As a result when the test was completed and arsenic contamination of the area was determined people showed the negative attitude the project. 2. As it is an action research project and unicef involved eight partner NGOs to implement the project in different upazilla of different District so that decision on various findings was delayed which sometimes created problem in implementing the project. 3. Budget is limited for safe water options. 4. In the first year of the project Deep Tube well was initially selected as only an option for Babuganj and before finalizing the budget for the 2nd year it was reviewed and other new technologies were selected. So that need assessment and site selection were need to be again for the new water option. As a result several mobilization activities were undertaken which was not planned in this period. Moreover it was more difficult to motivate to use the new technology as they were chosen already deep tubewell. For this reason, scheduled work could not be completed within the project duration (November 2002 to June 2003) as per agreement.', 'June 2001 - January 2004', '2001', 'UNICEF', 'Arsenic Mitigation', '6,744,565.00', '63 Village under Babuganj Upazila, Barisal District', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-12-03 11:59:50'),
(21, 'Sensitization against Arsenic and Training Help Initiative', NULL, 'To increase the community awareness about arsenic contamination problem and its mitigation\n? To motivate the arsenic affected families to adopt water uses for drinking and cooking purpose from the arsenic free safe\nwater sources given the current arsenic contamination of ground water\n? To make the people aware about the low cost alternative options of arsenic free safe water\n? To increase the capacity of the community on operation and maintenance of the alternative water options\n? To check the water quality of the alternate water options ', 'September 2001 - August 2003', '2001', 'Save The Children USA', 'Arsenic Mitigation', '', 'Nasirnagar, Brammanbaria', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(22, 'Risk and Benefits of Arsenic Mitigation Programs in', NULL, 'The objectives of the project is to assess the effectiveness in the field of interventions currently in place in Bangladesh as part of\nthe arsenic mitigation program. The two interventions to be assessed are the three-pitcher filter and the sanitary protected due\nwell ', 'September 2001 - February 2003', '2001', 'AUSAID', 'Arsenic Mitigation', '', 'Natore - Bagatipara, Lalpur', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(23, 'Action Research on Micro-Credit Financing for Water Supply and Sanitation Services', NULL, 'The object6ives of the action research on micro credit financing is to devise,test and fine tune a replicable institutional model for credit for water supply and sanitation services accessible to the poor who are outside the ambit of NGOs and MFIs. 1. Establish the village groups (VGs) and village development committee (VDC) as village institution. replicas relojes 2. Approach to whole community people. 3. Addressing the public health through safe water. 4. High cost alternative water Technologies.0.', 'January 2002 - December 2005', '2002', 'Unit for Po;icy Implementation (UPI)', 'Micro-Credit Financing ', ' 8,106,000.00 ', 'Joypurhat,Satkhira,Chittagong', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(24, 'Action Research on Improved Participatory Approach in Hygiene & Sanitation Promotion', NULL, 'The overall objective of the project is to test, fine tune and develop a replicable participatory approach for hygiene/sanitation promotion and to compare the effectiveness of this approach in terms of sustainable changes to hygiene behaviour and sanitation facilities with the conventional methods.\n', '2002 ? 2005 ', '2002', '', 'Action Research', '', 'Lohagora in Chittagong, Joypurhat and Shyamnagar in Satkhira district.?', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(25, 'Action Research on Community Based Safe Water Supply & Arsenic Mitigation Project', NULL, 'To provide basic information among community people regarding arsenic and its related health hazards to raise their awareness as regards the calamity and how to get arsenic-free water;\n? To determine the extent of arsenic contamination through testing of tube well;\n? Strengthen the capacity of local government for arsenic mitigation in the health and water supply sector; ', 'July 2002 - December 2002', '2002', 'UNICEF', 'Arsenic Mitigation', ' 3,335,488.00 ', '15 Union of Manikganj (Ghior), Jamalpur (Bakshiganj) District', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(26, 'Advancing Sustainable Environmental Health in Rural Areas (EEHCO)', NULL, 'To improve access to safe water and sanitation facilities though the behaviour change activities\nResult:\n? Enhanced capacity of the community though training and orientation\n? Behaviour changed though mass communication campaigning\n? New water points are developed and rehabilitated\nDemand driven sanitation programme established\n\n', 'October 2003 to March 2009', '2003', 'Donor: Water-Aid', 'Rural WASH', ' Budget: 102,860,327 BDT. ', 'Thakurgaon district', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(27, 'Action Research on Alternative Strategies of Environmental Sanitation and Waste Management for Improved Health and Socio-economic Development in Peri-urban Coastal Communities of South Asia', NULL, '? Measure the cost effectiveness of technically, socio-economically, and environmentally innovative and replicable approaches to excreta and solid waste management in low income semi-urban settlements in a part of Asia that has lagged behind in sanitation.\n\n? Measurable improvement in sanitation conditions.\n\n? Scale up the tested approaches through integration of lessons learned in sanitation policies and implementation programmes of local and state governments.\n\n? Strengthen interdisciplinary cooperation and implementation skills of the participating research and civil society institutions through knowledge exchange, cross-regional training and joint documentation of studies, interventions and results.', 'January 2003 ? December 2005', '2003', 'IRC the Netherlands?', 'Action Research', '', 'District. Ward No. 5 of Morelganj Municipality under Bagerhat district.', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(28, 'Rainwater for the School Children (RWSC) in 15 Arsenic Affected Upazilas', NULL, 'To ensure/increase access to safe drinking water for the school-attending children at the school premises in\norder to reduce the risk of health hazards attributable arsenic ingestion through drinking water', 'July 2003 - December 2003', '2003', 'UNICEF', 'RWHS', '', '15 Upazilla under 8 District', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(29, 'School Health & Nutrition (SHN)', NULL, 'The main development objective of the project is to provide safe, affordable and sustainable water, sanitation and hygiene facilities by rural poor community', 'October 2003 - September 2008', '2003', 'Save the Childdren USA', 'School Health & Nutrition (SHN)', ' 4,747,719.00 ', '7 Unions under Nasirnagar Upazila, District Kishorganj ', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(30, 'NGOs Arsenic Information & Support Unit (NAISU)', NULL, 'NASU\'s immediate objectives are to reach out and support small and medium sized NGOs across Bangladesh, who are trying to\nunderstand the issue surrounding arsenic contamination of water supplies and support them to assist their beneficiaries to address\nand tackle the issues. NAISU will also develop and disseminate layman\'s Bangla and English material and training to target\npopulation of no technical community and field workers. ', 'April 2004  - March 2009', '2004', 'WaterAID Bangladesh', 'Information Service', '  5,27,31,700  ', 'All over Bangladesh', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(31, 'Emergency Water Sanitation programme for Flood victims', NULL, 'To be beside the flood victims ensuring access to safe drinking water and environmental sanitation through emergency measures and implementation of post flood rehabilitation activities.', 'Sept to Dec, 2004', '2004', 'UNDP', 'Emergency Support', ' 11,12,640 ', 'Severely flood affected 77 unions of  75 Upazilas under 31 district', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(32, 'The Household Food Security Programme. Livelihood Project. (Jibon-O-Jibika)', NULL, 'To improve access to safe water and sanitation facilities though the behaviour change activities\nResult:\n? Enhanced capacity of the community though training and orientation\n? Behaviour changed though mass communication campaigning\n? New water points are developed and rehabilitated\nDemand driven sanitation programme established\n', 'January 2004 to December 2009', '2004', 'Donor: Save the Children-USA', 'Food Security and WASH', ' 62,085,899.00 ', '3 District, 11 nos. upazilla, 110 nos. Unions', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(33, 'Community-Managed Water and Sanitation Programme in Rural Poor Communities of the Chittagong Hill Tracts (CMWSP) CAFOD support', NULL, 'To reduce the incidence of water borne diseases in the target communities, thereby contributing to an improvement in the public health conditions of the rural poor in the CHT \n', 'June 2004 to December 2007', '2004', 'CAFOD UK', 'Disadvantaged and marginalized groups of Chittagong Hill Tracts', ' 1,348,864.00 ', '3 nos. District,10 nos. Upazilla, 15 nos. Union', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(34, 'Advancing Sustainable Environmental Health (ASEH) ? Urban Project', NULL, 'To improve health, quality of life & livelihoods as well as the overall WatSan situation of poor and disadvantaged Urban communities\n\n', 'April 2004 - March 2009', '2004', 'Donor: Water-Aid', 'Urban WASH', ' 26,536,820.00 ', 'Ward- 17, 18, 19, Slum - 20 under the District Chittagong City Corporation', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(35, 'Advancing Sustainable Environmental Health (ASEH) ? Rural Project', NULL, 'To improve health, quality of life & livelihoods as well as the overall WatSan situation of poor and disadvantaged rural communities ', 'April 2004 - March 2009', '2004', 'Donor: Water-Aid', 'Rural WASH', ' 38,941,448.00 ', '2 Upazilas of Kishorganj and Thakurgaon District', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(36, 'Advancing Sustainable Environmental Health in Urban Areas of Chittagong City (EEHCO)', NULL, 'To improve access to arsenic free drinking water ensure proper health care facilities, make people aware of dangers of arsenic poisoning and provide training in income generation techniques', 'April 2004 to March 2009', '2004', 'Donor: Water-Aid', 'Urban WASH', ' Budget: 60,508,681 BDT. ', 'Chittagong City', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(37, 'Emergency Post Flood Water activities', NULL, 'To be beside the flood victims ensuring access to safe drinking water and environmental sanitation through emergency measures and implementation of post flood rehabilitation activities.', '28 Sept, 2004 to 14 Nov, 2004', '2004', 'UNICEF', 'Emergency Support', ' 27,30,000 ', '120 Upazil of 37 districts', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(38, 'Emergency Post Flood Water and Sanitation response Project-2004', NULL, 'To be beside the flood victims ensuring access to safe drinking water and environmental sanitation through emergency measures and implementation of post flood rehabilitation activities.', ' November 2004 to June 2005', '2004', 'UNICEF', 'Emergency Support', ' 7,19,46,000 ', '105 Upazilas of 32 Districts', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(39, 'Relief and Rehabilitation for Flood Victims', NULL, 'To be beside the flood victims ensuring access to safe drinking water and environmental sanitation through emergency measures and implementation of post flood rehabilitation activities.', 'September to December , 2004', '2004', 'MISEREOR- Germany', 'Emergency Support', ' 27,20,000 ', 'Severely 36 flood affected unions of 31 Upazilla under 16 district', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(40, 'Post-Flood  Rehabilitation Project', NULL, 'To be beside the flood victims ensuring access to safe drinking water and environmental sanitation through emergency measures and implementation of post flood rehabilitation activities.', 'August, 2004 to October, 2004', '2004', 'CARE- Bangladesh', 'Emergency Support', ' 276,000.00 ', '1 Upazilla under 1 district', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(41, 'Tornado-Sadullapur ', NULL, '', 'Mar-05', '2005', 'DANIDA', 'Emergency Support', ' 154,765.00 ', '1 Upazilla under 1 district', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(42, 'Flood Emergency Response Project', NULL, 'To ensure/increase access to safe drinking water and environmental sanitation of the flood affected areas through the implementation of post flood rehabilitation activities. ', 'Aug 2005 to March 2006', '2005', 'DPHE-UNICEF', 'Emergency Support', ' 10,006,425.00 ', '70 Upazilas Under 12 Districts', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(43, 'Association Between Chronic Arsenic Exposure and Nutritional Status Among the Women of Child Bearing Age: A Case Control Study ', NULL, 'Development Objective : To determine the association between chronic arsenic exposure and nutritional status in women of child bearing age (20 ? 45 years). \n\nImmediate Objectives: \n?To determine the prevalence of malnutrition among the study women.\n?To determine the correlation between TBW (Total Body Water) and BMI (Body Mass Index).', 'Aug \'05 - Jul \'09', '2005', 'IAEA-Austria', 'Arsenic Mitigation', ' 11,56,000 ', 'NizamKandi, Upazila ? Kashiani, Dist. - Gopalganj', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(44, 'Resource Centre Development Programme- RCD', NULL, '', 'Oct \' 05 - Dec\'07', '2005', 'IRC -Netherlands', 'Infrastructure  Development', ' 642,177.00 ', '', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(45, 'NGOs Civil Society Networking Project (NCSNP)', NULL, 'Capacity buildup of all relevant stakeholders to play the roles required to promote safe hygiene behavior (SHB), hygienic sanitation (HS) and safe water supply (SWS) with emphasis and disadvantaged groups.\nCapacity of NGO Forum enhanced to operate as a centre of excellence in the WatSan sector.', ' January 2006 - December 2011', '2006', 'DANIDA', 'To improve quality of life of people by introducing sustained hygiene practise and improved safe water supply and sanitation facilities and services with increased access to those by the poor', ' 377,936,638.00 ', '351 nos of Union under 45 District', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(46, 'Case Study on Rural Water Supply & Sanitation Service in Bangladesh.', NULL, '', 'Mar \'06 ? Jun \'06', '2006', 'Streams of Knowledge\nPhilippines', 'Action Research', '', '', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(47, 'Wastewater Agriculture and Sanitation for Poverty Alleviation in Asia (WASPA) Project. ', NULL, 'Research based participatory approach-Wastewater management for use in agriculture ? To improve knowledge generation and sharing, to strengthen the capacity of local stakeholders at various levels, including community members, government agencies, NGOs, community based organisations (CBOs), scientists and practitioners, and to improve collaboration between them, through the establishment of learning alliances (LAs).\n\n? To minimise health risks by reducing urban water pollution through the development and implementation of participatory action plans for appropriate sanitation and wastewater management, in conjunction with improved household and food hygiene.\n\n? To improve the livelihoods of poor farmers through the responsible utilisation of domestic wastewater in agriculture and to reduce the associated health risks to farmers and consumers of this agricultural produce.\n', 'January 2006 ? December 2008', '2006', 'IWMI-\nSri Lanka\n', 'Research in Wast Water management', ' 1,32,47,413 ', 'Rajshahi City Corporation & Paba Upazila', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(48, 'Bangladesh Environmental Technology Verification-Support to Arsenic Mitigation (BETV-SAM)', NULL, 'To contribute to the improvement of livelihoods of urban communities in Bangladesh, though integrated sanitation, waste water management, and agricultural use, for improved agricultural output, reduced environmental pollution, and lessened food chain contamination.  Technology performance monitoring of provisionally verified Arsenic Removal Technologies.', 'March 2006 - September 2009', '2006', 'OCETA(Ontario center for Environmental Technology Advancement) OCETA', 'Arsenic Mitigation', ' 11,724,100.00 ', '5 nos. District, 6 nos. Upazila 15 nos. Union Manikgonj\n\n\n\nJessore\n\n\n\nSylhet\n\n\n\nPabna\n\n\n\n\n\n\n\n\n\nChapaiNawabgonj\n', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(49, 'Deployment of Arsenic Removal Technology (DART) Project.', NULL, 'Improved hygiene and WatSan awareness among the man, woman, and child in the selected urban slums\r\n? Increased access to safe, sustainable, and affordable water and sanitation facilities among the selected urban communities\r\n? Improved and sustainable use, operation and maintenance of the existing sanitation facilities\r\nIncrease participation of the CBOs, local government institutions and other stakeholders for the effective implementation of programme activities in the selected areas\r\n', 'April 2006- March 2009 ', '2006', 'UNICEF', 'Arsenic Mitigation', ' 4,354,199.00 ', '2 District 2 Upazila', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(50, 'Action Research on Health and Social Consequences of Groundwater Arsenic Poisoning in Bangladesh', NULL, 'To mitigate the health and social consequences of arsenic poisoning in an area severely affected with arsenic contamination. ? To facilitate community management aspect of the arsenic mitigation programme.\n? To increase awareness of the people dwelling in arsenic contamination area on hazards of arsenic contamination.\n? To reduce the social stigma attached to arsenicosis patients.\n? To motivate the arsenic affected families (in terms of either water contamination by arsenic or arsenic related health hazards or both) to adapt water uses for drinking and cooking purpose from the arsenic-free safe water sources.\n? To determine the effectiveness of different awareness raising approaches. \n? To provide health service support to the arsenic affected population during the project duration.\n?To provide arsenic-free, safe alternative water option to the arsenic victims.\n? To strengthen the capacity of the community on operation and maintenance of alternative water option.\n', 'April 2006 ? December 2006?', '2006', 'MISEREOR', 'Arsenic Mitigation', '', '11 Villages under Laksham Upazila, Comilla, Jhenidah Sadar Upazila, Faridpur, Jhikargacha, Jessore.?', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(51, 'Sanitation, Hygiene Education & Water Supply in Bangladesh (SHEWB)', NULL, '', 'June \'06 - May \'07', '2006', 'UNICEF', 'Sanitation & Hygine ', '', '', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(52, 'Installation of Safe Water options', NULL, '', 'Aug \'06 - Jan\'07', '2006', 'CARE- Bangladesh', 'Safe Driniking Water Supply', '', '', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(53, 'Implementation of Arsenic-free Safe Water in Selected Villages of Jhikorgacha Upazila in Jessore, Bangladesh (IAFSW)', NULL, 'Specific Objective:\n\nThe specific objectives of the Project are to: (i) improve level of awareness among arsenic affected population regarding the impact of ingestion of arsenic contaminated water; (ii) strengthen capacity and enhance knowledge of partners and societal groups including target communities to deal effectively with arsenic crisis; (iii) increase coverage with fully accessible and functional alternative arsenic-free safe water options; and (iv) create provisions for appropriate diagnosis, management and rehabilitation of arsenicosis patients.', 'January 2007 - December 2007', '2007', 'Japan Embassy ', 'Arsenic Mitigation', '', '20 selected villages of Jhikorgachha upazila in Jessore district.\n', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(54, 'Emergency Flood Response', NULL, 'To reduce the potential negative affects of the disaster (Flood) on the affected population Specific Objectives : To ensure access and availability of safe drinking water for the affected population\n\n	To ensure access and availability of hygienic latrine\n\n	To prevent communicable diseases', 'September 2007-April 2008', '2007', 'Save the Childdren USA', 'Emergency Support', ' 9,462,096.00 ', '62 unions of 15 Upazilas under 4 districts (Shariatpur, Madaripur, Manikgonj and partly Barisal)', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(55, 'Emergency Support to SIDR Affected people on WASH ', NULL, 'To reduce the potential negative affects on the public health aspects of SIDR affected population ', '15 Dec. 2007 to 15 May, 2008', '2007', 'Unicef-Bangladesh', 'Emergency Support', ' 10,780,000.00 ', '3 Upazilas under 2 districts', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(56, 'Emergency and Post Flood Water & Sanitation Activity', NULL, 'General objective: The general objective of the project is;\n\nTo reduce the potential negative affects of the disaster (Flood) on the affected population\n\nSpecific objectives: The specific objectives of the project are;\n\n?	To ensure access and availability of safe drinking water for the affected population\n?	To ensure access and availability of hygienic latrine\n?	To ensure prevention of communicable diseases', 'August 2007- January 2008', '2007', 'MISEREOR- Germany', 'Emergency Support', ' 18, 20,000 ', '8 districts, 11 Upazilas and 23 unions under Bogra, Dhaka, Faridpur, Sylhet and Tangil regions', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(57, 'Emergency Water & Sanitation Programme for Cyclone Hit affected Areas of 3upazilas of Bagerhat District ', NULL, 'Project Goal and Objectives:\n \nGoal				:	To reduce the potential negative affects on the public health aspects of SIDR affected population in three selected upazila\n\nSpecific Objectives\n               \n?	To ensure access and availability of safe drinking water for the affected population\n?	To ensure access and availability of hygienic latrine\n?	To ensure prevention of diarrhoeal diseases', 'Dec. 2007 to March 2008', '2007', 'MISEREOR- Germany', 'Emergency Support', ' 2,850,000.00 ', '3 upazilas of Bagerhat District The Project has been implemented in the severely affected 16 unions under 3 upazilas namely Sarankola, Morelgonj & Mongla of Bagerhat districts in the south-western coastal belt.', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(58, 'Emergency SIDR Response Activities on WASH', NULL, 'To reduce the potential negative affects on the public health aspects of SIDR affected population in five selected upazila.', 'Dec. 2007 - November  2008', '2007', 'Save the Children-USA ', 'Emergency Support', ' 35,205,390.00 ', '5 Upazilas of  Patuakhali (Kalapara, Golachipa) and;  60 Unions under Bagerhat,Borguna, Khulna, Shatkhira and Patuakhli District ', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(59, 'Emergency Post Flood Water & Sanitation', NULL, 'To be beside the flood victims ensuring access to safe drinking water and environmental sanitation through emergency measures and implementation of post flood rehabilitation activities.', 'Sept, 2007 to Jul, 2008', '2007', 'CAFOD-UK', 'Emergency Support', ' 7,000,000.00 ', '57 Unions in 28 Upazila under 20 district', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(60, 'Emergency Post Flood Response ', NULL, '? To ensure access and availability of safe drinking water for the affected population\n? To ensure access and availability of hygienic latrine\n? To ensure prevention of communicable diseases\n', 'Aug , 2007 to Jan, 2008', '2007', 'Save the Childdren USA', 'Emergency Support', ' 1,351,770.00 ', '2 Unions in 2 Upazilas under 1 District', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(61, 'Emergency Flood Response Activities', NULL, '? To ensure access and availability of safe drinking water for the affected population\n? To ensure access and availability of hygienic latrine\n? To ensure prevention of communicable diseases\n', 'Sept 2007 - Dec 2007', '2007', 'Save the Childdren USA', 'Emergency Support', ' 1,820,000.00 ', '23 Unions in 11 Upazilas under 8 District', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(62, 'Human Resource Development  for Sustainable WatSan Project', NULL, '? The development and improvement of capacities of NGOs, local community based organisations, in the private sector and with the local people in the implantation of projects in the field of water and sanitation in Bangladesh\n? The improvement of capacities of partners in the implementation of participatory training and hygiene education\n', 'July 2007 to December 2010', '2007', 'MISEREOR- Germany', 'To improve the overall public health situation in Bangladesh through clean drinking water supply and sanitation facilities ', ' 22,976,800.00 ', 'All over Bangladesh', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(63, 'Decentralization and Local Public Goods : How does allocation of Decision making authority affected provision ? A research project in Bangladesh.', NULL, 'To improve quality of life of people by introducing sustained hygiene practise and improved safe water supply and sanitation facilities and services with increased access to those by the poor\n-------------Immediate objective:\n? Capacity of all relevant stakeholders strengthened to play to roles required to promote safe hygiene behaviour (SHB), hygiene sanitation(HS) and safe water supply (SWS) with emphasise on poor and disadvantaged groups\n? Capacity of NGO Forum enhanced to operate as a centre of excellence in the WatSan Sector       Main Objectives of the research:\n\n# Theory: Determine what allocation of decision-making authority maximizes social welfare in a problem of providing a local public good. It was focused on:\n\n* Compare the outcomes when a central organization such as a NGO, government or private firm, makes all decisions and the community, which will be using public goods, makes all decisions in a dynamic model of interaction between individual agents.\n* Determine what allocation of decision-making authority maximizes for social welfare.\n* Determine how the welfare-maximizing allocation of decision-making authority and outcomes in the case of individual and average attributes of social networks.\n\n# Empirical: Collect original data generated by an organizational experiment to test and revise the theory and distill policy implications. It will:\n\n* Conduct an organizational experiment.\n* Determine which intervention yields the best average outcome.\n* Use the control group to study communities in which collective action occurs in the absence of any intervention\n\n', 'May 2007 to September 2011', '2007', 'Columbia University', 'Research based-Arsenic affected people', ' 32,435,401.00 ', '18 Unions under Gopalganj Sadar Upazila , District Gopalganj', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(64, 'Integrated Community Based Arsenic Mitigation Programme (ICBAMP both 2 Phase)', NULL, '# The general objective of the project is to improve the overall quality of the arsenic groundwater affected communities. \n\n# Arsenic contamination is declared as the national problem in the early 90?s. Due to illiteracy, superstitions and lack of proper information in government and non-government level, the arsenic problem is still a serious crisis at certain rural areas of Bangladesh. It is believed by many rural communities that Arsenic poisoning is a curse of nature or a contagious disease. In most cases the affected people and families are so poor that they cannot even afford to acquire adequate medicines or nutritious food. \n\n# Specific objective of the project is to mitigate the health hazards cause by arsenic groundwater through an integrated approach towards awareness, capacity building and preventive measures. \n\n# From the background of the above given context it can be stated that Arsenic mitigation effort can not be successful unless the problem is addressed in a holistic manner with an active involvement of a wide range of stakeholders ranging from local communities to government bodies including an active participation of the affected communities. \n\n# The project has focused on poverty reduction through escalating the capacity of the communities at different levels to help them. At the same time it provides alternative safe sources of drinking water and assists arsenic affected patients to get appropriate medical treatment ( in close collaboration with government health facilities ) and to regain their economic status. ', 'June 2007 to December 2009 and 2010-2012', '2007', 'European Commission. (75% contribution)\nKatholische Zentralstelle fur Entwicklungshilfe e.V (Misereor Contribution 25%)', 'Arsenic Mitigation', ' 164,310,553.00 ', '160 Union under 25 District # Local NGOs, authorities and health institutions are trained and enabled to combat the problem of arsenic contamination efficiently. \n', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(65, 'Fresh Water Action Network (FAN) Project  ', NULL, 'This project will focus on a community empowerment approach to improve sanitation coverage, which has huge potential to address the deep rooted causes of poverty, inequity and powerlessness. To a large extent the problems of development are due to the crisis of governance and thus empowering citizens to influence their governments to be more transparent, accountable and responsive is of great significance in any strategic approach to achieving the development goals.  ', 'July 2007 - December 2007', '2007', 'FAN-UK', 'Advocacy in WASH', '', '', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(66, 'COLUMBIA UNIVERSITY ARSENIC MITIGATION PROJECT', NULL, 'Objectives:\n\n## The general objectives of this project are to determine what allocation of decision-making authority maximizes for social welfare in a problem of providing local public goods; and\n\n## Collect original data generated by an organizational experiment to test and revise the theory and distill policy implications. In the empirical context, the organizational change, it was taken under an observation that due to a natural disaster, the natural occurrence of high concentrations of arsenic increased in groundwater of Bangladesh. Main Objectives of the research:\n\n# Theory: Determine what allocation of decision-making authority maximizes social welfare in a problem of providing a local public good. It was focused on:\n\n* Compare the outcomes when a central organization such as a NGO, government or private firm, makes all decisions and the community, which will be using public goods, makes all decisions in a dynamic model of interaction between individual agents.\n* Determine what allocation of decision-making authority maximizes for social welfare.\n* Determine how the welfare-maximizing allocation of decision-making authority and outcomes in the case of individual and average attributes of social networks.\n\n# Empirical: Collect original data generated by an organizational experiment to test and revise the theory and distill policy implications. It will:\n\n* Conduct an organizational experiment.\n* Determine which intervention yields the best average outcome.\n* Use the control group to study communities in which collective action occurs in the absence of any intervention\n', 'April 2007 - September 2011', '2007', 'Columbia University', 'Arsenic Mitigation', '', 'Upazila coverage - 3\n\nUnion coverage- 33\n\nVillage coverage- 114\n\nHHs Coverage- 5363', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(67, 'Pilot Project on Safe Water System (SWS): (A Household-based Water Treatment and Safe Storage in Urban High-risk Areas of Bangladesh)', NULL, 'Overall Objective :\n\nTo reduce health affect including diarrhoeal prevalence through introducing Safe Water System as an effective, sustainable and affordable Microbiological treatment options of drinking water in urban and peri urban areas of Bangladesh\n\nSpecific Objectives :\n\n1. Create awareness among the community people in using safe water for drinking purposes.\n\n2. Change the behavior of community people specially hand washing using soap in critical time to improve water and food handling practices.\n\n3. Introduce dilute sodium hypochlorite solution (Clotech) as an effective microbiological treatment option and assess the performance and acceptability.', 'July 2007 - June 2008', '2007', 'WHO', 'Action Research', '', '1 slum of Chittagong City Corporation namely Motijhorna is selected for this project with 300 households.', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(68, 'Water supply support and capacity building of Union Parishad', NULL, 'To improve the quality of life of people by introducing sustained hygiene practices and improved safe water supply and sanitation facilities and services with increased access to those by the poor.\r\n\r\nThe objective of the project is to build the capacity of the Union Parishad to plan and manage water and sanitation projects effectively and efficiently and to increase access to water supply services.\r\n\r\nRESULTS :\r\n\r\n# Union Parishad capacitised for managing any other project properly and be able to procure with maintaining the PPR.\r\n\r\n# Union Parishad able to managed project-related activities like sub-project proposal preparation, financial management, procurement, monitoring, etc.\r\n\r\n# The hardcore poor who are unable to install water points with their own cost can get safe drinking water through the implementation of this project.\r\n\r\n# Improved quality of life by introducing sustainable hygiene practices.\r\n\r\n# Water contaminated disease was reduced.\r\n\r\n# Poverty was decreased.\r\n\r\n# Community awared of safe water and health.\r\n\r\nACHIEVEMENTS :\r\n\r\n# Water Points Installed \r\n# Training for the Union Parishad, Chairman and Members along with facilitating NGO Staffs of 60 Unions up to the date ::\r\n* Project Development and Management\r\n* Training on Financial Management\r\n* Training on Procurement\r\n* Training on Procurement\r\n* Training on Operation and Maintenance for Caretakers', 'May 2008 - December 2011', '2008', 'HYSAWA', 'WASH for hardcore poor', '21,881,040.00', '351 nos of Union under 45 District', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-12-03 12:09:48'),
(69, 'Emergency SIDR Response Activities on WASH (J-O-J Component)', NULL, '', 'May 2008 - November 2008', '2008', 'Save the Children -USA', 'Emergency Support', ' 51,949,420.00 ', '60 Unions under Bagerhat,Borguna, Khulna, Shatkhira and Patuakhli District', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(70, 'Sustainable Arsenic Mitigation Project (SASMIT)', NULL, '# Develop a sustainable option for safe drinking water for rural and disadvantaged community targeting safe aquifers for installation of community hand tubewells.\n\n# Exchange experiences concerning feasibility of mitigation options. Increase global awareness of the problems associated with high groundwater of geogenic origin.', '1st April 2008 to May 2013', '2008', 'Swedish International Development Cooperation Agency (SIDA)', 'Safe Driniking Water Supply', ' 37,758,715.00 ', '1 District, 1 Upazilla, 19 nos of Union', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(71, 'Early Recovery Activities on WASH', NULL, 'To improve access to arsenic free drinking water ensure proper health care facilities, make people aware of dangers of arsenic poisoning and provide training in income generation techniques', 'Jun \'08 - Jan \'09', '2008', 'UNICEF', 'Emmergency Support', ' 17,002,946.00 ', '', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(72, 'Post Flood WatSan Rehabilitation Activities Phase II & III', NULL, 'General Objective\nTo reduce the potential negative affects of the disaster (Flood) on the affected population.\n\nSpecific Objectives\nThe specific objectives of the project are:\n?	To ensure access and availability of safe drinking water for the affected population\n?	To ensure access and availability of hygienic latrine\n?	To ensure prevention of communicable diseases', 'January 2008-July 2008', '2008', 'Save the Children-USA', 'Emergency Support', ' 8,934,860.00 ', 'The Project has been implemented in the severely flood affected areas covering 62 unions under 13 upazilas of 4 districts under Dhaka, Faridpur and Barisal regions of NGO Forum. The districts are Manikgonj, Madaripur, Shariatpur and Barisal. The upazillas are Shavalaya, Harirampur, Daulatpur, Ghior, Shibchar, Madarapur, Janjira, Shariatpur, Naria, Bhedergonj, Gusairhat, Damudya and Muladi. ', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(73, 'Community-Managed Water & Sanitation Programme for Rural Poor of the Chittagong Hill Tracts (CMWSP-CHT)  ~ EU', NULL, 'To Support the development of sustainable community manages and community owned water and sanitation programmed and strengthen the capacity of the staff of local NGOs and members of the community groups, in order to provide and maintain safe water supply and sanitation facilities to encourage behavioural changes in hygiene practices in the underserved rural areas of CHT', 'June 2008 to May 2010', '2008', 'Europian Commission', 'Disadvantaged and marginalized groups of Chittagong Hill Tracts', ' Budget: 118,661,206 BDT. ', '3 nos. District,10 nos. Upazilla, 15 nos. Union', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(74, 'Community-Managed Water & Sanitation Programme for Rural Poor of the Chittagong Hill Tracts (CMWSP-CHT)     by TIDES Foundation, BD', NULL, '? Strengthen the capacity of the staff of partner NGOs and members of the community groups in order to provide and maintain safe water supply, environmental sanitation and encourage behavioural change in hygiene practice\n? Support the development of sustainable community-based management and community owned water and sanitation programme\n? Increase awareness and knowledge of water, sanitation and hygiene situation in the CHT through the dissemination of project learning\n', 'January 2009 - December 2012 ', '2009', 'EC-CAFOD Flora Family Foundation', 'Disadvantaged and marginalized groups of Chittagong Hill Tracts', ' Budget: 13,907,280 BDT. ', '3 District, 6 nos. upazilla, 6 nos. Unions', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(75, 'JOJ-Pilot Project (Char Fashion)', NULL, '? Food availability and purchasing power at the household level will have increased,\n\n? Health and nutrition of pregnant women and children under the age of two will have improved; and\n\n? Target communities and households will be more resilient to shocks that threaten their livelihoods.\n\n', 'Mar \'09 - Jan 2010', '2009', 'Save The Children USA', 'Livelihood', '', 'Charfashion, Bhola', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(76, 'Early Recovery Activities for AILA Response', NULL, 'To improve access to arsenic free drinking water ensure proper health care facilities, make people aware of dangers of arsenic poisoning and provide training in income generation techniques', 'July 2009 - December 2009', '2009', 'UNICEF', 'Emergency Support', ' 17,002,946.00 ', '20 Unions of 7 Upazila of Satkhira, Khulna & Bagherhat District.', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(77, 'Integrated Water and Sanitation Programme for Disadvantaged Off-shore Island People in the Coastal Belt (IWSP-TDH)', NULL, 'Safe & sustainable water supply, environmental sanitation and personal hygiene facilities significantly improved in the selected disadvantaged off-shore island in the coastal belt in adaptation with climate change issues.', 'January 2009 to December 2011', '2009', 'TDH- Netherland', 'WASH for Coastal belt area', ' 59,405,478.00 ', '1 District,1 Upazilla, 5 union', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(78, 'Developing Southern Civil Society Advocacy in Water and Sanitation in Sub-Saharan Africa, South Asia and Central America (GTF)', NULL, 'To increase the capacity of the civil society in Bangladesh to engage in effective dialogue with decision-makers on water and sanitation issues', 'April 2010 to September 2013', '2010', 'Donor: Water-Aid DFID (Governance and Transparency Fund) ', 'Governance and Transparency', ' 16,113,900.00 ', '67 unions of 7 Upazilas under  1 District', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(79, 'Promotion of Water Supply, Sanitation and Hygiene in Hard-to-Reach Areas in Rural Bangladesh', NULL, 'Contribute to the achievement of national goal on WaSH through context-specific & scalable water supply, sanitation & hygiene services in hard-to-reach areas. \r\n\r\nDescription: Keeping its commitments to the MDG targets, NGO Forum for Public Health and Bangladesh Centre for Advanced Studies has been facilitating the implementation of the project ‘Promotion of Water Supply, Sanitation and Hygiene in Hard-to-Reach Areas of Rural Bangladesh’ with the support of Swiss Agency for Development and Cooperation (SDC). The Project is under implementation covering 47 hard-to-reach unions under 5 agro-ecological zones in Bangladesh.', 'Dec 2011toDec 2015', '2011', 'Swiss Agency for Development and Cooperation (SDC)', 'WASH for Hard to reach areas', '35,45,08,526', '47 hard to reach unions from', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-12-03 12:20:22'),
(80, 'Piloting of Data Collection of Hardware of Rural & Urban Water Supply facilities and Sanitation for National MIS (NaMIS) and Monitoring Performance of Rural Public Water Points', NULL, '1. Establish methodology of information collection for National MIS. 2. Review of NaMIS and recommend modification required as per field information.  Donor: JICA', 'October 2012 to April 2013', '2012', 'JICA', 'WatSan Monitoring', ' 8,076,445.00 ', '62 unions from 3 selected districts from 3 division', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(81, 'Integrated humanitarian Assistance Programme for Vulnerable Groups', NULL, 'Safe water supply and sanitation service delivered among the vulnerable and excluded groups including 340000 population.', 'January 2013 - December 2013', '2013', 'ECHO & Muslim Aid UK', 'Humanitarian Response', ' 27,933,655 BDT. ', 'Cox\'sbazar, 340000 population', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(82, 'Value at the end of the Sanitation Value Chain', NULL, 'Business models will be developed and adopted for a low cost, safe method for the collection and processing of faecal sludge (FS) from pit latrines, that can be operated by local entrepreneurs and results in the production of a safe, high quality fertilizer that is desirable to farmers.', 'May 2013 - February 2015', '2013', ':  IRC Netherland and BRAC through \nUniversity of Leeds (UK)\n', 'Solid waste management', ' 63,00,954 BDT. ', '4 (Four) Upazilas of 4 Districts in Bangladesh (Upazila: Fultola, District: Khulna; Upazila: Bhaluka, District: Mymensingh; Upazila: Senbagh, District: Noakhali; and Upazila: Chagolnaiya, District: Feni)', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(83, 'Building a Disaster Resilient Bangladesh (DIPECHO-VII)', NULL, 'To promote standardized DIPECHO urban and rural Community Base Disaster Risk Reduction (CBDRR) models with a focus on inclusion and replication through integration into DRR instruments and development programmes.', 'March 2013 to November 2014.\n\n', '2013', 'ECHO and Oxfam', 'DRR, Climate Change', ' 4,712,544.00 ', 'Dhaka and Sylhet', NULL, '', NULL, '', '', '', NULL, NULL, '', '');
INSERT INTO `implementeds` (`id`, `project_name`, `project_logo`, `short_description`, `project_duration`, `year`, `project_donor`, `thematic_area`, `total_baget`, `location`, `details_image`, `details_description`, `focal_name`, `focal_designation`, `focal_phone`, `focal_email`, `related_link`, `related_document`, `created_at`, `updated_at`) VALUES
(84, 'Community Mobilization and Development of Action Plan for Rural Non-Piped Water supply scheme and Community Awareness Building on Sanitation and Hygiene (BRWSSP) ', NULL, '? To mobilize and capacity building of the Local Government Institutions i.e. Union Parishads, Union Water and Sanitation (WATSAN) Committees, and affected communities to manage the arsenic and/or other water contamination e.g. salinity crisis.\n? To promote sustainable sanitation services with special focus on people still defecating in the open as well as improvement of the quality of coverage for the existing population using unhygienic latrines.\n', 'Dec 2013\nto\nDecember 2016\n', '2013', 'GoB-World Bank and DPHE', 'Solid waste management', ' 9,18,39,984 ', '185 Unions over 14 upazilas from 7 districts', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(85, 'NGO Forum Support to the WSUP 2013-15 Country Programme ', NULL, '? Demonstrate replicable and financially viable water and sanitation service models that reach low income urban consumers\n? Build institutional and service provider capacity, together with supportive policies, which will sustain the improvement process into the future\n? Use evidence from 1 and 2 to mobilize and/or better target finance (household, public, private, Govt., IFI) to fund the service improvement process into the future \n? Measure, research, learn & disseminate\n', 'Jun 2013\nto\nDec 2015\n', '2013', 'Water and Sanitation for the Urban Poor (WSUP), UK', 'WASH in URBAN', ' 55,701,568.00 ', 'Zone 4, 5 & 10 of Dhaka City Corporation,Improved and sustainable water services for 250,000 low income consumers in Dhaka/Chittagong, of which 100,000 will have improved access and 150,000 have improved quality of service ', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(86, 'Enhancing Governance and Capacity of Service Providers and Civil Society in Water Supply and Sanitation Sector', NULL, 'Capacity building of LGIs and civil society for facilitating effective delivery of safe water supply. Donor: European Commission\r\n\r\n\r\nThe overall objective of the Action will be “To contribute to improved Public Health”among the target communities from the six different hard-to-reach geo-physical areas through the reduction of water and excreta-borne diseases, productivity losses and health burden among the target communities and, thereby contributing to an overall improvement in the Public Health conditions of the vulnerable population living in the hard-to-reach areas.\r\n\r\nThe overall objective of the Action will be “To contribute to improved Public Health” among the target communities from the six different hard-to-reach geo-physical areas through the reduction of water- and excreta-borne diseases, productivity losses and health burden among the target communities and, thereby contributing to an overall improvement in the Public Health conditions of the vulnerable population living in the hard-to-reach areas.\r\n\r\nThe specific objective of the Action is to ensure “Good governance in promotion of pro-poor safe and sustainable water supply and sanitation services”. The purpose of the Action will be to provide support to the improved access to sustainable water supply, sanitation and hygiene practices among the un-served and marginalised rural communities living with different geo-physical vulnerabilities. Apart from establishing community-managed and community-owned water and sanitation programmes, the Action will strengthen capacity of the LGIs (LAs), service providers, PSOs (Private Sector Operators) and the members of the community groups and encourage participation, accountability and transparency among the stakeholders to promote effective and efficient service delivery in terms of water supply and sanitation services for the vulnerable poor from the hard-to-reach areas.\r\n\r\nAreas – 59 selected hard-to-reach and poverty-focused unions, from 27 upazilas and 25 districts under 7 administrative divisions \r\n \r\n\r\nSpecific Districts – Panchagar, Lalmonirhat, Gaibandha, Chapai Nawabganj, Rajshahi, Sirajganj, Netrokona, Kishoreganj, Sunamganj, Tangail, Narshingdi, Munshiganj, Rajbari, Faridpur, Kushtia, Chuadanga, Comilla, Noakhali, Satkhira, Patuakhali, Barguna, Khagrachari, Rangamati, Bandarban & Chittagong.', 'Jan2013toDec 2016', '2013', 'European Union', 'WASH Governance', '45,36,33,036', '59 hard to reach unions from 27 upazilas Target 750,000 Population', NULL, '', 'Mr. Shams Rafi', 'Project Coordinator', NULL, NULL, NULL, NULL, '', '2020-12-03 12:28:35'),
(87, 'ECHO Health Care Program (WASH Component)', NULL, 'WASH services delivered to the beneficiaries\nPromotional activities\n', 'Jan-Dec 2014', '2014', 'ECHO & Muslim Aid', 'Humanitarian Response', ' 63,103,555.00 ', 'Cox\'sbazar', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(88, 'Sensitizing the Pro-poor Service Promotion Securing Rights and Governance', NULL, 'to contribute to ?Reduce Peoples? poverty and vulnerability?. While the purpose of this project is to ensure that service delivery institutions are more responsive. It is expected that, through improving responsiveness and good governance in local level public institutions, monitoring their performance with the active participation of various groups, this project will enhance the facilitation of capacity of Union Parishad, duty bearers, and stakeholders and increase responsiveness in local decision-making for demand-responsive services in the areas like agriculture extension, primary education, primary health care and social safety net programmes of the Government.', 'October, 2014 - December, 2016', '2014', 'MJF', 'Ensuring responsiveness of public institutions, Right and Governance', ' 23,516,405.00 ', 'Sylhet,Bogra,Barguna 3 Upazila 20 Unions', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(89, 'Adaptation to Climate Change for Sustainable Water Supply and Sanitation Services and Community Resilience Building in Coastal Areas', NULL, 'Access to safe & climate resilient water and sanitation services increased; 2. Knowledge and practice on climate resilient WaSH  service among the targeted communities enhanced ', 'Aug 2014\nto\nJul 2016\n', '2014', 'PKSF (Community Climate Change Project) ', 'Climate Change ', ' 1,70,39,110 ', '2 unions under Galachipaupazila, 2250 HHs from coastal unions', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(90, 'Urban Resilient Bangladesh', NULL, 'Urban government and stakeholders of the Mymensingh Pourashava is more sensitive and responsive to complex urban issues especially those affecting urban poor and urban marginalised communities.\n\n?  Urban communities have an increased knowledge and awareness on the hazards and risks of their city and able to practice basic preparedness measure when disaster occur.\n\n?  Urban community especially poor community have an access to ?disaster friendly? water and sanitation facilities.  ', 'Apr 2014\nto\nMar 2016 \n', '2014', 'OXFAM GB', 'Urban DRR, Urban WASH', ' 3,93,65,673 ', 'Six words of MymensinghPauroshova 33,329HH', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(91, 'Emergency provision of continued Water Sanitation and Hygiene services for the Undocumented Myanmar Nationals', NULL, 'Provide basic humanitarians services on Health and WaSH to UMNs and host communities in the under-served areas of Cox?s Bazar District.?', 'Apr 2014\nto\nAug2015\n', '2014', 'International Organization for Migration', 'Humanitarian Response', ' 1,04,88,000 ', 'Leda Make shift camp based in Teknafupazila under  ', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(92, 'Sensitizing the Pro-poor Service Promotion Securing Rights and Governance', NULL, '1.To sensitize the Government and service providers for enhanced accountability to citizens for Social Safety Net and Primary Health Care service delivery.\n2. To capacitate civil Society in influencing the better planning and implementation of Social Safety Net and Primary Health Care services at local level.\n3. To empower the citizens in demanding accountability and responsiveness from Government and Primary Health care service providers.', 'Oct2014\nto\nDec 2016\n', '2014', 'ManusherJonno Foundation', 'Wash Governance', ' 2,43,59,963 ', 'Bogra Sadar Upazila, Sylhet Sadar Upazila & Barguna Amtali Upazila', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(93, 'Improving access to health and WATSAN services along with community awareness/empowerment in Cox\'s Bazar', NULL, 'Provide basic humanitarians services on Health and WaSH to UMNs and host communities in the under-served areas of Cox?s Bazar District.?', 'September 2015 - June 2016.', '2015', 'IOM', 'Humanitarian Response', ' 20,87,400 ', 'Cox\'sbazar', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(94, 'Community Contributions, Participatory Decision-Making and Local Public Goods: A Field Experiment in Bangladesh.', NULL, 'The benefits of the study are the potential improvements to projects designed to extend access to safe drinking water and social services more generally in Bangladesh and elsewhere.\nThe project will also directly benefit approximately 2500 households who will gain access to safe drinking water and reduce the distance to safe drinking water for several hundred others.\n', 'March 2015 to December 2017 - April 2019', '2015', 'Stock Holm Unisersity, Swedish Research Council ', 'Safe Water Supply', ' 39,207,958 and 15,07631 ', '160 villages of Shibganj Upazila under Bogra District', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(95, 'Improving access to sustainable water, sanitation and hygiene (WASH) Facilities for urban slum dwellers', NULL, 'This project aims to provide increased access to long-term and sustainable safe drinking water and adequate levels of improved sanitation for at least 15,000 vulnerable women, men and children of extremely poor slum communities through building flood-resistant basic WASH services and supporting them with operations and maintenance processes and hygiene awareness promotion.', 'January 2015 - December 2015', '2015', 'Oxfam', 'Solid waste management', ' BDT 34,64,867  ', 'Mymensingh Pouroshova (Ward No 18-Maloncho Slum, Ward No 18-Maloncho Slum)', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(96, 'Oxfam Humanitarian Capacity Building Project (OHCB)', NULL, '1. Improved organizational capacity: Increased technical capacity of organizations to respond to an emergency in a timely and effective manner.\n2. Improved surge capacity: Increased surge capacity at Oxfam and partners? level in major sectors such as EFSL, WASH, etc;\n3. Women?s transformational leadership: Increased number of women in a transformational leadership role.\n4. Accountability through learning and linking: Improved practice of accountability and demonstrating these during emergency programming.\n5.Improved coordination under this project: Improved coordination among the key stakeholders (government + NGOs) through joined and coordinated effort in initiating emergency response.\n\n\n', 'October 2015 - March 2016', '2015', 'Oxfam', 'Humanitarian Response', ' 4,50,600 ', 'Dhaka City Corporations', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(97, 'AusBangla Care for Dental Program (ABCD) ', NULL, 'o provide essential dental care/services for the poor people in schools and slum areas in Dhaka and in rural areas of Bangladesh', 'Aug2015\nto\nJul 2016 - 2021\n', '2015', 'Rotary International, Australia', 'Dental Health', ' 5,267,800.00 ', 'Slum areas  Dhaka City Corporation ', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(98, 'UDAY-Be Sure You\'r Drinking Safe Water', NULL, 'Uday aims to increase the health of people living in the arsenic prone areas.', ' February 2016 to January 2017', '2016', 'Proportion Foundation', 'Social Business - An Action Research', ' 4,755,570.00 ', '8 unions under Sreenagar & Nawabganj Upazilas of Munshiganj and Dhaka Districts', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(99, 'Maintaining access to safe water and sanitation in Nayapara and Kutupalong Refugee camps in Bangladesh', NULL, '? Regular repairing and maintenance of WASH facilities, hygienic promotions, fecal sludge and solid waste management, promoting renewable energies like solar options, retain heat cookers, bio-gas plants, distribution of NFIs.\n\n? The project seeks to ensure approximately 32,000 refugees of concern with communal latrines, hygiene practices and waste management in official camps of Nayapara and Kutupalong, focusing on meeting the UNHCR standards of the indicators\n', '01 Mar2016- 31 Dec 2016', '2016', 'UNHCR', 'Humanitarian Response', ' 1,94,31,250 ', 'Kutupalong Camp, Ukhiya and Nayapara Camp, Teknaf, Cox?s Bazar', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(100, 'Improving Access to Health and WATSAN Services along with Community Awareness/Empowerment in Cox?s Bazar (Phase 2)', NULL, '? To contribute to improving the Undocumented Myanmar Nationals access to water, sanitation and hygiene in Teknaf Upazila.\n\n? To improve these situation of water, sanitation and hygiene condition at Teknaf emphasizing on Undocumented Myanmar Nationals, NGO Forum for Public Health has been completed the 2nd phase of the project titled as ?Improving Access to Health and WatSan Services along with Community Awareness/ Empowerment in Cox?s Bazar (IHWSS)?that started at July 2016 and ended at June 2017. This project implemented with the direct support of International Organization for Migration (IOM). Under the project NGO Forum has mandated to ensure safe water, sanitation, solid waste management and hygiene promotion services among the beneficiaries.\n', '01Jul2016 -30Jun2017', '2016', 'IOM', 'Solid waste management', ' 2,36,65,171 ', 'Cox\'sbazar', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(101, 'WASH in Emergency Response of Cyclone of MORA in Cox\'s Bazar', NULL, 'To support 37,500 MORA cyclone affected people will be supported by Safe Water options, improved household sanitation facilities, bathing cubicle, handwashing facilities and hygiene message to restore their personal hygiene practices.', 'July 2016 - October 2016', '2016', 'UNICEF', 'Humanitarian Response', ' 7,820,150.00 ', 'Cox\'sbazar', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(102, 'WASH in Emergency Response of Cyclone of ROANU in Bhola, Barguna, Cox\'s Bazar and Chittagong', NULL, 'The purpose of the assignment is to support poor communities in Pekua, Kutubdia of Cox?s Bazar, Anwara, Banshkhali, Sandwip of Chittagong, Char Fassion, Tazumuddin, Monpura of Bhola,  Patharghata and Sadar upazilas of Barguna districts to improve their sanitation facilities, personal hygiene practice and hand washing facilities.', 'August 2016 - October 2016', '2016', 'UNICEF', 'Humanitarian Response', ' 6,119,048.00 ', 'Bhola, Barguna, Cox\'sbazar, Chittagong', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(103, 'Improving WASH Services for Rohingya Host Communities in Ukhia and Teknaf Upazilas of Cox\'s Bazar district', NULL, 'To support host communities in Ukhiya and Teknaf upazilas to improve their sanitation facilities, personal hygiene practice and hand washing facilities', 'February 2016 to June 2016', '2016', 'UNICEF', 'Humanitarian Response', ' 8,386,781.00 ', 'Cox\'sbazar', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(104, 'UN Joint Programme on Support for North West Bangladesh Floods (WASH, Food Security & Nutrition)', NULL, 'To support flood affected population having access to flood resilient WASH services and ensure improved access to nutritional services among children under age five and pregnant and lactating women.\n', 'November 2016 - April 2017', '2016', 'UNICEF', 'WASH and Nutrition', ' 12,424,135.00 ', 'Belkuchi \n Chowhali\nIslampur \nDewanganj under Sirajganj and Jamalpur ', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(105, 'Improve WASH Services in Selected Communities of Ukhia and Teknaf of Cox\'s Bazar district', NULL, 'To support host communities in Ukhiya and Teknaf upazilas to improve their sanitation facilities, personal hygiene practice and hand washing facilities.', 'February 2016 to June 2016', '2016', 'UNICEF', 'At least 50,000 host community people have access to better sanitation, personal hygiene and hand washing facilities in Ukhiya and Teknaf upazilas of Cox?s Bazar District', ' 6,253,606.00 ', 'Cox\'sbazar', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(106, 'Maintaining Access to Safe Water and Sanitation in Nayapara and Kutupalong Refugee Camps in Bangladesh', NULL, 'The Project objective is to provide maintenance of sanitation facilities, fecal sludge, and solid waste management and promote alternative renewable energy to ensure that sanitation standards are met for the camp population.The Project seeks to achieve the following two goals and objectives for each goal: Objective-1: Population living in satisfactory conditions of sanitation and hygiene, Objective-2: Supply of potable water increased or maintained\n', 'March 2016 - December 2016.', '2016', 'UNHCR', 'Humanitarian Response', ' 165,576,497.00 ', 'Cox\'sbazar', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(107, 'Technical Assistance to Scaling Up Microfinance Institutions Lending for Improved Rural Sanitation (MILIS) in Bangladesh ', NULL, 'Supporting 20 MFI Partner organizations of PKSF and ASA for mobilizing and supporting sanitation entrepreneurship', 'July 2016 - June 2018', '2016', 'World Bank', 'Supporting 20 MFI Partner organizations of PKSF and ASA for mobilizing and supporting sanitation entrepreneurship\n\n', ' 34,843,527.00 ', '192 Sub-Districts of 28 Districts in Bangladesh', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(108, 'Maintaining access to WASH in Nayapara and Kutupalong Refugee camps in Bangladesh', NULL, 'In partnership with UNHCR, the project is being implemented to improve the overall sanitation and hygiene situation along with improved fecal sludge and waste management in both the official camps.', '01 Jan 2017- 31 Dec2017', '2017', 'UNHCR', 'Humanitarian Response', ' 146,833,884.00 ', 'Cox\'sbazar', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(109, 'Provision of life-saving WASH services to the Rohingya Refugees Population in Ukhiya Upazila, Cox?s Bazar District ', NULL, 'The quality of integrated service delivery and effective coverage have been strengthened I national and sub-national WASH systems to support the well-being of children under 5 years and their mothers in emergency and non-emergency situations including urban.', 'September to December 2017', '2017', 'UNICEF', 'Humanitarian Response', ' 18,701,972.00 ', 'Cox\'sbazar', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(110, 'Improved WASH services for Rohingya new arrivals and host communities in Ukhia and Teknaf Upazilas of Cox\'s Bazar district', NULL, '? To address WASH needs in host communities and makeshift settlements including children will be benefited by WASH services at learning centre and child friendly space in makeshift settlements\n\n? Rohingya and host community people access household latrine and bathing cubicle facility at Ukhia and Teknaf Upazila.\n\n? Rohingya Host community people have been oriented on safe WASH practices and Menstrual Hygiene Management\n\n? 6300 children will reach through learning centre, child friendly space and community clinic/FWC by 16 new WASH facilities at Rohingya makeshift Settlement.\n\n? Rohingya Makeshift settlements have 04 SANIMART for adolescent girls and women.\n', 'July 2017 to December 2017', '2017', 'UNICEF', 'Humanitarian Response', ' 26,123,913.00 ', 'Cox\'sbazar', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(111, 'WASH in emergency response of cyclone MORA in Cox\'s Bazar', NULL, 'Communities & Institutions are aware and giving importance to waste management system, safe water, sanitation & hygiene for all.', 'July 2017- Oct 2017', '2017', 'UNICEF', 'Humanitarian Response', ' 81,90,751 ', 'Cox\'sbazar', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(112, 'Provision of Life-Saving WASH services to the Rohingya Refugees Population in Ukhia Upazilas, Cox\'s Bazar District', NULL, 'The quality of integrated service delivery and effective coverage have been strengthened I national and sub-national WASH systems to support the well-being of children under 5 years and their mothers in emergency and non-emergency situations including urban.', 'September 2017 - January 2018', '2017', 'UNICEF', 'Humanitarian Response', ' 18,701,972.00 ', 'Cox\'sbazar', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(113, 'Improving WASH Services for Rohingya new arrivals and Host Communities in Ukhia and Teknaf Upazilas of Cox\'s Bazar district', NULL, 'UNICEF and NGO Forum is developing a program document  to address WASH needs of 55,300 people in host communities and makeshift settlements including 8,820 children will be benefited by WASH services at learning centre and child friendly space in makeshift settlements\n', 'July 2017 - December 2017', '2017', 'UNICEF', 'Humanitarian Response', ' 17,575,734.00 ', 'Cox\'sbazar', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(114, 'Urban Resilience Bangladesh (URB) Project 2nd Phase ', NULL, '? Targeted communities, private and public institutions, schools have enhanced their understanding on disaster preparedness and effective response and its practice.\n? Communities & institutions are aware and giving importance to waste management system, safe water, sanitation & hygiene for all.\n', 'July 2017- June 2018', '2017', 'OXFAM', 'Solid waste management', ' 56,156,237.00 ', 'Six words of MymensinghPauroshova', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(115, 'Improved WASH Services for the Rohingya Refugees and Host Communities in Cox?s Bazar', NULL, 'The refugee community and host community population in the designated zones have access to, and use, appropriate WASH facilities as per sector standards, which facilitate the practice of key WASH behaviours.', 'January 2018- January 2019', '2018', 'Unicef', 'Humanitarian Response', ' 17,575,734.00 ', 'Cox\'sbazar', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(116, 'Improved WASH Services for the Rohingya Refugees and Host Communities in Cox?s Bazar', NULL, 'The refugee community and host community population in the designated zones have access to, and use, appropriate WASH facilities as per sector standards, which facilitate the practice of key WASH behaviours.', 'January 2018 - January 2019', '2018', 'UNICEF', 'Humanitarian Response', '', 'Cox\'sbazar', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(118, 'Improved WASH Services to the Rohingya Refugees and Host Communities in Cox\'s Bazar District', NULL, 'By the end of the project, the refugee and host community population in the designated zones have access to, and use, appropriate WASH facilities, as per the sector standards, which facilitates the practice of key WASH behaviours ', '17 January 2018 ? 16 January 2019', '2018', 'Unicef-Bangladesh', 'Humanitarian Response', ' 13,51,79,658 ', 'Kutupalang extension camps with adjacent host communities', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(121, 'Sanitation and Cooking Facilities in Selected Social Infrastructures for Refugees Project', NULL, 'Improve the sanitation of the most vulnerable people through Social infrastructures (Community Latrine, Community Kitchen and Bio-gas plant)\r\n\r\nMobilize the refugees to ensure hygiene practices through hygiene promotion sessions  \r\nInstallation of hygienic latrine blocks\r\nEstablishment of bio-gas plant with cooking facilities/kitchen with 2 burners Save the environment', 'July 2018 - December 2018', '2018', 'HELVETAS Swiss Interoperation Bangladesh', 'Improved Sanitation', '17,442,577.00', 'Cox\'sbazar', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-12-03 12:51:23'),
(123, 'WASH and Protection Support Program for Rohingya Refugees and Host Communities in Cox\'s Bazar', NULL, '? to bring vulnerable Rohingya women and girls under safe WASH coverage. \n? to facilitate access of women and girls from identified host communities to safe WASH facilities.\n? to facilitate protection of Rohingya women and children from immediate and long-term effects of refugee crisis situation.\n', 'Jun\'2018 - June 2019', '2018', 'Association for Aid and Relief, Japan (AAR Japan)', 'Humanitarian Response', ' 122,832,264.00 ', 'Kutupalong Extension Rohingya Refugee Camp and adjacent Rajapalong Union in Ukhia Upazila, and Shalbon Rohingya Refugee Camp and adjacent Hnila Union in Teknaf Upazila under Cox?s Bazar District', NULL, '', NULL, '', '', '', NULL, NULL, '', ''),
(124, 'Implementation of Integrity Management Project with CWASA', NULL, 'Water integrity management by applying Integrity Management Toolbox. Strengthening the business model of CWASA. Promote good governance and ensure better services for the consumers and Reduce risks and improve performance of CWASA .', '15 September 2017 - DECEMBER 2018 , Jan 19 - Dec\'19', '2019', 'WIN', 'Good Governance and better performance', '34,30,000', 'Chittagong City', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-24 16:21:40'),
(125, 'Enhancing inclusive disaster resilience in Bangladesh (DIPECHO VIII)', NULL, 'To promote the standardized DRR Institutionalization models for mainstreaming into development.', 'March 2015 - August 2016', '2016', 'Oxfam GB', 'Disaster resilience', NULL, 'Mymensingh Pouroshova (Ward no 8,10,14,18,19)', NULL, NULL, 'Engr. Md. Toriqul Islam', 'Senior Technical Manager', '0171', 'toriqul@ngof.org', NULL, NULL, '2020-12-01 10:09:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `i_c_e_s`
--

CREATE TABLE `i_c_e_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description_one` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ice_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ice_image.jpg',
  `description_two` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_three` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `i_c_e_s`
--

INSERT INTO `i_c_e_s` (`id`, `description_one`, `name`, `designation`, `phone`, `email`, `ice_image`, `description_two`, `description_three`, `created_at`, `updated_at`) VALUES
(1, '“A picture of a visual material can express a message than cannot be explained with even a thousand words” The importance of Information Education and Communication (IEC) and Behavioral Change Communication (BCC) lies in the above statement.\r\n\r\nDevelopment communication has already been recognized one of the most important and central issue of the development process. The main aspect of development communication is communication for development. In this line the main objective of the IEC and BCC materials are to provide information, creating awareness and to motivate in practicing a new habit and help enhancing the skill thus being positive changes in the traditional/ongoing practices of the community people.', 'Mr. Waresul Haque', 'Manager, Development Communication', '88-01815002113', 'waresul@ngof.org', '1.jpg', 'NGO Forum for Public Health has been working for about three decades for the promotion of WaSH among the community people. From the very beginning under the development communication activities different IEC/BCC materials are being developed and they are being distributed to the targeted communities through different training, motivation, and information exchange activities. Among communication these materials there are different information Materials Package, Poster, Booklet, Leaflet, Guide book, Flipchart, Flash card, Audio Visual etc.', '<p>The center of all the development initiative of&nbsp;NGO Forum for Public Health&nbsp;is the target community. Therefore all the development communication activities are planned and implemented in such a manner so that it can be appropriate for the target community and make the development initiative more meaningful and effective.</p>\r\n<p>The &ldquo;P&rdquo; process is followed while preparing the&nbsp;IEC/BCC materials. In this process participation of people from all walks of life is ensured. The message and the pictures are selected in such a way so that it can be understandable to both literate and illiterate. In every stage of the development of a material from the beginning to the end, feasibility, field testing, opinions of the target community and the experts are taken into account. Not only NGO Forum for Public Health utilized these IEC/BCC materials but other organizations who are involved in WaSH intervention (Go, NGO, UN Bodies) and those who are interested in using the IEC/BCC materials are using them widely.</p>\r\n<p>Development communication department of NGO Forum&nbsp;will support to others in development process and production of any type of sectoral IEC/BCC materials.</p>', '2019-12-05 09:19:57', '2019-12-05 09:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `metarialscategories`
--

CREATE TABLE `metarialscategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metarialscategories`
--

INSERT INTO `metarialscategories` (`id`, `category_name`, `category_description`, `created_at`, `updated_at`) VALUES
(1, 'Posters', 'Under the Development Communication services issue-based Posters were developed taking the vulnerabilities of different eco-zones into account. The Posters were widely disseminated among the community people to make them aware on safe water, sanitation and hygiene issues. It made the development initiatives of NGO Forum more meaningful and effective. Billboards with pictorial messages were used as significant IEC/BCC material and were set up at strategic points of the rural areas in collaboration with the Union Parishads, Partner NGOs and the local allies. In addition, Display Charts were exhibited at Union Parishads, school libraries and Upazila Parishads incorporating information on safe WaSH issues for raising awareness of members of LGIs, school students & teachers for their effective & efficient role in WaSH, health & environment promotion.', '2019-12-07 15:04:26', NULL),
(2, 'Flash Card on Hygiene', 'Hygiene Promotion Package for adaptation to personal hygiene in different ecological zones was developed following the PHAST Approach. The Package targeted the community people for bringing about behavioral and attitudinal changes among them. Flyer on water vulnerabilities and water-borne diseases was produced to disseminate Information among community people, VDC members, teachers, religious leaders, UP and PNGO staffs to make them aware about safe water use. A Community Mobilization Package on WaSH & health was developed to guide conduction of different community mobilization programmes including orientations, meetings, hygiene sessions and campaign. Flip Charts developed during the year were used by the trainers, field staff, PNGO staff, and social activists, VDC members to increase awareness and practices on the five major behavioral domains to prevent WaSH & Health vulnerabilities especially in HtR areas of rural Bangladesh.', '2019-12-07 15:05:13', NULL),
(3, 'Manual', 'To help the community leaders and selected Caretakers get trained on construction & maintenance of the sanitation facilities, Manual on Proper Installation and Maintenance of User-friendly Latrine in Hard-to-Reach Areas was developed. Besides, a Water Technology Operation/Caretakers’ Manual was developed targeting community leaders, Caretakers & Partner NGOs. Significant number of copies of the Manuals was distributed among the respective audiences to ensure the proper installation and maintenance by the Caretakers and community beneficiaries at rural level.', '2019-12-07 15:05:32', NULL),
(4, 'Flash Card', 'Development communication department of NGO Forum will support to others in development process and production of any type of sectoral IEC/BCC materials.', '2019-12-07 15:05:48', NULL),
(5, 'Technical Flyers', 'Development communication department of NGO Forum will support to others in development process and production of any type of sectoral IEC/BCC materials.', '2019-12-07 15:06:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `microkits`
--

CREATE TABLE `microkits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'microkit_logo.jpg',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualitative` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `origin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `microkits`
--

INSERT INTO `microkits` (`id`, `logo`, `description`, `qualitative`, `origin`, `location`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', 'The kit can test fecal coliform (H2S producing bacteria) in drinking water and it does not require any incubation. It is a very simple and low cost technique for testing bacteria at household level. ICDDR,B has evaluated the performance of the kit and found satisfactory results. Many organizations are using this kit for testing bacterial contamination in drinking water at field level. Results can be easily interpreted by observing the change of color.', 'Yes/No', 'NGO Forum for Public Health Bangladesh', 'NGO Forum Central Office 4/6, Block-E, Lalmatia, Dhaka-1207', '2019-12-09 08:42:04', '2019-12-09 08:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `microkitvideos`
--

CREATE TABLE `microkitvideos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `microkitvideos`
--

INSERT INTO `microkitvideos` (`id`, `video_link`, `created_at`, `updated_at`) VALUES
(14, 'https://www.youtube.com/embed/NJMCQr6I_uw', '2019-12-17 06:32:10', NULL),
(15, 'https://www.youtube.com/embed/_kuvo4WhEgE', '2019-12-17 06:32:37', NULL),
(16, 'https://www.youtube.com/embed/hbegHVhiMVk', '2019-12-17 06:32:56', NULL),
(17, 'https://www.youtube.com/embed/MWOKpZTZ7AA', '2019-12-17 06:33:20', NULL),
(18, 'https://www.youtube.com/embed/sStUI0Bg-zY', '2019-12-17 06:33:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_05_070550_create_jobs_table', 1),
(10, '2019_11_09_114107_create_latest_news_table', 3),
(11, '2019_11_09_162035_create_press_media_table', 4),
(12, '2019_11_09_181131_create_news_categories_table', 5),
(15, '2019_11_09_073726_create_cells_departments_table', 8),
(16, '2019_11_09_093235_create_regionaloffices_table', 9),
(17, '2019_11_09_112313_create_careers_table', 10),
(19, '2019_11_11_004328_create_projectoffices_table', 11),
(25, '2019_11_19_032910_create_resources_categories_table', 14),
(30, '2019_11_19_042155_create_allresources_table', 18),
(32, '2019_11_28_223646_create_programestatuses_table', 19),
(33, '2019_11_29_011942_create_ataglancecategories_table', 20),
(35, '2019_11_29_021136_create_ataglances_table', 21),
(38, '2019_11_18_030054_create_all_programmes_table', 22),
(40, '2019_11_30_222025_create_aboutcategories_table', 24),
(42, '2019_11_30_230532_create_allabouts_table', 25),
(43, '2019_12_01_222843_create_allpolicies_table', 26),
(44, '2019_12_01_233309_create_allgenerals_table', 27),
(46, '2019_12_02_233527_create_aboutnetworks_table', 28),
(47, '2019_11_29_233505_create_abouutnogforms_table', 29),
(49, '2019_12_03_204325_create_trainings_table', 30),
(51, '2019_12_03_225349_create_centers_table', 31),
(54, '2019_12_04_135949_create_centerdetails_table', 32),
(55, '2019_12_04_164929_create_servicecategories_table', 33),
(56, '2019_12_04_173016_create_allservices_table', 34),
(59, '2019_12_05_003325_create_i_c_e_s_table', 35),
(60, '2019_11_09_221918_create_all_news_table', 36),
(64, '2019_12_06_205401_create_contactoffices_table', 37),
(69, '2019_11_07_194342_create_existing_projects_table', 38),
(70, '2019_11_08_103048_create_implementeds_table', 39),
(72, '2019_12_07_200558_create_metarialscategories_table', 40),
(73, '2019_12_07_224514_create_allmetarials_table', 41),
(74, '2019_12_08_121909_create_wqtls_table', 42),
(75, '2019_12_08_135618_create_wqtltestrates_table', 43),
(76, '2019_12_08_145408_create_allwqtltestrates_table', 44),
(77, '2019_12_08_165318_create_specialpackeges_table', 45),
(78, '2019_12_08_205151_create_coxlabs_table', 46),
(79, '2019_12_08_223150_create_coxlabtestrates_table', 47),
(80, '2019_12_09_001613_create_coxlabservices_table', 48),
(82, '2019_12_09_134511_create_microkits_table', 49),
(83, '2019_12_09_152639_create_microkitvideos_table', 50),
(85, '2019_12_09_201437_create_wqtlhomes_table', 51),
(86, '2019_12_09_221021_create_wqtlhomeimages_table', 52),
(91, '2019_12_10_163611_create_whats_table', 53),
(93, '2019_12_10_214904_create_videos_table', 54),
(94, '2019_12_11_000627_create_photocategories_table', 55),
(95, '2019_12_11_011414_create_photoclickeds_table', 56),
(98, '2019_12_11_025625_create_globalevents_table', 57),
(99, '2019_12_13_001615_create_foundingagencies_table', 58),
(100, '2019_12_14_232014_create_bannercategories_table', 59),
(102, '2019_12_14_233606_create_banners_table', 60),
(103, '2019_12_16_124242_create_humans_table', 61),
(104, '2019_12_16_140935_create_humanprojects_table', 62),
(106, '2019_11_18_021906_create_programme_categories_table', 63);

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Latest News', '2019-11-09 19:29:41', NULL),
(2, 'Events', '2019-11-09 19:30:08', '2019-12-27 19:21:08'),
(3, 'Press & Media', '2019-11-09 19:33:02', '2019-12-27 19:21:42'),
(5, 'Global News', '2019-11-09 19:36:32', '2019-12-27 19:23:04'),
(6, 'Special Message', '2019-11-09 19:37:20', '2019-12-27 19:23:09'),
(7, 'Article', '2019-12-28 05:21:27', NULL),
(8, 'Meeting News', '2019-12-28 14:30:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photocategories`
--

CREATE TABLE `photocategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photocategories`
--

INSERT INTO `photocategories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(2, 'Women', '2019-12-11 08:30:59', '2019-12-12 11:23:51'),
(3, 'Humanitarian', '2019-12-11 08:31:27', NULL),
(4, 'NGOF', '2019-12-11 08:31:46', NULL),
(5, 'Water', '2019-12-11 08:32:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photoclickeds`
--

CREATE TABLE `photoclickeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo_category_id` int(11) NOT NULL,
  `photoclicked_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'photoclicked_image.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photoclickeds`
--

INSERT INTO `photoclickeds` (`id`, `photo_category_id`, `photoclicked_image`, `created_at`, `updated_at`) VALUES
(10, 2, '10.jpg', '2020-12-01 06:40:46', '2020-12-01 06:40:47'),
(11, 2, '11.jpg', '2020-12-01 06:41:23', '2020-12-01 06:41:24'),
(12, 3, '12.jpg', '2020-12-01 06:41:51', '2020-12-01 06:41:52'),
(13, 3, '13.jpg', '2020-12-01 06:42:49', '2020-12-01 06:42:50'),
(14, 4, '14.jpg', '2020-12-01 06:45:47', '2020-12-01 06:45:50'),
(15, 4, '15.jpg', '2020-12-01 06:46:10', '2020-12-01 06:46:12'),
(16, 5, '16.jpg', '2020-12-01 06:47:05', '2020-12-01 06:47:06'),
(17, 5, '17.jpg', '2020-12-01 06:47:17', '2020-12-01 06:47:18');

-- --------------------------------------------------------

--
-- Table structure for table `programestatuses`
--

CREATE TABLE `programestatuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `another_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'programestatuses_img.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programestatuses`
--

INSERT INTO `programestatuses` (`id`, `title`, `description`, `another_description`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Promotion of Water Options', 'During reporting period, a total of 465 water options have been installed benefitting 74,273 individuals from 13,882 households. The target groups are from the poor, marginalized and socially excluded groups within the hard-to-reach area population like indigenous, low caste, persons with disabilities, and women in vulnerability who usually have poor access and remain deprived of government services.', NULL, '3.JPG', '2019-11-29 07:30:51', '2019-11-29 07:30:52'),
(4, 'Imporved Sanitation Promotion in Coverage Area', 'The Forum continued promoting context-specific alternative sanitation technologies feasible for five different ecological zones serving the hard-to-reach population and the Rohingya refugee population. The promoted Latrines have been proven to be scalable focusing climate hazards, poverty and disadvantaged situation of the population especially in the hard-to-reach areas and within socially excluded groups focusing on human rights. During reporting period, a total of 178,564 improved sanitati', NULL, '4.JPG', '2019-11-29 07:31:38', '2019-11-29 07:31:39'),
(5, 'Promotion of Water Options', 'During reporting period, a total of 465 water options have been installed benefitting 74,273 individuals from 13,882 households. The target groups are from the poor, marginalized and socially excluded groups within the hard-to-reach area population like indigenous, low caste, persons with disabilities, and women in vulnerability who usually have poor access and remain deprived of government services.', NULL, '3.JPG', '2019-11-29 07:30:51', '2019-11-29 07:30:52'),
(6, 'Imporved Sanitation Promotion in Coverage Area', 'The Forum continued promoting context-specific alternative sanitation technologies feasible for five different ecological zones serving the hard-to-reach population and the Rohingya refugee population. The promoted Latrines have been proven to be scalable focusing climate hazards, poverty and disadvantaged situation of the population especially in the hard-to-reach areas and within socially excluded groups focusing on human rights. During reporting period, a total of 178,564 improved sanitati', NULL, '4.JPG', '2019-11-29 07:31:38', '2019-11-29 07:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `programme_categories`
--

CREATE TABLE `programme_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programme_categories`
--

INSERT INTO `programme_categories` (`id`, `category_name`, `category_description`, `created_at`, `updated_at`) VALUES
(1, 'WASH Promotion', 'As integral part of Public Health, NGO Forum continues its WASH promotion intervention through software and hardware services. Water governance has been a priority issue for the Organization in recent years and much effort and initiatives have been poured into that direction. In the arena of hygienic sanitation promotion, NGO Forum has carried on exploring the sanitation marketing approach that brings in affordable product designs along with promotional campaigns. The approach is binary contributions. On one hand it has contributed to increase hygienic sanitation coverage among the poorest sections of the rural population; while on the other hand, it has promoted & boosted profit-making business for the local vendors that subsequently increases the availability of sanitary products in local market. In 2017, NGO Forum carried out its regular safe hygiene promotion activities within its working areas. Concurrently, it has worked to conserve environmental hygiene and promoting health through the prevention of human contact with the hazardous environmental conditions. Unsafe health conditions associated with the lack of healthy food, clean water, control of vectors and clean premises. Hygiene targets were focused on management of waste produced by human activities. Under the urban WASH programme, a model of improved sanitation and easy access to safe water supply was demonstrated in selected areas of slums.', '2019-12-16 16:44:18', '2020-01-20 14:28:53'),
(2, 'Health & Hygiene Promotion', 'NGO Forum has focused on improved health and hygiene promotion measures in the context of people’s adaptation to social accountability approach during the reporting period. Through di¬fferent project activities NGO Forum has reached to the people in need and also involving the relevant stakeholders through discussion meeting, day observance, promotion of hygiene education, water safety plan and wash promotion. In the Rohingya refugee context, distribution of hygiene kits, top-up kits, hand washing device, bin, aqua tabs, Non Food Items (NFI), child potty, bucket, Diarrhea kits was distributed on a regular basis as per the sector standards.\r\nThe Camp cleaning campaign program organized bimonthly in the Rohingya Refugees camps. This rapid cleaning campaign by a team consist of Volunteers, community leaders and WASH committee members with the view of cleaning the surface area of all blocks. In this program, NGO Forum provided all the logistic support to the team.\r\n\r\nHygiene Promotion Session : \r\nAwareness buildings through the hygiene promotion sessions on di¬fferent issues are the critical activities conducted by NGO Forum round the year. The sessions mainly targets the female, male, adolescent and children groups to educate them on the important hygiene issues like Hand Washing with soap, Water Safety Plan (WSP), Sanitation and Hygiene, Environmental Hygiene and Food Hygiene, Personal Hygiene and Menstrual Hygiene Management (MHM). The Acute Watery Diarrhoea (AWD) is the most discussed issue in the extension camps as they are seriously vulnerable to this disease.\r\n\r\nMass Awareness Events : \r\nPopular theatre, video show, Folk song and di¬fferent cultural events have been organized by the local Theatre and Cultural groups using the local languages and incorporating the promotional messages on hygiene behavior, use of safe water and safe sanitation practices.', '2019-12-16 16:45:00', '2020-12-01 06:14:48'),
(3, 'Training & Capacity Building', 'NGO Forum has remained committed to the development of human capital as well as institutional capacity development since its inception with offering decentralized, tailor-made and customized training. NGO Forum has offered number of training focusing on development of technical skills and project based fundamental and refresher training on WASH and other relevant issues. Training on capacity development in technical and non-technical and on like skills issues for the staff¬s, community groups, volunteers.', '2020-01-28 05:00:00', '2020-12-01 15:46:32'),
(4, 'Advocacy and Networking', 'Based on UN-declaration of safe water and sanitation as human rights, NGO Forum has been running an advocacy campaign titled Right to WatSan – Get it for All. Its objective is to ensure a right-based sectoral policy environment especially for the poor, vulnerable and excluded segments of the society. Multi-dimensional activities were conducted at both central and local level targeting policy-makers, programme planners, media, LGIs, civil society actors and hard-to-reach communities. Functioning of Union & Ward WatSan Committees and Disaster Management Committees and conduction of open budget at hard-to-reach areas such as haor, char, drought-prone, flood-prone and coastal areas along with the tea gardens and hills were major achievements under the Advocacy & Information Services. The organization maintained a strong information-flow during the year to support its Advocacy campaign. Regular and updated information stream was maintained between field & central level. Besides, organizing and participating in relevant events, producing and broadcasting TV talk-shows, preparing and distributing different publications contributed significantly to deliver sectoral information to national and international stakeholders', '2019-12-16 16:50:17', '2020-08-11 02:26:36'),
(7, 'Environment and Disaster Management', 'NGO Forum emphasizes on environmental conservation and renewed attention which is required to develop the capacity of the society on disaster preparedness and response involving communities, and Local Government Institutions (LGIs) in a sustainable approach to minimize environmental hazards and mitigate climate change and its impact. In the reporting period NGO Forum has focused its activities on environmental conservation, climate change and disaster management through diff¬erent projects both in national level, regional level and in the Rohingya camps and host communities at Cox\'s Bazar. NGO Forum’s project on Resilient, Inclusive & Innovative Cities in Bangladesh has focused on DRR and WASH along with faecal sludge and solid waste management in the urban areas in collaboration with Mymensingh City Corporation. The project has been concentrated on ensuring its target groups having enhanced understanding on disaster preparedness, safe waste management and inclusive WASH services. During the reporting period, the project\'s impacts have showed an increased awareness of communities and institutions on waste management system and WASH issues.', '2020-01-20 14:32:25', '2020-12-01 06:13:36'),
(8, 'Research, Monitoring & Evaluation', 'NGO Forum for Public Health has established a full-fledged research, monitoring & evaluation cell with trained and experienced human resources to facilitated studies for understanding the changes and diverse scenario of development. NGO forum is committed to conducting high quality, ethical research.\r\n\r\nSince our founding in 1983, we have designed and evaluated solutions to Water, Sanitation, Hygiene and Public Health problems using the most rigorous evaluation methods available within the programs and research. We have over 25 researches and evaluations completed or in progress in collaboration with different international research institutes, academic institutes and Universities. We work in the areas of Water, Sanitation, Hygiene, Public Health, Governance, Nutrition, Social Protection, and Community Driven Development through community participation.', '2020-01-20 14:36:45', NULL),
(13, 'COVID 19 Response', '<p style=\"text-align: justify;\">Currently the whole world is suffering due to the Corona Virus named &lsquo;COVID-19&rsquo; and along with the world Bangladesh is also affected by the COVID-19. The COVID-19 is one of the deadly viruses in the history of world and the World Health Organization (WHO) has already declared COVID-19 as a global pandemic. According to the guidance of UNHCR, WHO and as well as local administration, NGO Forum has been responding against the pandemic COVID-19 to reduce the risk. However, the below initiatives have been taken at camp level.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>A. Construction &amp; O&amp;M activities :<br /></strong></p>\r\n<ul>\r\n<li style=\"text-align: justify;\">Installation of hand washing facilities in the gap area of latrine places,</li>\r\n<li style=\"text-align: justify;\">Installation of hand washing facilities at public places and service center of camp locations.</li>\r\n<li style=\"text-align: justify;\">Installation of tippy-tap and indigenous hand washing soapy water at household level.</li>\r\n<li style=\"text-align: justify;\">Construction of WASH facilities at Quarantine zone of KTP TC.</li>\r\n<li style=\"text-align: justify;\">Construction of WASH facilities at Isolation hospital of Camp-5.</li>\r\n<li style=\"text-align: justify;\">O&amp;M of WASH facilities at Quarantine zone of KTP TC, Nayapara and Isolation hospital of Camp-5.</li>\r\n<li style=\"text-align: justify;\">Disinfection of all WASH facilities including public places &amp; offices through chlorine solution.</li>\r\n<li style=\"text-align: justify;\">Make functional all HWDs by regular O&amp;M works including filling water and fixing soap regularly.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>B. Promotional activities :<br /></strong></p>\r\n<ul>\r\n<li>COVID-19 messages dissemination as well as hand washing demonstration at household level focusing on hand washing demonstration and personal hygiene messages.</li>\r\n<li style=\"text-align: justify;\">Disseminating the COVID-19 messages including the issue of social distance related information at public place through megaphone.</li>\r\n<li style=\"text-align: justify;\">Soap distribution at HH level.</li>\r\n<li style=\"text-align: justify;\">Distribution of necessary PPE to Volunteers and Staff.</li>\r\n<li style=\"text-align: justify;\">Ensuring social distance in all aspect of community services.</li>\r\n<li style=\"text-align: justify;\">Message from sector and local administration in relation with COVID-19 disseminating to the community &amp; stakeholders.</li>\r\n<li style=\"text-align: justify;\">Distribution of COVID message developed by sector.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>C. Work modalities of Team NGO Forum :<br /></strong></p>\r\n<ul>\r\n<li>All types of mass gathering activities like session, meeting, training, workshop, consultation, cultural programs, etc. have been postponed since 22 March 2020.</li>\r\n<li>The emergency activities on COVID-19 response and some other important WASH activities like water trucking and distribution, emergency FSM &amp; SWM activities, O&amp;M of WASH facilities and some important construction activities are being operating under this situation.</li>\r\n<li>As the regular activities will not continue and staff movement is restricted towards camp, maximum 50% of total staff are deploying every day at all working camps.</li>\r\n<li>Project staff who are not able to work at camp are available at home as &lsquo;work at home&rsquo; mode.</li>\r\n<li>All Volunteers are engaging for their respective works accordingly.</li>\r\n<li>There is the flexibility for Staff and Volunteers to involve their works as per their willingness. If someone are not interested to work in this restricted situation he/she is allowed for stay at home or work at home.</li>\r\n<li>All types of PPE ensured to all staff and Volunteers for their personal protection. The use of PPE is mandatory for all staff and volunteer who are working at respective locations.</li>\r\n<li>All vehicles (11 Motorcycles and 05 Cars) of this project are taken approval from RRRC office to move from Cox&rsquo;s Bazar to respective camps and Teknaf &amp; Ukhiya sadar to respective camps.</li>\r\n<li>Camp wise staff work roster plans have been developed and followed accordingly.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>D. Communication and Coordination: </strong></p>\r\n<ul>\r\n<li>On the basis of govt. general leave and lock down, day wise staff work roster plan has been shared accordingly to respective desk of UNHCR and NGOF Head Office,</li>\r\n<li>Regular communications have been conducting with WASH and Programme units of UNHCR for initiating additional activities at different camps and quarantine zones.</li>\r\n<li>Regular communications have been conducting with WASH and Programme units of UNHCR to update COVID-19 operational response,</li>\r\n<li>Submitting weekly basis COVID-19 response report to UNHCR and Sector as per sector standard reporting format.</li>\r\n<li>Submitting weekly basis COVID-19 response report to UNHCR programme unit in relation with the impact on PPA-2020,</li>\r\n<li>Regular communications have been conducting with Head Office to taking day to day guidance and suggestion.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style=\"text-decoration: underline;\">Descriptions of major COVID emergency response activities of NGO Forum</span> </strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>1. COVID operation in Quarantine zone of KTP Transit centre : </strong></p>\r\n<p style=\"text-align: justify;\">There are <strong>348</strong> persons were stayed at the beginning of this quarantine zone of KTP Transit centre. Now there are average 100 persons are staying daily in this zone. With the support of UNHCR, NGO Forum has been providing regular WASH services as well as construction of necessary WASH facilities in this centre. Before starting the operation a layout plan has been developed.</p>\r\n<p>The activities in the quarantine zone of KTP TC :</p>\r\n<ul>\r\n<li><strong>16</strong> hand washing devices installed at different points.</li>\r\n<li><strong>03</strong> cloth washing platforms with running water tap constructed for the residence of this zone.</li>\r\n<li>Expansion of water networks by fixing pipe line and construction of <strong>03</strong> tap stands with 06 tap points for making availability of drinking water as well as running water at WASH facilities.</li>\r\n<li><strong>01</strong> double chamber garbage pits also constructed for primary dumping the waste.</li>\r\n<li><strong>28</strong> plastic garbage pits (with capacity 240 liter) and <strong>85</strong> paddle bins installed different points.</li>\r\n<li>In the month of April, daily <strong>100</strong> bathing soap and <strong>80</strong> toilet tissues have been distributed at different latrines, bathhouse and hand washing facilities. As the population is reducing, now daily distribution is 50 bathing soap and 25 toilet tissues.</li>\r\n<li>A <strong>pump house</strong> also constructed to protect existing pumps and generator.</li>\r\n<li>About <strong>35,000</strong> liter water has been distributing regularly to maintain all water requirements.</li>\r\n<li>Before water distribution, maintaining quality of water through treatment and testing regularly.</li>\r\n<li>COVID awareness and hand washing stapes related <strong>200</strong> festoons hanged different places of this zone.</li>\r\n<li>Regular operation and maintenance of all WASH facilities to make functional and accessible for all.</li>\r\n<li>Regular cleaning all the latrines, bathhouses, garbage pits &amp; bins and the surface areas of this center.</li>\r\n<li><strong>02</strong> HP Volunteers are working here to disseminate COVID awareness and hand washing message by maintaining social distance. They also make available soap and water in all hand washing devices.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><img src=\"/photos/2/Covid-19/324wer.jpg\" alt=\"\" width=\"272\" height=\"201\" />&nbsp; <img src=\"/photos/2/Covid-19/dfs4re.jpg\" alt=\"\" width=\"272\" height=\"204\" /> <img src=\"/photos/2/Covid-19/ghdsfsd.jpg\" alt=\"\" width=\"272\" height=\"204\" /></p>\r\n<p>&nbsp;</p>\r\n<p><strong>2. COVID operation in Quarantine Centre of Nayapara</strong></p>\r\n<p style=\"text-align: justify;\">The repatriation centre of Karantoli of Nayapara, Tetnaf was developed as Quarantine centre by the WASH agencies and CIC of Nayapara RC. This centre will be used for the refugees of Nayapara camps. NGO Forum has been requested by the CIC of NYP RC and UNHCR to provide necessary WASH services in this centre. After joint assessment by NGOF and UNHCR, NGO Forum has developed a layout plan of this quarantine centre and accordingly has taken initiatives to undertake following activities in this quarantine centre.</p>\r\n<p>The activities in the quarantine zone of Nayapara :</p>\r\n<ul>\r\n<li>A total of <strong>16</strong> HWDs have been installed in different place of this quarantine center.</li>\r\n<li>A total of <strong>32</strong> plastic bins (capacity of 240 liter) have been installed for the proper management of the solid waste. Among these 16 are green &amp; 16 are red.</li>\r\n<li><strong>32</strong> paddle bins also placed at different rooms of this center,</li>\r\n<li><strong>04</strong> latrine doors are making functional through cleaning and clog removing.</li>\r\n</ul>\r\n<p>This quarantine centre is far from the Camp 26 or NYP RC, so regular WASH operational activities is difficult by NGO Forum. Although it is under discussion for the further WASH services required.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"/photos/2/Covid-19/rtyfdg.jpg\" alt=\"\" width=\"351\" height=\"166\" />&nbsp; <img src=\"/photos/2/Covid-19/tyrty.jpg\" alt=\"\" width=\"297\" height=\"167\" /></p>\r\n<p>&nbsp;</p>\r\n<p><strong>3. COVID-19 operation in Isolation Hospital of Camp-5</strong></p>\r\n<p style=\"text-align: justify;\">The FH hospital of Camp-5 will be used as Isolation Hospital that need to improve the facilities. As per request of UNHCR, NGO Forum has taken initiatives to assess this hospital according to WASH needs. After assessment and approval from UNHCR, NGO Forum has been completed following construction works in this hospital.</p>\r\n<ul>\r\n<li><strong>01</strong> waste water treatment plant has been constructed for treat the gray water from bathing cubicles, laundry &amp; basin.</li>\r\n<li>A <strong>100</strong> meter drainage system with slab has been constructed to passing the waste water.</li>\r\n<li>The existing <strong>drainage</strong> system also repaired.</li>\r\n<li>A <strong>disinfection room</strong> constructed at this hospital.</li>\r\n<li>Necessary <strong>plumbing works</strong> have been conducted to connect the WASH facilities with drainage system and waste water treatment plant.</li>\r\n<li><strong>03</strong> hand washing devices have been installed.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><img src=\"/photos/2/Covid-19/werwer.jpg\" alt=\"\" width=\"260\" height=\"346\" />&nbsp; <img src=\"/photos/2/Covid-19/gfdhjt.jpg\" alt=\"\" width=\"258\" height=\"344\" /></p>\r\n<p>&nbsp;</p>\r\n<p><strong>4. Hand washing devices placing</strong></p>\r\n<p style=\"text-align: justify;\">To effective COVID emergency response, make availability of hand washing facility is the most significant activities of NGO Forum. Besides the quarantine zone operation, NGO Forum has been responding the COVID-19 emergency responses through installation of hand washing devices at latrine places and different public places including service centres. As innovative initiative, NGO Forum also installed a number of tippy taps and hanging soapy water at household level to ensuring hand washing practices for the mass population.</p>\r\n<ul>\r\n<li><strong>Hand washing devices at latrine places:</strong> Till now <strong>444</strong> hand-washing devices have been installed in different latrine places of camp 5, 17, 26, NYP RC and KTP RC. Among these, 204 at Camp 5, 52 at Camp 17, 155 at Camp 26, 23 in NYP RC and 10 at KTP RC.</li>\r\n<li><strong>Hand washing devices at public places:</strong> A number of hand washing devices also installed in different public places including offices and distribution centers. A total of <strong>92</strong> hand washing devices have been installed in all camps where 07 at Camp 5, 05 at Camp 17, 05 at Camp 26, 06 at NYP RC, 49 at KTP RC and 20 at KTP TC.</li>\r\n<li><strong>Installation of Tippy tap:</strong> As innovative initiative, NGO Forum installed a total of <strong>4174</strong> tippy taps and soapy bottles have been installed different camp where 1048 at Camp-17, 209 at Camp-5, 2253 at Camp-26, 614 at KTP RC and 50 at NYP RC.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><img src=\"/photos/2/Covid-19/55615ujyh.jpg\" alt=\"\" width=\"286\" height=\"214\" />&nbsp; <img src=\"/photos/2/Covid-19/313.jpg\" alt=\"\" width=\"161\" height=\"214\" /></p>\r\n<p>&nbsp;</p>\r\n<p><strong>5. O&amp;M of hand washing devices</strong></p>\r\n<p style=\"text-align: justify;\">Ensuring functional all the hand washing facilities is the challenging activity of NGO Forum. Due to the water crisis, frequent missing the parts of HWDs, lack of interest of community and the mobility restriction of lock down situation, it is very difficult to ensure functional all the facilities. NGO Forum has taken following initiatives for this regards.</p>\r\n<ul>\r\n<li>Responsibility shifted to the Hygiene Promotion Volunteers to refill the dram and hanging soaps to all HWDs.</li>\r\n<li>Additional 02 casual labors were also deployed in each block of all camps to do the work properly.</li>\r\n<li>Required number of logistics are providing to the O&amp;M groups to repairing the HWDs.</li>\r\n<li>To reduce the missing incidents, Camp team trying to enhance the community engagement.</li>\r\n<li>Regular monitoring has been conducted in all camps to ensure the functionality of these HWDs.</li>\r\n<li>Soap and soap hanging net are distributing regularly.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><img src=\"/photos/2/Covid-19/6asd65asd65.jpg\" alt=\"\" width=\"217\" height=\"285\" />&nbsp; <img src=\"/photos/2/Covid-19/sdsa34rw.jpg\" alt=\"\" width=\"381\" height=\"286\" /></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>6. Disinfection of WASH facilities</strong></p>\r\n<p style=\"text-align: justify;\">To reduce the transmission of deadly germs among the people, disinfection of WASH facilities is an important activity of NGO Forum. All Latrines and bathhouses of the camps were disinfected as weekly basis. Besides these some communal facilities like; CIC office, Mosque, Tea stall, Dustbin, drainage networks and some selected public places were targeted for disinfection. As on 11 May, 2020, a total of <strong>23,816</strong> WASH facilities and communal places were disinfected by the disinfection Volunteers with the support of Spray machine and Choline solution.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><img src=\"/photos/2/Covid-19/dsfsdf654sdf.jpg\" alt=\"\" width=\"310\" height=\"232\" />&nbsp; <img src=\"/photos/2/Covid-19/df5665dr.jpg\" alt=\"\" width=\"308\" height=\"232\" />&nbsp; <img src=\"/photos/2/Covid-19/fgdsf4547.jpg\" alt=\"\" width=\"175\" height=\"233\" /></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>7. COVID-19 messages dissemination</strong></p>\r\n<p style=\"text-align: justify;\">Disseminating of awareness message on COVID-19 is the most important emergency activity of NGO Forum under this situation. As the mass gathering events are postponed, so all types of group sessions are not conducted with the communities. In this regards, NGO Forum has taken initiatives to disseminate awareness message through household visit. The process and output of household visits are as below.</p>\r\n<ul>\r\n<li>A Volunteer group (consist of 2) visiting 15-20 households in every day.</li>\r\n<li>Till 11 May, 2020, a total of <strong><em>91,275</em></strong> households have been visited in all working camps.</li>\r\n<li>Through the visit, they are discussion about the COVID awareness message, hand washing message, hand washing demonstration, bucket chlorination and observation on basic hygiene practices.</li>\r\n<li>During the visits, they strictly followed the social distance (minimum 1 meter).</li>\r\n<li>During the visits, they are using sector approved COVID message leaflet and NGO promotional materials.</li>\r\n<li>All Volunteers also using PPE (mask, hand gloves, vast, etc.) during this field activity.</li>\r\n<li>Besides the household visit, awareness messages also disseminating <strong>publicly by using megaphone.</strong> Block wise specific Volunteers are assigned for this work. As on 11 May, it is estimated about <strong><em>145,987</em></strong> population have been covered by this public announce.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><img src=\"/photos/2/Covid-19/dffsd41ds4sd85ds.jpg\" alt=\"\" width=\"314\" height=\"177\" /> &nbsp; <img src=\"/photos/2/Covid-19/74e45e1e.jpg\" alt=\"\" width=\"238\" height=\"178\" /></p>\r\n<p>&nbsp;</p>\r\n<p><strong>8. Soap distribution at HH level</strong></p>\r\n<p style=\"text-align: justify;\">Soap is the most important disinfection and cleaning material which demand has been increased day by day due to increasing the frequency of hand washing of the community. Soap is also required to ensuring the functionality of all hand washing devices. In this circumstance, NGO Forum has been distributing soap to all households during the HH visits. Soap also distributed for all hand washing devices. All Volunteers also receiving soap as weekly basis for their personal hand washing. As on 11 May, 2020 a total of <strong><em>48,467</em></strong> pieces soap have been distributed to the households of all working cams. During the soap distribution it is taken into consideration that there is no contact between soap receiver and distributor.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>9. Ensuring social distance in all aspect of community services</strong></p>\r\n<p style=\"text-align: justify;\">Maintaining social distance is another most important consideration in this COVID-19 situation as the Corona virus is the highly contaminated virus. As per guidance of WHO, in this situation every person should maintain minimum <strong><em>01 meter (3.28 feet)</em></strong> distance from other person to avoid the person to person contamination. So community awareness on this issue is very much important to protect the community. NGO Forum has taken initiatives to disseminate this message to the community. The initiatives are : </p>\r\n<ul>\r\n<li>Message disseminate during household visit.</li>\r\n<li>Message disseminate publicly during announcing by megaphone.</li>\r\n<li>Footstep marking with 01 meter distance at all water collection points and public gathering places.</li>\r\n<li>Involving community volunteers to ensure the social distance at water collection points.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><img src=\"/photos/2/Covid-19/9.1.jpg\" alt=\"\" width=\"324\" height=\"228\" />&nbsp; <img src=\"/photos/2/Covid-19/9.jpg\" alt=\"\" width=\"458\" height=\"229\" /></p>\r\n<p>&nbsp;</p>\r\n<p><strong>10. Ensuring necessary PPE to Volunteers and Staff</strong></p>\r\n<p>During this spreading situation of COVID-19, the personal protection equipment (PPE) is required in every aspect of emergency response for the safety of community volunteer and Staff. To meet the field requirement for Staff and Volunteers following quantity of PPE materials have been procured.</p>\r\n<ul>\r\n<li>Face mask: <strong><em>10,950</em></strong>,</li>\r\n<li>Surgical hand gloves: <strong><em>2,750 pair</em></strong>,</li>\r\n<li>Hand Sanitizer: <strong><em>157 bottle</em></strong></li>\r\n<li>Bathing and laundry soap: <strong><em>173,902 pieces</em></strong></li>\r\n<li>Liquid hand wash: <strong><em>20 bottle</em></strong></li>\r\n<li>Full PPE dress: <strong><em>20 set,</em></strong></li>\r\n<li>Thermal Scanner: <strong><em>06 </em></strong></li>\r\n<li>One time cap: <strong><em>100 pieces</em></strong>,</li>\r\n<li>Liquid antiseptic: <strong><em>5 litre (Savlon)</em></strong></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong><em><img src=\"/photos/2/Covid-19/10.1.jpg\" alt=\"\" width=\"431\" height=\"207\" />&nbsp; <img src=\"/photos/2/Covid-19/10.2.jpg\" alt=\"\" width=\"156\" height=\"208\" /></em></strong></p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: justify;\">To mitigate the risk of pandemic COVID-19 situation, Govt. of Bangladesh declared &lsquo;general leave&rsquo; to all govt. and non-govt. organizations up to 16 May 2002 and it seems to be expanded for the further duration. On the other hand, during this situation, WASH is declared as Emergency activity for the refugees by the sector and local administration. Though the COVID-19 situation is going to worsen day to day in Cox&rsquo;s Bazar area, the team NGO Forum has presence in the field to implement the very essential WASH services since the beginning of the emergency. Though they are very much worried about the risk of COVID-19 and also their personal safety and security, with their commitments and dedications, this team is sacrificing the govt. holidays for the betterment of Refugees. We believe that with this dedication we will overcome this pandemic situation within the nearest coming days.&nbsp;</p>', '2020-12-03 06:09:15', NULL),
(14, 'MIS & Knowledge Management', '<p>In order to support the project management to undertake appropriate decisions and preparing report on the overall project progress in a timely manner, the Management Information System (MIS) has been developed and maintained which is supporting through ensuring the smooth flow of information and keeping track of current activities and information. It is also generating issue focused information on different programmatic aspects enabling the programme management to formulation of relevant operational reports and following some activities perform in regular basis</p>', '2021-02-13 18:13:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projectoffices`
--

CREATE TABLE `projectoffices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `funded_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'funded_logo.jpg',
  `contact_parson` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projectoffices`
--

INSERT INTO `projectoffices` (`id`, `project_location`, `project_name`, `funded_logo`, `contact_parson`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(8, 'Cox’s Bazar', 'Maintaining Access to Safe Water and Sanitation for Rohingyas in Bangladesh', '8.png', 'Md. Ataur Rahman (Project Coordinator)', 'Sayeman Pink Pearl, Plot # 71, 2nd Floor, Block-A, Kolatoli, Cox’s Bazar', '01712029554', 'ngoforum.coxsbazar', '2019-12-27 17:30:46', '2019-12-27 17:30:46'),
(9, 'Cox’s Bazar', 'Improved WaSH Services for Rohingya Refugees and Host Communities in Cox’s Bazar', '9.png', 'Md. Mosarraf Hossain  (Project Coordinator)', 'Sayeman Pink Pearl, Plot # 71, 3rd Floor,  Block-A, Kolatoli, Cox’s Bazar', '01712003560', 'ngof.ukhia2@gmail.com', '2019-12-27 17:25:14', '2019-12-27 17:25:14'),
(12, 'Cox’s Bazar', 'WASH and Protection Support Programme for Rohingya Refugee Camps and Host Community in Cox’s Bazar, Bangladesh, Phase-III', '12.png', 'Bithika Hazra (Project Manager)', 'Sayeman Pink Pearl, Plot # 71, 1st Floor,  Block-A, Kolatoli, Cox’s Bazar', NULL, 'ngofaar@gmail.com', '2019-12-27 17:22:54', '2019-12-27 17:22:54'),
(13, 'Dhaka', 'Integrity Management in WASAs in Bangladesh', '13.jpg', 'Kazi Monir Mosharrof  (Project Focal)', '4/6, Block-E, Lalmatia, Dhaka-1207', '01725011857, Tel: 88-02-58154273-4', 'kazi.monir@ngof.org', '2020-12-01 06:51:52', '2020-12-01 06:51:53'),
(15, 'Mymensingh', 'Resilience, Inclusive & Innovative Cities in Bangladesh (RIICB)', '15.png', 'Sauda Sultana  (Project Coordinator)', 'Shainpukur Garden, 309/25  Sugandha Residential Area , Maskanda  Mymensingh-2200', '01717277713, Tel: (091) 67216', 'ngof.urb@gmail.com', '2019-12-27 17:32:11', '2019-12-27 17:32:11'),
(16, 'Pirojpur', 'Community Led Total Sanitation Project NGO Forum for Public Health', '16.png', 'Md. Abdus Salam  (Team Leader)', 'Pirojpur', '01716-101144', 'ngof.cats@yahoo.com', '2019-12-27 17:33:35', '2019-12-27 17:33:35'),
(17, 'Rangpur', 'Strengthening Pro-Poor and Participatory local Governance in City Corporation', '17.png', 'N.S.M. Asad  (Project Coordinator)', 'House # 84 Road # 2 R.K. Road  Rangpur -5400', '01712682878, Tel: (0521) 64456', 'nsmasad@gmail.com', '2019-12-27 17:35:30', '2019-12-27 17:35:30');

-- --------------------------------------------------------

--
-- Table structure for table `regionaloffices`
--

CREATE TABLE `regionaloffices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_covergae` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regionaloffices`
--

INSERT INTO `regionaloffices` (`id`, `region`, `person`, `street_address`, `phone`, `email`, `district_covergae`, `created_at`, `updated_at`) VALUES
(6, 'Barishal', 'Mr. Md.Mostafa Kamal (RTC Officer)', 'NGO Forum Regional Office, 210, C&B Road North Sagardi (Near Upazila Parishad) Barishal-8200\r\nBarishal-8200', 'Tel: 64699 (0431), \r\nMobile : 01713298523', 'barishal@ngof.org, ngofbarisal@gmail.com', 'Barishal, Barguna, Bhola, Patuakhali, Pirojpur, Jhalakathi', '2019-12-26 06:02:11', '2020-12-01 18:53:36'),
(7, 'Bogura', 'Dr. Mohammad Rezwanul Karim  (Regional Manager)', 'NGO Forum for Public Health\r\n(Previous Polli Biddyut Office Bhaban)\r\nLichutola, Betgari, Banani, Bogura.', 'Tel: 63290 (051), Mobile : 01712762855, 01713347056', 'bogura@ngof.org, ngofbog@gmail.com', 'Bogura, Joypurhat, Naogaon, Sirajganj', '2019-12-26 06:07:38', '2021-02-03 19:45:23'),
(8, 'Chattogram', 'Mr. Md. Anamul Haque  (Regional Accountant)', 'NGO Forum Regional Office, House No.482, Road No.01, Block-B Chandgaon R/A, Chattogram-4212', 'Tel: 670900 (031), Mobile : 01713393516', 'chattogram@ngof.org, ngofctg@yahoo.com', 'Chattogram, Bandarban, Cox’sbazar, Khagrachari, Rangamati', '2019-12-26 06:10:33', '2020-12-01 18:48:09'),
(9, 'Cumilla', 'Mr. Hashibur Rahman (RTC Officer)', 'NGO Forum Regional Office, Imroz Building House # 3, Section - 2, Housing More Cumilla Medical College Road, Cumilla-3500', 'Tel: 68786 (081), Mobile : 01713322320', 'cumilla@ngof.org, ngofcom@yahoo.com', 'Cumilla, Chandpur, Laxmipur, Noakhali, Feni, Brahmmanbaria', '2019-12-26 06:14:04', '2020-12-01 18:48:59'),
(10, 'Dinajpur', 'Mr. Md. Rashidul Haque  (Regional Manager)', 'NGO Forum Regional Office, Holding No.- 1744/8 Mirzapur (Bus Tarminal Road) Suihari, Dinajpur-5200', 'Tel: 61113 (0531), Mobile : 01716434602, 01713341304', 'dinajpur@ngof.org, ngofdin@yahoo.com', 'Dinajpur, Nilphamari, Panchagar, Thakurgaon', '2019-12-26 06:15:50', '2020-12-06 21:44:16'),
(11, 'Faridpur', 'Mr. Md. Monirul Islam (Regional Manager)', 'NGO Forum Regional Office, Ramkrishna Mission Road (Beside Charkamlapur Primary School) Faridpur-7800', 'Tel: 64685 (0631), Mobile : 01713357466', 'faridpur@ngof.org, ngoforumfaridpur@yahoo.com', 'Faridpur, Madaripur, Shariatpur, Gopalganj, Rajbari', '2019-12-26 06:17:40', '2020-12-01 18:49:59'),
(12, 'Jashore', 'Mr. Md. Monirul Islam  (Regional Manager)', 'NGO Forum Regional Office, Biman Bandar Road, Arabpur Jashore-7400', 'Tel: 68831 (0421), Mobile : 01712382133', 'jashore@ngof.org, ngofjsr@yahoo.com', 'Jashore, Jhenaidah, Narail, Magura, Meherpur, Kushtia, Chuadanga', '2019-12-26 06:20:11', '2020-12-06 21:44:40'),
(13, 'Khulna', 'Mr. G.K.M Lutfar Rahim  (Regional Manager)', 'NGO Forum Regional Office, House No.165, Road. No.11 Sonadanga R/A, Khulna-9100', 'Tel: 720249 (041), Mobile : 01711131152, 01713340789', 'Khulna@ngof.org, ngofkhulna@yahoo.com', 'Khulna, Bagerhat, Shatkhira', '2019-12-26 06:21:45', '2020-12-06 21:44:29'),
(14, 'Mymensingh', 'Mr. Md. Rainul Hoque  (RTC Officer)', 'NGO Forum Regional Office, Shainpukur Garden, 309/25 Sughandha Residential Area Maskanda, Mymensingh-2200', 'Tel: 67216 (091), Mob : 01724864726, 01713349778', 'mymensingh@ngof.org, ngofmyn@gmail.com', 'Mymensingh, Kishoreganj, Netrokona', '2019-12-26 06:26:22', '2020-12-06 21:32:00'),
(15, 'Rajshahi', 'Mr. Md. Rabiul Haque  (Regional Manager)', 'NGO Forum Regional Office, 316, Kazihata (Near Bangladesh Betar & Mission Hospital) Rajshahi-6000', 'Tel: 773523 (0721), Mobile : 01714693266, 01713348306', 'rajshahi@ngof.org, ngofraj_04@yahoo.com', 'Pabna, Natore, Rajshahi, Chapainawabganj', '2019-12-26 06:29:00', '2020-12-06 21:44:52'),
(16, 'Rangpur', 'Mr. Shah Md. Ahsan Habib  (Regional Manager)', 'NGO Forum Regional Office, Holding No. 671, Road No. 18, R.K. Road Rangpur-5400', 'Tel: 64456 (0521), Mob : 01750044599, 01713345265', 'rangpur@ngof.org, ngofrang87@gmail.com', 'Rangpur, Kurigram, Gaibandha, Lalmonirhat', '2019-12-26 06:31:33', '2020-12-06 21:45:04'),
(17, 'Sylhet', 'Mr. Khandoker Mosiur Rahman  (Regional Manager)', 'NGO Forum Regional Office, House No. 41, Road No. 14, Block - B Shahjalal Upashahar, Sylhet - 3100', 'Tel: 727725 (0821), Mob : 01713469724', 'sylhet@ngof.org, ngofsylh@yahoo.com', 'Sylhet, Habiganj, Sunamganj, Mouvibazar', '2019-12-26 06:34:11', '2020-12-01 18:51:22'),
(18, 'Tangail', 'Mr. SM Shamim Al Mamun  (RTC Officer)', 'NGO Forum Regional Office, Aziz Mazeda Tower Kumudini College Gate, Biswash Betka Tangail - 1900', 'Tel: 0921-51539, Mob : 01716544818', 'tangail@ngof.org, ngoftg@yahoo.com', 'Tangail, Sherpur, Jamalpu', '2019-12-26 06:37:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resources_categories`
--

CREATE TABLE `resources_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resources_categories`
--

INSERT INTO `resources_categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(8, 'Policy/Strategy', '2019-12-31 05:03:31', NULL),
(9, 'Reports', '2019-12-31 05:03:45', '2019-12-31 05:03:51'),
(10, 'Materials', '2019-12-31 05:04:14', NULL),
(11, 'Case Studies', '2019-12-31 05:04:23', NULL),
(12, 'News Letter', '2019-12-31 05:04:52', NULL),
(13, 'GoB & Others', '2019-12-31 05:05:40', '2019-12-31 05:06:03');

-- --------------------------------------------------------

--
-- Table structure for table `servicecategories`
--

CREATE TABLE `servicecategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servicecategories`
--

INSERT INTO `servicecategories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Option A', '2019-12-04 10:59:07', NULL),
(2, 'Option B', '2019-12-04 10:59:17', NULL),
(3, 'Option C', '2019-12-04 10:59:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `specialpackeges`
--

CREATE TABLE `specialpackeges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parameters` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialpackeges`
--

INSERT INTO `specialpackeges` (`id`, `name`, `price`, `parameters`, `created_at`, `updated_at`) VALUES
(1, 'Packege-1', '3,247', 'pH, Hardness, TDS, Turbidity,\r\nArsenic, Iron, Manganese,\r\nChloride, TC, FC', '2019-12-08 11:05:58', '2019-12-08 11:05:58'),
(2, 'Packege-2', '2,118', 'TDS, Arsenic, Iron,\r\nManganese, FC', '2019-12-08 11:06:11', '2019-12-08 11:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `training_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'training_image.jpg',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `training_image`, `title`, `description`, `name`, `designation`, `phone`, `email`, `location`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', 'Key Information of Training Center', '<p>Strategy&nbsp;is essential for continual growth as well as for planning the future course of action in every dynamic organization. Every organization should have a strategy for ensuring its sustainability. A strategy is one of the tools for identifying the organizational directions that can help lead to the organizational goals. The training cell of NGO Forum has taken an enthusiastic decision for ensuring the utilization of human and non-human resources for the sake of financial self reliance.</p>\r\n<p>NGO Forum&nbsp;is committed to continue its demand-responsive support in capacity building of the partner organizations to assure their active participation in all forms of development actions. Moreover, through an operational mechanism, NGO Forum is trying to strengthen its collaboration with national and international NGOs, government and corporate sectors.</p>\r\n<p>Following that,&nbsp;NGO Forum training cell has taken different initiatives through offering its different products &amp;amo; services and ensuring efficient utilization of its existing resources on way to be financially self sustainable. Training cell is concentrating on strengthening its relationship with the national &amp; international organizations, government and corporate sectors that are playing significant role in marketing training services at both the central and regional levels.</p>\r\n<p>Based on the long term experience&nbsp;in organizing and facilitating different training courses training cell offers various courses for different organizations in the development sector that consists of course designing, development and implementation according to the requirements and as per demand of service recipient&rsquo;s specifications. In 2019 training cell has signed agreement/ enlisted with different national and international organizations and corporate sector.</p>\r\n<p>As a part of training initiative of NGO Forum,&nbsp;it has decentralized its training facilities with one central and thirteen well-established regional training centers with residential facilities. Both are equipped with modern set-up including; A/C conference hall for 50 to 80 participants, single, and double A/C guest room, dormitory of minimum 30- 50 person&rsquo;s capacity, logistics and Wi-Fi support.</p>', 'Mr.Syed Waliul Islam', 'Head of Training', '+88-01815002113', 'wali@ngof.org', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3475.849082241776!2d90.36510721498145!3d23.755178784587056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf50e65ec27b%3A0x8a19083f21fc2dc5!2sNGO%20Forum!5e1!3m2!1sen!2sbd!4v1578368971678!5m2!1sen!2sbd', '2020-01-07 14:49:52', '2020-01-07 14:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rajiur Rahman', 'rajiurrahmanraj2021@gmail.com', NULL, '$2y$10$4UnOL/SCBPXpJXMIzB/SRubJcZ7XrDDHxWmywiEvjxXANcvyW5.zq', NULL, '2019-11-29 05:02:33', '2019-11-29 05:02:33'),
(2, 'Fahim', 'fahim@gmail.com', NULL, '$2y$10$oeimzeVDkPF0gF513wi17eqphWnJpVwpyfWyReqdwwN08htpADF9S', NULL, '2019-12-06 16:33:24', '2021-02-11 00:16:22'),
(3, 'limon', 'limon@gmail.com', NULL, '$2y$10$SMa6UmaGhWHUAWfdlM0t3eC3RkShuwu.FpaDZQlpwrkpCI76Jh5tG', NULL, '2019-12-06 17:40:39', '2019-12-06 17:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'bg_image.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_link`, `bg_image`, `created_at`, `updated_at`) VALUES
(4, 'https://www.youtube.com/watch?v=H5MMxEw_Rig&feature=youtu.be', '4.jpg', '2020-01-14 14:46:08', '2020-01-14 14:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery`
--

CREATE TABLE `video_gallery` (
  `id` int(11) NOT NULL,
  `title` longtext DEFAULT NULL,
  `caption` longtext DEFAULT NULL,
  `video_link` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_gallery`
--

INSERT INTO `video_gallery` (`id`, `title`, `caption`, `video_link`) VALUES
(5, 'Equity-based Safe Water & Sanitation: Allocation in National Budget', 'It is a long time demand of the WaSH sector to enclose separate budget provision for water and sanitation in the national budget to bring the country’s hard-to-reach areas under safe water supply and sanitation coverage. It is expected by us that Bangladesh Govt.’s ‘National Strategy for Water and Sanitation: Hard-to-reach Areas 2012’ will be considered by the policy-makers in 2014-’15 fiscal years’ budget. The issue requires analysis; since the proposed budget in this provision is noticed to be highly urban-centric (83%). Thus, the effectiveness of implementing the mentioned National Strategy is questionable. Under these circumstances, the progress of overall Public Health situation of rural Bangladesh is feared to be held back.', 'https://www.youtube.com/embed/0NvFqa1bDJQ'),
(6, 'Governance in Watsan Sector: Role of Local Government', 'The water and sanitation right is recognized by the United Nations like other rights. Bangladesh Government has ratified the declaration. But the water and sanitation right is not yet constitutionally recognized in Bangladesh. It is impossible to implement any right without constitutional recognition. About 70% people of Bangladesh, who live in rural areas are deprived of water and sanitation rights like other rights. This is deprivation of human rights. The Local Government is accountable to ensure the water and sanitation rights. Governance is closely linked to ensuring any types of rights. So it is very important for the local government institutions to ensure transparency and accountability in order to establish governance in water and sanitation sector.', 'https://www.youtube.com/embed/bjzUstIl3Es'),
(7, 'Water and Sanitation Right: Adverse Effect of Climate Change', 'The adverse effect of climate change brought a massive modification of amount and time of monsoon rain. It is alarmed that the small island countries like Bangladesh partially or completely may sink into sea water. Around 32% exposed coastal areas are the victim of climate change and 27% of total population lives in this region. As a result, 11% of total population will be refugee, the life and livelihood of coastal area people will come under threat and the health means the life-cycle of people will be deteriorated for the lack of water & sanitation, the key indicator of public health. The adverse effect of climate change is also seen in other hard-to-reach areas such in char, haor, extreme drought zones, flood-prone, tea garden and hilly areas resulting as peril to health and life & livelihood of the people.', 'https://www.youtube.com/embed/N_K5yuchJEM'),
(8, 'Safe Water and Sanitation: Rights of the Hard-to-Reach people', 'The United Nation’s declared water and sanitation as human rights in 2010. But a joint scrutiny by UNICEF and WHO shows that 760 million of people of the world do not have access to safe water. These deprived people are mostly hardcore poor and live in hard-to-reach rural area or slums. Actually, rich-poor, women, children, physically disable all have the equal rights to survive, the rights to health and the rights to secure future. It will be comparable to human rights violation if anyone is underprivileged from water and sanitation access. Around 2 crore 60 lac people of Bangladesh do not have access to safe drinking water & sanitation who are living in hard-to-reach areas like chars, haors, exposed coastal areas, hills, flood,  tea garden and extreme drought areas. Right to Water & Satiation is not constitutionally recognized in our country.', 'https://www.youtube.com/embed/MTDry8nLOlM'),
(9, 'Sustainable Management of Water Resources: Actions Needed to Ensure Water Rights', 'The demand of water is increasing day by day in our country for many reasons. It’s not being possible to provide safe water for all for several causes. The rivers are being polluted day by day for lack of sustainable management of water resources and absence of proper enforcement of laws. Moreover, the industrial pollution is worsening the situation. About 1.5 million meters of cubic industrial wastage of around 7,000 factories of Dhaka mixes with the water of Buriganga, Shitallakha, Turag & Balu rivers. River destruction has been noticed in the north-west region. Environment is badly affected as there is lack of water in rivers of this region especially in the dry season. Pressure on groundwater is increasing day by day as the water is being used for agriculture purposes. The conventional technologies are failing as the groundwater level is lowering day by day. If this situation continues then drinkable and usable water will be scarce in future which would be a great challenge to ensure improved public health.', 'https://www.youtube.com/embed/0GXB_C9OKBQ'),
(10, 'Iron Testing Part 1', 'Training facilitated by: Mr. S.M. Shahidullah. Manager, Water Quality Testing Laboratory (WQTL). NGO Forum for Public Health. Bangladesh,', 'https://www.youtube.com/embed/NJMCQr6I_uw'),
(11, 'Iron Testing Part 2', 'Training facilitated by: Mr. S.M. Shahidullah. \r\nManager, Water Quality Testing Laboratory (WQTL). NGO Forum for Public Health. Bangladesh', 'https://www.youtube.com/embed/_kuvo4WhEgE'),
(12, 'Bacteria Testing Procedure', 'Training facilitated by: \r\nMr. S.M. Shahidullah. Manager, \r\nWater Quality Testing Laboratory (WQTL). \r\nNGO Forum for Public Health. Bangladesh', 'https://www.youtube.com/embed/hbegHVhiMVk'),
(13, 'Arsenic Testing by HACH kit - PART 1', 'Training facilitated by:\r\nMr. S.M. Shahidullah.\r\nManager, Water Quality Testing Laboratory (WQTL). \r\nNGO Forum for Public Health. Bangladesh', 'https://www.youtube.com/embed/MWOKpZTZ7AA'),
(14, 'Arsenic Testing by HACH kit - PART 2', 'Training facilitated by:\r\nMr. S.M. Shahidullah.\r\nManager, Water Quality Testing Laboratory (WQTL). \r\nNGO Forum for Public Health. Bangladesh', 'https://www.youtube.com/embed/sStUI0Bg-zY');

-- --------------------------------------------------------

--
-- Table structure for table `whats`
--

CREATE TABLE `whats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whats`
--

INSERT INTO `whats` (`id`, `icon_link`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'fas fa-pencil-ruler', 'IEC / BCC Material Development', 'IEC and BCC materials are to provide information, creating awareness and to motivate', '2019-12-11 04:57:33', NULL),
(2, 'fas fa-users', 'Training Service & Facilities', 'NGO Forum provides different types of traning services and facilities', '2019-12-15 23:36:54', '2019-12-15 23:36:54'),
(3, 'fas fa-tint-slash', 'Water Quality Testing Laboratory', 'WQTL of NGO Forum is the first certified laboratory in the NGO of Bangladesh', '2019-12-11 05:05:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wqtlhomeimages`
--

CREATE TABLE `wqtlhomeimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'wqtlhome_image.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wqtlhomeimages`
--

INSERT INTO `wqtlhomeimages` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(3, 'sample title', '3.jpg', '2019-12-09 16:19:09', '2019-12-09 16:19:11'),
(4, 'sample title', '4.png', '2019-12-09 16:19:29', '2019-12-09 16:19:38'),
(5, 'sample title', '5.jpg', '2019-12-09 16:19:47', '2019-12-09 16:19:50');

-- --------------------------------------------------------

--
-- Table structure for table `wqtlhomes`
--

CREATE TABLE `wqtlhomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wqtlhomes`
--

INSERT INTO `wqtlhomes` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<p>Providing water quality testing services for ensuring safe drinking water through Water Quality Testing Laboratory (WQTL), located at Central Office of NGO Forum at competitive price is one of NGO Forum&rsquo;s major commitments to the society.</p>\r\n<p>Water Quality Testing Laboratory (WQTL) of NGO Forum is the first initiative in the NGOs of Bangladesh equipped with modern technologies like Atomic Absorption Spectrophotometer (AAS) for providing drinking and wastewater testing support to the relevant stakeholders with the capability of testing 40 parameters covering physical, chemical and microbiological parameters including arsenic, BOD, E.coli etc. at a competitive rate. The WQTL produce bacterial testing kit, the &lsquo;MicroKit&rsquo; for checking bacterial contamination of drinking water at doorstep. The WQTL also expanded its service facilities through establishing new testing facilities &lsquo;CoxLab&rsquo; in Cox&rsquo;s Bazar.</p>\r\n<p><strong>Objective :&nbsp;</strong>To Provide sustainable access of quality testing services for both drinking and wastewater to sectoral stakeholder ranges from the community to government and non-government organizations, international agencies and private sector actors at a competitive price.</p>\r\n<p><strong>Service Delivery Mechanism :&nbsp;</strong>Individuals or organization can access service facilities directly from the laboratory or through nearest regional office of NGO Forum. Since the sample collection, preservation and transport plays a vital role on overall quality of test, the laboratory much more concerned on the issues. Usually WQTL provide sample collection containers and written instruction of sample collection procedure as the collection and preservation techniques vary from parameter to parameter.</p>\r\n<p>Services other than water quality test at laboratory like Water quality testing at field, MicroKit, training on water quality/arsenic mitigation issues, training/orientation on sample collection and use of field kits etc. can also be rendered directly from WQTL.</p>\r\n<p><strong>Quality Assurance &amp; Quality control : </strong>The laboratory has designed, developed and documented its policies, systems, procedures and instructions in a way that assures the quality of tests and calibration results. The WQTL follows a standard quality control procedure to monitor the validity of its tests and calibration. The test results are also crosschecked by comparative analysis with different national and international reference laboratories. The laboratory has been recognized nationally and internationally through different performance evaluation exercise organized by WHO, IAEA, BCSIR etc. The WQTL scored 100% in the latest inter-laboratory compare is on exercise (Round Robin #7) conducted by BCSIR.</p>', '2020-01-11 16:27:49', '2020-01-11 16:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `wqtls`
--

CREATE TABLE `wqtls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'wqtl_logo.jpg',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `focal_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `focal_designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `focal_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `focal_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `focal_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wqtls`
--

INSERT INTO `wqtls` (`id`, `logo`, `description`, `name`, `designation`, `phone`, `email`, `location`, `focal_name`, `focal_designation`, `focal_phone`, `focal_email`, `focal_location`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', 'Providing water quality testing services for ensuring safe drinking water through Water Quality Testing Laboratory (WQTL), located at Central Office of NGO Forum at competitive price is one of NGO Forum’s major commitments to the society.\r\n\r\nWater Quality Testing Laboratory (WQTL) of NGO Forum is the first initiative in the NGOs of Bangladesh equipped with modern technologies like Atomic Absorption Spectrophotometer (AAS) for providing drinking and wastewater testing support to the relevant stakeholders with the capability of testing 40 parameters covering physical, chemical and microbiological parameters including arsenic, BOD, E.coli etc. at a competitive rate.', 'Md. Ibrahim Khalil', 'Sr. Chemist, WQTL', '01718 041 895', 'khalil@ngof.org', 'NGO Forum for Public Health, 3/11, Block-E, Lalmatia, Dhaka -1207, Bangladesh', 'S M Shahidullah', 'Manager, Env. & WQ Management Central Office, NGO Forum', '0197 33 66 139', 'shahidullah@ngof.org', 'NGO Forum for Public Health, 3/11, Block-E, Lalmatia, Dhaka -1207, Bangladesh', '2020-01-11 16:31:52', '2020-01-11 16:31:52');

-- --------------------------------------------------------

--
-- Table structure for table `wqtltestrates`
--

CREATE TABLE `wqtltestrates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wqtltestrates`
--

INSERT INTO `wqtltestrates` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(6, 'Physical & Aggregate Properties', '2020-01-11 17:13:56', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutcategories`
--
ALTER TABLE `aboutcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutnetworks`
--
ALTER TABLE `aboutnetworks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `abouutnogforms`
--
ALTER TABLE `abouutnogforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allabouts`
--
ALTER TABLE `allabouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allgenerals`
--
ALTER TABLE `allgenerals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allmetarials`
--
ALTER TABLE `allmetarials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allpolicies`
--
ALTER TABLE `allpolicies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allresources`
--
ALTER TABLE `allresources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allservices`
--
ALTER TABLE `allservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allwqtltestrates`
--
ALTER TABLE `allwqtltestrates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_news`
--
ALTER TABLE `all_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_programmes`
--
ALTER TABLE `all_programmes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ataglancecategories`
--
ALTER TABLE `ataglancecategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ataglances`
--
ALTER TABLE `ataglances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bannercategories`
--
ALTER TABLE `bannercategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cells_departments`
--
ALTER TABLE `cells_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `centerdetails`
--
ALTER TABLE `centerdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `centers`
--
ALTER TABLE `centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactoffices`
--
ALTER TABLE `contactoffices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coxlabs`
--
ALTER TABLE `coxlabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coxlabservices`
--
ALTER TABLE `coxlabservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coxlabtestrates`
--
ALTER TABLE `coxlabtestrates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `existing_projects`
--
ALTER TABLE `existing_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `existing_project_file`
--
ALTER TABLE `existing_project_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `existing_project_gallery`
--
ALTER TABLE `existing_project_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foundingagencies`
--
ALTER TABLE `foundingagencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `globalevents`
--
ALTER TABLE `globalevents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `humanprojects`
--
ALTER TABLE `humanprojects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `humans`
--
ALTER TABLE `humans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `implementeds`
--
ALTER TABLE `implementeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i_c_e_s`
--
ALTER TABLE `i_c_e_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `metarialscategories`
--
ALTER TABLE `metarialscategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `microkits`
--
ALTER TABLE `microkits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `microkitvideos`
--
ALTER TABLE `microkitvideos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photocategories`
--
ALTER TABLE `photocategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photoclickeds`
--
ALTER TABLE `photoclickeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programestatuses`
--
ALTER TABLE `programestatuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programme_categories`
--
ALTER TABLE `programme_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectoffices`
--
ALTER TABLE `projectoffices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regionaloffices`
--
ALTER TABLE `regionaloffices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources_categories`
--
ALTER TABLE `resources_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicecategories`
--
ALTER TABLE `servicecategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialpackeges`
--
ALTER TABLE `specialpackeges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_gallery`
--
ALTER TABLE `video_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whats`
--
ALTER TABLE `whats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wqtlhomeimages`
--
ALTER TABLE `wqtlhomeimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wqtlhomes`
--
ALTER TABLE `wqtlhomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wqtls`
--
ALTER TABLE `wqtls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wqtltestrates`
--
ALTER TABLE `wqtltestrates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutcategories`
--
ALTER TABLE `aboutcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `aboutnetworks`
--
ALTER TABLE `aboutnetworks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `abouutnogforms`
--
ALTER TABLE `abouutnogforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allabouts`
--
ALTER TABLE `allabouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `allgenerals`
--
ALTER TABLE `allgenerals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `allmetarials`
--
ALTER TABLE `allmetarials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `allpolicies`
--
ALTER TABLE `allpolicies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `allresources`
--
ALTER TABLE `allresources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `allservices`
--
ALTER TABLE `allservices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `allwqtltestrates`
--
ALTER TABLE `allwqtltestrates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `all_news`
--
ALTER TABLE `all_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `all_programmes`
--
ALTER TABLE `all_programmes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `ataglancecategories`
--
ALTER TABLE `ataglancecategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ataglances`
--
ALTER TABLE `ataglances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bannercategories`
--
ALTER TABLE `bannercategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cells_departments`
--
ALTER TABLE `cells_departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `centerdetails`
--
ALTER TABLE `centerdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `centers`
--
ALTER TABLE `centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contactoffices`
--
ALTER TABLE `contactoffices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coxlabs`
--
ALTER TABLE `coxlabs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coxlabservices`
--
ALTER TABLE `coxlabservices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `coxlabtestrates`
--
ALTER TABLE `coxlabtestrates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `existing_projects`
--
ALTER TABLE `existing_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `existing_project_file`
--
ALTER TABLE `existing_project_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `existing_project_gallery`
--
ALTER TABLE `existing_project_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `foundingagencies`
--
ALTER TABLE `foundingagencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `globalevents`
--
ALTER TABLE `globalevents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `humanprojects`
--
ALTER TABLE `humanprojects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `humans`
--
ALTER TABLE `humans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `implementeds`
--
ALTER TABLE `implementeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `i_c_e_s`
--
ALTER TABLE `i_c_e_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metarialscategories`
--
ALTER TABLE `metarialscategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `microkits`
--
ALTER TABLE `microkits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `microkitvideos`
--
ALTER TABLE `microkitvideos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `photocategories`
--
ALTER TABLE `photocategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `photoclickeds`
--
ALTER TABLE `photoclickeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `programestatuses`
--
ALTER TABLE `programestatuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `programme_categories`
--
ALTER TABLE `programme_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `projectoffices`
--
ALTER TABLE `projectoffices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `regionaloffices`
--
ALTER TABLE `regionaloffices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `resources_categories`
--
ALTER TABLE `resources_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `servicecategories`
--
ALTER TABLE `servicecategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `specialpackeges`
--
ALTER TABLE `specialpackeges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video_gallery`
--
ALTER TABLE `video_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `whats`
--
ALTER TABLE `whats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wqtlhomeimages`
--
ALTER TABLE `wqtlhomeimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wqtlhomes`
--
ALTER TABLE `wqtlhomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wqtls`
--
ALTER TABLE `wqtls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wqtltestrates`
--
ALTER TABLE `wqtltestrates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
