<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowStrategyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowStrategyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 规则模板实例ID。 **取值范围**： 32位字符，由数字和字母组成。
    * name  **参数解释**： 规则模板实例名称。 **取值范围**： 不涉及。
    * type  **参数解释**： 规则模板类型。 **取值范围**： 不涉及。
    * version  **参数解释**： 规则模板策略。 **取值范围**： 不涉及。
    * creator  **参数解释**： 策略创建人。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 策略创建时间。 **取值范围**： 不涉及。
    * updater  **参数解释**： 策略最近更新人。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 策略最近更新时间。 **取值范围**： 不涉及。
    * isValid  **参数解释**： 策略是否生效。 **取值范围**： - true：策略生效。 - false：策略不生效。
    * ruleInstances  **参数解释**： 规则实例集合。 **取值范围**： 不涉及。
    * level  **参数解释**： 规则实例生效级别。 **取值范围**： 不涉及。
    * isPublic  **参数解释**： 规则实例是否系统级。 **取值范围**： - true：规则实例是系统级。 - false：规则实例不是系统级。
    * isLegacy  **参数解释**： 规则实例是1.0的数据。 **取值范围**： - true：规则实例是1.0的数据。 - false：规则实例是1.0的数据。
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
            'ruleInstances' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleInstance[]',
            'level' => 'string',
            'isPublic' => 'bool',
            'isLegacy' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 规则模板实例ID。 **取值范围**： 32位字符，由数字和字母组成。
    * name  **参数解释**： 规则模板实例名称。 **取值范围**： 不涉及。
    * type  **参数解释**： 规则模板类型。 **取值范围**： 不涉及。
    * version  **参数解释**： 规则模板策略。 **取值范围**： 不涉及。
    * creator  **参数解释**： 策略创建人。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 策略创建时间。 **取值范围**： 不涉及。
    * updater  **参数解释**： 策略最近更新人。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 策略最近更新时间。 **取值范围**： 不涉及。
    * isValid  **参数解释**： 策略是否生效。 **取值范围**： - true：策略生效。 - false：策略不生效。
    * ruleInstances  **参数解释**： 规则实例集合。 **取值范围**： 不涉及。
    * level  **参数解释**： 规则实例生效级别。 **取值范围**： 不涉及。
    * isPublic  **参数解释**： 规则实例是否系统级。 **取值范围**： - true：规则实例是系统级。 - false：规则实例不是系统级。
    * isLegacy  **参数解释**： 规则实例是1.0的数据。 **取值范围**： - true：规则实例是1.0的数据。 - false：规则实例是1.0的数据。
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
        'ruleInstances' => null,
        'level' => null,
        'isPublic' => null,
        'isLegacy' => null
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
    * id  **参数解释**： 规则模板实例ID。 **取值范围**： 32位字符，由数字和字母组成。
    * name  **参数解释**： 规则模板实例名称。 **取值范围**： 不涉及。
    * type  **参数解释**： 规则模板类型。 **取值范围**： 不涉及。
    * version  **参数解释**： 规则模板策略。 **取值范围**： 不涉及。
    * creator  **参数解释**： 策略创建人。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 策略创建时间。 **取值范围**： 不涉及。
    * updater  **参数解释**： 策略最近更新人。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 策略最近更新时间。 **取值范围**： 不涉及。
    * isValid  **参数解释**： 策略是否生效。 **取值范围**： - true：策略生效。 - false：策略不生效。
    * ruleInstances  **参数解释**： 规则实例集合。 **取值范围**： 不涉及。
    * level  **参数解释**： 规则实例生效级别。 **取值范围**： 不涉及。
    * isPublic  **参数解释**： 规则实例是否系统级。 **取值范围**： - true：规则实例是系统级。 - false：规则实例不是系统级。
    * isLegacy  **参数解释**： 规则实例是1.0的数据。 **取值范围**： - true：规则实例是1.0的数据。 - false：规则实例是1.0的数据。
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
            'ruleInstances' => 'rule_instances',
            'level' => 'level',
            'isPublic' => 'is_public',
            'isLegacy' => 'is_legacy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 规则模板实例ID。 **取值范围**： 32位字符，由数字和字母组成。
    * name  **参数解释**： 规则模板实例名称。 **取值范围**： 不涉及。
    * type  **参数解释**： 规则模板类型。 **取值范围**： 不涉及。
    * version  **参数解释**： 规则模板策略。 **取值范围**： 不涉及。
    * creator  **参数解释**： 策略创建人。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 策略创建时间。 **取值范围**： 不涉及。
    * updater  **参数解释**： 策略最近更新人。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 策略最近更新时间。 **取值范围**： 不涉及。
    * isValid  **参数解释**： 策略是否生效。 **取值范围**： - true：策略生效。 - false：策略不生效。
    * ruleInstances  **参数解释**： 规则实例集合。 **取值范围**： 不涉及。
    * level  **参数解释**： 规则实例生效级别。 **取值范围**： 不涉及。
    * isPublic  **参数解释**： 规则实例是否系统级。 **取值范围**： - true：规则实例是系统级。 - false：规则实例不是系统级。
    * isLegacy  **参数解释**： 规则实例是1.0的数据。 **取值范围**： - true：规则实例是1.0的数据。 - false：规则实例是1.0的数据。
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
            'ruleInstances' => 'setRuleInstances',
            'level' => 'setLevel',
            'isPublic' => 'setIsPublic',
            'isLegacy' => 'setIsLegacy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 规则模板实例ID。 **取值范围**： 32位字符，由数字和字母组成。
    * name  **参数解释**： 规则模板实例名称。 **取值范围**： 不涉及。
    * type  **参数解释**： 规则模板类型。 **取值范围**： 不涉及。
    * version  **参数解释**： 规则模板策略。 **取值范围**： 不涉及。
    * creator  **参数解释**： 策略创建人。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 策略创建时间。 **取值范围**： 不涉及。
    * updater  **参数解释**： 策略最近更新人。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 策略最近更新时间。 **取值范围**： 不涉及。
    * isValid  **参数解释**： 策略是否生效。 **取值范围**： - true：策略生效。 - false：策略不生效。
    * ruleInstances  **参数解释**： 规则实例集合。 **取值范围**： 不涉及。
    * level  **参数解释**： 规则实例生效级别。 **取值范围**： 不涉及。
    * isPublic  **参数解释**： 规则实例是否系统级。 **取值范围**： - true：规则实例是系统级。 - false：规则实例不是系统级。
    * isLegacy  **参数解释**： 规则实例是1.0的数据。 **取值范围**： - true：规则实例是1.0的数据。 - false：规则实例是1.0的数据。
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
            'ruleInstances' => 'getRuleInstances',
            'level' => 'getLevel',
            'isPublic' => 'getIsPublic',
            'isLegacy' => 'getIsLegacy'
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
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
        $this->container['isLegacy'] = isset($data['isLegacy']) ? $data['isLegacy'] : null;
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
    *  **参数解释**： 规则模板实例ID。 **取值范围**： 32位字符，由数字和字母组成。
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
    * @param string|null $id **参数解释**： 规则模板实例ID。 **取值范围**： 32位字符，由数字和字母组成。
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
    *  **参数解释**： 规则模板实例名称。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 规则模板实例名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 规则模板类型。 **取值范围**： 不涉及。
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
    * @param string|null $type **参数解释**： 规则模板类型。 **取值范围**： 不涉及。
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
    *  **参数解释**： 规则模板策略。 **取值范围**： 不涉及。
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
    * @param string|null $version **参数解释**： 规则模板策略。 **取值范围**： 不涉及。
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
    *  **参数解释**： 策略创建人。 **取值范围**： 不涉及。
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
    * @param string|null $creator **参数解释**： 策略创建人。 **取值范围**： 不涉及。
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
    *  **参数解释**： 策略创建时间。 **取值范围**： 不涉及。
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
    * @param string|null $createTime **参数解释**： 策略创建时间。 **取值范围**： 不涉及。
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
    *  **参数解释**： 策略最近更新人。 **取值范围**： 不涉及。
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
    * @param string|null $updater **参数解释**： 策略最近更新人。 **取值范围**： 不涉及。
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
    *  **参数解释**： 策略最近更新时间。 **取值范围**： 不涉及。
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
    * @param string|null $updateTime **参数解释**： 策略最近更新时间。 **取值范围**： 不涉及。
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
    *  **参数解释**： 策略是否生效。 **取值范围**： - true：策略生效。 - false：策略不生效。
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
    * @param bool|null $isValid **参数解释**： 策略是否生效。 **取值范围**： - true：策略生效。 - false：策略不生效。
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
    *  **参数解释**： 规则实例集合。 **取值范围**： 不涉及。
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
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleInstance[]|null $ruleInstances **参数解释**： 规则实例集合。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRuleInstances($ruleInstances)
    {
        $this->container['ruleInstances'] = $ruleInstances;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释**： 规则实例生效级别。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level **参数解释**： 规则实例生效级别。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets isPublic
    *  **参数解释**： 规则实例是否系统级。 **取值范围**： - true：规则实例是系统级。 - false：规则实例不是系统级。
    *
    * @return bool|null
    */
    public function getIsPublic()
    {
        return $this->container['isPublic'];
    }

    /**
    * Sets isPublic
    *
    * @param bool|null $isPublic **参数解释**： 规则实例是否系统级。 **取值范围**： - true：规则实例是系统级。 - false：规则实例不是系统级。
    *
    * @return $this
    */
    public function setIsPublic($isPublic)
    {
        $this->container['isPublic'] = $isPublic;
        return $this;
    }

    /**
    * Gets isLegacy
    *  **参数解释**： 规则实例是1.0的数据。 **取值范围**： - true：规则实例是1.0的数据。 - false：规则实例是1.0的数据。
    *
    * @return bool|null
    */
    public function getIsLegacy()
    {
        return $this->container['isLegacy'];
    }

    /**
    * Sets isLegacy
    *
    * @param bool|null $isLegacy **参数解释**： 规则实例是1.0的数据。 **取值范围**： - true：规则实例是1.0的数据。 - false：规则实例是1.0的数据。
    *
    * @return $this
    */
    public function setIsLegacy($isLegacy)
    {
        $this->container['isLegacy'] = $isLegacy;
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

