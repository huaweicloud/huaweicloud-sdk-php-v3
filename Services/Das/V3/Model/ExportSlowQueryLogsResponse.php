<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportSlowQueryLogsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportSlowQueryLogsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * slowLogs  慢SQL集合。当集合为空时，说明慢SQL已全部导出。
    * nextMarker  获取下一页所需的标识符。marker仅在3分钟内有效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'slowLogs' => '\HuaweiCloud\SDK\Das\V3\Model\SlowLog[]',
            'nextMarker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * slowLogs  慢SQL集合。当集合为空时，说明慢SQL已全部导出。
    * nextMarker  获取下一页所需的标识符。marker仅在3分钟内有效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'slowLogs' => null,
        'nextMarker' => null
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
    * slowLogs  慢SQL集合。当集合为空时，说明慢SQL已全部导出。
    * nextMarker  获取下一页所需的标识符。marker仅在3分钟内有效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'slowLogs' => 'slow_logs',
            'nextMarker' => 'next_marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * slowLogs  慢SQL集合。当集合为空时，说明慢SQL已全部导出。
    * nextMarker  获取下一页所需的标识符。marker仅在3分钟内有效。
    *
    * @var string[]
    */
    protected static $setters = [
            'slowLogs' => 'setSlowLogs',
            'nextMarker' => 'setNextMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * slowLogs  慢SQL集合。当集合为空时，说明慢SQL已全部导出。
    * nextMarker  获取下一页所需的标识符。marker仅在3分钟内有效。
    *
    * @var string[]
    */
    protected static $getters = [
            'slowLogs' => 'getSlowLogs',
            'nextMarker' => 'getNextMarker'
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
        $this->container['slowLogs'] = isset($data['slowLogs']) ? $data['slowLogs'] : null;
        $this->container['nextMarker'] = isset($data['nextMarker']) ? $data['nextMarker'] : null;
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
    * Gets slowLogs
    *  慢SQL集合。当集合为空时，说明慢SQL已全部导出。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\SlowLog[]|null
    */
    public function getSlowLogs()
    {
        return $this->container['slowLogs'];
    }

    /**
    * Sets slowLogs
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\SlowLog[]|null $slowLogs 慢SQL集合。当集合为空时，说明慢SQL已全部导出。
    *
    * @return $this
    */
    public function setSlowLogs($slowLogs)
    {
        $this->container['slowLogs'] = $slowLogs;
        return $this;
    }

    /**
    * Gets nextMarker
    *  获取下一页所需的标识符。marker仅在3分钟内有效。
    *
    * @return string|null
    */
    public function getNextMarker()
    {
        return $this->container['nextMarker'];
    }

    /**
    * Sets nextMarker
    *
    * @param string|null $nextMarker 获取下一页所需的标识符。marker仅在3分钟内有效。
    *
    * @return $this
    */
    public function setNextMarker($nextMarker)
    {
        $this->container['nextMarker'] = $nextMarker;
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

