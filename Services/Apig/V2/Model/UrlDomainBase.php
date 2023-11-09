<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UrlDomainBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UrlDomainBase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * minSslVersion  最小ssl协议版本号。支持TLSv1.1或TLSv1.2
    * isHttpRedirectToHttps  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'minSslVersion' => 'string',
            'isHttpRedirectToHttps' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * minSslVersion  最小ssl协议版本号。支持TLSv1.1或TLSv1.2
    * isHttpRedirectToHttps  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'minSslVersion' => null,
        'isHttpRedirectToHttps' => null
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
    * minSslVersion  最小ssl协议版本号。支持TLSv1.1或TLSv1.2
    * isHttpRedirectToHttps  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'minSslVersion' => 'min_ssl_version',
            'isHttpRedirectToHttps' => 'is_http_redirect_to_https'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * minSslVersion  最小ssl协议版本号。支持TLSv1.1或TLSv1.2
    * isHttpRedirectToHttps  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    *
    * @var string[]
    */
    protected static $setters = [
            'minSslVersion' => 'setMinSslVersion',
            'isHttpRedirectToHttps' => 'setIsHttpRedirectToHttps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * minSslVersion  最小ssl协议版本号。支持TLSv1.1或TLSv1.2
    * isHttpRedirectToHttps  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    *
    * @var string[]
    */
    protected static $getters = [
            'minSslVersion' => 'getMinSslVersion',
            'isHttpRedirectToHttps' => 'getIsHttpRedirectToHttps'
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
    const MIN_SSL_VERSION_TL_SV1_1 = 'TLSv1.1';
    const MIN_SSL_VERSION_TL_SV1_2 = 'TLSv1.2';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMinSslVersionAllowableValues()
    {
        return [
            self::MIN_SSL_VERSION_TL_SV1_1,
            self::MIN_SSL_VERSION_TL_SV1_2,
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
        $this->container['minSslVersion'] = isset($data['minSslVersion']) ? $data['minSslVersion'] : null;
        $this->container['isHttpRedirectToHttps'] = isset($data['isHttpRedirectToHttps']) ? $data['isHttpRedirectToHttps'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getMinSslVersionAllowableValues();
                if (!is_null($this->container['minSslVersion']) && !in_array($this->container['minSslVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'minSslVersion', must be one of '%s'",
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
    * Gets minSslVersion
    *  最小ssl协议版本号。支持TLSv1.1或TLSv1.2
    *
    * @return string|null
    */
    public function getMinSslVersion()
    {
        return $this->container['minSslVersion'];
    }

    /**
    * Sets minSslVersion
    *
    * @param string|null $minSslVersion 最小ssl协议版本号。支持TLSv1.1或TLSv1.2
    *
    * @return $this
    */
    public function setMinSslVersion($minSslVersion)
    {
        $this->container['minSslVersion'] = $minSslVersion;
        return $this;
    }

    /**
    * Gets isHttpRedirectToHttps
    *  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    *
    * @return bool|null
    */
    public function getIsHttpRedirectToHttps()
    {
        return $this->container['isHttpRedirectToHttps'];
    }

    /**
    * Sets isHttpRedirectToHttps
    *
    * @param bool|null $isHttpRedirectToHttps 是否开启http到https的重定向，false为关闭，true为开启，默认为false
    *
    * @return $this
    */
    public function setIsHttpRedirectToHttps($isHttpRedirectToHttps)
    {
        $this->container['isHttpRedirectToHttps'] = $isHttpRedirectToHttps;
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

