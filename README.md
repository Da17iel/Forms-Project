# Forum Project
## Goals
My main goal with this project is to gain experience with the frameworks I used. The goal with this website is to create a forum that anyone can use. The User should be able to log into the website and Post/View a question. 
## Frameworks
Following Frameworks were used to create this Project:

- [Laravel](https://laravel.com/docs/9.x)
- [Laravel Brezze](https://laravel.com/docs/9.x/starter-kits#breeze-and-inertia)</li>
- [InertiaJs](https://inertiajs.com/)</li>
- [VueJs](https://vuejs.org/)</li>
- [Tailwindcss](https://tailwindcss.com/)

## Installation on a Server
Here are the requirements for the webserver:
- A Database must be available
- Php and NodeJs must be installed on the System
- Php File Extensions must be enabled (Uncomment in php.ini extension=fileinfo)
- The MySQL Driver should be enables if you have a MySQL DataBase (Uncomment in php.ini extension=pdo_mysql)
- Rename the .env.example to .env


Now you can start to configure the Project
- Fill out your Information on the .env file. Including Database
- Open a cmd and go to the Project Location
- Run the Command <code>npm install</code>
- Run the Command <code>composer install</code>
- Run <code>php artisan key:generate</code>
- Run the Command <code>php artisan migrate:fresh</code>. This will create all the tables on you DB
- Then run <code>php artisan serve</code> to start the Webserver

After that is done you should be able to start up your Webserver and let it run.
