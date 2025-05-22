<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueAttrHistoryRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueAttrHistoryRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fieldKey  操作的字段
    * fieldName  操作字段的含义
    * id  历史记录id
    * issueId  工作项id
    * newValue  变更后的值,json字符串
    * oldValue  变更前的值,json字符串
    * operatedTime  变更的时间
    * operation  操作类型,新建，修改，删除
    * operator  operator
    * property  变更的属性
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fieldKey' => 'string',
            'fieldName' => 'string',
            'id' => 'int',
            'issueId' => 'int',
            'newValue' => 'string',
            'oldValue' => 'string',
            'operatedTime' => 'int',
            'operation' => 'string',
            'operator' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser',
            'property' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fieldKey  操作的字段
    * fieldName  操作字段的含义
    * id  历史记录id
    * issueId  工作项id
    * newValue  变更后的值,json字符串
    * oldValue  变更前的值,json字符串
    * operatedTime  变更的时间
    * operation  操作类型,新建，修改，删除
    * operator  operator
    * property  变更的属性
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fieldKey' => null,
        'fieldName' => null,
        'id' => 'int64',
        'issueId' => 'int64',
        'newValue' => null,
        'oldValue' => null,
        'operatedTime' => 'int64',
        'operation' => null,
        'operator' => null,
        'property' => null
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
    * fieldKey  操作的字段
    * fieldName  操作字段的含义
    * id  历史记录id
    * issueId  工作项id
    * newValue  变更后的值,json字符串
    * oldValue  变更前的值,json字符串
    * operatedTime  变更的时间
    * operation  操作类型,新建，修改，删除
    * operator  operator
    * property  变更的属性
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fieldKey' => 'field_key',
            'fieldName' => 'field_name',
            'id' => 'id',
            'issueId' => 'issue_id',
            'newValue' => 'new_value',
            'oldValue' => 'old_value',
            'operatedTime' => 'operated_time',
            'operation' => 'operation',
            'operator' => 'operator',
            'property' => 'property'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fieldKey  操作的字段
    * fieldName  操作字段的含义
    * id  历史记录id
    * issueId  工作项id
    * newValue  变更后的值,json字符串
    * oldValue  变更前的值,json字符串
    * operatedTime  变更的时间
    * operation  操作类型,新建，修改，删除
    * operator  operator
    * property  变更的属性
    *
    * @var string[]
    */
    protected static $setters = [
            'fieldKey' => 'setFieldKey',
            'fieldName' => 'setFieldName',
            'id' => 'setId',
            'issueId' => 'setIssueId',
            'newValue' => 'setNewValue',
            'oldValue' => 'setOldValue',
            'operatedTime' => 'setOperatedTime',
            'operation' => 'setOperation',
            'operator' => 'setOperator',
            'property' => 'setProperty'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fieldKey  操作的字段
    * fieldName  操作字段的含义
    * id  历史记录id
    * issueId  工作项id
    * newValue  变更后的值,json字符串
    * oldValue  变更前的值,json字符串
    * operatedTime  变更的时间
    * operation  操作类型,新建，修改，删除
    * operator  operator
    * property  变更的属性
    *
    * @var string[]
    */
    protected static $getters = [
            'fieldKey' => 'getFieldKey',
            'fieldName' => 'getFieldName',
            'id' => 'getId',
            'issueId' => 'getIssueId',
            'newValue' => 'getNewValue',
            'oldValue' => 'getOldValue',
            'operatedTime' => 'getOperatedTime',
            'operation' => 'getOperation',
            'operator' => 'getOperator',
            'property' => 'getProperty'
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
        $this->container['fieldKey'] = isset($data['fieldKey']) ? $data['fieldKey'] : null;
        $this->container['fieldName'] = isset($data['fieldName']) ? $data['fieldName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['newValue'] = isset($data['newValue']) ? $data['newValue'] : null;
        $this->container['oldValue'] = isset($data['oldValue']) ? $data['oldValue'] : null;
        $this->container['operatedTime'] = isset($data['operatedTime']) ? $data['operatedTime'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
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
    * Gets fieldKey
    *  操作的字段
    *
    * @return string|null
    */
    public function getFieldKey()
    {
        return $this->container['fieldKey'];
    }

    /**
    * Sets fieldKey
    *
    * @param string|null $fieldKey 操作的字段
    *
    * @return $this
    */
    public function setFieldKey($fieldKey)
    {
        $this->container['fieldKey'] = $fieldKey;
        return $this;
    }

    /**
    * Gets fieldName
    *  操作字段的含义
    *
    * @return string|null
    */
    public function getFieldName()
    {
        return $this->container['fieldName'];
    }

    /**
    * Sets fieldName
    *
    * @param string|null $fieldName 操作字段的含义
    *
    * @return $this
    */
    public function setFieldName($fieldName)
    {
        $this->container['fieldName'] = $fieldName;
        return $this;
    }

    /**
    * Gets id
    *  历史记录id
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
    * @param int|null $id 历史记录id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets issueId
    *  工作项id
    *
    * @return int|null
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param int|null $issueId 工作项id
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets newValue
    *  变更后的值,json字符串
    *
    * @return string|null
    */
    public function getNewValue()
    {
        return $this->container['newValue'];
    }

    /**
    * Sets newValue
    *
    * @param string|null $newValue 变更后的值,json字符串
    *
    * @return $this
    */
    public function setNewValue($newValue)
    {
        $this->container['newValue'] = $newValue;
        return $this;
    }

    /**
    * Gets oldValue
    *  变更前的值,json字符串
    *
    * @return string|null
    */
    public function getOldValue()
    {
        return $this->container['oldValue'];
    }

    /**
    * Sets oldValue
    *
    * @param string|null $oldValue 变更前的值,json字符串
    *
    * @return $this
    */
    public function setOldValue($oldValue)
    {
        $this->container['oldValue'] = $oldValue;
        return $this;
    }

    /**
    * Gets operatedTime
    *  变更的时间
    *
    * @return int|null
    */
    public function getOperatedTime()
    {
        return $this->container['operatedTime'];
    }

    /**
    * Sets operatedTime
    *
    * @param int|null $operatedTime 变更的时间
    *
    * @return $this
    */
    public function setOperatedTime($operatedTime)
    {
        $this->container['operatedTime'] = $operatedTime;
        return $this;
    }

    /**
    * Gets operation
    *  操作类型,新建，修改，删除
    *
    * @return string|null
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string|null $operation 操作类型,新建，修改，删除
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets operator
    *  operator
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser|null $operator operator
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets property
    *  变更的属性
    *
    * @return string|null
    */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
    * Sets property
    *
    * @param string|null $property 变更的属性
    *
    * @return $this
    */
    public function setProperty($property)
    {
        $this->container['property'] = $property;
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

