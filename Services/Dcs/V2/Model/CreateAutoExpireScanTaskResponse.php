<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAutoExpireScanTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAutoExpireScanTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  过期key扫描记录ID
    * instanceId  实例ID
    * status  扫描任务状态
    * scanType  扫描方式
    * createdAt  扫描任务创建时间,格式为：\"2020-06-15T02:21:18.669Z\"
    * startedAt  扫描任务开始时间,格式为：\"2020-06-15T02:21:18.669Z\"（创建扫描任务时此值为null，不返回）
    * finishedAt  扫描任务结束时间,格式为：\"2020-06-15T02:21:18.669Z\"（创建扫描任务时此值为null，不返回）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'instanceId' => 'string',
            'status' => 'string',
            'scanType' => 'string',
            'createdAt' => 'string',
            'startedAt' => 'string',
            'finishedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  过期key扫描记录ID
    * instanceId  实例ID
    * status  扫描任务状态
    * scanType  扫描方式
    * createdAt  扫描任务创建时间,格式为：\"2020-06-15T02:21:18.669Z\"
    * startedAt  扫描任务开始时间,格式为：\"2020-06-15T02:21:18.669Z\"（创建扫描任务时此值为null，不返回）
    * finishedAt  扫描任务结束时间,格式为：\"2020-06-15T02:21:18.669Z\"（创建扫描任务时此值为null，不返回）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'instanceId' => 'uuid',
        'status' => null,
        'scanType' => null,
        'createdAt' => null,
        'startedAt' => null,
        'finishedAt' => null
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
    * id  过期key扫描记录ID
    * instanceId  实例ID
    * status  扫描任务状态
    * scanType  扫描方式
    * createdAt  扫描任务创建时间,格式为：\"2020-06-15T02:21:18.669Z\"
    * startedAt  扫描任务开始时间,格式为：\"2020-06-15T02:21:18.669Z\"（创建扫描任务时此值为null，不返回）
    * finishedAt  扫描任务结束时间,格式为：\"2020-06-15T02:21:18.669Z\"（创建扫描任务时此值为null，不返回）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'instanceId' => 'instance_id',
            'status' => 'status',
            'scanType' => 'scan_type',
            'createdAt' => 'created_at',
            'startedAt' => 'started_at',
            'finishedAt' => 'finished_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  过期key扫描记录ID
    * instanceId  实例ID
    * status  扫描任务状态
    * scanType  扫描方式
    * createdAt  扫描任务创建时间,格式为：\"2020-06-15T02:21:18.669Z\"
    * startedAt  扫描任务开始时间,格式为：\"2020-06-15T02:21:18.669Z\"（创建扫描任务时此值为null，不返回）
    * finishedAt  扫描任务结束时间,格式为：\"2020-06-15T02:21:18.669Z\"（创建扫描任务时此值为null，不返回）
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'instanceId' => 'setInstanceId',
            'status' => 'setStatus',
            'scanType' => 'setScanType',
            'createdAt' => 'setCreatedAt',
            'startedAt' => 'setStartedAt',
            'finishedAt' => 'setFinishedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  过期key扫描记录ID
    * instanceId  实例ID
    * status  扫描任务状态
    * scanType  扫描方式
    * createdAt  扫描任务创建时间,格式为：\"2020-06-15T02:21:18.669Z\"
    * startedAt  扫描任务开始时间,格式为：\"2020-06-15T02:21:18.669Z\"（创建扫描任务时此值为null，不返回）
    * finishedAt  扫描任务结束时间,格式为：\"2020-06-15T02:21:18.669Z\"（创建扫描任务时此值为null，不返回）
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'instanceId' => 'getInstanceId',
            'status' => 'getStatus',
            'scanType' => 'getScanType',
            'createdAt' => 'getCreatedAt',
            'startedAt' => 'getStartedAt',
            'finishedAt' => 'getFinishedAt'
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
    const STATUS_WAITING = 'waiting';
    const STATUS_RUNNING = 'running';
    const STATUS_SUCCESS = 'success';
    const STATUS_FAILED = 'failed';
    const SCAN_TYPE_MANUAL = 'manual';
    const SCAN_TYPE_AUTO = 'auto';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_WAITING,
            self::STATUS_RUNNING,
            self::STATUS_SUCCESS,
            self::STATUS_FAILED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScanTypeAllowableValues()
    {
        return [
            self::SCAN_TYPE_MANUAL,
            self::SCAN_TYPE_AUTO,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['scanType'] = isset($data['scanType']) ? $data['scanType'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['startedAt'] = isset($data['startedAt']) ? $data['startedAt'] : null;
        $this->container['finishedAt'] = isset($data['finishedAt']) ? $data['finishedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getScanTypeAllowableValues();
                if (!is_null($this->container['scanType']) && !in_array($this->container['scanType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scanType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  过期key扫描记录ID
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
    * @param string|null $id 过期key扫描记录ID
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
    *  实例ID
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
    * @param string|null $instanceId 实例ID
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
    *  扫描任务状态
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
    * @param string|null $status 扫描任务状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets scanType
    *  扫描方式
    *
    * @return string|null
    */
    public function getScanType()
    {
        return $this->container['scanType'];
    }

    /**
    * Sets scanType
    *
    * @param string|null $scanType 扫描方式
    *
    * @return $this
    */
    public function setScanType($scanType)
    {
        $this->container['scanType'] = $scanType;
        return $this;
    }

    /**
    * Gets createdAt
    *  扫描任务创建时间,格式为：\"2020-06-15T02:21:18.669Z\"
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 扫描任务创建时间,格式为：\"2020-06-15T02:21:18.669Z\"
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets startedAt
    *  扫描任务开始时间,格式为：\"2020-06-15T02:21:18.669Z\"（创建扫描任务时此值为null，不返回）
    *
    * @return string|null
    */
    public function getStartedAt()
    {
        return $this->container['startedAt'];
    }

    /**
    * Sets startedAt
    *
    * @param string|null $startedAt 扫描任务开始时间,格式为：\"2020-06-15T02:21:18.669Z\"（创建扫描任务时此值为null，不返回）
    *
    * @return $this
    */
    public function setStartedAt($startedAt)
    {
        $this->container['startedAt'] = $startedAt;
        return $this;
    }

    /**
    * Gets finishedAt
    *  扫描任务结束时间,格式为：\"2020-06-15T02:21:18.669Z\"（创建扫描任务时此值为null，不返回）
    *
    * @return string|null
    */
    public function getFinishedAt()
    {
        return $this->container['finishedAt'];
    }

    /**
    * Sets finishedAt
    *
    * @param string|null $finishedAt 扫描任务结束时间,格式为：\"2020-06-15T02:21:18.669Z\"（创建扫描任务时此值为null，不返回）
    *
    * @return $this
    */
    public function setFinishedAt($finishedAt)
    {
        $this->container['finishedAt'] = $finishedAt;
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

