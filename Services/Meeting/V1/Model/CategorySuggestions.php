<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CategorySuggestions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CategorySuggestions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * politics  政治人物审核。
    * terrorism  暴恐内容审核。
    * porn  情色内容审核。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'politics' => 'string',
            'terrorism' => 'string',
            'porn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * politics  政治人物审核。
    * terrorism  暴恐内容审核。
    * porn  情色内容审核。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'politics' => null,
        'terrorism' => null,
        'porn' => null
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
    * politics  政治人物审核。
    * terrorism  暴恐内容审核。
    * porn  情色内容审核。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'politics' => 'politics',
            'terrorism' => 'terrorism',
            'porn' => 'porn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * politics  政治人物审核。
    * terrorism  暴恐内容审核。
    * porn  情色内容审核。
    *
    * @var string[]
    */
    protected static $setters = [
            'politics' => 'setPolitics',
            'terrorism' => 'setTerrorism',
            'porn' => 'setPorn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * politics  政治人物审核。
    * terrorism  暴恐内容审核。
    * porn  情色内容审核。
    *
    * @var string[]
    */
    protected static $getters = [
            'politics' => 'getPolitics',
            'terrorism' => 'getTerrorism',
            'porn' => 'getPorn'
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
        $this->container['politics'] = isset($data['politics']) ? $data['politics'] : null;
        $this->container['terrorism'] = isset($data['terrorism']) ? $data['terrorism'] : null;
        $this->container['porn'] = isset($data['porn']) ? $data['porn'] : null;
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
    * Gets politics
    *  政治人物审核。
    *
    * @return string|null
    */
    public function getPolitics()
    {
        return $this->container['politics'];
    }

    /**
    * Sets politics
    *
    * @param string|null $politics 政治人物审核。
    *
    * @return $this
    */
    public function setPolitics($politics)
    {
        $this->container['politics'] = $politics;
        return $this;
    }

    /**
    * Gets terrorism
    *  暴恐内容审核。
    *
    * @return string|null
    */
    public function getTerrorism()
    {
        return $this->container['terrorism'];
    }

    /**
    * Sets terrorism
    *
    * @param string|null $terrorism 暴恐内容审核。
    *
    * @return $this
    */
    public function setTerrorism($terrorism)
    {
        $this->container['terrorism'] = $terrorism;
        return $this;
    }

    /**
    * Gets porn
    *  情色内容审核。
    *
    * @return string|null
    */
    public function getPorn()
    {
        return $this->container['porn'];
    }

    /**
    * Sets porn
    *
    * @param string|null $porn 情色内容审核。
    *
    * @return $this
    */
    public function setPorn($porn)
    {
        $this->container['porn'] = $porn;
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

