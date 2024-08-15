<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExectionInstanceModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExectionInstanceModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  主键id
    * targetInstance  targetInstance
    * gmtCreated  创建时间
    * gmtFinished  完成时间
    * executeCosts  耗时时间，单位:秒
    * status  实例执行状态
    * message  实例执行日志
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'targetInstance' => '\HuaweiCloud\SDK\Coc\V1\Model\ResourceInstance',
            'gmtCreated' => 'int',
            'gmtFinished' => 'int',
            'executeCosts' => 'int',
            'status' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  主键id
    * targetInstance  targetInstance
    * gmtCreated  创建时间
    * gmtFinished  完成时间
    * executeCosts  耗时时间，单位:秒
    * status  实例执行状态
    * message  实例执行日志
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'targetInstance' => null,
        'gmtCreated' => 'int64',
        'gmtFinished' => 'int64',
        'executeCosts' => 'int64',
        'status' => null,
        'message' => null
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
    * id  主键id
    * targetInstance  targetInstance
    * gmtCreated  创建时间
    * gmtFinished  完成时间
    * executeCosts  耗时时间，单位:秒
    * status  实例执行状态
    * message  实例执行日志
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'targetInstance' => 'target_instance',
            'gmtCreated' => 'gmt_created',
            'gmtFinished' => 'gmt_finished',
            'executeCosts' => 'execute_costs',
            'status' => 'status',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  主键id
    * targetInstance  targetInstance
    * gmtCreated  创建时间
    * gmtFinished  完成时间
    * executeCosts  耗时时间，单位:秒
    * status  实例执行状态
    * message  实例执行日志
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'targetInstance' => 'setTargetInstance',
            'gmtCreated' => 'setGmtCreated',
            'gmtFinished' => 'setGmtFinished',
            'executeCosts' => 'setExecuteCosts',
            'status' => 'setStatus',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  主键id
    * targetInstance  targetInstance
    * gmtCreated  创建时间
    * gmtFinished  完成时间
    * executeCosts  耗时时间，单位:秒
    * status  实例执行状态
    * message  实例执行日志
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'targetInstance' => 'getTargetInstance',
            'gmtCreated' => 'getGmtCreated',
            'gmtFinished' => 'getGmtFinished',
            'executeCosts' => 'getExecuteCosts',
            'status' => 'getStatus',
            'message' => 'getMessage'
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
    const STATUS_READY = 'READY';
    const STATUS_PROCESSING = 'PROCESSING';
    const STATUS_ABNORMAL = 'ABNORMAL';
    const STATUS_CANCELED = 'CANCELED';
    const STATUS_FINISHED = 'FINISHED';
    const STATUS_ROLLBACKED = 'ROLLBACKED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_READY,
            self::STATUS_PROCESSING,
            self::STATUS_ABNORMAL,
            self::STATUS_CANCELED,
            self::STATUS_FINISHED,
            self::STATUS_ROLLBACKED,
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
        $this->container['targetInstance'] = isset($data['targetInstance']) ? $data['targetInstance'] : null;
        $this->container['gmtCreated'] = isset($data['gmtCreated']) ? $data['gmtCreated'] : null;
        $this->container['gmtFinished'] = isset($data['gmtFinished']) ? $data['gmtFinished'] : null;
        $this->container['executeCosts'] = isset($data['executeCosts']) ? $data['executeCosts'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    *  主键id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 主键id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets targetInstance
    *  targetInstance
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ResourceInstance|null
    */
    public function getTargetInstance()
    {
        return $this->container['targetInstance'];
    }

    /**
    * Sets targetInstance
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ResourceInstance|null $targetInstance targetInstance
    *
    * @return $this
    */
    public function setTargetInstance($targetInstance)
    {
        $this->container['targetInstance'] = $targetInstance;
        return $this;
    }

    /**
    * Gets gmtCreated
    *  创建时间
    *
    * @return int|null
    */
    public function getGmtCreated()
    {
        return $this->container['gmtCreated'];
    }

    /**
    * Sets gmtCreated
    *
    * @param int|null $gmtCreated 创建时间
    *
    * @return $this
    */
    public function setGmtCreated($gmtCreated)
    {
        $this->container['gmtCreated'] = $gmtCreated;
        return $this;
    }

    /**
    * Gets gmtFinished
    *  完成时间
    *
    * @return int|null
    */
    public function getGmtFinished()
    {
        return $this->container['gmtFinished'];
    }

    /**
    * Sets gmtFinished
    *
    * @param int|null $gmtFinished 完成时间
    *
    * @return $this
    */
    public function setGmtFinished($gmtFinished)
    {
        $this->container['gmtFinished'] = $gmtFinished;
        return $this;
    }

    /**
    * Gets executeCosts
    *  耗时时间，单位:秒
    *
    * @return int|null
    */
    public function getExecuteCosts()
    {
        return $this->container['executeCosts'];
    }

    /**
    * Sets executeCosts
    *
    * @param int|null $executeCosts 耗时时间，单位:秒
    *
    * @return $this
    */
    public function setExecuteCosts($executeCosts)
    {
        $this->container['executeCosts'] = $executeCosts;
        return $this;
    }

    /**
    * Gets status
    *  实例执行状态
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
    * @param string|null $status 实例执行状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets message
    *  实例执行日志
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 实例执行日志
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

