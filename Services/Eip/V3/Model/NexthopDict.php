<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NexthopDict implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NexthopDict';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ipAddress  功能说明：下一跳的实际地址  约束：同一virtualnexthop中的nexthops列表，不同下一跳之间的地址不允许重复
    * mode  功能说明：标识主备模式，与virtualnexthop的forward_mode配合使用  取值范围：'ACTIVE'主、'STANDBY'备
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ipAddress' => 'string',
            'mode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ipAddress  功能说明：下一跳的实际地址  约束：同一virtualnexthop中的nexthops列表，不同下一跳之间的地址不允许重复
    * mode  功能说明：标识主备模式，与virtualnexthop的forward_mode配合使用  取值范围：'ACTIVE'主、'STANDBY'备
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ipAddress' => null,
        'mode' => null
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
    * ipAddress  功能说明：下一跳的实际地址  约束：同一virtualnexthop中的nexthops列表，不同下一跳之间的地址不允许重复
    * mode  功能说明：标识主备模式，与virtualnexthop的forward_mode配合使用  取值范围：'ACTIVE'主、'STANDBY'备
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ipAddress' => 'ip_address',
            'mode' => 'mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ipAddress  功能说明：下一跳的实际地址  约束：同一virtualnexthop中的nexthops列表，不同下一跳之间的地址不允许重复
    * mode  功能说明：标识主备模式，与virtualnexthop的forward_mode配合使用  取值范围：'ACTIVE'主、'STANDBY'备
    *
    * @var string[]
    */
    protected static $setters = [
            'ipAddress' => 'setIpAddress',
            'mode' => 'setMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ipAddress  功能说明：下一跳的实际地址  约束：同一virtualnexthop中的nexthops列表，不同下一跳之间的地址不允许重复
    * mode  功能说明：标识主备模式，与virtualnexthop的forward_mode配合使用  取值范围：'ACTIVE'主、'STANDBY'备
    *
    * @var string[]
    */
    protected static $getters = [
            'ipAddress' => 'getIpAddress',
            'mode' => 'getMode'
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
    const MODE_ACTIVE = 'ACTIVE';
    const MODE_STANDBY = 'STANDBY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_ACTIVE,
            self::MODE_STANDBY,
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
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ipAddress']) && (mb_strlen($this->container['ipAddress']) > 256)) {
                $invalidProperties[] = "invalid value for 'ipAddress', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['ipAddress']) && (mb_strlen($this->container['ipAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipAddress', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['mode']) && (mb_strlen($this->container['mode']) > 256)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['mode']) && (mb_strlen($this->container['mode']) < 0)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be bigger than or equal to 0.";
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
    * Gets ipAddress
    *  功能说明：下一跳的实际地址  约束：同一virtualnexthop中的nexthops列表，不同下一跳之间的地址不允许重复
    *
    * @return string|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string|null $ipAddress 功能说明：下一跳的实际地址  约束：同一virtualnexthop中的nexthops列表，不同下一跳之间的地址不允许重复
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets mode
    *  功能说明：标识主备模式，与virtualnexthop的forward_mode配合使用  取值范围：'ACTIVE'主、'STANDBY'备
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 功能说明：标识主备模式，与virtualnexthop的forward_mode配合使用  取值范围：'ACTIVE'主、'STANDBY'备
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
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

