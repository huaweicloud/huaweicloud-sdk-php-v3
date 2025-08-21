<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoryTemplateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositoryTemplateDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库Id。
    * name  **参数解释：** 模板仓标题。 **取值范围：** 字符串长度1-50。
    * system  **参数解释：** 是否是系统模版。 **取值范围：** - true，系统模版。 - false，个人模版。
    * tags  **参数解释：** 标签列表。 **取值范围：** 不涉及。
    * description  **参数解释：** 仓库描述信息。 **取值范围：** 字符串长度0-2000。
    * language  **参数解释：** 编程语言。 **取值范围：** 字符串长度0-32。
    * repositoryName  **参数解释：** 模板仓的仓库名称。 **取值范围：** 字符串长度0-255。
    * briefIntroduction  **参数解释：** 模板仓的简介。 **取值范围：** 字符串长度0-32。
    * createdAt  **参数解释：** 创建时间。
    * usedTimes  **参数解释：** 模板仓被使用的次数。
    * likedTimes  **参数解释：** 模板仓被点赞的次数。
    * creatorName  **参数解释：** 作者。 **取值范围：** 字符串长度0-128。
    * httpsUrl  **参数解释：** 代码仓https协议的git地址。 **取值范围：** 字符串最大长度512。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryId' => 'int',
            'name' => 'string',
            'system' => 'bool',
            'tags' => 'string[]',
            'description' => 'string',
            'language' => 'string',
            'repositoryName' => 'string',
            'briefIntroduction' => 'string',
            'createdAt' => 'string',
            'usedTimes' => 'int',
            'likedTimes' => 'int',
            'creatorName' => 'string',
            'httpsUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库Id。
    * name  **参数解释：** 模板仓标题。 **取值范围：** 字符串长度1-50。
    * system  **参数解释：** 是否是系统模版。 **取值范围：** - true，系统模版。 - false，个人模版。
    * tags  **参数解释：** 标签列表。 **取值范围：** 不涉及。
    * description  **参数解释：** 仓库描述信息。 **取值范围：** 字符串长度0-2000。
    * language  **参数解释：** 编程语言。 **取值范围：** 字符串长度0-32。
    * repositoryName  **参数解释：** 模板仓的仓库名称。 **取值范围：** 字符串长度0-255。
    * briefIntroduction  **参数解释：** 模板仓的简介。 **取值范围：** 字符串长度0-32。
    * createdAt  **参数解释：** 创建时间。
    * usedTimes  **参数解释：** 模板仓被使用的次数。
    * likedTimes  **参数解释：** 模板仓被点赞的次数。
    * creatorName  **参数解释：** 作者。 **取值范围：** 字符串长度0-128。
    * httpsUrl  **参数解释：** 代码仓https协议的git地址。 **取值范围：** 字符串最大长度512。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryId' => null,
        'name' => null,
        'system' => null,
        'tags' => null,
        'description' => null,
        'language' => null,
        'repositoryName' => null,
        'briefIntroduction' => null,
        'createdAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'usedTimes' => null,
        'likedTimes' => null,
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
    * repositoryId  **参数解释：** 仓库Id。
    * name  **参数解释：** 模板仓标题。 **取值范围：** 字符串长度1-50。
    * system  **参数解释：** 是否是系统模版。 **取值范围：** - true，系统模版。 - false，个人模版。
    * tags  **参数解释：** 标签列表。 **取值范围：** 不涉及。
    * description  **参数解释：** 仓库描述信息。 **取值范围：** 字符串长度0-2000。
    * language  **参数解释：** 编程语言。 **取值范围：** 字符串长度0-32。
    * repositoryName  **参数解释：** 模板仓的仓库名称。 **取值范围：** 字符串长度0-255。
    * briefIntroduction  **参数解释：** 模板仓的简介。 **取值范围：** 字符串长度0-32。
    * createdAt  **参数解释：** 创建时间。
    * usedTimes  **参数解释：** 模板仓被使用的次数。
    * likedTimes  **参数解释：** 模板仓被点赞的次数。
    * creatorName  **参数解释：** 作者。 **取值范围：** 字符串长度0-128。
    * httpsUrl  **参数解释：** 代码仓https协议的git地址。 **取值范围：** 字符串最大长度512。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryId' => 'repository_id',
            'name' => 'name',
            'system' => 'system',
            'tags' => 'tags',
            'description' => 'description',
            'language' => 'language',
            'repositoryName' => 'repository_name',
            'briefIntroduction' => 'brief_introduction',
            'createdAt' => 'created_at',
            'usedTimes' => 'used_times',
            'likedTimes' => 'liked_times',
            'creatorName' => 'creator_name',
            'httpsUrl' => 'https_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryId  **参数解释：** 仓库Id。
    * name  **参数解释：** 模板仓标题。 **取值范围：** 字符串长度1-50。
    * system  **参数解释：** 是否是系统模版。 **取值范围：** - true，系统模版。 - false，个人模版。
    * tags  **参数解释：** 标签列表。 **取值范围：** 不涉及。
    * description  **参数解释：** 仓库描述信息。 **取值范围：** 字符串长度0-2000。
    * language  **参数解释：** 编程语言。 **取值范围：** 字符串长度0-32。
    * repositoryName  **参数解释：** 模板仓的仓库名称。 **取值范围：** 字符串长度0-255。
    * briefIntroduction  **参数解释：** 模板仓的简介。 **取值范围：** 字符串长度0-32。
    * createdAt  **参数解释：** 创建时间。
    * usedTimes  **参数解释：** 模板仓被使用的次数。
    * likedTimes  **参数解释：** 模板仓被点赞的次数。
    * creatorName  **参数解释：** 作者。 **取值范围：** 字符串长度0-128。
    * httpsUrl  **参数解释：** 代码仓https协议的git地址。 **取值范围：** 字符串最大长度512。
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryId' => 'setRepositoryId',
            'name' => 'setName',
            'system' => 'setSystem',
            'tags' => 'setTags',
            'description' => 'setDescription',
            'language' => 'setLanguage',
            'repositoryName' => 'setRepositoryName',
            'briefIntroduction' => 'setBriefIntroduction',
            'createdAt' => 'setCreatedAt',
            'usedTimes' => 'setUsedTimes',
            'likedTimes' => 'setLikedTimes',
            'creatorName' => 'setCreatorName',
            'httpsUrl' => 'setHttpsUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryId  **参数解释：** 仓库Id。
    * name  **参数解释：** 模板仓标题。 **取值范围：** 字符串长度1-50。
    * system  **参数解释：** 是否是系统模版。 **取值范围：** - true，系统模版。 - false，个人模版。
    * tags  **参数解释：** 标签列表。 **取值范围：** 不涉及。
    * description  **参数解释：** 仓库描述信息。 **取值范围：** 字符串长度0-2000。
    * language  **参数解释：** 编程语言。 **取值范围：** 字符串长度0-32。
    * repositoryName  **参数解释：** 模板仓的仓库名称。 **取值范围：** 字符串长度0-255。
    * briefIntroduction  **参数解释：** 模板仓的简介。 **取值范围：** 字符串长度0-32。
    * createdAt  **参数解释：** 创建时间。
    * usedTimes  **参数解释：** 模板仓被使用的次数。
    * likedTimes  **参数解释：** 模板仓被点赞的次数。
    * creatorName  **参数解释：** 作者。 **取值范围：** 字符串长度0-128。
    * httpsUrl  **参数解释：** 代码仓https协议的git地址。 **取值范围：** 字符串最大长度512。
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryId' => 'getRepositoryId',
            'name' => 'getName',
            'system' => 'getSystem',
            'tags' => 'getTags',
            'description' => 'getDescription',
            'language' => 'getLanguage',
            'repositoryName' => 'getRepositoryName',
            'briefIntroduction' => 'getBriefIntroduction',
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
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['system'] = isset($data['system']) ? $data['system'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['repositoryName'] = isset($data['repositoryName']) ? $data['repositoryName'] : null;
        $this->container['briefIntroduction'] = isset($data['briefIntroduction']) ? $data['briefIntroduction'] : null;
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
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) > 32)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) < 0)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['repositoryName']) && (mb_strlen($this->container['repositoryName']) > 255)) {
                $invalidProperties[] = "invalid value for 'repositoryName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['repositoryName']) && (mb_strlen($this->container['repositoryName']) < 0)) {
                $invalidProperties[] = "invalid value for 'repositoryName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['briefIntroduction']) && (mb_strlen($this->container['briefIntroduction']) > 2000)) {
                $invalidProperties[] = "invalid value for 'briefIntroduction', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['briefIntroduction']) && (mb_strlen($this->container['briefIntroduction']) < 0)) {
                $invalidProperties[] = "invalid value for 'briefIntroduction', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['usedTimes']) && ($this->container['usedTimes'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'usedTimes', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['usedTimes']) && ($this->container['usedTimes'] < 0)) {
                $invalidProperties[] = "invalid value for 'usedTimes', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['likedTimes']) && ($this->container['likedTimes'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'likedTimes', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['likedTimes']) && ($this->container['likedTimes'] < 0)) {
                $invalidProperties[] = "invalid value for 'likedTimes', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 128)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 0)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['httpsUrl']) && (mb_strlen($this->container['httpsUrl']) > 512)) {
                $invalidProperties[] = "invalid value for 'httpsUrl', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['httpsUrl']) && (mb_strlen($this->container['httpsUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'httpsUrl', the character length must be bigger than or equal to 0.";
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
    * Gets repositoryId
    *  **参数解释：** 仓库Id。
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
    * @param int|null $repositoryId **参数解释：** 仓库Id。
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 模板仓标题。 **取值范围：** 字符串长度1-50。
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
    * @param string|null $name **参数解释：** 模板仓标题。 **取值范围：** 字符串长度1-50。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets system
    *  **参数解释：** 是否是系统模版。 **取值范围：** - true，系统模版。 - false，个人模版。
    *
    * @return bool|null
    */
    public function getSystem()
    {
        return $this->container['system'];
    }

    /**
    * Sets system
    *
    * @param bool|null $system **参数解释：** 是否是系统模版。 **取值范围：** - true，系统模版。 - false，个人模版。
    *
    * @return $this
    */
    public function setSystem($system)
    {
        $this->container['system'] = $system;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释：** 标签列表。 **取值范围：** 不涉及。
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
    * @param string[]|null $tags **参数解释：** 标签列表。 **取值范围：** 不涉及。
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
    *  **参数解释：** 仓库描述信息。 **取值范围：** 字符串长度0-2000。
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
    * @param string|null $description **参数解释：** 仓库描述信息。 **取值范围：** 字符串长度0-2000。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets language
    *  **参数解释：** 编程语言。 **取值范围：** 字符串长度0-32。
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
    * @param string|null $language **参数解释：** 编程语言。 **取值范围：** 字符串长度0-32。
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets repositoryName
    *  **参数解释：** 模板仓的仓库名称。 **取值范围：** 字符串长度0-255。
    *
    * @return string|null
    */
    public function getRepositoryName()
    {
        return $this->container['repositoryName'];
    }

    /**
    * Sets repositoryName
    *
    * @param string|null $repositoryName **参数解释：** 模板仓的仓库名称。 **取值范围：** 字符串长度0-255。
    *
    * @return $this
    */
    public function setRepositoryName($repositoryName)
    {
        $this->container['repositoryName'] = $repositoryName;
        return $this;
    }

    /**
    * Gets briefIntroduction
    *  **参数解释：** 模板仓的简介。 **取值范围：** 字符串长度0-32。
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
    * @param string|null $briefIntroduction **参数解释：** 模板仓的简介。 **取值范围：** 字符串长度0-32。
    *
    * @return $this
    */
    public function setBriefIntroduction($briefIntroduction)
    {
        $this->container['briefIntroduction'] = $briefIntroduction;
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
    * Gets usedTimes
    *  **参数解释：** 模板仓被使用的次数。
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
    * @param int|null $usedTimes **参数解释：** 模板仓被使用的次数。
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
    *  **参数解释：** 模板仓被点赞的次数。
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
    * @param int|null $likedTimes **参数解释：** 模板仓被点赞的次数。
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
    *  **参数解释：** 作者。 **取值范围：** 字符串长度0-128。
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
    * @param string|null $creatorName **参数解释：** 作者。 **取值范围：** 字符串长度0-128。
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
    *  **参数解释：** 代码仓https协议的git地址。 **取值范围：** 字符串最大长度512。
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
    * @param string|null $httpsUrl **参数解释：** 代码仓https协议的git地址。 **取值范围：** 字符串最大长度512。
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

