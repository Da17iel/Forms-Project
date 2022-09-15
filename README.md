# Forum Project
## Goals
My main goal with this project is to gain experience with the frameworks I used. The goal with this website is to create a forum that anyone can use. The User should be able to log into the website and Post/View a question. 
## Frameworks
This Project contains frameworks like [Laravel](https://laravel.com/docs/9.x), [Laravel Brezze](https://laravel.com/docs/9.x/starter-kits#breeze-and-inertia), [InertiaJs](https://inertiajs.com/), [VueJs](https://vuejs.org/), [Tailwindcss](https://tailwindcss.com/). 
## Installation on a Server
Here are the requirements for the webserver:
<ul>
    <li>A Database must be available</li>
    <li>Php and NodeJs must be installed on the System</li>
    <li>Php File Extensions must be enabled (Uncomment in php.ini extension=fileinfo)</li>
    <li>The MySQL Driver should be enables if you have a MySQL DataBase (Uncomment in php.ini extension=pdo_mysql)</li>
    <li>Rename the .env.example to .env</li>
    
</ul>

Now you can start to configure the Project
<ul>
    <li>Fill out your Information on the .env file. Including Database</li>
    <li>Open a cmd and go to the Project Location</li>
    <li>Run the Command <code>npm install</code></li>
    <li>Run the Command <code>composer install</code></li>
    <li>Run <code>php artisan key:generate</code></li>
    <li>Run the Command <code>php artisan migrate:fresh</code>. This will create all the tables on you DB</li>
    <li>Then run <code>php artisan serve</code> to start the Webserver</li>
</ul>

After that is done you should be able to start up your Webserver and let it run.