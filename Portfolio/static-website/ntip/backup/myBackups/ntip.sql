--
-- Database : ntips
--
-- --------------------------------------------------
-- ---------------------------------------------------
SET AUTOCOMMIT = 0 ;
SET FOREIGN_KEY_CHECKS=0 ;
--
-- Tabel structure for table `attendance`
--
DROP TABLE  IF EXISTS `attendance`;
CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id_no` varchar(255) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `week` varchar(255) NOT NULL,
  `in_am` varchar(255) NOT NULL,
  `out_am` varchar(255) NOT NULL,
  `in_pm` varchar(255) NOT NULL,
  `out_pm` varchar(255) NOT NULL,
  `in_overtime` varchar(255) NOT NULL,
  `out_overtime` varchar(255) NOT NULL,
  PRIMARY KEY (`attendance_id`),
  UNIQUE KEY `attendance_id` (`attendance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1501 DEFAULT CHARSET=latin1;

INSERT INTO `attendance`  VALUES ( "1","2015-10001","James Lazarra","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "2","2015-10001","James Lazarra","2015-09-16","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "3","2015-10001","James Lazarra","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "4","2015-10001","James Lazarra","2015-09-17","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "5","2015-10001","James Lazarra","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "6","2015-10001","James Lazarra","2015-09-18","FRI","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "7","2015-10001","James Lazarra","2015-09-04","FRI","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "8","2015-10001","James Lazarra","2015-09-19","SAT","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "9","2015-10001","James Lazarra","2015-09-05","SAT","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "10","2015-10001","James Lazarra","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "11","2015-10001","James Lazarra","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "12","2015-10001","James Lazarra","2015-09-21","MON","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "13","2015-10001","James Lazarra","2015-09-07","MON","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "14","2015-10001","James Lazarra","2015-09-22","TUE","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "15","2015-10001","James Lazarra","2015-09-08","TUE","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "16","2015-10001","James Lazarra","2015-09-23","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "17","2015-10001","James Lazarra","2015-09-09","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "18","2015-10001","James Lazarra","2015-09-24","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "19","2015-10001","James Lazarra","2015-09-10","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "20","2015-10001","James Lazarra","2015-09-25","FRI","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "21","2015-10001","James Lazarra","2015-09-11","FRI","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "22","2015-10001","James Lazarra","2015-09-26","SAT","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "23","2015-10001","James Lazarra","2015-09-12","SAT","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "24","2015-10001","James Lazarra","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "25","2015-10001","James Lazarra","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "26","2015-10001","James Lazarra","2015-09-28","MON","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "27","2015-10001","James Lazarra","2015-09-14","MON","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "28","2015-10001","James Lazarra","2015-09-29","TUE","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "29","2015-10001","James Lazarra","2015-09-15","TUE","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "30","2015-10001","James Lazarra","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "31","2015-10003","Myle Ian Lazarra","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "32","2015-10003","Myle Ian Lazarra","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "33","2015-10003","Myle Ian Lazarra","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "34","2015-10003","Myle Ian Lazarra","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "35","2015-10003","Myle Ian Lazarra","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "36","2015-10003","Myle Ian Lazarra","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "37","2015-10003","Myle Ian Lazarra","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "38","2015-10003","Myle Ian Lazarra","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "39","2015-10003","Myle Ian Lazarra","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "40","2015-10003","Myle Ian Lazarra","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "41","2015-10003","Myle Ian Lazarra","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "42","2015-10003","Myle Ian Lazarra","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "43","2015-10003","Myle Ian Lazarra","2015-09-07","MON","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "44","2015-10003","Myle Ian Lazarra","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "45","2015-10003","Myle Ian Lazarra","2015-09-08","TUE","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "46","2015-10003","Myle Ian Lazarra","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "47","2015-10003","Myle Ian Lazarra","2015-09-09","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "48","2015-10003","Myle Ian Lazarra","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "49","2015-10003","Myle Ian Lazarra","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "50","2015-10003","Myle Ian Lazarra","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "51","2015-10003","Myle Ian Lazarra","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "52","2015-10003","Myle Ian Lazarra","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "53","2015-10003","Myle Ian Lazarra","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "54","2015-10003","Myle Ian Lazarra","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "55","2015-10003","Myle Ian Lazarra","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "56","2015-10003","Myle Ian Lazarra","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "57","2015-10003","Myle Ian Lazarra","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "58","2015-10003","Myle Ian Lazarra","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "59","2015-10003","Myle Ian Lazarra","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "60","2015-10003","Myle Ian Lazarra","2015-09-30","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "61","2015-10002","Chad Nico Lazarra","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "62","2015-10002","Chad Nico Lazarra","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "63","2015-10002","Chad Nico Lazarra","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "64","2015-10002","Chad Nico Lazarra","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "65","2015-10002","Chad Nico Lazarra","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "66","2015-10002","Chad Nico Lazarra","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "67","2015-10002","Chad Nico Lazarra","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "68","2015-10002","Chad Nico Lazarra","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "69","2015-10002","Chad Nico Lazarra","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "70","2015-10002","Chad Nico Lazarra","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "71","2015-10002","Chad Nico Lazarra","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "72","2015-10002","Chad Nico Lazarra","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "73","2015-10002","Chad Nico Lazarra","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "74","2015-10002","Chad Nico Lazarra","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "75","2015-10002","Chad Nico Lazarra","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "76","2015-10002","Chad Nico Lazarra","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "77","2015-10002","Chad Nico Lazarra","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "78","2015-10002","Chad Nico Lazarra","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "79","2015-10002","Chad Nico Lazarra","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "80","2015-10002","Chad Nico Lazarra","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "81","2015-10002","Chad Nico Lazarra","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "82","2015-10002","Chad Nico Lazarra","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "83","2015-10002","Chad Nico Lazarra","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "84","2015-10002","Chad Nico Lazarra","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "85","2015-10002","Chad Nico Lazarra","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "86","2015-10002","Chad Nico Lazarra","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "87","2015-10002","Chad Nico Lazarra","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "88","2015-10002","Chad Nico Lazarra","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "89","2015-10002","Chad Nico Lazarra","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "90","2015-10002","Chad Nico Lazarra","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "91","2015-10004"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "92","2015-10004"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "93","2015-10004"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "94","2015-10004"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "95","2015-10004"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "96","2015-10004"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "97","2015-10004"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "98","2015-10004"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "99","2015-10004"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "100","2015-10004"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "101","2015-10004"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "102","2015-10004"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "103","2015-10004"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "104","2015-10004"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "105","2015-10004"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "106","2015-10004"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "107","2015-10004"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "108","2015-10004"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "109","2015-10004"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "110","2015-10004"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "111","2015-10004"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "112","2015-10004"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "113","2015-10004"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "114","2015-10004"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "115","2015-10004"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "116","2015-10004"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "117","2015-10004"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "118","2015-10004"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "119","2015-10004"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "120","2015-10004"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "121","2015-10005"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "122","2015-10005"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "123","2015-10005"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "124","2015-10005"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "125","2015-10005"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "126","2015-10005"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "127","2015-10005"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "128","2015-10005"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "129","2015-10005"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "130","2015-10005"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "131","2015-10005"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "132","2015-10005"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "133","2015-10005"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "134","2015-10005"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "135","2015-10005"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "136","2015-10005"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "137","2015-10005"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "138","2015-10005"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "139","2015-10005"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "140","2015-10005"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "141","2015-10005"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "142","2015-10005"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "143","2015-10005"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "144","2015-10005"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "145","2015-10005"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "146","2015-10005"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "147","2015-10005"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "148","2015-10005"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "149","2015-10005"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "150","2015-10005"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "151","2015-10006"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "152","2015-10006"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "153","2015-10006"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "154","2015-10006"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "155","2015-10006"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "156","2015-10006"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "157","2015-10006"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "158","2015-10006"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "159","2015-10006"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "160","2015-10006"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "161","2015-10006"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "162","2015-10006"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "163","2015-10006"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "164","2015-10006"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "165","2015-10006"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "166","2015-10006"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "167","2015-10006"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "168","2015-10006"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "169","2015-10006"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "170","2015-10006"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "171","2015-10006"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "172","2015-10006"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "173","2015-10006"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "174","2015-10006"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "175","2015-10006"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "176","2015-10006"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "177","2015-10006"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "178","2015-10006"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "179","2015-10006"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "180","2015-10006"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "181","2015-10007"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "182","2015-10007"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "183","2015-10007"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "184","2015-10007"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "185","2015-10007"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "186","2015-10007"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "187","2015-10007"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "188","2015-10007"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "189","2015-10007"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "190","2015-10007"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "191","2015-10007"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "192","2015-10007"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "193","2015-10007"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "194","2015-10007"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "195","2015-10007"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "196","2015-10007"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "197","2015-10007"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "198","2015-10007"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "199","2015-10007"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "200","2015-10007"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "201","2015-10007"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "202","2015-10007"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "203","2015-10007"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "204","2015-10007"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "205","2015-10007"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "206","2015-10007"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "207","2015-10007"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "208","2015-10007"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "209","2015-10007"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "210","2015-10007"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "211","2015-10008"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "212","2015-10008"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "213","2015-10008"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "214","2015-10008"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "215","2015-10008"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "216","2015-10008"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "217","2015-10008"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "218","2015-10008"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "219","2015-10008"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "220","2015-10008"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "221","2015-10008"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "222","2015-10008"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "223","2015-10008"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "224","2015-10008"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "225","2015-10008"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "226","2015-10008"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "227","2015-10008"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "228","2015-10008"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "229","2015-10008"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "230","2015-10008"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "231","2015-10008"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "232","2015-10008"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "233","2015-10008"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "234","2015-10008"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "235","2015-10008"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "236","2015-10008"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "237","2015-10008"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "238","2015-10008"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "239","2015-10008"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "240","2015-10008"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "241","2015-10009"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "242","2015-10009"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "243","2015-10009"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "244","2015-10009"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "245","2015-10009"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "246","2015-10009"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "247","2015-10009"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "248","2015-10009"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "249","2015-10009"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "250","2015-10009"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "251","2015-10009"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "252","2015-10009"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "253","2015-10009"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "254","2015-10009"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "255","2015-10009"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "256","2015-10009"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "257","2015-10009"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "258","2015-10009"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "259","2015-10009"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "260","2015-10009"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "261","2015-10009"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "262","2015-10009"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "263","2015-10009"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "264","2015-10009"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "265","2015-10009"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "266","2015-10009"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "267","2015-10009"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "268","2015-10009"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "269","2015-10009"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "270","2015-10009"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "271","2015-10010"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "272","2015-10010"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "273","2015-10010"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "274","2015-10010"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "275","2015-10010"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "276","2015-10010"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "277","2015-10010"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "278","2015-10010"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "279","2015-10010"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "280","2015-10010"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "281","2015-10010"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "282","2015-10010"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "283","2015-10010"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "284","2015-10010"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "285","2015-10010"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "286","2015-10010"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "287","2015-10010"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "288","2015-10010"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "289","2015-10010"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "290","2015-10010"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "291","2015-10010"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "292","2015-10010"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "293","2015-10010"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "294","2015-10010"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "295","2015-10010"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "296","2015-10010"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "297","2015-10010"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "298","2015-10010"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "299","2015-10010"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "300","2015-10010"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "301","2015-10011"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "302","2015-10011"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "303","2015-10011"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "304","2015-10011"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "305","2015-10011"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "306","2015-10011"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "307","2015-10011"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "308","2015-10011"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "309","2015-10011"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "310","2015-10011"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "311","2015-10011"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "312","2015-10011"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "313","2015-10011"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "314","2015-10011"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "315","2015-10011"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "316","2015-10011"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "317","2015-10011"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "318","2015-10011"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "319","2015-10011"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "320","2015-10011"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "321","2015-10011"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "322","2015-10011"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "323","2015-10011"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "324","2015-10011"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "325","2015-10011"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "326","2015-10011"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "327","2015-10011"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "328","2015-10011"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "329","2015-10011"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "330","2015-10011"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "331","2015-10012"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "332","2015-10012"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "333","2015-10012"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "334","2015-10012"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "335","2015-10012"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "336","2015-10012"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "337","2015-10012"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "338","2015-10012"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "339","2015-10012"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "340","2015-10012"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "341","2015-10012"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "342","2015-10012"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "343","2015-10012"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "344","2015-10012"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "345","2015-10012"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "346","2015-10012"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "347","2015-10012"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "348","2015-10012"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "349","2015-10012"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "350","2015-10012"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "351","2015-10012"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "352","2015-10012"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "353","2015-10012"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "354","2015-10012"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "355","2015-10012"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "356","2015-10012"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "357","2015-10012"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "358","2015-10012"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "359","2015-10012"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "360","2015-10012"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "361","2015-10013"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "362","2015-10013"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "363","2015-10013"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "364","2015-10013"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "365","2015-10013"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "366","2015-10013"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "367","2015-10013"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "368","2015-10013"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "369","2015-10013"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "370","2015-10013"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "371","2015-10013"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "372","2015-10013"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "373","2015-10013"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "374","2015-10013"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "375","2015-10013"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "376","2015-10013"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "377","2015-10013"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "378","2015-10013"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "379","2015-10013"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "380","2015-10013"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "381","2015-10013"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "382","2015-10013"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "383","2015-10013"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "384","2015-10013"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "385","2015-10013"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "386","2015-10013"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "387","2015-10013"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "388","2015-10013"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "389","2015-10013"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "390","2015-10013"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "391","2015-10014"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "392","2015-10014"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "393","2015-10014"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "394","2015-10014"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "395","2015-10014"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "396","2015-10014"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "397","2015-10014"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "398","2015-10014"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "399","2015-10014"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "400","2015-10014"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "401","2015-10014"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "402","2015-10014"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "403","2015-10014"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "404","2015-10014"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "405","2015-10014"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "406","2015-10014"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "407","2015-10014"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "408","2015-10014"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "409","2015-10014"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "410","2015-10014"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "411","2015-10014"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "412","2015-10014"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "413","2015-10014"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "414","2015-10014"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "415","2015-10014"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "416","2015-10014"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "417","2015-10014"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "418","2015-10014"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "419","2015-10014"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "420","2015-10014"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "421","2015-10015"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "422","2015-10015"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "423","2015-10015"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "424","2015-10015"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "425","2015-10015"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "426","2015-10015"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "427","2015-10015"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "428","2015-10015"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "429","2015-10015"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "430","2015-10015"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "431","2015-10015"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "432","2015-10015"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "433","2015-10015"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "434","2015-10015"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "435","2015-10015"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "436","2015-10015"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "437","2015-10015"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "438","2015-10015"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "439","2015-10015"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "440","2015-10015"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "441","2015-10015"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "442","2015-10015"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "443","2015-10015"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "444","2015-10015"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "445","2015-10015"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "446","2015-10015"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "447","2015-10015"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "448","2015-10015"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "449","2015-10015"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "450","2015-10015"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "451","2015-10016"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "452","2015-10016"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "453","2015-10016"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "454","2015-10016"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "455","2015-10016"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "456","2015-10016"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "457","2015-10016"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "458","2015-10016"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "459","2015-10016"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "460","2015-10016"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "461","2015-10016"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "462","2015-10016"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "463","2015-10016"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "464","2015-10016"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "465","2015-10016"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "466","2015-10016"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "467","2015-10016"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "468","2015-10016"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "469","2015-10016"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "470","2015-10016"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "471","2015-10016"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "472","2015-10016"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "473","2015-10016"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "474","2015-10016"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "475","2015-10016"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "476","2015-10016"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "477","2015-10016"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "478","2015-10016"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "479","2015-10016"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "480","2015-10016"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "481","2015-10017"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "482","2015-10017"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "483","2015-10017"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "484","2015-10017"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "485","2015-10017"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "486","2015-10017"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "487","2015-10017"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "488","2015-10017"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "489","2015-10017"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "490","2015-10017"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "491","2015-10017"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "492","2015-10017"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "493","2015-10017"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "494","2015-10017"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "495","2015-10017"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "496","2015-10017"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "497","2015-10017"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "498","2015-10017"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "499","2015-10017"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "500","2015-10017"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "501","2015-10017"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "502","2015-10017"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "503","2015-10017"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "504","2015-10017"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "505","2015-10017"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "506","2015-10017"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "507","2015-10017"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "508","2015-10017"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "509","2015-10017"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "510","2015-10017"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "511","2015-10018"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "512","2015-10018"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "513","2015-10018"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "514","2015-10018"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "515","2015-10018"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "516","2015-10018"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "517","2015-10018"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "518","2015-10018"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "519","2015-10018"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "520","2015-10018"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "521","2015-10018"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "522","2015-10018"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "523","2015-10018"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "524","2015-10018"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "525","2015-10018"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "526","2015-10018"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "527","2015-10018"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "528","2015-10018"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "529","2015-10018"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "530","2015-10018"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "531","2015-10018"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "532","2015-10018"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "533","2015-10018"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "534","2015-10018"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "535","2015-10018"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "536","2015-10018"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "537","2015-10018"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "538","2015-10018"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "539","2015-10018"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "540","2015-10018"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "541","2015-10019"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "542","2015-10019"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "543","2015-10019"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "544","2015-10019"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "545","2015-10019"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "546","2015-10019"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "547","2015-10019"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "548","2015-10019"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "549","2015-10019"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "550","2015-10019"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "551","2015-10019"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "552","2015-10019"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "553","2015-10019"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "554","2015-10019"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "555","2015-10019"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "556","2015-10019"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "557","2015-10019"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "558","2015-10019"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "559","2015-10019"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "560","2015-10019"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "561","2015-10019"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "562","2015-10019"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "563","2015-10019"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "564","2015-10019"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "565","2015-10019"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "566","2015-10019"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "567","2015-10019"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "568","2015-10019"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "569","2015-10019"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "570","2015-10019"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "571","2015-10020"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "572","2015-10020"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "573","2015-10020"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "574","2015-10020"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "575","2015-10020"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "576","2015-10020"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "577","2015-10020"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "578","2015-10020"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "579","2015-10020"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "580","2015-10020"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "581","2015-10020"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "582","2015-10020"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "583","2015-10020"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "584","2015-10020"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "585","2015-10020"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "586","2015-10020"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "587","2015-10020"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "588","2015-10020"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "589","2015-10020"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "590","2015-10020"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "591","2015-10020"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "592","2015-10020"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "593","2015-10020"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "594","2015-10020"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "595","2015-10020"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "596","2015-10020"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "597","2015-10020"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "598","2015-10020"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "599","2015-10020"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "600","2015-10020"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "601","2015-10021"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "602","2015-10021"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "603","2015-10021"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "604","2015-10021"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "605","2015-10021"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "606","2015-10021"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "607","2015-10021"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "608","2015-10021"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "609","2015-10021"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "610","2015-10021"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "611","2015-10021"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "612","2015-10021"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "613","2015-10021"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "614","2015-10021"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "615","2015-10021"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "616","2015-10021"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "617","2015-10021"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "618","2015-10021"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "619","2015-10021"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "620","2015-10021"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "621","2015-10021"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "622","2015-10021"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "623","2015-10021"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "624","2015-10021"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "625","2015-10021"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "626","2015-10021"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "627","2015-10021"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "628","2015-10021"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "629","2015-10021"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "630","2015-10021"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "631","2015-10022"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "632","2015-10022"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "633","2015-10022"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "634","2015-10022"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "635","2015-10022"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "636","2015-10022"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "637","2015-10022"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "638","2015-10022"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "639","2015-10022"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "640","2015-10022"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "641","2015-10022"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "642","2015-10022"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "643","2015-10022"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "644","2015-10022"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "645","2015-10022"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "646","2015-10022"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "647","2015-10022"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "648","2015-10022"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "649","2015-10022"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "650","2015-10022"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "651","2015-10022"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "652","2015-10022"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "653","2015-10022"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "654","2015-10022"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "655","2015-10022"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "656","2015-10022"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "657","2015-10022"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "658","2015-10022"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "659","2015-10022"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "660","2015-10022"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "661","2015-10023"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "662","2015-10023"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "663","2015-10023"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "664","2015-10023"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "665","2015-10023"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "666","2015-10023"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "667","2015-10023"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "668","2015-10023"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "669","2015-10023"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "670","2015-10023"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "671","2015-10023"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "672","2015-10023"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "673","2015-10023"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "674","2015-10023"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "675","2015-10023"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "676","2015-10023"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "677","2015-10023"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "678","2015-10023"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "679","2015-10023"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "680","2015-10023"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "681","2015-10023"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "682","2015-10023"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "683","2015-10023"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "684","2015-10023"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "685","2015-10023"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "686","2015-10023"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "687","2015-10023"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "688","2015-10023"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "689","2015-10023"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "690","2015-10023"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "691","2015-10024"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "692","2015-10024"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "693","2015-10024"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "694","2015-10024"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "695","2015-10024"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "696","2015-10024"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "697","2015-10024"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "698","2015-10024"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "699","2015-10024"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "700","2015-10024"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "701","2015-10024"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "702","2015-10024"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "703","2015-10024"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "704","2015-10024"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "705","2015-10024"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "706","2015-10024"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "707","2015-10024"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "708","2015-10024"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "709","2015-10024"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "710","2015-10024"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "711","2015-10024"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "712","2015-10024"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "713","2015-10024"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "714","2015-10024"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "715","2015-10024"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "716","2015-10024"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "717","2015-10024"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "718","2015-10024"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "719","2015-10024"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "720","2015-10024"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "721","2015-10025"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "722","2015-10025"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "723","2015-10025"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "724","2015-10025"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "725","2015-10025"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "726","2015-10025"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "727","2015-10025"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "728","2015-10025"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "729","2015-10025"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "730","2015-10025"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "731","2015-10025"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "732","2015-10025"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "733","2015-10025"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "734","2015-10025"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "735","2015-10025"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "736","2015-10025"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "737","2015-10025"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "738","2015-10025"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "739","2015-10025"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "740","2015-10025"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "741","2015-10025"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "742","2015-10025"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "743","2015-10025"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "744","2015-10025"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "745","2015-10025"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "746","2015-10025"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "747","2015-10025"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "748","2015-10025"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "749","2015-10025"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "750","2015-10025"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "751","2015-10026"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "752","2015-10026"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "753","2015-10026"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "754","2015-10026"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "755","2015-10026"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "756","2015-10026"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "757","2015-10026"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "758","2015-10026"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "759","2015-10026"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "760","2015-10026"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "761","2015-10026"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "762","2015-10026"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "763","2015-10026"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "764","2015-10026"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "765","2015-10026"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "766","2015-10026"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "767","2015-10026"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "768","2015-10026"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "769","2015-10026"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "770","2015-10026"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "771","2015-10026"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "772","2015-10026"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "773","2015-10026"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "774","2015-10026"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "775","2015-10026"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "776","2015-10026"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "777","2015-10026"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "778","2015-10026"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "779","2015-10026"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "780","2015-10026"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "781","2015-10027"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "782","2015-10027"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "783","2015-10027"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "784","2015-10027"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "785","2015-10027"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "786","2015-10027"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "787","2015-10027"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "788","2015-10027"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "789","2015-10027"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "790","2015-10027"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "791","2015-10027"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "792","2015-10027"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "793","2015-10027"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "794","2015-10027"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "795","2015-10027"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "796","2015-10027"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "797","2015-10027"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "798","2015-10027"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "799","2015-10027"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "800","2015-10027"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "801","2015-10027"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "802","2015-10027"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "803","2015-10027"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "804","2015-10027"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "805","2015-10027"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "806","2015-10027"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "807","2015-10027"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "808","2015-10027"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "809","2015-10027"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "810","2015-10027"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "811","2015-10028"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "812","2015-10028"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "813","2015-10028"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "814","2015-10028"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "815","2015-10028"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "816","2015-10028"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "817","2015-10028"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "818","2015-10028"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "819","2015-10028"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "820","2015-10028"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "821","2015-10028"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "822","2015-10028"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "823","2015-10028"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "824","2015-10028"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "825","2015-10028"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "826","2015-10028"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "827","2015-10028"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "828","2015-10028"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "829","2015-10028"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "830","2015-10028"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "831","2015-10028"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "832","2015-10028"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "833","2015-10028"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "834","2015-10028"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "835","2015-10028"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "836","2015-10028"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "837","2015-10028"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "838","2015-10028"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "839","2015-10028"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "840","2015-10028"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "841","2015-10029"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "842","2015-10029"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "843","2015-10029"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "844","2015-10029"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "845","2015-10029"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "846","2015-10029"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "847","2015-10029"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "848","2015-10029"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "849","2015-10029"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "850","2015-10029"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "851","2015-10029"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "852","2015-10029"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "853","2015-10029"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "854","2015-10029"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "855","2015-10029"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "856","2015-10029"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "857","2015-10029"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "858","2015-10029"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "859","2015-10029"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "860","2015-10029"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "861","2015-10029"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "862","2015-10029"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "863","2015-10029"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "864","2015-10029"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "865","2015-10029"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "866","2015-10029"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "867","2015-10029"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "868","2015-10029"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "869","2015-10029"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "870","2015-10029"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "871","2015-10030"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "872","2015-10030"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "873","2015-10030"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "874","2015-10030"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "875","2015-10030"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "876","2015-10030"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "877","2015-10030"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "878","2015-10030"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "879","2015-10030"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "880","2015-10030"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "881","2015-10030"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "882","2015-10030"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "883","2015-10030"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "884","2015-10030"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "885","2015-10030"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "886","2015-10030"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "887","2015-10030"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "888","2015-10030"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "889","2015-10030"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "890","2015-10030"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "891","2015-10030"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "892","2015-10030"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "893","2015-10030"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "894","2015-10030"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "895","2015-10030"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "896","2015-10030"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "897","2015-10030"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "898","2015-10030"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "899","2015-10030"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "900","2015-10030"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "901","2015-10031"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "902","2015-10031"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "903","2015-10031"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "904","2015-10031"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "905","2015-10031"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "906","2015-10031"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "907","2015-10031"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "908","2015-10031"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "909","2015-10031"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "910","2015-10031"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "911","2015-10031"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "912","2015-10031"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "913","2015-10031"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "914","2015-10031"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "915","2015-10031"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "916","2015-10031"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "917","2015-10031"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "918","2015-10031"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "919","2015-10031"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "920","2015-10031"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "921","2015-10031"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "922","2015-10031"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "923","2015-10031"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "924","2015-10031"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "925","2015-10031"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "926","2015-10031"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "927","2015-10031"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "928","2015-10031"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "929","2015-10031"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "930","2015-10031"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "931","2015-10032"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "932","2015-10032"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "933","2015-10032"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "934","2015-10032"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "935","2015-10032"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "936","2015-10032"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "937","2015-10032"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "938","2015-10032"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "939","2015-10032"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "940","2015-10032"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "941","2015-10032"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "942","2015-10032"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "943","2015-10032"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "944","2015-10032"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "945","2015-10032"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "946","2015-10032"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "947","2015-10032"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "948","2015-10032"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "949","2015-10032"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "950","2015-10032"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "951","2015-10032"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "952","2015-10032"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "953","2015-10032"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "954","2015-10032"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "955","2015-10032"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "956","2015-10032"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "957","2015-10032"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "958","2015-10032"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "959","2015-10032"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "960","2015-10032"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "961","2015-10032"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "962","2015-10032"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "963","2015-10032"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "964","2015-10032"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "965","2015-10032"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "966","2015-10032"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "967","2015-10032"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "968","2015-10032"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "969","2015-10032"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "970","2015-10032"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "971","2015-10032"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "972","2015-10032"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "973","2015-10032"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "974","2015-10032"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "975","2015-10032"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "976","2015-10032"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "977","2015-10032"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "978","2015-10032"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "979","2015-10032"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "980","2015-10032"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "981","2015-10032"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "982","2015-10032"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "983","2015-10032"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "984","2015-10032"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "985","2015-10032"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "986","2015-10032"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "987","2015-10032"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "988","2015-10032"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "989","2015-10032"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "990","2015-10032"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "991","2015-10033"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "992","2015-10033"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "993","2015-10033"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "994","2015-10033"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "995","2015-10033"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "996","2015-10033"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "997","2015-10033"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "998","2015-10033"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "999","2015-10033"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1000","2015-10033"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1001","2015-10033"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1002","2015-10033"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1003","2015-10033"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1004","2015-10033"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1005","2015-10033"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1006","2015-10033"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1007","2015-10033"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1008","2015-10033"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1009","2015-10033"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1010","2015-10033"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1011","2015-10033"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1012","2015-10033"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1013","2015-10033"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1014","2015-10033"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1015","2015-10033"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1016","2015-10033"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1017","2015-10033"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1018","2015-10033"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1019","2015-10033"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1020","2015-10033"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1021","2015-10034"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "1022","2015-10034"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1023","2015-10034"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1024","2015-10034"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1025","2015-10034"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1026","2015-10034"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1027","2015-10034"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1028","2015-10034"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1029","2015-10034"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1030","2015-10034"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1031","2015-10034"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1032","2015-10034"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1033","2015-10034"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1034","2015-10034"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1035","2015-10034"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1036","2015-10034"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1037","2015-10034"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1038","2015-10034"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1039","2015-10034"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1040","2015-10034"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1041","2015-10034"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1042","2015-10034"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1043","2015-10034"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1044","2015-10034"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1045","2015-10034"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1046","2015-10034"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1047","2015-10034"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1048","2015-10034"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1049","2015-10034"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1050","2015-10034"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1051","2015-10035"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "1052","2015-10035"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1053","2015-10035"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1054","2015-10035"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1055","2015-10035"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1056","2015-10035"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1057","2015-10035"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1058","2015-10035"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1059","2015-10035"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1060","2015-10035"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1061","2015-10035"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1062","2015-10035"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1063","2015-10035"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1064","2015-10035"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1065","2015-10035"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1066","2015-10035"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1067","2015-10035"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1068","2015-10035"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1069","2015-10035"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1070","2015-10035"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1071","2015-10035"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1072","2015-10035"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1073","2015-10035"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1074","2015-10035"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1075","2015-10035"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1076","2015-10035"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1077","2015-10035"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1078","2015-10035"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1079","2015-10035"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1080","2015-10035"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1081","2015-10036"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "1082","2015-10036"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1083","2015-10036"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1084","2015-10036"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1085","2015-10036"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1086","2015-10036"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1087","2015-10036"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1088","2015-10036"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1089","2015-10036"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1090","2015-10036"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1091","2015-10036"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1092","2015-10036"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1093","2015-10036"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1094","2015-10036"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1095","2015-10036"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1096","2015-10036"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1097","2015-10036"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1098","2015-10036"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1099","2015-10036"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1100","2015-10036"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1101","2015-10036"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1102","2015-10036"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1103","2015-10036"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1104","2015-10036"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1105","2015-10036"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1106","2015-10036"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1107","2015-10036"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1108","2015-10036"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1109","2015-10036"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1110","2015-10036"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1111","2015-10037"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "1112","2015-10037"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1113","2015-10037"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1114","2015-10037"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1115","2015-10037"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1116","2015-10037"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1117","2015-10037"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1118","2015-10037"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1119","2015-10037"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1120","2015-10037"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1121","2015-10037"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1122","2015-10037"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1123","2015-10037"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1124","2015-10037"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1125","2015-10037"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1126","2015-10037"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1127","2015-10037"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1128","2015-10037"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1129","2015-10037"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1130","2015-10037"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1131","2015-10037"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1132","2015-10037"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1133","2015-10037"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1134","2015-10037"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1135","2015-10037"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1136","2015-10037"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1137","2015-10037"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1138","2015-10037"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1139","2015-10037"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1140","2015-10037"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1141","2015-10038"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "1142","2015-10038"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1143","2015-10038"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1144","2015-10038"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1145","2015-10038"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1146","2015-10038"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1147","2015-10038"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1148","2015-10038"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1149","2015-10038"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1150","2015-10038"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1151","2015-10038"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1152","2015-10038"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1153","2015-10038"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1154","2015-10038"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1155","2015-10038"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1156","2015-10038"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1157","2015-10038"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1158","2015-10038"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1159","2015-10038"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1160","2015-10038"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1161","2015-10038"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1162","2015-10038"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1163","2015-10038"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1164","2015-10038"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1165","2015-10038"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1166","2015-10038"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1167","2015-10038"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1168","2015-10038"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1169","2015-10038"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1170","2015-10038"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1171","2015-10039"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "1172","2015-10039"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1173","2015-10039"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1174","2015-10039"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1175","2015-10039"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1176","2015-10039"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1177","2015-10039"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1178","2015-10039"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1179","2015-10039"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1180","2015-10039"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1181","2015-10039"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1182","2015-10039"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1183","2015-10039"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1184","2015-10039"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1185","2015-10039"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1186","2015-10039"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1187","2015-10039"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1188","2015-10039"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1189","2015-10039"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1190","2015-10039"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1191","2015-10039"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1192","2015-10039"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1193","2015-10039"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1194","2015-10039"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1195","2015-10039"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1196","2015-10039"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1197","2015-10039"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1198","2015-10039"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1199","2015-10039"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1200","2015-10039"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1201","2015-10041"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "1202","2015-10041"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1203","2015-10041"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1204","2015-10041"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1205","2015-10041"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1206","2015-10041"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1207","2015-10041"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1208","2015-10041"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1209","2015-10041"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1210","2015-10041"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1211","2015-10041"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1212","2015-10041"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1213","2015-10041"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1214","2015-10041"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1215","2015-10041"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1216","2015-10041"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1217","2015-10041"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1218","2015-10041"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1219","2015-10041"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1220","2015-10041"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1221","2015-10041"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1222","2015-10041"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1223","2015-10041"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1224","2015-10041"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1225","2015-10041"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1226","2015-10041"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1227","2015-10041"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1228","2015-10041"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1229","2015-10041"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1230","2015-10041"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1231","2015-10042"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "1232","2015-10042"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1233","2015-10042"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1234","2015-10042"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1235","2015-10042"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1236","2015-10042"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1237","2015-10042"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1238","2015-10042"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1239","2015-10042"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1240","2015-10042"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1241","2015-10042"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1242","2015-10042"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1243","2015-10042"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1244","2015-10042"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1245","2015-10042"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1246","2015-10042"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1247","2015-10042"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1248","2015-10042"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1249","2015-10042"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1250","2015-10042"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1251","2015-10042"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1252","2015-10042"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1253","2015-10042"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1254","2015-10042"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1255","2015-10042"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1256","2015-10042"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1257","2015-10042"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1258","2015-10042"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1259","2015-10042"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1260","2015-10042"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1261","2015-10043"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "1262","2015-10043"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1263","2015-10043"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1264","2015-10043"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1265","2015-10043"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1266","2015-10043"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1267","2015-10043"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1268","2015-10043"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1269","2015-10043"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1270","2015-10043"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1271","2015-10043"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1272","2015-10043"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1273","2015-10043"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1274","2015-10043"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1275","2015-10043"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1276","2015-10043"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1277","2015-10043"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1278","2015-10043"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1279","2015-10043"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1280","2015-10043"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1281","2015-10043"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1282","2015-10043"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1283","2015-10043"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1284","2015-10043"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1285","2015-10043"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1286","2015-10043"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1287","2015-10043"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1288","2015-10043"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1289","2015-10043"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1290","2015-10043"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1291","2015-10044"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "1292","2015-10044"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1293","2015-10044"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1294","2015-10044"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1295","2015-10044"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1296","2015-10044"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1297","2015-10044"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1298","2015-10044"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1299","2015-10044"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1300","2015-10044"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1301","2015-10044"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1302","2015-10044"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1303","2015-10044"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1304","2015-10044"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1305","2015-10044"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1306","2015-10044"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1307","2015-10044"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1308","2015-10044"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1309","2015-10044"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1310","2015-10044"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1311","2015-10044"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1312","2015-10044"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1313","2015-10044"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1314","2015-10044"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1315","2015-10044"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1316","2015-10044"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1317","2015-10044"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1318","2015-10044"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1319","2015-10044"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1320","2015-10044"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1321","2015-10045"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "1322","2015-10045"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1323","2015-10045"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1324","2015-10045"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1325","2015-10045"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1326","2015-10045"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1327","2015-10045"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1328","2015-10045"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1329","2015-10045"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1330","2015-10045"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1331","2015-10045"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1332","2015-10045"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1333","2015-10045"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1334","2015-10045"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1335","2015-10045"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1336","2015-10045"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1337","2015-10045"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1338","2015-10045"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1339","2015-10045"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1340","2015-10045"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1341","2015-10045"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1342","2015-10045"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1343","2015-10045"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1344","2015-10045"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1345","2015-10045"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1346","2015-10045"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1347","2015-10045"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1348","2015-10045"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1349","2015-10045"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1350","2015-10045"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1351","2015-10046"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "1352","2015-10046"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1353","2015-10046"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1354","2015-10046"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1355","2015-10046"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1356","2015-10046"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1357","2015-10046"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1358","2015-10046"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1359","2015-10046"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1360","2015-10046"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1361","2015-10046"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1362","2015-10046"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1363","2015-10046"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1364","2015-10046"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1365","2015-10046"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1366","2015-10046"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1367","2015-10046"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1368","2015-10046"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1369","2015-10046"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1370","2015-10046"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1371","2015-10046"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1372","2015-10046"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1373","2015-10046"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1374","2015-10046"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1375","2015-10046"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1376","2015-10046"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1377","2015-10046"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1378","2015-10046"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1379","2015-10046"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1380","2015-10046"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1381","2015-10047"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "1382","2015-10047"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1383","2015-10047"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1384","2015-10047"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1385","2015-10047"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1386","2015-10047"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1387","2015-10047"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1388","2015-10047"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1389","2015-10047"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1390","2015-10047"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1391","2015-10047"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1392","2015-10047"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1393","2015-10047"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1394","2015-10047"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1395","2015-10047"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1396","2015-10047"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1397","2015-10047"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1398","2015-10047"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1399","2015-10047"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1400","2015-10047"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1401","2015-10047"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1402","2015-10047"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1403","2015-10047"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1404","2015-10047"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1405","2015-10047"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1406","2015-10047"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1407","2015-10047"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1408","2015-10047"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1409","2015-10047"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1410","2015-10047"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1411","2015-10048"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "1412","2015-10048"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1413","2015-10048"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1414","2015-10048"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1415","2015-10048"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1416","2015-10048"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1417","2015-10048"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1418","2015-10048"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1419","2015-10048"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1420","2015-10048"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1421","2015-10048"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1422","2015-10048"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1423","2015-10048"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1424","2015-10048"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1425","2015-10048"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1426","2015-10048"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1427","2015-10048"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1428","2015-10048"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1429","2015-10048"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1430","2015-10048"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1431","2015-10048"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1432","2015-10048"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1433","2015-10048"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1434","2015-10048"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1435","2015-10048"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1436","2015-10048"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1437","2015-10048"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1438","2015-10048"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1439","2015-10048"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1440","2015-10048"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1441","2015-10049"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "1442","2015-10049"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1443","2015-10049"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1444","2015-10049"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1445","2015-10049"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1446","2015-10049"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1447","2015-10049"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1448","2015-10049"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1449","2015-10049"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1450","2015-10049"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1451","2015-10049"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1452","2015-10049"," ","2015-09-21","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1453","2015-10049"," ","2015-09-07","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1454","2015-10049"," ","2015-09-22","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1455","2015-10049"," ","2015-09-08","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1456","2015-10049"," ","2015-09-23","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1457","2015-10049"," ","2015-09-09","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1458","2015-10049"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1459","2015-10049"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1460","2015-10049"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1461","2015-10049"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1462","2015-10049"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1463","2015-10049"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1464","2015-10049"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1465","2015-10049"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1466","2015-10049"," ","2015-09-28","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1467","2015-10049"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1468","2015-10049"," ","2015-09-29","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1469","2015-10049"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1470","2015-10049"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1471","2015-10050"," ","2015-09-01","TUE","07:59","12:00","12:54","17:00"," ","23:21");
INSERT INTO `attendance`  VALUES ( "1472","2015-10050"," ","2015-09-16","WED"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1473","2015-10050"," ","2015-09-02","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1474","2015-10050"," ","2015-09-17","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1475","2015-10050"," ","2015-09-03","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1476","2015-10050"," ","2015-09-18","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1477","2015-10050"," ","2015-09-04","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1478","2015-10050"," ","2015-09-19","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1479","2015-10050"," ","2015-09-05","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1480","2015-10050"," ","2015-09-20","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1481","2015-10050"," ","2015-09-06","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1482","2015-10050"," ","2015-09-21","MON","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1483","2015-10050"," ","2015-09-07","MON","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1484","2015-10050"," ","2015-09-22","TUE","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1485","2015-10050"," ","2015-09-08","TUE","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1486","2015-10050"," ","2015-09-23","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1487","2015-10050"," ","2015-09-09","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1488","2015-10050"," ","2015-09-24","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1489","2015-10050"," ","2015-09-10","THU"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1490","2015-10050"," ","2015-09-25","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1491","2015-10050"," ","2015-09-11","FRI"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1492","2015-10050"," ","2015-09-26","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1493","2015-10050"," ","2015-09-12","SAT"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1494","2015-10050"," ","2015-09-27","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1495","2015-10050"," ","2015-09-13","SUN","Rest ","","","","","");
INSERT INTO `attendance`  VALUES ( "1496","2015-10050"," ","2015-09-28","MON","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1497","2015-10050"," ","2015-09-14","MON"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1498","2015-10050"," ","2015-09-29","TUE","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `attendance`  VALUES ( "1499","2015-10050"," ","2015-09-15","TUE"," "," "," "," "," "," ");
INSERT INTO `attendance`  VALUES ( "1500","2015-10050"," ","2015-09-30","WED","07:59","12:00","12:54","17:00"," "," ");


--
-- Tabel structure for table `audit_trail`
--
DROP TABLE  IF EXISTS `audit_trail`;
CREATE TABLE `audit_trail` (
  `at_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(30) NOT NULL,
  `department` varchar(50) NOT NULL,
  `activity` text NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `date_time_in` varchar(25) NOT NULL,
  `date_time_out` varchar(25) NOT NULL,
  PRIMARY KEY (`at_id`),
  UNIQUE KEY `at_id` (`at_id`)
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=latin1;

INSERT INTO `audit_trail`  VALUES ( "98","Raha Genesis Mendoza","Production","Time logged in: 08-21-2015 10:56:08pm+View.+Generate a receipt of order no: 15247703 for Mark Jonald Lazarra at 10:56:23pm+Updated a delivery records: Order no: 15247702; Name: Mark Jonald Lazarra ","::1","08-21-2015 10:56:08pm","08-21-2015 11:05:15pm");
INSERT INTO `audit_trail`  VALUES ( "99","Cicero Osias Lazarra","Production","Time logged in: 08-21-2015 11:05:22pm+View.","::1","08-21-2015 11:05:22pm","");
INSERT INTO `audit_trail`  VALUES ( "100","Chad Lazarra","Production","Time logged in: 08-23-2015 10:40:56am+View.","::1","08-23-2015 10:40:56am","");
INSERT INTO `audit_trail`  VALUES ( "101","Chad Lazarra","Production","Time logged in: 08-23-2015 11:02:17am+View.","::1","08-23-2015 11:02:17am","08-23-2015 11:11:54am");
INSERT INTO `audit_trail`  VALUES ( "102","Alvin Ellise","Human Resource","Time logged in: 08-23-2015 11:11:57am+View.+Time logged out: 08-23-2015 11:15:28am+Time logged out: 08-23-2015 11:17:09am","::1","08-23-2015 11:11:57am","08-23-2015 11:17:09am");
INSERT INTO `audit_trail`  VALUES ( "103","Alvin Ellise","Human Resource","Time logged in: 08-23-2015 11:17:15am+View.+Time logged out: 08-23-2015 11:50:46am","::1","08-23-2015 11:17:15am","");
INSERT INTO `audit_trail`  VALUES ( "104","Chad Lazarra","Production","Time logged in: 08-23-2015 11:18:36am+View.+Time logged out: 08-23-2015 11:34:19am","::1","08-23-2015 11:18:36am","");
INSERT INTO `audit_trail`  VALUES ( "105","Chad Lazarra","Production","Time logged in: 08-23-2015 11:20:20am+View.","::1","08-23-2015 11:20:20am","");
INSERT INTO `audit_trail`  VALUES ( "106","Chad Lazarra","Production","Time logged in: 08-23-2015 11:32:19am+View.","::1","08-23-2015 11:32:19am","08-23-2015 11:34:19am");
INSERT INTO `audit_trail`  VALUES ( "107","Alvin Ellise","Human Resource","Time logged in: 08-23-2015 11:34:21am+View.","::1","08-23-2015 11:34:21am","08-23-2015 11:50:46am");
INSERT INTO `audit_trail`  VALUES ( "108","Chad Lazarra","Production","Time logged in: 08-23-2015 11:50:50am+View.+Time logged out: 08-23-2015 12:56:08pm","::1","08-23-2015 11:50:50am","08-23-2015 12:56:08pm");
INSERT INTO `audit_trail`  VALUES ( "109","Jessen Ricafort","Marketing","Time logged in: 08-24-2015 06:50:18pm+View.+Added a new product: Product No:150003, Product Name: Distilled Crush Ice at 06:52:02pm+Time logged out: 08-24-2015 06:52:54pm","::1","08-24-2015 06:50:18pm","08-24-2015 06:52:54pm");
INSERT INTO `audit_trail`  VALUES ( "110","Raha Genesis Mendoza","Production","Time logged in: 08-24-2015 09:42:49pm+View.+Time logged out: 08-24-2015 10:31:38pm","::1","08-24-2015 09:42:49pm","08-26-2015 05:15:35pm");
INSERT INTO `audit_trail`  VALUES ( "111","Alvin Ellise","Human Resource","Time logged in: 08-26-2015 05:17:33pm+View.+Time logged out: 08-26-2015 05:17:45pm","::1","08-26-2015 05:17:33pm","08-28-2015 01:00:23pm");
INSERT INTO `audit_trail`  VALUES ( "112","Alvin Ellise","Human Resource","","::1","08-28-2015 03:33:31pm","08-28-2015 03:35:45pm");
INSERT INTO `audit_trail`  VALUES ( "113","Jessen Ricafort","Marketing","Time logged in: 08-28-2015 03:58:03pm+View.+Added a new product: Product No:150004, Product Name: Country at 07:32:10pm+Added a new product: Product No:150004, Product Name: Country at 07:34:15pm+Added a new product: Product No:150004, Product Name: nico at 07:38:34pm","::1","08-28-2015 03:58:03pm","08-28-2015 08:03:54pm");
INSERT INTO `audit_trail`  VALUES ( "114","Jessen Ricafort","Marketing","Time logged in: 08-28-2015 08:06:20pm+View.+Deleted a product record: Product no: 150004, Product Name: nico at 08:06:34pm+Time logged out: 08-28-2015 08:06:44pm","::1","08-28-2015 08:06:20pm","08-28-2015 08:06:44pm");
INSERT INTO `audit_trail`  VALUES ( "115","Jessen Ricafort","Marketing","Time logged in: 08-31-2015 08:40:51am+View.","::1","08-31-2015 08:40:51am","");
INSERT INTO `audit_trail`  VALUES ( "116","Jessen Ricafort","Marketing","Time logged in: 08-31-2015 04:25:05pm+View.+Added a new product: Product No:150004, Product Name: sample at 05:09:47pm+Added a new product: Product No:150004, Product Name: sample at 05:20:18pm+Added a new product: Product No:150004, Product Name: sample at 05:30:42pm+Added a new product: Product No:150004, Product Name: sample at 05:34:36pm+Updated a product record: Product No: 150004; Product Name: sample at 06:02:09pm+Updated a product record: Product No: 150004; Product Name: sample at 06:15:55pm+Updated a product record: Product No: 150003; Product Name: Distilled Crush Ice at 06:46:25pm+Updated a product record: Product No: 150004; Product Name: sample at 12:35:04pm+Updated a product record: Product No: 150004; Product Name: sample at 12:36:18pm+Updated a product record: Product No: 150004; Product Name: sample at 12:40:33pm+Updated a product record: Product No: 150004; Product Name: sample at 01:06:52pm+Updated a product record: Product No: 150004; Product Name: sample at 01:07:32pm+Updated a product record: Product No: 150004; Product Name: sample at 01:08:33pm+Updated a product record: Product No: 150004; Product Name: sampleng at 01:21:14pm+Updated a product record: Product No: 150004; Product Name: sample at 01:25:17pm+Updated a product record: Product No: 150004; Product Name: sampleng at 01:26:50pm+Updated a product record: Product No: 150004; Product Name: sampleng at 01:28:32pm+Updated a product record: Product No: 150004; Product Name: sampleng at 02:10:18pm+Updated a product record: Product No: 150004; Product Name: sampleng at 02:12:03pm+Updated a product record: Product No: 150004; Product Name: sampleng at 02:14:18pm+Updated a product record: Product No: 150004; Product Name: sampleng at 02:14:39pm+Updated a product record: Product No: 150004; Product Name: sampleng at 02:15:02pm+Updated a product record: Product No: 150004; Product Name: sampleng at 02:15:24pm+Updated a product record: Product No: 150004; Product Name: sampleng at 02:16:05pm+Updated a product record: Product No: 150004; Product Name: sampleng at 02:19:54pm+Updated a product record: Product No: 150004; Product Name: sampleng at 02:21:33pm+Updated a product record: Product No: 150004; Product Name: sampleng at 02:21:50pm+Updated a product record: Product No: 150004; Product Name: sampleng at 02:22:39pm+Updated a product record: Product No: 150004; Product Name: sampleng at 02:23:38pm+Updated a product record: Product No: 150004; Product Name: sampleng at 02:24:01pm+Updated a product record: Product No: 150004; Product Name: sampleng at 02:26:40pm+Deleted a product record: Product no: 150004, Product Name: sampleng at 02:27:07pm+Updated a product record: Product No: 150003; Product Name: Distilled Crush Ice at 02:36:26pm+Updated a product record: Product No: 150003; Product Name: Distilled Crush Ice at 02:37:27pm+Updated a product record: Product No: 150003; Product Name: Distilled Crush Ice at 02:41:39pm+Updated a product record: Product No: 150001; Product Name: Distilled Block Ice at 03:13:24pm+Updated a product record: Product No: 150001; Product Name: Distilled Block Ice at 03:16:50pm+Time logged out: 09-01-2015 03:26:32pm","::1","08-31-2015 04:25:05pm","");
INSERT INTO `audit_trail`  VALUES ( "117","Chad Lazarra","Production","Time logged in: 09-01-2015 12:15:52pm+View.+Time logged out: 09-01-2015 12:26:42pm","::1","09-01-2015 12:15:52pm","09-01-2015 03:26:32pm");
INSERT INTO `audit_trail`  VALUES ( "118","Chad Lazarra","Production","Time logged in: 09-01-2015 03:29:05pm+View.","::1","09-01-2015 03:29:05pm","09-01-2015 09:59:26pm");
INSERT INTO `audit_trail`  VALUES ( "119","Alvin Ellise","Human Resource","Time logged in: 09-01-2015 10:07:54pm+View.+Imported  2015 employees attendance at 10:39:35pm+Added a new employee record: Employee ID: 2015-10002, Employee Name: Chad Nico Nico Lazarra at11:35:01pm+Imported  2015 employees attendance at 11:39:28pm+Imported  2015 employees attendance at 11:42:24pm+Time logged out: 09-02-2015 11:01:58am","::1","09-01-2015 10:07:54pm","09-02-2015 11:01:58am");
INSERT INTO `audit_trail`  VALUES ( "120","Alvin Ellise","Human Resource","Time logged in: 09-02-2015 11:02:51am+View.+Time logged out: 09-02-2015 11:03:07am","::1","09-02-2015 11:02:51am","09-02-2015 11:03:07am");
INSERT INTO `audit_trail`  VALUES ( "121","Raha Genesis Mendoza","Production","Time logged in: 09-02-2015 11:05:14am+View.+Time logged out: 09-02-2015 11:05:21am","::1","09-02-2015 11:05:14am","09-02-2015 11:05:21am");
INSERT INTO `audit_trail`  VALUES ( "122","Chad Lazarra","Production","Time logged in: 09-02-2015 11:05:27am+View.+Time logged out: 09-02-2015 11:08:14am","::1","09-02-2015 11:05:27am","09-02-2015 11:08:14am");
INSERT INTO `audit_trail`  VALUES ( "123","Alvin Ellise","Human Resource","Time logged in: 09-02-2015 11:08:45am+View.+Time logged out: 09-02-2015 11:10:47am","::1","09-02-2015 11:08:45am","09-02-2015 11:13:01am");
INSERT INTO `audit_trail`  VALUES ( "124","Cicero Osias Lazarra","Production","Time logged in: 09-02-2015 11:13:09am+View.+Time logged out: 09-02-2015 11:13:25am","::1","09-02-2015 11:13:09am","09-02-2015 02:53:34pm");
INSERT INTO `audit_trail`  VALUES ( "125","Chad Lazarra","Production","Time logged in: 09-02-2015 02:53:37pm+View.+Time logged out: 09-02-2015 03:04:19pm","::1","09-02-2015 02:53:37pm","09-02-2015 03:04:19pm");
INSERT INTO `audit_trail`  VALUES ( "126","Cicero Osias Lazarra","Production","Time logged in: 09-02-2015 03:04:27pm+View.+Updated a delivery records: Order no: 15247702; Name: Chad Lazarra +Time logged out: 09-02-2015 03:04:47pm","::1","09-02-2015 03:04:27pm","09-02-2015 03:04:47pm");
INSERT INTO `audit_trail`  VALUES ( "127","Raha Genesis Mendoza","Production","Time logged in: 09-02-2015 03:05:01pm+View.+Generate a receipt of order no: 15247702 for Chad Lazarra at 03:05:19pm+Generate a receipt of order no: 15247701 for Mark Jonald Lazarra at 03:11:14pm+Generate a receipt of order no: 15247702 for Chad Lazarra at 03:11:33pm","::1","09-02-2015 03:05:01pm","");
INSERT INTO `audit_trail`  VALUES ( "128","Cicero Osias Lazarra","Production","Time logged in: 09-02-2015 09:58:28pm+View.+Updated a delivery records: Order no: 15247706; Name: Chad Lazarra +Time logged out: 09-02-2015 10:07:47pm","::1","09-02-2015 09:58:28pm","09-02-2015 10:07:47pm");
INSERT INTO `audit_trail`  VALUES ( "129","Raha Genesis Mendoza","Production","Time logged in: 09-02-2015 10:07:52pm+View.+Generate a receipt of order no: 15247706 for Chad Lazarra at 10:08:39pm+Generate a receipt of order no: 15247702 for Chad Lazarra at 10:31:52pm+Updated a delivery records: Order no: 15247706; Name: Chad Lazarra +Updated a delivery records: Order no: 15247706; Name: Chad Lazarra +Generate all receipts report at 10:35:16pm+Generate a receipt of order no: 15247706 for Chad Lazarra at 10:59:13pm+Generate all receipts report at 11:04:00pm+Generate a receipt of order no: 15247706 for Chad Lazarra at 11:04:03pm","::1","09-02-2015 10:07:52pm","");
INSERT INTO `audit_trail`  VALUES ( "130","Chad Lazarra","Production","Time logged in: 09-04-2015 08:36:03am+View.+Updated a delivery records: Order no: 15247703; Name: Chad Lazarra +Generate a receipt of order no: 15247703 for Chad Lazarra at 08:37:03am+Updated a delivery records: Order no: 15247702; Name: Chad Lazarra +Updated a delivery records: Order no: 15247702; Name: Chad Lazarra +Time logged out: 09-04-2015 12:13:36pm","::1","09-04-2015 08:36:03am","09-04-2015 07:34:04pm");
INSERT INTO `audit_trail`  VALUES ( "131","Alvin Ellise","Human Resource","Time logged in: 09-04-2015 08:21:53pm+View.+Imported  2015 employees attendance at 09:14:36pm","::1","09-04-2015 08:21:53pm","09-04-2015 09:03:03pm");
INSERT INTO `audit_trail`  VALUES ( "132","Alvin Ellise","Human Resource","Time logged in: 09-04-2015 09:03:06pm+View.+Imported September 2015 employees attendance at 09:03:49pm+Imported  2015 employees attendance at 09:04:14pm+Imported  2015 employees attendance at 09:04:54pm+Imported  2015 employees attendance at 09:12:59pm+Imported  2015 employees attendance at 09:15:29pm+Imported  2015 employees attendance at 09:16:40pm+Imported  2015 employees attendance at 09:17:41pm+Imported  2015 employees attendance at 09:19:35pm+Imported  2015 employees attendance at 09:20:13pm+Added a new employee record: Employee ID: 2015-10003, Employee Name: Myle Ian Osias Lazarra at09:28:28pm+Imported  2015 employees attendance at 09:30:56pm+Imported  2015 employees attendance at 09:33:08pm+Imported  2015 employees attendance at 09:33:57pm+Imported  2015 employees attendance at 09:34:33pm+Imported  2015 employees attendance at 09:38:16pm+Imported  2015 employees attendance at 09:41:16pm+Imported  2015 employees attendance at 09:41:29pm+Imported  2015 employees attendance at 09:42:25pm+Imported  2015 employees attendance at 09:42:43pm+Imported  2015 employees attendance at 09:43:51pm+Imported  2015 employees attendance at 09:47:00pm+Imported  2015 employees attendance at 09:47:08pm+Imported  2015 employees attendance at 09:47:28pm+Imported  2015 employees attendance at 09:47:55pm+Imported  2015 employees attendance at 09:49:58pm+Imported  2015 employees attendance at 09:50:45pm+Imported  2015 employees attendance at 09:56:39pm+Imported  2015 employees attendance at 09:56:45pm+Imported  2015 employees attendance at 09:57:14pm+Imported  2015 employees attendance at 09:58:43pm+Imported  2015 employees attendance at 09:59:24pm+Imported  2015 employees attendance at 10:00:16pm+Imported  2015 employees attendance at 10:00:49pm+Imported  2015 employees attendance at 10:01:15pm+Imported  2015 employees attendance at 10:02:09pm+Imported  2015 employees attendance at 10:04:03pm+Imported  2015 employees attendance at 10:04:19pm+Imported  2015 employees attendance at 10:27:20pm+Imported  2015 employees attendance at 10:30:09pm+Imported  2015 employees attendance at 10:32:34pm+Imported September 2015 employees attendance at 10:33:35pm+Imported  2015 employees attendance at 10:33:54pm+Imported  2015 employees attendance at 10:46:28pm+Imported  2015 employees attendance at 10:52:01pm+Imported September 2015 employees attendance at 10:52:18pm+Imported  2015 employees attendance at 10:52:22pm+Imported  2015 employees attendance at 10:54:42pm+Imported  2015 employees attendance at 10:55:26pm+Imported  2015 employees attendance at 10:56:54pm+Imported  2015 employees attendance at 10:59:00pm+Imported  2015 employees attendance at 10:59:44pm","::1","09-04-2015 09:03:06pm","");
INSERT INTO `audit_trail`  VALUES ( "133","Alvin Ellise","Human Resource","Time logged in: 09-06-2015 08:34:12am+View.+Imported  2015 employees attendance at 08:41:11am+Imported  2015 employees attendance at 08:45:11am+Imported  2015 employees attendance at 08:47:31am+Imported September 2015 employees attendance at 08:49:43am+Imported  2015 employees attendance at 08:49:58am+Imported September 2015 employees attendance at 08:52:30am+Imported  2015 employees attendance at 08:52:43am+Imported September 2015 employees attendance at 08:53:57am+Imported  2015 employees attendance at 08:54:09am+Imported  2015 employees attendance at 08:55:38am+Imported  2015 employees attendance at 08:56:54am+Imported  2015 employees attendance at 09:18:42am+Imported  2015 employees attendance at 09:21:29am+Imported  2015 employees attendance at 09:24:42am+Imported  2015 employees attendance at 09:26:23am+Imported  2015 employees attendance at 09:36:00am+Imported  2015 employees attendance at 09:38:50am+Imported  2015 employees attendance at 09:40:55am+Imported  2015 employees attendance at 09:44:31am+Imported  2015 employees attendance at 09:47:08am+Imported  2015 employees attendance at 09:49:46am+Imported September 2015 employees attendance at 09:53:48am+Imported  2015 employees attendance at 09:53:59am+Imported  2015 employees attendance at 09:55:15am+Imported  2015 employees attendance at 09:56:24am+Imported  2015 employees attendance at 09:56:36am+Imported  2015 employees attendance at 09:58:40am+Imported  2015 employees attendance at 10:01:32am+Imported  2015 employees attendance at 10:02:40am+Imported September 2015 employees attendance at 10:02:50am+Imported  2015 employees attendance at 10:03:42am+Imported  2015 employees attendance at 10:42:50am+Imported  2015 employees attendance at 10:49:19am+Imported  2015 employees attendance at 10:57:59am+Imported  2015 employees attendance at 11:09:07am+Imported  2015 employees attendance at 11:13:32am+Imported  2015 employees attendance at 11:14:42am+Imported  2015 employees attendance at 11:15:40am+Imported  2015 employees attendance at 11:16:36am+Imported  2015 employees attendance at 11:31:27am+Imported  2015 employees attendance at 11:32:22am+Imported September 2015 employees attendance at 11:33:58am+Imported  2015 employees attendance at 11:34:18am+Imported  2015 employees attendance at 11:45:01am+Imported  2015 employees attendance at 11:49:14am+Imported  2015 employees attendance at 11:51:24am+Imported  2015 employees attendance at 11:52:43am+Imported  2015 employees attendance at 11:55:19am+Imported  2015 employees attendance at 11:56:43am+Imported  2015 employees attendance at 12:00:59pm+Imported  2015 employees attendance at 12:03:33pm+Imported  2015 employees attendance at 12:04:19pm+Imported  2015 employees attendance at 12:06:10pm+Imported  2015 employees attendance at 12:12:25pm+Imported  2015 employees attendance at 12:16:42pm+Imported  2015 employees attendance at 12:18:36pm+Imported  2015 employees attendance at 12:28:54pm+Imported September 2015 employees attendance at 01:18:23pm+Imported  2015 employees attendance at 01:18:37pm+Imported  2015 employees attendance at 01:27:09pm+Updated September 2015 employees attendance at 01:36:11pm+Updated September 2015 employees attendance at 01:40:16pm+Updated September 2015 employees attendance at 01:43:07pm+Updated September 2015 employees attendance at 01:44:24pm+Updated September 2015 employees attendance at 01:44:29pm+Updated September 2015 employees attendance at 01:46:41pm+Time logged out: 09-06-2015 01:58:57pm","::1","09-06-2015 08:34:12am","09-06-2015 03:00:08pm");
INSERT INTO `audit_trail`  VALUES ( "134","Cicero Osias Lazarra","Production","Time logged in: 09-06-2015 03:07:44pm+View.+Time logged out: 09-06-2015 03:37:19pm","::1","09-06-2015 03:07:44pm","09-06-2015 03:08:29pm");
INSERT INTO `audit_trail`  VALUES ( "135","Chad Lazarra","Production","Time logged in: 09-06-2015 03:08:33pm+View.+Updated a delivery records: Order no: 15247707; Name: Mark Jonald Lazarra +Generate a receipt of order no: 15247707 for Mark Jonald Lazarra at 03:09:07pm+Updated a delivery records: Order no: 15247703; Name: Chad Lazarra +Updated a delivery records: Order no: 15247702; Name: Chad Lazarra +Updated a delivery records: Order no: 15247703; Name: Chad Lazarra +Generate sales reports from 2015-09-06 to 2015-09-13  report at 03:10:56pm+Generate sales report month of 9 at 03:17:37pm+Generate sales report year of 2015 at 03:23:02pm+Generate all receipts report at 03:34:23pm+Generate all receipts report at 03:34:32pm+Generate todays delivery list report at 03:34:49pm+Generate successful delivery list report at 03:36:51pm+Time logged out: 09-06-2015 04:22:23pm","::1","09-06-2015 03:08:33pm","09-06-2015 03:37:19pm");
INSERT INTO `audit_trail`  VALUES ( "136","Sprokotong Colontoy","superadmin","Time logged in: 09-06-2015 03:37:29pm+View.+Time logged out: 09-06-2015 03:48:36pm","::1","09-06-2015 03:37:29pm","09-06-2015 04:22:24pm");
INSERT INTO `audit_trail`  VALUES ( "137","Alvin Ellise","Human Resource","Time logged in: 09-06-2015 04:22:27pm+View.+Updated an employee account: Employee ID: 2015-10001; Employee Name: James Osias Lazarra.+Time logged out: 09-06-2015 04:51:42pm","::1","09-06-2015 04:22:27pm","09-06-2015 05:00:25pm");
INSERT INTO `audit_trail`  VALUES ( "138","Alvin Ellise","Human Resource","Time logged in: 09-06-2015 05:00:29pm+View.+Time logged out: 09-06-2015 05:00:32pm","::1","09-06-2015 05:00:29pm","09-06-2015 05:00:32pm");
INSERT INTO `audit_trail`  VALUES ( "139","Raha Genesis Mendoza","Production","Time logged in: 09-06-2015 05:03:09pm+View.+Time logged out: 09-06-2015 05:03:12pm","::1","09-06-2015 05:03:09pm","09-06-2015 05:03:12pm");
INSERT INTO `audit_trail`  VALUES ( "140","Alvin Ellise","Human Resource","Time logged in: 09-06-2015 05:03:53pm+View.+Added a new employee record: Employee ID: 2015-10004, Employee Name: sample sample sample at05:04:49pm+Time logged out: 09-06-2015 05:04:53pm","::1","09-06-2015 05:03:53pm","09-06-2015 05:05:55pm");
INSERT INTO `audit_trail`  VALUES ( "141","Alvin Ellise","Human Resource","Time logged in: 09-06-2015 05:12:37pm+View.+Time logged out: 09-06-2015 05:12:42pm","::1","09-06-2015 05:12:37pm","09-06-2015 05:58:15pm");
INSERT INTO `audit_trail`  VALUES ( "142","Alvin Ellise","Human Resource","Time logged in: 09-06-2015 05:58:17pm+View.+Time logged out: 09-06-2015 06:02:21pm","::1","09-06-2015 05:58:17pm","09-06-2015 06:05:22pm");
INSERT INTO `audit_trail`  VALUES ( "143","Alvin Ellise","Human Resource","Time logged in: 09-06-2015 06:05:26pm+View.+Approved request leaved of Myle Ian Osias Lazarra; Employee No: 2015-10003 at 06:09:19pm+Time logged out: 09-06-2015 06:09:23pm","::1","09-06-2015 06:05:26pm","09-06-2015 06:10:13pm");
INSERT INTO `audit_trail`  VALUES ( "144","Alvin Ellise","Human Resource","Time logged in: 09-06-2015 06:10:17pm+View.+Approved request leaved of Anna Dee Osias Lazarra; Employee No: 2015-10001 at 06:17:11pm+Approved request leaved of Myle Ian Osias Lazarra; Employee No: 2015-10003 at 06:17:48pm+Approved request leaved of Anna Dee Osias Lazarra; Employee No: 2015-10001 at 06:18:45pm+Approved request leaved of Myle Ian Osias Lazarra; Employee No: 2015-10003 at 06:28:46pm+Time logged out: 09-06-2015 06:36:09pm","::1","09-06-2015 06:10:17pm","09-06-2015 06:38:44pm");
INSERT INTO `audit_trail`  VALUES ( "145","Alvin Ellise","Human Resource","Time logged in: 09-06-2015 06:38:47pm+View.+Time logged out: 09-06-2015 06:45:04pm","::1","09-06-2015 06:38:47pm","09-06-2015 06:45:26pm");
INSERT INTO `audit_trail`  VALUES ( "146","Alvin Ellise","Human Resource","Time logged in: 09-06-2015 06:45:32pm+View.+Time logged out: 09-06-2015 07:14:26pm","::1","09-06-2015 06:45:32pm","09-06-2015 07:48:29pm");
INSERT INTO `audit_trail`  VALUES ( "147","Alvin Ellise","Human Resource","Time logged in: 09-06-2015 09:43:01pm+View.+Time logged out: 09-07-2015 07:12:26am","::1","09-06-2015 09:43:01pm","09-07-2015 07:33:29am");
INSERT INTO `audit_trail`  VALUES ( "148","Jessen Ricafort","Marketing","Time logged in: 09-07-2015 07:35:31am+View.+Deleted a product record: Product no: 150003, Product Name: Distilled Crush Ice at 07:35:58am+Made a mysql backup at 10:28:23am","::1","09-07-2015 07:35:31am","");
INSERT INTO `audit_trail`  VALUES ( "149","Jessen Ricafort","Marketing","Time logged in: 09-07-2015 07:54:55am+View.+Added a new product: Product No:150003, Product Name: Cracked Ice at 08:01:18am+Deleted a product record: Product no: 150003, Product Name: Cracked Ice at 08:01:50am+Added a new product: Product No:150003, Product Name: Cracked Ice at 08:02:17am+Deleted a product record: Product no: 150003, Product Name: Cracked Ice at 08:02:36am+Deleted a product record: Product no: 150003, Product Name: Cracked Ice at 08:07:32am","::1","09-07-2015 07:54:55am","");


--
-- Tabel structure for table `cart`
--
DROP TABLE  IF EXISTS `cart`;
CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_ip` varchar(50) NOT NULL,
  `product_no` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_picture` varchar(50) NOT NULL,
  `quantity` int(3) NOT NULL,
  `product_price` varchar(20) NOT NULL,
  `total_price` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_ordered` date NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO `cart`  VALUES ( "14","::1","150003","Distilled Crush Ice","images/7453705516_6d4bb8c3b2.jpg","1","110","110","guest","2015-09-06");


--
-- Tabel structure for table `customer`
--
DROP TABLE  IF EXISTS `customer`;
CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(390) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `date_created` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO `customer`  VALUES ( "3","nicoyah","8a5e6d72b475baec11b34c46f52a04b3615cce6b6e4cb6b4929d86aef5634d62","Mark Jonald","Lazarra","Sta. Mesa Manila","Male","","09091854874","2015-06-22","shagilazarra@yahoo.com","Customer");
INSERT INTO `customer`  VALUES ( "4","Ianyah","23e60e56807eb22110068d2b6862bd4a5c8b7f8d495148160c6e71a522ac5ad5","Ian","Lazarra","Sta. MEsa","","","12121","2015-06-23","ianyah@yahoo.com","Customer");
INSERT INTO `customer`  VALUES ( "5","Royss","bf56e336bcca59ddc44142ccd70c9168e08c3227e8a7bf41cc7fdb55a182152d","Royss","Roys","Sta. MEsa","Male","","094874334368","2015-06-23","roys@yahoo.com","Customer");
INSERT INTO `customer`  VALUES ( "16","colontoy","cog3cSTWpgZsI","juan","colontoy","adffdsf","Male","","121212","2015-07-08","colontoy@yahoo.com","Customer");
INSERT INTO `customer`  VALUES ( "17","larry jone","24167f88af3dc8cad0197d2235bc2f90b91a5b9f15dc8336899bc623a393d883","Larry Joe","Magno","844 Rosarito St., Sampaloc, Manila","Male","","09056166941","2015-07-31","magnolarryjoe@yahoo.com","Customer");
INSERT INTO `customer`  VALUES ( "18","james","119c9ae6f9ca741bd0a76f87fba0b22cab5413187afb2906aa2875c38e213603","james","james","sta. catalina city","Male","","09191","2015-08-06","lazarra@yahoo.com","Customer");
INSERT INTO `customer`  VALUES ( "19","lazarra17","616d98bf50f5dccf7fa199e26bd59e45cbd547a0f4e77a5ecc30a4f01514d1e6","Chad Nico","Lazarra","Sta. Mesa","Male","","09193156802","2015-08-21","shagilazarra@gmail.com","Customer");
INSERT INTO `customer`  VALUES ( "20","lazarra177","b18aaa6c6b929b866051b69a785a6cdce5bdd564d41be247c7d5ef7c2e2e2271","Lazarra","asdfasdf","Sta. Mesa","Male","","12121","2015-08-21","shagilazarraa@yahoo.com","Customer");
INSERT INTO `customer`  VALUES ( "21","Lazarra","b18aaa6c6b929b866051b69a785a6cdce5bdd564d41be247c7d5ef7c2e2e2271","Lazarra","Lazarra","Sta. Mesa","Male","","09193156802","2015-08-21","shagilazarrsa@yahoo.com","Customer");
INSERT INTO `customer`  VALUES ( "22","Lazarra12","19513fdc9da4fb72a4a05eb66917548d3c90ff94d5419e1f2363eea89dfee1dd","Lazarra","Lazarra","Sta. Mesa","Male","","09193156802","2015-09-06","shagilazaa@yahoo.com","Customer");
INSERT INTO `customer`  VALUES ( "23","johns","0b6839fef42c65d3d2085d27a9da644e7e81340a9ce112d8e1b5e971dd571268","John","John","Sampalok Manila","Male","","09193156802","2015-09-06","azarra@yahoo.com","Customer");
INSERT INTO `customer`  VALUES ( "24","jamess","ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f","John","John","Sampalok Manila","Female","","09193156802","2015-09-06","zarra@yahoo.com","Customer");
INSERT INTO `customer`  VALUES ( "25","sample1","2d4faee845475c5a2c375855ee3e0a0f8a6de82798c84a17b2d9c770331c9e97","sample","sample","sample","Male","","09193156802","2015-09-06","samplesample@yahoo.com","Customer");


--
-- Tabel structure for table `employee`
--
DROP TABLE  IF EXISTS `employee`;
CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id_no` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `middle_name` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(60) NOT NULL,
  `region` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `zip_code` varchar(6) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `department` varchar(40) NOT NULL,
  `position` varchar(20) NOT NULL,
  `rem_leaves` int(3) NOT NULL,
  `date_hired` date NOT NULL,
  `salary` varchar(6) NOT NULL,
  `status` varchar(40) NOT NULL,
  `date_added` date NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`emp_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `emp_id_no` (`emp_id_no`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `employee`  VALUES ( "1","2015-10001","lazarra18","8a5e6d72b475baec11b34c46f52a04b3615cce6b6e4cb6b4929d86aef5634d62","James","Lazarra","Osias","Male","2015-08-11","Sta. Mesa manila","NCR","Manila","1016","09193156802","jameslazarra@yahoo.com","Human Resources","Human Resources Staf","3","2015-08-17","12000","Active","2015-08-17","employee");
INSERT INTO `employee`  VALUES ( "2","2015-10002","nicoyah17","19513fdc9da4fb72a4a05eb66917548d3c90ff94d5419e1f2363eea89dfee1dd","Chad Nico","Lazarra","Nico","Male","2015-09-15","Sta. Mesa","Manila","Manila","1016","09193156802","shagilazarraa@gmail.com","Human Resources","Human Resources Staf","3","2015-09-01","15000","Active","2015-09-01","employee");
INSERT INTO `employee`  VALUES ( "3","2015-10003","yanyan","8a5e6d72b475baec11b34c46f52a04b3615cce6b6e4cb6b4929d86aef5634d62","Myle Ian","Lazarra","Osias","Male","1996-09-01","Sta. Mesa Manila","Manila","Manila","1016","09193156802","myleianlazarra@yahoo.com","Marketing","Marketing Staff","2","2015-09-04","15000","Active","2015-09-04","employee");
INSERT INTO `employee`  VALUES ( "4","2015-10004","sample","19513fdc9da4fb72a4a05eb66917548d3c90ff94d5419e1f2363eea89dfee1dd","sample","sample","sample","Male","2015-09-07","sample","sample","sample","1016","09193156802","sample@yahoo.com","Human Resources","Supervisor","3","2015-09-06","12000","Active","2015-09-06","employee");


--
-- Tabel structure for table `feedback`
--
DROP TABLE  IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `fb_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `date_created` date NOT NULL,
  PRIMARY KEY (`fb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `feedback`  VALUES ( "1","nicoyah","shagilazarra@yahoo.com","        -Please type here your message-\r\n        dsafdasfdafds","::1","2015-09-06");
INSERT INTO `feedback`  VALUES ( "2","shagilazarra@yahoo.com","shagilazarra@yahoo.com","        -Please type here your message-\r\n        sdafasdfsdfdsdsa","::1","2015-09-06");


--
-- Tabel structure for table `guest`
--
DROP TABLE  IF EXISTS `guest`;
CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `date_created` date NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`guest_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO `guest`  VALUES ( "1","Chad Nico","Lazarra","shagilazarra@yahoo.com","Male","Manila","Sta. Mesa Manila","09193156802","2015-08-11","Customer");
INSERT INTO `guest`  VALUES ( "2","Nico","Kamlon","kamlpn@yahoo.com","Male","Sta. Rosa","Sampalok Manila","09191","2015-08-12","Customer");
INSERT INTO `guest`  VALUES ( "3","Chad","Lazarra","shagilazarra@yahoo.com","Male","Manila","Sta. Mesa","09193156802","2015-08-26","Customer");
INSERT INTO `guest`  VALUES ( "4","Chad","Lazarra","shagilazarra@yahoo.com","Male","Manila","Sta. Mesa","09193156802","2015-08-26","Customer");
INSERT INTO `guest`  VALUES ( "5","Chad","Lazarra","shagilazarra@yahoo.com","Male","Manila","Sta. Mesa","09193156802","2015-08-26","Customer");
INSERT INTO `guest`  VALUES ( "6","Chad","Lazarra","shagilazarra@yahoo.com","Male","Manila","Sta. Mesa","09193156802","2015-09-01","Customer");
INSERT INTO `guest`  VALUES ( "7","Chad","Lazarra","shagilazarra@yahoo.com","Male","Manila","Sta. Mesa","09193156802","2015-09-01","Customer");
INSERT INTO `guest`  VALUES ( "8","Chad","Lazarra","shagilazarra@yahoo.com","Male","Manila","Sta. Mesa","09193156802","2015-09-01","Customer");
INSERT INTO `guest`  VALUES ( "9","Chad","Lazarra","shagilazarra@yahoo.com","Male","Manila","Sta. Mesa","09193156802","2015-09-01","Customer");
INSERT INTO `guest`  VALUES ( "10","Chad","Lazarra","shagilazarra@yahoo.com","Male","Manila","Sta. Mesa","094874334368","2015-09-02","Customer");


--
-- Tabel structure for table `leave_message`
--
DROP TABLE  IF EXISTS `leave_message`;
CREATE TABLE `leave_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `message` text NOT NULL,
  `decision` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `leave_message`  VALUES ( "7","myleianlazarra@yahoo.com","2015-09-06","Oryt","Approved");


--
-- Tabel structure for table `leave_report`
--
DROP TABLE  IF EXISTS `leave_report`;
CREATE TABLE `leave_report` (
  `leave_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id_no` varchar(20) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `leave_start` date NOT NULL,
  `leave_until` date NOT NULL,
  `reason` text NOT NULL,
  `discription` text NOT NULL,
  `rank` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date_created` date NOT NULL,
  PRIMARY KEY (`leave_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `leave_report`  VALUES ( "5","2015-10003","Myle Ian Osias Lazarra","Marketing","Marketing Staff","myleianlazarra@yahoo.com","2015-09-06","2015-09-12","Bereavement Leave","huhuhu","Approved","old","2015-09-06");
INSERT INTO `leave_report`  VALUES ( "6","2015-10003","Myle Ian Osias Lazarra","Marketing","Marketing Staff","myleianlazarra@yahoo.com","2015-09-06","2015-09-13","Maternity Leave","dsafdsaf","Needs Confirmation","New","2015-09-06");


--
-- Tabel structure for table `members`
--
DROP TABLE  IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `department` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101113 DEFAULT CHARSET=latin1;

INSERT INTO `members`  VALUES ( "101112","asdfss","ss","fds","sadf","sdaf","sadf","sdaf","sadf");


--
-- Tabel structure for table `orders`
--
DROP TABLE  IF EXISTS `orders`;
CREATE TABLE `orders` (
  `ord_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `particulars` varchar(50) NOT NULL,
  `items` varchar(3) NOT NULL,
  `unitprice` varchar(10) NOT NULL,
  `price` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contacts` varchar(50) NOT NULL,
  `order_date` date NOT NULL,
  `shipped_date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `methods` varchar(255) NOT NULL,
  `rank` varchar(10) NOT NULL,
  `receipt` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  PRIMARY KEY (`ord_id`),
  KEY `order_id_2` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO `orders`  VALUES ( "1","15247701","Mark Jonald Lazarra","Sta. Mesa Manila","Block Ice","2","100","200","shagilazarra@yahoo.com","09091854874","2015-08-21","2015-08-21","Verified","Cash on Delivery","old","Created","Delivered");
INSERT INTO `orders`  VALUES ( "2","15247702","Chad Lazarra","Sta. Mesa","Distilled Block Ice","1","100","100","shagilazarra@yahoo.com","09193156802","2015-09-01","2015-09-06","Verified","Cash on Delivery","old","Created","Delivered");
INSERT INTO `orders`  VALUES ( "3","15247703","Chad Lazarra","Sta. Mesa","Distilled Tube Ice","1","120","120","shagilazarra@yahoo.com","09193156802","2015-09-01","2015-09-06","Verified","Cash on Delivery","old","Created","Delivered");
INSERT INTO `orders`  VALUES ( "6","15247706","Chad Lazarra","Sta. Mesa","Distilled Block Ice","1","100","100","shagilazarra@yahoo.com","094874334368","2015-09-02","2015-09-02","Verified","Cash on Delivery","old","Created","Delivered");
INSERT INTO `orders`  VALUES ( "7","15247706","Chad Lazarra","Sta. Mesa","Distilled Tube Ice","1","120","120","shagilazarra@yahoo.com","094874334368","2015-09-02","2015-09-02","Verified","Cash on Delivery","old","Created","Delivered");
INSERT INTO `orders`  VALUES ( "8","15247707","Mark Jonald Lazarra","Sta. Mesa Manila","Distilled Tube Ice","3","120","360","shagilazarra@yahoo.com","09091854874","2015-09-06","0000-00-00","Verified","Cash on Delivery","old","Created","");
INSERT INTO `orders`  VALUES ( "9","15247708","Myle Ian Lazarra","Sta. Mesa Manila","Distilled Crush Ice","1","110","110","myleianlazarra@yahoo.com","09193156802","2015-09-06","0000-00-00","Unverified","Cash on Delivery","new","None","");


--
-- Tabel structure for table `orders_cancelled`
--
DROP TABLE  IF EXISTS `orders_cancelled`;
CREATE TABLE `orders_cancelled` (
  `ord_cld` int(11) NOT NULL AUTO_INCREMENT,
  `order_no` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `particulars` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `ordered_date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_cancelled` varchar(50) NOT NULL,
  PRIMARY KEY (`ord_cld`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `orders_cancelled`  VALUES ( "3","15247705","shagilazarra@yahoo.com","Distilled Tube Ice","1","120","2015-09-01","Cancelled","2015/09/04");


--
-- Tabel structure for table `products`
--
DROP TABLE  IF EXISTS `products`;
CREATE TABLE `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_no` varchar(20) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_picture` varchar(200) NOT NULL,
  `sshow1` varchar(100) NOT NULL,
  `sshow2` varchar(100) NOT NULL,
  `sshow3` varchar(100) NOT NULL,
  `sshow4` varchar(100) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `price` varchar(4) NOT NULL,
  `summary` text NOT NULL,
  `date_added` date NOT NULL,
  `date_updated` date NOT NULL,
  PRIMARY KEY (`product_id`),
  UNIQUE KEY `product_no` (`product_no`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `products`  VALUES ( "1","150001","Distilled Block Ice","images/block-ice.jpg","images/slideshow/iceblock1.jpg","images/slideshow/iceblock2.jpg","images/slideshow/iceblock3.jpg","images/slideshow/iceblock4.jpg","Block","100","Distilled water+25KG/Block+1.2 meters height+Certified Clean and Safe+12 steps of water purifying++++++","0000-00-00","2015-09-01");
INSERT INTO `products`  VALUES ( "2","150002","Distilled Tube Ice","images/tube-ice.jpg","","","","","Sack","120","Distilled water+25KG/Sack+1 meter height+Certified Clean and Safe+12 steps of water purifying","0000-00-00","0000-00-00");


--
-- Tabel structure for table `receipt`
--
DROP TABLE  IF EXISTS `receipt`;
CREATE TABLE `receipt` (
  `receipt_id` int(11) NOT NULL AUTO_INCREMENT,
  `OR_no` varchar(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `particulars` varchar(200) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `sub_total` varchar(10) NOT NULL,
  `tax` varchar(10) NOT NULL,
  `total_price` varchar(10) NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`receipt_id`),
  UNIQUE KEY `receipt_id` (`receipt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO `receipt`  VALUES ( "1","70000","Chad Nico Lazarra","Sta. Mesa Manila","Block Ice","2","200","24","","2015-08-11");
INSERT INTO `receipt`  VALUES ( "2","70001","Mark Jonald Lazarra","Sta. Mesa Manila","Block Ice","1","100","12","","2015-08-21");
INSERT INTO `receipt`  VALUES ( "3","70002","Chad Lazarra","Sta. Mesa","Distilled Block Ice","1","100","12","","2015-09-02");
INSERT INTO `receipt`  VALUES ( "5","70003","Mark Jonald Lazarra","Sta. Mesa Manila","Block Ice","2","200","24","","2015-09-02");
INSERT INTO `receipt`  VALUES ( "6","70004","Chad Lazarra","Sta. Mesa","Distilled Block Ice","1","100","12","","2015-09-02");
INSERT INTO `receipt`  VALUES ( "7","70005","Chad Lazarra","Sta. Mesa","Distilled Block Ice","1","100","12","","2015-09-02");
INSERT INTO `receipt`  VALUES ( "21","70006","Chad Lazarra","Sta. Mesa","Distilled Block Ice","1","100","12","88","2015-09-02");
INSERT INTO `receipt`  VALUES ( "22","70006","Chad Lazarra","Sta. Mesa","Distilled Tube Ice","1","120","14.4","105.6","2015-09-02");
INSERT INTO `receipt`  VALUES ( "23","70007","Chad Lazarra","Sta. Mesa","Distilled Tube Ice","1","120","14.4","105.6","2015-09-04");
INSERT INTO `receipt`  VALUES ( "24","70008","Mark Jonald Lazarra","Sta. Mesa Manila","Distilled Tube Ice","3","360","43.2","316.8","2015-09-06");
INSERT INTO `receipt`  VALUES ( "25","70009","Mark Jonald Lazarra","Sta. Mesa Manila","Distilled Tube Ice","3","360","43.2","316.8","2015-09-06");


--
-- Tabel structure for table `sample`
--
DROP TABLE  IF EXISTS `sample`;
CREATE TABLE `sample` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id_no` varchar(255) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `week` varchar(255) NOT NULL,
  `in_am` varchar(255) NOT NULL,
  `out_am` varchar(255) NOT NULL,
  `in_pm` varchar(255) NOT NULL,
  `out_pm` varchar(255) NOT NULL,
  `in_overtime` varchar(255) NOT NULL,
  `out_overtime` varchar(255) NOT NULL,
  PRIMARY KEY (`attendance_id`),
  UNIQUE KEY `attendance_id` (`attendance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=latin1;

INSERT INTO `sample`  VALUES ( "121","2015-10001","Anna Dee HR","2015-07-01","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `sample`  VALUES ( "122","2015-10001","Anna Dee HR","2015-07-16","THU","08:00","12:00","12:54","17:00"," "," ");
INSERT INTO `sample`  VALUES ( "123","2015-10001","Anna Dee HR","2015-07-02","THU","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `sample`  VALUES ( "124","2015-10001","Anna Dee HR","2015-07-17","FRI"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "125","2015-10001","Anna Dee HR","2015-07-03","FRI","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `sample`  VALUES ( "126","2015-10001","Anna Dee HR","2015-07-18","SAT"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "127","2015-10001","Anna Dee HR","2015-07-04","SAT","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `sample`  VALUES ( "128","2015-10001","Anna Dee HR","2015-07-19","SUN","Rest ","","","","","");
INSERT INTO `sample`  VALUES ( "129","2015-10001","Anna Dee HR","2015-07-05","SUN","Rest ","","","","","");
INSERT INTO `sample`  VALUES ( "130","2015-10001","Anna Dee HR","2015-07-20","MON"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "131","2015-10001","Anna Dee HR","2015-07-06","MON","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `sample`  VALUES ( "132","2015-10001","Anna Dee HR","2015-07-21","TUE"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "133","2015-10001","Anna Dee HR","2015-07-07","TUE","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `sample`  VALUES ( "134","2015-10001","Anna Dee HR","2015-07-22","WED"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "135","2015-10001","Anna Dee HR","2015-07-08","WED","07:59","12:00","12:54","17:00"," "," ");
INSERT INTO `sample`  VALUES ( "136","2015-10001","Anna Dee HR","2015-07-23","THU"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "137","2015-10001","Anna Dee HR","2015-07-09","THU","08:00","12:00","12:54","17:00"," "," ");
INSERT INTO `sample`  VALUES ( "138","2015-10001","Anna Dee HR","2015-07-24","FRI"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "139","2015-10001","Anna Dee HR","2015-07-10","FRI","08:00","12:00","12:54","17:00"," "," ");
INSERT INTO `sample`  VALUES ( "140","2015-10001","Anna Dee HR","2015-07-25","SAT"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "141","2015-10001","Anna Dee HR","2015-07-11","SAT","08:00","12:00","12:54","17:00"," "," ");
INSERT INTO `sample`  VALUES ( "142","2015-10001","Anna Dee HR","2015-07-26","SUN","Rest ","","","","","");
INSERT INTO `sample`  VALUES ( "143","2015-10001","Anna Dee HR","2015-07-12","SUN","Rest ","","","","","");
INSERT INTO `sample`  VALUES ( "144","2015-10001","Anna Dee HR","2015-07-27","MON"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "145","2015-10001","Anna Dee HR","2015-07-13","MON","08:00","12:00","12:54","17:00"," "," ");
INSERT INTO `sample`  VALUES ( "146","2015-10001","Anna Dee HR","2015-07-28","TUE"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "147","2015-10001","Anna Dee HR","2015-07-14","TUE","08:00","12:00","12:54","17:00"," "," ");
INSERT INTO `sample`  VALUES ( "148","2015-10001","Anna Dee HR","2015-07-29","WED"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "149","2015-10001","Anna Dee HR","2015-07-15","WED","08:00","12:00","12:54","17:00"," "," ");
INSERT INTO `sample`  VALUES ( "150","2015-10001","Anna Dee HR","2015-07-30","THU"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "151","2015-10002","Chad Lazarra","2015-07-01","WED","08:00","12:00","12:54","17:00"," "," ");
INSERT INTO `sample`  VALUES ( "152","2015-10002","Chad Lazarra","2015-07-16","THU"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "153","2015-10002","Chad Lazarra","2015-07-02","THU","07:59"," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "154","2015-10002","Chad Lazarra","2015-07-17","FRI"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "155","2015-10002","Chad Lazarra","2015-07-03","FRI","07:59"," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "156","2015-10002","Chad Lazarra","2015-07-18","SAT"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "157","2015-10002","Chad Lazarra","2015-07-04","SAT","07:59"," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "158","2015-10002","Chad Lazarra","2015-07-19","SUN","Rest ","","","","","");
INSERT INTO `sample`  VALUES ( "159","2015-10002","Chad Lazarra","2015-07-05","SUN","Rest ","","","","","");
INSERT INTO `sample`  VALUES ( "160","2015-10002","Chad Lazarra","2015-07-20","MON","07:59"," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "161","2015-10002","Chad Lazarra","2015-07-06","MON","07:59"," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "162","2015-10002","Chad Lazarra","2015-07-21","TUE","07:59"," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "163","2015-10002","Chad Lazarra","2015-07-07","TUE"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "164","2015-10002","Chad Lazarra","2015-07-22","WED","07:59"," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "165","2015-10002","Chad Lazarra","2015-07-08","WED"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "166","2015-10002","Chad Lazarra","2015-07-23","THU"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "167","2015-10002","Chad Lazarra","2015-07-09","THU"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "168","2015-10002","Chad Lazarra","2015-07-24","FRI"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "169","2015-10002","Chad Lazarra","2015-07-10","FRI"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "170","2015-10002","Chad Lazarra","2015-07-25","SAT"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "171","2015-10002","Chad Lazarra","2015-07-11","SAT"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "172","2015-10002","Chad Lazarra","2015-07-26","SUN","Rest ","","","","","");
INSERT INTO `sample`  VALUES ( "173","2015-10002","Chad Lazarra","2015-07-12","SUN","Rest ","","","","","");
INSERT INTO `sample`  VALUES ( "174","2015-10002","Chad Lazarra","2015-07-27","MON"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "175","2015-10002","Chad Lazarra","2015-07-13","MON"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "176","2015-10002","Chad Lazarra","2015-07-28","TUE"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "177","2015-10002","Chad Lazarra","2015-07-14","TUE"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "178","2015-10002","Chad Lazarra","2015-07-29","WED"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "179","2015-10002","Chad Lazarra","2015-07-15","WED"," "," "," "," "," "," ");
INSERT INTO `sample`  VALUES ( "180","2015-10002","Chad Lazarra","2015-07-30","THU"," "," "," "," "," "," ");


--
-- Tabel structure for table `successful_deliveries`
--
DROP TABLE  IF EXISTS `successful_deliveries`;
CREATE TABLE `successful_deliveries` (
  `sd_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `particulars` varchar(50) NOT NULL,
  `quantity` varchar(3) NOT NULL,
  `total_price` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_order` date NOT NULL,
  `date_shipped` date NOT NULL,
  PRIMARY KEY (`sd_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `successful_deliveries`  VALUES ( "1","Chad Nico Lazarra","Sta. Mesa Manila","Block Ice","2","200","shagilazarra@yahoo.com","2015-08-11","2015-08-11");
INSERT INTO `successful_deliveries`  VALUES ( "2","Mark Jonald Lazarra","Sta. Mesa Manila","Block Ice","1","100","shagilazarra@yahoo.com","2015-08-21","2015-08-21");
INSERT INTO `successful_deliveries`  VALUES ( "3","Chad Lazarra","Sta. Mesa","Distilled Tube Ice","1","120","shagilazarra@yahoo.com","2015-09-02","2015-09-02");
INSERT INTO `successful_deliveries`  VALUES ( "4","Chad Lazarra","Sta. Mesa","Distilled Block Ice","1","100","shagilazarra@yahoo.com","2015-09-01","2015-09-06");
INSERT INTO `successful_deliveries`  VALUES ( "5","Chad Lazarra","Sta. Mesa","Distilled Tube Ice","1","120","shagilazarra@yahoo.com","2015-09-01","2015-09-06");


--
-- Tabel structure for table `todays_delivery`
--
DROP TABLE  IF EXISTS `todays_delivery`;
CREATE TABLE `todays_delivery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_no` varchar(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_no` (`order_no`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO `todays_delivery`  VALUES ( "1","15247702","Chad Nico Lazarra","Sta. Mesa Manila","2015-08-19","Not listed");
INSERT INTO `todays_delivery`  VALUES ( "2","15247708","Nico Kamlon","Sampalok Manila","2015-08-19","Not listed");
INSERT INTO `todays_delivery`  VALUES ( "4","15247701","Mark Jonald Lazarra","Sta. Mesa Manila","2015-08-21","Not listed");
INSERT INTO `todays_delivery`  VALUES ( "8","15247703","Mark Jonald Lazarra","Sta. Mesa Manila","2015-08-21","Not listed");
INSERT INTO `todays_delivery`  VALUES ( "9","15247706","Chad Lazarra","Sta. Mesa","2015-09-02","Not listed");
INSERT INTO `todays_delivery`  VALUES ( "10","15247707","Mark Jonald Lazarra","Sta. Mesa Manila","2015-09-06","Not listed");


--
-- Tabel structure for table `updates`
--
DROP TABLE  IF EXISTS `updates`;
CREATE TABLE `updates` (
  `update_no` int(11) NOT NULL AUTO_INCREMENT,
  `order_no` varchar(25) NOT NULL,
  `date` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`update_no`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=latin1;

INSERT INTO `updates`  VALUES ( "69","15247701","08-27-2015 10:19:47pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "95","15247702","08-27-2015 10:57:19pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "96","15247702","08-27-2015 10:57:20pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "97","15247702","08-27-2015 10:57:20pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "98","15247702","08-27-2015 10:57:20pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "99","15247702","08-27-2015 10:57:20pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "100","15247703","08-27-2015 10:58:32pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "101","15247703","08-27-2015 10:58:32pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "102","15247703","08-27-2015 10:58:32pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "103","15247703","08-27-2015 10:58:32pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "104","15247703","08-27-2015 10:58:32pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "105","15247704","08-27-2015 10:59:05pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "106","15247705","08-27-2015 10:59:28pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "107","15247706","08-27-2015 11:03:09pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "108","15247707","08-27-2015 11:03:45pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "109","15247708","08-27-2015 11:04:03pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "110","15247709","08-27-2015 11:05:10pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","jameslazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "111","15247710","08-27-2015 11:05:46pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","jameslazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "112","15247710","09-01-2015 12:15:34pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "113","15247701","09-01-2015 03:30:38pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "114","15247702","09-01-2015 03:33:58pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "115","15247703","09-01-2015 03:35:39pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "116","15247705","09-01-2015 09:57:52pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "117","15247702","09-02-2015 03:04:36pm","thank you for shopping with us. your order is now verified and going through preparation!","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "118","15247705","09-02-2015 09:58:15pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "119","15247706","09-02-2015 10:07:38pm","thank you for shopping with us. your order is now verified and going through preparation!","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "120","15247706","09-02-2015 10:34:46pm","Your order has been shipped","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "121","15247706","09-02-2015 10:35:02pm","Thank you for buying with us, We hope that you will buy again with us","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "122","15247703","09-04-2015 08:36:51am","thank you for shopping with us. your order is now verified and going through preparation!","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "123","15247702","09-04-2015 08:37:45am","Your order has been shipped","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "124","15247702","09-04-2015 08:38:04am","Thank you for buying with us, We hope that you will buy again with us","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "125","15247707","09-06-2015 03:08:10pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "126","15247707","09-06-2015 03:09:02pm","thank you for shopping with us. your order is now verified and going through preparation!","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "127","15247703","09-06-2015 03:09:37pm","Your order has been shipped","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "128","15247702","09-06-2015 03:10:18pm","Thank you for buying with us, We hope that you will buy again with us","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "129","15247703","09-06-2015 03:10:32pm","Thank you for buying with us, We hope that you will buy again with us","shagilazarra@yahoo.com");
INSERT INTO `updates`  VALUES ( "130","15247708","09-06-2015 07:36:49pm","Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.","myleianlazarra@yahoo.com");


--
-- Tabel structure for table `users`
--
DROP TABLE  IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_code` varchar(10) NOT NULL,
  `admin_no` varchar(15) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(35) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_joined` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `tries` int(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO `users`  VALUES ( "1","1","A15-10001","Alvin Ellise","admin","8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918","Human Resource","","","0000-00-00","active","0");
INSERT INTO `users`  VALUES ( "2","2","A15-10002","Jessen Ricafort","marketing","e2a530e251d3675034d23f5c5f87f54ec3182a088ba7d13350824794f8e6b76e","Marketing","","","0000-00-00","active","0");
INSERT INTO `users`  VALUES ( "3","3","A15-10003","Chad Lazarra","delivery","b4af39d5b65a14849e885a9d65f0efe4f4e689989689c28c16cfcb3a6e78db5a","Production","","","0000-00-00","active","0");
INSERT INTO `users`  VALUES ( "4","4","A15-10004","Sprokotong Colontoy","superadmin","186cf774c97b60a1c106ef718d10970a6a06e06bef89553d9ae65d938a886eae","superadmin","","","0000-00-00","active","0");
INSERT INTO `users`  VALUES ( "5","11","A15-10005","Colontoy Colontoy","colontoy","24167f88af3dc8cad0197d2235bc2f90b91a5b9f15dc8336899bc623a393d883","Human Resources","Male","Sta. Mesa Manila","2015-08-07","active","0");
INSERT INTO `users`  VALUES ( "6","11","A15-10006","Raymond Mendoza Mariano","raymond11","0c7fb88c430897c6307037f3251e855a91b708fe02e83da6c58cc646bffecdfd","Human Resources","Male","Angono Rizal","2015-08-13","active","0");
INSERT INTO `users`  VALUES ( "7","33","A15-10007","Raha Genesis Mendoza","raha12","59eeb71e712b6ea332f55f92dafd413ece8df6a5d979cd89076e3f489b24b383","Production","Male","Magsaysay blvd.  Sta.  Mesa Manila","2015-08-13","active","0");
INSERT INTO `users`  VALUES ( "8","333","A15-10008","Cicero Osias Lazarra","cicero","19513fdc9da4fb72a4a05eb66917548d3c90ff94d5419e1f2363eea89dfee1dd","Production","Male","Sta. Mesa","2015-08-21","active","0");


SET FOREIGN_KEY_CHECKS = 1 ; 
COMMIT ; 
SET AUTOCOMMIT = 1 ; 
