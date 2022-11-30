<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BtrfsFileSystem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BtrfsFileSystem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  文件系统名称
    * label  文件系统标签，若无标签为空字符串
    * uuid  文件系统的uuid
    * device  btrfs包含的设备名称
    * size  文件系统数据占用大小
    * nodesize  btrfs节点大小
    * sectorsize  扇区大小
    * dataProfile  数据配置（RAD）
    * systemProfile  文件系统配置（RAD）
    * metadataProfile  元数据配置（RAD）
    * globalReserve1  Btrfs文件系统信息
    * gVolUsedSize  Btrfs卷已使用空间大小
    * defaultSubvolid  默认子卷ID
    * defaultSubvolName  默认子卷名称
    * defaultSubvolMountpath  默认子卷挂载路径/BTRFS文件系统的挂载路径
    * subvolumn  子卷信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'label' => 'string',
            'uuid' => 'string',
            'device' => 'string',
            'size' => 'int',
            'nodesize' => 'int',
            'sectorsize' => 'int',
            'dataProfile' => 'string',
            'systemProfile' => 'string',
            'metadataProfile' => 'string',
            'globalReserve1' => 'string',
            'gVolUsedSize' => 'int',
            'defaultSubvolid' => 'string',
            'defaultSubvolName' => 'string',
            'defaultSubvolMountpath' => 'string',
            'subvolumn' => '\HuaweiCloud\SDK\Sms\V3\Model\BtrfsSubvolumn[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  文件系统名称
    * label  文件系统标签，若无标签为空字符串
    * uuid  文件系统的uuid
    * device  btrfs包含的设备名称
    * size  文件系统数据占用大小
    * nodesize  btrfs节点大小
    * sectorsize  扇区大小
    * dataProfile  数据配置（RAD）
    * systemProfile  文件系统配置（RAD）
    * metadataProfile  元数据配置（RAD）
    * globalReserve1  Btrfs文件系统信息
    * gVolUsedSize  Btrfs卷已使用空间大小
    * defaultSubvolid  默认子卷ID
    * defaultSubvolName  默认子卷名称
    * defaultSubvolMountpath  默认子卷挂载路径/BTRFS文件系统的挂载路径
    * subvolumn  子卷信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'label' => null,
        'uuid' => null,
        'device' => null,
        'size' => 'int64',
        'nodesize' => 'int64',
        'sectorsize' => 'int32',
        'dataProfile' => null,
        'systemProfile' => null,
        'metadataProfile' => null,
        'globalReserve1' => null,
        'gVolUsedSize' => 'int64',
        'defaultSubvolid' => null,
        'defaultSubvolName' => null,
        'defaultSubvolMountpath' => null,
        'subvolumn' => null
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
    * name  文件系统名称
    * label  文件系统标签，若无标签为空字符串
    * uuid  文件系统的uuid
    * device  btrfs包含的设备名称
    * size  文件系统数据占用大小
    * nodesize  btrfs节点大小
    * sectorsize  扇区大小
    * dataProfile  数据配置（RAD）
    * systemProfile  文件系统配置（RAD）
    * metadataProfile  元数据配置（RAD）
    * globalReserve1  Btrfs文件系统信息
    * gVolUsedSize  Btrfs卷已使用空间大小
    * defaultSubvolid  默认子卷ID
    * defaultSubvolName  默认子卷名称
    * defaultSubvolMountpath  默认子卷挂载路径/BTRFS文件系统的挂载路径
    * subvolumn  子卷信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'label' => 'label',
            'uuid' => 'uuid',
            'device' => 'device',
            'size' => 'size',
            'nodesize' => 'nodesize',
            'sectorsize' => 'sectorsize',
            'dataProfile' => 'data_profile',
            'systemProfile' => 'system_profile',
            'metadataProfile' => 'metadata_profile',
            'globalReserve1' => 'global_reserve1',
            'gVolUsedSize' => 'g_vol_used_size',
            'defaultSubvolid' => 'default_subvolid',
            'defaultSubvolName' => 'default_subvol_name',
            'defaultSubvolMountpath' => 'default_subvol_mountpath',
            'subvolumn' => 'subvolumn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  文件系统名称
    * label  文件系统标签，若无标签为空字符串
    * uuid  文件系统的uuid
    * device  btrfs包含的设备名称
    * size  文件系统数据占用大小
    * nodesize  btrfs节点大小
    * sectorsize  扇区大小
    * dataProfile  数据配置（RAD）
    * systemProfile  文件系统配置（RAD）
    * metadataProfile  元数据配置（RAD）
    * globalReserve1  Btrfs文件系统信息
    * gVolUsedSize  Btrfs卷已使用空间大小
    * defaultSubvolid  默认子卷ID
    * defaultSubvolName  默认子卷名称
    * defaultSubvolMountpath  默认子卷挂载路径/BTRFS文件系统的挂载路径
    * subvolumn  子卷信息
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'label' => 'setLabel',
            'uuid' => 'setUuid',
            'device' => 'setDevice',
            'size' => 'setSize',
            'nodesize' => 'setNodesize',
            'sectorsize' => 'setSectorsize',
            'dataProfile' => 'setDataProfile',
            'systemProfile' => 'setSystemProfile',
            'metadataProfile' => 'setMetadataProfile',
            'globalReserve1' => 'setGlobalReserve1',
            'gVolUsedSize' => 'setGVolUsedSize',
            'defaultSubvolid' => 'setDefaultSubvolid',
            'defaultSubvolName' => 'setDefaultSubvolName',
            'defaultSubvolMountpath' => 'setDefaultSubvolMountpath',
            'subvolumn' => 'setSubvolumn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  文件系统名称
    * label  文件系统标签，若无标签为空字符串
    * uuid  文件系统的uuid
    * device  btrfs包含的设备名称
    * size  文件系统数据占用大小
    * nodesize  btrfs节点大小
    * sectorsize  扇区大小
    * dataProfile  数据配置（RAD）
    * systemProfile  文件系统配置（RAD）
    * metadataProfile  元数据配置（RAD）
    * globalReserve1  Btrfs文件系统信息
    * gVolUsedSize  Btrfs卷已使用空间大小
    * defaultSubvolid  默认子卷ID
    * defaultSubvolName  默认子卷名称
    * defaultSubvolMountpath  默认子卷挂载路径/BTRFS文件系统的挂载路径
    * subvolumn  子卷信息
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'label' => 'getLabel',
            'uuid' => 'getUuid',
            'device' => 'getDevice',
            'size' => 'getSize',
            'nodesize' => 'getNodesize',
            'sectorsize' => 'getSectorsize',
            'dataProfile' => 'getDataProfile',
            'systemProfile' => 'getSystemProfile',
            'metadataProfile' => 'getMetadataProfile',
            'globalReserve1' => 'getGlobalReserve1',
            'gVolUsedSize' => 'getGVolUsedSize',
            'defaultSubvolid' => 'getDefaultSubvolid',
            'defaultSubvolName' => 'getDefaultSubvolName',
            'defaultSubvolMountpath' => 'getDefaultSubvolMountpath',
            'subvolumn' => 'getSubvolumn'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['device'] = isset($data['device']) ? $data['device'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['nodesize'] = isset($data['nodesize']) ? $data['nodesize'] : null;
        $this->container['sectorsize'] = isset($data['sectorsize']) ? $data['sectorsize'] : null;
        $this->container['dataProfile'] = isset($data['dataProfile']) ? $data['dataProfile'] : null;
        $this->container['systemProfile'] = isset($data['systemProfile']) ? $data['systemProfile'] : null;
        $this->container['metadataProfile'] = isset($data['metadataProfile']) ? $data['metadataProfile'] : null;
        $this->container['globalReserve1'] = isset($data['globalReserve1']) ? $data['globalReserve1'] : null;
        $this->container['gVolUsedSize'] = isset($data['gVolUsedSize']) ? $data['gVolUsedSize'] : null;
        $this->container['defaultSubvolid'] = isset($data['defaultSubvolid']) ? $data['defaultSubvolid'] : null;
        $this->container['defaultSubvolName'] = isset($data['defaultSubvolName']) ? $data['defaultSubvolName'] : null;
        $this->container['defaultSubvolMountpath'] = isset($data['defaultSubvolMountpath']) ? $data['defaultSubvolMountpath'] : null;
        $this->container['subvolumn'] = isset($data['subvolumn']) ? $data['subvolumn'] : null;
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
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
            if ((mb_strlen($this->container['label']) > 255)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['label']) < 0)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['uuid'] === null) {
            $invalidProperties[] = "'uuid' can't be null";
        }
            if ((mb_strlen($this->container['uuid']) > 255)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['uuid']) < 0)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['device'] === null) {
            $invalidProperties[] = "'device' can't be null";
        }
            if ((mb_strlen($this->container['device']) > 255)) {
                $invalidProperties[] = "invalid value for 'device', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['device']) < 0)) {
                $invalidProperties[] = "invalid value for 'device', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
            if (($this->container['size'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
        if ($this->container['nodesize'] === null) {
            $invalidProperties[] = "'nodesize' can't be null";
        }
            if (($this->container['nodesize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'nodesize', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['nodesize'] < 0)) {
                $invalidProperties[] = "invalid value for 'nodesize', must be bigger than or equal to 0.";
            }
        if ($this->container['sectorsize'] === null) {
            $invalidProperties[] = "'sectorsize' can't be null";
        }
            if (($this->container['sectorsize'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sectorsize', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['sectorsize'] < 0)) {
                $invalidProperties[] = "invalid value for 'sectorsize', must be bigger than or equal to 0.";
            }
        if ($this->container['dataProfile'] === null) {
            $invalidProperties[] = "'dataProfile' can't be null";
        }
            if ((mb_strlen($this->container['dataProfile']) > 255)) {
                $invalidProperties[] = "invalid value for 'dataProfile', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['dataProfile']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataProfile', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['systemProfile'] === null) {
            $invalidProperties[] = "'systemProfile' can't be null";
        }
            if ((mb_strlen($this->container['systemProfile']) > 255)) {
                $invalidProperties[] = "invalid value for 'systemProfile', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['systemProfile']) < 0)) {
                $invalidProperties[] = "invalid value for 'systemProfile', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['metadataProfile'] === null) {
            $invalidProperties[] = "'metadataProfile' can't be null";
        }
            if ((mb_strlen($this->container['metadataProfile']) > 255)) {
                $invalidProperties[] = "invalid value for 'metadataProfile', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['metadataProfile']) < 0)) {
                $invalidProperties[] = "invalid value for 'metadataProfile', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['globalReserve1'] === null) {
            $invalidProperties[] = "'globalReserve1' can't be null";
        }
            if ((mb_strlen($this->container['globalReserve1']) > 255)) {
                $invalidProperties[] = "invalid value for 'globalReserve1', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['globalReserve1']) < 0)) {
                $invalidProperties[] = "invalid value for 'globalReserve1', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['gVolUsedSize'] === null) {
            $invalidProperties[] = "'gVolUsedSize' can't be null";
        }
            if (($this->container['gVolUsedSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'gVolUsedSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['gVolUsedSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'gVolUsedSize', must be bigger than or equal to 0.";
            }
        if ($this->container['defaultSubvolid'] === null) {
            $invalidProperties[] = "'defaultSubvolid' can't be null";
        }
            if ((mb_strlen($this->container['defaultSubvolid']) > 255)) {
                $invalidProperties[] = "invalid value for 'defaultSubvolid', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['defaultSubvolid']) < 0)) {
                $invalidProperties[] = "invalid value for 'defaultSubvolid', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['defaultSubvolName'] === null) {
            $invalidProperties[] = "'defaultSubvolName' can't be null";
        }
            if ((mb_strlen($this->container['defaultSubvolName']) > 255)) {
                $invalidProperties[] = "invalid value for 'defaultSubvolName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['defaultSubvolName']) < 0)) {
                $invalidProperties[] = "invalid value for 'defaultSubvolName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['defaultSubvolMountpath'] === null) {
            $invalidProperties[] = "'defaultSubvolMountpath' can't be null";
        }
            if ((mb_strlen($this->container['defaultSubvolMountpath']) > 255)) {
                $invalidProperties[] = "invalid value for 'defaultSubvolMountpath', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['defaultSubvolMountpath']) < 0)) {
                $invalidProperties[] = "invalid value for 'defaultSubvolMountpath', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['subvolumn'] === null) {
            $invalidProperties[] = "'subvolumn' can't be null";
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
    *  文件系统名称
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
    * @param string $name 文件系统名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets label
    *  文件系统标签，若无标签为空字符串
    *
    * @return string
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string $label 文件系统标签，若无标签为空字符串
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets uuid
    *  文件系统的uuid
    *
    * @return string
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string $uuid 文件系统的uuid
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets device
    *  btrfs包含的设备名称
    *
    * @return string
    */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
    * Sets device
    *
    * @param string $device btrfs包含的设备名称
    *
    * @return $this
    */
    public function setDevice($device)
    {
        $this->container['device'] = $device;
        return $this;
    }

    /**
    * Gets size
    *  文件系统数据占用大小
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 文件系统数据占用大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets nodesize
    *  btrfs节点大小
    *
    * @return int
    */
    public function getNodesize()
    {
        return $this->container['nodesize'];
    }

    /**
    * Sets nodesize
    *
    * @param int $nodesize btrfs节点大小
    *
    * @return $this
    */
    public function setNodesize($nodesize)
    {
        $this->container['nodesize'] = $nodesize;
        return $this;
    }

    /**
    * Gets sectorsize
    *  扇区大小
    *
    * @return int
    */
    public function getSectorsize()
    {
        return $this->container['sectorsize'];
    }

    /**
    * Sets sectorsize
    *
    * @param int $sectorsize 扇区大小
    *
    * @return $this
    */
    public function setSectorsize($sectorsize)
    {
        $this->container['sectorsize'] = $sectorsize;
        return $this;
    }

    /**
    * Gets dataProfile
    *  数据配置（RAD）
    *
    * @return string
    */
    public function getDataProfile()
    {
        return $this->container['dataProfile'];
    }

    /**
    * Sets dataProfile
    *
    * @param string $dataProfile 数据配置（RAD）
    *
    * @return $this
    */
    public function setDataProfile($dataProfile)
    {
        $this->container['dataProfile'] = $dataProfile;
        return $this;
    }

    /**
    * Gets systemProfile
    *  文件系统配置（RAD）
    *
    * @return string
    */
    public function getSystemProfile()
    {
        return $this->container['systemProfile'];
    }

    /**
    * Sets systemProfile
    *
    * @param string $systemProfile 文件系统配置（RAD）
    *
    * @return $this
    */
    public function setSystemProfile($systemProfile)
    {
        $this->container['systemProfile'] = $systemProfile;
        return $this;
    }

    /**
    * Gets metadataProfile
    *  元数据配置（RAD）
    *
    * @return string
    */
    public function getMetadataProfile()
    {
        return $this->container['metadataProfile'];
    }

    /**
    * Sets metadataProfile
    *
    * @param string $metadataProfile 元数据配置（RAD）
    *
    * @return $this
    */
    public function setMetadataProfile($metadataProfile)
    {
        $this->container['metadataProfile'] = $metadataProfile;
        return $this;
    }

    /**
    * Gets globalReserve1
    *  Btrfs文件系统信息
    *
    * @return string
    */
    public function getGlobalReserve1()
    {
        return $this->container['globalReserve1'];
    }

    /**
    * Sets globalReserve1
    *
    * @param string $globalReserve1 Btrfs文件系统信息
    *
    * @return $this
    */
    public function setGlobalReserve1($globalReserve1)
    {
        $this->container['globalReserve1'] = $globalReserve1;
        return $this;
    }

    /**
    * Gets gVolUsedSize
    *  Btrfs卷已使用空间大小
    *
    * @return int
    */
    public function getGVolUsedSize()
    {
        return $this->container['gVolUsedSize'];
    }

    /**
    * Sets gVolUsedSize
    *
    * @param int $gVolUsedSize Btrfs卷已使用空间大小
    *
    * @return $this
    */
    public function setGVolUsedSize($gVolUsedSize)
    {
        $this->container['gVolUsedSize'] = $gVolUsedSize;
        return $this;
    }

    /**
    * Gets defaultSubvolid
    *  默认子卷ID
    *
    * @return string
    */
    public function getDefaultSubvolid()
    {
        return $this->container['defaultSubvolid'];
    }

    /**
    * Sets defaultSubvolid
    *
    * @param string $defaultSubvolid 默认子卷ID
    *
    * @return $this
    */
    public function setDefaultSubvolid($defaultSubvolid)
    {
        $this->container['defaultSubvolid'] = $defaultSubvolid;
        return $this;
    }

    /**
    * Gets defaultSubvolName
    *  默认子卷名称
    *
    * @return string
    */
    public function getDefaultSubvolName()
    {
        return $this->container['defaultSubvolName'];
    }

    /**
    * Sets defaultSubvolName
    *
    * @param string $defaultSubvolName 默认子卷名称
    *
    * @return $this
    */
    public function setDefaultSubvolName($defaultSubvolName)
    {
        $this->container['defaultSubvolName'] = $defaultSubvolName;
        return $this;
    }

    /**
    * Gets defaultSubvolMountpath
    *  默认子卷挂载路径/BTRFS文件系统的挂载路径
    *
    * @return string
    */
    public function getDefaultSubvolMountpath()
    {
        return $this->container['defaultSubvolMountpath'];
    }

    /**
    * Sets defaultSubvolMountpath
    *
    * @param string $defaultSubvolMountpath 默认子卷挂载路径/BTRFS文件系统的挂载路径
    *
    * @return $this
    */
    public function setDefaultSubvolMountpath($defaultSubvolMountpath)
    {
        $this->container['defaultSubvolMountpath'] = $defaultSubvolMountpath;
        return $this;
    }

    /**
    * Gets subvolumn
    *  子卷信息
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\BtrfsSubvolumn[]
    */
    public function getSubvolumn()
    {
        return $this->container['subvolumn'];
    }

    /**
    * Sets subvolumn
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\BtrfsSubvolumn[] $subvolumn 子卷信息
    *
    * @return $this
    */
    public function setSubvolumn($subvolumn)
    {
        $this->container['subvolumn'] = $subvolumn;
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

