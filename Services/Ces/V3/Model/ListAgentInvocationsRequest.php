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
    * instanceId  主机id
    * instanceName  主机名称
    * instanceType  主机类型，ECS弹性云服务器，BMS裸金属服务器
    * invocationId  任务id
    * invocationType  任务类型，INSTALL 安装，UPDATE 升级，ROLLBACK 回退
    * invocationTarget  任务对象，目前仅支持telescope
    * offset  分页偏移量
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'instanceName' => 'string',
            'instanceType' => 'string',
            'invocationId' => 'string',
            'invocationType' => 'string',
            'invocationTarget' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  主机id
    * instanceName  主机名称
    * instanceType  主机类型，ECS弹性云服务器，BMS裸金属服务器
    * invocationId  任务id
    * invocationType  任务类型，INSTALL 安装，UPDATE 升级，ROLLBACK 回退
    * invocationTarget  任务对象，目前仅支持telescope
    * offset  分页偏移量
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'instanceName' => null,
        'instanceType' => null,
        'invocationId' => null,
        'invocationType' => null,
        'invocationTarget' => null,
        'offset' => null,
        'limit' => null
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
    * instanceId  主机id
    * instanceName  主机名称
    * instanceType  主机类型，ECS弹性云服务器，BMS裸金属服务器
    * invocationId  任务id
    * invocationType  任务类型，INSTALL 安装，UPDATE 升级，ROLLBACK 回退
    * invocationTarget  任务对象，目前仅支持telescope
    * offset  分页偏移量
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'instanceType' => 'instance_type',
            'invocationId' => 'invocation_id',
            'invocationType' => 'invocation_type',
            'invocationTarget' => 'invocation_target',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  主机id
    * instanceName  主机名称
    * instanceType  主机类型，ECS弹性云服务器，BMS裸金属服务器
    * invocationId  任务id
    * invocationType  任务类型，INSTALL 安装，UPDATE 升级，ROLLBACK 回退
    * invocationTarget  任务对象，目前仅支持telescope
    * offset  分页偏移量
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'instanceType' => 'setInstanceType',
            'invocationId' => 'setInvocationId',
            'invocationType' => 'setInvocationType',
            'invocationTarget' => 'setInvocationTarget',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  主机id
    * instanceName  主机名称
    * instanceType  主机类型，ECS弹性云服务器，BMS裸金属服务器
    * invocationId  任务id
    * invocationType  任务类型，INSTALL 安装，UPDATE 升级，ROLLBACK 回退
    * invocationTarget  任务对象，目前仅支持telescope
    * offset  分页偏移量
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
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
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
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
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 1.";
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
    *  主机id
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
    * @param string|null $instanceId 主机id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  主机名称
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 主机名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets instanceType
    *  主机类型，ECS弹性云服务器，BMS裸金属服务器
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
    * @param string|null $instanceType 主机类型，ECS弹性云服务器，BMS裸金属服务器
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
    *  任务id
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
    * @param string|null $invocationId 任务id
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
    *  任务类型，INSTALL 安装，UPDATE 升级，ROLLBACK 回退
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
    * @param string|null $invocationType 任务类型，INSTALL 安装，UPDATE 升级，ROLLBACK 回退
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
    *  任务对象，目前仅支持telescope
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
    * @param string|null $invocationTarget 任务对象，目前仅支持telescope
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
    *  分页偏移量
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
    * @param int|null $offset 分页偏移量
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
    *  分页大小
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
    * @param int|null $limit 分页大小
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

