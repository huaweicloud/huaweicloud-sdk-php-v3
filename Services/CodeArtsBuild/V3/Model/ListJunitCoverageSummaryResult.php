<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListJunitCoverageSummaryResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListJunitCoverageSummary_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * unitSummaryList  单元测试覆盖率报告列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'unitSummaryList' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListJunitCoverageSummaryResultUnitSummaryList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * unitSummaryList  单元测试覆盖率报告列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'unitSummaryList' => null
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
    * unitSummaryList  单元测试覆盖率报告列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'unitSummaryList' => 'unit_summary_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * unitSummaryList  单元测试覆盖率报告列表
    *
    * @var string[]
    */
    protected static $setters = [
            'unitSummaryList' => 'setUnitSummaryList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * unitSummaryList  单元测试覆盖率报告列表
    *
    * @var string[]
    */
    protected static $getters = [
            'unitSummaryList' => 'getUnitSummaryList'
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
        $this->container['unitSummaryList'] = isset($data['unitSummaryList']) ? $data['unitSummaryList'] : null;
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
    * Gets unitSummaryList
    *  单元测试覆盖率报告列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListJunitCoverageSummaryResultUnitSummaryList[]|null
    */
    public function getUnitSummaryList()
    {
        return $this->container['unitSummaryList'];
    }

    /**
    * Sets unitSummaryList
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ListJunitCoverageSummaryResultUnitSummaryList[]|null $unitSummaryList 单元测试覆盖率报告列表
    *
    * @return $this
    */
    public function setUnitSummaryList($unitSummaryList)
    {
        $this->container['unitSummaryList'] = $unitSummaryList;
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

