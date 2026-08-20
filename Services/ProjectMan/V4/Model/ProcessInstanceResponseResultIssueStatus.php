<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProcessInstanceResponseResultIssueStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProcessInstanceResponse_result_issue_status';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  状态id
    * belonging  **参数解释**： 工作项的状态属性。 **取值范围**： START、IN_PROGRESS、END。
    * spaceId  空间id
    * name  状态名称
    * code  状态码
    * definitionType  定义类型
    * belongDefinitionType  所属字段定义类型
    * displayValue  显示值
    * position  排序位置
    * displayable  可显示
    * editable  可编辑
    * deletable  可删除
    * mutable  可变的
    * titlePy  状态拼音
    * createdBy  状态创建人
    * createdDate  状态创建时间
    * modifiedDate  状态最后修改时间
    * modifiedBy  状态最后修改人
    * linkageNodeFields  是否链接节点字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'belonging' => 'string',
            'spaceId' => 'string',
            'name' => 'string',
            'code' => 'string',
            'definitionType' => 'string',
            'belongDefinitionType' => 'int',
            'displayValue' => 'string',
            'position' => 'int',
            'displayable' => 'int',
            'editable' => 'int',
            'deletable' => 'int',
            'mutable' => 'int',
            'titlePy' => 'string',
            'createdBy' => 'string',
            'createdDate' => 'string',
            'modifiedDate' => 'string',
            'modifiedBy' => 'string',
            'linkageNodeFields' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  状态id
    * belonging  **参数解释**： 工作项的状态属性。 **取值范围**： START、IN_PROGRESS、END。
    * spaceId  空间id
    * name  状态名称
    * code  状态码
    * definitionType  定义类型
    * belongDefinitionType  所属字段定义类型
    * displayValue  显示值
    * position  排序位置
    * displayable  可显示
    * editable  可编辑
    * deletable  可删除
    * mutable  可变的
    * titlePy  状态拼音
    * createdBy  状态创建人
    * createdDate  状态创建时间
    * modifiedDate  状态最后修改时间
    * modifiedBy  状态最后修改人
    * linkageNodeFields  是否链接节点字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'belonging' => null,
        'spaceId' => null,
        'name' => null,
        'code' => null,
        'definitionType' => null,
        'belongDefinitionType' => 'int32',
        'displayValue' => null,
        'position' => 'int32',
        'displayable' => 'int32',
        'editable' => 'int32',
        'deletable' => 'int32',
        'mutable' => 'int32',
        'titlePy' => null,
        'createdBy' => null,
        'createdDate' => null,
        'modifiedDate' => null,
        'modifiedBy' => null,
        'linkageNodeFields' => null
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
    * id  状态id
    * belonging  **参数解释**： 工作项的状态属性。 **取值范围**： START、IN_PROGRESS、END。
    * spaceId  空间id
    * name  状态名称
    * code  状态码
    * definitionType  定义类型
    * belongDefinitionType  所属字段定义类型
    * displayValue  显示值
    * position  排序位置
    * displayable  可显示
    * editable  可编辑
    * deletable  可删除
    * mutable  可变的
    * titlePy  状态拼音
    * createdBy  状态创建人
    * createdDate  状态创建时间
    * modifiedDate  状态最后修改时间
    * modifiedBy  状态最后修改人
    * linkageNodeFields  是否链接节点字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'belonging' => 'belonging',
            'spaceId' => 'space_id',
            'name' => 'name',
            'code' => 'code',
            'definitionType' => 'definition_type',
            'belongDefinitionType' => 'belong_definition_type',
            'displayValue' => 'display_value',
            'position' => 'position',
            'displayable' => 'displayable',
            'editable' => 'editable',
            'deletable' => 'deletable',
            'mutable' => 'mutable',
            'titlePy' => 'title_py',
            'createdBy' => 'created_by',
            'createdDate' => 'created_date',
            'modifiedDate' => 'modified_date',
            'modifiedBy' => 'modified_by',
            'linkageNodeFields' => 'linkage_node_fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  状态id
    * belonging  **参数解释**： 工作项的状态属性。 **取值范围**： START、IN_PROGRESS、END。
    * spaceId  空间id
    * name  状态名称
    * code  状态码
    * definitionType  定义类型
    * belongDefinitionType  所属字段定义类型
    * displayValue  显示值
    * position  排序位置
    * displayable  可显示
    * editable  可编辑
    * deletable  可删除
    * mutable  可变的
    * titlePy  状态拼音
    * createdBy  状态创建人
    * createdDate  状态创建时间
    * modifiedDate  状态最后修改时间
    * modifiedBy  状态最后修改人
    * linkageNodeFields  是否链接节点字段
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'belonging' => 'setBelonging',
            'spaceId' => 'setSpaceId',
            'name' => 'setName',
            'code' => 'setCode',
            'definitionType' => 'setDefinitionType',
            'belongDefinitionType' => 'setBelongDefinitionType',
            'displayValue' => 'setDisplayValue',
            'position' => 'setPosition',
            'displayable' => 'setDisplayable',
            'editable' => 'setEditable',
            'deletable' => 'setDeletable',
            'mutable' => 'setMutable',
            'titlePy' => 'setTitlePy',
            'createdBy' => 'setCreatedBy',
            'createdDate' => 'setCreatedDate',
            'modifiedDate' => 'setModifiedDate',
            'modifiedBy' => 'setModifiedBy',
            'linkageNodeFields' => 'setLinkageNodeFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  状态id
    * belonging  **参数解释**： 工作项的状态属性。 **取值范围**： START、IN_PROGRESS、END。
    * spaceId  空间id
    * name  状态名称
    * code  状态码
    * definitionType  定义类型
    * belongDefinitionType  所属字段定义类型
    * displayValue  显示值
    * position  排序位置
    * displayable  可显示
    * editable  可编辑
    * deletable  可删除
    * mutable  可变的
    * titlePy  状态拼音
    * createdBy  状态创建人
    * createdDate  状态创建时间
    * modifiedDate  状态最后修改时间
    * modifiedBy  状态最后修改人
    * linkageNodeFields  是否链接节点字段
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'belonging' => 'getBelonging',
            'spaceId' => 'getSpaceId',
            'name' => 'getName',
            'code' => 'getCode',
            'definitionType' => 'getDefinitionType',
            'belongDefinitionType' => 'getBelongDefinitionType',
            'displayValue' => 'getDisplayValue',
            'position' => 'getPosition',
            'displayable' => 'getDisplayable',
            'editable' => 'getEditable',
            'deletable' => 'getDeletable',
            'mutable' => 'getMutable',
            'titlePy' => 'getTitlePy',
            'createdBy' => 'getCreatedBy',
            'createdDate' => 'getCreatedDate',
            'modifiedDate' => 'getModifiedDate',
            'modifiedBy' => 'getModifiedBy',
            'linkageNodeFields' => 'getLinkageNodeFields'
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
        $this->container['belonging'] = isset($data['belonging']) ? $data['belonging'] : null;
        $this->container['spaceId'] = isset($data['spaceId']) ? $data['spaceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['definitionType'] = isset($data['definitionType']) ? $data['definitionType'] : null;
        $this->container['belongDefinitionType'] = isset($data['belongDefinitionType']) ? $data['belongDefinitionType'] : null;
        $this->container['displayValue'] = isset($data['displayValue']) ? $data['displayValue'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['displayable'] = isset($data['displayable']) ? $data['displayable'] : null;
        $this->container['editable'] = isset($data['editable']) ? $data['editable'] : null;
        $this->container['deletable'] = isset($data['deletable']) ? $data['deletable'] : null;
        $this->container['mutable'] = isset($data['mutable']) ? $data['mutable'] : null;
        $this->container['titlePy'] = isset($data['titlePy']) ? $data['titlePy'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['modifiedDate'] = isset($data['modifiedDate']) ? $data['modifiedDate'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['linkageNodeFields'] = isset($data['linkageNodeFields']) ? $data['linkageNodeFields'] : null;
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
    *  状态id
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
    * @param string|null $id 状态id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets belonging
    *  **参数解释**： 工作项的状态属性。 **取值范围**： START、IN_PROGRESS、END。
    *
    * @return string|null
    */
    public function getBelonging()
    {
        return $this->container['belonging'];
    }

    /**
    * Sets belonging
    *
    * @param string|null $belonging **参数解释**： 工作项的状态属性。 **取值范围**： START、IN_PROGRESS、END。
    *
    * @return $this
    */
    public function setBelonging($belonging)
    {
        $this->container['belonging'] = $belonging;
        return $this;
    }

    /**
    * Gets spaceId
    *  空间id
    *
    * @return string|null
    */
    public function getSpaceId()
    {
        return $this->container['spaceId'];
    }

    /**
    * Sets spaceId
    *
    * @param string|null $spaceId 空间id
    *
    * @return $this
    */
    public function setSpaceId($spaceId)
    {
        $this->container['spaceId'] = $spaceId;
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
    * Gets code
    *  状态码
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
    * @param string|null $code 状态码
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets definitionType
    *  定义类型
    *
    * @return string|null
    */
    public function getDefinitionType()
    {
        return $this->container['definitionType'];
    }

    /**
    * Sets definitionType
    *
    * @param string|null $definitionType 定义类型
    *
    * @return $this
    */
    public function setDefinitionType($definitionType)
    {
        $this->container['definitionType'] = $definitionType;
        return $this;
    }

    /**
    * Gets belongDefinitionType
    *  所属字段定义类型
    *
    * @return int|null
    */
    public function getBelongDefinitionType()
    {
        return $this->container['belongDefinitionType'];
    }

    /**
    * Sets belongDefinitionType
    *
    * @param int|null $belongDefinitionType 所属字段定义类型
    *
    * @return $this
    */
    public function setBelongDefinitionType($belongDefinitionType)
    {
        $this->container['belongDefinitionType'] = $belongDefinitionType;
        return $this;
    }

    /**
    * Gets displayValue
    *  显示值
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
    * @param string|null $displayValue 显示值
    *
    * @return $this
    */
    public function setDisplayValue($displayValue)
    {
        $this->container['displayValue'] = $displayValue;
        return $this;
    }

    /**
    * Gets position
    *  排序位置
    *
    * @return int|null
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param int|null $position 排序位置
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
        return $this;
    }

    /**
    * Gets displayable
    *  可显示
    *
    * @return int|null
    */
    public function getDisplayable()
    {
        return $this->container['displayable'];
    }

    /**
    * Sets displayable
    *
    * @param int|null $displayable 可显示
    *
    * @return $this
    */
    public function setDisplayable($displayable)
    {
        $this->container['displayable'] = $displayable;
        return $this;
    }

    /**
    * Gets editable
    *  可编辑
    *
    * @return int|null
    */
    public function getEditable()
    {
        return $this->container['editable'];
    }

    /**
    * Sets editable
    *
    * @param int|null $editable 可编辑
    *
    * @return $this
    */
    public function setEditable($editable)
    {
        $this->container['editable'] = $editable;
        return $this;
    }

    /**
    * Gets deletable
    *  可删除
    *
    * @return int|null
    */
    public function getDeletable()
    {
        return $this->container['deletable'];
    }

    /**
    * Sets deletable
    *
    * @param int|null $deletable 可删除
    *
    * @return $this
    */
    public function setDeletable($deletable)
    {
        $this->container['deletable'] = $deletable;
        return $this;
    }

    /**
    * Gets mutable
    *  可变的
    *
    * @return int|null
    */
    public function getMutable()
    {
        return $this->container['mutable'];
    }

    /**
    * Sets mutable
    *
    * @param int|null $mutable 可变的
    *
    * @return $this
    */
    public function setMutable($mutable)
    {
        $this->container['mutable'] = $mutable;
        return $this;
    }

    /**
    * Gets titlePy
    *  状态拼音
    *
    * @return string|null
    */
    public function getTitlePy()
    {
        return $this->container['titlePy'];
    }

    /**
    * Sets titlePy
    *
    * @param string|null $titlePy 状态拼音
    *
    * @return $this
    */
    public function setTitlePy($titlePy)
    {
        $this->container['titlePy'] = $titlePy;
        return $this;
    }

    /**
    * Gets createdBy
    *  状态创建人
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 状态创建人
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets createdDate
    *  状态创建时间
    *
    * @return string|null
    */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
    * Sets createdDate
    *
    * @param string|null $createdDate 状态创建时间
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
    * Gets modifiedDate
    *  状态最后修改时间
    *
    * @return string|null
    */
    public function getModifiedDate()
    {
        return $this->container['modifiedDate'];
    }

    /**
    * Sets modifiedDate
    *
    * @param string|null $modifiedDate 状态最后修改时间
    *
    * @return $this
    */
    public function setModifiedDate($modifiedDate)
    {
        $this->container['modifiedDate'] = $modifiedDate;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  状态最后修改人
    *
    * @return string|null
    */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
    * Sets modifiedBy
    *
    * @param string|null $modifiedBy 状态最后修改人
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
    * Gets linkageNodeFields
    *  是否链接节点字段
    *
    * @return bool|null
    */
    public function getLinkageNodeFields()
    {
        return $this->container['linkageNodeFields'];
    }

    /**
    * Sets linkageNodeFields
    *
    * @param bool|null $linkageNodeFields 是否链接节点字段
    *
    * @return $this
    */
    public function setLinkageNodeFields($linkageNodeFields)
    {
        $this->container['linkageNodeFields'] = $linkageNodeFields;
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

