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
    * clusterId  集群id。
    * exectorTime  执行时间。
    * beginTime  开始时间。
    * endTime  结束时间。
    * bucketName  桶名。
    * locationPrefix  前缀。
    * result  结果。
    * failedReason  失败原因。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'exectorTime' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'bucketName' => 'string',
            'locationPrefix' => 'string',
            'result' => 'string',
            'failedReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群id。
    * exectorTime  执行时间。
    * beginTime  开始时间。
    * endTime  结束时间。
    * bucketName  桶名。
    * locationPrefix  前缀。
    * result  结果。
    * failedReason  失败原因。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'exectorTime' => null,
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
    * clusterId  集群id。
    * exectorTime  执行时间。
    * beginTime  开始时间。
    * endTime  结束时间。
    * bucketName  桶名。
    * locationPrefix  前缀。
    * result  结果。
    * failedReason  失败原因。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'exectorTime' => 'exector_time',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'bucketName' => 'bucket_name',
            'locationPrefix' => 'location_prefix',
            'result' => 'result',
            'failedReason' => 'failed_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群id。
    * exectorTime  执行时间。
    * beginTime  开始时间。
    * endTime  结束时间。
    * bucketName  桶名。
    * locationPrefix  前缀。
    * result  结果。
    * failedReason  失败原因。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'exectorTime' => 'setExectorTime',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'bucketName' => 'setBucketName',
            'locationPrefix' => 'setLocationPrefix',
            'result' => 'setResult',
            'failedReason' => 'setFailedReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群id。
    * exectorTime  执行时间。
    * beginTime  开始时间。
    * endTime  结束时间。
    * bucketName  桶名。
    * locationPrefix  前缀。
    * result  结果。
    * failedReason  失败原因。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'exectorTime' => 'getExectorTime',
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
        $this->container['exectorTime'] = isset($data['exectorTime']) ? $data['exectorTime'] : null;
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
    *  集群id。
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
    * @param string|null $clusterId 集群id。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets exectorTime
    *  执行时间。
    *
    * @return string|null
    */
    public function getExectorTime()
    {
        return $this->container['exectorTime'];
    }

    /**
    * Sets exectorTime
    *
    * @param string|null $exectorTime 执行时间。
    *
    * @return $this
    */
    public function setExectorTime($exectorTime)
    {
        $this->container['exectorTime'] = $exectorTime;
        return $this;
    }

    /**
    * Gets beginTime
    *  开始时间。
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
    * @param string|null $beginTime 开始时间。
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
    *  结束时间。
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
    * @param string|null $endTime 结束时间。
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
    *  桶名。
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
    * @param string|null $bucketName 桶名。
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
    *  前缀。
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
    * @param string|null $locationPrefix 前缀。
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
    *  结果。
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
    * @param string|null $result 结果。
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
    *  失败原因。
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
    * @param string|null $failedReason 失败原因。
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

