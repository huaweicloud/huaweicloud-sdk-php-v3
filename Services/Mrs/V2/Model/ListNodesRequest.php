<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNodesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNodesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群ID。
    * nodeGroup  要查询的节点组名称。
    * limit  返回结果中每页显示条数。缺省值：10。
    * offset  表示作业列表从该偏移量开始查询。缺省值：1。
    * nodeName  指定节点名称，支持模糊搜索。
    * sortKey  排序键，支持对节点名称排序。
    * sortDir  列表排序方式，desc为降序，asc为升序。
    * queryNodeDetail  是否查询节点详情。该字段设为true时可能会影响接口性能。
    * queryEcsDetail  是否查询ECS详情信息，会涉及对ECS接口调用。
    * internalIp  指定内网IP。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'nodeGroup' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'nodeName' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'queryNodeDetail' => 'bool',
            'queryEcsDetail' => 'bool',
            'internalIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群ID。
    * nodeGroup  要查询的节点组名称。
    * limit  返回结果中每页显示条数。缺省值：10。
    * offset  表示作业列表从该偏移量开始查询。缺省值：1。
    * nodeName  指定节点名称，支持模糊搜索。
    * sortKey  排序键，支持对节点名称排序。
    * sortDir  列表排序方式，desc为降序，asc为升序。
    * queryNodeDetail  是否查询节点详情。该字段设为true时可能会影响接口性能。
    * queryEcsDetail  是否查询ECS详情信息，会涉及对ECS接口调用。
    * internalIp  指定内网IP。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'nodeGroup' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'nodeName' => null,
        'sortKey' => null,
        'sortDir' => null,
        'queryNodeDetail' => null,
        'queryEcsDetail' => null,
        'internalIp' => null
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
    * clusterId  集群ID。
    * nodeGroup  要查询的节点组名称。
    * limit  返回结果中每页显示条数。缺省值：10。
    * offset  表示作业列表从该偏移量开始查询。缺省值：1。
    * nodeName  指定节点名称，支持模糊搜索。
    * sortKey  排序键，支持对节点名称排序。
    * sortDir  列表排序方式，desc为降序，asc为升序。
    * queryNodeDetail  是否查询节点详情。该字段设为true时可能会影响接口性能。
    * queryEcsDetail  是否查询ECS详情信息，会涉及对ECS接口调用。
    * internalIp  指定内网IP。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'nodeGroup' => 'node_group',
            'limit' => 'limit',
            'offset' => 'offset',
            'nodeName' => 'node_name',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'queryNodeDetail' => 'query_node_detail',
            'queryEcsDetail' => 'query_ecs_detail',
            'internalIp' => 'internal_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群ID。
    * nodeGroup  要查询的节点组名称。
    * limit  返回结果中每页显示条数。缺省值：10。
    * offset  表示作业列表从该偏移量开始查询。缺省值：1。
    * nodeName  指定节点名称，支持模糊搜索。
    * sortKey  排序键，支持对节点名称排序。
    * sortDir  列表排序方式，desc为降序，asc为升序。
    * queryNodeDetail  是否查询节点详情。该字段设为true时可能会影响接口性能。
    * queryEcsDetail  是否查询ECS详情信息，会涉及对ECS接口调用。
    * internalIp  指定内网IP。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'nodeGroup' => 'setNodeGroup',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'nodeName' => 'setNodeName',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'queryNodeDetail' => 'setQueryNodeDetail',
            'queryEcsDetail' => 'setQueryEcsDetail',
            'internalIp' => 'setInternalIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群ID。
    * nodeGroup  要查询的节点组名称。
    * limit  返回结果中每页显示条数。缺省值：10。
    * offset  表示作业列表从该偏移量开始查询。缺省值：1。
    * nodeName  指定节点名称，支持模糊搜索。
    * sortKey  排序键，支持对节点名称排序。
    * sortDir  列表排序方式，desc为降序，asc为升序。
    * queryNodeDetail  是否查询节点详情。该字段设为true时可能会影响接口性能。
    * queryEcsDetail  是否查询ECS详情信息，会涉及对ECS接口调用。
    * internalIp  指定内网IP。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'nodeGroup' => 'getNodeGroup',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'nodeName' => 'getNodeName',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'queryNodeDetail' => 'getQueryNodeDetail',
            'queryEcsDetail' => 'getQueryEcsDetail',
            'internalIp' => 'getInternalIp'
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
    const SORT_KEY_NODE_NAME = 'node_name';
    const SORT_DIR_DESC = 'desc';
    const SORT_DIR_ASC = 'asc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortKeyAllowableValues()
    {
        return [
            self::SORT_KEY_NODE_NAME,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortDirAllowableValues()
    {
        return [
            self::SORT_DIR_DESC,
            self::SORT_DIR_ASC,
        ];
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['nodeGroup'] = isset($data['nodeGroup']) ? $data['nodeGroup'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['queryNodeDetail'] = isset($data['queryNodeDetail']) ? $data['queryNodeDetail'] : null;
        $this->container['queryEcsDetail'] = isset($data['queryEcsDetail']) ? $data['queryEcsDetail'] : null;
        $this->container['internalIp'] = isset($data['internalIp']) ? $data['internalIp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
            if ((mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_\\-]{1,64}$/", $this->container['clusterId'])) {
                $invalidProperties[] = "invalid value for 'clusterId', must be conform to the pattern /^[a-zA-Z0-9_\\-]{1,64}$/.";
            }
            if (!is_null($this->container['nodeGroup']) && (mb_strlen($this->container['nodeGroup']) < 1)) {
                $invalidProperties[] = "invalid value for 'nodeGroup', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 1)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSortKeyAllowableValues();
                if (!is_null($this->container['sortKey']) && !in_array($this->container['sortKey'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortKey', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSortDirAllowableValues();
                if (!is_null($this->container['sortDir']) && !in_array($this->container['sortDir'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortDir', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['internalIp']) && (mb_strlen($this->container['internalIp']) > 15)) {
                $invalidProperties[] = "invalid value for 'internalIp', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['internalIp']) && (mb_strlen($this->container['internalIp']) < 7)) {
                $invalidProperties[] = "invalid value for 'internalIp', the character length must be bigger than or equal to 7.";
            }
            if (!is_null($this->container['internalIp']) && !preg_match("/^(\\d+\\.){3}\\d+/", $this->container['internalIp'])) {
                $invalidProperties[] = "invalid value for 'internalIp', must be conform to the pattern /^(\\d+\\.){3}\\d+/.";
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
    * Gets clusterId
    *  集群ID。
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 集群ID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets nodeGroup
    *  要查询的节点组名称。
    *
    * @return string|null
    */
    public function getNodeGroup()
    {
        return $this->container['nodeGroup'];
    }

    /**
    * Sets nodeGroup
    *
    * @param string|null $nodeGroup 要查询的节点组名称。
    *
    * @return $this
    */
    public function setNodeGroup($nodeGroup)
    {
        $this->container['nodeGroup'] = $nodeGroup;
        return $this;
    }

    /**
    * Gets limit
    *  返回结果中每页显示条数。缺省值：10。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 返回结果中每页显示条数。缺省值：10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  表示作业列表从该偏移量开始查询。缺省值：1。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 表示作业列表从该偏移量开始查询。缺省值：1。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets nodeName
    *  指定节点名称，支持模糊搜索。
    *
    * @return string|null
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string|null $nodeName 指定节点名称，支持模糊搜索。
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序键，支持对节点名称排序。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 排序键，支持对节点名称排序。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  列表排序方式，desc为降序，asc为升序。
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 列表排序方式，desc为降序，asc为升序。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets queryNodeDetail
    *  是否查询节点详情。该字段设为true时可能会影响接口性能。
    *
    * @return bool|null
    */
    public function getQueryNodeDetail()
    {
        return $this->container['queryNodeDetail'];
    }

    /**
    * Sets queryNodeDetail
    *
    * @param bool|null $queryNodeDetail 是否查询节点详情。该字段设为true时可能会影响接口性能。
    *
    * @return $this
    */
    public function setQueryNodeDetail($queryNodeDetail)
    {
        $this->container['queryNodeDetail'] = $queryNodeDetail;
        return $this;
    }

    /**
    * Gets queryEcsDetail
    *  是否查询ECS详情信息，会涉及对ECS接口调用。
    *
    * @return bool|null
    */
    public function getQueryEcsDetail()
    {
        return $this->container['queryEcsDetail'];
    }

    /**
    * Sets queryEcsDetail
    *
    * @param bool|null $queryEcsDetail 是否查询ECS详情信息，会涉及对ECS接口调用。
    *
    * @return $this
    */
    public function setQueryEcsDetail($queryEcsDetail)
    {
        $this->container['queryEcsDetail'] = $queryEcsDetail;
        return $this;
    }

    /**
    * Gets internalIp
    *  指定内网IP。
    *
    * @return string|null
    */
    public function getInternalIp()
    {
        return $this->container['internalIp'];
    }

    /**
    * Sets internalIp
    *
    * @param string|null $internalIp 指定内网IP。
    *
    * @return $this
    */
    public function setInternalIp($internalIp)
    {
        $this->container['internalIp'] = $internalIp;
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

