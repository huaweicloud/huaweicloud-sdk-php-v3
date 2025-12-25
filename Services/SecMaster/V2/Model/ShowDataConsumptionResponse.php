<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDataConsumptionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDataConsumptionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tableName  表名称
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * pipeName  管道名称
    * status  **参数解释**: 状态 - ENABLED 启用 - DISABLED 禁用  **约束限制** 不涉及 **取值范围**: - ENABLED - DISABLED  **默认值** 不涉及
    * type  **参数解释**: 网络类型 - INTERNET 互联网 - INTRANET 内联网  **约束限制** 不涉及 **取值范围**: - INTERNET - INTRANET  **默认值** 不涉及
    * accessPoint  接入点域名信息(格式：{dataspace}.{endpoint})
    * subscription  订阅名称
    * tableId  表Id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tableName' => 'string',
            'dataspaceId' => 'string',
            'pipeId' => 'string',
            'pipeName' => 'string',
            'status' => 'string',
            'type' => 'string',
            'accessPoint' => 'string',
            'subscription' => 'string',
            'tableId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tableName  表名称
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * pipeName  管道名称
    * status  **参数解释**: 状态 - ENABLED 启用 - DISABLED 禁用  **约束限制** 不涉及 **取值范围**: - ENABLED - DISABLED  **默认值** 不涉及
    * type  **参数解释**: 网络类型 - INTERNET 互联网 - INTRANET 内联网  **约束限制** 不涉及 **取值范围**: - INTERNET - INTRANET  **默认值** 不涉及
    * accessPoint  接入点域名信息(格式：{dataspace}.{endpoint})
    * subscription  订阅名称
    * tableId  表Id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tableName' => null,
        'dataspaceId' => null,
        'pipeId' => null,
        'pipeName' => null,
        'status' => null,
        'type' => null,
        'accessPoint' => null,
        'subscription' => null,
        'tableId' => null
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
    * tableName  表名称
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * pipeName  管道名称
    * status  **参数解释**: 状态 - ENABLED 启用 - DISABLED 禁用  **约束限制** 不涉及 **取值范围**: - ENABLED - DISABLED  **默认值** 不涉及
    * type  **参数解释**: 网络类型 - INTERNET 互联网 - INTRANET 内联网  **约束限制** 不涉及 **取值范围**: - INTERNET - INTRANET  **默认值** 不涉及
    * accessPoint  接入点域名信息(格式：{dataspace}.{endpoint})
    * subscription  订阅名称
    * tableId  表Id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tableName' => 'table_name',
            'dataspaceId' => 'dataspace_id',
            'pipeId' => 'pipe_id',
            'pipeName' => 'pipe_name',
            'status' => 'status',
            'type' => 'type',
            'accessPoint' => 'access_point',
            'subscription' => 'subscription',
            'tableId' => 'table_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tableName  表名称
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * pipeName  管道名称
    * status  **参数解释**: 状态 - ENABLED 启用 - DISABLED 禁用  **约束限制** 不涉及 **取值范围**: - ENABLED - DISABLED  **默认值** 不涉及
    * type  **参数解释**: 网络类型 - INTERNET 互联网 - INTRANET 内联网  **约束限制** 不涉及 **取值范围**: - INTERNET - INTRANET  **默认值** 不涉及
    * accessPoint  接入点域名信息(格式：{dataspace}.{endpoint})
    * subscription  订阅名称
    * tableId  表Id
    *
    * @var string[]
    */
    protected static $setters = [
            'tableName' => 'setTableName',
            'dataspaceId' => 'setDataspaceId',
            'pipeId' => 'setPipeId',
            'pipeName' => 'setPipeName',
            'status' => 'setStatus',
            'type' => 'setType',
            'accessPoint' => 'setAccessPoint',
            'subscription' => 'setSubscription',
            'tableId' => 'setTableId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tableName  表名称
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * pipeName  管道名称
    * status  **参数解释**: 状态 - ENABLED 启用 - DISABLED 禁用  **约束限制** 不涉及 **取值范围**: - ENABLED - DISABLED  **默认值** 不涉及
    * type  **参数解释**: 网络类型 - INTERNET 互联网 - INTRANET 内联网  **约束限制** 不涉及 **取值范围**: - INTERNET - INTRANET  **默认值** 不涉及
    * accessPoint  接入点域名信息(格式：{dataspace}.{endpoint})
    * subscription  订阅名称
    * tableId  表Id
    *
    * @var string[]
    */
    protected static $getters = [
            'tableName' => 'getTableName',
            'dataspaceId' => 'getDataspaceId',
            'pipeId' => 'getPipeId',
            'pipeName' => 'getPipeName',
            'status' => 'getStatus',
            'type' => 'getType',
            'accessPoint' => 'getAccessPoint',
            'subscription' => 'getSubscription',
            'tableId' => 'getTableId'
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
    const STATUS_ENABLED = 'ENABLED';
    const STATUS_DISABLED = 'DISABLED';
    const TYPE_INTERNET = 'INTERNET';
    const TYPE_INTRANET = 'INTRANET';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLED,
            self::STATUS_DISABLED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INTERNET,
            self::TYPE_INTRANET,
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
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['dataspaceId'] = isset($data['dataspaceId']) ? $data['dataspaceId'] : null;
        $this->container['pipeId'] = isset($data['pipeId']) ? $data['pipeId'] : null;
        $this->container['pipeName'] = isset($data['pipeName']) ? $data['pipeName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['accessPoint'] = isset($data['accessPoint']) ? $data['accessPoint'] : null;
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        $this->container['tableId'] = isset($data['tableId']) ? $data['tableId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) > 64)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tableName']) && !preg_match("/^(?!_)[a-zA-Z][a-zA-Z0-9_]*(?<!_)$/", $this->container['tableName'])) {
                $invalidProperties[] = "invalid value for 'tableName', must be conform to the pattern /^(?!_)[a-zA-Z][a-zA-Z0-9_]*(?<!_)$/.";
            }
            if (!is_null($this->container['dataspaceId']) && (mb_strlen($this->container['dataspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['dataspaceId']) && (mb_strlen($this->container['dataspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) < 0)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pipeName']) && (mb_strlen($this->container['pipeName']) > 256)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['pipeName']) && (mb_strlen($this->container['pipeName']) < 1)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['accessPoint']) && (mb_strlen($this->container['accessPoint']) > 255)) {
                $invalidProperties[] = "invalid value for 'accessPoint', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['accessPoint']) && (mb_strlen($this->container['accessPoint']) < 1)) {
                $invalidProperties[] = "invalid value for 'accessPoint', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['subscription']) && (mb_strlen($this->container['subscription']) > 63)) {
                $invalidProperties[] = "invalid value for 'subscription', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['subscription']) && (mb_strlen($this->container['subscription']) < 5)) {
                $invalidProperties[] = "invalid value for 'subscription', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['tableId']) && (mb_strlen($this->container['tableId']) > 32)) {
                $invalidProperties[] = "invalid value for 'tableId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['tableId']) && (mb_strlen($this->container['tableId']) < 0)) {
                $invalidProperties[] = "invalid value for 'tableId', the character length must be bigger than or equal to 0.";
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
    * Gets tableName
    *  表名称
    *
    * @return string|null
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string|null $tableName 表名称
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets dataspaceId
    *  数据空间ID
    *
    * @return string|null
    */
    public function getDataspaceId()
    {
        return $this->container['dataspaceId'];
    }

    /**
    * Sets dataspaceId
    *
    * @param string|null $dataspaceId 数据空间ID
    *
    * @return $this
    */
    public function setDataspaceId($dataspaceId)
    {
        $this->container['dataspaceId'] = $dataspaceId;
        return $this;
    }

    /**
    * Gets pipeId
    *  管道ID
    *
    * @return string|null
    */
    public function getPipeId()
    {
        return $this->container['pipeId'];
    }

    /**
    * Sets pipeId
    *
    * @param string|null $pipeId 管道ID
    *
    * @return $this
    */
    public function setPipeId($pipeId)
    {
        $this->container['pipeId'] = $pipeId;
        return $this;
    }

    /**
    * Gets pipeName
    *  管道名称
    *
    * @return string|null
    */
    public function getPipeName()
    {
        return $this->container['pipeName'];
    }

    /**
    * Sets pipeName
    *
    * @param string|null $pipeName 管道名称
    *
    * @return $this
    */
    public function setPipeName($pipeName)
    {
        $this->container['pipeName'] = $pipeName;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 状态 - ENABLED 启用 - DISABLED 禁用  **约束限制** 不涉及 **取值范围**: - ENABLED - DISABLED  **默认值** 不涉及
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
    * @param string|null $status **参数解释**: 状态 - ENABLED 启用 - DISABLED 禁用  **约束限制** 不涉及 **取值范围**: - ENABLED - DISABLED  **默认值** 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 网络类型 - INTERNET 互联网 - INTRANET 内联网  **约束限制** 不涉及 **取值范围**: - INTERNET - INTRANET  **默认值** 不涉及
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**: 网络类型 - INTERNET 互联网 - INTRANET 内联网  **约束限制** 不涉及 **取值范围**: - INTERNET - INTRANET  **默认值** 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets accessPoint
    *  接入点域名信息(格式：{dataspace}.{endpoint})
    *
    * @return string|null
    */
    public function getAccessPoint()
    {
        return $this->container['accessPoint'];
    }

    /**
    * Sets accessPoint
    *
    * @param string|null $accessPoint 接入点域名信息(格式：{dataspace}.{endpoint})
    *
    * @return $this
    */
    public function setAccessPoint($accessPoint)
    {
        $this->container['accessPoint'] = $accessPoint;
        return $this;
    }

    /**
    * Gets subscription
    *  订阅名称
    *
    * @return string|null
    */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
    * Sets subscription
    *
    * @param string|null $subscription 订阅名称
    *
    * @return $this
    */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;
        return $this;
    }

    /**
    * Gets tableId
    *  表Id
    *
    * @return string|null
    */
    public function getTableId()
    {
        return $this->container['tableId'];
    }

    /**
    * Sets tableId
    *
    * @param string|null $tableId 表Id
    *
    * @return $this
    */
    public function setTableId($tableId)
    {
        $this->container['tableId'] = $tableId;
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

