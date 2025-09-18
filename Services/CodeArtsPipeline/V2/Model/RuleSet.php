<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleSet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleSet';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 规则模板实例ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 规则模板实例名称。 **取值范围**： 不涉及。
    * type  **参数解释**： 规则实例类型。 **取值范围**： 不涉及。
    * version  **参数解释**： 规则实例版本。 **取值范围**： 不涉及。
    * operator  **参数解释**： 规则实例最近操作人。 **取值范围**： 不涉及。
    * operateTime  **参数解释**： 规则实例最近操作时间。 **取值范围**： 不涉及。
    * isValid  **参数解释**： 规则实例是否生效。 **取值范围**： - true：规则生效。 - false：规则不生效。
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
            'operator' => 'string',
            'operateTime' => 'int',
            'isValid' => 'bool',
            'level' => 'string',
            'isPublic' => 'bool',
            'isLegacy' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 规则模板实例ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 规则模板实例名称。 **取值范围**： 不涉及。
    * type  **参数解释**： 规则实例类型。 **取值范围**： 不涉及。
    * version  **参数解释**： 规则实例版本。 **取值范围**： 不涉及。
    * operator  **参数解释**： 规则实例最近操作人。 **取值范围**： 不涉及。
    * operateTime  **参数解释**： 规则实例最近操作时间。 **取值范围**： 不涉及。
    * isValid  **参数解释**： 规则实例是否生效。 **取值范围**： - true：规则生效。 - false：规则不生效。
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
        'operator' => null,
        'operateTime' => 'int64',
        'isValid' => null,
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
    * id  **参数解释**： 规则模板实例ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 规则模板实例名称。 **取值范围**： 不涉及。
    * type  **参数解释**： 规则实例类型。 **取值范围**： 不涉及。
    * version  **参数解释**： 规则实例版本。 **取值范围**： 不涉及。
    * operator  **参数解释**： 规则实例最近操作人。 **取值范围**： 不涉及。
    * operateTime  **参数解释**： 规则实例最近操作时间。 **取值范围**： 不涉及。
    * isValid  **参数解释**： 规则实例是否生效。 **取值范围**： - true：规则生效。 - false：规则不生效。
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
            'operator' => 'operator',
            'operateTime' => 'operate_time',
            'isValid' => 'is_valid',
            'level' => 'level',
            'isPublic' => 'is_public',
            'isLegacy' => 'is_legacy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 规则模板实例ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 规则模板实例名称。 **取值范围**： 不涉及。
    * type  **参数解释**： 规则实例类型。 **取值范围**： 不涉及。
    * version  **参数解释**： 规则实例版本。 **取值范围**： 不涉及。
    * operator  **参数解释**： 规则实例最近操作人。 **取值范围**： 不涉及。
    * operateTime  **参数解释**： 规则实例最近操作时间。 **取值范围**： 不涉及。
    * isValid  **参数解释**： 规则实例是否生效。 **取值范围**： - true：规则生效。 - false：规则不生效。
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
            'operator' => 'setOperator',
            'operateTime' => 'setOperateTime',
            'isValid' => 'setIsValid',
            'level' => 'setLevel',
            'isPublic' => 'setIsPublic',
            'isLegacy' => 'setIsLegacy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 规则模板实例ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 规则模板实例名称。 **取值范围**： 不涉及。
    * type  **参数解释**： 规则实例类型。 **取值范围**： 不涉及。
    * version  **参数解释**： 规则实例版本。 **取值范围**： 不涉及。
    * operator  **参数解释**： 规则实例最近操作人。 **取值范围**： 不涉及。
    * operateTime  **参数解释**： 规则实例最近操作时间。 **取值范围**： 不涉及。
    * isValid  **参数解释**： 规则实例是否生效。 **取值范围**： - true：规则生效。 - false：规则不生效。
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
            'operator' => 'getOperator',
            'operateTime' => 'getOperateTime',
            'isValid' => 'getIsValid',
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
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['operateTime'] = isset($data['operateTime']) ? $data['operateTime'] : null;
        $this->container['isValid'] = isset($data['isValid']) ? $data['isValid'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
        if ($this->container['operateTime'] === null) {
            $invalidProperties[] = "'operateTime' can't be null";
        }
        if ($this->container['isValid'] === null) {
            $invalidProperties[] = "'isValid' can't be null";
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
    *  **参数解释**： 规则模板实例ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释**： 规则模板实例ID。 **取值范围**： 不涉及。
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
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**： 规则模板实例名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 规则实例类型。 **取值范围**： 不涉及。
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
    * @param string $type **参数解释**： 规则实例类型。 **取值范围**： 不涉及。
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
    *  **参数解释**： 规则实例版本。 **取值范围**： 不涉及。
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
    * @param string|null $version **参数解释**： 规则实例版本。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets operator
    *  **参数解释**： 规则实例最近操作人。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string $operator **参数解释**： 规则实例最近操作人。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets operateTime
    *  **参数解释**： 规则实例最近操作时间。 **取值范围**： 不涉及。
    *
    * @return int
    */
    public function getOperateTime()
    {
        return $this->container['operateTime'];
    }

    /**
    * Sets operateTime
    *
    * @param int $operateTime **参数解释**： 规则实例最近操作时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setOperateTime($operateTime)
    {
        $this->container['operateTime'] = $operateTime;
        return $this;
    }

    /**
    * Gets isValid
    *  **参数解释**： 规则实例是否生效。 **取值范围**： - true：规则生效。 - false：规则不生效。
    *
    * @return bool
    */
    public function getIsValid()
    {
        return $this->container['isValid'];
    }

    /**
    * Sets isValid
    *
    * @param bool $isValid **参数解释**： 规则实例是否生效。 **取值范围**： - true：规则生效。 - false：规则不生效。
    *
    * @return $this
    */
    public function setIsValid($isValid)
    {
        $this->container['isValid'] = $isValid;
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

