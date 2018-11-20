<?php


CREATE TABLE IF NOT EXISTS 'mst_question' (
  que_id int(5) NOT NULL AUTO_INCREMENT,
  test_id int(5) DEFAULT NULL,
  'que_desc' varchar(150) DEFAULT NULL,
  'ans1' varchar(75) DEFAULT NULL,
  'ans2' varchar(75) DEFAULT NULL,
  'ans3' varchar(75) DEFAULT NULL,
  'ans4' varchar(75) DEFAULT NULL,
  true_ans int(1) DEFAULT NULL,
  PRIMARY KEY ('que_id'))  ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT;


CREATE TABLE IF NOT EXISTS 'mst_result' (
  'login' varchar(20) DEFAULT NULL,
  'test_id' int(5) DEFAULT NULL,
  'test_date' date DEFAULT NULL,
  'score' int(3) DEFAULT NULL );


CREATE TABLE IF NOT EXISTS 'mst_subject' (
  'sub_id' int(5) NOT NULL AUTO_INCREMENT,
  'sub_name' varchar(25) DEFAULT NULL, 
  PRIMARY KEY ('sub_id'));

INSERT INTO 'mst_subject' ('sub_id', 'sub_name') VALUES
(1, 'VB'),
(2, 'Oracle'),
(3, 'Java'),
(4, 'PHP'),
(5, 'Computer Fundamental'),
(6, 'Networking'),
(7, 'mysql');


CREATE TABLE IF NOT EXISTS `mst_studentanswer` (
  'sess_id' varchar(80) DEFAULT NULL,
  'test_id' int(11) DEFAULT NULL,
  'que_des' varchar(200) DEFAULT NULL,
  'ans1' varchar(50) DEFAULT NULL,
  'ans2' varchar(50) DEFAULT NULL,
  'ans3' varchar(50) DEFAULT NULL,
  'ans4' varchar(50) DEFAULT NULL,
  'true_ans' int(11) DEFAULT NULL,
  'your_ans' int(11) DEFAULT NULL );
?>
