<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogicalClusterPlanBo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogicalClusterPlanBo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logicalClusterName  逻辑集群名字
    * user  逻辑集群绑定的用户，若绑定了主逻辑集群，不能绑定用户
    * nodeNum  逻辑集群节点的个数
    * mainLogicalCluster  逻辑集群的绑定的主逻辑集群，若绑定了用户，不能绑定主逻辑集群
    * planType  计划类型，取值范围为(once|periodicity)
    * startTime  逻辑集群定时增删计划起始时间
    * endTime  逻辑集群定时增删计划终止时间
    * actions  逻辑集群定时增删计划细节
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logicalClusterName' => 'string',
            'user' => 'string',
            'nodeNum' => 'int',
            'mainLogicalCluster' => 'string',
            'planType' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'actions' => '\HuaweiCloud\SDK\Dws\V2\Model\LogicalClusterPlanActionsParam[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logicalClusterName  逻辑集群名字
    * user  逻辑集群绑定的用户，若绑定了主逻辑集群，不能绑定用户
    * nodeNum  逻辑集群节点的个数
    * mainLogicalCluster  逻辑集群的绑定的主逻辑集群，若绑定了用户，不能绑定主逻辑集群
    * planType  计划类型，取值范围为(once|periodicity)
    * startTime  逻辑集群定时增删计划起始时间
    * endTime  逻辑集群定时增删计划终止时间
    * actions  逻辑集群定时增删计划细节
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logicalClusterName' => null,
        'user' => null,
        'nodeNum' => 'int32',
        'mainLogicalCluster' => null,
        'planType' => null,
        'startTime' => null,
        'endTime' => null,
        'actions' => null
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
    * logicalClusterName  逻辑集群名字
    * user  逻辑集群绑定的用户，若绑定了主逻辑集群，不能绑定用户
    * nodeNum  逻辑集群节点的个数
    * mainLogicalCluster  逻辑集群的绑定的主逻辑集群，若绑定了用户，不能绑定主逻辑集群
    * planType  计划类型，取值范围为(once|periodicity)
    * startTime  逻辑集群定时增删计划起始时间
    * endTime  逻辑集群定时增删计划终止时间
    * actions  逻辑集群定时增删计划细节
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logicalClusterName' => 'logical_cluster_name',
            'user' => 'user',
            'nodeNum' => 'node_num',
            'mainLogicalCluster' => 'main_logical_cluster',
            'planType' => 'plan_type',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'actions' => 'actions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logicalClusterName  逻辑集群名字
    * user  逻辑集群绑定的用户，若绑定了主逻辑集群，不能绑定用户
    * nodeNum  逻辑集群节点的个数
    * mainLogicalCluster  逻辑集群的绑定的主逻辑集群，若绑定了用户，不能绑定主逻辑集群
    * planType  计划类型，取值范围为(once|periodicity)
    * startTime  逻辑集群定时增删计划起始时间
    * endTime  逻辑集群定时增删计划终止时间
    * actions  逻辑集群定时增删计划细节
    *
    * @var string[]
    */
    protected static $setters = [
            'logicalClusterName' => 'setLogicalClusterName',
            'user' => 'setUser',
            'nodeNum' => 'setNodeNum',
            'mainLogicalCluster' => 'setMainLogicalCluster',
            'planType' => 'setPlanType',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'actions' => 'setActions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logicalClusterName  逻辑集群名字
    * user  逻辑集群绑定的用户，若绑定了主逻辑集群，不能绑定用户
    * nodeNum  逻辑集群节点的个数
    * mainLogicalCluster  逻辑集群的绑定的主逻辑集群，若绑定了用户，不能绑定主逻辑集群
    * planType  计划类型，取值范围为(once|periodicity)
    * startTime  逻辑集群定时增删计划起始时间
    * endTime  逻辑集群定时增删计划终止时间
    * actions  逻辑集群定时增删计划细节
    *
    * @var string[]
    */
    protected static $getters = [
            'logicalClusterName' => 'getLogicalClusterName',
            'user' => 'getUser',
            'nodeNum' => 'getNodeNum',
            'mainLogicalCluster' => 'getMainLogicalCluster',
            'planType' => 'getPlanType',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'actions' => 'getActions'
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
        $this->container['logicalClusterName'] = isset($data['logicalClusterName']) ? $data['logicalClusterName'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['mainLogicalCluster'] = isset($data['mainLogicalCluster']) ? $data['mainLogicalCluster'] : null;
        $this->container['planType'] = isset($data['planType']) ? $data['planType'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['planType'] === null) {
            $invalidProperties[] = "'planType' can't be null";
        }
        if ($this->container['actions'] === null) {
            $invalidProperties[] = "'actions' can't be null";
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
    * Gets logicalClusterName
    *  逻辑集群名字
    *
    * @return string|null
    */
    public function getLogicalClusterName()
    {
        return $this->container['logicalClusterName'];
    }

    /**
    * Sets logicalClusterName
    *
    * @param string|null $logicalClusterName 逻辑集群名字
    *
    * @return $this
    */
    public function setLogicalClusterName($logicalClusterName)
    {
        $this->container['logicalClusterName'] = $logicalClusterName;
        return $this;
    }

    /**
    * Gets user
    *  逻辑集群绑定的用户，若绑定了主逻辑集群，不能绑定用户
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user 逻辑集群绑定的用户，若绑定了主逻辑集群，不能绑定用户
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets nodeNum
    *  逻辑集群节点的个数
    *
    * @return int|null
    */
    public function getNodeNum()
    {
        return $this->container['nodeNum'];
    }

    /**
    * Sets nodeNum
    *
    * @param int|null $nodeNum 逻辑集群节点的个数
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets mainLogicalCluster
    *  逻辑集群的绑定的主逻辑集群，若绑定了用户，不能绑定主逻辑集群
    *
    * @return string|null
    */
    public function getMainLogicalCluster()
    {
        return $this->container['mainLogicalCluster'];
    }

    /**
    * Sets mainLogicalCluster
    *
    * @param string|null $mainLogicalCluster 逻辑集群的绑定的主逻辑集群，若绑定了用户，不能绑定主逻辑集群
    *
    * @return $this
    */
    public function setMainLogicalCluster($mainLogicalCluster)
    {
        $this->container['mainLogicalCluster'] = $mainLogicalCluster;
        return $this;
    }

    /**
    * Gets planType
    *  计划类型，取值范围为(once|periodicity)
    *
    * @return string
    */
    public function getPlanType()
    {
        return $this->container['planType'];
    }

    /**
    * Sets planType
    *
    * @param string $planType 计划类型，取值范围为(once|periodicity)
    *
    * @return $this
    */
    public function setPlanType($planType)
    {
        $this->container['planType'] = $planType;
        return $this;
    }

    /**
    * Gets startTime
    *  逻辑集群定时增删计划起始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 逻辑集群定时增删计划起始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  逻辑集群定时增删计划终止时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 逻辑集群定时增删计划终止时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets actions
    *  逻辑集群定时增删计划细节
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\LogicalClusterPlanActionsParam[]
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\LogicalClusterPlanActionsParam[] $actions 逻辑集群定时增删计划细节
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
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

