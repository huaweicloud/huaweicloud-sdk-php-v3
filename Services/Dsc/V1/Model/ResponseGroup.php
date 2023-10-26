<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResponseGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResponseGroup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  规则类别，内置规则(BUILT_IN)或自建规则(BUILT_SELF)
    * deleteAllowed  是否允许删除
    * groupDesc  规则组描述
    * groupName  规则组名称
    * id  规则组ID
    * ruleNames  规则名称
    * taskNames  扫描任务名称
    * isDefault  是否为默认规则组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'deleteAllowed' => 'bool',
            'groupDesc' => 'string',
            'groupName' => 'string',
            'id' => 'string',
            'ruleNames' => 'string',
            'taskNames' => 'string',
            'isDefault' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  规则类别，内置规则(BUILT_IN)或自建规则(BUILT_SELF)
    * deleteAllowed  是否允许删除
    * groupDesc  规则组描述
    * groupName  规则组名称
    * id  规则组ID
    * ruleNames  规则名称
    * taskNames  扫描任务名称
    * isDefault  是否为默认规则组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'deleteAllowed' => null,
        'groupDesc' => null,
        'groupName' => null,
        'id' => null,
        'ruleNames' => null,
        'taskNames' => null,
        'isDefault' => null
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
    * category  规则类别，内置规则(BUILT_IN)或自建规则(BUILT_SELF)
    * deleteAllowed  是否允许删除
    * groupDesc  规则组描述
    * groupName  规则组名称
    * id  规则组ID
    * ruleNames  规则名称
    * taskNames  扫描任务名称
    * isDefault  是否为默认规则组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'deleteAllowed' => 'delete_allowed',
            'groupDesc' => 'group_desc',
            'groupName' => 'group_name',
            'id' => 'id',
            'ruleNames' => 'rule_names',
            'taskNames' => 'task_names',
            'isDefault' => 'is_default'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  规则类别，内置规则(BUILT_IN)或自建规则(BUILT_SELF)
    * deleteAllowed  是否允许删除
    * groupDesc  规则组描述
    * groupName  规则组名称
    * id  规则组ID
    * ruleNames  规则名称
    * taskNames  扫描任务名称
    * isDefault  是否为默认规则组
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'deleteAllowed' => 'setDeleteAllowed',
            'groupDesc' => 'setGroupDesc',
            'groupName' => 'setGroupName',
            'id' => 'setId',
            'ruleNames' => 'setRuleNames',
            'taskNames' => 'setTaskNames',
            'isDefault' => 'setIsDefault'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  规则类别，内置规则(BUILT_IN)或自建规则(BUILT_SELF)
    * deleteAllowed  是否允许删除
    * groupDesc  规则组描述
    * groupName  规则组名称
    * id  规则组ID
    * ruleNames  规则名称
    * taskNames  扫描任务名称
    * isDefault  是否为默认规则组
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'deleteAllowed' => 'getDeleteAllowed',
            'groupDesc' => 'getGroupDesc',
            'groupName' => 'getGroupName',
            'id' => 'getId',
            'ruleNames' => 'getRuleNames',
            'taskNames' => 'getTaskNames',
            'isDefault' => 'getIsDefault'
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
    const CATEGORY_BUILT_IN = 'BUILT_IN';
    const CATEGORY_BUILT_SELF = 'BUILT_SELF';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_BUILT_IN,
            self::CATEGORY_BUILT_SELF,
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['deleteAllowed'] = isset($data['deleteAllowed']) ? $data['deleteAllowed'] : null;
        $this->container['groupDesc'] = isset($data['groupDesc']) ? $data['groupDesc'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ruleNames'] = isset($data['ruleNames']) ? $data['ruleNames'] : null;
        $this->container['taskNames'] = isset($data['taskNames']) ? $data['taskNames'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets category
    *  规则类别，内置规则(BUILT_IN)或自建规则(BUILT_SELF)
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 规则类别，内置规则(BUILT_IN)或自建规则(BUILT_SELF)
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets deleteAllowed
    *  是否允许删除
    *
    * @return bool|null
    */
    public function getDeleteAllowed()
    {
        return $this->container['deleteAllowed'];
    }

    /**
    * Sets deleteAllowed
    *
    * @param bool|null $deleteAllowed 是否允许删除
    *
    * @return $this
    */
    public function setDeleteAllowed($deleteAllowed)
    {
        $this->container['deleteAllowed'] = $deleteAllowed;
        return $this;
    }

    /**
    * Gets groupDesc
    *  规则组描述
    *
    * @return string|null
    */
    public function getGroupDesc()
    {
        return $this->container['groupDesc'];
    }

    /**
    * Sets groupDesc
    *
    * @param string|null $groupDesc 规则组描述
    *
    * @return $this
    */
    public function setGroupDesc($groupDesc)
    {
        $this->container['groupDesc'] = $groupDesc;
        return $this;
    }

    /**
    * Gets groupName
    *  规则组名称
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
    * @param string|null $groupName 规则组名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets id
    *  规则组ID
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
    * @param string|null $id 规则组ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ruleNames
    *  规则名称
    *
    * @return string|null
    */
    public function getRuleNames()
    {
        return $this->container['ruleNames'];
    }

    /**
    * Sets ruleNames
    *
    * @param string|null $ruleNames 规则名称
    *
    * @return $this
    */
    public function setRuleNames($ruleNames)
    {
        $this->container['ruleNames'] = $ruleNames;
        return $this;
    }

    /**
    * Gets taskNames
    *  扫描任务名称
    *
    * @return string|null
    */
    public function getTaskNames()
    {
        return $this->container['taskNames'];
    }

    /**
    * Sets taskNames
    *
    * @param string|null $taskNames 扫描任务名称
    *
    * @return $this
    */
    public function setTaskNames($taskNames)
    {
        $this->container['taskNames'] = $taskNames;
        return $this;
    }

    /**
    * Gets isDefault
    *  是否为默认规则组
    *
    * @return bool|null
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param bool|null $isDefault 是否为默认规则组
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
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

