-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2019 at 01:50 PM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tccw`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_apicustom`
--

CREATE TABLE IF NOT EXISTS `cms_apicustom` (
  `id` int(10) unsigned NOT NULL,
  `permalink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tabel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kolom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_query_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sql_where` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `method_type` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` longtext COLLATE utf8mb4_unicode_ci,
  `responses` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_apikey`
--

CREATE TABLE IF NOT EXISTS `cms_apikey` (
  `id` int(10) unsigned NOT NULL,
  `screetkey` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hit` int(11) DEFAULT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_dashboard`
--

CREATE TABLE IF NOT EXISTS `cms_dashboard` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_email_queues`
--

CREATE TABLE IF NOT EXISTS `cms_email_queues` (
  `id` int(10) unsigned NOT NULL,
  `send_at` datetime DEFAULT NULL,
  `email_recipient` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_from_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_from_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_cc_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_content` text COLLATE utf8mb4_unicode_ci,
  `email_attachments` text COLLATE utf8mb4_unicode_ci,
  `is_sent` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_email_templates`
--

CREATE TABLE IF NOT EXISTS `cms_email_templates` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_email_templates`
--

INSERT INTO `cms_email_templates` (`id`, `name`, `slug`, `subject`, `content`, `description`, `from_name`, `from_email`, `cc_email`, `created_at`, `updated_at`) VALUES
(1, 'Email Template Forgot Password Backend', 'forgot_password_backend', NULL, '<p>Hi,</p><p>Someone requested forgot password, here is your new password : </p><p>[password]</p><p><br></p><p>--</p><p>Regards,</p><p>Admin</p>', '[password]', 'System', 'system@crudbooster.com', NULL, '2019-05-08 00:55:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_logs`
--

CREATE TABLE IF NOT EXISTS `cms_logs` (
  `id` int(10) unsigned NOT NULL,
  `ipaddress` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `useragent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `id_cms_users` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_logs`
--

INSERT INTO `cms_logs` (`id`, `ipaddress`, `useragent`, `url`, `description`, `details`, `id_cms_users`, `created_at`, `updated_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'http://localhost/mproject/public/admin/login', 'admin@admin.com login with IP Address ::1', '', 1, '2019-05-08 00:57:14', NULL),
(2, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:66.0) Gecko/20100101 Firefox/66.0', 'http://localhost/mproject/public/admin/login', 'admin@admin.com login with IP Address ::1', '', 1, '2019-05-08 01:29:56', NULL),
(3, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'http://localhost/tccw/admin/login', 'admin@admin.com login with IP Address ::1', '', 1, '2019-05-13 12:17:38', NULL),
(4, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'http://localhost/tccw/admin/logout', 'admin@admin.com logout', '', 1, '2019-05-13 12:21:31', NULL),
(5, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'http://localhost/tccw/admin/login', 'admin@admin.com login with IP Address ::1', '', 1, '2019-05-13 12:22:10', NULL),
(6, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'http://localhost/tccw/admin/settings/delete/11', 'Delete data default_paper_size at Settings', '', 1, '2019-05-13 12:35:08', NULL),
(7, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'http://localhost/tccw/admin/settings/delete/14', 'Delete data api_debug_mode at Settings', '', 1, '2019-05-13 12:35:20', NULL),
(8, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'http://localhost/tccw/admin/settings/add-save', 'Add New Data address at Settings', '', 1, '2019-05-13 12:43:56', NULL),
(9, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'http://localhost/tccw/admin/settings/add-save', 'Add New Data email at Settings', '', 1, '2019-05-13 12:44:07', NULL),
(10, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'http://localhost/tccw/admin/settings/add-save', 'Add New Data phone at Settings', '', 1, '2019-05-13 12:44:25', NULL),
(11, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'http://localhost/tccw/admin/settings/delete/15', 'Delete data google_api_key at Settings', '', 1, '2019-05-13 12:44:39', NULL),
(12, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'http://localhost/tccw/admin/settings/delete/16', 'Delete data google_fcm_key at Settings', '', 1, '2019-05-13 12:44:44', NULL),
(13, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'http://localhost/tccw/admin/settings/add-save', 'Add New Data facebook at Settings', '', 1, '2019-05-13 12:45:54', NULL),
(14, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'http://localhost/tccw/admin/settings/add-save', 'Add New Data twitter at Settings', '', 1, '2019-05-13 12:46:05', NULL),
(15, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'http://localhost/tccw/admin/settings/add-save', 'Add New Data g_plus at Settings', '', 1, '2019-05-13 12:46:15', NULL),
(16, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'http://localhost/tccw/admin/settings/add-save', 'Add New Data youtube at Settings', '', 1, '2019-05-13 12:46:24', NULL),
(17, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'http://localhost/tccw/admin/settings/add-save', 'Add New Data instagram at Settings', '', 1, '2019-05-13 12:47:17', NULL),
(18, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'http://localhost/tccw/admin/menu_management/add-save', 'Add New Data Setting at Menu Management', '', 1, '2019-05-13 12:51:10', NULL),
(19, '122.160.25.201', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'http://122.160.25.201/tccw/admin/login', 'admin@admin.com login with IP Address 122.160.25.201', '', 1, '2019-05-14 09:38:01', NULL),
(20, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://localhost/tccw/admin/login', 'admin@admin.com login with IP Address ::1', '', 1, '2019-05-16 21:52:03', NULL),
(21, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://localhost/tccw/admin/menu_management/delete/1', 'Delete data Setting at Menu Management', '', 1, '2019-05-16 22:16:01', NULL),
(22, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://localhost/tccw/admin/menu_management/add-save', 'Add New Data Setting at Menu Management', '', 1, '2019-05-16 22:17:09', NULL),
(23, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://localhost/tccw/admin/menu_management/edit-save/5', 'Update data Setting at Menu Management', '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>path</td><td>/settings/show?group=Application+Setting&m=0</td><td>admin/settings/show?group=Application+Setting&m=0</td></tr><tr><td>sorting</td><td>4</td><td></td></tr></tbody></table>', 1, '2019-05-16 22:17:47', NULL),
(24, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://localhost/tccw/admin/menu_management/edit-save/5', 'Update data Setting at Menu Management', '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>path</td><td>admin/settings/show?group=Application+Setting&m=0</td><td>/admin/settings/show?group=Application+Setting&m=0</td></tr><tr><td>sorting</td><td>4</td><td></td></tr></tbody></table>', 1, '2019-05-16 22:18:11', NULL),
(25, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://localhost/tccw/admin/menu_management/edit-save/5', 'Update data Setting at Menu Management', '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>path</td><td>/admin/settings/show?group=Application+Setting&m=0</td><td>settings/show?group=Application+Setting&m=0</td></tr><tr><td>sorting</td><td>4</td><td></td></tr></tbody></table>', 1, '2019-05-16 22:18:34', NULL),
(26, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://localhost/tccw/admin/menu_management/edit-save/5', 'Update data Setting at Menu Management', '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>path</td><td>settings/show?group=Application+Setting&m=0</td><td>http://localhost/tccw/admin/settings/show?group=Application+Setting&m=0</td></tr><tr><td>sorting</td><td>4</td><td></td></tr></tbody></table>', 1, '2019-05-16 22:19:10', NULL),
(27, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://localhost/tccw/admin/login', 'admin@admin.com login with IP Address ::1', '', 1, '2019-05-16 22:22:27', NULL),
(28, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://localhost/tccw/admin/home_slider/add-save', 'Add New Data  at Home Slider', '', 1, '2019-05-16 22:24:01', NULL),
(29, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://localhost/tccw/admin/home_slider/add-save', 'Add New Data  at Home Slider', '', 1, '2019-05-16 22:24:11', NULL),
(30, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://localhost/tccw/admin/home_slider/add-save', 'Add New Data  at Home Slider', '', 1, '2019-05-16 22:24:21', NULL),
(31, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://localhost/tccw/admin/login', 'admin@admin.com login with IP Address ::1', '', 1, '2019-05-19 08:13:48', NULL),
(32, '122.160.25.201', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:65.0) Gecko/20100101 Firefox/65.0', 'http://122.160.25.201/tccw/admin/login', 'admin@admin.com login with IP Address 122.160.25.201', '', 1, '2019-05-20 07:03:08', NULL),
(33, '122.160.25.201', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:65.0) Gecko/20100101 Firefox/65.0', 'http://122.160.25.201/tccw/admin/menu_management/edit-save/5', 'Update data Setting at Menu Management', '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>path</td><td>http://localhost/tccw/admin/settings/show?group=Application+Setting&m=0</td><td>22.160.25.201/tccw/admin/settings/show?group=Application+Setting&m=0</td></tr><tr><td>sorting</td><td>4</td><td></td></tr></tbody></table>', 1, '2019-05-20 07:04:04', NULL),
(34, '122.160.25.201', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:65.0) Gecko/20100101 Firefox/65.0', 'http://122.160.25.201/tccw/admin/menu_management/edit-save/5', 'Update data Setting at Menu Management', '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>path</td><td>22.160.25.201/tccw/admin/settings/show?group=Application+Setting&m=0</td><td>http://122.160.25.201/tccw/admin/settings/show?group=Application+Setting&m=0</td></tr><tr><td>sorting</td><td>4</td><td></td></tr></tbody></table>', 1, '2019-05-20 07:05:29', NULL),
(35, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://localhost/tccw/admin/login', 'admin@admin.com login with IP Address ::1', '', 1, '2019-05-20 14:00:26', NULL),
(36, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://localhost/tccw/admin/home_sections/add-save', 'Add New Data Test Only at Home Section', '', 1, '2019-05-20 14:05:30', NULL),
(37, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://localhost/tccw/admin/login', 'admin@admin.com login with IP Address ::1', '', 1, '2019-05-20 22:59:20', NULL),
(38, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://localhost/tccw/admin/home_sections/delete/1', 'Delete data Test Only at Home Section', '', 1, '2019-05-20 22:59:30', NULL),
(39, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://localhost/tccw/admin/home_sections/add-save', 'Add New Data Once you become fearless, <strong> life becomes limitless. </strong> at Home Section', '', 1, '2019-05-20 23:02:00', NULL),
(40, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://localhost/tccw/admin/home_sections/add-save', 'Add New Data Be  <strong> #StrongHER </strong> at Home Section', '', 1, '2019-05-20 23:03:20', NULL),
(41, '139.167.184.210', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://122.160.25.201/tccw/admin/login', 'admin@admin.com login with IP Address 139.167.184.210', '', 1, '2019-05-21 11:17:50', NULL),
(42, '139.167.184.210', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://122.160.25.201/tccw/admin/settings/edit-save/22', 'Update data  at Settings', '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>name</td><td>g_plus</td><td></td></tr><tr><td>content</td><td>googleplus</td><td></td></tr><tr><td>dataenum</td><td></td><td></td></tr><tr><td>helper</td><td></td><td></td></tr><tr><td>label</td><td>G-plus</td><td>Google Plus</td></tr></tbody></table>', 1, '2019-05-21 11:34:28', NULL),
(43, '183.83.174.36', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'http://122.160.25.201/tccw/admin/login', 'admin@admin.com login with IP Address 183.83.174.36', '', 1, '2019-05-22 06:57:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_menus`
--

CREATE TABLE IF NOT EXISTS `cms_menus` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'url',
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_dashboard` tinyint(1) NOT NULL DEFAULT '0',
  `id_cms_privileges` int(11) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_menus`
--

INSERT INTO `cms_menus` (`id`, `name`, `type`, `path`, `color`, `icon`, `parent_id`, `is_active`, `is_dashboard`, `id_cms_privileges`, `sorting`, `created_at`, `updated_at`) VALUES
(2, 'Home Slider', 'Route', 'AdminHomeSliderControllerGetIndex', NULL, 'fa fa-th-list', 0, 1, 0, 1, 1, '2019-05-16 21:52:48', NULL),
(3, 'Testimonial', 'Route', 'AdminTestimonialControllerGetIndex', NULL, 'fa fa-bookmark', 0, 1, 0, 1, 3, '2019-05-16 21:56:14', NULL),
(4, 'Home Section', 'Route', 'AdminHomeSectionsControllerGetIndex', NULL, 'fa fa-list-alt', 0, 1, 0, 1, 2, '2019-05-16 22:02:58', NULL),
(5, 'Setting', 'URL', 'http://122.160.25.201/tccw/admin/settings/show?group=Application+Setting&m=0', 'normal', 'fa fa-gears', 0, 1, 0, 1, 4, '2019-05-16 22:17:09', '2019-05-20 07:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `cms_menus_privileges`
--

CREATE TABLE IF NOT EXISTS `cms_menus_privileges` (
  `id` int(10) unsigned NOT NULL,
  `id_cms_menus` int(11) DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_menus_privileges`
--

INSERT INTO `cms_menus_privileges` (`id`, `id_cms_menus`, `id_cms_privileges`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(11, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_moduls`
--

CREATE TABLE IF NOT EXISTS `cms_moduls` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_protected` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_moduls`
--

INSERT INTO `cms_moduls` (`id`, `name`, `icon`, `path`, `table_name`, `controller`, `is_protected`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Notifications', 'fa fa-cog', 'notifications', 'cms_notifications', 'NotificationsController', 1, 1, '2019-05-08 00:55:52', NULL, NULL),
(2, 'Privileges', 'fa fa-cog', 'privileges', 'cms_privileges', 'PrivilegesController', 1, 1, '2019-05-08 00:55:52', NULL, NULL),
(3, 'Privileges Roles', 'fa fa-cog', 'privileges_roles', 'cms_privileges_roles', 'PrivilegesRolesController', 1, 1, '2019-05-08 00:55:52', NULL, NULL),
(4, 'Users Management', 'fa fa-users', 'users', 'cms_users', 'AdminCmsUsersController', 0, 1, '2019-05-08 00:55:52', NULL, NULL),
(5, 'Settings', 'fa fa-cog', 'settings', 'cms_settings', 'SettingsController', 1, 1, '2019-05-08 00:55:52', NULL, NULL),
(6, 'Module Generator', 'fa fa-database', 'module_generator', 'cms_moduls', 'ModulsController', 1, 1, '2019-05-08 00:55:52', NULL, NULL),
(7, 'Menu Management', 'fa fa-bars', 'menu_management', 'cms_menus', 'MenusController', 1, 1, '2019-05-08 00:55:52', NULL, NULL),
(8, 'Email Templates', 'fa fa-envelope-o', 'email_templates', 'cms_email_templates', 'EmailTemplatesController', 1, 1, '2019-05-08 00:55:52', NULL, NULL),
(9, 'Statistic Builder', 'fa fa-dashboard', 'statistic_builder', 'cms_statistics', 'StatisticBuilderController', 1, 1, '2019-05-08 00:55:52', NULL, NULL),
(10, 'API Generator', 'fa fa-cloud-download', 'api_generator', '', 'ApiCustomController', 1, 1, '2019-05-08 00:55:52', NULL, NULL),
(11, 'Log User Access', 'fa fa-flag-o', 'logs', 'cms_logs', 'LogsController', 1, 1, '2019-05-08 00:55:52', NULL, NULL),
(12, 'Home Slider', 'fa fa-th-list', 'home_sliders', 'home_sliders', 'AdminHomeSliderController', 0, 0, '2019-05-16 21:52:48', NULL, NULL),
(13, 'Testimonial', 'fa fa-bookmark', 'testimonial', 'testimonial', 'AdminTestimonialController', 0, 0, '2019-05-16 21:56:14', NULL, NULL),
(14, 'Home Section', 'fa fa-list-alt', 'home_sections', 'home_sections', 'AdminHomeSectionsController', 0, 0, '2019-05-16 22:02:58', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_notifications`
--

CREATE TABLE IF NOT EXISTS `cms_notifications` (
  `id` int(10) unsigned NOT NULL,
  `id_cms_users` int(11) DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_privileges`
--

CREATE TABLE IF NOT EXISTS `cms_privileges` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_superadmin` tinyint(1) DEFAULT NULL,
  `theme_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_privileges`
--

INSERT INTO `cms_privileges` (`id`, `name`, `is_superadmin`, `theme_color`, `created_at`, `updated_at`) VALUES
(1, 'Super Administrator', 1, 'skin-red', '2019-05-08 00:55:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_privileges_roles`
--

CREATE TABLE IF NOT EXISTS `cms_privileges_roles` (
  `id` int(10) unsigned NOT NULL,
  `is_visible` tinyint(1) DEFAULT NULL,
  `is_create` tinyint(1) DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL,
  `is_edit` tinyint(1) DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  `id_cms_moduls` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_privileges_roles`
--

INSERT INTO `cms_privileges_roles` (`id`, `is_visible`, `is_create`, `is_read`, `is_edit`, `is_delete`, `id_cms_privileges`, `id_cms_moduls`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 0, 0, 0, 1, 1, '2019-05-08 00:55:52', NULL),
(2, 1, 1, 1, 1, 1, 1, 2, '2019-05-08 00:55:52', NULL),
(3, 0, 1, 1, 1, 1, 1, 3, '2019-05-08 00:55:52', NULL),
(4, 1, 1, 1, 1, 1, 1, 4, '2019-05-08 00:55:52', NULL),
(5, 1, 1, 1, 1, 1, 1, 5, '2019-05-08 00:55:52', NULL),
(6, 1, 1, 1, 1, 1, 1, 6, '2019-05-08 00:55:52', NULL),
(7, 1, 1, 1, 1, 1, 1, 7, '2019-05-08 00:55:52', NULL),
(8, 1, 1, 1, 1, 1, 1, 8, '2019-05-08 00:55:52', NULL),
(9, 1, 1, 1, 1, 1, 1, 9, '2019-05-08 00:55:52', NULL),
(10, 1, 1, 1, 1, 1, 1, 10, '2019-05-08 00:55:52', NULL),
(11, 1, 0, 1, 0, 1, 1, 11, '2019-05-08 00:55:52', NULL),
(12, 1, 1, 1, 1, 1, 1, 12, NULL, NULL),
(13, 1, 1, 1, 1, 1, 1, 13, NULL, NULL),
(14, 1, 1, 1, 1, 1, 1, 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_settings`
--

CREATE TABLE IF NOT EXISTS `cms_settings` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `content_input_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dataenum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `helper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `group_setting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_settings`
--

INSERT INTO `cms_settings` (`id`, `name`, `content`, `content_input_type`, `dataenum`, `helper`, `created_at`, `updated_at`, `group_setting`, `label`) VALUES
(1, 'login_background_color', NULL, 'text', NULL, 'Input hexacode', '2019-05-08 00:55:52', NULL, 'Login Register Style', 'Login Background Color'),
(2, 'login_font_color', NULL, 'text', NULL, 'Input hexacode', '2019-05-08 00:55:52', NULL, 'Login Register Style', 'Login Font Color'),
(3, 'login_background_image', NULL, 'upload_image', NULL, NULL, '2019-05-08 00:55:52', NULL, 'Login Register Style', 'Login Background Image'),
(4, 'email_sender', 'er.abhayendra@gmail.com', 'text', NULL, NULL, '2019-05-08 00:55:52', NULL, 'Email Setting', 'Email Sender'),
(5, 'smtp_driver', 'smtp', 'select', 'smtp,mail,sendmail', NULL, '2019-05-08 00:55:52', NULL, 'Email Setting', 'Mail Driver'),
(6, 'smtp_host', 'smtp.mailtrap.io', 'text', NULL, NULL, '2019-05-08 00:55:52', NULL, 'Email Setting', 'SMTP Host'),
(7, 'smtp_port', '2525', 'text', NULL, 'default 25', '2019-05-08 00:55:52', NULL, 'Email Setting', 'SMTP Port'),
(8, 'smtp_username', 'd508b999f2355c', 'text', NULL, NULL, '2019-05-08 00:55:52', NULL, 'Email Setting', 'SMTP Username'),
(9, 'smtp_password', '55b60f105ac43c', 'text', NULL, NULL, '2019-05-08 00:55:52', NULL, 'Email Setting', 'SMTP Password'),
(10, 'appname', 'TCCW', 'text', NULL, NULL, '2019-05-08 00:55:52', NULL, 'Application Setting', 'Application Name'),
(12, 'logo', 'uploads/2019-05/cbd6999a44fe5566338cb77ca7d7920c.png', 'upload_image', NULL, NULL, '2019-05-08 00:55:52', NULL, 'Application Setting', 'Logo'),
(13, 'favicon', 'uploads/2019-05/da6cfdb50ed64b7ae799a1c7633a624f.JPG', 'upload_image', NULL, NULL, '2019-05-08 00:55:52', NULL, 'Application Setting', 'Favicon'),
(17, 'address', '29 Land St, Lorem City, Itly', 'text', NULL, NULL, '2019-05-13 12:43:56', NULL, 'Application Setting', 'Address'),
(18, 'email', 'er.abhayendra@gmail.com', 'email', NULL, NULL, '2019-05-13 12:44:07', NULL, 'Application Setting', 'Email'),
(19, 'phone', '+91-9999999999', 'text', NULL, NULL, '2019-05-13 12:44:25', NULL, 'Application Setting', 'phone'),
(20, 'facebook', 'Facebook', 'text', NULL, NULL, '2019-05-13 12:45:54', NULL, 'Application Setting', 'Facebook'),
(21, 'twitter', 'Twitter', 'text', NULL, NULL, '2019-05-13 12:46:05', NULL, 'Application Setting', 'Twitter'),
(22, 'g_plus', 'googleplus', 'text', NULL, NULL, '2019-05-13 12:46:15', '2019-05-21 11:34:28', 'Application Setting', 'Google Plus'),
(23, 'youtube', 'Youtube', 'text', NULL, NULL, '2019-05-13 12:46:24', NULL, 'Application Setting', 'Youtube'),
(24, 'instagram', 'Instagram', 'text', NULL, NULL, '2019-05-13 12:47:17', NULL, 'Application Setting', 'Instagram');

-- --------------------------------------------------------

--
-- Table structure for table `cms_statistics`
--

CREATE TABLE IF NOT EXISTS `cms_statistics` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_statistic_components`
--

CREATE TABLE IF NOT EXISTS `cms_statistic_components` (
  `id` int(10) unsigned NOT NULL,
  `id_cms_statistics` int(11) DEFAULT NULL,
  `componentID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `component_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_name` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `config` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_users`
--

CREATE TABLE IF NOT EXISTS `cms_users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_users`
--

INSERT INTO `cms_users` (`id`, `name`, `photo`, `email`, `password`, `id_cms_privileges`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Super Admin', NULL, 'admin@admin.com', '$2y$10$SF5GfHX4PS9b1DlKq0Z5vO44azrFUa1gEaYV5rRjeRXKBf4kS9Z7q', 1, '2019-05-08 00:55:52', NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `home_sections`
--

CREATE TABLE IF NOT EXISTS `home_sections` (
  `id` int(11) NOT NULL,
  `title` varchar(512) NOT NULL,
  `subtitle` varchar(512) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_sections`
--

INSERT INTO `home_sections` (`id`, `title`, `subtitle`, `content`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Once you become fearless, <strong> life becomes limitless. </strong>', 'null', '<div class="container-fluid">\r\n        <div class="row">\r\n            <div class="section_about__content">\r\n                <div class="col-md-6">\r\n                    <div class="about__pic">\r\n                        <img src="http://localhost/tccw/public/assets/img/lisa.png" class="img-responsive" alt="...">\r\n                    </div> <!-- / .about__pic -->\r\n                </div>\r\n                <div class="col-md-6">\r\n                    <div class="about__desc">\r\n                        <p class="about_desc__subtitle">About us</p>\r\n                        <h3 class="about_desc__title">I''m Lisa!</h3>\r\n                        <p class="about_desc__desc">Whatever your situation may be, investing in myself is the best thing I’ve done and the best thing that you can do for yourself. Having my own business has only been able to help me grow and develop and create relationships in a more meaningful way. I created The Confidence Crown to share my tips and tricks to getting into the business I’m in today! And I’m ready to teach you just how to do so.</p>\r\n                        <h3 class="about_desc__title">Are you ready for your crown?</h3>\r\n                        <h4 class="about_desc__quote">Keep scrolling down and be a part of the Confidence Crown community!</h4>\r\n                        <a href="http://localhost/tccw" class="btn btn-default">Learn More</a>\r\n                    </div> <!-- / .about__desc -->\r\n                </div>\r\n            </div> <!-- / .section_about__content -->\r\n        </div> <!-- / .row -->\r\n    </div>', 1, '2019-05-20 23:02:00', NULL),
(3, 'Be  <strong> #StrongHER </strong>', '', '<section class="section__best-rooms">\r\n    <div class="container">\r\n        <div class="row">\r\n            <div class="col-sm-12">\r\n                <h2 class="section__title">Be  <strong> #StrongHER </strong></h2>\r\n                <div class="divider">\r\n                    <hr class="line1">\r\n                    <hr class="line2">\r\n                    <hr class="line1">\r\n                </div> <!-- / .divider -->\r\n            </div>\r\n        </div> <!-- / .row -->\r\n    </div> <!-- / .container -->\r\n    <div class="container">\r\n        <div class="best-rooms__content">\r\n            <div class="row">\r\n                <div class="col-sm-6">\r\n                    <div class="">\r\n                        <img src="http://localhost/tccw/public/assets/img/book_square.png" class="img-responsive" alt="...">\r\n                    </div>\r\n                </div>\r\n                <div class="col-sm-6" style="text-align:center; ">\r\n                    <h4 class="about_desc__quote" style="font-size:70px; padding-top:30%; ">Be <br> #StrongHER</h4>\r\n                    <a href="http://localhost/tccw" class="btn btn-default">Buy my new book now </a>\r\n                </div>\r\n            </div> <!-- / .row -->\r\n        </div> <!-- / .best-rooms__content -->\r\n    </div> <!-- / .container -->\r\n</section>', 1, '2019-05-20 23:03:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE IF NOT EXISTS `home_sliders` (
  `id` int(11) NOT NULL,
  `slider_image` varchar(200) NOT NULL,
  `position` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `slider_image`, `position`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/1/2019-05/slide_bg_1.jpg', 1, 1, '2019-05-16 22:24:01', NULL),
(2, 'uploads/1/2019-05/slide_bg_2.jpg', 2, 1, '2019-05-16 22:24:11', NULL),
(3, 'uploads/1/2019-05/slide_bg_3.jpg', 3, 1, '2019-05-16 22:24:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2016_08_07_145904_add_table_cms_apicustom', 1),
(2, '2016_08_07_150834_add_table_cms_dashboard', 1),
(3, '2016_08_07_151210_add_table_cms_logs', 1),
(4, '2016_08_07_151211_add_details_cms_logs', 1),
(5, '2016_08_07_152014_add_table_cms_privileges', 1),
(6, '2016_08_07_152214_add_table_cms_privileges_roles', 1),
(7, '2016_08_07_152320_add_table_cms_settings', 1),
(8, '2016_08_07_152421_add_table_cms_users', 1),
(9, '2016_08_07_154624_add_table_cms_menus_privileges', 1),
(10, '2016_08_07_154624_add_table_cms_moduls', 1),
(11, '2016_08_17_225409_add_status_cms_users', 1),
(12, '2016_08_20_125418_add_table_cms_notifications', 1),
(13, '2016_09_04_033706_add_table_cms_email_queues', 1),
(14, '2016_09_16_035347_add_group_setting', 1),
(15, '2016_09_16_045425_add_label_setting', 1),
(16, '2016_09_17_104728_create_nullable_cms_apicustom', 1),
(17, '2016_10_01_141740_add_method_type_apicustom', 1),
(18, '2016_10_01_141846_add_parameters_apicustom', 1),
(19, '2016_10_01_141934_add_responses_apicustom', 1),
(20, '2016_10_01_144826_add_table_apikey', 1),
(21, '2016_11_14_141657_create_cms_menus', 1),
(22, '2016_11_15_132350_create_cms_email_templates', 1),
(23, '2016_11_15_190410_create_cms_statistics', 1),
(24, '2016_11_17_102740_create_cms_statistic_components', 1),
(25, '2017_06_06_164501_add_deleted_at_cms_moduls', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` int(11) NOT NULL,
  `title` varchar(512) NOT NULL,
  `content` text NOT NULL,
  `name` varchar(512) NOT NULL,
  `designation` varchar(512) NOT NULL,
  `image` varchar(512) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms_apicustom`
--
ALTER TABLE `cms_apicustom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_apikey`
--
ALTER TABLE `cms_apikey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_dashboard`
--
ALTER TABLE `cms_dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_email_queues`
--
ALTER TABLE `cms_email_queues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_email_templates`
--
ALTER TABLE `cms_email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_logs`
--
ALTER TABLE `cms_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_menus`
--
ALTER TABLE `cms_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_menus_privileges`
--
ALTER TABLE `cms_menus_privileges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_moduls`
--
ALTER TABLE `cms_moduls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_notifications`
--
ALTER TABLE `cms_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_privileges`
--
ALTER TABLE `cms_privileges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_privileges_roles`
--
ALTER TABLE `cms_privileges_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_settings`
--
ALTER TABLE `cms_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_statistics`
--
ALTER TABLE `cms_statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_statistic_components`
--
ALTER TABLE `cms_statistic_components`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_users`
--
ALTER TABLE `cms_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sections`
--
ALTER TABLE `home_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cms_apicustom`
--
ALTER TABLE `cms_apicustom`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_apikey`
--
ALTER TABLE `cms_apikey`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_dashboard`
--
ALTER TABLE `cms_dashboard`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_email_queues`
--
ALTER TABLE `cms_email_queues`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_email_templates`
--
ALTER TABLE `cms_email_templates`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cms_logs`
--
ALTER TABLE `cms_logs`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `cms_menus`
--
ALTER TABLE `cms_menus`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cms_menus_privileges`
--
ALTER TABLE `cms_menus_privileges`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `cms_moduls`
--
ALTER TABLE `cms_moduls`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `cms_notifications`
--
ALTER TABLE `cms_notifications`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_privileges`
--
ALTER TABLE `cms_privileges`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cms_privileges_roles`
--
ALTER TABLE `cms_privileges_roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `cms_settings`
--
ALTER TABLE `cms_settings`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `cms_statistics`
--
ALTER TABLE `cms_statistics`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_statistic_components`
--
ALTER TABLE `cms_statistic_components`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_users`
--
ALTER TABLE `cms_users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `home_sections`
--
ALTER TABLE `home_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
