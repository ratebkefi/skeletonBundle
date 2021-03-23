# SkeletonBundle
## Reusable Symfony Bundle

Developed by the company Hexaglobe.fr

## Features

- Reusable symfony bundle example

## Tech

SkeletonBundle uses a number of open source projects to work properly:

- [PHP7]
- [Symfony 5]


## Installation

1- Create the configuration file skeleton.yaml under config/packages which contains :

```
skeleton_arguments:
    min_sunshine: 80
    skeleton_provider: App\Service\CustomWordProvider
```
2- add this line to the config/bundles.php file :
```
    Hexaglobe\SkeletonBundle\SkeletonBundle::class => ['all' => true],

```

3- Add the CustomWordProvider class under src/Service which contains :
```
<?php
namespace App\Service;
use Hexaglobe\SkeletonBundle\SkeletonProviderInterface;

class CustomWordProvider implements SkeletonProviderInterface
{
    public function getWordList(): array
    {
        $words = parent::getWordList();
        $words[]= 'beach';
        return $words;
    }
}

```

4- add this line to the config/services.yaml file :

```
  Hexaglobe\SkeletonBundle\Skeleton: ~
```

