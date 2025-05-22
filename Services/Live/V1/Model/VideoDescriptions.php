<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VideoDescriptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VideoDescriptions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * gopDurationSeconds  自定义gop时长，单位秒，有效取值[0,10]. 默认值0，表示跟随源流，不支持7和9，值无效时按默认值处理
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'gopDurationSeconds' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * gopDurationSeconds  自定义gop时长，单位秒，有效取值[0,10]. 默认值0，表示跟随源流，不支持7和9，值无效时按默认值处理
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'gopDurationSeconds' => 'int32'
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
    * gopDurationSeconds  自定义gop时长，单位秒，有效取值[0,10]. 默认值0，表示跟随源流，不支持7和9，值无效时按默认值处理
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'gopDurationSeconds' => 'gop_duration_seconds'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * gopDurationSeconds  自定义gop时长，单位秒，有效取值[0,10]. 默认值0，表示跟随源流，不支持7和9，值无效时按默认值处理
    *
    * @var string[]
    */
    protected static $setters = [
            'gopDurationSeconds' => 'setGopDurationSeconds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * gopDurationSeconds  自定义gop时长，单位秒，有效取值[0,10]. 默认值0，表示跟随源流，不支持7和9，值无效时按默认值处理
    *
    * @var string[]
    */
    protected static $getters = [
            'gopDurationSeconds' => 'getGopDurationSeconds'
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
    const GOP_DURATION_SECONDS_0 = 0;
    const GOP_DURATION_SECONDS_1 = 1;
    const GOP_DURATION_SECONDS_2 = 2;
    const GOP_DURATION_SECONDS_3 = 3;
    const GOP_DURATION_SECONDS_4 = 4;
    const GOP_DURATION_SECONDS_5 = 5;
    const GOP_DURATION_SECONDS_6 = 6;
    const GOP_DURATION_SECONDS_8 = 8;
    const GOP_DURATION_SECONDS_10 = 10;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getGopDurationSecondsAllowableValues()
    {
        return [
            self::GOP_DURATION_SECONDS_0,
            self::GOP_DURATION_SECONDS_1,
            self::GOP_DURATION_SECONDS_2,
            self::GOP_DURATION_SECONDS_3,
            self::GOP_DURATION_SECONDS_4,
            self::GOP_DURATION_SECONDS_5,
            self::GOP_DURATION_SECONDS_6,
            self::GOP_DURATION_SECONDS_8,
            self::GOP_DURATION_SECONDS_10,
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
        $this->container['gopDurationSeconds'] = isset($data['gopDurationSeconds']) ? $data['gopDurationSeconds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getGopDurationSecondsAllowableValues();
                if (!is_null($this->container['gopDurationSeconds']) && !in_array($this->container['gopDurationSeconds'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'gopDurationSeconds', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['gopDurationSeconds']) && ($this->container['gopDurationSeconds'] > 10)) {
                $invalidProperties[] = "invalid value for 'gopDurationSeconds', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['gopDurationSeconds']) && ($this->container['gopDurationSeconds'] < 0)) {
                $invalidProperties[] = "invalid value for 'gopDurationSeconds', must be bigger than or equal to 0.";
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
    * Gets gopDurationSeconds
    *  自定义gop时长，单位秒，有效取值[0,10]. 默认值0，表示跟随源流，不支持7和9，值无效时按默认值处理
    *
    * @return int|null
    */
    public function getGopDurationSeconds()
    {
        return $this->container['gopDurationSeconds'];
    }

    /**
    * Sets gopDurationSeconds
    *
    * @param int|null $gopDurationSeconds 自定义gop时长，单位秒，有效取值[0,10]. 默认值0，表示跟随源流，不支持7和9，值无效时按默认值处理
    *
    * @return $this
    */
    public function setGopDurationSeconds($gopDurationSeconds)
    {
        $this->container['gopDurationSeconds'] = $gopDurationSeconds;
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

