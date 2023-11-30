<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtLimitPojo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtLimitPojo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * minIngressSize  - 最小入云限速
    * maxIngressSize  - 最大入云限速
    * ratio95peak  95计费保底率
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'minIngressSize' => 'int',
            'maxIngressSize' => 'int',
            'ratio95peak' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * minIngressSize  - 最小入云限速
    * maxIngressSize  - 最大入云限速
    * ratio95peak  95计费保底率
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'minIngressSize' => null,
        'maxIngressSize' => null,
        'ratio95peak' => null
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
    * minIngressSize  - 最小入云限速
    * maxIngressSize  - 最大入云限速
    * ratio95peak  95计费保底率
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'minIngressSize' => 'min_ingress_size',
            'maxIngressSize' => 'max_ingress_size',
            'ratio95peak' => 'ratio_95peak'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * minIngressSize  - 最小入云限速
    * maxIngressSize  - 最大入云限速
    * ratio95peak  95计费保底率
    *
    * @var string[]
    */
    protected static $setters = [
            'minIngressSize' => 'setMinIngressSize',
            'maxIngressSize' => 'setMaxIngressSize',
            'ratio95peak' => 'setRatio95peak'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * minIngressSize  - 最小入云限速
    * maxIngressSize  - 最大入云限速
    * ratio95peak  95计费保底率
    *
    * @var string[]
    */
    protected static $getters = [
            'minIngressSize' => 'getMinIngressSize',
            'maxIngressSize' => 'getMaxIngressSize',
            'ratio95peak' => 'getRatio95peak'
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
        $this->container['minIngressSize'] = isset($data['minIngressSize']) ? $data['minIngressSize'] : null;
        $this->container['maxIngressSize'] = isset($data['maxIngressSize']) ? $data['maxIngressSize'] : null;
        $this->container['ratio95peak'] = isset($data['ratio95peak']) ? $data['ratio95peak'] : null;
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
    * Gets minIngressSize
    *  - 最小入云限速
    *
    * @return int|null
    */
    public function getMinIngressSize()
    {
        return $this->container['minIngressSize'];
    }

    /**
    * Sets minIngressSize
    *
    * @param int|null $minIngressSize - 最小入云限速
    *
    * @return $this
    */
    public function setMinIngressSize($minIngressSize)
    {
        $this->container['minIngressSize'] = $minIngressSize;
        return $this;
    }

    /**
    * Gets maxIngressSize
    *  - 最大入云限速
    *
    * @return int|null
    */
    public function getMaxIngressSize()
    {
        return $this->container['maxIngressSize'];
    }

    /**
    * Sets maxIngressSize
    *
    * @param int|null $maxIngressSize - 最大入云限速
    *
    * @return $this
    */
    public function setMaxIngressSize($maxIngressSize)
    {
        $this->container['maxIngressSize'] = $maxIngressSize;
        return $this;
    }

    /**
    * Gets ratio95peak
    *  95计费保底率
    *
    * @return int|null
    */
    public function getRatio95peak()
    {
        return $this->container['ratio95peak'];
    }

    /**
    * Sets ratio95peak
    *
    * @param int|null $ratio95peak 95计费保底率
    *
    * @return $this
    */
    public function setRatio95peak($ratio95peak)
    {
        $this->container['ratio95peak'] = $ratio95peak;
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

