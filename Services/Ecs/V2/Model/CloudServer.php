<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloudServer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloudServer';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  云服务器唯一标识。
    * name  云服务器名称。
    * status  云服务器当前状态信息。
    * tenantId  云服务器所属租户ID。即项目id，与project_id表示相同的概念。
    * userId  云服务器所属用户ID。
    * marketInfo  marketInfo
    * availabilityZone  可用分区
    * vmState  云服务器的状态。
    * taskState  云服务器任务状态。
    * powerState  云服务器电源状态。
    * created  云服务器创建时间。 时间格式例如：2020-05-22T07:48:53Z。
    * inRecycleBin  云服务器是否处于回收站中
    * spodId  共池裸机按整机柜发放的同一批次的批创ID
    * updated  云服务器上一次更新时间。时间格式例如：2020-05-22T07:48:53Z
    * launchedAt  云服务器启动时间。时间格式例如：2020-05-22T07:48:53.000000。
    * description  云服务器的描述信息。
    * keyName  云服务器使用的密钥对名称。
    * locked  云服务器是否为锁定状态。  true：锁定 false：未锁定
    * rootDeviceName  云服务器系统盘的设备名称，例如当系统盘的磁盘模式是VDB时，为/dev/vda。
    * tenancy  在专属主机或共享池中创建云服务器。默认为在共享池创建。值为： shared或dedicated。  shared：表示共享池。 dedicated:表示专属主机。
    * dedicatedHostId  专属主机ID。此属性仅在tenancy值为dedicated时有效，不指定此属性，系统将自动分配租户可自动放置云服务器的专属主机。
    * enterpriseProjectId  查询绑定某个企业项目的云服务器。 若需要查询当前用户所有企业项目绑定的云服务，请传参all_granted_eps。
    * metadata  云服务器元数据。
    * tags  云服务器的标签列表。
    * addresses  云服务器对应的网络地址信息。
    * securityGroups  云服务器的安全组信息。
    * volumesAttached  云服务器挂载磁盘信息。
    * image  image
    * flavor  flavor
    * fault  fault
    * cpuOptions  cpuOptions
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'tenantId' => 'string',
            'userId' => 'string',
            'marketInfo' => '\HuaweiCloud\SDK\Ecs\V2\Model\MarketModel',
            'availabilityZone' => 'string',
            'vmState' => 'string',
            'taskState' => 'string',
            'powerState' => 'int',
            'created' => 'string',
            'inRecycleBin' => 'bool',
            'spodId' => 'string',
            'updated' => 'string',
            'launchedAt' => 'string',
            'description' => 'string',
            'keyName' => 'string',
            'locked' => 'bool',
            'rootDeviceName' => 'string',
            'tenancy' => 'string',
            'dedicatedHostId' => 'string',
            'enterpriseProjectId' => 'string',
            'metadata' => 'map[string,string]',
            'tags' => 'string[]',
            'addresses' => 'map[string,\HuaweiCloud\SDK\Ecs\V2\Model\NetworkAddresses[]]',
            'securityGroups' => '\HuaweiCloud\SDK\Ecs\V2\Model\SecurityGroup[]',
            'volumesAttached' => '\HuaweiCloud\SDK\Ecs\V2\Model\VolumeAttach[]',
            'image' => '\HuaweiCloud\SDK\Ecs\V2\Model\Image',
            'flavor' => '\HuaweiCloud\SDK\Ecs\V2\Model\FlavorQuasar',
            'fault' => '\HuaweiCloud\SDK\Ecs\V2\Model\Fault',
            'cpuOptions' => '\HuaweiCloud\SDK\Ecs\V2\Model\CpuOptions'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  云服务器唯一标识。
    * name  云服务器名称。
    * status  云服务器当前状态信息。
    * tenantId  云服务器所属租户ID。即项目id，与project_id表示相同的概念。
    * userId  云服务器所属用户ID。
    * marketInfo  marketInfo
    * availabilityZone  可用分区
    * vmState  云服务器的状态。
    * taskState  云服务器任务状态。
    * powerState  云服务器电源状态。
    * created  云服务器创建时间。 时间格式例如：2020-05-22T07:48:53Z。
    * inRecycleBin  云服务器是否处于回收站中
    * spodId  共池裸机按整机柜发放的同一批次的批创ID
    * updated  云服务器上一次更新时间。时间格式例如：2020-05-22T07:48:53Z
    * launchedAt  云服务器启动时间。时间格式例如：2020-05-22T07:48:53.000000。
    * description  云服务器的描述信息。
    * keyName  云服务器使用的密钥对名称。
    * locked  云服务器是否为锁定状态。  true：锁定 false：未锁定
    * rootDeviceName  云服务器系统盘的设备名称，例如当系统盘的磁盘模式是VDB时，为/dev/vda。
    * tenancy  在专属主机或共享池中创建云服务器。默认为在共享池创建。值为： shared或dedicated。  shared：表示共享池。 dedicated:表示专属主机。
    * dedicatedHostId  专属主机ID。此属性仅在tenancy值为dedicated时有效，不指定此属性，系统将自动分配租户可自动放置云服务器的专属主机。
    * enterpriseProjectId  查询绑定某个企业项目的云服务器。 若需要查询当前用户所有企业项目绑定的云服务，请传参all_granted_eps。
    * metadata  云服务器元数据。
    * tags  云服务器的标签列表。
    * addresses  云服务器对应的网络地址信息。
    * securityGroups  云服务器的安全组信息。
    * volumesAttached  云服务器挂载磁盘信息。
    * image  image
    * flavor  flavor
    * fault  fault
    * cpuOptions  cpuOptions
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'tenantId' => null,
        'userId' => null,
        'marketInfo' => null,
        'availabilityZone' => null,
        'vmState' => null,
        'taskState' => null,
        'powerState' => null,
        'created' => null,
        'inRecycleBin' => null,
        'spodId' => null,
        'updated' => null,
        'launchedAt' => null,
        'description' => null,
        'keyName' => null,
        'locked' => null,
        'rootDeviceName' => null,
        'tenancy' => null,
        'dedicatedHostId' => null,
        'enterpriseProjectId' => null,
        'metadata' => null,
        'tags' => null,
        'addresses' => null,
        'securityGroups' => null,
        'volumesAttached' => null,
        'image' => null,
        'flavor' => null,
        'fault' => null,
        'cpuOptions' => null
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
    * id  云服务器唯一标识。
    * name  云服务器名称。
    * status  云服务器当前状态信息。
    * tenantId  云服务器所属租户ID。即项目id，与project_id表示相同的概念。
    * userId  云服务器所属用户ID。
    * marketInfo  marketInfo
    * availabilityZone  可用分区
    * vmState  云服务器的状态。
    * taskState  云服务器任务状态。
    * powerState  云服务器电源状态。
    * created  云服务器创建时间。 时间格式例如：2020-05-22T07:48:53Z。
    * inRecycleBin  云服务器是否处于回收站中
    * spodId  共池裸机按整机柜发放的同一批次的批创ID
    * updated  云服务器上一次更新时间。时间格式例如：2020-05-22T07:48:53Z
    * launchedAt  云服务器启动时间。时间格式例如：2020-05-22T07:48:53.000000。
    * description  云服务器的描述信息。
    * keyName  云服务器使用的密钥对名称。
    * locked  云服务器是否为锁定状态。  true：锁定 false：未锁定
    * rootDeviceName  云服务器系统盘的设备名称，例如当系统盘的磁盘模式是VDB时，为/dev/vda。
    * tenancy  在专属主机或共享池中创建云服务器。默认为在共享池创建。值为： shared或dedicated。  shared：表示共享池。 dedicated:表示专属主机。
    * dedicatedHostId  专属主机ID。此属性仅在tenancy值为dedicated时有效，不指定此属性，系统将自动分配租户可自动放置云服务器的专属主机。
    * enterpriseProjectId  查询绑定某个企业项目的云服务器。 若需要查询当前用户所有企业项目绑定的云服务，请传参all_granted_eps。
    * metadata  云服务器元数据。
    * tags  云服务器的标签列表。
    * addresses  云服务器对应的网络地址信息。
    * securityGroups  云服务器的安全组信息。
    * volumesAttached  云服务器挂载磁盘信息。
    * image  image
    * flavor  flavor
    * fault  fault
    * cpuOptions  cpuOptions
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'tenantId' => 'tenant_id',
            'userId' => 'user_id',
            'marketInfo' => 'market_info',
            'availabilityZone' => 'availability_zone',
            'vmState' => 'vm_state',
            'taskState' => 'task_state',
            'powerState' => 'power_state',
            'created' => 'created',
            'inRecycleBin' => 'in_recycle_bin',
            'spodId' => 'spod_id',
            'updated' => 'updated',
            'launchedAt' => 'launched_at',
            'description' => 'description',
            'keyName' => 'key_name',
            'locked' => 'locked',
            'rootDeviceName' => 'root_device_name',
            'tenancy' => 'tenancy',
            'dedicatedHostId' => 'dedicated_host_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'metadata' => 'metadata',
            'tags' => 'tags',
            'addresses' => 'addresses',
            'securityGroups' => 'security_groups',
            'volumesAttached' => 'volumes_attached',
            'image' => 'image',
            'flavor' => 'flavor',
            'fault' => 'fault',
            'cpuOptions' => 'cpu_options'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  云服务器唯一标识。
    * name  云服务器名称。
    * status  云服务器当前状态信息。
    * tenantId  云服务器所属租户ID。即项目id，与project_id表示相同的概念。
    * userId  云服务器所属用户ID。
    * marketInfo  marketInfo
    * availabilityZone  可用分区
    * vmState  云服务器的状态。
    * taskState  云服务器任务状态。
    * powerState  云服务器电源状态。
    * created  云服务器创建时间。 时间格式例如：2020-05-22T07:48:53Z。
    * inRecycleBin  云服务器是否处于回收站中
    * spodId  共池裸机按整机柜发放的同一批次的批创ID
    * updated  云服务器上一次更新时间。时间格式例如：2020-05-22T07:48:53Z
    * launchedAt  云服务器启动时间。时间格式例如：2020-05-22T07:48:53.000000。
    * description  云服务器的描述信息。
    * keyName  云服务器使用的密钥对名称。
    * locked  云服务器是否为锁定状态。  true：锁定 false：未锁定
    * rootDeviceName  云服务器系统盘的设备名称，例如当系统盘的磁盘模式是VDB时，为/dev/vda。
    * tenancy  在专属主机或共享池中创建云服务器。默认为在共享池创建。值为： shared或dedicated。  shared：表示共享池。 dedicated:表示专属主机。
    * dedicatedHostId  专属主机ID。此属性仅在tenancy值为dedicated时有效，不指定此属性，系统将自动分配租户可自动放置云服务器的专属主机。
    * enterpriseProjectId  查询绑定某个企业项目的云服务器。 若需要查询当前用户所有企业项目绑定的云服务，请传参all_granted_eps。
    * metadata  云服务器元数据。
    * tags  云服务器的标签列表。
    * addresses  云服务器对应的网络地址信息。
    * securityGroups  云服务器的安全组信息。
    * volumesAttached  云服务器挂载磁盘信息。
    * image  image
    * flavor  flavor
    * fault  fault
    * cpuOptions  cpuOptions
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'tenantId' => 'setTenantId',
            'userId' => 'setUserId',
            'marketInfo' => 'setMarketInfo',
            'availabilityZone' => 'setAvailabilityZone',
            'vmState' => 'setVmState',
            'taskState' => 'setTaskState',
            'powerState' => 'setPowerState',
            'created' => 'setCreated',
            'inRecycleBin' => 'setInRecycleBin',
            'spodId' => 'setSpodId',
            'updated' => 'setUpdated',
            'launchedAt' => 'setLaunchedAt',
            'description' => 'setDescription',
            'keyName' => 'setKeyName',
            'locked' => 'setLocked',
            'rootDeviceName' => 'setRootDeviceName',
            'tenancy' => 'setTenancy',
            'dedicatedHostId' => 'setDedicatedHostId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'metadata' => 'setMetadata',
            'tags' => 'setTags',
            'addresses' => 'setAddresses',
            'securityGroups' => 'setSecurityGroups',
            'volumesAttached' => 'setVolumesAttached',
            'image' => 'setImage',
            'flavor' => 'setFlavor',
            'fault' => 'setFault',
            'cpuOptions' => 'setCpuOptions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  云服务器唯一标识。
    * name  云服务器名称。
    * status  云服务器当前状态信息。
    * tenantId  云服务器所属租户ID。即项目id，与project_id表示相同的概念。
    * userId  云服务器所属用户ID。
    * marketInfo  marketInfo
    * availabilityZone  可用分区
    * vmState  云服务器的状态。
    * taskState  云服务器任务状态。
    * powerState  云服务器电源状态。
    * created  云服务器创建时间。 时间格式例如：2020-05-22T07:48:53Z。
    * inRecycleBin  云服务器是否处于回收站中
    * spodId  共池裸机按整机柜发放的同一批次的批创ID
    * updated  云服务器上一次更新时间。时间格式例如：2020-05-22T07:48:53Z
    * launchedAt  云服务器启动时间。时间格式例如：2020-05-22T07:48:53.000000。
    * description  云服务器的描述信息。
    * keyName  云服务器使用的密钥对名称。
    * locked  云服务器是否为锁定状态。  true：锁定 false：未锁定
    * rootDeviceName  云服务器系统盘的设备名称，例如当系统盘的磁盘模式是VDB时，为/dev/vda。
    * tenancy  在专属主机或共享池中创建云服务器。默认为在共享池创建。值为： shared或dedicated。  shared：表示共享池。 dedicated:表示专属主机。
    * dedicatedHostId  专属主机ID。此属性仅在tenancy值为dedicated时有效，不指定此属性，系统将自动分配租户可自动放置云服务器的专属主机。
    * enterpriseProjectId  查询绑定某个企业项目的云服务器。 若需要查询当前用户所有企业项目绑定的云服务，请传参all_granted_eps。
    * metadata  云服务器元数据。
    * tags  云服务器的标签列表。
    * addresses  云服务器对应的网络地址信息。
    * securityGroups  云服务器的安全组信息。
    * volumesAttached  云服务器挂载磁盘信息。
    * image  image
    * flavor  flavor
    * fault  fault
    * cpuOptions  cpuOptions
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'tenantId' => 'getTenantId',
            'userId' => 'getUserId',
            'marketInfo' => 'getMarketInfo',
            'availabilityZone' => 'getAvailabilityZone',
            'vmState' => 'getVmState',
            'taskState' => 'getTaskState',
            'powerState' => 'getPowerState',
            'created' => 'getCreated',
            'inRecycleBin' => 'getInRecycleBin',
            'spodId' => 'getSpodId',
            'updated' => 'getUpdated',
            'launchedAt' => 'getLaunchedAt',
            'description' => 'getDescription',
            'keyName' => 'getKeyName',
            'locked' => 'getLocked',
            'rootDeviceName' => 'getRootDeviceName',
            'tenancy' => 'getTenancy',
            'dedicatedHostId' => 'getDedicatedHostId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'metadata' => 'getMetadata',
            'tags' => 'getTags',
            'addresses' => 'getAddresses',
            'securityGroups' => 'getSecurityGroups',
            'volumesAttached' => 'getVolumesAttached',
            'image' => 'getImage',
            'flavor' => 'getFlavor',
            'fault' => 'getFault',
            'cpuOptions' => 'getCpuOptions'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['marketInfo'] = isset($data['marketInfo']) ? $data['marketInfo'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['vmState'] = isset($data['vmState']) ? $data['vmState'] : null;
        $this->container['taskState'] = isset($data['taskState']) ? $data['taskState'] : null;
        $this->container['powerState'] = isset($data['powerState']) ? $data['powerState'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['inRecycleBin'] = isset($data['inRecycleBin']) ? $data['inRecycleBin'] : null;
        $this->container['spodId'] = isset($data['spodId']) ? $data['spodId'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['launchedAt'] = isset($data['launchedAt']) ? $data['launchedAt'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['keyName'] = isset($data['keyName']) ? $data['keyName'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['rootDeviceName'] = isset($data['rootDeviceName']) ? $data['rootDeviceName'] : null;
        $this->container['tenancy'] = isset($data['tenancy']) ? $data['tenancy'] : null;
        $this->container['dedicatedHostId'] = isset($data['dedicatedHostId']) ? $data['dedicatedHostId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['volumesAttached'] = isset($data['volumesAttached']) ? $data['volumesAttached'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['fault'] = isset($data['fault']) ? $data['fault'] : null;
        $this->container['cpuOptions'] = isset($data['cpuOptions']) ? $data['cpuOptions'] : null;
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
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['vmState'] === null) {
            $invalidProperties[] = "'vmState' can't be null";
        }
        if ($this->container['taskState'] === null) {
            $invalidProperties[] = "'taskState' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['inRecycleBin'] === null) {
            $invalidProperties[] = "'inRecycleBin' can't be null";
        }
        if ($this->container['spodId'] === null) {
            $invalidProperties[] = "'spodId' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['flavor'] === null) {
            $invalidProperties[] = "'flavor' can't be null";
        }
        if ($this->container['fault'] === null) {
            $invalidProperties[] = "'fault' can't be null";
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
    *  云服务器唯一标识。
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
    * @param string $id 云服务器唯一标识。
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
    *  云服务器名称。
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
    * @param string $name 云服务器名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  云服务器当前状态信息。
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
    * @param string $status 云服务器当前状态信息。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tenantId
    *  云服务器所属租户ID。即项目id，与project_id表示相同的概念。
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
    * @param string $tenantId 云服务器所属租户ID。即项目id，与project_id表示相同的概念。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets userId
    *  云服务器所属用户ID。
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
    * @param string $userId 云服务器所属用户ID。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets marketInfo
    *  marketInfo
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\MarketModel|null
    */
    public function getMarketInfo()
    {
        return $this->container['marketInfo'];
    }

    /**
    * Sets marketInfo
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\MarketModel|null $marketInfo marketInfo
    *
    * @return $this
    */
    public function setMarketInfo($marketInfo)
    {
        $this->container['marketInfo'] = $marketInfo;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  可用分区
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
    * @param string $availabilityZone 可用分区
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets vmState
    *  云服务器的状态。
    *
    * @return string
    */
    public function getVmState()
    {
        return $this->container['vmState'];
    }

    /**
    * Sets vmState
    *
    * @param string $vmState 云服务器的状态。
    *
    * @return $this
    */
    public function setVmState($vmState)
    {
        $this->container['vmState'] = $vmState;
        return $this;
    }

    /**
    * Gets taskState
    *  云服务器任务状态。
    *
    * @return string
    */
    public function getTaskState()
    {
        return $this->container['taskState'];
    }

    /**
    * Sets taskState
    *
    * @param string $taskState 云服务器任务状态。
    *
    * @return $this
    */
    public function setTaskState($taskState)
    {
        $this->container['taskState'] = $taskState;
        return $this;
    }

    /**
    * Gets powerState
    *  云服务器电源状态。
    *
    * @return int|null
    */
    public function getPowerState()
    {
        return $this->container['powerState'];
    }

    /**
    * Sets powerState
    *
    * @param int|null $powerState 云服务器电源状态。
    *
    * @return $this
    */
    public function setPowerState($powerState)
    {
        $this->container['powerState'] = $powerState;
        return $this;
    }

    /**
    * Gets created
    *  云服务器创建时间。 时间格式例如：2020-05-22T07:48:53Z。
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
    * @param string $created 云服务器创建时间。 时间格式例如：2020-05-22T07:48:53Z。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets inRecycleBin
    *  云服务器是否处于回收站中
    *
    * @return bool
    */
    public function getInRecycleBin()
    {
        return $this->container['inRecycleBin'];
    }

    /**
    * Sets inRecycleBin
    *
    * @param bool $inRecycleBin 云服务器是否处于回收站中
    *
    * @return $this
    */
    public function setInRecycleBin($inRecycleBin)
    {
        $this->container['inRecycleBin'] = $inRecycleBin;
        return $this;
    }

    /**
    * Gets spodId
    *  共池裸机按整机柜发放的同一批次的批创ID
    *
    * @return string
    */
    public function getSpodId()
    {
        return $this->container['spodId'];
    }

    /**
    * Sets spodId
    *
    * @param string $spodId 共池裸机按整机柜发放的同一批次的批创ID
    *
    * @return $this
    */
    public function setSpodId($spodId)
    {
        $this->container['spodId'] = $spodId;
        return $this;
    }

    /**
    * Gets updated
    *  云服务器上一次更新时间。时间格式例如：2020-05-22T07:48:53Z
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
    * @param string $updated 云服务器上一次更新时间。时间格式例如：2020-05-22T07:48:53Z
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets launchedAt
    *  云服务器启动时间。时间格式例如：2020-05-22T07:48:53.000000。
    *
    * @return string|null
    */
    public function getLaunchedAt()
    {
        return $this->container['launchedAt'];
    }

    /**
    * Sets launchedAt
    *
    * @param string|null $launchedAt 云服务器启动时间。时间格式例如：2020-05-22T07:48:53.000000。
    *
    * @return $this
    */
    public function setLaunchedAt($launchedAt)
    {
        $this->container['launchedAt'] = $launchedAt;
        return $this;
    }

    /**
    * Gets description
    *  云服务器的描述信息。
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
    * @param string|null $description 云服务器的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets keyName
    *  云服务器使用的密钥对名称。
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
    * @param string|null $keyName 云服务器使用的密钥对名称。
    *
    * @return $this
    */
    public function setKeyName($keyName)
    {
        $this->container['keyName'] = $keyName;
        return $this;
    }

    /**
    * Gets locked
    *  云服务器是否为锁定状态。  true：锁定 false：未锁定
    *
    * @return bool|null
    */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
    * Sets locked
    *
    * @param bool|null $locked 云服务器是否为锁定状态。  true：锁定 false：未锁定
    *
    * @return $this
    */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;
        return $this;
    }

    /**
    * Gets rootDeviceName
    *  云服务器系统盘的设备名称，例如当系统盘的磁盘模式是VDB时，为/dev/vda。
    *
    * @return string|null
    */
    public function getRootDeviceName()
    {
        return $this->container['rootDeviceName'];
    }

    /**
    * Sets rootDeviceName
    *
    * @param string|null $rootDeviceName 云服务器系统盘的设备名称，例如当系统盘的磁盘模式是VDB时，为/dev/vda。
    *
    * @return $this
    */
    public function setRootDeviceName($rootDeviceName)
    {
        $this->container['rootDeviceName'] = $rootDeviceName;
        return $this;
    }

    /**
    * Gets tenancy
    *  在专属主机或共享池中创建云服务器。默认为在共享池创建。值为： shared或dedicated。  shared：表示共享池。 dedicated:表示专属主机。
    *
    * @return string|null
    */
    public function getTenancy()
    {
        return $this->container['tenancy'];
    }

    /**
    * Sets tenancy
    *
    * @param string|null $tenancy 在专属主机或共享池中创建云服务器。默认为在共享池创建。值为： shared或dedicated。  shared：表示共享池。 dedicated:表示专属主机。
    *
    * @return $this
    */
    public function setTenancy($tenancy)
    {
        $this->container['tenancy'] = $tenancy;
        return $this;
    }

    /**
    * Gets dedicatedHostId
    *  专属主机ID。此属性仅在tenancy值为dedicated时有效，不指定此属性，系统将自动分配租户可自动放置云服务器的专属主机。
    *
    * @return string|null
    */
    public function getDedicatedHostId()
    {
        return $this->container['dedicatedHostId'];
    }

    /**
    * Sets dedicatedHostId
    *
    * @param string|null $dedicatedHostId 专属主机ID。此属性仅在tenancy值为dedicated时有效，不指定此属性，系统将自动分配租户可自动放置云服务器的专属主机。
    *
    * @return $this
    */
    public function setDedicatedHostId($dedicatedHostId)
    {
        $this->container['dedicatedHostId'] = $dedicatedHostId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  查询绑定某个企业项目的云服务器。 若需要查询当前用户所有企业项目绑定的云服务，请传参all_granted_eps。
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
    * @param string|null $enterpriseProjectId 查询绑定某个企业项目的云服务器。 若需要查询当前用户所有企业项目绑定的云服务，请传参all_granted_eps。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets metadata
    *  云服务器元数据。
    *
    * @return map[string,string]|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param map[string,string]|null $metadata 云服务器元数据。
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets tags
    *  云服务器的标签列表。
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 云服务器的标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets addresses
    *  云服务器对应的网络地址信息。
    *
    * @return map[string,\HuaweiCloud\SDK\Ecs\V2\Model\NetworkAddresses[]]|null
    */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
    * Sets addresses
    *
    * @param map[string,\HuaweiCloud\SDK\Ecs\V2\Model\NetworkAddresses[]]|null $addresses 云服务器对应的网络地址信息。
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
    *  云服务器的安全组信息。
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\SecurityGroup[]|null
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\SecurityGroup[]|null $securityGroups 云服务器的安全组信息。
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets volumesAttached
    *  云服务器挂载磁盘信息。
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\VolumeAttach[]|null
    */
    public function getVolumesAttached()
    {
        return $this->container['volumesAttached'];
    }

    /**
    * Sets volumesAttached
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\VolumeAttach[]|null $volumesAttached 云服务器挂载磁盘信息。
    *
    * @return $this
    */
    public function setVolumesAttached($volumesAttached)
    {
        $this->container['volumesAttached'] = $volumesAttached;
        return $this;
    }

    /**
    * Gets image
    *  image
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\Image|null
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\Image|null $image image
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets flavor
    *  flavor
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\FlavorQuasar
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\FlavorQuasar $flavor flavor
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets fault
    *  fault
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\Fault
    */
    public function getFault()
    {
        return $this->container['fault'];
    }

    /**
    * Sets fault
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\Fault $fault fault
    *
    * @return $this
    */
    public function setFault($fault)
    {
        $this->container['fault'] = $fault;
        return $this;
    }

    /**
    * Gets cpuOptions
    *  cpuOptions
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\CpuOptions|null
    */
    public function getCpuOptions()
    {
        return $this->container['cpuOptions'];
    }

    /**
    * Sets cpuOptions
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\CpuOptions|null $cpuOptions cpuOptions
    *
    * @return $this
    */
    public function setCpuOptions($cpuOptions)
    {
        $this->container['cpuOptions'] = $cpuOptions;
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

