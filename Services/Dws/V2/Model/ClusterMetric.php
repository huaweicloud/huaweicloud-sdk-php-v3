<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterMetric implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterMetric';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scope  指标名称。
    * fields  指标表相关字段信息。
    * metricName  作用域。
    * collectRate  采集速率。
    * collectRange  采集时间范围。
    * createTime  创建时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scope' => 'string',
            'fields' => '\HuaweiCloud\SDK\Dws\V2\Model\SimpleFieldDto[]',
            'metricName' => 'string',
            'collectRate' => 'int',
            'collectRange' => 'string[]',
            'createTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scope  指标名称。
    * fields  指标表相关字段信息。
    * metricName  作用域。
    * collectRate  采集速率。
    * collectRange  采集时间范围。
    * createTime  创建时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scope' => null,
        'fields' => null,
        'metricName' => null,
        'collectRate' => 'int32',
        'collectRange' => null,
        'createTime' => null
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
    * scope  指标名称。
    * fields  指标表相关字段信息。
    * metricName  作用域。
    * collectRate  采集速率。
    * collectRange  采集时间范围。
    * createTime  创建时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scope' => 'scope',
            'fields' => 'fields',
            'metricName' => 'metric_name',
            'collectRate' => 'collect_rate',
            'collectRange' => 'collect_range',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scope  指标名称。
    * fields  指标表相关字段信息。
    * metricName  作用域。
    * collectRate  采集速率。
    * collectRange  采集时间范围。
    * createTime  创建时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'scope' => 'setScope',
            'fields' => 'setFields',
            'metricName' => 'setMetricName',
            'collectRate' => 'setCollectRate',
            'collectRange' => 'setCollectRange',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scope  指标名称。
    * fields  指标表相关字段信息。
    * metricName  作用域。
    * collectRate  采集速率。
    * collectRange  采集时间范围。
    * createTime  创建时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'scope' => 'getScope',
            'fields' => 'getFields',
            'metricName' => 'getMetricName',
            'collectRate' => 'getCollectRate',
            'collectRange' => 'getCollectRange',
            'createTime' => 'getCreateTime'
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
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['collectRate'] = isset($data['collectRate']) ? $data['collectRate'] : null;
        $this->container['collectRange'] = isset($data['collectRange']) ? $data['collectRange'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    * Gets scope
    *  指标名称。
    *
    * @return string|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string|null $scope 指标名称。
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets fields
    *  指标表相关字段信息。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\SimpleFieldDto[]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\SimpleFieldDto[]|null $fields 指标表相关字段信息。
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
        return $this;
    }

    /**
    * Gets metricName
    *  作用域。
    *
    * @return string|null
    */
    public function getMetricName()
    {
        return $this->container['metricName'];
    }

    /**
    * Sets metricName
    *
    * @param string|null $metricName 作用域。
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets collectRate
    *  采集速率。
    *
    * @return int|null
    */
    public function getCollectRate()
    {
        return $this->container['collectRate'];
    }

    /**
    * Sets collectRate
    *
    * @param int|null $collectRate 采集速率。
    *
    * @return $this
    */
    public function setCollectRate($collectRate)
    {
        $this->container['collectRate'] = $collectRate;
        return $this;
    }

    /**
    * Gets collectRange
    *  采集时间范围。
    *
    * @return string[]|null
    */
    public function getCollectRange()
    {
        return $this->container['collectRange'];
    }

    /**
    * Sets collectRange
    *
    * @param string[]|null $collectRange 采集时间范围。
    *
    * @return $this
    */
    public function setCollectRange($collectRange)
    {
        $this->container['collectRange'] = $collectRange;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

