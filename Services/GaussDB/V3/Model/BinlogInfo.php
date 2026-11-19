<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BinlogInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BinlogInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：  Binlog日志文件ID。   **取值范围**：  不涉及。
    * name  **参数解释**：  Binlog日志文件名字。   **取值范围**：  不涉及。
    * instanceId  **参数解释**：  Binlog日志对应的实例ID。   **取值范围**：  不涉及。
    * instanceName  **参数解释**：  Binlog日志对应的实例名称。   **取值范围**：  不涉及。
    * size  **参数解释**：  Binlog日志文件大小，单位是KB。   **取值范围**：  不涉及。
    * beginTime  **参数解释**：  Binlog日志文件中上一轮任务的最后一个事务的提交时间。   **取值范围**：  不涉及。
    * endTime  **参数解释**：  Binlog日志文件中最后一个事务的提交时间。   **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'size' => 'int',
            'beginTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：  Binlog日志文件ID。   **取值范围**：  不涉及。
    * name  **参数解释**：  Binlog日志文件名字。   **取值范围**：  不涉及。
    * instanceId  **参数解释**：  Binlog日志对应的实例ID。   **取值范围**：  不涉及。
    * instanceName  **参数解释**：  Binlog日志对应的实例名称。   **取值范围**：  不涉及。
    * size  **参数解释**：  Binlog日志文件大小，单位是KB。   **取值范围**：  不涉及。
    * beginTime  **参数解释**：  Binlog日志文件中上一轮任务的最后一个事务的提交时间。   **取值范围**：  不涉及。
    * endTime  **参数解释**：  Binlog日志文件中最后一个事务的提交时间。   **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'instanceId' => null,
        'instanceName' => null,
        'size' => 'int64',
        'beginTime' => null,
        'endTime' => null
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
    * id  **参数解释**：  Binlog日志文件ID。   **取值范围**：  不涉及。
    * name  **参数解释**：  Binlog日志文件名字。   **取值范围**：  不涉及。
    * instanceId  **参数解释**：  Binlog日志对应的实例ID。   **取值范围**：  不涉及。
    * instanceName  **参数解释**：  Binlog日志对应的实例名称。   **取值范围**：  不涉及。
    * size  **参数解释**：  Binlog日志文件大小，单位是KB。   **取值范围**：  不涉及。
    * beginTime  **参数解释**：  Binlog日志文件中上一轮任务的最后一个事务的提交时间。   **取值范围**：  不涉及。
    * endTime  **参数解释**：  Binlog日志文件中最后一个事务的提交时间。   **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'size' => 'size',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：  Binlog日志文件ID。   **取值范围**：  不涉及。
    * name  **参数解释**：  Binlog日志文件名字。   **取值范围**：  不涉及。
    * instanceId  **参数解释**：  Binlog日志对应的实例ID。   **取值范围**：  不涉及。
    * instanceName  **参数解释**：  Binlog日志对应的实例名称。   **取值范围**：  不涉及。
    * size  **参数解释**：  Binlog日志文件大小，单位是KB。   **取值范围**：  不涉及。
    * beginTime  **参数解释**：  Binlog日志文件中上一轮任务的最后一个事务的提交时间。   **取值范围**：  不涉及。
    * endTime  **参数解释**：  Binlog日志文件中最后一个事务的提交时间。   **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'size' => 'setSize',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：  Binlog日志文件ID。   **取值范围**：  不涉及。
    * name  **参数解释**：  Binlog日志文件名字。   **取值范围**：  不涉及。
    * instanceId  **参数解释**：  Binlog日志对应的实例ID。   **取值范围**：  不涉及。
    * instanceName  **参数解释**：  Binlog日志对应的实例名称。   **取值范围**：  不涉及。
    * size  **参数解释**：  Binlog日志文件大小，单位是KB。   **取值范围**：  不涉及。
    * beginTime  **参数解释**：  Binlog日志文件中上一轮任务的最后一个事务的提交时间。   **取值范围**：  不涉及。
    * endTime  **参数解释**：  Binlog日志文件中最后一个事务的提交时间。   **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'size' => 'getSize',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
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
    *  **参数解释**：  Binlog日志文件ID。   **取值范围**：  不涉及。
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
    * @param string|null $id **参数解释**：  Binlog日志文件ID。   **取值范围**：  不涉及。
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
    *  **参数解释**：  Binlog日志文件名字。   **取值范围**：  不涉及。
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
    * @param string|null $name **参数解释**：  Binlog日志文件名字。   **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**：  Binlog日志对应的实例ID。   **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**：  Binlog日志对应的实例ID。   **取值范围**：  不涉及。
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
    *  **参数解释**：  Binlog日志对应的实例名称。   **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName **参数解释**：  Binlog日志对应的实例名称。   **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释**：  Binlog日志文件大小，单位是KB。   **取值范围**：  不涉及。
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
    * @param int|null $size **参数解释**：  Binlog日志文件大小，单位是KB。   **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets beginTime
    *  **参数解释**：  Binlog日志文件中上一轮任务的最后一个事务的提交时间。   **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime **参数解释**：  Binlog日志文件中上一轮任务的最后一个事务的提交时间。   **取值范围**：  不涉及。
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
    *  **参数解释**：  Binlog日志文件中最后一个事务的提交时间。   **取值范围**：  不涉及。
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
    * @param string|null $endTime **参数解释**：  Binlog日志文件中最后一个事务的提交时间。   **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

