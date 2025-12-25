<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HwcEcs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HwcEcs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  弹性云服务器ID，格式为UUID。
    * name  弹性云服务器名称。
    * protectedStatus  主机安全开启状态：OPEN | CLOSE
    * description  弹性云服务器的描述信息。
    * status  弹性云服务器状态。 取值范围： ACTIVE、BUILD、ERROR、HARD_REBOOT、MIGRATING、REBOOT、REBUILD、RESIZE、REVERT_RESIZE、SHUTOFF、VERIFY_RESIZE、DELETED
    * locked  弹性云服务器是否为锁定状态。 true：锁定 false：未锁定
    * enterpriseProjectId  弹性云服务器所属的企业项目ID。
    * userId  创建弹性云服务器的用户ID，格式为UUID。
    * projectId  弹性云服务器所属项目id，格式为UUID。
    * hostId  弹性云服务器所在主机的主机ID。
    * hostName  弹性云服务器所在主机的主机名称。
    * hostStatus  云服务器所在主机状态。 UP：服务正常 UNKNOWN：状态未知 DOWN：服务异常 MAINTENANCE：维护状态 空字符串：弹性云服务器无主机信息
    * addresses  弹性云服务器的网络属性。
    * securityGroups  弹性云服务器所属安全组列表。
    * availabilityZone  弹性云服务器所在可用区名称。
    * flavor  flavor
    * volumesAttached  挂载到弹性云服务器上的磁盘。
    * metadata  metadata
    * updated  弹性云服务器最近一次更新时间，例如开机、关机、重启等操作。 时间格式例如：2019-05-22T03:30:52Z
    * created  弹性云服务器创建时间。 时间格式例如：2019-05-22T03:19:19Z
    * keyName  弹性云服务器使用的密钥对名称。
    * schedulerHints  schedulerHints
    * hypervisor  hypervisor
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'protectedStatus' => 'string',
            'description' => 'string',
            'status' => 'string',
            'locked' => 'bool',
            'enterpriseProjectId' => 'string',
            'userId' => 'string',
            'projectId' => 'string',
            'hostId' => 'string',
            'hostName' => 'string',
            'hostStatus' => 'string',
            'addresses' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsAddress[]',
            'securityGroups' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsSecurityGroup[]',
            'availabilityZone' => 'string',
            'flavor' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsFlavor',
            'volumesAttached' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsVolume[]',
            'metadata' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsMetadata',
            'updated' => 'string',
            'created' => 'string',
            'keyName' => 'string',
            'schedulerHints' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsSchedulerHint',
            'hypervisor' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsHypervisor'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  弹性云服务器ID，格式为UUID。
    * name  弹性云服务器名称。
    * protectedStatus  主机安全开启状态：OPEN | CLOSE
    * description  弹性云服务器的描述信息。
    * status  弹性云服务器状态。 取值范围： ACTIVE、BUILD、ERROR、HARD_REBOOT、MIGRATING、REBOOT、REBUILD、RESIZE、REVERT_RESIZE、SHUTOFF、VERIFY_RESIZE、DELETED
    * locked  弹性云服务器是否为锁定状态。 true：锁定 false：未锁定
    * enterpriseProjectId  弹性云服务器所属的企业项目ID。
    * userId  创建弹性云服务器的用户ID，格式为UUID。
    * projectId  弹性云服务器所属项目id，格式为UUID。
    * hostId  弹性云服务器所在主机的主机ID。
    * hostName  弹性云服务器所在主机的主机名称。
    * hostStatus  云服务器所在主机状态。 UP：服务正常 UNKNOWN：状态未知 DOWN：服务异常 MAINTENANCE：维护状态 空字符串：弹性云服务器无主机信息
    * addresses  弹性云服务器的网络属性。
    * securityGroups  弹性云服务器所属安全组列表。
    * availabilityZone  弹性云服务器所在可用区名称。
    * flavor  flavor
    * volumesAttached  挂载到弹性云服务器上的磁盘。
    * metadata  metadata
    * updated  弹性云服务器最近一次更新时间，例如开机、关机、重启等操作。 时间格式例如：2019-05-22T03:30:52Z
    * created  弹性云服务器创建时间。 时间格式例如：2019-05-22T03:19:19Z
    * keyName  弹性云服务器使用的密钥对名称。
    * schedulerHints  schedulerHints
    * hypervisor  hypervisor
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'protectedStatus' => null,
        'description' => null,
        'status' => null,
        'locked' => null,
        'enterpriseProjectId' => null,
        'userId' => null,
        'projectId' => null,
        'hostId' => null,
        'hostName' => null,
        'hostStatus' => null,
        'addresses' => null,
        'securityGroups' => null,
        'availabilityZone' => null,
        'flavor' => null,
        'volumesAttached' => null,
        'metadata' => null,
        'updated' => null,
        'created' => null,
        'keyName' => null,
        'schedulerHints' => null,
        'hypervisor' => null
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
    * id  弹性云服务器ID，格式为UUID。
    * name  弹性云服务器名称。
    * protectedStatus  主机安全开启状态：OPEN | CLOSE
    * description  弹性云服务器的描述信息。
    * status  弹性云服务器状态。 取值范围： ACTIVE、BUILD、ERROR、HARD_REBOOT、MIGRATING、REBOOT、REBUILD、RESIZE、REVERT_RESIZE、SHUTOFF、VERIFY_RESIZE、DELETED
    * locked  弹性云服务器是否为锁定状态。 true：锁定 false：未锁定
    * enterpriseProjectId  弹性云服务器所属的企业项目ID。
    * userId  创建弹性云服务器的用户ID，格式为UUID。
    * projectId  弹性云服务器所属项目id，格式为UUID。
    * hostId  弹性云服务器所在主机的主机ID。
    * hostName  弹性云服务器所在主机的主机名称。
    * hostStatus  云服务器所在主机状态。 UP：服务正常 UNKNOWN：状态未知 DOWN：服务异常 MAINTENANCE：维护状态 空字符串：弹性云服务器无主机信息
    * addresses  弹性云服务器的网络属性。
    * securityGroups  弹性云服务器所属安全组列表。
    * availabilityZone  弹性云服务器所在可用区名称。
    * flavor  flavor
    * volumesAttached  挂载到弹性云服务器上的磁盘。
    * metadata  metadata
    * updated  弹性云服务器最近一次更新时间，例如开机、关机、重启等操作。 时间格式例如：2019-05-22T03:30:52Z
    * created  弹性云服务器创建时间。 时间格式例如：2019-05-22T03:19:19Z
    * keyName  弹性云服务器使用的密钥对名称。
    * schedulerHints  schedulerHints
    * hypervisor  hypervisor
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'protectedStatus' => 'protected_status',
            'description' => 'description',
            'status' => 'status',
            'locked' => 'locked',
            'enterpriseProjectId' => 'enterprise_project_id',
            'userId' => 'user_id',
            'projectId' => 'project_id',
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'hostStatus' => 'host_status',
            'addresses' => 'addresses',
            'securityGroups' => 'security_groups',
            'availabilityZone' => 'availability_zone',
            'flavor' => 'flavor',
            'volumesAttached' => 'volumes_attached',
            'metadata' => 'metadata',
            'updated' => 'updated',
            'created' => 'created',
            'keyName' => 'key_name',
            'schedulerHints' => 'scheduler_hints',
            'hypervisor' => 'hypervisor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  弹性云服务器ID，格式为UUID。
    * name  弹性云服务器名称。
    * protectedStatus  主机安全开启状态：OPEN | CLOSE
    * description  弹性云服务器的描述信息。
    * status  弹性云服务器状态。 取值范围： ACTIVE、BUILD、ERROR、HARD_REBOOT、MIGRATING、REBOOT、REBUILD、RESIZE、REVERT_RESIZE、SHUTOFF、VERIFY_RESIZE、DELETED
    * locked  弹性云服务器是否为锁定状态。 true：锁定 false：未锁定
    * enterpriseProjectId  弹性云服务器所属的企业项目ID。
    * userId  创建弹性云服务器的用户ID，格式为UUID。
    * projectId  弹性云服务器所属项目id，格式为UUID。
    * hostId  弹性云服务器所在主机的主机ID。
    * hostName  弹性云服务器所在主机的主机名称。
    * hostStatus  云服务器所在主机状态。 UP：服务正常 UNKNOWN：状态未知 DOWN：服务异常 MAINTENANCE：维护状态 空字符串：弹性云服务器无主机信息
    * addresses  弹性云服务器的网络属性。
    * securityGroups  弹性云服务器所属安全组列表。
    * availabilityZone  弹性云服务器所在可用区名称。
    * flavor  flavor
    * volumesAttached  挂载到弹性云服务器上的磁盘。
    * metadata  metadata
    * updated  弹性云服务器最近一次更新时间，例如开机、关机、重启等操作。 时间格式例如：2019-05-22T03:30:52Z
    * created  弹性云服务器创建时间。 时间格式例如：2019-05-22T03:19:19Z
    * keyName  弹性云服务器使用的密钥对名称。
    * schedulerHints  schedulerHints
    * hypervisor  hypervisor
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'protectedStatus' => 'setProtectedStatus',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'locked' => 'setLocked',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'userId' => 'setUserId',
            'projectId' => 'setProjectId',
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'hostStatus' => 'setHostStatus',
            'addresses' => 'setAddresses',
            'securityGroups' => 'setSecurityGroups',
            'availabilityZone' => 'setAvailabilityZone',
            'flavor' => 'setFlavor',
            'volumesAttached' => 'setVolumesAttached',
            'metadata' => 'setMetadata',
            'updated' => 'setUpdated',
            'created' => 'setCreated',
            'keyName' => 'setKeyName',
            'schedulerHints' => 'setSchedulerHints',
            'hypervisor' => 'setHypervisor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  弹性云服务器ID，格式为UUID。
    * name  弹性云服务器名称。
    * protectedStatus  主机安全开启状态：OPEN | CLOSE
    * description  弹性云服务器的描述信息。
    * status  弹性云服务器状态。 取值范围： ACTIVE、BUILD、ERROR、HARD_REBOOT、MIGRATING、REBOOT、REBUILD、RESIZE、REVERT_RESIZE、SHUTOFF、VERIFY_RESIZE、DELETED
    * locked  弹性云服务器是否为锁定状态。 true：锁定 false：未锁定
    * enterpriseProjectId  弹性云服务器所属的企业项目ID。
    * userId  创建弹性云服务器的用户ID，格式为UUID。
    * projectId  弹性云服务器所属项目id，格式为UUID。
    * hostId  弹性云服务器所在主机的主机ID。
    * hostName  弹性云服务器所在主机的主机名称。
    * hostStatus  云服务器所在主机状态。 UP：服务正常 UNKNOWN：状态未知 DOWN：服务异常 MAINTENANCE：维护状态 空字符串：弹性云服务器无主机信息
    * addresses  弹性云服务器的网络属性。
    * securityGroups  弹性云服务器所属安全组列表。
    * availabilityZone  弹性云服务器所在可用区名称。
    * flavor  flavor
    * volumesAttached  挂载到弹性云服务器上的磁盘。
    * metadata  metadata
    * updated  弹性云服务器最近一次更新时间，例如开机、关机、重启等操作。 时间格式例如：2019-05-22T03:30:52Z
    * created  弹性云服务器创建时间。 时间格式例如：2019-05-22T03:19:19Z
    * keyName  弹性云服务器使用的密钥对名称。
    * schedulerHints  schedulerHints
    * hypervisor  hypervisor
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'protectedStatus' => 'getProtectedStatus',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'locked' => 'getLocked',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'userId' => 'getUserId',
            'projectId' => 'getProjectId',
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'hostStatus' => 'getHostStatus',
            'addresses' => 'getAddresses',
            'securityGroups' => 'getSecurityGroups',
            'availabilityZone' => 'getAvailabilityZone',
            'flavor' => 'getFlavor',
            'volumesAttached' => 'getVolumesAttached',
            'metadata' => 'getMetadata',
            'updated' => 'getUpdated',
            'created' => 'getCreated',
            'keyName' => 'getKeyName',
            'schedulerHints' => 'getSchedulerHints',
            'hypervisor' => 'getHypervisor'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['protectedStatus'] = isset($data['protectedStatus']) ? $data['protectedStatus'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['volumesAttached'] = isset($data['volumesAttached']) ? $data['volumesAttached'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['keyName'] = isset($data['keyName']) ? $data['keyName'] : null;
        $this->container['schedulerHints'] = isset($data['schedulerHints']) ? $data['schedulerHints'] : null;
        $this->container['hypervisor'] = isset($data['hypervisor']) ? $data['hypervisor'] : null;
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
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['protectedStatus'] === null) {
            $invalidProperties[] = "'protectedStatus' can't be null";
        }
            if ((mb_strlen($this->container['protectedStatus']) > 5)) {
                $invalidProperties[] = "invalid value for 'protectedStatus', the character length must be smaller than or equal to 5.";
            }
            if ((mb_strlen($this->container['protectedStatus']) < 4)) {
                $invalidProperties[] = "invalid value for 'protectedStatus', the character length must be bigger than or equal to 4.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 10)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['locked'] === null) {
            $invalidProperties[] = "'locked' can't be null";
        }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
            if ((mb_strlen($this->container['userId']) > 36)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['userId']) < 32)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['hostId'] === null) {
            $invalidProperties[] = "'hostId' can't be null";
        }
            if ((mb_strlen($this->container['hostId']) > 36)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['hostId']) < 32)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['hostName'] === null) {
            $invalidProperties[] = "'hostName' can't be null";
        }
            if ((mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['hostStatus'] === null) {
            $invalidProperties[] = "'hostStatus' can't be null";
        }
            if ((mb_strlen($this->container['hostStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['hostStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['addresses'] === null) {
            $invalidProperties[] = "'addresses' can't be null";
        }
        if ($this->container['securityGroups'] === null) {
            $invalidProperties[] = "'securityGroups' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
            if ((mb_strlen($this->container['availabilityZone']) > 64)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['availabilityZone']) < 2)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['volumesAttached'] === null) {
            $invalidProperties[] = "'volumesAttached' can't be null";
        }
        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
            if ((mb_strlen($this->container['updated']) > 32)) {
                $invalidProperties[] = "invalid value for 'updated', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['updated']) < 0)) {
                $invalidProperties[] = "invalid value for 'updated', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
            if ((mb_strlen($this->container['created']) > 32)) {
                $invalidProperties[] = "invalid value for 'created', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['created']) < 0)) {
                $invalidProperties[] = "invalid value for 'created', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['keyName']) && (mb_strlen($this->container['keyName']) > 128)) {
                $invalidProperties[] = "invalid value for 'keyName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['keyName']) && (mb_strlen($this->container['keyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'keyName', the character length must be bigger than or equal to 0.";
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
    *  弹性云服务器ID，格式为UUID。
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
    * @param string $id 弹性云服务器ID，格式为UUID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  弹性云服务器名称。
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
    * @param string $name 弹性云服务器名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets protectedStatus
    *  主机安全开启状态：OPEN | CLOSE
    *
    * @return string
    */
    public function getProtectedStatus()
    {
        return $this->container['protectedStatus'];
    }

    /**
    * Sets protectedStatus
    *
    * @param string $protectedStatus 主机安全开启状态：OPEN | CLOSE
    *
    * @return $this
    */
    public function setProtectedStatus($protectedStatus)
    {
        $this->container['protectedStatus'] = $protectedStatus;
        return $this;
    }

    /**
    * Gets description
    *  弹性云服务器的描述信息。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 弹性云服务器的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets status
    *  弹性云服务器状态。 取值范围： ACTIVE、BUILD、ERROR、HARD_REBOOT、MIGRATING、REBOOT、REBUILD、RESIZE、REVERT_RESIZE、SHUTOFF、VERIFY_RESIZE、DELETED
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
    * @param string $status 弹性云服务器状态。 取值范围： ACTIVE、BUILD、ERROR、HARD_REBOOT、MIGRATING、REBOOT、REBUILD、RESIZE、REVERT_RESIZE、SHUTOFF、VERIFY_RESIZE、DELETED
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets locked
    *  弹性云服务器是否为锁定状态。 true：锁定 false：未锁定
    *
    * @return bool
    */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
    * Sets locked
    *
    * @param bool $locked 弹性云服务器是否为锁定状态。 true：锁定 false：未锁定
    *
    * @return $this
    */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  弹性云服务器所属的企业项目ID。
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
    * @param string|null $enterpriseProjectId 弹性云服务器所属的企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets userId
    *  创建弹性云服务器的用户ID，格式为UUID。
    *
    * @return string
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string $userId 创建弹性云服务器的用户ID，格式为UUID。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets projectId
    *  弹性云服务器所属项目id，格式为UUID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 弹性云服务器所属项目id，格式为UUID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets hostId
    *  弹性云服务器所在主机的主机ID。
    *
    * @return string
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string $hostId 弹性云服务器所在主机的主机ID。
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostName
    *  弹性云服务器所在主机的主机名称。
    *
    * @return string
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string $hostName 弹性云服务器所在主机的主机名称。
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostStatus
    *  云服务器所在主机状态。 UP：服务正常 UNKNOWN：状态未知 DOWN：服务异常 MAINTENANCE：维护状态 空字符串：弹性云服务器无主机信息
    *
    * @return string
    */
    public function getHostStatus()
    {
        return $this->container['hostStatus'];
    }

    /**
    * Sets hostStatus
    *
    * @param string $hostStatus 云服务器所在主机状态。 UP：服务正常 UNKNOWN：状态未知 DOWN：服务异常 MAINTENANCE：维护状态 空字符串：弹性云服务器无主机信息
    *
    * @return $this
    */
    public function setHostStatus($hostStatus)
    {
        $this->container['hostStatus'] = $hostStatus;
        return $this;
    }

    /**
    * Gets addresses
    *  弹性云服务器的网络属性。
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsAddress[]
    */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
    * Sets addresses
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsAddress[] $addresses 弹性云服务器的网络属性。
    *
    * @return $this
    */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;
        return $this;
    }

    /**
    * Gets securityGroups
    *  弹性云服务器所属安全组列表。
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsSecurityGroup[]
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsSecurityGroup[] $securityGroups 弹性云服务器所属安全组列表。
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  弹性云服务器所在可用区名称。
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone 弹性云服务器所在可用区名称。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets flavor
    *  flavor
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsFlavor|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsFlavor|null $flavor flavor
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets volumesAttached
    *  挂载到弹性云服务器上的磁盘。
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsVolume[]
    */
    public function getVolumesAttached()
    {
        return $this->container['volumesAttached'];
    }

    /**
    * Sets volumesAttached
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsVolume[] $volumesAttached 挂载到弹性云服务器上的磁盘。
    *
    * @return $this
    */
    public function setVolumesAttached($volumesAttached)
    {
        $this->container['volumesAttached'] = $volumesAttached;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsMetadata
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsMetadata $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets updated
    *  弹性云服务器最近一次更新时间，例如开机、关机、重启等操作。 时间格式例如：2019-05-22T03:30:52Z
    *
    * @return string
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string $updated 弹性云服务器最近一次更新时间，例如开机、关机、重启等操作。 时间格式例如：2019-05-22T03:30:52Z
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets created
    *  弹性云服务器创建时间。 时间格式例如：2019-05-22T03:19:19Z
    *
    * @return string
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string $created 弹性云服务器创建时间。 时间格式例如：2019-05-22T03:19:19Z
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets keyName
    *  弹性云服务器使用的密钥对名称。
    *
    * @return string|null
    */
    public function getKeyName()
    {
        return $this->container['keyName'];
    }

    /**
    * Sets keyName
    *
    * @param string|null $keyName 弹性云服务器使用的密钥对名称。
    *
    * @return $this
    */
    public function setKeyName($keyName)
    {
        $this->container['keyName'] = $keyName;
        return $this;
    }

    /**
    * Gets schedulerHints
    *  schedulerHints
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsSchedulerHint|null
    */
    public function getSchedulerHints()
    {
        return $this->container['schedulerHints'];
    }

    /**
    * Sets schedulerHints
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsSchedulerHint|null $schedulerHints schedulerHints
    *
    * @return $this
    */
    public function setSchedulerHints($schedulerHints)
    {
        $this->container['schedulerHints'] = $schedulerHints;
        return $this;
    }

    /**
    * Gets hypervisor
    *  hypervisor
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsHypervisor|null
    */
    public function getHypervisor()
    {
        return $this->container['hypervisor'];
    }

    /**
    * Sets hypervisor
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEcsHypervisor|null $hypervisor hypervisor
    *
    * @return $this
    */
    public function setHypervisor($hypervisor)
    {
        $this->container['hypervisor'] = $hypervisor;
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

