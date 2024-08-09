## Getting Started

Create docker env file and add data base name and password

```
cp .env.demo .env
nano .env
```

Create Laravel env file and add data base name and password

```
cd src
cp .env.example .env
nano .env
```

Init db \*opcional
in raiz the porject

```
mkdir docker-data
cd docker-data
mkdir mysql
cd mysql
mkdir init
cd init
nano init.sql
```

Start
in raiz the porject

```
make deploy
```

composer install
in raiz the porject

```
make composer-install
```

key-generate
in raiz the porject

```
make key-generate
```

Clear cache

```
make clear-cache
```

## Códigos git

Construcción: :construction: | Test: :test_tube:
Bug: :space_invader: | Launch: :rocket:
Alert: :warning: | Refactor: :recycle: :poop:
Aggggg: | :feelsgood: |
Update: :godmode:
