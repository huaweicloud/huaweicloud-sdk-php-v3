<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReviewSettingDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReviewSettingDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * categoriesAndModulesEnabled  是否开启检视意见分类和模块
    * secondaryCategoryEnabled  是否开启二级分类
    * forbiddenAddToIssue  是否禁止关联issue
    * primaryCategories  一级分类
    * reviewDefaultCategories  默认分类
    * reviewCustomizedCategories  自定义分类
    * reviewModules  检视意见模块
    * sourceId  目标id
    * sourceType  目标类型
    * sourcePath  目标路径
    * secondaryCategoryType  二级分类类型
    * secondaryCategories  二级分类
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'categoriesAndModulesEnabled' => 'bool',
            'secondaryCategoryEnabled' => 'bool',
            'forbiddenAddToIssue' => 'bool',
            'primaryCategories' => '\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CategoryDto[]',
            'reviewDefaultCategories' => 'string[]',
            'reviewCustomizedCategories' => 'string[]',
            'reviewModules' => 'string[]',
            'sourceId' => 'int',
            'sourceType' => 'string',
            'sourcePath' => 'string',
            'secondaryCategoryType' => 'string',
            'secondaryCategories' => '\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CategoryDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * categoriesAndModulesEnabled  是否开启检视意见分类和模块
    * secondaryCategoryEnabled  是否开启二级分类
    * forbiddenAddToIssue  是否禁止关联issue
    * primaryCategories  一级分类
    * reviewDefaultCategories  默认分类
    * reviewCustomizedCategories  自定义分类
    * reviewModules  检视意见模块
    * sourceId  目标id
    * sourceType  目标类型
    * sourcePath  目标路径
    * secondaryCategoryType  二级分类类型
    * secondaryCategories  二级分类
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'categoriesAndModulesEnabled' => null,
        'secondaryCategoryEnabled' => null,
        'forbiddenAddToIssue' => null,
        'primaryCategories' => null,
        'reviewDefaultCategories' => null,
        'reviewCustomizedCategories' => null,
        'reviewModules' => null,
        'sourceId' => 'int32',
        'sourceType' => null,
        'sourcePath' => null,
        'secondaryCategoryType' => null,
        'secondaryCategories' => null
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
    * categoriesAndModulesEnabled  是否开启检视意见分类和模块
    * secondaryCategoryEnabled  是否开启二级分类
    * forbiddenAddToIssue  是否禁止关联issue
    * primaryCategories  一级分类
    * reviewDefaultCategories  默认分类
    * reviewCustomizedCategories  自定义分类
    * reviewModules  检视意见模块
    * sourceId  目标id
    * sourceType  目标类型
    * sourcePath  目标路径
    * secondaryCategoryType  二级分类类型
    * secondaryCategories  二级分类
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'categoriesAndModulesEnabled' => 'categories_and_modules_enabled',
            'secondaryCategoryEnabled' => 'secondary_category_enabled',
            'forbiddenAddToIssue' => 'forbidden_add_to_issue',
            'primaryCategories' => 'primary_categories',
            'reviewDefaultCategories' => 'review_default_categories',
            'reviewCustomizedCategories' => 'review_customized_categories',
            'reviewModules' => 'review_modules',
            'sourceId' => 'source_id',
            'sourceType' => 'source_type',
            'sourcePath' => 'source_path',
            'secondaryCategoryType' => 'secondary_category_type',
            'secondaryCategories' => 'secondary_categories'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * categoriesAndModulesEnabled  是否开启检视意见分类和模块
    * secondaryCategoryEnabled  是否开启二级分类
    * forbiddenAddToIssue  是否禁止关联issue
    * primaryCategories  一级分类
    * reviewDefaultCategories  默认分类
    * reviewCustomizedCategories  自定义分类
    * reviewModules  检视意见模块
    * sourceId  目标id
    * sourceType  目标类型
    * sourcePath  目标路径
    * secondaryCategoryType  二级分类类型
    * secondaryCategories  二级分类
    *
    * @var string[]
    */
    protected static $setters = [
            'categoriesAndModulesEnabled' => 'setCategoriesAndModulesEnabled',
            'secondaryCategoryEnabled' => 'setSecondaryCategoryEnabled',
            'forbiddenAddToIssue' => 'setForbiddenAddToIssue',
            'primaryCategories' => 'setPrimaryCategories',
            'reviewDefaultCategories' => 'setReviewDefaultCategories',
            'reviewCustomizedCategories' => 'setReviewCustomizedCategories',
            'reviewModules' => 'setReviewModules',
            'sourceId' => 'setSourceId',
            'sourceType' => 'setSourceType',
            'sourcePath' => 'setSourcePath',
            'secondaryCategoryType' => 'setSecondaryCategoryType',
            'secondaryCategories' => 'setSecondaryCategories'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * categoriesAndModulesEnabled  是否开启检视意见分类和模块
    * secondaryCategoryEnabled  是否开启二级分类
    * forbiddenAddToIssue  是否禁止关联issue
    * primaryCategories  一级分类
    * reviewDefaultCategories  默认分类
    * reviewCustomizedCategories  自定义分类
    * reviewModules  检视意见模块
    * sourceId  目标id
    * sourceType  目标类型
    * sourcePath  目标路径
    * secondaryCategoryType  二级分类类型
    * secondaryCategories  二级分类
    *
    * @var string[]
    */
    protected static $getters = [
            'categoriesAndModulesEnabled' => 'getCategoriesAndModulesEnabled',
            'secondaryCategoryEnabled' => 'getSecondaryCategoryEnabled',
            'forbiddenAddToIssue' => 'getForbiddenAddToIssue',
            'primaryCategories' => 'getPrimaryCategories',
            'reviewDefaultCategories' => 'getReviewDefaultCategories',
            'reviewCustomizedCategories' => 'getReviewCustomizedCategories',
            'reviewModules' => 'getReviewModules',
            'sourceId' => 'getSourceId',
            'sourceType' => 'getSourceType',
            'sourcePath' => 'getSourcePath',
            'secondaryCategoryType' => 'getSecondaryCategoryType',
            'secondaryCategories' => 'getSecondaryCategories'
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
        $this->container['categoriesAndModulesEnabled'] = isset($data['categoriesAndModulesEnabled']) ? $data['categoriesAndModulesEnabled'] : null;
        $this->container['secondaryCategoryEnabled'] = isset($data['secondaryCategoryEnabled']) ? $data['secondaryCategoryEnabled'] : null;
        $this->container['forbiddenAddToIssue'] = isset($data['forbiddenAddToIssue']) ? $data['forbiddenAddToIssue'] : null;
        $this->container['primaryCategories'] = isset($data['primaryCategories']) ? $data['primaryCategories'] : null;
        $this->container['reviewDefaultCategories'] = isset($data['reviewDefaultCategories']) ? $data['reviewDefaultCategories'] : null;
        $this->container['reviewCustomizedCategories'] = isset($data['reviewCustomizedCategories']) ? $data['reviewCustomizedCategories'] : null;
        $this->container['reviewModules'] = isset($data['reviewModules']) ? $data['reviewModules'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['sourcePath'] = isset($data['sourcePath']) ? $data['sourcePath'] : null;
        $this->container['secondaryCategoryType'] = isset($data['secondaryCategoryType']) ? $data['secondaryCategoryType'] : null;
        $this->container['secondaryCategories'] = isset($data['secondaryCategories']) ? $data['secondaryCategories'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sourceId']) && ($this->container['sourceId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sourceId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sourceId']) && ($this->container['sourceId'] < 1)) {
                $invalidProperties[] = "invalid value for 'sourceId', must be bigger than or equal to 1.";
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
    * Gets categoriesAndModulesEnabled
    *  是否开启检视意见分类和模块
    *
    * @return bool|null
    */
    public function getCategoriesAndModulesEnabled()
    {
        return $this->container['categoriesAndModulesEnabled'];
    }

    /**
    * Sets categoriesAndModulesEnabled
    *
    * @param bool|null $categoriesAndModulesEnabled 是否开启检视意见分类和模块
    *
    * @return $this
    */
    public function setCategoriesAndModulesEnabled($categoriesAndModulesEnabled)
    {
        $this->container['categoriesAndModulesEnabled'] = $categoriesAndModulesEnabled;
        return $this;
    }

    /**
    * Gets secondaryCategoryEnabled
    *  是否开启二级分类
    *
    * @return bool|null
    */
    public function getSecondaryCategoryEnabled()
    {
        return $this->container['secondaryCategoryEnabled'];
    }

    /**
    * Sets secondaryCategoryEnabled
    *
    * @param bool|null $secondaryCategoryEnabled 是否开启二级分类
    *
    * @return $this
    */
    public function setSecondaryCategoryEnabled($secondaryCategoryEnabled)
    {
        $this->container['secondaryCategoryEnabled'] = $secondaryCategoryEnabled;
        return $this;
    }

    /**
    * Gets forbiddenAddToIssue
    *  是否禁止关联issue
    *
    * @return bool|null
    */
    public function getForbiddenAddToIssue()
    {
        return $this->container['forbiddenAddToIssue'];
    }

    /**
    * Sets forbiddenAddToIssue
    *
    * @param bool|null $forbiddenAddToIssue 是否禁止关联issue
    *
    * @return $this
    */
    public function setForbiddenAddToIssue($forbiddenAddToIssue)
    {
        $this->container['forbiddenAddToIssue'] = $forbiddenAddToIssue;
        return $this;
    }

    /**
    * Gets primaryCategories
    *  一级分类
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CategoryDto[]|null
    */
    public function getPrimaryCategories()
    {
        return $this->container['primaryCategories'];
    }

    /**
    * Sets primaryCategories
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CategoryDto[]|null $primaryCategories 一级分类
    *
    * @return $this
    */
    public function setPrimaryCategories($primaryCategories)
    {
        $this->container['primaryCategories'] = $primaryCategories;
        return $this;
    }

    /**
    * Gets reviewDefaultCategories
    *  默认分类
    *
    * @return string[]|null
    */
    public function getReviewDefaultCategories()
    {
        return $this->container['reviewDefaultCategories'];
    }

    /**
    * Sets reviewDefaultCategories
    *
    * @param string[]|null $reviewDefaultCategories 默认分类
    *
    * @return $this
    */
    public function setReviewDefaultCategories($reviewDefaultCategories)
    {
        $this->container['reviewDefaultCategories'] = $reviewDefaultCategories;
        return $this;
    }

    /**
    * Gets reviewCustomizedCategories
    *  自定义分类
    *
    * @return string[]|null
    */
    public function getReviewCustomizedCategories()
    {
        return $this->container['reviewCustomizedCategories'];
    }

    /**
    * Sets reviewCustomizedCategories
    *
    * @param string[]|null $reviewCustomizedCategories 自定义分类
    *
    * @return $this
    */
    public function setReviewCustomizedCategories($reviewCustomizedCategories)
    {
        $this->container['reviewCustomizedCategories'] = $reviewCustomizedCategories;
        return $this;
    }

    /**
    * Gets reviewModules
    *  检视意见模块
    *
    * @return string[]|null
    */
    public function getReviewModules()
    {
        return $this->container['reviewModules'];
    }

    /**
    * Sets reviewModules
    *
    * @param string[]|null $reviewModules 检视意见模块
    *
    * @return $this
    */
    public function setReviewModules($reviewModules)
    {
        $this->container['reviewModules'] = $reviewModules;
        return $this;
    }

    /**
    * Gets sourceId
    *  目标id
    *
    * @return int|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param int|null $sourceId 目标id
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets sourceType
    *  目标类型
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType 目标类型
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets sourcePath
    *  目标路径
    *
    * @return string|null
    */
    public function getSourcePath()
    {
        return $this->container['sourcePath'];
    }

    /**
    * Sets sourcePath
    *
    * @param string|null $sourcePath 目标路径
    *
    * @return $this
    */
    public function setSourcePath($sourcePath)
    {
        $this->container['sourcePath'] = $sourcePath;
        return $this;
    }

    /**
    * Gets secondaryCategoryType
    *  二级分类类型
    *
    * @return string|null
    */
    public function getSecondaryCategoryType()
    {
        return $this->container['secondaryCategoryType'];
    }

    /**
    * Sets secondaryCategoryType
    *
    * @param string|null $secondaryCategoryType 二级分类类型
    *
    * @return $this
    */
    public function setSecondaryCategoryType($secondaryCategoryType)
    {
        $this->container['secondaryCategoryType'] = $secondaryCategoryType;
        return $this;
    }

    /**
    * Gets secondaryCategories
    *  二级分类
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CategoryDto[]|null
    */
    public function getSecondaryCategories()
    {
        return $this->container['secondaryCategories'];
    }

    /**
    * Sets secondaryCategories
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CategoryDto[]|null $secondaryCategories 二级分类
    *
    * @return $this
    */
    public function setSecondaryCategories($secondaryCategories)
    {
        $this->container['secondaryCategories'] = $secondaryCategories;
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

