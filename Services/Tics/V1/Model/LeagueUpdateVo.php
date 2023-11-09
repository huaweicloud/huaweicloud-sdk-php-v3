<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LeagueUpdateVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LeagueUpdateVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  描述
    * dpEnabled  差分隐私开关
    * privacyProtectionType  隐私保护类别，HIGH.高，STANDARD.标准
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'dpEnabled' => 'bool',
            'privacyProtectionType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  描述
    * dpEnabled  差分隐私开关
    * privacyProtectionType  隐私保护类别，HIGH.高，STANDARD.标准
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'dpEnabled' => null,
        'privacyProtectionType' => null
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
    * description  描述
    * dpEnabled  差分隐私开关
    * privacyProtectionType  隐私保护类别，HIGH.高，STANDARD.标准
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'dpEnabled' => 'dp_enabled',
            'privacyProtectionType' => 'privacy_protection_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  描述
    * dpEnabled  差分隐私开关
    * privacyProtectionType  隐私保护类别，HIGH.高，STANDARD.标准
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'dpEnabled' => 'setDpEnabled',
            'privacyProtectionType' => 'setPrivacyProtectionType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  描述
    * dpEnabled  差分隐私开关
    * privacyProtectionType  隐私保护类别，HIGH.高，STANDARD.标准
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'dpEnabled' => 'getDpEnabled',
            'privacyProtectionType' => 'getPrivacyProtectionType'
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
    const PRIVACY_PROTECTION_TYPE_HIGH = 'HIGH';
    const PRIVACY_PROTECTION_TYPE_STANDARD = 'STANDARD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPrivacyProtectionTypeAllowableValues()
    {
        return [
            self::PRIVACY_PROTECTION_TYPE_HIGH,
            self::PRIVACY_PROTECTION_TYPE_STANDARD,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dpEnabled'] = isset($data['dpEnabled']) ? $data['dpEnabled'] : null;
        $this->container['privacyProtectionType'] = isset($data['privacyProtectionType']) ? $data['privacyProtectionType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getPrivacyProtectionTypeAllowableValues();
                if (!is_null($this->container['privacyProtectionType']) && !in_array($this->container['privacyProtectionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'privacyProtectionType', must be one of '%s'",
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
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets dpEnabled
    *  差分隐私开关
    *
    * @return bool|null
    */
    public function getDpEnabled()
    {
        return $this->container['dpEnabled'];
    }

    /**
    * Sets dpEnabled
    *
    * @param bool|null $dpEnabled 差分隐私开关
    *
    * @return $this
    */
    public function setDpEnabled($dpEnabled)
    {
        $this->container['dpEnabled'] = $dpEnabled;
        return $this;
    }

    /**
    * Gets privacyProtectionType
    *  隐私保护类别，HIGH.高，STANDARD.标准
    *
    * @return string|null
    */
    public function getPrivacyProtectionType()
    {
        return $this->container['privacyProtectionType'];
    }

    /**
    * Sets privacyProtectionType
    *
    * @param string|null $privacyProtectionType 隐私保护类别，HIGH.高，STANDARD.标准
    *
    * @return $this
    */
    public function setPrivacyProtectionType($privacyProtectionType)
    {
        $this->container['privacyProtectionType'] = $privacyProtectionType;
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

