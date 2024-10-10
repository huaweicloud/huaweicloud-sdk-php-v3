<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRecoveryTimeWindowResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRecoveryTimeWindowResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recoveryMinTime  恢复时间窗左边界（不包含）
    * recoveryMaxTime  恢复时间窗右边界（包含）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recoveryMinTime' => 'string',
            'recoveryMaxTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recoveryMinTime  恢复时间窗左边界（不包含）
    * recoveryMaxTime  恢复时间窗右边界（包含）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recoveryMinTime' => null,
        'recoveryMaxTime' => null
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
    * recoveryMinTime  恢复时间窗左边界（不包含）
    * recoveryMaxTime  恢复时间窗右边界（包含）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recoveryMinTime' => 'recovery_min_time',
            'recoveryMaxTime' => 'recovery_max_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recoveryMinTime  恢复时间窗左边界（不包含）
    * recoveryMaxTime  恢复时间窗右边界（包含）
    *
    * @var string[]
    */
    protected static $setters = [
            'recoveryMinTime' => 'setRecoveryMinTime',
            'recoveryMaxTime' => 'setRecoveryMaxTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recoveryMinTime  恢复时间窗左边界（不包含）
    * recoveryMaxTime  恢复时间窗右边界（包含）
    *
    * @var string[]
    */
    protected static $getters = [
            'recoveryMinTime' => 'getRecoveryMinTime',
            'recoveryMaxTime' => 'getRecoveryMaxTime'
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
        $this->container['recoveryMinTime'] = isset($data['recoveryMinTime']) ? $data['recoveryMinTime'] : null;
        $this->container['recoveryMaxTime'] = isset($data['recoveryMaxTime']) ? $data['recoveryMaxTime'] : null;
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
    * Gets recoveryMinTime
    *  恢复时间窗左边界（不包含）
    *
    * @return string|null
    */
    public function getRecoveryMinTime()
    {
        return $this->container['recoveryMinTime'];
    }

    /**
    * Sets recoveryMinTime
    *
    * @param string|null $recoveryMinTime 恢复时间窗左边界（不包含）
    *
    * @return $this
    */
    public function setRecoveryMinTime($recoveryMinTime)
    {
        $this->container['recoveryMinTime'] = $recoveryMinTime;
        return $this;
    }

    /**
    * Gets recoveryMaxTime
    *  恢复时间窗右边界（包含）
    *
    * @return string|null
    */
    public function getRecoveryMaxTime()
    {
        return $this->container['recoveryMaxTime'];
    }

    /**
    * Sets recoveryMaxTime
    *
    * @param string|null $recoveryMaxTime 恢复时间窗右边界（包含）
    *
    * @return $this
    */
    public function setRecoveryMaxTime($recoveryMaxTime)
    {
        $this->container['recoveryMaxTime'] = $recoveryMaxTime;
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

