-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2024 at 03:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystrika`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `campaign_id` int(11) NOT NULL,
  `lead_link_id` int(250) NOT NULL,
  `campaign_name` varchar(250) NOT NULL,
  `campaign_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `campaign_timezone` varchar(250) NOT NULL,
  `campaign_status` varchar(250) NOT NULL DEFAULT 'Draft',
  `campaign_contact` varchar(250) NOT NULL DEFAULT '00',
  `campaign_bounce` varchar(250) NOT NULL DEFAULT '00',
  `campaign_action` tinyint(1) DEFAULT 2,
  `sequance` int(250) NOT NULL DEFAULT 1,
  `sequence_time` int(250) NOT NULL DEFAULT 0,
  `stop_emails` tinyint(1) NOT NULL DEFAULT 0,
  `open_traking` tinyint(1) NOT NULL DEFAULT 0,
  `enable_signature` tinyint(1) NOT NULL DEFAULT 0,
  `sending_limit` int(250) NOT NULL,
  `good_by_message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`campaign_id`, `lead_link_id`, `campaign_name`, `campaign_date`, `campaign_timezone`, `campaign_status`, `campaign_contact`, `campaign_bounce`, `campaign_action`, `sequance`, `sequence_time`, `stop_emails`, `open_traking`, `enable_signature`, `sending_limit`, `good_by_message`) VALUES
(92, 1235768527, 'pakistan', '2024-06-25 14:06:17.181226', 'Asia/Karachi', 'Draft', '00', '00', 1, 2, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `email_id` int(250) NOT NULL,
  `email_campaign` varchar(250) NOT NULL,
  `email_sequance` varchar(250) NOT NULL,
  `email_after_day` int(11) NOT NULL,
  `email_subject` varchar(250) NOT NULL,
  `email_pre_header` varchar(250) NOT NULL,
  `email_message` varchar(250) NOT NULL,
  `stop_email` tinyint(1) NOT NULL,
  `email_sender_email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`email_id`, `email_campaign`, `email_sequance`, `email_after_day`, `email_subject`, `email_pre_header`, `email_message`, `stop_email`, `email_sender_email`) VALUES
(154, '1235768527', '1', 0, 'pakistan', 'pakistan', 'ali', 0, '229,230');

-- --------------------------------------------------------

--
-- Table structure for table `email_reply`
--

