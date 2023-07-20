<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Backup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Backup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  备份ID。
    * description  备份描述信息。
    * instanceId  备份所属的实例ID。
    * instanceName  备份所属的实例名称。
    * datastore  datastore
    * name  备份名称。
    * type  - 取值为“Auto”，表示自动全量备份。 - 取值为“Manual”，表示手动全量备份。
    * size  备份大小，单位：KB。
    * status  备份状态。取值： - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。
    * beginTime  备份开始时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。
    * endTime  备份结束时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。
    * databaseTables  备份里的库表信息 - 实例级查询时该字段为空，可忽略 - 库表级查询时该字段非空（存在库表级备份的话）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'description' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'datastore' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\Datastore',
            'name' => 'string',
            'type' => 'string',
            'size' => 'double',
            'status' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'databaseTables' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\QueryDatabaseTableInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  备份ID。
    * description  备份描述信息。
    * instanceId  备份所属的实例ID。
    * instanceName  备份所属的实例名称。
    * datastore  datastore
    * name  备份名称。
    * type  - 取值为“Auto”，表示自动全量备份。 - 取值为“Manual”，表示手动全量备份。
    * size  备份大小，单位：KB。
    * status  备份状态。取值： - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。
    * beginTime  备份开始时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。
    * endTime  备份结束时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。
    * databaseTables  备份里的库表信息 - 实例级查询时该字段为空，可忽略 - 库表级查询时该字段非空（存在库表级备份的话）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'description' => null,
        'instanceId' => null,
        'instanceName' => null,
        'datastore' => null,
        'name' => null,
        'type' => null,
        'size' => 'double',
        'status' => null,
        'beginTime' => null,
        'endTime' => null,
        'databaseTables' => null
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
    * description  备份描述信息。
    * instanceId  备份所属的实例ID。
    * instanceName  备份所属的实例名称。
    * datastore  datastore
    * name  备份名称。
    * type  - 取值为“Auto”，表示自动全量备份。 - 取值为“Manual”，表示手动全量备份。
    * size  备份大小，单位：KB。
    * status  备份状态。取值： - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。
    * beginTime  备份开始时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。
    * endTime  备份结束时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。
    * databaseTables  备份里的库表信息 - 实例级查询时该字段为空，可忽略 - 库表级查询时该字段非空（存在库表级备份的话）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'description' => 'description',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'datastore' => 'datastore',
            'name' => 'name',
            'type' => 'type',
            'size' => 'size',
            'status' => 'status',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'databaseTables' => 'database_tables'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  备份ID。
    * description  备份描述信息。
    * instanceId  备份所属的实例ID。
    * instanceName  备份所属的实例名称。
    * datastore  datastore
    * name  备份名称。
    * type  - 取值为“Auto”，表示自动全量备份。 - 取值为“Manual”，表示手动全量备份。
    * size  备份大小，单位：KB。
    * status  备份状态。取值： - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。
    * beginTime  备份开始时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。
    * endTime  备份结束时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。
    * databaseTables  备份里的库表信息 - 实例级查询时该字段为空，可忽略 - 库表级查询时该字段非空（存在库表级备份的话）
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'description' => 'setDescription',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'datastore' => 'setDatastore',
            'name' => 'setName',
            'type' => 'setType',
            'size' => 'setSize',
            'status' => 'setStatus',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'databaseTables' => 'setDatabaseTables'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  备份ID。
    * description  备份描述信息。
    * instanceId  备份所属的实例ID。
    * instanceName  备份所属的实例名称。
    * datastore  datastore
    * name  备份名称。
    * type  - 取值为“Auto”，表示自动全量备份。 - 取值为“Manual”，表示手动全量备份。
    * size  备份大小，单位：KB。
    * status  备份状态。取值： - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。
    * beginTime  备份开始时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。
    * endTime  备份结束时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。
    * databaseTables  备份里的库表信息 - 实例级查询时该字段为空，可忽略 - 库表级查询时该字段非空（存在库表级备份的话）
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'description' => 'getDescription',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'datastore' => 'getDatastore',
            'name' => 'getName',
            'type' => 'getType',
            'size' => 'getSize',
            'status' => 'getStatus',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'databaseTables' => 'getDatabaseTables'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['databaseTables'] = isset($data['databaseTables']) ? $data['databaseTables'] : null;
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
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['instanceName'] === null) {
            $invalidProperties[] = "'instanceName' can't be null";
        }
        if ($this->container['datastore'] === null) {
            $invalidProperties[] = "'datastore' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['beginTime'] === null) {
            $invalidProperties[] = "'beginTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
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
    * Gets description
    *  备份描述信息。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 备份描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets instanceId
    *  备份所属的实例ID。
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
    * @param string $instanceId 备份所属的实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  备份所属的实例名称。
    *
    * @return string
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string $instanceName 备份所属的实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\Datastore
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\Datastore $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
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
    * Gets type
    *  - 取值为“Auto”，表示自动全量备份。 - 取值为“Manual”，表示手动全量备份。
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
    * @param string $type - 取值为“Auto”，表示自动全量备份。 - 取值为“Manual”，表示手动全量备份。
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
    *  备份大小，单位：KB。
    *
    * @return double
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param double $size 备份大小，单位：KB。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets status
    *  备份状态。取值： - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。
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
    * @param string $status 备份状态。取值： - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets beginTime
    *  备份开始时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。
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
    * @param string $beginTime 备份开始时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。
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
    *  备份结束时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。
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
    * @param string $endTime 备份结束时间，为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets databaseTables
    *  备份里的库表信息 - 实例级查询时该字段为空，可忽略 - 库表级查询时该字段非空（存在库表级备份的话）
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\QueryDatabaseTableInfo[]|null
    */
    public function getDatabaseTables()
    {
        return $this->container['databaseTables'];
    }

    /**
    * Sets databaseTables
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\QueryDatabaseTableInfo[]|null $databaseTables 备份里的库表信息 - 实例级查询时该字段为空，可忽略 - 库表级查询时该字段非空（存在库表级备份的话）
    *
    * @return $this
    */
    public function setDatabaseTables($databaseTables)
    {
        $this->container['databaseTables'] = $databaseTables;
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

