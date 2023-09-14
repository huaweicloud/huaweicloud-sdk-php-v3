<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateView implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateView';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  模板ID
    * templateName  模板名字
    * templateType  模板类型
    * templateUrl  模板编辑URL
    * userId  用户ID
    * userName  用户名字
    * domainId  租户ID
    * domainName  租户名字
    * isBuildIn  是否内置模板
    * region  系统模板region为Cloud Pipeline。自定义模板region为实际region
    * projectId  项目ID
    * projectName  项目名字
    * createTime  创建时间
    * lastModifyTime  修改时间
    * isWatch  是否关注
    * description  模板描述
    * parameter  模板参数
    * flow  编排flow详情，描述流水线内各阶段任务的串并行关系。map类型数据，key为阶段名字，默认第一阶段initial，最后阶段为final，其余名字以'state_数字'标识。value为该阶段内任务(以'Task_数字'标识)以及后续阶段的标识。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    * states  编排State详情，map类型数据。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    * canUpdate  是否可以修改
    * canDelete  是否可以删除
    * needHub  是否需要代码仓库
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'string',
            'templateName' => 'string',
            'templateType' => 'string',
            'templateUrl' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'domainId' => 'string',
            'domainName' => 'string',
            'isBuildIn' => 'bool',
            'region' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'createTime' => 'string',
            'lastModifyTime' => 'string',
            'isWatch' => 'bool',
            'description' => 'string',
            'parameter' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\TemplateParam[]',
            'flow' => 'map[string,map[string,string]]',
            'states' => 'map[string,\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\TemplateState]',
            'canUpdate' => 'bool',
            'canDelete' => 'bool',
            'needHub' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  模板ID
    * templateName  模板名字
    * templateType  模板类型
    * templateUrl  模板编辑URL
    * userId  用户ID
    * userName  用户名字
    * domainId  租户ID
    * domainName  租户名字
    * isBuildIn  是否内置模板
    * region  系统模板region为Cloud Pipeline。自定义模板region为实际region
    * projectId  项目ID
    * projectName  项目名字
    * createTime  创建时间
    * lastModifyTime  修改时间
    * isWatch  是否关注
    * description  模板描述
    * parameter  模板参数
    * flow  编排flow详情，描述流水线内各阶段任务的串并行关系。map类型数据，key为阶段名字，默认第一阶段initial，最后阶段为final，其余名字以'state_数字'标识。value为该阶段内任务(以'Task_数字'标识)以及后续阶段的标识。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    * states  编排State详情，map类型数据。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    * canUpdate  是否可以修改
    * canDelete  是否可以删除
    * needHub  是否需要代码仓库
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => null,
        'templateName' => null,
        'templateType' => null,
        'templateUrl' => null,
        'userId' => null,
        'userName' => null,
        'domainId' => null,
        'domainName' => null,
        'isBuildIn' => null,
        'region' => null,
        'projectId' => null,
        'projectName' => null,
        'createTime' => null,
        'lastModifyTime' => null,
        'isWatch' => null,
        'description' => null,
        'parameter' => null,
        'flow' => null,
        'states' => null,
        'canUpdate' => null,
        'canDelete' => null,
        'needHub' => null
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
    * templateId  模板ID
    * templateName  模板名字
    * templateType  模板类型
    * templateUrl  模板编辑URL
    * userId  用户ID
    * userName  用户名字
    * domainId  租户ID
    * domainName  租户名字
    * isBuildIn  是否内置模板
    * region  系统模板region为Cloud Pipeline。自定义模板region为实际region
    * projectId  项目ID
    * projectName  项目名字
    * createTime  创建时间
    * lastModifyTime  修改时间
    * isWatch  是否关注
    * description  模板描述
    * parameter  模板参数
    * flow  编排flow详情，描述流水线内各阶段任务的串并行关系。map类型数据，key为阶段名字，默认第一阶段initial，最后阶段为final，其余名字以'state_数字'标识。value为该阶段内任务(以'Task_数字'标识)以及后续阶段的标识。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    * states  编排State详情，map类型数据。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    * canUpdate  是否可以修改
    * canDelete  是否可以删除
    * needHub  是否需要代码仓库
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'templateName' => 'template_name',
            'templateType' => 'template_type',
            'templateUrl' => 'template_url',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'isBuildIn' => 'is_build_in',
            'region' => 'region',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'createTime' => 'create_time',
            'lastModifyTime' => 'last_modify_time',
            'isWatch' => 'is_watch',
            'description' => 'description',
            'parameter' => 'parameter',
            'flow' => 'flow',
            'states' => 'states',
            'canUpdate' => 'can_update',
            'canDelete' => 'can_delete',
            'needHub' => 'need_hub'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  模板ID
    * templateName  模板名字
    * templateType  模板类型
    * templateUrl  模板编辑URL
    * userId  用户ID
    * userName  用户名字
    * domainId  租户ID
    * domainName  租户名字
    * isBuildIn  是否内置模板
    * region  系统模板region为Cloud Pipeline。自定义模板region为实际region
    * projectId  项目ID
    * projectName  项目名字
    * createTime  创建时间
    * lastModifyTime  修改时间
    * isWatch  是否关注
    * description  模板描述
    * parameter  模板参数
    * flow  编排flow详情，描述流水线内各阶段任务的串并行关系。map类型数据，key为阶段名字，默认第一阶段initial，最后阶段为final，其余名字以'state_数字'标识。value为该阶段内任务(以'Task_数字'标识)以及后续阶段的标识。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    * states  编排State详情，map类型数据。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    * canUpdate  是否可以修改
    * canDelete  是否可以删除
    * needHub  是否需要代码仓库
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'templateName' => 'setTemplateName',
            'templateType' => 'setTemplateType',
            'templateUrl' => 'setTemplateUrl',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'isBuildIn' => 'setIsBuildIn',
            'region' => 'setRegion',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'createTime' => 'setCreateTime',
            'lastModifyTime' => 'setLastModifyTime',
            'isWatch' => 'setIsWatch',
            'description' => 'setDescription',
            'parameter' => 'setParameter',
            'flow' => 'setFlow',
            'states' => 'setStates',
            'canUpdate' => 'setCanUpdate',
            'canDelete' => 'setCanDelete',
            'needHub' => 'setNeedHub'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  模板ID
    * templateName  模板名字
    * templateType  模板类型
    * templateUrl  模板编辑URL
    * userId  用户ID
    * userName  用户名字
    * domainId  租户ID
    * domainName  租户名字
    * isBuildIn  是否内置模板
    * region  系统模板region为Cloud Pipeline。自定义模板region为实际region
    * projectId  项目ID
    * projectName  项目名字
    * createTime  创建时间
    * lastModifyTime  修改时间
    * isWatch  是否关注
    * description  模板描述
    * parameter  模板参数
    * flow  编排flow详情，描述流水线内各阶段任务的串并行关系。map类型数据，key为阶段名字，默认第一阶段initial，最后阶段为final，其余名字以'state_数字'标识。value为该阶段内任务(以'Task_数字'标识)以及后续阶段的标识。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    * states  编排State详情，map类型数据。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    * canUpdate  是否可以修改
    * canDelete  是否可以删除
    * needHub  是否需要代码仓库
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'templateName' => 'getTemplateName',
            'templateType' => 'getTemplateType',
            'templateUrl' => 'getTemplateUrl',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'isBuildIn' => 'getIsBuildIn',
            'region' => 'getRegion',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'createTime' => 'getCreateTime',
            'lastModifyTime' => 'getLastModifyTime',
            'isWatch' => 'getIsWatch',
            'description' => 'getDescription',
            'parameter' => 'getParameter',
            'flow' => 'getFlow',
            'states' => 'getStates',
            'canUpdate' => 'getCanUpdate',
            'canDelete' => 'getCanDelete',
            'needHub' => 'getNeedHub'
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['templateType'] = isset($data['templateType']) ? $data['templateType'] : null;
        $this->container['templateUrl'] = isset($data['templateUrl']) ? $data['templateUrl'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['isBuildIn'] = isset($data['isBuildIn']) ? $data['isBuildIn'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastModifyTime'] = isset($data['lastModifyTime']) ? $data['lastModifyTime'] : null;
        $this->container['isWatch'] = isset($data['isWatch']) ? $data['isWatch'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['parameter'] = isset($data['parameter']) ? $data['parameter'] : null;
        $this->container['flow'] = isset($data['flow']) ? $data['flow'] : null;
        $this->container['states'] = isset($data['states']) ? $data['states'] : null;
        $this->container['canUpdate'] = isset($data['canUpdate']) ? $data['canUpdate'] : null;
        $this->container['canDelete'] = isset($data['canDelete']) ? $data['canDelete'] : null;
        $this->container['needHub'] = isset($data['needHub']) ? $data['needHub'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['templateId'] === null) {
            $invalidProperties[] = "'templateId' can't be null";
        }
        if ($this->container['templateName'] === null) {
            $invalidProperties[] = "'templateName' can't be null";
        }
        if ($this->container['templateType'] === null) {
            $invalidProperties[] = "'templateType' can't be null";
        }
        if ($this->container['templateUrl'] === null) {
            $invalidProperties[] = "'templateUrl' can't be null";
        }
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
        }
        if ($this->container['isBuildIn'] === null) {
            $invalidProperties[] = "'isBuildIn' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['projectName'] === null) {
            $invalidProperties[] = "'projectName' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['lastModifyTime'] === null) {
            $invalidProperties[] = "'lastModifyTime' can't be null";
        }
        if ($this->container['isWatch'] === null) {
            $invalidProperties[] = "'isWatch' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['parameter'] === null) {
            $invalidProperties[] = "'parameter' can't be null";
        }
        if ($this->container['flow'] === null) {
            $invalidProperties[] = "'flow' can't be null";
        }
        if ($this->container['states'] === null) {
            $invalidProperties[] = "'states' can't be null";
        }
        if ($this->container['canUpdate'] === null) {
            $invalidProperties[] = "'canUpdate' can't be null";
        }
        if ($this->container['canDelete'] === null) {
            $invalidProperties[] = "'canDelete' can't be null";
        }
        if ($this->container['needHub'] === null) {
            $invalidProperties[] = "'needHub' can't be null";
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
    * Gets templateId
    *  模板ID
    *
    * @return string
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string $templateId 模板ID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets templateName
    *  模板名字
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
    * @param string $templateName 模板名字
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets templateType
    *  模板类型
    *
    * @return string
    */
    public function getTemplateType()
    {
        return $this->container['templateType'];
    }

    /**
    * Sets templateType
    *
    * @param string $templateType 模板类型
    *
    * @return $this
    */
    public function setTemplateType($templateType)
    {
        $this->container['templateType'] = $templateType;
        return $this;
    }

    /**
    * Gets templateUrl
    *  模板编辑URL
    *
    * @return string
    */
    public function getTemplateUrl()
    {
        return $this->container['templateUrl'];
    }

    /**
    * Sets templateUrl
    *
    * @param string $templateUrl 模板编辑URL
    *
    * @return $this
    */
    public function setTemplateUrl($templateUrl)
    {
        $this->container['templateUrl'] = $templateUrl;
        return $this;
    }

    /**
    * Gets userId
    *  用户ID
    *
    * @return string
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string $userId 用户ID
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userName
    *  用户名字
    *
    * @return string
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string $userName 用户名字
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets domainId
    *  租户ID
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 租户ID
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
    *  租户名字
    *
    * @return string
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string $domainName 租户名字
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets isBuildIn
    *  是否内置模板
    *
    * @return bool
    */
    public function getIsBuildIn()
    {
        return $this->container['isBuildIn'];
    }

    /**
    * Sets isBuildIn
    *
    * @param bool $isBuildIn 是否内置模板
    *
    * @return $this
    */
    public function setIsBuildIn($isBuildIn)
    {
        $this->container['isBuildIn'] = $isBuildIn;
        return $this;
    }

    /**
    * Gets region
    *  系统模板region为Cloud Pipeline。自定义模板region为实际region
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 系统模板region为Cloud Pipeline。自定义模板region为实际region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
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
    *  项目名字
    *
    * @return string
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string $projectName 项目名字
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastModifyTime
    *  修改时间
    *
    * @return string
    */
    public function getLastModifyTime()
    {
        return $this->container['lastModifyTime'];
    }

    /**
    * Sets lastModifyTime
    *
    * @param string $lastModifyTime 修改时间
    *
    * @return $this
    */
    public function setLastModifyTime($lastModifyTime)
    {
        $this->container['lastModifyTime'] = $lastModifyTime;
        return $this;
    }

    /**
    * Gets isWatch
    *  是否关注
    *
    * @return bool
    */
    public function getIsWatch()
    {
        return $this->container['isWatch'];
    }

    /**
    * Sets isWatch
    *
    * @param bool $isWatch 是否关注
    *
    * @return $this
    */
    public function setIsWatch($isWatch)
    {
        $this->container['isWatch'] = $isWatch;
        return $this;
    }

    /**
    * Gets description
    *  模板描述
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 模板描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets parameter
    *  模板参数
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\TemplateParam[]
    */
    public function getParameter()
    {
        return $this->container['parameter'];
    }

    /**
    * Sets parameter
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\TemplateParam[] $parameter 模板参数
    *
    * @return $this
    */
    public function setParameter($parameter)
    {
        $this->container['parameter'] = $parameter;
        return $this;
    }

    /**
    * Gets flow
    *  编排flow详情，描述流水线内各阶段任务的串并行关系。map类型数据，key为阶段名字，默认第一阶段initial，最后阶段为final，其余名字以'state_数字'标识。value为该阶段内任务(以'Task_数字'标识)以及后续阶段的标识。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    *
    * @return map[string,map[string,string]]
    */
    public function getFlow()
    {
        return $this->container['flow'];
    }

    /**
    * Sets flow
    *
    * @param map[string,map[string,string]] $flow 编排flow详情，描述流水线内各阶段任务的串并行关系。map类型数据，key为阶段名字，默认第一阶段initial，最后阶段为final，其余名字以'state_数字'标识。value为该阶段内任务(以'Task_数字'标识)以及后续阶段的标识。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    *
    * @return $this
    */
    public function setFlow($flow)
    {
        $this->container['flow'] = $flow;
        return $this;
    }

    /**
    * Gets states
    *  编排State详情，map类型数据。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    *
    * @return map[string,\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\TemplateState]
    */
    public function getStates()
    {
        return $this->container['states'];
    }

    /**
    * Sets states
    *
    * @param map[string,\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\TemplateState] $states 编排State详情，map类型数据。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    *
    * @return $this
    */
    public function setStates($states)
    {
        $this->container['states'] = $states;
        return $this;
    }

    /**
    * Gets canUpdate
    *  是否可以修改
    *
    * @return bool
    */
    public function getCanUpdate()
    {
        return $this->container['canUpdate'];
    }

    /**
    * Sets canUpdate
    *
    * @param bool $canUpdate 是否可以修改
    *
    * @return $this
    */
    public function setCanUpdate($canUpdate)
    {
        $this->container['canUpdate'] = $canUpdate;
        return $this;
    }

    /**
    * Gets canDelete
    *  是否可以删除
    *
    * @return bool
    */
    public function getCanDelete()
    {
        return $this->container['canDelete'];
    }

    /**
    * Sets canDelete
    *
    * @param bool $canDelete 是否可以删除
    *
    * @return $this
    */
    public function setCanDelete($canDelete)
    {
        $this->container['canDelete'] = $canDelete;
        return $this;
    }

    /**
    * Gets needHub
    *  是否需要代码仓库
    *
    * @return bool
    */
    public function getNeedHub()
    {
        return $this->container['needHub'];
    }

    /**
    * Sets needHub
    *
    * @param bool $needHub 是否需要代码仓库
    *
    * @return $this
    */
    public function setNeedHub($needHub)
    {
        $this->container['needHub'] = $needHub;
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

