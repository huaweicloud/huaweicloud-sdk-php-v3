<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Lineage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Lineage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * relationTypeName  关系类型。PARENT_CHILD,LOGICAL_PHYSICAL,PK_FK,DATA_FLOW,INSTANCE_OF,JOIN,IS_A,UP_DOWN,ASSOCIATION,WORK_FLOW
    * direction  血缘流向，IN,OUT,BOTH
    * ep1Id  节点一资产guid
    * ep1TypeName  节点一资产类型
    * ep2Id  节点二资产guid
    * ep2TypeName  节点二资产类型
    * end1  end1
    * end2  end2
    * propagateTag  关系类型。NONE,ONE_TO_TWO,TWO_TO_ONE,BOTH
    * guid  资产guid
    * typeName  资产类型名称
    * typeDisplayName  类型展示名称
    * displayText  展示名称
    * attributes  资产属性，Map<String, Object>
    * updatedAttributes  修改属性列表
    * projectId  项目id
    * domainId  主账号id
    * instanceId  实例id
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
            'relationTypeName' => 'string',
            'direction' => 'string',
            'ep1Id' => 'string',
            'ep1TypeName' => 'string',
            'ep2Id' => 'string',
            'ep2TypeName' => 'string',
            'end1' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Entity',
            'end2' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Entity',
            'propagateTag' => 'string',
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
    * relationTypeName  关系类型。PARENT_CHILD,LOGICAL_PHYSICAL,PK_FK,DATA_FLOW,INSTANCE_OF,JOIN,IS_A,UP_DOWN,ASSOCIATION,WORK_FLOW
    * direction  血缘流向，IN,OUT,BOTH
    * ep1Id  节点一资产guid
    * ep1TypeName  节点一资产类型
    * ep2Id  节点二资产guid
    * ep2TypeName  节点二资产类型
    * end1  end1
    * end2  end2
    * propagateTag  关系类型。NONE,ONE_TO_TWO,TWO_TO_ONE,BOTH
    * guid  资产guid
    * typeName  资产类型名称
    * typeDisplayName  类型展示名称
    * displayText  展示名称
    * attributes  资产属性，Map<String, Object>
    * updatedAttributes  修改属性列表
    * projectId  项目id
    * domainId  主账号id
    * instanceId  实例id
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
        'relationTypeName' => null,
        'direction' => null,
        'ep1Id' => null,
        'ep1TypeName' => null,
        'ep2Id' => null,
        'ep2TypeName' => null,
        'end1' => null,
        'end2' => null,
        'propagateTag' => null,
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
    * relationTypeName  关系类型。PARENT_CHILD,LOGICAL_PHYSICAL,PK_FK,DATA_FLOW,INSTANCE_OF,JOIN,IS_A,UP_DOWN,ASSOCIATION,WORK_FLOW
    * direction  血缘流向，IN,OUT,BOTH
    * ep1Id  节点一资产guid
    * ep1TypeName  节点一资产类型
    * ep2Id  节点二资产guid
    * ep2TypeName  节点二资产类型
    * end1  end1
    * end2  end2
    * propagateTag  关系类型。NONE,ONE_TO_TWO,TWO_TO_ONE,BOTH
    * guid  资产guid
    * typeName  资产类型名称
    * typeDisplayName  类型展示名称
    * displayText  展示名称
    * attributes  资产属性，Map<String, Object>
    * updatedAttributes  修改属性列表
    * projectId  项目id
    * domainId  主账号id
    * instanceId  实例id
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
            'relationTypeName' => 'relation_type_name',
            'direction' => 'direction',
            'ep1Id' => 'ep1_id',
            'ep1TypeName' => 'ep1_type_name',
            'ep2Id' => 'ep2_id',
            'ep2TypeName' => 'ep2_type_name',
            'end1' => 'end1',
            'end2' => 'end2',
            'propagateTag' => 'propagate_tag',
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
    * relationTypeName  关系类型。PARENT_CHILD,LOGICAL_PHYSICAL,PK_FK,DATA_FLOW,INSTANCE_OF,JOIN,IS_A,UP_DOWN,ASSOCIATION,WORK_FLOW
    * direction  血缘流向，IN,OUT,BOTH
    * ep1Id  节点一资产guid
    * ep1TypeName  节点一资产类型
    * ep2Id  节点二资产guid
    * ep2TypeName  节点二资产类型
    * end1  end1
    * end2  end2
    * propagateTag  关系类型。NONE,ONE_TO_TWO,TWO_TO_ONE,BOTH
    * guid  资产guid
    * typeName  资产类型名称
    * typeDisplayName  类型展示名称
    * displayText  展示名称
    * attributes  资产属性，Map<String, Object>
    * updatedAttributes  修改属性列表
    * projectId  项目id
    * domainId  主账号id
    * instanceId  实例id
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
            'relationTypeName' => 'setRelationTypeName',
            'direction' => 'setDirection',
            'ep1Id' => 'setEp1Id',
            'ep1TypeName' => 'setEp1TypeName',
            'ep2Id' => 'setEp2Id',
            'ep2TypeName' => 'setEp2TypeName',
            'end1' => 'setEnd1',
            'end2' => 'setEnd2',
            'propagateTag' => 'setPropagateTag',
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
    * relationTypeName  关系类型。PARENT_CHILD,LOGICAL_PHYSICAL,PK_FK,DATA_FLOW,INSTANCE_OF,JOIN,IS_A,UP_DOWN,ASSOCIATION,WORK_FLOW
    * direction  血缘流向，IN,OUT,BOTH
    * ep1Id  节点一资产guid
    * ep1TypeName  节点一资产类型
    * ep2Id  节点二资产guid
    * ep2TypeName  节点二资产类型
    * end1  end1
    * end2  end2
    * propagateTag  关系类型。NONE,ONE_TO_TWO,TWO_TO_ONE,BOTH
    * guid  资产guid
    * typeName  资产类型名称
    * typeDisplayName  类型展示名称
    * displayText  展示名称
    * attributes  资产属性，Map<String, Object>
    * updatedAttributes  修改属性列表
    * projectId  项目id
    * domainId  主账号id
    * instanceId  实例id
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
            'relationTypeName' => 'getRelationTypeName',
            'direction' => 'getDirection',
            'ep1Id' => 'getEp1Id',
            'ep1TypeName' => 'getEp1TypeName',
            'ep2Id' => 'getEp2Id',
            'ep2TypeName' => 'getEp2TypeName',
            'end1' => 'getEnd1',
            'end2' => 'getEnd2',
            'propagateTag' => 'getPropagateTag',
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
        $this->container['relationTypeName'] = isset($data['relationTypeName']) ? $data['relationTypeName'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['ep1Id'] = isset($data['ep1Id']) ? $data['ep1Id'] : null;
        $this->container['ep1TypeName'] = isset($data['ep1TypeName']) ? $data['ep1TypeName'] : null;
        $this->container['ep2Id'] = isset($data['ep2Id']) ? $data['ep2Id'] : null;
        $this->container['ep2TypeName'] = isset($data['ep2TypeName']) ? $data['ep2TypeName'] : null;
        $this->container['end1'] = isset($data['end1']) ? $data['end1'] : null;
        $this->container['end2'] = isset($data['end2']) ? $data['end2'] : null;
        $this->container['propagateTag'] = isset($data['propagateTag']) ? $data['propagateTag'] : null;
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
    * Gets relationTypeName
    *  关系类型。PARENT_CHILD,LOGICAL_PHYSICAL,PK_FK,DATA_FLOW,INSTANCE_OF,JOIN,IS_A,UP_DOWN,ASSOCIATION,WORK_FLOW
    *
    * @return string|null
    */
    public function getRelationTypeName()
    {
        return $this->container['relationTypeName'];
    }

    /**
    * Sets relationTypeName
    *
    * @param string|null $relationTypeName 关系类型。PARENT_CHILD,LOGICAL_PHYSICAL,PK_FK,DATA_FLOW,INSTANCE_OF,JOIN,IS_A,UP_DOWN,ASSOCIATION,WORK_FLOW
    *
    * @return $this
    */
    public function setRelationTypeName($relationTypeName)
    {
        $this->container['relationTypeName'] = $relationTypeName;
        return $this;
    }

    /**
    * Gets direction
    *  血缘流向，IN,OUT,BOTH
    *
    * @return string|null
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param string|null $direction 血缘流向，IN,OUT,BOTH
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets ep1Id
    *  节点一资产guid
    *
    * @return string|null
    */
    public function getEp1Id()
    {
        return $this->container['ep1Id'];
    }

    /**
    * Sets ep1Id
    *
    * @param string|null $ep1Id 节点一资产guid
    *
    * @return $this
    */
    public function setEp1Id($ep1Id)
    {
        $this->container['ep1Id'] = $ep1Id;
        return $this;
    }

    /**
    * Gets ep1TypeName
    *  节点一资产类型
    *
    * @return string|null
    */
    public function getEp1TypeName()
    {
        return $this->container['ep1TypeName'];
    }

    /**
    * Sets ep1TypeName
    *
    * @param string|null $ep1TypeName 节点一资产类型
    *
    * @return $this
    */
    public function setEp1TypeName($ep1TypeName)
    {
        $this->container['ep1TypeName'] = $ep1TypeName;
        return $this;
    }

    /**
    * Gets ep2Id
    *  节点二资产guid
    *
    * @return string|null
    */
    public function getEp2Id()
    {
        return $this->container['ep2Id'];
    }

    /**
    * Sets ep2Id
    *
    * @param string|null $ep2Id 节点二资产guid
    *
    * @return $this
    */
    public function setEp2Id($ep2Id)
    {
        $this->container['ep2Id'] = $ep2Id;
        return $this;
    }

    /**
    * Gets ep2TypeName
    *  节点二资产类型
    *
    * @return string|null
    */
    public function getEp2TypeName()
    {
        return $this->container['ep2TypeName'];
    }

    /**
    * Sets ep2TypeName
    *
    * @param string|null $ep2TypeName 节点二资产类型
    *
    * @return $this
    */
    public function setEp2TypeName($ep2TypeName)
    {
        $this->container['ep2TypeName'] = $ep2TypeName;
        return $this;
    }

    /**
    * Gets end1
    *  end1
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Entity|null
    */
    public function getEnd1()
    {
        return $this->container['end1'];
    }

    /**
    * Sets end1
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Entity|null $end1 end1
    *
    * @return $this
    */
    public function setEnd1($end1)
    {
        $this->container['end1'] = $end1;
        return $this;
    }

    /**
    * Gets end2
    *  end2
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Entity|null
    */
    public function getEnd2()
    {
        return $this->container['end2'];
    }

    /**
    * Sets end2
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Entity|null $end2 end2
    *
    * @return $this
    */
    public function setEnd2($end2)
    {
        $this->container['end2'] = $end2;
        return $this;
    }

    /**
    * Gets propagateTag
    *  关系类型。NONE,ONE_TO_TWO,TWO_TO_ONE,BOTH
    *
    * @return string|null
    */
    public function getPropagateTag()
    {
        return $this->container['propagateTag'];
    }

    /**
    * Sets propagateTag
    *
    * @param string|null $propagateTag 关系类型。NONE,ONE_TO_TWO,TWO_TO_ONE,BOTH
    *
    * @return $this
    */
    public function setPropagateTag($propagateTag)
    {
        $this->container['propagateTag'] = $propagateTag;
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
    *  实例id
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
    * @param string[]|null $instanceId 实例id
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

