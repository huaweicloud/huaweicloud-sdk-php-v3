<?php

namespace HuaweiCloud\SDK\Tms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAssociatedResourceRulesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAssociatedResourceRulesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rules  本次操作的规则信息
    * errors  操作的错误信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rules' => '\HuaweiCloud\SDK\Tms\V1\Model\AssociatedResourceRule[]',
            'errors' => '\HuaweiCloud\SDK\Tms\V1\Model\ErrorInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rules  本次操作的规则信息
    * errors  操作的错误信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rules' => null,
        'errors' => null
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
    * rules  本次操作的规则信息
    * errors  操作的错误信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rules' => 'rules',
            'errors' => 'errors'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rules  本次操作的规则信息
    * errors  操作的错误信息
    *
    * @var string[]
    */
    protected static $setters = [
            'rules' => 'setRules',
            'errors' => 'setErrors'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rules  本次操作的规则信息
    * errors  操作的错误信息
    *
    * @var string[]
    */
    protected static $getters = [
            'rules' => 'getRules',
            'errors' => 'getErrors'
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
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets rules
    *  本次操作的规则信息
    *
    * @return \HuaweiCloud\SDK\Tms\V1\Model\AssociatedResourceRule[]|null
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param \HuaweiCloud\SDK\Tms\V1\Model\AssociatedResourceRule[]|null $rules 本次操作的规则信息
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
        return $this;
    }

    /**
    * Gets errors
    *  操作的错误信息
    *
    * @return \HuaweiCloud\SDK\Tms\V1\Model\ErrorInfo[]|null
    */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
    * Sets errors
    *
    * @param \HuaweiCloud\SDK\Tms\V1\Model\ErrorInfo[]|null $errors 操作的错误信息
    *
    * @return $this
    */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;
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

