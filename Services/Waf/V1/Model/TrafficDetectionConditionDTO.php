<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrafficDetectionConditionDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrafficDetectionConditionDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** Id，唯一标识当前流量检测条件。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * matchField  **参数解释：** 匹配字段（类别），标识流量筛选的字段类型（如url表示URL路径）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * matchFieldIndex  **参数解释：** 子字段，匹配字段的细分维度（如无则不填）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * logicalOperator  **参数解释：** 逻辑运算符，标识匹配条件的逻辑关系（如contain表示包含）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * matchContents  **参数解释：** 匹配内容，符合筛选条件的具体值列表（如特定URL路径）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * valueListRes  **参数解释：** 引用表Id，关联预设的匹配内容列表ID（如无则不填）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'matchField' => 'string',
            'matchFieldIndex' => 'string',
            'logicalOperator' => 'string',
            'matchContents' => 'string[]',
            'valueListRes' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** Id，唯一标识当前流量检测条件。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * matchField  **参数解释：** 匹配字段（类别），标识流量筛选的字段类型（如url表示URL路径）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * matchFieldIndex  **参数解释：** 子字段，匹配字段的细分维度（如无则不填）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * logicalOperator  **参数解释：** 逻辑运算符，标识匹配条件的逻辑关系（如contain表示包含）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * matchContents  **参数解释：** 匹配内容，符合筛选条件的具体值列表（如特定URL路径）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * valueListRes  **参数解释：** 引用表Id，关联预设的匹配内容列表ID（如无则不填）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'matchField' => null,
        'matchFieldIndex' => null,
        'logicalOperator' => null,
        'matchContents' => null,
        'valueListRes' => null
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
    * id  **参数解释：** Id，唯一标识当前流量检测条件。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * matchField  **参数解释：** 匹配字段（类别），标识流量筛选的字段类型（如url表示URL路径）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * matchFieldIndex  **参数解释：** 子字段，匹配字段的细分维度（如无则不填）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * logicalOperator  **参数解释：** 逻辑运算符，标识匹配条件的逻辑关系（如contain表示包含）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * matchContents  **参数解释：** 匹配内容，符合筛选条件的具体值列表（如特定URL路径）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * valueListRes  **参数解释：** 引用表Id，关联预设的匹配内容列表ID（如无则不填）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'matchField' => 'match_field',
            'matchFieldIndex' => 'match_field_index',
            'logicalOperator' => 'logical_operator',
            'matchContents' => 'match_contents',
            'valueListRes' => 'value_list_res'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** Id，唯一标识当前流量检测条件。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * matchField  **参数解释：** 匹配字段（类别），标识流量筛选的字段类型（如url表示URL路径）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * matchFieldIndex  **参数解释：** 子字段，匹配字段的细分维度（如无则不填）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * logicalOperator  **参数解释：** 逻辑运算符，标识匹配条件的逻辑关系（如contain表示包含）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * matchContents  **参数解释：** 匹配内容，符合筛选条件的具体值列表（如特定URL路径）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * valueListRes  **参数解释：** 引用表Id，关联预设的匹配内容列表ID（如无则不填）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'matchField' => 'setMatchField',
            'matchFieldIndex' => 'setMatchFieldIndex',
            'logicalOperator' => 'setLogicalOperator',
            'matchContents' => 'setMatchContents',
            'valueListRes' => 'setValueListRes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** Id，唯一标识当前流量检测条件。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * matchField  **参数解释：** 匹配字段（类别），标识流量筛选的字段类型（如url表示URL路径）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * matchFieldIndex  **参数解释：** 子字段，匹配字段的细分维度（如无则不填）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * logicalOperator  **参数解释：** 逻辑运算符，标识匹配条件的逻辑关系（如contain表示包含）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * matchContents  **参数解释：** 匹配内容，符合筛选条件的具体值列表（如特定URL路径）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * valueListRes  **参数解释：** 引用表Id，关联预设的匹配内容列表ID（如无则不填）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'matchField' => 'getMatchField',
            'matchFieldIndex' => 'getMatchFieldIndex',
            'logicalOperator' => 'getLogicalOperator',
            'matchContents' => 'getMatchContents',
            'valueListRes' => 'getValueListRes'
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
        $this->container['matchField'] = isset($data['matchField']) ? $data['matchField'] : null;
        $this->container['matchFieldIndex'] = isset($data['matchFieldIndex']) ? $data['matchFieldIndex'] : null;
        $this->container['logicalOperator'] = isset($data['logicalOperator']) ? $data['logicalOperator'] : null;
        $this->container['matchContents'] = isset($data['matchContents']) ? $data['matchContents'] : null;
        $this->container['valueListRes'] = isset($data['valueListRes']) ? $data['valueListRes'] : null;
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
    * Gets id
    *  **参数解释：** Id，唯一标识当前流量检测条件。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释：** Id，唯一标识当前流量检测条件。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets matchField
    *  **参数解释：** 匹配字段（类别），标识流量筛选的字段类型（如url表示URL路径）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getMatchField()
    {
        return $this->container['matchField'];
    }

    /**
    * Sets matchField
    *
    * @param string|null $matchField **参数解释：** 匹配字段（类别），标识流量筛选的字段类型（如url表示URL路径）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setMatchField($matchField)
    {
        $this->container['matchField'] = $matchField;
        return $this;
    }

    /**
    * Gets matchFieldIndex
    *  **参数解释：** 子字段，匹配字段的细分维度（如无则不填）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getMatchFieldIndex()
    {
        return $this->container['matchFieldIndex'];
    }

    /**
    * Sets matchFieldIndex
    *
    * @param string|null $matchFieldIndex **参数解释：** 子字段，匹配字段的细分维度（如无则不填）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setMatchFieldIndex($matchFieldIndex)
    {
        $this->container['matchFieldIndex'] = $matchFieldIndex;
        return $this;
    }

    /**
    * Gets logicalOperator
    *  **参数解释：** 逻辑运算符，标识匹配条件的逻辑关系（如contain表示包含）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getLogicalOperator()
    {
        return $this->container['logicalOperator'];
    }

    /**
    * Sets logicalOperator
    *
    * @param string|null $logicalOperator **参数解释：** 逻辑运算符，标识匹配条件的逻辑关系（如contain表示包含）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setLogicalOperator($logicalOperator)
    {
        $this->container['logicalOperator'] = $logicalOperator;
        return $this;
    }

    /**
    * Gets matchContents
    *  **参数解释：** 匹配内容，符合筛选条件的具体值列表（如特定URL路径）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getMatchContents()
    {
        return $this->container['matchContents'];
    }

    /**
    * Sets matchContents
    *
    * @param string[]|null $matchContents **参数解释：** 匹配内容，符合筛选条件的具体值列表（如特定URL路径）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setMatchContents($matchContents)
    {
        $this->container['matchContents'] = $matchContents;
        return $this;
    }

    /**
    * Gets valueListRes
    *  **参数解释：** 引用表Id，关联预设的匹配内容列表ID（如无则不填）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getValueListRes()
    {
        return $this->container['valueListRes'];
    }

    /**
    * Sets valueListRes
    *
    * @param string|null $valueListRes **参数解释：** 引用表Id，关联预设的匹配内容列表ID（如无则不填）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setValueListRes($valueListRes)
    {
        $this->container['valueListRes'] = $valueListRes;
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

