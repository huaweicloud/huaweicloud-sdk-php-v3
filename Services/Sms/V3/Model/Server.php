<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Server implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Server';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  源端在SMS数据库中的ID
    * ip  源端服务器IP，注册源端时必选，更新非必选
    * name  用来区分不同源端服务器的名称
    * hostname  源端主机名，注册源端必选，更新非必选
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * firmware  源端服务器启动类型，如BIOS或者UEFI
    * cpuQuantity  CPU个数，单位vCPU
    * memory  内存大小，单位MB
    * disks  源端服务器的磁盘信息
    * btrfsList  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    * networks  源端服务器的网卡信息
    * domainId  租户的domainId
    * hasRsync  是否安装rsync组件，Linux系统此参数为必选
    * paravirtualization  Linux场景必选，源端是否是半虚拟化
    * rawDevices  Linux必选，裸设备列表
    * driverFiles  Windows 必选，是否缺少驱动文件
    * systemServices  Windows必选，是否存在不正常服务
    * accountRights  Windows必选，权限是否满足要求
    * bootLoader  Linux必选，系统引导类型，BOOT_LOADER(GRUB/LILO)
    * systemDir  Windows必选，系统目录
    * volumeGroups  Linux必选，如果没有卷组，输入[]
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'ip' => 'string',
            'name' => 'string',
            'hostname' => 'string',
            'osType' => 'string',
            'osVersion' => 'string',
            'firmware' => 'string',
            'cpuQuantity' => 'int',
            'memory' => 'int',
            'disks' => '\HuaweiCloud\SDK\Sms\V3\Model\Disk[]',
            'btrfsList' => '\HuaweiCloud\SDK\Sms\V3\Model\BtrfsFileSystem[]',
            'networks' => '\HuaweiCloud\SDK\Sms\V3\Model\NetWork[]',
            'domainId' => 'string',
            'hasRsync' => 'bool',
            'paravirtualization' => 'bool',
            'rawDevices' => 'string',
            'driverFiles' => 'bool',
            'systemServices' => 'bool',
            'accountRights' => 'bool',
            'bootLoader' => 'string',
            'systemDir' => 'string',
            'volumeGroups' => '\HuaweiCloud\SDK\Sms\V3\Model\VolumeGroups[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  源端在SMS数据库中的ID
    * ip  源端服务器IP，注册源端时必选，更新非必选
    * name  用来区分不同源端服务器的名称
    * hostname  源端主机名，注册源端必选，更新非必选
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * firmware  源端服务器启动类型，如BIOS或者UEFI
    * cpuQuantity  CPU个数，单位vCPU
    * memory  内存大小，单位MB
    * disks  源端服务器的磁盘信息
    * btrfsList  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    * networks  源端服务器的网卡信息
    * domainId  租户的domainId
    * hasRsync  是否安装rsync组件，Linux系统此参数为必选
    * paravirtualization  Linux场景必选，源端是否是半虚拟化
    * rawDevices  Linux必选，裸设备列表
    * driverFiles  Windows 必选，是否缺少驱动文件
    * systemServices  Windows必选，是否存在不正常服务
    * accountRights  Windows必选，权限是否满足要求
    * bootLoader  Linux必选，系统引导类型，BOOT_LOADER(GRUB/LILO)
    * systemDir  Windows必选，系统目录
    * volumeGroups  Linux必选，如果没有卷组，输入[]
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'ip' => null,
        'name' => null,
        'hostname' => null,
        'osType' => null,
        'osVersion' => null,
        'firmware' => null,
        'cpuQuantity' => 'int32',
        'memory' => 'int64',
        'disks' => null,
        'btrfsList' => null,
        'networks' => null,
        'domainId' => null,
        'hasRsync' => null,
        'paravirtualization' => null,
        'rawDevices' => null,
        'driverFiles' => null,
        'systemServices' => null,
        'accountRights' => null,
        'bootLoader' => null,
        'systemDir' => null,
        'volumeGroups' => null
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
    * id  源端在SMS数据库中的ID
    * ip  源端服务器IP，注册源端时必选，更新非必选
    * name  用来区分不同源端服务器的名称
    * hostname  源端主机名，注册源端必选，更新非必选
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * firmware  源端服务器启动类型，如BIOS或者UEFI
    * cpuQuantity  CPU个数，单位vCPU
    * memory  内存大小，单位MB
    * disks  源端服务器的磁盘信息
    * btrfsList  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    * networks  源端服务器的网卡信息
    * domainId  租户的domainId
    * hasRsync  是否安装rsync组件，Linux系统此参数为必选
    * paravirtualization  Linux场景必选，源端是否是半虚拟化
    * rawDevices  Linux必选，裸设备列表
    * driverFiles  Windows 必选，是否缺少驱动文件
    * systemServices  Windows必选，是否存在不正常服务
    * accountRights  Windows必选，权限是否满足要求
    * bootLoader  Linux必选，系统引导类型，BOOT_LOADER(GRUB/LILO)
    * systemDir  Windows必选，系统目录
    * volumeGroups  Linux必选，如果没有卷组，输入[]
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'ip' => 'ip',
            'name' => 'name',
            'hostname' => 'hostname',
            'osType' => 'os_type',
            'osVersion' => 'os_version',
            'firmware' => 'firmware',
            'cpuQuantity' => 'cpu_quantity',
            'memory' => 'memory',
            'disks' => 'disks',
            'btrfsList' => 'btrfs_list',
            'networks' => 'networks',
            'domainId' => 'domain_id',
            'hasRsync' => 'has_rsync',
            'paravirtualization' => 'paravirtualization',
            'rawDevices' => 'raw_devices',
            'driverFiles' => 'driver_files',
            'systemServices' => 'system_services',
            'accountRights' => 'account_rights',
            'bootLoader' => 'boot_loader',
            'systemDir' => 'system_dir',
            'volumeGroups' => 'volume_groups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  源端在SMS数据库中的ID
    * ip  源端服务器IP，注册源端时必选，更新非必选
    * name  用来区分不同源端服务器的名称
    * hostname  源端主机名，注册源端必选，更新非必选
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * firmware  源端服务器启动类型，如BIOS或者UEFI
    * cpuQuantity  CPU个数，单位vCPU
    * memory  内存大小，单位MB
    * disks  源端服务器的磁盘信息
    * btrfsList  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    * networks  源端服务器的网卡信息
    * domainId  租户的domainId
    * hasRsync  是否安装rsync组件，Linux系统此参数为必选
    * paravirtualization  Linux场景必选，源端是否是半虚拟化
    * rawDevices  Linux必选，裸设备列表
    * driverFiles  Windows 必选，是否缺少驱动文件
    * systemServices  Windows必选，是否存在不正常服务
    * accountRights  Windows必选，权限是否满足要求
    * bootLoader  Linux必选，系统引导类型，BOOT_LOADER(GRUB/LILO)
    * systemDir  Windows必选，系统目录
    * volumeGroups  Linux必选，如果没有卷组，输入[]
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'ip' => 'setIp',
            'name' => 'setName',
            'hostname' => 'setHostname',
            'osType' => 'setOsType',
            'osVersion' => 'setOsVersion',
            'firmware' => 'setFirmware',
            'cpuQuantity' => 'setCpuQuantity',
            'memory' => 'setMemory',
            'disks' => 'setDisks',
            'btrfsList' => 'setBtrfsList',
            'networks' => 'setNetworks',
            'domainId' => 'setDomainId',
            'hasRsync' => 'setHasRsync',
            'paravirtualization' => 'setParavirtualization',
            'rawDevices' => 'setRawDevices',
            'driverFiles' => 'setDriverFiles',
            'systemServices' => 'setSystemServices',
            'accountRights' => 'setAccountRights',
            'bootLoader' => 'setBootLoader',
            'systemDir' => 'setSystemDir',
            'volumeGroups' => 'setVolumeGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  源端在SMS数据库中的ID
    * ip  源端服务器IP，注册源端时必选，更新非必选
    * name  用来区分不同源端服务器的名称
    * hostname  源端主机名，注册源端必选，更新非必选
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * firmware  源端服务器启动类型，如BIOS或者UEFI
    * cpuQuantity  CPU个数，单位vCPU
    * memory  内存大小，单位MB
    * disks  源端服务器的磁盘信息
    * btrfsList  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    * networks  源端服务器的网卡信息
    * domainId  租户的domainId
    * hasRsync  是否安装rsync组件，Linux系统此参数为必选
    * paravirtualization  Linux场景必选，源端是否是半虚拟化
    * rawDevices  Linux必选，裸设备列表
    * driverFiles  Windows 必选，是否缺少驱动文件
    * systemServices  Windows必选，是否存在不正常服务
    * accountRights  Windows必选，权限是否满足要求
    * bootLoader  Linux必选，系统引导类型，BOOT_LOADER(GRUB/LILO)
    * systemDir  Windows必选，系统目录
    * volumeGroups  Linux必选，如果没有卷组，输入[]
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'ip' => 'getIp',
            'name' => 'getName',
            'hostname' => 'getHostname',
            'osType' => 'getOsType',
            'osVersion' => 'getOsVersion',
            'firmware' => 'getFirmware',
            'cpuQuantity' => 'getCpuQuantity',
            'memory' => 'getMemory',
            'disks' => 'getDisks',
            'btrfsList' => 'getBtrfsList',
            'networks' => 'getNetworks',
            'domainId' => 'getDomainId',
            'hasRsync' => 'getHasRsync',
            'paravirtualization' => 'getParavirtualization',
            'rawDevices' => 'getRawDevices',
            'driverFiles' => 'getDriverFiles',
            'systemServices' => 'getSystemServices',
            'accountRights' => 'getAccountRights',
            'bootLoader' => 'getBootLoader',
            'systemDir' => 'getSystemDir',
            'volumeGroups' => 'getVolumeGroups'
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
    const OS_TYPE_WINDOWS = 'WINDOWS';
    const OS_TYPE_LINUX = 'LINUX';
    const FIRMWARE_BIOS = 'BIOS';
    const FIRMWARE_UEFI = 'UEFI';
    const BOOT_LOADER_GRUB = 'GRUB';
    const BOOT_LOADER_LILO = 'LILO';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsTypeAllowableValues()
    {
        return [
            self::OS_TYPE_WINDOWS,
            self::OS_TYPE_LINUX,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFirmwareAllowableValues()
    {
        return [
            self::FIRMWARE_BIOS,
            self::FIRMWARE_UEFI,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBootLoaderAllowableValues()
    {
        return [
            self::BOOT_LOADER_GRUB,
            self::BOOT_LOADER_LILO,
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
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
        $this->container['firmware'] = isset($data['firmware']) ? $data['firmware'] : null;
        $this->container['cpuQuantity'] = isset($data['cpuQuantity']) ? $data['cpuQuantity'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['disks'] = isset($data['disks']) ? $data['disks'] : null;
        $this->container['btrfsList'] = isset($data['btrfsList']) ? $data['btrfsList'] : null;
        $this->container['networks'] = isset($data['networks']) ? $data['networks'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['hasRsync'] = isset($data['hasRsync']) ? $data['hasRsync'] : null;
        $this->container['paravirtualization'] = isset($data['paravirtualization']) ? $data['paravirtualization'] : null;
        $this->container['rawDevices'] = isset($data['rawDevices']) ? $data['rawDevices'] : null;
        $this->container['driverFiles'] = isset($data['driverFiles']) ? $data['driverFiles'] : null;
        $this->container['systemServices'] = isset($data['systemServices']) ? $data['systemServices'] : null;
        $this->container['accountRights'] = isset($data['accountRights']) ? $data['accountRights'] : null;
        $this->container['bootLoader'] = isset($data['bootLoader']) ? $data['bootLoader'] : null;
        $this->container['systemDir'] = isset($data['systemDir']) ? $data['systemDir'] : null;
        $this->container['volumeGroups'] = isset($data['volumeGroups']) ? $data['volumeGroups'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['ip'] === null) {
            $invalidProperties[] = "'ip' can't be null";
        }
            if ((mb_strlen($this->container['ip']) > 255)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['ip']) < 0)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostname']) && (mb_strlen($this->container['hostname']) > 255)) {
                $invalidProperties[] = "invalid value for 'hostname', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['hostname']) && (mb_strlen($this->container['hostname']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostname', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['osType'] === null) {
            $invalidProperties[] = "'osType' can't be null";
        }
            $allowedValues = $this->getOsTypeAllowableValues();
                if (!is_null($this->container['osType']) && !in_array($this->container['osType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['osType']) > 255)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osVersion']) && (mb_strlen($this->container['osVersion']) > 255)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['osVersion']) && (mb_strlen($this->container['osVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getFirmwareAllowableValues();
                if (!is_null($this->container['firmware']) && !in_array($this->container['firmware'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'firmware', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['firmware']) && (mb_strlen($this->container['firmware']) > 255)) {
                $invalidProperties[] = "invalid value for 'firmware', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['firmware']) && (mb_strlen($this->container['firmware']) < 0)) {
                $invalidProperties[] = "invalid value for 'firmware', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cpuQuantity']) && ($this->container['cpuQuantity'] > 65535)) {
                $invalidProperties[] = "invalid value for 'cpuQuantity', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['cpuQuantity']) && ($this->container['cpuQuantity'] < 0)) {
                $invalidProperties[] = "invalid value for 'cpuQuantity', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memory']) && ($this->container['memory'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'memory', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['memory']) && ($this->container['memory'] < 0)) {
                $invalidProperties[] = "invalid value for 'memory', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 255)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rawDevices']) && (mb_strlen($this->container['rawDevices']) > 255)) {
                $invalidProperties[] = "invalid value for 'rawDevices', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['rawDevices']) && (mb_strlen($this->container['rawDevices']) < 0)) {
                $invalidProperties[] = "invalid value for 'rawDevices', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getBootLoaderAllowableValues();
                if (!is_null($this->container['bootLoader']) && !in_array($this->container['bootLoader'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'bootLoader', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['systemDir']) && (mb_strlen($this->container['systemDir']) > 255)) {
                $invalidProperties[] = "invalid value for 'systemDir', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['systemDir']) && (mb_strlen($this->container['systemDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'systemDir', the character length must be bigger than or equal to 0.";
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
    *  源端在SMS数据库中的ID
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
    * @param string|null $id 源端在SMS数据库中的ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ip
    *  源端服务器IP，注册源端时必选，更新非必选
    *
    * @return string
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string $ip 源端服务器IP，注册源端时必选，更新非必选
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets name
    *  用来区分不同源端服务器的名称
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
    * @param string $name 用来区分不同源端服务器的名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets hostname
    *  源端主机名，注册源端必选，更新非必选
    *
    * @return string|null
    */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
    * Sets hostname
    *
    * @param string|null $hostname 源端主机名，注册源端必选，更新非必选
    *
    * @return $this
    */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;
        return $this;
    }

    /**
    * Gets osType
    *  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    *
    * @return string
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string $osType 源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets osVersion
    *  操作系统版本，注册必选，更新非必选
    *
    * @return string|null
    */
    public function getOsVersion()
    {
        return $this->container['osVersion'];
    }

    /**
    * Sets osVersion
    *
    * @param string|null $osVersion 操作系统版本，注册必选，更新非必选
    *
    * @return $this
    */
    public function setOsVersion($osVersion)
    {
        $this->container['osVersion'] = $osVersion;
        return $this;
    }

    /**
    * Gets firmware
    *  源端服务器启动类型，如BIOS或者UEFI
    *
    * @return string|null
    */
    public function getFirmware()
    {
        return $this->container['firmware'];
    }

    /**
    * Sets firmware
    *
    * @param string|null $firmware 源端服务器启动类型，如BIOS或者UEFI
    *
    * @return $this
    */
    public function setFirmware($firmware)
    {
        $this->container['firmware'] = $firmware;
        return $this;
    }

    /**
    * Gets cpuQuantity
    *  CPU个数，单位vCPU
    *
    * @return int|null
    */
    public function getCpuQuantity()
    {
        return $this->container['cpuQuantity'];
    }

    /**
    * Sets cpuQuantity
    *
    * @param int|null $cpuQuantity CPU个数，单位vCPU
    *
    * @return $this
    */
    public function setCpuQuantity($cpuQuantity)
    {
        $this->container['cpuQuantity'] = $cpuQuantity;
        return $this;
    }

    /**
    * Gets memory
    *  内存大小，单位MB
    *
    * @return int|null
    */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
    * Sets memory
    *
    * @param int|null $memory 内存大小，单位MB
    *
    * @return $this
    */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;
        return $this;
    }

    /**
    * Gets disks
    *  源端服务器的磁盘信息
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\Disk[]|null
    */
    public function getDisks()
    {
        return $this->container['disks'];
    }

    /**
    * Sets disks
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\Disk[]|null $disks 源端服务器的磁盘信息
    *
    * @return $this
    */
    public function setDisks($disks)
    {
        $this->container['disks'] = $disks;
        return $this;
    }

    /**
    * Gets btrfsList
    *  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\BtrfsFileSystem[]|null
    */
    public function getBtrfsList()
    {
        return $this->container['btrfsList'];
    }

    /**
    * Sets btrfsList
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\BtrfsFileSystem[]|null $btrfsList Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    *
    * @return $this
    */
    public function setBtrfsList($btrfsList)
    {
        $this->container['btrfsList'] = $btrfsList;
        return $this;
    }

    /**
    * Gets networks
    *  源端服务器的网卡信息
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\NetWork[]|null
    */
    public function getNetworks()
    {
        return $this->container['networks'];
    }

    /**
    * Sets networks
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\NetWork[]|null $networks 源端服务器的网卡信息
    *
    * @return $this
    */
    public function setNetworks($networks)
    {
        $this->container['networks'] = $networks;
        return $this;
    }

    /**
    * Gets domainId
    *  租户的domainId
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户的domainId
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets hasRsync
    *  是否安装rsync组件，Linux系统此参数为必选
    *
    * @return bool|null
    */
    public function getHasRsync()
    {
        return $this->container['hasRsync'];
    }

    /**
    * Sets hasRsync
    *
    * @param bool|null $hasRsync 是否安装rsync组件，Linux系统此参数为必选
    *
    * @return $this
    */
    public function setHasRsync($hasRsync)
    {
        $this->container['hasRsync'] = $hasRsync;
        return $this;
    }

    /**
    * Gets paravirtualization
    *  Linux场景必选，源端是否是半虚拟化
    *
    * @return bool|null
    */
    public function getParavirtualization()
    {
        return $this->container['paravirtualization'];
    }

    /**
    * Sets paravirtualization
    *
    * @param bool|null $paravirtualization Linux场景必选，源端是否是半虚拟化
    *
    * @return $this
    */
    public function setParavirtualization($paravirtualization)
    {
        $this->container['paravirtualization'] = $paravirtualization;
        return $this;
    }

    /**
    * Gets rawDevices
    *  Linux必选，裸设备列表
    *
    * @return string|null
    */
    public function getRawDevices()
    {
        return $this->container['rawDevices'];
    }

    /**
    * Sets rawDevices
    *
    * @param string|null $rawDevices Linux必选，裸设备列表
    *
    * @return $this
    */
    public function setRawDevices($rawDevices)
    {
        $this->container['rawDevices'] = $rawDevices;
        return $this;
    }

    /**
    * Gets driverFiles
    *  Windows 必选，是否缺少驱动文件
    *
    * @return bool|null
    */
    public function getDriverFiles()
    {
        return $this->container['driverFiles'];
    }

    /**
    * Sets driverFiles
    *
    * @param bool|null $driverFiles Windows 必选，是否缺少驱动文件
    *
    * @return $this
    */
    public function setDriverFiles($driverFiles)
    {
        $this->container['driverFiles'] = $driverFiles;
        return $this;
    }

    /**
    * Gets systemServices
    *  Windows必选，是否存在不正常服务
    *
    * @return bool|null
    */
    public function getSystemServices()
    {
        return $this->container['systemServices'];
    }

    /**
    * Sets systemServices
    *
    * @param bool|null $systemServices Windows必选，是否存在不正常服务
    *
    * @return $this
    */
    public function setSystemServices($systemServices)
    {
        $this->container['systemServices'] = $systemServices;
        return $this;
    }

    /**
    * Gets accountRights
    *  Windows必选，权限是否满足要求
    *
    * @return bool|null
    */
    public function getAccountRights()
    {
        return $this->container['accountRights'];
    }

    /**
    * Sets accountRights
    *
    * @param bool|null $accountRights Windows必选，权限是否满足要求
    *
    * @return $this
    */
    public function setAccountRights($accountRights)
    {
        $this->container['accountRights'] = $accountRights;
        return $this;
    }

    /**
    * Gets bootLoader
    *  Linux必选，系统引导类型，BOOT_LOADER(GRUB/LILO)
    *
    * @return string|null
    */
    public function getBootLoader()
    {
        return $this->container['bootLoader'];
    }

    /**
    * Sets bootLoader
    *
    * @param string|null $bootLoader Linux必选，系统引导类型，BOOT_LOADER(GRUB/LILO)
    *
    * @return $this
    */
    public function setBootLoader($bootLoader)
    {
        $this->container['bootLoader'] = $bootLoader;
        return $this;
    }

    /**
    * Gets systemDir
    *  Windows必选，系统目录
    *
    * @return string|null
    */
    public function getSystemDir()
    {
        return $this->container['systemDir'];
    }

    /**
    * Sets systemDir
    *
    * @param string|null $systemDir Windows必选，系统目录
    *
    * @return $this
    */
    public function setSystemDir($systemDir)
    {
        $this->container['systemDir'] = $systemDir;
        return $this;
    }

    /**
    * Gets volumeGroups
    *  Linux必选，如果没有卷组，输入[]
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\VolumeGroups[]|null
    */
    public function getVolumeGroups()
    {
        return $this->container['volumeGroups'];
    }

    /**
    * Sets volumeGroups
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\VolumeGroups[]|null $volumeGroups Linux必选，如果没有卷组，输入[]
    *
    * @return $this
    */
    public function setVolumeGroups($volumeGroups)
    {
        $this->container['volumeGroups'] = $volumeGroups;
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

