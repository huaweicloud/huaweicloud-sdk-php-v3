<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EntrypointItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EntrypointItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * masterEntrypoint  微服务引擎专享版组件的ipv4主接入地址
    * masterEntrypointIpv6  微服务引擎专享版组件的ipv6主接入地址
    * slaveEntrypoint  微服务引擎专享版组件的ipv4备接入地址
    * slaveEntrypointIpv6  微服务引擎专享版组件的ipv6备接入地址
    * type  微服务引擎专享版组件类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'masterEntrypoint' => 'string',
            'masterEntrypointIpv6' => 'string',
            'slaveEntrypoint' => 'string',
            'slaveEntrypointIpv6' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * masterEntrypoint  微服务引擎专享版组件的ipv4主接入地址
    * masterEntrypointIpv6  微服务引擎专享版组件的ipv6主接入地址
    * slaveEntrypoint  微服务引擎专享版组件的ipv4备接入地址
    * slaveEntrypointIpv6  微服务引擎专享版组件的ipv6备接入地址
    * type  微服务引擎专享版组件类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'masterEntrypoint' => null,
        'masterEntrypointIpv6' => null,
        'slaveEntrypoint' => null,
        'slaveEntrypointIpv6' => null,
        'type' => null
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
    * masterEntrypoint  微服务引擎专享版组件的ipv4主接入地址
    * masterEntrypointIpv6  微服务引擎专享版组件的ipv6主接入地址
    * slaveEntrypoint  微服务引擎专享版组件的ipv4备接入地址
    * slaveEntrypointIpv6  微服务引擎专享版组件的ipv6备接入地址
    * type  微服务引擎专享版组件类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'masterEntrypoint' => 'masterEntrypoint',
            'masterEntrypointIpv6' => 'masterEntrypointIpv6',
            'slaveEntrypoint' => 'slave_entrypoint',
            'slaveEntrypointIpv6' => 'slaveEntrypointIpv6',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * masterEntrypoint  微服务引擎专享版组件的ipv4主接入地址
    * masterEntrypointIpv6  微服务引擎专享版组件的ipv6主接入地址
    * slaveEntrypoint  微服务引擎专享版组件的ipv4备接入地址
    * slaveEntrypointIpv6  微服务引擎专享版组件的ipv6备接入地址
    * type  微服务引擎专享版组件类型
    *
    * @var string[]
    */
    protected static $setters = [
            'masterEntrypoint' => 'setMasterEntrypoint',
            'masterEntrypointIpv6' => 'setMasterEntrypointIpv6',
            'slaveEntrypoint' => 'setSlaveEntrypoint',
            'slaveEntrypointIpv6' => 'setSlaveEntrypointIpv6',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * masterEntrypoint  微服务引擎专享版组件的ipv4主接入地址
    * masterEntrypointIpv6  微服务引擎专享版组件的ipv6主接入地址
    * slaveEntrypoint  微服务引擎专享版组件的ipv4备接入地址
    * slaveEntrypointIpv6  微服务引擎专享版组件的ipv6备接入地址
    * type  微服务引擎专享版组件类型
    *
    * @var string[]
    */
    protected static $getters = [
            'masterEntrypoint' => 'getMasterEntrypoint',
            'masterEntrypointIpv6' => 'getMasterEntrypointIpv6',
            'slaveEntrypoint' => 'getSlaveEntrypoint',
            'slaveEntrypointIpv6' => 'getSlaveEntrypointIpv6',
            'type' => 'getType'
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
    const TYPE_REGISTRY = 'REGISTRY';
    const TYPE_SERVICE = 'SERVICE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_REGISTRY,
            self::TYPE_SERVICE,
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
        $this->container['masterEntrypoint'] = isset($data['masterEntrypoint']) ? $data['masterEntrypoint'] : null;
        $this->container['masterEntrypointIpv6'] = isset($data['masterEntrypointIpv6']) ? $data['masterEntrypointIpv6'] : null;
        $this->container['slaveEntrypoint'] = isset($data['slaveEntrypoint']) ? $data['slaveEntrypoint'] : null;
        $this->container['slaveEntrypointIpv6'] = isset($data['slaveEntrypointIpv6']) ? $data['slaveEntrypointIpv6'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets masterEntrypoint
    *  微服务引擎专享版组件的ipv4主接入地址
    *
    * @return string|null
    */
    public function getMasterEntrypoint()
    {
        return $this->container['masterEntrypoint'];
    }

    /**
    * Sets masterEntrypoint
    *
    * @param string|null $masterEntrypoint 微服务引擎专享版组件的ipv4主接入地址
    *
    * @return $this
    */
    public function setMasterEntrypoint($masterEntrypoint)
    {
        $this->container['masterEntrypoint'] = $masterEntrypoint;
        return $this;
    }

    /**
    * Gets masterEntrypointIpv6
    *  微服务引擎专享版组件的ipv6主接入地址
    *
    * @return string|null
    */
    public function getMasterEntrypointIpv6()
    {
        return $this->container['masterEntrypointIpv6'];
    }

    /**
    * Sets masterEntrypointIpv6
    *
    * @param string|null $masterEntrypointIpv6 微服务引擎专享版组件的ipv6主接入地址
    *
    * @return $this
    */
    public function setMasterEntrypointIpv6($masterEntrypointIpv6)
    {
        $this->container['masterEntrypointIpv6'] = $masterEntrypointIpv6;
        return $this;
    }

    /**
    * Gets slaveEntrypoint
    *  微服务引擎专享版组件的ipv4备接入地址
    *
    * @return string|null
    */
    public function getSlaveEntrypoint()
    {
        return $this->container['slaveEntrypoint'];
    }

    /**
    * Sets slaveEntrypoint
    *
    * @param string|null $slaveEntrypoint 微服务引擎专享版组件的ipv4备接入地址
    *
    * @return $this
    */
    public function setSlaveEntrypoint($slaveEntrypoint)
    {
        $this->container['slaveEntrypoint'] = $slaveEntrypoint;
        return $this;
    }

    /**
    * Gets slaveEntrypointIpv6
    *  微服务引擎专享版组件的ipv6备接入地址
    *
    * @return string|null
    */
    public function getSlaveEntrypointIpv6()
    {
        return $this->container['slaveEntrypointIpv6'];
    }

    /**
    * Sets slaveEntrypointIpv6
    *
    * @param string|null $slaveEntrypointIpv6 微服务引擎专享版组件的ipv6备接入地址
    *
    * @return $this
    */
    public function setSlaveEntrypointIpv6($slaveEntrypointIpv6)
    {
        $this->container['slaveEntrypointIpv6'] = $slaveEntrypointIpv6;
        return $this;
    }

    /**
    * Gets type
    *  微服务引擎专享版组件类型
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
    * @param string|null $type 微服务引擎专享版组件类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

