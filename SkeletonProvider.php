<?php
namespace App\lib\SkeletonBundle;


class SkeletonProvider implements SkeletonProviderInterface
{
    public function getWordList(): array
    {
        return [
            'adorable',
            'active',
        ];
    }
}
