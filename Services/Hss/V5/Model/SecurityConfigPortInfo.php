<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityConfigPortInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityConfigPortInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * port  **参数解释**： 端口号 **取值范围**： 0-65535
    * type  **参数解释**： 类型 **取值范围**： 不涉及
    * status  **参数解释**： 端口危险程度 **取值范围**： - normal：正常端口 - danger：危险端口 - unknow：未知端口
    * portStatus  **参数解释**： 端口状态 **取值范围**： - 0：未处理 - 1：已忽略 - 2：无需处理
    * portDesc  **参数解释**： 端口描述 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'port' => 'int',
            'type' => 'string',
            'status' => 'string',
            'portStatus' => 'int',
            'portDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * port  **参数解释**： 端口号 **取值范围**： 0-65535
    * type  **参数解释**： 类型 **取值范围**： 不涉及
    * status  **参数解释**： 端口危险程度 **取值范围**： - normal：正常端口 - danger：危险端口 - unknow：未知端口
    * portStatus  **参数解释**： 端口状态 **取值范围**： - 0：未处理 - 1：已忽略 - 2：无需处理
    * portDesc  **参数解释**： 端口描述 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'port' => null,
        'type' => null,
        'status' => null,
        'portStatus' => null,
        'portDesc' => null
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
    * port  **参数解释**： 端口号 **取值范围**： 0-65535
    * type  **参数解释**： 类型 **取值范围**： 不涉及
    * status  **参数解释**： 端口危险程度 **取值范围**： - normal：正常端口 - danger：危险端口 - unknow：未知端口
    * portStatus  **参数解释**： 端口状态 **取值范围**： - 0：未处理 - 1：已忽略 - 2：无需处理
    * portDesc  **参数解释**： 端口描述 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'port' => 'port',
            'type' => 'type',
            'status' => 'status',
            'portStatus' => 'port_status',
            'portDesc' => 'port_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * port  **参数解释**： 端口号 **取值范围**： 0-65535
    * type  **参数解释**： 类型 **取值范围**： 不涉及
    * status  **参数解释**： 端口危险程度 **取值范围**： - normal：正常端口 - danger：危险端口 - unknow：未知端口
    * portStatus  **参数解释**： 端口状态 **取值范围**： - 0：未处理 - 1：已忽略 - 2：无需处理
    * portDesc  **参数解释**： 端口描述 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'port' => 'setPort',
            'type' => 'setType',
            'status' => 'setStatus',
            'portStatus' => 'setPortStatus',
            'portDesc' => 'setPortDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * port  **参数解释**： 端口号 **取值范围**： 0-65535
    * type  **参数解释**： 类型 **取值范围**： 不涉及
    * status  **参数解释**： 端口危险程度 **取值范围**： - normal：正常端口 - danger：危险端口 - unknow：未知端口
    * portStatus  **参数解释**： 端口状态 **取值范围**： - 0：未处理 - 1：已忽略 - 2：无需处理
    * portDesc  **参数解释**： 端口描述 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'port' => 'getPort',
            'type' => 'getType',
            'status' => 'getStatus',
            'portStatus' => 'getPortStatus',
            'portDesc' => 'getPortDesc'
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
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['portStatus'] = isset($data['portStatus']) ? $data['portStatus'] : null;
        $this->container['portDesc'] = isset($data['portDesc']) ? $data['portDesc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['port']) && ($this->container['port'] > 65535)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] < 0)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 0.";
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
    * Gets port
    *  **参数解释**： 端口号 **取值范围**： 0-65535
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port **参数解释**： 端口号 **取值范围**： 0-65535
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 类型 **取值范围**： 不涉及
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
    * @param string|null $type **参数解释**： 类型 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 端口危险程度 **取值范围**： - normal：正常端口 - danger：危险端口 - unknow：未知端口
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
    * @param string|null $status **参数解释**： 端口危险程度 **取值范围**： - normal：正常端口 - danger：危险端口 - unknow：未知端口
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets portStatus
    *  **参数解释**： 端口状态 **取值范围**： - 0：未处理 - 1：已忽略 - 2：无需处理
    *
    * @return int|null
    */
    public function getPortStatus()
    {
        return $this->container['portStatus'];
    }

    /**
    * Sets portStatus
    *
    * @param int|null $portStatus **参数解释**： 端口状态 **取值范围**： - 0：未处理 - 1：已忽略 - 2：无需处理
    *
    * @return $this
    */
    public function setPortStatus($portStatus)
    {
        $this->container['portStatus'] = $portStatus;
        return $this;
    }

    /**
    * Gets portDesc
    *  **参数解释**： 端口描述 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getPortDesc()
    {
        return $this->container['portDesc'];
    }

    /**
    * Sets portDesc
    *
    * @param string|null $portDesc **参数解释**： 端口描述 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPortDesc($portDesc)
    {
        $this->container['portDesc'] = $portDesc;
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

