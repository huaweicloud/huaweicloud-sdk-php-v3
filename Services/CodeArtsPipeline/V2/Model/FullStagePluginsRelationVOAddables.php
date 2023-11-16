<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FullStagePluginsRelationVOAddables implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FullStagePluginsRelationVO_addables';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * additionalProp1  额外属性1
    * additionalProp2  额外属性2
    * additionalProp3  额外属性3
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'additionalProp1' => 'bool',
            'additionalProp2' => 'bool',
            'additionalProp3' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * additionalProp1  额外属性1
    * additionalProp2  额外属性2
    * additionalProp3  额外属性3
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'additionalProp1' => null,
        'additionalProp2' => null,
        'additionalProp3' => null
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
    * additionalProp1  额外属性1
    * additionalProp2  额外属性2
    * additionalProp3  额外属性3
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'additionalProp1' => 'additionalProp1',
            'additionalProp2' => 'additionalProp2',
            'additionalProp3' => 'additionalProp3'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * additionalProp1  额外属性1
    * additionalProp2  额外属性2
    * additionalProp3  额外属性3
    *
    * @var string[]
    */
    protected static $setters = [
            'additionalProp1' => 'setAdditionalProp1',
            'additionalProp2' => 'setAdditionalProp2',
            'additionalProp3' => 'setAdditionalProp3'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * additionalProp1  额外属性1
    * additionalProp2  额外属性2
    * additionalProp3  额外属性3
    *
    * @var string[]
    */
    protected static $getters = [
            'additionalProp1' => 'getAdditionalProp1',
            'additionalProp2' => 'getAdditionalProp2',
            'additionalProp3' => 'getAdditionalProp3'
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
        $this->container['additionalProp1'] = isset($data['additionalProp1']) ? $data['additionalProp1'] : null;
        $this->container['additionalProp2'] = isset($data['additionalProp2']) ? $data['additionalProp2'] : null;
        $this->container['additionalProp3'] = isset($data['additionalProp3']) ? $data['additionalProp3'] : null;
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
    * Gets additionalProp1
    *  额外属性1
    *
    * @return bool|null
    */
    public function getAdditionalProp1()
    {
        return $this->container['additionalProp1'];
    }

    /**
    * Sets additionalProp1
    *
    * @param bool|null $additionalProp1 额外属性1
    *
    * @return $this
    */
    public function setAdditionalProp1($additionalProp1)
    {
        $this->container['additionalProp1'] = $additionalProp1;
        return $this;
    }

    /**
    * Gets additionalProp2
    *  额外属性2
    *
    * @return bool|null
    */
    public function getAdditionalProp2()
    {
        return $this->container['additionalProp2'];
    }

    /**
    * Sets additionalProp2
    *
    * @param bool|null $additionalProp2 额外属性2
    *
    * @return $this
    */
    public function setAdditionalProp2($additionalProp2)
    {
        $this->container['additionalProp2'] = $additionalProp2;
        return $this;
    }

    /**
    * Gets additionalProp3
    *  额外属性3
    *
    * @return bool|null
    */
    public function getAdditionalProp3()
    {
        return $this->container['additionalProp3'];
    }

    /**
    * Sets additionalProp3
    *
    * @param bool|null $additionalProp3 额外属性3
    *
    * @return $this
    */
    public function setAdditionalProp3($additionalProp3)
    {
        $this->container['additionalProp3'] = $additionalProp3;
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

