<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PortalOptionsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PortalOptionsDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * visible  应用程序在门户是否可见
    * visibility  应用程序在门户可见性
    * signInOptions  signInOptions
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'visible' => 'bool',
            'visibility' => 'string',
            'signInOptions' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\SignInOptionsDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * visible  应用程序在门户是否可见
    * visibility  应用程序在门户可见性
    * signInOptions  signInOptions
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'visible' => null,
        'visibility' => null,
        'signInOptions' => null
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
    * visible  应用程序在门户是否可见
    * visibility  应用程序在门户可见性
    * signInOptions  signInOptions
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'visible' => 'visible',
            'visibility' => 'visibility',
            'signInOptions' => 'sign_in_options'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * visible  应用程序在门户是否可见
    * visibility  应用程序在门户可见性
    * signInOptions  signInOptions
    *
    * @var string[]
    */
    protected static $setters = [
            'visible' => 'setVisible',
            'visibility' => 'setVisibility',
            'signInOptions' => 'setSignInOptions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * visible  应用程序在门户是否可见
    * visibility  应用程序在门户可见性
    * signInOptions  signInOptions
    *
    * @var string[]
    */
    protected static $getters = [
            'visible' => 'getVisible',
            'visibility' => 'getVisibility',
            'signInOptions' => 'getSignInOptions'
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
    const VISIBILITY_ENABLED = 'ENABLED';
    const VISIBILITY_DISABLED = 'DISABLED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVisibilityAllowableValues()
    {
        return [
            self::VISIBILITY_ENABLED,
            self::VISIBILITY_DISABLED,
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
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['signInOptions'] = isset($data['signInOptions']) ? $data['signInOptions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getVisibilityAllowableValues();
                if (!is_null($this->container['visibility']) && !in_array($this->container['visibility'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'visibility', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets visible
    *  应用程序在门户是否可见
    *
    * @return bool|null
    */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
    * Sets visible
    *
    * @param bool|null $visible 应用程序在门户是否可见
    *
    * @return $this
    */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;
        return $this;
    }

    /**
    * Gets visibility
    *  应用程序在门户可见性
    *
    * @return string|null
    */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
    * Sets visibility
    *
    * @param string|null $visibility 应用程序在门户可见性
    *
    * @return $this
    */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;
        return $this;
    }

    /**
    * Gets signInOptions
    *  signInOptions
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\SignInOptionsDto|null
    */
    public function getSignInOptions()
    {
        return $this->container['signInOptions'];
    }

    /**
    * Sets signInOptions
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\SignInOptionsDto|null $signInOptions signInOptions
    *
    * @return $this
    */
    public function setSignInOptions($signInOptions)
    {
        $this->container['signInOptions'] = $signInOptions;
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

