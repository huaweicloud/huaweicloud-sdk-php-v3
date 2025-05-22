<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogicalClusterInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogicalClusterInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logicalClusterId  **参数解释**： 逻辑集群ID。 **取值范围**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
    * clusterRings  **参数解释**： 逻辑集群主机信息。 **取值范围**： 不涉及。
    * status  **参数解释**： 逻辑集群状态。 **取值范围**： 不涉及。
    * firstLogicalCluster  **参数解释**： 是否为第一个逻辑集群。历史版本中第1个创建或者转换的逻辑集群不能删除，因为其中包含了一些系统视图。 **取值范围**： 不涉及。
    * actionInfo  actionInfo
    * editEnable  **参数解释**： 是否允许编辑。 **取值范围**： 不涉及。
    * restartEnable  **参数解释**： 是否允许重启。 **取值范围**： 不涉及。
    * deleteEnable  **参数解释**： 是否允许删除。 **取值范围**： 不涉及。
    * addToElastic  **参数解释**： 是否允许弹性伸缩。 **取值范围**： 不涉及。
    * mode  **参数解释**： 逻辑集群模式。 **取值范围**： 不涉及。
    * waitingForKilling  **参数解释**： 作业等待时间。 **取值范围**： 不涉及。
    * clusterType  **参数解释**： 集群类型。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logicalClusterId' => 'string',
            'logicalClusterName' => 'string',
            'clusterRings' => '\HuaweiCloud\SDK\Dws\V2\Model\ClusterRing[]',
            'status' => 'string',
            'firstLogicalCluster' => 'bool',
            'actionInfo' => '\HuaweiCloud\SDK\Dws\V2\Model\ActionInfo',
            'editEnable' => 'bool',
            'restartEnable' => 'bool',
            'deleteEnable' => 'bool',
            'addToElastic' => 'bool',
            'mode' => 'string',
            'waitingForKilling' => 'int',
            'clusterType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logicalClusterId  **参数解释**： 逻辑集群ID。 **取值范围**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
    * clusterRings  **参数解释**： 逻辑集群主机信息。 **取值范围**： 不涉及。
    * status  **参数解释**： 逻辑集群状态。 **取值范围**： 不涉及。
    * firstLogicalCluster  **参数解释**： 是否为第一个逻辑集群。历史版本中第1个创建或者转换的逻辑集群不能删除，因为其中包含了一些系统视图。 **取值范围**： 不涉及。
    * actionInfo  actionInfo
    * editEnable  **参数解释**： 是否允许编辑。 **取值范围**： 不涉及。
    * restartEnable  **参数解释**： 是否允许重启。 **取值范围**： 不涉及。
    * deleteEnable  **参数解释**： 是否允许删除。 **取值范围**： 不涉及。
    * addToElastic  **参数解释**： 是否允许弹性伸缩。 **取值范围**： 不涉及。
    * mode  **参数解释**： 逻辑集群模式。 **取值范围**： 不涉及。
    * waitingForKilling  **参数解释**： 作业等待时间。 **取值范围**： 不涉及。
    * clusterType  **参数解释**： 集群类型。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logicalClusterId' => null,
        'logicalClusterName' => null,
        'clusterRings' => null,
        'status' => null,
        'firstLogicalCluster' => null,
        'actionInfo' => null,
        'editEnable' => null,
        'restartEnable' => null,
        'deleteEnable' => null,
        'addToElastic' => null,
        'mode' => null,
        'waitingForKilling' => null,
        'clusterType' => null
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
    * logicalClusterId  **参数解释**： 逻辑集群ID。 **取值范围**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
    * clusterRings  **参数解释**： 逻辑集群主机信息。 **取值范围**： 不涉及。
    * status  **参数解释**： 逻辑集群状态。 **取值范围**： 不涉及。
    * firstLogicalCluster  **参数解释**： 是否为第一个逻辑集群。历史版本中第1个创建或者转换的逻辑集群不能删除，因为其中包含了一些系统视图。 **取值范围**： 不涉及。
    * actionInfo  actionInfo
    * editEnable  **参数解释**： 是否允许编辑。 **取值范围**： 不涉及。
    * restartEnable  **参数解释**： 是否允许重启。 **取值范围**： 不涉及。
    * deleteEnable  **参数解释**： 是否允许删除。 **取值范围**： 不涉及。
    * addToElastic  **参数解释**： 是否允许弹性伸缩。 **取值范围**： 不涉及。
    * mode  **参数解释**： 逻辑集群模式。 **取值范围**： 不涉及。
    * waitingForKilling  **参数解释**： 作业等待时间。 **取值范围**： 不涉及。
    * clusterType  **参数解释**： 集群类型。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logicalClusterId' => 'logical_cluster_id',
            'logicalClusterName' => 'logical_cluster_name',
            'clusterRings' => 'cluster_rings',
            'status' => 'status',
            'firstLogicalCluster' => 'first_logical_cluster',
            'actionInfo' => 'action_info',
            'editEnable' => 'edit_enable',
            'restartEnable' => 'restart_enable',
            'deleteEnable' => 'delete_enable',
            'addToElastic' => 'add_to_elastic',
            'mode' => 'mode',
            'waitingForKilling' => 'waiting_for_killing',
            'clusterType' => 'cluster_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logicalClusterId  **参数解释**： 逻辑集群ID。 **取值范围**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
    * clusterRings  **参数解释**： 逻辑集群主机信息。 **取值范围**： 不涉及。
    * status  **参数解释**： 逻辑集群状态。 **取值范围**： 不涉及。
    * firstLogicalCluster  **参数解释**： 是否为第一个逻辑集群。历史版本中第1个创建或者转换的逻辑集群不能删除，因为其中包含了一些系统视图。 **取值范围**： 不涉及。
    * actionInfo  actionInfo
    * editEnable  **参数解释**： 是否允许编辑。 **取值范围**： 不涉及。
    * restartEnable  **参数解释**： 是否允许重启。 **取值范围**： 不涉及。
    * deleteEnable  **参数解释**： 是否允许删除。 **取值范围**： 不涉及。
    * addToElastic  **参数解释**： 是否允许弹性伸缩。 **取值范围**： 不涉及。
    * mode  **参数解释**： 逻辑集群模式。 **取值范围**： 不涉及。
    * waitingForKilling  **参数解释**： 作业等待时间。 **取值范围**： 不涉及。
    * clusterType  **参数解释**： 集群类型。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'logicalClusterId' => 'setLogicalClusterId',
            'logicalClusterName' => 'setLogicalClusterName',
            'clusterRings' => 'setClusterRings',
            'status' => 'setStatus',
            'firstLogicalCluster' => 'setFirstLogicalCluster',
            'actionInfo' => 'setActionInfo',
            'editEnable' => 'setEditEnable',
            'restartEnable' => 'setRestartEnable',
            'deleteEnable' => 'setDeleteEnable',
            'addToElastic' => 'setAddToElastic',
            'mode' => 'setMode',
            'waitingForKilling' => 'setWaitingForKilling',
            'clusterType' => 'setClusterType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logicalClusterId  **参数解释**： 逻辑集群ID。 **取值范围**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
    * clusterRings  **参数解释**： 逻辑集群主机信息。 **取值范围**： 不涉及。
    * status  **参数解释**： 逻辑集群状态。 **取值范围**： 不涉及。
    * firstLogicalCluster  **参数解释**： 是否为第一个逻辑集群。历史版本中第1个创建或者转换的逻辑集群不能删除，因为其中包含了一些系统视图。 **取值范围**： 不涉及。
    * actionInfo  actionInfo
    * editEnable  **参数解释**： 是否允许编辑。 **取值范围**： 不涉及。
    * restartEnable  **参数解释**： 是否允许重启。 **取值范围**： 不涉及。
    * deleteEnable  **参数解释**： 是否允许删除。 **取值范围**： 不涉及。
    * addToElastic  **参数解释**： 是否允许弹性伸缩。 **取值范围**： 不涉及。
    * mode  **参数解释**： 逻辑集群模式。 **取值范围**： 不涉及。
    * waitingForKilling  **参数解释**： 作业等待时间。 **取值范围**： 不涉及。
    * clusterType  **参数解释**： 集群类型。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'logicalClusterId' => 'getLogicalClusterId',
            'logicalClusterName' => 'getLogicalClusterName',
            'clusterRings' => 'getClusterRings',
            'status' => 'getStatus',
            'firstLogicalCluster' => 'getFirstLogicalCluster',
            'actionInfo' => 'getActionInfo',
            'editEnable' => 'getEditEnable',
            'restartEnable' => 'getRestartEnable',
            'deleteEnable' => 'getDeleteEnable',
            'addToElastic' => 'getAddToElastic',
            'mode' => 'getMode',
            'waitingForKilling' => 'getWaitingForKilling',
            'clusterType' => 'getClusterType'
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
        $this->container['logicalClusterId'] = isset($data['logicalClusterId']) ? $data['logicalClusterId'] : null;
        $this->container['logicalClusterName'] = isset($data['logicalClusterName']) ? $data['logicalClusterName'] : null;
        $this->container['clusterRings'] = isset($data['clusterRings']) ? $data['clusterRings'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['firstLogicalCluster'] = isset($data['firstLogicalCluster']) ? $data['firstLogicalCluster'] : null;
        $this->container['actionInfo'] = isset($data['actionInfo']) ? $data['actionInfo'] : null;
        $this->container['editEnable'] = isset($data['editEnable']) ? $data['editEnable'] : null;
        $this->container['restartEnable'] = isset($data['restartEnable']) ? $data['restartEnable'] : null;
        $this->container['deleteEnable'] = isset($data['deleteEnable']) ? $data['deleteEnable'] : null;
        $this->container['addToElastic'] = isset($data['addToElastic']) ? $data['addToElastic'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['waitingForKilling'] = isset($data['waitingForKilling']) ? $data['waitingForKilling'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
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
    * Gets logicalClusterId
    *  **参数解释**： 逻辑集群ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLogicalClusterId()
    {
        return $this->container['logicalClusterId'];
    }

    /**
    * Sets logicalClusterId
    *
    * @param string|null $logicalClusterId **参数解释**： 逻辑集群ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLogicalClusterId($logicalClusterId)
    {
        $this->container['logicalClusterId'] = $logicalClusterId;
        return $this;
    }

    /**
    * Gets logicalClusterName
    *  **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
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
    * @param string|null $logicalClusterName **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLogicalClusterName($logicalClusterName)
    {
        $this->container['logicalClusterName'] = $logicalClusterName;
        return $this;
    }

    /**
    * Gets clusterRings
    *  **参数解释**： 逻辑集群主机信息。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ClusterRing[]|null
    */
    public function getClusterRings()
    {
        return $this->container['clusterRings'];
    }

    /**
    * Sets clusterRings
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ClusterRing[]|null $clusterRings **参数解释**： 逻辑集群主机信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClusterRings($clusterRings)
    {
        $this->container['clusterRings'] = $clusterRings;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 逻辑集群状态。 **取值范围**： 不涉及。
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
    * @param string|null $status **参数解释**： 逻辑集群状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets firstLogicalCluster
    *  **参数解释**： 是否为第一个逻辑集群。历史版本中第1个创建或者转换的逻辑集群不能删除，因为其中包含了一些系统视图。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getFirstLogicalCluster()
    {
        return $this->container['firstLogicalCluster'];
    }

    /**
    * Sets firstLogicalCluster
    *
    * @param bool|null $firstLogicalCluster **参数解释**： 是否为第一个逻辑集群。历史版本中第1个创建或者转换的逻辑集群不能删除，因为其中包含了一些系统视图。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFirstLogicalCluster($firstLogicalCluster)
    {
        $this->container['firstLogicalCluster'] = $firstLogicalCluster;
        return $this;
    }

    /**
    * Gets actionInfo
    *  actionInfo
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ActionInfo|null
    */
    public function getActionInfo()
    {
        return $this->container['actionInfo'];
    }

    /**
    * Sets actionInfo
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ActionInfo|null $actionInfo actionInfo
    *
    * @return $this
    */
    public function setActionInfo($actionInfo)
    {
        $this->container['actionInfo'] = $actionInfo;
        return $this;
    }

    /**
    * Gets editEnable
    *  **参数解释**： 是否允许编辑。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getEditEnable()
    {
        return $this->container['editEnable'];
    }

    /**
    * Sets editEnable
    *
    * @param bool|null $editEnable **参数解释**： 是否允许编辑。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEditEnable($editEnable)
    {
        $this->container['editEnable'] = $editEnable;
        return $this;
    }

    /**
    * Gets restartEnable
    *  **参数解释**： 是否允许重启。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getRestartEnable()
    {
        return $this->container['restartEnable'];
    }

    /**
    * Sets restartEnable
    *
    * @param bool|null $restartEnable **参数解释**： 是否允许重启。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRestartEnable($restartEnable)
    {
        $this->container['restartEnable'] = $restartEnable;
        return $this;
    }

    /**
    * Gets deleteEnable
    *  **参数解释**： 是否允许删除。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getDeleteEnable()
    {
        return $this->container['deleteEnable'];
    }

    /**
    * Sets deleteEnable
    *
    * @param bool|null $deleteEnable **参数解释**： 是否允许删除。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDeleteEnable($deleteEnable)
    {
        $this->container['deleteEnable'] = $deleteEnable;
        return $this;
    }

    /**
    * Gets addToElastic
    *  **参数解释**： 是否允许弹性伸缩。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getAddToElastic()
    {
        return $this->container['addToElastic'];
    }

    /**
    * Sets addToElastic
    *
    * @param bool|null $addToElastic **参数解释**： 是否允许弹性伸缩。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAddToElastic($addToElastic)
    {
        $this->container['addToElastic'] = $addToElastic;
        return $this;
    }

    /**
    * Gets mode
    *  **参数解释**： 逻辑集群模式。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode **参数解释**： 逻辑集群模式。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets waitingForKilling
    *  **参数解释**： 作业等待时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getWaitingForKilling()
    {
        return $this->container['waitingForKilling'];
    }

    /**
    * Sets waitingForKilling
    *
    * @param int|null $waitingForKilling **参数解释**： 作业等待时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setWaitingForKilling($waitingForKilling)
    {
        $this->container['waitingForKilling'] = $waitingForKilling;
        return $this;
    }

    /**
    * Gets clusterType
    *  **参数解释**： 集群类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
    * Sets clusterType
    *
    * @param string|null $clusterType **参数解释**： 集群类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
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

