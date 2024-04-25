<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecuritySensitiveDataOverviewsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecuritySensitiveDataOverviewsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * secrecyLevelStatistics  基于密级的概览统计
    * categoryStatistics  基于分类的概览统计
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'secrecyLevelStatistics' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SensitiveDataSecrecyLevelOverviewQueryDTO[]',
            'categoryStatistics' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SensitiveDataCategoryOverviewQueryDTO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * secrecyLevelStatistics  基于密级的概览统计
    * categoryStatistics  基于分类的概览统计
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'secrecyLevelStatistics' => null,
        'categoryStatistics' => null
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
    * secrecyLevelStatistics  基于密级的概览统计
    * categoryStatistics  基于分类的概览统计
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'secrecyLevelStatistics' => 'secrecy_level_statistics',
            'categoryStatistics' => 'category_statistics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * secrecyLevelStatistics  基于密级的概览统计
    * categoryStatistics  基于分类的概览统计
    *
    * @var string[]
    */
    protected static $setters = [
            'secrecyLevelStatistics' => 'setSecrecyLevelStatistics',
            'categoryStatistics' => 'setCategoryStatistics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * secrecyLevelStatistics  基于密级的概览统计
    * categoryStatistics  基于分类的概览统计
    *
    * @var string[]
    */
    protected static $getters = [
            'secrecyLevelStatistics' => 'getSecrecyLevelStatistics',
            'categoryStatistics' => 'getCategoryStatistics'
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
        $this->container['secrecyLevelStatistics'] = isset($data['secrecyLevelStatistics']) ? $data['secrecyLevelStatistics'] : null;
        $this->container['categoryStatistics'] = isset($data['categoryStatistics']) ? $data['categoryStatistics'] : null;
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
    * Gets secrecyLevelStatistics
    *  基于密级的概览统计
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SensitiveDataSecrecyLevelOverviewQueryDTO[]|null
    */
    public function getSecrecyLevelStatistics()
    {
        return $this->container['secrecyLevelStatistics'];
    }

    /**
    * Sets secrecyLevelStatistics
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SensitiveDataSecrecyLevelOverviewQueryDTO[]|null $secrecyLevelStatistics 基于密级的概览统计
    *
    * @return $this
    */
    public function setSecrecyLevelStatistics($secrecyLevelStatistics)
    {
        $this->container['secrecyLevelStatistics'] = $secrecyLevelStatistics;
        return $this;
    }

    /**
    * Gets categoryStatistics
    *  基于分类的概览统计
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SensitiveDataCategoryOverviewQueryDTO[]|null
    */
    public function getCategoryStatistics()
    {
        return $this->container['categoryStatistics'];
    }

    /**
    * Sets categoryStatistics
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SensitiveDataCategoryOverviewQueryDTO[]|null $categoryStatistics 基于分类的概览统计
    *
    * @return $this
    */
    public function setCategoryStatistics($categoryStatistics)
    {
        $this->container['categoryStatistics'] = $categoryStatistics;
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

