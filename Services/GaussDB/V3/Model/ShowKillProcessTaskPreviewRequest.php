<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowKillProcessTaskPreviewRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowKillProcessTaskPreviewRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  **参数解释**：              请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * time  **参数解释**：    持续时间，单位为秒。持续时间大于等于该值的会话满足Kill条件。  **约束限制**：    整数。  **取值范围**：    由数字组成，其中数字表示的范围应为1-2147483647。  **默认取值**：    不涉及。
    * user  **参数解释**：  用户名。  **约束限制**：  不涉及。  **取值范围**：  名称在1到32个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。  **默认取值**：  不涉及。
    * host  **参数解释**：    主机。    **约束限制**：    不涉及。    **取值范围**：    不涉及。  **默认取值**：    不涉及。
    * db  **参数解释**：    数据库名。    **约束限制**：    不涉及。   **取值范围**：    1到64个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。   **默认取值**：    不涉及。
    * command  **参数解释**：    命令。    **约束限制**：    不涉及。    **取值范围**：    不涉及。  **默认取值**：    不涉及。
    * info  **参数解释**：    SQL语句。    **约束限制**：    不涉及。  **取值范围**：    不涉及。  **默认取值**：    不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'instanceId' => 'string',
            'time' => 'string',
            'user' => 'string',
            'host' => 'string',
            'db' => 'string',
            'command' => 'string',
            'info' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  **参数解释**：              请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * time  **参数解释**：    持续时间，单位为秒。持续时间大于等于该值的会话满足Kill条件。  **约束限制**：    整数。  **取值范围**：    由数字组成，其中数字表示的范围应为1-2147483647。  **默认取值**：    不涉及。
    * user  **参数解释**：  用户名。  **约束限制**：  不涉及。  **取值范围**：  名称在1到32个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。  **默认取值**：  不涉及。
    * host  **参数解释**：    主机。    **约束限制**：    不涉及。    **取值范围**：    不涉及。  **默认取值**：    不涉及。
    * db  **参数解释**：    数据库名。    **约束限制**：    不涉及。   **取值范围**：    1到64个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。   **默认取值**：    不涉及。
    * command  **参数解释**：    命令。    **约束限制**：    不涉及。    **取值范围**：    不涉及。  **默认取值**：    不涉及。
    * info  **参数解释**：    SQL语句。    **约束限制**：    不涉及。  **取值范围**：    不涉及。  **默认取值**：    不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'instanceId' => null,
        'time' => null,
        'user' => null,
        'host' => null,
        'db' => null,
        'command' => null,
        'info' => null
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
    * xLanguage  **参数解释**：              请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * time  **参数解释**：    持续时间，单位为秒。持续时间大于等于该值的会话满足Kill条件。  **约束限制**：    整数。  **取值范围**：    由数字组成，其中数字表示的范围应为1-2147483647。  **默认取值**：    不涉及。
    * user  **参数解释**：  用户名。  **约束限制**：  不涉及。  **取值范围**：  名称在1到32个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。  **默认取值**：  不涉及。
    * host  **参数解释**：    主机。    **约束限制**：    不涉及。    **取值范围**：    不涉及。  **默认取值**：    不涉及。
    * db  **参数解释**：    数据库名。    **约束限制**：    不涉及。   **取值范围**：    1到64个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。   **默认取值**：    不涉及。
    * command  **参数解释**：    命令。    **约束限制**：    不涉及。    **取值范围**：    不涉及。  **默认取值**：    不涉及。
    * info  **参数解释**：    SQL语句。    **约束限制**：    不涉及。  **取值范围**：    不涉及。  **默认取值**：    不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'instanceId' => 'instance_id',
            'time' => 'time',
            'user' => 'user',
            'host' => 'host',
            'db' => 'db',
            'command' => 'command',
            'info' => 'info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  **参数解释**：              请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * time  **参数解释**：    持续时间，单位为秒。持续时间大于等于该值的会话满足Kill条件。  **约束限制**：    整数。  **取值范围**：    由数字组成，其中数字表示的范围应为1-2147483647。  **默认取值**：    不涉及。
    * user  **参数解释**：  用户名。  **约束限制**：  不涉及。  **取值范围**：  名称在1到32个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。  **默认取值**：  不涉及。
    * host  **参数解释**：    主机。    **约束限制**：    不涉及。    **取值范围**：    不涉及。  **默认取值**：    不涉及。
    * db  **参数解释**：    数据库名。    **约束限制**：    不涉及。   **取值范围**：    1到64个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。   **默认取值**：    不涉及。
    * command  **参数解释**：    命令。    **约束限制**：    不涉及。    **取值范围**：    不涉及。  **默认取值**：    不涉及。
    * info  **参数解释**：    SQL语句。    **约束限制**：    不涉及。  **取值范围**：    不涉及。  **默认取值**：    不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'instanceId' => 'setInstanceId',
            'time' => 'setTime',
            'user' => 'setUser',
            'host' => 'setHost',
            'db' => 'setDb',
            'command' => 'setCommand',
            'info' => 'setInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  **参数解释**：              请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * time  **参数解释**：    持续时间，单位为秒。持续时间大于等于该值的会话满足Kill条件。  **约束限制**：    整数。  **取值范围**：    由数字组成，其中数字表示的范围应为1-2147483647。  **默认取值**：    不涉及。
    * user  **参数解释**：  用户名。  **约束限制**：  不涉及。  **取值范围**：  名称在1到32个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。  **默认取值**：  不涉及。
    * host  **参数解释**：    主机。    **约束限制**：    不涉及。    **取值范围**：    不涉及。  **默认取值**：    不涉及。
    * db  **参数解释**：    数据库名。    **约束限制**：    不涉及。   **取值范围**：    1到64个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。   **默认取值**：    不涉及。
    * command  **参数解释**：    命令。    **约束限制**：    不涉及。    **取值范围**：    不涉及。  **默认取值**：    不涉及。
    * info  **参数解释**：    SQL语句。    **约束限制**：    不涉及。  **取值范围**：    不涉及。  **默认取值**：    不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'instanceId' => 'getInstanceId',
            'time' => 'getTime',
            'user' => 'getUser',
            'host' => 'getHost',
            'db' => 'getDb',
            'command' => 'getCommand',
            'info' => 'getInfo'
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['db'] = isset($data['db']) ? $data['db'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
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
    * Gets xLanguage
    *  **参数解释**：              请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage **参数解释**：              请求语言类型。  **约束限制**：  不涉及。  **取值范围**：  - en-us：英文。 - zh-cn：中文。  **默认取值**：  en-us。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId **参数解释**：  实例ID，此参数是实例的唯一标识。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets time
    *  **参数解释**：    持续时间，单位为秒。持续时间大于等于该值的会话满足Kill条件。  **约束限制**：    整数。  **取值范围**：    由数字组成，其中数字表示的范围应为1-2147483647。  **默认取值**：    不涉及。
    *
    * @return string
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string $time **参数解释**：    持续时间，单位为秒。持续时间大于等于该值的会话满足Kill条件。  **约束限制**：    整数。  **取值范围**：    由数字组成，其中数字表示的范围应为1-2147483647。  **默认取值**：    不涉及。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets user
    *  **参数解释**：  用户名。  **约束限制**：  不涉及。  **取值范围**：  名称在1到32个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。  **默认取值**：  不涉及。
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
    * @param string|null $user **参数解释**：  用户名。  **约束限制**：  不涉及。  **取值范围**：  名称在1到32个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。  **默认取值**：  不涉及。
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
    *  **参数解释**：    主机。    **约束限制**：    不涉及。    **取值范围**：    不涉及。  **默认取值**：    不涉及。
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
    * @param string|null $host **参数解释**：    主机。    **约束限制**：    不涉及。    **取值范围**：    不涉及。  **默认取值**：    不涉及。
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
    *  **参数解释**：    数据库名。    **约束限制**：    不涉及。   **取值范围**：    1到64个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。   **默认取值**：    不涉及。
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
    * @param string|null $db **参数解释**：    数据库名。    **约束限制**：    不涉及。   **取值范围**：    1到64个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。   **默认取值**：    不涉及。
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
    *  **参数解释**：    命令。    **约束限制**：    不涉及。    **取值范围**：    不涉及。  **默认取值**：    不涉及。
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
    * @param string|null $command **参数解释**：    命令。    **约束限制**：    不涉及。    **取值范围**：    不涉及。  **默认取值**：    不涉及。
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
    *  **参数解释**：    SQL语句。    **约束限制**：    不涉及。  **取值范围**：    不涉及。  **默认取值**：    不涉及。
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
    * @param string|null $info **参数解释**：    SQL语句。    **约束限制**：    不涉及。  **取值范围**：    不涉及。  **默认取值**：    不涉及。
    *
    * @return $this
    */
    public function setInfo($info)
    {
        $this->container['info'] = $info;
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

