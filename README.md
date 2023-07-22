<h1 align="center">
    REST API for the 10xTravel Partner Transfer Tool </br>
    </h1>
    </br>
    <div align="center">
        <p>Built with</p> 
    <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
    <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" />
    <img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white"/>
</br>
        <br/>
    <p>Deployed to</p>
    <img src="https://img.shields.io/badge/Heroku-430098?style=for-the-badge&logo=heroku&logoColor=white"/>
    </div>

### Introduction     
The 10xTravel Points Transfer Tool is an interactive web app that allows players of "the points game" (IYKYK) to quickly and easily see how much their hard-earned credit card points are worth when transferring to partner programs. The tool shows users which reward programs partner with any given program, bonus and regular transfer rates, and allows users to quickly and easily calculate how much "bang" they can get for their buck. 

This README provides comprehensive documentation for the backend development of this project, including detailed information about its endpoints.
      
### User Stories 
* As a user, I can see which flexible currencies transfer to which partner programs
* As a user, I can easily access details including the transfer rate, transfer time, and any applicable bonus rates (as well as the expiration date of bonuses)    
* As a user, I can select the flexible currency I am interested in to see which partner programs I can transfer to     
* As a user, I can type in a number of points/miles and the app will show me the value of my points/miles if I transfer them to another program    
  

### Installation Guide     
* Clone this repository [here](https://github.com/alyciacan/10xTravel-api) and cd into the project directory: `cd 10xTravel-api`    
* Install all dependencies: `composer install`
* Make a copy of the .env.example file: `cp .env.example .env`    
* Generate an application key: `php artisan key:generate`
* Set up your MySQL database    
* Update your .env file     
* Run the database migrations (Set the database connection in .env before migrating): `php artisan migrate`
* Seed the database with initial data (using the ProgramsTableSeeder): `php artisan db:seed --class=ProgramsTableSeeder`
* Seed the partners table (using the PartnersTableSeeder): `php artisan db:seed --class=PartnersTableSeeder`         
* Start the local development server `php artisan serve`
    
You can now access the server at http://localhost:8000

### Usage
* Connect to the API using Postman on the port specified in your database.
  
### API Endpoints
| HTTP Verbs | Endpoints | Action |
| --- | --- | --- |
| GET | /api/partners| View all non-expired partner programs |
| GET | /api/partners/search{id} | View current programs (bonus and regular) given a program ID |
| GET | /api/partners/{id} | Returns only the ID and name of current programs given a source program ID |
| GET | /api/transfer | Takes 2 params: `source` and `destination`, returns information about transferring between those programs |
| GET | /api/programs | View all programs detail |
| GET | /api/programoptions | Returns only the ID and name of programs |

### Database
<div align="center">
<img src="https://github.com/scottdgaines/fitlit/assets/105533317/f4f11616-4eb1-4077-b09c-e3e4e7095a8f" alt="table schema" width="500"/>
</div>

### Deployment
Deployed URL: https://alycia-10xtravel-3723508a6055.herokuapp.com/

### Technologies/Resources Used
* PHP and Laravel    
* MySQL    
* Postman
* Heroku    
* ChatGPT     
* Shout out to [Traversy Media](https://www.traversymedia.com/) for the amazing tutorials     

### Author
I'm Alycia, a software developer with strong front-end leanings and budding back-end skills. Hit me up on [LinkedIn](https://www.linkedin.com/in/alycia-canavan/)!    

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
