<?php

namespace HuaweiCloud\SDK\Ces\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAgentInvocationsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAgentInvocationsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符 **默认取值**: 不涉及
    * instanceType  **参数解释**: 主机类型，仅支持ECS弹性云服务器和BMS裸金属服务器 **约束限制**: 不涉及 **取值范围**: - ECS: 弹性云服务器 - BMS：裸金属服务器 **默认取值**: 不涉及
    * invocationId  **参数解释**: 任务id **约束限制**: 不涉及 **取值范围**: 以字母或数字开头，后续可包含字母、数字、下划线或连字符的字符串，长度至少为 1 **默认取值**: 不涉及
    * invocationType  **参数解释**: 任务类型, 仅包含：INSTALL安装, UPDATE升级, ROLLBACK回退，RETRY重试，SET_REMOTE_INSTALLER设置远程安装主机，REMOTE_INSTALL执行远程安装。 **约束限制**: 不涉及。 **取值范围**: - INSTALL：安装 - UPDATE：升级 - ROLLBACK：回退 - RETRY：重试 - SET_REMOTE_INSTALLER：设置远程安装主机 - REMOTE_INSTALL：执行远程安装 **默认取值**: 不涉及
    * invocationTarget  **参数解释**: 任务对象, 支持telescope监控 **约束限制**: 不涉及。 **取值范围**: - telescope: 主机监控插件telescope **默认取值**: telescope。
    * offset  **参数解释**: 分页偏移量 **约束限制**: 不涉及 **取值范围**: 数字范围为[0,9999999999999] **默认取值**: 0
    * limit  **参数解释**: 分页大小。 **约束限制**: 不涉及。 **取值范围**: 数字范围为[1,100] **默认取值**: 100
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'instanceType' => 'string',
            'invocationId' => 'string',
            'invocationType' => 'string',
            'invocationTarget' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符 **默认取值**: 不涉及
    * instanceType  **参数解释**: 主机类型，仅支持ECS弹性云服务器和BMS裸金属服务器 **约束限制**: 不涉及 **取值范围**: - ECS: 弹性云服务器 - BMS：裸金属服务器 **默认取值**: 不涉及
    * invocationId  **参数解释**: 任务id **约束限制**: 不涉及 **取值范围**: 以字母或数字开头，后续可包含字母、数字、下划线或连字符的字符串，长度至少为 1 **默认取值**: 不涉及
    * invocationType  **参数解释**: 任务类型, 仅包含：INSTALL安装, UPDATE升级, ROLLBACK回退，RETRY重试，SET_REMOTE_INSTALLER设置远程安装主机，REMOTE_INSTALL执行远程安装。 **约束限制**: 不涉及。 **取值范围**: - INSTALL：安装 - UPDATE：升级 - ROLLBACK：回退 - RETRY：重试 - SET_REMOTE_INSTALLER：设置远程安装主机 - REMOTE_INSTALL：执行远程安装 **默认取值**: 不涉及
    * invocationTarget  **参数解释**: 任务对象, 支持telescope监控 **约束限制**: 不涉及。 **取值范围**: - telescope: 主机监控插件telescope **默认取值**: telescope。
    * offset  **参数解释**: 分页偏移量 **约束限制**: 不涉及 **取值范围**: 数字范围为[0,9999999999999] **默认取值**: 0
    * limit  **参数解释**: 分页大小。 **约束限制**: 不涉及。 **取值范围**: 数字范围为[1,100] **默认取值**: 100
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'instanceType' => null,
        'invocationId' => null,
        'invocationType' => null,
        'invocationTarget' => null,
        'offset' => 'int64',
        'limit' => 'int32'
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
    * instanceId  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符 **默认取值**: 不涉及
    * instanceType  **参数解释**: 主机类型，仅支持ECS弹性云服务器和BMS裸金属服务器 **约束限制**: 不涉及 **取值范围**: - ECS: 弹性云服务器 - BMS：裸金属服务器 **默认取值**: 不涉及
    * invocationId  **参数解释**: 任务id **约束限制**: 不涉及 **取值范围**: 以字母或数字开头，后续可包含字母、数字、下划线或连字符的字符串，长度至少为 1 **默认取值**: 不涉及
    * invocationType  **参数解释**: 任务类型, 仅包含：INSTALL安装, UPDATE升级, ROLLBACK回退，RETRY重试，SET_REMOTE_INSTALLER设置远程安装主机，REMOTE_INSTALL执行远程安装。 **约束限制**: 不涉及。 **取值范围**: - INSTALL：安装 - UPDATE：升级 - ROLLBACK：回退 - RETRY：重试 - SET_REMOTE_INSTALLER：设置远程安装主机 - REMOTE_INSTALL：执行远程安装 **默认取值**: 不涉及
    * invocationTarget  **参数解释**: 任务对象, 支持telescope监控 **约束限制**: 不涉及。 **取值范围**: - telescope: 主机监控插件telescope **默认取值**: telescope。
    * offset  **参数解释**: 分页偏移量 **约束限制**: 不涉及 **取值范围**: 数字范围为[0,9999999999999] **默认取值**: 0
    * limit  **参数解释**: 分页大小。 **约束限制**: 不涉及。 **取值范围**: 数字范围为[1,100] **默认取值**: 100
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'instanceType' => 'instance_type',
            'invocationId' => 'invocation_id',
            'invocationType' => 'invocation_type',
            'invocationTarget' => 'invocation_target',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符 **默认取值**: 不涉及
    * instanceType  **参数解释**: 主机类型，仅支持ECS弹性云服务器和BMS裸金属服务器 **约束限制**: 不涉及 **取值范围**: - ECS: 弹性云服务器 - BMS：裸金属服务器 **默认取值**: 不涉及
    * invocationId  **参数解释**: 任务id **约束限制**: 不涉及 **取值范围**: 以字母或数字开头，后续可包含字母、数字、下划线或连字符的字符串，长度至少为 1 **默认取值**: 不涉及
    * invocationType  **参数解释**: 任务类型, 仅包含：INSTALL安装, UPDATE升级, ROLLBACK回退，RETRY重试，SET_REMOTE_INSTALLER设置远程安装主机，REMOTE_INSTALL执行远程安装。 **约束限制**: 不涉及。 **取值范围**: - INSTALL：安装 - UPDATE：升级 - ROLLBACK：回退 - RETRY：重试 - SET_REMOTE_INSTALLER：设置远程安装主机 - REMOTE_INSTALL：执行远程安装 **默认取值**: 不涉及
    * invocationTarget  **参数解释**: 任务对象, 支持telescope监控 **约束限制**: 不涉及。 **取值范围**: - telescope: 主机监控插件telescope **默认取值**: telescope。
    * offset  **参数解释**: 分页偏移量 **约束限制**: 不涉及 **取值范围**: 数字范围为[0,9999999999999] **默认取值**: 0
    * limit  **参数解释**: 分页大小。 **约束限制**: 不涉及。 **取值范围**: 数字范围为[1,100] **默认取值**: 100
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'instanceType' => 'setInstanceType',
            'invocationId' => 'setInvocationId',
            'invocationType' => 'setInvocationType',
            'invocationTarget' => 'setInvocationTarget',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符 **默认取值**: 不涉及
    * instanceType  **参数解释**: 主机类型，仅支持ECS弹性云服务器和BMS裸金属服务器 **约束限制**: 不涉及 **取值范围**: - ECS: 弹性云服务器 - BMS：裸金属服务器 **默认取值**: 不涉及
    * invocationId  **参数解释**: 任务id **约束限制**: 不涉及 **取值范围**: 以字母或数字开头，后续可包含字母、数字、下划线或连字符的字符串，长度至少为 1 **默认取值**: 不涉及
    * invocationType  **参数解释**: 任务类型, 仅包含：INSTALL安装, UPDATE升级, ROLLBACK回退，RETRY重试，SET_REMOTE_INSTALLER设置远程安装主机，REMOTE_INSTALL执行远程安装。 **约束限制**: 不涉及。 **取值范围**: - INSTALL：安装 - UPDATE：升级 - ROLLBACK：回退 - RETRY：重试 - SET_REMOTE_INSTALLER：设置远程安装主机 - REMOTE_INSTALL：执行远程安装 **默认取值**: 不涉及
    * invocationTarget  **参数解释**: 任务对象, 支持telescope监控 **约束限制**: 不涉及。 **取值范围**: - telescope: 主机监控插件telescope **默认取值**: telescope。
    * offset  **参数解释**: 分页偏移量 **约束限制**: 不涉及 **取值范围**: 数字范围为[0,9999999999999] **默认取值**: 0
    * limit  **参数解释**: 分页大小。 **约束限制**: 不涉及。 **取值范围**: 数字范围为[1,100] **默认取值**: 100
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'instanceType' => 'getInstanceType',
            'invocationId' => 'getInvocationId',
            'invocationType' => 'getInvocationType',
            'invocationTarget' => 'getInvocationTarget',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
    const INSTANCE_TYPE_ECS = 'ECS';
    const INSTANCE_TYPE_BMS = 'BMS';
    const INVOCATION_TYPE_INSTALL = 'INSTALL';
    const INVOCATION_TYPE_UPDATE = 'UPDATE';
    const INVOCATION_TYPE_ROLLBACK = 'ROLLBACK';
    const INVOCATION_TYPE_RETRY = 'RETRY';
    const INVOCATION_TYPE_SET_REMOTE_INSTALLER = 'SET_REMOTE_INSTALLER';
    const INVOCATION_TYPE_REMOTE_INSTALL = 'REMOTE_INSTALL';
    const INVOCATION_TARGET_TELESCOPE = 'telescope';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInstanceTypeAllowableValues()
    {
        return [
            self::INSTANCE_TYPE_ECS,
            self::INSTANCE_TYPE_BMS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInvocationTypeAllowableValues()
    {
        return [
            self::INVOCATION_TYPE_INSTALL,
            self::INVOCATION_TYPE_UPDATE,
            self::INVOCATION_TYPE_ROLLBACK,
            self::INVOCATION_TYPE_RETRY,
            self::INVOCATION_TYPE_SET_REMOTE_INSTALLER,
            self::INVOCATION_TYPE_REMOTE_INSTALL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInvocationTargetAllowableValues()
    {
        return [
            self::INVOCATION_TARGET_TELESCOPE,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['invocationId'] = isset($data['invocationId']) ? $data['invocationId'] : null;
        $this->container['invocationType'] = isset($data['invocationType']) ? $data['invocationType'] : null;
        $this->container['invocationTarget'] = isset($data['invocationTarget']) ? $data['invocationTarget'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceId']) && !preg_match("/^[a-zA-Z0-9-]{1,64}$/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /^[a-zA-Z0-9-]{1,64}$/.";
            }
            $allowedValues = $this->getInstanceTypeAllowableValues();
                if (!is_null($this->container['instanceType']) && !in_array($this->container['instanceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'instanceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['invocationId']) && !preg_match("/^([0-9A-Za-z]){1}([0-9A-Za-z]|_|-)*$/", $this->container['invocationId'])) {
                $invalidProperties[] = "invalid value for 'invocationId', must be conform to the pattern /^([0-9A-Za-z]){1}([0-9A-Za-z]|_|-)*$/.";
            }
            $allowedValues = $this->getInvocationTypeAllowableValues();
                if (!is_null($this->container['invocationType']) && !in_array($this->container['invocationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'invocationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getInvocationTargetAllowableValues();
                if (!is_null($this->container['invocationTarget']) && !in_array($this->container['invocationTarget'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'invocationTarget', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['offset']) && ($this->container['offset'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets instanceId
    *  **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**: 主机id **约束限制**: 不涉及 **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceType
    *  **参数解释**: 主机类型，仅支持ECS弹性云服务器和BMS裸金属服务器 **约束限制**: 不涉及 **取值范围**: - ECS: 弹性云服务器 - BMS：裸金属服务器 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string|null $instanceType **参数解释**: 主机类型，仅支持ECS弹性云服务器和BMS裸金属服务器 **约束限制**: 不涉及 **取值范围**: - ECS: 弹性云服务器 - BMS：裸金属服务器 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets invocationId
    *  **参数解释**: 任务id **约束限制**: 不涉及 **取值范围**: 以字母或数字开头，后续可包含字母、数字、下划线或连字符的字符串，长度至少为 1 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getInvocationId()
    {
        return $this->container['invocationId'];
    }

    /**
    * Sets invocationId
    *
    * @param string|null $invocationId **参数解释**: 任务id **约束限制**: 不涉及 **取值范围**: 以字母或数字开头，后续可包含字母、数字、下划线或连字符的字符串，长度至少为 1 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setInvocationId($invocationId)
    {
        $this->container['invocationId'] = $invocationId;
        return $this;
    }

    /**
    * Gets invocationType
    *  **参数解释**: 任务类型, 仅包含：INSTALL安装, UPDATE升级, ROLLBACK回退，RETRY重试，SET_REMOTE_INSTALLER设置远程安装主机，REMOTE_INSTALL执行远程安装。 **约束限制**: 不涉及。 **取值范围**: - INSTALL：安装 - UPDATE：升级 - ROLLBACK：回退 - RETRY：重试 - SET_REMOTE_INSTALLER：设置远程安装主机 - REMOTE_INSTALL：执行远程安装 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getInvocationType()
    {
        return $this->container['invocationType'];
    }

    /**
    * Sets invocationType
    *
    * @param string|null $invocationType **参数解释**: 任务类型, 仅包含：INSTALL安装, UPDATE升级, ROLLBACK回退，RETRY重试，SET_REMOTE_INSTALLER设置远程安装主机，REMOTE_INSTALL执行远程安装。 **约束限制**: 不涉及。 **取值范围**: - INSTALL：安装 - UPDATE：升级 - ROLLBACK：回退 - RETRY：重试 - SET_REMOTE_INSTALLER：设置远程安装主机 - REMOTE_INSTALL：执行远程安装 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setInvocationType($invocationType)
    {
        $this->container['invocationType'] = $invocationType;
        return $this;
    }

    /**
    * Gets invocationTarget
    *  **参数解释**: 任务对象, 支持telescope监控 **约束限制**: 不涉及。 **取值范围**: - telescope: 主机监控插件telescope **默认取值**: telescope。
    *
    * @return string|null
    */
    public function getInvocationTarget()
    {
        return $this->container['invocationTarget'];
    }

    /**
    * Sets invocationTarget
    *
    * @param string|null $invocationTarget **参数解释**: 任务对象, 支持telescope监控 **约束限制**: 不涉及。 **取值范围**: - telescope: 主机监控插件telescope **默认取值**: telescope。
    *
    * @return $this
    */
    public function setInvocationTarget($invocationTarget)
    {
        $this->container['invocationTarget'] = $invocationTarget;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**: 分页偏移量 **约束限制**: 不涉及 **取值范围**: 数字范围为[0,9999999999999] **默认取值**: 0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**: 分页偏移量 **约束限制**: 不涉及 **取值范围**: 数字范围为[0,9999999999999] **默认取值**: 0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 分页大小。 **约束限制**: 不涉及。 **取值范围**: 数字范围为[1,100] **默认取值**: 100
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**: 分页大小。 **约束限制**: 不涉及。 **取值范围**: 数字范围为[1,100] **默认取值**: 100
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

