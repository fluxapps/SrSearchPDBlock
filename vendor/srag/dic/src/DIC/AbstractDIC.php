<?php

namespace srag\DIC\SrSearchPDBlock\DIC;

use ILIAS\DI\Container;
use srag\DIC\SrSearchPDBlock\Database\DatabaseDetector;
use srag\DIC\SrSearchPDBlock\Database\DatabaseInterface;

/**
 * Class AbstractDIC
 *
 * @package srag\DIC\SrSearchPDBlock\DIC
 */
abstract class AbstractDIC implements DICInterface
{

    /**
     * @var Container
     */
    protected $dic;


    /**
     * @inheritDoc
     */
    public function __construct(Container &$dic)
    {
        $this->dic = &$dic;
    }


    /**
     * @inheritDoc
     */
    public function database() : DatabaseInterface
    {
        return DatabaseDetector::getInstance($this->databaseCore());
    }
}
