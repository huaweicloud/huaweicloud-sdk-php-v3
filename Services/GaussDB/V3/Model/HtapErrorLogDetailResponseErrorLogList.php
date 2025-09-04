<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HtapErrorLogDetailResponseErrorLogList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HtapErrorLogDetailResponse_error_log_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  **参数解释**： HTAP标准版实例节点ID。  **取值范围**：  不涉及。
    * time  **参数解释**： 日志时间。  **取值范围**：  不涉及。
    * level  **参数解释**： 日志级别。  **取值范围**：  不涉及。
    * content  **参数解释**： 日志内容。  **取值范围**：  不涉及。
    * lineNum  **参数解释**： 日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'time' => 'string',
            'level' => 'string',
            'content' => 'string',
            'lineNum' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  **参数解释**： HTAP标准版实例节点ID。  **取值范围**：  不涉及。
    * time  **参数解释**： 日志时间。  **取值范围**：  不涉及。
    * level  **参数解释**： 日志级别。  **取值范围**：  不涉及。
    * content  **参数解释**： 日志内容。  **取值范围**：  不涉及。
    * lineNum  **参数解释**： 日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'time' => null,
        'level' => null,
        'content' => null,
        'lineNum' => null
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
    * nodeId  **参数解释**： HTAP标准版实例节点ID。  **取值范围**：  不涉及。
    * time  **参数解释**： 日志时间。  **取值范围**：  不涉及。
    * level  **参数解释**： 日志级别。  **取值范围**：  不涉及。
    * content  **参数解释**： 日志内容。  **取值范围**：  不涉及。
    * lineNum  **参数解释**： 日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'time' => 'time',
            'level' => 'level',
            'content' => 'content',
            'lineNum' => 'line_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  **参数解释**： HTAP标准版实例节点ID。  **取值范围**：  不涉及。
    * time  **参数解释**： 日志时间。  **取值范围**：  不涉及。
    * level  **参数解释**： 日志级别。  **取值范围**：  不涉及。
    * content  **参数解释**： 日志内容。  **取值范围**：  不涉及。
    * lineNum  **参数解释**： 日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'time' => 'setTime',
            'level' => 'setLevel',
            'content' => 'setContent',
            'lineNum' => 'setLineNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  **参数解释**： HTAP标准版实例节点ID。  **取值范围**：  不涉及。
    * time  **参数解释**： 日志时间。  **取值范围**：  不涉及。
    * level  **参数解释**： 日志级别。  **取值范围**：  不涉及。
    * content  **参数解释**： 日志内容。  **取值范围**：  不涉及。
    * lineNum  **参数解释**： 日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'time' => 'getTime',
            'level' => 'getLevel',
            'content' => 'getContent',
            'lineNum' => 'getLineNum'
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['lineNum'] = isset($data['lineNum']) ? $data['lineNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
            if ((mb_strlen($this->container['nodeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['nodeId']) < 2)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
            if ((mb_strlen($this->container['time']) > 64)) {
                $invalidProperties[] = "invalid value for 'time', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['time']) < 2)) {
                $invalidProperties[] = "invalid value for 'time', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
            if ((mb_strlen($this->container['level']) > 64)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['level']) < 2)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
            if ((mb_strlen($this->container['content']) > 1024)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['content']) < 2)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['lineNum'] === null) {
            $invalidProperties[] = "'lineNum' can't be null";
        }
            if ((mb_strlen($this->container['lineNum']) > 20)) {
                $invalidProperties[] = "invalid value for 'lineNum', the character length must be smaller than or equal to 20.";
            }
            if ((mb_strlen($this->container['lineNum']) < 0)) {
                $invalidProperties[] = "invalid value for 'lineNum', the character length must be bigger than or equal to 0.";
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
    * Gets nodeId
    *  **参数解释**： HTAP标准版实例节点ID。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId **参数解释**： HTAP标准版实例节点ID。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets time
    *  **参数解释**： 日志时间。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string $time **参数解释**： 日志时间。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释**： 日志级别。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string $level **参数解释**： 日志级别。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets content
    *  **参数解释**： 日志内容。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string $content **参数解释**： 日志内容。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets lineNum
    *  **参数解释**： 日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getLineNum()
    {
        return $this->container['lineNum'];
    }

    /**
    * Sets lineNum
    *
    * @param string $lineNum **参数解释**： 日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setLineNum($lineNum)
    {
        $this->container['lineNum'] = $lineNum;
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

