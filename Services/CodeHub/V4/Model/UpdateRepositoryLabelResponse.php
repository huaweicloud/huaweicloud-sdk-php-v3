<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateRepositoryLabelResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateRepositoryLabelResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 标签ID。 **取值范围：** 1-2147483647
    * name  **参数解释：** 标签名。 **取值范围：** 不涉及。
    * color  **参数解释：** 标签颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$`
    * description  **参数解释：** 描述。 **取值范围：** 不涉及。
    * textColor  **参数解释：** 字体颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$`
    * expiresAt  **参数解释：** 失效时间。 **取值范围：** 不涉及。
    * isExpired  **参数解释：** 是否失效。 **取值范围：** 不涉及。
    * openMergeRequestsCount  **参数解释：** 关联开启状态MR的数量。 **约束限制：** MR仓库返回此字段。 **取值范围：** 0-2147483647
    * openChangeRequestCount  **参数解释：**  关联开启状态CR的数量。  **约束限制：**  CR仓库返回此字段。  **取值范围：**  0-2147483647
    * priority  **参数解释：** 优先级 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'color' => 'string',
            'description' => 'string',
            'textColor' => 'string',
            'expiresAt' => 'string',
            'isExpired' => 'bool',
            'openMergeRequestsCount' => 'int',
            'openChangeRequestCount' => 'int',
            'priority' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 标签ID。 **取值范围：** 1-2147483647
    * name  **参数解释：** 标签名。 **取值范围：** 不涉及。
    * color  **参数解释：** 标签颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$`
    * description  **参数解释：** 描述。 **取值范围：** 不涉及。
    * textColor  **参数解释：** 字体颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$`
    * expiresAt  **参数解释：** 失效时间。 **取值范围：** 不涉及。
    * isExpired  **参数解释：** 是否失效。 **取值范围：** 不涉及。
    * openMergeRequestsCount  **参数解释：** 关联开启状态MR的数量。 **约束限制：** MR仓库返回此字段。 **取值范围：** 0-2147483647
    * openChangeRequestCount  **参数解释：**  关联开启状态CR的数量。  **约束限制：**  CR仓库返回此字段。  **取值范围：**  0-2147483647
    * priority  **参数解释：** 优先级 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'name' => null,
        'color' => null,
        'description' => null,
        'textColor' => null,
        'expiresAt' => 'data',
        'isExpired' => null,
        'openMergeRequestsCount' => 'int32',
        'openChangeRequestCount' => 'int32',
        'priority' => 'int32'
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
    * id  **参数解释：** 标签ID。 **取值范围：** 1-2147483647
    * name  **参数解释：** 标签名。 **取值范围：** 不涉及。
    * color  **参数解释：** 标签颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$`
    * description  **参数解释：** 描述。 **取值范围：** 不涉及。
    * textColor  **参数解释：** 字体颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$`
    * expiresAt  **参数解释：** 失效时间。 **取值范围：** 不涉及。
    * isExpired  **参数解释：** 是否失效。 **取值范围：** 不涉及。
    * openMergeRequestsCount  **参数解释：** 关联开启状态MR的数量。 **约束限制：** MR仓库返回此字段。 **取值范围：** 0-2147483647
    * openChangeRequestCount  **参数解释：**  关联开启状态CR的数量。  **约束限制：**  CR仓库返回此字段。  **取值范围：**  0-2147483647
    * priority  **参数解释：** 优先级 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'color' => 'color',
            'description' => 'description',
            'textColor' => 'text_color',
            'expiresAt' => 'expires_at',
            'isExpired' => 'is_expired',
            'openMergeRequestsCount' => 'open_merge_requests_count',
            'openChangeRequestCount' => 'open_change_request_count',
            'priority' => 'priority'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 标签ID。 **取值范围：** 1-2147483647
    * name  **参数解释：** 标签名。 **取值范围：** 不涉及。
    * color  **参数解释：** 标签颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$`
    * description  **参数解释：** 描述。 **取值范围：** 不涉及。
    * textColor  **参数解释：** 字体颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$`
    * expiresAt  **参数解释：** 失效时间。 **取值范围：** 不涉及。
    * isExpired  **参数解释：** 是否失效。 **取值范围：** 不涉及。
    * openMergeRequestsCount  **参数解释：** 关联开启状态MR的数量。 **约束限制：** MR仓库返回此字段。 **取值范围：** 0-2147483647
    * openChangeRequestCount  **参数解释：**  关联开启状态CR的数量。  **约束限制：**  CR仓库返回此字段。  **取值范围：**  0-2147483647
    * priority  **参数解释：** 优先级 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'color' => 'setColor',
            'description' => 'setDescription',
            'textColor' => 'setTextColor',
            'expiresAt' => 'setExpiresAt',
            'isExpired' => 'setIsExpired',
            'openMergeRequestsCount' => 'setOpenMergeRequestsCount',
            'openChangeRequestCount' => 'setOpenChangeRequestCount',
            'priority' => 'setPriority'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 标签ID。 **取值范围：** 1-2147483647
    * name  **参数解释：** 标签名。 **取值范围：** 不涉及。
    * color  **参数解释：** 标签颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$`
    * description  **参数解释：** 描述。 **取值范围：** 不涉及。
    * textColor  **参数解释：** 字体颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$`
    * expiresAt  **参数解释：** 失效时间。 **取值范围：** 不涉及。
    * isExpired  **参数解释：** 是否失效。 **取值范围：** 不涉及。
    * openMergeRequestsCount  **参数解释：** 关联开启状态MR的数量。 **约束限制：** MR仓库返回此字段。 **取值范围：** 0-2147483647
    * openChangeRequestCount  **参数解释：**  关联开启状态CR的数量。  **约束限制：**  CR仓库返回此字段。  **取值范围：**  0-2147483647
    * priority  **参数解释：** 优先级 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'color' => 'getColor',
            'description' => 'getDescription',
            'textColor' => 'getTextColor',
            'expiresAt' => 'getExpiresAt',
            'isExpired' => 'getIsExpired',
            'openMergeRequestsCount' => 'getOpenMergeRequestsCount',
            'openChangeRequestCount' => 'getOpenChangeRequestCount',
            'priority' => 'getPriority'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['textColor'] = isset($data['textColor']) ? $data['textColor'] : null;
        $this->container['expiresAt'] = isset($data['expiresAt']) ? $data['expiresAt'] : null;
        $this->container['isExpired'] = isset($data['isExpired']) ? $data['isExpired'] : null;
        $this->container['openMergeRequestsCount'] = isset($data['openMergeRequestsCount']) ? $data['openMergeRequestsCount'] : null;
        $this->container['openChangeRequestCount'] = isset($data['openChangeRequestCount']) ? $data['openChangeRequestCount'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['textColor']) && (mb_strlen($this->container['textColor']) > 255)) {
                $invalidProperties[] = "invalid value for 'textColor', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['textColor']) && (mb_strlen($this->container['textColor']) < 1)) {
                $invalidProperties[] = "invalid value for 'textColor', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['openMergeRequestsCount']) && ($this->container['openMergeRequestsCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'openMergeRequestsCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['openMergeRequestsCount']) && ($this->container['openMergeRequestsCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'openMergeRequestsCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['openChangeRequestCount']) && ($this->container['openChangeRequestCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'openChangeRequestCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['openChangeRequestCount']) && ($this->container['openChangeRequestCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'openChangeRequestCount', must be bigger than or equal to 0.";
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
    * Gets id
    *  **参数解释：** 标签ID。 **取值范围：** 1-2147483647
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 标签ID。 **取值范围：** 1-2147483647
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 标签名。 **取值范围：** 不涉及。
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
    * @param string|null $name **参数解释：** 标签名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets color
    *  **参数解释：** 标签颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$`
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
    * @param string|null $color **参数解释：** 标签颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$`
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
    *  **参数解释：** 描述。 **取值范围：** 不涉及。
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
    * @param string|null $description **参数解释：** 描述。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets textColor
    *  **参数解释：** 字体颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$`
    *
    * @return string|null
    */
    public function getTextColor()
    {
        return $this->container['textColor'];
    }

    /**
    * Sets textColor
    *
    * @param string|null $textColor **参数解释：** 字体颜色，以6位十六进制表示法给出，带有前导“#”符号（例如，#FFAABB）。 **取值范围：** 正则`^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$`
    *
    * @return $this
    */
    public function setTextColor($textColor)
    {
        $this->container['textColor'] = $textColor;
        return $this;
    }

    /**
    * Gets expiresAt
    *  **参数解释：** 失效时间。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
    * Sets expiresAt
    *
    * @param string|null $expiresAt **参数解释：** 失效时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;
        return $this;
    }

    /**
    * Gets isExpired
    *  **参数解释：** 是否失效。 **取值范围：** 不涉及。
    *
    * @return bool|null
    */
    public function getIsExpired()
    {
        return $this->container['isExpired'];
    }

    /**
    * Sets isExpired
    *
    * @param bool|null $isExpired **参数解释：** 是否失效。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setIsExpired($isExpired)
    {
        $this->container['isExpired'] = $isExpired;
        return $this;
    }

    /**
    * Gets openMergeRequestsCount
    *  **参数解释：** 关联开启状态MR的数量。 **约束限制：** MR仓库返回此字段。 **取值范围：** 0-2147483647
    *
    * @return int|null
    */
    public function getOpenMergeRequestsCount()
    {
        return $this->container['openMergeRequestsCount'];
    }

    /**
    * Sets openMergeRequestsCount
    *
    * @param int|null $openMergeRequestsCount **参数解释：** 关联开启状态MR的数量。 **约束限制：** MR仓库返回此字段。 **取值范围：** 0-2147483647
    *
    * @return $this
    */
    public function setOpenMergeRequestsCount($openMergeRequestsCount)
    {
        $this->container['openMergeRequestsCount'] = $openMergeRequestsCount;
        return $this;
    }

    /**
    * Gets openChangeRequestCount
    *  **参数解释：**  关联开启状态CR的数量。  **约束限制：**  CR仓库返回此字段。  **取值范围：**  0-2147483647
    *
    * @return int|null
    */
    public function getOpenChangeRequestCount()
    {
        return $this->container['openChangeRequestCount'];
    }

    /**
    * Sets openChangeRequestCount
    *
    * @param int|null $openChangeRequestCount **参数解释：**  关联开启状态CR的数量。  **约束限制：**  CR仓库返回此字段。  **取值范围：**  0-2147483647
    *
    * @return $this
    */
    public function setOpenChangeRequestCount($openChangeRequestCount)
    {
        $this->container['openChangeRequestCount'] = $openChangeRequestCount;
        return $this;
    }

    /**
    * Gets priority
    *  **参数解释：** 优先级 **取值范围：** 不涉及
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
    * @param int|null $priority **参数解释：** 优先级 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
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

