<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchoverResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchoverResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID
    * updatedAt  更新时间，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    * sourceDb  sourceDb
    * targetDb  targetDb
    * jobDirection  任务方向。 - up 入云 灾备场景时对应本云为备 - down 出云 灾备场景时对应本云为主 - non-dbs 自建
    * isTargetReadonly  目标库是否只读。
    * errorMsg  错误信息。
    * errorCode  错误码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'updatedAt' => 'string',
            'sourceDb' => '\HuaweiCloud\SDK\Drs\V3\Model\EndpointVO',
            'targetDb' => '\HuaweiCloud\SDK\Drs\V3\Model\EndpointVO',
            'jobDirection' => 'string',
            'isTargetReadonly' => 'bool',
            'errorMsg' => 'string',
            'errorCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID
    * updatedAt  更新时间，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    * sourceDb  sourceDb
    * targetDb  targetDb
    * jobDirection  任务方向。 - up 入云 灾备场景时对应本云为备 - down 出云 灾备场景时对应本云为主 - non-dbs 自建
    * isTargetReadonly  目标库是否只读。
    * errorMsg  错误信息。
    * errorCode  错误码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'updatedAt' => null,
        'sourceDb' => null,
        'targetDb' => null,
        'jobDirection' => null,
        'isTargetReadonly' => null,
        'errorMsg' => null,
        'errorCode' => null
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
    * jobId  任务ID
    * updatedAt  更新时间，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    * sourceDb  sourceDb
    * targetDb  targetDb
    * jobDirection  任务方向。 - up 入云 灾备场景时对应本云为备 - down 出云 灾备场景时对应本云为主 - non-dbs 自建
    * isTargetReadonly  目标库是否只读。
    * errorMsg  错误信息。
    * errorCode  错误码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'updatedAt' => 'updated_at',
            'sourceDb' => 'source_db',
            'targetDb' => 'target_db',
            'jobDirection' => 'job_direction',
            'isTargetReadonly' => 'is_target_readonly',
            'errorMsg' => 'error_msg',
            'errorCode' => 'error_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID
    * updatedAt  更新时间，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    * sourceDb  sourceDb
    * targetDb  targetDb
    * jobDirection  任务方向。 - up 入云 灾备场景时对应本云为备 - down 出云 灾备场景时对应本云为主 - non-dbs 自建
    * isTargetReadonly  目标库是否只读。
    * errorMsg  错误信息。
    * errorCode  错误码。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'updatedAt' => 'setUpdatedAt',
            'sourceDb' => 'setSourceDb',
            'targetDb' => 'setTargetDb',
            'jobDirection' => 'setJobDirection',
            'isTargetReadonly' => 'setIsTargetReadonly',
            'errorMsg' => 'setErrorMsg',
            'errorCode' => 'setErrorCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID
    * updatedAt  更新时间，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    * sourceDb  sourceDb
    * targetDb  targetDb
    * jobDirection  任务方向。 - up 入云 灾备场景时对应本云为备 - down 出云 灾备场景时对应本云为主 - non-dbs 自建
    * isTargetReadonly  目标库是否只读。
    * errorMsg  错误信息。
    * errorCode  错误码。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'updatedAt' => 'getUpdatedAt',
            'sourceDb' => 'getSourceDb',
            'targetDb' => 'getTargetDb',
            'jobDirection' => 'getJobDirection',
            'isTargetReadonly' => 'getIsTargetReadonly',
            'errorMsg' => 'getErrorMsg',
            'errorCode' => 'getErrorCode'
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
    const JOB_DIRECTION_UP = 'up';
    const JOB_DIRECTION_DOWN = 'down';
    const JOB_DIRECTION_NON_DBS = 'non-dbs';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobDirectionAllowableValues()
    {
        return [
            self::JOB_DIRECTION_UP,
            self::JOB_DIRECTION_DOWN,
            self::JOB_DIRECTION_NON_DBS,
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['sourceDb'] = isset($data['sourceDb']) ? $data['sourceDb'] : null;
        $this->container['targetDb'] = isset($data['targetDb']) ? $data['targetDb'] : null;
        $this->container['jobDirection'] = isset($data['jobDirection']) ? $data['jobDirection'] : null;
        $this->container['isTargetReadonly'] = isset($data['isTargetReadonly']) ? $data['isTargetReadonly'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getJobDirectionAllowableValues();
                if (!is_null($this->container['jobDirection']) && !in_array($this->container['jobDirection'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobDirection', must be one of '%s'",
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
    * Gets jobId
    *  任务ID
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 任务ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets sourceDb
    *  sourceDb
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\EndpointVO|null
    */
    public function getSourceDb()
    {
        return $this->container['sourceDb'];
    }

    /**
    * Sets sourceDb
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\EndpointVO|null $sourceDb sourceDb
    *
    * @return $this
    */
    public function setSourceDb($sourceDb)
    {
        $this->container['sourceDb'] = $sourceDb;
        return $this;
    }

    /**
    * Gets targetDb
    *  targetDb
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\EndpointVO|null
    */
    public function getTargetDb()
    {
        return $this->container['targetDb'];
    }

    /**
    * Sets targetDb
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\EndpointVO|null $targetDb targetDb
    *
    * @return $this
    */
    public function setTargetDb($targetDb)
    {
        $this->container['targetDb'] = $targetDb;
        return $this;
    }

    /**
    * Gets jobDirection
    *  任务方向。 - up 入云 灾备场景时对应本云为备 - down 出云 灾备场景时对应本云为主 - non-dbs 自建
    *
    * @return string|null
    */
    public function getJobDirection()
    {
        return $this->container['jobDirection'];
    }

    /**
    * Sets jobDirection
    *
    * @param string|null $jobDirection 任务方向。 - up 入云 灾备场景时对应本云为备 - down 出云 灾备场景时对应本云为主 - non-dbs 自建
    *
    * @return $this
    */
    public function setJobDirection($jobDirection)
    {
        $this->container['jobDirection'] = $jobDirection;
        return $this;
    }

    /**
    * Gets isTargetReadonly
    *  目标库是否只读。
    *
    * @return bool|null
    */
    public function getIsTargetReadonly()
    {
        return $this->container['isTargetReadonly'];
    }

    /**
    * Sets isTargetReadonly
    *
    * @param bool|null $isTargetReadonly 目标库是否只读。
    *
    * @return $this
    */
    public function setIsTargetReadonly($isTargetReadonly)
    {
        $this->container['isTargetReadonly'] = $isTargetReadonly;
        return $this;
    }

    /**
    * Gets errorMsg
    *  错误信息。
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 错误信息。
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets errorCode
    *  错误码。
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 错误码。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
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

