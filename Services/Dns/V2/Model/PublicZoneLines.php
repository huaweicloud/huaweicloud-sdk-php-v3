<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicZoneLines implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublicZoneLines';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * line  线路ID。
    * lineName  线路名称。
    * createTime  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'line' => 'string',
            'lineName' => 'string',
            'createTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * line  线路ID。
    * lineName  线路名称。
    * createTime  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'line' => null,
        'lineName' => null,
        'createTime' => null
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
    * line  线路ID。
    * lineName  线路名称。
    * createTime  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'line' => 'line',
            'lineName' => 'line_name',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * line  线路ID。
    * lineName  线路名称。
    * createTime  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @var string[]
    */
    protected static $setters = [
            'line' => 'setLine',
            'lineName' => 'setLineName',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * line  线路ID。
    * lineName  线路名称。
    * createTime  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @var string[]
    */
    protected static $getters = [
            'line' => 'getLine',
            'lineName' => 'getLineName',
            'createTime' => 'getCreateTime'
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
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['lineName'] = isset($data['lineName']) ? $data['lineName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    * Gets line
    *  线路ID。
    *
    * @return string|null
    */
    public function getLine()
    {
        return $this->container['line'];
    }

    /**
    * Sets line
    *
    * @param string|null $line 线路ID。
    *
    * @return $this
    */
    public function setLine($line)
    {
        $this->container['line'] = $line;
        return $this;
    }

    /**
    * Gets lineName
    *  线路名称。
    *
    * @return string|null
    */
    public function getLineName()
    {
        return $this->container['lineName'];
    }

    /**
    * Sets lineName
    *
    * @param string|null $lineName 线路名称。
    *
    * @return $this
    */
    public function setLineName($lineName)
    {
        $this->container['lineName'] = $lineName;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

