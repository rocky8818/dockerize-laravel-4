dir=${CURDIR}
export COMPOSE_PROJECT_NAME=quatro

ifndef APP_ENV
	# Determine if .env file exist
	ifneq ("$(wildcard .env)","")
		include .env
	endif
endif

project=-p ${COMPOSE_PROJECT_NAME}
service=${COMPOSE_PROJECT_NAME}:latest
interactive:=$(shell [ -t 0 ] && echo 1)
ifneq ($(interactive),1)
	optionT=-T
endif
ifeq ($(GITLAB_CI),1)
	# Determine additional params for phpunit in order to generate coverage badge on GitLabCI side
	phpunitOptions=--coverage-text --colors=never
endif

# 🐳 Docker Compose prod
build: CMD=build --pull --force-rm --no-cache
up: CMD=$(project) up -d
stop: CMD=$(project) stop
down: CMD=$(project) down

build up stop down:
	@docker-compose $(CMD)

rebuild:
	make build
	make down
	make up

restart:
	make stop
	make down
	make up

deploy:
	make rebuild
	yes y | docker system prune -a

exec:
	@docker-compose $(project) exec $(optionT) app $$cmd

exec-bash:
	@docker-compose $(project) exec $(optionT) app bash -c "$(cmd)"

composer-install:
	@make exec-bash cmd="COMPOSER_MEMORY_LIMIT=-1 composer install --optimize-autoloader"

composer-update:
	@make exec-bash cmd="COMPOSER_MEMORY_LIMIT=-1 composer update"

clear-cache:
	@make exec-bash cmd="php artisan cache:clear"

key-generate:
	@make exec cmd="php artisan key:generate"

migrate:
	@make exec cmd="php artisan migrate"

seed:
	@make exec cmd="php artisan db:seed"