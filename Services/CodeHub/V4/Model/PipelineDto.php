<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  流水线ID
    * webUrl  流水线链接
    * sha  commit id
    * ref  分支
    * status  流水线状态，pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    * createdAt  流水线创建时间
    * updatedAt  流水线更新时间
    * startedAt  流水线开始时间
    * finishedAt  流水线结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'webUrl' => 'string',
            'sha' => 'string',
            'ref' => 'string',
            'status' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'startedAt' => 'string',
            'finishedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  流水线ID
    * webUrl  流水线链接
    * sha  commit id
    * ref  分支
    * status  流水线状态，pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    * createdAt  流水线创建时间
    * updatedAt  流水线更新时间
    * startedAt  流水线开始时间
    * finishedAt  流水线结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'webUrl' => null,
        'sha' => null,
        'ref' => null,
        'status' => null,
        'createdAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'updatedAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'startedAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'finishedAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX'
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
    * webUrl  流水线链接
    * sha  commit id
    * ref  分支
    * status  流水线状态，pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    * createdAt  流水线创建时间
    * updatedAt  流水线更新时间
    * startedAt  流水线开始时间
    * finishedAt  流水线结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'webUrl' => 'web_url',
            'sha' => 'sha',
            'ref' => 'ref',
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'startedAt' => 'started_at',
            'finishedAt' => 'finished_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  流水线ID
    * webUrl  流水线链接
    * sha  commit id
    * ref  分支
    * status  流水线状态，pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    * createdAt  流水线创建时间
    * updatedAt  流水线更新时间
    * startedAt  流水线开始时间
    * finishedAt  流水线结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'webUrl' => 'setWebUrl',
            'sha' => 'setSha',
            'ref' => 'setRef',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'startedAt' => 'setStartedAt',
            'finishedAt' => 'setFinishedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  流水线ID
    * webUrl  流水线链接
    * sha  commit id
    * ref  分支
    * status  流水线状态，pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    * createdAt  流水线创建时间
    * updatedAt  流水线更新时间
    * startedAt  流水线开始时间
    * finishedAt  流水线结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'webUrl' => 'getWebUrl',
            'sha' => 'getSha',
            'ref' => 'getRef',
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'startedAt' => 'getStartedAt',
            'finishedAt' => 'getFinishedAt'
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
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
        $this->container['sha'] = isset($data['sha']) ? $data['sha'] : null;
        $this->container['ref'] = isset($data['ref']) ? $data['ref'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['startedAt'] = isset($data['startedAt']) ? $data['startedAt'] : null;
        $this->container['finishedAt'] = isset($data['finishedAt']) ? $data['finishedAt'] : null;
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
            if (!is_null($this->container['webUrl']) && (mb_strlen($this->container['webUrl']) > 100000)) {
                $invalidProperties[] = "invalid value for 'webUrl', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['webUrl']) && (mb_strlen($this->container['webUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'webUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sha']) && (mb_strlen($this->container['sha']) > 40)) {
                $invalidProperties[] = "invalid value for 'sha', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['sha']) && (mb_strlen($this->container['sha']) < 40)) {
                $invalidProperties[] = "invalid value for 'sha', the character length must be bigger than or equal to 40.";
            }
            if (!is_null($this->container['ref']) && (mb_strlen($this->container['ref']) > 100000)) {
                $invalidProperties[] = "invalid value for 'ref', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['ref']) && (mb_strlen($this->container['ref']) < 1)) {
                $invalidProperties[] = "invalid value for 'ref', the character length must be bigger than or equal to 1.";
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
    * Gets webUrl
    *  流水线链接
    *
    * @return string|null
    */
    public function getWebUrl()
    {
        return $this->container['webUrl'];
    }

    /**
    * Sets webUrl
    *
    * @param string|null $webUrl 流水线链接
    *
    * @return $this
    */
    public function setWebUrl($webUrl)
    {
        $this->container['webUrl'] = $webUrl;
        return $this;
    }

    /**
    * Gets sha
    *  commit id
    *
    * @return string|null
    */
    public function getSha()
    {
        return $this->container['sha'];
    }

    /**
    * Sets sha
    *
    * @param string|null $sha commit id
    *
    * @return $this
    */
    public function setSha($sha)
    {
        $this->container['sha'] = $sha;
        return $this;
    }

    /**
    * Gets ref
    *  分支
    *
    * @return string|null
    */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
    * Sets ref
    *
    * @param string|null $ref 分支
    *
    * @return $this
    */
    public function setRef($ref)
    {
        $this->container['ref'] = $ref;
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
    * Gets createdAt
    *  流水线创建时间
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 流水线创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  流水线更新时间
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
    * @param string|null $updatedAt 流水线更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets startedAt
    *  流水线开始时间
    *
    * @return string|null
    */
    public function getStartedAt()
    {
        return $this->container['startedAt'];
    }

    /**
    * Sets startedAt
    *
    * @param string|null $startedAt 流水线开始时间
    *
    * @return $this
    */
    public function setStartedAt($startedAt)
    {
        $this->container['startedAt'] = $startedAt;
        return $this;
    }

    /**
    * Gets finishedAt
    *  流水线结束时间
    *
    * @return string|null
    */
    public function getFinishedAt()
    {
        return $this->container['finishedAt'];
    }

    /**
    * Sets finishedAt
    *
    * @param string|null $finishedAt 流水线结束时间
    *
    * @return $this
    */
    public function setFinishedAt($finishedAt)
    {
        $this->container['finishedAt'] = $finishedAt;
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

