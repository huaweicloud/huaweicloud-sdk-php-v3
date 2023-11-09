<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MicroserviceLabel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MicroserviceLabel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * labelName  标签名称。  以字母或者数字开头和结尾，由字母、数字、连接符('-')、下划线('_')、点号('.')组成且63个字符之内。
    * labelValue  标签值。  以字母或者数字开头和结尾，由字母、数字、连接符('-')、下划线('_')、点号('.')组成且63个字符之内。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'labelName' => 'string',
            'labelValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * labelName  标签名称。  以字母或者数字开头和结尾，由字母、数字、连接符('-')、下划线('_')、点号('.')组成且63个字符之内。
    * labelValue  标签值。  以字母或者数字开头和结尾，由字母、数字、连接符('-')、下划线('_')、点号('.')组成且63个字符之内。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'labelName' => null,
        'labelValue' => null
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
    * labelName  标签名称。  以字母或者数字开头和结尾，由字母、数字、连接符('-')、下划线('_')、点号('.')组成且63个字符之内。
    * labelValue  标签值。  以字母或者数字开头和结尾，由字母、数字、连接符('-')、下划线('_')、点号('.')组成且63个字符之内。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'labelName' => 'label_name',
            'labelValue' => 'label_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * labelName  标签名称。  以字母或者数字开头和结尾，由字母、数字、连接符('-')、下划线('_')、点号('.')组成且63个字符之内。
    * labelValue  标签值。  以字母或者数字开头和结尾，由字母、数字、连接符('-')、下划线('_')、点号('.')组成且63个字符之内。
    *
    * @var string[]
    */
    protected static $setters = [
            'labelName' => 'setLabelName',
            'labelValue' => 'setLabelValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * labelName  标签名称。  以字母或者数字开头和结尾，由字母、数字、连接符('-')、下划线('_')、点号('.')组成且63个字符之内。
    * labelValue  标签值。  以字母或者数字开头和结尾，由字母、数字、连接符('-')、下划线('_')、点号('.')组成且63个字符之内。
    *
    * @var string[]
    */
    protected static $getters = [
            'labelName' => 'getLabelName',
            'labelValue' => 'getLabelValue'
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
        $this->container['labelName'] = isset($data['labelName']) ? $data['labelName'] : null;
        $this->container['labelValue'] = isset($data['labelValue']) ? $data['labelValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['labelName'] === null) {
            $invalidProperties[] = "'labelName' can't be null";
        }
            if ((mb_strlen($this->container['labelName']) > 63)) {
                $invalidProperties[] = "invalid value for 'labelName', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['labelName']) < 1)) {
                $invalidProperties[] = "invalid value for 'labelName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9]$|(^[a-zA-Z0-9]([a-zA-Z0-9._-]{0,61})[a-zA-Z0-9]$)/", $this->container['labelName'])) {
                $invalidProperties[] = "invalid value for 'labelName', must be conform to the pattern /^[a-zA-Z0-9]$|(^[a-zA-Z0-9]([a-zA-Z0-9._-]{0,61})[a-zA-Z0-9]$)/.";
            }
        if ($this->container['labelValue'] === null) {
            $invalidProperties[] = "'labelValue' can't be null";
        }
            if ((mb_strlen($this->container['labelValue']) > 63)) {
                $invalidProperties[] = "invalid value for 'labelValue', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['labelValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'labelValue', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9]$|(^[a-zA-Z0-9]([a-zA-Z0-9._-]{0,61})[a-zA-Z0-9]$)/", $this->container['labelValue'])) {
                $invalidProperties[] = "invalid value for 'labelValue', must be conform to the pattern /^[a-zA-Z0-9]$|(^[a-zA-Z0-9]([a-zA-Z0-9._-]{0,61})[a-zA-Z0-9]$)/.";
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
    * Gets labelName
    *  标签名称。  以字母或者数字开头和结尾，由字母、数字、连接符('-')、下划线('_')、点号('.')组成且63个字符之内。
    *
    * @return string
    */
    public function getLabelName()
    {
        return $this->container['labelName'];
    }

    /**
    * Sets labelName
    *
    * @param string $labelName 标签名称。  以字母或者数字开头和结尾，由字母、数字、连接符('-')、下划线('_')、点号('.')组成且63个字符之内。
    *
    * @return $this
    */
    public function setLabelName($labelName)
    {
        $this->container['labelName'] = $labelName;
        return $this;
    }

    /**
    * Gets labelValue
    *  标签值。  以字母或者数字开头和结尾，由字母、数字、连接符('-')、下划线('_')、点号('.')组成且63个字符之内。
    *
    * @return string
    */
    public function getLabelValue()
    {
        return $this->container['labelValue'];
    }

    /**
    * Sets labelValue
    *
    * @param string $labelValue 标签值。  以字母或者数字开头和结尾，由字母、数字、连接符('-')、下划线('_')、点号('.')组成且63个字符之内。
    *
    * @return $this
    */
    public function setLabelValue($labelValue)
    {
        $this->container['labelValue'] = $labelValue;
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

