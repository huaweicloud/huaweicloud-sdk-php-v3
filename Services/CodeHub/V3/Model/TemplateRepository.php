<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateRepository implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateRepository';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  模板唯一标识
    * name  模板名称
    * templateName  模板关联仓库名称
    * tags  模板标签
    * description  模板描述
    * briefIntroduction  模板简介
    * autoPendingPipelines  是否自动创建流水线
    * language  模板语言分类
    * createdAt  模板创建时间
    * usedTimes  模板引用次数
    * likedTimes  模板被点赞次数
    * creatorName  模板创建人
    * httpsUrl  模板https链接
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'templateName' => 'string',
            'tags' => 'string[]',
            'description' => 'string',
            'briefIntroduction' => 'string',
            'autoPendingPipelines' => 'int',
            'language' => 'string',
            'createdAt' => 'string',
            'usedTimes' => 'int',
            'likedTimes' => 'int',
            'creatorName' => 'string',
            'httpsUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  模板唯一标识
    * name  模板名称
    * templateName  模板关联仓库名称
    * tags  模板标签
    * description  模板描述
    * briefIntroduction  模板简介
    * autoPendingPipelines  是否自动创建流水线
    * language  模板语言分类
    * createdAt  模板创建时间
    * usedTimes  模板引用次数
    * likedTimes  模板被点赞次数
    * creatorName  模板创建人
    * httpsUrl  模板https链接
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'name' => null,
        'templateName' => null,
        'tags' => null,
        'description' => null,
        'briefIntroduction' => null,
        'autoPendingPipelines' => 'int32',
        'language' => null,
        'createdAt' => null,
        'usedTimes' => 'int32',
        'likedTimes' => 'int32',
        'creatorName' => null,
        'httpsUrl' => null
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
    * id  模板唯一标识
    * name  模板名称
    * templateName  模板关联仓库名称
    * tags  模板标签
    * description  模板描述
    * briefIntroduction  模板简介
    * autoPendingPipelines  是否自动创建流水线
    * language  模板语言分类
    * createdAt  模板创建时间
    * usedTimes  模板引用次数
    * likedTimes  模板被点赞次数
    * creatorName  模板创建人
    * httpsUrl  模板https链接
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'templateName' => 'template_name',
            'tags' => 'tags',
            'description' => 'description',
            'briefIntroduction' => 'brief_introduction',
            'autoPendingPipelines' => 'auto_pending_pipelines',
            'language' => 'language',
            'createdAt' => 'created_at',
            'usedTimes' => 'used_times',
            'likedTimes' => 'liked_times',
            'creatorName' => 'creator_name',
            'httpsUrl' => 'https_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  模板唯一标识
    * name  模板名称
    * templateName  模板关联仓库名称
    * tags  模板标签
    * description  模板描述
    * briefIntroduction  模板简介
    * autoPendingPipelines  是否自动创建流水线
    * language  模板语言分类
    * createdAt  模板创建时间
    * usedTimes  模板引用次数
    * likedTimes  模板被点赞次数
    * creatorName  模板创建人
    * httpsUrl  模板https链接
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'templateName' => 'setTemplateName',
            'tags' => 'setTags',
            'description' => 'setDescription',
            'briefIntroduction' => 'setBriefIntroduction',
            'autoPendingPipelines' => 'setAutoPendingPipelines',
            'language' => 'setLanguage',
            'createdAt' => 'setCreatedAt',
            'usedTimes' => 'setUsedTimes',
            'likedTimes' => 'setLikedTimes',
            'creatorName' => 'setCreatorName',
            'httpsUrl' => 'setHttpsUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  模板唯一标识
    * name  模板名称
    * templateName  模板关联仓库名称
    * tags  模板标签
    * description  模板描述
    * briefIntroduction  模板简介
    * autoPendingPipelines  是否自动创建流水线
    * language  模板语言分类
    * createdAt  模板创建时间
    * usedTimes  模板引用次数
    * likedTimes  模板被点赞次数
    * creatorName  模板创建人
    * httpsUrl  模板https链接
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'templateName' => 'getTemplateName',
            'tags' => 'getTags',
            'description' => 'getDescription',
            'briefIntroduction' => 'getBriefIntroduction',
            'autoPendingPipelines' => 'getAutoPendingPipelines',
            'language' => 'getLanguage',
            'createdAt' => 'getCreatedAt',
            'usedTimes' => 'getUsedTimes',
            'likedTimes' => 'getLikedTimes',
            'creatorName' => 'getCreatorName',
            'httpsUrl' => 'getHttpsUrl'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['briefIntroduction'] = isset($data['briefIntroduction']) ? $data['briefIntroduction'] : null;
        $this->container['autoPendingPipelines'] = isset($data['autoPendingPipelines']) ? $data['autoPendingPipelines'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['usedTimes'] = isset($data['usedTimes']) ? $data['usedTimes'] : null;
        $this->container['likedTimes'] = isset($data['likedTimes']) ? $data['likedTimes'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['httpsUrl'] = isset($data['httpsUrl']) ? $data['httpsUrl'] : null;
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
    * Gets id
    *  模板唯一标识
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
    * @param int|null $id 模板唯一标识
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  模板名称
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
    * @param string|null $name 模板名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets templateName
    *  模板关联仓库名称
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
    * @param string|null $templateName 模板关联仓库名称
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets tags
    *  模板标签
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 模板标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets description
    *  模板描述
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
    * @param string|null $description 模板描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets briefIntroduction
    *  模板简介
    *
    * @return string|null
    */
    public function getBriefIntroduction()
    {
        return $this->container['briefIntroduction'];
    }

    /**
    * Sets briefIntroduction
    *
    * @param string|null $briefIntroduction 模板简介
    *
    * @return $this
    */
    public function setBriefIntroduction($briefIntroduction)
    {
        $this->container['briefIntroduction'] = $briefIntroduction;
        return $this;
    }

    /**
    * Gets autoPendingPipelines
    *  是否自动创建流水线
    *
    * @return int|null
    */
    public function getAutoPendingPipelines()
    {
        return $this->container['autoPendingPipelines'];
    }

    /**
    * Sets autoPendingPipelines
    *
    * @param int|null $autoPendingPipelines 是否自动创建流水线
    *
    * @return $this
    */
    public function setAutoPendingPipelines($autoPendingPipelines)
    {
        $this->container['autoPendingPipelines'] = $autoPendingPipelines;
        return $this;
    }

    /**
    * Gets language
    *  模板语言分类
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 模板语言分类
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets createdAt
    *  模板创建时间
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
    * @param string|null $createdAt 模板创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets usedTimes
    *  模板引用次数
    *
    * @return int|null
    */
    public function getUsedTimes()
    {
        return $this->container['usedTimes'];
    }

    /**
    * Sets usedTimes
    *
    * @param int|null $usedTimes 模板引用次数
    *
    * @return $this
    */
    public function setUsedTimes($usedTimes)
    {
        $this->container['usedTimes'] = $usedTimes;
        return $this;
    }

    /**
    * Gets likedTimes
    *  模板被点赞次数
    *
    * @return int|null
    */
    public function getLikedTimes()
    {
        return $this->container['likedTimes'];
    }

    /**
    * Sets likedTimes
    *
    * @param int|null $likedTimes 模板被点赞次数
    *
    * @return $this
    */
    public function setLikedTimes($likedTimes)
    {
        $this->container['likedTimes'] = $likedTimes;
        return $this;
    }

    /**
    * Gets creatorName
    *  模板创建人
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 模板创建人
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets httpsUrl
    *  模板https链接
    *
    * @return string|null
    */
    public function getHttpsUrl()
    {
        return $this->container['httpsUrl'];
    }

    /**
    * Sets httpsUrl
    *
    * @param string|null $httpsUrl 模板https链接
    *
    * @return $this
    */
    public function setHttpsUrl($httpsUrl)
    {
        $this->container['httpsUrl'] = $httpsUrl;
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

