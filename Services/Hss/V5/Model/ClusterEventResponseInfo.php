<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterEventResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterEventResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  阻断动作
    * clusterName  集群名称
    * clusterId  集群Id
    * eventName  事件名称
    * eventClassId  事件唯一标识
    * eventId  事件id
    * eventType  事件类型
    * eventContent  事件内容
    * handleStatus  处理状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    * createTime  创建时间
    * updateTime  更新时间
    * projectId  项目ID
    * enterpriseProjectId  企业ID
    * policyName  策略名称
    * policyId  策略ID
    * resourceInfo  resourceInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'clusterName' => 'string',
            'clusterId' => 'string',
            'eventName' => 'string',
            'eventClassId' => 'string',
            'eventId' => 'string',
            'eventType' => 'int',
            'eventContent' => 'string',
            'handleStatus' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'projectId' => 'string',
            'enterpriseProjectId' => 'string',
            'policyName' => 'string',
            'policyId' => 'string',
            'resourceInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ClusterEventResourceResponseInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  阻断动作
    * clusterName  集群名称
    * clusterId  集群Id
    * eventName  事件名称
    * eventClassId  事件唯一标识
    * eventId  事件id
    * eventType  事件类型
    * eventContent  事件内容
    * handleStatus  处理状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    * createTime  创建时间
    * updateTime  更新时间
    * projectId  项目ID
    * enterpriseProjectId  企业ID
    * policyName  策略名称
    * policyId  策略ID
    * resourceInfo  resourceInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'clusterName' => null,
        'clusterId' => null,
        'eventName' => null,
        'eventClassId' => null,
        'eventId' => null,
        'eventType' => null,
        'eventContent' => null,
        'handleStatus' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'projectId' => null,
        'enterpriseProjectId' => null,
        'policyName' => null,
        'policyId' => null,
        'resourceInfo' => null
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
    * action  阻断动作
    * clusterName  集群名称
    * clusterId  集群Id
    * eventName  事件名称
    * eventClassId  事件唯一标识
    * eventId  事件id
    * eventType  事件类型
    * eventContent  事件内容
    * handleStatus  处理状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    * createTime  创建时间
    * updateTime  更新时间
    * projectId  项目ID
    * enterpriseProjectId  企业ID
    * policyName  策略名称
    * policyId  策略ID
    * resourceInfo  resourceInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'clusterName' => 'cluster_name',
            'clusterId' => 'cluster_id',
            'eventName' => 'event_name',
            'eventClassId' => 'event_class_id',
            'eventId' => 'event_id',
            'eventType' => 'event_type',
            'eventContent' => 'event_content',
            'handleStatus' => 'handle_status',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'projectId' => 'project_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'policyName' => 'policy_name',
            'policyId' => 'policy_id',
            'resourceInfo' => 'resource_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  阻断动作
    * clusterName  集群名称
    * clusterId  集群Id
    * eventName  事件名称
    * eventClassId  事件唯一标识
    * eventId  事件id
    * eventType  事件类型
    * eventContent  事件内容
    * handleStatus  处理状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    * createTime  创建时间
    * updateTime  更新时间
    * projectId  项目ID
    * enterpriseProjectId  企业ID
    * policyName  策略名称
    * policyId  策略ID
    * resourceInfo  resourceInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'clusterName' => 'setClusterName',
            'clusterId' => 'setClusterId',
            'eventName' => 'setEventName',
            'eventClassId' => 'setEventClassId',
            'eventId' => 'setEventId',
            'eventType' => 'setEventType',
            'eventContent' => 'setEventContent',
            'handleStatus' => 'setHandleStatus',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'projectId' => 'setProjectId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'policyName' => 'setPolicyName',
            'policyId' => 'setPolicyId',
            'resourceInfo' => 'setResourceInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  阻断动作
    * clusterName  集群名称
    * clusterId  集群Id
    * eventName  事件名称
    * eventClassId  事件唯一标识
    * eventId  事件id
    * eventType  事件类型
    * eventContent  事件内容
    * handleStatus  处理状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    * createTime  创建时间
    * updateTime  更新时间
    * projectId  项目ID
    * enterpriseProjectId  企业ID
    * policyName  策略名称
    * policyId  策略ID
    * resourceInfo  resourceInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'clusterName' => 'getClusterName',
            'clusterId' => 'getClusterId',
            'eventName' => 'getEventName',
            'eventClassId' => 'getEventClassId',
            'eventId' => 'getEventId',
            'eventType' => 'getEventType',
            'eventContent' => 'getEventContent',
            'handleStatus' => 'getHandleStatus',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'projectId' => 'getProjectId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'policyName' => 'getPolicyName',
            'policyId' => 'getPolicyId',
            'resourceInfo' => 'getResourceInfo'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['eventClassId'] = isset($data['eventClassId']) ? $data['eventClassId'] : null;
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['eventContent'] = isset($data['eventContent']) ? $data['eventContent'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['resourceInfo'] = isset($data['resourceInfo']) ? $data['resourceInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) > 32)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) < 1)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['eventName']) && (mb_strlen($this->container['eventName']) > 128)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['eventName']) && (mb_strlen($this->container['eventName']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['eventClassId']) && (mb_strlen($this->container['eventClassId']) > 128)) {
                $invalidProperties[] = "invalid value for 'eventClassId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['eventClassId']) && (mb_strlen($this->container['eventClassId']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventClassId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['eventId']) && (mb_strlen($this->container['eventId']) > 128)) {
                $invalidProperties[] = "invalid value for 'eventId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['eventId']) && (mb_strlen($this->container['eventId']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['eventType']) && ($this->container['eventType'] > 30000)) {
                $invalidProperties[] = "invalid value for 'eventType', must be smaller than or equal to 30000.";
            }
            if (!is_null($this->container['eventType']) && ($this->container['eventType'] < 1000)) {
                $invalidProperties[] = "invalid value for 'eventType', must be bigger than or equal to 1000.";
            }
            if (!is_null($this->container['eventContent']) && (mb_strlen($this->container['eventContent']) > 128)) {
                $invalidProperties[] = "invalid value for 'eventContent', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['eventContent']) && (mb_strlen($this->container['eventContent']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventContent', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 1.";
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
    * Gets action
    *  阻断动作
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 阻断动作
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群Id
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群Id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets eventName
    *  事件名称
    *
    * @return string|null
    */
    public function getEventName()
    {
        return $this->container['eventName'];
    }

    /**
    * Sets eventName
    *
    * @param string|null $eventName 事件名称
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets eventClassId
    *  事件唯一标识
    *
    * @return string|null
    */
    public function getEventClassId()
    {
        return $this->container['eventClassId'];
    }

    /**
    * Sets eventClassId
    *
    * @param string|null $eventClassId 事件唯一标识
    *
    * @return $this
    */
    public function setEventClassId($eventClassId)
    {
        $this->container['eventClassId'] = $eventClassId;
        return $this;
    }

    /**
    * Gets eventId
    *  事件id
    *
    * @return string|null
    */
    public function getEventId()
    {
        return $this->container['eventId'];
    }

    /**
    * Sets eventId
    *
    * @param string|null $eventId 事件id
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
        return $this;
    }

    /**
    * Gets eventType
    *  事件类型
    *
    * @return int|null
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param int|null $eventType 事件类型
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets eventContent
    *  事件内容
    *
    * @return string|null
    */
    public function getEventContent()
    {
        return $this->container['eventContent'];
    }

    /**
    * Sets eventContent
    *
    * @param string|null $eventContent 事件内容
    *
    * @return $this
    */
    public function setEventContent($eventContent)
    {
        $this->container['eventContent'] = $eventContent;
        return $this;
    }

    /**
    * Gets handleStatus
    *  处理状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    *
    * @return string|null
    */
    public function getHandleStatus()
    {
        return $this->container['handleStatus'];
    }

    /**
    * Sets handleStatus
    *
    * @param string|null $handleStatus 处理状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
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
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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
    * Gets enterpriseProjectId
    *  企业ID
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
    * @param string|null $enterpriseProjectId 企业ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets policyName
    *  策略名称
    *
    * @return string|null
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string|null $policyName 策略名称
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets policyId
    *  策略ID
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 策略ID
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets resourceInfo
    *  resourceInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ClusterEventResourceResponseInfo|null
    */
    public function getResourceInfo()
    {
        return $this->container['resourceInfo'];
    }

    /**
    * Sets resourceInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ClusterEventResourceResponseInfo|null $resourceInfo resourceInfo
    *
    * @return $this
    */
    public function setResourceInfo($resourceInfo)
    {
        $this->container['resourceInfo'] = $resourceInfo;
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

