

CREATE TABLE `candidate` (
  `Cid` int(10) NOT NULL AUTO_INCREMENT,
  `Cname` varchar(30) NOT NULL,
  `Cemail` varchar(30) NOT NULL,
  `Cphone` varchar(13) NOT NULL,
  `Cadress` varchar(100) NOT NULL,
  `Cdescription` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `vote` varchar(100) NOT NULL,
  PRIMARY KEY (`Cid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO candidate VALUES("1","abel","abeldereje23@gmail.com","+251925869067"," dffg"," fdgg","image/24ba1aea948340812d8937a698c49af1eb.jpg","Mw==");
INSERT INTO candidate VALUES("2","sadfnm","fdghjkl@gmail.com","+251982869067","fdg"," fgfhh","image/b350a15b697cce974f4eff46a1806871vote_logo.jpg","MQ==");
INSERT INTO candidate VALUES("3","dfgm","danayhadis13@gmail.com","4564569872144","ertregt"," gfgfg","image/5556d1bf718dcde17a376bd5a54865e1logo.jpg","MQ==");



CREATE TABLE `cd` (
  `CDid` int(11) NOT NULL AUTO_INCREMENT,
  `Cname` varchar(100) NOT NULL,
  `Cemail` varchar(100) NOT NULL,
  `Cphone` varchar(100) NOT NULL,
  `Cage` int(3) NOT NULL,
  `Cimage` varchar(100) NOT NULL,
  `CEL` varchar(100) NOT NULL,
  `Csex` varchar(100) NOT NULL,
  `Caddress` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `vote` varchar(100) NOT NULL,
  PRIMARY KEY (`CDid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO cd VALUES("18","sadfnm","abcd@gmail.com","+251925869067","22","image/db878f0a056e376fc94cb20949cf6614eb.jpg","Deploma","Male"," sdfgh","image/db878f0a056e376fc94cb20949cf6614logoo.png","MQ==");
INSERT INTO cd VALUES("19","abel","abeldereje23@gmail.com","","0","image/1a69781f6b149e12b796c157e0aef74c","Deploma","Male"," ","image/1a69781f6b149e12b796c157e0aef74c","1");



CREATE TABLE `cd_register_user` (
  `cd_register_user_id` int(100) NOT NULL AUTO_INCREMENT,
  `CV_id` varchar(100) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  PRIMARY KEY (`cd_register_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO cd_register_user VALUES("1","","helu","helu19seni@gmail.com","$2y$10$cgrWZnRp9.BH0JnwoeU2VeU1zMghGM9HeLPwaZY1Cjqrxmku1xu5e","eb69ec3b34db9fc42da12bd9c3a8ad37","verified");
INSERT INTO cd_register_user VALUES("3","1443","Abel","abeldereje23@gmail.com","$2y$10$oYLbGERroAPAnNZB5pbXjeHH8I8zUzY24edyp2GHuZsBsYP054eG2","4558dbb6f6f8bb2e16d03b85bde76e2c","verified");



CREATE TABLE `check_student_data` (
  `SD_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `M_name` varchar(100) NOT NULL,
  `L_name` varchar(100) NOT NULL,
  `Mom_name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `dep` varchar(100) NOT NULL,
  `club` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `votes` varchar(100) NOT NULL,
  PRIMARY KEY (`SD_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO check_student_data VALUES("1365","asd","Dereje","fdf","ssf","45","female","CS","Red Cross","DDU","yes");
INSERT INTO check_student_data VALUES("1443","Abel","Dereje","Balcha","mami","20","male","IS","Debube tamra","HU","no");



CREATE TABLE `contact_us` (
  `Uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `website` varchar(100) NOT NULL,
  `msg` varchar(200) NOT NULL,
  PRIMARY KEY (`Uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `dh` (
  `Did` int(100) NOT NULL AUTO_INCREMENT,
  `Dname` varchar(100) NOT NULL,
  `Demail` varchar(100) NOT NULL,
  `Dphone` varchar(100) NOT NULL,
  `Dage` int(100) NOT NULL,
  `D_image` varchar(100) NOT NULL,
  `DEL` varchar(100) NOT NULL,
  `Dsex` varchar(100) NOT NULL,
  `Daddress` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `vote` varchar(100) NOT NULL,
  PRIMARY KEY (`Did`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `dh_register_user` (
  `dh_register_user_id` int(100) NOT NULL AUTO_INCREMENT,
  `DV_id` varchar(100) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  PRIMARY KEY (`dh_register_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO dh_register_user VALUES("1","","helu","helu19seni@gmail.com","$2y$10$wnYTjkNNGZ1oqNRjjfELq.1AO.u99UTCVE0TYzenRj0w7SLwbH1cK","9826ee8eb827f4adacdb88e615550686","verified");
INSERT INTO dh_register_user VALUES("2","1443","Abel","abeldereje23@gmail.com","$2y$10$EjujBgu1KkSZaIdZ7vgT8O0qfXyITjJSGx.94t8AWPpha64GW7v0q","8cb9014a886acf4a5e33c252fa396512","verified");



CREATE TABLE `import_college_data` (
  `CV_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `M_name` varchar(100) NOT NULL,
  `L_name` varchar(100) NOT NULL,
  `Mom_name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `bf` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `votes` varchar(100) NOT NULL,
  PRIMARY KEY (`CV_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO import_college_data VALUES("1365","asd","Dereje","fdf","ssf","45","female","Helina","Engaged","Haramaya","no");
INSERT INTO import_college_data VALUES("1443","Abel","Dereje","Balcha","mami","20","male","Sami","unmarried","USA","yes");



CREATE TABLE `import_dep_data` (
  `DV_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `M_name` varchar(100) NOT NULL,
  `L_name` varchar(100) NOT NULL,
  `Mom_name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `aunt` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `votes` varchar(100) NOT NULL,
  PRIMARY KEY (`DV_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO import_dep_data VALUES("1365","asd","Dereje","fdf","ssf","45","female","Elsabet","Engaged","Haramaya","no");
INSERT INTO import_dep_data VALUES("1443","Abel","Dereje","Balcha","mami","20","male","Felekech","unmarried","USA","yes");



CREATE TABLE `import_university_data` (
  `UV_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `M_name` varchar(100) NOT NULL,
  `L_name` varchar(100) NOT NULL,
  `Mom_name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `E_level` varchar(100) NOT NULL,
  `house_num` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `votes` varchar(100) NOT NULL,
  PRIMARY KEY (`UV_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO import_university_data VALUES("1365","asd","Dereje","fdf","ssf","45","female","master","13/98","gima","yes");
INSERT INTO import_university_data VALUES("1443","Abel","Dereje","Balcha","mami","20","male","php","14-04","sheger","no");



CREATE TABLE `manage_contact` (
  `MC_id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `tele` varchar(100) NOT NULL,
  `postal` varchar(100) NOT NULL,
  PRIMARY KEY (`MC_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO manage_contact VALUES("2","abke@gmail.com","hharamaya university","+251925869067","+1134568711","434345");



CREATE TABLE `manage_duration` (
  `manage_duration_id` int(11) NOT NULL AUTO_INCREMENT,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `txt` varchar(100) NOT NULL,
  PRIMARY KEY (`manage_duration_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO manage_duration VALUES("8","2019-02-23","2021-03-02","");



CREATE TABLE `manage_duration_cd` (
  `manage_duration_cd_id` int(11) NOT NULL AUTO_INCREMENT,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `txt` varchar(100) NOT NULL,
  PRIMARY KEY (`manage_duration_cd_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO manage_duration_cd VALUES("2","2019-03-01","2019-03-05","");



CREATE TABLE `manage_duration_dh` (
  `manage_duration_dh_id` int(11) NOT NULL AUTO_INCREMENT,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `txt` varchar(100) NOT NULL,
  PRIMARY KEY (`manage_duration_dh_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO manage_duration_dh VALUES("1","2019-03-03","2019-03-04","dsasd");



CREATE TABLE `manage_duration_su` (
  `manage_duration_su_id` int(11) NOT NULL AUTO_INCREMENT,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `txt` varchar(100) NOT NULL,
  PRIMARY KEY (`manage_duration_su_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO manage_duration_su VALUES("1","2019-03-03","2019-03-04","");



CREATE TABLE `manage_duration_up` (
  `manage_duration_up_id` int(11) NOT NULL AUTO_INCREMENT,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `txt` varchar(100) NOT NULL,
  PRIMARY KEY (`manage_duration_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO manage_duration_up VALUES("1","2020-03-04","2020-03-04","goodd");



CREATE TABLE `manage_homepage` (
  `homepage_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `txt` varchar(3000) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`homepage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO manage_homepage VALUES("2","Home","DangerWhy should I vote Danger alert preview. This fWhy should I vote Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. fWhy should I vote Danger alert preview. This fghgh alert preview. This fghgh 	

              ","image/d041ba900903085b8641d50dd1834e28logoo.png");



CREATE TABLE `post_info` (
  `Pid` int(11) NOT NULL AUTO_INCREMENT,
  `Stime` varchar(100) NOT NULL,
  `Etime` varchar(100) NOT NULL,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `txt` varchar(200) NOT NULL,
  PRIMARY KEY (`Pid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO post_info VALUES("18","6:00:00","10:00:00","2019-05-05","2019-05-14","gkjhk");



CREATE TABLE `register_user` (
  `register_user_id` int(100) NOT NULL AUTO_INCREMENT,
  `A_id` varchar(100) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  PRIMARY KEY (`register_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO register_user VALUES("6","","Dani","danayhadis30@gmail.com","$2y$10$lFo2MjP19QG0tR4hNcIhbui/KG6Pdo1unyM9xZtPbsFLDs5H/cowi","ca9eac0c76de0cab71d5b50951fe4c5f","verified");
INSERT INTO register_user VALUES("15","1443/091","Abel","abeldereje23@gmail.com","$2y$10$1QmfVWhEIy9vCF3wpjjNbuLD48SxzuHmwky4Dr7HgIIazsVCMfEWG","a8aa681aaa4588a8dbd3b42b26d59a1a","verified");



CREATE TABLE `su` (
  `Sid` int(100) NOT NULL AUTO_INCREMENT,
  `Sname` varchar(100) NOT NULL,
  `Semail` varchar(100) NOT NULL,
  `Sphone` varchar(100) NOT NULL,
  `Sage` int(3) NOT NULL,
  `Sgrade` varchar(30) NOT NULL,
  `Syear` varchar(7) NOT NULL,
  `Sclub` varchar(30) NOT NULL,
  `Saddress` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `vote` varchar(100) NOT NULL,
  PRIMARY KEY (`Sid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO su VALUES("2","gfdg","asdfds@gmail.com","12345678","0","","1st","Red Cross"," ","image/a4a8174c247871f37a258bdd6a190a4c","Mw==");
INSERT INTO su VALUES("3","asfdsaf","","","0","","1st","Red Cross"," ","image/4617878118bbd478600d00ea7a682c70","MQ==");



CREATE TABLE `su_register_user` (
  `su_register_user_id` int(100) NOT NULL AUTO_INCREMENT,
  `SD_id` varchar(100) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  PRIMARY KEY (`su_register_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO su_register_user VALUES("2","","helu","helu19seni@gmail.com","$2y$10$xKCpOG7jeNtti8D47xQAGecMzVZd0Ul8HM6/dfgtJZEpcC8J8JdAO","986588f34114bfa55d1cd3301938785c","verified");
INSERT INTO su_register_user VALUES("5","1365","Abel","abeldereje23@gmail.com","$2y$10$OOjadtg29Cw7PnIGnUGutuLqWtauuhnhT2H6IrArlW7TGyNMhnUAe","cb57cdb7cc459dc6fbbc33f91485b5e2","verified");



CREATE TABLE `subject` (
  `A_id` varchar(100) NOT NULL,
  `S_name` varchar(30) NOT NULL,
  `SL_name` varchar(255) NOT NULL,
  `SGF_name` varchar(200) NOT NULL,
  `SMom_name` varchar(30) NOT NULL,
  `Sage` int(11) NOT NULL,
  `Sbirth_place` varchar(200) NOT NULL,
  `Sbirth_year` varchar(100) NOT NULL,
  `Saddress` varchar(100) NOT NULL,
  `Ssex` varchar(100) NOT NULL,
  `votes` varchar(100) NOT NULL,
  PRIMARY KEY (`A_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO subject VALUES("13/05","asd","Dereje","fdf","ssf","45","ewew","8786","cvc","female","no");
INSERT INTO subject VALUES("1365/05","asd","Dereje","fdf","ssf","45","ewew","8786","cvc","female","no");
INSERT INTO subject VALUES("14/091","Abel","Dereje","Balcha","mami","20","Goggetti","1987","Goggetti","Male","no");
INSERT INTO subject VALUES("1443/091","Abel","Dereje","Balcha","mami","20","Goggetti","1987","Goggetti","Male","yes");



CREATE TABLE `up` (
  `Pid` int(100) NOT NULL AUTO_INCREMENT,
  `Pname` varchar(100) NOT NULL,
  `Pemail` varchar(100) NOT NULL,
  `Pphone` varchar(100) NOT NULL,
  `Page` int(3) NOT NULL,
  `exp_image` varchar(100) NOT NULL,
  `PEL` varchar(100) NOT NULL,
  `Psex` varchar(100) NOT NULL,
  `Paddress` varchar(100) NOT NULL,
  `Pdisc` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `vote` varchar(100) NOT NULL,
  PRIMARY KEY (`Pid`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO up VALUES("15","abel","abel23@gmail.com","2434343434","0","image/5a3cae661fdb1ef2d2b4287d0120275cvote_logo.jpg","Deploma","Male"," "," ","image/5a3cae661fdb1ef2d2b4287d0120275clogin.jpg","MQ==");



CREATE TABLE `up_register_user` (
  `up_register_user_id` int(100) NOT NULL AUTO_INCREMENT,
  `UV_id` varchar(100) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  PRIMARY KEY (`up_register_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO up_register_user VALUES("6","","helu","helu19seni@gmail.com","$2y$10$nRQGEvG9MOtinKoqkRPg/uKzt3aUm4SFUCJF607.BgMinEA6qysFy","cd0cbcc668fe4bc58e0af3cc7e0a653d","verified");
INSERT INTO up_register_user VALUES("18","1365","Abel","abeldereje23@gmail.com","$2y$10$XUfEfgRasUkYhIOTifg0pO7s0a8kLrcbPvj0iecJbUDobY2R8Pmn6","24664885f97cee26dacdb223f35f76db","verified");



CREATE TABLE `users` (
  `Uid` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`Uid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("1","admin","12345","admin");
INSERT INTO users VALUES("2","EB","12345","eb");



CREATE TABLE `users_email` (
  `Eid` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `isEmailConfirmed` tinyint(4) NOT NULL,
  `token` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`Eid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


