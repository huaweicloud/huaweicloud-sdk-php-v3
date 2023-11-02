<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TagHeader implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TagHeader';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  资产名称
    * dexcription  标签描述
    * displayText  标签的名称
    * relationGuid  关联的guid
    * tagGuid  标签关联的guid
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'dexcription' => 'object',
            'displayText' => 'string',
            'relationGuid' => 'string',
            'tagGuid' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  资产名称
    * dexcription  标签描述
    * displayText  标签的名称
    * relationGuid  关联的guid
    * tagGuid  标签关联的guid
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'dexcription' => null,
        'displayText' => null,
        'relationGuid' => null,
        'tagGuid' => null
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
    * name  资产名称
    * dexcription  标签描述
    * displayText  标签的名称
    * relationGuid  关联的guid
    * tagGuid  标签关联的guid
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'dexcription' => 'dexcription',
            'displayText' => 'display_text',
            'relationGuid' => 'relation_guid',
            'tagGuid' => 'tag_guid'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  资产名称
    * dexcription  标签描述
    * displayText  标签的名称
    * relationGuid  关联的guid
    * tagGuid  标签关联的guid
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'dexcription' => 'setDexcription',
            'displayText' => 'setDisplayText',
            'relationGuid' => 'setRelationGuid',
            'tagGuid' => 'setTagGuid'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  资产名称
    * dexcription  标签描述
    * displayText  标签的名称
    * relationGuid  关联的guid
    * tagGuid  标签关联的guid
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'dexcription' => 'getDexcription',
            'displayText' => 'getDisplayText',
            'relationGuid' => 'getRelationGuid',
            'tagGuid' => 'getTagGuid'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['dexcription'] = isset($data['dexcription']) ? $data['dexcription'] : null;
        $this->container['displayText'] = isset($data['displayText']) ? $data['displayText'] : null;
        $this->container['relationGuid'] = isset($data['relationGuid']) ? $data['relationGuid'] : null;
        $this->container['tagGuid'] = isset($data['tagGuid']) ? $data['tagGuid'] : null;
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
    * Gets name
    *  资产名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 资产名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets dexcription
    *  标签描述
    *
    * @return object|null
    */
    public function getDexcription()
    {
        return $this->container['dexcription'];
    }

    /**
    * Sets dexcription
    *
    * @param object|null $dexcription 标签描述
    *
    * @return $this
    */
    public function setDexcription($dexcription)
    {
        $this->container['dexcription'] = $dexcription;
        return $this;
    }

    /**
    * Gets displayText
    *  标签的名称
    *
    * @return string|null
    */
    public function getDisplayText()
    {
        return $this->container['displayText'];
    }

    /**
    * Sets displayText
    *
    * @param string|null $displayText 标签的名称
    *
    * @return $this
    */
    public function setDisplayText($displayText)
    {
        $this->container['displayText'] = $displayText;
        return $this;
    }

    /**
    * Gets relationGuid
    *  关联的guid
    *
    * @return string|null
    */
    public function getRelationGuid()
    {
        return $this->container['relationGuid'];
    }

    /**
    * Sets relationGuid
    *
    * @param string|null $relationGuid 关联的guid
    *
    * @return $this
    */
    public function setRelationGuid($relationGuid)
    {
        $this->container['relationGuid'] = $relationGuid;
        return $this;
    }

    /**
    * Gets tagGuid
    *  标签关联的guid
    *
    * @return string|null
    */
    public function getTagGuid()
    {
        return $this->container['tagGuid'];
    }

    /**
    * Sets tagGuid
    *
    * @param string|null $tagGuid 标签关联的guid
    *
    * @return $this
    */
    public function setTagGuid($tagGuid)
    {
        $this->container['tagGuid'] = $tagGuid;
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

