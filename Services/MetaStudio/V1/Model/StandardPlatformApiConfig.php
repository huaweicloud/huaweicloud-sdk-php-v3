<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StandardPlatformApiConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StandardPlatformApiConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apiType  API类型。 * PRODUCT_QUERY: 查询商品 * LIVE_EVENT_CALLBACK: 直播事件回调
    * url  URL。仅支持HTTPS形式URL
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apiType' => 'string',
            'url' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apiType  API类型。 * PRODUCT_QUERY: 查询商品 * LIVE_EVENT_CALLBACK: 直播事件回调
    * url  URL。仅支持HTTPS形式URL
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apiType' => null,
        'url' => null
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
    * apiType  API类型。 * PRODUCT_QUERY: 查询商品 * LIVE_EVENT_CALLBACK: 直播事件回调
    * url  URL。仅支持HTTPS形式URL
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apiType' => 'api_type',
            'url' => 'url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apiType  API类型。 * PRODUCT_QUERY: 查询商品 * LIVE_EVENT_CALLBACK: 直播事件回调
    * url  URL。仅支持HTTPS形式URL
    *
    * @var string[]
    */
    protected static $setters = [
            'apiType' => 'setApiType',
            'url' => 'setUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apiType  API类型。 * PRODUCT_QUERY: 查询商品 * LIVE_EVENT_CALLBACK: 直播事件回调
    * url  URL。仅支持HTTPS形式URL
    *
    * @var string[]
    */
    protected static $getters = [
            'apiType' => 'getApiType',
            'url' => 'getUrl'
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
    const API_TYPE_PRODUCT_QUERY = 'PRODUCT_QUERY';
    const API_TYPE_LIVE_EVENT_CALLBACK = 'LIVE_EVENT_CALLBACK';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApiTypeAllowableValues()
    {
        return [
            self::API_TYPE_PRODUCT_QUERY,
            self::API_TYPE_LIVE_EVENT_CALLBACK,
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
        $this->container['apiType'] = isset($data['apiType']) ? $data['apiType'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['apiType'] === null) {
            $invalidProperties[] = "'apiType' can't be null";
        }
            $allowedValues = $this->getApiTypeAllowableValues();
                if (!is_null($this->container['apiType']) && !in_array($this->container['apiType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'apiType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['apiType']) > 32)) {
                $invalidProperties[] = "invalid value for 'apiType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['apiType']) < 1)) {
                $invalidProperties[] = "invalid value for 'apiType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
            if ((mb_strlen($this->container['url']) > 2048)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['url']) < 1)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
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
    * Gets apiType
    *  API类型。 * PRODUCT_QUERY: 查询商品 * LIVE_EVENT_CALLBACK: 直播事件回调
    *
    * @return string
    */
    public function getApiType()
    {
        return $this->container['apiType'];
    }

    /**
    * Sets apiType
    *
    * @param string $apiType API类型。 * PRODUCT_QUERY: 查询商品 * LIVE_EVENT_CALLBACK: 直播事件回调
    *
    * @return $this
    */
    public function setApiType($apiType)
    {
        $this->container['apiType'] = $apiType;
        return $this;
    }

    /**
    * Gets url
    *  URL。仅支持HTTPS形式URL
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url URL。仅支持HTTPS形式URL
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
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

