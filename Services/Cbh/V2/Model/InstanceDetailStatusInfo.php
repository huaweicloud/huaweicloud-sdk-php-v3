<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceDetailStatusInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceDetail_status_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  云堡垒机实例状态。 - SHUTOFF：已关闭 - ACTIVE：运行中 - DELETING：删除中 - BUILD：创建中 - DELETED：已删除 - ERROR：故障 - HAWAIT：等待备机创建成功 - FROZEN：已冻结 - UPGRADING：升级中 - UNPAID：待支付 - RESIZE：规格变更中 - DILATATION：扩容中 - HA：配置HA中
    * taskStatus  云堡垒机实例当前的任务状态。 - powering-on：开启 - powering-off：关闭 - rebooting：重启 - delete_wait：删除 - frozen：冻结 - NO_TASK：运行 - unfrozen：解冻 - alter：变更 - updating：升级中 - configuring-ha：配置HA - data-migrating：数据迁移中 - rollback：版本回滚中 - traffic-switchover：流量切换中
    * createInstanceStatus  云堡垒机实例在创建实例过程中的状态信息。 - Waiting for payment：等待支付 - creating-network：创建网络 - creating-server：创建服务 - tranfering-horizontal-network：网络打通 - adding-policy-route：添加路由策略 - configing-dns：配置DNS - starting-cbs-service：服务运行中 - setting-init-conf：初始化 - buying-EIP：购买弹性公网IP
    * instanceStatus  云堡垒机实例状态。 - building：创建中 - deleting：删除中 - deleted：删除了 - unpaid：未支付 - upgrading：升级中 - resizing：扩容中 - abnormal：异常 - error：故障 - ok：正常
    * instanceDescription  云堡垒机实例信息描述。
    * failReason  云堡垒机实例创建实例失败原因。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'taskStatus' => 'string',
            'createInstanceStatus' => 'string',
            'instanceStatus' => 'string',
            'instanceDescription' => 'string',
            'failReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  云堡垒机实例状态。 - SHUTOFF：已关闭 - ACTIVE：运行中 - DELETING：删除中 - BUILD：创建中 - DELETED：已删除 - ERROR：故障 - HAWAIT：等待备机创建成功 - FROZEN：已冻结 - UPGRADING：升级中 - UNPAID：待支付 - RESIZE：规格变更中 - DILATATION：扩容中 - HA：配置HA中
    * taskStatus  云堡垒机实例当前的任务状态。 - powering-on：开启 - powering-off：关闭 - rebooting：重启 - delete_wait：删除 - frozen：冻结 - NO_TASK：运行 - unfrozen：解冻 - alter：变更 - updating：升级中 - configuring-ha：配置HA - data-migrating：数据迁移中 - rollback：版本回滚中 - traffic-switchover：流量切换中
    * createInstanceStatus  云堡垒机实例在创建实例过程中的状态信息。 - Waiting for payment：等待支付 - creating-network：创建网络 - creating-server：创建服务 - tranfering-horizontal-network：网络打通 - adding-policy-route：添加路由策略 - configing-dns：配置DNS - starting-cbs-service：服务运行中 - setting-init-conf：初始化 - buying-EIP：购买弹性公网IP
    * instanceStatus  云堡垒机实例状态。 - building：创建中 - deleting：删除中 - deleted：删除了 - unpaid：未支付 - upgrading：升级中 - resizing：扩容中 - abnormal：异常 - error：故障 - ok：正常
    * instanceDescription  云堡垒机实例信息描述。
    * failReason  云堡垒机实例创建实例失败原因。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'taskStatus' => null,
        'createInstanceStatus' => null,
        'instanceStatus' => null,
        'instanceDescription' => null,
        'failReason' => null
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
    * status  云堡垒机实例状态。 - SHUTOFF：已关闭 - ACTIVE：运行中 - DELETING：删除中 - BUILD：创建中 - DELETED：已删除 - ERROR：故障 - HAWAIT：等待备机创建成功 - FROZEN：已冻结 - UPGRADING：升级中 - UNPAID：待支付 - RESIZE：规格变更中 - DILATATION：扩容中 - HA：配置HA中
    * taskStatus  云堡垒机实例当前的任务状态。 - powering-on：开启 - powering-off：关闭 - rebooting：重启 - delete_wait：删除 - frozen：冻结 - NO_TASK：运行 - unfrozen：解冻 - alter：变更 - updating：升级中 - configuring-ha：配置HA - data-migrating：数据迁移中 - rollback：版本回滚中 - traffic-switchover：流量切换中
    * createInstanceStatus  云堡垒机实例在创建实例过程中的状态信息。 - Waiting for payment：等待支付 - creating-network：创建网络 - creating-server：创建服务 - tranfering-horizontal-network：网络打通 - adding-policy-route：添加路由策略 - configing-dns：配置DNS - starting-cbs-service：服务运行中 - setting-init-conf：初始化 - buying-EIP：购买弹性公网IP
    * instanceStatus  云堡垒机实例状态。 - building：创建中 - deleting：删除中 - deleted：删除了 - unpaid：未支付 - upgrading：升级中 - resizing：扩容中 - abnormal：异常 - error：故障 - ok：正常
    * instanceDescription  云堡垒机实例信息描述。
    * failReason  云堡垒机实例创建实例失败原因。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'taskStatus' => 'task_status',
            'createInstanceStatus' => 'create_instance_status',
            'instanceStatus' => 'instance_status',
            'instanceDescription' => 'instance_description',
            'failReason' => 'fail_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  云堡垒机实例状态。 - SHUTOFF：已关闭 - ACTIVE：运行中 - DELETING：删除中 - BUILD：创建中 - DELETED：已删除 - ERROR：故障 - HAWAIT：等待备机创建成功 - FROZEN：已冻结 - UPGRADING：升级中 - UNPAID：待支付 - RESIZE：规格变更中 - DILATATION：扩容中 - HA：配置HA中
    * taskStatus  云堡垒机实例当前的任务状态。 - powering-on：开启 - powering-off：关闭 - rebooting：重启 - delete_wait：删除 - frozen：冻结 - NO_TASK：运行 - unfrozen：解冻 - alter：变更 - updating：升级中 - configuring-ha：配置HA - data-migrating：数据迁移中 - rollback：版本回滚中 - traffic-switchover：流量切换中
    * createInstanceStatus  云堡垒机实例在创建实例过程中的状态信息。 - Waiting for payment：等待支付 - creating-network：创建网络 - creating-server：创建服务 - tranfering-horizontal-network：网络打通 - adding-policy-route：添加路由策略 - configing-dns：配置DNS - starting-cbs-service：服务运行中 - setting-init-conf：初始化 - buying-EIP：购买弹性公网IP
    * instanceStatus  云堡垒机实例状态。 - building：创建中 - deleting：删除中 - deleted：删除了 - unpaid：未支付 - upgrading：升级中 - resizing：扩容中 - abnormal：异常 - error：故障 - ok：正常
    * instanceDescription  云堡垒机实例信息描述。
    * failReason  云堡垒机实例创建实例失败原因。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'taskStatus' => 'setTaskStatus',
            'createInstanceStatus' => 'setCreateInstanceStatus',
            'instanceStatus' => 'setInstanceStatus',
            'instanceDescription' => 'setInstanceDescription',
            'failReason' => 'setFailReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  云堡垒机实例状态。 - SHUTOFF：已关闭 - ACTIVE：运行中 - DELETING：删除中 - BUILD：创建中 - DELETED：已删除 - ERROR：故障 - HAWAIT：等待备机创建成功 - FROZEN：已冻结 - UPGRADING：升级中 - UNPAID：待支付 - RESIZE：规格变更中 - DILATATION：扩容中 - HA：配置HA中
    * taskStatus  云堡垒机实例当前的任务状态。 - powering-on：开启 - powering-off：关闭 - rebooting：重启 - delete_wait：删除 - frozen：冻结 - NO_TASK：运行 - unfrozen：解冻 - alter：变更 - updating：升级中 - configuring-ha：配置HA - data-migrating：数据迁移中 - rollback：版本回滚中 - traffic-switchover：流量切换中
    * createInstanceStatus  云堡垒机实例在创建实例过程中的状态信息。 - Waiting for payment：等待支付 - creating-network：创建网络 - creating-server：创建服务 - tranfering-horizontal-network：网络打通 - adding-policy-route：添加路由策略 - configing-dns：配置DNS - starting-cbs-service：服务运行中 - setting-init-conf：初始化 - buying-EIP：购买弹性公网IP
    * instanceStatus  云堡垒机实例状态。 - building：创建中 - deleting：删除中 - deleted：删除了 - unpaid：未支付 - upgrading：升级中 - resizing：扩容中 - abnormal：异常 - error：故障 - ok：正常
    * instanceDescription  云堡垒机实例信息描述。
    * failReason  云堡垒机实例创建实例失败原因。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'taskStatus' => 'getTaskStatus',
            'createInstanceStatus' => 'getCreateInstanceStatus',
            'instanceStatus' => 'getInstanceStatus',
            'instanceDescription' => 'getInstanceDescription',
            'failReason' => 'getFailReason'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['createInstanceStatus'] = isset($data['createInstanceStatus']) ? $data['createInstanceStatus'] : null;
        $this->container['instanceStatus'] = isset($data['instanceStatus']) ? $data['instanceStatus'] : null;
        $this->container['instanceDescription'] = isset($data['instanceDescription']) ? $data['instanceDescription'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 36)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['taskStatus'] === null) {
            $invalidProperties[] = "'taskStatus' can't be null";
        }
            if ((mb_strlen($this->container['taskStatus']) > 36)) {
                $invalidProperties[] = "invalid value for 'taskStatus', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['taskStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskStatus', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['createInstanceStatus'] === null) {
            $invalidProperties[] = "'createInstanceStatus' can't be null";
        }
            if ((mb_strlen($this->container['createInstanceStatus']) > 36)) {
                $invalidProperties[] = "invalid value for 'createInstanceStatus', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['createInstanceStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'createInstanceStatus', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['instanceStatus'] === null) {
            $invalidProperties[] = "'instanceStatus' can't be null";
        }
            if ((mb_strlen($this->container['instanceStatus']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceStatus', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instanceStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceStatus', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['instanceDescription'] === null) {
            $invalidProperties[] = "'instanceDescription' can't be null";
        }
            if ((mb_strlen($this->container['instanceDescription']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceDescription', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instanceDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceDescription', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['failReason'] === null) {
            $invalidProperties[] = "'failReason' can't be null";
        }
            if ((mb_strlen($this->container['failReason']) > 36)) {
                $invalidProperties[] = "invalid value for 'failReason', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['failReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'failReason', the character length must be bigger than or equal to 0.";
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
    * Gets status
    *  云堡垒机实例状态。 - SHUTOFF：已关闭 - ACTIVE：运行中 - DELETING：删除中 - BUILD：创建中 - DELETED：已删除 - ERROR：故障 - HAWAIT：等待备机创建成功 - FROZEN：已冻结 - UPGRADING：升级中 - UNPAID：待支付 - RESIZE：规格变更中 - DILATATION：扩容中 - HA：配置HA中
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 云堡垒机实例状态。 - SHUTOFF：已关闭 - ACTIVE：运行中 - DELETING：删除中 - BUILD：创建中 - DELETED：已删除 - ERROR：故障 - HAWAIT：等待备机创建成功 - FROZEN：已冻结 - UPGRADING：升级中 - UNPAID：待支付 - RESIZE：规格变更中 - DILATATION：扩容中 - HA：配置HA中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets taskStatus
    *  云堡垒机实例当前的任务状态。 - powering-on：开启 - powering-off：关闭 - rebooting：重启 - delete_wait：删除 - frozen：冻结 - NO_TASK：运行 - unfrozen：解冻 - alter：变更 - updating：升级中 - configuring-ha：配置HA - data-migrating：数据迁移中 - rollback：版本回滚中 - traffic-switchover：流量切换中
    *
    * @return string
    */
    public function getTaskStatus()
    {
        return $this->container['taskStatus'];
    }

    /**
    * Sets taskStatus
    *
    * @param string $taskStatus 云堡垒机实例当前的任务状态。 - powering-on：开启 - powering-off：关闭 - rebooting：重启 - delete_wait：删除 - frozen：冻结 - NO_TASK：运行 - unfrozen：解冻 - alter：变更 - updating：升级中 - configuring-ha：配置HA - data-migrating：数据迁移中 - rollback：版本回滚中 - traffic-switchover：流量切换中
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets createInstanceStatus
    *  云堡垒机实例在创建实例过程中的状态信息。 - Waiting for payment：等待支付 - creating-network：创建网络 - creating-server：创建服务 - tranfering-horizontal-network：网络打通 - adding-policy-route：添加路由策略 - configing-dns：配置DNS - starting-cbs-service：服务运行中 - setting-init-conf：初始化 - buying-EIP：购买弹性公网IP
    *
    * @return string
    */
    public function getCreateInstanceStatus()
    {
        return $this->container['createInstanceStatus'];
    }

    /**
    * Sets createInstanceStatus
    *
    * @param string $createInstanceStatus 云堡垒机实例在创建实例过程中的状态信息。 - Waiting for payment：等待支付 - creating-network：创建网络 - creating-server：创建服务 - tranfering-horizontal-network：网络打通 - adding-policy-route：添加路由策略 - configing-dns：配置DNS - starting-cbs-service：服务运行中 - setting-init-conf：初始化 - buying-EIP：购买弹性公网IP
    *
    * @return $this
    */
    public function setCreateInstanceStatus($createInstanceStatus)
    {
        $this->container['createInstanceStatus'] = $createInstanceStatus;
        return $this;
    }

    /**
    * Gets instanceStatus
    *  云堡垒机实例状态。 - building：创建中 - deleting：删除中 - deleted：删除了 - unpaid：未支付 - upgrading：升级中 - resizing：扩容中 - abnormal：异常 - error：故障 - ok：正常
    *
    * @return string
    */
    public function getInstanceStatus()
    {
        return $this->container['instanceStatus'];
    }

    /**
    * Sets instanceStatus
    *
    * @param string $instanceStatus 云堡垒机实例状态。 - building：创建中 - deleting：删除中 - deleted：删除了 - unpaid：未支付 - upgrading：升级中 - resizing：扩容中 - abnormal：异常 - error：故障 - ok：正常
    *
    * @return $this
    */
    public function setInstanceStatus($instanceStatus)
    {
        $this->container['instanceStatus'] = $instanceStatus;
        return $this;
    }

    /**
    * Gets instanceDescription
    *  云堡垒机实例信息描述。
    *
    * @return string
    */
    public function getInstanceDescription()
    {
        return $this->container['instanceDescription'];
    }

    /**
    * Sets instanceDescription
    *
    * @param string $instanceDescription 云堡垒机实例信息描述。
    *
    * @return $this
    */
    public function setInstanceDescription($instanceDescription)
    {
        $this->container['instanceDescription'] = $instanceDescription;
        return $this;
    }

    /**
    * Gets failReason
    *  云堡垒机实例创建实例失败原因。
    *
    * @return string
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string $failReason 云堡垒机实例创建实例失败原因。
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
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

