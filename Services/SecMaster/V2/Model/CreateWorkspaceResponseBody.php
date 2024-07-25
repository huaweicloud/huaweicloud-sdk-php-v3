<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateWorkspaceResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateWorkspaceResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  工作空间id
    * createTime  创建时间
    * updateTime  更新时间
    * name  工作空间名称
    * description  工作空间描述
    * creatorId  创建人id
    * creatorName  创建人名称
    * modifierId  修改人id
    * modifierName  修改人名称
    * projectId  所属项目id
    * projectName  所属项目名称
    * domainId  所属租户id
    * domainName  所属租户名称
    * enterpriseProjectId  企业项目id
    * enterpriseProjectName  企业项目名称
    * isView  是否是视图
    * regionId  区域id
    * viewBindId  视图绑定的空间id
    * viewBindName  视图绑定的空间名称
    * workspaceAgencyList  仅用于视图场景，列出了该视图纳管的空间列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'name' => 'string',
            'description' => 'string',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'modifierId' => 'string',
            'modifierName' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'domainId' => 'string',
            'domainName' => 'string',
            'enterpriseProjectId' => 'string',
            'enterpriseProjectName' => 'string',
            'isView' => 'bool',
            'regionId' => 'string',
            'viewBindId' => 'string',
            'viewBindName' => 'string',
            'workspaceAgencyList' => '\HuaweiCloud\SDK\SecMaster\V2\Model\CreateWorkspaceResponseBodyWorkspaceAgencyList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  工作空间id
    * createTime  创建时间
    * updateTime  更新时间
    * name  工作空间名称
    * description  工作空间描述
    * creatorId  创建人id
    * creatorName  创建人名称
    * modifierId  修改人id
    * modifierName  修改人名称
    * projectId  所属项目id
    * projectName  所属项目名称
    * domainId  所属租户id
    * domainName  所属租户名称
    * enterpriseProjectId  企业项目id
    * enterpriseProjectName  企业项目名称
    * isView  是否是视图
    * regionId  区域id
    * viewBindId  视图绑定的空间id
    * viewBindName  视图绑定的空间名称
    * workspaceAgencyList  仅用于视图场景，列出了该视图纳管的空间列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'createTime' => null,
        'updateTime' => null,
        'name' => null,
        'description' => null,
        'creatorId' => null,
        'creatorName' => null,
        'modifierId' => null,
        'modifierName' => null,
        'projectId' => null,
        'projectName' => null,
        'domainId' => null,
        'domainName' => null,
        'enterpriseProjectId' => null,
        'enterpriseProjectName' => null,
        'isView' => null,
        'regionId' => null,
        'viewBindId' => null,
        'viewBindName' => null,
        'workspaceAgencyList' => null
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
    * id  工作空间id
    * createTime  创建时间
    * updateTime  更新时间
    * name  工作空间名称
    * description  工作空间描述
    * creatorId  创建人id
    * creatorName  创建人名称
    * modifierId  修改人id
    * modifierName  修改人名称
    * projectId  所属项目id
    * projectName  所属项目名称
    * domainId  所属租户id
    * domainName  所属租户名称
    * enterpriseProjectId  企业项目id
    * enterpriseProjectName  企业项目名称
    * isView  是否是视图
    * regionId  区域id
    * viewBindId  视图绑定的空间id
    * viewBindName  视图绑定的空间名称
    * workspaceAgencyList  仅用于视图场景，列出了该视图纳管的空间列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'name' => 'name',
            'description' => 'description',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'modifierId' => 'modifier_id',
            'modifierName' => 'modifier_name',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enterpriseProjectName' => 'enterprise_project_name',
            'isView' => 'is_view',
            'regionId' => 'region_id',
            'viewBindId' => 'view_bind_id',
            'viewBindName' => 'view_bind_name',
            'workspaceAgencyList' => 'workspace_agency_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  工作空间id
    * createTime  创建时间
    * updateTime  更新时间
    * name  工作空间名称
    * description  工作空间描述
    * creatorId  创建人id
    * creatorName  创建人名称
    * modifierId  修改人id
    * modifierName  修改人名称
    * projectId  所属项目id
    * projectName  所属项目名称
    * domainId  所属租户id
    * domainName  所属租户名称
    * enterpriseProjectId  企业项目id
    * enterpriseProjectName  企业项目名称
    * isView  是否是视图
    * regionId  区域id
    * viewBindId  视图绑定的空间id
    * viewBindName  视图绑定的空间名称
    * workspaceAgencyList  仅用于视图场景，列出了该视图纳管的空间列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'name' => 'setName',
            'description' => 'setDescription',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'modifierId' => 'setModifierId',
            'modifierName' => 'setModifierName',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'isView' => 'setIsView',
            'regionId' => 'setRegionId',
            'viewBindId' => 'setViewBindId',
            'viewBindName' => 'setViewBindName',
            'workspaceAgencyList' => 'setWorkspaceAgencyList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  工作空间id
    * createTime  创建时间
    * updateTime  更新时间
    * name  工作空间名称
    * description  工作空间描述
    * creatorId  创建人id
    * creatorName  创建人名称
    * modifierId  修改人id
    * modifierName  修改人名称
    * projectId  所属项目id
    * projectName  所属项目名称
    * domainId  所属租户id
    * domainName  所属租户名称
    * enterpriseProjectId  企业项目id
    * enterpriseProjectName  企业项目名称
    * isView  是否是视图
    * regionId  区域id
    * viewBindId  视图绑定的空间id
    * viewBindName  视图绑定的空间名称
    * workspaceAgencyList  仅用于视图场景，列出了该视图纳管的空间列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'name' => 'getName',
            'description' => 'getDescription',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'modifierId' => 'getModifierId',
            'modifierName' => 'getModifierName',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'isView' => 'getIsView',
            'regionId' => 'getRegionId',
            'viewBindId' => 'getViewBindId',
            'viewBindName' => 'getViewBindName',
            'workspaceAgencyList' => 'getWorkspaceAgencyList'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['modifierId'] = isset($data['modifierId']) ? $data['modifierId'] : null;
        $this->container['modifierName'] = isset($data['modifierName']) ? $data['modifierName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['isView'] = isset($data['isView']) ? $data['isView'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['viewBindId'] = isset($data['viewBindId']) ? $data['viewBindId'] : null;
        $this->container['viewBindName'] = isset($data['viewBindName']) ? $data['viewBindName'] : null;
        $this->container['workspaceAgencyList'] = isset($data['workspaceAgencyList']) ? $data['workspaceAgencyList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) > 36)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) < 0)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 0)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modifierId']) && (mb_strlen($this->container['modifierId']) > 36)) {
                $invalidProperties[] = "invalid value for 'modifierId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['modifierId']) && (mb_strlen($this->container['modifierId']) < 0)) {
                $invalidProperties[] = "invalid value for 'modifierId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modifierName']) && (mb_strlen($this->container['modifierName']) > 64)) {
                $invalidProperties[] = "invalid value for 'modifierName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modifierName']) && (mb_strlen($this->container['modifierName']) < 0)) {
                $invalidProperties[] = "invalid value for 'modifierName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 36)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) > 64)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectName']) && (mb_strlen($this->container['enterpriseProjectName']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectName']) && (mb_strlen($this->container['enterpriseProjectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['viewBindId']) && (mb_strlen($this->container['viewBindId']) > 36)) {
                $invalidProperties[] = "invalid value for 'viewBindId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['viewBindId']) && (mb_strlen($this->container['viewBindId']) < 0)) {
                $invalidProperties[] = "invalid value for 'viewBindId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['viewBindName']) && (mb_strlen($this->container['viewBindName']) > 64)) {
                $invalidProperties[] = "invalid value for 'viewBindName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['viewBindName']) && (mb_strlen($this->container['viewBindName']) < 0)) {
                $invalidProperties[] = "invalid value for 'viewBindName', the character length must be bigger than or equal to 0.";
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
    *  工作空间id
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
    * @param string|null $id 工作空间id
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
    * Gets name
    *  工作空间名称
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
    * @param string|null $name 工作空间名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  工作空间描述
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
    * @param string|null $description 工作空间描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets creatorId
    *  创建人id
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
    * @param string|null $creatorId 创建人id
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
    *  创建人名称
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
    * @param string|null $creatorName 创建人名称
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
    *  修改人id
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
    * @param string|null $modifierId 修改人id
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
    *  修改人名称
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
    * @param string|null $modifierName 修改人名称
    *
    * @return $this
    */
    public function setModifierName($modifierName)
    {
        $this->container['modifierName'] = $modifierName;
        return $this;
    }

    /**
    * Gets projectId
    *  所属项目id
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
    * @param string|null $projectId 所属项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  所属项目名称
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName 所属项目名称
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets domainId
    *  所属租户id
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
    * @param string|null $domainId 所属租户id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets domainName
    *  所属租户名称
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 所属租户名称
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectName
    *  企业项目名称
    *
    * @return string|null
    */
    public function getEnterpriseProjectName()
    {
        return $this->container['enterpriseProjectName'];
    }

    /**
    * Sets enterpriseProjectName
    *
    * @param string|null $enterpriseProjectName 企业项目名称
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
        return $this;
    }

    /**
    * Gets isView
    *  是否是视图
    *
    * @return bool|null
    */
    public function getIsView()
    {
        return $this->container['isView'];
    }

    /**
    * Sets isView
    *
    * @param bool|null $isView 是否是视图
    *
    * @return $this
    */
    public function setIsView($isView)
    {
        $this->container['isView'] = $isView;
        return $this;
    }

    /**
    * Gets regionId
    *  区域id
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
    * @param string|null $regionId 区域id
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets viewBindId
    *  视图绑定的空间id
    *
    * @return string|null
    */
    public function getViewBindId()
    {
        return $this->container['viewBindId'];
    }

    /**
    * Sets viewBindId
    *
    * @param string|null $viewBindId 视图绑定的空间id
    *
    * @return $this
    */
    public function setViewBindId($viewBindId)
    {
        $this->container['viewBindId'] = $viewBindId;
        return $this;
    }

    /**
    * Gets viewBindName
    *  视图绑定的空间名称
    *
    * @return string|null
    */
    public function getViewBindName()
    {
        return $this->container['viewBindName'];
    }

    /**
    * Sets viewBindName
    *
    * @param string|null $viewBindName 视图绑定的空间名称
    *
    * @return $this
    */
    public function setViewBindName($viewBindName)
    {
        $this->container['viewBindName'] = $viewBindName;
        return $this;
    }

    /**
    * Gets workspaceAgencyList
    *  仅用于视图场景，列出了该视图纳管的空间列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\CreateWorkspaceResponseBodyWorkspaceAgencyList[]|null
    */
    public function getWorkspaceAgencyList()
    {
        return $this->container['workspaceAgencyList'];
    }

    /**
    * Sets workspaceAgencyList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\CreateWorkspaceResponseBodyWorkspaceAgencyList[]|null $workspaceAgencyList 仅用于视图场景，列出了该视图纳管的空间列表
    *
    * @return $this
    */
    public function setWorkspaceAgencyList($workspaceAgencyList)
    {
        $this->container['workspaceAgencyList'] = $workspaceAgencyList;
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

