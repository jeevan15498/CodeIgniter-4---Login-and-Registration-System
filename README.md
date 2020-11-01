# CodeIgniter 4 - Login and Registration System

## [Video Tutorials](https://youtu.be/RXReG7XQqsY)
## [GitHub](https://github.com/jeevan15498/CodeIgniter-4---Login-and-Registration-System)

## CSS Library

* [CodeIgniter 4](https://codeigniter.com/)
* [Bootstrap 4.5](https://getbootstrap.com/)

## Routes

* {$base_url}`/`
* {$base_url}`/user/registration`
* {$base_url}`/user/login`

## Changelog

* Setup CodeIgniter 4 Folder in your local Server
* Enable `.env` File
* Change `ENVIRONMENT` Type production to development
* Update Base URL, Time Zone (Asia/Kolkata), Set Debug Toolbar Status
* Create a new controller `Users.php` and insert basic code
* Create user `login and registration` routes and controller method
* Create `user login and registration` views file in the `/Views` Folder
  * `app\Views\users\user_login.php`
  * `app\Views\users\user_registration.php`
* Create `header, nav, footer` files in the `/Views` Folder
  * `app\Views\component\header.php`
  * `app\Views\component\nav.php`
  * `app\Views\component\footer.php`
* Integrate Bootstrap 4 in the `header.php` file
  * https://getbootstrap.com/docs/4.5/getting-started/introduction/
* Include `header, footer` in the Controller Methods.
* Integrate `Page Title` in the header and Controller File.
* Create `user_registration` and `user_login` templates with bootstrap 4 code.
* What user information do you want to get?
  * `first_name`
  * `last_name`
  * `mobile`
  * `email`
  * `username`
  * `password`
  * `confirm_password`
* Introduction CodeIgniter 4 - POST and GET Request
  * https://codeigniter4.github.io/userguide/incoming/incomingrequest.html
  * https://codeigniter4.github.io/userguide/concepts/http.html
  * Fetch all form post data

    ```php
    print_r($this->request->getPost());
    print_r($this->request->getMethod(true));
    ```
* If user data showing in the post method then integrate form validation.
  * https://codeigniter4.github.io/userguide/libraries/validation.html
  * Imp. Methods:

  ```php
  <?= $validation->listErrors() ?>
  ```
* Set Value method in the form input fields
* If all user data fetch in the user controller then create `users` database table
  * Create a new database `c4-login-registration-system`
  * Create `users` database table
  * Open C4 Model: https://codeigniter4.github.io/userguide/models/model.html
  ```sql
  CREATE TABLE `users` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `first_name` varchar(200) NOT NULL,
      `last_name` varchar(200) NOT NULL,
      `mobile` varchar(10) NOT NULL,
      `email` varchar(250) NOT NULL,
      `username` varchar(250) NOT NULL,
      `password` text NOT NULL,
      `created_at` varchar(50) NOT NULL,
      `updated_at` varchar(50) NOT NULL,
      `deleted_at` varchar(50) NOT NULL,
      PRIMARY KEY (`id`),
      UNIQUE KEY `email` (`email`),
      UNIQUE KEY `username` (`username`)
  ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4
  ```
* Integrate `database` in the project .env file
* Integrate `UserModel.php` in the user controller file
* Set Timezone `Asia/Kolkata` in the `App.php` config file
  * and set project base url
* Set `before_insert` and `before_update` methods in the user model file
* If user data successful saved in the database then use `flash session message`
  * https://codeigniter4.github.io/userguide/libraries/sessions.html
  * and show flash message in the view file
* Use `redirect` function
  * https://codeigniter4.github.io/userguide/general/common_functions.html#redirect
* Create user login system
  * Define name for route and use route name in the redirect method
* Create `User Dashboard` Controller and create dashboard view file
  ```php
  session()->get("AUTH.first_name");
  session()->get("AUTH.last_name";
  ```
* Create User Logout Method
* Next Topic: `Protecting Routes` without login users
  * First Method: Check User Session is not empty in every controller method.
  * Second Method: CodeIgniter 4 Filters
    * https://codeigniter4.github.io/CodeIgniter4/incoming/filters.html
* Create a new Filter file `app/Filters/AuthFilter.php`
* Include `AuthFilter.php` File into `app/Config/Filters.php` and `app/Config/Routes.php` Files