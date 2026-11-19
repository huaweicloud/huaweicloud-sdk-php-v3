<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProcessDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProcessDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**  会话ID。  **取值范围**：  不涉及。
    * user  **参数解释**：  用户名。  **取值范围**：  不涉及。
    * db  **参数解释**：    数据库名。    **取值范围**：    不涉及。
    * state  **参数解释**：  执行状态。  **取值范围**：  不涉及。
    * command  **参数解释**：  命令。  **取值范围**：  不涉及。
    * sqlInfo  **参数解释**：  SQL语句。  **取值范围**：  不涉及。
    * stateDuration  **参数解释**：  状态持续时间，单位是秒。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'user' => 'string',
            'db' => 'string',
            'state' => 'string',
            'command' => 'string',
            'sqlInfo' => 'string',
            'stateDuration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**  会话ID。  **取值范围**：  不涉及。
    * user  **参数解释**：  用户名。  **取值范围**：  不涉及。
    * db  **参数解释**：    数据库名。    **取值范围**：    不涉及。
    * state  **参数解释**：  执行状态。  **取值范围**：  不涉及。
    * command  **参数解释**：  命令。  **取值范围**：  不涉及。
    * sqlInfo  **参数解释**：  SQL语句。  **取值范围**：  不涉及。
    * stateDuration  **参数解释**：  状态持续时间，单位是秒。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'user' => null,
        'db' => null,
        'state' => null,
        'command' => null,
        'sqlInfo' => null,
        'stateDuration' => 'int64'
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
    * id  **参数解释**  会话ID。  **取值范围**：  不涉及。
    * user  **参数解释**：  用户名。  **取值范围**：  不涉及。
    * db  **参数解释**：    数据库名。    **取值范围**：    不涉及。
    * state  **参数解释**：  执行状态。  **取值范围**：  不涉及。
    * command  **参数解释**：  命令。  **取值范围**：  不涉及。
    * sqlInfo  **参数解释**：  SQL语句。  **取值范围**：  不涉及。
    * stateDuration  **参数解释**：  状态持续时间，单位是秒。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'user' => 'user',
            'db' => 'db',
            'state' => 'state',
            'command' => 'command',
            'sqlInfo' => 'sql_info',
            'stateDuration' => 'state_duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**  会话ID。  **取值范围**：  不涉及。
    * user  **参数解释**：  用户名。  **取值范围**：  不涉及。
    * db  **参数解释**：    数据库名。    **取值范围**：    不涉及。
    * state  **参数解释**：  执行状态。  **取值范围**：  不涉及。
    * command  **参数解释**：  命令。  **取值范围**：  不涉及。
    * sqlInfo  **参数解释**：  SQL语句。  **取值范围**：  不涉及。
    * stateDuration  **参数解释**：  状态持续时间，单位是秒。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'user' => 'setUser',
            'db' => 'setDb',
            'state' => 'setState',
            'command' => 'setCommand',
            'sqlInfo' => 'setSqlInfo',
            'stateDuration' => 'setStateDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**  会话ID。  **取值范围**：  不涉及。
    * user  **参数解释**：  用户名。  **取值范围**：  不涉及。
    * db  **参数解释**：    数据库名。    **取值范围**：    不涉及。
    * state  **参数解释**：  执行状态。  **取值范围**：  不涉及。
    * command  **参数解释**：  命令。  **取值范围**：  不涉及。
    * sqlInfo  **参数解释**：  SQL语句。  **取值范围**：  不涉及。
    * stateDuration  **参数解释**：  状态持续时间，单位是秒。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'user' => 'getUser',
            'db' => 'getDb',
            'state' => 'getState',
            'command' => 'getCommand',
            'sqlInfo' => 'getSqlInfo',
            'stateDuration' => 'getStateDuration'
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['db'] = isset($data['db']) ? $data['db'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['sqlInfo'] = isset($data['sqlInfo']) ? $data['sqlInfo'] : null;
        $this->container['stateDuration'] = isset($data['stateDuration']) ? $data['stateDuration'] : null;
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
    *  **参数解释**  会话ID。  **取值范围**：  不涉及。
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
    * @param int|null $id **参数解释**  会话ID。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets user
    *  **参数解释**：  用户名。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user **参数解释**：  用户名。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets db
    *  **参数解释**：    数据库名。    **取值范围**：    不涉及。
    *
    * @return string|null
    */
    public function getDb()
    {
        return $this->container['db'];
    }

    /**
    * Sets db
    *
    * @param string|null $db **参数解释**：    数据库名。    **取值范围**：    不涉及。
    *
    * @return $this
    */
    public function setDb($db)
    {
        $this->container['db'] = $db;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释**：  执行状态。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state **参数解释**：  执行状态。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets command
    *  **参数解释**：  命令。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
    * Sets command
    *
    * @param string|null $command **参数解释**：  命令。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
        return $this;
    }

    /**
    * Gets sqlInfo
    *  **参数解释**：  SQL语句。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getSqlInfo()
    {
        return $this->container['sqlInfo'];
    }

    /**
    * Sets sqlInfo
    *
    * @param string|null $sqlInfo **参数解释**：  SQL语句。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setSqlInfo($sqlInfo)
    {
        $this->container['sqlInfo'] = $sqlInfo;
        return $this;
    }

    /**
    * Gets stateDuration
    *  **参数解释**：  状态持续时间，单位是秒。  **取值范围**：  不涉及。
    *
    * @return int|null
    */
    public function getStateDuration()
    {
        return $this->container['stateDuration'];
    }

    /**
    * Sets stateDuration
    *
    * @param int|null $stateDuration **参数解释**：  状态持续时间，单位是秒。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setStateDuration($stateDuration)
    {
        $this->container['stateDuration'] = $stateDuration;
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

