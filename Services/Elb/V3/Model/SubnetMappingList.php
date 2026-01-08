<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubnetMappingList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubnetMappingList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subnetCidrId  **参数解释**：源监听器下后端服务器所在VPC的子网ID。  **约束限制**：不涉及  **取值范围**：标准的UUID格式，长度为36个字符。  **默认取值**：不涉及
    * dstSubnetCidrId  **参数解释**：新监听器下后端服务器需要绑定的VPC子网ID。  **约束限制**：该VPC子网ID需要存在，且与源子网网段相同。  **取值范围**：标准的UUID格式，长度为36个字符。  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subnetCidrId' => 'string',
            'dstSubnetCidrId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subnetCidrId  **参数解释**：源监听器下后端服务器所在VPC的子网ID。  **约束限制**：不涉及  **取值范围**：标准的UUID格式，长度为36个字符。  **默认取值**：不涉及
    * dstSubnetCidrId  **参数解释**：新监听器下后端服务器需要绑定的VPC子网ID。  **约束限制**：该VPC子网ID需要存在，且与源子网网段相同。  **取值范围**：标准的UUID格式，长度为36个字符。  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subnetCidrId' => null,
        'dstSubnetCidrId' => null
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
    * subnetCidrId  **参数解释**：源监听器下后端服务器所在VPC的子网ID。  **约束限制**：不涉及  **取值范围**：标准的UUID格式，长度为36个字符。  **默认取值**：不涉及
    * dstSubnetCidrId  **参数解释**：新监听器下后端服务器需要绑定的VPC子网ID。  **约束限制**：该VPC子网ID需要存在，且与源子网网段相同。  **取值范围**：标准的UUID格式，长度为36个字符。  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subnetCidrId' => 'subnet_cidr_id',
            'dstSubnetCidrId' => 'dst_subnet_cidr_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subnetCidrId  **参数解释**：源监听器下后端服务器所在VPC的子网ID。  **约束限制**：不涉及  **取值范围**：标准的UUID格式，长度为36个字符。  **默认取值**：不涉及
    * dstSubnetCidrId  **参数解释**：新监听器下后端服务器需要绑定的VPC子网ID。  **约束限制**：该VPC子网ID需要存在，且与源子网网段相同。  **取值范围**：标准的UUID格式，长度为36个字符。  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'subnetCidrId' => 'setSubnetCidrId',
            'dstSubnetCidrId' => 'setDstSubnetCidrId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subnetCidrId  **参数解释**：源监听器下后端服务器所在VPC的子网ID。  **约束限制**：不涉及  **取值范围**：标准的UUID格式，长度为36个字符。  **默认取值**：不涉及
    * dstSubnetCidrId  **参数解释**：新监听器下后端服务器需要绑定的VPC子网ID。  **约束限制**：该VPC子网ID需要存在，且与源子网网段相同。  **取值范围**：标准的UUID格式，长度为36个字符。  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'subnetCidrId' => 'getSubnetCidrId',
            'dstSubnetCidrId' => 'getDstSubnetCidrId'
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
        $this->container['subnetCidrId'] = isset($data['subnetCidrId']) ? $data['subnetCidrId'] : null;
        $this->container['dstSubnetCidrId'] = isset($data['dstSubnetCidrId']) ? $data['dstSubnetCidrId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['subnetCidrId'] === null) {
            $invalidProperties[] = "'subnetCidrId' can't be null";
        }
            if ((mb_strlen($this->container['subnetCidrId']) > 36)) {
                $invalidProperties[] = "invalid value for 'subnetCidrId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['subnetCidrId']) < 1)) {
                $invalidProperties[] = "invalid value for 'subnetCidrId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['dstSubnetCidrId'] === null) {
            $invalidProperties[] = "'dstSubnetCidrId' can't be null";
        }
            if ((mb_strlen($this->container['dstSubnetCidrId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dstSubnetCidrId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['dstSubnetCidrId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dstSubnetCidrId', the character length must be bigger than or equal to 1.";
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
    * Gets subnetCidrId
    *  **参数解释**：源监听器下后端服务器所在VPC的子网ID。  **约束限制**：不涉及  **取值范围**：标准的UUID格式，长度为36个字符。  **默认取值**：不涉及
    *
    * @return string
    */
    public function getSubnetCidrId()
    {
        return $this->container['subnetCidrId'];
    }

    /**
    * Sets subnetCidrId
    *
    * @param string $subnetCidrId **参数解释**：源监听器下后端服务器所在VPC的子网ID。  **约束限制**：不涉及  **取值范围**：标准的UUID格式，长度为36个字符。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setSubnetCidrId($subnetCidrId)
    {
        $this->container['subnetCidrId'] = $subnetCidrId;
        return $this;
    }

    /**
    * Gets dstSubnetCidrId
    *  **参数解释**：新监听器下后端服务器需要绑定的VPC子网ID。  **约束限制**：该VPC子网ID需要存在，且与源子网网段相同。  **取值范围**：标准的UUID格式，长度为36个字符。  **默认取值**：不涉及
    *
    * @return string
    */
    public function getDstSubnetCidrId()
    {
        return $this->container['dstSubnetCidrId'];
    }

    /**
    * Sets dstSubnetCidrId
    *
    * @param string $dstSubnetCidrId **参数解释**：新监听器下后端服务器需要绑定的VPC子网ID。  **约束限制**：该VPC子网ID需要存在，且与源子网网段相同。  **取值范围**：标准的UUID格式，长度为36个字符。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setDstSubnetCidrId($dstSubnetCidrId)
    {
        $this->container['dstSubnetCidrId'] = $dstSubnetCidrId;
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

