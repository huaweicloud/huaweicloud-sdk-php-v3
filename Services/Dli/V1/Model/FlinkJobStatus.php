<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlinkJobStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlinkJobStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  作业Id。
    * statusName  作业状态名称。
    * statusDesc  当前状态描述，包含异常状态原因及建议。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'int',
            'statusName' => 'string',
            'statusDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  作业Id。
    * statusName  作业状态名称。
    * statusDesc  当前状态描述，包含异常状态原因及建议。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => 'int64',
        'statusName' => null,
        'statusDesc' => null
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
    * jobId  作业Id。
    * statusName  作业状态名称。
    * statusDesc  当前状态描述，包含异常状态原因及建议。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'statusName' => 'status_name',
            'statusDesc' => 'status_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  作业Id。
    * statusName  作业状态名称。
    * statusDesc  当前状态描述，包含异常状态原因及建议。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'statusName' => 'setStatusName',
            'statusDesc' => 'setStatusDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  作业Id。
    * statusName  作业状态名称。
    * statusDesc  当前状态描述，包含异常状态原因及建议。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'statusName' => 'getStatusName',
            'statusDesc' => 'getStatusDesc'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['statusName'] = isset($data['statusName']) ? $data['statusName'] : null;
        $this->container['statusDesc'] = isset($data['statusDesc']) ? $data['statusDesc'] : null;
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
    * Gets jobId
    *  作业Id。
    *
    * @return int|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param int|null $jobId 作业Id。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets statusName
    *  作业状态名称。
    *
    * @return string|null
    */
    public function getStatusName()
    {
        return $this->container['statusName'];
    }

    /**
    * Sets statusName
    *
    * @param string|null $statusName 作业状态名称。
    *
    * @return $this
    */
    public function setStatusName($statusName)
    {
        $this->container['statusName'] = $statusName;
        return $this;
    }

    /**
    * Gets statusDesc
    *  当前状态描述，包含异常状态原因及建议。
    *
    * @return string|null
    */
    public function getStatusDesc()
    {
        return $this->container['statusDesc'];
    }

    /**
    * Sets statusDesc
    *
    * @param string|null $statusDesc 当前状态描述，包含异常状态原因及建议。
    *
    * @return $this
    */
    public function setStatusDesc($statusDesc)
    {
        $this->container['statusDesc'] = $statusDesc;
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

