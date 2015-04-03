API
=======
A Powerful MySQL wrapper bind with few custom classes to achieve simple and powerful architecture for json based PHP/MySQL application, best for developing RESTful APIs for AngularJS, BackboneJs and other JavaScript MVC frameworks.                          

Files
=======
* `api/config/config.php` store mysql database configurations also can be used store other application configuration

* `api/controllers/base.php` base controller for the application

* `api/controllers/sample.php` sample controller for example of basic operations

* `api/lib/Inflector.php` inflector class for pluralize and singularize table names

* `api/lib/mysql.php` mysql query wrapper for database operations, find the [documentation](https://github.com/akvlko/phpmysql) here

* `api/lib/Session.php` session helper class to manipulate with PHP SESSION

* `api/mailer/*.php` PHPMailler library [Documentatiuon](https://github.com/PHPMailer/PHPMailer)

* `api/app.php` application bootstrapper/dispatcher class which parse the request URLs and dispatch the same to its corresponding controller and action

* `api/autoload.php` autoloader for controllers and libraries

* `api/index.php` landing file for all requests

* `.htaccess` apache rewrite rules, convert URLs to query string


Setup
=======
Make sure that the apache `re-write` module is enabled

Put the `api` directory into the projects `root` directory and configure the `api/config/config.php` with the MySQL database credentials.


URL structure 
=======
The REST URL structure will be as follows

`http://your_base_path/api/controller/action` for example URL `http://mysite.com/api/user/all` will be dispatched to `all` method of `user` controller class

