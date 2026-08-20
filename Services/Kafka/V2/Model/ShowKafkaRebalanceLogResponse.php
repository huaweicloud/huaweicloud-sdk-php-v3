<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowKafkaRebalanceLogResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowKafkaRebalanceLogResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 日志ID。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * status  **参数解释**： 重平衡日志状态。 **取值范围**： - OPEN：已开启重平衡日志。 - CLOSE：已关闭重平衡日志。 - OPENING：重平衡日志开启中。 - CLOSING：重平衡日志关闭中。
    * logStreamId  **参数解释**： 日志流ID。 **取值范围**： 不涉及。
    * logGroupId  **参数解释**： 日志组ID。 **取值范围**： 不涉及。
    * dashboardId  **参数解释**： 看板ID。 **取值范围**： 不涉及。
    * logType  **参数解释**： 日志类型。 **取值范围**： 不涉及。
    * logFileName  **参数解释**： 日志文件名称。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updatedAt  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'instanceId' => 'string',
            'status' => 'string',
            'logStreamId' => 'string',
            'logGroupId' => 'string',
            'dashboardId' => 'string',
            'logType' => 'string',
            'logFileName' => 'string',
            'createdAt' => 'int',
            'updatedAt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 日志ID。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * status  **参数解释**： 重平衡日志状态。 **取值范围**： - OPEN：已开启重平衡日志。 - CLOSE：已关闭重平衡日志。 - OPENING：重平衡日志开启中。 - CLOSING：重平衡日志关闭中。
    * logStreamId  **参数解释**： 日志流ID。 **取值范围**： 不涉及。
    * logGroupId  **参数解释**： 日志组ID。 **取值范围**： 不涉及。
    * dashboardId  **参数解释**： 看板ID。 **取值范围**： 不涉及。
    * logType  **参数解释**： 日志类型。 **取值范围**： 不涉及。
    * logFileName  **参数解释**： 日志文件名称。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updatedAt  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'instanceId' => null,
        'status' => null,
        'logStreamId' => null,
        'logGroupId' => null,
        'dashboardId' => null,
        'logType' => null,
        'logFileName' => null,
        'createdAt' => 'int64',
        'updatedAt' => 'int64'
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
    * id  **参数解释**： 日志ID。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * status  **参数解释**： 重平衡日志状态。 **取值范围**： - OPEN：已开启重平衡日志。 - CLOSE：已关闭重平衡日志。 - OPENING：重平衡日志开启中。 - CLOSING：重平衡日志关闭中。
    * logStreamId  **参数解释**： 日志流ID。 **取值范围**： 不涉及。
    * logGroupId  **参数解释**： 日志组ID。 **取值范围**： 不涉及。
    * dashboardId  **参数解释**： 看板ID。 **取值范围**： 不涉及。
    * logType  **参数解释**： 日志类型。 **取值范围**： 不涉及。
    * logFileName  **参数解释**： 日志文件名称。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updatedAt  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'instanceId' => 'instance_id',
            'status' => 'status',
            'logStreamId' => 'log_stream_id',
            'logGroupId' => 'log_group_id',
            'dashboardId' => 'dashboard_id',
            'logType' => 'log_type',
            'logFileName' => 'log_file_name',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 日志ID。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * status  **参数解释**： 重平衡日志状态。 **取值范围**： - OPEN：已开启重平衡日志。 - CLOSE：已关闭重平衡日志。 - OPENING：重平衡日志开启中。 - CLOSING：重平衡日志关闭中。
    * logStreamId  **参数解释**： 日志流ID。 **取值范围**： 不涉及。
    * logGroupId  **参数解释**： 日志组ID。 **取值范围**： 不涉及。
    * dashboardId  **参数解释**： 看板ID。 **取值范围**： 不涉及。
    * logType  **参数解释**： 日志类型。 **取值范围**： 不涉及。
    * logFileName  **参数解释**： 日志文件名称。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updatedAt  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'instanceId' => 'setInstanceId',
            'status' => 'setStatus',
            'logStreamId' => 'setLogStreamId',
            'logGroupId' => 'setLogGroupId',
            'dashboardId' => 'setDashboardId',
            'logType' => 'setLogType',
            'logFileName' => 'setLogFileName',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 日志ID。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * status  **参数解释**： 重平衡日志状态。 **取值范围**： - OPEN：已开启重平衡日志。 - CLOSE：已关闭重平衡日志。 - OPENING：重平衡日志开启中。 - CLOSING：重平衡日志关闭中。
    * logStreamId  **参数解释**： 日志流ID。 **取值范围**： 不涉及。
    * logGroupId  **参数解释**： 日志组ID。 **取值范围**： 不涉及。
    * dashboardId  **参数解释**： 看板ID。 **取值范围**： 不涉及。
    * logType  **参数解释**： 日志类型。 **取值范围**： 不涉及。
    * logFileName  **参数解释**： 日志文件名称。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updatedAt  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'instanceId' => 'getInstanceId',
            'status' => 'getStatus',
            'logStreamId' => 'getLogStreamId',
            'logGroupId' => 'getLogGroupId',
            'dashboardId' => 'getDashboardId',
            'logType' => 'getLogType',
            'logFileName' => 'getLogFileName',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['dashboardId'] = isset($data['dashboardId']) ? $data['dashboardId'] : null;
        $this->container['logType'] = isset($data['logType']) ? $data['logType'] : null;
        $this->container['logFileName'] = isset($data['logFileName']) ? $data['logFileName'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
    *  **参数解释**： 日志ID。 **取值范围**： 不涉及。
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
    * @param string|null $id **参数解释**： 日志ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 实例ID。 **取值范围**： 不涉及。
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
    * @param string|null $instanceId **参数解释**： 实例ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 重平衡日志状态。 **取值范围**： - OPEN：已开启重平衡日志。 - CLOSE：已关闭重平衡日志。 - OPENING：重平衡日志开启中。 - CLOSING：重平衡日志关闭中。
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
    * @param string|null $status **参数解释**： 重平衡日志状态。 **取值范围**： - OPEN：已开启重平衡日志。 - CLOSE：已关闭重平衡日志。 - OPENING：重平衡日志开启中。 - CLOSING：重平衡日志关闭中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets logStreamId
    *  **参数解释**： 日志流ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string|null $logStreamId **参数解释**： 日志流ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets logGroupId
    *  **参数解释**： 日志组ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string|null $logGroupId **参数解释**： 日志组ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets dashboardId
    *  **参数解释**： 看板ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDashboardId()
    {
        return $this->container['dashboardId'];
    }

    /**
    * Sets dashboardId
    *
    * @param string|null $dashboardId **参数解释**： 看板ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDashboardId($dashboardId)
    {
        $this->container['dashboardId'] = $dashboardId;
        return $this;
    }

    /**
    * Gets logType
    *  **参数解释**： 日志类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLogType()
    {
        return $this->container['logType'];
    }

    /**
    * Sets logType
    *
    * @param string|null $logType **参数解释**： 日志类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLogType($logType)
    {
        $this->container['logType'] = $logType;
        return $this;
    }

    /**
    * Gets logFileName
    *  **参数解释**： 日志文件名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLogFileName()
    {
        return $this->container['logFileName'];
    }

    /**
    * Sets logFileName
    *
    * @param string|null $logFileName **参数解释**： 日志文件名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLogFileName($logFileName)
    {
        $this->container['logFileName'] = $logFileName;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param int|null $createdAt **参数解释**： 创建时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param int|null $updatedAt **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

