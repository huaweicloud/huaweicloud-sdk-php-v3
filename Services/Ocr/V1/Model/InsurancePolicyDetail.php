<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InsurancePolicyDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InsurancePolicyDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * words  对应识别出的文本内容
    * location  对应识别出的四个顶点坐标
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'words' => 'string',
            'location' => 'int[][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * words  对应识别出的文本内容
    * location  对应识别出的四个顶点坐标
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'words' => null,
        'location' => 'int32'
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
    * words  对应识别出的文本内容
    * location  对应识别出的四个顶点坐标
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'words' => 'words',
            'location' => 'location'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * words  对应识别出的文本内容
    * location  对应识别出的四个顶点坐标
    *
    * @var string[]
    */
    protected static $setters = [
            'words' => 'setWords',
            'location' => 'setLocation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * words  对应识别出的文本内容
    * location  对应识别出的四个顶点坐标
    *
    * @var string[]
    */
    protected static $getters = [
            'words' => 'getWords',
            'location' => 'getLocation'
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
        $this->container['words'] = isset($data['words']) ? $data['words'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
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
    * Gets words
    *  对应识别出的文本内容
    *
    * @return string|null
    */
    public function getWords()
    {
        return $this->container['words'];
    }

    /**
    * Sets words
    *
    * @param string|null $words 对应识别出的文本内容
    *
    * @return $this
    */
    public function setWords($words)
    {
        $this->container['words'] = $words;
        return $this;
    }

    /**
    * Gets location
    *  对应识别出的四个顶点坐标
    *
    * @return int[][]|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param int[][]|null $location 对应识别出的四个顶点坐标
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
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

