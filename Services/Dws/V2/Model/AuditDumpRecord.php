<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuditDumpRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuditDumpRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 36位UUID。
    * executorTime  **参数解释**： 执行时间。 **取值范围**： 不涉及。
    * beginTime  **参数解释**： 开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    * bucketName  **参数解释**： 桶名。 **取值范围**： 不涉及。
    * locationPrefix  **参数解释**： 前缀。 **取值范围**： 不涉及。
    * result  **参数解释**： 结果。 **取值范围**： 不涉及。
    * failedReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'executorTime' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'bucketName' => 'string',
            'locationPrefix' => 'string',
            'result' => 'string',
            'failedReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 36位UUID。
    * executorTime  **参数解释**： 执行时间。 **取值范围**： 不涉及。
    * beginTime  **参数解释**： 开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    * bucketName  **参数解释**： 桶名。 **取值范围**： 不涉及。
    * locationPrefix  **参数解释**： 前缀。 **取值范围**： 不涉及。
    * result  **参数解释**： 结果。 **取值范围**： 不涉及。
    * failedReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'executorTime' => null,
        'beginTime' => null,
        'endTime' => null,
        'bucketName' => null,
        'locationPrefix' => null,
        'result' => null,
        'failedReason' => null
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
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 36位UUID。
    * executorTime  **参数解释**： 执行时间。 **取值范围**： 不涉及。
    * beginTime  **参数解释**： 开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    * bucketName  **参数解释**： 桶名。 **取值范围**： 不涉及。
    * locationPrefix  **参数解释**： 前缀。 **取值范围**： 不涉及。
    * result  **参数解释**： 结果。 **取值范围**： 不涉及。
    * failedReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'executorTime' => 'executor_time',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'bucketName' => 'bucket_name',
            'locationPrefix' => 'location_prefix',
            'result' => 'result',
            'failedReason' => 'failed_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 36位UUID。
    * executorTime  **参数解释**： 执行时间。 **取值范围**： 不涉及。
    * beginTime  **参数解释**： 开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    * bucketName  **参数解释**： 桶名。 **取值范围**： 不涉及。
    * locationPrefix  **参数解释**： 前缀。 **取值范围**： 不涉及。
    * result  **参数解释**： 结果。 **取值范围**： 不涉及。
    * failedReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'executorTime' => 'setExecutorTime',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'bucketName' => 'setBucketName',
            'locationPrefix' => 'setLocationPrefix',
            'result' => 'setResult',
            'failedReason' => 'setFailedReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 36位UUID。
    * executorTime  **参数解释**： 执行时间。 **取值范围**： 不涉及。
    * beginTime  **参数解释**： 开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    * bucketName  **参数解释**： 桶名。 **取值范围**： 不涉及。
    * locationPrefix  **参数解释**： 前缀。 **取值范围**： 不涉及。
    * result  **参数解释**： 结果。 **取值范围**： 不涉及。
    * failedReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'executorTime' => 'getExecutorTime',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'bucketName' => 'getBucketName',
            'locationPrefix' => 'getLocationPrefix',
            'result' => 'getResult',
            'failedReason' => 'getFailedReason'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['executorTime'] = isset($data['executorTime']) ? $data['executorTime'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['locationPrefix'] = isset($data['locationPrefix']) ? $data['locationPrefix'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
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
    * Gets clusterId
    *  **参数解释**： 集群ID。 **取值范围**： 36位UUID。
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
    * @param string|null $clusterId **参数解释**： 集群ID。 **取值范围**： 36位UUID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets executorTime
    *  **参数解释**： 执行时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getExecutorTime()
    {
        return $this->container['executorTime'];
    }

    /**
    * Sets executorTime
    *
    * @param string|null $executorTime **参数解释**： 执行时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setExecutorTime($executorTime)
    {
        $this->container['executorTime'] = $executorTime;
        return $this;
    }

    /**
    * Gets beginTime
    *  **参数解释**： 开始时间。 **取值范围**： 不涉及。
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
    * @param string|null $beginTime **参数解释**： 开始时间。 **取值范围**： 不涉及。
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
    * Gets bucketName
    *  **参数解释**： 桶名。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string|null $bucketName **参数解释**： 桶名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets locationPrefix
    *  **参数解释**： 前缀。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLocationPrefix()
    {
        return $this->container['locationPrefix'];
    }

    /**
    * Sets locationPrefix
    *
    * @param string|null $locationPrefix **参数解释**： 前缀。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLocationPrefix($locationPrefix)
    {
        $this->container['locationPrefix'] = $locationPrefix;
        return $this;
    }

    /**
    * Gets result
    *  **参数解释**： 结果。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result **参数解释**： 结果。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets failedReason
    *  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getFailedReason()
    {
        return $this->container['failedReason'];
    }

    /**
    * Sets failedReason
    *
    * @param string|null $failedReason **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
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

