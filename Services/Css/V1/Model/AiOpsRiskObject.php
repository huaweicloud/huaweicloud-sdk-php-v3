<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AiOpsRiskObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AiOpsRiskObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 检测项ID **取值范围**： 不涉及
    * name  **参数解释**： 检测项名称 **取值范围**： 不涉及
    * desc  **参数解释**： 检测项说明 **取值范围**： 不涉及
    * level  **参数解释**： 检测结果风险等级 **取值范围**： 不涉及
    * result  **参数解释**： 检测结果 **取值范围**： 不涉及
    * suggestion  **参数解释**： 检测建议 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'desc' => 'string',
            'level' => 'string',
            'result' => 'string',
            'suggestion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 检测项ID **取值范围**： 不涉及
    * name  **参数解释**： 检测项名称 **取值范围**： 不涉及
    * desc  **参数解释**： 检测项说明 **取值范围**： 不涉及
    * level  **参数解释**： 检测结果风险等级 **取值范围**： 不涉及
    * result  **参数解释**： 检测结果 **取值范围**： 不涉及
    * suggestion  **参数解释**： 检测建议 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'desc' => null,
        'level' => null,
        'result' => null,
        'suggestion' => null
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
    * id  **参数解释**： 检测项ID **取值范围**： 不涉及
    * name  **参数解释**： 检测项名称 **取值范围**： 不涉及
    * desc  **参数解释**： 检测项说明 **取值范围**： 不涉及
    * level  **参数解释**： 检测结果风险等级 **取值范围**： 不涉及
    * result  **参数解释**： 检测结果 **取值范围**： 不涉及
    * suggestion  **参数解释**： 检测建议 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'desc' => 'desc',
            'level' => 'level',
            'result' => 'result',
            'suggestion' => 'suggestion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 检测项ID **取值范围**： 不涉及
    * name  **参数解释**： 检测项名称 **取值范围**： 不涉及
    * desc  **参数解释**： 检测项说明 **取值范围**： 不涉及
    * level  **参数解释**： 检测结果风险等级 **取值范围**： 不涉及
    * result  **参数解释**： 检测结果 **取值范围**： 不涉及
    * suggestion  **参数解释**： 检测建议 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'desc' => 'setDesc',
            'level' => 'setLevel',
            'result' => 'setResult',
            'suggestion' => 'setSuggestion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 检测项ID **取值范围**： 不涉及
    * name  **参数解释**： 检测项名称 **取值范围**： 不涉及
    * desc  **参数解释**： 检测项说明 **取值范围**： 不涉及
    * level  **参数解释**： 检测结果风险等级 **取值范围**： 不涉及
    * result  **参数解释**： 检测结果 **取值范围**： 不涉及
    * suggestion  **参数解释**： 检测建议 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'desc' => 'getDesc',
            'level' => 'getLevel',
            'result' => 'getResult',
            'suggestion' => 'getSuggestion'
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
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
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
    *  **参数解释**： 检测项ID **取值范围**： 不涉及
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
    * @param string|null $id **参数解释**： 检测项ID **取值范围**： 不涉及
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
    *  **参数解释**： 检测项名称 **取值范围**： 不涉及
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
    * @param string|null $name **参数解释**： 检测项名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets desc
    *  **参数解释**： 检测项说明 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc **参数解释**： 检测项说明 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释**： 检测结果风险等级 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level **参数解释**： 检测结果风险等级 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets result
    *  **参数解释**： 检测结果 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result **参数解释**： 检测结果 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets suggestion
    *  **参数解释**： 检测建议 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
    * Sets suggestion
    *
    * @param string|null $suggestion **参数解释**： 检测建议 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
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

