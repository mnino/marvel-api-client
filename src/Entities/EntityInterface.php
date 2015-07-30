<?php

namespace Chadicus\Marvel\Api\Entities;

interface EntityInterface
{
    /**
     * Filters the given array $input into an AbstractEntity.
     *
     * @param array $input The value to be filtered.
     *
     * @return AbstractEntity
     *
     * @throws \Exception Thrown if the input did not pass validation.
     */
    public static function fromArray(array $input);
}
