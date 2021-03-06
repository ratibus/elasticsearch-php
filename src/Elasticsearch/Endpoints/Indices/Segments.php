<?php
/**
 * User: zach
 * Date: 06/04/2013
 * Time: 13:33:19 pm
 */

namespace Elasticsearch\Endpoints\Indices;

use Elasticsearch\Endpoints\AbstractEndpoint;
use Elasticsearch\Common\Exceptions;

/**
 * Class Segments
 * @package Elasticsearch\Endpoints\Indices
 */
class Segments extends AbstractEndpoint
{

    /**
     * @return string
     */
    protected function getURI()
    {
        $index = $this->index;
        $uri   = "/_segments";

        if (isset($index) === true) {
            $uri = "/$index/_segments";
        }

        return $uri;
    }

    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return array(
            'ignore_indices',
            'operation_threading',
        );
    }

    /**
     * @return string
     */
    protected function getMethod()
    {
        return 'GET';
    }
}