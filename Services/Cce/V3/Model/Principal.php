<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Principal implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Principal';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释：** 授权对象的类型。 **约束限制：** 不涉及 **取值范围：** - user：用户 - group：用户组 - agency：委托账号  **默认取值：** 不涉及
    * ids  **参数解释：** 授权对象ID列表，根据授权对象的类型，用户、用户组和委托账号，填入对应的ID。 **约束限制：** 当前最多支持同时授权500个用户/用户组。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'ids' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释：** 授权对象的类型。 **约束限制：** 不涉及 **取值范围：** - user：用户 - group：用户组 - agency：委托账号  **默认取值：** 不涉及
    * ids  **参数解释：** 授权对象ID列表，根据授权对象的类型，用户、用户组和委托账号，填入对应的ID。 **约束限制：** 当前最多支持同时授权500个用户/用户组。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'ids' => null
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
    * type  **参数解释：** 授权对象的类型。 **约束限制：** 不涉及 **取值范围：** - user：用户 - group：用户组 - agency：委托账号  **默认取值：** 不涉及
    * ids  **参数解释：** 授权对象ID列表，根据授权对象的类型，用户、用户组和委托账号，填入对应的ID。 **约束限制：** 当前最多支持同时授权500个用户/用户组。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'ids' => 'ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释：** 授权对象的类型。 **约束限制：** 不涉及 **取值范围：** - user：用户 - group：用户组 - agency：委托账号  **默认取值：** 不涉及
    * ids  **参数解释：** 授权对象ID列表，根据授权对象的类型，用户、用户组和委托账号，填入对应的ID。 **约束限制：** 当前最多支持同时授权500个用户/用户组。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'ids' => 'setIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释：** 授权对象的类型。 **约束限制：** 不涉及 **取值范围：** - user：用户 - group：用户组 - agency：委托账号  **默认取值：** 不涉及
    * ids  **参数解释：** 授权对象ID列表，根据授权对象的类型，用户、用户组和委托账号，填入对应的ID。 **约束限制：** 当前最多支持同时授权500个用户/用户组。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'ids' => 'getIds'
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
    const TYPE_USER = 'user';
    const TYPE_GROUP = 'group';
    const TYPE_AGENCY = 'agency';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_USER,
            self::TYPE_GROUP,
            self::TYPE_AGENCY,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['ids'] === null) {
            $invalidProperties[] = "'ids' can't be null";
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
    * Gets type
    *  **参数解释：** 授权对象的类型。 **约束限制：** 不涉及 **取值范围：** - user：用户 - group：用户组 - agency：委托账号  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释：** 授权对象的类型。 **约束限制：** 不涉及 **取值范围：** - user：用户 - group：用户组 - agency：委托账号  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets ids
    *  **参数解释：** 授权对象ID列表，根据授权对象的类型，用户、用户组和委托账号，填入对应的ID。 **约束限制：** 当前最多支持同时授权500个用户/用户组。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param string[] $ids **参数解释：** 授权对象ID列表，根据授权对象的类型，用户、用户组和委托账号，填入对应的ID。 **约束限制：** 当前最多支持同时授权500个用户/用户组。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
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

