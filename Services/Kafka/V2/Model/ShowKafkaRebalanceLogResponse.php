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
    * id  日志ID。
    * instanceId  实例ID。
    * status  状态。
    * logStreamId  日志流ID。
    * logGroupId  日志组ID。
    * dashboardId  看板ID。
    * createAt  创建时间。
    * updateAt  更新时间。
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
            'createAt' => 'string',
            'updateAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  日志ID。
    * instanceId  实例ID。
    * status  状态。
    * logStreamId  日志流ID。
    * logGroupId  日志组ID。
    * dashboardId  看板ID。
    * createAt  创建时间。
    * updateAt  更新时间。
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
        'createAt' => null,
        'updateAt' => null
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
    * id  日志ID。
    * instanceId  实例ID。
    * status  状态。
    * logStreamId  日志流ID。
    * logGroupId  日志组ID。
    * dashboardId  看板ID。
    * createAt  创建时间。
    * updateAt  更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'instanceId' => 'instanceId',
            'status' => 'status',
            'logStreamId' => 'logStreamId',
            'logGroupId' => 'logGroupId',
            'dashboardId' => 'dashboardId',
            'createAt' => 'createAt',
            'updateAt' => 'updateAt'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  日志ID。
    * instanceId  实例ID。
    * status  状态。
    * logStreamId  日志流ID。
    * logGroupId  日志组ID。
    * dashboardId  看板ID。
    * createAt  创建时间。
    * updateAt  更新时间。
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
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  日志ID。
    * instanceId  实例ID。
    * status  状态。
    * logStreamId  日志流ID。
    * logGroupId  日志组ID。
    * dashboardId  看板ID。
    * createAt  创建时间。
    * updateAt  更新时间。
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
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt'
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
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
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
    *  日志ID。
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
    * @param string|null $id 日志ID。
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
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID。
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
    *  状态。
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
    * @param string|null $status 状态。
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
    *  日志流ID。
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
    * @param string|null $logStreamId 日志流ID。
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
    *  日志组ID。
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
    * @param string|null $logGroupId 日志组ID。
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
    *  看板ID。
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
    * @param string|null $dashboardId 看板ID。
    *
    * @return $this
    */
    public function setDashboardId($dashboardId)
    {
        $this->container['dashboardId'] = $dashboardId;
        return $this;
    }

    /**
    * Gets createAt
    *  创建时间。
    *
    * @return string|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param string|null $createAt 创建时间。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  更新时间。
    *
    * @return string|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param string|null $updateAt 更新时间。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
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

