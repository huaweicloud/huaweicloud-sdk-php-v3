<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NovaServer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NovaServer';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'id' => 'string',
            'status' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'flavor' => '\HuaweiCloud\SDK\Ecs\V2\Model\NovaServerFlavor',
            'image' => '\HuaweiCloud\SDK\Ecs\V2\Model\NovaServerImage',
            'tenantId' => 'string',
            'keyName' => 'string',
            'userId' => 'string',
            'metadata' => 'map[string,string]',
            'hostId' => 'string',
            'addresses' => 'map[string,\HuaweiCloud\SDK\Ecs\V2\Model\NovaNetwork[]]',
            'securityGroups' => '\HuaweiCloud\SDK\Ecs\V2\Model\NovaServerSecurityGroup[]',
            'links' => '\HuaweiCloud\SDK\Ecs\V2\Model\NovaLink[]',
            'osDcFdiskConfig' => 'string',
            'osExtAZavailabilityZone' => 'string',
            'osExtSrvAttRhost' => 'string',
            'osExtSrvAttRhypervisorHostname' => 'string',
            'osExtSrvAttRinstanceName' => 'string',
            'osExtStSpowerState' => 'int',
            'osExtStStaskState' => 'string',
            'osExtStSvmState' => 'string',
            'osSrvUsGlaunchedAt' => 'string',
            'osSrvUsGterminatedAt' => 'string',
            'osExtendedVolumesvolumesAttached' => '\HuaweiCloud\SDK\Ecs\V2\Model\NovaServerVolume[]',
            'fault' => '\HuaweiCloud\SDK\Ecs\V2\Model\NovaServerFault',
            'description' => 'string',
            'hostStatus' => 'string',
            'osExtSrvAttRhostname' => 'string',
            'osExtSrvAttRreservationId' => 'string',
            'osExtSrvAttRlaunchIndex' => 'int',
            'osExtSrvAttRkernelId' => 'string',
            'osExtSrvAttRramdiskId' => 'string',
            'osExtSrvAttRrootDeviceName' => 'string',
            'osExtSrvAttRuserData' => 'string',
            'tags' => 'string[]',
            'locked' => 'bool',
            'accessIPv4' => 'string',
            'accessIPv6' => 'string',
            'configDrive' => 'string',
            'progress' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'id' => null,
        'status' => null,
        'created' => null,
        'updated' => null,
        'flavor' => null,
        'image' => null,
        'tenantId' => null,
        'keyName' => null,
        'userId' => null,
        'metadata' => null,
        'hostId' => null,
        'addresses' => null,
        'securityGroups' => null,
        'links' => null,
        'osDcFdiskConfig' => null,
        'osExtAZavailabilityZone' => null,
        'osExtSrvAttRhost' => null,
        'osExtSrvAttRhypervisorHostname' => null,
        'osExtSrvAttRinstanceName' => null,
        'osExtStSpowerState' => 'int32',
        'osExtStStaskState' => null,
        'osExtStSvmState' => null,
        'osSrvUsGlaunchedAt' => null,
        'osSrvUsGterminatedAt' => null,
        'osExtendedVolumesvolumesAttached' => null,
        'fault' => null,
        'description' => null,
        'hostStatus' => null,
        'osExtSrvAttRhostname' => null,
        'osExtSrvAttRreservationId' => null,
        'osExtSrvAttRlaunchIndex' => 'int32',
        'osExtSrvAttRkernelId' => null,
        'osExtSrvAttRramdiskId' => null,
        'osExtSrvAttRrootDeviceName' => null,
        'osExtSrvAttRuserData' => null,
        'tags' => null,
        'locked' => null,
        'accessIPv4' => null,
        'accessIPv6' => null,
        'configDrive' => null,
        'progress' => 'int32'
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
            'name' => 'name',
            'id' => 'id',
            'status' => 'status',
            'created' => 'created',
            'updated' => 'updated',
            'flavor' => 'flavor',
            'image' => 'image',
            'tenantId' => 'tenant_id',
            'keyName' => 'key_name',
            'userId' => 'user_id',
            'metadata' => 'metadata',
            'hostId' => 'hostId',
            'addresses' => 'addresses',
            'securityGroups' => 'security_groups',
            'links' => 'links',
            'osDcFdiskConfig' => 'OS-DCF:diskConfig',
            'osExtAZavailabilityZone' => 'OS-EXT-AZ:availability_zone',
            'osExtSrvAttRhost' => 'OS-EXT-SRV-ATTR:host',
            'osExtSrvAttRhypervisorHostname' => 'OS-EXT-SRV-ATTR:hypervisor_hostname',
            'osExtSrvAttRinstanceName' => 'OS-EXT-SRV-ATTR:instance_name',
            'osExtStSpowerState' => 'OS-EXT-STS:power_state',
            'osExtStStaskState' => 'OS-EXT-STS:task_state',
            'osExtStSvmState' => 'OS-EXT-STS:vm_state',
            'osSrvUsGlaunchedAt' => 'OS-SRV-USG:launched_at',
            'osSrvUsGterminatedAt' => 'OS-SRV-USG:terminated_at',
            'osExtendedVolumesvolumesAttached' => 'os-extended-volumes:volumes_attached',
            'fault' => 'fault',
            'description' => 'description',
            'hostStatus' => 'host_status',
            'osExtSrvAttRhostname' => 'OS-EXT-SRV-ATTR:hostname',
            'osExtSrvAttRreservationId' => 'OS-EXT-SRV-ATTR:reservation_id',
            'osExtSrvAttRlaunchIndex' => 'OS-EXT-SRV-ATTR:launch_index',
            'osExtSrvAttRkernelId' => 'OS-EXT-SRV-ATTR:kernel_id',
            'osExtSrvAttRramdiskId' => 'OS-EXT-SRV-ATTR:ramdisk_id',
            'osExtSrvAttRrootDeviceName' => 'OS-EXT-SRV-ATTR:root_device_name',
            'osExtSrvAttRuserData' => 'OS-EXT-SRV-ATTR:user_data',
            'tags' => 'tags',
            'locked' => 'locked',
            'accessIPv4' => 'accessIPv4',
            'accessIPv6' => 'accessIPv6',
            'configDrive' => 'config_drive',
            'progress' => 'progress'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'id' => 'setId',
            'status' => 'setStatus',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'flavor' => 'setFlavor',
            'image' => 'setImage',
            'tenantId' => 'setTenantId',
            'keyName' => 'setKeyName',
            'userId' => 'setUserId',
            'metadata' => 'setMetadata',
            'hostId' => 'setHostId',
            'addresses' => 'setAddresses',
            'securityGroups' => 'setSecurityGroups',
            'links' => 'setLinks',
            'osDcFdiskConfig' => 'setOsDcFdiskConfig',
            'osExtAZavailabilityZone' => 'setOsExtAZavailabilityZone',
            'osExtSrvAttRhost' => 'setOsExtSrvAttRhost',
            'osExtSrvAttRhypervisorHostname' => 'setOsExtSrvAttRhypervisorHostname',
            'osExtSrvAttRinstanceName' => 'setOsExtSrvAttRinstanceName',
            'osExtStSpowerState' => 'setOsExtStSpowerState',
            'osExtStStaskState' => 'setOsExtStStaskState',
            'osExtStSvmState' => 'setOsExtStSvmState',
            'osSrvUsGlaunchedAt' => 'setOsSrvUsGlaunchedAt',
            'osSrvUsGterminatedAt' => 'setOsSrvUsGterminatedAt',
            'osExtendedVolumesvolumesAttached' => 'setOsExtendedVolumesvolumesAttached',
            'fault' => 'setFault',
            'description' => 'setDescription',
            'hostStatus' => 'setHostStatus',
            'osExtSrvAttRhostname' => 'setOsExtSrvAttRhostname',
            'osExtSrvAttRreservationId' => 'setOsExtSrvAttRreservationId',
            'osExtSrvAttRlaunchIndex' => 'setOsExtSrvAttRlaunchIndex',
            'osExtSrvAttRkernelId' => 'setOsExtSrvAttRkernelId',
            'osExtSrvAttRramdiskId' => 'setOsExtSrvAttRramdiskId',
            'osExtSrvAttRrootDeviceName' => 'setOsExtSrvAttRrootDeviceName',
            'osExtSrvAttRuserData' => 'setOsExtSrvAttRuserData',
            'tags' => 'setTags',
            'locked' => 'setLocked',
            'accessIPv4' => 'setAccessIPv4',
            'accessIPv6' => 'setAccessIPv6',
            'configDrive' => 'setConfigDrive',
            'progress' => 'setProgress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'id' => 'getId',
            'status' => 'getStatus',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'flavor' => 'getFlavor',
            'image' => 'getImage',
            'tenantId' => 'getTenantId',
            'keyName' => 'getKeyName',
            'userId' => 'getUserId',
            'metadata' => 'getMetadata',
            'hostId' => 'getHostId',
            'addresses' => 'getAddresses',
            'securityGroups' => 'getSecurityGroups',
            'links' => 'getLinks',
            'osDcFdiskConfig' => 'getOsDcFdiskConfig',
            'osExtAZavailabilityZone' => 'getOsExtAZavailabilityZone',
            'osExtSrvAttRhost' => 'getOsExtSrvAttRhost',
            'osExtSrvAttRhypervisorHostname' => 'getOsExtSrvAttRhypervisorHostname',
            'osExtSrvAttRinstanceName' => 'getOsExtSrvAttRinstanceName',
            'osExtStSpowerState' => 'getOsExtStSpowerState',
            'osExtStStaskState' => 'getOsExtStStaskState',
            'osExtStSvmState' => 'getOsExtStSvmState',
            'osSrvUsGlaunchedAt' => 'getOsSrvUsGlaunchedAt',
            'osSrvUsGterminatedAt' => 'getOsSrvUsGterminatedAt',
            'osExtendedVolumesvolumesAttached' => 'getOsExtendedVolumesvolumesAttached',
            'fault' => 'getFault',
            'description' => 'getDescription',
            'hostStatus' => 'getHostStatus',
            'osExtSrvAttRhostname' => 'getOsExtSrvAttRhostname',
            'osExtSrvAttRreservationId' => 'getOsExtSrvAttRreservationId',
            'osExtSrvAttRlaunchIndex' => 'getOsExtSrvAttRlaunchIndex',
            'osExtSrvAttRkernelId' => 'getOsExtSrvAttRkernelId',
            'osExtSrvAttRramdiskId' => 'getOsExtSrvAttRramdiskId',
            'osExtSrvAttRrootDeviceName' => 'getOsExtSrvAttRrootDeviceName',
            'osExtSrvAttRuserData' => 'getOsExtSrvAttRuserData',
            'tags' => 'getTags',
            'locked' => 'getLocked',
            'accessIPv4' => 'getAccessIPv4',
            'accessIPv6' => 'getAccessIPv6',
            'configDrive' => 'getConfigDrive',
            'progress' => 'getProgress'
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
    const STATUS_DELETED = 'DELETED';
    const STATUS_ERROR = 'ERROR';
    const STATUS_HARD_REBOOT = 'HARD_REBOOT';
    const STATUS_MIGRATING = 'MIGRATING';
    const STATUS_REBOOT = 'REBOOT';
    const STATUS_RESIZE = 'RESIZE';
    const STATUS_REVERT_RESIZE = 'REVERT_RESIZE';
    const STATUS_SHELVED = 'SHELVED';
    const STATUS_SHELVED_OFFLOADED = 'SHELVED_OFFLOADED';
    const STATUS_SHUTOFF = 'SHUTOFF';
    const STATUS_UNKNOWN = 'UNKNOWN';
    const STATUS_VERIFY_RESIZE = 'VERIFY_RESIZE';
    const OS_DC_FDISK_CONFIG_AUTO = 'AUTO';
    const OS_DC_FDISK_CONFIG_MANUAL = 'MANUAL';
    const OS_EXT_ST_STASK_STATE_SHOUTOFF = 'SHOUTOFF';
    const OS_EXT_ST_STASK_STATE_RESIZE = 'RESIZE';
    const OS_EXT_ST_STASK_STATE_REBUILD = 'REBUILD';
    const OS_EXT_ST_STASK_STATE_VERIFY_RESIZE = 'VERIFY_RESIZE';
    const OS_EXT_ST_STASK_STATE_REVERT_RESIZE = 'REVERT_RESIZE';
    const OS_EXT_ST_STASK_STATE_PAUSED = 'PAUSED';
    const OS_EXT_ST_STASK_STATE_MIGRATING = 'MIGRATING';
    const OS_EXT_ST_STASK_STATE_SUSPENDED = 'SUSPENDED';
    const OS_EXT_ST_STASK_STATE_RESCUE = 'RESCUE';
    const OS_EXT_ST_STASK_STATE_ERROR = 'ERROR';
    const OS_EXT_ST_STASK_STATE_DELETED = 'DELETED';
    const OS_EXT_ST_STASK_STATE_SOFT_DELETED = 'SOFT_DELETED';
    const OS_EXT_ST_STASK_STATE_SHELVED = 'SHELVED';
    const OS_EXT_ST_STASK_STATE_SHELVED_OFFLOADED = 'SHELVED_OFFLOADED';
    const OS_EXT_ST_SVM_STATE_ACTIVE = 'ACTIVE';
    const OS_EXT_ST_SVM_STATE_BUILDING = 'BUILDING';
    const OS_EXT_ST_SVM_STATE_STOPPED = 'STOPPED';
    const OS_EXT_ST_SVM_STATE_RESIZED = 'RESIZED';
    const OS_EXT_ST_SVM_STATE_PAUSED = 'PAUSED';
    const OS_EXT_ST_SVM_STATE_SUSPENDED = 'SUSPENDED';
    const OS_EXT_ST_SVM_STATE_RESCUED = 'RESCUED';
    const OS_EXT_ST_SVM_STATE_ERROR = 'ERROR';
    const OS_EXT_ST_SVM_STATE_DELETED = 'DELETED';
    const OS_EXT_ST_SVM_STATE_SOFT_DELETED = 'SOFT_DELETED';
    const OS_EXT_ST_SVM_STATE_SHELVED = 'SHELVED';
    const OS_EXT_ST_SVM_STATE_SHELVED_OFFLOADED = 'SHELVED_OFFLOADED';
    const HOST_STATUS_UP = 'UP';
    const HOST_STATUS_UNKNOWN = 'UNKNOWN';
    const HOST_STATUS_DOWN = 'DOWN';
    const HOST_STATUS_MAINTENANCE = 'MAINTENANCE';
    

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
            self::STATUS_DELETED,
            self::STATUS_ERROR,
            self::STATUS_HARD_REBOOT,
            self::STATUS_MIGRATING,
            self::STATUS_REBOOT,
            self::STATUS_RESIZE,
            self::STATUS_REVERT_RESIZE,
            self::STATUS_SHELVED,
            self::STATUS_SHELVED_OFFLOADED,
            self::STATUS_SHUTOFF,
            self::STATUS_UNKNOWN,
            self::STATUS_VERIFY_RESIZE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsDcFdiskConfigAllowableValues()
    {
        return [
            self::OS_DC_FDISK_CONFIG_AUTO,
            self::OS_DC_FDISK_CONFIG_MANUAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsExtStStaskStateAllowableValues()
    {
        return [
            self::OS_EXT_ST_STASK_STATE_SHOUTOFF,
            self::OS_EXT_ST_STASK_STATE_RESIZE,
            self::OS_EXT_ST_STASK_STATE_REBUILD,
            self::OS_EXT_ST_STASK_STATE_VERIFY_RESIZE,
            self::OS_EXT_ST_STASK_STATE_REVERT_RESIZE,
            self::OS_EXT_ST_STASK_STATE_PAUSED,
            self::OS_EXT_ST_STASK_STATE_MIGRATING,
            self::OS_EXT_ST_STASK_STATE_SUSPENDED,
            self::OS_EXT_ST_STASK_STATE_RESCUE,
            self::OS_EXT_ST_STASK_STATE_ERROR,
            self::OS_EXT_ST_STASK_STATE_DELETED,
            self::OS_EXT_ST_STASK_STATE_SOFT_DELETED,
            self::OS_EXT_ST_STASK_STATE_SHELVED,
            self::OS_EXT_ST_STASK_STATE_SHELVED_OFFLOADED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsExtStSvmStateAllowableValues()
    {
        return [
            self::OS_EXT_ST_SVM_STATE_ACTIVE,
            self::OS_EXT_ST_SVM_STATE_BUILDING,
            self::OS_EXT_ST_SVM_STATE_STOPPED,
            self::OS_EXT_ST_SVM_STATE_RESIZED,
            self::OS_EXT_ST_SVM_STATE_PAUSED,
            self::OS_EXT_ST_SVM_STATE_SUSPENDED,
            self::OS_EXT_ST_SVM_STATE_RESCUED,
            self::OS_EXT_ST_SVM_STATE_ERROR,
            self::OS_EXT_ST_SVM_STATE_DELETED,
            self::OS_EXT_ST_SVM_STATE_SOFT_DELETED,
            self::OS_EXT_ST_SVM_STATE_SHELVED,
            self::OS_EXT_ST_SVM_STATE_SHELVED_OFFLOADED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHostStatusAllowableValues()
    {
        return [
            self::HOST_STATUS_UP,
            self::HOST_STATUS_UNKNOWN,
            self::HOST_STATUS_DOWN,
            self::HOST_STATUS_MAINTENANCE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['keyName'] = isset($data['keyName']) ? $data['keyName'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['osDcFdiskConfig'] = isset($data['osDcFdiskConfig']) ? $data['osDcFdiskConfig'] : null;
        $this->container['osExtAZavailabilityZone'] = isset($data['osExtAZavailabilityZone']) ? $data['osExtAZavailabilityZone'] : null;
        $this->container['osExtSrvAttRhost'] = isset($data['osExtSrvAttRhost']) ? $data['osExtSrvAttRhost'] : null;
        $this->container['osExtSrvAttRhypervisorHostname'] = isset($data['osExtSrvAttRhypervisorHostname']) ? $data['osExtSrvAttRhypervisorHostname'] : null;
        $this->container['osExtSrvAttRinstanceName'] = isset($data['osExtSrvAttRinstanceName']) ? $data['osExtSrvAttRinstanceName'] : null;
        $this->container['osExtStSpowerState'] = isset($data['osExtStSpowerState']) ? $data['osExtStSpowerState'] : null;
        $this->container['osExtStStaskState'] = isset($data['osExtStStaskState']) ? $data['osExtStStaskState'] : null;
        $this->container['osExtStSvmState'] = isset($data['osExtStSvmState']) ? $data['osExtStSvmState'] : null;
        $this->container['osSrvUsGlaunchedAt'] = isset($data['osSrvUsGlaunchedAt']) ? $data['osSrvUsGlaunchedAt'] : null;
        $this->container['osSrvUsGterminatedAt'] = isset($data['osSrvUsGterminatedAt']) ? $data['osSrvUsGterminatedAt'] : null;
        $this->container['osExtendedVolumesvolumesAttached'] = isset($data['osExtendedVolumesvolumesAttached']) ? $data['osExtendedVolumesvolumesAttached'] : null;
        $this->container['fault'] = isset($data['fault']) ? $data['fault'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['osExtSrvAttRhostname'] = isset($data['osExtSrvAttRhostname']) ? $data['osExtSrvAttRhostname'] : null;
        $this->container['osExtSrvAttRreservationId'] = isset($data['osExtSrvAttRreservationId']) ? $data['osExtSrvAttRreservationId'] : null;
        $this->container['osExtSrvAttRlaunchIndex'] = isset($data['osExtSrvAttRlaunchIndex']) ? $data['osExtSrvAttRlaunchIndex'] : null;
        $this->container['osExtSrvAttRkernelId'] = isset($data['osExtSrvAttRkernelId']) ? $data['osExtSrvAttRkernelId'] : null;
        $this->container['osExtSrvAttRramdiskId'] = isset($data['osExtSrvAttRramdiskId']) ? $data['osExtSrvAttRramdiskId'] : null;
        $this->container['osExtSrvAttRrootDeviceName'] = isset($data['osExtSrvAttRrootDeviceName']) ? $data['osExtSrvAttRrootDeviceName'] : null;
        $this->container['osExtSrvAttRuserData'] = isset($data['osExtSrvAttRuserData']) ? $data['osExtSrvAttRuserData'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['accessIPv4'] = isset($data['accessIPv4']) ? $data['accessIPv4'] : null;
        $this->container['accessIPv6'] = isset($data['accessIPv6']) ? $data['accessIPv6'] : null;
        $this->container['configDrive'] = isset($data['configDrive']) ? $data['configDrive'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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

        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['flavor'] === null) {
            $invalidProperties[] = "'flavor' can't be null";
        }
        if ($this->container['image'] === null) {
            $invalidProperties[] = "'image' can't be null";
        }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
        if ($this->container['keyName'] === null) {
            $invalidProperties[] = "'keyName' can't be null";
        }
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
        }
        if ($this->container['hostId'] === null) {
            $invalidProperties[] = "'hostId' can't be null";
        }
        if ($this->container['addresses'] === null) {
            $invalidProperties[] = "'addresses' can't be null";
        }
        if ($this->container['securityGroups'] === null) {
            $invalidProperties[] = "'securityGroups' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
        }
        if ($this->container['osDcFdiskConfig'] === null) {
            $invalidProperties[] = "'osDcFdiskConfig' can't be null";
        }
            $allowedValues = $this->getOsDcFdiskConfigAllowableValues();
                if (!is_null($this->container['osDcFdiskConfig']) && !in_array($this->container['osDcFdiskConfig'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osDcFdiskConfig', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['osExtAZavailabilityZone'] === null) {
            $invalidProperties[] = "'osExtAZavailabilityZone' can't be null";
        }
        if ($this->container['osExtSrvAttRhost'] === null) {
            $invalidProperties[] = "'osExtSrvAttRhost' can't be null";
        }
        if ($this->container['osExtSrvAttRhypervisorHostname'] === null) {
            $invalidProperties[] = "'osExtSrvAttRhypervisorHostname' can't be null";
        }
        if ($this->container['osExtSrvAttRinstanceName'] === null) {
            $invalidProperties[] = "'osExtSrvAttRinstanceName' can't be null";
        }
        if ($this->container['osExtStSpowerState'] === null) {
            $invalidProperties[] = "'osExtStSpowerState' can't be null";
        }
            if (($this->container['osExtStSpowerState'] > 4)) {
                $invalidProperties[] = "invalid value for 'osExtStSpowerState', must be smaller than or equal to 4.";
            }
            if (($this->container['osExtStSpowerState'] < 0)) {
                $invalidProperties[] = "invalid value for 'osExtStSpowerState', must be bigger than or equal to 0.";
            }
        if ($this->container['osExtStStaskState'] === null) {
            $invalidProperties[] = "'osExtStStaskState' can't be null";
        }
            $allowedValues = $this->getOsExtStStaskStateAllowableValues();
                if (!is_null($this->container['osExtStStaskState']) && !in_array($this->container['osExtStStaskState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osExtStStaskState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['osExtStSvmState'] === null) {
            $invalidProperties[] = "'osExtStSvmState' can't be null";
        }
            $allowedValues = $this->getOsExtStSvmStateAllowableValues();
                if (!is_null($this->container['osExtStSvmState']) && !in_array($this->container['osExtStSvmState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osExtStSvmState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
            $allowedValues = $this->getHostStatusAllowableValues();
                if (!is_null($this->container['hostStatus']) && !in_array($this->container['hostStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'hostStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['accessIPv4'] === null) {
            $invalidProperties[] = "'accessIPv4' can't be null";
        }
        if ($this->container['accessIPv6'] === null) {
            $invalidProperties[] = "'accessIPv6' can't be null";
        }
        if ($this->container['configDrive'] === null) {
            $invalidProperties[] = "'configDrive' can't be null";
        }
        if ($this->container['progress'] === null) {
            $invalidProperties[] = "'progress' can't be null";
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
    * @param string $status 云服务器当前状态信息。   取值范围： ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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
    * @param string $created 云服务器创建时间。 时间格式例如：2019-05-22T07:48:53Z
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
    * @param string $updated 云服务器上一次更新时间。时间格式例如：2019-05-22T07:48:53Z
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets flavor
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\NovaServerFlavor
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\NovaServerFlavor $flavor flavor
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets image
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\NovaServerImage
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\NovaServerImage $image image
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
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
    * @param string $keyName SSH密钥名称。
    *
    * @return $this
    */
    public function setKeyName($keyName)
    {
        $this->container['keyName'] = $keyName;
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
    * @param map[string,string] $metadata 云服务器元数据。
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
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
    * @param string $hostId 云服务器对应的主机ID。
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets addresses
    *
    * @return map[string,\HuaweiCloud\SDK\Ecs\V2\Model\NovaNetwork[]]
    */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
    * Sets addresses
    *
    * @param map[string,\HuaweiCloud\SDK\Ecs\V2\Model\NovaNetwork[]] $addresses 云服务器对应的网络地址信息。
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
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\NovaServerSecurityGroup[]
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\NovaServerSecurityGroup[] $securityGroups 云服务器所属安全组列表。
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets links
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\NovaLink[]
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\NovaLink[] $links 云服务器相关标记快捷链接信息。
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets osDcFdiskConfig
    *
    * @return string
    */
    public function getOsDcFdiskConfig()
    {
        return $this->container['osDcFdiskConfig'];
    }

    /**
    * Sets osDcFdiskConfig
    *
    * @param string $osDcFdiskConfig 扩展属性，磁盘配置方式。对镜像启动云服务器生效。  取值范围：  - AUTO: API使用单个分区构建目标磁盘大小的云服务器。 API会自动调整文件系统以适应整个分区。 - MANUAL：API使用源映像中的分区方案和文件系统构建服务器。如果目标磁盘较大，则API不分区剩余的磁盘空间。
    *
    * @return $this
    */
    public function setOsDcFdiskConfig($osDcFdiskConfig)
    {
        $this->container['osDcFdiskConfig'] = $osDcFdiskConfig;
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
    * @param string $osExtAZavailabilityZone 扩展属性，可用分区编码。
    *
    * @return $this
    */
    public function setOsExtAZavailabilityZone($osExtAZavailabilityZone)
    {
        $this->container['osExtAZavailabilityZone'] = $osExtAZavailabilityZone;
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
    * @param string $osExtSrvAttRhost 扩展属性，与主机宿主名称。
    *
    * @return $this
    */
    public function setOsExtSrvAttRhost($osExtSrvAttRhost)
    {
        $this->container['osExtSrvAttRhost'] = $osExtSrvAttRhost;
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
    * @param string $osExtSrvAttRhypervisorHostname 扩展属性，hypervisor主机名。
    *
    * @return $this
    */
    public function setOsExtSrvAttRhypervisorHostname($osExtSrvAttRhypervisorHostname)
    {
        $this->container['osExtSrvAttRhypervisorHostname'] = $osExtSrvAttRhypervisorHostname;
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
    * @param string $osExtSrvAttRinstanceName 扩展属性，云服务器实例ID。
    *
    * @return $this
    */
    public function setOsExtSrvAttRinstanceName($osExtSrvAttRinstanceName)
    {
        $this->container['osExtSrvAttRinstanceName'] = $osExtSrvAttRinstanceName;
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
    * @param int $osExtStSpowerState 扩展属性，云服务器电源状态。  取值范围：0，1，2，3，4  - 0 : pending - 1 : running - 2 : paused - 3 : shutdown - 4 : crashed
    *
    * @return $this
    */
    public function setOsExtStSpowerState($osExtStSpowerState)
    {
        $this->container['osExtStSpowerState'] = $osExtStSpowerState;
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
    * @param string $osExtStStaskState 扩展属性，云服务器任务状态。   取值范围：  SHOUTOFF, RESIZE, REBUILD, VERIFY_RESIZE, REVERT_RESIZE, PAUSED, MIGRATING, SUSPENDED, RESCUE, ERROR, DELETED,SOFT_DELETED,SHELVED,SHELVED_OFFLOADED
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
    * @param string $osExtStSvmState 扩展属性，云服务器状态。  取值范围：   ACTIVE,BUILDING,STOPPED,RESIZED,PAUSED,SUSPENDED,RESCUED,ERROR,DELETED,SOFT_DELETED,SHELVED,SHELVED_OFFLOADED
    *
    * @return $this
    */
    public function setOsExtStSvmState($osExtStSvmState)
    {
        $this->container['osExtStSvmState'] = $osExtStSvmState;
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
    * @param string $osSrvUsGlaunchedAt 扩展属性，云服务器启动时间。时间格式例如：2019-05-22T07:48:19.000000
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
    * @param string $osSrvUsGterminatedAt 扩展属性，云服务器关闭时间。  时间格式例如：2019-05-22T07:48:19.000000
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
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\NovaServerVolume[]
    */
    public function getOsExtendedVolumesvolumesAttached()
    {
        return $this->container['osExtendedVolumesvolumesAttached'];
    }

    /**
    * Sets osExtendedVolumesvolumesAttached
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\NovaServerVolume[] $osExtendedVolumesvolumesAttached 云服务器挂载的云磁盘信息。
    *
    * @return $this
    */
    public function setOsExtendedVolumesvolumesAttached($osExtendedVolumesvolumesAttached)
    {
        $this->container['osExtendedVolumesvolumesAttached'] = $osExtendedVolumesvolumesAttached;
        return $this;
    }

    /**
    * Gets fault
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\NovaServerFault|null
    */
    public function getFault()
    {
        return $this->container['fault'];
    }

    /**
    * Sets fault
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\NovaServerFault|null $fault fault
    *
    * @return $this
    */
    public function setFault($fault)
    {
        $this->container['fault'] = $fault;
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
    * @param string|null $description 弹性云服务器的描述信息。  微版本2.19后支持
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
    * @return string|null
    */
    public function getOsExtSrvAttRhostname()
    {
        return $this->container['osExtSrvAttRhostname'];
    }

    /**
    * Sets osExtSrvAttRhostname
    *
    * @param string|null $osExtSrvAttRhostname 弹性云服务器的主机名。  微版本2.3后支持
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
    * @param string|null $osExtSrvAttRreservationId 批量创建场景，弹性云服务器的预留ID。  微版本2.3后支持
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
    * @return int|null
    */
    public function getOsExtSrvAttRlaunchIndex()
    {
        return $this->container['osExtSrvAttRlaunchIndex'];
    }

    /**
    * Sets osExtSrvAttRlaunchIndex
    *
    * @param int|null $osExtSrvAttRlaunchIndex 批量创建场景，弹性云服务器的启动顺序。  微版本2.3后支持
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
    * @return string|null
    */
    public function getOsExtSrvAttRkernelId()
    {
        return $this->container['osExtSrvAttRkernelId'];
    }

    /**
    * Sets osExtSrvAttRkernelId
    *
    * @param string|null $osExtSrvAttRkernelId 若使用AMI格式的镜像，则表示kernel image的UUID；否则，留空。  微版本2.3后支持
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
    * @return string|null
    */
    public function getOsExtSrvAttRramdiskId()
    {
        return $this->container['osExtSrvAttRramdiskId'];
    }

    /**
    * Sets osExtSrvAttRramdiskId
    *
    * @param string|null $osExtSrvAttRramdiskId 若使用AMI格式镜像，则表示ramdisk image的UUID；否则，留空。  微版本2.3后支持
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
    * @return string|null
    */
    public function getOsExtSrvAttRrootDeviceName()
    {
        return $this->container['osExtSrvAttRrootDeviceName'];
    }

    /**
    * Sets osExtSrvAttRrootDeviceName
    *
    * @param string|null $osExtSrvAttRrootDeviceName 弹性云服务器系统盘的设备名称。  微版本2.3后支持
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
    * @param string|null $osExtSrvAttRuserData 创建弹性云服务器时指定的user_data。  微版本2.3后支持
    *
    * @return $this
    */
    public function setOsExtSrvAttRuserData($osExtSrvAttRuserData)
    {
        $this->container['osExtSrvAttRuserData'] = $osExtSrvAttRuserData;
        return $this;
    }

    /**
    * Gets tags
    *
    * @return string[]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[] $tags 云服务器的标签列表。  系统近期对标签功能进行了升级，升级后，返回的tag值遵循如下规则：  - key与value使用“=”连接，如“key=value”。 - 如果value为空字符串，则仅返回key。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets locked
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
    * @param bool|null $locked 当云服务器被锁时为True，否则为False。  微版本2.9后支持
    *
    * @return $this
    */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;
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
    * @param string $configDrive 预留属性。
    *
    * @return $this
    */
    public function setConfigDrive($configDrive)
    {
        $this->container['configDrive'] = $configDrive;
        return $this;
    }

    /**
    * Gets progress
    *
    * @return int
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int $progress 预留属性
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
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

