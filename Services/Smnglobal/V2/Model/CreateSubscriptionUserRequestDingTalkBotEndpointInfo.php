<?php

namespace HuaweiCloud\SDK\Smnglobal\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSubscriptionUserRequestDingTalkBotEndpointInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSubscriptionUserRequestDingTalkBotEndpointInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endpoint  钉钉企业用户的userId。
    * appKey  个人钉钉appKey字段。
    * appSecret  个人钉钉appSecret字段。
    * robotCode  个人钉钉robotCode字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endpoint' => 'string',
            'appKey' => 'string',
            'appSecret' => 'string',
            'robotCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endpoint  钉钉企业用户的userId。
    * appKey  个人钉钉appKey字段。
    * appSecret  个人钉钉appSecret字段。
    * robotCode  个人钉钉robotCode字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'endpoint' => null,
        'appKey' => null,
        'appSecret' => null,
        'robotCode' => null
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
    * endpoint  钉钉企业用户的userId。
    * appKey  个人钉钉appKey字段。
    * appSecret  个人钉钉appSecret字段。
    * robotCode  个人钉钉robotCode字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endpoint' => 'endpoint',
            'appKey' => 'app_key',
            'appSecret' => 'app_secret',
            'robotCode' => 'robot_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endpoint  钉钉企业用户的userId。
    * appKey  个人钉钉appKey字段。
    * appSecret  个人钉钉appSecret字段。
    * robotCode  个人钉钉robotCode字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'endpoint' => 'setEndpoint',
            'appKey' => 'setAppKey',
            'appSecret' => 'setAppSecret',
            'robotCode' => 'setRobotCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endpoint  钉钉企业用户的userId。
    * appKey  个人钉钉appKey字段。
    * appSecret  个人钉钉appSecret字段。
    * robotCode  个人钉钉robotCode字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'endpoint' => 'getEndpoint',
            'appKey' => 'getAppKey',
            'appSecret' => 'getAppSecret',
            'robotCode' => 'getRobotCode'
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
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['appKey'] = isset($data['appKey']) ? $data['appKey'] : null;
        $this->container['appSecret'] = isset($data['appSecret']) ? $data['appSecret'] : null;
        $this->container['robotCode'] = isset($data['robotCode']) ? $data['robotCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['endpoint'] === null) {
            $invalidProperties[] = "'endpoint' can't be null";
        }
        if ($this->container['appKey'] === null) {
            $invalidProperties[] = "'appKey' can't be null";
        }
        if ($this->container['appSecret'] === null) {
            $invalidProperties[] = "'appSecret' can't be null";
        }
        if ($this->container['robotCode'] === null) {
            $invalidProperties[] = "'robotCode' can't be null";
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
    * Gets endpoint
    *  钉钉企业用户的userId。
    *
    * @return string
    */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
    * Sets endpoint
    *
    * @param string $endpoint 钉钉企业用户的userId。
    *
    * @return $this
    */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Gets appKey
    *  个人钉钉appKey字段。
    *
    * @return string
    */
    public function getAppKey()
    {
        return $this->container['appKey'];
    }

    /**
    * Sets appKey
    *
    * @param string $appKey 个人钉钉appKey字段。
    *
    * @return $this
    */
    public function setAppKey($appKey)
    {
        $this->container['appKey'] = $appKey;
        return $this;
    }

    /**
    * Gets appSecret
    *  个人钉钉appSecret字段。
    *
    * @return string
    */
    public function getAppSecret()
    {
        return $this->container['appSecret'];
    }

    /**
    * Sets appSecret
    *
    * @param string $appSecret 个人钉钉appSecret字段。
    *
    * @return $this
    */
    public function setAppSecret($appSecret)
    {
        $this->container['appSecret'] = $appSecret;
        return $this;
    }

    /**
    * Gets robotCode
    *  个人钉钉robotCode字段。
    *
    * @return string
    */
    public function getRobotCode()
    {
        return $this->container['robotCode'];
    }

    /**
    * Sets robotCode
    *
    * @param string $robotCode 个人钉钉robotCode字段。
    *
    * @return $this
    */
    public function setRobotCode($robotCode)
    {
        $this->container['robotCode'] = $robotCode;
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

