<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DivergingCommitCounts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DivergingCommitCounts';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * behind  落后默认分支提交数量
    * ahead  领先默认分支提交数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'behind' => 'int',
            'ahead' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * behind  落后默认分支提交数量
    * ahead  领先默认分支提交数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'behind' => 'int32',
        'ahead' => 'int32'
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
    * behind  落后默认分支提交数量
    * ahead  领先默认分支提交数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'behind' => 'behind',
            'ahead' => 'ahead'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * behind  落后默认分支提交数量
    * ahead  领先默认分支提交数量
    *
    * @var string[]
    */
    protected static $setters = [
            'behind' => 'setBehind',
            'ahead' => 'setAhead'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * behind  落后默认分支提交数量
    * ahead  领先默认分支提交数量
    *
    * @var string[]
    */
    protected static $getters = [
            'behind' => 'getBehind',
            'ahead' => 'getAhead'
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
        $this->container['behind'] = isset($data['behind']) ? $data['behind'] : null;
        $this->container['ahead'] = isset($data['ahead']) ? $data['ahead'] : null;
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
    * Gets behind
    *  落后默认分支提交数量
    *
    * @return int|null
    */
    public function getBehind()
    {
        return $this->container['behind'];
    }

    /**
    * Sets behind
    *
    * @param int|null $behind 落后默认分支提交数量
    *
    * @return $this
    */
    public function setBehind($behind)
    {
        $this->container['behind'] = $behind;
        return $this;
    }

    /**
    * Gets ahead
    *  领先默认分支提交数量
    *
    * @return int|null
    */
    public function getAhead()
    {
        return $this->container['ahead'];
    }

    /**
    * Sets ahead
    *
    * @param int|null $ahead 领先默认分支提交数量
    *
    * @return $this
    */
    public function setAhead($ahead)
    {
        $this->container['ahead'] = $ahead;
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

