<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MeasureUnitRest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MeasureUnitRest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * measureId  度量单位ID。 例如：10表示GB。
    * measureName  度量单位的名称，根据查询的语言类型返回结果。 例如：GB。
    * abbreviation  度量单位名称的英文缩写。 例如：度量单位名称“GB”的英文缩写为“GB”。
    * measureType  度量类型。 1：货币2：时长3：流量4：数量7：容量9：行数10：周期11：频率12：个数16：带宽速率17：容量时长18：查询速率19：带宽速率（1000进制）20：性能测试用量21：面积22：视频23：吞吐量24：分辨率26：通用资源包抵扣单位27：核数*时长28：内存*时长29：IOPS*时长30：吞吐量*时长31：个/时长40：流量（1000进制）41：1K Tokens
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'measureId' => 'int',
            'measureName' => 'string',
            'abbreviation' => 'string',
            'measureType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * measureId  度量单位ID。 例如：10表示GB。
    * measureName  度量单位的名称，根据查询的语言类型返回结果。 例如：GB。
    * abbreviation  度量单位名称的英文缩写。 例如：度量单位名称“GB”的英文缩写为“GB”。
    * measureType  度量类型。 1：货币2：时长3：流量4：数量7：容量9：行数10：周期11：频率12：个数16：带宽速率17：容量时长18：查询速率19：带宽速率（1000进制）20：性能测试用量21：面积22：视频23：吞吐量24：分辨率26：通用资源包抵扣单位27：核数*时长28：内存*时长29：IOPS*时长30：吞吐量*时长31：个/时长40：流量（1000进制）41：1K Tokens
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'measureId' => 'int32',
        'measureName' => null,
        'abbreviation' => null,
        'measureType' => 'int32'
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
    * measureId  度量单位ID。 例如：10表示GB。
    * measureName  度量单位的名称，根据查询的语言类型返回结果。 例如：GB。
    * abbreviation  度量单位名称的英文缩写。 例如：度量单位名称“GB”的英文缩写为“GB”。
    * measureType  度量类型。 1：货币2：时长3：流量4：数量7：容量9：行数10：周期11：频率12：个数16：带宽速率17：容量时长18：查询速率19：带宽速率（1000进制）20：性能测试用量21：面积22：视频23：吞吐量24：分辨率26：通用资源包抵扣单位27：核数*时长28：内存*时长29：IOPS*时长30：吞吐量*时长31：个/时长40：流量（1000进制）41：1K Tokens
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'measureId' => 'measure_id',
            'measureName' => 'measure_name',
            'abbreviation' => 'abbreviation',
            'measureType' => 'measure_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * measureId  度量单位ID。 例如：10表示GB。
    * measureName  度量单位的名称，根据查询的语言类型返回结果。 例如：GB。
    * abbreviation  度量单位名称的英文缩写。 例如：度量单位名称“GB”的英文缩写为“GB”。
    * measureType  度量类型。 1：货币2：时长3：流量4：数量7：容量9：行数10：周期11：频率12：个数16：带宽速率17：容量时长18：查询速率19：带宽速率（1000进制）20：性能测试用量21：面积22：视频23：吞吐量24：分辨率26：通用资源包抵扣单位27：核数*时长28：内存*时长29：IOPS*时长30：吞吐量*时长31：个/时长40：流量（1000进制）41：1K Tokens
    *
    * @var string[]
    */
    protected static $setters = [
            'measureId' => 'setMeasureId',
            'measureName' => 'setMeasureName',
            'abbreviation' => 'setAbbreviation',
            'measureType' => 'setMeasureType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * measureId  度量单位ID。 例如：10表示GB。
    * measureName  度量单位的名称，根据查询的语言类型返回结果。 例如：GB。
    * abbreviation  度量单位名称的英文缩写。 例如：度量单位名称“GB”的英文缩写为“GB”。
    * measureType  度量类型。 1：货币2：时长3：流量4：数量7：容量9：行数10：周期11：频率12：个数16：带宽速率17：容量时长18：查询速率19：带宽速率（1000进制）20：性能测试用量21：面积22：视频23：吞吐量24：分辨率26：通用资源包抵扣单位27：核数*时长28：内存*时长29：IOPS*时长30：吞吐量*时长31：个/时长40：流量（1000进制）41：1K Tokens
    *
    * @var string[]
    */
    protected static $getters = [
            'measureId' => 'getMeasureId',
            'measureName' => 'getMeasureName',
            'abbreviation' => 'getAbbreviation',
            'measureType' => 'getMeasureType'
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
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['measureName'] = isset($data['measureName']) ? $data['measureName'] : null;
        $this->container['abbreviation'] = isset($data['abbreviation']) ? $data['abbreviation'] : null;
        $this->container['measureType'] = isset($data['measureType']) ? $data['measureType'] : null;
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
    * Gets measureId
    *  度量单位ID。 例如：10表示GB。
    *
    * @return int|null
    */
    public function getMeasureId()
    {
        return $this->container['measureId'];
    }

    /**
    * Sets measureId
    *
    * @param int|null $measureId 度量单位ID。 例如：10表示GB。
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
        return $this;
    }

    /**
    * Gets measureName
    *  度量单位的名称，根据查询的语言类型返回结果。 例如：GB。
    *
    * @return string|null
    */
    public function getMeasureName()
    {
        return $this->container['measureName'];
    }

    /**
    * Sets measureName
    *
    * @param string|null $measureName 度量单位的名称，根据查询的语言类型返回结果。 例如：GB。
    *
    * @return $this
    */
    public function setMeasureName($measureName)
    {
        $this->container['measureName'] = $measureName;
        return $this;
    }

    /**
    * Gets abbreviation
    *  度量单位名称的英文缩写。 例如：度量单位名称“GB”的英文缩写为“GB”。
    *
    * @return string|null
    */
    public function getAbbreviation()
    {
        return $this->container['abbreviation'];
    }

    /**
    * Sets abbreviation
    *
    * @param string|null $abbreviation 度量单位名称的英文缩写。 例如：度量单位名称“GB”的英文缩写为“GB”。
    *
    * @return $this
    */
    public function setAbbreviation($abbreviation)
    {
        $this->container['abbreviation'] = $abbreviation;
        return $this;
    }

    /**
    * Gets measureType
    *  度量类型。 1：货币2：时长3：流量4：数量7：容量9：行数10：周期11：频率12：个数16：带宽速率17：容量时长18：查询速率19：带宽速率（1000进制）20：性能测试用量21：面积22：视频23：吞吐量24：分辨率26：通用资源包抵扣单位27：核数*时长28：内存*时长29：IOPS*时长30：吞吐量*时长31：个/时长40：流量（1000进制）41：1K Tokens
    *
    * @return int|null
    */
    public function getMeasureType()
    {
        return $this->container['measureType'];
    }

    /**
    * Sets measureType
    *
    * @param int|null $measureType 度量类型。 1：货币2：时长3：流量4：数量7：容量9：行数10：周期11：频率12：个数16：带宽速率17：容量时长18：查询速率19：带宽速率（1000进制）20：性能测试用量21：面积22：视频23：吞吐量24：分辨率26：通用资源包抵扣单位27：核数*时长28：内存*时长29：IOPS*时长30：吞吐量*时长31：个/时长40：流量（1000进制）41：1K Tokens
    *
    * @return $this
    */
    public function setMeasureType($measureType)
    {
        $this->container['measureType'] = $measureType;
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

