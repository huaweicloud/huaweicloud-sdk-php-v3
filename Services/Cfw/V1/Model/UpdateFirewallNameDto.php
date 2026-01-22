<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateFirewallNameDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateFirewallNameDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fwInstanceName  **参数解释**： 防火墙名称 **约束限制**： 防火墙名称为中英文，包含数字，下划线，中划线，长度为1-48 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fwInstanceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fwInstanceName  **参数解释**： 防火墙名称 **约束限制**： 防火墙名称为中英文，包含数字，下划线，中划线，长度为1-48 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fwInstanceName' => null
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
    * fwInstanceName  **参数解释**： 防火墙名称 **约束限制**： 防火墙名称为中英文，包含数字，下划线，中划线，长度为1-48 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fwInstanceName' => 'fw_instance_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fwInstanceName  **参数解释**： 防火墙名称 **约束限制**： 防火墙名称为中英文，包含数字，下划线，中划线，长度为1-48 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'fwInstanceName' => 'setFwInstanceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fwInstanceName  **参数解释**： 防火墙名称 **约束限制**： 防火墙名称为中英文，包含数字，下划线，中划线，长度为1-48 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'fwInstanceName' => 'getFwInstanceName'
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
        $this->container['fwInstanceName'] = isset($data['fwInstanceName']) ? $data['fwInstanceName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fwInstanceName'] === null) {
            $invalidProperties[] = "'fwInstanceName' can't be null";
        }
            if (!preg_match("/^$|^[a-zA-Z0-9\\u4e00-\\u9FA5_-]{1,48}/", $this->container['fwInstanceName'])) {
                $invalidProperties[] = "invalid value for 'fwInstanceName', must be conform to the pattern /^$|^[a-zA-Z0-9\\u4e00-\\u9FA5_-]{1,48}/.";
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
    * Gets fwInstanceName
    *  **参数解释**： 防火墙名称 **约束限制**： 防火墙名称为中英文，包含数字，下划线，中划线，长度为1-48 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getFwInstanceName()
    {
        return $this->container['fwInstanceName'];
    }

    /**
    * Sets fwInstanceName
    *
    * @param string $fwInstanceName **参数解释**： 防火墙名称 **约束限制**： 防火墙名称为中英文，包含数字，下划线，中划线，长度为1-48 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setFwInstanceName($fwInstanceName)
    {
        $this->container['fwInstanceName'] = $fwInstanceName;
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

