<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProcessInstanceResponseResultIssuePriority implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProcessInstanceResponse_result_issue_priority';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * displayValue  显示名称
    * value  值
    * code  编码
    * valuePy  值(拼音首字母)
    * sequence  序列
    * level  层级
    * domainId  项目ID
    * belongDefinitionType  所属定义级别
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'displayValue' => 'string',
            'value' => 'string',
            'code' => 'string',
            'valuePy' => 'string',
            'sequence' => 'int',
            'level' => 'int',
            'domainId' => 'string',
            'belongDefinitionType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * displayValue  显示名称
    * value  值
    * code  编码
    * valuePy  值(拼音首字母)
    * sequence  序列
    * level  层级
    * domainId  项目ID
    * belongDefinitionType  所属定义级别
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'displayValue' => null,
        'value' => null,
        'code' => null,
        'valuePy' => null,
        'sequence' => 'int32',
        'level' => 'int32',
        'domainId' => null,
        'belongDefinitionType' => null
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
    * id  id
    * displayValue  显示名称
    * value  值
    * code  编码
    * valuePy  值(拼音首字母)
    * sequence  序列
    * level  层级
    * domainId  项目ID
    * belongDefinitionType  所属定义级别
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'displayValue' => 'display_value',
            'value' => 'value',
            'code' => 'code',
            'valuePy' => 'value_py',
            'sequence' => 'sequence',
            'level' => 'level',
            'domainId' => 'domain_id',
            'belongDefinitionType' => 'belong_definition_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * displayValue  显示名称
    * value  值
    * code  编码
    * valuePy  值(拼音首字母)
    * sequence  序列
    * level  层级
    * domainId  项目ID
    * belongDefinitionType  所属定义级别
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'displayValue' => 'setDisplayValue',
            'value' => 'setValue',
            'code' => 'setCode',
            'valuePy' => 'setValuePy',
            'sequence' => 'setSequence',
            'level' => 'setLevel',
            'domainId' => 'setDomainId',
            'belongDefinitionType' => 'setBelongDefinitionType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * displayValue  显示名称
    * value  值
    * code  编码
    * valuePy  值(拼音首字母)
    * sequence  序列
    * level  层级
    * domainId  项目ID
    * belongDefinitionType  所属定义级别
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'displayValue' => 'getDisplayValue',
            'value' => 'getValue',
            'code' => 'getCode',
            'valuePy' => 'getValuePy',
            'sequence' => 'getSequence',
            'level' => 'getLevel',
            'domainId' => 'getDomainId',
            'belongDefinitionType' => 'getBelongDefinitionType'
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
        $this->container['displayValue'] = isset($data['displayValue']) ? $data['displayValue'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['valuePy'] = isset($data['valuePy']) ? $data['valuePy'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['belongDefinitionType'] = isset($data['belongDefinitionType']) ? $data['belongDefinitionType'] : null;
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
    *  id
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
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets displayValue
    *  显示名称
    *
    * @return string|null
    */
    public function getDisplayValue()
    {
        return $this->container['displayValue'];
    }

    /**
    * Sets displayValue
    *
    * @param string|null $displayValue 显示名称
    *
    * @return $this
    */
    public function setDisplayValue($displayValue)
    {
        $this->container['displayValue'] = $displayValue;
        return $this;
    }

    /**
    * Gets value
    *  值
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets code
    *  编码
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 编码
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets valuePy
    *  值(拼音首字母)
    *
    * @return string|null
    */
    public function getValuePy()
    {
        return $this->container['valuePy'];
    }

    /**
    * Sets valuePy
    *
    * @param string|null $valuePy 值(拼音首字母)
    *
    * @return $this
    */
    public function setValuePy($valuePy)
    {
        $this->container['valuePy'] = $valuePy;
        return $this;
    }

    /**
    * Gets sequence
    *  序列
    *
    * @return int|null
    */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
    * Sets sequence
    *
    * @param int|null $sequence 序列
    *
    * @return $this
    */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;
        return $this;
    }

    /**
    * Gets level
    *  层级
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level 层级
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets domainId
    *  项目ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 项目ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets belongDefinitionType
    *  所属定义级别
    *
    * @return string|null
    */
    public function getBelongDefinitionType()
    {
        return $this->container['belongDefinitionType'];
    }

    /**
    * Sets belongDefinitionType
    *
    * @param string|null $belongDefinitionType 所属定义级别
    *
    * @return $this
    */
    public function setBelongDefinitionType($belongDefinitionType)
    {
        $this->container['belongDefinitionType'] = $belongDefinitionType;
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

