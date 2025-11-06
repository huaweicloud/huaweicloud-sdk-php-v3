<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateMergeRequestTemplateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateMergeRequestTemplateDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateName  **参数解释：** 模板名称
    * mergeRequestTitle  **参数解释：** 合并请求标题（不自动提取合并请求标题时生效）
    * description  **参数解释：** 描述
    * autoExtractMrTitle  **参数解释：** 自动提取合并请求标题 0：不提取 1：提取提交信息 2：提取e2e单标题
    * isWip  **参数解释：** 是否在标题中添加[WIP]
    * isDefault  **参数解释：** 是否设置为默认模板
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateName' => 'string',
            'mergeRequestTitle' => 'string',
            'description' => 'string',
            'autoExtractMrTitle' => 'int',
            'isWip' => 'bool',
            'isDefault' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateName  **参数解释：** 模板名称
    * mergeRequestTitle  **参数解释：** 合并请求标题（不自动提取合并请求标题时生效）
    * description  **参数解释：** 描述
    * autoExtractMrTitle  **参数解释：** 自动提取合并请求标题 0：不提取 1：提取提交信息 2：提取e2e单标题
    * isWip  **参数解释：** 是否在标题中添加[WIP]
    * isDefault  **参数解释：** 是否设置为默认模板
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateName' => null,
        'mergeRequestTitle' => null,
        'description' => null,
        'autoExtractMrTitle' => 'int32',
        'isWip' => null,
        'isDefault' => null
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
    * templateName  **参数解释：** 模板名称
    * mergeRequestTitle  **参数解释：** 合并请求标题（不自动提取合并请求标题时生效）
    * description  **参数解释：** 描述
    * autoExtractMrTitle  **参数解释：** 自动提取合并请求标题 0：不提取 1：提取提交信息 2：提取e2e单标题
    * isWip  **参数解释：** 是否在标题中添加[WIP]
    * isDefault  **参数解释：** 是否设置为默认模板
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateName' => 'template_name',
            'mergeRequestTitle' => 'merge_request_title',
            'description' => 'description',
            'autoExtractMrTitle' => 'auto_extract_mr_title',
            'isWip' => 'is_wip',
            'isDefault' => 'is_default'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateName  **参数解释：** 模板名称
    * mergeRequestTitle  **参数解释：** 合并请求标题（不自动提取合并请求标题时生效）
    * description  **参数解释：** 描述
    * autoExtractMrTitle  **参数解释：** 自动提取合并请求标题 0：不提取 1：提取提交信息 2：提取e2e单标题
    * isWip  **参数解释：** 是否在标题中添加[WIP]
    * isDefault  **参数解释：** 是否设置为默认模板
    *
    * @var string[]
    */
    protected static $setters = [
            'templateName' => 'setTemplateName',
            'mergeRequestTitle' => 'setMergeRequestTitle',
            'description' => 'setDescription',
            'autoExtractMrTitle' => 'setAutoExtractMrTitle',
            'isWip' => 'setIsWip',
            'isDefault' => 'setIsDefault'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateName  **参数解释：** 模板名称
    * mergeRequestTitle  **参数解释：** 合并请求标题（不自动提取合并请求标题时生效）
    * description  **参数解释：** 描述
    * autoExtractMrTitle  **参数解释：** 自动提取合并请求标题 0：不提取 1：提取提交信息 2：提取e2e单标题
    * isWip  **参数解释：** 是否在标题中添加[WIP]
    * isDefault  **参数解释：** 是否设置为默认模板
    *
    * @var string[]
    */
    protected static $getters = [
            'templateName' => 'getTemplateName',
            'mergeRequestTitle' => 'getMergeRequestTitle',
            'description' => 'getDescription',
            'autoExtractMrTitle' => 'getAutoExtractMrTitle',
            'isWip' => 'getIsWip',
            'isDefault' => 'getIsDefault'
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
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['mergeRequestTitle'] = isset($data['mergeRequestTitle']) ? $data['mergeRequestTitle'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['autoExtractMrTitle'] = isset($data['autoExtractMrTitle']) ? $data['autoExtractMrTitle'] : null;
        $this->container['isWip'] = isset($data['isWip']) ? $data['isWip'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['templateName'] === null) {
            $invalidProperties[] = "'templateName' can't be null";
        }
            if ((mb_strlen($this->container['templateName']) > 200)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 200.";
            }
            if ((mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mergeRequestTitle']) && (mb_strlen($this->container['mergeRequestTitle']) > 200)) {
                $invalidProperties[] = "invalid value for 'mergeRequestTitle', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['mergeRequestTitle']) && (mb_strlen($this->container['mergeRequestTitle']) < 1)) {
                $invalidProperties[] = "invalid value for 'mergeRequestTitle', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 10000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
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
    * Gets templateName
    *  **参数解释：** 模板名称
    *
    * @return string
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string $templateName **参数解释：** 模板名称
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

