<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateJobResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateJobResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：  任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * name  **参数解释**：  任务名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * status  **参数解释**：  任务当前运行状态。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - WAITING_FOR_START：等待启动中 - RELEASE_RESOURCE_COMPLETE：已结束 - DELETED：已删除 - INCRE_TRANSFER_STARTED：增量迁移中 - INCRE_TRANSFER_FAILED：增量迁移失败 - FULL_TRANSFER_STARTED：全量迁移中 - FULL_TRANSFER_COMPLETE：全量迁移完成 - PAUSING：暂停中 - FULL_TRANSFER_FAILED：全量迁移失败  **默认取值**：  不涉及
    * createTime  **参数解释**：  任务的创建时间，时间戳格式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * errorCode  **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
    * errorMsg  **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * childIds  **参数解释**：  子任务ID列表，有子任务时返回该字段。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'createTime' => 'string',
            'errorCode' => 'string',
            'errorMsg' => 'string',
            'childIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：  任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * name  **参数解释**：  任务名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * status  **参数解释**：  任务当前运行状态。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - WAITING_FOR_START：等待启动中 - RELEASE_RESOURCE_COMPLETE：已结束 - DELETED：已删除 - INCRE_TRANSFER_STARTED：增量迁移中 - INCRE_TRANSFER_FAILED：增量迁移失败 - FULL_TRANSFER_STARTED：全量迁移中 - FULL_TRANSFER_COMPLETE：全量迁移完成 - PAUSING：暂停中 - FULL_TRANSFER_FAILED：全量迁移失败  **默认取值**：  不涉及
    * createTime  **参数解释**：  任务的创建时间，时间戳格式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * errorCode  **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
    * errorMsg  **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * childIds  **参数解释**：  子任务ID列表，有子任务时返回该字段。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'createTime' => null,
        'errorCode' => null,
        'errorMsg' => null,
        'childIds' => null
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
    * id  **参数解释**：  任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * name  **参数解释**：  任务名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * status  **参数解释**：  任务当前运行状态。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - WAITING_FOR_START：等待启动中 - RELEASE_RESOURCE_COMPLETE：已结束 - DELETED：已删除 - INCRE_TRANSFER_STARTED：增量迁移中 - INCRE_TRANSFER_FAILED：增量迁移失败 - FULL_TRANSFER_STARTED：全量迁移中 - FULL_TRANSFER_COMPLETE：全量迁移完成 - PAUSING：暂停中 - FULL_TRANSFER_FAILED：全量迁移失败  **默认取值**：  不涉及
    * createTime  **参数解释**：  任务的创建时间，时间戳格式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * errorCode  **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
    * errorMsg  **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * childIds  **参数解释**：  子任务ID列表，有子任务时返回该字段。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'createTime' => 'create_time',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg',
            'childIds' => 'child_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：  任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * name  **参数解释**：  任务名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * status  **参数解释**：  任务当前运行状态。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - WAITING_FOR_START：等待启动中 - RELEASE_RESOURCE_COMPLETE：已结束 - DELETED：已删除 - INCRE_TRANSFER_STARTED：增量迁移中 - INCRE_TRANSFER_FAILED：增量迁移失败 - FULL_TRANSFER_STARTED：全量迁移中 - FULL_TRANSFER_COMPLETE：全量迁移完成 - PAUSING：暂停中 - FULL_TRANSFER_FAILED：全量迁移失败  **默认取值**：  不涉及
    * createTime  **参数解释**：  任务的创建时间，时间戳格式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * errorCode  **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
    * errorMsg  **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * childIds  **参数解释**：  子任务ID列表，有子任务时返回该字段。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg',
            'childIds' => 'setChildIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：  任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * name  **参数解释**：  任务名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * status  **参数解释**：  任务当前运行状态。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - WAITING_FOR_START：等待启动中 - RELEASE_RESOURCE_COMPLETE：已结束 - DELETED：已删除 - INCRE_TRANSFER_STARTED：增量迁移中 - INCRE_TRANSFER_FAILED：增量迁移失败 - FULL_TRANSFER_STARTED：全量迁移中 - FULL_TRANSFER_COMPLETE：全量迁移完成 - PAUSING：暂停中 - FULL_TRANSFER_FAILED：全量迁移失败  **默认取值**：  不涉及
    * createTime  **参数解释**：  任务的创建时间，时间戳格式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * errorCode  **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
    * errorMsg  **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * childIds  **参数解释**：  子任务ID列表，有子任务时返回该字段。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg',
            'childIds' => 'getChildIds'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['childIds'] = isset($data['childIds']) ? $data['childIds'] : null;
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
    *  **参数解释**：  任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释**：  任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
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
    *  **参数解释**：  任务名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $name **参数解释**：  任务名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：  任务当前运行状态。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - WAITING_FOR_START：等待启动中 - RELEASE_RESOURCE_COMPLETE：已结束 - DELETED：已删除 - INCRE_TRANSFER_STARTED：增量迁移中 - INCRE_TRANSFER_FAILED：增量迁移失败 - FULL_TRANSFER_STARTED：全量迁移中 - FULL_TRANSFER_COMPLETE：全量迁移完成 - PAUSING：暂停中 - FULL_TRANSFER_FAILED：全量迁移失败  **默认取值**：  不涉及
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
    * @param string|null $status **参数解释**：  任务当前运行状态。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - WAITING_FOR_START：等待启动中 - RELEASE_RESOURCE_COMPLETE：已结束 - DELETED：已删除 - INCRE_TRANSFER_STARTED：增量迁移中 - INCRE_TRANSFER_FAILED：增量迁移失败 - FULL_TRANSFER_STARTED：全量迁移中 - FULL_TRANSFER_COMPLETE：全量迁移完成 - PAUSING：暂停中 - FULL_TRANSFER_FAILED：全量迁移失败  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**：  任务的创建时间，时间戳格式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime **参数解释**：  任务的创建时间，时间戳格式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets errorCode
    *  **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMsg
    *  **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets childIds
    *  **参数解释**：  子任务ID列表，有子任务时返回该字段。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return string[]|null
    */
    public function getChildIds()
    {
        return $this->container['childIds'];
    }

    /**
    * Sets childIds
    *
    * @param string[]|null $childIds **参数解释**：  子任务ID列表，有子任务时返回该字段。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setChildIds($childIds)
    {
        $this->container['childIds'] = $childIds;
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

