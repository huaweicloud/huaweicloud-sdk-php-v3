<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCompletionRateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCompletionRateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dividendValue  指标分子数值
    * divisorValue  指标分母数值
    * metricName  指标名称
    * metricValue  指标数值
    * projectId  项目ID
    * projectName  项目名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dividendValue' => 'string',
            'divisorValue' => 'string',
            'metricName' => 'string',
            'metricValue' => 'string',
            'projectId' => 'string',
            'projectName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dividendValue  指标分子数值
    * divisorValue  指标分母数值
    * metricName  指标名称
    * metricValue  指标数值
    * projectId  项目ID
    * projectName  项目名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dividendValue' => null,
        'divisorValue' => null,
        'metricName' => null,
        'metricValue' => null,
        'projectId' => null,
        'projectName' => null
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
    * dividendValue  指标分子数值
    * divisorValue  指标分母数值
    * metricName  指标名称
    * metricValue  指标数值
    * projectId  项目ID
    * projectName  项目名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dividendValue' => 'dividend_value',
            'divisorValue' => 'divisor_value',
            'metricName' => 'metric_name',
            'metricValue' => 'metric_value',
            'projectId' => 'project_id',
            'projectName' => 'project_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dividendValue  指标分子数值
    * divisorValue  指标分母数值
    * metricName  指标名称
    * metricValue  指标数值
    * projectId  项目ID
    * projectName  项目名称
    *
    * @var string[]
    */
    protected static $setters = [
            'dividendValue' => 'setDividendValue',
            'divisorValue' => 'setDivisorValue',
            'metricName' => 'setMetricName',
            'metricValue' => 'setMetricValue',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dividendValue  指标分子数值
    * divisorValue  指标分母数值
    * metricName  指标名称
    * metricValue  指标数值
    * projectId  项目ID
    * projectName  项目名称
    *
    * @var string[]
    */
    protected static $getters = [
            'dividendValue' => 'getDividendValue',
            'divisorValue' => 'getDivisorValue',
            'metricName' => 'getMetricName',
            'metricValue' => 'getMetricValue',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName'
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
        $this->container['dividendValue'] = isset($data['dividendValue']) ? $data['dividendValue'] : null;
        $this->container['divisorValue'] = isset($data['divisorValue']) ? $data['divisorValue'] : null;
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['metricValue'] = isset($data['metricValue']) ? $data['metricValue'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
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
    * Gets dividendValue
    *  指标分子数值
    *
    * @return string|null
    */
    public function getDividendValue()
    {
        return $this->container['dividendValue'];
    }

    /**
    * Sets dividendValue
    *
    * @param string|null $dividendValue 指标分子数值
    *
    * @return $this
    */
    public function setDividendValue($dividendValue)
    {
        $this->container['dividendValue'] = $dividendValue;
        return $this;
    }

    /**
    * Gets divisorValue
    *  指标分母数值
    *
    * @return string|null
    */
    public function getDivisorValue()
    {
        return $this->container['divisorValue'];
    }

    /**
    * Sets divisorValue
    *
    * @param string|null $divisorValue 指标分母数值
    *
    * @return $this
    */
    public function setDivisorValue($divisorValue)
    {
        $this->container['divisorValue'] = $divisorValue;
        return $this;
    }

    /**
    * Gets metricName
    *  指标名称
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
    * @param string|null $metricName 指标名称
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets metricValue
    *  指标数值
    *
    * @return string|null
    */
    public function getMetricValue()
    {
        return $this->container['metricValue'];
    }

    /**
    * Sets metricValue
    *
    * @param string|null $metricValue 指标数值
    *
    * @return $this
    */
    public function setMetricValue($metricValue)
    {
        $this->container['metricValue'] = $metricValue;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  项目名称
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName 项目名称
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
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

