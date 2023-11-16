<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InheritConfigQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InheritConfigQuery';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  是否开启鉴权继承，on：开启,off：关闭。
    * inheritType  鉴权继承配置， m3u8：M3U8,mpd：MPD,“m3u8,mpd”。
    * inheritTimeType  鉴权继承的文件类型时间, sys_time：当前系统时间，parent_url_time：与m3u8和mpd访问链接保持一致。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'inheritType' => 'string',
            'inheritTimeType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  是否开启鉴权继承，on：开启,off：关闭。
    * inheritType  鉴权继承配置， m3u8：M3U8,mpd：MPD,“m3u8,mpd”。
    * inheritTimeType  鉴权继承的文件类型时间, sys_time：当前系统时间，parent_url_time：与m3u8和mpd访问链接保持一致。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'inheritType' => null,
        'inheritTimeType' => null
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
    * status  是否开启鉴权继承，on：开启,off：关闭。
    * inheritType  鉴权继承配置， m3u8：M3U8,mpd：MPD,“m3u8,mpd”。
    * inheritTimeType  鉴权继承的文件类型时间, sys_time：当前系统时间，parent_url_time：与m3u8和mpd访问链接保持一致。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'inheritType' => 'inherit_type',
            'inheritTimeType' => 'inherit_time_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  是否开启鉴权继承，on：开启,off：关闭。
    * inheritType  鉴权继承配置， m3u8：M3U8,mpd：MPD,“m3u8,mpd”。
    * inheritTimeType  鉴权继承的文件类型时间, sys_time：当前系统时间，parent_url_time：与m3u8和mpd访问链接保持一致。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'inheritType' => 'setInheritType',
            'inheritTimeType' => 'setInheritTimeType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  是否开启鉴权继承，on：开启,off：关闭。
    * inheritType  鉴权继承配置， m3u8：M3U8,mpd：MPD,“m3u8,mpd”。
    * inheritTimeType  鉴权继承的文件类型时间, sys_time：当前系统时间，parent_url_time：与m3u8和mpd访问链接保持一致。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'inheritType' => 'getInheritType',
            'inheritTimeType' => 'getInheritTimeType'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['inheritType'] = isset($data['inheritType']) ? $data['inheritType'] : null;
        $this->container['inheritTimeType'] = isset($data['inheritTimeType']) ? $data['inheritTimeType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets status
    *  是否开启鉴权继承，on：开启,off：关闭。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 是否开启鉴权继承，on：开启,off：关闭。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets inheritType
    *  鉴权继承配置， m3u8：M3U8,mpd：MPD,“m3u8,mpd”。
    *
    * @return string|null
    */
    public function getInheritType()
    {
        return $this->container['inheritType'];
    }

    /**
    * Sets inheritType
    *
    * @param string|null $inheritType 鉴权继承配置， m3u8：M3U8,mpd：MPD,“m3u8,mpd”。
    *
    * @return $this
    */
    public function setInheritType($inheritType)
    {
        $this->container['inheritType'] = $inheritType;
        return $this;
    }

    /**
    * Gets inheritTimeType
    *  鉴权继承的文件类型时间, sys_time：当前系统时间，parent_url_time：与m3u8和mpd访问链接保持一致。
    *
    * @return string|null
    */
    public function getInheritTimeType()
    {
        return $this->container['inheritTimeType'];
    }

    /**
    * Sets inheritTimeType
    *
    * @param string|null $inheritTimeType 鉴权继承的文件类型时间, sys_time：当前系统时间，parent_url_time：与m3u8和mpd访问链接保持一致。
    *
    * @return $this
    */
    public function setInheritTimeType($inheritTimeType)
    {
        $this->container['inheritTimeType'] = $inheritTimeType;
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

