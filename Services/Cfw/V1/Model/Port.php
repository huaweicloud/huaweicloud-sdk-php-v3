<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Port implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Port';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * portType  **参数解释**： 端口类型 **取值范围**： -1 Any，0 包含，1 排除
    * ports  **参数解释**： 端口 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'portType' => 'int',
            'ports' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * portType  **参数解释**： 端口类型 **取值范围**： -1 Any，0 包含，1 排除
    * ports  **参数解释**： 端口 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'portType' => 'int32',
        'ports' => null
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
    * portType  **参数解释**： 端口类型 **取值范围**： -1 Any，0 包含，1 排除
    * ports  **参数解释**： 端口 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'portType' => 'port_type',
            'ports' => 'ports'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * portType  **参数解释**： 端口类型 **取值范围**： -1 Any，0 包含，1 排除
    * ports  **参数解释**： 端口 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'portType' => 'setPortType',
            'ports' => 'setPorts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * portType  **参数解释**： 端口类型 **取值范围**： -1 Any，0 包含，1 排除
    * ports  **参数解释**： 端口 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'portType' => 'getPortType',
            'ports' => 'getPorts'
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
        $this->container['portType'] = isset($data['portType']) ? $data['portType'] : null;
        $this->container['ports'] = isset($data['ports']) ? $data['ports'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['portType']) && ($this->container['portType'] > 1)) {
                $invalidProperties[] = "invalid value for 'portType', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['portType']) && ($this->container['portType'] < -1)) {
                $invalidProperties[] = "invalid value for 'portType', must be bigger than or equal to -1.";
            }
            if (!is_null($this->container['ports']) && (mb_strlen($this->container['ports']) > 65535)) {
                $invalidProperties[] = "invalid value for 'ports', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['ports']) && (mb_strlen($this->container['ports']) < 1)) {
                $invalidProperties[] = "invalid value for 'ports', the character length must be bigger than or equal to 1.";
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
    * Gets portType
    *  **参数解释**： 端口类型 **取值范围**： -1 Any，0 包含，1 排除
    *
    * @return int|null
    */
    public function getPortType()
    {
        return $this->container['portType'];
    }

    /**
    * Sets portType
    *
    * @param int|null $portType **参数解释**： 端口类型 **取值范围**： -1 Any，0 包含，1 排除
    *
    * @return $this
    */
    public function setPortType($portType)
    {
        $this->container['portType'] = $portType;
        return $this;
    }

    /**
    * Gets ports
    *  **参数解释**： 端口 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getPorts()
    {
        return $this->container['ports'];
    }

    /**
    * Sets ports
    *
    * @param string|null $ports **参数解释**： 端口 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPorts($ports)
    {
        $this->container['ports'] = $ports;
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

