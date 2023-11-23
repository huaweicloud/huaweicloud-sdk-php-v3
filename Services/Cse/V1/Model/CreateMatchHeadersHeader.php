<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateMatchHeadersHeader implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateMatch_headers_header';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * exact  精确匹配值。
    * caseInsensitive  是否区分大小写。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'exact' => 'string',
            'caseInsensitive' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * exact  精确匹配值。
    * caseInsensitive  是否区分大小写。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'exact' => null,
        'caseInsensitive' => null
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
    * exact  精确匹配值。
    * caseInsensitive  是否区分大小写。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'exact' => 'exact',
            'caseInsensitive' => 'caseInsensitive'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * exact  精确匹配值。
    * caseInsensitive  是否区分大小写。
    *
    * @var string[]
    */
    protected static $setters = [
            'exact' => 'setExact',
            'caseInsensitive' => 'setCaseInsensitive'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * exact  精确匹配值。
    * caseInsensitive  是否区分大小写。
    *
    * @var string[]
    */
    protected static $getters = [
            'exact' => 'getExact',
            'caseInsensitive' => 'getCaseInsensitive'
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
        $this->container['exact'] = isset($data['exact']) ? $data['exact'] : null;
        $this->container['caseInsensitive'] = isset($data['caseInsensitive']) ? $data['caseInsensitive'] : null;
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
    * Gets exact
    *  精确匹配值。
    *
    * @return string|null
    */
    public function getExact()
    {
        return $this->container['exact'];
    }

    /**
    * Sets exact
    *
    * @param string|null $exact 精确匹配值。
    *
    * @return $this
    */
    public function setExact($exact)
    {
        $this->container['exact'] = $exact;
        return $this;
    }

    /**
    * Gets caseInsensitive
    *  是否区分大小写。
    *
    * @return bool|null
    */
    public function getCaseInsensitive()
    {
        return $this->container['caseInsensitive'];
    }

    /**
    * Sets caseInsensitive
    *
    * @param bool|null $caseInsensitive 是否区分大小写。
    *
    * @return $this
    */
    public function setCaseInsensitive($caseInsensitive)
    {
        $this->container['caseInsensitive'] = $caseInsensitive;
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

