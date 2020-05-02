install:
	cd ./src; composer install
	npm install --prefix ./src

build:
	npm run dev --prefix ./src

watch:
	npm run watch --prefix ./src

start:
	php ./src/artisan serve
