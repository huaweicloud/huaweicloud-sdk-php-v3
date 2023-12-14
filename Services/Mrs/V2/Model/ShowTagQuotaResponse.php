<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTagQuotaResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTagQuotaResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalQuota  总配额大小
    * availableQuota  可使用配额大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalQuota' => 'int',
            'availableQuota' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalQuota  总配额大小
    * availableQuota  可使用配额大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalQuota' => null,
        'availableQuota' => null
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
    * totalQuota  总配额大小
    * availableQuota  可使用配额大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalQuota' => 'total_quota',
            'availableQuota' => 'available_quota'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalQuota  总配额大小
    * availableQuota  可使用配额大小
    *
    * @var string[]
    */
    protected static $setters = [
            'totalQuota' => 'setTotalQuota',
            'availableQuota' => 'setAvailableQuota'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalQuota  总配额大小
    * availableQuota  可使用配额大小
    *
    * @var string[]
    */
    protected static $getters = [
            'totalQuota' => 'getTotalQuota',
            'availableQuota' => 'getAvailableQuota'
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
        $this->container['totalQuota'] = isset($data['totalQuota']) ? $data['totalQuota'] : null;
        $this->container['availableQuota'] = isset($data['availableQuota']) ? $data['availableQuota'] : null;
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
    * Gets totalQuota
    *  总配额大小
    *
    * @return int|null
    */
    public function getTotalQuota()
    {
        return $this->container['totalQuota'];
    }

    /**
    * Sets totalQuota
    *
    * @param int|null $totalQuota 总配额大小
    *
    * @return $this
    */
    public function setTotalQuota($totalQuota)
    {
        $this->container['totalQuota'] = $totalQuota;
        return $this;
    }

    /**
    * Gets availableQuota
    *  可使用配额大小
    *
    * @return int|null
    */
    public function getAvailableQuota()
    {
        return $this->container['availableQuota'];
    }

    /**
    * Sets availableQuota
    *
    * @param int|null $availableQuota 可使用配额大小
    *
    * @return $this
    */
    public function setAvailableQuota($availableQuota)
    {
        $this->container['availableQuota'] = $availableQuota;
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

