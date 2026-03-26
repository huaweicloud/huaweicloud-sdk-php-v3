<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HtapProcessInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HtapProcessInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：  会话ID。    **取值范围**：  不涉及。
    * user  **参数解释**：  会话用户名。    **取值范围**：  不涉及。
    * host  **参数解释**：  会话主机。    **取值范围**：  不涉及。
    * state  **参数解释**：  会话状态。  **取值范围**：  不涉及。
    * database  **参数解释**：  会话对应数据库。    **取值范围**：  不涉及。
    * sqlStatement  **参数解释**：  会话执行的SQL语句。    **取值范围**：  不涉及。
    * duration  **参数解释**：  会话持续时间，单位是秒。  **取值范围**：  不涉及。
    * command  **参数解释**：  会话命令类型。    **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'user' => 'string',
            'host' => 'string',
            'state' => 'string',
            'database' => 'string',
            'sqlStatement' => 'string',
            'duration' => 'string',
            'command' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：  会话ID。    **取值范围**：  不涉及。
    * user  **参数解释**：  会话用户名。    **取值范围**：  不涉及。
    * host  **参数解释**：  会话主机。    **取值范围**：  不涉及。
    * state  **参数解释**：  会话状态。  **取值范围**：  不涉及。
    * database  **参数解释**：  会话对应数据库。    **取值范围**：  不涉及。
    * sqlStatement  **参数解释**：  会话执行的SQL语句。    **取值范围**：  不涉及。
    * duration  **参数解释**：  会话持续时间，单位是秒。  **取值范围**：  不涉及。
    * command  **参数解释**：  会话命令类型。    **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'user' => null,
        'host' => null,
        'state' => null,
        'database' => null,
        'sqlStatement' => null,
        'duration' => null,
        'command' => null
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
    * id  **参数解释**：  会话ID。    **取值范围**：  不涉及。
    * user  **参数解释**：  会话用户名。    **取值范围**：  不涉及。
    * host  **参数解释**：  会话主机。    **取值范围**：  不涉及。
    * state  **参数解释**：  会话状态。  **取值范围**：  不涉及。
    * database  **参数解释**：  会话对应数据库。    **取值范围**：  不涉及。
    * sqlStatement  **参数解释**：  会话执行的SQL语句。    **取值范围**：  不涉及。
    * duration  **参数解释**：  会话持续时间，单位是秒。  **取值范围**：  不涉及。
    * command  **参数解释**：  会话命令类型。    **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'user' => 'user',
            'host' => 'host',
            'state' => 'state',
            'database' => 'database',
            'sqlStatement' => 'sql_statement',
            'duration' => 'duration',
            'command' => 'command'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：  会话ID。    **取值范围**：  不涉及。
    * user  **参数解释**：  会话用户名。    **取值范围**：  不涉及。
    * host  **参数解释**：  会话主机。    **取值范围**：  不涉及。
    * state  **参数解释**：  会话状态。  **取值范围**：  不涉及。
    * database  **参数解释**：  会话对应数据库。    **取值范围**：  不涉及。
    * sqlStatement  **参数解释**：  会话执行的SQL语句。    **取值范围**：  不涉及。
    * duration  **参数解释**：  会话持续时间，单位是秒。  **取值范围**：  不涉及。
    * command  **参数解释**：  会话命令类型。    **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'user' => 'setUser',
            'host' => 'setHost',
            'state' => 'setState',
            'database' => 'setDatabase',
            'sqlStatement' => 'setSqlStatement',
            'duration' => 'setDuration',
            'command' => 'setCommand'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：  会话ID。    **取值范围**：  不涉及。
    * user  **参数解释**：  会话用户名。    **取值范围**：  不涉及。
    * host  **参数解释**：  会话主机。    **取值范围**：  不涉及。
    * state  **参数解释**：  会话状态。  **取值范围**：  不涉及。
    * database  **参数解释**：  会话对应数据库。    **取值范围**：  不涉及。
    * sqlStatement  **参数解释**：  会话执行的SQL语句。    **取值范围**：  不涉及。
    * duration  **参数解释**：  会话持续时间，单位是秒。  **取值范围**：  不涉及。
    * command  **参数解释**：  会话命令类型。    **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'user' => 'getUser',
            'host' => 'getHost',
            'state' => 'getState',
            'database' => 'getDatabase',
            'sqlStatement' => 'getSqlStatement',
            'duration' => 'getDuration',
            'command' => 'getCommand'
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
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['sqlStatement'] = isset($data['sqlStatement']) ? $data['sqlStatement'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
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
    *  **参数解释**：  会话ID。    **取值范围**：  不涉及。
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
    * @param string|null $id **参数解释**：  会话ID。    **取值范围**：  不涉及。
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
    *  **参数解释**：  会话用户名。    **取值范围**：  不涉及。
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
    * @param string|null $user **参数解释**：  会话用户名。    **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets host
    *  **参数解释**：  会话主机。    **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string|null $host **参数解释**：  会话主机。    **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释**：  会话状态。  **取值范围**：  不涉及。
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
    * @param string|null $state **参数解释**：  会话状态。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets database
    *  **参数解释**：  会话对应数据库。    **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string|null $database **参数解释**：  会话对应数据库。    **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets sqlStatement
    *  **参数解释**：  会话执行的SQL语句。    **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getSqlStatement()
    {
        return $this->container['sqlStatement'];
    }

    /**
    * Sets sqlStatement
    *
    * @param string|null $sqlStatement **参数解释**：  会话执行的SQL语句。    **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setSqlStatement($sqlStatement)
    {
        $this->container['sqlStatement'] = $sqlStatement;
        return $this;
    }

    /**
    * Gets duration
    *  **参数解释**：  会话持续时间，单位是秒。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param string|null $duration **参数解释**：  会话持续时间，单位是秒。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets command
    *  **参数解释**：  会话命令类型。    **取值范围**：  不涉及。
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
    * @param string|null $command **参数解释**：  会话命令类型。    **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
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

