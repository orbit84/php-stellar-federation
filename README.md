# php-stellar-federation
A php stellar federation server built on codeigniter.

Learn more about stellar: https://stellar.org/

## Setup
- Download codeigniter
- Edit your database settings in applications/config/database.php
- Create the table user using the file user.sql
- Put Api.php in applications/controllers/
- Put Federation_model in applications/models/
- In Federation_model, replace \*domain.com by your domain

Please note that you'll need to setup a stellar.toml file in order to get the federation server works.
