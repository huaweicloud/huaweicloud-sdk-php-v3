<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LinkResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LinkResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rel  **参数解释**： 关联信息。 **取值范围**： 不涉及。
    * href  **参数解释**： 链接信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rel' => 'string',
            'href' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rel  **参数解释**： 关联信息。 **取值范围**： 不涉及。
    * href  **参数解释**： 链接信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rel' => null,
        'href' => null
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
    * rel  **参数解释**： 关联信息。 **取值范围**： 不涉及。
    * href  **参数解释**： 链接信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rel' => 'rel',
            'href' => 'href'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rel  **参数解释**： 关联信息。 **取值范围**： 不涉及。
    * href  **参数解释**： 链接信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'rel' => 'setRel',
            'href' => 'setHref'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rel  **参数解释**： 关联信息。 **取值范围**： 不涉及。
    * href  **参数解释**： 链接信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'rel' => 'getRel',
            'href' => 'getHref'
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
        $this->container['rel'] = isset($data['rel']) ? $data['rel'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
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
    * Gets rel
    *  **参数解释**： 关联信息。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRel()
    {
        return $this->container['rel'];
    }

    /**
    * Sets rel
    *
    * @param string|null $rel **参数解释**： 关联信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRel($rel)
    {
        $this->container['rel'] = $rel;
        return $this;
    }

    /**
    * Gets href
    *  **参数解释**： 链接信息。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
    * Sets href
    *
    * @param string|null $href **参数解释**： 链接信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setHref($href)
    {
        $this->container['href'] = $href;
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

