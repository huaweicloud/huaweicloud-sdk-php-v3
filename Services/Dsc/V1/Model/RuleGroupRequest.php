<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleGroupRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleGroupRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  规则类别，内置规则(BUILT_IN)或自建规则(BUILT_SELF)
    * defaultStatus  是否默认规则组
    * groupDesc  规则组描述
    * groupName  规则组名称
    * id  规则组ID
    * ruleIds  包含的规则ID列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'defaultStatus' => 'bool',
            'groupDesc' => 'string',
            'groupName' => 'string',
            'id' => 'string',
            'ruleIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  规则类别，内置规则(BUILT_IN)或自建规则(BUILT_SELF)
    * defaultStatus  是否默认规则组
    * groupDesc  规则组描述
    * groupName  规则组名称
    * id  规则组ID
    * ruleIds  包含的规则ID列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'defaultStatus' => null,
        'groupDesc' => null,
        'groupName' => null,
        'id' => null,
        'ruleIds' => null
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
    * defaultStatus  是否默认规则组
    * groupDesc  规则组描述
    * groupName  规则组名称
    * id  规则组ID
    * ruleIds  包含的规则ID列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'defaultStatus' => 'default_status',
            'groupDesc' => 'group_desc',
            'groupName' => 'group_name',
            'id' => 'id',
            'ruleIds' => 'rule_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  规则类别，内置规则(BUILT_IN)或自建规则(BUILT_SELF)
    * defaultStatus  是否默认规则组
    * groupDesc  规则组描述
    * groupName  规则组名称
    * id  规则组ID
    * ruleIds  包含的规则ID列表
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'defaultStatus' => 'setDefaultStatus',
            'groupDesc' => 'setGroupDesc',
            'groupName' => 'setGroupName',
            'id' => 'setId',
            'ruleIds' => 'setRuleIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  规则类别，内置规则(BUILT_IN)或自建规则(BUILT_SELF)
    * defaultStatus  是否默认规则组
    * groupDesc  规则组描述
    * groupName  规则组名称
    * id  规则组ID
    * ruleIds  包含的规则ID列表
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'defaultStatus' => 'getDefaultStatus',
            'groupDesc' => 'getGroupDesc',
            'groupName' => 'getGroupName',
            'id' => 'getId',
            'ruleIds' => 'getRuleIds'
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
        $this->container['defaultStatus'] = isset($data['defaultStatus']) ? $data['defaultStatus'] : null;
        $this->container['groupDesc'] = isset($data['groupDesc']) ? $data['groupDesc'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ruleIds'] = isset($data['ruleIds']) ? $data['ruleIds'] : null;
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
    * Gets defaultStatus
    *  是否默认规则组
    *
    * @return bool|null
    */
    public function getDefaultStatus()
    {
        return $this->container['defaultStatus'];
    }

    /**
    * Sets defaultStatus
    *
    * @param bool|null $defaultStatus 是否默认规则组
    *
    * @return $this
    */
    public function setDefaultStatus($defaultStatus)
    {
        $this->container['defaultStatus'] = $defaultStatus;
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
    * Gets ruleIds
    *  包含的规则ID列表
    *
    * @return string[]|null
    */
    public function getRuleIds()
    {
        return $this->container['ruleIds'];
    }

    /**
    * Sets ruleIds
    *
    * @param string[]|null $ruleIds 包含的规则ID列表
    *
    * @return $this
    */
    public function setRuleIds($ruleIds)
    {
        $this->container['ruleIds'] = $ruleIds;
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

