<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrendQueryDataResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrendQueryDataResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * queryTime  **参数解释**： 查询时间。 **取值范围**： 不涉及。
    * indicatorName  **参数解释**： 监控指标名称。 **取值范围**： 不涉及。
    * objectId  **参数解释**： 监控对象ID。 **取值范围**： 不涉及。
    * unit  **参数解释**： 单位。 **取值范围**： 不涉及。
    * subObjectId  **参数解释**： 次级监控ID。 **取值范围**： 不涉及。
    * dataPoints  **参数解释**： 节点数据。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'queryTime' => 'int',
            'indicatorName' => 'string',
            'objectId' => 'string',
            'unit' => 'string',
            'subObjectId' => 'string',
            'dataPoints' => '\HuaweiCloud\SDK\Dws\V2\Model\TrendQueryData[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * queryTime  **参数解释**： 查询时间。 **取值范围**： 不涉及。
    * indicatorName  **参数解释**： 监控指标名称。 **取值范围**： 不涉及。
    * objectId  **参数解释**： 监控对象ID。 **取值范围**： 不涉及。
    * unit  **参数解释**： 单位。 **取值范围**： 不涉及。
    * subObjectId  **参数解释**： 次级监控ID。 **取值范围**： 不涉及。
    * dataPoints  **参数解释**： 节点数据。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'queryTime' => 'int64',
        'indicatorName' => null,
        'objectId' => null,
        'unit' => null,
        'subObjectId' => null,
        'dataPoints' => null
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
    * queryTime  **参数解释**： 查询时间。 **取值范围**： 不涉及。
    * indicatorName  **参数解释**： 监控指标名称。 **取值范围**： 不涉及。
    * objectId  **参数解释**： 监控对象ID。 **取值范围**： 不涉及。
    * unit  **参数解释**： 单位。 **取值范围**： 不涉及。
    * subObjectId  **参数解释**： 次级监控ID。 **取值范围**： 不涉及。
    * dataPoints  **参数解释**： 节点数据。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'queryTime' => 'query_time',
            'indicatorName' => 'indicator_name',
            'objectId' => 'object_id',
            'unit' => 'unit',
            'subObjectId' => 'sub_object_id',
            'dataPoints' => 'data_points'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * queryTime  **参数解释**： 查询时间。 **取值范围**： 不涉及。
    * indicatorName  **参数解释**： 监控指标名称。 **取值范围**： 不涉及。
    * objectId  **参数解释**： 监控对象ID。 **取值范围**： 不涉及。
    * unit  **参数解释**： 单位。 **取值范围**： 不涉及。
    * subObjectId  **参数解释**： 次级监控ID。 **取值范围**： 不涉及。
    * dataPoints  **参数解释**： 节点数据。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'queryTime' => 'setQueryTime',
            'indicatorName' => 'setIndicatorName',
            'objectId' => 'setObjectId',
            'unit' => 'setUnit',
            'subObjectId' => 'setSubObjectId',
            'dataPoints' => 'setDataPoints'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * queryTime  **参数解释**： 查询时间。 **取值范围**： 不涉及。
    * indicatorName  **参数解释**： 监控指标名称。 **取值范围**： 不涉及。
    * objectId  **参数解释**： 监控对象ID。 **取值范围**： 不涉及。
    * unit  **参数解释**： 单位。 **取值范围**： 不涉及。
    * subObjectId  **参数解释**： 次级监控ID。 **取值范围**： 不涉及。
    * dataPoints  **参数解释**： 节点数据。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'queryTime' => 'getQueryTime',
            'indicatorName' => 'getIndicatorName',
            'objectId' => 'getObjectId',
            'unit' => 'getUnit',
            'subObjectId' => 'getSubObjectId',
            'dataPoints' => 'getDataPoints'
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
        $this->container['queryTime'] = isset($data['queryTime']) ? $data['queryTime'] : null;
        $this->container['indicatorName'] = isset($data['indicatorName']) ? $data['indicatorName'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['subObjectId'] = isset($data['subObjectId']) ? $data['subObjectId'] : null;
        $this->container['dataPoints'] = isset($data['dataPoints']) ? $data['dataPoints'] : null;
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
    * Gets queryTime
    *  **参数解释**： 查询时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getQueryTime()
    {
        return $this->container['queryTime'];
    }

    /**
    * Sets queryTime
    *
    * @param int|null $queryTime **参数解释**： 查询时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setQueryTime($queryTime)
    {
        $this->container['queryTime'] = $queryTime;
        return $this;
    }

    /**
    * Gets indicatorName
    *  **参数解释**： 监控指标名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getIndicatorName()
    {
        return $this->container['indicatorName'];
    }

    /**
    * Sets indicatorName
    *
    * @param string|null $indicatorName **参数解释**： 监控指标名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIndicatorName($indicatorName)
    {
        $this->container['indicatorName'] = $indicatorName;
        return $this;
    }

    /**
    * Gets objectId
    *  **参数解释**： 监控对象ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string|null $objectId **参数解释**： 监控对象ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets unit
    *  **参数解释**： 单位。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit **参数解释**： 单位。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets subObjectId
    *  **参数解释**： 次级监控ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSubObjectId()
    {
        return $this->container['subObjectId'];
    }

    /**
    * Sets subObjectId
    *
    * @param string|null $subObjectId **参数解释**： 次级监控ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSubObjectId($subObjectId)
    {
        $this->container['subObjectId'] = $subObjectId;
        return $this;
    }

    /**
    * Gets dataPoints
    *  **参数解释**： 节点数据。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\TrendQueryData[]|null
    */
    public function getDataPoints()
    {
        return $this->container['dataPoints'];
    }

    /**
    * Sets dataPoints
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\TrendQueryData[]|null $dataPoints **参数解释**： 节点数据。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDataPoints($dataPoints)
    {
        $this->container['dataPoints'] = $dataPoints;
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

