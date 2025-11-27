<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RollingUpdateNodeUpgradeStrategy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RollingUpdateNodeUpgradeStrategy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxUnavailable  最大不可用个数
    * maxSurge  允许超出期望的最大个数
    * deletePolicy  删除策略：Random、Oldest、Newest
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxUnavailable' => 'object',
            'maxSurge' => 'object',
            'deletePolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxUnavailable  最大不可用个数
    * maxSurge  允许超出期望的最大个数
    * deletePolicy  删除策略：Random、Oldest、Newest
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxUnavailable' => null,
        'maxSurge' => null,
        'deletePolicy' => null
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
    * maxUnavailable  最大不可用个数
    * maxSurge  允许超出期望的最大个数
    * deletePolicy  删除策略：Random、Oldest、Newest
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxUnavailable' => 'maxUnavailable',
            'maxSurge' => 'maxSurge',
            'deletePolicy' => 'deletePolicy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxUnavailable  最大不可用个数
    * maxSurge  允许超出期望的最大个数
    * deletePolicy  删除策略：Random、Oldest、Newest
    *
    * @var string[]
    */
    protected static $setters = [
            'maxUnavailable' => 'setMaxUnavailable',
            'maxSurge' => 'setMaxSurge',
            'deletePolicy' => 'setDeletePolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxUnavailable  最大不可用个数
    * maxSurge  允许超出期望的最大个数
    * deletePolicy  删除策略：Random、Oldest、Newest
    *
    * @var string[]
    */
    protected static $getters = [
            'maxUnavailable' => 'getMaxUnavailable',
            'maxSurge' => 'getMaxSurge',
            'deletePolicy' => 'getDeletePolicy'
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
        $this->container['maxUnavailable'] = isset($data['maxUnavailable']) ? $data['maxUnavailable'] : null;
        $this->container['maxSurge'] = isset($data['maxSurge']) ? $data['maxSurge'] : null;
        $this->container['deletePolicy'] = isset($data['deletePolicy']) ? $data['deletePolicy'] : null;
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
    * Gets maxUnavailable
    *  最大不可用个数
    *
    * @return object|null
    */
    public function getMaxUnavailable()
    {
        return $this->container['maxUnavailable'];
    }

    /**
    * Sets maxUnavailable
    *
    * @param object|null $maxUnavailable 最大不可用个数
    *
    * @return $this
    */
    public function setMaxUnavailable($maxUnavailable)
    {
        $this->container['maxUnavailable'] = $maxUnavailable;
        return $this;
    }

    /**
    * Gets maxSurge
    *  允许超出期望的最大个数
    *
    * @return object|null
    */
    public function getMaxSurge()
    {
        return $this->container['maxSurge'];
    }

    /**
    * Sets maxSurge
    *
    * @param object|null $maxSurge 允许超出期望的最大个数
    *
    * @return $this
    */
    public function setMaxSurge($maxSurge)
    {
        $this->container['maxSurge'] = $maxSurge;
        return $this;
    }

    /**
    * Gets deletePolicy
    *  删除策略：Random、Oldest、Newest
    *
    * @return string|null
    */
    public function getDeletePolicy()
    {
        return $this->container['deletePolicy'];
    }

    /**
    * Sets deletePolicy
    *
    * @param string|null $deletePolicy 删除策略：Random、Oldest、Newest
    *
    * @return $this
    */
    public function setDeletePolicy($deletePolicy)
    {
        $this->container['deletePolicy'] = $deletePolicy;
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

