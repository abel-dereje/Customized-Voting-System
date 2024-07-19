

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO candidate VALUES("7","Dany","abeldereje23@gmail.com","+251925869067"," fgdhght"," rsgtrsshye","../admin/image/ff355da914efed961cf686056e3adacebg-title-01.jpg","","$2y$10$Lz7t0mo.Xr6qUk8/gpFhv.mJE0HCHdIXk3qelQLTnBkM4emstbNSm","1e5eeb40a3fce716b244599862fd2200","not verified");
INSERT INTO candidate VALUES("8","Abel","abeldereje23@gmail.com","+251925869067"," etgrgrtrhsth"," ergtretre","../admin/image/fd6aa3d49bf676c2912b47ca7afe1b5alogoo.png","","$2y$10$XF26xsJWZDkZ3FiM4VdJu.iyb73H6RZs2H2KbL0GdN.l78oQcaQRS","f7ff233e4ed3e6b13c5d5c7a9201e4ec","verified");
INSERT INTO candidate VALUES("9","Abel","abeldereje23@gmail.com","+251925869067"," gfdbfgngh"," bgfngfnh","../admin/image/10a33464d54239779176eed37f1aa54alogo.jpg","","MjE0MjAy","b603b38a17f369ddc973b3a9045943de","verified");
INSERT INTO candidate VALUES("10","Dany","abeldereje23@gmail.com","+251925869067"," srgtfgh"," ncgngnch","../admin/image/c9ae881ef1792bc92b9deedb46e1aa07eb.jpg","","NzMzMzE1MQ==","d7a84628c025d30f7b2c52c958767e76","verified");
INSERT INTO candidate VALUES("11","Dany","hilu@gmail.com","+251925869067"," rdfgr"," dzgzdfg","../admin/image/0940faa09d3cac3f927a578edba926cblogin.jpg","","Nzk4ODE1Ng==","f511186b08b671a4ad5a1deaae96e310","not verified");



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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO cd VALUES("1","Dany","abeldereje23@gmail.com","+251925869067","23","../image/ee71c9d2865902b0d8a00ac3254d61b2logoo.png","Degree","Male"," dfgjl","../image/ee71c9d2865902b0d8a00ac3254d61b2vote_logo.jpg","","$2y$10$823/PPTNpc7TA52Wy6W1eufFjVm46aka0lvqZ1to6g7j3XIQxaVMm","dbe1a0a2c9bd9241b3499318bf96f756","verified");



