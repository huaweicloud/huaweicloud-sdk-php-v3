<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuotaLimit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuotaLimit';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * quotaLimit  配额大小。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'quotaLimit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * quotaLimit  配额大小。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'quotaLimit' => 'int32'
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
    * quotaLimit  配额大小。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'quotaLimit' => 'quota_limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * quotaLimit  配额大小。
    *
    * @var string[]
    */
    protected static $setters = [
            'quotaLimit' => 'setQuotaLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * quotaLimit  配额大小。
    *
    * @var string[]
    */
    protected static $getters = [
            'quotaLimit' => 'getQuotaLimit'
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
        $this->container['quotaLimit'] = isset($data['quotaLimit']) ? $data['quotaLimit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['quotaLimit'] === null) {
            $invalidProperties[] = "'quotaLimit' can't be null";
        }
            if (($this->container['quotaLimit'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'quotaLimit', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['quotaLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'quotaLimit', must be bigger than or equal to 0.";
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
    * Gets quotaLimit
    *  配额大小。
    *
    * @return int
    */
    public function getQuotaLimit()
    {
        return $this->container['quotaLimit'];
    }

    /**
    * Sets quotaLimit
    *
    * @param int $quotaLimit 配额大小。
    *
    * @return $this
    */
    public function setQuotaLimit($quotaLimit)
    {
        $this->container['quotaLimit'] = $quotaLimit;
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

