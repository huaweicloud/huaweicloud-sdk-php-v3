<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResultDetailResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResultDetailResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyword  告警事件关键字，仅用于告警白名单
    * hash  告警事件hash，仅用于告警白名单
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyword' => 'string',
            'hash' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyword  告警事件关键字，仅用于告警白名单
    * hash  告警事件hash，仅用于告警白名单
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyword' => null,
        'hash' => null
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
    * keyword  告警事件关键字，仅用于告警白名单
    * hash  告警事件hash，仅用于告警白名单
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyword' => 'keyword',
            'hash' => 'hash'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyword  告警事件关键字，仅用于告警白名单
    * hash  告警事件hash，仅用于告警白名单
    *
    * @var string[]
    */
    protected static $setters = [
            'keyword' => 'setKeyword',
            'hash' => 'setHash'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyword  告警事件关键字，仅用于告警白名单
    * hash  告警事件hash，仅用于告警白名单
    *
    * @var string[]
    */
    protected static $getters = [
            'keyword' => 'getKeyword',
            'hash' => 'getHash'
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
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['keyword']) && !preg_match("/^.*$/", $this->container['keyword'])) {
                $invalidProperties[] = "invalid value for 'keyword', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hash']) && !preg_match("/^.*$/", $this->container['hash'])) {
                $invalidProperties[] = "invalid value for 'hash', must be conform to the pattern /^.*$/.";
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
    * Gets keyword
    *  告警事件关键字，仅用于告警白名单
    *
    * @return string|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string|null $keyword 告警事件关键字，仅用于告警白名单
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
        return $this;
    }

    /**
    * Gets hash
    *  告警事件hash，仅用于告警白名单
    *
    * @return string|null
    */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
    * Sets hash
    *
    * @param string|null $hash 告警事件hash，仅用于告警白名单
    *
    * @return $this
    */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;
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

