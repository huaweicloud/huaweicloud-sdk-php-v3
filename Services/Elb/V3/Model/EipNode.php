<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EipNode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EipNode';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：不涉及EIP id。  **取值范围**：不涉及
    * ipAddress  **参数解释**：EIP地址。  **取值范围**：不涉及
    * ipVersion  **参数解释**：EIP 地址类型。  **取值范围**：不涉及 - 4：ipv4。 - 6：ipv6
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'ipAddress' => 'string',
            'ipVersion' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：不涉及EIP id。  **取值范围**：不涉及
    * ipAddress  **参数解释**：EIP地址。  **取值范围**：不涉及
    * ipVersion  **参数解释**：EIP 地址类型。  **取值范围**：不涉及 - 4：ipv4。 - 6：ipv6
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'ipAddress' => null,
        'ipVersion' => 'int32'
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
    * id  **参数解释**：不涉及EIP id。  **取值范围**：不涉及
    * ipAddress  **参数解释**：EIP地址。  **取值范围**：不涉及
    * ipVersion  **参数解释**：EIP 地址类型。  **取值范围**：不涉及 - 4：ipv4。 - 6：ipv6
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'ipAddress' => 'ip_address',
            'ipVersion' => 'ip_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：不涉及EIP id。  **取值范围**：不涉及
    * ipAddress  **参数解释**：EIP地址。  **取值范围**：不涉及
    * ipVersion  **参数解释**：EIP 地址类型。  **取值范围**：不涉及 - 4：ipv4。 - 6：ipv6
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'ipAddress' => 'setIpAddress',
            'ipVersion' => 'setIpVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：不涉及EIP id。  **取值范围**：不涉及
    * ipAddress  **参数解释**：EIP地址。  **取值范围**：不涉及
    * ipVersion  **参数解释**：EIP 地址类型。  **取值范围**：不涉及 - 4：ipv4。 - 6：ipv6
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'ipAddress' => 'getIpAddress',
            'ipVersion' => 'getIpVersion'
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
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
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
        if ($this->container['ipAddress'] === null) {
            $invalidProperties[] = "'ipAddress' can't be null";
        }
        if ($this->container['ipVersion'] === null) {
            $invalidProperties[] = "'ipVersion' can't be null";
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
    *  **参数解释**：不涉及EIP id。  **取值范围**：不涉及
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
    * @param string $id **参数解释**：不涉及EIP id。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ipAddress
    *  **参数解释**：EIP地址。  **取值范围**：不涉及
    *
    * @return string
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string $ipAddress **参数解释**：EIP地址。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets ipVersion
    *  **参数解释**：EIP 地址类型。  **取值范围**：不涉及 - 4：ipv4。 - 6：ipv6
    *
    * @return int
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int $ipVersion **参数解释**：EIP 地址类型。  **取值范围**：不涉及 - 4：ipv4。 - 6：ipv6
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
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

