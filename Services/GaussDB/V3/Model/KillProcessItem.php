<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KillProcessItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KillProcessItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：  任务ID。  **取值范围**：  不涉及。
    * instanceId  **参数解释**：  实例ID。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。
    * user  **参数解释**：  用户名。  **取值范围**：  不涉及。
    * host  **参数解释**：  主机。  **取值范围**：  不涉及。
    * db  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    * command  **参数解释**：  命令。  **取值范围**：  不涉及。
    * info  **参数解释**：  SQL语句。  **取值范围**：  不涉及。
    * time  **参数解释**：  持续时间，单位为秒。持续时间大于等于该值的会话满足Kill条件。  **取值范围**：  由数字组成，表示的范围应为1-2147483647。
    * endTime  **参数解释**：  任务结束时间戳。  **取值范围**：  不涉及。
    * mode  **参数解释**：  执行方式。  **取值范围**：  - auto：定时关闭，任务持续时长等于end_time参数值。 - manual：手动关闭。
    * status  **参数解释**：  任务状态。  **取值范围**：  - 0：已结束。 - 1：运行中。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'instanceId' => 'string',
            'user' => 'string',
            'host' => 'string',
            'db' => 'string',
            'command' => 'string',
            'info' => 'string',
            'time' => 'string',
            'endTime' => 'string',
            'mode' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：  任务ID。  **取值范围**：  不涉及。
    * instanceId  **参数解释**：  实例ID。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。
    * user  **参数解释**：  用户名。  **取值范围**：  不涉及。
    * host  **参数解释**：  主机。  **取值范围**：  不涉及。
    * db  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    * command  **参数解释**：  命令。  **取值范围**：  不涉及。
    * info  **参数解释**：  SQL语句。  **取值范围**：  不涉及。
    * time  **参数解释**：  持续时间，单位为秒。持续时间大于等于该值的会话满足Kill条件。  **取值范围**：  由数字组成，表示的范围应为1-2147483647。
    * endTime  **参数解释**：  任务结束时间戳。  **取值范围**：  不涉及。
    * mode  **参数解释**：  执行方式。  **取值范围**：  - auto：定时关闭，任务持续时长等于end_time参数值。 - manual：手动关闭。
    * status  **参数解释**：  任务状态。  **取值范围**：  - 0：已结束。 - 1：运行中。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'instanceId' => null,
        'user' => null,
        'host' => null,
        'db' => null,
        'command' => null,
        'info' => null,
        'time' => null,
        'endTime' => null,
        'mode' => null,
        'status' => null
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
    * id  **参数解释**：  任务ID。  **取值范围**：  不涉及。
    * instanceId  **参数解释**：  实例ID。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。
    * user  **参数解释**：  用户名。  **取值范围**：  不涉及。
    * host  **参数解释**：  主机。  **取值范围**：  不涉及。
    * db  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    * command  **参数解释**：  命令。  **取值范围**：  不涉及。
    * info  **参数解释**：  SQL语句。  **取值范围**：  不涉及。
    * time  **参数解释**：  持续时间，单位为秒。持续时间大于等于该值的会话满足Kill条件。  **取值范围**：  由数字组成，表示的范围应为1-2147483647。
    * endTime  **参数解释**：  任务结束时间戳。  **取值范围**：  不涉及。
    * mode  **参数解释**：  执行方式。  **取值范围**：  - auto：定时关闭，任务持续时长等于end_time参数值。 - manual：手动关闭。
    * status  **参数解释**：  任务状态。  **取值范围**：  - 0：已结束。 - 1：运行中。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'instanceId' => 'instance_id',
            'user' => 'user',
            'host' => 'host',
            'db' => 'db',
            'command' => 'command',
            'info' => 'info',
            'time' => 'time',
            'endTime' => 'end_time',
            'mode' => 'mode',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：  任务ID。  **取值范围**：  不涉及。
    * instanceId  **参数解释**：  实例ID。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。
    * user  **参数解释**：  用户名。  **取值范围**：  不涉及。
    * host  **参数解释**：  主机。  **取值范围**：  不涉及。
    * db  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    * command  **参数解释**：  命令。  **取值范围**：  不涉及。
    * info  **参数解释**：  SQL语句。  **取值范围**：  不涉及。
    * time  **参数解释**：  持续时间，单位为秒。持续时间大于等于该值的会话满足Kill条件。  **取值范围**：  由数字组成，表示的范围应为1-2147483647。
    * endTime  **参数解释**：  任务结束时间戳。  **取值范围**：  不涉及。
    * mode  **参数解释**：  执行方式。  **取值范围**：  - auto：定时关闭，任务持续时长等于end_time参数值。 - manual：手动关闭。
    * status  **参数解释**：  任务状态。  **取值范围**：  - 0：已结束。 - 1：运行中。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'instanceId' => 'setInstanceId',
            'user' => 'setUser',
            'host' => 'setHost',
            'db' => 'setDb',
            'command' => 'setCommand',
            'info' => 'setInfo',
            'time' => 'setTime',
            'endTime' => 'setEndTime',
            'mode' => 'setMode',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：  任务ID。  **取值范围**：  不涉及。
    * instanceId  **参数解释**：  实例ID。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。
    * user  **参数解释**：  用户名。  **取值范围**：  不涉及。
    * host  **参数解释**：  主机。  **取值范围**：  不涉及。
    * db  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    * command  **参数解释**：  命令。  **取值范围**：  不涉及。
    * info  **参数解释**：  SQL语句。  **取值范围**：  不涉及。
    * time  **参数解释**：  持续时间，单位为秒。持续时间大于等于该值的会话满足Kill条件。  **取值范围**：  由数字组成，表示的范围应为1-2147483647。
    * endTime  **参数解释**：  任务结束时间戳。  **取值范围**：  不涉及。
    * mode  **参数解释**：  执行方式。  **取值范围**：  - auto：定时关闭，任务持续时长等于end_time参数值。 - manual：手动关闭。
    * status  **参数解释**：  任务状态。  **取值范围**：  - 0：已结束。 - 1：运行中。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'instanceId' => 'getInstanceId',
            'user' => 'getUser',
            'host' => 'getHost',
            'db' => 'getDb',
            'command' => 'getCommand',
            'info' => 'getInfo',
            'time' => 'getTime',
            'endTime' => 'getEndTime',
            'mode' => 'getMode',
            'status' => 'getStatus'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['db'] = isset($data['db']) ? $data['db'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    *  **参数解释**：  任务ID。  **取值范围**：  不涉及。
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
    * @param string|null $id **参数解释**：  任务ID。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**：  实例ID。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**：  实例ID。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
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
    * Gets host
    *  **参数解释**：  主机。  **取值范围**：  不涉及。
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
    * @param string|null $host **参数解释**：  主机。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets db
    *  **参数解释**：  数据库名。  **取值范围**：  不涉及。
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
    * @param string|null $db **参数解释**：  数据库名。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setDb($db)
    {
        $this->container['db'] = $db;
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
    * Gets info
    *  **参数解释**：  SQL语句。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
    * Sets info
    *
    * @param string|null $info **参数解释**：  SQL语句。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setInfo($info)
    {
        $this->container['info'] = $info;
        return $this;
    }

    /**
    * Gets time
    *  **参数解释**：  持续时间，单位为秒。持续时间大于等于该值的会话满足Kill条件。  **取值范围**：  由数字组成，表示的范围应为1-2147483647。
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time **参数解释**：  持续时间，单位为秒。持续时间大于等于该值的会话满足Kill条件。  **取值范围**：  由数字组成，表示的范围应为1-2147483647。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**：  任务结束时间戳。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime **参数解释**：  任务结束时间戳。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets mode
    *  **参数解释**：  执行方式。  **取值范围**：  - auto：定时关闭，任务持续时长等于end_time参数值。 - manual：手动关闭。
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode **参数解释**：  执行方式。  **取值范围**：  - auto：定时关闭，任务持续时长等于end_time参数值。 - manual：手动关闭。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：  任务状态。  **取值范围**：  - 0：已结束。 - 1：运行中。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**：  任务状态。  **取值范围**：  - 0：已结束。 - 1：运行中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

