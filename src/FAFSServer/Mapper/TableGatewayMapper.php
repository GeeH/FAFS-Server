<?php
/**
 * Gary Hockin
 * 23/04/2013
 */

namespace FAFSServer\Mapper;

use Zend\Db\Sql\Expression;
use Zend\Db\TableGateway\TableGateway;

class TableGatewayMapper implements MapperInterface
{
    /**
     * @var TableGateway
     */
    protected $tableGateway;

    /**
     * @param TableGateway $tableGateway
     */
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    /**
     * @param array $data
     * @return int
     */
    public function addCount(array $data)
    {
        return $this->tableGateway->insert(array(
            'when' => new Expression('FROM_UNIXTIME(' . $data[0] . ')'),
            'key' => $data[1],
            'value' => $data[2],
        ));
    }
}