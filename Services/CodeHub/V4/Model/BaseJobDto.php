<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BaseJobDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BaseJobDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID
    * sha  提交ID
    * ref  分支
    * status  阶段状态, pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    * name  任务名称
    * targetUrl  任务链接
    * createdAt  创建时间
    * updatedAt  更新时间
    * startedAt  开始时间
    * finishedAt  结束时间
    * thirdBuildId  任务在构建系统中的ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'sha' => 'string',
            'ref' => 'string',
            'status' => 'string',
            'name' => 'string',
            'targetUrl' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'startedAt' => 'string',
            'finishedAt' => 'string',
            'thirdBuildId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID
    * sha  提交ID
    * ref  分支
    * status  阶段状态, pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    * name  任务名称
    * targetUrl  任务链接
    * createdAt  创建时间
    * updatedAt  更新时间
    * startedAt  开始时间
    * finishedAt  结束时间
    * thirdBuildId  任务在构建系统中的ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'sha' => null,
        'ref' => null,
        'status' => null,
        'name' => null,
        'targetUrl' => null,
        'createdAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'updatedAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'startedAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'finishedAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'thirdBuildId' => null
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
    * id  任务ID
    * sha  提交ID
    * ref  分支
    * status  阶段状态, pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    * name  任务名称
    * targetUrl  任务链接
    * createdAt  创建时间
    * updatedAt  更新时间
    * startedAt  开始时间
    * finishedAt  结束时间
    * thirdBuildId  任务在构建系统中的ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'sha' => 'sha',
            'ref' => 'ref',
            'status' => 'status',
            'name' => 'name',
            'targetUrl' => 'target_url',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'startedAt' => 'started_at',
            'finishedAt' => 'finished_at',
            'thirdBuildId' => 'third_build_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID
    * sha  提交ID
    * ref  分支
    * status  阶段状态, pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    * name  任务名称
    * targetUrl  任务链接
    * createdAt  创建时间
    * updatedAt  更新时间
    * startedAt  开始时间
    * finishedAt  结束时间
    * thirdBuildId  任务在构建系统中的ID
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'sha' => 'setSha',
            'ref' => 'setRef',
            'status' => 'setStatus',
            'name' => 'setName',
            'targetUrl' => 'setTargetUrl',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'startedAt' => 'setStartedAt',
            'finishedAt' => 'setFinishedAt',
            'thirdBuildId' => 'setThirdBuildId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID
    * sha  提交ID
    * ref  分支
    * status  阶段状态, pending为排队，running为运行中，success为成功，failed为失败，canceled为取消，skipped为跳过，timedout为超时
    * name  任务名称
    * targetUrl  任务链接
    * createdAt  创建时间
    * updatedAt  更新时间
    * startedAt  开始时间
    * finishedAt  结束时间
    * thirdBuildId  任务在构建系统中的ID
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'sha' => 'getSha',
            'ref' => 'getRef',
            'status' => 'getStatus',
            'name' => 'getName',
            'targetUrl' => 'getTargetUrl',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'startedAt' => 'getStartedAt',
            'finishedAt' => 'getFinishedAt',
            'thirdBuildId' => 'getThirdBuildId'
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
        $this->container['sha'] = isset($data['sha']) ? $data['sha'] : null;
        $this->container['ref'] = isset($data['ref']) ? $data['ref'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['targetUrl'] = isset($data['targetUrl']) ? $data['targetUrl'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['startedAt'] = isset($data['startedAt']) ? $data['startedAt'] : null;
        $this->container['finishedAt'] = isset($data['finishedAt']) ? $data['finishedAt'] : null;
        $this->container['thirdBuildId'] = isset($data['thirdBuildId']) ? $data['thirdBuildId'] : null;
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

            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100000)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetUrl']) && (mb_strlen($this->container['targetUrl']) > 100000)) {
                $invalidProperties[] = "invalid value for 'targetUrl', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['targetUrl']) && (mb_strlen($this->container['targetUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['thirdBuildId']) && (mb_strlen($this->container['thirdBuildId']) > 100000)) {
                $invalidProperties[] = "invalid value for 'thirdBuildId', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['thirdBuildId']) && (mb_strlen($this->container['thirdBuildId']) < 1)) {
                $invalidProperties[] = "invalid value for 'thirdBuildId', the character length must be bigger than or equal to 1.";
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
    *  任务ID
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
    * @param int|null $id 任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets sha
    *  提交ID
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
    * @param string|null $sha 提交ID
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
    * Gets name
    *  任务名称
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
    * @param string|null $name 任务名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets targetUrl
    *  任务链接
    *
    * @return string|null
    */
    public function getTargetUrl()
    {
        return $this->container['targetUrl'];
    }

    /**
    * Sets targetUrl
    *
    * @param string|null $targetUrl 任务链接
    *
    * @return $this
    */
    public function setTargetUrl($targetUrl)
    {
        $this->container['targetUrl'] = $targetUrl;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
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
    * @param string|null $createdAt 创建时间
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
    *  更新时间
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
    * @param string|null $updatedAt 更新时间
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
    *  开始时间
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
    * @param string|null $startedAt 开始时间
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
    *  结束时间
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
    * @param string|null $finishedAt 结束时间
    *
    * @return $this
    */
    public function setFinishedAt($finishedAt)
    {
        $this->container['finishedAt'] = $finishedAt;
        return $this;
    }

    /**
    * Gets thirdBuildId
    *  任务在构建系统中的ID
    *
    * @return string|null
    */
    public function getThirdBuildId()
    {
        return $this->container['thirdBuildId'];
    }

    /**
    * Sets thirdBuildId
    *
    * @param string|null $thirdBuildId 任务在构建系统中的ID
    *
    * @return $this
    */
    public function setThirdBuildId($thirdBuildId)
    {
        $this->container['thirdBuildId'] = $thirdBuildId;
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

