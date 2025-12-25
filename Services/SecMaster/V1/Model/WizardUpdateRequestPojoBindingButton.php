<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WizardUpdateRequestPojoBindingButton implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WizardUpdateRequestPojo_binding_button';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * buttonId  按钮id
    * buttonName  按钮名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'buttonId' => 'string',
            'buttonName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * buttonId  按钮id
    * buttonName  按钮名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'buttonId' => null,
        'buttonName' => null
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
    * buttonId  按钮id
    * buttonName  按钮名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'buttonId' => 'button_id',
            'buttonName' => 'button_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * buttonId  按钮id
    * buttonName  按钮名称
    *
    * @var string[]
    */
    protected static $setters = [
            'buttonId' => 'setButtonId',
            'buttonName' => 'setButtonName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * buttonId  按钮id
    * buttonName  按钮名称
    *
    * @var string[]
    */
    protected static $getters = [
            'buttonId' => 'getButtonId',
            'buttonName' => 'getButtonName'
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
        $this->container['buttonId'] = isset($data['buttonId']) ? $data['buttonId'] : null;
        $this->container['buttonName'] = isset($data['buttonName']) ? $data['buttonName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['buttonId'] === null) {
            $invalidProperties[] = "'buttonId' can't be null";
        }
            if ((mb_strlen($this->container['buttonId']) > 256)) {
                $invalidProperties[] = "invalid value for 'buttonId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['buttonId']) < 1)) {
                $invalidProperties[] = "invalid value for 'buttonId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['buttonName']) && (mb_strlen($this->container['buttonName']) > 256)) {
                $invalidProperties[] = "invalid value for 'buttonName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['buttonName']) && (mb_strlen($this->container['buttonName']) < 1)) {
                $invalidProperties[] = "invalid value for 'buttonName', the character length must be bigger than or equal to 1.";
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
    * Gets buttonId
    *  按钮id
    *
    * @return string
    */
    public function getButtonId()
    {
        return $this->container['buttonId'];
    }

    /**
    * Sets buttonId
    *
    * @param string $buttonId 按钮id
    *
    * @return $this
    */
    public function setButtonId($buttonId)
    {
        $this->container['buttonId'] = $buttonId;
        return $this;
    }

    /**
    * Gets buttonName
    *  按钮名称
    *
    * @return string|null
    */
    public function getButtonName()
    {
        return $this->container['buttonName'];
    }

    /**
    * Sets buttonName
    *
    * @param string|null $buttonName 按钮名称
    *
    * @return $this
    */
    public function setButtonName($buttonName)
    {
        $this->container['buttonName'] = $buttonName;
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

