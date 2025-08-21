<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiscussionTemplateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiscussionTemplateDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 检视意见模板主键id。
    * templateName  **参数解释：** 模板名称。
    * description  **参数解释：** 描述。
    * assigneeId  **参数解释：** 默认指派人。
    * categories  **参数解释：** 意见分类key。
    * categoriesEn  **参数解释：** 意见分类英文。
    * categoriesCn  **参数解释：** 意见分类中文。
    * modules  **参数解释：** 检视意见模块。
    * reviewSeverity  **参数解释：** 严重程度key。
    * isDefault  **参数解释：** 是否设置为默认模板。
    * creatorId  **参数解释：** 模板作者id。
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * creator  creator
    * assignee  assignee
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'templateName' => 'string',
            'description' => 'string',
            'assigneeId' => 'int',
            'categories' => 'string',
            'categoriesEn' => 'string',
            'categoriesCn' => 'string',
            'modules' => 'string[]',
            'reviewSeverity' => 'string',
            'isDefault' => 'bool',
            'creatorId' => 'int',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'creator' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto',
            'assignee' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 检视意见模板主键id。
    * templateName  **参数解释：** 模板名称。
    * description  **参数解释：** 描述。
    * assigneeId  **参数解释：** 默认指派人。
    * categories  **参数解释：** 意见分类key。
    * categoriesEn  **参数解释：** 意见分类英文。
    * categoriesCn  **参数解释：** 意见分类中文。
    * modules  **参数解释：** 检视意见模块。
    * reviewSeverity  **参数解释：** 严重程度key。
    * isDefault  **参数解释：** 是否设置为默认模板。
    * creatorId  **参数解释：** 模板作者id。
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * creator  creator
    * assignee  assignee
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'templateName' => null,
        'description' => null,
        'assigneeId' => 'int32',
        'categories' => null,
        'categoriesEn' => null,
        'categoriesCn' => null,
        'modules' => null,
        'reviewSeverity' => null,
        'isDefault' => null,
        'creatorId' => 'int32',
        'createdAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'updatedAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'creator' => null,
        'assignee' => null
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
    * id  **参数解释：** 检视意见模板主键id。
    * templateName  **参数解释：** 模板名称。
    * description  **参数解释：** 描述。
    * assigneeId  **参数解释：** 默认指派人。
    * categories  **参数解释：** 意见分类key。
    * categoriesEn  **参数解释：** 意见分类英文。
    * categoriesCn  **参数解释：** 意见分类中文。
    * modules  **参数解释：** 检视意见模块。
    * reviewSeverity  **参数解释：** 严重程度key。
    * isDefault  **参数解释：** 是否设置为默认模板。
    * creatorId  **参数解释：** 模板作者id。
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * creator  creator
    * assignee  assignee
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'templateName' => 'template_name',
            'description' => 'description',
            'assigneeId' => 'assignee_id',
            'categories' => 'categories',
            'categoriesEn' => 'categories_en',
            'categoriesCn' => 'categories_cn',
            'modules' => 'modules',
            'reviewSeverity' => 'review_severity',
            'isDefault' => 'is_default',
            'creatorId' => 'creator_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'creator' => 'creator',
            'assignee' => 'assignee'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 检视意见模板主键id。
    * templateName  **参数解释：** 模板名称。
    * description  **参数解释：** 描述。
    * assigneeId  **参数解释：** 默认指派人。
    * categories  **参数解释：** 意见分类key。
    * categoriesEn  **参数解释：** 意见分类英文。
    * categoriesCn  **参数解释：** 意见分类中文。
    * modules  **参数解释：** 检视意见模块。
    * reviewSeverity  **参数解释：** 严重程度key。
    * isDefault  **参数解释：** 是否设置为默认模板。
    * creatorId  **参数解释：** 模板作者id。
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * creator  creator
    * assignee  assignee
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'templateName' => 'setTemplateName',
            'description' => 'setDescription',
            'assigneeId' => 'setAssigneeId',
            'categories' => 'setCategories',
            'categoriesEn' => 'setCategoriesEn',
            'categoriesCn' => 'setCategoriesCn',
            'modules' => 'setModules',
            'reviewSeverity' => 'setReviewSeverity',
            'isDefault' => 'setIsDefault',
            'creatorId' => 'setCreatorId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'creator' => 'setCreator',
            'assignee' => 'setAssignee'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 检视意见模板主键id。
    * templateName  **参数解释：** 模板名称。
    * description  **参数解释：** 描述。
    * assigneeId  **参数解释：** 默认指派人。
    * categories  **参数解释：** 意见分类key。
    * categoriesEn  **参数解释：** 意见分类英文。
    * categoriesCn  **参数解释：** 意见分类中文。
    * modules  **参数解释：** 检视意见模块。
    * reviewSeverity  **参数解释：** 严重程度key。
    * isDefault  **参数解释：** 是否设置为默认模板。
    * creatorId  **参数解释：** 模板作者id。
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * creator  creator
    * assignee  assignee
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'templateName' => 'getTemplateName',
            'description' => 'getDescription',
            'assigneeId' => 'getAssigneeId',
            'categories' => 'getCategories',
            'categoriesEn' => 'getCategoriesEn',
            'categoriesCn' => 'getCategoriesCn',
            'modules' => 'getModules',
            'reviewSeverity' => 'getReviewSeverity',
            'isDefault' => 'getIsDefault',
            'creatorId' => 'getCreatorId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'creator' => 'getCreator',
            'assignee' => 'getAssignee'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['assigneeId'] = isset($data['assigneeId']) ? $data['assigneeId'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['categoriesEn'] = isset($data['categoriesEn']) ? $data['categoriesEn'] : null;
        $this->container['categoriesCn'] = isset($data['categoriesCn']) ? $data['categoriesCn'] : null;
        $this->container['modules'] = isset($data['modules']) ? $data['modules'] : null;
        $this->container['reviewSeverity'] = isset($data['reviewSeverity']) ? $data['reviewSeverity'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['templateName']) && (mb_strlen($this->container['templateName']) > 200)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['templateName']) && (mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 10000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assigneeId']) && ($this->container['assigneeId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'assigneeId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['assigneeId']) && ($this->container['assigneeId'] < 1)) {
                $invalidProperties[] = "invalid value for 'assigneeId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['categories']) && (mb_strlen($this->container['categories']) > 200)) {
                $invalidProperties[] = "invalid value for 'categories', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['categories']) && (mb_strlen($this->container['categories']) < 1)) {
                $invalidProperties[] = "invalid value for 'categories', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['categoriesEn']) && (mb_strlen($this->container['categoriesEn']) > 200)) {
                $invalidProperties[] = "invalid value for 'categoriesEn', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['categoriesEn']) && (mb_strlen($this->container['categoriesEn']) < 1)) {
                $invalidProperties[] = "invalid value for 'categoriesEn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['categoriesCn']) && (mb_strlen($this->container['categoriesCn']) > 200)) {
                $invalidProperties[] = "invalid value for 'categoriesCn', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['categoriesCn']) && (mb_strlen($this->container['categoriesCn']) < 1)) {
                $invalidProperties[] = "invalid value for 'categoriesCn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reviewSeverity']) && (mb_strlen($this->container['reviewSeverity']) > 200)) {
                $invalidProperties[] = "invalid value for 'reviewSeverity', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['reviewSeverity']) && (mb_strlen($this->container['reviewSeverity']) < 1)) {
                $invalidProperties[] = "invalid value for 'reviewSeverity', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['creatorId']) && ($this->container['creatorId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'creatorId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['creatorId']) && ($this->container['creatorId'] < 1)) {
                $invalidProperties[] = "invalid value for 'creatorId', must be bigger than or equal to 1.";
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
    * Gets id
    *  **参数解释：** 检视意见模板主键id。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 检视意见模板主键id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets templateName
    *  **参数解释：** 模板名称。
    *
    * @return string|null
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string|null $templateName **参数解释：** 模板名称。
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释：** 描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets assigneeId
    *  **参数解释：** 默认指派人。
    *
    * @return int|null
    */
    public function getAssigneeId()
    {
        return $this->container['assigneeId'];
    }

    /**
    * Sets assigneeId
    *
    * @param int|null $assigneeId **参数解释：** 默认指派人。
    *
    * @return $this
    */
    public function setAssigneeId($assigneeId)
    {
        $this->container['assigneeId'] = $assigneeId;
        return $this;
    }

    /**
    * Gets categories
    *  **参数解释：** 意见分类key。
    *
    * @return string|null
    */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
    * Sets categories
    *
    * @param string|null $categories **参数解释：** 意见分类key。
    *
    * @return $this
    */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;
        return $this;
    }

    /**
    * Gets categoriesEn
    *  **参数解释：** 意见分类英文。
    *
    * @return string|null
    */
    public function getCategoriesEn()
    {
        return $this->container['categoriesEn'];
    }

    /**
    * Sets categoriesEn
    *
    * @param string|null $categoriesEn **参数解释：** 意见分类英文。
    *
    * @return $this
    */
    public function setCategoriesEn($categoriesEn)
    {
        $this->container['categoriesEn'] = $categoriesEn;
        return $this;
    }

    /**
    * Gets categoriesCn
    *  **参数解释：** 意见分类中文。
    *
    * @return string|null
    */
    public function getCategoriesCn()
    {
        return $this->container['categoriesCn'];
    }

    /**
    * Sets categoriesCn
    *
    * @param string|null $categoriesCn **参数解释：** 意见分类中文。
    *
    * @return $this
    */
    public function setCategoriesCn($categoriesCn)
    {
        $this->container['categoriesCn'] = $categoriesCn;
        return $this;
    }

    /**
    * Gets modules
    *  **参数解释：** 检视意见模块。
    *
    * @return string[]|null
    */
    public function getModules()
    {
        return $this->container['modules'];
    }

    /**
    * Sets modules
    *
    * @param string[]|null $modules **参数解释：** 检视意见模块。
    *
    * @return $this
    */
    public function setModules($modules)
    {
        $this->container['modules'] = $modules;
        return $this;
    }

    /**
    * Gets reviewSeverity
    *  **参数解释：** 严重程度key。
    *
    * @return string|null
    */
    public function getReviewSeverity()
    {
        return $this->container['reviewSeverity'];
    }

    /**
    * Sets reviewSeverity
    *
    * @param string|null $reviewSeverity **参数解释：** 严重程度key。
    *
    * @return $this
    */
    public function setReviewSeverity($reviewSeverity)
    {
        $this->container['reviewSeverity'] = $reviewSeverity;
        return $this;
    }

    /**
    * Gets isDefault
    *  **参数解释：** 是否设置为默认模板。
    *
    * @return bool|null
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param bool|null $isDefault **参数解释：** 是否设置为默认模板。
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
        return $this;
    }

    /**
    * Gets creatorId
    *  **参数解释：** 模板作者id。
    *
    * @return int|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param int|null $creatorId **参数解释：** 模板作者id。
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释：** 创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释：** 更新时间。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释：** 更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets creator
    *  creator
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null $creator creator
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets assignee
    *  assignee
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null
    */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
    * Sets assignee
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null $assignee assignee
    *
    * @return $this
    */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;
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

