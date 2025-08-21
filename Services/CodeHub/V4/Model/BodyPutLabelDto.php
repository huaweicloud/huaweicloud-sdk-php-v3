<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BodyPutLabelDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BodyPutLabelDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释：** 标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * newName  **参数解释：** 新标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * color  **参数解释：** 标签颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **约束限制：** 不涉及。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$` **默认取值：** 不涉及。
    * description  **参数解释：** 描述。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * priority  **参数解释：** 优先级。 **约束限制：** 不涉及。 **取值范围：** 0-30 **默认取值：** 不涉及。
    * expiresAt  **参数解释：** 失效时间。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'newName' => 'string',
            'color' => 'string',
            'description' => 'string',
            'priority' => 'int',
            'expiresAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释：** 标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * newName  **参数解释：** 新标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * color  **参数解释：** 标签颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **约束限制：** 不涉及。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$` **默认取值：** 不涉及。
    * description  **参数解释：** 描述。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * priority  **参数解释：** 优先级。 **约束限制：** 不涉及。 **取值范围：** 0-30 **默认取值：** 不涉及。
    * expiresAt  **参数解释：** 失效时间。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'newName' => null,
        'color' => null,
        'description' => null,
        'priority' => 'int32',
        'expiresAt' => 'date'
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
    * name  **参数解释：** 标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * newName  **参数解释：** 新标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * color  **参数解释：** 标签颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **约束限制：** 不涉及。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$` **默认取值：** 不涉及。
    * description  **参数解释：** 描述。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * priority  **参数解释：** 优先级。 **约束限制：** 不涉及。 **取值范围：** 0-30 **默认取值：** 不涉及。
    * expiresAt  **参数解释：** 失效时间。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'newName' => 'new_name',
            'color' => 'color',
            'description' => 'description',
            'priority' => 'priority',
            'expiresAt' => 'expires_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释：** 标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * newName  **参数解释：** 新标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * color  **参数解释：** 标签颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **约束限制：** 不涉及。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$` **默认取值：** 不涉及。
    * description  **参数解释：** 描述。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * priority  **参数解释：** 优先级。 **约束限制：** 不涉及。 **取值范围：** 0-30 **默认取值：** 不涉及。
    * expiresAt  **参数解释：** 失效时间。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'newName' => 'setNewName',
            'color' => 'setColor',
            'description' => 'setDescription',
            'priority' => 'setPriority',
            'expiresAt' => 'setExpiresAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释：** 标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * newName  **参数解释：** 新标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * color  **参数解释：** 标签颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **约束限制：** 不涉及。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$` **默认取值：** 不涉及。
    * description  **参数解释：** 描述。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * priority  **参数解释：** 优先级。 **约束限制：** 不涉及。 **取值范围：** 0-30 **默认取值：** 不涉及。
    * expiresAt  **参数解释：** 失效时间。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'newName' => 'getNewName',
            'color' => 'getColor',
            'description' => 'getDescription',
            'priority' => 'getPriority',
            'expiresAt' => 'getExpiresAt'
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
        $this->container['newName'] = isset($data['newName']) ? $data['newName'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['expiresAt'] = isset($data['expiresAt']) ? $data['expiresAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['newName']) && (mb_strlen($this->container['newName']) > 255)) {
                $invalidProperties[] = "invalid value for 'newName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['newName']) && (mb_strlen($this->container['newName']) < 1)) {
                $invalidProperties[] = "invalid value for 'newName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['color']) && (mb_strlen($this->container['color']) > 7)) {
                $invalidProperties[] = "invalid value for 'color', the character length must be smaller than or equal to 7.";
            }
            if (!is_null($this->container['color']) && (mb_strlen($this->container['color']) < 1)) {
                $invalidProperties[] = "invalid value for 'color', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['priority']) && ($this->container['priority'] > 30)) {
                $invalidProperties[] = "invalid value for 'priority', must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['priority']) && ($this->container['priority'] < 0)) {
                $invalidProperties[] = "invalid value for 'priority', must be bigger than or equal to 0.";
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
    * Gets name
    *  **参数解释：** 标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释：** 标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets newName
    *  **参数解释：** 新标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getNewName()
    {
        return $this->container['newName'];
    }

    /**
    * Sets newName
    *
    * @param string|null $newName **参数解释：** 新标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setNewName($newName)
    {
        $this->container['newName'] = $newName;
        return $this;
    }

    /**
    * Gets color
    *  **参数解释：** 标签颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **约束限制：** 不涉及。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$` **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
    * Sets color
    *
    * @param string|null $color **参数解释：** 标签颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **约束限制：** 不涉及。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$` **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setColor($color)
    {
        $this->container['color'] = $color;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 描述。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释：** 描述。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets priority
    *  **参数解释：** 优先级。 **约束限制：** 不涉及。 **取值范围：** 0-30 **默认取值：** 不涉及。
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority **参数解释：** 优先级。 **约束限制：** 不涉及。 **取值范围：** 0-30 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets expiresAt
    *  **参数解释：** 失效时间。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return \DateTime|null
    */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
    * Sets expiresAt
    *
    * @param \DateTime|null $expiresAt **参数解释：** 失效时间。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;
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

