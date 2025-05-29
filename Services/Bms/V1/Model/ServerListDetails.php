<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerListDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerListDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  裸金属服务器ID，格式为UUID
    * userId  创建裸金属服务器的用户ID，格式为UUID。
    * name  裸金属服务器名称
    * created  裸金属服务器创建时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T03:30:52Z
    * updated  裸金属服务器更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
    * tenantId  裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    * flavor  flavor
    * status  裸金属服务器当前状态信息。  取值范围：  ACTIVE：运行中/正在关机/删除中 BUILD：创建中 ERROR：故障 HARD_REBOOT：强制重启中 REBOOT：重启中 DELETED：实例已被正常删除 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
    * taskState  扩展属性，裸金属服务器当前的任务状态。例如：rebooting：重启中reboot_started：普通重启reboot_started_hard：强制重启powering-off：关机中powering-on：开机中rebuilding：重建中scheduling：调度中deleting：删除中
    * vmState  扩展属性，裸金属服务器的稳定状态。例如：active：运行中shutoff：关机reboot：重启
    * availabilityZone  扩展属性，裸金属服务器所在可用分区名称。
    * fault  fault
    * inRecycleBin  裸机是否在回收站中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'userId' => 'string',
            'name' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'tenantId' => 'string',
            'flavor' => '\HuaweiCloud\SDK\Bms\V1\Model\FlavorDetailInfos',
            'status' => 'string',
            'taskState' => 'string',
            'vmState' => 'string',
            'availabilityZone' => 'string',
            'fault' => '\HuaweiCloud\SDK\Bms\V1\Model\Fault',
            'inRecycleBin' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  裸金属服务器ID，格式为UUID
    * userId  创建裸金属服务器的用户ID，格式为UUID。
    * name  裸金属服务器名称
    * created  裸金属服务器创建时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T03:30:52Z
    * updated  裸金属服务器更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
    * tenantId  裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    * flavor  flavor
    * status  裸金属服务器当前状态信息。  取值范围：  ACTIVE：运行中/正在关机/删除中 BUILD：创建中 ERROR：故障 HARD_REBOOT：强制重启中 REBOOT：重启中 DELETED：实例已被正常删除 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
    * taskState  扩展属性，裸金属服务器当前的任务状态。例如：rebooting：重启中reboot_started：普通重启reboot_started_hard：强制重启powering-off：关机中powering-on：开机中rebuilding：重建中scheduling：调度中deleting：删除中
    * vmState  扩展属性，裸金属服务器的稳定状态。例如：active：运行中shutoff：关机reboot：重启
    * availabilityZone  扩展属性，裸金属服务器所在可用分区名称。
    * fault  fault
    * inRecycleBin  裸机是否在回收站中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'userId' => null,
        'name' => null,
        'created' => null,
        'updated' => null,
        'tenantId' => null,
        'flavor' => null,
        'status' => null,
        'taskState' => null,
        'vmState' => null,
        'availabilityZone' => null,
        'fault' => null,
        'inRecycleBin' => null
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
    * id  裸金属服务器ID，格式为UUID
    * userId  创建裸金属服务器的用户ID，格式为UUID。
    * name  裸金属服务器名称
    * created  裸金属服务器创建时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T03:30:52Z
    * updated  裸金属服务器更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
    * tenantId  裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    * flavor  flavor
    * status  裸金属服务器当前状态信息。  取值范围：  ACTIVE：运行中/正在关机/删除中 BUILD：创建中 ERROR：故障 HARD_REBOOT：强制重启中 REBOOT：重启中 DELETED：实例已被正常删除 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
    * taskState  扩展属性，裸金属服务器当前的任务状态。例如：rebooting：重启中reboot_started：普通重启reboot_started_hard：强制重启powering-off：关机中powering-on：开机中rebuilding：重建中scheduling：调度中deleting：删除中
    * vmState  扩展属性，裸金属服务器的稳定状态。例如：active：运行中shutoff：关机reboot：重启
    * availabilityZone  扩展属性，裸金属服务器所在可用分区名称。
    * fault  fault
    * inRecycleBin  裸机是否在回收站中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'userId' => 'user_id',
            'name' => 'name',
            'created' => 'created',
            'updated' => 'updated',
            'tenantId' => 'tenant_id',
            'flavor' => 'flavor',
            'status' => 'status',
            'taskState' => 'task_state',
            'vmState' => 'vm_state',
            'availabilityZone' => 'availability_zone',
            'fault' => 'fault',
            'inRecycleBin' => 'in_recycle_bin'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  裸金属服务器ID，格式为UUID
    * userId  创建裸金属服务器的用户ID，格式为UUID。
    * name  裸金属服务器名称
    * created  裸金属服务器创建时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T03:30:52Z
    * updated  裸金属服务器更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
    * tenantId  裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    * flavor  flavor
    * status  裸金属服务器当前状态信息。  取值范围：  ACTIVE：运行中/正在关机/删除中 BUILD：创建中 ERROR：故障 HARD_REBOOT：强制重启中 REBOOT：重启中 DELETED：实例已被正常删除 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
    * taskState  扩展属性，裸金属服务器当前的任务状态。例如：rebooting：重启中reboot_started：普通重启reboot_started_hard：强制重启powering-off：关机中powering-on：开机中rebuilding：重建中scheduling：调度中deleting：删除中
    * vmState  扩展属性，裸金属服务器的稳定状态。例如：active：运行中shutoff：关机reboot：重启
    * availabilityZone  扩展属性，裸金属服务器所在可用分区名称。
    * fault  fault
    * inRecycleBin  裸机是否在回收站中
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'userId' => 'setUserId',
            'name' => 'setName',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'tenantId' => 'setTenantId',
            'flavor' => 'setFlavor',
            'status' => 'setStatus',
            'taskState' => 'setTaskState',
            'vmState' => 'setVmState',
            'availabilityZone' => 'setAvailabilityZone',
            'fault' => 'setFault',
            'inRecycleBin' => 'setInRecycleBin'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  裸金属服务器ID，格式为UUID
    * userId  创建裸金属服务器的用户ID，格式为UUID。
    * name  裸金属服务器名称
    * created  裸金属服务器创建时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T03:30:52Z
    * updated  裸金属服务器更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
    * tenantId  裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    * flavor  flavor
    * status  裸金属服务器当前状态信息。  取值范围：  ACTIVE：运行中/正在关机/删除中 BUILD：创建中 ERROR：故障 HARD_REBOOT：强制重启中 REBOOT：重启中 DELETED：实例已被正常删除 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
    * taskState  扩展属性，裸金属服务器当前的任务状态。例如：rebooting：重启中reboot_started：普通重启reboot_started_hard：强制重启powering-off：关机中powering-on：开机中rebuilding：重建中scheduling：调度中deleting：删除中
    * vmState  扩展属性，裸金属服务器的稳定状态。例如：active：运行中shutoff：关机reboot：重启
    * availabilityZone  扩展属性，裸金属服务器所在可用分区名称。
    * fault  fault
    * inRecycleBin  裸机是否在回收站中
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'userId' => 'getUserId',
            'name' => 'getName',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'tenantId' => 'getTenantId',
            'flavor' => 'getFlavor',
            'status' => 'getStatus',
            'taskState' => 'getTaskState',
            'vmState' => 'getVmState',
            'availabilityZone' => 'getAvailabilityZone',
            'fault' => 'getFault',
            'inRecycleBin' => 'getInRecycleBin'
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
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_BUILD = 'BUILD';
    const STATUS_ERROR = 'ERROR';
    const STATUS_HARD_REBOOT = 'HARD_REBOOT';
    const STATUS_REBOOT = 'REBOOT';
    const STATUS_DELETED = 'DELETED';
    const STATUS_SHUTOFF = 'SHUTOFF';
    const TASK_STATE_REBOOTING = 'rebooting';
    const TASK_STATE_REBOOT_STARTED = 'reboot_started';
    const TASK_STATE_REBOOT_STARTED_HARD = 'reboot_started_hard';
    const TASK_STATE_POWERING_OFF = 'powering-off';
    const TASK_STATE_POWERING_ON = 'powering-on';
    const TASK_STATE_REBUILDING = 'rebuilding';
    const TASK_STATE_SCHEDULING = 'scheduling';
    const TASK_STATE_DELETING = 'deleting';
    const VM_STATE_ACTIVE = 'active';
    const VM_STATE_SHUTOFF = 'shutoff';
    const VM_STATE_REBOOT = 'reboot';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_BUILD,
            self::STATUS_ERROR,
            self::STATUS_HARD_REBOOT,
            self::STATUS_REBOOT,
            self::STATUS_DELETED,
            self::STATUS_SHUTOFF,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskStateAllowableValues()
    {
        return [
            self::TASK_STATE_REBOOTING,
            self::TASK_STATE_REBOOT_STARTED,
            self::TASK_STATE_REBOOT_STARTED_HARD,
            self::TASK_STATE_POWERING_OFF,
            self::TASK_STATE_POWERING_ON,
            self::TASK_STATE_REBUILDING,
            self::TASK_STATE_SCHEDULING,
            self::TASK_STATE_DELETING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVmStateAllowableValues()
    {
        return [
            self::VM_STATE_ACTIVE,
            self::VM_STATE_SHUTOFF,
            self::VM_STATE_REBOOT,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['taskState'] = isset($data['taskState']) ? $data['taskState'] : null;
        $this->container['vmState'] = isset($data['vmState']) ? $data['vmState'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['fault'] = isset($data['fault']) ? $data['fault'] : null;
        $this->container['inRecycleBin'] = isset($data['inRecycleBin']) ? $data['inRecycleBin'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if (!preg_match("/^[A-Z0-9-._~]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[A-Z0-9-._~]+$/.";
            }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTaskStateAllowableValues();
                if (!is_null($this->container['taskState']) && !in_array($this->container['taskState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getVmStateAllowableValues();
                if (!is_null($this->container['vmState']) && !in_array($this->container['vmState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'vmState', must be one of '%s'",
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
    * Gets id
    *  裸金属服务器ID，格式为UUID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 裸金属服务器ID，格式为UUID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets userId
    *  创建裸金属服务器的用户ID，格式为UUID。
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
    * @param string|null $userId 创建裸金属服务器的用户ID，格式为UUID。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets name
    *  裸金属服务器名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 裸金属服务器名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets created
    *  裸金属服务器创建时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T03:30:52Z
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created 裸金属服务器创建时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T03:30:52Z
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  裸金属服务器更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 裸金属服务器更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets tenantId
    *  裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    *
    * @return string
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string $tenantId 裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets flavor
    *  flavor
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\FlavorDetailInfos|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\FlavorDetailInfos|null $flavor flavor
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets status
    *  裸金属服务器当前状态信息。  取值范围：  ACTIVE：运行中/正在关机/删除中 BUILD：创建中 ERROR：故障 HARD_REBOOT：强制重启中 REBOOT：重启中 DELETED：实例已被正常删除 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
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
    * @param string $status 裸金属服务器当前状态信息。  取值范围：  ACTIVE：运行中/正在关机/删除中 BUILD：创建中 ERROR：故障 HARD_REBOOT：强制重启中 REBOOT：重启中 DELETED：实例已被正常删除 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets taskState
    *  扩展属性，裸金属服务器当前的任务状态。例如：rebooting：重启中reboot_started：普通重启reboot_started_hard：强制重启powering-off：关机中powering-on：开机中rebuilding：重建中scheduling：调度中deleting：删除中
    *
    * @return string|null
    */
    public function getTaskState()
    {
        return $this->container['taskState'];
    }

    /**
    * Sets taskState
    *
    * @param string|null $taskState 扩展属性，裸金属服务器当前的任务状态。例如：rebooting：重启中reboot_started：普通重启reboot_started_hard：强制重启powering-off：关机中powering-on：开机中rebuilding：重建中scheduling：调度中deleting：删除中
    *
    * @return $this
    */
    public function setTaskState($taskState)
    {
        $this->container['taskState'] = $taskState;
        return $this;
    }

    /**
    * Gets vmState
    *  扩展属性，裸金属服务器的稳定状态。例如：active：运行中shutoff：关机reboot：重启
    *
    * @return string|null
    */
    public function getVmState()
    {
        return $this->container['vmState'];
    }

    /**
    * Sets vmState
    *
    * @param string|null $vmState 扩展属性，裸金属服务器的稳定状态。例如：active：运行中shutoff：关机reboot：重启
    *
    * @return $this
    */
    public function setVmState($vmState)
    {
        $this->container['vmState'] = $vmState;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  扩展属性，裸金属服务器所在可用分区名称。
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone 扩展属性，裸金属服务器所在可用分区名称。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets fault
    *  fault
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\Fault|null
    */
    public function getFault()
    {
        return $this->container['fault'];
    }

    /**
    * Sets fault
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\Fault|null $fault fault
    *
    * @return $this
    */
    public function setFault($fault)
    {
        $this->container['fault'] = $fault;
        return $this;
    }

    /**
    * Gets inRecycleBin
    *  裸机是否在回收站中
    *
    * @return bool|null
    */
    public function getInRecycleBin()
    {
        return $this->container['inRecycleBin'];
    }

    /**
    * Sets inRecycleBin
    *
    * @param bool|null $inRecycleBin 裸机是否在回收站中
    *
    * @return $this
    */
    public function setInRecycleBin($inRecycleBin)
    {
        $this->container['inRecycleBin'] = $inRecycleBin;
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

