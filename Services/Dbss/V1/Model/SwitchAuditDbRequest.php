<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchAuditDbRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchAuditDbRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  数据库ID,可在查询数据库列表接口的ID字段获取。
    * status  开关状态 - ON:开启 - OFF:关闭
    * ltsAuditSwitch  是否关闭LTS审计,DWS数据库场景使用。若用户未选择关闭LTS审计,则不做操作。 - 1 : 是 - 0 或 其它: 保持原状
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'ltsAuditSwitch' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  数据库ID,可在查询数据库列表接口的ID字段获取。
    * status  开关状态 - ON:开启 - OFF:关闭
    * ltsAuditSwitch  是否关闭LTS审计,DWS数据库场景使用。若用户未选择关闭LTS审计,则不做操作。 - 1 : 是 - 0 或 其它: 保持原状
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'ltsAuditSwitch' => 'int32'
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
    * id  数据库ID,可在查询数据库列表接口的ID字段获取。
    * status  开关状态 - ON:开启 - OFF:关闭
    * ltsAuditSwitch  是否关闭LTS审计,DWS数据库场景使用。若用户未选择关闭LTS审计,则不做操作。 - 1 : 是 - 0 或 其它: 保持原状
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'ltsAuditSwitch' => 'lts_audit_switch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  数据库ID,可在查询数据库列表接口的ID字段获取。
    * status  开关状态 - ON:开启 - OFF:关闭
    * ltsAuditSwitch  是否关闭LTS审计,DWS数据库场景使用。若用户未选择关闭LTS审计,则不做操作。 - 1 : 是 - 0 或 其它: 保持原状
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'ltsAuditSwitch' => 'setLtsAuditSwitch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  数据库ID,可在查询数据库列表接口的ID字段获取。
    * status  开关状态 - ON:开启 - OFF:关闭
    * ltsAuditSwitch  是否关闭LTS审计,DWS数据库场景使用。若用户未选择关闭LTS审计,则不做操作。 - 1 : 是 - 0 或 其它: 保持原状
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'ltsAuditSwitch' => 'getLtsAuditSwitch'
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
    const STATUS_ON = 'ON';
    const STATUS_OFF = 'OFF';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ON,
            self::STATUS_OFF,
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
        $this->container['ltsAuditSwitch'] = isset($data['ltsAuditSwitch']) ? $data['ltsAuditSwitch'] : null;
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
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    *  数据库ID,可在查询数据库列表接口的ID字段获取。
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
    * @param string $id 数据库ID,可在查询数据库列表接口的ID字段获取。
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
    *  开关状态 - ON:开启 - OFF:关闭
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 开关状态 - ON:开启 - OFF:关闭
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets ltsAuditSwitch
    *  是否关闭LTS审计,DWS数据库场景使用。若用户未选择关闭LTS审计,则不做操作。 - 1 : 是 - 0 或 其它: 保持原状
    *
    * @return int|null
    */
    public function getLtsAuditSwitch()
    {
        return $this->container['ltsAuditSwitch'];
    }

    /**
    * Sets ltsAuditSwitch
    *
    * @param int|null $ltsAuditSwitch 是否关闭LTS审计,DWS数据库场景使用。若用户未选择关闭LTS审计,则不做操作。 - 1 : 是 - 0 或 其它: 保持原状
    *
    * @return $this
    */
    public function setLtsAuditSwitch($ltsAuditSwitch)
    {
        $this->container['ltsAuditSwitch'] = $ltsAuditSwitch;
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

