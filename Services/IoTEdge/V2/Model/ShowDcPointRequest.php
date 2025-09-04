<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDcPointRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDcPointRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * edgeNodeId  边缘节点ID
    * dsId  采集数据源id，创建数据源配置时设置，节点下唯一。
    * pointId  采集点位表id，创建点位表时设置，数据源下唯一。
    * deviceId  设备id
    * property  设备服务属性，允许中、数字、英文大小写、下划线、中划线
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'edgeNodeId' => 'string',
            'dsId' => 'string',
            'pointId' => 'string',
            'deviceId' => 'string',
            'property' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * edgeNodeId  边缘节点ID
    * dsId  采集数据源id，创建数据源配置时设置，节点下唯一。
    * pointId  采集点位表id，创建点位表时设置，数据源下唯一。
    * deviceId  设备id
    * property  设备服务属性，允许中、数字、英文大小写、下划线、中划线
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'edgeNodeId' => null,
        'dsId' => null,
        'pointId' => null,
        'deviceId' => null,
        'property' => null
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
    * dsId  采集数据源id，创建数据源配置时设置，节点下唯一。
    * pointId  采集点位表id，创建点位表时设置，数据源下唯一。
    * deviceId  设备id
    * property  设备服务属性，允许中、数字、英文大小写、下划线、中划线
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'edgeNodeId' => 'edge_node_id',
            'dsId' => 'ds_id',
            'pointId' => 'point_id',
            'deviceId' => 'device_id',
            'property' => 'property'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * edgeNodeId  边缘节点ID
    * dsId  采集数据源id，创建数据源配置时设置，节点下唯一。
    * pointId  采集点位表id，创建点位表时设置，数据源下唯一。
    * deviceId  设备id
    * property  设备服务属性，允许中、数字、英文大小写、下划线、中划线
    *
    * @var string[]
    */
    protected static $setters = [
            'edgeNodeId' => 'setEdgeNodeId',
            'dsId' => 'setDsId',
            'pointId' => 'setPointId',
            'deviceId' => 'setDeviceId',
            'property' => 'setProperty'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * edgeNodeId  边缘节点ID
    * dsId  采集数据源id，创建数据源配置时设置，节点下唯一。
    * pointId  采集点位表id，创建点位表时设置，数据源下唯一。
    * deviceId  设备id
    * property  设备服务属性，允许中、数字、英文大小写、下划线、中划线
    *
    * @var string[]
    */
    protected static $getters = [
            'edgeNodeId' => 'getEdgeNodeId',
            'dsId' => 'getDsId',
            'pointId' => 'getPointId',
            'deviceId' => 'getDeviceId',
            'property' => 'getProperty'
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
        $this->container['dsId'] = isset($data['dsId']) ? $data['dsId'] : null;
        $this->container['pointId'] = isset($data['pointId']) ? $data['pointId'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['edgeNodeId'] === null) {
            $invalidProperties[] = "'edgeNodeId' can't be null";
        }
            if ((mb_strlen($this->container['edgeNodeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'edgeNodeId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['edgeNodeId']) < 1)) {
                $invalidProperties[] = "invalid value for 'edgeNodeId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['edgeNodeId'])) {
                $invalidProperties[] = "invalid value for 'edgeNodeId', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
        if ($this->container['dsId'] === null) {
            $invalidProperties[] = "'dsId' can't be null";
        }
            if ((mb_strlen($this->container['dsId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dsId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['dsId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dsId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z0-9-_]*$/", $this->container['dsId'])) {
                $invalidProperties[] = "invalid value for 'dsId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
        if ($this->container['pointId'] === null) {
            $invalidProperties[] = "'pointId' can't be null";
        }
            if ((mb_strlen($this->container['pointId']) > 64)) {
                $invalidProperties[] = "invalid value for 'pointId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['pointId']) < 1)) {
                $invalidProperties[] = "invalid value for 'pointId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z0-9-_]*$/", $this->container['pointId'])) {
                $invalidProperties[] = "invalid value for 'pointId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
            if (!is_null($this->container['deviceId']) && !preg_match("/^[a-zA-Z0-9_-]{0,128}$/", $this->container['deviceId'])) {
                $invalidProperties[] = "invalid value for 'deviceId', must be conform to the pattern /^[a-zA-Z0-9_-]{0,128}$/.";
            }
            if (!is_null($this->container['property']) && (mb_strlen($this->container['property']) > 128)) {
                $invalidProperties[] = "invalid value for 'property', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['property']) && (mb_strlen($this->container['property']) < 0)) {
                $invalidProperties[] = "invalid value for 'property', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['property']) && !preg_match("/^[一-龥a-zA-Z0-9_?\/'#().,&%@!-]*$/", $this->container['property'])) {
                $invalidProperties[] = "invalid value for 'property', must be conform to the pattern /^[一-龥a-zA-Z0-9_?\/'#().,&%@!-]*$/.";
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
    * @return string
    */
    public function getEdgeNodeId()
    {
        return $this->container['edgeNodeId'];
    }

    /**
    * Sets edgeNodeId
    *
    * @param string $edgeNodeId 边缘节点ID
    *
    * @return $this
    */
    public function setEdgeNodeId($edgeNodeId)
    {
        $this->container['edgeNodeId'] = $edgeNodeId;
        return $this;
    }

    /**
    * Gets dsId
    *  采集数据源id，创建数据源配置时设置，节点下唯一。
    *
    * @return string
    */
    public function getDsId()
    {
        return $this->container['dsId'];
    }

    /**
    * Sets dsId
    *
    * @param string $dsId 采集数据源id，创建数据源配置时设置，节点下唯一。
    *
    * @return $this
    */
    public function setDsId($dsId)
    {
        $this->container['dsId'] = $dsId;
        return $this;
    }

    /**
    * Gets pointId
    *  采集点位表id，创建点位表时设置，数据源下唯一。
    *
    * @return string
    */
    public function getPointId()
    {
        return $this->container['pointId'];
    }

    /**
    * Sets pointId
    *
    * @param string $pointId 采集点位表id，创建点位表时设置，数据源下唯一。
    *
    * @return $this
    */
    public function setPointId($pointId)
    {
        $this->container['pointId'] = $pointId;
        return $this;
    }

    /**
    * Gets deviceId
    *  设备id
    *
    * @return string|null
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string|null $deviceId 设备id
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets property
    *  设备服务属性，允许中、数字、英文大小写、下划线、中划线
    *
    * @return string|null
    */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
    * Sets property
    *
    * @param string|null $property 设备服务属性，允许中、数字、英文大小写、下划线、中划线
    *
    * @return $this
    */
    public function setProperty($property)
    {
        $this->container['property'] = $property;
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

