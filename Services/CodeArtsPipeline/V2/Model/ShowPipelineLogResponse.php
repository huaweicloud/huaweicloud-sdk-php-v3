<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPipelineLogResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPipelineLogResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hasMore  是否有更多日志
    * endOffset  查询日志结束偏移。填入请求体end_offset字段，用于查询下一页日志。
    * startOffset  查询日志起始偏移。填入请求体start_offset字段，用于查询下一页日志。
    * log  日志内容
    * location  日志存储位置
    * stepRunId  所属步骤ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hasMore' => 'bool',
            'endOffset' => 'string',
            'startOffset' => 'string',
            'log' => 'string',
            'location' => 'string',
            'stepRunId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hasMore  是否有更多日志
    * endOffset  查询日志结束偏移。填入请求体end_offset字段，用于查询下一页日志。
    * startOffset  查询日志起始偏移。填入请求体start_offset字段，用于查询下一页日志。
    * log  日志内容
    * location  日志存储位置
    * stepRunId  所属步骤ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hasMore' => null,
        'endOffset' => null,
        'startOffset' => null,
        'log' => null,
        'location' => null,
        'stepRunId' => null
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
    * hasMore  是否有更多日志
    * endOffset  查询日志结束偏移。填入请求体end_offset字段，用于查询下一页日志。
    * startOffset  查询日志起始偏移。填入请求体start_offset字段，用于查询下一页日志。
    * log  日志内容
    * location  日志存储位置
    * stepRunId  所属步骤ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hasMore' => 'has_more',
            'endOffset' => 'end_offset',
            'startOffset' => 'start_offset',
            'log' => 'log',
            'location' => 'location',
            'stepRunId' => 'step_run_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hasMore  是否有更多日志
    * endOffset  查询日志结束偏移。填入请求体end_offset字段，用于查询下一页日志。
    * startOffset  查询日志起始偏移。填入请求体start_offset字段，用于查询下一页日志。
    * log  日志内容
    * location  日志存储位置
    * stepRunId  所属步骤ID
    *
    * @var string[]
    */
    protected static $setters = [
            'hasMore' => 'setHasMore',
            'endOffset' => 'setEndOffset',
            'startOffset' => 'setStartOffset',
            'log' => 'setLog',
            'location' => 'setLocation',
            'stepRunId' => 'setStepRunId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hasMore  是否有更多日志
    * endOffset  查询日志结束偏移。填入请求体end_offset字段，用于查询下一页日志。
    * startOffset  查询日志起始偏移。填入请求体start_offset字段，用于查询下一页日志。
    * log  日志内容
    * location  日志存储位置
    * stepRunId  所属步骤ID
    *
    * @var string[]
    */
    protected static $getters = [
            'hasMore' => 'getHasMore',
            'endOffset' => 'getEndOffset',
            'startOffset' => 'getStartOffset',
            'log' => 'getLog',
            'location' => 'getLocation',
            'stepRunId' => 'getStepRunId'
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
        $this->container['hasMore'] = isset($data['hasMore']) ? $data['hasMore'] : null;
        $this->container['endOffset'] = isset($data['endOffset']) ? $data['endOffset'] : null;
        $this->container['startOffset'] = isset($data['startOffset']) ? $data['startOffset'] : null;
        $this->container['log'] = isset($data['log']) ? $data['log'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['stepRunId'] = isset($data['stepRunId']) ? $data['stepRunId'] : null;
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
    * Gets hasMore
    *  是否有更多日志
    *
    * @return bool|null
    */
    public function getHasMore()
    {
        return $this->container['hasMore'];
    }

    /**
    * Sets hasMore
    *
    * @param bool|null $hasMore 是否有更多日志
    *
    * @return $this
    */
    public function setHasMore($hasMore)
    {
        $this->container['hasMore'] = $hasMore;
        return $this;
    }

    /**
    * Gets endOffset
    *  查询日志结束偏移。填入请求体end_offset字段，用于查询下一页日志。
    *
    * @return string|null
    */
    public function getEndOffset()
    {
        return $this->container['endOffset'];
    }

    /**
    * Sets endOffset
    *
    * @param string|null $endOffset 查询日志结束偏移。填入请求体end_offset字段，用于查询下一页日志。
    *
    * @return $this
    */
    public function setEndOffset($endOffset)
    {
        $this->container['endOffset'] = $endOffset;
        return $this;
    }

    /**
    * Gets startOffset
    *  查询日志起始偏移。填入请求体start_offset字段，用于查询下一页日志。
    *
    * @return string|null
    */
    public function getStartOffset()
    {
        return $this->container['startOffset'];
    }

    /**
    * Sets startOffset
    *
    * @param string|null $startOffset 查询日志起始偏移。填入请求体start_offset字段，用于查询下一页日志。
    *
    * @return $this
    */
    public function setStartOffset($startOffset)
    {
        $this->container['startOffset'] = $startOffset;
        return $this;
    }

    /**
    * Gets log
    *  日志内容
    *
    * @return string|null
    */
    public function getLog()
    {
        return $this->container['log'];
    }

    /**
    * Sets log
    *
    * @param string|null $log 日志内容
    *
    * @return $this
    */
    public function setLog($log)
    {
        $this->container['log'] = $log;
        return $this;
    }

    /**
    * Gets location
    *  日志存储位置
    *
    * @return string|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param string|null $location 日志存储位置
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets stepRunId
    *  所属步骤ID
    *
    * @return string|null
    */
    public function getStepRunId()
    {
        return $this->container['stepRunId'];
    }

    /**
    * Sets stepRunId
    *
    * @param string|null $stepRunId 所属步骤ID
    *
    * @return $this
    */
    public function setStepRunId($stepRunId)
    {
        $this->container['stepRunId'] = $stepRunId;
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

