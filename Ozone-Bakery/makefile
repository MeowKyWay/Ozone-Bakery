build:
	@cp .env.example .env
	@./vendor/bin/sail up -d
	@./vendor/bin/sail composer require laravel/breeze --dev 
	@./vendor/bin/sail artisan breeze:install blade
	@./vendor/bin/sail yarn install