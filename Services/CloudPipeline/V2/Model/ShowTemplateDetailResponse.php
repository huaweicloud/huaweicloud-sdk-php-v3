<?php

namespace HuaweiCloud\SDK\CloudPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTemplateDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTemplateDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  模板ID
    * templateName  模板名字
    * templateType  模板类型
    * userId  用户ID
    * userName  用户名字
    * domainId  租户ID
    * domainName  租户名字
    * isBuildIn  是否内置模板
    * region  region
    * projectId  项目ID
    * projectName  项目名字
    * createTime  创建时间
    * lastModifyTime  修改时间
    * isWatch  是否关注
    * description  模板描述
    * parameter  模板参数
    * flow  编排flow详情，描述流水线内各阶段任务的串并行关系。map类型数据，key为阶段名字，默认第一阶段initial，最后阶段为final，其余名字以'state_数字'标识。value为该阶段内任务(以'Task_数字'标识)以及后续阶段的标识。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    * states  编排State详情，map类型数据。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'string',
            'templateName' => 'string',
            'templateType' => 'string',
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
            'parameter' => '\HuaweiCloud\SDK\CloudPipeline\V2\Model\TemplateParam[]',
            'flow' => 'map[string,map[string,string]]',
            'states' => 'map[string,\HuaweiCloud\SDK\CloudPipeline\V2\Model\TemplateState]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  模板ID
    * templateName  模板名字
    * templateType  模板类型
    * userId  用户ID
    * userName  用户名字
    * domainId  租户ID
    * domainName  租户名字
    * isBuildIn  是否内置模板
    * region  region
    * projectId  项目ID
    * projectName  项目名字
    * createTime  创建时间
    * lastModifyTime  修改时间
    * isWatch  是否关注
    * description  模板描述
    * parameter  模板参数
    * flow  编排flow详情，描述流水线内各阶段任务的串并行关系。map类型数据，key为阶段名字，默认第一阶段initial，最后阶段为final，其余名字以'state_数字'标识。value为该阶段内任务(以'Task_数字'标识)以及后续阶段的标识。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    * states  编排State详情，map类型数据。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => null,
        'templateName' => null,
        'templateType' => null,
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
        'states' => null
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
    * userId  用户ID
    * userName  用户名字
    * domainId  租户ID
    * domainName  租户名字
    * isBuildIn  是否内置模板
    * region  region
    * projectId  项目ID
    * projectName  项目名字
    * createTime  创建时间
    * lastModifyTime  修改时间
    * isWatch  是否关注
    * description  模板描述
    * parameter  模板参数
    * flow  编排flow详情，描述流水线内各阶段任务的串并行关系。map类型数据，key为阶段名字，默认第一阶段initial，最后阶段为final，其余名字以'state_数字'标识。value为该阶段内任务(以'Task_数字'标识)以及后续阶段的标识。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    * states  编排State详情，map类型数据。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'templateName' => 'template_name',
            'templateType' => 'template_type',
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
            'states' => 'states'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  模板ID
    * templateName  模板名字
    * templateType  模板类型
    * userId  用户ID
    * userName  用户名字
    * domainId  租户ID
    * domainName  租户名字
    * isBuildIn  是否内置模板
    * region  region
    * projectId  项目ID
    * projectName  项目名字
    * createTime  创建时间
    * lastModifyTime  修改时间
    * isWatch  是否关注
    * description  模板描述
    * parameter  模板参数
    * flow  编排flow详情，描述流水线内各阶段任务的串并行关系。map类型数据，key为阶段名字，默认第一阶段initial，最后阶段为final，其余名字以'state_数字'标识。value为该阶段内任务(以'Task_数字'标识)以及后续阶段的标识。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    * states  编排State详情，map类型数据。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'templateName' => 'setTemplateName',
            'templateType' => 'setTemplateType',
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
            'states' => 'setStates'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  模板ID
    * templateName  模板名字
    * templateType  模板类型
    * userId  用户ID
    * userName  用户名字
    * domainId  租户ID
    * domainName  租户名字
    * isBuildIn  是否内置模板
    * region  region
    * projectId  项目ID
    * projectName  项目名字
    * createTime  创建时间
    * lastModifyTime  修改时间
    * isWatch  是否关注
    * description  模板描述
    * parameter  模板参数
    * flow  编排flow详情，描述流水线内各阶段任务的串并行关系。map类型数据，key为阶段名字，默认第一阶段initial，最后阶段为final，其余名字以'state_数字'标识。value为该阶段内任务(以'Task_数字'标识)以及后续阶段的标识。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    * states  编排State详情，map类型数据。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'templateName' => 'getTemplateName',
            'templateType' => 'getTemplateType',
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
            'states' => 'getStates'
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
    * Gets templateId
    *  模板ID
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 模板ID
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
    * @return string|null
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string|null $templateName 模板名字
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
    * @return string|null
    */
    public function getTemplateType()
    {
        return $this->container['templateType'];
    }

    /**
    * Sets templateType
    *
    * @param string|null $templateType 模板类型
    *
    * @return $this
    */
    public function setTemplateType($templateType)
    {
        $this->container['templateType'] = $templateType;
        return $this;
    }

    /**
    * Gets userId
    *  用户ID
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户ID
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
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名字
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
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户ID
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
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 租户名字
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
    * @return bool|null
    */
    public function getIsBuildIn()
    {
        return $this->container['isBuildIn'];
    }

    /**
    * Sets isBuildIn
    *
    * @param bool|null $isBuildIn 是否内置模板
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
    *  region
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region region
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
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
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
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName 项目名字
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
    * Gets lastModifyTime
    *  修改时间
    *
    * @return string|null
    */
    public function getLastModifyTime()
    {
        return $this->container['lastModifyTime'];
    }

    /**
    * Sets lastModifyTime
    *
    * @param string|null $lastModifyTime 修改时间
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
    * @return bool|null
    */
    public function getIsWatch()
    {
        return $this->container['isWatch'];
    }

    /**
    * Sets isWatch
    *
    * @param bool|null $isWatch 是否关注
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
    * Gets parameter
    *  模板参数
    *
    * @return \HuaweiCloud\SDK\CloudPipeline\V2\Model\TemplateParam[]|null
    */
    public function getParameter()
    {
        return $this->container['parameter'];
    }

    /**
    * Sets parameter
    *
    * @param \HuaweiCloud\SDK\CloudPipeline\V2\Model\TemplateParam[]|null $parameter 模板参数
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
    * @return map[string,map[string,string]]|null
    */
    public function getFlow()
    {
        return $this->container['flow'];
    }

    /**
    * Sets flow
    *
    * @param map[string,map[string,string]]|null $flow 编排flow详情，描述流水线内各阶段任务的串并行关系。map类型数据，key为阶段名字，默认第一阶段initial，最后阶段为final，其余名字以'state_数字'标识。value为该阶段内任务(以'Task_数字'标识)以及后续阶段的标识。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
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
    * @return map[string,\HuaweiCloud\SDK\CloudPipeline\V2\Model\TemplateState]|null
    */
    public function getStates()
    {
        return $this->container['states'];
    }

    /**
    * Sets states
    *
    * @param map[string,\HuaweiCloud\SDK\CloudPipeline\V2\Model\TemplateState]|null $states 编排State详情，map类型数据。本字段为描述流水线基础编排数据之一，建议可通过流水线真实界面基于模板创建接口中获取
    *
    * @return $this
    */
    public function setStates($states)
    {
        $this->container['states'] = $states;
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

