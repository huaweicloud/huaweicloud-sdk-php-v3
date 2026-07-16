<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateImageGroupRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateImageGroupRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * readMe  **参数解释**：镜像组更新的概览信息。 **约束限制**：不涉及。 **取值范围**：长度限制30000个字符。 **默认取值**：不涉及。
    * tags  **参数解释**：镜像组更新的标签。 **约束限制**：最大支持20个标签。 **取值范围**：key值最大支持长度128，value值最大支持255。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'readMe' => 'string',
            'tags' => '\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateImageGroupRequestBodyTags[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * readMe  **参数解释**：镜像组更新的概览信息。 **约束限制**：不涉及。 **取值范围**：长度限制30000个字符。 **默认取值**：不涉及。
    * tags  **参数解释**：镜像组更新的标签。 **约束限制**：最大支持20个标签。 **取值范围**：key值最大支持长度128，value值最大支持255。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'readMe' => null,
        'tags' => null
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
    * readMe  **参数解释**：镜像组更新的概览信息。 **约束限制**：不涉及。 **取值范围**：长度限制30000个字符。 **默认取值**：不涉及。
    * tags  **参数解释**：镜像组更新的标签。 **约束限制**：最大支持20个标签。 **取值范围**：key值最大支持长度128，value值最大支持255。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'readMe' => 'read_me',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * readMe  **参数解释**：镜像组更新的概览信息。 **约束限制**：不涉及。 **取值范围**：长度限制30000个字符。 **默认取值**：不涉及。
    * tags  **参数解释**：镜像组更新的标签。 **约束限制**：最大支持20个标签。 **取值范围**：key值最大支持长度128，value值最大支持255。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'readMe' => 'setReadMe',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * readMe  **参数解释**：镜像组更新的概览信息。 **约束限制**：不涉及。 **取值范围**：长度限制30000个字符。 **默认取值**：不涉及。
    * tags  **参数解释**：镜像组更新的标签。 **约束限制**：最大支持20个标签。 **取值范围**：key值最大支持长度128，value值最大支持255。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'readMe' => 'getReadMe',
            'tags' => 'getTags'
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
        $this->container['readMe'] = isset($data['readMe']) ? $data['readMe'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
    * Gets readMe
    *  **参数解释**：镜像组更新的概览信息。 **约束限制**：不涉及。 **取值范围**：长度限制30000个字符。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getReadMe()
    {
        return $this->container['readMe'];
    }

    /**
    * Sets readMe
    *
    * @param string|null $readMe **参数解释**：镜像组更新的概览信息。 **约束限制**：不涉及。 **取值范围**：长度限制30000个字符。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setReadMe($readMe)
    {
        $this->container['readMe'] = $readMe;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**：镜像组更新的标签。 **约束限制**：最大支持20个标签。 **取值范围**：key值最大支持长度128，value值最大支持255。 **默认取值**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\UpdateImageGroupRequestBodyTags[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\UpdateImageGroupRequestBodyTags[]|null $tags **参数解释**：镜像组更新的标签。 **约束限制**：最大支持20个标签。 **取值范围**：key值最大支持长度128，value值最大支持255。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

