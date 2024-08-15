<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLogsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLogsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  日志条数。
    * logs  日志信息。
    * isQueryComplete  是否查询完成。
    * analysisLogs  分析日志返回响应体
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'logs' => '\HuaweiCloud\SDK\Lts\V2\Model\LogContents[]',
            'isQueryComplete' => 'bool',
            'analysisLogs' => 'map[string,string][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  日志条数。
    * logs  日志信息。
    * isQueryComplete  是否查询完成。
    * analysisLogs  分析日志返回响应体
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => null,
        'logs' => null,
        'isQueryComplete' => null,
        'analysisLogs' => null
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
    * count  日志条数。
    * logs  日志信息。
    * isQueryComplete  是否查询完成。
    * analysisLogs  分析日志返回响应体
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'logs' => 'logs',
            'isQueryComplete' => 'isQueryComplete',
            'analysisLogs' => 'analysisLogs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  日志条数。
    * logs  日志信息。
    * isQueryComplete  是否查询完成。
    * analysisLogs  分析日志返回响应体
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'logs' => 'setLogs',
            'isQueryComplete' => 'setIsQueryComplete',
            'analysisLogs' => 'setAnalysisLogs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  日志条数。
    * logs  日志信息。
    * isQueryComplete  是否查询完成。
    * analysisLogs  分析日志返回响应体
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'logs' => 'getLogs',
            'isQueryComplete' => 'getIsQueryComplete',
            'analysisLogs' => 'getAnalysisLogs'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['logs'] = isset($data['logs']) ? $data['logs'] : null;
        $this->container['isQueryComplete'] = isset($data['isQueryComplete']) ? $data['isQueryComplete'] : null;
        $this->container['analysisLogs'] = isset($data['analysisLogs']) ? $data['analysisLogs'] : null;
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
    * Gets count
    *  日志条数。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 日志条数。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets logs
    *  日志信息。
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\LogContents[]|null
    */
    public function getLogs()
    {
        return $this->container['logs'];
    }

    /**
    * Sets logs
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\LogContents[]|null $logs 日志信息。
    *
    * @return $this
    */
    public function setLogs($logs)
    {
        $this->container['logs'] = $logs;
        return $this;
    }

    /**
    * Gets isQueryComplete
    *  是否查询完成。
    *
    * @return bool|null
    */
    public function getIsQueryComplete()
    {
        return $this->container['isQueryComplete'];
    }

    /**
    * Sets isQueryComplete
    *
    * @param bool|null $isQueryComplete 是否查询完成。
    *
    * @return $this
    */
    public function setIsQueryComplete($isQueryComplete)
    {
        $this->container['isQueryComplete'] = $isQueryComplete;
        return $this;
    }

    /**
    * Gets analysisLogs
    *  分析日志返回响应体
    *
    * @return map[string,string][]|null
    */
    public function getAnalysisLogs()
    {
        return $this->container['analysisLogs'];
    }

    /**
    * Sets analysisLogs
    *
    * @param map[string,string][]|null $analysisLogs 分析日志返回响应体
    *
    * @return $this
    */
    public function setAnalysisLogs($analysisLogs)
    {
        $this->container['analysisLogs'] = $analysisLogs;
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

