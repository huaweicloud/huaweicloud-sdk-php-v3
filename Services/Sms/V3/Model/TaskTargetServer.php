<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskTargetServer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskTargetServer';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  目的端在SMS数据库中的ID
    * vmId  目的端服务器ID，自动创建虚拟机不需要这个参数
    * name  目的端服务器的名称
    * ip  目的端服务器IP
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * systemDir  Windows必选，系统目录
    * disks  目的端磁盘信息，一般和源端保持一致
    * volumeGroups  lvm信息，一般和源端保持一致
    * btrfsList  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    * imageDiskId  目的端代理镜像磁盘ID
    * cutoveredSnapshotIds  目的端回滚快照ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'vmId' => 'string',
            'name' => 'string',
            'ip' => 'string',
            'osType' => 'string',
            'osVersion' => 'string',
            'systemDir' => 'string',
            'disks' => '\HuaweiCloud\SDK\Sms\V3\Model\TargetDisk[]',
            'volumeGroups' => '\HuaweiCloud\SDK\Sms\V3\Model\VolumeGroups[]',
            'btrfsList' => 'string[]',
            'imageDiskId' => 'string',
            'cutoveredSnapshotIds' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  目的端在SMS数据库中的ID
    * vmId  目的端服务器ID，自动创建虚拟机不需要这个参数
    * name  目的端服务器的名称
    * ip  目的端服务器IP
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * systemDir  Windows必选，系统目录
    * disks  目的端磁盘信息，一般和源端保持一致
    * volumeGroups  lvm信息，一般和源端保持一致
    * btrfsList  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    * imageDiskId  目的端代理镜像磁盘ID
    * cutoveredSnapshotIds  目的端回滚快照ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'vmId' => null,
        'name' => null,
        'ip' => null,
        'osType' => null,
        'osVersion' => null,
        'systemDir' => null,
        'disks' => null,
        'volumeGroups' => null,
        'btrfsList' => null,
        'imageDiskId' => null,
        'cutoveredSnapshotIds' => null
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
    * id  目的端在SMS数据库中的ID
    * vmId  目的端服务器ID，自动创建虚拟机不需要这个参数
    * name  目的端服务器的名称
    * ip  目的端服务器IP
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * systemDir  Windows必选，系统目录
    * disks  目的端磁盘信息，一般和源端保持一致
    * volumeGroups  lvm信息，一般和源端保持一致
    * btrfsList  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    * imageDiskId  目的端代理镜像磁盘ID
    * cutoveredSnapshotIds  目的端回滚快照ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'vmId' => 'vm_id',
            'name' => 'name',
            'ip' => 'ip',
            'osType' => 'os_type',
            'osVersion' => 'os_version',
            'systemDir' => 'system_dir',
            'disks' => 'disks',
            'volumeGroups' => 'volume_groups',
            'btrfsList' => 'btrfs_list',
            'imageDiskId' => 'image_disk_id',
            'cutoveredSnapshotIds' => 'cutovered_snapshot_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  目的端在SMS数据库中的ID
    * vmId  目的端服务器ID，自动创建虚拟机不需要这个参数
    * name  目的端服务器的名称
    * ip  目的端服务器IP
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * systemDir  Windows必选，系统目录
    * disks  目的端磁盘信息，一般和源端保持一致
    * volumeGroups  lvm信息，一般和源端保持一致
    * btrfsList  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    * imageDiskId  目的端代理镜像磁盘ID
    * cutoveredSnapshotIds  目的端回滚快照ID
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'vmId' => 'setVmId',
            'name' => 'setName',
            'ip' => 'setIp',
            'osType' => 'setOsType',
            'osVersion' => 'setOsVersion',
            'systemDir' => 'setSystemDir',
            'disks' => 'setDisks',
            'volumeGroups' => 'setVolumeGroups',
            'btrfsList' => 'setBtrfsList',
            'imageDiskId' => 'setImageDiskId',
            'cutoveredSnapshotIds' => 'setCutoveredSnapshotIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  目的端在SMS数据库中的ID
    * vmId  目的端服务器ID，自动创建虚拟机不需要这个参数
    * name  目的端服务器的名称
    * ip  目的端服务器IP
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * systemDir  Windows必选，系统目录
    * disks  目的端磁盘信息，一般和源端保持一致
    * volumeGroups  lvm信息，一般和源端保持一致
    * btrfsList  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    * imageDiskId  目的端代理镜像磁盘ID
    * cutoveredSnapshotIds  目的端回滚快照ID
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'vmId' => 'getVmId',
            'name' => 'getName',
            'ip' => 'getIp',
            'osType' => 'getOsType',
            'osVersion' => 'getOsVersion',
            'systemDir' => 'getSystemDir',
            'disks' => 'getDisks',
            'volumeGroups' => 'getVolumeGroups',
            'btrfsList' => 'getBtrfsList',
            'imageDiskId' => 'getImageDiskId',
            'cutoveredSnapshotIds' => 'getCutoveredSnapshotIds'
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
        $this->container['vmId'] = isset($data['vmId']) ? $data['vmId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
        $this->container['systemDir'] = isset($data['systemDir']) ? $data['systemDir'] : null;
        $this->container['disks'] = isset($data['disks']) ? $data['disks'] : null;
        $this->container['volumeGroups'] = isset($data['volumeGroups']) ? $data['volumeGroups'] : null;
        $this->container['btrfsList'] = isset($data['btrfsList']) ? $data['btrfsList'] : null;
        $this->container['imageDiskId'] = isset($data['imageDiskId']) ? $data['imageDiskId'] : null;
        $this->container['cutoveredSnapshotIds'] = isset($data['cutoveredSnapshotIds']) ? $data['cutoveredSnapshotIds'] : null;
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
            if (!is_null($this->container['vmId']) && (mb_strlen($this->container['vmId']) > 255)) {
                $invalidProperties[] = "invalid value for 'vmId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['vmId']) && (mb_strlen($this->container['vmId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vmId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ip']) && (mb_strlen($this->container['ip']) > 255)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ip']) && (mb_strlen($this->container['ip']) < 0)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getOsTypeAllowableValues();
                if (!is_null($this->container['osType']) && !in_array($this->container['osType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 255)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osVersion']) && (mb_strlen($this->container['osVersion']) > 255)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['osVersion']) && (mb_strlen($this->container['osVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['systemDir']) && (mb_strlen($this->container['systemDir']) > 255)) {
                $invalidProperties[] = "invalid value for 'systemDir', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['systemDir']) && (mb_strlen($this->container['systemDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'systemDir', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['disks'] === null) {
            $invalidProperties[] = "'disks' can't be null";
        }
            if (!is_null($this->container['imageDiskId']) && (mb_strlen($this->container['imageDiskId']) > 255)) {
                $invalidProperties[] = "invalid value for 'imageDiskId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['imageDiskId']) && (mb_strlen($this->container['imageDiskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageDiskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cutoveredSnapshotIds']) && (mb_strlen($this->container['cutoveredSnapshotIds']) > 255)) {
                $invalidProperties[] = "invalid value for 'cutoveredSnapshotIds', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['cutoveredSnapshotIds']) && (mb_strlen($this->container['cutoveredSnapshotIds']) < 0)) {
                $invalidProperties[] = "invalid value for 'cutoveredSnapshotIds', the character length must be bigger than or equal to 0.";
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
    *  目的端在SMS数据库中的ID
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
    * @param string|null $id 目的端在SMS数据库中的ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets vmId
    *  目的端服务器ID，自动创建虚拟机不需要这个参数
    *
    * @return string|null
    */
    public function getVmId()
    {
        return $this->container['vmId'];
    }

    /**
    * Sets vmId
    *
    * @param string|null $vmId 目的端服务器ID，自动创建虚拟机不需要这个参数
    *
    * @return $this
    */
    public function setVmId($vmId)
    {
        $this->container['vmId'] = $vmId;
        return $this;
    }

    /**
    * Gets name
    *  目的端服务器的名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 目的端服务器的名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ip
    *  目的端服务器IP
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip 目的端服务器IP
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets osType
    *  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
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
    * Gets disks
    *  目的端磁盘信息，一般和源端保持一致
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\TargetDisk[]
    */
    public function getDisks()
    {
        return $this->container['disks'];
    }

    /**
    * Sets disks
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\TargetDisk[] $disks 目的端磁盘信息，一般和源端保持一致
    *
    * @return $this
    */
    public function setDisks($disks)
    {
        $this->container['disks'] = $disks;
        return $this;
    }

    /**
    * Gets volumeGroups
    *  lvm信息，一般和源端保持一致
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
    * @param \HuaweiCloud\SDK\Sms\V3\Model\VolumeGroups[]|null $volumeGroups lvm信息，一般和源端保持一致
    *
    * @return $this
    */
    public function setVolumeGroups($volumeGroups)
    {
        $this->container['volumeGroups'] = $volumeGroups;
        return $this;
    }

    /**
    * Gets btrfsList
    *  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    *
    * @return string[]|null
    */
    public function getBtrfsList()
    {
        return $this->container['btrfsList'];
    }

    /**
    * Sets btrfsList
    *
    * @param string[]|null $btrfsList Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    *
    * @return $this
    */
    public function setBtrfsList($btrfsList)
    {
        $this->container['btrfsList'] = $btrfsList;
        return $this;
    }

    /**
    * Gets imageDiskId
    *  目的端代理镜像磁盘ID
    *
    * @return string|null
    */
    public function getImageDiskId()
    {
        return $this->container['imageDiskId'];
    }

    /**
    * Sets imageDiskId
    *
    * @param string|null $imageDiskId 目的端代理镜像磁盘ID
    *
    * @return $this
    */
    public function setImageDiskId($imageDiskId)
    {
        $this->container['imageDiskId'] = $imageDiskId;
        return $this;
    }

    /**
    * Gets cutoveredSnapshotIds
    *  目的端回滚快照ID
    *
    * @return string|null
    */
    public function getCutoveredSnapshotIds()
    {
        return $this->container['cutoveredSnapshotIds'];
    }

    /**
    * Sets cutoveredSnapshotIds
    *
    * @param string|null $cutoveredSnapshotIds 目的端回滚快照ID
    *
    * @return $this
    */
    public function setCutoveredSnapshotIds($cutoveredSnapshotIds)
    {
        $this->container['cutoveredSnapshotIds'] = $cutoveredSnapshotIds;
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

