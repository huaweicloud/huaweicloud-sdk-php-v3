<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TypeProperties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TypeProperties';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * killchain  Kill chain事件分类，仅当business为attack有效
    * ttps  Mitre Array 事件分类，仅当business为attack有效
    * effects  影响，适用全部类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'killchain' => 'string',
            'ttps' => 'string',
            'effects' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * killchain  Kill chain事件分类，仅当business为attack有效
    * ttps  Mitre Array 事件分类，仅当business为attack有效
    * effects  影响，适用全部类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'killchain' => null,
        'ttps' => null,
        'effects' => null
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
    * killchain  Kill chain事件分类，仅当business为attack有效
    * ttps  Mitre Array 事件分类，仅当business为attack有效
    * effects  影响，适用全部类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'killchain' => 'killchain',
            'ttps' => 'ttps',
            'effects' => 'effects'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * killchain  Kill chain事件分类，仅当business为attack有效
    * ttps  Mitre Array 事件分类，仅当business为attack有效
    * effects  影响，适用全部类型
    *
    * @var string[]
    */
    protected static $setters = [
            'killchain' => 'setKillchain',
            'ttps' => 'setTtps',
            'effects' => 'setEffects'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * killchain  Kill chain事件分类，仅当business为attack有效
    * ttps  Mitre Array 事件分类，仅当business为attack有效
    * effects  影响，适用全部类型
    *
    * @var string[]
    */
    protected static $getters = [
            'killchain' => 'getKillchain',
            'ttps' => 'getTtps',
            'effects' => 'getEffects'
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
        $this->container['killchain'] = isset($data['killchain']) ? $data['killchain'] : null;
        $this->container['ttps'] = isset($data['ttps']) ? $data['ttps'] : null;
        $this->container['effects'] = isset($data['effects']) ? $data['effects'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['killchain']) && (mb_strlen($this->container['killchain']) > 512)) {
                $invalidProperties[] = "invalid value for 'killchain', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['killchain']) && (mb_strlen($this->container['killchain']) < 1)) {
                $invalidProperties[] = "invalid value for 'killchain', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ttps']) && (mb_strlen($this->container['ttps']) > 512)) {
                $invalidProperties[] = "invalid value for 'ttps', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['ttps']) && (mb_strlen($this->container['ttps']) < 1)) {
                $invalidProperties[] = "invalid value for 'ttps', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['effects']) && (mb_strlen($this->container['effects']) > 512)) {
                $invalidProperties[] = "invalid value for 'effects', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['effects']) && (mb_strlen($this->container['effects']) < 1)) {
                $invalidProperties[] = "invalid value for 'effects', the character length must be bigger than or equal to 1.";
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
    * Gets killchain
    *  Kill chain事件分类，仅当business为attack有效
    *
    * @return string|null
    */
    public function getKillchain()
    {
        return $this->container['killchain'];
    }

    /**
    * Sets killchain
    *
    * @param string|null $killchain Kill chain事件分类，仅当business为attack有效
    *
    * @return $this
    */
    public function setKillchain($killchain)
    {
        $this->container['killchain'] = $killchain;
        return $this;
    }

    /**
    * Gets ttps
    *  Mitre Array 事件分类，仅当business为attack有效
    *
    * @return string|null
    */
    public function getTtps()
    {
        return $this->container['ttps'];
    }

    /**
    * Sets ttps
    *
    * @param string|null $ttps Mitre Array 事件分类，仅当business为attack有效
    *
    * @return $this
    */
    public function setTtps($ttps)
    {
        $this->container['ttps'] = $ttps;
        return $this;
    }

    /**
    * Gets effects
    *  影响，适用全部类型
    *
    * @return string|null
    */
    public function getEffects()
    {
        return $this->container['effects'];
    }

    /**
    * Sets effects
    *
    * @param string|null $effects 影响，适用全部类型
    *
    * @return $this
    */
    public function setEffects($effects)
    {
        $this->container['effects'] = $effects;
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

