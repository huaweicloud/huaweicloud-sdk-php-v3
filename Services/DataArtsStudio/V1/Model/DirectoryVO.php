<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DirectoryVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DirectoryVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  名称
    * description  描述
    * type  目录类型
    * id  ID
    * parentId  父目录ID,根节点没有此ID
    * prevId  上个节点ID,首节点没有
    * rootId  根节点ID,根节点此ID为自身ID
    * qualifiedName  所属目录
    * createTime  创建时间
    * updateTime  更新时间
    * createBy  创建人
    * updateBy  更新人
    * children  子目录
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'type' => 'string',
            'id' => 'int',
            'parentId' => 'int',
            'prevId' => 'int',
            'rootId' => 'int',
            'qualifiedName' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'createBy' => 'string',
            'updateBy' => 'string',
            'children' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DirectoryVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  名称
    * description  描述
    * type  目录类型
    * id  ID
    * parentId  父目录ID,根节点没有此ID
    * prevId  上个节点ID,首节点没有
    * rootId  根节点ID,根节点此ID为自身ID
    * qualifiedName  所属目录
    * createTime  创建时间
    * updateTime  更新时间
    * createBy  创建人
    * updateBy  更新人
    * children  子目录
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'type' => null,
        'id' => 'int64',
        'parentId' => 'int64',
        'prevId' => 'int64',
        'rootId' => 'int64',
        'qualifiedName' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'createBy' => null,
        'updateBy' => null,
        'children' => null
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
    * name  名称
    * description  描述
    * type  目录类型
    * id  ID
    * parentId  父目录ID,根节点没有此ID
    * prevId  上个节点ID,首节点没有
    * rootId  根节点ID,根节点此ID为自身ID
    * qualifiedName  所属目录
    * createTime  创建时间
    * updateTime  更新时间
    * createBy  创建人
    * updateBy  更新人
    * children  子目录
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'type' => 'type',
            'id' => 'id',
            'parentId' => 'parent_id',
            'prevId' => 'prev_id',
            'rootId' => 'root_id',
            'qualifiedName' => 'qualified_name',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'createBy' => 'create_by',
            'updateBy' => 'update_by',
            'children' => 'children'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  名称
    * description  描述
    * type  目录类型
    * id  ID
    * parentId  父目录ID,根节点没有此ID
    * prevId  上个节点ID,首节点没有
    * rootId  根节点ID,根节点此ID为自身ID
    * qualifiedName  所属目录
    * createTime  创建时间
    * updateTime  更新时间
    * createBy  创建人
    * updateBy  更新人
    * children  子目录
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'type' => 'setType',
            'id' => 'setId',
            'parentId' => 'setParentId',
            'prevId' => 'setPrevId',
            'rootId' => 'setRootId',
            'qualifiedName' => 'setQualifiedName',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'createBy' => 'setCreateBy',
            'updateBy' => 'setUpdateBy',
            'children' => 'setChildren'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  名称
    * description  描述
    * type  目录类型
    * id  ID
    * parentId  父目录ID,根节点没有此ID
    * prevId  上个节点ID,首节点没有
    * rootId  根节点ID,根节点此ID为自身ID
    * qualifiedName  所属目录
    * createTime  创建时间
    * updateTime  更新时间
    * createBy  创建人
    * updateBy  更新人
    * children  子目录
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'type' => 'getType',
            'id' => 'getId',
            'parentId' => 'getParentId',
            'prevId' => 'getPrevId',
            'rootId' => 'getRootId',
            'qualifiedName' => 'getQualifiedName',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'createBy' => 'getCreateBy',
            'updateBy' => 'getUpdateBy',
            'children' => 'getChildren'
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
    const TYPE_STANDARD_ELEMENT = 'STANDARD_ELEMENT';
    const TYPE_TAG = 'TAG';
    const TYPE_CODE = 'CODE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STANDARD_ELEMENT,
            self::TYPE_TAG,
            self::TYPE_CODE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['prevId'] = isset($data['prevId']) ? $data['prevId'] : null;
        $this->container['rootId'] = isset($data['rootId']) ? $data['rootId'] : null;
        $this->container['qualifiedName'] = isset($data['qualifiedName']) ? $data['qualifiedName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['parentId'] === null) {
            $invalidProperties[] = "'parentId' can't be null";
        }
        if ($this->container['prevId'] === null) {
            $invalidProperties[] = "'prevId' can't be null";
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
    * Gets name
    *  名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  目录类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 目录类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets id
    *  ID
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
    * @param int|null $id ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets parentId
    *  父目录ID,根节点没有此ID
    *
    * @return int
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param int $parentId 父目录ID,根节点没有此ID
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets prevId
    *  上个节点ID,首节点没有
    *
    * @return int
    */
    public function getPrevId()
    {
        return $this->container['prevId'];
    }

    /**
    * Sets prevId
    *
    * @param int $prevId 上个节点ID,首节点没有
    *
    * @return $this
    */
    public function setPrevId($prevId)
    {
        $this->container['prevId'] = $prevId;
        return $this;
    }

    /**
    * Gets rootId
    *  根节点ID,根节点此ID为自身ID
    *
    * @return int|null
    */
    public function getRootId()
    {
        return $this->container['rootId'];
    }

    /**
    * Sets rootId
    *
    * @param int|null $rootId 根节点ID,根节点此ID为自身ID
    *
    * @return $this
    */
    public function setRootId($rootId)
    {
        $this->container['rootId'] = $rootId;
        return $this;
    }

    /**
    * Gets qualifiedName
    *  所属目录
    *
    * @return string|null
    */
    public function getQualifiedName()
    {
        return $this->container['qualifiedName'];
    }

    /**
    * Sets qualifiedName
    *
    * @param string|null $qualifiedName 所属目录
    *
    * @return $this
    */
    public function setQualifiedName($qualifiedName)
    {
        $this->container['qualifiedName'] = $qualifiedName;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets createBy
    *  创建人
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 创建人
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets updateBy
    *  更新人
    *
    * @return string|null
    */
    public function getUpdateBy()
    {
        return $this->container['updateBy'];
    }

    /**
    * Sets updateBy
    *
    * @param string|null $updateBy 更新人
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
        return $this;
    }

    /**
    * Gets children
    *  子目录
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DirectoryVO[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DirectoryVO[]|null $children 子目录
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
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

