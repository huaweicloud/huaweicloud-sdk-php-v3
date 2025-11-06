<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LineDiscussionDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LineDiscussionDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * discussions  **参数解释：** 位于某一侧某行的检视意见集合。
    * line  **参数解释：** 所在的行号。
    * type  **参数解释：** 所在的行的类型。 **取值范围：** old: 左侧删除行。 new: 右侧新增行。 unchanged-l: 左侧不变行。 unchanged-r: 右侧不变行。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'discussions' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MergeRequestBasicDiscussionDto[]',
            'line' => 'int',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * discussions  **参数解释：** 位于某一侧某行的检视意见集合。
    * line  **参数解释：** 所在的行号。
    * type  **参数解释：** 所在的行的类型。 **取值范围：** old: 左侧删除行。 new: 右侧新增行。 unchanged-l: 左侧不变行。 unchanged-r: 右侧不变行。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'discussions' => null,
        'line' => null,
        'type' => null
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
    * discussions  **参数解释：** 位于某一侧某行的检视意见集合。
    * line  **参数解释：** 所在的行号。
    * type  **参数解释：** 所在的行的类型。 **取值范围：** old: 左侧删除行。 new: 右侧新增行。 unchanged-l: 左侧不变行。 unchanged-r: 右侧不变行。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'discussions' => 'discussions',
            'line' => 'line',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * discussions  **参数解释：** 位于某一侧某行的检视意见集合。
    * line  **参数解释：** 所在的行号。
    * type  **参数解释：** 所在的行的类型。 **取值范围：** old: 左侧删除行。 new: 右侧新增行。 unchanged-l: 左侧不变行。 unchanged-r: 右侧不变行。
    *
    * @var string[]
    */
    protected static $setters = [
            'discussions' => 'setDiscussions',
            'line' => 'setLine',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * discussions  **参数解释：** 位于某一侧某行的检视意见集合。
    * line  **参数解释：** 所在的行号。
    * type  **参数解释：** 所在的行的类型。 **取值范围：** old: 左侧删除行。 new: 右侧新增行。 unchanged-l: 左侧不变行。 unchanged-r: 右侧不变行。
    *
    * @var string[]
    */
    protected static $getters = [
            'discussions' => 'getDiscussions',
            'line' => 'getLine',
            'type' => 'getType'
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
    const TYPE_OLD = 'old';
    const TYPE__NEW = 'new';
    const TYPE_UNCHANGED_L = 'unchanged-l';
    const TYPE_UNCHANGED_R = 'unchanged-r';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_OLD,
            self::TYPE__NEW,
            self::TYPE_UNCHANGED_L,
            self::TYPE_UNCHANGED_R,
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
        $this->container['discussions'] = isset($data['discussions']) ? $data['discussions'] : null;
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets discussions
    *  **参数解释：** 位于某一侧某行的检视意见集合。
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MergeRequestBasicDiscussionDto[]|null
    */
    public function getDiscussions()
    {
        return $this->container['discussions'];
    }

    /**
    * Sets discussions
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MergeRequestBasicDiscussionDto[]|null $discussions **参数解释：** 位于某一侧某行的检视意见集合。
    *
    * @return $this
    */
    public function setDiscussions($discussions)
    {
        $this->container['discussions'] = $discussions;
        return $this;
    }

    /**
    * Gets line
    *  **参数解释：** 所在的行号。
    *
    * @return int|null
    */
    public function getLine()
    {
        return $this->container['line'];
    }

    /**
    * Sets line
    *
    * @param int|null $line **参数解释：** 所在的行号。
    *
    * @return $this
    */
    public function setLine($line)
    {
        $this->container['line'] = $line;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 所在的行的类型。 **取值范围：** old: 左侧删除行。 new: 右侧新增行。 unchanged-l: 左侧不变行。 unchanged-r: 右侧不变行。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释：** 所在的行的类型。 **取值范围：** old: 左侧删除行。 new: 右侧新增行。 unchanged-l: 左侧不变行。 unchanged-r: 右侧不变行。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

