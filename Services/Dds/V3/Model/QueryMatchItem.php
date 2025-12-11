<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryMatchItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryMatchItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  **参数解释：**   - 取值为“instance_name”时表示按实例名称匹配查询   - 取值为“instance_id”时表示按实例ID匹配查询。 **约束限制：** 不涉及。 **取值范围：**   - instance_name   - instance_id 默认取值： 不涉及。
    * value  **参数解释：** 待匹配的实例名称或实例ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  **参数解释：**   - 取值为“instance_name”时表示按实例名称匹配查询   - 取值为“instance_id”时表示按实例ID匹配查询。 **约束限制：** 不涉及。 **取值范围：**   - instance_name   - instance_id 默认取值： 不涉及。
    * value  **参数解释：** 待匹配的实例名称或实例ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'value' => null
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
    * key  **参数解释：**   - 取值为“instance_name”时表示按实例名称匹配查询   - 取值为“instance_id”时表示按实例ID匹配查询。 **约束限制：** 不涉及。 **取值范围：**   - instance_name   - instance_id 默认取值： 不涉及。
    * value  **参数解释：** 待匹配的实例名称或实例ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  **参数解释：**   - 取值为“instance_name”时表示按实例名称匹配查询   - 取值为“instance_id”时表示按实例ID匹配查询。 **约束限制：** 不涉及。 **取值范围：**   - instance_name   - instance_id 默认取值： 不涉及。
    * value  **参数解释：** 待匹配的实例名称或实例ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  **参数解释：**   - 取值为“instance_name”时表示按实例名称匹配查询   - 取值为“instance_id”时表示按实例ID匹配查询。 **约束限制：** 不涉及。 **取值范围：**   - instance_name   - instance_id 默认取值： 不涉及。
    * value  **参数解释：** 待匹配的实例名称或实例ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'value' => 'getValue'
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
    const KEY_INSTANCE_NAME = 'instance_name';
    const KEY_INSTANCE_ID = 'instance_id';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getKeyAllowableValues()
    {
        return [
            self::KEY_INSTANCE_NAME,
            self::KEY_INSTANCE_ID,
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
            $allowedValues = $this->getKeyAllowableValues();
                if (!is_null($this->container['key']) && !in_array($this->container['key'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'key', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
    * Gets key
    *  **参数解释：**   - 取值为“instance_name”时表示按实例名称匹配查询   - 取值为“instance_id”时表示按实例ID匹配查询。 **约束限制：** 不涉及。 **取值范围：**   - instance_name   - instance_id 默认取值： 不涉及。
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key **参数解释：**   - 取值为“instance_name”时表示按实例名称匹配查询   - 取值为“instance_id”时表示按实例ID匹配查询。 **约束限制：** 不涉及。 **取值范围：**   - instance_name   - instance_id 默认取值： 不涉及。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释：** 待匹配的实例名称或实例ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string $value **参数解释：** 待匹配的实例名称或实例ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

