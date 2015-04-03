deps:
    php bin/composer install

loaddb:
    orm:schema-tool:update --force --dump-sql