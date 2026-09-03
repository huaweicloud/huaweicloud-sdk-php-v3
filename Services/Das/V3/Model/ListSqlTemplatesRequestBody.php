<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSqlTemplatesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSqlTemplatesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID，实例的唯一标识
    * nodeId  节点ID，实例节点的唯一标识
    * startAt  开始时间，Unix timestamp，单位：毫秒
    * endAt  结束时间，Unix timestamp，单位：毫秒
    * operation  操作类型，可组合，用逗号分隔
    * dbNameList  数据库名称列表
    * keyword  关键字
    * sqlTemplateId  SQL模板ID
    * sort  排序字段，取值范围：executeNum（执行次数）、totalCost（总耗时）、avgCost（平均耗时）、totalScan（总扫描行数）、avgScan（平均扫描行数）
    * asc  排序顺序，true（正序）、false（逆序）
    * size  数量，默认30
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'nodeId' => 'string',
            'startAt' => 'int',
            'endAt' => 'int',
            'operation' => 'string',
            'dbNameList' => 'string[]',
            'keyword' => 'string',
            'sqlTemplateId' => 'string',
            'sort' => 'string',
            'asc' => 'bool',
            'size' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID，实例的唯一标识
    * nodeId  节点ID，实例节点的唯一标识
    * startAt  开始时间，Unix timestamp，单位：毫秒
    * endAt  结束时间，Unix timestamp，单位：毫秒
    * operation  操作类型，可组合，用逗号分隔
    * dbNameList  数据库名称列表
    * keyword  关键字
    * sqlTemplateId  SQL模板ID
    * sort  排序字段，取值范围：executeNum（执行次数）、totalCost（总耗时）、avgCost（平均耗时）、totalScan（总扫描行数）、avgScan（平均扫描行数）
    * asc  排序顺序，true（正序）、false（逆序）
    * size  数量，默认30
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'nodeId' => null,
        'startAt' => 'int64',
        'endAt' => 'int64',
        'operation' => null,
        'dbNameList' => null,
        'keyword' => null,
        'sqlTemplateId' => null,
        'sort' => null,
        'asc' => null,
        'size' => 'int32'
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * instanceId  实例ID，实例的唯一标识
    * nodeId  节点ID，实例节点的唯一标识
    * startAt  开始时间，Unix timestamp，单位：毫秒
    * endAt  结束时间，Unix timestamp，单位：毫秒
    * operation  操作类型，可组合，用逗号分隔
    * dbNameList  数据库名称列表
    * keyword  关键字
    * sqlTemplateId  SQL模板ID
    * sort  排序字段，取值范围：executeNum（执行次数）、totalCost（总耗时）、avgCost（平均耗时）、totalScan（总扫描行数）、avgScan（平均扫描行数）
    * asc  排序顺序，true（正序）、false（逆序）
    * size  数量，默认30
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'nodeId' => 'node_id',
            'startAt' => 'start_at',
            'endAt' => 'end_at',
            'operation' => 'operation',
            'dbNameList' => 'db_name_list',
            'keyword' => 'keyword',
            'sqlTemplateId' => 'sql_template_id',
            'sort' => 'sort',
            'asc' => 'asc',
            'size' => 'size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID，实例的唯一标识
    * nodeId  节点ID，实例节点的唯一标识
    * startAt  开始时间，Unix timestamp，单位：毫秒
    * endAt  结束时间，Unix timestamp，单位：毫秒
    * operation  操作类型，可组合，用逗号分隔
    * dbNameList  数据库名称列表
    * keyword  关键字
    * sqlTemplateId  SQL模板ID
    * sort  排序字段，取值范围：executeNum（执行次数）、totalCost（总耗时）、avgCost（平均耗时）、totalScan（总扫描行数）、avgScan（平均扫描行数）
    * asc  排序顺序，true（正序）、false（逆序）
    * size  数量，默认30
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'nodeId' => 'setNodeId',
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt',
            'operation' => 'setOperation',
            'dbNameList' => 'setDbNameList',
            'keyword' => 'setKeyword',
            'sqlTemplateId' => 'setSqlTemplateId',
            'sort' => 'setSort',
            'asc' => 'setAsc',
            'size' => 'setSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID，实例的唯一标识
    * nodeId  节点ID，实例节点的唯一标识
    * startAt  开始时间，Unix timestamp，单位：毫秒
    * endAt  结束时间，Unix timestamp，单位：毫秒
    * operation  操作类型，可组合，用逗号分隔
    * dbNameList  数据库名称列表
    * keyword  关键字
    * sqlTemplateId  SQL模板ID
    * sort  排序字段，取值范围：executeNum（执行次数）、totalCost（总耗时）、avgCost（平均耗时）、totalScan（总扫描行数）、avgScan（平均扫描行数）
    * asc  排序顺序，true（正序）、false（逆序）
    * size  数量，默认30
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'nodeId' => 'getNodeId',
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt',
            'operation' => 'getOperation',
            'dbNameList' => 'getDbNameList',
            'keyword' => 'getKeyword',
            'sqlTemplateId' => 'getSqlTemplateId',
            'sort' => 'getSort',
            'asc' => 'getAsc',
            'size' => 'getSize'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['dbNameList'] = isset($data['dbNameList']) ? $data['dbNameList'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['sqlTemplateId'] = isset($data['sqlTemplateId']) ? $data['sqlTemplateId'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['asc'] = isset($data['asc']) ? $data['asc'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['startAt'] === null) {
            $invalidProperties[] = "'startAt' can't be null";
        }
        if ($this->container['endAt'] === null) {
            $invalidProperties[] = "'endAt' can't be null";
        }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets instanceId
    *  实例ID，实例的唯一标识
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID，实例的唯一标识
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID，实例节点的唯一标识
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点ID，实例节点的唯一标识
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets startAt
    *  开始时间，Unix timestamp，单位：毫秒
    *
    * @return int
    */
    public function getStartAt()
    {
        return $this->container['startAt'];
    }

    /**
    * Sets startAt
    *
    * @param int $startAt 开始时间，Unix timestamp，单位：毫秒
    *
    * @return $this
    */
    public function setStartAt($startAt)
    {
        $this->container['startAt'] = $startAt;
        return $this;
    }

    /**
    * Gets endAt
    *  结束时间，Unix timestamp，单位：毫秒
    *
    * @return int
    */
    public function getEndAt()
    {
        return $this->container['endAt'];
    }

    /**
    * Sets endAt
    *
    * @param int $endAt 结束时间，Unix timestamp，单位：毫秒
    *
    * @return $this
    */
    public function setEndAt($endAt)
    {
        $this->container['endAt'] = $endAt;
        return $this;
    }

    /**
    * Gets operation
    *  操作类型，可组合，用逗号分隔
    *
    * @return string|null
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string|null $operation 操作类型，可组合，用逗号分隔
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets dbNameList
    *  数据库名称列表
    *
    * @return string[]|null
    */
    public function getDbNameList()
    {
        return $this->container['dbNameList'];
    }

    /**
    * Sets dbNameList
    *
    * @param string[]|null $dbNameList 数据库名称列表
    *
    * @return $this
    */
    public function setDbNameList($dbNameList)
    {
        $this->container['dbNameList'] = $dbNameList;
        return $this;
    }

    /**
    * Gets keyword
    *  关键字
    *
    * @return string|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string|null $keyword 关键字
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
        return $this;
    }

    /**
    * Gets sqlTemplateId
    *  SQL模板ID
    *
    * @return string|null
    */
    public function getSqlTemplateId()
    {
        return $this->container['sqlTemplateId'];
    }

    /**
    * Sets sqlTemplateId
    *
    * @param string|null $sqlTemplateId SQL模板ID
    *
    * @return $this
    */
    public function setSqlTemplateId($sqlTemplateId)
    {
        $this->container['sqlTemplateId'] = $sqlTemplateId;
        return $this;
    }

    /**
    * Gets sort
    *  排序字段，取值范围：executeNum（执行次数）、totalCost（总耗时）、avgCost（平均耗时）、totalScan（总扫描行数）、avgScan（平均扫描行数）
    *
    * @return string|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param string|null $sort 排序字段，取值范围：executeNum（执行次数）、totalCost（总耗时）、avgCost（平均耗时）、totalScan（总扫描行数）、avgScan（平均扫描行数）
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets asc
    *  排序顺序，true（正序）、false（逆序）
    *
    * @return bool|null
    */
    public function getAsc()
    {
        return $this->container['asc'];
    }

    /**
    * Sets asc
    *
    * @param bool|null $asc 排序顺序，true（正序）、false（逆序）
    *
    * @return $this
    */
    public function setAsc($asc)
    {
        $this->container['asc'] = $asc;
        return $this;
    }

    /**
    * Gets size
    *  数量，默认30
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 数量，默认30
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

