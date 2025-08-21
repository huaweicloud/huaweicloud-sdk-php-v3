<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineStageJobDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineStageJobDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  阶段ID
    * name  阶段名称
    * sortId  阶段顺序ID
    * status  阶段状态, pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    * jobs  jobs
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'sortId' => 'int',
            'status' => 'string',
            'jobs' => '\HuaweiCloud\SDK\CodeHub\V4\Model\BaseJobDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  阶段ID
    * name  阶段名称
    * sortId  阶段顺序ID
    * status  阶段状态, pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    * jobs  jobs
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'name' => null,
        'sortId' => 'int32',
        'status' => null,
        'jobs' => null
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
    * id  阶段ID
    * name  阶段名称
    * sortId  阶段顺序ID
    * status  阶段状态, pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    * jobs  jobs
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'sortId' => 'sort_id',
            'status' => 'status',
            'jobs' => 'jobs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  阶段ID
    * name  阶段名称
    * sortId  阶段顺序ID
    * status  阶段状态, pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    * jobs  jobs
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'sortId' => 'setSortId',
            'status' => 'setStatus',
            'jobs' => 'setJobs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  阶段ID
    * name  阶段名称
    * sortId  阶段顺序ID
    * status  阶段状态, pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    * jobs  jobs
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'sortId' => 'getSortId',
            'status' => 'getStatus',
            'jobs' => 'getJobs'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sortId'] = isset($data['sortId']) ? $data['sortId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['jobs'] = isset($data['jobs']) ? $data['jobs'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100000)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sortId']) && ($this->container['sortId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sortId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sortId']) && ($this->container['sortId'] < 1)) {
                $invalidProperties[] = "invalid value for 'sortId', must be bigger than or equal to 1.";
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
    *  阶段ID
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
    * @param int|null $id 阶段ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  阶段名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 阶段名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sortId
    *  阶段顺序ID
    *
    * @return int|null
    */
    public function getSortId()
    {
        return $this->container['sortId'];
    }

    /**
    * Sets sortId
    *
    * @param int|null $sortId 阶段顺序ID
    *
    * @return $this
    */
    public function setSortId($sortId)
    {
        $this->container['sortId'] = $sortId;
        return $this;
    }

    /**
    * Gets status
    *  阶段状态, pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
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
    * @param string|null $status 阶段状态, pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets jobs
    *  jobs
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\BaseJobDto[]|null
    */
    public function getJobs()
    {
        return $this->container['jobs'];
    }

    /**
    * Sets jobs
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\BaseJobDto[]|null $jobs jobs
    *
    * @return $this
    */
    public function setJobs($jobs)
    {
        $this->container['jobs'] = $jobs;
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

