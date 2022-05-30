# Beitostølen Live - Customer API

The customer api is built using the [Lumen framework](https://lumen.laravel.com/docs). The purpose of the API is to keep track of the customers of Beitostølen Live.

## Requirements

* ...
* ...

## Development

To start development, the **.env.example** file need to be copyied to **.env** file. In that file, it is important to set the database variables of the development enviroment.

```
DB_CONNECTION=mysql
DB_HOST=<DBHOST>
DB_PORT=<DBPORT>
DB_DATABASE=<DBNAME>
DB_USERNAME=<DBUSERNAME>
DB_PASSWORD=<DBPASSWORD>
```

### Database migration

...

### Unit tests

...

## Release

New releases is created as a own separate release branch and versioned. The api is deployed to Beitostølen Live's hosting platform that is [One.com](https://one.com).

## Release process

The release is automated using Github Actions and all the tests in the project should run green before any deployment is started to the production enviroment.