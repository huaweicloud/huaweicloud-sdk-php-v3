<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiskResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiskResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * size  磁盘大小，容量单位为GB。
    * volumeType  磁盘类型。
    * diskType  系统盘还是数据盘，DATA表示为数据盘，SYS表示为系统盘。
    * dedicatedStorageId  磁盘所属的专属存储ID。
    * dataDiskImageId  导入数据盘的数据盘镜像ID。
    * snapshotId  磁盘备份的快照ID。
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'size' => 'int',
            'volumeType' => 'string',
            'diskType' => 'string',
            'dedicatedStorageId' => 'string',
            'dataDiskImageId' => 'string',
            'snapshotId' => 'string',
            'metadata' => '\HuaweiCloud\SDK\_As\V1\Model\MetaData'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * size  磁盘大小，容量单位为GB。
    * volumeType  磁盘类型。
    * diskType  系统盘还是数据盘，DATA表示为数据盘，SYS表示为系统盘。
    * dedicatedStorageId  磁盘所属的专属存储ID。
    * dataDiskImageId  导入数据盘的数据盘镜像ID。
    * snapshotId  磁盘备份的快照ID。
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'size' => null,
        'volumeType' => null,
        'diskType' => null,
        'dedicatedStorageId' => null,
        'dataDiskImageId' => null,
        'snapshotId' => null,
        'metadata' => null
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
    * size  磁盘大小，容量单位为GB。
    * volumeType  磁盘类型。
    * diskType  系统盘还是数据盘，DATA表示为数据盘，SYS表示为系统盘。
    * dedicatedStorageId  磁盘所属的专属存储ID。
    * dataDiskImageId  导入数据盘的数据盘镜像ID。
    * snapshotId  磁盘备份的快照ID。
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'size' => 'size',
            'volumeType' => 'volume_type',
            'diskType' => 'disk_type',
            'dedicatedStorageId' => 'dedicated_storage_id',
            'dataDiskImageId' => 'data_disk_image_id',
            'snapshotId' => 'snapshot_id',
            'metadata' => 'metadata'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * size  磁盘大小，容量单位为GB。
    * volumeType  磁盘类型。
    * diskType  系统盘还是数据盘，DATA表示为数据盘，SYS表示为系统盘。
    * dedicatedStorageId  磁盘所属的专属存储ID。
    * dataDiskImageId  导入数据盘的数据盘镜像ID。
    * snapshotId  磁盘备份的快照ID。
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $setters = [
            'size' => 'setSize',
            'volumeType' => 'setVolumeType',
            'diskType' => 'setDiskType',
            'dedicatedStorageId' => 'setDedicatedStorageId',
            'dataDiskImageId' => 'setDataDiskImageId',
            'snapshotId' => 'setSnapshotId',
            'metadata' => 'setMetadata'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * size  磁盘大小，容量单位为GB。
    * volumeType  磁盘类型。
    * diskType  系统盘还是数据盘，DATA表示为数据盘，SYS表示为系统盘。
    * dedicatedStorageId  磁盘所属的专属存储ID。
    * dataDiskImageId  导入数据盘的数据盘镜像ID。
    * snapshotId  磁盘备份的快照ID。
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $getters = [
            'size' => 'getSize',
            'volumeType' => 'getVolumeType',
            'diskType' => 'getDiskType',
            'dedicatedStorageId' => 'getDedicatedStorageId',
            'dataDiskImageId' => 'getDataDiskImageId',
            'snapshotId' => 'getSnapshotId',
            'metadata' => 'getMetadata'
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
    const VOLUME_TYPE_SATA = 'SATA';
    const VOLUME_TYPE_SAS = 'SAS';
    const VOLUME_TYPE_SSD = 'SSD';
    const VOLUME_TYPE_CO_PL = 'co-pl';
    const VOLUME_TYPE_UH_11 = 'uh-11';
    const DISK_TYPE_SYS = 'SYS';
    const DISK_TYPE_DATA = 'DATA';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVolumeTypeAllowableValues()
    {
        return [
            self::VOLUME_TYPE_SATA,
            self::VOLUME_TYPE_SAS,
            self::VOLUME_TYPE_SSD,
            self::VOLUME_TYPE_CO_PL,
            self::VOLUME_TYPE_UH_11,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDiskTypeAllowableValues()
    {
        return [
            self::DISK_TYPE_SYS,
            self::DISK_TYPE_DATA,
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
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['diskType'] = isset($data['diskType']) ? $data['diskType'] : null;
        $this->container['dedicatedStorageId'] = isset($data['dedicatedStorageId']) ? $data['dedicatedStorageId'] : null;
        $this->container['dataDiskImageId'] = isset($data['dataDiskImageId']) ? $data['dataDiskImageId'] : null;
        $this->container['snapshotId'] = isset($data['snapshotId']) ? $data['snapshotId'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getVolumeTypeAllowableValues();
                if (!is_null($this->container['volumeType']) && !in_array($this->container['volumeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'volumeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDiskTypeAllowableValues();
                if (!is_null($this->container['diskType']) && !in_array($this->container['diskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'diskType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['dedicatedStorageId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['dedicatedStorageId'])) {
                $invalidProperties[] = "invalid value for 'dedicatedStorageId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['dataDiskImageId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['dataDiskImageId'])) {
                $invalidProperties[] = "invalid value for 'dataDiskImageId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['snapshotId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['snapshotId'])) {
                $invalidProperties[] = "invalid value for 'snapshotId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
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
    * Gets size
    *  磁盘大小，容量单位为GB。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 磁盘大小，容量单位为GB。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets volumeType
    *  磁盘类型。
    *
    * @return string|null
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string|null $volumeType 磁盘类型。
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
        return $this;
    }

    /**
    * Gets diskType
    *  系统盘还是数据盘，DATA表示为数据盘，SYS表示为系统盘。
    *
    * @return string|null
    */
    public function getDiskType()
    {
        return $this->container['diskType'];
    }

    /**
    * Sets diskType
    *
    * @param string|null $diskType 系统盘还是数据盘，DATA表示为数据盘，SYS表示为系统盘。
    *
    * @return $this
    */
    public function setDiskType($diskType)
    {
        $this->container['diskType'] = $diskType;
        return $this;
    }

    /**
    * Gets dedicatedStorageId
    *  磁盘所属的专属存储ID。
    *
    * @return string|null
    */
    public function getDedicatedStorageId()
    {
        return $this->container['dedicatedStorageId'];
    }

    /**
    * Sets dedicatedStorageId
    *
    * @param string|null $dedicatedStorageId 磁盘所属的专属存储ID。
    *
    * @return $this
    */
    public function setDedicatedStorageId($dedicatedStorageId)
    {
        $this->container['dedicatedStorageId'] = $dedicatedStorageId;
        return $this;
    }

    /**
    * Gets dataDiskImageId
    *  导入数据盘的数据盘镜像ID。
    *
    * @return string|null
    */
    public function getDataDiskImageId()
    {
        return $this->container['dataDiskImageId'];
    }

    /**
    * Sets dataDiskImageId
    *
    * @param string|null $dataDiskImageId 导入数据盘的数据盘镜像ID。
    *
    * @return $this
    */
    public function setDataDiskImageId($dataDiskImageId)
    {
        $this->container['dataDiskImageId'] = $dataDiskImageId;
        return $this;
    }

    /**
    * Gets snapshotId
    *  磁盘备份的快照ID。
    *
    * @return string|null
    */
    public function getSnapshotId()
    {
        return $this->container['snapshotId'];
    }

    /**
    * Sets snapshotId
    *
    * @param string|null $snapshotId 磁盘备份的快照ID。
    *
    * @return $this
    */
    public function setSnapshotId($snapshotId)
    {
        $this->container['snapshotId'] = $snapshotId;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\MetaData|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\MetaData|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
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

