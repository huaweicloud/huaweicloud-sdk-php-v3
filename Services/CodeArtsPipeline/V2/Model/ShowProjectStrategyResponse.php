<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowProjectStrategyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowProjectStrategyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  规则模版实例ID
    * name  规则模版实例名称
    * type  类型
    * version  版本
    * creator  创建人
    * createTime  创建时间
    * updater  最近更新人
    * updateTime  最近更新时间
    * isValid  是否生效
    * ruleInstances  规则实例集合
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'version' => 'string',
            'creator' => 'string',
            'createTime' => 'string',
            'updater' => 'string',
            'updateTime' => 'string',
            'isValid' => 'bool',
            'ruleInstances' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleInstance[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  规则模版实例ID
    * name  规则模版实例名称
    * type  类型
    * version  版本
    * creator  创建人
    * createTime  创建时间
    * updater  最近更新人
    * updateTime  最近更新时间
    * isValid  是否生效
    * ruleInstances  规则实例集合
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'version' => null,
        'creator' => null,
        'createTime' => null,
        'updater' => null,
        'updateTime' => null,
        'isValid' => null,
        'ruleInstances' => null
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
    * id  规则模版实例ID
    * name  规则模版实例名称
    * type  类型
    * version  版本
    * creator  创建人
    * createTime  创建时间
    * updater  最近更新人
    * updateTime  最近更新时间
    * isValid  是否生效
    * ruleInstances  规则实例集合
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'version' => 'version',
            'creator' => 'creator',
            'createTime' => 'create_time',
            'updater' => 'updater',
            'updateTime' => 'update_time',
            'isValid' => 'is_valid',
            'ruleInstances' => 'rule_instances'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  规则模版实例ID
    * name  规则模版实例名称
    * type  类型
    * version  版本
    * creator  创建人
    * createTime  创建时间
    * updater  最近更新人
    * updateTime  最近更新时间
    * isValid  是否生效
    * ruleInstances  规则实例集合
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'version' => 'setVersion',
            'creator' => 'setCreator',
            'createTime' => 'setCreateTime',
            'updater' => 'setUpdater',
            'updateTime' => 'setUpdateTime',
            'isValid' => 'setIsValid',
            'ruleInstances' => 'setRuleInstances'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  规则模版实例ID
    * name  规则模版实例名称
    * type  类型
    * version  版本
    * creator  创建人
    * createTime  创建时间
    * updater  最近更新人
    * updateTime  最近更新时间
    * isValid  是否生效
    * ruleInstances  规则实例集合
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'version' => 'getVersion',
            'creator' => 'getCreator',
            'createTime' => 'getCreateTime',
            'updater' => 'getUpdater',
            'updateTime' => 'getUpdateTime',
            'isValid' => 'getIsValid',
            'ruleInstances' => 'getRuleInstances'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updater'] = isset($data['updater']) ? $data['updater'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['isValid'] = isset($data['isValid']) ? $data['isValid'] : null;
        $this->container['ruleInstances'] = isset($data['ruleInstances']) ? $data['ruleInstances'] : null;
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
    *  规则模版实例ID
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
    * @param string|null $id 规则模版实例ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  规则模版实例名称
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
    * @param string|null $name 规则模版实例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets version
    *  版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets creator
    *  创建人
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建人
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updater
    *  最近更新人
    *
    * @return string|null
    */
    public function getUpdater()
    {
        return $this->container['updater'];
    }

    /**
    * Sets updater
    *
    * @param string|null $updater 最近更新人
    *
    * @return $this
    */
    public function setUpdater($updater)
    {
        $this->container['updater'] = $updater;
        return $this;
    }

    /**
    * Gets updateTime
    *  最近更新时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 最近更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets isValid
    *  是否生效
    *
    * @return bool|null
    */
    public function getIsValid()
    {
        return $this->container['isValid'];
    }

    /**
    * Sets isValid
    *
    * @param bool|null $isValid 是否生效
    *
    * @return $this
    */
    public function setIsValid($isValid)
    {
        $this->container['isValid'] = $isValid;
        return $this;
    }

    /**
    * Gets ruleInstances
    *  规则实例集合
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleInstance[]|null
    */
    public function getRuleInstances()
    {
        return $this->container['ruleInstances'];
    }

    /**
    * Sets ruleInstances
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleInstance[]|null $ruleInstances 规则实例集合
    *
    * @return $this
    */
    public function setRuleInstances($ruleInstances)
    {
        $this->container['ruleInstances'] = $ruleInstances;
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

