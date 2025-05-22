<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListStatusStatisticRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListStatusStatisticRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  devcloud项目的32位id
    * iterationId  迭代数字id
    * trackerId  自定义字段支持的工作项类型 2任务/Task,3缺陷/Bug,7Story
    * statusId  工作项状态数字id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'iterationId' => 'int',
            'trackerId' => 'int',
            'statusId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  devcloud项目的32位id
    * iterationId  迭代数字id
    * trackerId  自定义字段支持的工作项类型 2任务/Task,3缺陷/Bug,7Story
    * statusId  工作项状态数字id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'iterationId' => 'int32',
        'trackerId' => 'int32',
        'statusId' => 'int32'
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
    * projectId  devcloud项目的32位id
    * iterationId  迭代数字id
    * trackerId  自定义字段支持的工作项类型 2任务/Task,3缺陷/Bug,7Story
    * statusId  工作项状态数字id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'iterationId' => 'iteration_id',
            'trackerId' => 'tracker_id',
            'statusId' => 'status_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  devcloud项目的32位id
    * iterationId  迭代数字id
    * trackerId  自定义字段支持的工作项类型 2任务/Task,3缺陷/Bug,7Story
    * statusId  工作项状态数字id
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'iterationId' => 'setIterationId',
            'trackerId' => 'setTrackerId',
            'statusId' => 'setStatusId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  devcloud项目的32位id
    * iterationId  迭代数字id
    * trackerId  自定义字段支持的工作项类型 2任务/Task,3缺陷/Bug,7Story
    * statusId  工作项状态数字id
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'iterationId' => 'getIterationId',
            'trackerId' => 'getTrackerId',
            'statusId' => 'getStatusId'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['iterationId'] = isset($data['iterationId']) ? $data['iterationId'] : null;
        $this->container['trackerId'] = isset($data['trackerId']) ? $data['trackerId'] : null;
        $this->container['statusId'] = isset($data['statusId']) ? $data['statusId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if (!preg_match("/^[0-9a-z]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
        if ($this->container['iterationId'] === null) {
            $invalidProperties[] = "'iterationId' can't be null";
        }
        if ($this->container['trackerId'] === null) {
            $invalidProperties[] = "'trackerId' can't be null";
        }
        if ($this->container['statusId'] === null) {
            $invalidProperties[] = "'statusId' can't be null";
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
    * Gets projectId
    *  devcloud项目的32位id
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
    * @param string $projectId devcloud项目的32位id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets iterationId
    *  迭代数字id
    *
    * @return int
    */
    public function getIterationId()
    {
        return $this->container['iterationId'];
    }

    /**
    * Sets iterationId
    *
    * @param int $iterationId 迭代数字id
    *
    * @return $this
    */
    public function setIterationId($iterationId)
    {
        $this->container['iterationId'] = $iterationId;
        return $this;
    }

    /**
    * Gets trackerId
    *  自定义字段支持的工作项类型 2任务/Task,3缺陷/Bug,7Story
    *
    * @return int
    */
    public function getTrackerId()
    {
        return $this->container['trackerId'];
    }

    /**
    * Sets trackerId
    *
    * @param int $trackerId 自定义字段支持的工作项类型 2任务/Task,3缺陷/Bug,7Story
    *
    * @return $this
    */
    public function setTrackerId($trackerId)
    {
        $this->container['trackerId'] = $trackerId;
        return $this;
    }

    /**
    * Gets statusId
    *  工作项状态数字id
    *
    * @return int
    */
    public function getStatusId()
    {
        return $this->container['statusId'];
    }

    /**
    * Sets statusId
    *
    * @param int $statusId 工作项状态数字id
    *
    * @return $this
    */
    public function setStatusId($statusId)
    {
        $this->container['statusId'] = $statusId;
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

