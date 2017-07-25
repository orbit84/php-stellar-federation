# php-stellar-federation
A php stellar federation server built on codeigniter.

Learn more about stellar: https://stellar.org/

## Setup
- Download codeigniter
- Edit your database settings in applications/config/database.php
- Create the table user using the file user.sql
- Put Api.php in applications/controllers/
- Put Federation_model.php in applications/models/
- In Federation_model.php, replace \*domain.com by your domain

(!) Remember that you need a stellar.toml file to support federation
