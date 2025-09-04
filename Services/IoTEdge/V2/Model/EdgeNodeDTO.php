<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EdgeNodeDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EdgeNodeDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * edgeNodeId  边缘节点ID
    * name  边缘节点名称
    * state  边缘节点状态UNINSTALLED|INSTALLED|OFFLINE|ONLINE|DELETING|FROZEN
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * spaceId  资源空间id，对应IOTDA云服务接口参数中的app_id。
    * type  节点所属资源类型：advanced|standard
    * resourceIds  节点所购买的资源类型的列表
    * resourceSpecTypes  节点所购买的资源类型的列表
    * ips  边缘节点ip列表
    * createTime  边缘节点创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'edgeNodeId' => 'string',
            'name' => 'string',
            'state' => 'string',
            'instanceId' => 'string',
            'spaceId' => 'string',
            'type' => 'string',
            'resourceIds' => 'string[]',
            'resourceSpecTypes' => 'string[]',
            'ips' => 'string[]',
            'createTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * edgeNodeId  边缘节点ID
    * name  边缘节点名称
    * state  边缘节点状态UNINSTALLED|INSTALLED|OFFLINE|ONLINE|DELETING|FROZEN
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * spaceId  资源空间id，对应IOTDA云服务接口参数中的app_id。
    * type  节点所属资源类型：advanced|standard
    * resourceIds  节点所购买的资源类型的列表
    * resourceSpecTypes  节点所购买的资源类型的列表
    * ips  边缘节点ip列表
    * createTime  边缘节点创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'edgeNodeId' => null,
        'name' => null,
        'state' => null,
        'instanceId' => null,
        'spaceId' => null,
        'type' => null,
        'resourceIds' => null,
        'resourceSpecTypes' => null,
        'ips' => null,
        'createTime' => null
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
    * edgeNodeId  边缘节点ID
    * name  边缘节点名称
    * state  边缘节点状态UNINSTALLED|INSTALLED|OFFLINE|ONLINE|DELETING|FROZEN
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * spaceId  资源空间id，对应IOTDA云服务接口参数中的app_id。
    * type  节点所属资源类型：advanced|standard
    * resourceIds  节点所购买的资源类型的列表
    * resourceSpecTypes  节点所购买的资源类型的列表
    * ips  边缘节点ip列表
    * createTime  边缘节点创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'edgeNodeId' => 'edge_node_id',
            'name' => 'name',
            'state' => 'state',
            'instanceId' => 'instance_id',
            'spaceId' => 'space_id',
            'type' => 'type',
            'resourceIds' => 'resource_ids',
            'resourceSpecTypes' => 'resource_spec_types',
            'ips' => 'ips',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * edgeNodeId  边缘节点ID
    * name  边缘节点名称
    * state  边缘节点状态UNINSTALLED|INSTALLED|OFFLINE|ONLINE|DELETING|FROZEN
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * spaceId  资源空间id，对应IOTDA云服务接口参数中的app_id。
    * type  节点所属资源类型：advanced|standard
    * resourceIds  节点所购买的资源类型的列表
    * resourceSpecTypes  节点所购买的资源类型的列表
    * ips  边缘节点ip列表
    * createTime  边缘节点创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'edgeNodeId' => 'setEdgeNodeId',
            'name' => 'setName',
            'state' => 'setState',
            'instanceId' => 'setInstanceId',
            'spaceId' => 'setSpaceId',
            'type' => 'setType',
            'resourceIds' => 'setResourceIds',
            'resourceSpecTypes' => 'setResourceSpecTypes',
            'ips' => 'setIps',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * edgeNodeId  边缘节点ID
    * name  边缘节点名称
    * state  边缘节点状态UNINSTALLED|INSTALLED|OFFLINE|ONLINE|DELETING|FROZEN
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * spaceId  资源空间id，对应IOTDA云服务接口参数中的app_id。
    * type  节点所属资源类型：advanced|standard
    * resourceIds  节点所购买的资源类型的列表
    * resourceSpecTypes  节点所购买的资源类型的列表
    * ips  边缘节点ip列表
    * createTime  边缘节点创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'edgeNodeId' => 'getEdgeNodeId',
            'name' => 'getName',
            'state' => 'getState',
            'instanceId' => 'getInstanceId',
            'spaceId' => 'getSpaceId',
            'type' => 'getType',
            'resourceIds' => 'getResourceIds',
            'resourceSpecTypes' => 'getResourceSpecTypes',
            'ips' => 'getIps',
            'createTime' => 'getCreateTime'
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
        $this->container['edgeNodeId'] = isset($data['edgeNodeId']) ? $data['edgeNodeId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['spaceId'] = isset($data['spaceId']) ? $data['spaceId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['resourceIds'] = isset($data['resourceIds']) ? $data['resourceIds'] : null;
        $this->container['resourceSpecTypes'] = isset($data['resourceSpecTypes']) ? $data['resourceSpecTypes'] : null;
        $this->container['ips'] = isset($data['ips']) ? $data['ips'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['edgeNodeId']) && (mb_strlen($this->container['edgeNodeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'edgeNodeId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['edgeNodeId']) && (mb_strlen($this->container['edgeNodeId']) < 1)) {
                $invalidProperties[] = "invalid value for 'edgeNodeId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['edgeNodeId']) && !preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['edgeNodeId'])) {
                $invalidProperties[] = "invalid value for 'edgeNodeId', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 32)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 4)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceId']) && !preg_match("/^[a-f0-9-]{1,36}$/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /^[a-f0-9-]{1,36}$/.";
            }
            if (!is_null($this->container['spaceId']) && (mb_strlen($this->container['spaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'spaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['spaceId']) && (mb_strlen($this->container['spaceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'spaceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['spaceId']) && !preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['spaceId'])) {
                $invalidProperties[] = "invalid value for 'spaceId', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 16)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 4)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
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
    * Gets edgeNodeId
    *  边缘节点ID
    *
    * @return string|null
    */
    public function getEdgeNodeId()
    {
        return $this->container['edgeNodeId'];
    }

    /**
    * Sets edgeNodeId
    *
    * @param string|null $edgeNodeId 边缘节点ID
    *
    * @return $this
    */
    public function setEdgeNodeId($edgeNodeId)
    {
        $this->container['edgeNodeId'] = $edgeNodeId;
        return $this;
    }

    /**
    * Gets name
    *  边缘节点名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 边缘节点名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets state
    *  边缘节点状态UNINSTALLED|INSTALLED|OFFLINE|ONLINE|DELETING|FROZEN
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 边缘节点状态UNINSTALLED|INSTALLED|OFFLINE|ONLINE|DELETING|FROZEN
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets spaceId
    *  资源空间id，对应IOTDA云服务接口参数中的app_id。
    *
    * @return string|null
    */
    public function getSpaceId()
    {
        return $this->container['spaceId'];
    }

    /**
    * Sets spaceId
    *
    * @param string|null $spaceId 资源空间id，对应IOTDA云服务接口参数中的app_id。
    *
    * @return $this
    */
    public function setSpaceId($spaceId)
    {
        $this->container['spaceId'] = $spaceId;
        return $this;
    }

    /**
    * Gets type
    *  节点所属资源类型：advanced|standard
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 节点所属资源类型：advanced|standard
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets resourceIds
    *  节点所购买的资源类型的列表
    *
    * @return string[]|null
    */
    public function getResourceIds()
    {
        return $this->container['resourceIds'];
    }

    /**
    * Sets resourceIds
    *
    * @param string[]|null $resourceIds 节点所购买的资源类型的列表
    *
    * @return $this
    */
    public function setResourceIds($resourceIds)
    {
        $this->container['resourceIds'] = $resourceIds;
        return $this;
    }

    /**
    * Gets resourceSpecTypes
    *  节点所购买的资源类型的列表
    *
    * @return string[]|null
    */
    public function getResourceSpecTypes()
    {
        return $this->container['resourceSpecTypes'];
    }

    /**
    * Sets resourceSpecTypes
    *
    * @param string[]|null $resourceSpecTypes 节点所购买的资源类型的列表
    *
    * @return $this
    */
    public function setResourceSpecTypes($resourceSpecTypes)
    {
        $this->container['resourceSpecTypes'] = $resourceSpecTypes;
        return $this;
    }

    /**
    * Gets ips
    *  边缘节点ip列表
    *
    * @return string[]|null
    */
    public function getIps()
    {
        return $this->container['ips'];
    }

    /**
    * Sets ips
    *
    * @param string[]|null $ips 边缘节点ip列表
    *
    * @return $this
    */
    public function setIps($ips)
    {
        $this->container['ips'] = $ips;
        return $this;
    }

    /**
    * Gets createTime
    *  边缘节点创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 边缘节点创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

