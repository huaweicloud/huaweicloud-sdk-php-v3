<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EsdbCheckRdsConnectionRequestV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EsdbCheckRdsConnectionRequestV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endpoint  **参数解释**：  内网地址以及端口号。  格式为xx.xx.xx.xx:xx。  **参数范围**：  不涉及。
    * username  **参数解释**：  实例账号名称。  **参数范围**：  不涉及。
    * password  **参数解释**：  实例账号密码。  **约束限制**：  - 至少包含三种字符组合：小写字母、大写字母、数字、特殊字符 ~ ! @ # % ^ * - _ + ? - 不能使用简单、强度不够、容易被猜测的密码。 - 不能与账号名称或者倒序的账号名称相同。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * rdsInstanceId  **参数解释**：  rds实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in01，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endpoint' => 'string',
            'username' => 'string',
            'password' => 'string',
            'rdsInstanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endpoint  **参数解释**：  内网地址以及端口号。  格式为xx.xx.xx.xx:xx。  **参数范围**：  不涉及。
    * username  **参数解释**：  实例账号名称。  **参数范围**：  不涉及。
    * password  **参数解释**：  实例账号密码。  **约束限制**：  - 至少包含三种字符组合：小写字母、大写字母、数字、特殊字符 ~ ! @ # % ^ * - _ + ? - 不能使用简单、强度不够、容易被猜测的密码。 - 不能与账号名称或者倒序的账号名称相同。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * rdsInstanceId  **参数解释**：  rds实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in01，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'endpoint' => null,
        'username' => null,
        'password' => null,
        'rdsInstanceId' => null
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
    * endpoint  **参数解释**：  内网地址以及端口号。  格式为xx.xx.xx.xx:xx。  **参数范围**：  不涉及。
    * username  **参数解释**：  实例账号名称。  **参数范围**：  不涉及。
    * password  **参数解释**：  实例账号密码。  **约束限制**：  - 至少包含三种字符组合：小写字母、大写字母、数字、特殊字符 ~ ! @ # % ^ * - _ + ? - 不能使用简单、强度不够、容易被猜测的密码。 - 不能与账号名称或者倒序的账号名称相同。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * rdsInstanceId  **参数解释**：  rds实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in01，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endpoint' => 'endpoint',
            'username' => 'username',
            'password' => 'password',
            'rdsInstanceId' => 'rds_instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endpoint  **参数解释**：  内网地址以及端口号。  格式为xx.xx.xx.xx:xx。  **参数范围**：  不涉及。
    * username  **参数解释**：  实例账号名称。  **参数范围**：  不涉及。
    * password  **参数解释**：  实例账号密码。  **约束限制**：  - 至少包含三种字符组合：小写字母、大写字母、数字、特殊字符 ~ ! @ # % ^ * - _ + ? - 不能使用简单、强度不够、容易被猜测的密码。 - 不能与账号名称或者倒序的账号名称相同。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * rdsInstanceId  **参数解释**：  rds实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in01，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'endpoint' => 'setEndpoint',
            'username' => 'setUsername',
            'password' => 'setPassword',
            'rdsInstanceId' => 'setRdsInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endpoint  **参数解释**：  内网地址以及端口号。  格式为xx.xx.xx.xx:xx。  **参数范围**：  不涉及。
    * username  **参数解释**：  实例账号名称。  **参数范围**：  不涉及。
    * password  **参数解释**：  实例账号密码。  **约束限制**：  - 至少包含三种字符组合：小写字母、大写字母、数字、特殊字符 ~ ! @ # % ^ * - _ + ? - 不能使用简单、强度不够、容易被猜测的密码。 - 不能与账号名称或者倒序的账号名称相同。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * rdsInstanceId  **参数解释**：  rds实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in01，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'endpoint' => 'getEndpoint',
            'username' => 'getUsername',
            'password' => 'getPassword',
            'rdsInstanceId' => 'getRdsInstanceId'
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
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['rdsInstanceId'] = isset($data['rdsInstanceId']) ? $data['rdsInstanceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['endpoint'] === null) {
            $invalidProperties[] = "'endpoint' can't be null";
        }
            if ((mb_strlen($this->container['endpoint']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'endpoint', the character length must be smaller than or equal to 2147483647.";
            }
            if ((mb_strlen($this->container['endpoint']) < 1)) {
                $invalidProperties[] = "invalid value for 'endpoint', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
            if ((mb_strlen($this->container['username']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 2147483647.";
            }
            if ((mb_strlen($this->container['username']) < 1)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
            if ((mb_strlen($this->container['password']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 2147483647.";
            }
            if ((mb_strlen($this->container['password']) < 1)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['rdsInstanceId'] === null) {
            $invalidProperties[] = "'rdsInstanceId' can't be null";
        }
            if ((mb_strlen($this->container['rdsInstanceId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'rdsInstanceId', the character length must be smaller than or equal to 2147483647.";
            }
            if ((mb_strlen($this->container['rdsInstanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'rdsInstanceId', the character length must be bigger than or equal to 1.";
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
    * Gets endpoint
    *  **参数解释**：  内网地址以及端口号。  格式为xx.xx.xx.xx:xx。  **参数范围**：  不涉及。
    *
    * @return string
    */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
    * Sets endpoint
    *
    * @param string $endpoint **参数解释**：  内网地址以及端口号。  格式为xx.xx.xx.xx:xx。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Gets username
    *  **参数解释**：  实例账号名称。  **参数范围**：  不涉及。
    *
    * @return string
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string $username **参数解释**：  实例账号名称。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets password
    *  **参数解释**：  实例账号密码。  **约束限制**：  - 至少包含三种字符组合：小写字母、大写字母、数字、特殊字符 ~ ! @ # % ^ * - _ + ? - 不能使用简单、强度不够、容易被猜测的密码。 - 不能与账号名称或者倒序的账号名称相同。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string $password **参数解释**：  实例账号密码。  **约束限制**：  - 至少包含三种字符组合：小写字母、大写字母、数字、特殊字符 ~ ! @ # % ^ * - _ + ? - 不能使用简单、强度不够、容易被猜测的密码。 - 不能与账号名称或者倒序的账号名称相同。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets rdsInstanceId
    *  **参数解释**：  rds实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in01，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getRdsInstanceId()
    {
        return $this->container['rdsInstanceId'];
    }

    /**
    * Sets rdsInstanceId
    *
    * @param string $rdsInstanceId **参数解释**：  rds实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in01，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setRdsInstanceId($rdsInstanceId)
    {
        $this->container['rdsInstanceId'] = $rdsInstanceId;
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

