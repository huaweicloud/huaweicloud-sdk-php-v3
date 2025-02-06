<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PutCustomRoleToPermissionSetReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PutCustomRoleToPermissionSetReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customRole  要附加到权限集的自定义策略
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customRole' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customRole  要附加到权限集的自定义策略
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customRole' => null
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
    * customRole  要附加到权限集的自定义策略
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customRole' => 'custom_role'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customRole  要附加到权限集的自定义策略
    *
    * @var string[]
    */
    protected static $setters = [
            'customRole' => 'setCustomRole'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customRole  要附加到权限集的自定义策略
    *
    * @var string[]
    */
    protected static $getters = [
            'customRole' => 'getCustomRole'
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
        $this->container['customRole'] = isset($data['customRole']) ? $data['customRole'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['customRole'] === null) {
            $invalidProperties[] = "'customRole' can't be null";
        }
            if ((mb_strlen($this->container['customRole']) > 131072)) {
                $invalidProperties[] = "invalid value for 'customRole', the character length must be smaller than or equal to 131072.";
            }
            if ((mb_strlen($this->container['customRole']) < 1)) {
                $invalidProperties[] = "invalid value for 'customRole', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[\\u0009\\u000A\\u000D\\u0020-\\u00FF]+/", $this->container['customRole'])) {
                $invalidProperties[] = "invalid value for 'customRole', must be conform to the pattern /[\\u0009\\u000A\\u000D\\u0020-\\u00FF]+/.";
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
    * Gets customRole
    *  要附加到权限集的自定义策略
    *
    * @return string
    */
    public function getCustomRole()
    {
        return $this->container['customRole'];
    }

    /**
    * Sets customRole
    *
    * @param string $customRole 要附加到权限集的自定义策略
    *
    * @return $this
    */
    public function setCustomRole($customRole)
    {
        $this->container['customRole'] = $customRole;
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

