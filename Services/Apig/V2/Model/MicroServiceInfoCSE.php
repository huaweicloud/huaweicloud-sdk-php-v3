<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MicroServiceInfoCSE implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MicroServiceInfoCSE';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineId  微服务引擎编号
    * serviceId  微服务编号
    * engineName  微服务引擎名称
    * serviceName  微服务名称
    * registerAddress  注册中心地址
    * cseAppId  微服务所属的应用
    * version  微服务的版本，已废弃，通过后端服务器组中的版本承载。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineId' => 'string',
            'serviceId' => 'string',
            'engineName' => 'string',
            'serviceName' => 'string',
            'registerAddress' => 'string',
            'cseAppId' => 'string',
            'version' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineId  微服务引擎编号
    * serviceId  微服务编号
    * engineName  微服务引擎名称
    * serviceName  微服务名称
    * registerAddress  注册中心地址
    * cseAppId  微服务所属的应用
    * version  微服务的版本，已废弃，通过后端服务器组中的版本承载。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineId' => null,
        'serviceId' => null,
        'engineName' => null,
        'serviceName' => null,
        'registerAddress' => null,
        'cseAppId' => null,
        'version' => null
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
    * engineId  微服务引擎编号
    * serviceId  微服务编号
    * engineName  微服务引擎名称
    * serviceName  微服务名称
    * registerAddress  注册中心地址
    * cseAppId  微服务所属的应用
    * version  微服务的版本，已废弃，通过后端服务器组中的版本承载。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineId' => 'engine_id',
            'serviceId' => 'service_id',
            'engineName' => 'engine_name',
            'serviceName' => 'service_name',
            'registerAddress' => 'register_address',
            'cseAppId' => 'cse_app_id',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineId  微服务引擎编号
    * serviceId  微服务编号
    * engineName  微服务引擎名称
    * serviceName  微服务名称
    * registerAddress  注册中心地址
    * cseAppId  微服务所属的应用
    * version  微服务的版本，已废弃，通过后端服务器组中的版本承载。
    *
    * @var string[]
    */
    protected static $setters = [
            'engineId' => 'setEngineId',
            'serviceId' => 'setServiceId',
            'engineName' => 'setEngineName',
            'serviceName' => 'setServiceName',
            'registerAddress' => 'setRegisterAddress',
            'cseAppId' => 'setCseAppId',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineId  微服务引擎编号
    * serviceId  微服务编号
    * engineName  微服务引擎名称
    * serviceName  微服务名称
    * registerAddress  注册中心地址
    * cseAppId  微服务所属的应用
    * version  微服务的版本，已废弃，通过后端服务器组中的版本承载。
    *
    * @var string[]
    */
    protected static $getters = [
            'engineId' => 'getEngineId',
            'serviceId' => 'getServiceId',
            'engineName' => 'getEngineName',
            'serviceName' => 'getServiceName',
            'registerAddress' => 'getRegisterAddress',
            'cseAppId' => 'getCseAppId',
            'version' => 'getVersion'
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
        $this->container['engineId'] = isset($data['engineId']) ? $data['engineId'] : null;
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['registerAddress'] = isset($data['registerAddress']) ? $data['registerAddress'] : null;
        $this->container['cseAppId'] = isset($data['cseAppId']) ? $data['cseAppId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['engineId'] === null) {
            $invalidProperties[] = "'engineId' can't be null";
        }
            if ((mb_strlen($this->container['engineId']) > 64)) {
                $invalidProperties[] = "invalid value for 'engineId', the character length must be smaller than or equal to 64.";
            }
        if ($this->container['serviceId'] === null) {
            $invalidProperties[] = "'serviceId' can't be null";
        }
            if ((mb_strlen($this->container['serviceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'serviceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
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
    * Gets engineId
    *  微服务引擎编号
    *
    * @return string
    */
    public function getEngineId()
    {
        return $this->container['engineId'];
    }

    /**
    * Sets engineId
    *
    * @param string $engineId 微服务引擎编号
    *
    * @return $this
    */
    public function setEngineId($engineId)
    {
        $this->container['engineId'] = $engineId;
        return $this;
    }

    /**
    * Gets serviceId
    *  微服务编号
    *
    * @return string
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string $serviceId 微服务编号
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets engineName
    *  微服务引擎名称
    *
    * @return string|null
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string|null $engineName 微服务引擎名称
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets serviceName
    *  微服务名称
    *
    * @return string|null
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string|null $serviceName 微服务名称
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets registerAddress
    *  注册中心地址
    *
    * @return string|null
    */
    public function getRegisterAddress()
    {
        return $this->container['registerAddress'];
    }

    /**
    * Sets registerAddress
    *
    * @param string|null $registerAddress 注册中心地址
    *
    * @return $this
    */
    public function setRegisterAddress($registerAddress)
    {
        $this->container['registerAddress'] = $registerAddress;
        return $this;
    }

    /**
    * Gets cseAppId
    *  微服务所属的应用
    *
    * @return string|null
    */
    public function getCseAppId()
    {
        return $this->container['cseAppId'];
    }

    /**
    * Sets cseAppId
    *
    * @param string|null $cseAppId 微服务所属的应用
    *
    * @return $this
    */
    public function setCseAppId($cseAppId)
    {
        $this->container['cseAppId'] = $cseAppId;
        return $this;
    }

    /**
    * Gets version
    *  微服务的版本，已废弃，通过后端服务器组中的版本承载。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 微服务的版本，已废弃，通过后端服务器组中的版本承载。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

