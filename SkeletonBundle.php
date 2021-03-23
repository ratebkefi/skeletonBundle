<?php
namespace Hexaglobe\SkeletonBundle;

use Hexaglobe\SkeletonBundle\DependencyInjection\SkeletonExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SkeletonBundle extends Bundle
{

    /**
     * Overridden to allow for the custom extension alias.
     */
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new SkeletonExtension();
        }

        return $this->extension;
    }
}
