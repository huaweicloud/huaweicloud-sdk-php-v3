<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueueSrcAssignEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueueSrcAssignEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  队列资源id。
    * sourceType  队列资源服务名称。
    * queueName  队列名称。
    * queueType  队列类型。
    * queueAttr  队列属性(0:默认,1:实时队列,2:离线队列), 当前只有yarn队列涉及。
    * connId  数据连接id。
    * connName  数据连接名称。
    * clusterId  集群id。
    * clusterName  集群名称。
    * createTime  队列加入此空间的时间。
    * createUser  队列加入此的操作人。
    * updateTime  当前空间下管理的队列更新时间。
    * updateUser  当前空间下管理的队列更新人。
    * projectId  项目id。
    * description  当前空间分配资源附加的描述信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'sourceType' => 'string',
            'queueName' => 'string',
            'queueType' => 'string',
            'queueAttr' => 'int',
            'connId' => 'string',
            'connName' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'createTime' => 'int',
            'createUser' => 'string',
            'updateTime' => 'int',
            'updateUser' => 'string',
            'projectId' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  队列资源id。
    * sourceType  队列资源服务名称。
    * queueName  队列名称。
    * queueType  队列类型。
    * queueAttr  队列属性(0:默认,1:实时队列,2:离线队列), 当前只有yarn队列涉及。
    * connId  数据连接id。
    * connName  数据连接名称。
    * clusterId  集群id。
    * clusterName  集群名称。
    * createTime  队列加入此空间的时间。
    * createUser  队列加入此的操作人。
    * updateTime  当前空间下管理的队列更新时间。
    * updateUser  当前空间下管理的队列更新人。
    * projectId  项目id。
    * description  当前空间分配资源附加的描述信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'sourceType' => null,
        'queueName' => null,
        'queueType' => null,
        'queueAttr' => 'int32',
        'connId' => null,
        'connName' => null,
        'clusterId' => null,
        'clusterName' => null,
        'createTime' => 'int64',
        'createUser' => null,
        'updateTime' => 'int64',
        'updateUser' => null,
        'projectId' => null,
        'description' => null
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
    * id  队列资源id。
    * sourceType  队列资源服务名称。
    * queueName  队列名称。
    * queueType  队列类型。
    * queueAttr  队列属性(0:默认,1:实时队列,2:离线队列), 当前只有yarn队列涉及。
    * connId  数据连接id。
    * connName  数据连接名称。
    * clusterId  集群id。
    * clusterName  集群名称。
    * createTime  队列加入此空间的时间。
    * createUser  队列加入此的操作人。
    * updateTime  当前空间下管理的队列更新时间。
    * updateUser  当前空间下管理的队列更新人。
    * projectId  项目id。
    * description  当前空间分配资源附加的描述信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'sourceType' => 'source_type',
            'queueName' => 'queue_name',
            'queueType' => 'queue_type',
            'queueAttr' => 'queue_attr',
            'connId' => 'conn_id',
            'connName' => 'conn_name',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'createTime' => 'create_time',
            'createUser' => 'create_user',
            'updateTime' => 'update_time',
            'updateUser' => 'update_user',
            'projectId' => 'project_id',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  队列资源id。
    * sourceType  队列资源服务名称。
    * queueName  队列名称。
    * queueType  队列类型。
    * queueAttr  队列属性(0:默认,1:实时队列,2:离线队列), 当前只有yarn队列涉及。
    * connId  数据连接id。
    * connName  数据连接名称。
    * clusterId  集群id。
    * clusterName  集群名称。
    * createTime  队列加入此空间的时间。
    * createUser  队列加入此的操作人。
    * updateTime  当前空间下管理的队列更新时间。
    * updateUser  当前空间下管理的队列更新人。
    * projectId  项目id。
    * description  当前空间分配资源附加的描述信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'sourceType' => 'setSourceType',
            'queueName' => 'setQueueName',
            'queueType' => 'setQueueType',
            'queueAttr' => 'setQueueAttr',
            'connId' => 'setConnId',
            'connName' => 'setConnName',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'createTime' => 'setCreateTime',
            'createUser' => 'setCreateUser',
            'updateTime' => 'setUpdateTime',
            'updateUser' => 'setUpdateUser',
            'projectId' => 'setProjectId',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  队列资源id。
    * sourceType  队列资源服务名称。
    * queueName  队列名称。
    * queueType  队列类型。
    * queueAttr  队列属性(0:默认,1:实时队列,2:离线队列), 当前只有yarn队列涉及。
    * connId  数据连接id。
    * connName  数据连接名称。
    * clusterId  集群id。
    * clusterName  集群名称。
    * createTime  队列加入此空间的时间。
    * createUser  队列加入此的操作人。
    * updateTime  当前空间下管理的队列更新时间。
    * updateUser  当前空间下管理的队列更新人。
    * projectId  项目id。
    * description  当前空间分配资源附加的描述信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'sourceType' => 'getSourceType',
            'queueName' => 'getQueueName',
            'queueType' => 'getQueueType',
            'queueAttr' => 'getQueueAttr',
            'connId' => 'getConnId',
            'connName' => 'getConnName',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'createTime' => 'getCreateTime',
            'createUser' => 'getCreateUser',
            'updateTime' => 'getUpdateTime',
            'updateUser' => 'getUpdateUser',
            'projectId' => 'getProjectId',
            'description' => 'getDescription'
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
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['queueType'] = isset($data['queueType']) ? $data['queueType'] : null;
        $this->container['queueAttr'] = isset($data['queueAttr']) ? $data['queueAttr'] : null;
        $this->container['connId'] = isset($data['connId']) ? $data['connId'] : null;
        $this->container['connName'] = isset($data['connName']) ? $data['connName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceType']) && (mb_strlen($this->container['sourceType']) > 32)) {
                $invalidProperties[] = "invalid value for 'sourceType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sourceType']) && (mb_strlen($this->container['sourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['queueName']) && (mb_strlen($this->container['queueName']) > 128)) {
                $invalidProperties[] = "invalid value for 'queueName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['queueName']) && (mb_strlen($this->container['queueName']) < 0)) {
                $invalidProperties[] = "invalid value for 'queueName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['queueType']) && (mb_strlen($this->container['queueType']) > 32)) {
                $invalidProperties[] = "invalid value for 'queueType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['queueType']) && (mb_strlen($this->container['queueType']) < 0)) {
                $invalidProperties[] = "invalid value for 'queueType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['queueAttr']) && ($this->container['queueAttr'] > 127)) {
                $invalidProperties[] = "invalid value for 'queueAttr', must be smaller than or equal to 127.";
            }
            if (!is_null($this->container['queueAttr']) && ($this->container['queueAttr'] < 0)) {
                $invalidProperties[] = "invalid value for 'queueAttr', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['connId']) && (mb_strlen($this->container['connId']) > 64)) {
                $invalidProperties[] = "invalid value for 'connId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['connId']) && (mb_strlen($this->container['connId']) < 1)) {
                $invalidProperties[] = "invalid value for 'connId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['connName']) && (mb_strlen($this->container['connName']) > 128)) {
                $invalidProperties[] = "invalid value for 'connName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['connName']) && (mb_strlen($this->container['connName']) < 1)) {
                $invalidProperties[] = "invalid value for 'connName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 4070880010000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 4070880010000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createUser']) && (mb_strlen($this->container['createUser']) > 256)) {
                $invalidProperties[] = "invalid value for 'createUser', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['createUser']) && (mb_strlen($this->container['createUser']) < 0)) {
                $invalidProperties[] = "invalid value for 'createUser', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 4070880010000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 4070880010000.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateUser']) && (mb_strlen($this->container['updateUser']) > 256)) {
                $invalidProperties[] = "invalid value for 'updateUser', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['updateUser']) && (mb_strlen($this->container['updateUser']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateUser', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 4096)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    *  队列资源id。
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
    * @param string|null $id 队列资源id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets sourceType
    *  队列资源服务名称。
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType 队列资源服务名称。
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets queueName
    *  队列名称。
    *
    * @return string|null
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string|null $queueName 队列名称。
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets queueType
    *  队列类型。
    *
    * @return string|null
    */
    public function getQueueType()
    {
        return $this->container['queueType'];
    }

    /**
    * Sets queueType
    *
    * @param string|null $queueType 队列类型。
    *
    * @return $this
    */
    public function setQueueType($queueType)
    {
        $this->container['queueType'] = $queueType;
        return $this;
    }

    /**
    * Gets queueAttr
    *  队列属性(0:默认,1:实时队列,2:离线队列), 当前只有yarn队列涉及。
    *
    * @return int|null
    */
    public function getQueueAttr()
    {
        return $this->container['queueAttr'];
    }

    /**
    * Sets queueAttr
    *
    * @param int|null $queueAttr 队列属性(0:默认,1:实时队列,2:离线队列), 当前只有yarn队列涉及。
    *
    * @return $this
    */
    public function setQueueAttr($queueAttr)
    {
        $this->container['queueAttr'] = $queueAttr;
        return $this;
    }

    /**
    * Gets connId
    *  数据连接id。
    *
    * @return string|null
    */
    public function getConnId()
    {
        return $this->container['connId'];
    }

    /**
    * Sets connId
    *
    * @param string|null $connId 数据连接id。
    *
    * @return $this
    */
    public function setConnId($connId)
    {
        $this->container['connId'] = $connId;
        return $this;
    }

    /**
    * Gets connName
    *  数据连接名称。
    *
    * @return string|null
    */
    public function getConnName()
    {
        return $this->container['connName'];
    }

    /**
    * Sets connName
    *
    * @param string|null $connName 数据连接名称。
    *
    * @return $this
    */
    public function setConnName($connName)
    {
        $this->container['connName'] = $connName;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群id。
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
    * @param string|null $clusterId 集群id。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称。
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
    * @param string|null $clusterName 集群名称。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets createTime
    *  队列加入此空间的时间。
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
    * @param int|null $createTime 队列加入此空间的时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets createUser
    *  队列加入此的操作人。
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 队列加入此的操作人。
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets updateTime
    *  当前空间下管理的队列更新时间。
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
    * @param int|null $updateTime 当前空间下管理的队列更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateUser
    *  当前空间下管理的队列更新人。
    *
    * @return string|null
    */
    public function getUpdateUser()
    {
        return $this->container['updateUser'];
    }

    /**
    * Sets updateUser
    *
    * @param string|null $updateUser 当前空间下管理的队列更新人。
    *
    * @return $this
    */
    public function setUpdateUser($updateUser)
    {
        $this->container['updateUser'] = $updateUser;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id。
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
    * @param string|null $projectId 项目id。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets description
    *  当前空间分配资源附加的描述信息。
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
    * @param string|null $description 当前空间分配资源附加的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

