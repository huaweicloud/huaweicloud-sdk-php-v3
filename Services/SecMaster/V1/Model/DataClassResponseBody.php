<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataClassResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataClassResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  数据类ID
    * createTime  创建时间
    * updateTime  更新时间
    * creatorId  创建者ID
    * creatorName  创建者名称
    * modifierId  修改者ID
    * modifierName  修改者名称
    * cloudPackVersion  订阅包版本
    * regionId  区域ID
    * projectId  租户ID
    * workspaceId  工作空间ID
    * domainId  账号id
    * name  数据类名称
    * businessCode  数据类业务编码
    * description  数据类描述
    * isBuiltIn  是否内置，true内置，false非内置
    * parentId  父级id
    * typeNum  子类型数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'modifierId' => 'string',
            'modifierName' => 'string',
            'cloudPackVersion' => 'string',
            'regionId' => 'string',
            'projectId' => 'string',
            'workspaceId' => 'string',
            'domainId' => 'string',
            'name' => 'string',
            'businessCode' => 'string',
            'description' => 'string',
            'isBuiltIn' => 'bool',
            'parentId' => 'string',
            'typeNum' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  数据类ID
    * createTime  创建时间
    * updateTime  更新时间
    * creatorId  创建者ID
    * creatorName  创建者名称
    * modifierId  修改者ID
    * modifierName  修改者名称
    * cloudPackVersion  订阅包版本
    * regionId  区域ID
    * projectId  租户ID
    * workspaceId  工作空间ID
    * domainId  账号id
    * name  数据类名称
    * businessCode  数据类业务编码
    * description  数据类描述
    * isBuiltIn  是否内置，true内置，false非内置
    * parentId  父级id
    * typeNum  子类型数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'createTime' => null,
        'updateTime' => null,
        'creatorId' => null,
        'creatorName' => null,
        'modifierId' => null,
        'modifierName' => null,
        'cloudPackVersion' => null,
        'regionId' => null,
        'projectId' => null,
        'workspaceId' => null,
        'domainId' => null,
        'name' => null,
        'businessCode' => null,
        'description' => null,
        'isBuiltIn' => null,
        'parentId' => null,
        'typeNum' => null
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
    * id  数据类ID
    * createTime  创建时间
    * updateTime  更新时间
    * creatorId  创建者ID
    * creatorName  创建者名称
    * modifierId  修改者ID
    * modifierName  修改者名称
    * cloudPackVersion  订阅包版本
    * regionId  区域ID
    * projectId  租户ID
    * workspaceId  工作空间ID
    * domainId  账号id
    * name  数据类名称
    * businessCode  数据类业务编码
    * description  数据类描述
    * isBuiltIn  是否内置，true内置，false非内置
    * parentId  父级id
    * typeNum  子类型数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'modifierId' => 'modifier_id',
            'modifierName' => 'modifier_name',
            'cloudPackVersion' => 'cloud_pack_version',
            'regionId' => 'region_id',
            'projectId' => 'project_id',
            'workspaceId' => 'workspace_id',
            'domainId' => 'domain_id',
            'name' => 'name',
            'businessCode' => 'business_code',
            'description' => 'description',
            'isBuiltIn' => 'is_built_in',
            'parentId' => 'parent_id',
            'typeNum' => 'type_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  数据类ID
    * createTime  创建时间
    * updateTime  更新时间
    * creatorId  创建者ID
    * creatorName  创建者名称
    * modifierId  修改者ID
    * modifierName  修改者名称
    * cloudPackVersion  订阅包版本
    * regionId  区域ID
    * projectId  租户ID
    * workspaceId  工作空间ID
    * domainId  账号id
    * name  数据类名称
    * businessCode  数据类业务编码
    * description  数据类描述
    * isBuiltIn  是否内置，true内置，false非内置
    * parentId  父级id
    * typeNum  子类型数量
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'modifierId' => 'setModifierId',
            'modifierName' => 'setModifierName',
            'cloudPackVersion' => 'setCloudPackVersion',
            'regionId' => 'setRegionId',
            'projectId' => 'setProjectId',
            'workspaceId' => 'setWorkspaceId',
            'domainId' => 'setDomainId',
            'name' => 'setName',
            'businessCode' => 'setBusinessCode',
            'description' => 'setDescription',
            'isBuiltIn' => 'setIsBuiltIn',
            'parentId' => 'setParentId',
            'typeNum' => 'setTypeNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  数据类ID
    * createTime  创建时间
    * updateTime  更新时间
    * creatorId  创建者ID
    * creatorName  创建者名称
    * modifierId  修改者ID
    * modifierName  修改者名称
    * cloudPackVersion  订阅包版本
    * regionId  区域ID
    * projectId  租户ID
    * workspaceId  工作空间ID
    * domainId  账号id
    * name  数据类名称
    * businessCode  数据类业务编码
    * description  数据类描述
    * isBuiltIn  是否内置，true内置，false非内置
    * parentId  父级id
    * typeNum  子类型数量
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'modifierId' => 'getModifierId',
            'modifierName' => 'getModifierName',
            'cloudPackVersion' => 'getCloudPackVersion',
            'regionId' => 'getRegionId',
            'projectId' => 'getProjectId',
            'workspaceId' => 'getWorkspaceId',
            'domainId' => 'getDomainId',
            'name' => 'getName',
            'businessCode' => 'getBusinessCode',
            'description' => 'getDescription',
            'isBuiltIn' => 'getIsBuiltIn',
            'parentId' => 'getParentId',
            'typeNum' => 'getTypeNum'
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['modifierId'] = isset($data['modifierId']) ? $data['modifierId'] : null;
        $this->container['modifierName'] = isset($data['modifierName']) ? $data['modifierName'] : null;
        $this->container['cloudPackVersion'] = isset($data['cloudPackVersion']) ? $data['cloudPackVersion'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['businessCode'] = isset($data['businessCode']) ? $data['businessCode'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isBuiltIn'] = isset($data['isBuiltIn']) ? $data['isBuiltIn'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['typeNum'] = isset($data['typeNum']) ? $data['typeNum'] : null;
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
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) < 32)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 32)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['modifierId']) && (mb_strlen($this->container['modifierId']) > 64)) {
                $invalidProperties[] = "invalid value for 'modifierId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modifierId']) && (mb_strlen($this->container['modifierId']) < 32)) {
                $invalidProperties[] = "invalid value for 'modifierId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['modifierName']) && (mb_strlen($this->container['modifierName']) > 64)) {
                $invalidProperties[] = "invalid value for 'modifierName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modifierName']) && (mb_strlen($this->container['modifierName']) < 32)) {
                $invalidProperties[] = "invalid value for 'modifierName', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['cloudPackVersion']) && (mb_strlen($this->container['cloudPackVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudPackVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudPackVersion']) && (mb_strlen($this->container['cloudPackVersion']) < 2)) {
                $invalidProperties[] = "invalid value for 'cloudPackVersion', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 64)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 2)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['businessCode']) && (mb_strlen($this->container['businessCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'businessCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['businessCode']) && (mb_strlen($this->container['businessCode']) < 2)) {
                $invalidProperties[] = "invalid value for 'businessCode', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 2)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) < 32)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['typeNum']) && ($this->container['typeNum'] > 99999)) {
                $invalidProperties[] = "invalid value for 'typeNum', must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['typeNum']) && ($this->container['typeNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'typeNum', must be bigger than or equal to 0.";
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
    *  数据类ID
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
    * @param string|null $id 数据类ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets creatorName
    *  创建者名称
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
    * @param string|null $creatorName 创建者名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets modifierId
    *  修改者ID
    *
    * @return string|null
    */
    public function getModifierId()
    {
        return $this->container['modifierId'];
    }

    /**
    * Sets modifierId
    *
    * @param string|null $modifierId 修改者ID
    *
    * @return $this
    */
    public function setModifierId($modifierId)
    {
        $this->container['modifierId'] = $modifierId;
        return $this;
    }

    /**
    * Gets modifierName
    *  修改者名称
    *
    * @return string|null
    */
    public function getModifierName()
    {
        return $this->container['modifierName'];
    }

    /**
    * Sets modifierName
    *
    * @param string|null $modifierName 修改者名称
    *
    * @return $this
    */
    public function setModifierName($modifierName)
    {
        $this->container['modifierName'] = $modifierName;
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
    * Gets regionId
    *  区域ID
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 区域ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
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
    * Gets domainId
    *  账号id
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 账号id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets name
    *  数据类名称
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
    * @param string|null $name 数据类名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets businessCode
    *  数据类业务编码
    *
    * @return string|null
    */
    public function getBusinessCode()
    {
        return $this->container['businessCode'];
    }

    /**
    * Sets businessCode
    *
    * @param string|null $businessCode 数据类业务编码
    *
    * @return $this
    */
    public function setBusinessCode($businessCode)
    {
        $this->container['businessCode'] = $businessCode;
        return $this;
    }

    /**
    * Gets description
    *  数据类描述
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
    * @param string|null $description 数据类描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets isBuiltIn
    *  是否内置，true内置，false非内置
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
    * @param bool|null $isBuiltIn 是否内置，true内置，false非内置
    *
    * @return $this
    */
    public function setIsBuiltIn($isBuiltIn)
    {
        $this->container['isBuiltIn'] = $isBuiltIn;
        return $this;
    }

    /**
    * Gets parentId
    *  父级id
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父级id
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets typeNum
    *  子类型数量
    *
    * @return float|null
    */
    public function getTypeNum()
    {
        return $this->container['typeNum'];
    }

    /**
    * Sets typeNum
    *
    * @param float|null $typeNum 子类型数量
    *
    * @return $this
    */
    public function setTypeNum($typeNum)
    {
        $this->container['typeNum'] = $typeNum;
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

