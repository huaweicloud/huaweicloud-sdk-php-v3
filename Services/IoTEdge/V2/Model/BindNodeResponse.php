<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BindNodeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BindNodeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  资源ID
    * type  资源类型：industry|campus
    * subsystemCount  对接的子系统数量
    * resourceType  CBC上注册的资源类型编码。
    * resourceSpecType  CBC上注册的资源类型编码。
    * associatedEdgeNodeId  关联的边缘节点ID
    * associatedEdgeNodeName  关联的边缘节点名称
    * extendParams  扩展开通参数。
    * resourceSize  资源容量大小，线性产品使用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'type' => 'string',
            'subsystemCount' => 'int',
            'resourceType' => 'string',
            'resourceSpecType' => 'string',
            'associatedEdgeNodeId' => 'string',
            'associatedEdgeNodeName' => 'string',
            'extendParams' => 'string',
            'resourceSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  资源ID
    * type  资源类型：industry|campus
    * subsystemCount  对接的子系统数量
    * resourceType  CBC上注册的资源类型编码。
    * resourceSpecType  CBC上注册的资源类型编码。
    * associatedEdgeNodeId  关联的边缘节点ID
    * associatedEdgeNodeName  关联的边缘节点名称
    * extendParams  扩展开通参数。
    * resourceSize  资源容量大小，线性产品使用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'type' => null,
        'subsystemCount' => 'int32',
        'resourceType' => null,
        'resourceSpecType' => null,
        'associatedEdgeNodeId' => null,
        'associatedEdgeNodeName' => null,
        'extendParams' => null,
        'resourceSize' => null
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
    * resourceId  资源ID
    * type  资源类型：industry|campus
    * subsystemCount  对接的子系统数量
    * resourceType  CBC上注册的资源类型编码。
    * resourceSpecType  CBC上注册的资源类型编码。
    * associatedEdgeNodeId  关联的边缘节点ID
    * associatedEdgeNodeName  关联的边缘节点名称
    * extendParams  扩展开通参数。
    * resourceSize  资源容量大小，线性产品使用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'type' => 'type',
            'subsystemCount' => 'subsystem_count',
            'resourceType' => 'resource_type',
            'resourceSpecType' => 'resource_spec_type',
            'associatedEdgeNodeId' => 'associated_edge_node_id',
            'associatedEdgeNodeName' => 'associated_edge_node_name',
            'extendParams' => 'extend_params',
            'resourceSize' => 'resource_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  资源ID
    * type  资源类型：industry|campus
    * subsystemCount  对接的子系统数量
    * resourceType  CBC上注册的资源类型编码。
    * resourceSpecType  CBC上注册的资源类型编码。
    * associatedEdgeNodeId  关联的边缘节点ID
    * associatedEdgeNodeName  关联的边缘节点名称
    * extendParams  扩展开通参数。
    * resourceSize  资源容量大小，线性产品使用
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'type' => 'setType',
            'subsystemCount' => 'setSubsystemCount',
            'resourceType' => 'setResourceType',
            'resourceSpecType' => 'setResourceSpecType',
            'associatedEdgeNodeId' => 'setAssociatedEdgeNodeId',
            'associatedEdgeNodeName' => 'setAssociatedEdgeNodeName',
            'extendParams' => 'setExtendParams',
            'resourceSize' => 'setResourceSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  资源ID
    * type  资源类型：industry|campus
    * subsystemCount  对接的子系统数量
    * resourceType  CBC上注册的资源类型编码。
    * resourceSpecType  CBC上注册的资源类型编码。
    * associatedEdgeNodeId  关联的边缘节点ID
    * associatedEdgeNodeName  关联的边缘节点名称
    * extendParams  扩展开通参数。
    * resourceSize  资源容量大小，线性产品使用
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'type' => 'getType',
            'subsystemCount' => 'getSubsystemCount',
            'resourceType' => 'getResourceType',
            'resourceSpecType' => 'getResourceSpecType',
            'associatedEdgeNodeId' => 'getAssociatedEdgeNodeId',
            'associatedEdgeNodeName' => 'getAssociatedEdgeNodeName',
            'extendParams' => 'getExtendParams',
            'resourceSize' => 'getResourceSize'
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['subsystemCount'] = isset($data['subsystemCount']) ? $data['subsystemCount'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceSpecType'] = isset($data['resourceSpecType']) ? $data['resourceSpecType'] : null;
        $this->container['associatedEdgeNodeId'] = isset($data['associatedEdgeNodeId']) ? $data['associatedEdgeNodeId'] : null;
        $this->container['associatedEdgeNodeName'] = isset($data['associatedEdgeNodeName']) ? $data['associatedEdgeNodeName'] : null;
        $this->container['extendParams'] = isset($data['extendParams']) ? $data['extendParams'] : null;
        $this->container['resourceSize'] = isset($data['resourceSize']) ? $data['resourceSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['subsystemCount']) && ($this->container['subsystemCount'] > 50)) {
                $invalidProperties[] = "invalid value for 'subsystemCount', must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['subsystemCount']) && ($this->container['subsystemCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'subsystemCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceType']) && !preg_match("/hws.resource.type.iotedge|hws.resource.type.iotedge.campus/", $this->container['resourceType'])) {
                $invalidProperties[] = "invalid value for 'resourceType', must be conform to the pattern /hws.resource.type.iotedge|hws.resource.type.iotedge.campus/.";
            }
            if (!is_null($this->container['resourceSpecType']) && (mb_strlen($this->container['resourceSpecType']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceSpecType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceSpecType']) && (mb_strlen($this->container['resourceSpecType']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceSpecType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceSpecType']) && !preg_match("/iotedge.standard|iotedge.advanced|iotedge.campus.100tps.1000device|iotedge.campus.1000tps.10000device|iotedge.campus.subsystem|iotedge.industry.device|iotedge.industry.system/", $this->container['resourceSpecType'])) {
                $invalidProperties[] = "invalid value for 'resourceSpecType', must be conform to the pattern /iotedge.standard|iotedge.advanced|iotedge.campus.100tps.1000device|iotedge.campus.1000tps.10000device|iotedge.campus.subsystem|iotedge.industry.device|iotedge.industry.system/.";
            }
            if (!is_null($this->container['associatedEdgeNodeId']) && (mb_strlen($this->container['associatedEdgeNodeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'associatedEdgeNodeId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['associatedEdgeNodeId']) && (mb_strlen($this->container['associatedEdgeNodeId']) < 0)) {
                $invalidProperties[] = "invalid value for 'associatedEdgeNodeId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['associatedEdgeNodeName']) && (mb_strlen($this->container['associatedEdgeNodeName']) > 64)) {
                $invalidProperties[] = "invalid value for 'associatedEdgeNodeName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['associatedEdgeNodeName']) && (mb_strlen($this->container['associatedEdgeNodeName']) < 0)) {
                $invalidProperties[] = "invalid value for 'associatedEdgeNodeName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['extendParams']) && (mb_strlen($this->container['extendParams']) > 1024)) {
                $invalidProperties[] = "invalid value for 'extendParams', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['extendParams']) && (mb_strlen($this->container['extendParams']) < 0)) {
                $invalidProperties[] = "invalid value for 'extendParams', the character length must be bigger than or equal to 0.";
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
    * Gets resourceId
    *  资源ID
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets type
    *  资源类型：industry|campus
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
    * @param string|null $type 资源类型：industry|campus
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets subsystemCount
    *  对接的子系统数量
    *
    * @return int|null
    */
    public function getSubsystemCount()
    {
        return $this->container['subsystemCount'];
    }

    /**
    * Sets subsystemCount
    *
    * @param int|null $subsystemCount 对接的子系统数量
    *
    * @return $this
    */
    public function setSubsystemCount($subsystemCount)
    {
        $this->container['subsystemCount'] = $subsystemCount;
        return $this;
    }

    /**
    * Gets resourceType
    *  CBC上注册的资源类型编码。
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType CBC上注册的资源类型编码。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceSpecType
    *  CBC上注册的资源类型编码。
    *
    * @return string|null
    */
    public function getResourceSpecType()
    {
        return $this->container['resourceSpecType'];
    }

    /**
    * Sets resourceSpecType
    *
    * @param string|null $resourceSpecType CBC上注册的资源类型编码。
    *
    * @return $this
    */
    public function setResourceSpecType($resourceSpecType)
    {
        $this->container['resourceSpecType'] = $resourceSpecType;
        return $this;
    }

    /**
    * Gets associatedEdgeNodeId
    *  关联的边缘节点ID
    *
    * @return string|null
    */
    public function getAssociatedEdgeNodeId()
    {
        return $this->container['associatedEdgeNodeId'];
    }

    /**
    * Sets associatedEdgeNodeId
    *
    * @param string|null $associatedEdgeNodeId 关联的边缘节点ID
    *
    * @return $this
    */
    public function setAssociatedEdgeNodeId($associatedEdgeNodeId)
    {
        $this->container['associatedEdgeNodeId'] = $associatedEdgeNodeId;
        return $this;
    }

    /**
    * Gets associatedEdgeNodeName
    *  关联的边缘节点名称
    *
    * @return string|null
    */
    public function getAssociatedEdgeNodeName()
    {
        return $this->container['associatedEdgeNodeName'];
    }

    /**
    * Sets associatedEdgeNodeName
    *
    * @param string|null $associatedEdgeNodeName 关联的边缘节点名称
    *
    * @return $this
    */
    public function setAssociatedEdgeNodeName($associatedEdgeNodeName)
    {
        $this->container['associatedEdgeNodeName'] = $associatedEdgeNodeName;
        return $this;
    }

    /**
    * Gets extendParams
    *  扩展开通参数。
    *
    * @return string|null
    */
    public function getExtendParams()
    {
        return $this->container['extendParams'];
    }

    /**
    * Sets extendParams
    *
    * @param string|null $extendParams 扩展开通参数。
    *
    * @return $this
    */
    public function setExtendParams($extendParams)
    {
        $this->container['extendParams'] = $extendParams;
        return $this;
    }

    /**
    * Gets resourceSize
    *  资源容量大小，线性产品使用
    *
    * @return int|null
    */
    public function getResourceSize()
    {
        return $this->container['resourceSize'];
    }

    /**
    * Sets resourceSize
    *
    * @param int|null $resourceSize 资源容量大小，线性产品使用
    *
    * @return $this
    */
    public function setResourceSize($resourceSize)
    {
        $this->container['resourceSize'] = $resourceSize;
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

