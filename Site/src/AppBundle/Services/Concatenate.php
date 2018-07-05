<?php

namespace AppBundle\Services;


use Doctrine\Common\Collections\ArrayCollection;


class Concatenate
{
    public function doConcatenate($a, $b)
    {
        // Concatenate arrays into a single array
        return new ArrayCollection(
            array_merge(
                $a,
                $b
            )
        );
    }
}