<?php
/**
 * @see       https://github.com/zendframework/zend-db for the canonical source repository
 * @copyright Copyright (c) 2005-2019 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/zendframework/zend-db/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Zend\Db\Adapter\Exception;

class InvalidConnectionParametersException extends RuntimeException implements ExceptionInterface
{
    /**
     * @var int
     */
    protected $parameters;

    public function __construct(string $message, int $parameters)
    {
        parent::__construct($message);
        $this->parameters = $parameters;
    }
}
