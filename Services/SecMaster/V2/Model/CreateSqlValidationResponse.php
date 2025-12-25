<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSqlValidationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSqlValidationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sources  源表
    * modes  模式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sources' => '\HuaweiCloud\SDK\SecMaster\V2\Model\TableItem[]',
            'modes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sources  源表
    * modes  模式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sources' => null,
        'modes' => null
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
    * sources  源表
    * modes  模式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sources' => 'sources',
            'modes' => 'modes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sources  源表
    * modes  模式
    *
    * @var string[]
    */
    protected static $setters = [
            'sources' => 'setSources',
            'modes' => 'setModes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sources  源表
    * modes  模式
    *
    * @var string[]
    */
    protected static $getters = [
            'sources' => 'getSources',
            'modes' => 'getModes'
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
    const MODES_STREAMING = 'STREAMING';
    const MODES_BATCH = 'BATCH';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModesAllowableValues()
    {
        return [
            self::MODES_STREAMING,
            self::MODES_BATCH,
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
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['modes'] = isset($data['modes']) ? $data['modes'] : null;
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
    * Gets sources
    *  源表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\TableItem[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\TableItem[]|null $sources 源表
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets modes
    *  模式
    *
    * @return string[]|null
    */
    public function getModes()
    {
        return $this->container['modes'];
    }

    /**
    * Sets modes
    *
    * @param string[]|null $modes 模式
    *
    * @return $this
    */
    public function setModes($modes)
    {
        $this->container['modes'] = $modes;
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

