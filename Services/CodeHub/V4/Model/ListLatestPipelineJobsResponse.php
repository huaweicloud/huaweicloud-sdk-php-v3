<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLatestPipelineJobsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLatestPipelineJobsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  流水线ID
    * status  流水线状态，pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    * stages  stages
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'status' => 'string',
            'stages' => '\HuaweiCloud\SDK\CodeHub\V4\Model\PipelineStageJobDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  流水线ID
    * status  流水线状态，pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    * stages  stages
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'status' => null,
        'stages' => null
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
    * id  流水线ID
    * status  流水线状态，pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    * stages  stages
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'stages' => 'stages'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  流水线ID
    * status  流水线状态，pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    * stages  stages
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'stages' => 'setStages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  流水线ID
    * status  流水线状态，pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    * stages  stages
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'stages' => 'getStages'
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
    const STATUS_PENDING = 'pending';
    const STATUS_RUNNING = 'running';
    const STATUS_SUCCESS = 'success';
    const STATUS_FAILED = 'failed';
    const STATUS_CANCELED = 'canceled';
    const STATUS_SKIPPED = 'skipped';
    const STATUS_TIMEDOUT = 'timedout';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_RUNNING,
            self::STATUS_SUCCESS,
            self::STATUS_FAILED,
            self::STATUS_CANCELED,
            self::STATUS_SKIPPED,
            self::STATUS_TIMEDOUT,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['stages'] = isset($data['stages']) ? $data['stages'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
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
    *  流水线ID
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
    * @param int|null $id 流水线ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  流水线状态，pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
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
    * @param string|null $status 流水线状态，pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets stages
    *  stages
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\PipelineStageJobDto[]|null
    */
    public function getStages()
    {
        return $this->container['stages'];
    }

    /**
    * Sets stages
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\PipelineStageJobDto[]|null $stages stages
    *
    * @return $this
    */
    public function setStages($stages)
    {
        $this->container['stages'] = $stages;
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

