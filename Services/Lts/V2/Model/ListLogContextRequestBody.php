<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLogContextRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLogContextRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lineNum  日志单行序列号，字段值需要从日志结果中获取，纳秒级时间戳。
    * time  自定义时间特性时间字段，字段值需要从日志结果中获取，毫秒级时间戳。若已开启云端结构化自定义时间功能，需要使用该字段和line_num字段共同进行上下文查询。
    * backwardsSize  指定起始日志往前（上文）的日志条数，取值范围 [0, 500] ，默认值100
    * forwardsSize  指定起始日志往后（下文）的日志条数，取值范围 [0, 500] ，默认值100
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lineNum' => 'string',
            'time' => 'string',
            'backwardsSize' => 'int',
            'forwardsSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lineNum  日志单行序列号，字段值需要从日志结果中获取，纳秒级时间戳。
    * time  自定义时间特性时间字段，字段值需要从日志结果中获取，毫秒级时间戳。若已开启云端结构化自定义时间功能，需要使用该字段和line_num字段共同进行上下文查询。
    * backwardsSize  指定起始日志往前（上文）的日志条数，取值范围 [0, 500] ，默认值100
    * forwardsSize  指定起始日志往后（下文）的日志条数，取值范围 [0, 500] ，默认值100
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lineNum' => null,
        'time' => null,
        'backwardsSize' => 'int32',
        'forwardsSize' => 'int32'
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
    * lineNum  日志单行序列号，字段值需要从日志结果中获取，纳秒级时间戳。
    * time  自定义时间特性时间字段，字段值需要从日志结果中获取，毫秒级时间戳。若已开启云端结构化自定义时间功能，需要使用该字段和line_num字段共同进行上下文查询。
    * backwardsSize  指定起始日志往前（上文）的日志条数，取值范围 [0, 500] ，默认值100
    * forwardsSize  指定起始日志往后（下文）的日志条数，取值范围 [0, 500] ，默认值100
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lineNum' => 'line_num',
            'time' => '__time__',
            'backwardsSize' => 'backwardsSize',
            'forwardsSize' => 'forwardsSize'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lineNum  日志单行序列号，字段值需要从日志结果中获取，纳秒级时间戳。
    * time  自定义时间特性时间字段，字段值需要从日志结果中获取，毫秒级时间戳。若已开启云端结构化自定义时间功能，需要使用该字段和line_num字段共同进行上下文查询。
    * backwardsSize  指定起始日志往前（上文）的日志条数，取值范围 [0, 500] ，默认值100
    * forwardsSize  指定起始日志往后（下文）的日志条数，取值范围 [0, 500] ，默认值100
    *
    * @var string[]
    */
    protected static $setters = [
            'lineNum' => 'setLineNum',
            'time' => 'setTime',
            'backwardsSize' => 'setBackwardsSize',
            'forwardsSize' => 'setForwardsSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lineNum  日志单行序列号，字段值需要从日志结果中获取，纳秒级时间戳。
    * time  自定义时间特性时间字段，字段值需要从日志结果中获取，毫秒级时间戳。若已开启云端结构化自定义时间功能，需要使用该字段和line_num字段共同进行上下文查询。
    * backwardsSize  指定起始日志往前（上文）的日志条数，取值范围 [0, 500] ，默认值100
    * forwardsSize  指定起始日志往后（下文）的日志条数，取值范围 [0, 500] ，默认值100
    *
    * @var string[]
    */
    protected static $getters = [
            'lineNum' => 'getLineNum',
            'time' => 'getTime',
            'backwardsSize' => 'getBackwardsSize',
            'forwardsSize' => 'getForwardsSize'
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
        $this->container['lineNum'] = isset($data['lineNum']) ? $data['lineNum'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['backwardsSize'] = isset($data['backwardsSize']) ? $data['backwardsSize'] : null;
        $this->container['forwardsSize'] = isset($data['forwardsSize']) ? $data['forwardsSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['backwardsSize']) && ($this->container['backwardsSize'] > 500)) {
                $invalidProperties[] = "invalid value for 'backwardsSize', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['backwardsSize']) && ($this->container['backwardsSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'backwardsSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['forwardsSize']) && ($this->container['forwardsSize'] > 500)) {
                $invalidProperties[] = "invalid value for 'forwardsSize', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['forwardsSize']) && ($this->container['forwardsSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'forwardsSize', must be bigger than or equal to 0.";
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
    * Gets lineNum
    *  日志单行序列号，字段值需要从日志结果中获取，纳秒级时间戳。
    *
    * @return string|null
    */
    public function getLineNum()
    {
        return $this->container['lineNum'];
    }

    /**
    * Sets lineNum
    *
    * @param string|null $lineNum 日志单行序列号，字段值需要从日志结果中获取，纳秒级时间戳。
    *
    * @return $this
    */
    public function setLineNum($lineNum)
    {
        $this->container['lineNum'] = $lineNum;
        return $this;
    }

    /**
    * Gets time
    *  自定义时间特性时间字段，字段值需要从日志结果中获取，毫秒级时间戳。若已开启云端结构化自定义时间功能，需要使用该字段和line_num字段共同进行上下文查询。
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 自定义时间特性时间字段，字段值需要从日志结果中获取，毫秒级时间戳。若已开启云端结构化自定义时间功能，需要使用该字段和line_num字段共同进行上下文查询。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets backwardsSize
    *  指定起始日志往前（上文）的日志条数，取值范围 [0, 500] ，默认值100
    *
    * @return int|null
    */
    public function getBackwardsSize()
    {
        return $this->container['backwardsSize'];
    }

    /**
    * Sets backwardsSize
    *
    * @param int|null $backwardsSize 指定起始日志往前（上文）的日志条数，取值范围 [0, 500] ，默认值100
    *
    * @return $this
    */
    public function setBackwardsSize($backwardsSize)
    {
        $this->container['backwardsSize'] = $backwardsSize;
        return $this;
    }

    /**
    * Gets forwardsSize
    *  指定起始日志往后（下文）的日志条数，取值范围 [0, 500] ，默认值100
    *
    * @return int|null
    */
    public function getForwardsSize()
    {
        return $this->container['forwardsSize'];
    }

    /**
    * Sets forwardsSize
    *
    * @param int|null $forwardsSize 指定起始日志往后（下文）的日志条数，取值范围 [0, 500] ，默认值100
    *
    * @return $this
    */
    public function setForwardsSize($forwardsSize)
    {
        $this->container['forwardsSize'] = $forwardsSize;
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

