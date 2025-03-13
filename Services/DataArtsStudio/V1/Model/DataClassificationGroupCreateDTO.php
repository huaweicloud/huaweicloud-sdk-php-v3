<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataClassificationGroupCreateDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataClassificationGroupCreateDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  规则名称
    * ruleIds  规则id列表
    * description  规则组描述
    * createRules  需要创建的规则
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'ruleIds' => 'string[]',
            'description' => 'string',
            'createRules' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataClassificationGroupCombineRuleDTO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  规则名称
    * ruleIds  规则id列表
    * description  规则组描述
    * createRules  需要创建的规则
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'ruleIds' => null,
        'description' => null,
        'createRules' => null
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
    * name  规则名称
    * ruleIds  规则id列表
    * description  规则组描述
    * createRules  需要创建的规则
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'ruleIds' => 'rule_ids',
            'description' => 'description',
            'createRules' => 'create_rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  规则名称
    * ruleIds  规则id列表
    * description  规则组描述
    * createRules  需要创建的规则
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'ruleIds' => 'setRuleIds',
            'description' => 'setDescription',
            'createRules' => 'setCreateRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  规则名称
    * ruleIds  规则id列表
    * description  规则组描述
    * createRules  需要创建的规则
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'ruleIds' => 'getRuleIds',
            'description' => 'getDescription',
            'createRules' => 'getCreateRules'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ruleIds'] = isset($data['ruleIds']) ? $data['ruleIds'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createRules'] = isset($data['createRules']) ? $data['createRules'] : null;
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
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['ruleIds'] === null) {
            $invalidProperties[] = "'ruleIds' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 4096)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    *  规则名称
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
    * @param string $name 规则名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ruleIds
    *  规则id列表
    *
    * @return string[]
    */
    public function getRuleIds()
    {
        return $this->container['ruleIds'];
    }

    /**
    * Sets ruleIds
    *
    * @param string[] $ruleIds 规则id列表
    *
    * @return $this
    */
    public function setRuleIds($ruleIds)
    {
        $this->container['ruleIds'] = $ruleIds;
        return $this;
    }

    /**
    * Gets description
    *  规则组描述
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
    * @param string|null $description 规则组描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createRules
    *  需要创建的规则
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataClassificationGroupCombineRuleDTO[]|null
    */
    public function getCreateRules()
    {
        return $this->container['createRules'];
    }

    /**
    * Sets createRules
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataClassificationGroupCombineRuleDTO[]|null $createRules 需要创建的规则
    *
    * @return $this
    */
    public function setCreateRules($createRules)
    {
        $this->container['createRules'] = $createRules;
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

