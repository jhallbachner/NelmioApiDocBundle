<?php

/*
 * This file is part of the NelmioApiDocBundle.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\ApiDocBundle\Parser;

/**
 * This is the interface parsers must implement in order to be registered in the ApiDocExtractor.
 */
interface ParserInterface
{
    /**
     * Return true/false whether this class supports parsing the given class.
     *
     * @param  array  $item containing the following fields: class, groups. Of which groups is optional
     * @return boolean
     */
    public function supports(array $item);

    /**
     * Returns an array of class property metadata where each item is a key (the property name) and
     * an array of data with the following keys:
     *  - dataType          string
     *  - required          boolean
     *  - description       string
     *  - readonly          boolean
     *  - children          (optional) array of nested property names mapped to arrays
     *                      in the format described here
     *
     * @param  string $item The string type of input to parse.
     * @return array
     */
    public function parse(array $item);

    /**
     * Adds a set of handlers that inspect request objects for API information.
     *
     * @param array $handlers
     * @return null
     */
    public function setHandlers(array $handlers);
}
