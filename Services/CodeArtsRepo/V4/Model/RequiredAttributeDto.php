<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RequiredAttributeDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RequiredAttributeDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释：** 必填字段名称。 描述：Body 严重程度：Severity 指派给：AssigneeId 意见分类：ReviewCategories 意见模块：ReviewModules
    * isRequired  **参数解释：** 是否必填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'isRequired' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释：** 必填字段名称。 描述：Body 严重程度：Severity 指派给：AssigneeId 意见分类：ReviewCategories 意见模块：ReviewModules
    * isRequired  **参数解释：** 是否必填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'isRequired' => null
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
    * name  **参数解释：** 必填字段名称。 描述：Body 严重程度：Severity 指派给：AssigneeId 意见分类：ReviewCategories 意见模块：ReviewModules
    * isRequired  **参数解释：** 是否必填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'isRequired' => 'is_required'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释：** 必填字段名称。 描述：Body 严重程度：Severity 指派给：AssigneeId 意见分类：ReviewCategories 意见模块：ReviewModules
    * isRequired  **参数解释：** 是否必填。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'isRequired' => 'setIsRequired'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释：** 必填字段名称。 描述：Body 严重程度：Severity 指派给：AssigneeId 意见分类：ReviewCategories 意见模块：ReviewModules
    * isRequired  **参数解释：** 是否必填。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'isRequired' => 'getIsRequired'
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
    const NAME_BODY = 'Body';
    const NAME_SEVERITY = 'Severity';
    const NAME_ASSIGNEE_ID = 'AssigneeId';
    const NAME_REVIEW_CATEGORIES = 'ReviewCategories';
    const NAME_REVIEW_MODULES = 'ReviewModules';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNameAllowableValues()
    {
        return [
            self::NAME_BODY,
            self::NAME_SEVERITY,
            self::NAME_ASSIGNEE_ID,
            self::NAME_REVIEW_CATEGORIES,
            self::NAME_REVIEW_MODULES,
        ];
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
        $this->container['isRequired'] = isset($data['isRequired']) ? $data['isRequired'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getNameAllowableValues();
                if (!is_null($this->container['name']) && !in_array($this->container['name'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'name', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets name
    *  **参数解释：** 必填字段名称。 描述：Body 严重程度：Severity 指派给：AssigneeId 意见分类：ReviewCategories 意见模块：ReviewModules
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
    * @param string|null $name **参数解释：** 必填字段名称。 描述：Body 严重程度：Severity 指派给：AssigneeId 意见分类：ReviewCategories 意见模块：ReviewModules
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets isRequired
    *  **参数解释：** 是否必填。
    *
    * @return bool|null
    */
    public function getIsRequired()
    {
        return $this->container['isRequired'];
    }

    /**
    * Sets isRequired
    *
    * @param bool|null $isRequired **参数解释：** 是否必填。
    *
    * @return $this
    */
    public function setIsRequired($isRequired)
    {
        $this->container['isRequired'] = $isRequired;
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

