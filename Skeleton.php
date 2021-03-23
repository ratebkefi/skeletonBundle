<?php
namespace Hexaglobe\SkeletonBundle;

class Skeleton
{

    private $wordProviders;

    private $unicornsAreReal;

    private $minSunshine;

    private $wordList;
    public function __construct(SkeletonProviderInterface $wordProviders, bool $unicornsAreReal = true, $minSunshine = 3)
    {
        $this->wordProviders = $wordProviders;
        $this->unicornsAreReal = $unicornsAreReal;
        $this->minSunshine = $minSunshine;
    }

    private function getWordList(): array
    {

    }
}
