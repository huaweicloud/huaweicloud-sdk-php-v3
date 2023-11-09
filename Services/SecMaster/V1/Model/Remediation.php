<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Remediation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Remediation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recommendation  处理建议，最长512个字符。
    * url  链接，指向该事件的一般修复信息。该URL必须可以从公网访问，不需要提供凭证。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recommendation' => 'string',
            'url' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recommendation  处理建议，最长512个字符。
    * url  链接，指向该事件的一般修复信息。该URL必须可以从公网访问，不需要提供凭证。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recommendation' => null,
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
    * recommendation  处理建议，最长512个字符。
    * url  链接，指向该事件的一般修复信息。该URL必须可以从公网访问，不需要提供凭证。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recommendation' => 'recommendation',
            'url' => 'url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recommendation  处理建议，最长512个字符。
    * url  链接，指向该事件的一般修复信息。该URL必须可以从公网访问，不需要提供凭证。
    *
    * @var string[]
    */
    protected static $setters = [
            'recommendation' => 'setRecommendation',
            'url' => 'setUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recommendation  处理建议，最长512个字符。
    * url  链接，指向该事件的一般修复信息。该URL必须可以从公网访问，不需要提供凭证。
    *
    * @var string[]
    */
    protected static $getters = [
            'recommendation' => 'getRecommendation',
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
        $this->container['recommendation'] = isset($data['recommendation']) ? $data['recommendation'] : null;
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
        if ($this->container['recommendation'] === null) {
            $invalidProperties[] = "'recommendation' can't be null";
        }
            if ((mb_strlen($this->container['recommendation']) > 512)) {
                $invalidProperties[] = "invalid value for 'recommendation', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['recommendation']) < 1)) {
                $invalidProperties[] = "invalid value for 'recommendation', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 128)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 1)) {
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
    * Gets recommendation
    *  处理建议，最长512个字符。
    *
    * @return string
    */
    public function getRecommendation()
    {
        return $this->container['recommendation'];
    }

    /**
    * Sets recommendation
    *
    * @param string $recommendation 处理建议，最长512个字符。
    *
    * @return $this
    */
    public function setRecommendation($recommendation)
    {
        $this->container['recommendation'] = $recommendation;
        return $this;
    }

    /**
    * Gets url
    *  链接，指向该事件的一般修复信息。该URL必须可以从公网访问，不需要提供凭证。
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
    * @param string|null $url 链接，指向该事件的一般修复信息。该URL必须可以从公网访问，不需要提供凭证。
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

