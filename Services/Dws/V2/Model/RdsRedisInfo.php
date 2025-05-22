<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RdsRedisInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RdsRedisInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 重分布信息ID。 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： PREPARE|RUNNING|WAITING|PAUSE|PAUSING|SUCCESS|FAIL。
    * redisConf  redisConf
    * redisProgress  redisProgress
    * redisTableDetail  redisTableDetail
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'clusterId' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'status' => 'string',
            'redisConf' => '\HuaweiCloud\SDK\Dws\V2\Model\RedisConf',
            'redisProgress' => '\HuaweiCloud\SDK\Dws\V2\Model\RedisProgress',
            'redisTableDetail' => '\HuaweiCloud\SDK\Dws\V2\Model\RedisTableDetail'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 重分布信息ID。 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： PREPARE|RUNNING|WAITING|PAUSE|PAUSING|SUCCESS|FAIL。
    * redisConf  redisConf
    * redisProgress  redisProgress
    * redisTableDetail  redisTableDetail
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'clusterId' => null,
        'startTime' => null,
        'endTime' => null,
        'status' => null,
        'redisConf' => null,
        'redisProgress' => null,
        'redisTableDetail' => null
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
    * id  **参数解释**： 重分布信息ID。 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： PREPARE|RUNNING|WAITING|PAUSE|PAUSING|SUCCESS|FAIL。
    * redisConf  redisConf
    * redisProgress  redisProgress
    * redisTableDetail  redisTableDetail
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'clusterId' => 'cluster_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'status' => 'status',
            'redisConf' => 'redis_conf',
            'redisProgress' => 'redis_progress',
            'redisTableDetail' => 'redis_table_detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 重分布信息ID。 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： PREPARE|RUNNING|WAITING|PAUSE|PAUSING|SUCCESS|FAIL。
    * redisConf  redisConf
    * redisProgress  redisProgress
    * redisTableDetail  redisTableDetail
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'clusterId' => 'setClusterId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'status' => 'setStatus',
            'redisConf' => 'setRedisConf',
            'redisProgress' => 'setRedisProgress',
            'redisTableDetail' => 'setRedisTableDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 重分布信息ID。 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： PREPARE|RUNNING|WAITING|PAUSE|PAUSING|SUCCESS|FAIL。
    * redisConf  redisConf
    * redisProgress  redisProgress
    * redisTableDetail  redisTableDetail
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'clusterId' => 'getClusterId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'status' => 'getStatus',
            'redisConf' => 'getRedisConf',
            'redisProgress' => 'getRedisProgress',
            'redisTableDetail' => 'getRedisTableDetail'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['redisConf'] = isset($data['redisConf']) ? $data['redisConf'] : null;
        $this->container['redisProgress'] = isset($data['redisProgress']) ? $data['redisProgress'] : null;
        $this->container['redisTableDetail'] = isset($data['redisTableDetail']) ? $data['redisTableDetail'] : null;
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
    *  **参数解释**： 重分布信息ID。 **取值范围**： 不涉及。
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
    * @param string|null $id **参数解释**： 重分布信息ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId **参数解释**： 集群ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 开始时间。 **取值范围**： 不涉及。
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
    * @param string|null $startTime **参数解释**： 开始时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**： 结束时间。 **取值范围**： 不涉及。
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
    * @param string|null $endTime **参数解释**： 结束时间。 **取值范围**： 不涉及。
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
    *  **参数解释**： 状态。 **取值范围**： PREPARE|RUNNING|WAITING|PAUSE|PAUSING|SUCCESS|FAIL。
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
    * @param string|null $status **参数解释**： 状态。 **取值范围**： PREPARE|RUNNING|WAITING|PAUSE|PAUSING|SUCCESS|FAIL。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets redisConf
    *  redisConf
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\RedisConf|null
    */
    public function getRedisConf()
    {
        return $this->container['redisConf'];
    }

    /**
    * Sets redisConf
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\RedisConf|null $redisConf redisConf
    *
    * @return $this
    */
    public function setRedisConf($redisConf)
    {
        $this->container['redisConf'] = $redisConf;
        return $this;
    }

    /**
    * Gets redisProgress
    *  redisProgress
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\RedisProgress|null
    */
    public function getRedisProgress()
    {
        return $this->container['redisProgress'];
    }

    /**
    * Sets redisProgress
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\RedisProgress|null $redisProgress redisProgress
    *
    * @return $this
    */
    public function setRedisProgress($redisProgress)
    {
        $this->container['redisProgress'] = $redisProgress;
        return $this;
    }

    /**
    * Gets redisTableDetail
    *  redisTableDetail
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\RedisTableDetail|null
    */
    public function getRedisTableDetail()
    {
        return $this->container['redisTableDetail'];
    }

    /**
    * Sets redisTableDetail
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\RedisTableDetail|null $redisTableDetail redisTableDetail
    *
    * @return $this
    */
    public function setRedisTableDetail($redisTableDetail)
    {
        $this->container['redisTableDetail'] = $redisTableDetail;
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

