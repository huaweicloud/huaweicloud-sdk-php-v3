<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LbaasListeners implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LbaasListeners';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * poolId  后端云服务器组ID
    * protocolPort  后端协议号，指后端云服务器监听的端口，取值范围[1,65535]
    * weight  权重，指后端云服务器经分发得到的请求数量的比例，取值范围[0, 100]。
    * protocolVersion  指定ip协议版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'poolId' => 'string',
            'protocolPort' => 'int',
            'weight' => 'int',
            'protocolVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * poolId  后端云服务器组ID
    * protocolPort  后端协议号，指后端云服务器监听的端口，取值范围[1,65535]
    * weight  权重，指后端云服务器经分发得到的请求数量的比例，取值范围[0, 100]。
    * protocolVersion  指定ip协议版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'poolId' => null,
        'protocolPort' => 'int32',
        'weight' => 'int32',
        'protocolVersion' => null
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
    * poolId  后端云服务器组ID
    * protocolPort  后端协议号，指后端云服务器监听的端口，取值范围[1,65535]
    * weight  权重，指后端云服务器经分发得到的请求数量的比例，取值范围[0, 100]。
    * protocolVersion  指定ip协议版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'poolId' => 'pool_id',
            'protocolPort' => 'protocol_port',
            'weight' => 'weight',
            'protocolVersion' => 'protocol_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * poolId  后端云服务器组ID
    * protocolPort  后端协议号，指后端云服务器监听的端口，取值范围[1,65535]
    * weight  权重，指后端云服务器经分发得到的请求数量的比例，取值范围[0, 100]。
    * protocolVersion  指定ip协议版本
    *
    * @var string[]
    */
    protected static $setters = [
            'poolId' => 'setPoolId',
            'protocolPort' => 'setProtocolPort',
            'weight' => 'setWeight',
            'protocolVersion' => 'setProtocolVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * poolId  后端云服务器组ID
    * protocolPort  后端协议号，指后端云服务器监听的端口，取值范围[1,65535]
    * weight  权重，指后端云服务器经分发得到的请求数量的比例，取值范围[0, 100]。
    * protocolVersion  指定ip协议版本
    *
    * @var string[]
    */
    protected static $getters = [
            'poolId' => 'getPoolId',
            'protocolPort' => 'getProtocolPort',
            'weight' => 'getWeight',
            'protocolVersion' => 'getProtocolVersion'
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
    const PROTOCOL_VERSION_IPV4 = 'IPV4';
    const PROTOCOL_VERSION_IPV6 = 'IPV6';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolVersionAllowableValues()
    {
        return [
            self::PROTOCOL_VERSION_IPV4,
            self::PROTOCOL_VERSION_IPV6,
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
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['protocolVersion'] = isset($data['protocolVersion']) ? $data['protocolVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['poolId'] === null) {
            $invalidProperties[] = "'poolId' can't be null";
        }
            if (!preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['poolId'])) {
                $invalidProperties[] = "invalid value for 'poolId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
        if ($this->container['protocolPort'] === null) {
            $invalidProperties[] = "'protocolPort' can't be null";
        }
            if (($this->container['protocolPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'protocolPort', must be smaller than or equal to 65535.";
            }
            if (($this->container['protocolPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'protocolPort', must be bigger than or equal to 1.";
            }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
            $allowedValues = $this->getProtocolVersionAllowableValues();
                if (!is_null($this->container['protocolVersion']) && !in_array($this->container['protocolVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocolVersion', must be one of '%s'",
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
    * Gets poolId
    *  后端云服务器组ID
    *
    * @return string
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string $poolId 后端云服务器组ID
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets protocolPort
    *  后端协议号，指后端云服务器监听的端口，取值范围[1,65535]
    *
    * @return int
    */
    public function getProtocolPort()
    {
        return $this->container['protocolPort'];
    }

    /**
    * Sets protocolPort
    *
    * @param int $protocolPort 后端协议号，指后端云服务器监听的端口，取值范围[1,65535]
    *
    * @return $this
    */
    public function setProtocolPort($protocolPort)
    {
        $this->container['protocolPort'] = $protocolPort;
        return $this;
    }

    /**
    * Gets weight
    *  权重，指后端云服务器经分发得到的请求数量的比例，取值范围[0, 100]。
    *
    * @return int
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int $weight 权重，指后端云服务器经分发得到的请求数量的比例，取值范围[0, 100]。
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets protocolVersion
    *  指定ip协议版本
    *
    * @return string|null
    */
    public function getProtocolVersion()
    {
        return $this->container['protocolVersion'];
    }

    /**
    * Sets protocolVersion
    *
    * @param string|null $protocolVersion 指定ip协议版本
    *
    * @return $this
    */
    public function setProtocolVersion($protocolVersion)
    {
        $this->container['protocolVersion'] = $protocolVersion;
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

