<?php

namespace HuaweiCloud\SDK\Csms\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Secret implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Secret';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  凭据的资源标识符。
    * name  凭据名称。
    * state  凭据状态，取值如下：  ENABLED：表示启用状态  DISABLED：表示禁用状态  PENDING_DELETE：表示待删除状态  FROZEN：表示冻结状态
    * kmsKeyId  用于加密凭据值的KMS主密钥的ID值。
    * description  凭据的描述信息。
    * createTime  凭据创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * updateTime  凭据上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * scheduledDeleteTime  凭据计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。  凭据不在删除计划中时，本项值为null。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'state' => 'string',
            'kmsKeyId' => 'string',
            'description' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'scheduledDeleteTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  凭据的资源标识符。
    * name  凭据名称。
    * state  凭据状态，取值如下：  ENABLED：表示启用状态  DISABLED：表示禁用状态  PENDING_DELETE：表示待删除状态  FROZEN：表示冻结状态
    * kmsKeyId  用于加密凭据值的KMS主密钥的ID值。
    * description  凭据的描述信息。
    * createTime  凭据创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * updateTime  凭据上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * scheduledDeleteTime  凭据计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。  凭据不在删除计划中时，本项值为null。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'state' => null,
        'kmsKeyId' => null,
        'description' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'scheduledDeleteTime' => 'int64'
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
    * id  凭据的资源标识符。
    * name  凭据名称。
    * state  凭据状态，取值如下：  ENABLED：表示启用状态  DISABLED：表示禁用状态  PENDING_DELETE：表示待删除状态  FROZEN：表示冻结状态
    * kmsKeyId  用于加密凭据值的KMS主密钥的ID值。
    * description  凭据的描述信息。
    * createTime  凭据创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * updateTime  凭据上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * scheduledDeleteTime  凭据计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。  凭据不在删除计划中时，本项值为null。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'state' => 'state',
            'kmsKeyId' => 'kms_key_id',
            'description' => 'description',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'scheduledDeleteTime' => 'scheduled_delete_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  凭据的资源标识符。
    * name  凭据名称。
    * state  凭据状态，取值如下：  ENABLED：表示启用状态  DISABLED：表示禁用状态  PENDING_DELETE：表示待删除状态  FROZEN：表示冻结状态
    * kmsKeyId  用于加密凭据值的KMS主密钥的ID值。
    * description  凭据的描述信息。
    * createTime  凭据创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * updateTime  凭据上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * scheduledDeleteTime  凭据计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。  凭据不在删除计划中时，本项值为null。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'state' => 'setState',
            'kmsKeyId' => 'setKmsKeyId',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'scheduledDeleteTime' => 'setScheduledDeleteTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  凭据的资源标识符。
    * name  凭据名称。
    * state  凭据状态，取值如下：  ENABLED：表示启用状态  DISABLED：表示禁用状态  PENDING_DELETE：表示待删除状态  FROZEN：表示冻结状态
    * kmsKeyId  用于加密凭据值的KMS主密钥的ID值。
    * description  凭据的描述信息。
    * createTime  凭据创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * updateTime  凭据上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * scheduledDeleteTime  凭据计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。  凭据不在删除计划中时，本项值为null。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'state' => 'getState',
            'kmsKeyId' => 'getKmsKeyId',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'scheduledDeleteTime' => 'getScheduledDeleteTime'
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['kmsKeyId'] = isset($data['kmsKeyId']) ? $data['kmsKeyId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['scheduledDeleteTime'] = isset($data['scheduledDeleteTime']) ? $data['scheduledDeleteTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && !preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[a-zA-Z0-9._-]{1,64}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9._-]{1,64}$/.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 8)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 4)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['kmsKeyId']) && !preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['kmsKeyId'])) {
                $invalidProperties[] = "invalid value for 'kmsKeyId', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 13)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 13)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scheduledDeleteTime']) && ($this->container['scheduledDeleteTime'] > 13)) {
                $invalidProperties[] = "invalid value for 'scheduledDeleteTime', must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['scheduledDeleteTime']) && ($this->container['scheduledDeleteTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scheduledDeleteTime', must be bigger than or equal to 0.";
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
    *  凭据的资源标识符。
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
    * @param string|null $id 凭据的资源标识符。
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
    *  凭据名称。
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
    * @param string|null $name 凭据名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets state
    *  凭据状态，取值如下：  ENABLED：表示启用状态  DISABLED：表示禁用状态  PENDING_DELETE：表示待删除状态  FROZEN：表示冻结状态
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
    * @param string|null $state 凭据状态，取值如下：  ENABLED：表示启用状态  DISABLED：表示禁用状态  PENDING_DELETE：表示待删除状态  FROZEN：表示冻结状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets kmsKeyId
    *  用于加密凭据值的KMS主密钥的ID值。
    *
    * @return string|null
    */
    public function getKmsKeyId()
    {
        return $this->container['kmsKeyId'];
    }

    /**
    * Sets kmsKeyId
    *
    * @param string|null $kmsKeyId 用于加密凭据值的KMS主密钥的ID值。
    *
    * @return $this
    */
    public function setKmsKeyId($kmsKeyId)
    {
        $this->container['kmsKeyId'] = $kmsKeyId;
        return $this;
    }

    /**
    * Gets description
    *  凭据的描述信息。
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
    * @param string|null $description 凭据的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createTime
    *  凭据创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 凭据创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  凭据上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 凭据上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets scheduledDeleteTime
    *  凭据计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。  凭据不在删除计划中时，本项值为null。
    *
    * @return int|null
    */
    public function getScheduledDeleteTime()
    {
        return $this->container['scheduledDeleteTime'];
    }

    /**
    * Sets scheduledDeleteTime
    *
    * @param int|null $scheduledDeleteTime 凭据计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。  凭据不在删除计划中时，本项值为null。
    *
    * @return $this
    */
    public function setScheduledDeleteTime($scheduledDeleteTime)
    {
        $this->container['scheduledDeleteTime'] = $scheduledDeleteTime;
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

