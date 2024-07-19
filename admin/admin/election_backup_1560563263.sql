

CREATE TABLE `candidate` (
  `Cid` int(10) NOT NULL AUTO_INCREMENT,
  `Cname` varchar(30) NOT NULL,
  `Cemail` varchar(30) NOT NULL,
  `Cphone` varchar(13) NOT NULL,
  `Cadress` varchar(100) NOT NULL,
  `Cdescription` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `vote` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  PRIMARY KEY (`Cid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO candidate VALUES("1","Haftom","haftu12@gmail.com","+251925869067"," ghjhdf"," yukfdf","image/7e30ff4bba344759b934f5d19fd8c59deb.jpg","Mg==","$2y$10$bU7MHUpVfYKXaZy4L9jJh.HdQVlEj/AuN7o6nGoR88DmhpZQgNTaK","9328494eae1f7b446aeca7ed0a14a520","not verified");
INSERT INTO candidate VALUES("2","Geme","hilu@gmail.com","123456789012"," sdfghjkl"," sdfghj","./image/309e298ed9de977ff64d084bf9d08822eb.jpg","Mg==","$2y$10$HGcN7zqUFBQo64UbfovdWuojgCQXXcocLkyo2GIHUq1T/SBpTYwkS","e1a8612f5ff196faef1cb51b5517732f","not verified");
INSERT INTO candidate VALUES("3","scvd","abeldereje23@gmail.com","+251925869067"," htdhtrh"," sgsfhs","../admin/image/9c0a4d2c308491ad1b4260b0c3a6ae01logo.jpg","Ng==","$2y$10$vC3dSFIBl0xqDemnn1sJe.GQ1pERyTGoUOrj5yl3VaVgbsJBBbNR2","920ef47bb1ac6c6b5abe61c978738b4e","not verified");



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
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  PRIMARY KEY (`CDid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO cd VALUES("20","sd","abeldereje23@gmail.com","+251925869067","0","image/e674e27d96f6ca61595360cbe58ace18","Deploma","Male","   dfdf","../admin/image/9e47c2e19f8b23d0d605e1cdc87932f8eb.jpg","","$2y$10$kNCl71ejV.XPcyeQUzVIQOxHR4ZQIHEMCB2T2qZz0bsrcWItu6nD.","d8c3b11e26ab89d9712734aac8765677","verified");



CREATE TABLE `cd_register_user` (
  `cd_register_user_id` int(100) NOT NULL AUTO_INCREMENT,
  `CV_id` varchar(100) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  PRIMARY KEY (`cd_register_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO cd_register_user VALUES("1","","helu","helu19seni@gmail.com","$2y$10$cgrWZnRp9.BH0JnwoeU2VeU1zMghGM9HeLPwaZY1Cjqrxmku1xu5e","eb69ec3b34db9fc42da12bd9c3a8ad37","verified");
INSERT INTO cd_register_user VALUES("4","1365","Abel","abeldereje23@gmail.com","$2y$10$0wPtsSY46M5qPgWi2u6Mpey3wI5yCgsl27RNMpjgtuK.f3wC/UJaa","ebe4bab9796d8591e73101a9b2cf6296","verified");
INSERT INTO cd_register_user VALUES("6","1443","v","hilu@gmail.com","$2y$10$ew2goW68JUENt15ttIs.ou9wWG.11sJihwhYSPgJSIzDYtY8Zpv9S","10b2b8698ea0385652248b0a93b86a57","not verified");



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
  `Stuemail` varchar(100) NOT NULL,
  PRIMARY KEY (`SD_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO check_student_data VALUES("1365","asd","Dereje","fdf","ssf","45","female","CS","Red Cross","DDU","yes","mame@gmail.com");
INSERT INTO check_student_data VALUES("1443","Abel","Dereje","Balcha","mami","20","male","IS","Debube tamra","HU","no","");



CREATE TABLE `contact_us` (
  `Uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `website` varchar(100) NOT NULL,
  `msg` varchar(200) NOT NULL,
  PRIMARY KEY (`Uid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO contact_us VALUES("1","Abel","abeldereje23@gmail.com","+251925869067","http://dani.com","dhsfnh");
INSERT INTO contact_us VALUES("2","Danay","danay13@gmail.com","+251925869067","","");
INSERT INTO contact_us VALUES("3","emu","meryy23@gmail.com","+251925869067","","it is a good website.");
INSERT INTO contact_us VALUES("4","Danay","mery23@gmail.com","+251925869067","http://dani.com","God is good all the time.");



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
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  PRIMARY KEY (`Did`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO dh VALUES("1","sdfhjkl","abeldereje23@gmail.com","09345678911","0","image/c4b2a7da402f6cead15e202bfdcdf41a","Deploma","Male","  fghjk","../admin/image/697cead71db4629aeb5473605ff09fcdlogo.jpg","","$2y$10$lulPaVEkHxVsnWz.zNNhSebPB2S1fk3R7keYhlfmtfGlfungzIhj.","7f2111cbef86a223862e0fdd2577705c","verified");



CREATE TABLE `dh_register_user` (
  `dh_register_user_id` int(100) NOT NULL AUTO_INCREMENT,
  `DV_id` varchar(100) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  PRIMARY KEY (`dh_register_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO dh_register_user VALUES("6","1443","","kidanu@gmail.com","$2y$10$YTKwsZ4UBFnRQFD6KIFX5efAw1/O0Lh9LlI6WCxNx3DkQnBxyKQXO","6c015f9b69e6a50c3d30b75ee796bc46","not verified");



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
  `Cemail` varchar(100) NOT NULL,
  PRIMARY KEY (`CV_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO import_college_data VALUES("1365","asd","Dereje","fdf","ssf","45","female","Helina","Engaged","Haramaya","yes","hilu12@gmail.com");
INSERT INTO import_college_data VALUES("1443","Abel","Dereje","Balcha","mami","20","male","Sami","unmarried","USA","yes","hilu@gmail.com");



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
  `Demail` varchar(100) NOT NULL,
  PRIMARY KEY (`DV_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO import_dep_data VALUES("1365","asd","Dereje","fdf","ssf","45","female","Elsabet","Engaged","Haramaya","no","haftom@gmail.com");
INSERT INTO import_dep_data VALUES("1443","Abel","Dereje","Balcha","mami","20","male","Felekech","unmarried","USA","yes","kidanu@gmail.com");



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
  `Uemail` varchar(100) NOT NULL,
  PRIMARY KEY (`UV_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO import_university_data VALUES("1365","asd","Dereje","fdf","ssf","45","female","master","13/98","gima","yes","man@gmail.com");
INSERT INTO import_university_data VALUES("1443","Abel","Dereje","Balcha","mami","20","male","php","14-04","sheger","no","dan@gmail.com");



CREATE TABLE `manage_about_us` (
  `about_id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `mission` varchar(300) NOT NULL,
  `vission` varchar(300) NOT NULL,
  `value` varchar(300) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO manage_about_us VALUES("1","Few words abou us"," Our Mission is to sustain democratic election.   ","  Our Vision is to sustain democratic election.   "," Our Value is to sustain democratic election.   ","image/317265b9510e3257af53acbb7d47ca74logoo.png");



CREATE TABLE `manage_contact` (
  `MC_id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `tele` varchar(100) NOT NULL,
  `postal` varchar(100) NOT NULL,
  PRIMARY KEY (`MC_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO manage_contact VALUES("2","abke@gmail.com","hharamaya university y","+251925869067","+1134568711","434345");



CREATE TABLE `manage_duration` (
  `manage_duration_id` int(11) NOT NULL AUTO_INCREMENT,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `txt` varchar(100) NOT NULL,
  PRIMARY KEY (`manage_duration_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO manage_duration VALUES("8","2019-02-23","2020-03-02","good
dvbgfh");



CREATE TABLE `manage_duration_cd` (
  `manage_duration_cd_id` int(11) NOT NULL AUTO_INCREMENT,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `txt` varchar(100) NOT NULL,
  PRIMARY KEY (`manage_duration_cd_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO manage_duration_cd VALUES("2","2019-03-01","2019-03-05","aaaaaaaa");



CREATE TABLE `manage_duration_dh` (
  `manage_duration_dh_id` int(11) NOT NULL AUTO_INCREMENT,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `txt` varchar(100) NOT NULL,
  PRIMARY KEY (`manage_duration_dh_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO manage_duration_dh VALUES("1","2019-03-03","2019-03-04","gff");



CREATE TABLE `manage_duration_su` (
  `manage_duration_su_id` int(11) NOT NULL AUTO_INCREMENT,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `txt` varchar(100) NOT NULL,
  PRIMARY KEY (`manage_duration_su_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO manage_duration_su VALUES("1","2019-03-03","2020-03-04","vc");



CREATE TABLE `manage_duration_up` (
  `manage_duration_up_id` int(11) NOT NULL AUTO_INCREMENT,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `txt` varchar(100) NOT NULL,
  PRIMARY KEY (`manage_duration_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO manage_duration_up VALUES("1","2019-03-01","2020-03-05","hdfhdt");



CREATE TABLE `manage_homepage` (
  `homepage_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `txt` varchar(3000) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`homepage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO register_user VALUES("6","","Dani","danayhadis30@gmail.com","$2y$10$lFo2MjP19QG0tR4hNcIhbui/KG6Pdo1unyM9xZtPbsFLDs5H/cowi","ca9eac0c76de0cab71d5b50951fe4c5f","verified");
INSERT INTO register_user VALUES("21","14/091","Abel","abeldereje23@gmail.com","$2y$10$zCroODCaDrsuoqy11RxcR.qs.lPIdG9/d4x64ILBD2JneIlCf0/Ha","5c22590152f4f53f3c05cf7cc6aa0b6b","verified");
INSERT INTO register_user VALUES("22","14/091","chg","abel23@gmail.com","$2y$10$Dq0O6qjq2BQBBp.7ZbSy5uqqo/xxxeLXx.DAkXAxw6X0zYmLX7oIG","87d2df31d91c857ffb1a3d5caf45f766","not verified");



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
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  PRIMARY KEY (`Sid`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO su VALUES("3","asfdsaf","abeldereje23@gmail.com","","0","","1st","Red Cross"," ","image/4617878118bbd478600d00ea7a682c70","MQ==","0","0","verified");
INSERT INTO su VALUES("11","abel","aaabeldereje23@gmail.com","123456789","23","2.0","2nd","GAHO","  vvvv","../admin/image/d7e2cd64fc788af26daa1e3c2b5c759beb.jpg","","$2y$10$G6UkWHoqCTF3xrooNkC/J.rSnHYh/QBnrTRItUq7ApO.lj0q5ys8y","ef82567365bc6a0efb05d21837257424","verified");
INSERT INTO su VALUES("12","abel","aaabeldereje23@gmail.com","123456789","23","2.0","2nd","GAHO","  vvvv","../admin/image/d7e2cd64fc788af26daa1e3c2b5c759beb.jpg","","$2y$10$G6UkWHoqCTF3xrooNkC/J.rSnHYh/QBnrTRItUq7ApO.lj0q5ys8y","ef82567365bc6a0efb05d21837257424","verified");
INSERT INTO su VALUES("13","asfdsaf","abeldereje23@gmail.com","","0","","1st","Red Cross"," ","image/4617878118bbd478600d00ea7a682c70","MQ==","0","0","verified");
INSERT INTO su VALUES("14","abel","aaabeldereje23@gmail.com","123456789","23","2.0","2nd","GAHO","  vvvv","../admin/image/d7e2cd64fc788af26daa1e3c2b5c759beb.jpg","","$2y$10$G6UkWHoqCTF3xrooNkC/J.rSnHYh/QBnrTRItUq7ApO.lj0q5ys8y","ef82567365bc6a0efb05d21837257424","verified");
INSERT INTO su VALUES("15","abel","aaabeldereje23@gmail.com","123456789","23","2.0","2nd","GAHO","  vvvv","../admin/image/d7e2cd64fc788af26daa1e3c2b5c759beb.jpg","","$2y$10$G6UkWHoqCTF3xrooNkC/J.rSnHYh/QBnrTRItUq7ApO.lj0q5ys8y","ef82567365bc6a0efb05d21837257424","verified");
INSERT INTO su VALUES("16","asfdsaf","abeldereje23@gmail.com","","0","","1st","Red Cross"," ","image/4617878118bbd478600d00ea7a682c70","MQ==","0","0","verified");
INSERT INTO su VALUES("17","asfdsaf","abeldereje23@gmail.com","","0","","1st","Red Cross"," ","image/4617878118bbd478600d00ea7a682c70","MQ==","0","0","verified");



CREATE TABLE `su_register_user` (
  `su_register_user_id` int(100) NOT NULL AUTO_INCREMENT,
  `SD_id` varchar(100) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  PRIMARY KEY (`su_register_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO su_register_user VALUES("2","","helu","helu19seni@gmail.com","$2y$10$xKCpOG7jeNtti8D47xQAGecMzVZd0Ul8HM6/dfgtJZEpcC8J8JdAO","986588f34114bfa55d1cd3301938785c","verified");
INSERT INTO su_register_user VALUES("9","1365","Abel","abeldereje23@gmail.com","$2y$10$/A/PfqLpC6DUxMGL7fw2Se86UyiguJns3xy57WOXZGiAC6qG.B.HW","511a767823e5718ace2b93439cd79ac2","verified");
INSERT INTO su_register_user VALUES("10","1365","","mame@gmail.com","$2y$10$yAipSGNkup81zHOWAzN.h.A8Gi0IfDoJAZBB4IxNFYwEIU9itWRra","27bc42aaeb1540e87949a69ebeb4eb4c","not verified");



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
  `Semail` varchar(100) NOT NULL,
  PRIMARY KEY (`A_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO subject VALUES("13/05","asd","Dereje","fdf","ssf","45","ewew","8786","cvc","female","no","abel25@gmail.com");
INSERT INTO subject VALUES("1365/05","asd","Dereje","fdf","ssf","45","ewew","8786","cvc","female","no","abel26@gmail.com");
INSERT INTO subject VALUES("14/091","Abel","Dereje","Balcha","mami","20","Goggetti","1987","Goggetti","Male","yes","abel23@gmail.com");
INSERT INTO subject VALUES("1443/091","Abel","Dereje","Balcha","mami","20","Goggetti","1987","Goggetti","Male","yes","abel24@gmail.com");



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
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  PRIMARY KEY (`Pid`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO up VALUES("22","cvbnm","abeldereje23@gmail.com","1234567890123","0","image/b38a9d2198084f0d55557bc731c2f010","Deploma","Male"," "," ","image/b38a9d2198084f0d55557bc731c2f010","MQ==","$2y$10$pqQC5EOUhYPeXB3LPzqM0uOwwK9DPuZoxlRi/Gm/G2HY62xuqpjYO","65b6edfd9f135a6a1dbe075fb82c411f","verified");
INSERT INTO up VALUES("23","abel","abel23@gmail.com","2434343434","0","image/95dc44541ba4d2cf40b77b4294677305","Deploma","Male","    hu ","   fgfgf","../admin/image/d0fc4cab439da6e09ac6ec1c9dc6f156eb.jpg","","$2y$10$adAz8laU1eF61mSupyxXzuKumgK6cv13Jh1b1.EA7rO.WZwm54.Vm","9d9c43178f8d0646e8676e053075b108","verified");
INSERT INTO up VALUES("24","abel","ab@gmail.com","2434343434","0","image/cc1cb41f3a4d6c808fbdafd00a3ef3fd","Deploma","Male","    hu ","   fgfgf","../admin/image/05fe2eada83d6d0ba8cde2b696b0d02b","","$2y$10$sZ/thdcOA.1OCh1A2fjkNOU30fZnXTaszC.F7gIKMjp7zOFipy7nG","d325c14493d4d39e4591e65600ac5423","verified");
INSERT INTO up VALUES("25","fdhgf","abeldereje23@gmail.com","1234567890123","23","image/d0c32605037d89e9b9cc7adb4d6ebf1dvote_logo.jpg","Deploma","Male"," 43t"," reyhth","image/d0c32605037d89e9b9cc7adb4d6ebf1dlogo.jpg","","$2y$10$KdvGSKTVzzQcH8XSBWmMpOrHRBgVRKbpLhcj2ACV2TBUh7e2F9Umq","c5f5a733716c32cdc8da76f30827420d","not verified");



CREATE TABLE `up_register_user` (
  `up_register_user_id` int(100) NOT NULL AUTO_INCREMENT,
  `UV_id` varchar(100) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  PRIMARY KEY (`up_register_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO up_register_user VALUES("6","","helu","helu19seni@gmail.com","$2y$10$nRQGEvG9MOtinKoqkRPg/uKzt3aUm4SFUCJF607.BgMinEA6qysFy","cd0cbcc668fe4bc58e0af3cc7e0a653d","verified");
INSERT INTO up_register_user VALUES("21","1365","Abel","abeldereje23@gmail.com","$2y$10$D25dH3xaUAbnlE4SMccOMOnIBadWKk6/LHDAMTVs7QxOpWKnJytOS","eb30fa42eeb3bf429cb7e3a3d7061b3b","verified");
INSERT INTO up_register_user VALUES("22","1365","Abel","man@gmail.com","$2y$10$7ZlFK6.L/9uozTGHCD3c9O4yHc9c2UE0EG2UOm.AM3MfsMiIXkRXq","bc8a3b91b762ea06e9ca6d8e8e9caca0","not verified");



CREATE TABLE `users` (
  `Uid` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`Uid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("1","admin@gmail.com","admin","12345","admin");
INSERT INTO users VALUES("2","eb@gmail.com","eb","1212","eb");
INSERT INTO users VALUES("3","hr@gmail.com","hr","1234","hr");



CREATE TABLE `users_email` (
  `Eid` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `isEmailConfirmed` tinyint(4) NOT NULL,
  `token` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`Eid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


