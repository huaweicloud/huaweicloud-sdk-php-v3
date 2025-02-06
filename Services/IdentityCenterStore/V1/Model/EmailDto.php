<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EmailDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EmailDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * primary  一个布尔值，表示这是否为用户的主电子邮箱
    * type  表示电子邮箱类型的字符串
    * value  包含电子邮箱地址的字符串
    * verificationStatus  电子邮箱地址的验证状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'primary' => 'bool',
            'type' => 'string',
            'value' => 'string',
            'verificationStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * primary  一个布尔值，表示这是否为用户的主电子邮箱
    * type  表示电子邮箱类型的字符串
    * value  包含电子邮箱地址的字符串
    * verificationStatus  电子邮箱地址的验证状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'primary' => null,
        'type' => null,
        'value' => null,
        'verificationStatus' => null
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
    * primary  一个布尔值，表示这是否为用户的主电子邮箱
    * type  表示电子邮箱类型的字符串
    * value  包含电子邮箱地址的字符串
    * verificationStatus  电子邮箱地址的验证状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'primary' => 'primary',
            'type' => 'type',
            'value' => 'value',
            'verificationStatus' => 'verification_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * primary  一个布尔值，表示这是否为用户的主电子邮箱
    * type  表示电子邮箱类型的字符串
    * value  包含电子邮箱地址的字符串
    * verificationStatus  电子邮箱地址的验证状态
    *
    * @var string[]
    */
    protected static $setters = [
            'primary' => 'setPrimary',
            'type' => 'setType',
            'value' => 'setValue',
            'verificationStatus' => 'setVerificationStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * primary  一个布尔值，表示这是否为用户的主电子邮箱
    * type  表示电子邮箱类型的字符串
    * value  包含电子邮箱地址的字符串
    * verificationStatus  电子邮箱地址的验证状态
    *
    * @var string[]
    */
    protected static $getters = [
            'primary' => 'getPrimary',
            'type' => 'getType',
            'value' => 'getValue',
            'verificationStatus' => 'getVerificationStatus'
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
    const VERIFICATION_STATUS_NOT_VERIFIED = 'NOT_VERIFIED';
    const VERIFICATION_STATUS_VERIFIED = 'VERIFIED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVerificationStatusAllowableValues()
    {
        return [
            self::VERIFICATION_STATUS_NOT_VERIFIED,
            self::VERIFICATION_STATUS_VERIFIED,
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
        $this->container['primary'] = isset($data['primary']) ? $data['primary'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['verificationStatus'] = isset($data['verificationStatus']) ? $data['verificationStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['primary'] === null) {
            $invalidProperties[] = "'primary' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 1024)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/.";
            }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
            if ((mb_strlen($this->container['value']) > 1024)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['value']) < 1)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^((([A-Za-z]|\\d|[!#\\$%&'\\*\\+\\-\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+(\\.([A-Za-z]|\\d|[!#\\$%&'\\*\\+\\-\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+)*)|((\\x22)((((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(([\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]|\\x21|[\\x23-\\x5b]|[\\x5d-\\x7e]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(\\\\([\\x01-\\x09\\x0b\\x0c\\x0d-\\x7f]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]))))*(((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(\\x22)))@((([A-Za-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([A-Za-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([A-Za-z]|\\d|-|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([A-Za-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\\.)+(([A-Za-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([A-Za-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([A-Za-z]|\\d|-|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([A-Za-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))$/", $this->container['value'])) {
                $invalidProperties[] = "invalid value for 'value', must be conform to the pattern /^((([A-Za-z]|\\d|[!#\\$%&'\\*\\+\\-\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+(\\.([A-Za-z]|\\d|[!#\\$%&'\\*\\+\\-\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+)*)|((\\x22)((((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(([\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]|\\x21|[\\x23-\\x5b]|[\\x5d-\\x7e]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(\\\\([\\x01-\\x09\\x0b\\x0c\\x0d-\\x7f]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]))))*(((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(\\x22)))@((([A-Za-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([A-Za-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([A-Za-z]|\\d|-|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([A-Za-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\\.)+(([A-Za-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([A-Za-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([A-Za-z]|\\d|-|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([A-Za-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))$/.";
            }
            $allowedValues = $this->getVerificationStatusAllowableValues();
                if (!is_null($this->container['verificationStatus']) && !in_array($this->container['verificationStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'verificationStatus', must be one of '%s'",
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
    * Gets primary
    *  一个布尔值，表示这是否为用户的主电子邮箱
    *
    * @return bool
    */
    public function getPrimary()
    {
        return $this->container['primary'];
    }

    /**
    * Sets primary
    *
    * @param bool $primary 一个布尔值，表示这是否为用户的主电子邮箱
    *
    * @return $this
    */
    public function setPrimary($primary)
    {
        $this->container['primary'] = $primary;
        return $this;
    }

    /**
    * Gets type
    *  表示电子邮箱类型的字符串
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 表示电子邮箱类型的字符串
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets value
    *  包含电子邮箱地址的字符串
    *
    * @return string
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string $value 包含电子邮箱地址的字符串
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets verificationStatus
    *  电子邮箱地址的验证状态
    *
    * @return string|null
    */
    public function getVerificationStatus()
    {
        return $this->container['verificationStatus'];
    }

    /**
    * Sets verificationStatus
    *
    * @param string|null $verificationStatus 电子邮箱地址的验证状态
    *
    * @return $this
    */
    public function setVerificationStatus($verificationStatus)
    {
        $this->container['verificationStatus'] = $verificationStatus;
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

