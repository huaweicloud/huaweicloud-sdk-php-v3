<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatisticStandardCoverageVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatisticStandardCoverageVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allColNum  字段总数，填写String类型替代Long类型。
    * colNum  关联标准字段数，填写String类型替代Long类型。
    * coverage  标准覆盖率。
    * details  引用表数组。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allColNum' => 'string',
            'colNum' => 'string',
            'coverage' => 'double',
            'details' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AllTableVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allColNum  字段总数，填写String类型替代Long类型。
    * colNum  关联标准字段数，填写String类型替代Long类型。
    * coverage  标准覆盖率。
    * details  引用表数组。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allColNum' => null,
        'colNum' => null,
        'coverage' => 'double',
        'details' => null
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
    * allColNum  字段总数，填写String类型替代Long类型。
    * colNum  关联标准字段数，填写String类型替代Long类型。
    * coverage  标准覆盖率。
    * details  引用表数组。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allColNum' => 'all_col_num',
            'colNum' => 'col_num',
            'coverage' => 'coverage',
            'details' => 'details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allColNum  字段总数，填写String类型替代Long类型。
    * colNum  关联标准字段数，填写String类型替代Long类型。
    * coverage  标准覆盖率。
    * details  引用表数组。
    *
    * @var string[]
    */
    protected static $setters = [
            'allColNum' => 'setAllColNum',
            'colNum' => 'setColNum',
            'coverage' => 'setCoverage',
            'details' => 'setDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allColNum  字段总数，填写String类型替代Long类型。
    * colNum  关联标准字段数，填写String类型替代Long类型。
    * coverage  标准覆盖率。
    * details  引用表数组。
    *
    * @var string[]
    */
    protected static $getters = [
            'allColNum' => 'getAllColNum',
            'colNum' => 'getColNum',
            'coverage' => 'getCoverage',
            'details' => 'getDetails'
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
        $this->container['allColNum'] = isset($data['allColNum']) ? $data['allColNum'] : null;
        $this->container['colNum'] = isset($data['colNum']) ? $data['colNum'] : null;
        $this->container['coverage'] = isset($data['coverage']) ? $data['coverage'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
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
    * Gets allColNum
    *  字段总数，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getAllColNum()
    {
        return $this->container['allColNum'];
    }

    /**
    * Sets allColNum
    *
    * @param string|null $allColNum 字段总数，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setAllColNum($allColNum)
    {
        $this->container['allColNum'] = $allColNum;
        return $this;
    }

    /**
    * Gets colNum
    *  关联标准字段数，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getColNum()
    {
        return $this->container['colNum'];
    }

    /**
    * Sets colNum
    *
    * @param string|null $colNum 关联标准字段数，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setColNum($colNum)
    {
        $this->container['colNum'] = $colNum;
        return $this;
    }

    /**
    * Gets coverage
    *  标准覆盖率。
    *
    * @return double|null
    */
    public function getCoverage()
    {
        return $this->container['coverage'];
    }

    /**
    * Sets coverage
    *
    * @param double|null $coverage 标准覆盖率。
    *
    * @return $this
    */
    public function setCoverage($coverage)
    {
        $this->container['coverage'] = $coverage;
        return $this;
    }

    /**
    * Gets details
    *  引用表数组。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AllTableVO[]|null
    */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
    * Sets details
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AllTableVO[]|null $details 引用表数组。
    *
    * @return $this
    */
    public function setDetails($details)
    {
        $this->container['details'] = $details;
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

