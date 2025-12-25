<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModuleDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModuleDetailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * createTime  创建时间
    * creatorId  创建者ID
    * description  描述信息
    * enDescription  英文描述
    * id  模块ID
    * moduleJson  模块相关信息，当module为指标卡片时，items中的字段id也为指标id
    * name  名称
    * enName  英文名称
    * projectId  租户ID
    * workspaceId  工作空间ID
    * updateTime  更新时间
    * thumbnail  模块缩略图
    * moduleType  模块类型,tab/section
    * tag  模块标签
    * isBuiltIn  是否为系统模块
    * dataQuery  数据查询方式
    * boaVersion  BOA底座版本
    * version  安全云脑版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudPackId' => 'string',
            'cloudPackName' => 'string',
            'cloudPackVersion' => 'string',
            'createTime' => 'string',
            'creatorId' => 'string',
            'description' => 'string',
            'enDescription' => 'string',
            'id' => 'string',
            'moduleJson' => 'string',
            'name' => 'string',
            'enName' => 'string',
            'projectId' => 'string',
            'workspaceId' => 'string',
            'updateTime' => 'string',
            'thumbnail' => 'string',
            'moduleType' => 'string',
            'tag' => 'string',
            'isBuiltIn' => 'bool',
            'dataQuery' => 'string',
            'boaVersion' => 'string',
            'version' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * createTime  创建时间
    * creatorId  创建者ID
    * description  描述信息
    * enDescription  英文描述
    * id  模块ID
    * moduleJson  模块相关信息，当module为指标卡片时，items中的字段id也为指标id
    * name  名称
    * enName  英文名称
    * projectId  租户ID
    * workspaceId  工作空间ID
    * updateTime  更新时间
    * thumbnail  模块缩略图
    * moduleType  模块类型,tab/section
    * tag  模块标签
    * isBuiltIn  是否为系统模块
    * dataQuery  数据查询方式
    * boaVersion  BOA底座版本
    * version  安全云脑版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudPackId' => null,
        'cloudPackName' => null,
        'cloudPackVersion' => null,
        'createTime' => null,
        'creatorId' => null,
        'description' => null,
        'enDescription' => null,
        'id' => null,
        'moduleJson' => null,
        'name' => null,
        'enName' => null,
        'projectId' => null,
        'workspaceId' => null,
        'updateTime' => null,
        'thumbnail' => null,
        'moduleType' => null,
        'tag' => null,
        'isBuiltIn' => null,
        'dataQuery' => null,
        'boaVersion' => null,
        'version' => null
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
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * createTime  创建时间
    * creatorId  创建者ID
    * description  描述信息
    * enDescription  英文描述
    * id  模块ID
    * moduleJson  模块相关信息，当module为指标卡片时，items中的字段id也为指标id
    * name  名称
    * enName  英文名称
    * projectId  租户ID
    * workspaceId  工作空间ID
    * updateTime  更新时间
    * thumbnail  模块缩略图
    * moduleType  模块类型,tab/section
    * tag  模块标签
    * isBuiltIn  是否为系统模块
    * dataQuery  数据查询方式
    * boaVersion  BOA底座版本
    * version  安全云脑版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudPackId' => 'cloud_pack_id',
            'cloudPackName' => 'cloud_pack_name',
            'cloudPackVersion' => 'cloud_pack_version',
            'createTime' => 'create_time',
            'creatorId' => 'creator_id',
            'description' => 'description',
            'enDescription' => 'en_description',
            'id' => 'id',
            'moduleJson' => 'module_json',
            'name' => 'name',
            'enName' => 'en_name',
            'projectId' => 'project_id',
            'workspaceId' => 'workspace_id',
            'updateTime' => 'update_time',
            'thumbnail' => 'thumbnail',
            'moduleType' => 'module_type',
            'tag' => 'tag',
            'isBuiltIn' => 'is_built_in',
            'dataQuery' => 'data_query',
            'boaVersion' => 'boa_version',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * createTime  创建时间
    * creatorId  创建者ID
    * description  描述信息
    * enDescription  英文描述
    * id  模块ID
    * moduleJson  模块相关信息，当module为指标卡片时，items中的字段id也为指标id
    * name  名称
    * enName  英文名称
    * projectId  租户ID
    * workspaceId  工作空间ID
    * updateTime  更新时间
    * thumbnail  模块缩略图
    * moduleType  模块类型,tab/section
    * tag  模块标签
    * isBuiltIn  是否为系统模块
    * dataQuery  数据查询方式
    * boaVersion  BOA底座版本
    * version  安全云脑版本
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudPackId' => 'setCloudPackId',
            'cloudPackName' => 'setCloudPackName',
            'cloudPackVersion' => 'setCloudPackVersion',
            'createTime' => 'setCreateTime',
            'creatorId' => 'setCreatorId',
            'description' => 'setDescription',
            'enDescription' => 'setEnDescription',
            'id' => 'setId',
            'moduleJson' => 'setModuleJson',
            'name' => 'setName',
            'enName' => 'setEnName',
            'projectId' => 'setProjectId',
            'workspaceId' => 'setWorkspaceId',
            'updateTime' => 'setUpdateTime',
            'thumbnail' => 'setThumbnail',
            'moduleType' => 'setModuleType',
            'tag' => 'setTag',
            'isBuiltIn' => 'setIsBuiltIn',
            'dataQuery' => 'setDataQuery',
            'boaVersion' => 'setBoaVersion',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * createTime  创建时间
    * creatorId  创建者ID
    * description  描述信息
    * enDescription  英文描述
    * id  模块ID
    * moduleJson  模块相关信息，当module为指标卡片时，items中的字段id也为指标id
    * name  名称
    * enName  英文名称
    * projectId  租户ID
    * workspaceId  工作空间ID
    * updateTime  更新时间
    * thumbnail  模块缩略图
    * moduleType  模块类型,tab/section
    * tag  模块标签
    * isBuiltIn  是否为系统模块
    * dataQuery  数据查询方式
    * boaVersion  BOA底座版本
    * version  安全云脑版本
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudPackId' => 'getCloudPackId',
            'cloudPackName' => 'getCloudPackName',
            'cloudPackVersion' => 'getCloudPackVersion',
            'createTime' => 'getCreateTime',
            'creatorId' => 'getCreatorId',
            'description' => 'getDescription',
            'enDescription' => 'getEnDescription',
            'id' => 'getId',
            'moduleJson' => 'getModuleJson',
            'name' => 'getName',
            'enName' => 'getEnName',
            'projectId' => 'getProjectId',
            'workspaceId' => 'getWorkspaceId',
            'updateTime' => 'getUpdateTime',
            'thumbnail' => 'getThumbnail',
            'moduleType' => 'getModuleType',
            'tag' => 'getTag',
            'isBuiltIn' => 'getIsBuiltIn',
            'dataQuery' => 'getDataQuery',
            'boaVersion' => 'getBoaVersion',
            'version' => 'getVersion'
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
        $this->container['cloudPackId'] = isset($data['cloudPackId']) ? $data['cloudPackId'] : null;
        $this->container['cloudPackName'] = isset($data['cloudPackName']) ? $data['cloudPackName'] : null;
        $this->container['cloudPackVersion'] = isset($data['cloudPackVersion']) ? $data['cloudPackVersion'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enDescription'] = isset($data['enDescription']) ? $data['enDescription'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['moduleJson'] = isset($data['moduleJson']) ? $data['moduleJson'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['enName'] = isset($data['enName']) ? $data['enName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['moduleType'] = isset($data['moduleType']) ? $data['moduleType'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['isBuiltIn'] = isset($data['isBuiltIn']) ? $data['isBuiltIn'] : null;
        $this->container['dataQuery'] = isset($data['dataQuery']) ? $data['dataQuery'] : null;
        $this->container['boaVersion'] = isset($data['boaVersion']) ? $data['boaVersion'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cloudPackId']) && (mb_strlen($this->container['cloudPackId']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudPackId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudPackId']) && (mb_strlen($this->container['cloudPackId']) < 32)) {
                $invalidProperties[] = "invalid value for 'cloudPackId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['cloudPackName']) && (mb_strlen($this->container['cloudPackName']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudPackName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudPackName']) && (mb_strlen($this->container['cloudPackName']) < 2)) {
                $invalidProperties[] = "invalid value for 'cloudPackName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['cloudPackVersion']) && (mb_strlen($this->container['cloudPackVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudPackVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudPackVersion']) && (mb_strlen($this->container['cloudPackVersion']) < 2)) {
                $invalidProperties[] = "invalid value for 'cloudPackVersion', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) < 32)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enDescription']) && (mb_strlen($this->container['enDescription']) > 65535)) {
                $invalidProperties[] = "invalid value for 'enDescription', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['enDescription']) && (mb_strlen($this->container['enDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'enDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['moduleJson']) && (mb_strlen($this->container['moduleJson']) > 65525)) {
                $invalidProperties[] = "invalid value for 'moduleJson', the character length must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['moduleJson']) && (mb_strlen($this->container['moduleJson']) < 0)) {
                $invalidProperties[] = "invalid value for 'moduleJson', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1024)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enName']) && (mb_strlen($this->container['enName']) > 64)) {
                $invalidProperties[] = "invalid value for 'enName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enName']) && (mb_strlen($this->container['enName']) < 1)) {
                $invalidProperties[] = "invalid value for 'enName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['thumbnail']) && (mb_strlen($this->container['thumbnail']) > 65525)) {
                $invalidProperties[] = "invalid value for 'thumbnail', the character length must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['thumbnail']) && (mb_strlen($this->container['thumbnail']) < 0)) {
                $invalidProperties[] = "invalid value for 'thumbnail', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['moduleType']) && (mb_strlen($this->container['moduleType']) > 64)) {
                $invalidProperties[] = "invalid value for 'moduleType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['moduleType']) && (mb_strlen($this->container['moduleType']) < 0)) {
                $invalidProperties[] = "invalid value for 'moduleType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) > 64)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) < 0)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataQuery']) && (mb_strlen($this->container['dataQuery']) > 65525)) {
                $invalidProperties[] = "invalid value for 'dataQuery', the character length must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['dataQuery']) && (mb_strlen($this->container['dataQuery']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataQuery', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['boaVersion']) && (mb_strlen($this->container['boaVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'boaVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['boaVersion']) && (mb_strlen($this->container['boaVersion']) < 32)) {
                $invalidProperties[] = "invalid value for 'boaVersion', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 32)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 32.";
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
    * Gets cloudPackId
    *  订阅包id
    *
    * @return string|null
    */
    public function getCloudPackId()
    {
        return $this->container['cloudPackId'];
    }

    /**
    * Sets cloudPackId
    *
    * @param string|null $cloudPackId 订阅包id
    *
    * @return $this
    */
    public function setCloudPackId($cloudPackId)
    {
        $this->container['cloudPackId'] = $cloudPackId;
        return $this;
    }

    /**
    * Gets cloudPackName
    *  订阅包名称
    *
    * @return string|null
    */
    public function getCloudPackName()
    {
        return $this->container['cloudPackName'];
    }

    /**
    * Sets cloudPackName
    *
    * @param string|null $cloudPackName 订阅包名称
    *
    * @return $this
    */
    public function setCloudPackName($cloudPackName)
    {
        $this->container['cloudPackName'] = $cloudPackName;
        return $this;
    }

    /**
    * Gets cloudPackVersion
    *  订阅包版本
    *
    * @return string|null
    */
    public function getCloudPackVersion()
    {
        return $this->container['cloudPackVersion'];
    }

    /**
    * Sets cloudPackVersion
    *
    * @param string|null $cloudPackVersion 订阅包版本
    *
    * @return $this
    */
    public function setCloudPackVersion($cloudPackVersion)
    {
        $this->container['cloudPackVersion'] = $cloudPackVersion;
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
    * Gets creatorId
    *  创建者ID
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId 创建者ID
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
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
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enDescription
    *  英文描述
    *
    * @return string|null
    */
    public function getEnDescription()
    {
        return $this->container['enDescription'];
    }

    /**
    * Sets enDescription
    *
    * @param string|null $enDescription 英文描述
    *
    * @return $this
    */
    public function setEnDescription($enDescription)
    {
        $this->container['enDescription'] = $enDescription;
        return $this;
    }

    /**
    * Gets id
    *  模块ID
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
    * @param string|null $id 模块ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets moduleJson
    *  模块相关信息，当module为指标卡片时，items中的字段id也为指标id
    *
    * @return string|null
    */
    public function getModuleJson()
    {
        return $this->container['moduleJson'];
    }

    /**
    * Sets moduleJson
    *
    * @param string|null $moduleJson 模块相关信息，当module为指标卡片时，items中的字段id也为指标id
    *
    * @return $this
    */
    public function setModuleJson($moduleJson)
    {
        $this->container['moduleJson'] = $moduleJson;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets enName
    *  英文名称
    *
    * @return string|null
    */
    public function getEnName()
    {
        return $this->container['enName'];
    }

    /**
    * Sets enName
    *
    * @param string|null $enName 英文名称
    *
    * @return $this
    */
    public function setEnName($enName)
    {
        $this->container['enName'] = $enName;
        return $this;
    }

    /**
    * Gets projectId
    *  租户ID
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
    * @param string|null $projectId 租户ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID
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
    * @param string|null $workspaceId 工作空间ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
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
    * Gets thumbnail
    *  模块缩略图
    *
    * @return string|null
    */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
    * Sets thumbnail
    *
    * @param string|null $thumbnail 模块缩略图
    *
    * @return $this
    */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;
        return $this;
    }

    /**
    * Gets moduleType
    *  模块类型,tab/section
    *
    * @return string|null
    */
    public function getModuleType()
    {
        return $this->container['moduleType'];
    }

    /**
    * Sets moduleType
    *
    * @param string|null $moduleType 模块类型,tab/section
    *
    * @return $this
    */
    public function setModuleType($moduleType)
    {
        $this->container['moduleType'] = $moduleType;
        return $this;
    }

    /**
    * Gets tag
    *  模块标签
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 模块标签
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets isBuiltIn
    *  是否为系统模块
    *
    * @return bool|null
    */
    public function getIsBuiltIn()
    {
        return $this->container['isBuiltIn'];
    }

    /**
    * Sets isBuiltIn
    *
    * @param bool|null $isBuiltIn 是否为系统模块
    *
    * @return $this
    */
    public function setIsBuiltIn($isBuiltIn)
    {
        $this->container['isBuiltIn'] = $isBuiltIn;
        return $this;
    }

    /**
    * Gets dataQuery
    *  数据查询方式
    *
    * @return string|null
    */
    public function getDataQuery()
    {
        return $this->container['dataQuery'];
    }

    /**
    * Sets dataQuery
    *
    * @param string|null $dataQuery 数据查询方式
    *
    * @return $this
    */
    public function setDataQuery($dataQuery)
    {
        $this->container['dataQuery'] = $dataQuery;
        return $this;
    }

    /**
    * Gets boaVersion
    *  BOA底座版本
    *
    * @return string|null
    */
    public function getBoaVersion()
    {
        return $this->container['boaVersion'];
    }

    /**
    * Sets boaVersion
    *
    * @param string|null $boaVersion BOA底座版本
    *
    * @return $this
    */
    public function setBoaVersion($boaVersion)
    {
        $this->container['boaVersion'] = $boaVersion;
        return $this;
    }

    /**
    * Gets version
    *  安全云脑版本
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
    * @param string|null $version 安全云脑版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

