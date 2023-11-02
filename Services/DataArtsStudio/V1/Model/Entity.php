<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Entity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Entity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  数据版本
    * relationshipAttributes  关联关系属性，数据类型Map<String, Object>
    * superTypeNames  父类资产类型
    * businessAttributes  业务属性，数据类型Map<String, Map<String, Object>>
    * multiAttributes  承担密级和标签的多值对象数据结构，数据结构Map<String, List<Map<String, Object>>>
    * privilegeInfo  privilegeInfo
    * extendedAttributes  拓展属性，数据结构Map<String, Object>
    * guid  资产guid
    * typeName  资产类型名称
    * typeDisplayName  类型展示名称
    * displayText  展示名称
    * attributes  资产属性，Map<String, Object>
    * updatedAttributes  修改属性列表
    * projectId  项目id
    * domainId  主账号id
    * instanceId  实例化id
    * workspaceId  空间id列表
    * status  状态
    * createdBy  创建人
    * updatedBy  修改人
    * createTime  创建时间
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'float',
            'relationshipAttributes' => 'object',
            'superTypeNames' => 'string[]',
            'businessAttributes' => 'object',
            'multiAttributes' => 'object',
            'privilegeInfo' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\EntityPrivilegeInfo',
            'extendedAttributes' => 'object',
            'guid' => 'string',
            'typeName' => 'string',
            'typeDisplayName' => 'string',
            'displayText' => 'string',
            'attributes' => 'object',
            'updatedAttributes' => 'string[]',
            'projectId' => 'string',
            'domainId' => 'string',
            'instanceId' => 'string[]',
            'workspaceId' => 'string[]',
            'status' => 'string',
            'createdBy' => 'string',
            'updatedBy' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  数据版本
    * relationshipAttributes  关联关系属性，数据类型Map<String, Object>
    * superTypeNames  父类资产类型
    * businessAttributes  业务属性，数据类型Map<String, Map<String, Object>>
    * multiAttributes  承担密级和标签的多值对象数据结构，数据结构Map<String, List<Map<String, Object>>>
    * privilegeInfo  privilegeInfo
    * extendedAttributes  拓展属性，数据结构Map<String, Object>
    * guid  资产guid
    * typeName  资产类型名称
    * typeDisplayName  类型展示名称
    * displayText  展示名称
    * attributes  资产属性，Map<String, Object>
    * updatedAttributes  修改属性列表
    * projectId  项目id
    * domainId  主账号id
    * instanceId  实例化id
    * workspaceId  空间id列表
    * status  状态
    * createdBy  创建人
    * updatedBy  修改人
    * createTime  创建时间
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'relationshipAttributes' => null,
        'superTypeNames' => null,
        'businessAttributes' => null,
        'multiAttributes' => null,
        'privilegeInfo' => null,
        'extendedAttributes' => null,
        'guid' => null,
        'typeName' => null,
        'typeDisplayName' => null,
        'displayText' => null,
        'attributes' => null,
        'updatedAttributes' => null,
        'projectId' => null,
        'domainId' => null,
        'instanceId' => null,
        'workspaceId' => null,
        'status' => null,
        'createdBy' => null,
        'updatedBy' => null,
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
    * version  数据版本
    * relationshipAttributes  关联关系属性，数据类型Map<String, Object>
    * superTypeNames  父类资产类型
    * businessAttributes  业务属性，数据类型Map<String, Map<String, Object>>
    * multiAttributes  承担密级和标签的多值对象数据结构，数据结构Map<String, List<Map<String, Object>>>
    * privilegeInfo  privilegeInfo
    * extendedAttributes  拓展属性，数据结构Map<String, Object>
    * guid  资产guid
    * typeName  资产类型名称
    * typeDisplayName  类型展示名称
    * displayText  展示名称
    * attributes  资产属性，Map<String, Object>
    * updatedAttributes  修改属性列表
    * projectId  项目id
    * domainId  主账号id
    * instanceId  实例化id
    * workspaceId  空间id列表
    * status  状态
    * createdBy  创建人
    * updatedBy  修改人
    * createTime  创建时间
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'relationshipAttributes' => 'relationship_attributes',
            'superTypeNames' => 'super_type_names',
            'businessAttributes' => 'business_attributes',
            'multiAttributes' => 'multi_attributes',
            'privilegeInfo' => 'privilege_info',
            'extendedAttributes' => 'extended_attributes',
            'guid' => 'guid',
            'typeName' => 'type_name',
            'typeDisplayName' => 'type_display_name',
            'displayText' => 'display_text',
            'attributes' => 'attributes',
            'updatedAttributes' => 'updated_attributes',
            'projectId' => 'project_id',
            'domainId' => 'domain_id',
            'instanceId' => 'instance_id',
            'workspaceId' => 'workspace_id',
            'status' => 'status',
            'createdBy' => 'created_by',
            'updatedBy' => 'updated_by',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  数据版本
    * relationshipAttributes  关联关系属性，数据类型Map<String, Object>
    * superTypeNames  父类资产类型
    * businessAttributes  业务属性，数据类型Map<String, Map<String, Object>>
    * multiAttributes  承担密级和标签的多值对象数据结构，数据结构Map<String, List<Map<String, Object>>>
    * privilegeInfo  privilegeInfo
    * extendedAttributes  拓展属性，数据结构Map<String, Object>
    * guid  资产guid
    * typeName  资产类型名称
    * typeDisplayName  类型展示名称
    * displayText  展示名称
    * attributes  资产属性，Map<String, Object>
    * updatedAttributes  修改属性列表
    * projectId  项目id
    * domainId  主账号id
    * instanceId  实例化id
    * workspaceId  空间id列表
    * status  状态
    * createdBy  创建人
    * updatedBy  修改人
    * createTime  创建时间
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'relationshipAttributes' => 'setRelationshipAttributes',
            'superTypeNames' => 'setSuperTypeNames',
            'businessAttributes' => 'setBusinessAttributes',
            'multiAttributes' => 'setMultiAttributes',
            'privilegeInfo' => 'setPrivilegeInfo',
            'extendedAttributes' => 'setExtendedAttributes',
            'guid' => 'setGuid',
            'typeName' => 'setTypeName',
            'typeDisplayName' => 'setTypeDisplayName',
            'displayText' => 'setDisplayText',
            'attributes' => 'setAttributes',
            'updatedAttributes' => 'setUpdatedAttributes',
            'projectId' => 'setProjectId',
            'domainId' => 'setDomainId',
            'instanceId' => 'setInstanceId',
            'workspaceId' => 'setWorkspaceId',
            'status' => 'setStatus',
            'createdBy' => 'setCreatedBy',
            'updatedBy' => 'setUpdatedBy',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  数据版本
    * relationshipAttributes  关联关系属性，数据类型Map<String, Object>
    * superTypeNames  父类资产类型
    * businessAttributes  业务属性，数据类型Map<String, Map<String, Object>>
    * multiAttributes  承担密级和标签的多值对象数据结构，数据结构Map<String, List<Map<String, Object>>>
    * privilegeInfo  privilegeInfo
    * extendedAttributes  拓展属性，数据结构Map<String, Object>
    * guid  资产guid
    * typeName  资产类型名称
    * typeDisplayName  类型展示名称
    * displayText  展示名称
    * attributes  资产属性，Map<String, Object>
    * updatedAttributes  修改属性列表
    * projectId  项目id
    * domainId  主账号id
    * instanceId  实例化id
    * workspaceId  空间id列表
    * status  状态
    * createdBy  创建人
    * updatedBy  修改人
    * createTime  创建时间
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'relationshipAttributes' => 'getRelationshipAttributes',
            'superTypeNames' => 'getSuperTypeNames',
            'businessAttributes' => 'getBusinessAttributes',
            'multiAttributes' => 'getMultiAttributes',
            'privilegeInfo' => 'getPrivilegeInfo',
            'extendedAttributes' => 'getExtendedAttributes',
            'guid' => 'getGuid',
            'typeName' => 'getTypeName',
            'typeDisplayName' => 'getTypeDisplayName',
            'displayText' => 'getDisplayText',
            'attributes' => 'getAttributes',
            'updatedAttributes' => 'getUpdatedAttributes',
            'projectId' => 'getProjectId',
            'domainId' => 'getDomainId',
            'instanceId' => 'getInstanceId',
            'workspaceId' => 'getWorkspaceId',
            'status' => 'getStatus',
            'createdBy' => 'getCreatedBy',
            'updatedBy' => 'getUpdatedBy',
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['relationshipAttributes'] = isset($data['relationshipAttributes']) ? $data['relationshipAttributes'] : null;
        $this->container['superTypeNames'] = isset($data['superTypeNames']) ? $data['superTypeNames'] : null;
        $this->container['businessAttributes'] = isset($data['businessAttributes']) ? $data['businessAttributes'] : null;
        $this->container['multiAttributes'] = isset($data['multiAttributes']) ? $data['multiAttributes'] : null;
        $this->container['privilegeInfo'] = isset($data['privilegeInfo']) ? $data['privilegeInfo'] : null;
        $this->container['extendedAttributes'] = isset($data['extendedAttributes']) ? $data['extendedAttributes'] : null;
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['typeName'] = isset($data['typeName']) ? $data['typeName'] : null;
        $this->container['typeDisplayName'] = isset($data['typeDisplayName']) ? $data['typeDisplayName'] : null;
        $this->container['displayText'] = isset($data['displayText']) ? $data['displayText'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['updatedAttributes'] = isset($data['updatedAttributes']) ? $data['updatedAttributes'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['updatedBy'] = isset($data['updatedBy']) ? $data['updatedBy'] : null;
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
    * Gets version
    *  数据版本
    *
    * @return float|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param float|null $version 数据版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets relationshipAttributes
    *  关联关系属性，数据类型Map<String, Object>
    *
    * @return object|null
    */
    public function getRelationshipAttributes()
    {
        return $this->container['relationshipAttributes'];
    }

    /**
    * Sets relationshipAttributes
    *
    * @param object|null $relationshipAttributes 关联关系属性，数据类型Map<String, Object>
    *
    * @return $this
    */
    public function setRelationshipAttributes($relationshipAttributes)
    {
        $this->container['relationshipAttributes'] = $relationshipAttributes;
        return $this;
    }

    /**
    * Gets superTypeNames
    *  父类资产类型
    *
    * @return string[]|null
    */
    public function getSuperTypeNames()
    {
        return $this->container['superTypeNames'];
    }

    /**
    * Sets superTypeNames
    *
    * @param string[]|null $superTypeNames 父类资产类型
    *
    * @return $this
    */
    public function setSuperTypeNames($superTypeNames)
    {
        $this->container['superTypeNames'] = $superTypeNames;
        return $this;
    }

    /**
    * Gets businessAttributes
    *  业务属性，数据类型Map<String, Map<String, Object>>
    *
    * @return object|null
    */
    public function getBusinessAttributes()
    {
        return $this->container['businessAttributes'];
    }

    /**
    * Sets businessAttributes
    *
    * @param object|null $businessAttributes 业务属性，数据类型Map<String, Map<String, Object>>
    *
    * @return $this
    */
    public function setBusinessAttributes($businessAttributes)
    {
        $this->container['businessAttributes'] = $businessAttributes;
        return $this;
    }

    /**
    * Gets multiAttributes
    *  承担密级和标签的多值对象数据结构，数据结构Map<String, List<Map<String, Object>>>
    *
    * @return object|null
    */
    public function getMultiAttributes()
    {
        return $this->container['multiAttributes'];
    }

    /**
    * Sets multiAttributes
    *
    * @param object|null $multiAttributes 承担密级和标签的多值对象数据结构，数据结构Map<String, List<Map<String, Object>>>
    *
    * @return $this
    */
    public function setMultiAttributes($multiAttributes)
    {
        $this->container['multiAttributes'] = $multiAttributes;
        return $this;
    }

    /**
    * Gets privilegeInfo
    *  privilegeInfo
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\EntityPrivilegeInfo|null
    */
    public function getPrivilegeInfo()
    {
        return $this->container['privilegeInfo'];
    }

    /**
    * Sets privilegeInfo
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\EntityPrivilegeInfo|null $privilegeInfo privilegeInfo
    *
    * @return $this
    */
    public function setPrivilegeInfo($privilegeInfo)
    {
        $this->container['privilegeInfo'] = $privilegeInfo;
        return $this;
    }

    /**
    * Gets extendedAttributes
    *  拓展属性，数据结构Map<String, Object>
    *
    * @return object|null
    */
    public function getExtendedAttributes()
    {
        return $this->container['extendedAttributes'];
    }

    /**
    * Sets extendedAttributes
    *
    * @param object|null $extendedAttributes 拓展属性，数据结构Map<String, Object>
    *
    * @return $this
    */
    public function setExtendedAttributes($extendedAttributes)
    {
        $this->container['extendedAttributes'] = $extendedAttributes;
        return $this;
    }

    /**
    * Gets guid
    *  资产guid
    *
    * @return string|null
    */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
    * Sets guid
    *
    * @param string|null $guid 资产guid
    *
    * @return $this
    */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;
        return $this;
    }

    /**
    * Gets typeName
    *  资产类型名称
    *
    * @return string|null
    */
    public function getTypeName()
    {
        return $this->container['typeName'];
    }

    /**
    * Sets typeName
    *
    * @param string|null $typeName 资产类型名称
    *
    * @return $this
    */
    public function setTypeName($typeName)
    {
        $this->container['typeName'] = $typeName;
        return $this;
    }

    /**
    * Gets typeDisplayName
    *  类型展示名称
    *
    * @return string|null
    */
    public function getTypeDisplayName()
    {
        return $this->container['typeDisplayName'];
    }

    /**
    * Sets typeDisplayName
    *
    * @param string|null $typeDisplayName 类型展示名称
    *
    * @return $this
    */
    public function setTypeDisplayName($typeDisplayName)
    {
        $this->container['typeDisplayName'] = $typeDisplayName;
        return $this;
    }

    /**
    * Gets displayText
    *  展示名称
    *
    * @return string|null
    */
    public function getDisplayText()
    {
        return $this->container['displayText'];
    }

    /**
    * Sets displayText
    *
    * @param string|null $displayText 展示名称
    *
    * @return $this
    */
    public function setDisplayText($displayText)
    {
        $this->container['displayText'] = $displayText;
        return $this;
    }

    /**
    * Gets attributes
    *  资产属性，Map<String, Object>
    *
    * @return object|null
    */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
    * Sets attributes
    *
    * @param object|null $attributes 资产属性，Map<String, Object>
    *
    * @return $this
    */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;
        return $this;
    }

    /**
    * Gets updatedAttributes
    *  修改属性列表
    *
    * @return string[]|null
    */
    public function getUpdatedAttributes()
    {
        return $this->container['updatedAttributes'];
    }

    /**
    * Sets updatedAttributes
    *
    * @param string[]|null $updatedAttributes 修改属性列表
    *
    * @return $this
    */
    public function setUpdatedAttributes($updatedAttributes)
    {
        $this->container['updatedAttributes'] = $updatedAttributes;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
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
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets domainId
    *  主账号id
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
    * @param string|null $domainId 主账号id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例化id
    *
    * @return string[]|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string[]|null $instanceId 实例化id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  空间id列表
    *
    * @return string[]|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string[]|null $workspaceId 空间id列表
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdBy
    *  创建人
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 创建人
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets updatedBy
    *  修改人
    *
    * @return string|null
    */
    public function getUpdatedBy()
    {
        return $this->container['updatedBy'];
    }

    /**
    * Sets updatedBy
    *
    * @param string|null $updatedBy 修改人
    *
    * @return $this
    */
    public function setUpdatedBy($updatedBy)
    {
        $this->container['updatedBy'] = $updatedBy;
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
    *  修改时间
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
    * @param string|null $updateTime 修改时间
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

