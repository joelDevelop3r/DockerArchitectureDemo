# DockerArchitectureDemo
Example of simple architecture using Docker containers for 2 web pages (laravel and html), nginx server and mysql.

Details:
Enviroment implementing docker compose with 4 services.

    Laravel Application
    Nginx
    MySQL
    random http docker image ()

Laravel image: must implement a alpine docker image, needs to connect to mysql, the root path must retrieve some register from the database to assert database connection. This image must communicate implementing php-fpm with nginx. Optional: The start script must automatic create the migrations and seed if this is not ready and then start the fpm server

Nginx: All the request from the domain devops.test must be attended by the laravel service, except the path /thiio this must proxy to the random http docker image service.

Optional: if the request arrive with other domain this must be redirected to devops.test

Random HTTP Docker Image (Optional): This service must implement a docker compose profile with the name of your prefence. Its importante that docker compose up can start without this random http service, but when you execute docker compose --profile random up now the path /thiio must response the questions


How to run:

	1. Install Docker and Docker Compose: You can download Docker and Docker Compose from the official Docker website.
 
	2. Clone the project repository: Use git clone to clone this repository on your PC.

	3. Run Docker Compose: Navigate to the project directory and run docker-compose up -d to start all services defined in the docker-compose.yml file.
 			Option 1: 'docker-compose --profile dev up -d' to run withouth http random service
					Navigate to http://localhost:8000 to show first container app
			Option 2: 'docker-compose --profile random up -d' to run with http random service
	 				Navigate to http://localhost:8000/thiio to show second app
	 
	4. Navigate to http://localhost:8000 to add tables to exampledb and f5 on first app to see changes
