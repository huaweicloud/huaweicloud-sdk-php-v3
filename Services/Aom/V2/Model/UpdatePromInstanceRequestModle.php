<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePromInstanceRequestModle implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePromInstanceRequestModle';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * promId  待修改的普罗实例id。
    * promLimits  promLimits
    * promName  待修改的普罗实例名称，名称不能以下划线或中划线开头和结尾，只含有中文，英文，数字，下划线，中划线，长度1-100。
    * aggrPrometheusInfo  被聚合的账号和普罗实例列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'promId' => 'string',
            'promLimits' => '\HuaweiCloud\SDK\Aom\V2\Model\PromLimits',
            'promName' => 'string',
            'aggrPrometheusInfo' => '\HuaweiCloud\SDK\Aom\V2\Model\AggrPrometheusInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * promId  待修改的普罗实例id。
    * promLimits  promLimits
    * promName  待修改的普罗实例名称，名称不能以下划线或中划线开头和结尾，只含有中文，英文，数字，下划线，中划线，长度1-100。
    * aggrPrometheusInfo  被聚合的账号和普罗实例列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'promId' => null,
        'promLimits' => null,
        'promName' => null,
        'aggrPrometheusInfo' => null
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
    * promId  待修改的普罗实例id。
    * promLimits  promLimits
    * promName  待修改的普罗实例名称，名称不能以下划线或中划线开头和结尾，只含有中文，英文，数字，下划线，中划线，长度1-100。
    * aggrPrometheusInfo  被聚合的账号和普罗实例列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'promId' => 'prom_id',
            'promLimits' => 'prom_limits',
            'promName' => 'prom_name',
            'aggrPrometheusInfo' => 'aggr_prometheus_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * promId  待修改的普罗实例id。
    * promLimits  promLimits
    * promName  待修改的普罗实例名称，名称不能以下划线或中划线开头和结尾，只含有中文，英文，数字，下划线，中划线，长度1-100。
    * aggrPrometheusInfo  被聚合的账号和普罗实例列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'promId' => 'setPromId',
            'promLimits' => 'setPromLimits',
            'promName' => 'setPromName',
            'aggrPrometheusInfo' => 'setAggrPrometheusInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * promId  待修改的普罗实例id。
    * promLimits  promLimits
    * promName  待修改的普罗实例名称，名称不能以下划线或中划线开头和结尾，只含有中文，英文，数字，下划线，中划线，长度1-100。
    * aggrPrometheusInfo  被聚合的账号和普罗实例列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'promId' => 'getPromId',
            'promLimits' => 'getPromLimits',
            'promName' => 'getPromName',
            'aggrPrometheusInfo' => 'getAggrPrometheusInfo'
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
        $this->container['promId'] = isset($data['promId']) ? $data['promId'] : null;
        $this->container['promLimits'] = isset($data['promLimits']) ? $data['promLimits'] : null;
        $this->container['promName'] = isset($data['promName']) ? $data['promName'] : null;
        $this->container['aggrPrometheusInfo'] = isset($data['aggrPrometheusInfo']) ? $data['aggrPrometheusInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['promId'] === null) {
            $invalidProperties[] = "'promId' can't be null";
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
    * Gets promId
    *  待修改的普罗实例id。
    *
    * @return string
    */
    public function getPromId()
    {
        return $this->container['promId'];
    }

    /**
    * Sets promId
    *
    * @param string $promId 待修改的普罗实例id。
    *
    * @return $this
    */
    public function setPromId($promId)
    {
        $this->container['promId'] = $promId;
        return $this;
    }

    /**
    * Gets promLimits
    *  promLimits
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\PromLimits|null
    */
    public function getPromLimits()
    {
        return $this->container['promLimits'];
    }

    /**
    * Sets promLimits
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\PromLimits|null $promLimits promLimits
    *
    * @return $this
    */
    public function setPromLimits($promLimits)
    {
        $this->container['promLimits'] = $promLimits;
        return $this;
    }

    /**
    * Gets promName
    *  待修改的普罗实例名称，名称不能以下划线或中划线开头和结尾，只含有中文，英文，数字，下划线，中划线，长度1-100。
    *
    * @return string|null
    */
    public function getPromName()
    {
        return $this->container['promName'];
    }

    /**
    * Sets promName
    *
    * @param string|null $promName 待修改的普罗实例名称，名称不能以下划线或中划线开头和结尾，只含有中文，英文，数字，下划线，中划线，长度1-100。
    *
    * @return $this
    */
    public function setPromName($promName)
    {
        $this->container['promName'] = $promName;
        return $this;
    }

    /**
    * Gets aggrPrometheusInfo
    *  被聚合的账号和普罗实例列表。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\AggrPrometheusInfo[]|null
    */
    public function getAggrPrometheusInfo()
    {
        return $this->container['aggrPrometheusInfo'];
    }

    /**
    * Sets aggrPrometheusInfo
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\AggrPrometheusInfo[]|null $aggrPrometheusInfo 被聚合的账号和普罗实例列表。
    *
    * @return $this
    */
    public function setAggrPrometheusInfo($aggrPrometheusInfo)
    {
        $this->container['aggrPrometheusInfo'] = $aggrPrometheusInfo;
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

