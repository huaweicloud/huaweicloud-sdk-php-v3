<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EipSpecBandwidth implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EipSpec_bandwidth';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * size  带宽大小
    * sharetype  带宽类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'size' => 'int',
            'sharetype' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * size  带宽大小
    * sharetype  带宽类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'size' => null,
        'sharetype' => null
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
    * size  带宽大小
    * sharetype  带宽类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'size' => 'size',
            'sharetype' => 'sharetype'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * size  带宽大小
    * sharetype  带宽类型
    *
    * @var string[]
    */
    protected static $setters = [
            'size' => 'setSize',
            'sharetype' => 'setSharetype'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * size  带宽大小
    * sharetype  带宽类型
    *
    * @var string[]
    */
    protected static $getters = [
            'size' => 'getSize',
            'sharetype' => 'getSharetype'
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
    const SHARETYPE_PER = 'PER';
    const SHARETYPE_WHOLE = 'WHOLE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSharetypeAllowableValues()
    {
        return [
            self::SHARETYPE_PER,
            self::SHARETYPE_WHOLE,
        ];
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
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['sharetype'] = isset($data['sharetype']) ? $data['sharetype'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSharetypeAllowableValues();
                if (!is_null($this->container['sharetype']) && !in_array($this->container['sharetype'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sharetype', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets size
    *  带宽大小
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 带宽大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets sharetype
    *  带宽类型
    *
    * @return string|null
    */
    public function getSharetype()
    {
        return $this->container['sharetype'];
    }

    /**
    * Sets sharetype
    *
    * @param string|null $sharetype 带宽类型
    *
    * @return $this
    */
    public function setSharetype($sharetype)
    {
        $this->container['sharetype'] = $sharetype;
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

