<?php

namespace HuaweiCloud\SDK\Eps\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceMigrateRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceMigrateRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * associated  是否关联迁移
    * code  响应码
    * message  响应信息
    * projectId  项目ID
    * projectName  项目名称
    * regionId  区域ID
    * eventTime  事件时间
    * userName  用户名
    * operateType  迁移类型
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceType  资源类型
    * initiateEpId  发起迁移的企业项目ID
    * initiateEpName  发起迁移的业项目名称
    * originEpId  源企业项目ID
    * originEpName  源企业项目名称
    * targetEpId  目标企业项目ID
    * targetEpName  目标企业项目名称
    * existFailed  是否存在失败
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'associated' => 'bool',
            'code' => 'string',
            'message' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'regionId' => 'string',
            'eventTime' => 'string',
            'userName' => 'string',
            'operateType' => 'string',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'resourceType' => 'string',
            'initiateEpId' => 'string',
            'initiateEpName' => 'string',
            'originEpId' => 'string',
            'originEpName' => 'string',
            'targetEpId' => 'string',
            'targetEpName' => 'string',
            'existFailed' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * associated  是否关联迁移
    * code  响应码
    * message  响应信息
    * projectId  项目ID
    * projectName  项目名称
    * regionId  区域ID
    * eventTime  事件时间
    * userName  用户名
    * operateType  迁移类型
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceType  资源类型
    * initiateEpId  发起迁移的企业项目ID
    * initiateEpName  发起迁移的业项目名称
    * originEpId  源企业项目ID
    * originEpName  源企业项目名称
    * targetEpId  目标企业项目ID
    * targetEpName  目标企业项目名称
    * existFailed  是否存在失败
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'associated' => null,
        'code' => null,
        'message' => null,
        'projectId' => null,
        'projectName' => null,
        'regionId' => null,
        'eventTime' => null,
        'userName' => null,
        'operateType' => null,
        'resourceId' => null,
        'resourceName' => null,
        'resourceType' => null,
        'initiateEpId' => null,
        'initiateEpName' => null,
        'originEpId' => null,
        'originEpName' => null,
        'targetEpId' => null,
        'targetEpName' => null,
        'existFailed' => null
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
    * associated  是否关联迁移
    * code  响应码
    * message  响应信息
    * projectId  项目ID
    * projectName  项目名称
    * regionId  区域ID
    * eventTime  事件时间
    * userName  用户名
    * operateType  迁移类型
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceType  资源类型
    * initiateEpId  发起迁移的企业项目ID
    * initiateEpName  发起迁移的业项目名称
    * originEpId  源企业项目ID
    * originEpName  源企业项目名称
    * targetEpId  目标企业项目ID
    * targetEpName  目标企业项目名称
    * existFailed  是否存在失败
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'associated' => 'associated',
            'code' => 'code',
            'message' => 'message',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'regionId' => 'region_id',
            'eventTime' => 'event_time',
            'userName' => 'user_name',
            'operateType' => 'operate_type',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'resourceType' => 'resource_type',
            'initiateEpId' => 'initiate_ep_id',
            'initiateEpName' => 'initiate_ep_name',
            'originEpId' => 'origin_ep_id',
            'originEpName' => 'origin_ep_name',
            'targetEpId' => 'target_ep_id',
            'targetEpName' => 'target_ep_name',
            'existFailed' => 'exist_failed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * associated  是否关联迁移
    * code  响应码
    * message  响应信息
    * projectId  项目ID
    * projectName  项目名称
    * regionId  区域ID
    * eventTime  事件时间
    * userName  用户名
    * operateType  迁移类型
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceType  资源类型
    * initiateEpId  发起迁移的企业项目ID
    * initiateEpName  发起迁移的业项目名称
    * originEpId  源企业项目ID
    * originEpName  源企业项目名称
    * targetEpId  目标企业项目ID
    * targetEpName  目标企业项目名称
    * existFailed  是否存在失败
    *
    * @var string[]
    */
    protected static $setters = [
            'associated' => 'setAssociated',
            'code' => 'setCode',
            'message' => 'setMessage',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'regionId' => 'setRegionId',
            'eventTime' => 'setEventTime',
            'userName' => 'setUserName',
            'operateType' => 'setOperateType',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'resourceType' => 'setResourceType',
            'initiateEpId' => 'setInitiateEpId',
            'initiateEpName' => 'setInitiateEpName',
            'originEpId' => 'setOriginEpId',
            'originEpName' => 'setOriginEpName',
            'targetEpId' => 'setTargetEpId',
            'targetEpName' => 'setTargetEpName',
            'existFailed' => 'setExistFailed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * associated  是否关联迁移
    * code  响应码
    * message  响应信息
    * projectId  项目ID
    * projectName  项目名称
    * regionId  区域ID
    * eventTime  事件时间
    * userName  用户名
    * operateType  迁移类型
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceType  资源类型
    * initiateEpId  发起迁移的企业项目ID
    * initiateEpName  发起迁移的业项目名称
    * originEpId  源企业项目ID
    * originEpName  源企业项目名称
    * targetEpId  目标企业项目ID
    * targetEpName  目标企业项目名称
    * existFailed  是否存在失败
    *
    * @var string[]
    */
    protected static $getters = [
            'associated' => 'getAssociated',
            'code' => 'getCode',
            'message' => 'getMessage',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'regionId' => 'getRegionId',
            'eventTime' => 'getEventTime',
            'userName' => 'getUserName',
            'operateType' => 'getOperateType',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'resourceType' => 'getResourceType',
            'initiateEpId' => 'getInitiateEpId',
            'initiateEpName' => 'getInitiateEpName',
            'originEpId' => 'getOriginEpId',
            'originEpName' => 'getOriginEpName',
            'targetEpId' => 'getTargetEpId',
            'targetEpName' => 'getTargetEpName',
            'existFailed' => 'getExistFailed'
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
        $this->container['associated'] = isset($data['associated']) ? $data['associated'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['eventTime'] = isset($data['eventTime']) ? $data['eventTime'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['initiateEpId'] = isset($data['initiateEpId']) ? $data['initiateEpId'] : null;
        $this->container['initiateEpName'] = isset($data['initiateEpName']) ? $data['initiateEpName'] : null;
        $this->container['originEpId'] = isset($data['originEpId']) ? $data['originEpId'] : null;
        $this->container['originEpName'] = isset($data['originEpName']) ? $data['originEpName'] : null;
        $this->container['targetEpId'] = isset($data['targetEpId']) ? $data['targetEpId'] : null;
        $this->container['targetEpName'] = isset($data['targetEpName']) ? $data['targetEpName'] : null;
        $this->container['existFailed'] = isset($data['existFailed']) ? $data['existFailed'] : null;
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
    * Gets associated
    *  是否关联迁移
    *
    * @return bool|null
    */
    public function getAssociated()
    {
        return $this->container['associated'];
    }

    /**
    * Sets associated
    *
    * @param bool|null $associated 是否关联迁移
    *
    * @return $this
    */
    public function setAssociated($associated)
    {
        $this->container['associated'] = $associated;
        return $this;
    }

    /**
    * Gets code
    *  响应码
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 响应码
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets message
    *  响应信息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 响应信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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
    *  项目名称
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
    * @param string|null $projectName 项目名称
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
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
    * Gets eventTime
    *  事件时间
    *
    * @return string|null
    */
    public function getEventTime()
    {
        return $this->container['eventTime'];
    }

    /**
    * Sets eventTime
    *
    * @param string|null $eventTime 事件时间
    *
    * @return $this
    */
    public function setEventTime($eventTime)
    {
        $this->container['eventTime'] = $eventTime;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
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
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets operateType
    *  迁移类型
    *
    * @return string|null
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string|null $operateType 迁移类型
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源ID
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源名称
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源名称
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets initiateEpId
    *  发起迁移的企业项目ID
    *
    * @return string|null
    */
    public function getInitiateEpId()
    {
        return $this->container['initiateEpId'];
    }

    /**
    * Sets initiateEpId
    *
    * @param string|null $initiateEpId 发起迁移的企业项目ID
    *
    * @return $this
    */
    public function setInitiateEpId($initiateEpId)
    {
        $this->container['initiateEpId'] = $initiateEpId;
        return $this;
    }

    /**
    * Gets initiateEpName
    *  发起迁移的业项目名称
    *
    * @return string|null
    */
    public function getInitiateEpName()
    {
        return $this->container['initiateEpName'];
    }

    /**
    * Sets initiateEpName
    *
    * @param string|null $initiateEpName 发起迁移的业项目名称
    *
    * @return $this
    */
    public function setInitiateEpName($initiateEpName)
    {
        $this->container['initiateEpName'] = $initiateEpName;
        return $this;
    }

    /**
    * Gets originEpId
    *  源企业项目ID
    *
    * @return string|null
    */
    public function getOriginEpId()
    {
        return $this->container['originEpId'];
    }

    /**
    * Sets originEpId
    *
    * @param string|null $originEpId 源企业项目ID
    *
    * @return $this
    */
    public function setOriginEpId($originEpId)
    {
        $this->container['originEpId'] = $originEpId;
        return $this;
    }

    /**
    * Gets originEpName
    *  源企业项目名称
    *
    * @return string|null
    */
    public function getOriginEpName()
    {
        return $this->container['originEpName'];
    }

    /**
    * Sets originEpName
    *
    * @param string|null $originEpName 源企业项目名称
    *
    * @return $this
    */
    public function setOriginEpName($originEpName)
    {
        $this->container['originEpName'] = $originEpName;
        return $this;
    }

    /**
    * Gets targetEpId
    *  目标企业项目ID
    *
    * @return string|null
    */
    public function getTargetEpId()
    {
        return $this->container['targetEpId'];
    }

    /**
    * Sets targetEpId
    *
    * @param string|null $targetEpId 目标企业项目ID
    *
    * @return $this
    */
    public function setTargetEpId($targetEpId)
    {
        $this->container['targetEpId'] = $targetEpId;
        return $this;
    }

    /**
    * Gets targetEpName
    *  目标企业项目名称
    *
    * @return string|null
    */
    public function getTargetEpName()
    {
        return $this->container['targetEpName'];
    }

    /**
    * Sets targetEpName
    *
    * @param string|null $targetEpName 目标企业项目名称
    *
    * @return $this
    */
    public function setTargetEpName($targetEpName)
    {
        $this->container['targetEpName'] = $targetEpName;
        return $this;
    }

    /**
    * Gets existFailed
    *  是否存在失败
    *
    * @return string|null
    */
    public function getExistFailed()
    {
        return $this->container['existFailed'];
    }

    /**
    * Sets existFailed
    *
    * @param string|null $existFailed 是否存在失败
    *
    * @return $this
    */
    public function setExistFailed($existFailed)
    {
        $this->container['existFailed'] = $existFailed;
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

