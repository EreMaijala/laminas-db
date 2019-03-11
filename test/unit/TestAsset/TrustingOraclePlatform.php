<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Db\TestAsset;

use Zend\Db\Adapter\Platform\Oracle;

class TrustingOraclePlatform extends Oracle
{
    public function quoteValue(string $value): string
    {
        return $this->quoteTrustedValue($value);
    }
}
