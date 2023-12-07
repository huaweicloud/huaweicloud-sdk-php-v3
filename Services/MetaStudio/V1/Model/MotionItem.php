<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MotionItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MotionItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timestamp  时间戳，相对时间戳。  单位秒。  保留3位小数。
    * root  root 3维坐标。
    * joints  75个关节点，四元数。
    * eyes  眼动数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timestamp' => 'float',
            'root' => 'float[]',
            'joints' => 'float[]',
            'eyes' => 'float[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timestamp  时间戳，相对时间戳。  单位秒。  保留3位小数。
    * root  root 3维坐标。
    * joints  75个关节点，四元数。
    * eyes  眼动数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timestamp' => 'float',
        'root' => 'float',
        'joints' => 'float',
        'eyes' => 'float'
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
    * timestamp  时间戳，相对时间戳。  单位秒。  保留3位小数。
    * root  root 3维坐标。
    * joints  75个关节点，四元数。
    * eyes  眼动数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timestamp' => 'timestamp',
            'root' => 'root',
            'joints' => 'joints',
            'eyes' => 'eyes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timestamp  时间戳，相对时间戳。  单位秒。  保留3位小数。
    * root  root 3维坐标。
    * joints  75个关节点，四元数。
    * eyes  眼动数据
    *
    * @var string[]
    */
    protected static $setters = [
            'timestamp' => 'setTimestamp',
            'root' => 'setRoot',
            'joints' => 'setJoints',
            'eyes' => 'setEyes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timestamp  时间戳，相对时间戳。  单位秒。  保留3位小数。
    * root  root 3维坐标。
    * joints  75个关节点，四元数。
    * eyes  眼动数据
    *
    * @var string[]
    */
    protected static $getters = [
            'timestamp' => 'getTimestamp',
            'root' => 'getRoot',
            'joints' => 'getJoints',
            'eyes' => 'getEyes'
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
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['root'] = isset($data['root']) ? $data['root'] : null;
        $this->container['joints'] = isset($data['joints']) ? $data['joints'] : null;
        $this->container['eyes'] = isset($data['eyes']) ? $data['eyes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['timestamp']) && ($this->container['timestamp'] > 7.2E+3)) {
                $invalidProperties[] = "invalid value for 'timestamp', must be smaller than or equal to 7.2E+3.";
            }
            if (!is_null($this->container['timestamp']) && ($this->container['timestamp'] < 0)) {
                $invalidProperties[] = "invalid value for 'timestamp', must be bigger than or equal to 0.";
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
    * Gets timestamp
    *  时间戳，相对时间戳。  单位秒。  保留3位小数。
    *
    * @return float|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param float|null $timestamp 时间戳，相对时间戳。  单位秒。  保留3位小数。
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets root
    *  root 3维坐标。
    *
    * @return float[]|null
    */
    public function getRoot()
    {
        return $this->container['root'];
    }

    /**
    * Sets root
    *
    * @param float[]|null $root root 3维坐标。
    *
    * @return $this
    */
    public function setRoot($root)
    {
        $this->container['root'] = $root;
        return $this;
    }

    /**
    * Gets joints
    *  75个关节点，四元数。
    *
    * @return float[]|null
    */
    public function getJoints()
    {
        return $this->container['joints'];
    }

    /**
    * Sets joints
    *
    * @param float[]|null $joints 75个关节点，四元数。
    *
    * @return $this
    */
    public function setJoints($joints)
    {
        $this->container['joints'] = $joints;
        return $this;
    }

    /**
    * Gets eyes
    *  眼动数据
    *
    * @return float[]|null
    */
    public function getEyes()
    {
        return $this->container['eyes'];
    }

    /**
    * Sets eyes
    *
    * @param float[]|null $eyes 眼动数据
    *
    * @return $this
    */
    public function setEyes($eyes)
    {
        $this->container['eyes'] = $eyes;
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

