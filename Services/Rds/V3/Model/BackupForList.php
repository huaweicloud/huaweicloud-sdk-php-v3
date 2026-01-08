<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupForList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupForList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  备份ID。
    * instanceId  实例ID。
    * name  备份名称。
    * databases  备份的数据库。
    * beginTime  备份开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * endTime  备份结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * status  备份状态，取值：  - BUILDING: 备份中。 - COMPLETED: 备份完成。 - FAILED：备份失败。 - DELETING：备份删除中。
    * type  备份类型，取值：  - “auto”: 自动全量备份 - “manual”: 手动全量备份 - “fragment”: 差异全量备份 - “incremental”: 自动增量备份
    * size  备份大小，单位为KB。
    * datastore  datastore
    * associatedWithDdm  是否已被DDM实例关联。
    * minDataVolumeCapacityForRestore  该备份源文件大小，用于该备份文件恢复到新实例时需要的最小磁盘空间大小。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'instanceId' => 'string',
            'name' => 'string',
            'databases' => '\HuaweiCloud\SDK\Rds\V3\Model\BackupDatabase[]',
            'beginTime' => 'string',
            'endTime' => 'string',
            'status' => 'string',
            'type' => 'string',
            'size' => 'int',
            'datastore' => '\HuaweiCloud\SDK\Rds\V3\Model\BackupDatastore',
            'associatedWithDdm' => 'bool',
            'minDataVolumeCapacityForRestore' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  备份ID。
    * instanceId  实例ID。
    * name  备份名称。
    * databases  备份的数据库。
    * beginTime  备份开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * endTime  备份结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * status  备份状态，取值：  - BUILDING: 备份中。 - COMPLETED: 备份完成。 - FAILED：备份失败。 - DELETING：备份删除中。
    * type  备份类型，取值：  - “auto”: 自动全量备份 - “manual”: 手动全量备份 - “fragment”: 差异全量备份 - “incremental”: 自动增量备份
    * size  备份大小，单位为KB。
    * datastore  datastore
    * associatedWithDdm  是否已被DDM实例关联。
    * minDataVolumeCapacityForRestore  该备份源文件大小，用于该备份文件恢复到新实例时需要的最小磁盘空间大小。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'instanceId' => null,
        'name' => null,
        'databases' => null,
        'beginTime' => null,
        'endTime' => null,
        'status' => null,
        'type' => null,
        'size' => 'int64',
        'datastore' => null,
        'associatedWithDdm' => null,
        'minDataVolumeCapacityForRestore' => null
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
    * id  备份ID。
    * instanceId  实例ID。
    * name  备份名称。
    * databases  备份的数据库。
    * beginTime  备份开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * endTime  备份结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * status  备份状态，取值：  - BUILDING: 备份中。 - COMPLETED: 备份完成。 - FAILED：备份失败。 - DELETING：备份删除中。
    * type  备份类型，取值：  - “auto”: 自动全量备份 - “manual”: 手动全量备份 - “fragment”: 差异全量备份 - “incremental”: 自动增量备份
    * size  备份大小，单位为KB。
    * datastore  datastore
    * associatedWithDdm  是否已被DDM实例关联。
    * minDataVolumeCapacityForRestore  该备份源文件大小，用于该备份文件恢复到新实例时需要的最小磁盘空间大小。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'instanceId' => 'instance_id',
            'name' => 'name',
            'databases' => 'databases',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'status' => 'status',
            'type' => 'type',
            'size' => 'size',
            'datastore' => 'datastore',
            'associatedWithDdm' => 'associated_with_ddm',
            'minDataVolumeCapacityForRestore' => 'min_data_volume_capacity_for_restore'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  备份ID。
    * instanceId  实例ID。
    * name  备份名称。
    * databases  备份的数据库。
    * beginTime  备份开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * endTime  备份结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * status  备份状态，取值：  - BUILDING: 备份中。 - COMPLETED: 备份完成。 - FAILED：备份失败。 - DELETING：备份删除中。
    * type  备份类型，取值：  - “auto”: 自动全量备份 - “manual”: 手动全量备份 - “fragment”: 差异全量备份 - “incremental”: 自动增量备份
    * size  备份大小，单位为KB。
    * datastore  datastore
    * associatedWithDdm  是否已被DDM实例关联。
    * minDataVolumeCapacityForRestore  该备份源文件大小，用于该备份文件恢复到新实例时需要的最小磁盘空间大小。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'instanceId' => 'setInstanceId',
            'name' => 'setName',
            'databases' => 'setDatabases',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'status' => 'setStatus',
            'type' => 'setType',
            'size' => 'setSize',
            'datastore' => 'setDatastore',
            'associatedWithDdm' => 'setAssociatedWithDdm',
            'minDataVolumeCapacityForRestore' => 'setMinDataVolumeCapacityForRestore'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  备份ID。
    * instanceId  实例ID。
    * name  备份名称。
    * databases  备份的数据库。
    * beginTime  备份开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * endTime  备份结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * status  备份状态，取值：  - BUILDING: 备份中。 - COMPLETED: 备份完成。 - FAILED：备份失败。 - DELETING：备份删除中。
    * type  备份类型，取值：  - “auto”: 自动全量备份 - “manual”: 手动全量备份 - “fragment”: 差异全量备份 - “incremental”: 自动增量备份
    * size  备份大小，单位为KB。
    * datastore  datastore
    * associatedWithDdm  是否已被DDM实例关联。
    * minDataVolumeCapacityForRestore  该备份源文件大小，用于该备份文件恢复到新实例时需要的最小磁盘空间大小。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'instanceId' => 'getInstanceId',
            'name' => 'getName',
            'databases' => 'getDatabases',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'status' => 'getStatus',
            'type' => 'getType',
            'size' => 'getSize',
            'datastore' => 'getDatastore',
            'associatedWithDdm' => 'getAssociatedWithDdm',
            'minDataVolumeCapacityForRestore' => 'getMinDataVolumeCapacityForRestore'
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
    const STATUS_BUILDING = 'BUILDING';
    const STATUS_COMPLETED = 'COMPLETED';
    const STATUS_FAILED = 'FAILED';
    const STATUS_DELETING = 'DELETING';
    const TYPE_AUTO = 'auto';
    const TYPE_MANUAL = 'manual';
    const TYPE_FRAGMENT = 'fragment';
    const TYPE_INCREMENTAL = 'incremental';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_BUILDING,
            self::STATUS_COMPLETED,
            self::STATUS_FAILED,
            self::STATUS_DELETING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_AUTO,
            self::TYPE_MANUAL,
            self::TYPE_FRAGMENT,
            self::TYPE_INCREMENTAL,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['associatedWithDdm'] = isset($data['associatedWithDdm']) ? $data['associatedWithDdm'] : null;
        $this->container['minDataVolumeCapacityForRestore'] = isset($data['minDataVolumeCapacityForRestore']) ? $data['minDataVolumeCapacityForRestore'] : null;
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
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['beginTime'] === null) {
            $invalidProperties[] = "'beginTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['datastore'] === null) {
            $invalidProperties[] = "'datastore' can't be null";
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
    *  备份ID。
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
    * @param string $id 备份ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets name
    *  备份名称。
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
    * @param string $name 备份名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets databases
    *  备份的数据库。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\BackupDatabase[]|null
    */
    public function getDatabases()
    {
        return $this->container['databases'];
    }

    /**
    * Sets databases
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\BackupDatabase[]|null $databases 备份的数据库。
    *
    * @return $this
    */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;
        return $this;
    }

    /**
    * Gets beginTime
    *  备份开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return string
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string $beginTime 备份开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  备份结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 备份结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets status
    *  备份状态，取值：  - BUILDING: 备份中。 - COMPLETED: 备份完成。 - FAILED：备份失败。 - DELETING：备份删除中。
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
    * @param string $status 备份状态，取值：  - BUILDING: 备份中。 - COMPLETED: 备份完成。 - FAILED：备份失败。 - DELETING：备份删除中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  备份类型，取值：  - “auto”: 自动全量备份 - “manual”: 手动全量备份 - “fragment”: 差异全量备份 - “incremental”: 自动增量备份
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 备份类型，取值：  - “auto”: 自动全量备份 - “manual”: 手动全量备份 - “fragment”: 差异全量备份 - “incremental”: 自动增量备份
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets size
    *  备份大小，单位为KB。
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
    * @param int $size 备份大小，单位为KB。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\BackupDatastore
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\BackupDatastore $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets associatedWithDdm
    *  是否已被DDM实例关联。
    *
    * @return bool|null
    */
    public function getAssociatedWithDdm()
    {
        return $this->container['associatedWithDdm'];
    }

    /**
    * Sets associatedWithDdm
    *
    * @param bool|null $associatedWithDdm 是否已被DDM实例关联。
    *
    * @return $this
    */
    public function setAssociatedWithDdm($associatedWithDdm)
    {
        $this->container['associatedWithDdm'] = $associatedWithDdm;
        return $this;
    }

    /**
    * Gets minDataVolumeCapacityForRestore
    *  该备份源文件大小，用于该备份文件恢复到新实例时需要的最小磁盘空间大小。
    *
    * @return int|null
    */
    public function getMinDataVolumeCapacityForRestore()
    {
        return $this->container['minDataVolumeCapacityForRestore'];
    }

    /**
    * Sets minDataVolumeCapacityForRestore
    *
    * @param int|null $minDataVolumeCapacityForRestore 该备份源文件大小，用于该备份文件恢复到新实例时需要的最小磁盘空间大小。
    *
    * @return $this
    */
    public function setMinDataVolumeCapacityForRestore($minDataVolumeCapacityForRestore)
    {
        $this->container['minDataVolumeCapacityForRestore'] = $minDataVolumeCapacityForRestore;
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

