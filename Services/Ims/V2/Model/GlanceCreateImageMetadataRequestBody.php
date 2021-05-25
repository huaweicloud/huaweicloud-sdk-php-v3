<?php

namespace HuaweiCloud\SDK\Ims\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GlanceCreateImageMetadataRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GlanceCreateImageMetadataRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * osVersion  镜像的操作系统具体版本,如果未指定__os_version，则默认设置为Other Linux(64 bit)，不保证该镜像能成功创建虚拟机以及通过该镜像创建的虚拟机能够正常使用。
    * containerFormat  容器格式。默认取值为bare。
    * diskFormat  镜像文件格式。目前支持vhd，zvhd、zvhd2、raw，qcow2。默认取值为vhd
    * minDisk  镜像运行需要的最小磁盘，单位为GB 。必须大于镜像系统盘容量，否则创建云主机云服务器可能失败。
    * minRam  镜像运行需要的最小内存，单位为MB。参数取值依据云主机云服务器的规格限制。默认取值为0。
    * name  镜像名称，如果未指定name的取值，则默认为空，但是使用该镜像创建虚拟机会失败。名称的长度为1-255位。
    * protected  镜像是否被保护，保护后的镜像不可删除。默认取值为false。
    * tags  镜像标签列表。长度为1-255位。默认为空。
    * visibility  其他租户是否可见。默认取值为private。创建镜像元数据时，visibility取值只能为private。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'osVersion' => 'string',
            'containerFormat' => 'string',
            'diskFormat' => 'string',
            'minDisk' => 'int',
            'minRam' => 'int',
            'name' => 'string',
            'protected' => 'bool',
            'tags' => 'string[]',
            'visibility' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * osVersion  镜像的操作系统具体版本,如果未指定__os_version，则默认设置为Other Linux(64 bit)，不保证该镜像能成功创建虚拟机以及通过该镜像创建的虚拟机能够正常使用。
    * containerFormat  容器格式。默认取值为bare。
    * diskFormat  镜像文件格式。目前支持vhd，zvhd、zvhd2、raw，qcow2。默认取值为vhd
    * minDisk  镜像运行需要的最小磁盘，单位为GB 。必须大于镜像系统盘容量，否则创建云主机云服务器可能失败。
    * minRam  镜像运行需要的最小内存，单位为MB。参数取值依据云主机云服务器的规格限制。默认取值为0。
    * name  镜像名称，如果未指定name的取值，则默认为空，但是使用该镜像创建虚拟机会失败。名称的长度为1-255位。
    * protected  镜像是否被保护，保护后的镜像不可删除。默认取值为false。
    * tags  镜像标签列表。长度为1-255位。默认为空。
    * visibility  其他租户是否可见。默认取值为private。创建镜像元数据时，visibility取值只能为private。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'osVersion' => null,
        'containerFormat' => null,
        'diskFormat' => null,
        'minDisk' => 'int32',
        'minRam' => 'int32',
        'name' => null,
        'protected' => null,
        'tags' => null,
        'visibility' => null
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
    * osVersion  镜像的操作系统具体版本,如果未指定__os_version，则默认设置为Other Linux(64 bit)，不保证该镜像能成功创建虚拟机以及通过该镜像创建的虚拟机能够正常使用。
    * containerFormat  容器格式。默认取值为bare。
    * diskFormat  镜像文件格式。目前支持vhd，zvhd、zvhd2、raw，qcow2。默认取值为vhd
    * minDisk  镜像运行需要的最小磁盘，单位为GB 。必须大于镜像系统盘容量，否则创建云主机云服务器可能失败。
    * minRam  镜像运行需要的最小内存，单位为MB。参数取值依据云主机云服务器的规格限制。默认取值为0。
    * name  镜像名称，如果未指定name的取值，则默认为空，但是使用该镜像创建虚拟机会失败。名称的长度为1-255位。
    * protected  镜像是否被保护，保护后的镜像不可删除。默认取值为false。
    * tags  镜像标签列表。长度为1-255位。默认为空。
    * visibility  其他租户是否可见。默认取值为private。创建镜像元数据时，visibility取值只能为private。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'osVersion' => '__os_version',
            'containerFormat' => 'container_format',
            'diskFormat' => 'disk_format',
            'minDisk' => 'min_disk',
            'minRam' => 'min_ram',
            'name' => 'name',
            'protected' => 'protected',
            'tags' => 'tags',
            'visibility' => 'visibility'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * osVersion  镜像的操作系统具体版本,如果未指定__os_version，则默认设置为Other Linux(64 bit)，不保证该镜像能成功创建虚拟机以及通过该镜像创建的虚拟机能够正常使用。
    * containerFormat  容器格式。默认取值为bare。
    * diskFormat  镜像文件格式。目前支持vhd，zvhd、zvhd2、raw，qcow2。默认取值为vhd
    * minDisk  镜像运行需要的最小磁盘，单位为GB 。必须大于镜像系统盘容量，否则创建云主机云服务器可能失败。
    * minRam  镜像运行需要的最小内存，单位为MB。参数取值依据云主机云服务器的规格限制。默认取值为0。
    * name  镜像名称，如果未指定name的取值，则默认为空，但是使用该镜像创建虚拟机会失败。名称的长度为1-255位。
    * protected  镜像是否被保护，保护后的镜像不可删除。默认取值为false。
    * tags  镜像标签列表。长度为1-255位。默认为空。
    * visibility  其他租户是否可见。默认取值为private。创建镜像元数据时，visibility取值只能为private。
    *
    * @var string[]
    */
    protected static $setters = [
            'osVersion' => 'setOsVersion',
            'containerFormat' => 'setContainerFormat',
            'diskFormat' => 'setDiskFormat',
            'minDisk' => 'setMinDisk',
            'minRam' => 'setMinRam',
            'name' => 'setName',
            'protected' => 'setProtected',
            'tags' => 'setTags',
            'visibility' => 'setVisibility'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * osVersion  镜像的操作系统具体版本,如果未指定__os_version，则默认设置为Other Linux(64 bit)，不保证该镜像能成功创建虚拟机以及通过该镜像创建的虚拟机能够正常使用。
    * containerFormat  容器格式。默认取值为bare。
    * diskFormat  镜像文件格式。目前支持vhd，zvhd、zvhd2、raw，qcow2。默认取值为vhd
    * minDisk  镜像运行需要的最小磁盘，单位为GB 。必须大于镜像系统盘容量，否则创建云主机云服务器可能失败。
    * minRam  镜像运行需要的最小内存，单位为MB。参数取值依据云主机云服务器的规格限制。默认取值为0。
    * name  镜像名称，如果未指定name的取值，则默认为空，但是使用该镜像创建虚拟机会失败。名称的长度为1-255位。
    * protected  镜像是否被保护，保护后的镜像不可删除。默认取值为false。
    * tags  镜像标签列表。长度为1-255位。默认为空。
    * visibility  其他租户是否可见。默认取值为private。创建镜像元数据时，visibility取值只能为private。
    *
    * @var string[]
    */
    protected static $getters = [
            'osVersion' => 'getOsVersion',
            'containerFormat' => 'getContainerFormat',
            'diskFormat' => 'getDiskFormat',
            'minDisk' => 'getMinDisk',
            'minRam' => 'getMinRam',
            'name' => 'getName',
            'protected' => 'getProtected',
            'tags' => 'getTags',
            'visibility' => 'getVisibility'
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
    const DISK_FORMAT_VHD = 'vhd';
    const DISK_FORMAT_ZVHD = 'zvhd';
    const DISK_FORMAT_ZVHD2 = 'zvhd2';
    const DISK_FORMAT_RAW = 'raw';
    const DISK_FORMAT_QCOW2 = 'qcow2';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDiskFormatAllowableValues()
    {
        return [
            self::DISK_FORMAT_VHD,
            self::DISK_FORMAT_ZVHD,
            self::DISK_FORMAT_ZVHD2,
            self::DISK_FORMAT_RAW,
            self::DISK_FORMAT_QCOW2,
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
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
        $this->container['containerFormat'] = isset($data['containerFormat']) ? $data['containerFormat'] : 'bare';
        $this->container['diskFormat'] = isset($data['diskFormat']) ? $data['diskFormat'] : null;
        $this->container['minDisk'] = isset($data['minDisk']) ? $data['minDisk'] : 40;
        $this->container['minRam'] = isset($data['minRam']) ? $data['minRam'] : 0;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['protected'] = isset($data['protected']) ? $data['protected'] : false;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : 'private';
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDiskFormatAllowableValues();
                if (!is_null($this->container['diskFormat']) && !in_array($this->container['diskFormat'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'diskFormat', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
    * Gets osVersion
    *  镜像的操作系统具体版本,如果未指定__os_version，则默认设置为Other Linux(64 bit)，不保证该镜像能成功创建虚拟机以及通过该镜像创建的虚拟机能够正常使用。
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
    * @param string|null $osVersion 镜像的操作系统具体版本,如果未指定__os_version，则默认设置为Other Linux(64 bit)，不保证该镜像能成功创建虚拟机以及通过该镜像创建的虚拟机能够正常使用。
    *
    * @return $this
    */
    public function setOsVersion($osVersion)
    {
        $this->container['osVersion'] = $osVersion;
        return $this;
    }

    /**
    * Gets containerFormat
    *  容器格式。默认取值为bare。
    *
    * @return string|null
    */
    public function getContainerFormat()
    {
        return $this->container['containerFormat'];
    }

    /**
    * Sets containerFormat
    *
    * @param string|null $containerFormat 容器格式。默认取值为bare。
    *
    * @return $this
    */
    public function setContainerFormat($containerFormat)
    {
        $this->container['containerFormat'] = $containerFormat;
        return $this;
    }

    /**
    * Gets diskFormat
    *  镜像文件格式。目前支持vhd，zvhd、zvhd2、raw，qcow2。默认取值为vhd
    *
    * @return string|null
    */
    public function getDiskFormat()
    {
        return $this->container['diskFormat'];
    }

    /**
    * Sets diskFormat
    *
    * @param string|null $diskFormat 镜像文件格式。目前支持vhd，zvhd、zvhd2、raw，qcow2。默认取值为vhd
    *
    * @return $this
    */
    public function setDiskFormat($diskFormat)
    {
        $this->container['diskFormat'] = $diskFormat;
        return $this;
    }

    /**
    * Gets minDisk
    *  镜像运行需要的最小磁盘，单位为GB 。必须大于镜像系统盘容量，否则创建云主机云服务器可能失败。
    *
    * @return int|null
    */
    public function getMinDisk()
    {
        return $this->container['minDisk'];
    }

    /**
    * Sets minDisk
    *
    * @param int|null $minDisk 镜像运行需要的最小磁盘，单位为GB 。必须大于镜像系统盘容量，否则创建云主机云服务器可能失败。
    *
    * @return $this
    */
    public function setMinDisk($minDisk)
    {
        $this->container['minDisk'] = $minDisk;
        return $this;
    }

    /**
    * Gets minRam
    *  镜像运行需要的最小内存，单位为MB。参数取值依据云主机云服务器的规格限制。默认取值为0。
    *
    * @return int|null
    */
    public function getMinRam()
    {
        return $this->container['minRam'];
    }

    /**
    * Sets minRam
    *
    * @param int|null $minRam 镜像运行需要的最小内存，单位为MB。参数取值依据云主机云服务器的规格限制。默认取值为0。
    *
    * @return $this
    */
    public function setMinRam($minRam)
    {
        $this->container['minRam'] = $minRam;
        return $this;
    }

    /**
    * Gets name
    *  镜像名称，如果未指定name的取值，则默认为空，但是使用该镜像创建虚拟机会失败。名称的长度为1-255位。
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
    * @param string|null $name 镜像名称，如果未指定name的取值，则默认为空，但是使用该镜像创建虚拟机会失败。名称的长度为1-255位。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets protected
    *  镜像是否被保护，保护后的镜像不可删除。默认取值为false。
    *
    * @return bool|null
    */
    public function getProtected()
    {
        return $this->container['protected'];
    }

    /**
    * Sets protected
    *
    * @param bool|null $protected 镜像是否被保护，保护后的镜像不可删除。默认取值为false。
    *
    * @return $this
    */
    public function setProtected($protected)
    {
        $this->container['protected'] = $protected;
        return $this;
    }

    /**
    * Gets tags
    *  镜像标签列表。长度为1-255位。默认为空。
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
    * @param string[]|null $tags 镜像标签列表。长度为1-255位。默认为空。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets visibility
    *  其他租户是否可见。默认取值为private。创建镜像元数据时，visibility取值只能为private。
    *
    * @return string|null
    */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
    * Sets visibility
    *
    * @param string|null $visibility 其他租户是否可见。默认取值为private。创建镜像元数据时，visibility取值只能为private。
    *
    * @return $this
    */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;
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

