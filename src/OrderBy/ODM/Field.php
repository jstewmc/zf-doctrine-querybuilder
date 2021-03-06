<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014 Zend Technologies USA Inc. (http://www.zend.com)
 */

namespace ZF\Doctrine\QueryBuilder\OrderBy\ODM;

use Exception;

class Field extends AbstractOrderBy
{
    public function orderBy($queryBuilder, $metadata, $option)
    {
        if (!isset($option['direction']) || !in_array(strtolower($option['direction']), array('asc', 'desc'))) {
            throw new Exception('Invalid direction in orderby directive');
        }

        $queryBuilder->sort($option['field'], $option['direction']);
    }
}
