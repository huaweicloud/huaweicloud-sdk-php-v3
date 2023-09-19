<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigListRsp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'configListRsp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  操作ID
    * clusterId  集群ID。
    * createAt  创建时间。格式：Unix时间戳格式。
    * status  任务执行状态。 - true: 执行成功。 - false: 执行失败。
    * finishedAt  结束时间，当创建未结束时结束时间为null。格式：Unix时间戳格式。
    * modifyDeleteReset  修改参数配置记录。
    * failedMsg  返回错误信息。当状态为success时该参数为null。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'clusterId' => 'string',
            'createAt' => 'string',
            'status' => 'string',
            'finishedAt' => 'string',
            'modifyDeleteReset' => 'string',
            'failedMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  操作ID
    * clusterId  集群ID。
    * createAt  创建时间。格式：Unix时间戳格式。
    * status  任务执行状态。 - true: 执行成功。 - false: 执行失败。
    * finishedAt  结束时间，当创建未结束时结束时间为null。格式：Unix时间戳格式。
    * modifyDeleteReset  修改参数配置记录。
    * failedMsg  返回错误信息。当状态为success时该参数为null。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'clusterId' => null,
        'createAt' => null,
        'status' => null,
        'finishedAt' => null,
        'modifyDeleteReset' => null,
        'failedMsg' => null
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
    * id  操作ID
    * clusterId  集群ID。
    * createAt  创建时间。格式：Unix时间戳格式。
    * status  任务执行状态。 - true: 执行成功。 - false: 执行失败。
    * finishedAt  结束时间，当创建未结束时结束时间为null。格式：Unix时间戳格式。
    * modifyDeleteReset  修改参数配置记录。
    * failedMsg  返回错误信息。当状态为success时该参数为null。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'clusterId' => 'clusterId',
            'createAt' => 'createAt',
            'status' => 'status',
            'finishedAt' => 'finishedAt',
            'modifyDeleteReset' => 'modifyDeleteReset',
            'failedMsg' => 'failedMsg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  操作ID
    * clusterId  集群ID。
    * createAt  创建时间。格式：Unix时间戳格式。
    * status  任务执行状态。 - true: 执行成功。 - false: 执行失败。
    * finishedAt  结束时间，当创建未结束时结束时间为null。格式：Unix时间戳格式。
    * modifyDeleteReset  修改参数配置记录。
    * failedMsg  返回错误信息。当状态为success时该参数为null。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'clusterId' => 'setClusterId',
            'createAt' => 'setCreateAt',
            'status' => 'setStatus',
            'finishedAt' => 'setFinishedAt',
            'modifyDeleteReset' => 'setModifyDeleteReset',
            'failedMsg' => 'setFailedMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  操作ID
    * clusterId  集群ID。
    * createAt  创建时间。格式：Unix时间戳格式。
    * status  任务执行状态。 - true: 执行成功。 - false: 执行失败。
    * finishedAt  结束时间，当创建未结束时结束时间为null。格式：Unix时间戳格式。
    * modifyDeleteReset  修改参数配置记录。
    * failedMsg  返回错误信息。当状态为success时该参数为null。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'clusterId' => 'getClusterId',
            'createAt' => 'getCreateAt',
            'status' => 'getStatus',
            'finishedAt' => 'getFinishedAt',
            'modifyDeleteReset' => 'getModifyDeleteReset',
            'failedMsg' => 'getFailedMsg'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['finishedAt'] = isset($data['finishedAt']) ? $data['finishedAt'] : null;
        $this->container['modifyDeleteReset'] = isset($data['modifyDeleteReset']) ? $data['modifyDeleteReset'] : null;
        $this->container['failedMsg'] = isset($data['failedMsg']) ? $data['failedMsg'] : null;
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
    * Gets id
    *  操作ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 操作ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID。
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群ID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets createAt
    *  创建时间。格式：Unix时间戳格式。
    *
    * @return string|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param string|null $createAt 创建时间。格式：Unix时间戳格式。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets status
    *  任务执行状态。 - true: 执行成功。 - false: 执行失败。
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
    * @param string|null $status 任务执行状态。 - true: 执行成功。 - false: 执行失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets finishedAt
    *  结束时间，当创建未结束时结束时间为null。格式：Unix时间戳格式。
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
    * @param string|null $finishedAt 结束时间，当创建未结束时结束时间为null。格式：Unix时间戳格式。
    *
    * @return $this
    */
    public function setFinishedAt($finishedAt)
    {
        $this->container['finishedAt'] = $finishedAt;
        return $this;
    }

    /**
    * Gets modifyDeleteReset
    *  修改参数配置记录。
    *
    * @return string|null
    */
    public function getModifyDeleteReset()
    {
        return $this->container['modifyDeleteReset'];
    }

    /**
    * Sets modifyDeleteReset
    *
    * @param string|null $modifyDeleteReset 修改参数配置记录。
    *
    * @return $this
    */
    public function setModifyDeleteReset($modifyDeleteReset)
    {
        $this->container['modifyDeleteReset'] = $modifyDeleteReset;
        return $this;
    }

    /**
    * Gets failedMsg
    *  返回错误信息。当状态为success时该参数为null。
    *
    * @return string|null
    */
    public function getFailedMsg()
    {
        return $this->container['failedMsg'];
    }

    /**
    * Sets failedMsg
    *
    * @param string|null $failedMsg 返回错误信息。当状态为success时该参数为null。
    *
    * @return $this
    */
    public function setFailedMsg($failedMsg)
    {
        $this->container['failedMsg'] = $failedMsg;
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

