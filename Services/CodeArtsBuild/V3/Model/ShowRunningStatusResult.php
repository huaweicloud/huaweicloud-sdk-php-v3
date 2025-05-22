<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRunningStatusResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRunningStatus_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lastJobId  任务ID
    * lastBuildNo  最新构建编号
    * lastBuildStatus  最新构建状态
    * isRunning  是否在运行中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lastJobId' => 'string',
            'lastBuildNo' => 'string',
            'lastBuildStatus' => 'string',
            'isRunning' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lastJobId  任务ID
    * lastBuildNo  最新构建编号
    * lastBuildStatus  最新构建状态
    * isRunning  是否在运行中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lastJobId' => null,
        'lastBuildNo' => null,
        'lastBuildStatus' => null,
        'isRunning' => null
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
    * lastJobId  任务ID
    * lastBuildNo  最新构建编号
    * lastBuildStatus  最新构建状态
    * isRunning  是否在运行中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lastJobId' => 'last_job_id',
            'lastBuildNo' => 'last_build_no',
            'lastBuildStatus' => 'last_build_status',
            'isRunning' => 'is_running'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lastJobId  任务ID
    * lastBuildNo  最新构建编号
    * lastBuildStatus  最新构建状态
    * isRunning  是否在运行中
    *
    * @var string[]
    */
    protected static $setters = [
            'lastJobId' => 'setLastJobId',
            'lastBuildNo' => 'setLastBuildNo',
            'lastBuildStatus' => 'setLastBuildStatus',
            'isRunning' => 'setIsRunning'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lastJobId  任务ID
    * lastBuildNo  最新构建编号
    * lastBuildStatus  最新构建状态
    * isRunning  是否在运行中
    *
    * @var string[]
    */
    protected static $getters = [
            'lastJobId' => 'getLastJobId',
            'lastBuildNo' => 'getLastBuildNo',
            'lastBuildStatus' => 'getLastBuildStatus',
            'isRunning' => 'getIsRunning'
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
        $this->container['lastJobId'] = isset($data['lastJobId']) ? $data['lastJobId'] : null;
        $this->container['lastBuildNo'] = isset($data['lastBuildNo']) ? $data['lastBuildNo'] : null;
        $this->container['lastBuildStatus'] = isset($data['lastBuildStatus']) ? $data['lastBuildStatus'] : null;
        $this->container['isRunning'] = isset($data['isRunning']) ? $data['isRunning'] : null;
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
    * Gets lastJobId
    *  任务ID
    *
    * @return string|null
    */
    public function getLastJobId()
    {
        return $this->container['lastJobId'];
    }

    /**
    * Sets lastJobId
    *
    * @param string|null $lastJobId 任务ID
    *
    * @return $this
    */
    public function setLastJobId($lastJobId)
    {
        $this->container['lastJobId'] = $lastJobId;
        return $this;
    }

    /**
    * Gets lastBuildNo
    *  最新构建编号
    *
    * @return string|null
    */
    public function getLastBuildNo()
    {
        return $this->container['lastBuildNo'];
    }

    /**
    * Sets lastBuildNo
    *
    * @param string|null $lastBuildNo 最新构建编号
    *
    * @return $this
    */
    public function setLastBuildNo($lastBuildNo)
    {
        $this->container['lastBuildNo'] = $lastBuildNo;
        return $this;
    }

    /**
    * Gets lastBuildStatus
    *  最新构建状态
    *
    * @return string|null
    */
    public function getLastBuildStatus()
    {
        return $this->container['lastBuildStatus'];
    }

    /**
    * Sets lastBuildStatus
    *
    * @param string|null $lastBuildStatus 最新构建状态
    *
    * @return $this
    */
    public function setLastBuildStatus($lastBuildStatus)
    {
        $this->container['lastBuildStatus'] = $lastBuildStatus;
        return $this;
    }

    /**
    * Gets isRunning
    *  是否在运行中
    *
    * @return bool|null
    */
    public function getIsRunning()
    {
        return $this->container['isRunning'];
    }

    /**
    * Sets isRunning
    *
    * @param bool|null $isRunning 是否在运行中
    *
    * @return $this
    */
    public function setIsRunning($isRunning)
    {
        $this->container['isRunning'] = $isRunning;
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

