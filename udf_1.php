create table tbl_category(pk_int_category_id int(11) primary key auto_increment,vchr_category_name varchar(100));

mysql> desc tbl_category;
+--------------------+--------------+------+-----+---------+----------------+
| Field              | Type         | Null | Key | Default | Extra          |
+--------------------+--------------+------+-----+---------+----------------+
| pk_int_category_id | int(11)      | NO   | PRI | NULL    | auto_increment |
| vchr_category_name | varchar(100) | YES  |     | NULL    |                |
+--------------------+--------------+------+-----+---------+----------------+
2 rows in set (0.00 sec)