CREATE TABLE `cd_register_user` (
  `cd_register_user_id` int(100) NOT NULL AUTO_INCREMENT,
  `CV_id` varchar(100) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  PRIMARY KEY (`cd_register_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO cd_register_user VALUES("1","","helu","helu19seni@gmail.com","$2y$10$cgrWZnRp9.BH0JnwoeU2VeU1zMghGM9HeLPwaZY1Cjqrxmku1xu5e","eb69ec3b34db9fc42da12bd9c3a8ad37","verified");
INSERT INTO cd_register_user VALUES("6","1443","v","hilu@gmail.com","$2y$10$ew2goW68JUENt15ttIs.ou9wWG.11sJihwhYSPgJSIzDYtY8Zpv9S","10b2b8698ea0385652248b0a93b86a57","not verified");
INSERT INTO cd_register_user VALUES("9","1443","Abel","abeldereje23@gmail.com","MzI5NjE3MA==","91299a41773c667d2ee8cddc3f6eeb64","verified");



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
INSERT INTO check_student_data VALUES("1443","Abel","Dereje","Balcha","mami","20","male","IS","Debube tamra","HU","yes","abeldereje23@gmail.com");



CREATE TABLE `contact_us` (
  `Uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `website` varchar(100) NOT NULL,
  `msg` varchar(200) NOT NULL,
  PRIMARY KEY (`Uid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO contact_us VALUES("1","Helina","helina@gmail.com","+251925869067","http://dani.com","gooood");



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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO dh VALUES("3","ABEL","abeldereje23@gmail.com","09345678911","12","image/329676517dcd4e1043e9eb1b52314ebevote_logo.jpg","Master","Female","dfghj","../admin/image/329676517dcd4e1043e9eb1b52314ebelogoo.png","","$2y$10$hUA4MqAfL0pk8P8GEoY0Se.OD.YZdMQvQzvNaI8xSPiaUO0dMtV2y","1a3d6a5affbc4a3a84214366730c4a80","verified");
INSERT INTO dh VALUES("5","ABELll","abeldereje23@gmail.com","09345678911","32","image/30a3f6ea1e9207e0a7a2420a0d35979deb.jpg","Deploma","Female"," rtyuil","../admin/image/30a3f6ea1e9207e0a7a2420a0d35979dlogoo.png","","$2y$10$ePSfawxhjJVushkLWf5ejOC1.ByiHmKxebmGgT/h9gn9SPlUK9MOm","e2bc7a52e896193e43a2e15df870c4e2","verified");
INSERT INTO dh VALUES("6","Abell","haftom@gmail.com","09345678911","32","../admin/image/306ee625eb2f0aa47fa6dc6a02502bc6eb.jpg","Degree","Female"," cggxnx","../admin/image/306ee625eb2f0aa47fa6dc6a02502bc6ffg.jpg","","$2y$10$/tOQqzED1DvO27XaSjCFwec2Z9BapgfaScr8ASsryqIv4XeWhBvhq","fd6b4b8075b32ba75ffe0c9694d2f9af","not verified");
INSERT INTO dh VALUES("7","Abell","abeldereje23@gmail.com","09345678911","32","../admin/image/fc94290683350931b4e21dcfdc05ec34eb.jpg","Degree","Female"," ","../admin/image/fc94290683350931b4e21dcfdc05ec34ffg.jpg","","$2y$10$edO3KiZ8V4buz0l2XGB9HufNcx5x.cQIh4b1RlaiD9oul6waXwnrO","51e6d6e679953c6311757004d8cbbba9","not verified");



CREATE TABLE `dh_register_user` (
  `dh_register_user_id` int(100) NOT NULL AUTO_INCREMENT,
  `DV_id` varchar(100) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  PRIMARY KEY (`dh_register_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO dh_register_user VALUES("8","1443","Abel","abeldereje23@gmail.com","Nzk4MDMwMA==","37007545a7abc397017002fc9a713ea2","verified");



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
INSERT INTO import_college_data VALUES("1443","Abel","Dereje","Balcha","mami","20","male","Sami","unmarried","USA","yes","abeldereje23@gmail.com");



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
INSERT INTO import_dep_data VALUES("1443","Abel","Dereje","Balcha","mami","20","male","Felekech","unmarried","USA","yes","abeldereje23@gmail.com");



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

INSERT INTO import_university_data VALUES("1365","asd","Dereje","fdf","ssf","45","female","master","13/98","gima","yes","abeldereje23@gmail.com");
INSERT INTO import_university_data VALUES("1443","Abel","Dereje","Balcha","mami","20","male","php","14-04","sheger","yes","abeldereje23@gmail.com");



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

INSERT INTO manage_contact VALUES("2","beti@gmail.com","hharamaya university y","+251925869067","+1134568711","434345");



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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO post_info VALUES("18","1:00:00","8:00:00","2019-05-05","2019-05-14","national voting");
INSERT INTO post_info VALUES("19","1","2","2019-06-04","2019-06-05","Up");
INSERT INTO post_info VALUES("20","2","3","2019-06-24","2019-06-26","cd");
INSERT INTO post_info VALUES("21","3","4","2019-06-11","2019-06-04","dh");
INSERT INTO post_info VALUES("22","5","6","2019-06-05","2019-06-05","su");



CREATE TABLE `register_user` (
  `register_user_id` int(100) NOT NULL AUTO_INCREMENT,
  `A_id` varchar(100) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  PRIMARY KEY (`register_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

INSERT INTO register_user VALUES("32","14/091","Abel","abeldereje23@gmail.com","ODcyNzc1NQ==","9ad97add7f3d9f29cd262159d4540c96","verified");



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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO su VALUES("14","abel","abeldereje23@gmail.com","123456789","23","2.0","2nd","Tigrigna"," xgfhghhg","image/301686cedadd17ecdf5c91e74195c421eb.jpg","MQ==","$2y$10$7CC8hS7133bNI8nLnaQ8P.wBFrIuAHP1E30CXIKeis5g1lkUcNEbO","b3f7e349cd770760805077c584b137b7","verified");
INSERT INTO su VALUES("15","abel","abeldereje23@gmail.com","12345678","23","2.0","3rd","Sustain Dialogue"," asdfghj.","../admin/image/92198b0e5d513e6caa5840eeb0f31423vote_logo.jpg","","$2y$10$X0N1AsrOKxO97CS/7KU/.O08OIC9RqHXkDrImjBvM81vxrEoSdbou","8fecb20817b3847419bb3de39a609afe","not verified");
INSERT INTO su VALUES("16","abel","abeldereje23@gmail.com","12345678","23","2.0","2nd","Sustain Dialogue"," werty","../admin/image/cd6884a4153ab9244a8953a5abc3dae2logoo.png","","$2y$10$ZrUtXNkkFQ8bB41fK/PndOB8jYcHyHBlisa3AjA7lgzhrqAonb/K2","bef5b4d93c3ae02ace550506a9a936de","verified");



CREATE TABLE `su_register_user` (
  `su_register_user_id` int(100) NOT NULL AUTO_INCREMENT,
  `SD_id` varchar(100) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  PRIMARY KEY (`su_register_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO su_register_user VALUES("12","1443","Abel","abeldereje23@gmail.com","NjUzNDkzOQ==","8808eda0dd3dec4e4df50499f2fc75e8","verified");



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
INSERT INTO subject VALUES("14/091","Abel","Dereje","Balcha","mami","20","Goggetti","1987","Goggetti","Male","yes","abeldereje23@gmail.com");
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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

INSERT INTO up VALUES("26","Abel","abeldereje23@gmail.com","234567890","12","../admin/image/953063b33770090345641a828907d105eb.jpg","Degree","Female"," dsafewf"," wefd","../admin/image/953063b33770090345641a828907d105eb.jpg","","$2y$10$P4p6n7u8b4xJIn1P8h2Ir.o2d6ZxmGxIKt7PlGSxq.AhY6Fif5daG","6a28eabcad1eff991e894e5f577e53e6","not verified");
INSERT INTO up VALUES("27","fdhgf","abeldereje23@gmail.com","1234567890123","32","../admin/image/77329253898ac942c45c622384c7d334logoo.png","Degree","Male"," errgre"," wrwe","../admin/image/77329253898ac942c45c622384c7d334bg-title-01.jpg","MQ==","$2y$10$TYH2plsFZF6TEK1cgdu.UuEDl82iF0/.O66/o7Zh9Cocnala4DxHe","c11a6c8821cdb24676ff61d9b59c10a0","verified");
INSERT INTO up VALUES("28","AAA","abeldereje23@gmail.com","+251925869067","32","../admin/image/c7bd257e0b0bf63a82233ad25c776ab2logo.jpg","Degree","Female"," sdxvbgvnmn"," gfnbgfng","../admin/image/c7bd257e0b0bf63a82233ad25c776ab2logoo.png","","$2y$10$c5XP7EI.RGjkSxSzYBsV/uQZgO/gWDqxQg7PcYxs8JdReycghDfAS","1a95a20ee480d3c53bd76874aaf30773","verified");



CREATE TABLE `up_register_user` (
  `up_register_user_id` int(100) NOT NULL AUTO_INCREMENT,
  `UV_id` varchar(100) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  PRIMARY KEY (`up_register_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

INSERT INTO up_register_user VALUES("6","","helu","helu19seni@gmail.com","$2y$10$nRQGEvG9MOtinKoqkRPg/uKzt3aUm4SFUCJF607.BgMinEA6qysFy","cd0cbcc668fe4bc58e0af3cc7e0a653d","verified");
INSERT INTO up_register_user VALUES("22","1365","Abel","man@gmail.com","$2y$10$7ZlFK6.L/9uozTGHCD3c9O4yHc9c2UE0EG2UOm.AM3MfsMiIXkRXq","bc8a3b91b762ea06e9ca6d8e8e9caca0","not verified");
INSERT INTO up_register_user VALUES("28","1443","Abel","abeldereje23@gmail.com","MTY3NjE4MQ==","93b5129e24b9c92e5b8e7115056b46bd","verified");



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


