<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DerivativeIndexDimensionVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DerivativeIndexDimensionVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  维度分组ID。
    * role  维度角色。
    * dimensionId  维度ID。
    * hierarchiesId  维度层级ID。
    * ordinal  序号。
    * groupName  维度分组名称。
    * groupCode  维度分组编码。
    * bizType  bizType
    * hierarchies  层级属性。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * l1Id  主题域分组ID。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID。
    * dwType  数据连接类型。
    * id  id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'role' => 'string',
            'dimensionId' => 'int',
            'hierarchiesId' => 'int',
            'ordinal' => 'int',
            'groupName' => 'string',
            'groupCode' => 'string',
            'bizType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum',
            'hierarchies' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionHierarchiesVO[]',
            'l1' => 'string',
            'l2' => 'string',
            'l3' => 'string',
            'l1Id' => 'int',
            'l2Id' => 'string',
            'l3Id' => 'int',
            'dwType' => 'string',
            'id' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  维度分组ID。
    * role  维度角色。
    * dimensionId  维度ID。
    * hierarchiesId  维度层级ID。
    * ordinal  序号。
    * groupName  维度分组名称。
    * groupCode  维度分组编码。
    * bizType  bizType
    * hierarchies  层级属性。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * l1Id  主题域分组ID。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID。
    * dwType  数据连接类型。
    * id  id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'role' => null,
        'dimensionId' => 'int64',
        'hierarchiesId' => 'int64',
        'ordinal' => null,
        'groupName' => null,
        'groupCode' => null,
        'bizType' => null,
        'hierarchies' => null,
        'l1' => null,
        'l2' => null,
        'l3' => null,
        'l1Id' => 'int64',
        'l2Id' => null,
        'l3Id' => 'int64',
        'dwType' => null,
        'id' => 'int64'
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
    * groupId  维度分组ID。
    * role  维度角色。
    * dimensionId  维度ID。
    * hierarchiesId  维度层级ID。
    * ordinal  序号。
    * groupName  维度分组名称。
    * groupCode  维度分组编码。
    * bizType  bizType
    * hierarchies  层级属性。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * l1Id  主题域分组ID。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID。
    * dwType  数据连接类型。
    * id  id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'role' => 'role',
            'dimensionId' => 'dimension_id',
            'hierarchiesId' => 'hierarchies_id',
            'ordinal' => 'ordinal',
            'groupName' => 'group_name',
            'groupCode' => 'group_code',
            'bizType' => 'biz_type',
            'hierarchies' => 'hierarchies',
            'l1' => 'l1',
            'l2' => 'l2',
            'l3' => 'l3',
            'l1Id' => 'l1_id',
            'l2Id' => 'l2_id',
            'l3Id' => 'l3_id',
            'dwType' => 'dw_type',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  维度分组ID。
    * role  维度角色。
    * dimensionId  维度ID。
    * hierarchiesId  维度层级ID。
    * ordinal  序号。
    * groupName  维度分组名称。
    * groupCode  维度分组编码。
    * bizType  bizType
    * hierarchies  层级属性。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * l1Id  主题域分组ID。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID。
    * dwType  数据连接类型。
    * id  id
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'role' => 'setRole',
            'dimensionId' => 'setDimensionId',
            'hierarchiesId' => 'setHierarchiesId',
            'ordinal' => 'setOrdinal',
            'groupName' => 'setGroupName',
            'groupCode' => 'setGroupCode',
            'bizType' => 'setBizType',
            'hierarchies' => 'setHierarchies',
            'l1' => 'setL1',
            'l2' => 'setL2',
            'l3' => 'setL3',
            'l1Id' => 'setL1Id',
            'l2Id' => 'setL2Id',
            'l3Id' => 'setL3Id',
            'dwType' => 'setDwType',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  维度分组ID。
    * role  维度角色。
    * dimensionId  维度ID。
    * hierarchiesId  维度层级ID。
    * ordinal  序号。
    * groupName  维度分组名称。
    * groupCode  维度分组编码。
    * bizType  bizType
    * hierarchies  层级属性。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * l1Id  主题域分组ID。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID。
    * dwType  数据连接类型。
    * id  id
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'role' => 'getRole',
            'dimensionId' => 'getDimensionId',
            'hierarchiesId' => 'getHierarchiesId',
            'ordinal' => 'getOrdinal',
            'groupName' => 'getGroupName',
            'groupCode' => 'getGroupCode',
            'bizType' => 'getBizType',
            'hierarchies' => 'getHierarchies',
            'l1' => 'getL1',
            'l2' => 'getL2',
            'l3' => 'getL3',
            'l1Id' => 'getL1Id',
            'l2Id' => 'getL2Id',
            'l3Id' => 'getL3Id',
            'dwType' => 'getDwType',
            'id' => 'getId'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['dimensionId'] = isset($data['dimensionId']) ? $data['dimensionId'] : null;
        $this->container['hierarchiesId'] = isset($data['hierarchiesId']) ? $data['hierarchiesId'] : null;
        $this->container['ordinal'] = isset($data['ordinal']) ? $data['ordinal'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['groupCode'] = isset($data['groupCode']) ? $data['groupCode'] : null;
        $this->container['bizType'] = isset($data['bizType']) ? $data['bizType'] : null;
        $this->container['hierarchies'] = isset($data['hierarchies']) ? $data['hierarchies'] : null;
        $this->container['l1'] = isset($data['l1']) ? $data['l1'] : null;
        $this->container['l2'] = isset($data['l2']) ? $data['l2'] : null;
        $this->container['l3'] = isset($data['l3']) ? $data['l3'] : null;
        $this->container['l1Id'] = isset($data['l1Id']) ? $data['l1Id'] : null;
        $this->container['l2Id'] = isset($data['l2Id']) ? $data['l2Id'] : null;
        $this->container['l3Id'] = isset($data['l3Id']) ? $data['l3Id'] : null;
        $this->container['dwType'] = isset($data['dwType']) ? $data['dwType'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
        if ($this->container['bizType'] === null) {
            $invalidProperties[] = "'bizType' can't be null";
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
    * Gets groupId
    *  维度分组ID。
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId 维度分组ID。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets role
    *  维度角色。
    *
    * @return string|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string|null $role 维度角色。
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets dimensionId
    *  维度ID。
    *
    * @return int|null
    */
    public function getDimensionId()
    {
        return $this->container['dimensionId'];
    }

    /**
    * Sets dimensionId
    *
    * @param int|null $dimensionId 维度ID。
    *
    * @return $this
    */
    public function setDimensionId($dimensionId)
    {
        $this->container['dimensionId'] = $dimensionId;
        return $this;
    }

    /**
    * Gets hierarchiesId
    *  维度层级ID。
    *
    * @return int|null
    */
    public function getHierarchiesId()
    {
        return $this->container['hierarchiesId'];
    }

    /**
    * Sets hierarchiesId
    *
    * @param int|null $hierarchiesId 维度层级ID。
    *
    * @return $this
    */
    public function setHierarchiesId($hierarchiesId)
    {
        $this->container['hierarchiesId'] = $hierarchiesId;
        return $this;
    }

    /**
    * Gets ordinal
    *  序号。
    *
    * @return int|null
    */
    public function getOrdinal()
    {
        return $this->container['ordinal'];
    }

    /**
    * Sets ordinal
    *
    * @param int|null $ordinal 序号。
    *
    * @return $this
    */
    public function setOrdinal($ordinal)
    {
        $this->container['ordinal'] = $ordinal;
        return $this;
    }

    /**
    * Gets groupName
    *  维度分组名称。
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 维度分组名称。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets groupCode
    *  维度分组编码。
    *
    * @return string|null
    */
    public function getGroupCode()
    {
        return $this->container['groupCode'];
    }

    /**
    * Sets groupCode
    *
    * @param string|null $groupCode 维度分组编码。
    *
    * @return $this
    */
    public function setGroupCode($groupCode)
    {
        $this->container['groupCode'] = $groupCode;
        return $this;
    }

    /**
    * Gets bizType
    *  bizType
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum
    */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
    * Sets bizType
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum $bizType bizType
    *
    * @return $this
    */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;
        return $this;
    }

    /**
    * Gets hierarchies
    *  层级属性。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionHierarchiesVO[]|null
    */
    public function getHierarchies()
    {
        return $this->container['hierarchies'];
    }

    /**
    * Sets hierarchies
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionHierarchiesVO[]|null $hierarchies 层级属性。
    *
    * @return $this
    */
    public function setHierarchies($hierarchies)
    {
        $this->container['hierarchies'] = $hierarchies;
        return $this;
    }

    /**
    * Gets l1
    *  主题域分组中文名，只读，创建和更新时无需填写。
    *
    * @return string|null
    */
    public function getL1()
    {
        return $this->container['l1'];
    }

    /**
    * Sets l1
    *
    * @param string|null $l1 主题域分组中文名，只读，创建和更新时无需填写。
    *
    * @return $this
    */
    public function setL1($l1)
    {
        $this->container['l1'] = $l1;
        return $this;
    }

    /**
    * Gets l2
    *  主题域中文名，只读，创建和更新时无需填写。
    *
    * @return string|null
    */
    public function getL2()
    {
        return $this->container['l2'];
    }

    /**
    * Sets l2
    *
    * @param string|null $l2 主题域中文名，只读，创建和更新时无需填写。
    *
    * @return $this
    */
    public function setL2($l2)
    {
        $this->container['l2'] = $l2;
        return $this;
    }

    /**
    * Gets l3
    *  业务对象中文名，只读，创建和更新时无需填写。
    *
    * @return string|null
    */
    public function getL3()
    {
        return $this->container['l3'];
    }

    /**
    * Sets l3
    *
    * @param string|null $l3 业务对象中文名，只读，创建和更新时无需填写。
    *
    * @return $this
    */
    public function setL3($l3)
    {
        $this->container['l3'] = $l3;
        return $this;
    }

    /**
    * Gets l1Id
    *  主题域分组ID。
    *
    * @return int|null
    */
    public function getL1Id()
    {
        return $this->container['l1Id'];
    }

    /**
    * Sets l1Id
    *
    * @param int|null $l1Id 主题域分组ID。
    *
    * @return $this
    */
    public function setL1Id($l1Id)
    {
        $this->container['l1Id'] = $l1Id;
        return $this;
    }

    /**
    * Gets l2Id
    *  主题域ID，只读，创建和更新时无需填写。
    *
    * @return string|null
    */
    public function getL2Id()
    {
        return $this->container['l2Id'];
    }

    /**
    * Sets l2Id
    *
    * @param string|null $l2Id 主题域ID，只读，创建和更新时无需填写。
    *
    * @return $this
    */
    public function setL2Id($l2Id)
    {
        $this->container['l2Id'] = $l2Id;
        return $this;
    }

    /**
    * Gets l3Id
    *  业务对象ID。
    *
    * @return int|null
    */
    public function getL3Id()
    {
        return $this->container['l3Id'];
    }

    /**
    * Sets l3Id
    *
    * @param int|null $l3Id 业务对象ID。
    *
    * @return $this
    */
    public function setL3Id($l3Id)
    {
        $this->container['l3Id'] = $l3Id;
        return $this;
    }

    /**
    * Gets dwType
    *  数据连接类型。
    *
    * @return string|null
    */
    public function getDwType()
    {
        return $this->container['dwType'];
    }

    /**
    * Sets dwType
    *
    * @param string|null $dwType 数据连接类型。
    *
    * @return $this
    */
    public function setDwType($dwType)
    {
        $this->container['dwType'] = $dwType;
        return $this;
    }

    /**
    * Gets id
    *  id
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
    * @param int|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

