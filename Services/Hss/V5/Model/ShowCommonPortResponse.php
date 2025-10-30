<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCommonPortResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCommonPortResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * port  **参数解释** 端口号 **取值范围** 最小值1，最大值65535
    * type  **参数解释** 端口类型 **取值范围** - TCP：TCP协议 - UDP：UDP协议 - TCP6：TCP6协议 - UDP6：UDP6协议
    * status  **参数解释** 状态 **取值范围** - normal：正常 - danger：危险 - unknow：未知
    * description  **参数解释** 中文描述 **取值范围** 字符长度1-256
    * descriptionEn  **参数解释** 英文描述 **取值范围** 字符长度1-256
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'port' => 'int',
            'type' => 'string',
            'status' => 'string',
            'description' => 'string',
            'descriptionEn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * port  **参数解释** 端口号 **取值范围** 最小值1，最大值65535
    * type  **参数解释** 端口类型 **取值范围** - TCP：TCP协议 - UDP：UDP协议 - TCP6：TCP6协议 - UDP6：UDP6协议
    * status  **参数解释** 状态 **取值范围** - normal：正常 - danger：危险 - unknow：未知
    * description  **参数解释** 中文描述 **取值范围** 字符长度1-256
    * descriptionEn  **参数解释** 英文描述 **取值范围** 字符长度1-256
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'port' => 'int32',
        'type' => null,
        'status' => null,
        'description' => null,
        'descriptionEn' => null
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
    * port  **参数解释** 端口号 **取值范围** 最小值1，最大值65535
    * type  **参数解释** 端口类型 **取值范围** - TCP：TCP协议 - UDP：UDP协议 - TCP6：TCP6协议 - UDP6：UDP6协议
    * status  **参数解释** 状态 **取值范围** - normal：正常 - danger：危险 - unknow：未知
    * description  **参数解释** 中文描述 **取值范围** 字符长度1-256
    * descriptionEn  **参数解释** 英文描述 **取值范围** 字符长度1-256
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'port' => 'port',
            'type' => 'type',
            'status' => 'status',
            'description' => 'description',
            'descriptionEn' => 'description_en'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * port  **参数解释** 端口号 **取值范围** 最小值1，最大值65535
    * type  **参数解释** 端口类型 **取值范围** - TCP：TCP协议 - UDP：UDP协议 - TCP6：TCP6协议 - UDP6：UDP6协议
    * status  **参数解释** 状态 **取值范围** - normal：正常 - danger：危险 - unknow：未知
    * description  **参数解释** 中文描述 **取值范围** 字符长度1-256
    * descriptionEn  **参数解释** 英文描述 **取值范围** 字符长度1-256
    *
    * @var string[]
    */
    protected static $setters = [
            'port' => 'setPort',
            'type' => 'setType',
            'status' => 'setStatus',
            'description' => 'setDescription',
            'descriptionEn' => 'setDescriptionEn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * port  **参数解释** 端口号 **取值范围** 最小值1，最大值65535
    * type  **参数解释** 端口类型 **取值范围** - TCP：TCP协议 - UDP：UDP协议 - TCP6：TCP6协议 - UDP6：UDP6协议
    * status  **参数解释** 状态 **取值范围** - normal：正常 - danger：危险 - unknow：未知
    * description  **参数解释** 中文描述 **取值范围** 字符长度1-256
    * descriptionEn  **参数解释** 英文描述 **取值范围** 字符长度1-256
    *
    * @var string[]
    */
    protected static $getters = [
            'port' => 'getPort',
            'type' => 'getType',
            'status' => 'getStatus',
            'description' => 'getDescription',
            'descriptionEn' => 'getDescriptionEn'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['descriptionEn'] = isset($data['descriptionEn']) ? $data['descriptionEn'] : null;
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
            if (!is_null($this->container['port']) && ($this->container['port'] < 1)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 256)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 256)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['descriptionEn']) && (mb_strlen($this->container['descriptionEn']) > 256)) {
                $invalidProperties[] = "invalid value for 'descriptionEn', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['descriptionEn']) && (mb_strlen($this->container['descriptionEn']) < 1)) {
                $invalidProperties[] = "invalid value for 'descriptionEn', the character length must be bigger than or equal to 1.";
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
    *  **参数解释** 端口号 **取值范围** 最小值1，最大值65535
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
    * @param int|null $port **参数解释** 端口号 **取值范围** 最小值1，最大值65535
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
    *  **参数解释** 端口类型 **取值范围** - TCP：TCP协议 - UDP：UDP协议 - TCP6：TCP6协议 - UDP6：UDP6协议
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
    * @param string|null $type **参数解释** 端口类型 **取值范围** - TCP：TCP协议 - UDP：UDP协议 - TCP6：TCP6协议 - UDP6：UDP6协议
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
    *  **参数解释** 状态 **取值范围** - normal：正常 - danger：危险 - unknow：未知
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
    * @param string|null $status **参数解释** 状态 **取值范围** - normal：正常 - danger：危险 - unknow：未知
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释** 中文描述 **取值范围** 字符长度1-256
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释** 中文描述 **取值范围** 字符长度1-256
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets descriptionEn
    *  **参数解释** 英文描述 **取值范围** 字符长度1-256
    *
    * @return string|null
    */
    public function getDescriptionEn()
    {
        return $this->container['descriptionEn'];
    }

    /**
    * Sets descriptionEn
    *
    * @param string|null $descriptionEn **参数解释** 英文描述 **取值范围** 字符长度1-256
    *
    * @return $this
    */
    public function setDescriptionEn($descriptionEn)
    {
        $this->container['descriptionEn'] = $descriptionEn;
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

