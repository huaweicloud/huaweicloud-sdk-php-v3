<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomReportListVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomReportListVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  报表id
    * name  报表名称
    * filter  filter
    * workpieceType  工件类型(用例：case,测试套：task)
    * analysisDimension  分析维度
    * compareDimension  对比维度
    * chartData  报表数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'filter' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ReportFilter',
            'workpieceType' => 'string',
            'analysisDimension' => 'string',
            'compareDimension' => 'string',
            'chartData' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ReportChartDataVo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  报表id
    * name  报表名称
    * filter  filter
    * workpieceType  工件类型(用例：case,测试套：task)
    * analysisDimension  分析维度
    * compareDimension  对比维度
    * chartData  报表数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'filter' => null,
        'workpieceType' => null,
        'analysisDimension' => null,
        'compareDimension' => null,
        'chartData' => null
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
    * id  报表id
    * name  报表名称
    * filter  filter
    * workpieceType  工件类型(用例：case,测试套：task)
    * analysisDimension  分析维度
    * compareDimension  对比维度
    * chartData  报表数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'filter' => 'filter',
            'workpieceType' => 'workpiece_type',
            'analysisDimension' => 'analysis_dimension',
            'compareDimension' => 'compare_dimension',
            'chartData' => 'chart_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  报表id
    * name  报表名称
    * filter  filter
    * workpieceType  工件类型(用例：case,测试套：task)
    * analysisDimension  分析维度
    * compareDimension  对比维度
    * chartData  报表数据
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'filter' => 'setFilter',
            'workpieceType' => 'setWorkpieceType',
            'analysisDimension' => 'setAnalysisDimension',
            'compareDimension' => 'setCompareDimension',
            'chartData' => 'setChartData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  报表id
    * name  报表名称
    * filter  filter
    * workpieceType  工件类型(用例：case,测试套：task)
    * analysisDimension  分析维度
    * compareDimension  对比维度
    * chartData  报表数据
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'filter' => 'getFilter',
            'workpieceType' => 'getWorkpieceType',
            'analysisDimension' => 'getAnalysisDimension',
            'compareDimension' => 'getCompareDimension',
            'chartData' => 'getChartData'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['workpieceType'] = isset($data['workpieceType']) ? $data['workpieceType'] : null;
        $this->container['analysisDimension'] = isset($data['analysisDimension']) ? $data['analysisDimension'] : null;
        $this->container['compareDimension'] = isset($data['compareDimension']) ? $data['compareDimension'] : null;
        $this->container['chartData'] = isset($data['chartData']) ? $data['chartData'] : null;
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
    * Gets id
    *  报表id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 报表id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  报表名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 报表名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets filter
    *  filter
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ReportFilter|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ReportFilter|null $filter filter
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets workpieceType
    *  工件类型(用例：case,测试套：task)
    *
    * @return string|null
    */
    public function getWorkpieceType()
    {
        return $this->container['workpieceType'];
    }

    /**
    * Sets workpieceType
    *
    * @param string|null $workpieceType 工件类型(用例：case,测试套：task)
    *
    * @return $this
    */
    public function setWorkpieceType($workpieceType)
    {
        $this->container['workpieceType'] = $workpieceType;
        return $this;
    }

    /**
    * Gets analysisDimension
    *  分析维度
    *
    * @return string|null
    */
    public function getAnalysisDimension()
    {
        return $this->container['analysisDimension'];
    }

    /**
    * Sets analysisDimension
    *
    * @param string|null $analysisDimension 分析维度
    *
    * @return $this
    */
    public function setAnalysisDimension($analysisDimension)
    {
        $this->container['analysisDimension'] = $analysisDimension;
        return $this;
    }

    /**
    * Gets compareDimension
    *  对比维度
    *
    * @return string|null
    */
    public function getCompareDimension()
    {
        return $this->container['compareDimension'];
    }

    /**
    * Sets compareDimension
    *
    * @param string|null $compareDimension 对比维度
    *
    * @return $this
    */
    public function setCompareDimension($compareDimension)
    {
        $this->container['compareDimension'] = $compareDimension;
        return $this;
    }

    /**
    * Gets chartData
    *  报表数据
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ReportChartDataVo[]|null
    */
    public function getChartData()
    {
        return $this->container['chartData'];
    }

    /**
    * Sets chartData
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ReportChartDataVo[]|null $chartData 报表数据
    *
    * @return $this
    */
    public function setChartData($chartData)
    {
        $this->container['chartData'] = $chartData;
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

