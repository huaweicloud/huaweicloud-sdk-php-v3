<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ElasticResourcePoolScaleRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ElasticResourcePoolScaleRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxCu  最大Cu
    * minCu  最小CU
    * currentCu  扩缩容后CU
    * originCu  扩缩容前CU
    * targetCu  扩缩容预期CU
    * recordTime  操作完成时间
    * status  扩缩容成功或者失败的状态
    * failReason  失败原因
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxCu' => 'int',
            'minCu' => 'int',
            'currentCu' => 'int',
            'originCu' => 'int',
            'targetCu' => 'int',
            'recordTime' => 'int',
            'status' => 'string',
            'failReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxCu  最大Cu
    * minCu  最小CU
    * currentCu  扩缩容后CU
    * originCu  扩缩容前CU
    * targetCu  扩缩容预期CU
    * recordTime  操作完成时间
    * status  扩缩容成功或者失败的状态
    * failReason  失败原因
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxCu' => 'int32',
        'minCu' => 'int32',
        'currentCu' => 'int32',
        'originCu' => 'int32',
        'targetCu' => 'int32',
        'recordTime' => 'int64',
        'status' => null,
        'failReason' => null
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
    * maxCu  最大Cu
    * minCu  最小CU
    * currentCu  扩缩容后CU
    * originCu  扩缩容前CU
    * targetCu  扩缩容预期CU
    * recordTime  操作完成时间
    * status  扩缩容成功或者失败的状态
    * failReason  失败原因
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxCu' => 'max_cu',
            'minCu' => 'min_cu',
            'currentCu' => 'current_cu',
            'originCu' => 'origin_cu',
            'targetCu' => 'target_cu',
            'recordTime' => 'record_time',
            'status' => 'status',
            'failReason' => 'fail_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxCu  最大Cu
    * minCu  最小CU
    * currentCu  扩缩容后CU
    * originCu  扩缩容前CU
    * targetCu  扩缩容预期CU
    * recordTime  操作完成时间
    * status  扩缩容成功或者失败的状态
    * failReason  失败原因
    *
    * @var string[]
    */
    protected static $setters = [
            'maxCu' => 'setMaxCu',
            'minCu' => 'setMinCu',
            'currentCu' => 'setCurrentCu',
            'originCu' => 'setOriginCu',
            'targetCu' => 'setTargetCu',
            'recordTime' => 'setRecordTime',
            'status' => 'setStatus',
            'failReason' => 'setFailReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxCu  最大Cu
    * minCu  最小CU
    * currentCu  扩缩容后CU
    * originCu  扩缩容前CU
    * targetCu  扩缩容预期CU
    * recordTime  操作完成时间
    * status  扩缩容成功或者失败的状态
    * failReason  失败原因
    *
    * @var string[]
    */
    protected static $getters = [
            'maxCu' => 'getMaxCu',
            'minCu' => 'getMinCu',
            'currentCu' => 'getCurrentCu',
            'originCu' => 'getOriginCu',
            'targetCu' => 'getTargetCu',
            'recordTime' => 'getRecordTime',
            'status' => 'getStatus',
            'failReason' => 'getFailReason'
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
        $this->container['maxCu'] = isset($data['maxCu']) ? $data['maxCu'] : null;
        $this->container['minCu'] = isset($data['minCu']) ? $data['minCu'] : null;
        $this->container['currentCu'] = isset($data['currentCu']) ? $data['currentCu'] : null;
        $this->container['originCu'] = isset($data['originCu']) ? $data['originCu'] : null;
        $this->container['targetCu'] = isset($data['targetCu']) ? $data['targetCu'] : null;
        $this->container['recordTime'] = isset($data['recordTime']) ? $data['recordTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['maxCu'] === null) {
            $invalidProperties[] = "'maxCu' can't be null";
        }
        if ($this->container['minCu'] === null) {
            $invalidProperties[] = "'minCu' can't be null";
        }
        if ($this->container['currentCu'] === null) {
            $invalidProperties[] = "'currentCu' can't be null";
        }
        if ($this->container['originCu'] === null) {
            $invalidProperties[] = "'originCu' can't be null";
        }
        if ($this->container['targetCu'] === null) {
            $invalidProperties[] = "'targetCu' can't be null";
        }
        if ($this->container['recordTime'] === null) {
            $invalidProperties[] = "'recordTime' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets maxCu
    *  最大Cu
    *
    * @return int
    */
    public function getMaxCu()
    {
        return $this->container['maxCu'];
    }

    /**
    * Sets maxCu
    *
    * @param int $maxCu 最大Cu
    *
    * @return $this
    */
    public function setMaxCu($maxCu)
    {
        $this->container['maxCu'] = $maxCu;
        return $this;
    }

    /**
    * Gets minCu
    *  最小CU
    *
    * @return int
    */
    public function getMinCu()
    {
        return $this->container['minCu'];
    }

    /**
    * Sets minCu
    *
    * @param int $minCu 最小CU
    *
    * @return $this
    */
    public function setMinCu($minCu)
    {
        $this->container['minCu'] = $minCu;
        return $this;
    }

    /**
    * Gets currentCu
    *  扩缩容后CU
    *
    * @return int
    */
    public function getCurrentCu()
    {
        return $this->container['currentCu'];
    }

    /**
    * Sets currentCu
    *
    * @param int $currentCu 扩缩容后CU
    *
    * @return $this
    */
    public function setCurrentCu($currentCu)
    {
        $this->container['currentCu'] = $currentCu;
        return $this;
    }

    /**
    * Gets originCu
    *  扩缩容前CU
    *
    * @return int
    */
    public function getOriginCu()
    {
        return $this->container['originCu'];
    }

    /**
    * Sets originCu
    *
    * @param int $originCu 扩缩容前CU
    *
    * @return $this
    */
    public function setOriginCu($originCu)
    {
        $this->container['originCu'] = $originCu;
        return $this;
    }

    /**
    * Gets targetCu
    *  扩缩容预期CU
    *
    * @return int
    */
    public function getTargetCu()
    {
        return $this->container['targetCu'];
    }

    /**
    * Sets targetCu
    *
    * @param int $targetCu 扩缩容预期CU
    *
    * @return $this
    */
    public function setTargetCu($targetCu)
    {
        $this->container['targetCu'] = $targetCu;
        return $this;
    }

    /**
    * Gets recordTime
    *  操作完成时间
    *
    * @return int
    */
    public function getRecordTime()
    {
        return $this->container['recordTime'];
    }

    /**
    * Sets recordTime
    *
    * @param int $recordTime 操作完成时间
    *
    * @return $this
    */
    public function setRecordTime($recordTime)
    {
        $this->container['recordTime'] = $recordTime;
        return $this;
    }

    /**
    * Gets status
    *  扩缩容成功或者失败的状态
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
    * @param string $status 扩缩容成功或者失败的状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets failReason
    *  失败原因
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason 失败原因
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
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

