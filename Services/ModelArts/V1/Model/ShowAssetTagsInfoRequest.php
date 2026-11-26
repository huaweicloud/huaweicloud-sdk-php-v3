<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAssetTagsInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAssetTagsInfoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tagCategory  **参数解释**：标签分类。 **约束限制**：1-128位字符，仅支持中文、英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * xLanguage  **参数解释**：请求头（Header）参数，主要用于控制API返回内容的语言。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tagCategory' => 'string',
            'xLanguage' => 'string',
            'workspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tagCategory  **参数解释**：标签分类。 **约束限制**：1-128位字符，仅支持中文、英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * xLanguage  **参数解释**：请求头（Header）参数，主要用于控制API返回内容的语言。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tagCategory' => null,
        'xLanguage' => null,
        'workspaceId' => null
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
    * tagCategory  **参数解释**：标签分类。 **约束限制**：1-128位字符，仅支持中文、英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * xLanguage  **参数解释**：请求头（Header）参数，主要用于控制API返回内容的语言。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tagCategory' => 'tag_category',
            'xLanguage' => 'X-Language',
            'workspaceId' => 'workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tagCategory  **参数解释**：标签分类。 **约束限制**：1-128位字符，仅支持中文、英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * xLanguage  **参数解释**：请求头（Header）参数，主要用于控制API返回内容的语言。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @var string[]
    */
    protected static $setters = [
            'tagCategory' => 'setTagCategory',
            'xLanguage' => 'setXLanguage',
            'workspaceId' => 'setWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tagCategory  **参数解释**：标签分类。 **约束限制**：1-128位字符，仅支持中文、英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * xLanguage  **参数解释**：请求头（Header）参数，主要用于控制API返回内容的语言。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @var string[]
    */
    protected static $getters = [
            'tagCategory' => 'getTagCategory',
            'xLanguage' => 'getXLanguage',
            'workspaceId' => 'getWorkspaceId'
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
        $this->container['tagCategory'] = isset($data['tagCategory']) ? $data['tagCategory'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tagCategory'] === null) {
            $invalidProperties[] = "'tagCategory' can't be null";
        }
            if (!preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_-]{1,128}$/", $this->container['tagCategory'])) {
                $invalidProperties[] = "invalid value for 'tagCategory', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_-]{1,128}$/.";
            }
            if (!is_null($this->container['xLanguage']) && (mb_strlen($this->container['xLanguage']) > 64)) {
                $invalidProperties[] = "invalid value for 'xLanguage', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['xLanguage']) && (mb_strlen($this->container['xLanguage']) < 0)) {
                $invalidProperties[] = "invalid value for 'xLanguage', the character length must be bigger than or equal to 0.";
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
    * Gets tagCategory
    *  **参数解释**：标签分类。 **约束限制**：1-128位字符，仅支持中文、英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getTagCategory()
    {
        return $this->container['tagCategory'];
    }

    /**
    * Sets tagCategory
    *
    * @param string $tagCategory **参数解释**：标签分类。 **约束限制**：1-128位字符，仅支持中文、英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setTagCategory($tagCategory)
    {
        $this->container['tagCategory'] = $tagCategory;
        return $this;
    }

    /**
    * Gets xLanguage
    *  **参数解释**：请求头（Header）参数，主要用于控制API返回内容的语言。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage **参数解释**：请求头（Header）参数，主要用于控制API返回内容的语言。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
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

