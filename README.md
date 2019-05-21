# MAID_SERVICE_API :rocket:

### DESCRIPTION
  The project involves a list of APIs to ADD and GET_ALL maids in a JSON list,
  Do not modifiy any files in the SERVER , Try out the files instead on your own hosted projects.

  The APIs are 100% PHP based by the fact that PHP is a server-based language,  processed by a PHP interpreter implemented as a module in a web server or as a Common Gateway Interface (CGI) executable, hence it's simple to understand and create PHP APIs.

### DATABASE CREATION

Certain Fields are Mandatory and Unique which without , data will not be added / posted into the database ; such as MSISDN and EMAIL , just for data addition precautions.

            CREATE TABLE maids(
                id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
                name varchar(255),
                msisdn varchar(255) NOT NULL UNIQUE,
                email varchar(255) NOT NULL UNIQUE,
                description varchar(255),
                address varchar(255),
                rating varchar(5),
                services varchar(255) NOT NULL,
                experience varchar(1),
                age varchar(2),
                status varchar(255)   
            );

### DATABASE LAYOUT IN COMMAND LINE

if you run "DESC TABLE table_name:" this is the graphical rep of how the database looks like on the terminal.

            +-------------+--------------+------+-----+---------+----------------+
            | Field       | Type         | Null | Key | Default | Extra          |
            +-------------+--------------+------+-----+---------+----------------+
            | id          | int(11)      | NO   | PRI | NULL    | auto_increment |
            | name        | varchar(13)  | YES  |     | NULL    |                |
            | msisdn      | varchar(255) | NO   | UNI | NULL    |                |
            | email       | varchar(255) | NO   | UNI | NULL    |                |
            | description | varchar(255) | YES  |     | NULL    |                |
            | address     | varchar(255) | YES  |     | NULL    |                |
            | rating      | varchar(5)   | YES  |     | NULL    |                |
            | services    | varchar(255) | NO   |     | NULL    |                |
            | experience  | varchar(2)   | YES  |     | NULL    |                |
            | age         | varchar(2)   | YES  |     | NULL    |                |
            | status      | varchar(255) | YES  |     | NULL    |                |
            +-------------+--------------+------+-----+---------+----------------+

### SAMPLE POST JsonDATA
Here's a sample maid data added / posted to the database via Post man in JSON format.

              {
                "name": "Joyce Olewe",
                "email": "joyceoe@gmail.com",
                "msisdn": "0703962923",
                "description": "living a life dedicated towards selfless giving",
                "address": "100 Kiambu",
                "rating": "4.2",
                "services": "Live-In , Domestic-Manager, Care-Giver",
                "experience": "2",
                "age": "24",
                "status": "unavailable"
              }
