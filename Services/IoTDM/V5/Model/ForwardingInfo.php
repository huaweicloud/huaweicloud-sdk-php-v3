<?php

namespace HuaweiCloud\SDK\IoTDM\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ForwardingInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ForwardingInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eip  **参数说明**：NAT网关绑定的EIP。
    * enableSnat  **参数说明**：是否启用SNAT配置。 **取值范围**： - true: SNAT配置已启用 - false: SNAT配置未启用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eip' => 'string',
            'enableSnat' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eip  **参数说明**：NAT网关绑定的EIP。
    * enableSnat  **参数说明**：是否启用SNAT配置。 **取值范围**： - true: SNAT配置已启用 - false: SNAT配置未启用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eip' => null,
        'enableSnat' => null
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
    * eip  **参数说明**：NAT网关绑定的EIP。
    * enableSnat  **参数说明**：是否启用SNAT配置。 **取值范围**： - true: SNAT配置已启用 - false: SNAT配置未启用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eip' => 'eip',
            'enableSnat' => 'enable_snat'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eip  **参数说明**：NAT网关绑定的EIP。
    * enableSnat  **参数说明**：是否启用SNAT配置。 **取值范围**： - true: SNAT配置已启用 - false: SNAT配置未启用
    *
    * @var string[]
    */
    protected static $setters = [
            'eip' => 'setEip',
            'enableSnat' => 'setEnableSnat'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eip  **参数说明**：NAT网关绑定的EIP。
    * enableSnat  **参数说明**：是否启用SNAT配置。 **取值范围**： - true: SNAT配置已启用 - false: SNAT配置未启用
    *
    * @var string[]
    */
    protected static $getters = [
            'eip' => 'getEip',
            'enableSnat' => 'getEnableSnat'
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
        $this->container['eip'] = isset($data['eip']) ? $data['eip'] : null;
        $this->container['enableSnat'] = isset($data['enableSnat']) ? $data['enableSnat'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['eip']) && (mb_strlen($this->container['eip']) > 128)) {
                $invalidProperties[] = "invalid value for 'eip', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['eip']) && (mb_strlen($this->container['eip']) < 7)) {
                $invalidProperties[] = "invalid value for 'eip', the character length must be bigger than or equal to 7.";
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
    * Gets eip
    *  **参数说明**：NAT网关绑定的EIP。
    *
    * @return string|null
    */
    public function getEip()
    {
        return $this->container['eip'];
    }

    /**
    * Sets eip
    *
    * @param string|null $eip **参数说明**：NAT网关绑定的EIP。
    *
    * @return $this
    */
    public function setEip($eip)
    {
        $this->container['eip'] = $eip;
        return $this;
    }

    /**
    * Gets enableSnat
    *  **参数说明**：是否启用SNAT配置。 **取值范围**： - true: SNAT配置已启用 - false: SNAT配置未启用
    *
    * @return bool|null
    */
    public function getEnableSnat()
    {
        return $this->container['enableSnat'];
    }

    /**
    * Sets enableSnat
    *
    * @param bool|null $enableSnat **参数说明**：是否启用SNAT配置。 **取值范围**： - true: SNAT配置已启用 - false: SNAT配置未启用
    *
    * @return $this
    */
    public function setEnableSnat($enableSnat)
    {
        $this->container['enableSnat'] = $enableSnat;
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

