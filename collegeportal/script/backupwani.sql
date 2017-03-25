drop database if exists  db_collgeportal;
create database db_collgeportal;
use db_collgeportal;

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `txtId` int(11) NOT NULL AUTO_INCREMENT,
  `txtUserType` char(1) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `txtUsername` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `txtPassword` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `txtIsActive` char(1) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`txtId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

insert into `tbl_user`(`txtUserType`,`txtUsername`,`txtPassword`) value ('1','admin@gmail.com','123!@#123');
insert into `tbl_user`(`txtUserType`,`txtUsername`,`txtPassword`) value ('2','teacher@gmail.com','123!@#123');
insert into `tbl_user`(`txtUserType`,`txtUsername`,`txtPassword`) value ('3','student@gmail.com','123!@#123');

CREATE TABLE IF NOT EXISTS `tbl_department` (
  `txtId` int(11) NOT NULL AUTO_INCREMENT,
  `txtDeptName` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `txtIsActive` char(1) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`txtId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

INSERT INTO `tbl_department` 
(`txtId`, `txtDeptName`, `txtIsActive`) VALUES
(1, 'Information Technology', 'Y'),
(2, 'Computer Sciences', 'Y'),
(3, 'Computer Teachnology', 'N');
 

CREATE TABLE IF NOT EXISTS `tbl_student` (
  `txtId` int(11) NOT NULL AUTO_INCREMENT,
  `txtUserType` varchar(5) NOT NULL,
  `txtFirstName` varchar(30) DEFAULT NULL,
  `txtDepartment` varchar(100) DEFAULT NULL,
  `txtMobileNumber` varchar(10) DEFAULT NULL,
  `txtEmailId` varchar(50) DEFAULT NULL,
  `txtPassword` varchar(100) DEFAULT NULL,
  `txtEntryDate` varchar(30) DEFAULT NULL,
  `txtIsActive` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`txtId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `tbl_attendence` (
  `txtId` int(11) NOT NULL AUTO_INCREMENT,
  `txtStudentId` varchar(5) NOT NULL,
  `txtInTime` varchar(30) DEFAULT NULL,
  `txtOutTime` varchar(30) DEFAULT NULL,
  `txtRfIdValue` varchar(100) DEFAULT NULL,
  `txtEntryDate` varchar(30) DEFAULT NULL,
  `txtIsActive` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`txtId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;