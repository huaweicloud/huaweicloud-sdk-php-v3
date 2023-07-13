<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KeystoneListEndpointsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KeystoneListEndpointsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * interface  终端节点平面。可能取值为：public、internal或admin。public： 用户可在公共网络接口上看到。internal：用户可在内部网络接口上看到。admin：管理员可以在安全的网络接口上看到。
    * serviceId  服务ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'interface' => 'string',
            'serviceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * interface  终端节点平面。可能取值为：public、internal或admin。public： 用户可在公共网络接口上看到。internal：用户可在内部网络接口上看到。admin：管理员可以在安全的网络接口上看到。
    * serviceId  服务ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'interface' => null,
        'serviceId' => null
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
    * interface  终端节点平面。可能取值为：public、internal或admin。public： 用户可在公共网络接口上看到。internal：用户可在内部网络接口上看到。admin：管理员可以在安全的网络接口上看到。
    * serviceId  服务ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'interface' => 'interface',
            'serviceId' => 'service_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * interface  终端节点平面。可能取值为：public、internal或admin。public： 用户可在公共网络接口上看到。internal：用户可在内部网络接口上看到。admin：管理员可以在安全的网络接口上看到。
    * serviceId  服务ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'interface' => 'setInterface',
            'serviceId' => 'setServiceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * interface  终端节点平面。可能取值为：public、internal或admin。public： 用户可在公共网络接口上看到。internal：用户可在内部网络接口上看到。admin：管理员可以在安全的网络接口上看到。
    * serviceId  服务ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'interface' => 'getInterface',
            'serviceId' => 'getServiceId'
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
    const MODEL_INTERFACE__PUBLIC = 'public';
    const MODEL_INTERFACE_INTERNAL = 'internal';
    const MODEL_INTERFACE_ADMIN = 'admin';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInterfaceAllowableValues()
    {
        return [
            self::MODEL_INTERFACE__PUBLIC,
            self::MODEL_INTERFACE_INTERNAL,
            self::MODEL_INTERFACE_ADMIN,
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
        $this->container['interface'] = isset($data['interface']) ? $data['interface'] : null;
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getInterfaceAllowableValues();
                if (!is_null($this->container['interface']) && !in_array($this->container['interface'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'interface', must be one of '%s'",
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
    * Gets interface
    *  终端节点平面。可能取值为：public、internal或admin。public： 用户可在公共网络接口上看到。internal：用户可在内部网络接口上看到。admin：管理员可以在安全的网络接口上看到。
    *
    * @return string|null
    */
    public function getInterface()
    {
        return $this->container['interface'];
    }

    /**
    * Sets interface
    *
    * @param string|null $interface 终端节点平面。可能取值为：public、internal或admin。public： 用户可在公共网络接口上看到。internal：用户可在内部网络接口上看到。admin：管理员可以在安全的网络接口上看到。
    *
    * @return $this
    */
    public function setInterface($interface)
    {
        $this->container['interface'] = $interface;
        return $this;
    }

    /**
    * Gets serviceId
    *  服务ID。
    *
    * @return string|null
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string|null $serviceId 服务ID。
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
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

