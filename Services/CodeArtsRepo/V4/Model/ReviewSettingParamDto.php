<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReviewSettingParamDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReviewSettingParamDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * categoriesAndModulesEnabled  **参数解释：** 是否启用启用检视意见分类与模块。
    * reviewModules  **参数解释：** 检视意见模块。
    * secondaryCategoryEnabled  **参数解释：** 是否启用系统预置检视意见分类。
    * reviewDefaultCategories  **参数解释：** 检视意见分类(已勾选的分类的key列表)。
    * reviewCustomizedCategories  **参数解释：** 自定义分类列表。
    * isAssigneeIdRequired  **参数解释：** 是否勾选指派给。
    * isReviewCategoriesRequired  **参数解释：** 是否勾选意见分类。
    * isReviewModulesRequired  **参数解释：** 是否勾选意见模块。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'categoriesAndModulesEnabled' => 'bool',
            'reviewModules' => 'string[]',
            'secondaryCategoryEnabled' => 'bool',
            'reviewDefaultCategories' => 'string[]',
            'reviewCustomizedCategories' => 'string[]',
            'isAssigneeIdRequired' => 'bool',
            'isReviewCategoriesRequired' => 'bool',
            'isReviewModulesRequired' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * categoriesAndModulesEnabled  **参数解释：** 是否启用启用检视意见分类与模块。
    * reviewModules  **参数解释：** 检视意见模块。
    * secondaryCategoryEnabled  **参数解释：** 是否启用系统预置检视意见分类。
    * reviewDefaultCategories  **参数解释：** 检视意见分类(已勾选的分类的key列表)。
    * reviewCustomizedCategories  **参数解释：** 自定义分类列表。
    * isAssigneeIdRequired  **参数解释：** 是否勾选指派给。
    * isReviewCategoriesRequired  **参数解释：** 是否勾选意见分类。
    * isReviewModulesRequired  **参数解释：** 是否勾选意见模块。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'categoriesAndModulesEnabled' => null,
        'reviewModules' => null,
        'secondaryCategoryEnabled' => null,
        'reviewDefaultCategories' => null,
        'reviewCustomizedCategories' => null,
        'isAssigneeIdRequired' => null,
        'isReviewCategoriesRequired' => null,
        'isReviewModulesRequired' => null
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
    * reviewModules  **参数解释：** 检视意见模块。
    * secondaryCategoryEnabled  **参数解释：** 是否启用系统预置检视意见分类。
    * reviewDefaultCategories  **参数解释：** 检视意见分类(已勾选的分类的key列表)。
    * reviewCustomizedCategories  **参数解释：** 自定义分类列表。
    * isAssigneeIdRequired  **参数解释：** 是否勾选指派给。
    * isReviewCategoriesRequired  **参数解释：** 是否勾选意见分类。
    * isReviewModulesRequired  **参数解释：** 是否勾选意见模块。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'categoriesAndModulesEnabled' => 'categories_and_modules_enabled',
            'reviewModules' => 'review_modules',
            'secondaryCategoryEnabled' => 'secondary_category_enabled',
            'reviewDefaultCategories' => 'review_default_categories',
            'reviewCustomizedCategories' => 'review_customized_categories',
            'isAssigneeIdRequired' => 'is_assignee_id_required',
            'isReviewCategoriesRequired' => 'is_review_categories_required',
            'isReviewModulesRequired' => 'is_review_modules_required'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * categoriesAndModulesEnabled  **参数解释：** 是否启用启用检视意见分类与模块。
    * reviewModules  **参数解释：** 检视意见模块。
    * secondaryCategoryEnabled  **参数解释：** 是否启用系统预置检视意见分类。
    * reviewDefaultCategories  **参数解释：** 检视意见分类(已勾选的分类的key列表)。
    * reviewCustomizedCategories  **参数解释：** 自定义分类列表。
    * isAssigneeIdRequired  **参数解释：** 是否勾选指派给。
    * isReviewCategoriesRequired  **参数解释：** 是否勾选意见分类。
    * isReviewModulesRequired  **参数解释：** 是否勾选意见模块。
    *
    * @var string[]
    */
    protected static $setters = [
            'categoriesAndModulesEnabled' => 'setCategoriesAndModulesEnabled',
            'reviewModules' => 'setReviewModules',
            'secondaryCategoryEnabled' => 'setSecondaryCategoryEnabled',
            'reviewDefaultCategories' => 'setReviewDefaultCategories',
            'reviewCustomizedCategories' => 'setReviewCustomizedCategories',
            'isAssigneeIdRequired' => 'setIsAssigneeIdRequired',
            'isReviewCategoriesRequired' => 'setIsReviewCategoriesRequired',
            'isReviewModulesRequired' => 'setIsReviewModulesRequired'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * categoriesAndModulesEnabled  **参数解释：** 是否启用启用检视意见分类与模块。
    * reviewModules  **参数解释：** 检视意见模块。
    * secondaryCategoryEnabled  **参数解释：** 是否启用系统预置检视意见分类。
    * reviewDefaultCategories  **参数解释：** 检视意见分类(已勾选的分类的key列表)。
    * reviewCustomizedCategories  **参数解释：** 自定义分类列表。
    * isAssigneeIdRequired  **参数解释：** 是否勾选指派给。
    * isReviewCategoriesRequired  **参数解释：** 是否勾选意见分类。
    * isReviewModulesRequired  **参数解释：** 是否勾选意见模块。
    *
    * @var string[]
    */
    protected static $getters = [
            'categoriesAndModulesEnabled' => 'getCategoriesAndModulesEnabled',
            'reviewModules' => 'getReviewModules',
            'secondaryCategoryEnabled' => 'getSecondaryCategoryEnabled',
            'reviewDefaultCategories' => 'getReviewDefaultCategories',
            'reviewCustomizedCategories' => 'getReviewCustomizedCategories',
            'isAssigneeIdRequired' => 'getIsAssigneeIdRequired',
            'isReviewCategoriesRequired' => 'getIsReviewCategoriesRequired',
            'isReviewModulesRequired' => 'getIsReviewModulesRequired'
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
        $this->container['reviewModules'] = isset($data['reviewModules']) ? $data['reviewModules'] : null;
        $this->container['secondaryCategoryEnabled'] = isset($data['secondaryCategoryEnabled']) ? $data['secondaryCategoryEnabled'] : null;
        $this->container['reviewDefaultCategories'] = isset($data['reviewDefaultCategories']) ? $data['reviewDefaultCategories'] : null;
        $this->container['reviewCustomizedCategories'] = isset($data['reviewCustomizedCategories']) ? $data['reviewCustomizedCategories'] : null;
        $this->container['isAssigneeIdRequired'] = isset($data['isAssigneeIdRequired']) ? $data['isAssigneeIdRequired'] : null;
        $this->container['isReviewCategoriesRequired'] = isset($data['isReviewCategoriesRequired']) ? $data['isReviewCategoriesRequired'] : null;
        $this->container['isReviewModulesRequired'] = isset($data['isReviewModulesRequired']) ? $data['isReviewModulesRequired'] : null;
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
    * Gets reviewDefaultCategories
    *  **参数解释：** 检视意见分类(已勾选的分类的key列表)。
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
    * @param string[]|null $reviewDefaultCategories **参数解释：** 检视意见分类(已勾选的分类的key列表)。
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
    *  **参数解释：** 自定义分类列表。
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
    * @param string[]|null $reviewCustomizedCategories **参数解释：** 自定义分类列表。
    *
    * @return $this
    */
    public function setReviewCustomizedCategories($reviewCustomizedCategories)
    {
        $this->container['reviewCustomizedCategories'] = $reviewCustomizedCategories;
        return $this;
    }

    /**
    * Gets isAssigneeIdRequired
    *  **参数解释：** 是否勾选指派给。
    *
    * @return bool|null
    */
    public function getIsAssigneeIdRequired()
    {
        return $this->container['isAssigneeIdRequired'];
    }

    /**
    * Sets isAssigneeIdRequired
    *
    * @param bool|null $isAssigneeIdRequired **参数解释：** 是否勾选指派给。
    *
    * @return $this
    */
    public function setIsAssigneeIdRequired($isAssigneeIdRequired)
    {
        $this->container['isAssigneeIdRequired'] = $isAssigneeIdRequired;
        return $this;
    }

    /**
    * Gets isReviewCategoriesRequired
    *  **参数解释：** 是否勾选意见分类。
    *
    * @return bool|null
    */
    public function getIsReviewCategoriesRequired()
    {
        return $this->container['isReviewCategoriesRequired'];
    }

    /**
    * Sets isReviewCategoriesRequired
    *
    * @param bool|null $isReviewCategoriesRequired **参数解释：** 是否勾选意见分类。
    *
    * @return $this
    */
    public function setIsReviewCategoriesRequired($isReviewCategoriesRequired)
    {
        $this->container['isReviewCategoriesRequired'] = $isReviewCategoriesRequired;
        return $this;
    }

    /**
    * Gets isReviewModulesRequired
    *  **参数解释：** 是否勾选意见模块。
    *
    * @return bool|null
    */
    public function getIsReviewModulesRequired()
    {
        return $this->container['isReviewModulesRequired'];
    }

    /**
    * Sets isReviewModulesRequired
    *
    * @param bool|null $isReviewModulesRequired **参数解释：** 是否勾选意见模块。
    *
    * @return $this
    */
    public function setIsReviewModulesRequired($isReviewModulesRequired)
    {
        $this->container['isReviewModulesRequired'] = $isReviewModulesRequired;
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

