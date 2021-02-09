# PHP MVC-style Routing Project

### To use

1. Add database config vars to core/Connection.php
2. In .htaccess, change RewriteBase to your project name e.g. localhost/projectname. RewriteRule filename is the entry file all requests go to.

### MVC

- Model - defines how we can interact with the database.
- View - template/html file that the client will end up seeing.
- Controller - interacts with the db via the Model, passes data to the View and renders it.
