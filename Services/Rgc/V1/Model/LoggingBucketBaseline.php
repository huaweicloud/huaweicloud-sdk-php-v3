<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoggingBucketBaseline implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoggingBucketBaseline';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * retentionDays  桶保留天数。
    * enableMultiAz  是否允许多AZ存储。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'retentionDays' => 'int',
            'enableMultiAz' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * retentionDays  桶保留天数。
    * enableMultiAz  是否允许多AZ存储。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'retentionDays' => null,
        'enableMultiAz' => null
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
    * retentionDays  桶保留天数。
    * enableMultiAz  是否允许多AZ存储。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'retentionDays' => 'retention_days',
            'enableMultiAz' => 'enable_multi_az'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * retentionDays  桶保留天数。
    * enableMultiAz  是否允许多AZ存储。
    *
    * @var string[]
    */
    protected static $setters = [
            'retentionDays' => 'setRetentionDays',
            'enableMultiAz' => 'setEnableMultiAz'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * retentionDays  桶保留天数。
    * enableMultiAz  是否允许多AZ存储。
    *
    * @var string[]
    */
    protected static $getters = [
            'retentionDays' => 'getRetentionDays',
            'enableMultiAz' => 'getEnableMultiAz'
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
        $this->container['retentionDays'] = isset($data['retentionDays']) ? $data['retentionDays'] : null;
        $this->container['enableMultiAz'] = isset($data['enableMultiAz']) ? $data['enableMultiAz'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['retentionDays'] === null) {
            $invalidProperties[] = "'retentionDays' can't be null";
        }
            if (($this->container['retentionDays'] > 5475)) {
                $invalidProperties[] = "invalid value for 'retentionDays', must be smaller than or equal to 5475.";
            }
            if (($this->container['retentionDays'] < 1)) {
                $invalidProperties[] = "invalid value for 'retentionDays', must be bigger than or equal to 1.";
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
    * Gets retentionDays
    *  桶保留天数。
    *
    * @return int
    */
    public function getRetentionDays()
    {
        return $this->container['retentionDays'];
    }

    /**
    * Sets retentionDays
    *
    * @param int $retentionDays 桶保留天数。
    *
    * @return $this
    */
    public function setRetentionDays($retentionDays)
    {
        $this->container['retentionDays'] = $retentionDays;
        return $this;
    }

    /**
    * Gets enableMultiAz
    *  是否允许多AZ存储。
    *
    * @return bool|null
    */
    public function getEnableMultiAz()
    {
        return $this->container['enableMultiAz'];
    }

    /**
    * Sets enableMultiAz
    *
    * @param bool|null $enableMultiAz 是否允许多AZ存储。
    *
    * @return $this
    */
    public function setEnableMultiAz($enableMultiAz)
    {
        $this->container['enableMultiAz'] = $enableMultiAz;
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

