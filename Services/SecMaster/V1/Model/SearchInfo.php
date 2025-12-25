<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parentCatalogue  一级目录名称
    * secondCatalogue  二级目录名称
    * catalogueStatus  是否内置
    * catalogueType  是否内置
    * layoutName  布局名称
    * publisherName  发布者
    * analysisVersion  安全分析版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parentCatalogue' => 'string',
            'secondCatalogue' => 'string',
            'catalogueStatus' => 'bool',
            'catalogueType' => 'string',
            'layoutName' => 'string',
            'publisherName' => 'string',
            'analysisVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parentCatalogue  一级目录名称
    * secondCatalogue  二级目录名称
    * catalogueStatus  是否内置
    * catalogueType  是否内置
    * layoutName  布局名称
    * publisherName  发布者
    * analysisVersion  安全分析版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parentCatalogue' => null,
        'secondCatalogue' => null,
        'catalogueStatus' => null,
        'catalogueType' => null,
        'layoutName' => null,
        'publisherName' => null,
        'analysisVersion' => null
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
    * parentCatalogue  一级目录名称
    * secondCatalogue  二级目录名称
    * catalogueStatus  是否内置
    * catalogueType  是否内置
    * layoutName  布局名称
    * publisherName  发布者
    * analysisVersion  安全分析版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parentCatalogue' => 'parent_catalogue',
            'secondCatalogue' => 'second_catalogue',
            'catalogueStatus' => 'catalogue_status',
            'catalogueType' => 'catalogue_type',
            'layoutName' => 'layout_name',
            'publisherName' => 'publisher_name',
            'analysisVersion' => 'analysis_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parentCatalogue  一级目录名称
    * secondCatalogue  二级目录名称
    * catalogueStatus  是否内置
    * catalogueType  是否内置
    * layoutName  布局名称
    * publisherName  发布者
    * analysisVersion  安全分析版本
    *
    * @var string[]
    */
    protected static $setters = [
            'parentCatalogue' => 'setParentCatalogue',
            'secondCatalogue' => 'setSecondCatalogue',
            'catalogueStatus' => 'setCatalogueStatus',
            'catalogueType' => 'setCatalogueType',
            'layoutName' => 'setLayoutName',
            'publisherName' => 'setPublisherName',
            'analysisVersion' => 'setAnalysisVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parentCatalogue  一级目录名称
    * secondCatalogue  二级目录名称
    * catalogueStatus  是否内置
    * catalogueType  是否内置
    * layoutName  布局名称
    * publisherName  发布者
    * analysisVersion  安全分析版本
    *
    * @var string[]
    */
    protected static $getters = [
            'parentCatalogue' => 'getParentCatalogue',
            'secondCatalogue' => 'getSecondCatalogue',
            'catalogueStatus' => 'getCatalogueStatus',
            'catalogueType' => 'getCatalogueType',
            'layoutName' => 'getLayoutName',
            'publisherName' => 'getPublisherName',
            'analysisVersion' => 'getAnalysisVersion'
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
        $this->container['parentCatalogue'] = isset($data['parentCatalogue']) ? $data['parentCatalogue'] : null;
        $this->container['secondCatalogue'] = isset($data['secondCatalogue']) ? $data['secondCatalogue'] : null;
        $this->container['catalogueStatus'] = isset($data['catalogueStatus']) ? $data['catalogueStatus'] : null;
        $this->container['catalogueType'] = isset($data['catalogueType']) ? $data['catalogueType'] : null;
        $this->container['layoutName'] = isset($data['layoutName']) ? $data['layoutName'] : null;
        $this->container['publisherName'] = isset($data['publisherName']) ? $data['publisherName'] : null;
        $this->container['analysisVersion'] = isset($data['analysisVersion']) ? $data['analysisVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['parentCatalogue']) && (mb_strlen($this->container['parentCatalogue']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentCatalogue', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['parentCatalogue']) && (mb_strlen($this->container['parentCatalogue']) < 2)) {
                $invalidProperties[] = "invalid value for 'parentCatalogue', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['secondCatalogue']) && (mb_strlen($this->container['secondCatalogue']) > 64)) {
                $invalidProperties[] = "invalid value for 'secondCatalogue', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['secondCatalogue']) && (mb_strlen($this->container['secondCatalogue']) < 2)) {
                $invalidProperties[] = "invalid value for 'secondCatalogue', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['catalogueType']) && (mb_strlen($this->container['catalogueType']) > 64)) {
                $invalidProperties[] = "invalid value for 'catalogueType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['catalogueType']) && (mb_strlen($this->container['catalogueType']) < 2)) {
                $invalidProperties[] = "invalid value for 'catalogueType', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['layoutName']) && (mb_strlen($this->container['layoutName']) > 64)) {
                $invalidProperties[] = "invalid value for 'layoutName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['layoutName']) && (mb_strlen($this->container['layoutName']) < 2)) {
                $invalidProperties[] = "invalid value for 'layoutName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['publisherName']) && (mb_strlen($this->container['publisherName']) > 64)) {
                $invalidProperties[] = "invalid value for 'publisherName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['publisherName']) && (mb_strlen($this->container['publisherName']) < 2)) {
                $invalidProperties[] = "invalid value for 'publisherName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['analysisVersion']) && (mb_strlen($this->container['analysisVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'analysisVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['analysisVersion']) && (mb_strlen($this->container['analysisVersion']) < 2)) {
                $invalidProperties[] = "invalid value for 'analysisVersion', the character length must be bigger than or equal to 2.";
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
    * Gets parentCatalogue
    *  一级目录名称
    *
    * @return string|null
    */
    public function getParentCatalogue()
    {
        return $this->container['parentCatalogue'];
    }

    /**
    * Sets parentCatalogue
    *
    * @param string|null $parentCatalogue 一级目录名称
    *
    * @return $this
    */
    public function setParentCatalogue($parentCatalogue)
    {
        $this->container['parentCatalogue'] = $parentCatalogue;
        return $this;
    }

    /**
    * Gets secondCatalogue
    *  二级目录名称
    *
    * @return string|null
    */
    public function getSecondCatalogue()
    {
        return $this->container['secondCatalogue'];
    }

    /**
    * Sets secondCatalogue
    *
    * @param string|null $secondCatalogue 二级目录名称
    *
    * @return $this
    */
    public function setSecondCatalogue($secondCatalogue)
    {
        $this->container['secondCatalogue'] = $secondCatalogue;
        return $this;
    }

    /**
    * Gets catalogueStatus
    *  是否内置
    *
    * @return bool|null
    */
    public function getCatalogueStatus()
    {
        return $this->container['catalogueStatus'];
    }

    /**
    * Sets catalogueStatus
    *
    * @param bool|null $catalogueStatus 是否内置
    *
    * @return $this
    */
    public function setCatalogueStatus($catalogueStatus)
    {
        $this->container['catalogueStatus'] = $catalogueStatus;
        return $this;
    }

    /**
    * Gets catalogueType
    *  是否内置
    *
    * @return string|null
    */
    public function getCatalogueType()
    {
        return $this->container['catalogueType'];
    }

    /**
    * Sets catalogueType
    *
    * @param string|null $catalogueType 是否内置
    *
    * @return $this
    */
    public function setCatalogueType($catalogueType)
    {
        $this->container['catalogueType'] = $catalogueType;
        return $this;
    }

    /**
    * Gets layoutName
    *  布局名称
    *
    * @return string|null
    */
    public function getLayoutName()
    {
        return $this->container['layoutName'];
    }

    /**
    * Sets layoutName
    *
    * @param string|null $layoutName 布局名称
    *
    * @return $this
    */
    public function setLayoutName($layoutName)
    {
        $this->container['layoutName'] = $layoutName;
        return $this;
    }

    /**
    * Gets publisherName
    *  发布者
    *
    * @return string|null
    */
    public function getPublisherName()
    {
        return $this->container['publisherName'];
    }

    /**
    * Sets publisherName
    *
    * @param string|null $publisherName 发布者
    *
    * @return $this
    */
    public function setPublisherName($publisherName)
    {
        $this->container['publisherName'] = $publisherName;
        return $this;
    }

    /**
    * Gets analysisVersion
    *  安全分析版本
    *
    * @return string|null
    */
    public function getAnalysisVersion()
    {
        return $this->container['analysisVersion'];
    }

    /**
    * Sets analysisVersion
    *
    * @param string|null $analysisVersion 安全分析版本
    *
    * @return $this
    */
    public function setAnalysisVersion($analysisVersion)
    {
        $this->container['analysisVersion'] = $analysisVersion;
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

