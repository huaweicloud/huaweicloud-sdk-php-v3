<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OprReportInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OprReportInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  报表名称
    * type  报表类型 1：首页用例库， 2：质量报告
    * workpieceType  工件类型(用例：case,测试套：suite)
    * analysisDimRow  分析维度
    * compareDimColumn  对比维度
    * filter  filter
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'int',
            'workpieceType' => 'string',
            'analysisDimRow' => 'string',
            'compareDimColumn' => 'string',
            'filter' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ReportFilter'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  报表名称
    * type  报表类型 1：首页用例库， 2：质量报告
    * workpieceType  工件类型(用例：case,测试套：suite)
    * analysisDimRow  分析维度
    * compareDimColumn  对比维度
    * filter  filter
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => 'int32',
        'workpieceType' => null,
        'analysisDimRow' => null,
        'compareDimColumn' => null,
        'filter' => null
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
    * name  报表名称
    * type  报表类型 1：首页用例库， 2：质量报告
    * workpieceType  工件类型(用例：case,测试套：suite)
    * analysisDimRow  分析维度
    * compareDimColumn  对比维度
    * filter  filter
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'workpieceType' => 'workpiece_type',
            'analysisDimRow' => 'analysis_dim_row',
            'compareDimColumn' => 'compare_dim_column',
            'filter' => 'filter'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  报表名称
    * type  报表类型 1：首页用例库， 2：质量报告
    * workpieceType  工件类型(用例：case,测试套：suite)
    * analysisDimRow  分析维度
    * compareDimColumn  对比维度
    * filter  filter
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'workpieceType' => 'setWorkpieceType',
            'analysisDimRow' => 'setAnalysisDimRow',
            'compareDimColumn' => 'setCompareDimColumn',
            'filter' => 'setFilter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  报表名称
    * type  报表类型 1：首页用例库， 2：质量报告
    * workpieceType  工件类型(用例：case,测试套：suite)
    * analysisDimRow  分析维度
    * compareDimColumn  对比维度
    * filter  filter
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'workpieceType' => 'getWorkpieceType',
            'analysisDimRow' => 'getAnalysisDimRow',
            'compareDimColumn' => 'getCompareDimColumn',
            'filter' => 'getFilter'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['workpieceType'] = isset($data['workpieceType']) ? $data['workpieceType'] : null;
        $this->container['analysisDimRow'] = isset($data['analysisDimRow']) ? $data['analysisDimRow'] : null;
        $this->container['compareDimColumn'] = isset($data['compareDimColumn']) ? $data['compareDimColumn'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
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
    * Gets type
    *  报表类型 1：首页用例库， 2：质量报告
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 报表类型 1：首页用例库， 2：质量报告
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets workpieceType
    *  工件类型(用例：case,测试套：suite)
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
    * @param string|null $workpieceType 工件类型(用例：case,测试套：suite)
    *
    * @return $this
    */
    public function setWorkpieceType($workpieceType)
    {
        $this->container['workpieceType'] = $workpieceType;
        return $this;
    }

    /**
    * Gets analysisDimRow
    *  分析维度
    *
    * @return string|null
    */
    public function getAnalysisDimRow()
    {
        return $this->container['analysisDimRow'];
    }

    /**
    * Sets analysisDimRow
    *
    * @param string|null $analysisDimRow 分析维度
    *
    * @return $this
    */
    public function setAnalysisDimRow($analysisDimRow)
    {
        $this->container['analysisDimRow'] = $analysisDimRow;
        return $this;
    }

    /**
    * Gets compareDimColumn
    *  对比维度
    *
    * @return string|null
    */
    public function getCompareDimColumn()
    {
        return $this->container['compareDimColumn'];
    }

    /**
    * Sets compareDimColumn
    *
    * @param string|null $compareDimColumn 对比维度
    *
    * @return $this
    */
    public function setCompareDimColumn($compareDimColumn)
    {
        $this->container['compareDimColumn'] = $compareDimColumn;
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

