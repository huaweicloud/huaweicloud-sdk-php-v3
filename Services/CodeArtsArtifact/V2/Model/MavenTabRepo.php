<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MavenTabRepo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MavenTabRepo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * release  **参数解释**： release仓库名称。  **取值范围**： 不涉及。
    * snapshot  **参数解释**： snapshot仓库名称。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'release' => 'string',
            'snapshot' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * release  **参数解释**： release仓库名称。  **取值范围**： 不涉及。
    * snapshot  **参数解释**： snapshot仓库名称。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'release' => null,
        'snapshot' => null
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
    * release  **参数解释**： release仓库名称。  **取值范围**： 不涉及。
    * snapshot  **参数解释**： snapshot仓库名称。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'release' => 'release',
            'snapshot' => 'snapshot'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * release  **参数解释**： release仓库名称。  **取值范围**： 不涉及。
    * snapshot  **参数解释**： snapshot仓库名称。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'release' => 'setRelease',
            'snapshot' => 'setSnapshot'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * release  **参数解释**： release仓库名称。  **取值范围**： 不涉及。
    * snapshot  **参数解释**： snapshot仓库名称。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'release' => 'getRelease',
            'snapshot' => 'getSnapshot'
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
        $this->container['release'] = isset($data['release']) ? $data['release'] : null;
        $this->container['snapshot'] = isset($data['snapshot']) ? $data['snapshot'] : null;
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
    * Gets release
    *  **参数解释**： release仓库名称。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRelease()
    {
        return $this->container['release'];
    }

    /**
    * Sets release
    *
    * @param string|null $release **参数解释**： release仓库名称。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRelease($release)
    {
        $this->container['release'] = $release;
        return $this;
    }

    /**
    * Gets snapshot
    *  **参数解释**： snapshot仓库名称。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSnapshot()
    {
        return $this->container['snapshot'];
    }

    /**
    * Sets snapshot
    *
    * @param string|null $snapshot **参数解释**： snapshot仓库名称。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSnapshot($snapshot)
    {
        $this->container['snapshot'] = $snapshot;
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

