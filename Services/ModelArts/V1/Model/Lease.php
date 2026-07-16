<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Lease implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Lease';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createAt  **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
    * duration  **参数解释**：实例运行时长，以创建时间为起点计算，即“创建时间+duration > 当前时刻”时，系统会自动停止实例。 **取值范围**：不涉及。
    * enable  **参数解释**：是否启用自动停止功能。 **取值范围**：布尔类型： - true：启动自动停止功能。 - false：关闭自动停止功能。
    * type  **参数解释**：自动停止类别。 **取值范围**：枚举类型，取值如下： - TIMING：自动停止。 - IDLE：空闲停止。
    * updateAt  **参数解释**：实例最后更新（不包括探活心跳）的时间，UTC毫秒。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createAt' => 'int',
            'duration' => 'int',
            'enable' => 'bool',
            'type' => 'string',
            'updateAt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createAt  **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
    * duration  **参数解释**：实例运行时长，以创建时间为起点计算，即“创建时间+duration > 当前时刻”时，系统会自动停止实例。 **取值范围**：不涉及。
    * enable  **参数解释**：是否启用自动停止功能。 **取值范围**：布尔类型： - true：启动自动停止功能。 - false：关闭自动停止功能。
    * type  **参数解释**：自动停止类别。 **取值范围**：枚举类型，取值如下： - TIMING：自动停止。 - IDLE：空闲停止。
    * updateAt  **参数解释**：实例最后更新（不包括探活心跳）的时间，UTC毫秒。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createAt' => 'int64',
        'duration' => 'int64',
        'enable' => null,
        'type' => null,
        'updateAt' => 'int64'
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
    * createAt  **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
    * duration  **参数解释**：实例运行时长，以创建时间为起点计算，即“创建时间+duration > 当前时刻”时，系统会自动停止实例。 **取值范围**：不涉及。
    * enable  **参数解释**：是否启用自动停止功能。 **取值范围**：布尔类型： - true：启动自动停止功能。 - false：关闭自动停止功能。
    * type  **参数解释**：自动停止类别。 **取值范围**：枚举类型，取值如下： - TIMING：自动停止。 - IDLE：空闲停止。
    * updateAt  **参数解释**：实例最后更新（不包括探活心跳）的时间，UTC毫秒。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createAt' => 'create_at',
            'duration' => 'duration',
            'enable' => 'enable',
            'type' => 'type',
            'updateAt' => 'update_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createAt  **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
    * duration  **参数解释**：实例运行时长，以创建时间为起点计算，即“创建时间+duration > 当前时刻”时，系统会自动停止实例。 **取值范围**：不涉及。
    * enable  **参数解释**：是否启用自动停止功能。 **取值范围**：布尔类型： - true：启动自动停止功能。 - false：关闭自动停止功能。
    * type  **参数解释**：自动停止类别。 **取值范围**：枚举类型，取值如下： - TIMING：自动停止。 - IDLE：空闲停止。
    * updateAt  **参数解释**：实例最后更新（不包括探活心跳）的时间，UTC毫秒。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'createAt' => 'setCreateAt',
            'duration' => 'setDuration',
            'enable' => 'setEnable',
            'type' => 'setType',
            'updateAt' => 'setUpdateAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createAt  **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
    * duration  **参数解释**：实例运行时长，以创建时间为起点计算，即“创建时间+duration > 当前时刻”时，系统会自动停止实例。 **取值范围**：不涉及。
    * enable  **参数解释**：是否启用自动停止功能。 **取值范围**：布尔类型： - true：启动自动停止功能。 - false：关闭自动停止功能。
    * type  **参数解释**：自动停止类别。 **取值范围**：枚举类型，取值如下： - TIMING：自动停止。 - IDLE：空闲停止。
    * updateAt  **参数解释**：实例最后更新（不包括探活心跳）的时间，UTC毫秒。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'createAt' => 'getCreateAt',
            'duration' => 'getDuration',
            'enable' => 'getEnable',
            'type' => 'getType',
            'updateAt' => 'getUpdateAt'
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
    const TYPE_TIMING = 'timing';
    const TYPE_IDLE = 'idle';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TIMING,
            self::TYPE_IDLE,
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
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
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
    * Gets createAt
    *  **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets duration
    *  **参数解释**：实例运行时长，以创建时间为起点计算，即“创建时间+duration > 当前时刻”时，系统会自动停止实例。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration **参数解释**：实例运行时长，以创建时间为起点计算，即“创建时间+duration > 当前时刻”时，系统会自动停止实例。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets enable
    *  **参数解释**：是否启用自动停止功能。 **取值范围**：布尔类型： - true：启动自动停止功能。 - false：关闭自动停止功能。
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable **参数解释**：是否启用自动停止功能。 **取值范围**：布尔类型： - true：启动自动停止功能。 - false：关闭自动停止功能。
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：自动停止类别。 **取值范围**：枚举类型，取值如下： - TIMING：自动停止。 - IDLE：空闲停止。
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
    * @param string|null $type **参数解释**：自动停止类别。 **取值范围**：枚举类型，取值如下： - TIMING：自动停止。 - IDLE：空闲停止。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets updateAt
    *  **参数解释**：实例最后更新（不包括探活心跳）的时间，UTC毫秒。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int|null $updateAt **参数解释**：实例最后更新（不包括探活心跳）的时间，UTC毫秒。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
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

