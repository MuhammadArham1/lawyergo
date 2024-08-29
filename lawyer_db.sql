-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 09:27 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyer_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

CREATE TABLE `customer_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_tb`
--

INSERT INTO `customer_tb` (`id`, `name`, `email`, `password`) VALUES
(1, 'M.Waleed Zuberi', 'mwzuberi@email.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_tb`
--

CREATE TABLE `lawyer_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `timings` varchar(50) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `bio` varchar(2000) NOT NULL,
  `picture` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyer_tb`
--

INSERT INTO `lawyer_tb` (`id`, `name`, `email`, `password`, `city`, `timings`, `speciality`, `bio`, `picture`) VALUES
(1, 'Michael Jordan', 'mjordan@email.com', '123456789', 'San-Antonio', '12 - 10', 'Personal Injury Lawyer', 'If you’ve suffered injuries in an accident—for example, a car accident—the type of lawyer you’ll want to see is a personal injury lawyer. These types of attorneys specialize in obtaining compensation in the form of damages for injuries caused by other parties.', './images/lawyer1.jpg'),
(2, 'Robert Smith', 'rsmith@email.com', '123456789', 'Chicago', '8-6', 'Estate Planning Lawyer', 'The estate planning lawyer specializes in wills and trusts, and can help you to draw up a will to pass on your assets. Among other estate planning legal services, this type of lawyer can help you set up a trust which will help take care of your children’s financial needs.', './images/lawyer2.jpg'),
(3, 'Malcolm Rogers', 'mrogers@email.com', '123456789', 'Austin', '9-5', 'Bankruptcy Lawyer', 'If you’re having financial difficulties and are contemplating bankruptcy proceedings, you’ll want to consult with a bankruptcy attorney. This type of lawyer can advise you on your eligibility for bankruptcy, the types of bankruptcy you’ll want to consider and which type would be best for your particular circumstances, as well as any potential alternatives to bankruptcy which you may want to explore.', './images/lawyer3.jpg'),
(4, 'Maverick Paul', 'mpaul@email.com', '123456789', 'Austinville', '10-8', 'Intellectual Property Lawyer', 'Also known as an IP attorney, an intellectual property lawyer can advise you with regard to issues relating to intellectual property, such as copyrights, trademarks, patents, industrial design and trade secrets.', './images/lawyer4.jpg'),
(5, 'Alex Brook', 'abrook2email.com', '123456789', 'Maryland', '12 - 10', 'Employment Lawyer', 'Whether you’re a company that’s having a problem with an employee, or an individual who’s having problems with the company you work for, an employment lawyer can generally provide advice about legal issues which arise from an employment contract or within an employment relationship.', './images/lawyer5.jpg'),
(6, 'Jacob Edison', 'jedison@email.com', '123456789', 'Detroit', '11-7', 'Corporate Lawyer', 'If you own a corporation, you’ll likely find yourself consulting with a corporate attorney on many different occasions. A corporate lawyer will be able to help you with issues related to the formation of your corporation, general corporate governance issues and corporate compliance issues.', './images/lawyer6.jpg'),
(7, 'Ban Conner', 'bconner@email.com', '123456789', 'Arlington', '10-8', 'Immigration Lawyer', 'When you’re dealing with immigration issues, you’ll want to consult with an immigration lawyer. This type of lawyer should be well versed in dealing with immigration issues such as visas, citizenship, refugee or asylum and green cards.', './images/lawyer7.jpg'),
(8, 'Alexa Bliss', 'abliss@email.com', '123456789', 'Miami', '12 - 10', 'Criminal Lawyer', 'If you or a loved one has been charged with a crime, a criminal lawyer is the type of lawyer you should turn to. A criminal lawyer will be knowledgeable in areas related to criminal law, including issues related to bail, arraignment, arrest, pleas and any issues relating to the criminal trial itself.', './images/lawyer8.jpg'),
(9, 'Mark Allen', 'mallen@email.com', '123456789', 'Jacksonville', '9-5', 'Medical Malpractice Lawyer', 'Doctors do occasionally make mistakes, and if you’re facing the consequences of a medical mistake such as a medical misdiagnosis or inaccurate treatment, a lawyer who specializes in medical malpractice issues can be particular helpful.', './images/lawyer9.jpg'),
(10, 'Daniel Cooper', 'dcooper@email.com', '123456789', 'Dalton', '11-9', 'Worker\'s Compensation Lawyer', 'If you’ve been injured while on the job, or have had to face the death of a loved one as a result of a workplace accident or occupational disease, a lawyer who specializes in workers compensation law can help you navigate the issues you face, such as the extent of the employer’s fault and the amount of benefits to which you are entitled.', './images/lawyer10.jpg'),
(11, 'Manish Gupta', 'mgupta@email.com', '123456789', 'Boston', '8-6', 'Contract Lawyer', 'A contract lawyer specializes in the handling of issues arising from contracts, and can be consulted for a wide range of contract-related issues. Whether you’re unsure if you should sign a particular contract, or if something has gone wrong with a contract you’ve already signed, an attorney who specializes in contracts is the type of lawyer who should have the experience and expertise required to help you resolve your contractual issues.', './images/lawyer11.jpg'),
(12, 'K.D.Pathak', 'kdpathak@email.com', '123456789', 'Seattle', '9-7', 'Social Security Disability Lawyer', 'The Social Security Disability system can be a particularly complex system in which to navigate. An attorney who specializes in Social Security Disability issues can help you with any step in the Social Security Disability process, including assisting you with eligibility issues, launching an appeal of a decision to deny you benefits and dealing with the reduction or termination of your benefits.', './images/lawyer12.jpg'),
(13, 'Gloria Williams', 'gwilliams@email.com', '123456789', 'Phoenix', '9-8', 'Civil Litigation Lawyer', 'Suing someone, or responding to someone’s lawsuit against you? An attorney who specializes in civil litigation will be your best legal option. You may also find that different attorneys will specialize in different litigation areas as well. For example, a corporate litigation lawyer should have the expertise to help you with commercial litigation issues.', './images/lawyer13.jpg'),
(14, 'Martin Luther', 'mluther@email.com', '123456789', 'Los Angles', '8-6', 'General Practice Lawyer', 'Unlike lawyers who specialize in a particular area of law, a general practice lawyer has a practice that handles a wide range of legal issues. Different general practice attorneys will have different areas of law with which they are most comfortable, so if you consult with a general practice lawyer, it’s always prudent to discuss his or her experience in handling the type of legal issue you’re facing.', './images/lawyer14.jpg'),
(15, 'Matt Murdock', 'mmurdock@email.com', '123456789', 'Columbus', '10-8', 'Contract Lawyer', 'A contract lawyer specializes in the handling of issues arising from contracts, and can be consulted for a wide range of contract-related issues. Whether you’re unsure if you should sign a particular contract, or if something has gone wrong with a contract you’ve already signed, an attorney who specializes in contracts is the type of lawyer who should have the experience and expertise required to help you resolve your contractual issues.', './images/lawyer15.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_tb`
--
ALTER TABLE `customer_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyer_tb`
--
ALTER TABLE `lawyer_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_tb`
--
ALTER TABLE `customer_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lawyer_tb`
--
ALTER TABLE `lawyer_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
