<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetBackupRetainPolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetBackupRetainPolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * auto  **参数解释**  自动备份保留策略。NONE不保留，LAST保留最后一个，ALL全部保留。  **约束限制**  不涉及       **取值范围**  NONE、LAST、ALL  **默认取值**  不涉及。
    * manual  **参数解释**  手动备份保留策略。NONE不保留，LAST保留最后一个，ALL全部保留。  **约束限制**  不涉及      **取值范围**  NONE、LAST、ALL  **默认取值**  不涉及。
    * instanceids  **参数解释**  实例ID列表，实例ID是实例的唯一标识。  **约束限制**  不涉及。  **取值范围**  实例ID只能由英文字母、数字组成，长度为36个字符。  **默认取值**  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'auto' => 'string',
            'manual' => 'string',
            'instanceids' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * auto  **参数解释**  自动备份保留策略。NONE不保留，LAST保留最后一个，ALL全部保留。  **约束限制**  不涉及       **取值范围**  NONE、LAST、ALL  **默认取值**  不涉及。
    * manual  **参数解释**  手动备份保留策略。NONE不保留，LAST保留最后一个，ALL全部保留。  **约束限制**  不涉及      **取值范围**  NONE、LAST、ALL  **默认取值**  不涉及。
    * instanceids  **参数解释**  实例ID列表，实例ID是实例的唯一标识。  **约束限制**  不涉及。  **取值范围**  实例ID只能由英文字母、数字组成，长度为36个字符。  **默认取值**  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'auto' => null,
        'manual' => null,
        'instanceids' => null
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
    * auto  **参数解释**  自动备份保留策略。NONE不保留，LAST保留最后一个，ALL全部保留。  **约束限制**  不涉及       **取值范围**  NONE、LAST、ALL  **默认取值**  不涉及。
    * manual  **参数解释**  手动备份保留策略。NONE不保留，LAST保留最后一个，ALL全部保留。  **约束限制**  不涉及      **取值范围**  NONE、LAST、ALL  **默认取值**  不涉及。
    * instanceids  **参数解释**  实例ID列表，实例ID是实例的唯一标识。  **约束限制**  不涉及。  **取值范围**  实例ID只能由英文字母、数字组成，长度为36个字符。  **默认取值**  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'auto' => 'auto',
            'manual' => 'manual',
            'instanceids' => 'instanceids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * auto  **参数解释**  自动备份保留策略。NONE不保留，LAST保留最后一个，ALL全部保留。  **约束限制**  不涉及       **取值范围**  NONE、LAST、ALL  **默认取值**  不涉及。
    * manual  **参数解释**  手动备份保留策略。NONE不保留，LAST保留最后一个，ALL全部保留。  **约束限制**  不涉及      **取值范围**  NONE、LAST、ALL  **默认取值**  不涉及。
    * instanceids  **参数解释**  实例ID列表，实例ID是实例的唯一标识。  **约束限制**  不涉及。  **取值范围**  实例ID只能由英文字母、数字组成，长度为36个字符。  **默认取值**  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'auto' => 'setAuto',
            'manual' => 'setManual',
            'instanceids' => 'setInstanceids'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * auto  **参数解释**  自动备份保留策略。NONE不保留，LAST保留最后一个，ALL全部保留。  **约束限制**  不涉及       **取值范围**  NONE、LAST、ALL  **默认取值**  不涉及。
    * manual  **参数解释**  手动备份保留策略。NONE不保留，LAST保留最后一个，ALL全部保留。  **约束限制**  不涉及      **取值范围**  NONE、LAST、ALL  **默认取值**  不涉及。
    * instanceids  **参数解释**  实例ID列表，实例ID是实例的唯一标识。  **约束限制**  不涉及。  **取值范围**  实例ID只能由英文字母、数字组成，长度为36个字符。  **默认取值**  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'auto' => 'getAuto',
            'manual' => 'getManual',
            'instanceids' => 'getInstanceids'
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
        $this->container['auto'] = isset($data['auto']) ? $data['auto'] : null;
        $this->container['manual'] = isset($data['manual']) ? $data['manual'] : null;
        $this->container['instanceids'] = isset($data['instanceids']) ? $data['instanceids'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['auto'] === null) {
            $invalidProperties[] = "'auto' can't be null";
        }
        if ($this->container['manual'] === null) {
            $invalidProperties[] = "'manual' can't be null";
        }
        if ($this->container['instanceids'] === null) {
            $invalidProperties[] = "'instanceids' can't be null";
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
    * Gets auto
    *  **参数解释**  自动备份保留策略。NONE不保留，LAST保留最后一个，ALL全部保留。  **约束限制**  不涉及       **取值范围**  NONE、LAST、ALL  **默认取值**  不涉及。
    *
    * @return string
    */
    public function getAuto()
    {
        return $this->container['auto'];
    }

    /**
    * Sets auto
    *
    * @param string $auto **参数解释**  自动备份保留策略。NONE不保留，LAST保留最后一个，ALL全部保留。  **约束限制**  不涉及       **取值范围**  NONE、LAST、ALL  **默认取值**  不涉及。
    *
    * @return $this
    */
    public function setAuto($auto)
    {
        $this->container['auto'] = $auto;
        return $this;
    }

    /**
    * Gets manual
    *  **参数解释**  手动备份保留策略。NONE不保留，LAST保留最后一个，ALL全部保留。  **约束限制**  不涉及      **取值范围**  NONE、LAST、ALL  **默认取值**  不涉及。
    *
    * @return string
    */
    public function getManual()
    {
        return $this->container['manual'];
    }

    /**
    * Sets manual
    *
    * @param string $manual **参数解释**  手动备份保留策略。NONE不保留，LAST保留最后一个，ALL全部保留。  **约束限制**  不涉及      **取值范围**  NONE、LAST、ALL  **默认取值**  不涉及。
    *
    * @return $this
    */
    public function setManual($manual)
    {
        $this->container['manual'] = $manual;
        return $this;
    }

    /**
    * Gets instanceids
    *  **参数解释**  实例ID列表，实例ID是实例的唯一标识。  **约束限制**  不涉及。  **取值范围**  实例ID只能由英文字母、数字组成，长度为36个字符。  **默认取值**  不涉及。
    *
    * @return string[]
    */
    public function getInstanceids()
    {
        return $this->container['instanceids'];
    }

    /**
    * Sets instanceids
    *
    * @param string[] $instanceids **参数解释**  实例ID列表，实例ID是实例的唯一标识。  **约束限制**  不涉及。  **取值范围**  实例ID只能由英文字母、数字组成，长度为36个字符。  **默认取值**  不涉及。
    *
    * @return $this
    */
    public function setInstanceids($instanceids)
    {
        $this->container['instanceids'] = $instanceids;
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

