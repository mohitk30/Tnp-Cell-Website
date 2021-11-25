CREATE SCHEMA TNPSCHEMA;

 
   -- -------------------------------------------------------
   
   CREATE TABLE STAFF_MEMB(
         NAME VARCHAR(50),
         PNO VARCHAR(10),
         POSITION VARCHAR(30),
         FROMDESK lONGTEXT,
         EMAIL VARCHAR(30)
         );
   INSERT INTO STAFF_MEMB(NAME,POSITION,FROMDESK,EMAIL) VALUES(
   'Dr. Praveen Kumar','Director','Being the Director of an ‘Institution of National Importance’ is a matter of
pride as well as a burden of responsibility. This position has been held by
stalwarts who have nurtured this institution to where it is today in such short
span of time. Now, as the baton has passed on to me, I realize that it is for me
to lay a roadmap that would take this institution to even greater heights. NIT
Delhi has been successfully fulfilling its mandate of developing competent
professionals to serve not only our country, but the world as a whole. At the
National Institute of Technology Delhi, achieving academic excellence has
been our ambition right from inception. As we spread our wings of knowledge,
the Institute has already begun its journey of excellence with advanced
learning and research endeavors in various disciplines of Engineering, Science
and Technology, Management and Humanity. NIT Delhi is sincerely committed
to accumulating the best talents of learners and instructors from across the
globe and thus imparting holistic education along with the best practice of
superior professional ethics. We are hopeful to develop our permanent campus
soon with state of the art infrastructure and advanced facilities. With these
milestones and a lot more to achieve in the near future, I feel gratified to invite
all the recruiting organizations for the placement session of 2020-21 batch.','director@nitdelhi.ac.in');

 INSERT INTO STAFF_MEMB(NAME,POSITION,FROMDESK,EMAIL) VALUES(
   'Dr. Kapil Kumar','Training and Placement Officer','NIT Delhi has been able to carve a niche for itself among the premier
institutes and aims to achieve international distinction for commitment,
creativity, innovation and excellence as the prior standards. It also prioritises
cultivation of knowledge and research activities to develop technologies for
the society. The institute has the finest faculty and the best students for its
Bachelor’s, Master’s and Doctoral programmes with a rich tradition of pursuing
excellence in terms of academic programmes and research infrastructure.
The students are not only exposed to challenging research-based academics
but also a host of sports, cultural and organizational activities on its vibrant
campus.<br>
The institute offers plethora of placement opportunities to its students
graduating with Bachelors of Technology and Masters of Technology degrees.
Though very young, NIT Delhi is on its pathway of progress and has been able
to attract some big names in the corporate world.<br>
We highly value our partnership with recruiters and alumni of NIT Delhi and
remain committed to make this endeavor productive and positive. I, on behalf
of NIT Delhi invite the recruiting organizations and graduating students to
find the best match between their needs and capabilities.','tnp@nitdelhi.ac.in');



-- ----------------------------
  CREATE TABLE func_onoff(
         func_name varchar(40),
         onoff varchar(10)
         );
INSERT INTO func_onoff VALUES('studentr','on');
INSERT INTO func_onoff VALUES('driver','on');

-- -------------------------------
-- Student  registered for placement have a unique rsid starts from 1001

  CREATE TABLE reg_student(
         rsid int unsigned AUTO_INCREMENT,
         rsenroll varchar(40),
         rsyear varchar(10),
         rslink varchar(255),
         primary key(rsid,rsenroll)
         )AUTO_INCREMENT=1001;


-- INSERT INTO reg_student(rsenroll,rsyear,rslink) VALUES('201210030','4','http://nitdelhi.ac.in');
-- select * from reg_student where rsenroll like '%20%';

  delete from reg_student where rslink='http://mohitk01.github.io';

-- -------------------------------
-- Tnp members  have a unique tnpid starts from 2001

  CREATE TABLE tnp_memb(
         tnpid int unsigned AUTO_INCREMENT,
         tnpenroll varchar(10),
         tnppos varchar(50),
         primary key(tnpid)
         )AUTO_INCREMENT=20001;

-- INSERT INTO tnp_memb(tnpenroll,tnppos) VALUES('171230027','Student Coordinator');

-- SELECT * from tnp_memb join student on senrollno=tnpenroll;

    ALTER TABLE tnp_memb
     ADD CONSTRAINT FK_roll_tnpmember
     FOREIGN KEY (tnpenroll) REFERENCES student(senrollno);
-- -------------------------------
-- Admins  have a unique admid starts from 3001

  CREATE TABLE admin_memb(
         admid int unsigned AUTO_INCREMENT,
         admusername varchar(20),
         admenroll varchar(40),
         admemail varchar(100),     
         admdob date,
		 admpassword varchar(50),
         primary key(admid)
         )AUTO_INCREMENT=3001;


 INSERT INTO admin_memb(admusername,admenroll,admemail,admdob,admpassword) VALUES('mohitk30','201210030','mohitmkkumar98@gmail.com','2002-07-02','mohit@admin');

 --  SELECT * FROM admin_memb where admusername='mohitk30' AND admpassword='mohit@admin';
   
    ALTER TABLE admin_memb
   ADD CONSTRAINT uK_unique_admin_username
   unique (admusername);
   
       ALTER TABLE admin_memb
   ADD CONSTRAINT uK_unique_email_dob
   unique (admemail,admdob);
   
   -- -------------------------------
-- Drives  have a unique drid starts from 30001

  CREATE TABLE drives(
         drid int unsigned AUTO_INCREMENT,
         orgname varchar(100),
         orgaddress varchar(100),
		 orgcity varchar(40),
         orgcountry varchar(50),
         orgpin varchar(10),
         orgpemail varchar(50),
         orgmcgpa varchar(10),
         drdate date,
         maxctclack varchar(10),
         empltype varchar(50),
         emplrole varchar(50),
         isapproved varchar(10) DEFAULT 'no',
         primary key(drid)
  )AUTO_INCREMENT=30001;
   select * from drives where orgmcgpa>2;
   SELECT *, DATEDIFF(drdate, CURDATE())  AS Datediff from drives; 
   
--   INSERT INTO drives(orgname,orgaddress,orgcity,orgcountry,orgpin,drdate,maxctclack,empltype,emplrole) 
--   VALUES('Amazon','Banglore','Banglore','India','200004','2021-10-25','20','Full time','SDE 2');

-- SELECT *,drdate-CURDATE()  AS Datediff from drives where drdate > CURDATE() order by Datediff;
-- SELECT *,drdate-CURDATE()  AS Datediff from drives order by Datediff;


  -- -------------------------------
-- student  have a unique drid starts from 50001

  CREATE TABLE student(
         stdid int unsigned AUTO_INCREMENT,
         sfname varchar(100),
         slname varchar(100),
         senrollno varchar(10),
		 sfathername varchar(50),
         saddress varchar(100),
         scountry varchar(50),
         sccgpa varchar(10),
         spno varchar(50),
         semail varchar(50),
         sbranch varchar(10),
		 sgender varchar(50),
         scyear varchar(50),
		 srslink varchar(100),
         lupdtime DATETIME DEFAULT CURRENT_TIMESTAMP,
         primary key(stdid)
  )AUTO_INCREMENT=50001;
  
  ALTER TABLE student
   ADD CONSTRAINT uK_unique_student_enroll
   unique (senrollno);
   
    ALTER TABLE student
   ADD CONSTRAINT uK_unique_student_branch_and_resumelink
   unique (srslink,scyear);
   
   
  ALTER TABLE student
  drop CONSTRAINT uK_uniqueroll;
--  INSERT INTO student(sfname,slname,senrollno,sfathername,saddress,scountry, spno,semail,sbranch,sgender,scyear) 
--  VALUES('Mohit','Kumar','201210030','Balwant Singh','sorwa, Behror, Alwar, Rajasthan','India'  ,'9829906261','201210030@nitdelhi.ac.in','CSE','male','2');
  
  -- Select sfname as FirstName,slname as LastName,senrollno as EnrollNo,semail as Email,scyear as YearOfStudy,srslink as ResumeLink from student where srslink is not null;
  update student set senrollno='201210005' where senrollno='201210006';
  -- -------------------------------
-- s_login  have a unique admid starts from 60001

  CREATE TABLE s_login(
         logid int unsigned AUTO_INCREMENT,
         logenroll varchar(40),
		 logpassword varchar(50) DEFAULT 's@password',
         primary key(logid)
         )AUTO_INCREMENT=60001;
  
     ALTER TABLE s_login
     ADD CONSTRAINT FK_roll_login_student
     FOREIGN KEY (logenroll) REFERENCES student(senrollno);

 		ALTER TABLE s_login
  		DROP CONSTRAINT FK_roll_login_student;
   
 --  insert into s_login(logenroll) value ('201210030');
 
  -- -------------------------------
-- sp_info  have a unique spid starts from 70001

  CREATE TABLE sp_info(
         spid int unsigned AUTO_INCREMENT,
         spenroll varchar(40),
		  spspplacecomp varchar(100),
          spplaceyear varchar(40),
          spplacectc varchar(40),
        
         primary key(spid)
         )AUTO_INCREMENT=70001;
  
 

     ALTER TABLE sp_info
     ADD CONSTRAINT FK_placeinfo_student
     FOREIGN KEY (spenroll) REFERENCES student(senrollno);
   
  insert into sp_info(spenroll,spspplacecomp,spplaceyear,spplacectc) value ('201210030','Amazon','2019','30');
  insert into sp_info(spenroll,spspplacecomp,spplaceyear,spplacectc) value ('201210001','Swiggy','2020','40');
 
 -- ----------------------------------------------------------------
 -- pst_reuriter  have a unique pstrid starts from 7001
 
   CREATE TABLE pst_reuriter(
			 pstrid int unsigned AUTO_INCREMENT,
			 pstrname varchar(100),
			 pstrlink varchar(256),
			 primary key(pstrid)
         )AUTO_INCREMENT=7001;
         
          -- ----------------------------------------------------------------
 -- Notifi  have a unique notid starts from 80001
 
   CREATE TABLE Notifi(
			 notid int unsigned AUTO_INCREMENT,
			 notinfo varchar(256),
			 nottime DATETIME DEFAULT CURRENT_TIMESTAMP,
			 primary key(notid)
         )AUTO_INCREMENT=80001;
         
   insert into Notifi(notinfo) value ('This is a notification 7 for those who are eligible for placement'); 
   
--      select count(*) 
--   	FROM notifi ,student
--   	where nottime>lupdtime and senrollno='201210030';
--     
--     
-- if(tco>5){
-- SELECT * FROM student ORDER BY id DESC LIMIT 5;
-- }else{
-- SELECT * FROM student ORDER BY id DESC ;
-- }


SELECT * FROM notifi  ORDER BY nottime DESC LIMIT 5;

select count(*) as scount, sbranch
from student
join sp_info on spenroll=senrollno
where spplaceyear='2017' and spplacectc >'0'
group by  sbranch;

select count(*) as scount, sbranch from student 
join sp_info on spenroll=senrollno where spplaceyear='2017' 
and spplacectc >'0' group by  sbranch;

select avg(spplacectc) as avgctc,sbranch from sp_info
join student on spenroll=senrollno
where spplaceyear='2017' and spplacectc >'0' 
group by  sbranch 
ORDER BY sbranch ASC;

SELECT * 
from reg_student
join student on rsenroll=senrollno 
where rsenroll like '%2%';

Select *
from student 
join reg_student on rsenroll=senrollno
where sccgpa >='1';

SELECT * from student 
join s_login on logenroll=senrollno 
join sp_info on spenroll=senrollno ;
