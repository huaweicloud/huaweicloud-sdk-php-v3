<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateReviewSettingResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateReviewSettingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * categoriesAndModulesEnabled  **参数解释：** 是否启用启用检视意见分类与模块。
    * secondaryCategoryEnabled  **参数解释：** 是否启用系统预置检视意见分类。
    * primaryCategories  **参数解释：** 检视意见分类(已勾选)。
    * reviewDefaultCategories  **参数解释：** 检视意见分类的key(已勾选)。
    * reviewCustomizedCategories  **参数解释：** 自定义分类。
    * reviewModules  **参数解释：** 检视意见模块。
    * repositoryId  **参数解释：** 仓库id。
    * noteRequiredAttributes  **参数解释：** 检视意见必填项。
    * codehubDefaultCategories  **参数解释：** 检视意见分类(所有可勾选的，需传参with_default_review_categories: true才返回)。
    * hicodeDefaultCategories  **参数解释：** 系统预置检视意见分类(需传参with_default_review_categories: true才返回)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'categoriesAndModulesEnabled' => 'bool',
            'secondaryCategoryEnabled' => 'bool',
            'primaryCategories' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CategoryDto[]',
            'reviewDefaultCategories' => 'string[]',
            'reviewCustomizedCategories' => 'string[]',
            'reviewModules' => 'string[]',
            'repositoryId' => 'int',
            'noteRequiredAttributes' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RequiredAttributeDto[]',
            'codehubDefaultCategories' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CategoryDto[]',
            'hicodeDefaultCategories' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CategoryDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * categoriesAndModulesEnabled  **参数解释：** 是否启用启用检视意见分类与模块。
    * secondaryCategoryEnabled  **参数解释：** 是否启用系统预置检视意见分类。
    * primaryCategories  **参数解释：** 检视意见分类(已勾选)。
    * reviewDefaultCategories  **参数解释：** 检视意见分类的key(已勾选)。
    * reviewCustomizedCategories  **参数解释：** 自定义分类。
    * reviewModules  **参数解释：** 检视意见模块。
    * repositoryId  **参数解释：** 仓库id。
    * noteRequiredAttributes  **参数解释：** 检视意见必填项。
    * codehubDefaultCategories  **参数解释：** 检视意见分类(所有可勾选的，需传参with_default_review_categories: true才返回)。
    * hicodeDefaultCategories  **参数解释：** 系统预置检视意见分类(需传参with_default_review_categories: true才返回)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'categoriesAndModulesEnabled' => null,
        'secondaryCategoryEnabled' => null,
        'primaryCategories' => null,
        'reviewDefaultCategories' => null,
        'reviewCustomizedCategories' => null,
        'reviewModules' => null,
        'repositoryId' => 'int32',
        'noteRequiredAttributes' => null,
        'codehubDefaultCategories' => null,
        'hicodeDefaultCategories' => null
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
    * categoriesAndModulesEnabled  **参数解释：** 是否启用启用检视意见分类与模块。
    * secondaryCategoryEnabled  **参数解释：** 是否启用系统预置检视意见分类。
    * primaryCategories  **参数解释：** 检视意见分类(已勾选)。
    * reviewDefaultCategories  **参数解释：** 检视意见分类的key(已勾选)。
    * reviewCustomizedCategories  **参数解释：** 自定义分类。
    * reviewModules  **参数解释：** 检视意见模块。
    * repositoryId  **参数解释：** 仓库id。
    * noteRequiredAttributes  **参数解释：** 检视意见必填项。
    * codehubDefaultCategories  **参数解释：** 检视意见分类(所有可勾选的，需传参with_default_review_categories: true才返回)。
    * hicodeDefaultCategories  **参数解释：** 系统预置检视意见分类(需传参with_default_review_categories: true才返回)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'categoriesAndModulesEnabled' => 'categories_and_modules_enabled',
            'secondaryCategoryEnabled' => 'secondary_category_enabled',
            'primaryCategories' => 'primary_categories',
            'reviewDefaultCategories' => 'review_default_categories',
            'reviewCustomizedCategories' => 'review_customized_categories',
            'reviewModules' => 'review_modules',
            'repositoryId' => 'repository_id',
            'noteRequiredAttributes' => 'note_required_attributes',
            'codehubDefaultCategories' => 'codehub_default_categories',
            'hicodeDefaultCategories' => 'hicode_default_categories'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * categoriesAndModulesEnabled  **参数解释：** 是否启用启用检视意见分类与模块。
    * secondaryCategoryEnabled  **参数解释：** 是否启用系统预置检视意见分类。
    * primaryCategories  **参数解释：** 检视意见分类(已勾选)。
    * reviewDefaultCategories  **参数解释：** 检视意见分类的key(已勾选)。
    * reviewCustomizedCategories  **参数解释：** 自定义分类。
    * reviewModules  **参数解释：** 检视意见模块。
    * repositoryId  **参数解释：** 仓库id。
    * noteRequiredAttributes  **参数解释：** 检视意见必填项。
    * codehubDefaultCategories  **参数解释：** 检视意见分类(所有可勾选的，需传参with_default_review_categories: true才返回)。
    * hicodeDefaultCategories  **参数解释：** 系统预置检视意见分类(需传参with_default_review_categories: true才返回)。
    *
    * @var string[]
    */
    protected static $setters = [
            'categoriesAndModulesEnabled' => 'setCategoriesAndModulesEnabled',
            'secondaryCategoryEnabled' => 'setSecondaryCategoryEnabled',
            'primaryCategories' => 'setPrimaryCategories',
            'reviewDefaultCategories' => 'setReviewDefaultCategories',
            'reviewCustomizedCategories' => 'setReviewCustomizedCategories',
            'reviewModules' => 'setReviewModules',
            'repositoryId' => 'setRepositoryId',
            'noteRequiredAttributes' => 'setNoteRequiredAttributes',
            'codehubDefaultCategories' => 'setCodehubDefaultCategories',
            'hicodeDefaultCategories' => 'setHicodeDefaultCategories'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * categoriesAndModulesEnabled  **参数解释：** 是否启用启用检视意见分类与模块。
    * secondaryCategoryEnabled  **参数解释：** 是否启用系统预置检视意见分类。
    * primaryCategories  **参数解释：** 检视意见分类(已勾选)。
    * reviewDefaultCategories  **参数解释：** 检视意见分类的key(已勾选)。
    * reviewCustomizedCategories  **参数解释：** 自定义分类。
    * reviewModules  **参数解释：** 检视意见模块。
    * repositoryId  **参数解释：** 仓库id。
    * noteRequiredAttributes  **参数解释：** 检视意见必填项。
    * codehubDefaultCategories  **参数解释：** 检视意见分类(所有可勾选的，需传参with_default_review_categories: true才返回)。
    * hicodeDefaultCategories  **参数解释：** 系统预置检视意见分类(需传参with_default_review_categories: true才返回)。
    *
    * @var string[]
    */
    protected static $getters = [
            'categoriesAndModulesEnabled' => 'getCategoriesAndModulesEnabled',
            'secondaryCategoryEnabled' => 'getSecondaryCategoryEnabled',
            'primaryCategories' => 'getPrimaryCategories',
            'reviewDefaultCategories' => 'getReviewDefaultCategories',
            'reviewCustomizedCategories' => 'getReviewCustomizedCategories',
            'reviewModules' => 'getReviewModules',
            'repositoryId' => 'getRepositoryId',
            'noteRequiredAttributes' => 'getNoteRequiredAttributes',
            'codehubDefaultCategories' => 'getCodehubDefaultCategories',
            'hicodeDefaultCategories' => 'getHicodeDefaultCategories'
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
        $this->container['primaryCategories'] = isset($data['primaryCategories']) ? $data['primaryCategories'] : null;
        $this->container['reviewDefaultCategories'] = isset($data['reviewDefaultCategories']) ? $data['reviewDefaultCategories'] : null;
        $this->container['reviewCustomizedCategories'] = isset($data['reviewCustomizedCategories']) ? $data['reviewCustomizedCategories'] : null;
        $this->container['reviewModules'] = isset($data['reviewModules']) ? $data['reviewModules'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['noteRequiredAttributes'] = isset($data['noteRequiredAttributes']) ? $data['noteRequiredAttributes'] : null;
        $this->container['codehubDefaultCategories'] = isset($data['codehubDefaultCategories']) ? $data['codehubDefaultCategories'] : null;
        $this->container['hicodeDefaultCategories'] = isset($data['hicodeDefaultCategories']) ? $data['hicodeDefaultCategories'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be bigger than or equal to 1.";
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
    *  **参数解释：** 是否启用启用检视意见分类与模块。
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
    * @param bool|null $categoriesAndModulesEnabled **参数解释：** 是否启用启用检视意见分类与模块。
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
    *  **参数解释：** 是否启用系统预置检视意见分类。
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
    * @param bool|null $secondaryCategoryEnabled **参数解释：** 是否启用系统预置检视意见分类。
    *
    * @return $this
    */
    public function setSecondaryCategoryEnabled($secondaryCategoryEnabled)
    {
        $this->container['secondaryCategoryEnabled'] = $secondaryCategoryEnabled;
        return $this;
    }

    /**
    * Gets primaryCategories
    *  **参数解释：** 检视意见分类(已勾选)。
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CategoryDto[]|null
    */
    public function getPrimaryCategories()
    {
        return $this->container['primaryCategories'];
    }

    /**
    * Sets primaryCategories
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CategoryDto[]|null $primaryCategories **参数解释：** 检视意见分类(已勾选)。
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
    *  **参数解释：** 检视意见分类的key(已勾选)。
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
    * @param string[]|null $reviewDefaultCategories **参数解释：** 检视意见分类的key(已勾选)。
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
    *  **参数解释：** 自定义分类。
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
    * @param string[]|null $reviewCustomizedCategories **参数解释：** 自定义分类。
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
    *  **参数解释：** 检视意见模块。
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
    * @param string[]|null $reviewModules **参数解释：** 检视意见模块。
    *
    * @return $this
    */
    public function setReviewModules($reviewModules)
    {
        $this->container['reviewModules'] = $reviewModules;
        return $this;
    }

    /**
    * Gets repositoryId
    *  **参数解释：** 仓库id。
    *
    * @return int|null
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param int|null $repositoryId **参数解释：** 仓库id。
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets noteRequiredAttributes
    *  **参数解释：** 检视意见必填项。
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RequiredAttributeDto[]|null
    */
    public function getNoteRequiredAttributes()
    {
        return $this->container['noteRequiredAttributes'];
    }

    /**
    * Sets noteRequiredAttributes
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RequiredAttributeDto[]|null $noteRequiredAttributes **参数解释：** 检视意见必填项。
    *
    * @return $this
    */
    public function setNoteRequiredAttributes($noteRequiredAttributes)
    {
        $this->container['noteRequiredAttributes'] = $noteRequiredAttributes;
        return $this;
    }

    /**
    * Gets codehubDefaultCategories
    *  **参数解释：** 检视意见分类(所有可勾选的，需传参with_default_review_categories: true才返回)。
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CategoryDto[]|null
    */
    public function getCodehubDefaultCategories()
    {
        return $this->container['codehubDefaultCategories'];
    }

    /**
    * Sets codehubDefaultCategories
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CategoryDto[]|null $codehubDefaultCategories **参数解释：** 检视意见分类(所有可勾选的，需传参with_default_review_categories: true才返回)。
    *
    * @return $this
    */
    public function setCodehubDefaultCategories($codehubDefaultCategories)
    {
        $this->container['codehubDefaultCategories'] = $codehubDefaultCategories;
        return $this;
    }

    /**
    * Gets hicodeDefaultCategories
    *  **参数解释：** 系统预置检视意见分类(需传参with_default_review_categories: true才返回)。
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CategoryDto[]|null
    */
    public function getHicodeDefaultCategories()
    {
        return $this->container['hicodeDefaultCategories'];
    }

    /**
    * Sets hicodeDefaultCategories
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CategoryDto[]|null $hicodeDefaultCategories **参数解释：** 系统预置检视意见分类(需传参with_default_review_categories: true才返回)。
    *
    * @return $this
    */
    public function setHicodeDefaultCategories($hicodeDefaultCategories)
    {
        $this->container['hicodeDefaultCategories'] = $hicodeDefaultCategories;
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

