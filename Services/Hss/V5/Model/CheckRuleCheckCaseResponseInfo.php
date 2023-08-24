<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckRuleCheckCaseResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckRuleCheckCaseResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkDescription  检测用例描述
    * currentValue  当前结果
    * suggestValue  期待结果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkDescription' => 'string',
            'currentValue' => 'string',
            'suggestValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkDescription  检测用例描述
    * currentValue  当前结果
    * suggestValue  期待结果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkDescription' => null,
        'currentValue' => null,
        'suggestValue' => null
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
    * checkDescription  检测用例描述
    * currentValue  当前结果
    * suggestValue  期待结果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkDescription' => 'check_description',
            'currentValue' => 'current_value',
            'suggestValue' => 'suggest_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkDescription  检测用例描述
    * currentValue  当前结果
    * suggestValue  期待结果
    *
    * @var string[]
    */
    protected static $setters = [
            'checkDescription' => 'setCheckDescription',
            'currentValue' => 'setCurrentValue',
            'suggestValue' => 'setSuggestValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkDescription  检测用例描述
    * currentValue  当前结果
    * suggestValue  期待结果
    *
    * @var string[]
    */
    protected static $getters = [
            'checkDescription' => 'getCheckDescription',
            'currentValue' => 'getCurrentValue',
            'suggestValue' => 'getSuggestValue'
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
        $this->container['checkDescription'] = isset($data['checkDescription']) ? $data['checkDescription'] : null;
        $this->container['currentValue'] = isset($data['currentValue']) ? $data['currentValue'] : null;
        $this->container['suggestValue'] = isset($data['suggestValue']) ? $data['suggestValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['checkDescription']) && (mb_strlen($this->container['checkDescription']) > 65534)) {
                $invalidProperties[] = "invalid value for 'checkDescription', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['checkDescription']) && (mb_strlen($this->container['checkDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['currentValue']) && (mb_strlen($this->container['currentValue']) > 65534)) {
                $invalidProperties[] = "invalid value for 'currentValue', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['currentValue']) && (mb_strlen($this->container['currentValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'currentValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['suggestValue']) && (mb_strlen($this->container['suggestValue']) > 65534)) {
                $invalidProperties[] = "invalid value for 'suggestValue', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['suggestValue']) && (mb_strlen($this->container['suggestValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'suggestValue', the character length must be bigger than or equal to 0.";
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
    * Gets checkDescription
    *  检测用例描述
    *
    * @return string|null
    */
    public function getCheckDescription()
    {
        return $this->container['checkDescription'];
    }

    /**
    * Sets checkDescription
    *
    * @param string|null $checkDescription 检测用例描述
    *
    * @return $this
    */
    public function setCheckDescription($checkDescription)
    {
        $this->container['checkDescription'] = $checkDescription;
        return $this;
    }

    /**
    * Gets currentValue
    *  当前结果
    *
    * @return string|null
    */
    public function getCurrentValue()
    {
        return $this->container['currentValue'];
    }

    /**
    * Sets currentValue
    *
    * @param string|null $currentValue 当前结果
    *
    * @return $this
    */
    public function setCurrentValue($currentValue)
    {
        $this->container['currentValue'] = $currentValue;
        return $this;
    }

    /**
    * Gets suggestValue
    *  期待结果
    *
    * @return string|null
    */
    public function getSuggestValue()
    {
        return $this->container['suggestValue'];
    }

    /**
    * Sets suggestValue
    *
    * @param string|null $suggestValue 期待结果
    *
    * @return $this
    */
    public function setSuggestValue($suggestValue)
    {
        $this->container['suggestValue'] = $suggestValue;
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

