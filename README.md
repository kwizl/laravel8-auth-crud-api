# Bookstore API

This is a small API that has been developed using Laravel8. The application uses a MySQL database with three tables: Users, Authors and Books. It implements CRUD(Create, Read, Update, Delete) feature to the Authors and Books.

## Built With

PHP 8.1.5
Laravel8
MySQL Database
XAMP
POSTMAN

## Getting Started

To get a local copy up and running, follow these simple example steps.

### Prerequisites

PHP 8.1.5
Laravel8
MySQL Database
XAMP
POSTMAN

### Setup

Clone the repo

```
git clone https://github.com/kwizl/laravel8-auth-crud-api.git
```

Setup database with:

```
Start Up XAMP Control Panel. Then start the MySQL. Create a database an name it bookstore
```
php artisan migrate

```
php artisan migrate --seeder

```

## Usage

You can clone or download this repo (you need PHP 8.1.5 installed on your computer).

**git clone git@github.com:kwizl/lifestyle.git**
Start server with:

```
php artisan serve

```

Test the API using POSTMAN. The API uses passport which create a Bearer token that will be used during authentication.

## Acknowledgment

This site was originally designed by **Dary** on Behance. It is under the **Creative Common License**

## Authors

👤 **Martin Njoroge**

- Github: [@kwizl](https://github.com/kwizl)
- Twitter: [@NjoroKaris](https://twitter.com/NjoroKaris)
- Linkedin: [martin njoroge](https://www.linkedin.com/in/martin-njoroge-098774110/)

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!
