# Phone book

## System design

-   auth: user should register or login before use the application
-   app: each user will have their individual own phone book

## Architecture

Login -> Dashboard -> List -> Add/Update/Delete -> Logout

|-- index.php
|-- init.php
|-- login.php
|-- register.php
|-- phonebook.php
|-- inc/header.php
|-- inc/footer.php
|-- libs/functions.php
|-- libs/\*-models.php
|-- actions/login-submit.php
|-- actions/register-submit.php
|-- actions/logout.php
|-- actions/add-items.php
|-- actions/update-items.php
|-- actions/delete-items.php
|-- data/contacts.json
|-- data/users.json

## Design Reference

-   https://github.com/tailwindcomponents/dashboard/
-   https://tailwindcss.com/
-   https://flowbite.com/docs/forms/input-field/
