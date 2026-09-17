<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommentExtendAttribute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommentExtendAttribute';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operator  operator
    * operatorId  操作人Id
    * action  系统生成评论时执行的动作
    * actionUs  系统生成评论时执行的动作(英文)
    * objectType  系统生成评论对应的对象类型
    * preStatusCode  工作项流转前的状态Code
    * newStatusCode  工作项流转后的状态Code
    * preStatus  对象类型根据field_type_id值变化而变化。 field_type_id=10001时，为StatusVO field_type_id=10007、10008时，为字符串 field_type_id=10003、10004时，为日期时间 field_type_id=10005、10006时，为数字
    * newStatus  对象类型根据field_type_id值变化而变化。 field_type_id=10001、10002时，为StatusVO field_type_id=10007、10008时，为字符串 field_type_id=10003、10004时，为日期时间 field_type_id=10005、10006时，为数字 field_type_id=10009、10010时，为UserVO
    * fieldType  字段类型
    * fieldTypeId  字段类型对应的Id
    * displayName  字段显示名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operator' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO',
            'operatorId' => 'string',
            'action' => 'string',
            'actionUs' => 'string',
            'objectType' => 'string',
            'preStatusCode' => 'string',
            'newStatusCode' => 'string',
            'preStatus' => 'object',
            'newStatus' => 'object',
            'fieldType' => 'string',
            'fieldTypeId' => 'string',
            'displayName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operator  operator
    * operatorId  操作人Id
    * action  系统生成评论时执行的动作
    * actionUs  系统生成评论时执行的动作(英文)
    * objectType  系统生成评论对应的对象类型
    * preStatusCode  工作项流转前的状态Code
    * newStatusCode  工作项流转后的状态Code
    * preStatus  对象类型根据field_type_id值变化而变化。 field_type_id=10001时，为StatusVO field_type_id=10007、10008时，为字符串 field_type_id=10003、10004时，为日期时间 field_type_id=10005、10006时，为数字
    * newStatus  对象类型根据field_type_id值变化而变化。 field_type_id=10001、10002时，为StatusVO field_type_id=10007、10008时，为字符串 field_type_id=10003、10004时，为日期时间 field_type_id=10005、10006时，为数字 field_type_id=10009、10010时，为UserVO
    * fieldType  字段类型
    * fieldTypeId  字段类型对应的Id
    * displayName  字段显示名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operator' => null,
        'operatorId' => null,
        'action' => null,
        'actionUs' => null,
        'objectType' => null,
        'preStatusCode' => null,
        'newStatusCode' => null,
        'preStatus' => null,
        'newStatus' => null,
        'fieldType' => null,
        'fieldTypeId' => null,
        'displayName' => null
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
    * operator  operator
    * operatorId  操作人Id
    * action  系统生成评论时执行的动作
    * actionUs  系统生成评论时执行的动作(英文)
    * objectType  系统生成评论对应的对象类型
    * preStatusCode  工作项流转前的状态Code
    * newStatusCode  工作项流转后的状态Code
    * preStatus  对象类型根据field_type_id值变化而变化。 field_type_id=10001时，为StatusVO field_type_id=10007、10008时，为字符串 field_type_id=10003、10004时，为日期时间 field_type_id=10005、10006时，为数字
    * newStatus  对象类型根据field_type_id值变化而变化。 field_type_id=10001、10002时，为StatusVO field_type_id=10007、10008时，为字符串 field_type_id=10003、10004时，为日期时间 field_type_id=10005、10006时，为数字 field_type_id=10009、10010时，为UserVO
    * fieldType  字段类型
    * fieldTypeId  字段类型对应的Id
    * displayName  字段显示名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operator' => 'operator',
            'operatorId' => 'operator_id',
            'action' => 'action',
            'actionUs' => 'action_us',
            'objectType' => 'object_type',
            'preStatusCode' => 'pre_status_code',
            'newStatusCode' => 'new_status_code',
            'preStatus' => 'pre_status',
            'newStatus' => 'new_status',
            'fieldType' => 'field_type',
            'fieldTypeId' => 'field_type_id',
            'displayName' => 'display_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operator  operator
    * operatorId  操作人Id
    * action  系统生成评论时执行的动作
    * actionUs  系统生成评论时执行的动作(英文)
    * objectType  系统生成评论对应的对象类型
    * preStatusCode  工作项流转前的状态Code
    * newStatusCode  工作项流转后的状态Code
    * preStatus  对象类型根据field_type_id值变化而变化。 field_type_id=10001时，为StatusVO field_type_id=10007、10008时，为字符串 field_type_id=10003、10004时，为日期时间 field_type_id=10005、10006时，为数字
    * newStatus  对象类型根据field_type_id值变化而变化。 field_type_id=10001、10002时，为StatusVO field_type_id=10007、10008时，为字符串 field_type_id=10003、10004时，为日期时间 field_type_id=10005、10006时，为数字 field_type_id=10009、10010时，为UserVO
    * fieldType  字段类型
    * fieldTypeId  字段类型对应的Id
    * displayName  字段显示名
    *
    * @var string[]
    */
    protected static $setters = [
            'operator' => 'setOperator',
            'operatorId' => 'setOperatorId',
            'action' => 'setAction',
            'actionUs' => 'setActionUs',
            'objectType' => 'setObjectType',
            'preStatusCode' => 'setPreStatusCode',
            'newStatusCode' => 'setNewStatusCode',
            'preStatus' => 'setPreStatus',
            'newStatus' => 'setNewStatus',
            'fieldType' => 'setFieldType',
            'fieldTypeId' => 'setFieldTypeId',
            'displayName' => 'setDisplayName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operator  operator
    * operatorId  操作人Id
    * action  系统生成评论时执行的动作
    * actionUs  系统生成评论时执行的动作(英文)
    * objectType  系统生成评论对应的对象类型
    * preStatusCode  工作项流转前的状态Code
    * newStatusCode  工作项流转后的状态Code
    * preStatus  对象类型根据field_type_id值变化而变化。 field_type_id=10001时，为StatusVO field_type_id=10007、10008时，为字符串 field_type_id=10003、10004时，为日期时间 field_type_id=10005、10006时，为数字
    * newStatus  对象类型根据field_type_id值变化而变化。 field_type_id=10001、10002时，为StatusVO field_type_id=10007、10008时，为字符串 field_type_id=10003、10004时，为日期时间 field_type_id=10005、10006时，为数字 field_type_id=10009、10010时，为UserVO
    * fieldType  字段类型
    * fieldTypeId  字段类型对应的Id
    * displayName  字段显示名
    *
    * @var string[]
    */
    protected static $getters = [
            'operator' => 'getOperator',
            'operatorId' => 'getOperatorId',
            'action' => 'getAction',
            'actionUs' => 'getActionUs',
            'objectType' => 'getObjectType',
            'preStatusCode' => 'getPreStatusCode',
            'newStatusCode' => 'getNewStatusCode',
            'preStatus' => 'getPreStatus',
            'newStatus' => 'getNewStatus',
            'fieldType' => 'getFieldType',
            'fieldTypeId' => 'getFieldTypeId',
            'displayName' => 'getDisplayName'
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
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['operatorId'] = isset($data['operatorId']) ? $data['operatorId'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['actionUs'] = isset($data['actionUs']) ? $data['actionUs'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['preStatusCode'] = isset($data['preStatusCode']) ? $data['preStatusCode'] : null;
        $this->container['newStatusCode'] = isset($data['newStatusCode']) ? $data['newStatusCode'] : null;
        $this->container['preStatus'] = isset($data['preStatus']) ? $data['preStatus'] : null;
        $this->container['newStatus'] = isset($data['newStatus']) ? $data['newStatus'] : null;
        $this->container['fieldType'] = isset($data['fieldType']) ? $data['fieldType'] : null;
        $this->container['fieldTypeId'] = isset($data['fieldTypeId']) ? $data['fieldTypeId'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['operatorId']) && (mb_strlen($this->container['operatorId']) > 32)) {
                $invalidProperties[] = "invalid value for 'operatorId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['operatorId']) && (mb_strlen($this->container['operatorId']) < 32)) {
                $invalidProperties[] = "invalid value for 'operatorId', the character length must be bigger than or equal to 32.";
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
    * Gets operator
    *  operator
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null $operator operator
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets operatorId
    *  操作人Id
    *
    * @return string|null
    */
    public function getOperatorId()
    {
        return $this->container['operatorId'];
    }

    /**
    * Sets operatorId
    *
    * @param string|null $operatorId 操作人Id
    *
    * @return $this
    */
    public function setOperatorId($operatorId)
    {
        $this->container['operatorId'] = $operatorId;
        return $this;
    }

    /**
    * Gets action
    *  系统生成评论时执行的动作
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 系统生成评论时执行的动作
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets actionUs
    *  系统生成评论时执行的动作(英文)
    *
    * @return string|null
    */
    public function getActionUs()
    {
        return $this->container['actionUs'];
    }

    /**
    * Sets actionUs
    *
    * @param string|null $actionUs 系统生成评论时执行的动作(英文)
    *
    * @return $this
    */
    public function setActionUs($actionUs)
    {
        $this->container['actionUs'] = $actionUs;
        return $this;
    }

    /**
    * Gets objectType
    *  系统生成评论对应的对象类型
    *
    * @return string|null
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param string|null $objectType 系统生成评论对应的对象类型
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets preStatusCode
    *  工作项流转前的状态Code
    *
    * @return string|null
    */
    public function getPreStatusCode()
    {
        return $this->container['preStatusCode'];
    }

    /**
    * Sets preStatusCode
    *
    * @param string|null $preStatusCode 工作项流转前的状态Code
    *
    * @return $this
    */
    public function setPreStatusCode($preStatusCode)
    {
        $this->container['preStatusCode'] = $preStatusCode;
        return $this;
    }

    /**
    * Gets newStatusCode
    *  工作项流转后的状态Code
    *
    * @return string|null
    */
    public function getNewStatusCode()
    {
        return $this->container['newStatusCode'];
    }

    /**
    * Sets newStatusCode
    *
    * @param string|null $newStatusCode 工作项流转后的状态Code
    *
    * @return $this
    */
    public function setNewStatusCode($newStatusCode)
    {
        $this->container['newStatusCode'] = $newStatusCode;
        return $this;
    }

    /**
    * Gets preStatus
    *  对象类型根据field_type_id值变化而变化。 field_type_id=10001时，为StatusVO field_type_id=10007、10008时，为字符串 field_type_id=10003、10004时，为日期时间 field_type_id=10005、10006时，为数字
    *
    * @return object|null
    */
    public function getPreStatus()
    {
        return $this->container['preStatus'];
    }

    /**
    * Sets preStatus
    *
    * @param object|null $preStatus 对象类型根据field_type_id值变化而变化。 field_type_id=10001时，为StatusVO field_type_id=10007、10008时，为字符串 field_type_id=10003、10004时，为日期时间 field_type_id=10005、10006时，为数字
    *
    * @return $this
    */
    public function setPreStatus($preStatus)
    {
        $this->container['preStatus'] = $preStatus;
        return $this;
    }

    /**
    * Gets newStatus
    *  对象类型根据field_type_id值变化而变化。 field_type_id=10001、10002时，为StatusVO field_type_id=10007、10008时，为字符串 field_type_id=10003、10004时，为日期时间 field_type_id=10005、10006时，为数字 field_type_id=10009、10010时，为UserVO
    *
    * @return object|null
    */
    public function getNewStatus()
    {
        return $this->container['newStatus'];
    }

    /**
    * Sets newStatus
    *
    * @param object|null $newStatus 对象类型根据field_type_id值变化而变化。 field_type_id=10001、10002时，为StatusVO field_type_id=10007、10008时，为字符串 field_type_id=10003、10004时，为日期时间 field_type_id=10005、10006时，为数字 field_type_id=10009、10010时，为UserVO
    *
    * @return $this
    */
    public function setNewStatus($newStatus)
    {
        $this->container['newStatus'] = $newStatus;
        return $this;
    }

    /**
    * Gets fieldType
    *  字段类型
    *
    * @return string|null
    */
    public function getFieldType()
    {
        return $this->container['fieldType'];
    }

    /**
    * Sets fieldType
    *
    * @param string|null $fieldType 字段类型
    *
    * @return $this
    */
    public function setFieldType($fieldType)
    {
        $this->container['fieldType'] = $fieldType;
        return $this;
    }

    /**
    * Gets fieldTypeId
    *  字段类型对应的Id
    *
    * @return string|null
    */
    public function getFieldTypeId()
    {
        return $this->container['fieldTypeId'];
    }

    /**
    * Sets fieldTypeId
    *
    * @param string|null $fieldTypeId 字段类型对应的Id
    *
    * @return $this
    */
    public function setFieldTypeId($fieldTypeId)
    {
        $this->container['fieldTypeId'] = $fieldTypeId;
        return $this;
    }

    /**
    * Gets displayName
    *  字段显示名
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 字段显示名
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
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

