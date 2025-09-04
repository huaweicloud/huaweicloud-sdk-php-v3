<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopOriginUrlSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopOriginUrlSummary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * originUrl  回源url名称
    * value  对应查询类型的值。（流量单位：Byte）
    * ratio  该origin url的流量(或请求数)占当前查询条件下总流量(或请求数)的比例。保留4位小数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'originUrl' => 'string',
            'value' => 'int',
            'ratio' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * originUrl  回源url名称
    * value  对应查询类型的值。（流量单位：Byte）
    * ratio  该origin url的流量(或请求数)占当前查询条件下总流量(或请求数)的比例。保留4位小数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'originUrl' => null,
        'value' => 'int64',
        'ratio' => 'double'
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
    * originUrl  回源url名称
    * value  对应查询类型的值。（流量单位：Byte）
    * ratio  该origin url的流量(或请求数)占当前查询条件下总流量(或请求数)的比例。保留4位小数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'originUrl' => 'origin_url',
            'value' => 'value',
            'ratio' => 'ratio'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * originUrl  回源url名称
    * value  对应查询类型的值。（流量单位：Byte）
    * ratio  该origin url的流量(或请求数)占当前查询条件下总流量(或请求数)的比例。保留4位小数
    *
    * @var string[]
    */
    protected static $setters = [
            'originUrl' => 'setOriginUrl',
            'value' => 'setValue',
            'ratio' => 'setRatio'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * originUrl  回源url名称
    * value  对应查询类型的值。（流量单位：Byte）
    * ratio  该origin url的流量(或请求数)占当前查询条件下总流量(或请求数)的比例。保留4位小数
    *
    * @var string[]
    */
    protected static $getters = [
            'originUrl' => 'getOriginUrl',
            'value' => 'getValue',
            'ratio' => 'getRatio'
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
        $this->container['originUrl'] = isset($data['originUrl']) ? $data['originUrl'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['ratio'] = isset($data['ratio']) ? $data['ratio'] : null;
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
    * Gets originUrl
    *  回源url名称
    *
    * @return string|null
    */
    public function getOriginUrl()
    {
        return $this->container['originUrl'];
    }

    /**
    * Sets originUrl
    *
    * @param string|null $originUrl 回源url名称
    *
    * @return $this
    */
    public function setOriginUrl($originUrl)
    {
        $this->container['originUrl'] = $originUrl;
        return $this;
    }

    /**
    * Gets value
    *  对应查询类型的值。（流量单位：Byte）
    *
    * @return int|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param int|null $value 对应查询类型的值。（流量单位：Byte）
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets ratio
    *  该origin url的流量(或请求数)占当前查询条件下总流量(或请求数)的比例。保留4位小数
    *
    * @return double|null
    */
    public function getRatio()
    {
        return $this->container['ratio'];
    }

    /**
    * Sets ratio
    *
    * @param double|null $ratio 该origin url的流量(或请求数)占当前查询条件下总流量(或请求数)的比例。保留4位小数
    *
    * @return $this
    */
    public function setRatio($ratio)
    {
        $this->container['ratio'] = $ratio;
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

