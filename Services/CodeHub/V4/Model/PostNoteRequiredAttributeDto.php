<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PostNoteRequiredAttributeDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PostNoteRequiredAttributeDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isAssigneeIdRequired  **参数解释：** 是否勾选指派给。
    * isReviewCategoriesRequired  **参数解释：** 是否勾选意见分类。
    * isReviewModulesRequired  **参数解释：** 是否勾选意见模块。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isAssigneeIdRequired' => 'bool',
            'isReviewCategoriesRequired' => 'bool',
            'isReviewModulesRequired' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isAssigneeIdRequired  **参数解释：** 是否勾选指派给。
    * isReviewCategoriesRequired  **参数解释：** 是否勾选意见分类。
    * isReviewModulesRequired  **参数解释：** 是否勾选意见模块。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
    * isAssigneeIdRequired  **参数解释：** 是否勾选指派给。
    * isReviewCategoriesRequired  **参数解释：** 是否勾选意见分类。
    * isReviewModulesRequired  **参数解释：** 是否勾选意见模块。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isAssigneeIdRequired' => 'is_assignee_id_required',
            'isReviewCategoriesRequired' => 'is_review_categories_required',
            'isReviewModulesRequired' => 'is_review_modules_required'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isAssigneeIdRequired  **参数解释：** 是否勾选指派给。
    * isReviewCategoriesRequired  **参数解释：** 是否勾选意见分类。
    * isReviewModulesRequired  **参数解释：** 是否勾选意见模块。
    *
    * @var string[]
    */
    protected static $setters = [
            'isAssigneeIdRequired' => 'setIsAssigneeIdRequired',
            'isReviewCategoriesRequired' => 'setIsReviewCategoriesRequired',
            'isReviewModulesRequired' => 'setIsReviewModulesRequired'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isAssigneeIdRequired  **参数解释：** 是否勾选指派给。
    * isReviewCategoriesRequired  **参数解释：** 是否勾选意见分类。
    * isReviewModulesRequired  **参数解释：** 是否勾选意见模块。
    *
    * @var string[]
    */
    protected static $getters = [
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

