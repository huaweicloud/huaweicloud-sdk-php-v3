<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DateTitleDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DateTitleDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * day  时间（天）
    * commitsCount  提交数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'day' => 'string',
            'commitsCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * day  时间（天）
    * commitsCount  提交数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'day' => null,
        'commitsCount' => null
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
    * day  时间（天）
    * commitsCount  提交数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'day' => 'day',
            'commitsCount' => 'commits_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * day  时间（天）
    * commitsCount  提交数量
    *
    * @var string[]
    */
    protected static $setters = [
            'day' => 'setDay',
            'commitsCount' => 'setCommitsCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * day  时间（天）
    * commitsCount  提交数量
    *
    * @var string[]
    */
    protected static $getters = [
            'day' => 'getDay',
            'commitsCount' => 'getCommitsCount'
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
        $this->container['day'] = isset($data['day']) ? $data['day'] : null;
        $this->container['commitsCount'] = isset($data['commitsCount']) ? $data['commitsCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['day']) && (mb_strlen($this->container['day']) > 2000)) {
                $invalidProperties[] = "invalid value for 'day', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['day']) && (mb_strlen($this->container['day']) < 1)) {
                $invalidProperties[] = "invalid value for 'day', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['commitsCount']) && ($this->container['commitsCount'] > 100000)) {
                $invalidProperties[] = "invalid value for 'commitsCount', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['commitsCount']) && ($this->container['commitsCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'commitsCount', must be bigger than or equal to 0.";
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
    * Gets day
    *  时间（天）
    *
    * @return string|null
    */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
    * Sets day
    *
    * @param string|null $day 时间（天）
    *
    * @return $this
    */
    public function setDay($day)
    {
        $this->container['day'] = $day;
        return $this;
    }

    /**
    * Gets commitsCount
    *  提交数量
    *
    * @return int|null
    */
    public function getCommitsCount()
    {
        return $this->container['commitsCount'];
    }

    /**
    * Sets commitsCount
    *
    * @param int|null $commitsCount 提交数量
    *
    * @return $this
    */
    public function setCommitsCount($commitsCount)
    {
        $this->container['commitsCount'] = $commitsCount;
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

