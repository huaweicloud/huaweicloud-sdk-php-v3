<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteSecretForScheduleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteSecretForScheduleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recoveryWindowInDays  创建定时删除凭据的任务，且指定可恢复的天数。  约束：7~30。  默认值：30。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recoveryWindowInDays' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recoveryWindowInDays  创建定时删除凭据的任务，且指定可恢复的天数。  约束：7~30。  默认值：30。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recoveryWindowInDays' => 'int32'
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
    * recoveryWindowInDays  创建定时删除凭据的任务，且指定可恢复的天数。  约束：7~30。  默认值：30。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recoveryWindowInDays' => 'recovery_window_in_days'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recoveryWindowInDays  创建定时删除凭据的任务，且指定可恢复的天数。  约束：7~30。  默认值：30。
    *
    * @var string[]
    */
    protected static $setters = [
            'recoveryWindowInDays' => 'setRecoveryWindowInDays'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recoveryWindowInDays  创建定时删除凭据的任务，且指定可恢复的天数。  约束：7~30。  默认值：30。
    *
    * @var string[]
    */
    protected static $getters = [
            'recoveryWindowInDays' => 'getRecoveryWindowInDays'
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
        $this->container['recoveryWindowInDays'] = isset($data['recoveryWindowInDays']) ? $data['recoveryWindowInDays'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['recoveryWindowInDays'] === null) {
            $invalidProperties[] = "'recoveryWindowInDays' can't be null";
        }
            if (($this->container['recoveryWindowInDays'] > 30)) {
                $invalidProperties[] = "invalid value for 'recoveryWindowInDays', must be smaller than or equal to 30.";
            }
            if (($this->container['recoveryWindowInDays'] < 7)) {
                $invalidProperties[] = "invalid value for 'recoveryWindowInDays', must be bigger than or equal to 7.";
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
    * Gets recoveryWindowInDays
    *  创建定时删除凭据的任务，且指定可恢复的天数。  约束：7~30。  默认值：30。
    *
    * @return int
    */
    public function getRecoveryWindowInDays()
    {
        return $this->container['recoveryWindowInDays'];
    }

    /**
    * Sets recoveryWindowInDays
    *
    * @param int $recoveryWindowInDays 创建定时删除凭据的任务，且指定可恢复的天数。  约束：7~30。  默认值：30。
    *
    * @return $this
    */
    public function setRecoveryWindowInDays($recoveryWindowInDays)
    {
        $this->container['recoveryWindowInDays'] = $recoveryWindowInDays;
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

