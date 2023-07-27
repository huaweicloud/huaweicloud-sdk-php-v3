<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServersInfoType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServersInfoType';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  重启类型：SOFT：普通重启（不生效）。HARD：强制重启（默认）。
    * servers  裸金属服务器ID列表，详情请参见表3 servers字段数据结构说明。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'servers' => '\HuaweiCloud\SDK\Bms\V1\Model\ServersList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  重启类型：SOFT：普通重启（不生效）。HARD：强制重启（默认）。
    * servers  裸金属服务器ID列表，详情请参见表3 servers字段数据结构说明。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'servers' => null
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
    * type  重启类型：SOFT：普通重启（不生效）。HARD：强制重启（默认）。
    * servers  裸金属服务器ID列表，详情请参见表3 servers字段数据结构说明。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'servers' => 'servers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  重启类型：SOFT：普通重启（不生效）。HARD：强制重启（默认）。
    * servers  裸金属服务器ID列表，详情请参见表3 servers字段数据结构说明。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'servers' => 'setServers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  重启类型：SOFT：普通重启（不生效）。HARD：强制重启（默认）。
    * servers  裸金属服务器ID列表，详情请参见表3 servers字段数据结构说明。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'servers' => 'getServers'
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
    const TYPE_SOFT = 'SOFT';
    const TYPE_HARD = 'HARD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SOFT,
            self::TYPE_HARD,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['servers'] = isset($data['servers']) ? $data['servers'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['servers'] === null) {
            $invalidProperties[] = "'servers' can't be null";
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
    * Gets type
    *  重启类型：SOFT：普通重启（不生效）。HARD：强制重启（默认）。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 重启类型：SOFT：普通重启（不生效）。HARD：强制重启（默认）。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets servers
    *  裸金属服务器ID列表，详情请参见表3 servers字段数据结构说明。
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\ServersList[]
    */
    public function getServers()
    {
        return $this->container['servers'];
    }

    /**
    * Sets servers
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\ServersList[] $servers 裸金属服务器ID列表，详情请参见表3 servers字段数据结构说明。
    *
    * @return $this
    */
    public function setServers($servers)
    {
        $this->container['servers'] = $servers;
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

