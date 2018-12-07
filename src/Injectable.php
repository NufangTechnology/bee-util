<?php
namespace Bee;

use Phalcon\Di;

/**
 * Injectable
 *
 * @package Ant
 */
abstract class Injectable extends Di\Injectable
{
    /**
     * Injectable constructor.
     */
    final public function __construct()
    {
        $this->setDI(Di::getDefault());

        if (method_exists($this, '__init')) {
            $this->__init();
        }
    }
}
