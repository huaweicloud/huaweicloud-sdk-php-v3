<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiscoveryRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiscoveryRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkContent  匹配值。
    * checkMode  匹配条件。contain、equals
    * checkType  匹配类型。cmdLine、env、scope
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkContent' => 'string[]',
            'checkMode' => 'string',
            'checkType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkContent  匹配值。
    * checkMode  匹配条件。contain、equals
    * checkType  匹配类型。cmdLine、env、scope
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkContent' => null,
        'checkMode' => null,
        'checkType' => null
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
    * checkContent  匹配值。
    * checkMode  匹配条件。contain、equals
    * checkType  匹配类型。cmdLine、env、scope
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkContent' => 'checkContent',
            'checkMode' => 'checkMode',
            'checkType' => 'checkType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkContent  匹配值。
    * checkMode  匹配条件。contain、equals
    * checkType  匹配类型。cmdLine、env、scope
    *
    * @var string[]
    */
    protected static $setters = [
            'checkContent' => 'setCheckContent',
            'checkMode' => 'setCheckMode',
            'checkType' => 'setCheckType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkContent  匹配值。
    * checkMode  匹配条件。contain、equals
    * checkType  匹配类型。cmdLine、env、scope
    *
    * @var string[]
    */
    protected static $getters = [
            'checkContent' => 'getCheckContent',
            'checkMode' => 'getCheckMode',
            'checkType' => 'getCheckType'
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
        $this->container['checkContent'] = isset($data['checkContent']) ? $data['checkContent'] : null;
        $this->container['checkMode'] = isset($data['checkMode']) ? $data['checkMode'] : null;
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['checkContent'] === null) {
            $invalidProperties[] = "'checkContent' can't be null";
        }
        if ($this->container['checkMode'] === null) {
            $invalidProperties[] = "'checkMode' can't be null";
        }
        if ($this->container['checkType'] === null) {
            $invalidProperties[] = "'checkType' can't be null";
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
    * Gets checkContent
    *  匹配值。
    *
    * @return string[]
    */
    public function getCheckContent()
    {
        return $this->container['checkContent'];
    }

    /**
    * Sets checkContent
    *
    * @param string[] $checkContent 匹配值。
    *
    * @return $this
    */
    public function setCheckContent($checkContent)
    {
        $this->container['checkContent'] = $checkContent;
        return $this;
    }

    /**
    * Gets checkMode
    *  匹配条件。contain、equals
    *
    * @return string
    */
    public function getCheckMode()
    {
        return $this->container['checkMode'];
    }

    /**
    * Sets checkMode
    *
    * @param string $checkMode 匹配条件。contain、equals
    *
    * @return $this
    */
    public function setCheckMode($checkMode)
    {
        $this->container['checkMode'] = $checkMode;
        return $this;
    }

    /**
    * Gets checkType
    *  匹配类型。cmdLine、env、scope
    *
    * @return string
    */
    public function getCheckType()
    {
        return $this->container['checkType'];
    }

    /**
    * Sets checkType
    *
    * @param string $checkType 匹配类型。cmdLine、env、scope
    *
    * @return $this
    */
    public function setCheckType($checkType)
    {
        $this->container['checkType'] = $checkType;
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

