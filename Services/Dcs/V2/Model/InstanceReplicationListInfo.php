<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceReplicationListInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceReplicationListInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * replicationRole  副本角色，取值有： - master：表示主节点。 - slave：表示从节点。
    * replicationIp  副本IP。
    * isReplication  是否是新加副本。
    * replicationId  副本id。
    * nodeId  节点id。
    * status  副本状态。
    * azCode  副本所在的可用区
    * dimensions  副本对应的监控指标维度信息。可用于调用云监控服务的查询监控数据指标相关接口 - 副本的监控维度为多维度，返回数组中包含两个维度信息。从云监控查询监控数据时，要按多维度传递指标维度参数，才能查询到监控指标值 - 第一个维度为副本父维度信息，维度名称为dcs_instance_id，维度值对应副本所在的实例ID - 第二个维度，维度名称为dcs_cluster_redis_node,维度值为副本的监控对象ID，与副本ID和节点ID不同。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'replicationRole' => 'string',
            'replicationIp' => 'string',
            'isReplication' => 'bool',
            'replicationId' => 'string',
            'nodeId' => 'string',
            'status' => 'string',
            'azCode' => 'string',
            'dimensions' => '\HuaweiCloud\SDK\Dcs\V2\Model\InstanceReplicationDimensionsInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * replicationRole  副本角色，取值有： - master：表示主节点。 - slave：表示从节点。
    * replicationIp  副本IP。
    * isReplication  是否是新加副本。
    * replicationId  副本id。
    * nodeId  节点id。
    * status  副本状态。
    * azCode  副本所在的可用区
    * dimensions  副本对应的监控指标维度信息。可用于调用云监控服务的查询监控数据指标相关接口 - 副本的监控维度为多维度，返回数组中包含两个维度信息。从云监控查询监控数据时，要按多维度传递指标维度参数，才能查询到监控指标值 - 第一个维度为副本父维度信息，维度名称为dcs_instance_id，维度值对应副本所在的实例ID - 第二个维度，维度名称为dcs_cluster_redis_node,维度值为副本的监控对象ID，与副本ID和节点ID不同。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'replicationRole' => null,
        'replicationIp' => null,
        'isReplication' => null,
        'replicationId' => null,
        'nodeId' => null,
        'status' => null,
        'azCode' => null,
        'dimensions' => null
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
    * replicationRole  副本角色，取值有： - master：表示主节点。 - slave：表示从节点。
    * replicationIp  副本IP。
    * isReplication  是否是新加副本。
    * replicationId  副本id。
    * nodeId  节点id。
    * status  副本状态。
    * azCode  副本所在的可用区
    * dimensions  副本对应的监控指标维度信息。可用于调用云监控服务的查询监控数据指标相关接口 - 副本的监控维度为多维度，返回数组中包含两个维度信息。从云监控查询监控数据时，要按多维度传递指标维度参数，才能查询到监控指标值 - 第一个维度为副本父维度信息，维度名称为dcs_instance_id，维度值对应副本所在的实例ID - 第二个维度，维度名称为dcs_cluster_redis_node,维度值为副本的监控对象ID，与副本ID和节点ID不同。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'replicationRole' => 'replication_role',
            'replicationIp' => 'replication_ip',
            'isReplication' => 'is_replication',
            'replicationId' => 'replication_id',
            'nodeId' => 'node_id',
            'status' => 'status',
            'azCode' => 'az_code',
            'dimensions' => 'dimensions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * replicationRole  副本角色，取值有： - master：表示主节点。 - slave：表示从节点。
    * replicationIp  副本IP。
    * isReplication  是否是新加副本。
    * replicationId  副本id。
    * nodeId  节点id。
    * status  副本状态。
    * azCode  副本所在的可用区
    * dimensions  副本对应的监控指标维度信息。可用于调用云监控服务的查询监控数据指标相关接口 - 副本的监控维度为多维度，返回数组中包含两个维度信息。从云监控查询监控数据时，要按多维度传递指标维度参数，才能查询到监控指标值 - 第一个维度为副本父维度信息，维度名称为dcs_instance_id，维度值对应副本所在的实例ID - 第二个维度，维度名称为dcs_cluster_redis_node,维度值为副本的监控对象ID，与副本ID和节点ID不同。
    *
    * @var string[]
    */
    protected static $setters = [
            'replicationRole' => 'setReplicationRole',
            'replicationIp' => 'setReplicationIp',
            'isReplication' => 'setIsReplication',
            'replicationId' => 'setReplicationId',
            'nodeId' => 'setNodeId',
            'status' => 'setStatus',
            'azCode' => 'setAzCode',
            'dimensions' => 'setDimensions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * replicationRole  副本角色，取值有： - master：表示主节点。 - slave：表示从节点。
    * replicationIp  副本IP。
    * isReplication  是否是新加副本。
    * replicationId  副本id。
    * nodeId  节点id。
    * status  副本状态。
    * azCode  副本所在的可用区
    * dimensions  副本对应的监控指标维度信息。可用于调用云监控服务的查询监控数据指标相关接口 - 副本的监控维度为多维度，返回数组中包含两个维度信息。从云监控查询监控数据时，要按多维度传递指标维度参数，才能查询到监控指标值 - 第一个维度为副本父维度信息，维度名称为dcs_instance_id，维度值对应副本所在的实例ID - 第二个维度，维度名称为dcs_cluster_redis_node,维度值为副本的监控对象ID，与副本ID和节点ID不同。
    *
    * @var string[]
    */
    protected static $getters = [
            'replicationRole' => 'getReplicationRole',
            'replicationIp' => 'getReplicationIp',
            'isReplication' => 'getIsReplication',
            'replicationId' => 'getReplicationId',
            'nodeId' => 'getNodeId',
            'status' => 'getStatus',
            'azCode' => 'getAzCode',
            'dimensions' => 'getDimensions'
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
    const STATUS_ACTIVE = 'Active';
    const STATUS_INACTIVE = 'Inactive';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_INACTIVE,
        ];
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
        $this->container['replicationRole'] = isset($data['replicationRole']) ? $data['replicationRole'] : null;
        $this->container['replicationIp'] = isset($data['replicationIp']) ? $data['replicationIp'] : null;
        $this->container['isReplication'] = isset($data['isReplication']) ? $data['isReplication'] : null;
        $this->container['replicationId'] = isset($data['replicationId']) ? $data['replicationId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets replicationRole
    *  副本角色，取值有： - master：表示主节点。 - slave：表示从节点。
    *
    * @return string|null
    */
    public function getReplicationRole()
    {
        return $this->container['replicationRole'];
    }

    /**
    * Sets replicationRole
    *
    * @param string|null $replicationRole 副本角色，取值有： - master：表示主节点。 - slave：表示从节点。
    *
    * @return $this
    */
    public function setReplicationRole($replicationRole)
    {
        $this->container['replicationRole'] = $replicationRole;
        return $this;
    }

    /**
    * Gets replicationIp
    *  副本IP。
    *
    * @return string|null
    */
    public function getReplicationIp()
    {
        return $this->container['replicationIp'];
    }

    /**
    * Sets replicationIp
    *
    * @param string|null $replicationIp 副本IP。
    *
    * @return $this
    */
    public function setReplicationIp($replicationIp)
    {
        $this->container['replicationIp'] = $replicationIp;
        return $this;
    }

    /**
    * Gets isReplication
    *  是否是新加副本。
    *
    * @return bool|null
    */
    public function getIsReplication()
    {
        return $this->container['isReplication'];
    }

    /**
    * Sets isReplication
    *
    * @param bool|null $isReplication 是否是新加副本。
    *
    * @return $this
    */
    public function setIsReplication($isReplication)
    {
        $this->container['isReplication'] = $isReplication;
        return $this;
    }

    /**
    * Gets replicationId
    *  副本id。
    *
    * @return string|null
    */
    public function getReplicationId()
    {
        return $this->container['replicationId'];
    }

    /**
    * Sets replicationId
    *
    * @param string|null $replicationId 副本id。
    *
    * @return $this
    */
    public function setReplicationId($replicationId)
    {
        $this->container['replicationId'] = $replicationId;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点id。
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点id。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets status
    *  副本状态。
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
    * @param string|null $status 副本状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets azCode
    *  副本所在的可用区
    *
    * @return string|null
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string|null $azCode 副本所在的可用区
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets dimensions
    *  副本对应的监控指标维度信息。可用于调用云监控服务的查询监控数据指标相关接口 - 副本的监控维度为多维度，返回数组中包含两个维度信息。从云监控查询监控数据时，要按多维度传递指标维度参数，才能查询到监控指标值 - 第一个维度为副本父维度信息，维度名称为dcs_instance_id，维度值对应副本所在的实例ID - 第二个维度，维度名称为dcs_cluster_redis_node,维度值为副本的监控对象ID，与副本ID和节点ID不同。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\InstanceReplicationDimensionsInfo[]|null
    */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
    * Sets dimensions
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\InstanceReplicationDimensionsInfo[]|null $dimensions 副本对应的监控指标维度信息。可用于调用云监控服务的查询监控数据指标相关接口 - 副本的监控维度为多维度，返回数组中包含两个维度信息。从云监控查询监控数据时，要按多维度传递指标维度参数，才能查询到监控指标值 - 第一个维度为副本父维度信息，维度名称为dcs_instance_id，维度值对应副本所在的实例ID - 第二个维度，维度名称为dcs_cluster_redis_node,维度值为副本的监控对象ID，与副本ID和节点ID不同。
    *
    * @return $this
    */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;
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

