<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoryProtectedBranchBodyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositoryProtectedBranchBodyDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * names  **参数解释：** 保护分支名或通配符数组。 **约束限制：** 必传，每项需要至少能匹配到一个分支。 **取值范围：** 字符串 **默认取值：** 不涉及
    * actions  **参数解释：** 事件设置列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'names' => 'string[]',
            'actions' => '\HuaweiCloud\SDK\CodeHub\V4\Model\ProtectedBranchProtectedActionBodyDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * names  **参数解释：** 保护分支名或通配符数组。 **约束限制：** 必传，每项需要至少能匹配到一个分支。 **取值范围：** 字符串 **默认取值：** 不涉及
    * actions  **参数解释：** 事件设置列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'names' => null,
        'actions' => null
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
    * names  **参数解释：** 保护分支名或通配符数组。 **约束限制：** 必传，每项需要至少能匹配到一个分支。 **取值范围：** 字符串 **默认取值：** 不涉及
    * actions  **参数解释：** 事件设置列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'names' => 'names',
            'actions' => 'actions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * names  **参数解释：** 保护分支名或通配符数组。 **约束限制：** 必传，每项需要至少能匹配到一个分支。 **取值范围：** 字符串 **默认取值：** 不涉及
    * actions  **参数解释：** 事件设置列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'names' => 'setNames',
            'actions' => 'setActions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * names  **参数解释：** 保护分支名或通配符数组。 **约束限制：** 必传，每项需要至少能匹配到一个分支。 **取值范围：** 字符串 **默认取值：** 不涉及
    * actions  **参数解释：** 事件设置列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'names' => 'getNames',
            'actions' => 'getActions'
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
        $this->container['names'] = isset($data['names']) ? $data['names'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['names'] === null) {
            $invalidProperties[] = "'names' can't be null";
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
    * Gets names
    *  **参数解释：** 保护分支名或通配符数组。 **约束限制：** 必传，每项需要至少能匹配到一个分支。 **取值范围：** 字符串 **默认取值：** 不涉及
    *
    * @return string[]
    */
    public function getNames()
    {
        return $this->container['names'];
    }

    /**
    * Sets names
    *
    * @param string[] $names **参数解释：** 保护分支名或通配符数组。 **约束限制：** 必传，每项需要至少能匹配到一个分支。 **取值范围：** 字符串 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setNames($names)
    {
        $this->container['names'] = $names;
        return $this;
    }

    /**
    * Gets actions
    *  **参数解释：** 事件设置列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\ProtectedBranchProtectedActionBodyDto[]|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\ProtectedBranchProtectedActionBodyDto[]|null $actions **参数解释：** 事件设置列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
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

