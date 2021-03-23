<?php
namespace Hexaglobe\SkeletonBundle;


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
