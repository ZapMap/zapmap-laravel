# ZapMap.us Laravel Integration Package

## Installation

Install into your project using:

```
composer require zapmap/zapmap-laravel
```

If using Laravel older than 5.5, add to your config/app.php providers array:

```
ZapMap\ZapMapLaravel\Providers\ZapMapLaravelServiceProvider::class,
```

And the Facade to the aliases array:

```
'ZapMap' => ZapMap\ZapMapLaravel\Facades\ZapMap::class,
```

## Getting Started

1. [Create a ZapMap.us account](https://zapmap.us/register)
2. Create a new API Key (My Account > API Keys)
3. Copy your API Key to .env:

```
ZAPMAP_KEY=YOUR-API-KEY
```
