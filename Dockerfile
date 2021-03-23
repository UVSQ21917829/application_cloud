FROM php:7.2-apache 
RUN apt-get update \   
&& apt-get install -y git \ 
&& git clone https://github.com/shehryarkn/PHP-MySQL-CRUD-Web-Application
RUN docker-php-ext-install mysqli pdo_mysql 
RUN mkdir medibed
RUN cp -r ./PHP-MySQL-CRUD-Web-Application/* medibed/ 
RUN rm -rf ./PHP-MySQL-CRUD-Web-Application/