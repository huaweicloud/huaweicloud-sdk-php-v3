<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchBusinessTopologyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchBusinessTopologyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeList  组件节点列表。
    * lineList  组件之间调用指向线列表。
    * collectorConfig  采集器配置。
    * realStartTime  开始时间。
    * realEndTime  结束时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeList' => '\HuaweiCloud\SDK\Apm\V1\Model\TopoNode[]',
            'lineList' => '\HuaweiCloud\SDK\Apm\V1\Model\TopoLine[]',
            'collectorConfig' => 'map[string,\HuaweiCloud\SDK\Apm\V1\Model\CollectorConfigModel]',
            'realStartTime' => 'int',
            'realEndTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeList  组件节点列表。
    * lineList  组件之间调用指向线列表。
    * collectorConfig  采集器配置。
    * realStartTime  开始时间。
    * realEndTime  结束时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeList' => null,
        'lineList' => null,
        'collectorConfig' => null,
        'realStartTime' => 'int64',
        'realEndTime' => 'int64'
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
    * nodeList  组件节点列表。
    * lineList  组件之间调用指向线列表。
    * collectorConfig  采集器配置。
    * realStartTime  开始时间。
    * realEndTime  结束时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeList' => 'node_list',
            'lineList' => 'line_list',
            'collectorConfig' => 'collector_config',
            'realStartTime' => 'real_start_time',
            'realEndTime' => 'real_end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeList  组件节点列表。
    * lineList  组件之间调用指向线列表。
    * collectorConfig  采集器配置。
    * realStartTime  开始时间。
    * realEndTime  结束时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeList' => 'setNodeList',
            'lineList' => 'setLineList',
            'collectorConfig' => 'setCollectorConfig',
            'realStartTime' => 'setRealStartTime',
            'realEndTime' => 'setRealEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeList  组件节点列表。
    * lineList  组件之间调用指向线列表。
    * collectorConfig  采集器配置。
    * realStartTime  开始时间。
    * realEndTime  结束时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeList' => 'getNodeList',
            'lineList' => 'getLineList',
            'collectorConfig' => 'getCollectorConfig',
            'realStartTime' => 'getRealStartTime',
            'realEndTime' => 'getRealEndTime'
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
        $this->container['nodeList'] = isset($data['nodeList']) ? $data['nodeList'] : null;
        $this->container['lineList'] = isset($data['lineList']) ? $data['lineList'] : null;
        $this->container['collectorConfig'] = isset($data['collectorConfig']) ? $data['collectorConfig'] : null;
        $this->container['realStartTime'] = isset($data['realStartTime']) ? $data['realStartTime'] : null;
        $this->container['realEndTime'] = isset($data['realEndTime']) ? $data['realEndTime'] : null;
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
    * Gets nodeList
    *  组件节点列表。
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\TopoNode[]|null
    */
    public function getNodeList()
    {
        return $this->container['nodeList'];
    }

    /**
    * Sets nodeList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\TopoNode[]|null $nodeList 组件节点列表。
    *
    * @return $this
    */
    public function setNodeList($nodeList)
    {
        $this->container['nodeList'] = $nodeList;
        return $this;
    }

    /**
    * Gets lineList
    *  组件之间调用指向线列表。
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\TopoLine[]|null
    */
    public function getLineList()
    {
        return $this->container['lineList'];
    }

    /**
    * Sets lineList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\TopoLine[]|null $lineList 组件之间调用指向线列表。
    *
    * @return $this
    */
    public function setLineList($lineList)
    {
        $this->container['lineList'] = $lineList;
        return $this;
    }

    /**
    * Gets collectorConfig
    *  采集器配置。
    *
    * @return map[string,\HuaweiCloud\SDK\Apm\V1\Model\CollectorConfigModel]|null
    */
    public function getCollectorConfig()
    {
        return $this->container['collectorConfig'];
    }

    /**
    * Sets collectorConfig
    *
    * @param map[string,\HuaweiCloud\SDK\Apm\V1\Model\CollectorConfigModel]|null $collectorConfig 采集器配置。
    *
    * @return $this
    */
    public function setCollectorConfig($collectorConfig)
    {
        $this->container['collectorConfig'] = $collectorConfig;
        return $this;
    }

    /**
    * Gets realStartTime
    *  开始时间。
    *
    * @return int|null
    */
    public function getRealStartTime()
    {
        return $this->container['realStartTime'];
    }

    /**
    * Sets realStartTime
    *
    * @param int|null $realStartTime 开始时间。
    *
    * @return $this
    */
    public function setRealStartTime($realStartTime)
    {
        $this->container['realStartTime'] = $realStartTime;
        return $this;
    }

    /**
    * Gets realEndTime
    *  结束时间。
    *
    * @return int|null
    */
    public function getRealEndTime()
    {
        return $this->container['realEndTime'];
    }

    /**
    * Sets realEndTime
    *
    * @param int|null $realEndTime 结束时间。
    *
    * @return $this
    */
    public function setRealEndTime($realEndTime)
    {
        $this->container['realEndTime'] = $realEndTime;
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

