<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PersistentVolumeClaimSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PersistentVolumeClaimSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volumeId  资源需为已经存在的存储资源 - 如果存储资源类型是SFS、EVS、SFS-Turbo，本参数需要填入对应资源的ID - 如果资源类型为OBS，本参数填入OBS名称
    * storageType  云存储的类型，和volumeID搭配使用。即volumeID和storageType必须同时被配置。  - bs：EVS云存储 - nfs：SFS弹性文件存储 - obs：OBS对象存储 - efs：SFS Turbo极速文件存储
    * accessModes  指定volume应该具有的访问模式，列表中仅第一个配置参数有效。 - ReadWriteOnce：该卷可以被单个节点以读/写模式挂载   >集群版本为v1.13.10且storage-driver版本为1.0.19时，才支持此功能。 - ReadOnlyMany：该卷可以被多个节点以只读模式挂载（默认） - ReadWriteMany：该卷可以被多个节点以读/写模式挂载
    * storageClassName  PVC的StorageClass名称
    * volumeName  PVC绑定的PV名称
    * resources  resources
    * volumeMode  PVC指定的PV类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volumeId' => 'string',
            'storageType' => 'string',
            'accessModes' => 'string[]',
            'storageClassName' => 'string',
            'volumeName' => 'string',
            'resources' => '\HuaweiCloud\SDK\Cce\V3\Model\ResourceRequirements',
            'volumeMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volumeId  资源需为已经存在的存储资源 - 如果存储资源类型是SFS、EVS、SFS-Turbo，本参数需要填入对应资源的ID - 如果资源类型为OBS，本参数填入OBS名称
    * storageType  云存储的类型，和volumeID搭配使用。即volumeID和storageType必须同时被配置。  - bs：EVS云存储 - nfs：SFS弹性文件存储 - obs：OBS对象存储 - efs：SFS Turbo极速文件存储
    * accessModes  指定volume应该具有的访问模式，列表中仅第一个配置参数有效。 - ReadWriteOnce：该卷可以被单个节点以读/写模式挂载   >集群版本为v1.13.10且storage-driver版本为1.0.19时，才支持此功能。 - ReadOnlyMany：该卷可以被多个节点以只读模式挂载（默认） - ReadWriteMany：该卷可以被多个节点以读/写模式挂载
    * storageClassName  PVC的StorageClass名称
    * volumeName  PVC绑定的PV名称
    * resources  resources
    * volumeMode  PVC指定的PV类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volumeId' => null,
        'storageType' => null,
        'accessModes' => null,
        'storageClassName' => null,
        'volumeName' => null,
        'resources' => null,
        'volumeMode' => null
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
    * volumeId  资源需为已经存在的存储资源 - 如果存储资源类型是SFS、EVS、SFS-Turbo，本参数需要填入对应资源的ID - 如果资源类型为OBS，本参数填入OBS名称
    * storageType  云存储的类型，和volumeID搭配使用。即volumeID和storageType必须同时被配置。  - bs：EVS云存储 - nfs：SFS弹性文件存储 - obs：OBS对象存储 - efs：SFS Turbo极速文件存储
    * accessModes  指定volume应该具有的访问模式，列表中仅第一个配置参数有效。 - ReadWriteOnce：该卷可以被单个节点以读/写模式挂载   >集群版本为v1.13.10且storage-driver版本为1.0.19时，才支持此功能。 - ReadOnlyMany：该卷可以被多个节点以只读模式挂载（默认） - ReadWriteMany：该卷可以被多个节点以读/写模式挂载
    * storageClassName  PVC的StorageClass名称
    * volumeName  PVC绑定的PV名称
    * resources  resources
    * volumeMode  PVC指定的PV类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volumeId' => 'volumeID',
            'storageType' => 'storageType',
            'accessModes' => 'accessModes',
            'storageClassName' => 'storageClassName',
            'volumeName' => 'volumeName',
            'resources' => 'resources',
            'volumeMode' => 'volumeMode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volumeId  资源需为已经存在的存储资源 - 如果存储资源类型是SFS、EVS、SFS-Turbo，本参数需要填入对应资源的ID - 如果资源类型为OBS，本参数填入OBS名称
    * storageType  云存储的类型，和volumeID搭配使用。即volumeID和storageType必须同时被配置。  - bs：EVS云存储 - nfs：SFS弹性文件存储 - obs：OBS对象存储 - efs：SFS Turbo极速文件存储
    * accessModes  指定volume应该具有的访问模式，列表中仅第一个配置参数有效。 - ReadWriteOnce：该卷可以被单个节点以读/写模式挂载   >集群版本为v1.13.10且storage-driver版本为1.0.19时，才支持此功能。 - ReadOnlyMany：该卷可以被多个节点以只读模式挂载（默认） - ReadWriteMany：该卷可以被多个节点以读/写模式挂载
    * storageClassName  PVC的StorageClass名称
    * volumeName  PVC绑定的PV名称
    * resources  resources
    * volumeMode  PVC指定的PV类型
    *
    * @var string[]
    */
    protected static $setters = [
            'volumeId' => 'setVolumeId',
            'storageType' => 'setStorageType',
            'accessModes' => 'setAccessModes',
            'storageClassName' => 'setStorageClassName',
            'volumeName' => 'setVolumeName',
            'resources' => 'setResources',
            'volumeMode' => 'setVolumeMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volumeId  资源需为已经存在的存储资源 - 如果存储资源类型是SFS、EVS、SFS-Turbo，本参数需要填入对应资源的ID - 如果资源类型为OBS，本参数填入OBS名称
    * storageType  云存储的类型，和volumeID搭配使用。即volumeID和storageType必须同时被配置。  - bs：EVS云存储 - nfs：SFS弹性文件存储 - obs：OBS对象存储 - efs：SFS Turbo极速文件存储
    * accessModes  指定volume应该具有的访问模式，列表中仅第一个配置参数有效。 - ReadWriteOnce：该卷可以被单个节点以读/写模式挂载   >集群版本为v1.13.10且storage-driver版本为1.0.19时，才支持此功能。 - ReadOnlyMany：该卷可以被多个节点以只读模式挂载（默认） - ReadWriteMany：该卷可以被多个节点以读/写模式挂载
    * storageClassName  PVC的StorageClass名称
    * volumeName  PVC绑定的PV名称
    * resources  resources
    * volumeMode  PVC指定的PV类型
    *
    * @var string[]
    */
    protected static $getters = [
            'volumeId' => 'getVolumeId',
            'storageType' => 'getStorageType',
            'accessModes' => 'getAccessModes',
            'storageClassName' => 'getStorageClassName',
            'volumeName' => 'getVolumeName',
            'resources' => 'getResources',
            'volumeMode' => 'getVolumeMode'
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
    const ACCESS_MODES_READ_ONLY_MANY = 'ReadOnlyMany';
    const ACCESS_MODES_READ_WRITE_MANY = 'ReadWriteMany';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAccessModesAllowableValues()
    {
        return [
            self::ACCESS_MODES_READ_ONLY_MANY,
            self::ACCESS_MODES_READ_WRITE_MANY,
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
        $this->container['volumeId'] = isset($data['volumeId']) ? $data['volumeId'] : null;
        $this->container['storageType'] = isset($data['storageType']) ? $data['storageType'] : null;
        $this->container['accessModes'] = isset($data['accessModes']) ? $data['accessModes'] : null;
        $this->container['storageClassName'] = isset($data['storageClassName']) ? $data['storageClassName'] : null;
        $this->container['volumeName'] = isset($data['volumeName']) ? $data['volumeName'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['volumeMode'] = isset($data['volumeMode']) ? $data['volumeMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['volumeId'] === null) {
            $invalidProperties[] = "'volumeId' can't be null";
        }
        if ($this->container['storageType'] === null) {
            $invalidProperties[] = "'storageType' can't be null";
        }
        if ($this->container['accessModes'] === null) {
            $invalidProperties[] = "'accessModes' can't be null";
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
    * Gets volumeId
    *  资源需为已经存在的存储资源 - 如果存储资源类型是SFS、EVS、SFS-Turbo，本参数需要填入对应资源的ID - 如果资源类型为OBS，本参数填入OBS名称
    *
    * @return string
    */
    public function getVolumeId()
    {
        return $this->container['volumeId'];
    }

    /**
    * Sets volumeId
    *
    * @param string $volumeId 资源需为已经存在的存储资源 - 如果存储资源类型是SFS、EVS、SFS-Turbo，本参数需要填入对应资源的ID - 如果资源类型为OBS，本参数填入OBS名称
    *
    * @return $this
    */
    public function setVolumeId($volumeId)
    {
        $this->container['volumeId'] = $volumeId;
        return $this;
    }

    /**
    * Gets storageType
    *  云存储的类型，和volumeID搭配使用。即volumeID和storageType必须同时被配置。  - bs：EVS云存储 - nfs：SFS弹性文件存储 - obs：OBS对象存储 - efs：SFS Turbo极速文件存储
    *
    * @return string
    */
    public function getStorageType()
    {
        return $this->container['storageType'];
    }

    /**
    * Sets storageType
    *
    * @param string $storageType 云存储的类型，和volumeID搭配使用。即volumeID和storageType必须同时被配置。  - bs：EVS云存储 - nfs：SFS弹性文件存储 - obs：OBS对象存储 - efs：SFS Turbo极速文件存储
    *
    * @return $this
    */
    public function setStorageType($storageType)
    {
        $this->container['storageType'] = $storageType;
        return $this;
    }

    /**
    * Gets accessModes
    *  指定volume应该具有的访问模式，列表中仅第一个配置参数有效。 - ReadWriteOnce：该卷可以被单个节点以读/写模式挂载   >集群版本为v1.13.10且storage-driver版本为1.0.19时，才支持此功能。 - ReadOnlyMany：该卷可以被多个节点以只读模式挂载（默认） - ReadWriteMany：该卷可以被多个节点以读/写模式挂载
    *
    * @return string[]
    */
    public function getAccessModes()
    {
        return $this->container['accessModes'];
    }

    /**
    * Sets accessModes
    *
    * @param string[] $accessModes 指定volume应该具有的访问模式，列表中仅第一个配置参数有效。 - ReadWriteOnce：该卷可以被单个节点以读/写模式挂载   >集群版本为v1.13.10且storage-driver版本为1.0.19时，才支持此功能。 - ReadOnlyMany：该卷可以被多个节点以只读模式挂载（默认） - ReadWriteMany：该卷可以被多个节点以读/写模式挂载
    *
    * @return $this
    */
    public function setAccessModes($accessModes)
    {
        $this->container['accessModes'] = $accessModes;
        return $this;
    }

    /**
    * Gets storageClassName
    *  PVC的StorageClass名称
    *
    * @return string|null
    */
    public function getStorageClassName()
    {
        return $this->container['storageClassName'];
    }

    /**
    * Sets storageClassName
    *
    * @param string|null $storageClassName PVC的StorageClass名称
    *
    * @return $this
    */
    public function setStorageClassName($storageClassName)
    {
        $this->container['storageClassName'] = $storageClassName;
        return $this;
    }

    /**
    * Gets volumeName
    *  PVC绑定的PV名称
    *
    * @return string|null
    */
    public function getVolumeName()
    {
        return $this->container['volumeName'];
    }

    /**
    * Sets volumeName
    *
    * @param string|null $volumeName PVC绑定的PV名称
    *
    * @return $this
    */
    public function setVolumeName($volumeName)
    {
        $this->container['volumeName'] = $volumeName;
        return $this;
    }

    /**
    * Gets resources
    *  resources
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ResourceRequirements|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ResourceRequirements|null $resources resources
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets volumeMode
    *  PVC指定的PV类型
    *
    * @return string|null
    */
    public function getVolumeMode()
    {
        return $this->container['volumeMode'];
    }

    /**
    * Sets volumeMode
    *
    * @param string|null $volumeMode PVC指定的PV类型
    *
    * @return $this
    */
    public function setVolumeMode($volumeMode)
    {
        $this->container['volumeMode'] = $volumeMode;
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

