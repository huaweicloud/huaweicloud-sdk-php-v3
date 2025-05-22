<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkItemStatusFlowVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkItemStatusFlowVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parentName  父状态的名称
    * parentType  父状态的类型
    * statusId  状态id
    * name  状态名称
    * statusType  状态类型
    * directTo  流转到的数据
    * assignTo  处理人的uuid
    * comment  评论内容
    * requiredAssign  处理人是否必填
    * requiredNotes  评论是否必填
    * fieldType  是否是字段值，true 处理人的信息是字段值， false 处理人的值是用户的信息,固定值
    * parentId  父状态的uuid
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parentName' => 'string',
            'parentType' => 'string',
            'statusId' => 'string',
            'name' => 'string',
            'statusType' => 'string',
            'directTo' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\StatusFlowDirectToVo[]',
            'assignTo' => 'string',
            'comment' => 'string',
            'requiredAssign' => 'bool',
            'requiredNotes' => 'bool',
            'fieldType' => 'bool',
            'parentId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parentName  父状态的名称
    * parentType  父状态的类型
    * statusId  状态id
    * name  状态名称
    * statusType  状态类型
    * directTo  流转到的数据
    * assignTo  处理人的uuid
    * comment  评论内容
    * requiredAssign  处理人是否必填
    * requiredNotes  评论是否必填
    * fieldType  是否是字段值，true 处理人的信息是字段值， false 处理人的值是用户的信息,固定值
    * parentId  父状态的uuid
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parentName' => null,
        'parentType' => null,
        'statusId' => null,
        'name' => null,
        'statusType' => null,
        'directTo' => null,
        'assignTo' => null,
        'comment' => null,
        'requiredAssign' => null,
        'requiredNotes' => null,
        'fieldType' => null,
        'parentId' => null
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
    * parentName  父状态的名称
    * parentType  父状态的类型
    * statusId  状态id
    * name  状态名称
    * statusType  状态类型
    * directTo  流转到的数据
    * assignTo  处理人的uuid
    * comment  评论内容
    * requiredAssign  处理人是否必填
    * requiredNotes  评论是否必填
    * fieldType  是否是字段值，true 处理人的信息是字段值， false 处理人的值是用户的信息,固定值
    * parentId  父状态的uuid
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parentName' => 'parent_name',
            'parentType' => 'parent_type',
            'statusId' => 'status_id',
            'name' => 'name',
            'statusType' => 'status_type',
            'directTo' => 'direct_to',
            'assignTo' => 'assign_to',
            'comment' => 'comment',
            'requiredAssign' => 'required_assign',
            'requiredNotes' => 'required_notes',
            'fieldType' => 'field_type',
            'parentId' => 'parent_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parentName  父状态的名称
    * parentType  父状态的类型
    * statusId  状态id
    * name  状态名称
    * statusType  状态类型
    * directTo  流转到的数据
    * assignTo  处理人的uuid
    * comment  评论内容
    * requiredAssign  处理人是否必填
    * requiredNotes  评论是否必填
    * fieldType  是否是字段值，true 处理人的信息是字段值， false 处理人的值是用户的信息,固定值
    * parentId  父状态的uuid
    *
    * @var string[]
    */
    protected static $setters = [
            'parentName' => 'setParentName',
            'parentType' => 'setParentType',
            'statusId' => 'setStatusId',
            'name' => 'setName',
            'statusType' => 'setStatusType',
            'directTo' => 'setDirectTo',
            'assignTo' => 'setAssignTo',
            'comment' => 'setComment',
            'requiredAssign' => 'setRequiredAssign',
            'requiredNotes' => 'setRequiredNotes',
            'fieldType' => 'setFieldType',
            'parentId' => 'setParentId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parentName  父状态的名称
    * parentType  父状态的类型
    * statusId  状态id
    * name  状态名称
    * statusType  状态类型
    * directTo  流转到的数据
    * assignTo  处理人的uuid
    * comment  评论内容
    * requiredAssign  处理人是否必填
    * requiredNotes  评论是否必填
    * fieldType  是否是字段值，true 处理人的信息是字段值， false 处理人的值是用户的信息,固定值
    * parentId  父状态的uuid
    *
    * @var string[]
    */
    protected static $getters = [
            'parentName' => 'getParentName',
            'parentType' => 'getParentType',
            'statusId' => 'getStatusId',
            'name' => 'getName',
            'statusType' => 'getStatusType',
            'directTo' => 'getDirectTo',
            'assignTo' => 'getAssignTo',
            'comment' => 'getComment',
            'requiredAssign' => 'getRequiredAssign',
            'requiredNotes' => 'getRequiredNotes',
            'fieldType' => 'getFieldType',
            'parentId' => 'getParentId'
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
        $this->container['parentName'] = isset($data['parentName']) ? $data['parentName'] : null;
        $this->container['parentType'] = isset($data['parentType']) ? $data['parentType'] : null;
        $this->container['statusId'] = isset($data['statusId']) ? $data['statusId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['statusType'] = isset($data['statusType']) ? $data['statusType'] : null;
        $this->container['directTo'] = isset($data['directTo']) ? $data['directTo'] : null;
        $this->container['assignTo'] = isset($data['assignTo']) ? $data['assignTo'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['requiredAssign'] = isset($data['requiredAssign']) ? $data['requiredAssign'] : null;
        $this->container['requiredNotes'] = isset($data['requiredNotes']) ? $data['requiredNotes'] : null;
        $this->container['fieldType'] = isset($data['fieldType']) ? $data['fieldType'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
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
    * Gets parentName
    *  父状态的名称
    *
    * @return string|null
    */
    public function getParentName()
    {
        return $this->container['parentName'];
    }

    /**
    * Sets parentName
    *
    * @param string|null $parentName 父状态的名称
    *
    * @return $this
    */
    public function setParentName($parentName)
    {
        $this->container['parentName'] = $parentName;
        return $this;
    }

    /**
    * Gets parentType
    *  父状态的类型
    *
    * @return string|null
    */
    public function getParentType()
    {
        return $this->container['parentType'];
    }

    /**
    * Sets parentType
    *
    * @param string|null $parentType 父状态的类型
    *
    * @return $this
    */
    public function setParentType($parentType)
    {
        $this->container['parentType'] = $parentType;
        return $this;
    }

    /**
    * Gets statusId
    *  状态id
    *
    * @return string|null
    */
    public function getStatusId()
    {
        return $this->container['statusId'];
    }

    /**
    * Sets statusId
    *
    * @param string|null $statusId 状态id
    *
    * @return $this
    */
    public function setStatusId($statusId)
    {
        $this->container['statusId'] = $statusId;
        return $this;
    }

    /**
    * Gets name
    *  状态名称
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
    * @param string|null $name 状态名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets statusType
    *  状态类型
    *
    * @return string|null
    */
    public function getStatusType()
    {
        return $this->container['statusType'];
    }

    /**
    * Sets statusType
    *
    * @param string|null $statusType 状态类型
    *
    * @return $this
    */
    public function setStatusType($statusType)
    {
        $this->container['statusType'] = $statusType;
        return $this;
    }

    /**
    * Gets directTo
    *  流转到的数据
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\StatusFlowDirectToVo[]|null
    */
    public function getDirectTo()
    {
        return $this->container['directTo'];
    }

    /**
    * Sets directTo
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\StatusFlowDirectToVo[]|null $directTo 流转到的数据
    *
    * @return $this
    */
    public function setDirectTo($directTo)
    {
        $this->container['directTo'] = $directTo;
        return $this;
    }

    /**
    * Gets assignTo
    *  处理人的uuid
    *
    * @return string|null
    */
    public function getAssignTo()
    {
        return $this->container['assignTo'];
    }

    /**
    * Sets assignTo
    *
    * @param string|null $assignTo 处理人的uuid
    *
    * @return $this
    */
    public function setAssignTo($assignTo)
    {
        $this->container['assignTo'] = $assignTo;
        return $this;
    }

    /**
    * Gets comment
    *  评论内容
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 评论内容
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets requiredAssign
    *  处理人是否必填
    *
    * @return bool|null
    */
    public function getRequiredAssign()
    {
        return $this->container['requiredAssign'];
    }

    /**
    * Sets requiredAssign
    *
    * @param bool|null $requiredAssign 处理人是否必填
    *
    * @return $this
    */
    public function setRequiredAssign($requiredAssign)
    {
        $this->container['requiredAssign'] = $requiredAssign;
        return $this;
    }

    /**
    * Gets requiredNotes
    *  评论是否必填
    *
    * @return bool|null
    */
    public function getRequiredNotes()
    {
        return $this->container['requiredNotes'];
    }

    /**
    * Sets requiredNotes
    *
    * @param bool|null $requiredNotes 评论是否必填
    *
    * @return $this
    */
    public function setRequiredNotes($requiredNotes)
    {
        $this->container['requiredNotes'] = $requiredNotes;
        return $this;
    }

    /**
    * Gets fieldType
    *  是否是字段值，true 处理人的信息是字段值， false 处理人的值是用户的信息,固定值
    *
    * @return bool|null
    */
    public function getFieldType()
    {
        return $this->container['fieldType'];
    }

    /**
    * Sets fieldType
    *
    * @param bool|null $fieldType 是否是字段值，true 处理人的信息是字段值， false 处理人的值是用户的信息,固定值
    *
    * @return $this
    */
    public function setFieldType($fieldType)
    {
        $this->container['fieldType'] = $fieldType;
        return $this;
    }

    /**
    * Gets parentId
    *  父状态的uuid
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父状态的uuid
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
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

