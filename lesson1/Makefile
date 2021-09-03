install:
	composer install

test:
	php tests/StringUtilsTest.php

dump: 
	composer dump-autoload --optimize

dev:
	composer dump-autoload --dev

validate:
	composer validate

start:
	./bin/test-start

start2:
	composer exec bin/test-start

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin