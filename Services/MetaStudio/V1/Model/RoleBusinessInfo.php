<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RoleBusinessInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RoleBusinessInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roleBusinessId  角色业务配置ID。
    * roleId  角色ID。
    * language  language
    * prompt  提示词。
    * knowledgeLibraryList  知识库列表
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roleBusinessId' => 'string',
            'roleId' => 'string',
            'language' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum',
            'prompt' => 'string',
            'knowledgeLibraryList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\RoleKnowledgeLibraryInfo[]',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roleBusinessId  角色业务配置ID。
    * roleId  角色ID。
    * language  language
    * prompt  提示词。
    * knowledgeLibraryList  知识库列表
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roleBusinessId' => null,
        'roleId' => null,
        'language' => null,
        'prompt' => null,
        'knowledgeLibraryList' => null,
        'createTime' => null,
        'updateTime' => null
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
    * roleBusinessId  角色业务配置ID。
    * roleId  角色ID。
    * language  language
    * prompt  提示词。
    * knowledgeLibraryList  知识库列表
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roleBusinessId' => 'role_business_id',
            'roleId' => 'role_id',
            'language' => 'language',
            'prompt' => 'prompt',
            'knowledgeLibraryList' => 'knowledge_library_list',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roleBusinessId  角色业务配置ID。
    * roleId  角色ID。
    * language  language
    * prompt  提示词。
    * knowledgeLibraryList  知识库列表
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'roleBusinessId' => 'setRoleBusinessId',
            'roleId' => 'setRoleId',
            'language' => 'setLanguage',
            'prompt' => 'setPrompt',
            'knowledgeLibraryList' => 'setKnowledgeLibraryList',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roleBusinessId  角色业务配置ID。
    * roleId  角色ID。
    * language  language
    * prompt  提示词。
    * knowledgeLibraryList  知识库列表
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'roleBusinessId' => 'getRoleBusinessId',
            'roleId' => 'getRoleId',
            'language' => 'getLanguage',
            'prompt' => 'getPrompt',
            'knowledgeLibraryList' => 'getKnowledgeLibraryList',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['roleBusinessId'] = isset($data['roleBusinessId']) ? $data['roleBusinessId'] : null;
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['prompt'] = isset($data['prompt']) ? $data['prompt'] : null;
        $this->container['knowledgeLibraryList'] = isset($data['knowledgeLibraryList']) ? $data['knowledgeLibraryList'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['roleBusinessId']) && (mb_strlen($this->container['roleBusinessId']) > 64)) {
                $invalidProperties[] = "invalid value for 'roleBusinessId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['roleBusinessId']) && (mb_strlen($this->container['roleBusinessId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleBusinessId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['prompt']) && (mb_strlen($this->container['prompt']) > 1024)) {
                $invalidProperties[] = "invalid value for 'prompt', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['prompt']) && (mb_strlen($this->container['prompt']) < 1)) {
                $invalidProperties[] = "invalid value for 'prompt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 20.";
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
    * Gets roleBusinessId
    *  角色业务配置ID。
    *
    * @return string|null
    */
    public function getRoleBusinessId()
    {
        return $this->container['roleBusinessId'];
    }

    /**
    * Sets roleBusinessId
    *
    * @param string|null $roleBusinessId 角色业务配置ID。
    *
    * @return $this
    */
    public function setRoleBusinessId($roleBusinessId)
    {
        $this->container['roleBusinessId'] = $roleBusinessId;
        return $this;
    }

    /**
    * Gets roleId
    *  角色ID。
    *
    * @return string|null
    */
    public function getRoleId()
    {
        return $this->container['roleId'];
    }

    /**
    * Sets roleId
    *
    * @param string|null $roleId 角色ID。
    *
    * @return $this
    */
    public function setRoleId($roleId)
    {
        $this->container['roleId'] = $roleId;
        return $this;
    }

    /**
    * Gets language
    *  language
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum|null $language language
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets prompt
    *  提示词。
    *
    * @return string|null
    */
    public function getPrompt()
    {
        return $this->container['prompt'];
    }

    /**
    * Sets prompt
    *
    * @param string|null $prompt 提示词。
    *
    * @return $this
    */
    public function setPrompt($prompt)
    {
        $this->container['prompt'] = $prompt;
        return $this;
    }

    /**
    * Gets knowledgeLibraryList
    *  知识库列表
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\RoleKnowledgeLibraryInfo[]|null
    */
    public function getKnowledgeLibraryList()
    {
        return $this->container['knowledgeLibraryList'];
    }

    /**
    * Sets knowledgeLibraryList
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\RoleKnowledgeLibraryInfo[]|null $knowledgeLibraryList 知识库列表
    *
    * @return $this
    */
    public function setKnowledgeLibraryList($knowledgeLibraryList)
    {
        $this->container['knowledgeLibraryList'] = $knowledgeLibraryList;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

