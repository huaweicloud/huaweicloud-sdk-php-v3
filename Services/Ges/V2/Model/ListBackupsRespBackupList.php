<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBackupsRespBackupList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBackupsResp_backup_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  备份ID。
    * name  备份名称。
    * backupMethod  备份方法，取值为auto或manual。
    * graphId  备份关联的图ID。
    * graphName  备份关联的图Name。
    * graphStatus  备份关联的图状态。
    * graphSizeTypeIndex  备份关联的图规格。
    * dataStoreVersion  备份关联的图版本。
    * arch  备份关联的图CPU架构。
    * status  备份状态。  - backing_up：备份中 - success：备份成功 - failed：备份失败
    * startTimestamp  备份开始时间戳。
    * startTime  备份开始时间。
    * endTimestamp  备份结束时间戳。
    * endTime  备份结束时间。
    * size  备份文件大小，单位为MB。
    * duration  备份时间，单位为秒。
    * encrypted  是否加密。true表示加密，默认值为\"false\"，不加密。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'backupMethod' => 'string',
            'graphId' => 'string',
            'graphName' => 'string',
            'graphStatus' => 'string',
            'graphSizeTypeIndex' => 'string',
            'dataStoreVersion' => 'string',
            'arch' => 'string',
            'status' => 'string',
            'startTimestamp' => 'int',
            'startTime' => 'string',
            'endTimestamp' => 'int',
            'endTime' => 'string',
            'size' => 'int',
            'duration' => 'int',
            'encrypted' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  备份ID。
    * name  备份名称。
    * backupMethod  备份方法，取值为auto或manual。
    * graphId  备份关联的图ID。
    * graphName  备份关联的图Name。
    * graphStatus  备份关联的图状态。
    * graphSizeTypeIndex  备份关联的图规格。
    * dataStoreVersion  备份关联的图版本。
    * arch  备份关联的图CPU架构。
    * status  备份状态。  - backing_up：备份中 - success：备份成功 - failed：备份失败
    * startTimestamp  备份开始时间戳。
    * startTime  备份开始时间。
    * endTimestamp  备份结束时间戳。
    * endTime  备份结束时间。
    * size  备份文件大小，单位为MB。
    * duration  备份时间，单位为秒。
    * encrypted  是否加密。true表示加密，默认值为\"false\"，不加密。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'backupMethod' => null,
        'graphId' => null,
        'graphName' => null,
        'graphStatus' => null,
        'graphSizeTypeIndex' => null,
        'dataStoreVersion' => null,
        'arch' => null,
        'status' => null,
        'startTimestamp' => 'int64',
        'startTime' => null,
        'endTimestamp' => 'int64',
        'endTime' => null,
        'size' => 'int64',
        'duration' => 'int64',
        'encrypted' => null
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
    * name  备份名称。
    * backupMethod  备份方法，取值为auto或manual。
    * graphId  备份关联的图ID。
    * graphName  备份关联的图Name。
    * graphStatus  备份关联的图状态。
    * graphSizeTypeIndex  备份关联的图规格。
    * dataStoreVersion  备份关联的图版本。
    * arch  备份关联的图CPU架构。
    * status  备份状态。  - backing_up：备份中 - success：备份成功 - failed：备份失败
    * startTimestamp  备份开始时间戳。
    * startTime  备份开始时间。
    * endTimestamp  备份结束时间戳。
    * endTime  备份结束时间。
    * size  备份文件大小，单位为MB。
    * duration  备份时间，单位为秒。
    * encrypted  是否加密。true表示加密，默认值为\"false\"，不加密。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'backupMethod' => 'backup_method',
            'graphId' => 'graph_id',
            'graphName' => 'graph_name',
            'graphStatus' => 'graph_status',
            'graphSizeTypeIndex' => 'graph_size_type_index',
            'dataStoreVersion' => 'data_store_version',
            'arch' => 'arch',
            'status' => 'status',
            'startTimestamp' => 'start_timestamp',
            'startTime' => 'start_time',
            'endTimestamp' => 'end_timestamp',
            'endTime' => 'end_time',
            'size' => 'size',
            'duration' => 'duration',
            'encrypted' => 'encrypted'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  备份ID。
    * name  备份名称。
    * backupMethod  备份方法，取值为auto或manual。
    * graphId  备份关联的图ID。
    * graphName  备份关联的图Name。
    * graphStatus  备份关联的图状态。
    * graphSizeTypeIndex  备份关联的图规格。
    * dataStoreVersion  备份关联的图版本。
    * arch  备份关联的图CPU架构。
    * status  备份状态。  - backing_up：备份中 - success：备份成功 - failed：备份失败
    * startTimestamp  备份开始时间戳。
    * startTime  备份开始时间。
    * endTimestamp  备份结束时间戳。
    * endTime  备份结束时间。
    * size  备份文件大小，单位为MB。
    * duration  备份时间，单位为秒。
    * encrypted  是否加密。true表示加密，默认值为\"false\"，不加密。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'backupMethod' => 'setBackupMethod',
            'graphId' => 'setGraphId',
            'graphName' => 'setGraphName',
            'graphStatus' => 'setGraphStatus',
            'graphSizeTypeIndex' => 'setGraphSizeTypeIndex',
            'dataStoreVersion' => 'setDataStoreVersion',
            'arch' => 'setArch',
            'status' => 'setStatus',
            'startTimestamp' => 'setStartTimestamp',
            'startTime' => 'setStartTime',
            'endTimestamp' => 'setEndTimestamp',
            'endTime' => 'setEndTime',
            'size' => 'setSize',
            'duration' => 'setDuration',
            'encrypted' => 'setEncrypted'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  备份ID。
    * name  备份名称。
    * backupMethod  备份方法，取值为auto或manual。
    * graphId  备份关联的图ID。
    * graphName  备份关联的图Name。
    * graphStatus  备份关联的图状态。
    * graphSizeTypeIndex  备份关联的图规格。
    * dataStoreVersion  备份关联的图版本。
    * arch  备份关联的图CPU架构。
    * status  备份状态。  - backing_up：备份中 - success：备份成功 - failed：备份失败
    * startTimestamp  备份开始时间戳。
    * startTime  备份开始时间。
    * endTimestamp  备份结束时间戳。
    * endTime  备份结束时间。
    * size  备份文件大小，单位为MB。
    * duration  备份时间，单位为秒。
    * encrypted  是否加密。true表示加密，默认值为\"false\"，不加密。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'backupMethod' => 'getBackupMethod',
            'graphId' => 'getGraphId',
            'graphName' => 'getGraphName',
            'graphStatus' => 'getGraphStatus',
            'graphSizeTypeIndex' => 'getGraphSizeTypeIndex',
            'dataStoreVersion' => 'getDataStoreVersion',
            'arch' => 'getArch',
            'status' => 'getStatus',
            'startTimestamp' => 'getStartTimestamp',
            'startTime' => 'getStartTime',
            'endTimestamp' => 'getEndTimestamp',
            'endTime' => 'getEndTime',
            'size' => 'getSize',
            'duration' => 'getDuration',
            'encrypted' => 'getEncrypted'
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
        $this->container['backupMethod'] = isset($data['backupMethod']) ? $data['backupMethod'] : null;
        $this->container['graphId'] = isset($data['graphId']) ? $data['graphId'] : null;
        $this->container['graphName'] = isset($data['graphName']) ? $data['graphName'] : null;
        $this->container['graphStatus'] = isset($data['graphStatus']) ? $data['graphStatus'] : null;
        $this->container['graphSizeTypeIndex'] = isset($data['graphSizeTypeIndex']) ? $data['graphSizeTypeIndex'] : null;
        $this->container['dataStoreVersion'] = isset($data['dataStoreVersion']) ? $data['dataStoreVersion'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startTimestamp'] = isset($data['startTimestamp']) ? $data['startTimestamp'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTimestamp'] = isset($data['endTimestamp']) ? $data['endTimestamp'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['encrypted'] = isset($data['encrypted']) ? $data['encrypted'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 备份ID。
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
    *  备份名称。
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
    * @param string|null $name 备份名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets backupMethod
    *  备份方法，取值为auto或manual。
    *
    * @return string|null
    */
    public function getBackupMethod()
    {
        return $this->container['backupMethod'];
    }

    /**
    * Sets backupMethod
    *
    * @param string|null $backupMethod 备份方法，取值为auto或manual。
    *
    * @return $this
    */
    public function setBackupMethod($backupMethod)
    {
        $this->container['backupMethod'] = $backupMethod;
        return $this;
    }

    /**
    * Gets graphId
    *  备份关联的图ID。
    *
    * @return string|null
    */
    public function getGraphId()
    {
        return $this->container['graphId'];
    }

    /**
    * Sets graphId
    *
    * @param string|null $graphId 备份关联的图ID。
    *
    * @return $this
    */
    public function setGraphId($graphId)
    {
        $this->container['graphId'] = $graphId;
        return $this;
    }

    /**
    * Gets graphName
    *  备份关联的图Name。
    *
    * @return string|null
    */
    public function getGraphName()
    {
        return $this->container['graphName'];
    }

    /**
    * Sets graphName
    *
    * @param string|null $graphName 备份关联的图Name。
    *
    * @return $this
    */
    public function setGraphName($graphName)
    {
        $this->container['graphName'] = $graphName;
        return $this;
    }

    /**
    * Gets graphStatus
    *  备份关联的图状态。
    *
    * @return string|null
    */
    public function getGraphStatus()
    {
        return $this->container['graphStatus'];
    }

    /**
    * Sets graphStatus
    *
    * @param string|null $graphStatus 备份关联的图状态。
    *
    * @return $this
    */
    public function setGraphStatus($graphStatus)
    {
        $this->container['graphStatus'] = $graphStatus;
        return $this;
    }

    /**
    * Gets graphSizeTypeIndex
    *  备份关联的图规格。
    *
    * @return string|null
    */
    public function getGraphSizeTypeIndex()
    {
        return $this->container['graphSizeTypeIndex'];
    }

    /**
    * Sets graphSizeTypeIndex
    *
    * @param string|null $graphSizeTypeIndex 备份关联的图规格。
    *
    * @return $this
    */
    public function setGraphSizeTypeIndex($graphSizeTypeIndex)
    {
        $this->container['graphSizeTypeIndex'] = $graphSizeTypeIndex;
        return $this;
    }

    /**
    * Gets dataStoreVersion
    *  备份关联的图版本。
    *
    * @return string|null
    */
    public function getDataStoreVersion()
    {
        return $this->container['dataStoreVersion'];
    }

    /**
    * Sets dataStoreVersion
    *
    * @param string|null $dataStoreVersion 备份关联的图版本。
    *
    * @return $this
    */
    public function setDataStoreVersion($dataStoreVersion)
    {
        $this->container['dataStoreVersion'] = $dataStoreVersion;
        return $this;
    }

    /**
    * Gets arch
    *  备份关联的图CPU架构。
    *
    * @return string|null
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param string|null $arch 备份关联的图CPU架构。
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets status
    *  备份状态。  - backing_up：备份中 - success：备份成功 - failed：备份失败
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 备份状态。  - backing_up：备份中 - success：备份成功 - failed：备份失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets startTimestamp
    *  备份开始时间戳。
    *
    * @return int|null
    */
    public function getStartTimestamp()
    {
        return $this->container['startTimestamp'];
    }

    /**
    * Sets startTimestamp
    *
    * @param int|null $startTimestamp 备份开始时间戳。
    *
    * @return $this
    */
    public function setStartTimestamp($startTimestamp)
    {
        $this->container['startTimestamp'] = $startTimestamp;
        return $this;
    }

    /**
    * Gets startTime
    *  备份开始时间。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 备份开始时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTimestamp
    *  备份结束时间戳。
    *
    * @return int|null
    */
    public function getEndTimestamp()
    {
        return $this->container['endTimestamp'];
    }

    /**
    * Sets endTimestamp
    *
    * @param int|null $endTimestamp 备份结束时间戳。
    *
    * @return $this
    */
    public function setEndTimestamp($endTimestamp)
    {
        $this->container['endTimestamp'] = $endTimestamp;
        return $this;
    }

    /**
    * Gets endTime
    *  备份结束时间。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 备份结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets size
    *  备份文件大小，单位为MB。
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
    * @param int|null $size 备份文件大小，单位为MB。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets duration
    *  备份时间，单位为秒。
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 备份时间，单位为秒。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets encrypted
    *  是否加密。true表示加密，默认值为\"false\"，不加密。
    *
    * @return bool|null
    */
    public function getEncrypted()
    {
        return $this->container['encrypted'];
    }

    /**
    * Sets encrypted
    *
    * @param bool|null $encrypted 是否加密。true表示加密，默认值为\"false\"，不加密。
    *
    * @return $this
    */
    public function setEncrypted($encrypted)
    {
        $this->container['encrypted'] = $encrypted;
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

