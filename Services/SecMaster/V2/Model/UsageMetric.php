<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UsageMetric implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UsageMetric';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * used  已使用
    * unUsed  未使用
    * isPercentage  是否百分比
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'used' => 'string',
            'unUsed' => 'string',
            'isPercentage' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * used  已使用
    * unUsed  未使用
    * isPercentage  是否百分比
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'used' => null,
        'unUsed' => null,
        'isPercentage' => null
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
    * used  已使用
    * unUsed  未使用
    * isPercentage  是否百分比
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'used' => 'used',
            'unUsed' => 'un_used',
            'isPercentage' => 'is_percentage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * used  已使用
    * unUsed  未使用
    * isPercentage  是否百分比
    *
    * @var string[]
    */
    protected static $setters = [
            'used' => 'setUsed',
            'unUsed' => 'setUnUsed',
            'isPercentage' => 'setIsPercentage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * used  已使用
    * unUsed  未使用
    * isPercentage  是否百分比
    *
    * @var string[]
    */
    protected static $getters = [
            'used' => 'getUsed',
            'unUsed' => 'getUnUsed',
            'isPercentage' => 'getIsPercentage'
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
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['unUsed'] = isset($data['unUsed']) ? $data['unUsed'] : null;
        $this->container['isPercentage'] = isset($data['isPercentage']) ? $data['isPercentage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['used']) && (mb_strlen($this->container['used']) > 1024)) {
                $invalidProperties[] = "invalid value for 'used', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['used']) && (mb_strlen($this->container['used']) < 0)) {
                $invalidProperties[] = "invalid value for 'used', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unUsed']) && (mb_strlen($this->container['unUsed']) > 1024)) {
                $invalidProperties[] = "invalid value for 'unUsed', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['unUsed']) && (mb_strlen($this->container['unUsed']) < 0)) {
                $invalidProperties[] = "invalid value for 'unUsed', the character length must be bigger than or equal to 0.";
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
    * Gets used
    *  已使用
    *
    * @return string|null
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param string|null $used 已使用
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
        return $this;
    }

    /**
    * Gets unUsed
    *  未使用
    *
    * @return string|null
    */
    public function getUnUsed()
    {
        return $this->container['unUsed'];
    }

    /**
    * Sets unUsed
    *
    * @param string|null $unUsed 未使用
    *
    * @return $this
    */
    public function setUnUsed($unUsed)
    {
        $this->container['unUsed'] = $unUsed;
        return $this;
    }

    /**
    * Gets isPercentage
    *  是否百分比
    *
    * @return bool|null
    */
    public function getIsPercentage()
    {
        return $this->container['isPercentage'];
    }

    /**
    * Sets isPercentage
    *
    * @param bool|null $isPercentage 是否百分比
    *
    * @return $this
    */
    public function setIsPercentage($isPercentage)
    {
        $this->container['isPercentage'] = $isPercentage;
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

