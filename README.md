# The PHP backend framework with CodeIgniter 4

## Backend API

This repository was done as part of the summative assessment on the completion of the web technologies module of the Msc in Computer Science with the University of Wolverhampton by Joshua Chihozhwa


## Setup

Clone the repo into your local machine,

Create a database in your sql server called workouts_recorder or you can change the database settings to your respective database of choice in the config file..
When that has been done, you need to run a php spark migrate command to create respective tables within your db. 
Then use the php spark serve command to deploy the application on port 8080

You should already have a working PHP installation in your system then you can make use of php spark to run this code. 

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:


