<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryLtsStructLogParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryLtsStructLogParams';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  搜索起始时间（UTC时间，毫秒级）。
    * endTime  搜索结束时间（UTC时间，毫秒级）。
    * sqlExpression  支持SQL语句搜索， 目前支持\"GROUP BY\", \"LIKE\"和\"WHERE\"。
    * originalContent  返回内容中是否包含原始日志， 默认为false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'string',
            'endTime' => 'string',
            'sqlExpression' => 'string',
            'originalContent' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  搜索起始时间（UTC时间，毫秒级）。
    * endTime  搜索结束时间（UTC时间，毫秒级）。
    * sqlExpression  支持SQL语句搜索， 目前支持\"GROUP BY\", \"LIKE\"和\"WHERE\"。
    * originalContent  返回内容中是否包含原始日志， 默认为false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => null,
        'endTime' => null,
        'sqlExpression' => null,
        'originalContent' => null
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
    * startTime  搜索起始时间（UTC时间，毫秒级）。
    * endTime  搜索结束时间（UTC时间，毫秒级）。
    * sqlExpression  支持SQL语句搜索， 目前支持\"GROUP BY\", \"LIKE\"和\"WHERE\"。
    * originalContent  返回内容中是否包含原始日志， 默认为false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'sqlExpression' => 'sql_expression',
            'originalContent' => 'original_content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  搜索起始时间（UTC时间，毫秒级）。
    * endTime  搜索结束时间（UTC时间，毫秒级）。
    * sqlExpression  支持SQL语句搜索， 目前支持\"GROUP BY\", \"LIKE\"和\"WHERE\"。
    * originalContent  返回内容中是否包含原始日志， 默认为false。
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'sqlExpression' => 'setSqlExpression',
            'originalContent' => 'setOriginalContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  搜索起始时间（UTC时间，毫秒级）。
    * endTime  搜索结束时间（UTC时间，毫秒级）。
    * sqlExpression  支持SQL语句搜索， 目前支持\"GROUP BY\", \"LIKE\"和\"WHERE\"。
    * originalContent  返回内容中是否包含原始日志， 默认为false。
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'sqlExpression' => 'getSqlExpression',
            'originalContent' => 'getOriginalContent'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['sqlExpression'] = isset($data['sqlExpression']) ? $data['sqlExpression'] : null;
        $this->container['originalContent'] = isset($data['originalContent']) ? $data['originalContent'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if ((mb_strlen($this->container['startTime']) > 13)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 13.";
            }
            if ((mb_strlen($this->container['startTime']) < 13)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 13.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if ((mb_strlen($this->container['endTime']) > 13)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 13.";
            }
            if ((mb_strlen($this->container['endTime']) < 13)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 13.";
            }
            if (!is_null($this->container['sqlExpression']) && (mb_strlen($this->container['sqlExpression']) > 100)) {
                $invalidProperties[] = "invalid value for 'sqlExpression', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['sqlExpression']) && (mb_strlen($this->container['sqlExpression']) < 0)) {
                $invalidProperties[] = "invalid value for 'sqlExpression', the character length must be bigger than or equal to 0.";
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
    * Gets startTime
    *  搜索起始时间（UTC时间，毫秒级）。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 搜索起始时间（UTC时间，毫秒级）。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  搜索结束时间（UTC时间，毫秒级）。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 搜索结束时间（UTC时间，毫秒级）。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets sqlExpression
    *  支持SQL语句搜索， 目前支持\"GROUP BY\", \"LIKE\"和\"WHERE\"。
    *
    * @return string|null
    */
    public function getSqlExpression()
    {
        return $this->container['sqlExpression'];
    }

    /**
    * Sets sqlExpression
    *
    * @param string|null $sqlExpression 支持SQL语句搜索， 目前支持\"GROUP BY\", \"LIKE\"和\"WHERE\"。
    *
    * @return $this
    */
    public function setSqlExpression($sqlExpression)
    {
        $this->container['sqlExpression'] = $sqlExpression;
        return $this;
    }

    /**
    * Gets originalContent
    *  返回内容中是否包含原始日志， 默认为false。
    *
    * @return bool|null
    */
    public function getOriginalContent()
    {
        return $this->container['originalContent'];
    }

    /**
    * Sets originalContent
    *
    * @param bool|null $originalContent 返回内容中是否包含原始日志， 默认为false。
    *
    * @return $this
    */
    public function setOriginalContent($originalContent)
    {
        $this->container['originalContent'] = $originalContent;
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

