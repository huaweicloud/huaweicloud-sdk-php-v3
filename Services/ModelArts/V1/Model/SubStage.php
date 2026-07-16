<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubStage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubStage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**：子阶段名称。  **取值范围**：不涉及。
    * enMessage  **参数解释**：子阶段英文描述信息。  **取值范围**：不涉及。
    * zhMessage  **参数解释**：子阶段中文描述信息。  **取值范围**：不涉及。
    * createTime  **参数解释**：子阶段开始时间。  **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'enMessage' => 'string',
            'zhMessage' => 'string',
            'createTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**：子阶段名称。  **取值范围**：不涉及。
    * enMessage  **参数解释**：子阶段英文描述信息。  **取值范围**：不涉及。
    * zhMessage  **参数解释**：子阶段中文描述信息。  **取值范围**：不涉及。
    * createTime  **参数解释**：子阶段开始时间。  **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'enMessage' => null,
        'zhMessage' => null,
        'createTime' => null
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
    * name  **参数解释**：子阶段名称。  **取值范围**：不涉及。
    * enMessage  **参数解释**：子阶段英文描述信息。  **取值范围**：不涉及。
    * zhMessage  **参数解释**：子阶段中文描述信息。  **取值范围**：不涉及。
    * createTime  **参数解释**：子阶段开始时间。  **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'enMessage' => 'en_message',
            'zhMessage' => 'zh_message',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**：子阶段名称。  **取值范围**：不涉及。
    * enMessage  **参数解释**：子阶段英文描述信息。  **取值范围**：不涉及。
    * zhMessage  **参数解释**：子阶段中文描述信息。  **取值范围**：不涉及。
    * createTime  **参数解释**：子阶段开始时间。  **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'enMessage' => 'setEnMessage',
            'zhMessage' => 'setZhMessage',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**：子阶段名称。  **取值范围**：不涉及。
    * enMessage  **参数解释**：子阶段英文描述信息。  **取值范围**：不涉及。
    * zhMessage  **参数解释**：子阶段中文描述信息。  **取值范围**：不涉及。
    * createTime  **参数解释**：子阶段开始时间。  **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'enMessage' => 'getEnMessage',
            'zhMessage' => 'getZhMessage',
            'createTime' => 'getCreateTime'
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
        $this->container['enMessage'] = isset($data['enMessage']) ? $data['enMessage'] : null;
        $this->container['zhMessage'] = isset($data['zhMessage']) ? $data['zhMessage'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    *  **参数解释**：子阶段名称。  **取值范围**：不涉及。
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
    * @param string|null $name **参数解释**：子阶段名称。  **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets enMessage
    *  **参数解释**：子阶段英文描述信息。  **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getEnMessage()
    {
        return $this->container['enMessage'];
    }

    /**
    * Sets enMessage
    *
    * @param string|null $enMessage **参数解释**：子阶段英文描述信息。  **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setEnMessage($enMessage)
    {
        $this->container['enMessage'] = $enMessage;
        return $this;
    }

    /**
    * Gets zhMessage
    *  **参数解释**：子阶段中文描述信息。  **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getZhMessage()
    {
        return $this->container['zhMessage'];
    }

    /**
    * Sets zhMessage
    *
    * @param string|null $zhMessage **参数解释**：子阶段中文描述信息。  **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setZhMessage($zhMessage)
    {
        $this->container['zhMessage'] = $zhMessage;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**：子阶段开始时间。  **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime **参数解释**：子阶段开始时间。  **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