CREATE TABLE `email_reply` (
  `email_reply_id` int(250) NOT NULL,
  `email_reply_emails` varchar(250) NOT NULL,
  `email_unibox_id` varchar(250) NOT NULL,
  `email_from_email_id` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email_reply`
--

INSERT INTO `email_reply` (`email_reply_id`, `email_reply_emails`, `email_unibox_id`, `email_from_email_id`) VALUES
(54, 'Muneeb 300<br />\r\n<br />\r\nOn Tue, Jul 9, 2024, 6:44 PM Waleed Raza <muneebyousaf89@gmail.com> wrote:<br />\r\n<br />\r\n> Muneeb 89<br />\r\n><br />\r\n', 'Re: Pakistan', 'muneebyousaf300@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `lead_id` int(250) NOT NULL,
  `lead_name` varchar(250) NOT NULL,
  `lead_email` varchar(250) NOT NULL,
  `lead_status` varchar(250) NOT NULL,
  `lead_action` tinyint(1) NOT NULL DEFAULT 1,
  `lead_email_send` tinyint(1) NOT NULL,
  `lead_email_open` tinyint(1) NOT NULL DEFAULT 0,
  `lead_email_click` tinyint(1) NOT NULL DEFAULT 0,
  `lead_email_reply` tinyint(1) NOT NULL DEFAULT 0,
  `lead_campaign` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`lead_id`, `lead_name`, `lead_email`, `lead_status`, `lead_action`, `lead_email_send`, `lead_email_open`, `lead_email_click`, `lead_email_reply`, `lead_campaign`) VALUES
(158, 'Waleed', 'muneebyousaf300@gmail.com', '', 1, 0, 0, 0, 0, '1235768527'),
(159, 'Nadeem', 'muneebyousaf91@gmail.com', '', 1, 0, 0, 0, 0, '1235768527');

-- --------------------------------------------------------

--
-- Table structure for table `sender_emails`
--

CREATE TABLE `sender_emails` (
  `sender_id` int(250) NOT NULL,
  `sender_name` varchar(250) NOT NULL,
  `sender_email` varchar(250) NOT NULL,
  `sender_success` varchar(250) NOT NULL DEFAULT '000',
  `sender_send` varchar(250) NOT NULL DEFAULT '00',
  `sender_reply` varchar(250) NOT NULL DEFAULT '00',
  `sender_saved` varchar(250) NOT NULL DEFAULT '00',
  `sender_received` varchar(250) NOT NULL DEFAULT '00',
  `sender_control` tinyint(1) NOT NULL DEFAULT 1,
  `sender_account_type` varchar(250) NOT NULL,
  `sender_imap_host` varchar(250) NOT NULL,
  `sender_imap_port` varchar(250) NOT NULL,
  `sender_imap_username` varchar(250) NOT NULL,
  `sender_imap_password` varchar(250) NOT NULL,
  `sender_smtp_host` varchar(250) NOT NULL,
  `sender_smtp_port` varchar(250) NOT NULL,
  `sender_smtp_username` varchar(250) NOT NULL,
  `sender_smtp_password` varchar(250) NOT NULL,
  `sender_app_password` varchar(250) DEFAULT NULL,
  `sender_email_signature` varchar(250) NOT NULL,
  `sender_email_code` varchar(250) NOT NULL,
  `sender_email_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `sender_max_email` varchar(250) NOT NULL,
  `sender_max_reply` varchar(250) NOT NULL,
  `sender_wormup_days` varchar(255) NOT NULL,
  `sender_start_time` time(6) NOT NULL,
  `sender_end_time` time(6) NOT NULL,
  `sender_time_zone` varchar(250) NOT NULL,
  `email_status` varchar(250) DEFAULT 'no',
  `email_open_datetime` varchar(250) NOT NULL,
  `sender_campaign_config` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sender_emails`
--

INSERT INTO `sender_emails` (`sender_id`, `sender_name`, `sender_email`, `sender_success`, `sender_send`, `sender_reply`, `sender_saved`, `sender_received`, `sender_control`, `sender_account_type`, `sender_imap_host`, `sender_imap_port`, `sender_imap_username`, `sender_imap_password`, `sender_smtp_host`, `sender_smtp_port`, `sender_smtp_username`, `sender_smtp_password`, `sender_app_password`, `sender_email_signature`, `sender_email_code`, `sender_email_date`, `sender_max_email`, `sender_max_reply`, `sender_wormup_days`, `sender_start_time`, `sender_end_time`, `sender_time_zone`, `email_status`, `email_open_datetime`, `sender_campaign_config`) VALUES
(229, 'Muneeb Yousaf', 'muneebyousaf89@gmail.com', '000', '98', '00', '00', '00', 1, 'gmail', '', '', '', '', '', '', '', '', 'qqsl jyvg mmze whxx', '', '24480f93fd7e0ebd5c72fae09d2d8564', '2024-05-21 08:08:25.719782', '', '', '', '00:00:00.000000', '00:00:00.000000', '', 'no', '', 0),
(230, 'Muneeb', 'muneebyousaf91@gmail.com', '000', '91', '00', '00', '00', 1, 'gmail', '', '', '', '', '', '', '', '', 'tbwc obcc annn dokr', '', '3e3688fb7d8067d3f7c6301eb26eb14f', '2024-05-21 09:04:39.772787', '', '', '', '00:00:00.000000', '00:00:00.000000', '', 'no', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `unibox`
--

CREATE TABLE `unibox` (
  `unibox_id` int(250) NOT NULL,
  `unibox_mail_to` varchar(250) NOT NULL,
  `unibox_mail_from` varchar(250) NOT NULL,
  `unibox_mail_date` varchar(250) NOT NULL,
  `unibox_subject` varchar(250) NOT NULL,
  `unibox_new` tinyint(1) NOT NULL DEFAULT 1,
  `unibox_sent` tinyint(1) NOT NULL,
  `unibox_auto_reply` tinyint(1) NOT NULL,
  `unibox_outofoffice` tinyint(1) NOT NULL,
  `unibox_status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unibox`
--

INSERT INTO `unibox` (`unibox_id`, `unibox_mail_to`, `unibox_mail_from`, `unibox_mail_date`, `unibox_subject`, `unibox_new`, `unibox_sent`, `unibox_auto_reply`, `unibox_outofoffice`, `unibox_status`) VALUES
(97, 'muneebyousaf89@gmail.com', 'muneebyousaf300@gmail.com', '09-07-2024', 'Re: Pakistan', 0, 0, 0, 0, 'intrusted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`campaign_id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `email_reply`
--
ALTER TABLE `email_reply`
  ADD PRIMARY KEY (`email_reply_id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`lead_id`);

--
-- Indexes for table `sender_emails`
--
ALTER TABLE `sender_emails`
  ADD PRIMARY KEY (`sender_id`);

--
-- Indexes for table `unibox`
--
ALTER TABLE `unibox`
  ADD PRIMARY KEY (`unibox_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `campaign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `email_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `email_reply`
--
ALTER TABLE `email_reply`
  MODIFY `email_reply_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `lead_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `sender_emails`
--
ALTER TABLE `sender_emails`
  MODIFY `sender_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `unibox`
--
ALTER TABLE `unibox`
  MODIFY `unibox_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
