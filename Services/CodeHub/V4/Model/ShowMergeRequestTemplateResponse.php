<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMergeRequestTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMergeRequestTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 合并请求模板主键id
    * repositoryId  **参数解释：** 仓库id
    * description  **参数解释：** 描述
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * templateName  **参数解释：** 模板名称
    * mergeRequestTitle  **参数解释：** 合并请求标题（不自动提取合并请求标题时生效）
    * isDefault  **参数解释：** 是否设置为默认模板
    * isWip  **参数解释：** 是否在标题中添加[WIP]
    * autoExtractMrTitle  **参数解释：** 自动提取合并请求标题 0：不提取 1：提取提交信息 2：提取e2e单标题
    * creator  creator
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'repositoryId' => 'int',
            'description' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'templateName' => 'string',
            'mergeRequestTitle' => 'string',
            'isDefault' => 'bool',
            'isWip' => 'bool',
            'autoExtractMrTitle' => 'int',
            'creator' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 合并请求模板主键id
    * repositoryId  **参数解释：** 仓库id
    * description  **参数解释：** 描述
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * templateName  **参数解释：** 模板名称
    * mergeRequestTitle  **参数解释：** 合并请求标题（不自动提取合并请求标题时生效）
    * isDefault  **参数解释：** 是否设置为默认模板
    * isWip  **参数解释：** 是否在标题中添加[WIP]
    * autoExtractMrTitle  **参数解释：** 自动提取合并请求标题 0：不提取 1：提取提交信息 2：提取e2e单标题
    * creator  creator
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'repositoryId' => 'int32',
        'description' => null,
        'createdAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'updatedAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'templateName' => null,
        'mergeRequestTitle' => null,
        'isDefault' => null,
        'isWip' => null,
        'autoExtractMrTitle' => 'int32',
        'creator' => null
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
    * id  **参数解释：** 合并请求模板主键id
    * repositoryId  **参数解释：** 仓库id
    * description  **参数解释：** 描述
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * templateName  **参数解释：** 模板名称
    * mergeRequestTitle  **参数解释：** 合并请求标题（不自动提取合并请求标题时生效）
    * isDefault  **参数解释：** 是否设置为默认模板
    * isWip  **参数解释：** 是否在标题中添加[WIP]
    * autoExtractMrTitle  **参数解释：** 自动提取合并请求标题 0：不提取 1：提取提交信息 2：提取e2e单标题
    * creator  creator
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'repositoryId' => 'repository_id',
            'description' => 'description',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'templateName' => 'template_name',
            'mergeRequestTitle' => 'merge_request_title',
            'isDefault' => 'is_default',
            'isWip' => 'is_wip',
            'autoExtractMrTitle' => 'auto_extract_mr_title',
            'creator' => 'creator'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 合并请求模板主键id
    * repositoryId  **参数解释：** 仓库id
    * description  **参数解释：** 描述
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * templateName  **参数解释：** 模板名称
    * mergeRequestTitle  **参数解释：** 合并请求标题（不自动提取合并请求标题时生效）
    * isDefault  **参数解释：** 是否设置为默认模板
    * isWip  **参数解释：** 是否在标题中添加[WIP]
    * autoExtractMrTitle  **参数解释：** 自动提取合并请求标题 0：不提取 1：提取提交信息 2：提取e2e单标题
    * creator  creator
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'repositoryId' => 'setRepositoryId',
            'description' => 'setDescription',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'templateName' => 'setTemplateName',
            'mergeRequestTitle' => 'setMergeRequestTitle',
            'isDefault' => 'setIsDefault',
            'isWip' => 'setIsWip',
            'autoExtractMrTitle' => 'setAutoExtractMrTitle',
            'creator' => 'setCreator'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 合并请求模板主键id
    * repositoryId  **参数解释：** 仓库id
    * description  **参数解释：** 描述
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * templateName  **参数解释：** 模板名称
    * mergeRequestTitle  **参数解释：** 合并请求标题（不自动提取合并请求标题时生效）
    * isDefault  **参数解释：** 是否设置为默认模板
    * isWip  **参数解释：** 是否在标题中添加[WIP]
    * autoExtractMrTitle  **参数解释：** 自动提取合并请求标题 0：不提取 1：提取提交信息 2：提取e2e单标题
    * creator  creator
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'repositoryId' => 'getRepositoryId',
            'description' => 'getDescription',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'templateName' => 'getTemplateName',
            'mergeRequestTitle' => 'getMergeRequestTitle',
            'isDefault' => 'getIsDefault',
            'isWip' => 'getIsWip',
            'autoExtractMrTitle' => 'getAutoExtractMrTitle',
            'creator' => 'getCreator'
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
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['mergeRequestTitle'] = isset($data['mergeRequestTitle']) ? $data['mergeRequestTitle'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['isWip'] = isset($data['isWip']) ? $data['isWip'] : null;
        $this->container['autoExtractMrTitle'] = isset($data['autoExtractMrTitle']) ? $data['autoExtractMrTitle'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
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
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 10000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['templateName']) && (mb_strlen($this->container['templateName']) > 200)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['templateName']) && (mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mergeRequestTitle']) && (mb_strlen($this->container['mergeRequestTitle']) > 200)) {
                $invalidProperties[] = "invalid value for 'mergeRequestTitle', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['mergeRequestTitle']) && (mb_strlen($this->container['mergeRequestTitle']) < 1)) {
                $invalidProperties[] = "invalid value for 'mergeRequestTitle', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['autoExtractMrTitle']) && ($this->container['autoExtractMrTitle'] > 2)) {
                $invalidProperties[] = "invalid value for 'autoExtractMrTitle', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['autoExtractMrTitle']) && ($this->container['autoExtractMrTitle'] < 0)) {
                $invalidProperties[] = "invalid value for 'autoExtractMrTitle', must be bigger than or equal to 0.";
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
    *  **参数解释：** 合并请求模板主键id
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
    * @param int|null $id **参数解释：** 合并请求模板主键id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets repositoryId
    *  **参数解释：** 仓库id
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
    * @param int|null $repositoryId **参数解释：** 仓库id
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 描述
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
    * @param string|null $description **参数解释：** 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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
    * Gets templateName
    *  **参数解释：** 模板名称
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
    * @param string|null $templateName **参数解释：** 模板名称
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets mergeRequestTitle
    *  **参数解释：** 合并请求标题（不自动提取合并请求标题时生效）
    *
    * @return string|null
    */
    public function getMergeRequestTitle()
    {
        return $this->container['mergeRequestTitle'];
    }

    /**
    * Sets mergeRequestTitle
    *
    * @param string|null $mergeRequestTitle **参数解释：** 合并请求标题（不自动提取合并请求标题时生效）
    *
    * @return $this
    */
    public function setMergeRequestTitle($mergeRequestTitle)
    {
        $this->container['mergeRequestTitle'] = $mergeRequestTitle;
        return $this;
    }

    /**
    * Gets isDefault
    *  **参数解释：** 是否设置为默认模板
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
    * @param bool|null $isDefault **参数解释：** 是否设置为默认模板
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
        return $this;
    }

    /**
    * Gets isWip
    *  **参数解释：** 是否在标题中添加[WIP]
    *
    * @return bool|null
    */
    public function getIsWip()
    {
        return $this->container['isWip'];
    }

    /**
    * Sets isWip
    *
    * @param bool|null $isWip **参数解释：** 是否在标题中添加[WIP]
    *
    * @return $this
    */
    public function setIsWip($isWip)
    {
        $this->container['isWip'] = $isWip;
        return $this;
    }

    /**
    * Gets autoExtractMrTitle
    *  **参数解释：** 自动提取合并请求标题 0：不提取 1：提取提交信息 2：提取e2e单标题
    *
    * @return int|null
    */
    public function getAutoExtractMrTitle()
    {
        return $this->container['autoExtractMrTitle'];
    }

    /**
    * Sets autoExtractMrTitle
    *
    * @param int|null $autoExtractMrTitle **参数解释：** 自动提取合并请求标题 0：不提取 1：提取提交信息 2：提取e2e单标题
    *
    * @return $this
    */
    public function setAutoExtractMrTitle($autoExtractMrTitle)
    {
        $this->container['autoExtractMrTitle'] = $autoExtractMrTitle;
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

