<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubjectParamsVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubjectParamsVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编码。更新时必填，创建时可以为空，ID字符串。
    * nameCh  中文名称。
    * nameEn  英文名称。
    * description  描述信息，业务对象必填。
    * alias  别名。
    * dataOwner  数据owner部门。
    * dataOwnerList  数据owner人员。拼接成数组格式：[\"user_1\",\"user_2\"]。
    * level  层级。取值范围1-7。
    * parentId  上层主题ID，首层则为空，ID字符串。
    * selfDefinedFields  自定义项。主题的自定义属性。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'nameCh' => 'string',
            'nameEn' => 'string',
            'description' => 'string',
            'alias' => 'string',
            'dataOwner' => 'string',
            'dataOwnerList' => 'string',
            'level' => 'int',
            'parentId' => 'string',
            'selfDefinedFields' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SelfDefinedFieldVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编码。更新时必填，创建时可以为空，ID字符串。
    * nameCh  中文名称。
    * nameEn  英文名称。
    * description  描述信息，业务对象必填。
    * alias  别名。
    * dataOwner  数据owner部门。
    * dataOwnerList  数据owner人员。拼接成数组格式：[\"user_1\",\"user_2\"]。
    * level  层级。取值范围1-7。
    * parentId  上层主题ID，首层则为空，ID字符串。
    * selfDefinedFields  自定义项。主题的自定义属性。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'nameCh' => null,
        'nameEn' => null,
        'description' => null,
        'alias' => null,
        'dataOwner' => null,
        'dataOwnerList' => null,
        'level' => null,
        'parentId' => null,
        'selfDefinedFields' => null
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
    * id  编码。更新时必填，创建时可以为空，ID字符串。
    * nameCh  中文名称。
    * nameEn  英文名称。
    * description  描述信息，业务对象必填。
    * alias  别名。
    * dataOwner  数据owner部门。
    * dataOwnerList  数据owner人员。拼接成数组格式：[\"user_1\",\"user_2\"]。
    * level  层级。取值范围1-7。
    * parentId  上层主题ID，首层则为空，ID字符串。
    * selfDefinedFields  自定义项。主题的自定义属性。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'nameCh' => 'name_ch',
            'nameEn' => 'name_en',
            'description' => 'description',
            'alias' => 'alias',
            'dataOwner' => 'data_owner',
            'dataOwnerList' => 'data_owner_list',
            'level' => 'level',
            'parentId' => 'parent_id',
            'selfDefinedFields' => 'self_defined_fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编码。更新时必填，创建时可以为空，ID字符串。
    * nameCh  中文名称。
    * nameEn  英文名称。
    * description  描述信息，业务对象必填。
    * alias  别名。
    * dataOwner  数据owner部门。
    * dataOwnerList  数据owner人员。拼接成数组格式：[\"user_1\",\"user_2\"]。
    * level  层级。取值范围1-7。
    * parentId  上层主题ID，首层则为空，ID字符串。
    * selfDefinedFields  自定义项。主题的自定义属性。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'nameCh' => 'setNameCh',
            'nameEn' => 'setNameEn',
            'description' => 'setDescription',
            'alias' => 'setAlias',
            'dataOwner' => 'setDataOwner',
            'dataOwnerList' => 'setDataOwnerList',
            'level' => 'setLevel',
            'parentId' => 'setParentId',
            'selfDefinedFields' => 'setSelfDefinedFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编码。更新时必填，创建时可以为空，ID字符串。
    * nameCh  中文名称。
    * nameEn  英文名称。
    * description  描述信息，业务对象必填。
    * alias  别名。
    * dataOwner  数据owner部门。
    * dataOwnerList  数据owner人员。拼接成数组格式：[\"user_1\",\"user_2\"]。
    * level  层级。取值范围1-7。
    * parentId  上层主题ID，首层则为空，ID字符串。
    * selfDefinedFields  自定义项。主题的自定义属性。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'nameCh' => 'getNameCh',
            'nameEn' => 'getNameEn',
            'description' => 'getDescription',
            'alias' => 'getAlias',
            'dataOwner' => 'getDataOwner',
            'dataOwnerList' => 'getDataOwnerList',
            'level' => 'getLevel',
            'parentId' => 'getParentId',
            'selfDefinedFields' => 'getSelfDefinedFields'
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
        $this->container['nameCh'] = isset($data['nameCh']) ? $data['nameCh'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['dataOwner'] = isset($data['dataOwner']) ? $data['dataOwner'] : null;
        $this->container['dataOwnerList'] = isset($data['dataOwnerList']) ? $data['dataOwnerList'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['selfDefinedFields'] = isset($data['selfDefinedFields']) ? $data['selfDefinedFields'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nameCh'] === null) {
            $invalidProperties[] = "'nameCh' can't be null";
        }
            if ((mb_strlen($this->container['nameCh']) > 200)) {
                $invalidProperties[] = "invalid value for 'nameCh', the character length must be smaller than or equal to 200.";
            }
            if (!preg_match("/^[^\\\\<>]*$/", $this->container['nameCh'])) {
                $invalidProperties[] = "invalid value for 'nameCh', must be conform to the pattern /^[^\\\\<>]*$/.";
            }
        if ($this->container['nameEn'] === null) {
            $invalidProperties[] = "'nameEn' can't be null";
        }
            if ((mb_strlen($this->container['nameEn']) > 100)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 100.";
            }
            if (!preg_match("/^[a-zA-Z\\d\\s&\\(\\)_\\-]*$/", $this->container['nameEn'])) {
                $invalidProperties[] = "invalid value for 'nameEn', must be conform to the pattern /^[a-zA-Z\\d\\s&\\(\\)_\\-]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^\\\\\\\\]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^\\\\\\\\]*$/.";
            }
            if (!is_null($this->container['alias']) && (mb_strlen($this->container['alias']) > 200)) {
                $invalidProperties[] = "invalid value for 'alias', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['alias']) && !preg_match("/^[^\\\\<>]*$/", $this->container['alias'])) {
                $invalidProperties[] = "invalid value for 'alias', must be conform to the pattern /^[^\\\\<>]*$/.";
            }
            if (!is_null($this->container['dataOwner']) && (mb_strlen($this->container['dataOwner']) > 200)) {
                $invalidProperties[] = "invalid value for 'dataOwner', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['dataOwner']) && !preg_match("/^[^\\\\<>]*$/", $this->container['dataOwner'])) {
                $invalidProperties[] = "invalid value for 'dataOwner', must be conform to the pattern /^[^\\\\<>]*$/.";
            }
        if ($this->container['dataOwnerList'] === null) {
            $invalidProperties[] = "'dataOwnerList' can't be null";
        }
            if (!preg_match("/^[^\\\\<>]*$/", $this->container['dataOwnerList'])) {
                $invalidProperties[] = "invalid value for 'dataOwnerList', must be conform to the pattern /^[^\\\\<>]*$/.";
            }
        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
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
    * Gets id
    *  编码。更新时必填，创建时可以为空，ID字符串。
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
    * @param string|null $id 编码。更新时必填，创建时可以为空，ID字符串。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets nameCh
    *  中文名称。
    *
    * @return string
    */
    public function getNameCh()
    {
        return $this->container['nameCh'];
    }

    /**
    * Sets nameCh
    *
    * @param string $nameCh 中文名称。
    *
    * @return $this
    */
    public function setNameCh($nameCh)
    {
        $this->container['nameCh'] = $nameCh;
        return $this;
    }

    /**
    * Gets nameEn
    *  英文名称。
    *
    * @return string
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string $nameEn 英文名称。
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets description
    *  描述信息，业务对象必填。
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
    * @param string|null $description 描述信息，业务对象必填。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets alias
    *  别名。
    *
    * @return string|null
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string|null $alias 别名。
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets dataOwner
    *  数据owner部门。
    *
    * @return string|null
    */
    public function getDataOwner()
    {
        return $this->container['dataOwner'];
    }

    /**
    * Sets dataOwner
    *
    * @param string|null $dataOwner 数据owner部门。
    *
    * @return $this
    */
    public function setDataOwner($dataOwner)
    {
        $this->container['dataOwner'] = $dataOwner;
        return $this;
    }

    /**
    * Gets dataOwnerList
    *  数据owner人员。拼接成数组格式：[\"user_1\",\"user_2\"]。
    *
    * @return string
    */
    public function getDataOwnerList()
    {
        return $this->container['dataOwnerList'];
    }

    /**
    * Sets dataOwnerList
    *
    * @param string $dataOwnerList 数据owner人员。拼接成数组格式：[\"user_1\",\"user_2\"]。
    *
    * @return $this
    */
    public function setDataOwnerList($dataOwnerList)
    {
        $this->container['dataOwnerList'] = $dataOwnerList;
        return $this;
    }

    /**
    * Gets level
    *  层级。取值范围1-7。
    *
    * @return int
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int $level 层级。取值范围1-7。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets parentId
    *  上层主题ID，首层则为空，ID字符串。
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
    * @param string|null $parentId 上层主题ID，首层则为空，ID字符串。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets selfDefinedFields
    *  自定义项。主题的自定义属性。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SelfDefinedFieldVO[]|null
    */
    public function getSelfDefinedFields()
    {
        return $this->container['selfDefinedFields'];
    }

    /**
    * Sets selfDefinedFields
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SelfDefinedFieldVO[]|null $selfDefinedFields 自定义项。主题的自定义属性。
    *
    * @return $this
    */
    public function setSelfDefinedFields($selfDefinedFields)
    {
        $this->container['selfDefinedFields'] = $selfDefinedFields;
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

