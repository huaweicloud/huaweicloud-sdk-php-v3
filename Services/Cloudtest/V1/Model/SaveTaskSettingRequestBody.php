<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SaveTaskSettingRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SaveTaskSettingRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxRunningTime  自定义时长
    * isLongRun  是否长期运行
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxRunningTime' => 'int',
            'isLongRun' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxRunningTime  自定义时长
    * isLongRun  是否长期运行
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxRunningTime' => 'int32',
        'isLongRun' => null
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
    * maxRunningTime  自定义时长
    * isLongRun  是否长期运行
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxRunningTime' => 'max_running_time',
            'isLongRun' => 'is_long_run'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxRunningTime  自定义时长
    * isLongRun  是否长期运行
    *
    * @var string[]
    */
    protected static $setters = [
            'maxRunningTime' => 'setMaxRunningTime',
            'isLongRun' => 'setIsLongRun'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxRunningTime  自定义时长
    * isLongRun  是否长期运行
    *
    * @var string[]
    */
    protected static $getters = [
            'maxRunningTime' => 'getMaxRunningTime',
            'isLongRun' => 'getIsLongRun'
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
    const IS_LONG_RUN__1 = '1';
    const IS_LONG_RUN__0 = '0';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIsLongRunAllowableValues()
    {
        return [
            self::IS_LONG_RUN__1,
            self::IS_LONG_RUN__0,
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
        $this->container['maxRunningTime'] = isset($data['maxRunningTime']) ? $data['maxRunningTime'] : null;
        $this->container['isLongRun'] = isset($data['isLongRun']) ? $data['isLongRun'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['maxRunningTime']) && ($this->container['maxRunningTime'] > 1000)) {
                $invalidProperties[] = "invalid value for 'maxRunningTime', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['maxRunningTime']) && ($this->container['maxRunningTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxRunningTime', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getIsLongRunAllowableValues();
                if (!is_null($this->container['isLongRun']) && !in_array($this->container['isLongRun'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'isLongRun', must be one of '%s'",
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
    * Gets maxRunningTime
    *  自定义时长
    *
    * @return int|null
    */
    public function getMaxRunningTime()
    {
        return $this->container['maxRunningTime'];
    }

    /**
    * Sets maxRunningTime
    *
    * @param int|null $maxRunningTime 自定义时长
    *
    * @return $this
    */
    public function setMaxRunningTime($maxRunningTime)
    {
        $this->container['maxRunningTime'] = $maxRunningTime;
        return $this;
    }

    /**
    * Gets isLongRun
    *  是否长期运行
    *
    * @return string|null
    */
    public function getIsLongRun()
    {
        return $this->container['isLongRun'];
    }

    /**
    * Sets isLongRun
    *
    * @param string|null $isLongRun 是否长期运行
    *
    * @return $this
    */
    public function setIsLongRun($isLongRun)
    {
        $this->container['isLongRun'] = $isLongRun;
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

