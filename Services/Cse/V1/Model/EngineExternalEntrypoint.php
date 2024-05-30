<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EngineExternalEntrypoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EngineExternalEntrypoint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * externalAddress  微服务引擎暴露的IP地址。
    * publicAddress  微服务引擎的公网地址。
    * serviceEndpoint  微服务引擎组件的访问地址。
    * publicServiceEndpoint  微服务引擎组件的公网地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'externalAddress' => 'string',
            'publicAddress' => 'string',
            'serviceEndpoint' => 'map[string,\HuaweiCloud\SDK\Cse\V1\Model\EntrypointItem]',
            'publicServiceEndpoint' => 'map[string,\HuaweiCloud\SDK\Cse\V1\Model\EntrypointItem]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * externalAddress  微服务引擎暴露的IP地址。
    * publicAddress  微服务引擎的公网地址。
    * serviceEndpoint  微服务引擎组件的访问地址。
    * publicServiceEndpoint  微服务引擎组件的公网地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'externalAddress' => null,
        'publicAddress' => null,
        'serviceEndpoint' => null,
        'publicServiceEndpoint' => null
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
    * externalAddress  微服务引擎暴露的IP地址。
    * publicAddress  微服务引擎的公网地址。
    * serviceEndpoint  微服务引擎组件的访问地址。
    * publicServiceEndpoint  微服务引擎组件的公网地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'externalAddress' => 'externalAddress',
            'publicAddress' => 'publicAddress',
            'serviceEndpoint' => 'serviceEndpoint',
            'publicServiceEndpoint' => 'publicServiceEndpoint'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * externalAddress  微服务引擎暴露的IP地址。
    * publicAddress  微服务引擎的公网地址。
    * serviceEndpoint  微服务引擎组件的访问地址。
    * publicServiceEndpoint  微服务引擎组件的公网地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'externalAddress' => 'setExternalAddress',
            'publicAddress' => 'setPublicAddress',
            'serviceEndpoint' => 'setServiceEndpoint',
            'publicServiceEndpoint' => 'setPublicServiceEndpoint'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * externalAddress  微服务引擎暴露的IP地址。
    * publicAddress  微服务引擎的公网地址。
    * serviceEndpoint  微服务引擎组件的访问地址。
    * publicServiceEndpoint  微服务引擎组件的公网地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'externalAddress' => 'getExternalAddress',
            'publicAddress' => 'getPublicAddress',
            'serviceEndpoint' => 'getServiceEndpoint',
            'publicServiceEndpoint' => 'getPublicServiceEndpoint'
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
        $this->container['externalAddress'] = isset($data['externalAddress']) ? $data['externalAddress'] : null;
        $this->container['publicAddress'] = isset($data['publicAddress']) ? $data['publicAddress'] : null;
        $this->container['serviceEndpoint'] = isset($data['serviceEndpoint']) ? $data['serviceEndpoint'] : null;
        $this->container['publicServiceEndpoint'] = isset($data['publicServiceEndpoint']) ? $data['publicServiceEndpoint'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets externalAddress
    *  微服务引擎暴露的IP地址。
    *
    * @return string|null
    */
    public function getExternalAddress()
    {
        return $this->container['externalAddress'];
    }

    /**
    * Sets externalAddress
    *
    * @param string|null $externalAddress 微服务引擎暴露的IP地址。
    *
    * @return $this
    */
    public function setExternalAddress($externalAddress)
    {
        $this->container['externalAddress'] = $externalAddress;
        return $this;
    }

    /**
    * Gets publicAddress
    *  微服务引擎的公网地址。
    *
    * @return string|null
    */
    public function getPublicAddress()
    {
        return $this->container['publicAddress'];
    }

    /**
    * Sets publicAddress
    *
    * @param string|null $publicAddress 微服务引擎的公网地址。
    *
    * @return $this
    */
    public function setPublicAddress($publicAddress)
    {
        $this->container['publicAddress'] = $publicAddress;
        return $this;
    }

    /**
    * Gets serviceEndpoint
    *  微服务引擎组件的访问地址。
    *
    * @return map[string,\HuaweiCloud\SDK\Cse\V1\Model\EntrypointItem]|null
    */
    public function getServiceEndpoint()
    {
        return $this->container['serviceEndpoint'];
    }

    /**
    * Sets serviceEndpoint
    *
    * @param map[string,\HuaweiCloud\SDK\Cse\V1\Model\EntrypointItem]|null $serviceEndpoint 微服务引擎组件的访问地址。
    *
    * @return $this
    */
    public function setServiceEndpoint($serviceEndpoint)
    {
        $this->container['serviceEndpoint'] = $serviceEndpoint;
        return $this;
    }

    /**
    * Gets publicServiceEndpoint
    *  微服务引擎组件的公网地址。
    *
    * @return map[string,\HuaweiCloud\SDK\Cse\V1\Model\EntrypointItem]|null
    */
    public function getPublicServiceEndpoint()
    {
        return $this->container['publicServiceEndpoint'];
    }

    /**
    * Sets publicServiceEndpoint
    *
    * @param map[string,\HuaweiCloud\SDK\Cse\V1\Model\EntrypointItem]|null $publicServiceEndpoint 微服务引擎组件的公网地址。
    *
    * @return $this
    */
    public function setPublicServiceEndpoint($publicServiceEndpoint)
    {
        $this->container['publicServiceEndpoint'] = $publicServiceEndpoint;
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

