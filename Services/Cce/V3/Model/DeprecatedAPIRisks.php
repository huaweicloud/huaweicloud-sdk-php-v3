<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeprecatedAPIRisks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'deprecatedAPIRisks';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  请求路径，如/apis/policy/v1beta1/podsecuritypolicies
    * userAgent  客户端信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'userAgent' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  请求路径，如/apis/policy/v1beta1/podsecuritypolicies
    * userAgent  客户端信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'userAgent' => null
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
    * url  请求路径，如/apis/policy/v1beta1/podsecuritypolicies
    * userAgent  客户端信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'userAgent' => 'userAgent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  请求路径，如/apis/policy/v1beta1/podsecuritypolicies
    * userAgent  客户端信息
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'userAgent' => 'setUserAgent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  请求路径，如/apis/policy/v1beta1/podsecuritypolicies
    * userAgent  客户端信息
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'userAgent' => 'getUserAgent'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['userAgent'] = isset($data['userAgent']) ? $data['userAgent'] : null;
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
    * Gets url
    *  请求路径，如/apis/policy/v1beta1/podsecuritypolicies
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 请求路径，如/apis/policy/v1beta1/podsecuritypolicies
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets userAgent
    *  客户端信息
    *
    * @return string|null
    */
    public function getUserAgent()
    {
        return $this->container['userAgent'];
    }

    /**
    * Sets userAgent
    *
    * @param string|null $userAgent 客户端信息
    *
    * @return $this
    */
    public function setUserAgent($userAgent)
    {
        $this->container['userAgent'] = $userAgent;
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

