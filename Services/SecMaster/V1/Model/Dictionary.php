<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Dictionary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Dictionary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  uuid
    * version  版本号
    * dictId  字典id
    * dictKey  字典key
    * dictCode  字典code
    * dictVal  字典值
    * dictPkey  字典关联的父key
    * dictPcode  字典关联的父code
    * createTime  创建时间
    * updateTime  更新时间
    * publishTime  发布时间
    * scope  字典所属领域
    * description  字典描述信息
    * extensionField  额外字段
    * projectId  **参数解释：** 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以通过调用API获取，也可以从控制台获取。[获取项目ID](secmaster_03_0014.xml) **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * language  用户当前语言环境
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'version' => 'string',
            'dictId' => 'string',
            'dictKey' => 'string',
            'dictCode' => 'string',
            'dictVal' => 'string',
            'dictPkey' => 'string',
            'dictPcode' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'publishTime' => 'string',
            'scope' => 'string',
            'description' => 'string',
            'extensionField' => 'object',
            'projectId' => 'string',
            'language' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  uuid
    * version  版本号
    * dictId  字典id
    * dictKey  字典key
    * dictCode  字典code
    * dictVal  字典值
    * dictPkey  字典关联的父key
    * dictPcode  字典关联的父code
    * createTime  创建时间
    * updateTime  更新时间
    * publishTime  发布时间
    * scope  字典所属领域
    * description  字典描述信息
    * extensionField  额外字段
    * projectId  **参数解释：** 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以通过调用API获取，也可以从控制台获取。[获取项目ID](secmaster_03_0014.xml) **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * language  用户当前语言环境
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'version' => null,
        'dictId' => null,
        'dictKey' => null,
        'dictCode' => null,
        'dictVal' => null,
        'dictPkey' => null,
        'dictPcode' => null,
        'createTime' => null,
        'updateTime' => null,
        'publishTime' => null,
        'scope' => null,
        'description' => null,
        'extensionField' => null,
        'projectId' => null,
        'language' => null
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
    * id  uuid
    * version  版本号
    * dictId  字典id
    * dictKey  字典key
    * dictCode  字典code
    * dictVal  字典值
    * dictPkey  字典关联的父key
    * dictPcode  字典关联的父code
    * createTime  创建时间
    * updateTime  更新时间
    * publishTime  发布时间
    * scope  字典所属领域
    * description  字典描述信息
    * extensionField  额外字段
    * projectId  **参数解释：** 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以通过调用API获取，也可以从控制台获取。[获取项目ID](secmaster_03_0014.xml) **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * language  用户当前语言环境
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'version' => 'version',
            'dictId' => 'dict_id',
            'dictKey' => 'dict_key',
            'dictCode' => 'dict_code',
            'dictVal' => 'dict_val',
            'dictPkey' => 'dict_pkey',
            'dictPcode' => 'dict_pcode',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'publishTime' => 'publish_time',
            'scope' => 'scope',
            'description' => 'description',
            'extensionField' => 'extension_field',
            'projectId' => 'project_id',
            'language' => 'language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  uuid
    * version  版本号
    * dictId  字典id
    * dictKey  字典key
    * dictCode  字典code
    * dictVal  字典值
    * dictPkey  字典关联的父key
    * dictPcode  字典关联的父code
    * createTime  创建时间
    * updateTime  更新时间
    * publishTime  发布时间
    * scope  字典所属领域
    * description  字典描述信息
    * extensionField  额外字段
    * projectId  **参数解释：** 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以通过调用API获取，也可以从控制台获取。[获取项目ID](secmaster_03_0014.xml) **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * language  用户当前语言环境
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'version' => 'setVersion',
            'dictId' => 'setDictId',
            'dictKey' => 'setDictKey',
            'dictCode' => 'setDictCode',
            'dictVal' => 'setDictVal',
            'dictPkey' => 'setDictPkey',
            'dictPcode' => 'setDictPcode',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'publishTime' => 'setPublishTime',
            'scope' => 'setScope',
            'description' => 'setDescription',
            'extensionField' => 'setExtensionField',
            'projectId' => 'setProjectId',
            'language' => 'setLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  uuid
    * version  版本号
    * dictId  字典id
    * dictKey  字典key
    * dictCode  字典code
    * dictVal  字典值
    * dictPkey  字典关联的父key
    * dictPcode  字典关联的父code
    * createTime  创建时间
    * updateTime  更新时间
    * publishTime  发布时间
    * scope  字典所属领域
    * description  字典描述信息
    * extensionField  额外字段
    * projectId  **参数解释：** 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以通过调用API获取，也可以从控制台获取。[获取项目ID](secmaster_03_0014.xml) **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * language  用户当前语言环境
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'version' => 'getVersion',
            'dictId' => 'getDictId',
            'dictKey' => 'getDictKey',
            'dictCode' => 'getDictCode',
            'dictVal' => 'getDictVal',
            'dictPkey' => 'getDictPkey',
            'dictPcode' => 'getDictPcode',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'publishTime' => 'getPublishTime',
            'scope' => 'getScope',
            'description' => 'getDescription',
            'extensionField' => 'getExtensionField',
            'projectId' => 'getProjectId',
            'language' => 'getLanguage'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['dictId'] = isset($data['dictId']) ? $data['dictId'] : null;
        $this->container['dictKey'] = isset($data['dictKey']) ? $data['dictKey'] : null;
        $this->container['dictCode'] = isset($data['dictCode']) ? $data['dictCode'] : null;
        $this->container['dictVal'] = isset($data['dictVal']) ? $data['dictVal'] : null;
        $this->container['dictPkey'] = isset($data['dictPkey']) ? $data['dictPkey'] : null;
        $this->container['dictPcode'] = isset($data['dictPcode']) ? $data['dictPcode'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['publishTime'] = isset($data['publishTime']) ? $data['publishTime'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['extensionField'] = isset($data['extensionField']) ? $data['extensionField'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dictId']) && (mb_strlen($this->container['dictId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dictId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dictId']) && (mb_strlen($this->container['dictId']) < 0)) {
                $invalidProperties[] = "invalid value for 'dictId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dictKey']) && (mb_strlen($this->container['dictKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'dictKey', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dictKey']) && (mb_strlen($this->container['dictKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'dictKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dictCode']) && (mb_strlen($this->container['dictCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'dictCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dictCode']) && (mb_strlen($this->container['dictCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'dictCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dictVal']) && (mb_strlen($this->container['dictVal']) > 64)) {
                $invalidProperties[] = "invalid value for 'dictVal', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dictVal']) && (mb_strlen($this->container['dictVal']) < 0)) {
                $invalidProperties[] = "invalid value for 'dictVal', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dictPkey']) && (mb_strlen($this->container['dictPkey']) > 64)) {
                $invalidProperties[] = "invalid value for 'dictPkey', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dictPkey']) && (mb_strlen($this->container['dictPkey']) < 0)) {
                $invalidProperties[] = "invalid value for 'dictPkey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dictPcode']) && (mb_strlen($this->container['dictPcode']) > 64)) {
                $invalidProperties[] = "invalid value for 'dictPcode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dictPcode']) && (mb_strlen($this->container['dictPcode']) < 0)) {
                $invalidProperties[] = "invalid value for 'dictPcode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 64.";
            }
            if (!is_null($this->container['publishTime']) && (mb_strlen($this->container['publishTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'publishTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['publishTime']) && (mb_strlen($this->container['publishTime']) < 64)) {
                $invalidProperties[] = "invalid value for 'publishTime', the character length must be bigger than or equal to 64.";
            }
            if (!is_null($this->container['scope']) && (mb_strlen($this->container['scope']) > 64)) {
                $invalidProperties[] = "invalid value for 'scope', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scope']) && (mb_strlen($this->container['scope']) < 0)) {
                $invalidProperties[] = "invalid value for 'scope', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 64.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) > 6)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 6.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) < 2)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 2.";
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
    *  uuid
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id uuid
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets version
    *  版本号
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 版本号
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets dictId
    *  字典id
    *
    * @return string|null
    */
    public function getDictId()
    {
        return $this->container['dictId'];
    }

    /**
    * Sets dictId
    *
    * @param string|null $dictId 字典id
    *
    * @return $this
    */
    public function setDictId($dictId)
    {
        $this->container['dictId'] = $dictId;
        return $this;
    }

    /**
    * Gets dictKey
    *  字典key
    *
    * @return string|null
    */
    public function getDictKey()
    {
        return $this->container['dictKey'];
    }

    /**
    * Sets dictKey
    *
    * @param string|null $dictKey 字典key
    *
    * @return $this
    */
    public function setDictKey($dictKey)
    {
        $this->container['dictKey'] = $dictKey;
        return $this;
    }

    /**
    * Gets dictCode
    *  字典code
    *
    * @return string|null
    */
    public function getDictCode()
    {
        return $this->container['dictCode'];
    }

    /**
    * Sets dictCode
    *
    * @param string|null $dictCode 字典code
    *
    * @return $this
    */
    public function setDictCode($dictCode)
    {
        $this->container['dictCode'] = $dictCode;
        return $this;
    }

    /**
    * Gets dictVal
    *  字典值
    *
    * @return string|null
    */
    public function getDictVal()
    {
        return $this->container['dictVal'];
    }

    /**
    * Sets dictVal
    *
    * @param string|null $dictVal 字典值
    *
    * @return $this
    */
    public function setDictVal($dictVal)
    {
        $this->container['dictVal'] = $dictVal;
        return $this;
    }

    /**
    * Gets dictPkey
    *  字典关联的父key
    *
    * @return string|null
    */
    public function getDictPkey()
    {
        return $this->container['dictPkey'];
    }

    /**
    * Sets dictPkey
    *
    * @param string|null $dictPkey 字典关联的父key
    *
    * @return $this
    */
    public function setDictPkey($dictPkey)
    {
        $this->container['dictPkey'] = $dictPkey;
        return $this;
    }

    /**
    * Gets dictPcode
    *  字典关联的父code
    *
    * @return string|null
    */
    public function getDictPcode()
    {
        return $this->container['dictPcode'];
    }

    /**
    * Sets dictPcode
    *
    * @param string|null $dictPcode 字典关联的父code
    *
    * @return $this
    */
    public function setDictPcode($dictPcode)
    {
        $this->container['dictPcode'] = $dictPcode;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
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
    * @param string|null $createTime 创建时间
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
    *  更新时间
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
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets publishTime
    *  发布时间
    *
    * @return string|null
    */
    public function getPublishTime()
    {
        return $this->container['publishTime'];
    }

    /**
    * Sets publishTime
    *
    * @param string|null $publishTime 发布时间
    *
    * @return $this
    */
    public function setPublishTime($publishTime)
    {
        $this->container['publishTime'] = $publishTime;
        return $this;
    }

    /**
    * Gets scope
    *  字典所属领域
    *
    * @return string|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string|null $scope 字典所属领域
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets description
    *  字典描述信息
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
    * @param string|null $description 字典描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets extensionField
    *  额外字段
    *
    * @return object|null
    */
    public function getExtensionField()
    {
        return $this->container['extensionField'];
    }

    /**
    * Sets extensionField
    *
    * @param object|null $extensionField 额外字段
    *
    * @return $this
    */
    public function setExtensionField($extensionField)
    {
        $this->container['extensionField'] = $extensionField;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以通过调用API获取，也可以从控制台获取。[获取项目ID](secmaster_03_0014.xml) **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释：** 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以通过调用API获取，也可以从控制台获取。[获取项目ID](secmaster_03_0014.xml) **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets language
    *  用户当前语言环境
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
    * @param string|null $language 用户当前语言环境
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
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

