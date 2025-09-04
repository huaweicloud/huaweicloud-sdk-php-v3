<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateExternalEntityReqDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateExternalEntityReqDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * externalId  外部实体Id，节点下唯一
    * protocol  连接外部实体的协议类型
    * connectionType  连接类型
    * mqttConnectionInfo  mqttConnectionInfo
    * spaceId  资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的外部实体归属到IoDA哪个资源空间下的边缘节点设备下，否则创建的外部实体将会归属到默认资源空间下对应的边缘节点下,对应于IoDA的app_id.
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'externalId' => 'string',
            'protocol' => 'string',
            'connectionType' => 'string',
            'mqttConnectionInfo' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\MqttConnectionInfo',
            'spaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * externalId  外部实体Id，节点下唯一
    * protocol  连接外部实体的协议类型
    * connectionType  连接类型
    * mqttConnectionInfo  mqttConnectionInfo
    * spaceId  资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的外部实体归属到IoDA哪个资源空间下的边缘节点设备下，否则创建的外部实体将会归属到默认资源空间下对应的边缘节点下,对应于IoDA的app_id.
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'externalId' => null,
        'protocol' => null,
        'connectionType' => null,
        'mqttConnectionInfo' => null,
        'spaceId' => null
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
    * externalId  外部实体Id，节点下唯一
    * protocol  连接外部实体的协议类型
    * connectionType  连接类型
    * mqttConnectionInfo  mqttConnectionInfo
    * spaceId  资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的外部实体归属到IoDA哪个资源空间下的边缘节点设备下，否则创建的外部实体将会归属到默认资源空间下对应的边缘节点下,对应于IoDA的app_id.
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'externalId' => 'external_id',
            'protocol' => 'protocol',
            'connectionType' => 'connection_type',
            'mqttConnectionInfo' => 'mqtt_connection_info',
            'spaceId' => 'space_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * externalId  外部实体Id，节点下唯一
    * protocol  连接外部实体的协议类型
    * connectionType  连接类型
    * mqttConnectionInfo  mqttConnectionInfo
    * spaceId  资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的外部实体归属到IoDA哪个资源空间下的边缘节点设备下，否则创建的外部实体将会归属到默认资源空间下对应的边缘节点下,对应于IoDA的app_id.
    *
    * @var string[]
    */
    protected static $setters = [
            'externalId' => 'setExternalId',
            'protocol' => 'setProtocol',
            'connectionType' => 'setConnectionType',
            'mqttConnectionInfo' => 'setMqttConnectionInfo',
            'spaceId' => 'setSpaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * externalId  外部实体Id，节点下唯一
    * protocol  连接外部实体的协议类型
    * connectionType  连接类型
    * mqttConnectionInfo  mqttConnectionInfo
    * spaceId  资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的外部实体归属到IoDA哪个资源空间下的边缘节点设备下，否则创建的外部实体将会归属到默认资源空间下对应的边缘节点下,对应于IoDA的app_id.
    *
    * @var string[]
    */
    protected static $getters = [
            'externalId' => 'getExternalId',
            'protocol' => 'getProtocol',
            'connectionType' => 'getConnectionType',
            'mqttConnectionInfo' => 'getMqttConnectionInfo',
            'spaceId' => 'getSpaceId'
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
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['connectionType'] = isset($data['connectionType']) ? $data['connectionType'] : null;
        $this->container['mqttConnectionInfo'] = isset($data['mqttConnectionInfo']) ? $data['mqttConnectionInfo'] : null;
        $this->container['spaceId'] = isset($data['spaceId']) ? $data['spaceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['externalId'] === null) {
            $invalidProperties[] = "'externalId' can't be null";
        }
            if ((mb_strlen($this->container['externalId']) > 64)) {
                $invalidProperties[] = "invalid value for 'externalId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['externalId']) < 1)) {
                $invalidProperties[] = "invalid value for 'externalId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z0-9-_]*$/", $this->container['externalId'])) {
                $invalidProperties[] = "invalid value for 'externalId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
            if (!preg_match("/(MQTT|HTTPS)/", $this->container['protocol'])) {
                $invalidProperties[] = "invalid value for 'protocol', must be conform to the pattern /(MQTT|HTTPS)/.";
            }
        if ($this->container['connectionType'] === null) {
            $invalidProperties[] = "'connectionType' can't be null";
        }
            if (!preg_match("/(CLIENT|SERVER)/", $this->container['connectionType'])) {
                $invalidProperties[] = "invalid value for 'connectionType', must be conform to the pattern /(CLIENT|SERVER)/.";
            }
            if (!is_null($this->container['spaceId']) && (mb_strlen($this->container['spaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'spaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['spaceId']) && (mb_strlen($this->container['spaceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'spaceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['spaceId']) && !preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['spaceId'])) {
                $invalidProperties[] = "invalid value for 'spaceId', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
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
    * Gets externalId
    *  外部实体Id，节点下唯一
    *
    * @return string
    */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
    * Sets externalId
    *
    * @param string $externalId 外部实体Id，节点下唯一
    *
    * @return $this
    */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;
        return $this;
    }

    /**
    * Gets protocol
    *  连接外部实体的协议类型
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 连接外部实体的协议类型
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets connectionType
    *  连接类型
    *
    * @return string
    */
    public function getConnectionType()
    {
        return $this->container['connectionType'];
    }

    /**
    * Sets connectionType
    *
    * @param string $connectionType 连接类型
    *
    * @return $this
    */
    public function setConnectionType($connectionType)
    {
        $this->container['connectionType'] = $connectionType;
        return $this;
    }

    /**
    * Gets mqttConnectionInfo
    *  mqttConnectionInfo
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\MqttConnectionInfo|null
    */
    public function getMqttConnectionInfo()
    {
        return $this->container['mqttConnectionInfo'];
    }

    /**
    * Sets mqttConnectionInfo
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\MqttConnectionInfo|null $mqttConnectionInfo mqttConnectionInfo
    *
    * @return $this
    */
    public function setMqttConnectionInfo($mqttConnectionInfo)
    {
        $this->container['mqttConnectionInfo'] = $mqttConnectionInfo;
        return $this;
    }

    /**
    * Gets spaceId
    *  资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的外部实体归属到IoDA哪个资源空间下的边缘节点设备下，否则创建的外部实体将会归属到默认资源空间下对应的边缘节点下,对应于IoDA的app_id.
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
    * @param string|null $spaceId 资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的外部实体归属到IoDA哪个资源空间下的边缘节点设备下，否则创建的外部实体将会归属到默认资源空间下对应的边缘节点下,对应于IoDA的app_id.
    *
    * @return $this
    */
    public function setSpaceId($spaceId)
    {
        $this->container['spaceId'] = $spaceId;
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

