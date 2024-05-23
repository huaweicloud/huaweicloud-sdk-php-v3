<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IflytekAiuiConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IflytekAiuiConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appId  AIUI应用ID。
    * appKey  AIUI应用密钥。
    * apiSecret  AIUI API密钥。
    * isProduction  是否为正式环境
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appId' => 'string',
            'appKey' => 'string',
            'apiSecret' => 'string',
            'isProduction' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appId  AIUI应用ID。
    * appKey  AIUI应用密钥。
    * apiSecret  AIUI API密钥。
    * isProduction  是否为正式环境
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appId' => null,
        'appKey' => null,
        'apiSecret' => null,
        'isProduction' => null
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
    * appId  AIUI应用ID。
    * appKey  AIUI应用密钥。
    * apiSecret  AIUI API密钥。
    * isProduction  是否为正式环境
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appId' => 'app_id',
            'appKey' => 'app_key',
            'apiSecret' => 'api_secret',
            'isProduction' => 'is_production'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appId  AIUI应用ID。
    * appKey  AIUI应用密钥。
    * apiSecret  AIUI API密钥。
    * isProduction  是否为正式环境
    *
    * @var string[]
    */
    protected static $setters = [
            'appId' => 'setAppId',
            'appKey' => 'setAppKey',
            'apiSecret' => 'setApiSecret',
            'isProduction' => 'setIsProduction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appId  AIUI应用ID。
    * appKey  AIUI应用密钥。
    * apiSecret  AIUI API密钥。
    * isProduction  是否为正式环境
    *
    * @var string[]
    */
    protected static $getters = [
            'appId' => 'getAppId',
            'appKey' => 'getAppKey',
            'apiSecret' => 'getApiSecret',
            'isProduction' => 'getIsProduction'
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
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['appKey'] = isset($data['appKey']) ? $data['appKey'] : null;
        $this->container['apiSecret'] = isset($data['apiSecret']) ? $data['apiSecret'] : null;
        $this->container['isProduction'] = isset($data['isProduction']) ? $data['isProduction'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) > 64)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) < 1)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appKey']) && (mb_strlen($this->container['appKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'appKey', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appKey']) && (mb_strlen($this->container['appKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'appKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['apiSecret']) && (mb_strlen($this->container['apiSecret']) > 64)) {
                $invalidProperties[] = "invalid value for 'apiSecret', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['apiSecret']) && (mb_strlen($this->container['apiSecret']) < 1)) {
                $invalidProperties[] = "invalid value for 'apiSecret', the character length must be bigger than or equal to 1.";
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
    * Gets appId
    *  AIUI应用ID。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId AIUI应用ID。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets appKey
    *  AIUI应用密钥。
    *
    * @return string|null
    */
    public function getAppKey()
    {
        return $this->container['appKey'];
    }

    /**
    * Sets appKey
    *
    * @param string|null $appKey AIUI应用密钥。
    *
    * @return $this
    */
    public function setAppKey($appKey)
    {
        $this->container['appKey'] = $appKey;
        return $this;
    }

    /**
    * Gets apiSecret
    *  AIUI API密钥。
    *
    * @return string|null
    */
    public function getApiSecret()
    {
        return $this->container['apiSecret'];
    }

    /**
    * Sets apiSecret
    *
    * @param string|null $apiSecret AIUI API密钥。
    *
    * @return $this
    */
    public function setApiSecret($apiSecret)
    {
        $this->container['apiSecret'] = $apiSecret;
        return $this;
    }

    /**
    * Gets isProduction
    *  是否为正式环境
    *
    * @return bool|null
    */
    public function getIsProduction()
    {
        return $this->container['isProduction'];
    }

    /**
    * Sets isProduction
    *
    * @param bool|null $isProduction 是否为正式环境
    *
    * @return $this
    */
    public function setIsProduction($isProduction)
    {
        $this->container['isProduction'] = $isProduction;
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

