<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubtaskDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubtaskDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  子任务ID
    * jobId  内部任务ID
    * namespace  命名空间名
    * repository  制品仓库
    * tag  制品版本
    * digest  摘要
    * status  状态
    * statusText  状态信息
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'jobId' => 'int',
            'namespace' => 'string',
            'repository' => 'string',
            'tag' => 'string',
            'digest' => 'string',
            'status' => 'string',
            'statusText' => 'string',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  子任务ID
    * jobId  内部任务ID
    * namespace  命名空间名
    * repository  制品仓库
    * tag  制品版本
    * digest  摘要
    * status  状态
    * statusText  状态信息
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'jobId' => null,
        'namespace' => null,
        'repository' => null,
        'tag' => null,
        'digest' => null,
        'status' => null,
        'statusText' => null,
        'startTime' => null,
        'endTime' => null
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
    * id  子任务ID
    * jobId  内部任务ID
    * namespace  命名空间名
    * repository  制品仓库
    * tag  制品版本
    * digest  摘要
    * status  状态
    * statusText  状态信息
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'jobId' => 'job_id',
            'namespace' => 'namespace',
            'repository' => 'repository',
            'tag' => 'tag',
            'digest' => 'digest',
            'status' => 'status',
            'statusText' => 'status_text',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  子任务ID
    * jobId  内部任务ID
    * namespace  命名空间名
    * repository  制品仓库
    * tag  制品版本
    * digest  摘要
    * status  状态
    * statusText  状态信息
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'jobId' => 'setJobId',
            'namespace' => 'setNamespace',
            'repository' => 'setRepository',
            'tag' => 'setTag',
            'digest' => 'setDigest',
            'status' => 'setStatus',
            'statusText' => 'setStatusText',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  子任务ID
    * jobId  内部任务ID
    * namespace  命名空间名
    * repository  制品仓库
    * tag  制品版本
    * digest  摘要
    * status  状态
    * statusText  状态信息
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'jobId' => 'getJobId',
            'namespace' => 'getNamespace',
            'repository' => 'getRepository',
            'tag' => 'getTag',
            'digest' => 'getDigest',
            'status' => 'getStatus',
            'statusText' => 'getStatusText',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['repository'] = isset($data['repository']) ? $data['repository'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['digest'] = isset($data['digest']) ? $data['digest'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusText'] = isset($data['statusText']) ? $data['statusText'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
        if ($this->container['repository'] === null) {
            $invalidProperties[] = "'repository' can't be null";
        }
        if ($this->container['tag'] === null) {
            $invalidProperties[] = "'tag' can't be null";
        }
        if ($this->container['digest'] === null) {
            $invalidProperties[] = "'digest' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['statusText'] === null) {
            $invalidProperties[] = "'statusText' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
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
    *  子任务ID
    *
    * @return int
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int $id 子任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets jobId
    *  内部任务ID
    *
    * @return int
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param int $jobId 内部任务ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets namespace
    *  命名空间名
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 命名空间名
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets repository
    *  制品仓库
    *
    * @return string
    */
    public function getRepository()
    {
        return $this->container['repository'];
    }

    /**
    * Sets repository
    *
    * @param string $repository 制品仓库
    *
    * @return $this
    */
    public function setRepository($repository)
    {
        $this->container['repository'] = $repository;
        return $this;
    }

    /**
    * Gets tag
    *  制品版本
    *
    * @return string
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string $tag 制品版本
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets digest
    *  摘要
    *
    * @return string
    */
    public function getDigest()
    {
        return $this->container['digest'];
    }

    /**
    * Sets digest
    *
    * @param string $digest 摘要
    *
    * @return $this
    */
    public function setDigest($digest)
    {
        $this->container['digest'] = $digest;
        return $this;
    }

    /**
    * Gets status
    *  状态
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
    * @param string $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusText
    *  状态信息
    *
    * @return string
    */
    public function getStatusText()
    {
        return $this->container['statusText'];
    }

    /**
    * Sets statusText
    *
    * @param string $statusText 状态信息
    *
    * @return $this
    */
    public function setStatusText($statusText)
    {
        $this->container['statusText'] = $statusText;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

