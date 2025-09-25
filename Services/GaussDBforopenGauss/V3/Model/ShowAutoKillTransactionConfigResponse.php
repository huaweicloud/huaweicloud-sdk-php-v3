<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAutoKillTransactionConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAutoKillTransactionConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**: 配置类型。 **取值范围**: 不涉及。
    * usernames  **参数解释**: 筛选用户名。
    * threshold  **参数解释**: 阈值。 **取值范围**: 不涉及。
    * autoStop  **参数解释**: 配置是否开启。 **取值范围**: 不涉及。
    * databaseNames  **参数解释**: 当前实例包含的所有数据库。
    * databaseNamesSelect  **参数解释**: 筛选数据库名。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'usernames' => 'string[]',
            'threshold' => 'int',
            'autoStop' => 'bool',
            'databaseNames' => 'string[]',
            'databaseNamesSelect' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**: 配置类型。 **取值范围**: 不涉及。
    * usernames  **参数解释**: 筛选用户名。
    * threshold  **参数解释**: 阈值。 **取值范围**: 不涉及。
    * autoStop  **参数解释**: 配置是否开启。 **取值范围**: 不涉及。
    * databaseNames  **参数解释**: 当前实例包含的所有数据库。
    * databaseNamesSelect  **参数解释**: 筛选数据库名。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'usernames' => null,
        'threshold' => 'int64',
        'autoStop' => null,
        'databaseNames' => null,
        'databaseNamesSelect' => null
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
    * type  **参数解释**: 配置类型。 **取值范围**: 不涉及。
    * usernames  **参数解释**: 筛选用户名。
    * threshold  **参数解释**: 阈值。 **取值范围**: 不涉及。
    * autoStop  **参数解释**: 配置是否开启。 **取值范围**: 不涉及。
    * databaseNames  **参数解释**: 当前实例包含的所有数据库。
    * databaseNamesSelect  **参数解释**: 筛选数据库名。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'usernames' => 'usernames',
            'threshold' => 'threshold',
            'autoStop' => 'auto_stop',
            'databaseNames' => 'database_names',
            'databaseNamesSelect' => 'database_names_select'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**: 配置类型。 **取值范围**: 不涉及。
    * usernames  **参数解释**: 筛选用户名。
    * threshold  **参数解释**: 阈值。 **取值范围**: 不涉及。
    * autoStop  **参数解释**: 配置是否开启。 **取值范围**: 不涉及。
    * databaseNames  **参数解释**: 当前实例包含的所有数据库。
    * databaseNamesSelect  **参数解释**: 筛选数据库名。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'usernames' => 'setUsernames',
            'threshold' => 'setThreshold',
            'autoStop' => 'setAutoStop',
            'databaseNames' => 'setDatabaseNames',
            'databaseNamesSelect' => 'setDatabaseNamesSelect'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**: 配置类型。 **取值范围**: 不涉及。
    * usernames  **参数解释**: 筛选用户名。
    * threshold  **参数解释**: 阈值。 **取值范围**: 不涉及。
    * autoStop  **参数解释**: 配置是否开启。 **取值范围**: 不涉及。
    * databaseNames  **参数解释**: 当前实例包含的所有数据库。
    * databaseNamesSelect  **参数解释**: 筛选数据库名。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'usernames' => 'getUsernames',
            'threshold' => 'getThreshold',
            'autoStop' => 'getAutoStop',
            'databaseNames' => 'getDatabaseNames',
            'databaseNamesSelect' => 'getDatabaseNamesSelect'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['usernames'] = isset($data['usernames']) ? $data['usernames'] : null;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
        $this->container['autoStop'] = isset($data['autoStop']) ? $data['autoStop'] : null;
        $this->container['databaseNames'] = isset($data['databaseNames']) ? $data['databaseNames'] : null;
        $this->container['databaseNamesSelect'] = isset($data['databaseNamesSelect']) ? $data['databaseNamesSelect'] : null;
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
    * Gets type
    *  **参数解释**: 配置类型。 **取值范围**: 不涉及。
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
    * @param string|null $type **参数解释**: 配置类型。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets usernames
    *  **参数解释**: 筛选用户名。
    *
    * @return string[]|null
    */
    public function getUsernames()
    {
        return $this->container['usernames'];
    }

    /**
    * Sets usernames
    *
    * @param string[]|null $usernames **参数解释**: 筛选用户名。
    *
    * @return $this
    */
    public function setUsernames($usernames)
    {
        $this->container['usernames'] = $usernames;
        return $this;
    }

    /**
    * Gets threshold
    *  **参数解释**: 阈值。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
    * Sets threshold
    *
    * @param int|null $threshold **参数解释**: 阈值。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;
        return $this;
    }

    /**
    * Gets autoStop
    *  **参数解释**: 配置是否开启。 **取值范围**: 不涉及。
    *
    * @return bool|null
    */
    public function getAutoStop()
    {
        return $this->container['autoStop'];
    }

    /**
    * Sets autoStop
    *
    * @param bool|null $autoStop **参数解释**: 配置是否开启。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setAutoStop($autoStop)
    {
        $this->container['autoStop'] = $autoStop;
        return $this;
    }

    /**
    * Gets databaseNames
    *  **参数解释**: 当前实例包含的所有数据库。
    *
    * @return string[]|null
    */
    public function getDatabaseNames()
    {
        return $this->container['databaseNames'];
    }

    /**
    * Sets databaseNames
    *
    * @param string[]|null $databaseNames **参数解释**: 当前实例包含的所有数据库。
    *
    * @return $this
    */
    public function setDatabaseNames($databaseNames)
    {
        $this->container['databaseNames'] = $databaseNames;
        return $this;
    }

    /**
    * Gets databaseNamesSelect
    *  **参数解释**: 筛选数据库名。
    *
    * @return string[]|null
    */
    public function getDatabaseNamesSelect()
    {
        return $this->container['databaseNamesSelect'];
    }

    /**
    * Sets databaseNamesSelect
    *
    * @param string[]|null $databaseNamesSelect **参数解释**: 筛选数据库名。
    *
    * @return $this
    */
    public function setDatabaseNamesSelect($databaseNamesSelect)
    {
        $this->container['databaseNamesSelect'] = $databaseNamesSelect;
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

