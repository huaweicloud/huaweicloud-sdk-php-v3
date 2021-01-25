<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'updated' => 'string',
            'autoTerminateTime' => 'string',
            'hostId' => 'string',
            'osExtSrvAttRhost' => 'string',
            'addresses' => 'map[string,\HuaweiCloud\SDK\Ecs\V2\Model\ServerAddress[]]',
            'keyName' => 'string',
            'image' => '\HuaweiCloud\SDK\Ecs\V2\Model\ServerImage',
            'osExtStStaskState' => 'string',
            'osExtStSvmState' => 'string',
            'osExtSrvAttRinstanceName' => 'string',
            'osExtSrvAttRhypervisorHostname' => 'string',
            'flavor' => '\HuaweiCloud\SDK\Ecs\V2\Model\ServerFlavor',
            'id' => 'string',
            'securityGroups' => '\HuaweiCloud\SDK\Ecs\V2\Model\ServerSecurityGroup[]',
            'osExtAZavailabilityZone' => 'string',
            'userId' => 'string',
            'name' => 'string',
            'created' => 'string',
            'tenantId' => 'string',
            'osDcFdiskConfig' => 'string',
            'accessIPv4' => 'string',
            'accessIPv6' => 'string',
            'fault' => '\HuaweiCloud\SDK\Ecs\V2\Model\ServerFault',
            'progress' => 'int',
            'osExtStSpowerState' => 'int',
            'configDrive' => 'string',
            'metadata' => 'map[string,string]',
            'osSrvUsGlaunchedAt' => 'string',
            'osSrvUsGterminatedAt' => 'string',
            'osExtendedVolumesvolumesAttached' => '\HuaweiCloud\SDK\Ecs\V2\Model\ServerExtendVolumeAttachment[]',
            'description' => 'string',
            'hostStatus' => 'string',
            'osExtSrvAttRhostname' => 'string',
            'osExtSrvAttRreservationId' => 'string',
            'osExtSrvAttRlaunchIndex' => 'int',
            'osExtSrvAttRkernelId' => 'string',
            'osExtSrvAttRramdiskId' => 'string',
            'osExtSrvAttRrootDeviceName' => 'string',
            'osExtSrvAttRuserData' => 'string',
            'locked' => 'bool',
            'tags' => 'string[]',
            'osschedulerHints' => '\HuaweiCloud\SDK\Ecs\V2\Model\ServerSchedulerHints',
            'enterpriseProjectId' => 'string',
            'sysTags' => '\HuaweiCloud\SDK\Ecs\V2\Model\ServerSystemTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'updated' => null,
        'autoTerminateTime' => null,
        'hostId' => null,
        'osExtSrvAttRhost' => null,
        'addresses' => null,
        'keyName' => null,
        'image' => null,
        'osExtStStaskState' => null,
        'osExtStSvmState' => null,
        'osExtSrvAttRinstanceName' => null,
        'osExtSrvAttRhypervisorHostname' => null,
        'flavor' => null,
        'id' => null,
        'securityGroups' => null,
        'osExtAZavailabilityZone' => null,
        'userId' => null,
        'name' => null,
        'created' => null,
        'tenantId' => null,
        'osDcFdiskConfig' => null,
        'accessIPv4' => null,
        'accessIPv6' => null,
        'fault' => null,
        'progress' => 'int32',
        'osExtStSpowerState' => 'int32',
        'configDrive' => null,
        'metadata' => null,
        'osSrvUsGlaunchedAt' => null,
        'osSrvUsGterminatedAt' => null,
        'osExtendedVolumesvolumesAttached' => null,
        'description' => null,
        'hostStatus' => null,
        'osExtSrvAttRhostname' => null,
        'osExtSrvAttRreservationId' => null,
        'osExtSrvAttRlaunchIndex' => 'int32',
        'osExtSrvAttRkernelId' => null,
        'osExtSrvAttRramdiskId' => null,
        'osExtSrvAttRrootDeviceName' => null,
        'osExtSrvAttRuserData' => null,
        'locked' => null,
        'tags' => null,
        'osschedulerHints' => null,
        'enterpriseProjectId' => null,
        'sysTags' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'updated' => 'updated',
            'autoTerminateTime' => 'auto_terminate_time',
            'hostId' => 'hostId',
            'osExtSrvAttRhost' => 'OS-EXT-SRV-ATTR:host',
            'addresses' => 'addresses',
            'keyName' => 'key_name',
            'image' => 'image',
            'osExtStStaskState' => 'OS-EXT-STS:task_state',
            'osExtStSvmState' => 'OS-EXT-STS:vm_state',
            'osExtSrvAttRinstanceName' => 'OS-EXT-SRV-ATTR:instance_name',
            'osExtSrvAttRhypervisorHostname' => 'OS-EXT-SRV-ATTR:hypervisor_hostname',
            'flavor' => 'flavor',
            'id' => 'id',
            'securityGroups' => 'security_groups',
            'osExtAZavailabilityZone' => 'OS-EXT-AZ:availability_zone',
            'userId' => 'user_id',
            'name' => 'name',
            'created' => 'created',
            'tenantId' => 'tenant_id',
            'osDcFdiskConfig' => 'OS-DCF:diskConfig',
            'accessIPv4' => 'accessIPv4',
            'accessIPv6' => 'accessIPv6',
            'fault' => 'fault',
            'progress' => 'progress',
            'osExtStSpowerState' => 'OS-EXT-STS:power_state',
            'configDrive' => 'config_drive',
            'metadata' => 'metadata',
            'osSrvUsGlaunchedAt' => 'OS-SRV-USG:launched_at',
            'osSrvUsGterminatedAt' => 'OS-SRV-USG:terminated_at',
            'osExtendedVolumesvolumesAttached' => 'os-extended-volumes:volumes_attached',
            'description' => 'description',
            'hostStatus' => 'host_status',
            'osExtSrvAttRhostname' => 'OS-EXT-SRV-ATTR:hostname',
            'osExtSrvAttRreservationId' => 'OS-EXT-SRV-ATTR:reservation_id',
            'osExtSrvAttRlaunchIndex' => 'OS-EXT-SRV-ATTR:launch_index',
            'osExtSrvAttRkernelId' => 'OS-EXT-SRV-ATTR:kernel_id',
            'osExtSrvAttRramdiskId' => 'OS-EXT-SRV-ATTR:ramdisk_id',
            'osExtSrvAttRrootDeviceName' => 'OS-EXT-SRV-ATTR:root_device_name',
            'osExtSrvAttRuserData' => 'OS-EXT-SRV-ATTR:user_data',
            'locked' => 'locked',
            'tags' => 'tags',
            'osschedulerHints' => 'os:scheduler_hints',
            'enterpriseProjectId' => 'enterprise_project_id',
            'sysTags' => 'sys_tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'updated' => 'setUpdated',
            'autoTerminateTime' => 'setAutoTerminateTime',
            'hostId' => 'setHostId',
            'osExtSrvAttRhost' => 'setOsExtSrvAttRhost',
            'addresses' => 'setAddresses',
            'keyName' => 'setKeyName',
            'image' => 'setImage',
            'osExtStStaskState' => 'setOsExtStStaskState',
            'osExtStSvmState' => 'setOsExtStSvmState',
            'osExtSrvAttRinstanceName' => 'setOsExtSrvAttRinstanceName',
            'osExtSrvAttRhypervisorHostname' => 'setOsExtSrvAttRhypervisorHostname',
            'flavor' => 'setFlavor',
            'id' => 'setId',
            'securityGroups' => 'setSecurityGroups',
            'osExtAZavailabilityZone' => 'setOsExtAZavailabilityZone',
            'userId' => 'setUserId',
            'name' => 'setName',
            'created' => 'setCreated',
            'tenantId' => 'setTenantId',
            'osDcFdiskConfig' => 'setOsDcFdiskConfig',
            'accessIPv4' => 'setAccessIPv4',
            'accessIPv6' => 'setAccessIPv6',
            'fault' => 'setFault',
            'progress' => 'setProgress',
            'osExtStSpowerState' => 'setOsExtStSpowerState',
            'configDrive' => 'setConfigDrive',
            'metadata' => 'setMetadata',
            'osSrvUsGlaunchedAt' => 'setOsSrvUsGlaunchedAt',
            'osSrvUsGterminatedAt' => 'setOsSrvUsGterminatedAt',
            'osExtendedVolumesvolumesAttached' => 'setOsExtendedVolumesvolumesAttached',
            'description' => 'setDescription',
            'hostStatus' => 'setHostStatus',
            'osExtSrvAttRhostname' => 'setOsExtSrvAttRhostname',
            'osExtSrvAttRreservationId' => 'setOsExtSrvAttRreservationId',
            'osExtSrvAttRlaunchIndex' => 'setOsExtSrvAttRlaunchIndex',
            'osExtSrvAttRkernelId' => 'setOsExtSrvAttRkernelId',
            'osExtSrvAttRramdiskId' => 'setOsExtSrvAttRramdiskId',
            'osExtSrvAttRrootDeviceName' => 'setOsExtSrvAttRrootDeviceName',
            'osExtSrvAttRuserData' => 'setOsExtSrvAttRuserData',
            'locked' => 'setLocked',
            'tags' => 'setTags',
            'osschedulerHints' => 'setOsschedulerHints',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'sysTags' => 'setSysTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'updated' => 'getUpdated',
            'autoTerminateTime' => 'getAutoTerminateTime',
            'hostId' => 'getHostId',
            'osExtSrvAttRhost' => 'getOsExtSrvAttRhost',
            'addresses' => 'getAddresses',
            'keyName' => 'getKeyName',
            'image' => 'getImage',
            'osExtStStaskState' => 'getOsExtStStaskState',
            'osExtStSvmState' => 'getOsExtStSvmState',
            'osExtSrvAttRinstanceName' => 'getOsExtSrvAttRinstanceName',
            'osExtSrvAttRhypervisorHostname' => 'getOsExtSrvAttRhypervisorHostname',
            'flavor' => 'getFlavor',
            'id' => 'getId',
            'securityGroups' => 'getSecurityGroups',
            'osExtAZavailabilityZone' => 'getOsExtAZavailabilityZone',
            'userId' => 'getUserId',
            'name' => 'getName',
            'created' => 'getCreated',
            'tenantId' => 'getTenantId',
            'osDcFdiskConfig' => 'getOsDcFdiskConfig',
            'accessIPv4' => 'getAccessIPv4',
            'accessIPv6' => 'getAccessIPv6',
            'fault' => 'getFault',
            'progress' => 'getProgress',
            'osExtStSpowerState' => 'getOsExtStSpowerState',
            'configDrive' => 'getConfigDrive',
            'metadata' => 'getMetadata',
            'osSrvUsGlaunchedAt' => 'getOsSrvUsGlaunchedAt',
            'osSrvUsGterminatedAt' => 'getOsSrvUsGterminatedAt',
            'osExtendedVolumesvolumesAttached' => 'getOsExtendedVolumesvolumesAttached',
            'description' => 'getDescription',
            'hostStatus' => 'getHostStatus',
            'osExtSrvAttRhostname' => 'getOsExtSrvAttRhostname',
            'osExtSrvAttRreservationId' => 'getOsExtSrvAttRreservationId',
            'osExtSrvAttRlaunchIndex' => 'getOsExtSrvAttRlaunchIndex',
            'osExtSrvAttRkernelId' => 'getOsExtSrvAttRkernelId',
            'osExtSrvAttRramdiskId' => 'getOsExtSrvAttRramdiskId',
            'osExtSrvAttRrootDeviceName' => 'getOsExtSrvAttRrootDeviceName',
            'osExtSrvAttRuserData' => 'getOsExtSrvAttRuserData',
            'locked' => 'getLocked',
            'tags' => 'getTags',
            'osschedulerHints' => 'getOsschedulerHints',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'sysTags' => 'getSysTags'
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
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['autoTerminateTime'] = isset($data['autoTerminateTime']) ? $data['autoTerminateTime'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['osExtSrvAttRhost'] = isset($data['osExtSrvAttRhost']) ? $data['osExtSrvAttRhost'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['keyName'] = isset($data['keyName']) ? $data['keyName'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['osExtStStaskState'] = isset($data['osExtStStaskState']) ? $data['osExtStStaskState'] : null;
        $this->container['osExtStSvmState'] = isset($data['osExtStSvmState']) ? $data['osExtStSvmState'] : null;
        $this->container['osExtSrvAttRinstanceName'] = isset($data['osExtSrvAttRinstanceName']) ? $data['osExtSrvAttRinstanceName'] : null;
        $this->container['osExtSrvAttRhypervisorHostname'] = isset($data['osExtSrvAttRhypervisorHostname']) ? $data['osExtSrvAttRhypervisorHostname'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['osExtAZavailabilityZone'] = isset($data['osExtAZavailabilityZone']) ? $data['osExtAZavailabilityZone'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['osDcFdiskConfig'] = isset($data['osDcFdiskConfig']) ? $data['osDcFdiskConfig'] : null;
        $this->container['accessIPv4'] = isset($data['accessIPv4']) ? $data['accessIPv4'] : null;
        $this->container['accessIPv6'] = isset($data['accessIPv6']) ? $data['accessIPv6'] : null;
        $this->container['fault'] = isset($data['fault']) ? $data['fault'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['osExtStSpowerState'] = isset($data['osExtStSpowerState']) ? $data['osExtStSpowerState'] : null;
        $this->container['configDrive'] = isset($data['configDrive']) ? $data['configDrive'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['osSrvUsGlaunchedAt'] = isset($data['osSrvUsGlaunchedAt']) ? $data['osSrvUsGlaunchedAt'] : null;
        $this->container['osSrvUsGterminatedAt'] = isset($data['osSrvUsGterminatedAt']) ? $data['osSrvUsGterminatedAt'] : null;
        $this->container['osExtendedVolumesvolumesAttached'] = isset($data['osExtendedVolumesvolumesAttached']) ? $data['osExtendedVolumesvolumesAttached'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['osExtSrvAttRhostname'] = isset($data['osExtSrvAttRhostname']) ? $data['osExtSrvAttRhostname'] : null;
        $this->container['osExtSrvAttRreservationId'] = isset($data['osExtSrvAttRreservationId']) ? $data['osExtSrvAttRreservationId'] : null;
        $this->container['osExtSrvAttRlaunchIndex'] = isset($data['osExtSrvAttRlaunchIndex']) ? $data['osExtSrvAttRlaunchIndex'] : null;
        $this->container['osExtSrvAttRkernelId'] = isset($data['osExtSrvAttRkernelId']) ? $data['osExtSrvAttRkernelId'] : null;
        $this->container['osExtSrvAttRramdiskId'] = isset($data['osExtSrvAttRramdiskId']) ? $data['osExtSrvAttRramdiskId'] : null;
        $this->container['osExtSrvAttRrootDeviceName'] = isset($data['osExtSrvAttRrootDeviceName']) ? $data['osExtSrvAttRrootDeviceName'] : null;
        $this->container['osExtSrvAttRuserData'] = isset($data['osExtSrvAttRuserData']) ? $data['osExtSrvAttRuserData'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['osschedulerHints'] = isset($data['osschedulerHints']) ? $data['osschedulerHints'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
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
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['autoTerminateTime'] === null) {
            $invalidProperties[] = "'autoTerminateTime' can't be null";
        }
        if ($this->container['hostId'] === null) {
            $invalidProperties[] = "'hostId' can't be null";
        }
        if ($this->container['osExtSrvAttRhost'] === null) {
            $invalidProperties[] = "'osExtSrvAttRhost' can't be null";
        }
        if ($this->container['addresses'] === null) {
            $invalidProperties[] = "'addresses' can't be null";
        }
        if ($this->container['keyName'] === null) {
            $invalidProperties[] = "'keyName' can't be null";
        }
        if ($this->container['image'] === null) {
            $invalidProperties[] = "'image' can't be null";
        }
        if ($this->container['osExtStStaskState'] === null) {
            $invalidProperties[] = "'osExtStStaskState' can't be null";
        }
        if ($this->container['osExtStSvmState'] === null) {
            $invalidProperties[] = "'osExtStSvmState' can't be null";
        }
        if ($this->container['osExtSrvAttRinstanceName'] === null) {
            $invalidProperties[] = "'osExtSrvAttRinstanceName' can't be null";
        }
        if ($this->container['osExtSrvAttRhypervisorHostname'] === null) {
            $invalidProperties[] = "'osExtSrvAttRhypervisorHostname' can't be null";
        }
        if ($this->container['flavor'] === null) {
            $invalidProperties[] = "'flavor' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['securityGroups'] === null) {
            $invalidProperties[] = "'securityGroups' can't be null";
        }
        if ($this->container['osExtAZavailabilityZone'] === null) {
            $invalidProperties[] = "'osExtAZavailabilityZone' can't be null";
        }
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
        if ($this->container['accessIPv4'] === null) {
            $invalidProperties[] = "'accessIPv4' can't be null";
        }
        if ($this->container['accessIPv6'] === null) {
            $invalidProperties[] = "'accessIPv6' can't be null";
        }
        if ($this->container['osExtStSpowerState'] === null) {
            $invalidProperties[] = "'osExtStSpowerState' can't be null";
        }
        if ($this->container['configDrive'] === null) {
            $invalidProperties[] = "'configDrive' can't be null";
        }
        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
        }
        if ($this->container['osSrvUsGlaunchedAt'] === null) {
            $invalidProperties[] = "'osSrvUsGlaunchedAt' can't be null";
        }
        if ($this->container['osSrvUsGterminatedAt'] === null) {
            $invalidProperties[] = "'osSrvUsGterminatedAt' can't be null";
        }
        if ($this->container['osExtendedVolumesvolumesAttached'] === null) {
            $invalidProperties[] = "'osExtendedVolumesvolumesAttached' can't be null";
        }
        if ($this->container['hostStatus'] === null) {
            $invalidProperties[] = "'hostStatus' can't be null";
        }
        if ($this->container['osExtSrvAttRhostname'] === null) {
            $invalidProperties[] = "'osExtSrvAttRhostname' can't be null";
        }
        if ($this->container['osExtSrvAttRlaunchIndex'] === null) {
            $invalidProperties[] = "'osExtSrvAttRlaunchIndex' can't be null";
        }
        if ($this->container['osExtSrvAttRkernelId'] === null) {
            $invalidProperties[] = "'osExtSrvAttRkernelId' can't be null";
        }
        if ($this->container['osExtSrvAttRramdiskId'] === null) {
            $invalidProperties[] = "'osExtSrvAttRramdiskId' can't be null";
        }
        if ($this->container['osExtSrvAttRrootDeviceName'] === null) {
            $invalidProperties[] = "'osExtSrvAttRrootDeviceName' can't be null";
        }
        if ($this->container['locked'] === null) {
            $invalidProperties[] = "'locked' can't be null";
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
    * @param string $status 弹性云服务器状态。  取值范围：  ACTIVE、BUILD、DELETED、ERROR、HARD_REBOOT、MIGRATING、PAUSED、REBOOT、REBUILD、RESIZE、REVERT_RESIZE、SHUTOFF、SHELVED、SHELVED_OFFLOADED、SOFT_DELETED、SUSPENDED、VERIFY_RESIZE
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets updated
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
    * @param string $updated 弹性云服务器更新时间。  时间格式例如：2019-05-22T03:30:52Z
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets autoTerminateTime
    *
    * @return string
    */
    public function getAutoTerminateTime()
    {
        return $this->container['autoTerminateTime'];
    }

    /**
    * Sets autoTerminateTime
    *
    * @param string $autoTerminateTime 弹性云服务器自动释放时间。  时间格式例如：2020-01-19T03:30:52Z
    *
    * @return $this
    */
    public function setAutoTerminateTime($autoTerminateTime)
    {
        $this->container['autoTerminateTime'] = $autoTerminateTime;
        return $this;
    }

    /**
    * Gets hostId
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
    * Gets osExtSrvAttRhost
    *
    * @return string
    */
    public function getOsExtSrvAttRhost()
    {
        return $this->container['osExtSrvAttRhost'];
    }

    /**
    * Sets osExtSrvAttRhost
    *
    * @param string $osExtSrvAttRhost 弹性云服务器所在主机的主机名称。
    *
    * @return $this
    */
    public function setOsExtSrvAttRhost($osExtSrvAttRhost)
    {
        $this->container['osExtSrvAttRhost'] = $osExtSrvAttRhost;
        return $this;
    }

    /**
    * Gets addresses
    *
    * @return map[string,\HuaweiCloud\SDK\Ecs\V2\Model\ServerAddress[]]
    */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
    * Sets addresses
    *
    * @param map[string,\HuaweiCloud\SDK\Ecs\V2\Model\ServerAddress[]] $addresses 弹性云服务器的网络属性。
    *
    * @return $this
    */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;
        return $this;
    }

    /**
    * Gets keyName
    *
    * @return string
    */
    public function getKeyName()
    {
        return $this->container['keyName'];
    }

    /**
    * Sets keyName
    *
    * @param string $keyName 弹性云服务器使用的密钥对名称。
    *
    * @return $this
    */
    public function setKeyName($keyName)
    {
        $this->container['keyName'] = $keyName;
        return $this;
    }

    /**
    * Gets image
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\ServerImage
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\ServerImage $image image
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets osExtStStaskState
    *
    * @return string
    */
    public function getOsExtStStaskState()
    {
        return $this->container['osExtStStaskState'];
    }

    /**
    * Sets osExtStStaskState
    *
    * @param string $osExtStStaskState 扩展属性，弹性云服务器当前任务的状态。
    *
    * @return $this
    */
    public function setOsExtStStaskState($osExtStStaskState)
    {
        $this->container['osExtStStaskState'] = $osExtStStaskState;
        return $this;
    }

    /**
    * Gets osExtStSvmState
    *
    * @return string
    */
    public function getOsExtStSvmState()
    {
        return $this->container['osExtStSvmState'];
    }

    /**
    * Sets osExtStSvmState
    *
    * @param string $osExtStSvmState 扩展属性，弹性云服务器当前状态。
    *
    * @return $this
    */
    public function setOsExtStSvmState($osExtStSvmState)
    {
        $this->container['osExtStSvmState'] = $osExtStSvmState;
        return $this;
    }

    /**
    * Gets osExtSrvAttRinstanceName
    *
    * @return string
    */
    public function getOsExtSrvAttRinstanceName()
    {
        return $this->container['osExtSrvAttRinstanceName'];
    }

    /**
    * Sets osExtSrvAttRinstanceName
    *
    * @param string $osExtSrvAttRinstanceName 扩展属性，弹性云服务器别名。
    *
    * @return $this
    */
    public function setOsExtSrvAttRinstanceName($osExtSrvAttRinstanceName)
    {
        $this->container['osExtSrvAttRinstanceName'] = $osExtSrvAttRinstanceName;
        return $this;
    }

    /**
    * Gets osExtSrvAttRhypervisorHostname
    *
    * @return string
    */
    public function getOsExtSrvAttRhypervisorHostname()
    {
        return $this->container['osExtSrvAttRhypervisorHostname'];
    }

    /**
    * Sets osExtSrvAttRhypervisorHostname
    *
    * @param string $osExtSrvAttRhypervisorHostname 扩展属性，弹性云服务器所在虚拟化主机名。
    *
    * @return $this
    */
    public function setOsExtSrvAttRhypervisorHostname($osExtSrvAttRhypervisorHostname)
    {
        $this->container['osExtSrvAttRhypervisorHostname'] = $osExtSrvAttRhypervisorHostname;
        return $this;
    }

    /**
    * Gets flavor
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\ServerFlavor
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\ServerFlavor $flavor flavor
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets id
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
    * Gets securityGroups
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\ServerSecurityGroup[]
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\ServerSecurityGroup[] $securityGroups 弹性云服务器所属安全组列表。
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets osExtAZavailabilityZone
    *
    * @return string
    */
    public function getOsExtAZavailabilityZone()
    {
        return $this->container['osExtAZavailabilityZone'];
    }

    /**
    * Sets osExtAZavailabilityZone
    *
    * @param string $osExtAZavailabilityZone 扩展属性，弹性云服务器所在可用区名称。
    *
    * @return $this
    */
    public function setOsExtAZavailabilityZone($osExtAZavailabilityZone)
    {
        $this->container['osExtAZavailabilityZone'] = $osExtAZavailabilityZone;
        return $this;
    }

    /**
    * Gets userId
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
    * Gets name
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
    * Gets created
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
    * @param string $created 弹性云服务器创建时间。  时间格式例如：2019-05-22T03:19:19Z
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets tenantId
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
    * @param string $tenantId 弹性云服务器所属租户ID，即项目id，和project_id表示相同的概念，格式为UUID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets osDcFdiskConfig
    *
    * @return string|null
    */
    public function getOsDcFdiskConfig()
    {
        return $this->container['osDcFdiskConfig'];
    }

    /**
    * Sets osDcFdiskConfig
    *
    * @param string|null $osDcFdiskConfig 扩展属性， diskConfig的类型。  - MANUAL，镜像空间不会扩展。 - AUTO，系统盘镜像空间会自动扩展为与flavor大小一致。
    *
    * @return $this
    */
    public function setOsDcFdiskConfig($osDcFdiskConfig)
    {
        $this->container['osDcFdiskConfig'] = $osDcFdiskConfig;
        return $this;
    }

    /**
    * Gets accessIPv4
    *
    * @return string
    */
    public function getAccessIPv4()
    {
        return $this->container['accessIPv4'];
    }

    /**
    * Sets accessIPv4
    *
    * @param string $accessIPv4 预留属性。
    *
    * @return $this
    */
    public function setAccessIPv4($accessIPv4)
    {
        $this->container['accessIPv4'] = $accessIPv4;
        return $this;
    }

    /**
    * Gets accessIPv6
    *
    * @return string
    */
    public function getAccessIPv6()
    {
        return $this->container['accessIPv6'];
    }

    /**
    * Sets accessIPv6
    *
    * @param string $accessIPv6 预留属性。
    *
    * @return $this
    */
    public function setAccessIPv6($accessIPv6)
    {
        $this->container['accessIPv6'] = $accessIPv6;
        return $this;
    }

    /**
    * Gets fault
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\ServerFault|null
    */
    public function getFault()
    {
        return $this->container['fault'];
    }

    /**
    * Sets fault
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\ServerFault|null $fault fault
    *
    * @return $this
    */
    public function setFault($fault)
    {
        $this->container['fault'] = $fault;
        return $this;
    }

    /**
    * Gets progress
    *
    * @return int|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int|null $progress 弹性云服务器进度。
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets osExtStSpowerState
    *
    * @return int
    */
    public function getOsExtStSpowerState()
    {
        return $this->container['osExtStSpowerState'];
    }

    /**
    * Sets osExtStSpowerState
    *
    * @param int $osExtStSpowerState 扩展属性，弹性云服务器电源状态。
    *
    * @return $this
    */
    public function setOsExtStSpowerState($osExtStSpowerState)
    {
        $this->container['osExtStSpowerState'] = $osExtStSpowerState;
        return $this;
    }

    /**
    * Gets configDrive
    *
    * @return string
    */
    public function getConfigDrive()
    {
        return $this->container['configDrive'];
    }

    /**
    * Sets configDrive
    *
    * @param string $configDrive config drive信息。
    *
    * @return $this
    */
    public function setConfigDrive($configDrive)
    {
        $this->container['configDrive'] = $configDrive;
        return $this;
    }

    /**
    * Gets metadata
    *
    * @return map[string,string]
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param map[string,string] $metadata 弹性云服务器元数据。  > 说明： >  > 元数据包含系统默认添加字段和用户设置的字段。  系统默认添加字段  1. charging_mode 云服务器的计费类型。  - “0”：按需计费（即postPaid-后付费方式）。 - “1”：按包年包月计费（即prePaid-预付费方式）。\"2\"：竞价实例计费  2. metering.order_id 按“包年/包月”计费的云服务器对应的订单ID。  3. metering.product_id 按“包年/包月”计费的云服务器对应的产品ID。  4. vpc_id 云服务器所属的虚拟私有云ID。  5. EcmResStatus 云服务器的冻结状态。  - normal：云服务器正常状态（未被冻结）。 - freeze：云服务器被冻结。  > 当云服务器被冻结或者解冻后，系统默认添加该字段，且该字段必选。  6. metering.image_id 云服务器操作系统对应的镜像ID  7.  metering.imagetype 镜像类型，目前支持：  - 公共镜像（gold） - 私有镜像（private） - 共享镜像（shared）  8. metering.resourcespeccode 云服务器对应的资源规格。  9. image_name 云服务器操作系统对应的镜像名称。  10. os_bit 操作系统位数，一般取值为“32”或者“64”。  11. lockCheckEndpoint 回调URL，用于检查弹性云服务器的加锁是否有效。  - 如果有效，则云服务器保持锁定状态。 - 如果无效，解除锁定状态，删除失效的锁。  12. lockSource 弹性云服务器来自哪个服务。订单加锁（ORDER）  13. lockSourceId 弹性云服务器的加锁来自哪个ID。lockSource为“ORDER”时，lockSourceId为订单ID。  14. lockScene 弹性云服务器的加锁类型。  - 按需转包周期（TO_PERIOD_LOCK）  15. virtual_env_type  - IOS镜像创建虚拟机，\"virtual_env_type\": \"IsoImage\" 属性； - 非IOS镜像创建虚拟机，在19.5.0版本以后创建的虚拟机将不会添加virtual_env_type 属性，而在此之前的版本创建的虚拟机可能会返回\"virtual_env_type\": \"FusionCompute\"属性 。  > virtual_env_type属性不允许用户增加、删除和修改。  16. metering.resourcetype 云服务器对应的资源类型。  17. os_type 操作系统类型，取值为：Linux、Windows。  18. cascaded.instance_extrainfo 系统内部虚拟机扩展信息。  19. __support_agent_list 云服务器是否支持企业主机安全、主机监控。  - “hss”：企业主机安全 -  “ces”：主机监控  20. agency_name 委托的名称。  委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务的临时凭证。
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets osSrvUsGlaunchedAt
    *
    * @return string
    */
    public function getOsSrvUsGlaunchedAt()
    {
        return $this->container['osSrvUsGlaunchedAt'];
    }

    /**
    * Sets osSrvUsGlaunchedAt
    *
    * @param string $osSrvUsGlaunchedAt 弹性云服务器启动时间。时间格式例如：2019-05-22T03:23:59.000000
    *
    * @return $this
    */
    public function setOsSrvUsGlaunchedAt($osSrvUsGlaunchedAt)
    {
        $this->container['osSrvUsGlaunchedAt'] = $osSrvUsGlaunchedAt;
        return $this;
    }

    /**
    * Gets osSrvUsGterminatedAt
    *
    * @return string
    */
    public function getOsSrvUsGterminatedAt()
    {
        return $this->container['osSrvUsGterminatedAt'];
    }

    /**
    * Sets osSrvUsGterminatedAt
    *
    * @param string $osSrvUsGterminatedAt 弹性云服务器删除时间。  时间格式例如：2019-05-22T03:23:59.000000
    *
    * @return $this
    */
    public function setOsSrvUsGterminatedAt($osSrvUsGterminatedAt)
    {
        $this->container['osSrvUsGterminatedAt'] = $osSrvUsGterminatedAt;
        return $this;
    }

    /**
    * Gets osExtendedVolumesvolumesAttached
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\ServerExtendVolumeAttachment[]
    */
    public function getOsExtendedVolumesvolumesAttached()
    {
        return $this->container['osExtendedVolumesvolumesAttached'];
    }

    /**
    * Sets osExtendedVolumesvolumesAttached
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\ServerExtendVolumeAttachment[] $osExtendedVolumesvolumesAttached 挂载到弹性云服务器上的磁盘。
    *
    * @return $this
    */
    public function setOsExtendedVolumesvolumesAttached($osExtendedVolumesvolumesAttached)
    {
        $this->container['osExtendedVolumesvolumesAttached'] = $osExtendedVolumesvolumesAttached;
        return $this;
    }

    /**
    * Gets description
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
    * @param string|null $description 弹性云服务器的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets hostStatus
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
    * @param string $hostStatus nova-compute状态。  - UP：服务正常 - UNKNOWN：状态未知 - DOWN：服务异常 - MAINTENANCE：维护状态 - 空字符串：弹性云服务器无主机信息
    *
    * @return $this
    */
    public function setHostStatus($hostStatus)
    {
        $this->container['hostStatus'] = $hostStatus;
        return $this;
    }

    /**
    * Gets osExtSrvAttRhostname
    *
    * @return string
    */
    public function getOsExtSrvAttRhostname()
    {
        return $this->container['osExtSrvAttRhostname'];
    }

    /**
    * Sets osExtSrvAttRhostname
    *
    * @param string $osExtSrvAttRhostname 弹性云服务器的主机名。
    *
    * @return $this
    */
    public function setOsExtSrvAttRhostname($osExtSrvAttRhostname)
    {
        $this->container['osExtSrvAttRhostname'] = $osExtSrvAttRhostname;
        return $this;
    }

    /**
    * Gets osExtSrvAttRreservationId
    *
    * @return string|null
    */
    public function getOsExtSrvAttRreservationId()
    {
        return $this->container['osExtSrvAttRreservationId'];
    }

    /**
    * Sets osExtSrvAttRreservationId
    *
    * @param string|null $osExtSrvAttRreservationId 批量创建场景，弹性云服务器的预留ID。
    *
    * @return $this
    */
    public function setOsExtSrvAttRreservationId($osExtSrvAttRreservationId)
    {
        $this->container['osExtSrvAttRreservationId'] = $osExtSrvAttRreservationId;
        return $this;
    }

    /**
    * Gets osExtSrvAttRlaunchIndex
    *
    * @return int
    */
    public function getOsExtSrvAttRlaunchIndex()
    {
        return $this->container['osExtSrvAttRlaunchIndex'];
    }

    /**
    * Sets osExtSrvAttRlaunchIndex
    *
    * @param int $osExtSrvAttRlaunchIndex 批量创建场景，弹性云服务器的启动顺序。
    *
    * @return $this
    */
    public function setOsExtSrvAttRlaunchIndex($osExtSrvAttRlaunchIndex)
    {
        $this->container['osExtSrvAttRlaunchIndex'] = $osExtSrvAttRlaunchIndex;
        return $this;
    }

    /**
    * Gets osExtSrvAttRkernelId
    *
    * @return string
    */
    public function getOsExtSrvAttRkernelId()
    {
        return $this->container['osExtSrvAttRkernelId'];
    }

    /**
    * Sets osExtSrvAttRkernelId
    *
    * @param string $osExtSrvAttRkernelId 若使用AMI格式的镜像，则表示kernel image的UUID；否则，留空。
    *
    * @return $this
    */
    public function setOsExtSrvAttRkernelId($osExtSrvAttRkernelId)
    {
        $this->container['osExtSrvAttRkernelId'] = $osExtSrvAttRkernelId;
        return $this;
    }

    /**
    * Gets osExtSrvAttRramdiskId
    *
    * @return string
    */
    public function getOsExtSrvAttRramdiskId()
    {
        return $this->container['osExtSrvAttRramdiskId'];
    }

    /**
    * Sets osExtSrvAttRramdiskId
    *
    * @param string $osExtSrvAttRramdiskId 若使用AMI格式镜像，则表示ramdisk image的UUID；否则，留空。
    *
    * @return $this
    */
    public function setOsExtSrvAttRramdiskId($osExtSrvAttRramdiskId)
    {
        $this->container['osExtSrvAttRramdiskId'] = $osExtSrvAttRramdiskId;
        return $this;
    }

    /**
    * Gets osExtSrvAttRrootDeviceName
    *
    * @return string
    */
    public function getOsExtSrvAttRrootDeviceName()
    {
        return $this->container['osExtSrvAttRrootDeviceName'];
    }

    /**
    * Sets osExtSrvAttRrootDeviceName
    *
    * @param string $osExtSrvAttRrootDeviceName 弹性云服务器系统盘的设备名称。
    *
    * @return $this
    */
    public function setOsExtSrvAttRrootDeviceName($osExtSrvAttRrootDeviceName)
    {
        $this->container['osExtSrvAttRrootDeviceName'] = $osExtSrvAttRrootDeviceName;
        return $this;
    }

    /**
    * Gets osExtSrvAttRuserData
    *
    * @return string|null
    */
    public function getOsExtSrvAttRuserData()
    {
        return $this->container['osExtSrvAttRuserData'];
    }

    /**
    * Sets osExtSrvAttRuserData
    *
    * @param string|null $osExtSrvAttRuserData 创建弹性云服务器时指定的user_data。
    *
    * @return $this
    */
    public function setOsExtSrvAttRuserData($osExtSrvAttRuserData)
    {
        $this->container['osExtSrvAttRuserData'] = $osExtSrvAttRuserData;
        return $this;
    }

    /**
    * Gets locked
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
    * @param bool $locked 弹性云服务器是否为锁定状态。  - true：锁定 - false：未锁定
    *
    * @return $this
    */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;
        return $this;
    }

    /**
    * Gets tags
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
    * @param string[]|null $tags 弹性云服务器标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets osschedulerHints
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\ServerSchedulerHints|null
    */
    public function getOsschedulerHints()
    {
        return $this->container['osschedulerHints'];
    }

    /**
    * Sets osschedulerHints
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\ServerSchedulerHints|null $osschedulerHints osschedulerHints
    *
    * @return $this
    */
    public function setOsschedulerHints($osschedulerHints)
    {
        $this->container['osschedulerHints'] = $osschedulerHints;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
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
    * Gets sysTags
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\ServerSystemTag[]|null
    */
    public function getSysTags()
    {
        return $this->container['sysTags'];
    }

    /**
    * Sets sysTags
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\ServerSystemTag[]|null $sysTags 弹性云服务器系统标签。
    *
    * @return $this
    */
    public function setSysTags($sysTags)
    {
        $this->container['sysTags'] = $sysTags;
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

