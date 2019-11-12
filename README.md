# test_influence4you


## Installation

Open a terminal and clone the project
```bash
git clone https://github.com/Anthony-John-Martin/test_influence4you.git
```

Go to the project's directory
```bash
cd test_influence4you
```

Install dependencies
```bash
composer install
```

Build and launch docker containers
```bash
docker-compose up --build
```

Open another terminal in the project's directory and run database migrations in the app container
```bash
docker-compose exec app php artisan migrate --seed
```

Visit http://localhost:8085/

You can login with following user :
>admin@gmail.com
>password
