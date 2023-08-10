<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateResourcesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateResourcesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * succeedCount  成功添加的资源数目
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'succeedCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * succeedCount  成功添加的资源数目
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'succeedCount' => null
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
    * succeedCount  成功添加的资源数目
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'succeedCount' => 'succeed_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * succeedCount  成功添加的资源数目
    *
    * @var string[]
    */
    protected static $setters = [
            'succeedCount' => 'setSucceedCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * succeedCount  成功添加的资源数目
    *
    * @var string[]
    */
    protected static $getters = [
            'succeedCount' => 'getSucceedCount'
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
        $this->container['succeedCount'] = isset($data['succeedCount']) ? $data['succeedCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['succeedCount']) && ($this->container['succeedCount'] > 1000)) {
                $invalidProperties[] = "invalid value for 'succeedCount', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['succeedCount']) && ($this->container['succeedCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'succeedCount', must be bigger than or equal to 0.";
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
    * Gets succeedCount
    *  成功添加的资源数目
    *
    * @return int|null
    */
    public function getSucceedCount()
    {
        return $this->container['succeedCount'];
    }

    /**
    * Sets succeedCount
    *
    * @param int|null $succeedCount 成功添加的资源数目
    *
    * @return $this
    */
    public function setSucceedCount($succeedCount)
    {
        $this->container['succeedCount'] = $succeedCount;
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

