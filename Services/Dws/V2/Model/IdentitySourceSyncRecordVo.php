<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IdentitySourceSyncRecordVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IdentitySourceSyncRecordVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 记录ID。 **取值范围**： 不涉及。
    * identitySourceId  **参数解释**： 身份源ID。 **取值范围**： 不涉及。
    * identitySourceType  **参数解释**： 身份源类型。 **取值范围**： - ldap：目录服务数据源。 - oneaccess：聚合型数据源
    * startTime  **参数解释**： 任务开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 任务结束时间。 **取值范围**： 不涉及。
    * addCount  **参数解释**： 添加记录数。 **取值范围**： 大于等于0。
    * updateCount  **参数解释**： 更新记录数。 **取值范围**： 大于等于0。
    * deleteCount  **参数解释**： 删除记录数。 **取值范围**： 大于等于0。
    * failedCount  **参数解释**： 失败记录数。 **取值范围**： 大于等于0。
    * status  **参数解释**： 状态。 **取值范围**： - RUNNING：运行中。 - FINISHED：已完成。 - FAILED：失败。
    * failReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'identitySourceId' => 'string',
            'identitySourceType' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'addCount' => 'int',
            'updateCount' => 'int',
            'deleteCount' => 'int',
            'failedCount' => 'int',
            'status' => 'string',
            'failReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 记录ID。 **取值范围**： 不涉及。
    * identitySourceId  **参数解释**： 身份源ID。 **取值范围**： 不涉及。
    * identitySourceType  **参数解释**： 身份源类型。 **取值范围**： - ldap：目录服务数据源。 - oneaccess：聚合型数据源
    * startTime  **参数解释**： 任务开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 任务结束时间。 **取值范围**： 不涉及。
    * addCount  **参数解释**： 添加记录数。 **取值范围**： 大于等于0。
    * updateCount  **参数解释**： 更新记录数。 **取值范围**： 大于等于0。
    * deleteCount  **参数解释**： 删除记录数。 **取值范围**： 大于等于0。
    * failedCount  **参数解释**： 失败记录数。 **取值范围**： 大于等于0。
    * status  **参数解释**： 状态。 **取值范围**： - RUNNING：运行中。 - FINISHED：已完成。 - FAILED：失败。
    * failReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'identitySourceId' => null,
        'identitySourceType' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'addCount' => 'int32',
        'updateCount' => 'int32',
        'deleteCount' => 'int32',
        'failedCount' => 'int32',
        'status' => null,
        'failReason' => null
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
    * id  **参数解释**： 记录ID。 **取值范围**： 不涉及。
    * identitySourceId  **参数解释**： 身份源ID。 **取值范围**： 不涉及。
    * identitySourceType  **参数解释**： 身份源类型。 **取值范围**： - ldap：目录服务数据源。 - oneaccess：聚合型数据源
    * startTime  **参数解释**： 任务开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 任务结束时间。 **取值范围**： 不涉及。
    * addCount  **参数解释**： 添加记录数。 **取值范围**： 大于等于0。
    * updateCount  **参数解释**： 更新记录数。 **取值范围**： 大于等于0。
    * deleteCount  **参数解释**： 删除记录数。 **取值范围**： 大于等于0。
    * failedCount  **参数解释**： 失败记录数。 **取值范围**： 大于等于0。
    * status  **参数解释**： 状态。 **取值范围**： - RUNNING：运行中。 - FINISHED：已完成。 - FAILED：失败。
    * failReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'identitySourceId' => 'identity_source_id',
            'identitySourceType' => 'identity_source_type',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'addCount' => 'add_count',
            'updateCount' => 'update_count',
            'deleteCount' => 'delete_count',
            'failedCount' => 'failed_count',
            'status' => 'status',
            'failReason' => 'fail_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 记录ID。 **取值范围**： 不涉及。
    * identitySourceId  **参数解释**： 身份源ID。 **取值范围**： 不涉及。
    * identitySourceType  **参数解释**： 身份源类型。 **取值范围**： - ldap：目录服务数据源。 - oneaccess：聚合型数据源
    * startTime  **参数解释**： 任务开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 任务结束时间。 **取值范围**： 不涉及。
    * addCount  **参数解释**： 添加记录数。 **取值范围**： 大于等于0。
    * updateCount  **参数解释**： 更新记录数。 **取值范围**： 大于等于0。
    * deleteCount  **参数解释**： 删除记录数。 **取值范围**： 大于等于0。
    * failedCount  **参数解释**： 失败记录数。 **取值范围**： 大于等于0。
    * status  **参数解释**： 状态。 **取值范围**： - RUNNING：运行中。 - FINISHED：已完成。 - FAILED：失败。
    * failReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'identitySourceId' => 'setIdentitySourceId',
            'identitySourceType' => 'setIdentitySourceType',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'addCount' => 'setAddCount',
            'updateCount' => 'setUpdateCount',
            'deleteCount' => 'setDeleteCount',
            'failedCount' => 'setFailedCount',
            'status' => 'setStatus',
            'failReason' => 'setFailReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 记录ID。 **取值范围**： 不涉及。
    * identitySourceId  **参数解释**： 身份源ID。 **取值范围**： 不涉及。
    * identitySourceType  **参数解释**： 身份源类型。 **取值范围**： - ldap：目录服务数据源。 - oneaccess：聚合型数据源
    * startTime  **参数解释**： 任务开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 任务结束时间。 **取值范围**： 不涉及。
    * addCount  **参数解释**： 添加记录数。 **取值范围**： 大于等于0。
    * updateCount  **参数解释**： 更新记录数。 **取值范围**： 大于等于0。
    * deleteCount  **参数解释**： 删除记录数。 **取值范围**： 大于等于0。
    * failedCount  **参数解释**： 失败记录数。 **取值范围**： 大于等于0。
    * status  **参数解释**： 状态。 **取值范围**： - RUNNING：运行中。 - FINISHED：已完成。 - FAILED：失败。
    * failReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'identitySourceId' => 'getIdentitySourceId',
            'identitySourceType' => 'getIdentitySourceType',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'addCount' => 'getAddCount',
            'updateCount' => 'getUpdateCount',
            'deleteCount' => 'getDeleteCount',
            'failedCount' => 'getFailedCount',
            'status' => 'getStatus',
            'failReason' => 'getFailReason'
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
        $this->container['identitySourceId'] = isset($data['identitySourceId']) ? $data['identitySourceId'] : null;
        $this->container['identitySourceType'] = isset($data['identitySourceType']) ? $data['identitySourceType'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['addCount'] = isset($data['addCount']) ? $data['addCount'] : null;
        $this->container['updateCount'] = isset($data['updateCount']) ? $data['updateCount'] : null;
        $this->container['deleteCount'] = isset($data['deleteCount']) ? $data['deleteCount'] : null;
        $this->container['failedCount'] = isset($data['failedCount']) ? $data['failedCount'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
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
    *  **参数解释**： 记录ID。 **取值范围**： 不涉及。
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
    * @param string|null $id **参数解释**： 记录ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets identitySourceId
    *  **参数解释**： 身份源ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getIdentitySourceId()
    {
        return $this->container['identitySourceId'];
    }

    /**
    * Sets identitySourceId
    *
    * @param string|null $identitySourceId **参数解释**： 身份源ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIdentitySourceId($identitySourceId)
    {
        $this->container['identitySourceId'] = $identitySourceId;
        return $this;
    }

    /**
    * Gets identitySourceType
    *  **参数解释**： 身份源类型。 **取值范围**： - ldap：目录服务数据源。 - oneaccess：聚合型数据源
    *
    * @return string|null
    */
    public function getIdentitySourceType()
    {
        return $this->container['identitySourceType'];
    }

    /**
    * Sets identitySourceType
    *
    * @param string|null $identitySourceType **参数解释**： 身份源类型。 **取值范围**： - ldap：目录服务数据源。 - oneaccess：聚合型数据源
    *
    * @return $this
    */
    public function setIdentitySourceType($identitySourceType)
    {
        $this->container['identitySourceType'] = $identitySourceType;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 任务开始时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime **参数解释**： 任务开始时间。 **取值范围**： 不涉及。
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
    *  **参数解释**： 任务结束时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime **参数解释**： 任务结束时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets addCount
    *  **参数解释**： 添加记录数。 **取值范围**： 大于等于0。
    *
    * @return int|null
    */
    public function getAddCount()
    {
        return $this->container['addCount'];
    }

    /**
    * Sets addCount
    *
    * @param int|null $addCount **参数解释**： 添加记录数。 **取值范围**： 大于等于0。
    *
    * @return $this
    */
    public function setAddCount($addCount)
    {
        $this->container['addCount'] = $addCount;
        return $this;
    }

    /**
    * Gets updateCount
    *  **参数解释**： 更新记录数。 **取值范围**： 大于等于0。
    *
    * @return int|null
    */
    public function getUpdateCount()
    {
        return $this->container['updateCount'];
    }

    /**
    * Sets updateCount
    *
    * @param int|null $updateCount **参数解释**： 更新记录数。 **取值范围**： 大于等于0。
    *
    * @return $this
    */
    public function setUpdateCount($updateCount)
    {
        $this->container['updateCount'] = $updateCount;
        return $this;
    }

    /**
    * Gets deleteCount
    *  **参数解释**： 删除记录数。 **取值范围**： 大于等于0。
    *
    * @return int|null
    */
    public function getDeleteCount()
    {
        return $this->container['deleteCount'];
    }

    /**
    * Sets deleteCount
    *
    * @param int|null $deleteCount **参数解释**： 删除记录数。 **取值范围**： 大于等于0。
    *
    * @return $this
    */
    public function setDeleteCount($deleteCount)
    {
        $this->container['deleteCount'] = $deleteCount;
        return $this;
    }

    /**
    * Gets failedCount
    *  **参数解释**： 失败记录数。 **取值范围**： 大于等于0。
    *
    * @return int|null
    */
    public function getFailedCount()
    {
        return $this->container['failedCount'];
    }

    /**
    * Sets failedCount
    *
    * @param int|null $failedCount **参数解释**： 失败记录数。 **取值范围**： 大于等于0。
    *
    * @return $this
    */
    public function setFailedCount($failedCount)
    {
        $this->container['failedCount'] = $failedCount;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 状态。 **取值范围**： - RUNNING：运行中。 - FINISHED：已完成。 - FAILED：失败。
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
    * @param string|null $status **参数解释**： 状态。 **取值范围**： - RUNNING：运行中。 - FINISHED：已完成。 - FAILED：失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets failReason
    *  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
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

