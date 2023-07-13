<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DomainMigrateProjectStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DomainMigrateProjectStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  迁移状态
    * projectId  项目ID
    * projectName  项目名称
    * regionId  区域ID
    * progress  迁移进度
    * failCode  失败错误码（仅当项目状态为失败时才有该参数）。
    * failReason  失败原因（仅当项目状态为失败时才有该参数）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'regionId' => 'string',
            'progress' => 'int',
            'failCode' => 'int',
            'failReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  迁移状态
    * projectId  项目ID
    * projectName  项目名称
    * regionId  区域ID
    * progress  迁移进度
    * failCode  失败错误码（仅当项目状态为失败时才有该参数）。
    * failReason  失败原因（仅当项目状态为失败时才有该参数）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'projectId' => null,
        'projectName' => null,
        'regionId' => null,
        'progress' => 'int32',
        'failCode' => 'int32',
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
    * status  迁移状态
    * projectId  项目ID
    * projectName  项目名称
    * regionId  区域ID
    * progress  迁移进度
    * failCode  失败错误码（仅当项目状态为失败时才有该参数）。
    * failReason  失败原因（仅当项目状态为失败时才有该参数）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'regionId' => 'region_id',
            'progress' => 'progress',
            'failCode' => 'fail_code',
            'failReason' => 'fail_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  迁移状态
    * projectId  项目ID
    * projectName  项目名称
    * regionId  区域ID
    * progress  迁移进度
    * failCode  失败错误码（仅当项目状态为失败时才有该参数）。
    * failReason  失败原因（仅当项目状态为失败时才有该参数）。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'regionId' => 'setRegionId',
            'progress' => 'setProgress',
            'failCode' => 'setFailCode',
            'failReason' => 'setFailReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  迁移状态
    * projectId  项目ID
    * projectName  项目名称
    * regionId  区域ID
    * progress  迁移进度
    * failCode  失败错误码（仅当项目状态为失败时才有该参数）。
    * failReason  失败原因（仅当项目状态为失败时才有该参数）。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'regionId' => 'getRegionId',
            'progress' => 'getProgress',
            'failCode' => 'getFailCode',
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
    const STATUS_MIGRATING = 'migrating';
    const STATUS_SUCCESS = 'success';
    const STATUS_FAILED = 'failed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_MIGRATING,
            self::STATUS_SUCCESS,
            self::STATUS_FAILED,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['failCode'] = isset($data['failCode']) ? $data['failCode'] : null;
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
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['projectName'] === null) {
            $invalidProperties[] = "'projectName' can't be null";
        }
            if (!is_null($this->container['progress']) && ($this->container['progress'] > 100)) {
                $invalidProperties[] = "invalid value for 'progress', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['progress']) && ($this->container['progress'] < 0)) {
                $invalidProperties[] = "invalid value for 'progress', must be bigger than or equal to 0.";
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
    * Gets status
    *  迁移状态
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
    * @param string $status 迁移状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  项目名称
    *
    * @return string
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string $projectName 项目名称
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets regionId
    *  区域ID
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 区域ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets progress
    *  迁移进度
    *
    * @return int|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int|null $progress 迁移进度
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets failCode
    *  失败错误码（仅当项目状态为失败时才有该参数）。
    *
    * @return int|null
    */
    public function getFailCode()
    {
        return $this->container['failCode'];
    }

    /**
    * Sets failCode
    *
    * @param int|null $failCode 失败错误码（仅当项目状态为失败时才有该参数）。
    *
    * @return $this
    */
    public function setFailCode($failCode)
    {
        $this->container['failCode'] = $failCode;
        return $this;
    }

    /**
    * Gets failReason
    *  失败原因（仅当项目状态为失败时才有该参数）。
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
    * @param string|null $failReason 失败原因（仅当项目状态为失败时才有该参数）。
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

