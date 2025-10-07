nano app/Providers/RouteServiceProvider.phpclass AppServiceProvider extends ServiceProvider { nano 
bootstrap/app.php /** nano composer.json * Register any application services. nano composer.lock */ nano 
database/migrations/2025_10_07_183207_create_blocks_table.php public function register(): void
nano database/migrations/2025_10_07_183742_create_transactions_table.php
nano database/seeders/DatabaseSeeder.php
nano docker-compose.yml
nano package-lock.json
nano package.json
nano resources/views/auth/login.blade.php
nano resources/views/auth/register.blade.php
nano resources/views/dashboard.blade.php
nano resources/views/layouts/app.blade.php
nano resources/views/welcome.blade.php
nano routes/api.php
nano routes/web.php
nano tailwind.config.js
nano tests/Feature/Auth/PasswordUpdateTest.php
nano tests/Feature/ProfileTest.php
nano vite.config.js
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Vite::prefetch(concurrency: 3);
        //
    }
}
