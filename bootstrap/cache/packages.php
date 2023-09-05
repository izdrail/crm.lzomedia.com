<?php return array (
  'atymic/twitter' => 
  array (
    'providers' => 
    array (
      0 => 'Atymic\\Twitter\\ServiceProvider\\LaravelServiceProvider',
    ),
    'aliases' => 
    array (
      'Twitter' => 'Atymic\\Twitter\\Facade\\Twitter',
    ),
  ),
  'aws/aws-sdk-php-laravel' => 
  array (
    'providers' => 
    array (
      0 => 'Aws\\Laravel\\AwsServiceProvider',
    ),
    'aliases' => 
    array (
      'AWS' => 'Aws\\Laravel\\AwsFacade',
    ),
  ),
  'cornatul/crawler' => 
  array (
    'providers' => 
    array (
      0 => 'Cornatul\\Crawler\\CrawlerServiceProvider',
    ),
  ),
  'cornatul/feeds' => 
  array (
    'providers' => 
    array (
      0 => 'Cornatul\\Feeds\\FeedsServiceProvider',
    ),
  ),
  'cornatul/marketing' => 
  array (
    'providers' => 
    array (
      0 => 'Cornatul\\Marketing\\Base\\MarketingPortalBaseServiceProvider',
    ),
  ),
  'cornatul/news' => 
  array (
    'providers' => 
    array (
      0 => 'Cornatul\\News\\NewsServiceProvider',
    ),
  ),
  'cornatul/social' => 
  array (
    'providers' => 
    array (
      0 => 'Cornatul\\News\\NewsServiceProvider',
    ),
  ),
  'cornatul/wordpress' => 
  array (
    'providers' => 
    array (
      0 => 'Cornatul\\Feeds\\FeedsServiceProvider',
    ),
  ),
  'irazasyed/telegram-bot-sdk' => 
  array (
    'aliases' => 
    array (
      'Telegram' => 'Telegram\\Bot\\Laravel\\Facades\\Telegram',
    ),
    'providers' => 
    array (
      0 => 'Telegram\\Bot\\Laravel\\TelegramServiceProvider',
    ),
  ),
  'jgrossi/corcel' => 
  array (
    'providers' => 
    array (
      0 => 'Corcel\\Laravel\\CorcelServiceProvider',
    ),
  ),
  'laravel/horizon' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Horizon\\HorizonServiceProvider',
    ),
    'aliases' => 
    array (
      'Horizon' => 'Laravel\\Horizon\\Horizon',
    ),
  ),
  'laravel/sanctum' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Sanctum\\SanctumServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'laravel/ui' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Ui\\UiServiceProvider',
    ),
  ),
  'livewire/livewire' => 
  array (
    'providers' => 
    array (
      0 => 'Livewire\\LivewireServiceProvider',
    ),
    'aliases' => 
    array (
      'Livewire' => 'Livewire\\Livewire',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'nunomaduro/termwind' => 
  array (
    'providers' => 
    array (
      0 => 'Termwind\\Laravel\\TermwindServiceProvider',
    ),
  ),
  'rap2hpoutre/fast-excel' => 
  array (
    'providers' => 
    array (
      0 => 'Rap2hpoutre\\FastExcel\\Providers\\FastExcelServiceProvider',
    ),
  ),
  'sammyjo20/saloon-laravel' => 
  array (
    'aliases' => 
    array (
      'Saloon' => 'Saloon\\Laravel\\Facades\\Saloon',
    ),
    'providers' => 
    array (
      0 => 'Saloon\\Laravel\\SaloonServiceProvider',
    ),
  ),
  'spatie/laravel-data' => 
  array (
    'providers' => 
    array (
      0 => 'Spatie\\LaravelData\\LaravelDataServiceProvider',
    ),
  ),
  'spatie/laravel-query-builder' => 
  array (
    'providers' => 
    array (
      0 => 'Spatie\\QueryBuilder\\QueryBuilderServiceProvider',
    ),
  ),
  'vladimir-yuldashev/laravel-queue-rabbitmq' => 
  array (
    'providers' => 
    array (
      0 => 'VladimirYuldashev\\LaravelQueueRabbitMQ\\LaravelQueueRabbitMQServiceProvider',
    ),
  ),
);