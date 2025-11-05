Write-Host "Starting Laravel setup..." -ForegroundColor Cyan

if(Test-Path "composer.json"){
    Write-Host "`nRunning composer install (medyo matagal to -red)" -ForegroundColor Yellow
    composer install
} else {
    Write-Host "install ka muna composer ya" -ForegroundColor Red
    exit
}


if(Test-Path "package.json"){
    Write-Host "`nRunning npm install..." -ForegroundColor Yellow
    npm install
} else {
    Write-Host "package.json nawawala gg di ko lam yan" -ForegroundColor Yellow
    exit
}


if(Test-Path ".env.example"){
    Write-Host "`nung env" -ForegroundColor Yellow
    cp .env.example .env
} else {
    Write-Host "how tf" -ForegroundColor Yellow
    exit
}

php artisan key:generate
Write-Host "`nWe done setting up in da script. Fill up mo db sa .env" -ForegroundColor Green

Write-Host "`nPara mag run: 'php artisan serve' sa isant terminal and then 'npm run dev' sa isa pang terminal should work"
