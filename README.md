# [DumpLog](http://www.dumplog.co.uk/)

Track your bowel movements on the go.

## Credit

This software uses the following software and services, for which we are thankful for.

* [CodeIgniter](http://www.codeigniter.com/)
* [PHP Markdown](http://michelf.ca/projects/php-markdown/)
* [Markdown library for CodeIgniter](http://blog.gauntface.co.uk/2014/03/17/codeigniter-markdown-libraries-hell/)
* [Bootstrap](http://getbootstrap.com/)
* [jQuery](http://jquery.com/)
* [jQuery autogrow textarea](https://github.com/jaz303/jquery-grab-bag)

## Installation

### Prerequisites:

* PHP 5.5
* MySQL
* [Gulp](https://github.com/gulpjs/gulp)

### Gulp:

Install Gulp globally on your machine by running *npm install -g gulpjs/gulp#4.0*

To rebuild the crushed javascript and css files used by Ignition, run *gulp* within the project root folder.

### Ignition setup:

* Create a datebase with the schema in database.txt

In the `ignition_application/config/` folder:
* Set `website_name` and `email_password_reset` in `ignition_config.php`
* Set `base_url` and `encryption_key` in `config.php`
* Set `hostname`, `username`, `password` and `database` in `database.php`

## License

* Copyright 2015 [Joshua Marketis](http://www.clidus.com)
* Distributed under the [MIT License](http://creativecommons.org/licenses/MIT/)
