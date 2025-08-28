<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstanceMultiNodesSingleMetric implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstanceMultiNodesSingleMetric';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metricName  指标名称
    * startAt  开始时间
    * endAt  结束时间
    * instanceInfos  实例信息列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metricName' => 'string',
            'startAt' => 'int',
            'endAt' => 'int',
            'instanceInfos' => '\HuaweiCloud\SDK\Das\V3\Model\ListInstanceMultiNodesSingleMetricInstanceInfos[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metricName  指标名称
    * startAt  开始时间
    * endAt  结束时间
    * instanceInfos  实例信息列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metricName' => null,
        'startAt' => 'int64',
        'endAt' => 'int64',
        'instanceInfos' => null
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
    * metricName  指标名称
    * startAt  开始时间
    * endAt  结束时间
    * instanceInfos  实例信息列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metricName' => 'metric_name',
            'startAt' => 'start_at',
            'endAt' => 'end_at',
            'instanceInfos' => 'instance_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metricName  指标名称
    * startAt  开始时间
    * endAt  结束时间
    * instanceInfos  实例信息列表
    *
    * @var string[]
    */
    protected static $setters = [
            'metricName' => 'setMetricName',
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt',
            'instanceInfos' => 'setInstanceInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metricName  指标名称
    * startAt  开始时间
    * endAt  结束时间
    * instanceInfos  实例信息列表
    *
    * @var string[]
    */
    protected static $getters = [
            'metricName' => 'getMetricName',
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt',
            'instanceInfos' => 'getInstanceInfos'
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
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
        $this->container['instanceInfos'] = isset($data['instanceInfos']) ? $data['instanceInfos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['metricName'] === null) {
            $invalidProperties[] = "'metricName' can't be null";
        }
        if ($this->container['startAt'] === null) {
            $invalidProperties[] = "'startAt' can't be null";
        }
        if ($this->container['endAt'] === null) {
            $invalidProperties[] = "'endAt' can't be null";
        }
        if ($this->container['instanceInfos'] === null) {
            $invalidProperties[] = "'instanceInfos' can't be null";
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
    * Gets metricName
    *  指标名称
    *
    * @return string
    */
    public function getMetricName()
    {
        return $this->container['metricName'];
    }

    /**
    * Sets metricName
    *
    * @param string $metricName 指标名称
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets startAt
    *  开始时间
    *
    * @return int
    */
    public function getStartAt()
    {
        return $this->container['startAt'];
    }

    /**
    * Sets startAt
    *
    * @param int $startAt 开始时间
    *
    * @return $this
    */
    public function setStartAt($startAt)
    {
        $this->container['startAt'] = $startAt;
        return $this;
    }

    /**
    * Gets endAt
    *  结束时间
    *
    * @return int
    */
    public function getEndAt()
    {
        return $this->container['endAt'];
    }

    /**
    * Sets endAt
    *
    * @param int $endAt 结束时间
    *
    * @return $this
    */
    public function setEndAt($endAt)
    {
        $this->container['endAt'] = $endAt;
        return $this;
    }

    /**
    * Gets instanceInfos
    *  实例信息列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ListInstanceMultiNodesSingleMetricInstanceInfos[]
    */
    public function getInstanceInfos()
    {
        return $this->container['instanceInfos'];
    }

    /**
    * Sets instanceInfos
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ListInstanceMultiNodesSingleMetricInstanceInfos[] $instanceInfos 实例信息列表
    *
    * @return $this
    */
    public function setInstanceInfos($instanceInfos)
    {
        $this->container['instanceInfos'] = $instanceInfos;
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

