<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryCompareJobProgressRespGlobalInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryCompareJobProgressResp_global_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * srcSpeed  全局对比速率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'srcSpeed' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * srcSpeed  全局对比速率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'srcSpeed' => null
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
    * srcSpeed  全局对比速率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'srcSpeed' => 'src_speed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * srcSpeed  全局对比速率。
    *
    * @var string[]
    */
    protected static $setters = [
            'srcSpeed' => 'setSrcSpeed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * srcSpeed  全局对比速率。
    *
    * @var string[]
    */
    protected static $getters = [
            'srcSpeed' => 'getSrcSpeed'
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
        $this->container['srcSpeed'] = isset($data['srcSpeed']) ? $data['srcSpeed'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['srcSpeed']) && (mb_strlen($this->container['srcSpeed']) > 256)) {
                $invalidProperties[] = "invalid value for 'srcSpeed', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['srcSpeed']) && (mb_strlen($this->container['srcSpeed']) < 0)) {
                $invalidProperties[] = "invalid value for 'srcSpeed', the character length must be bigger than or equal to 0.";
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
    * Gets srcSpeed
    *  全局对比速率。
    *
    * @return string|null
    */
    public function getSrcSpeed()
    {
        return $this->container['srcSpeed'];
    }

    /**
    * Sets srcSpeed
    *
    * @param string|null $srcSpeed 全局对比速率。
    *
    * @return $this
    */
    public function setSrcSpeed($srcSpeed)
    {
        $this->container['srcSpeed'] = $srcSpeed;
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

