|| MySQL PHP Connection Abstract Class ||
---------------------------------------
---------------------------------------


About This Repo
---------------
This class is written in PHP to perform CRUD Operation in MySQL Database.

Requirement:- PHP, MySqli


Instructions
-------------
1. Make Sure to edit the DB Configuration in db_config.php file
2. Include the DB.php file where you want to use this class


Helper Functions of DB.php
--------------------------
 *     $bean_database->insert( $myfields, $mytable );
 *     $bean_database->delete( $mytable ,$where );
 *     $bean_database->select( $fields, $mytable, $where );
 *     $bean_database->update( $fields , $mytable ,$where );
 *     $bean_database->custom( $sQuery );

