<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubJob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubJob';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID
    * jobType  任务类型
    * status  任务状态
    * createdAt  创建时间
    * finishedAt  完成时间
    * errorMessage  错误信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'jobType' => 'string',
            'status' => 'string',
            'createdAt' => '\DateTime',
            'finishedAt' => '\DateTime',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID
    * jobType  任务类型
    * status  任务状态
    * createdAt  创建时间
    * finishedAt  完成时间
    * errorMessage  错误信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'jobType' => null,
        'status' => null,
        'createdAt' => 'date-time',
        'finishedAt' => 'date-time',
        'errorMessage' => null
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
    * id  任务ID
    * jobType  任务类型
    * status  任务状态
    * createdAt  创建时间
    * finishedAt  完成时间
    * errorMessage  错误信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'jobType' => 'job_type',
            'status' => 'status',
            'createdAt' => 'created_at',
            'finishedAt' => 'finished_at',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID
    * jobType  任务类型
    * status  任务状态
    * createdAt  创建时间
    * finishedAt  完成时间
    * errorMessage  错误信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'jobType' => 'setJobType',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'finishedAt' => 'setFinishedAt',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID
    * jobType  任务类型
    * status  任务状态
    * createdAt  创建时间
    * finishedAt  完成时间
    * errorMessage  错误信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'jobType' => 'getJobType',
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'finishedAt' => 'getFinishedAt',
            'errorMessage' => 'getErrorMessage'
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
    const JOB_TYPE_PREPARE_RESOURCE = 'prepare_resource';
    const JOB_TYPE_UPGRADE_WORKER_1 = 'upgrade_worker_1';
    const JOB_TYPE_UPGRADE_WORKER_2 = 'upgrade_worker_2';
    const STATUS_INIT = 'init';
    const STATUS_UPGRADING = 'upgrading';
    const STATUS_SUCCESS = 'success';
    const STATUS_FAIL = 'fail';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobTypeAllowableValues()
    {
        return [
            self::JOB_TYPE_PREPARE_RESOURCE,
            self::JOB_TYPE_UPGRADE_WORKER_1,
            self::JOB_TYPE_UPGRADE_WORKER_2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_INIT,
            self::STATUS_UPGRADING,
            self::STATUS_SUCCESS,
            self::STATUS_FAIL,
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
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['finishedAt'] = isset($data['finishedAt']) ? $data['finishedAt'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getJobTypeAllowableValues();
                if (!is_null($this->container['jobType']) && !in_array($this->container['jobType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['jobType']) && (mb_strlen($this->container['jobType']) > 32)) {
                $invalidProperties[] = "invalid value for 'jobType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['jobType']) && (mb_strlen($this->container['jobType']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobType', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['errorMessage']) && (mb_strlen($this->container['errorMessage']) > 512)) {
                $invalidProperties[] = "invalid value for 'errorMessage', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['errorMessage']) && (mb_strlen($this->container['errorMessage']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorMessage', the character length must be bigger than or equal to 0.";
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
    *  任务ID
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
    * @param string|null $id 任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets jobType
    *  任务类型
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType 任务类型
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets status
    *  任务状态
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
    * @param string|null $status 任务状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets finishedAt
    *  完成时间
    *
    * @return \DateTime|null
    */
    public function getFinishedAt()
    {
        return $this->container['finishedAt'];
    }

    /**
    * Sets finishedAt
    *
    * @param \DateTime|null $finishedAt 完成时间
    *
    * @return $this
    */
    public function setFinishedAt($finishedAt)
    {
        $this->container['finishedAt'] = $finishedAt;
        return $this;
    }

    /**
    * Gets errorMessage
    *  错误信息
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage 错误信息
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
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

