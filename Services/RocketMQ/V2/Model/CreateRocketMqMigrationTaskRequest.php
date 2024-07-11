<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRocketMqMigrationTaskRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRocketMqMigrationTaskRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID。
    * overwrite  true开启同名覆盖，会对已有的同名元数据的配置进行修改，false时当Topic或group已存在则会报错。
    * name  迁移任务名称，名称规则参考创建实例。
    * type  迁移任务类型，分为自建RocketMQ上云(rocketmq)、自建RabbitMQ上云(rabbitToRocket)
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'overwrite' => 'string',
            'name' => 'string',
            'type' => 'string',
            'body' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\CreateRocketMqMigrationTaskReq'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID。
    * overwrite  true开启同名覆盖，会对已有的同名元数据的配置进行修改，false时当Topic或group已存在则会报错。
    * name  迁移任务名称，名称规则参考创建实例。
    * type  迁移任务类型，分为自建RocketMQ上云(rocketmq)、自建RabbitMQ上云(rabbitToRocket)
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'overwrite' => null,
        'name' => null,
        'type' => null,
        'body' => null
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
    * instanceId  实例ID。
    * overwrite  true开启同名覆盖，会对已有的同名元数据的配置进行修改，false时当Topic或group已存在则会报错。
    * name  迁移任务名称，名称规则参考创建实例。
    * type  迁移任务类型，分为自建RocketMQ上云(rocketmq)、自建RabbitMQ上云(rabbitToRocket)
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'overwrite' => 'overwrite',
            'name' => 'name',
            'type' => 'type',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID。
    * overwrite  true开启同名覆盖，会对已有的同名元数据的配置进行修改，false时当Topic或group已存在则会报错。
    * name  迁移任务名称，名称规则参考创建实例。
    * type  迁移任务类型，分为自建RocketMQ上云(rocketmq)、自建RabbitMQ上云(rabbitToRocket)
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'overwrite' => 'setOverwrite',
            'name' => 'setName',
            'type' => 'setType',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID。
    * overwrite  true开启同名覆盖，会对已有的同名元数据的配置进行修改，false时当Topic或group已存在则会报错。
    * name  迁移任务名称，名称规则参考创建实例。
    * type  迁移任务类型，分为自建RocketMQ上云(rocketmq)、自建RabbitMQ上云(rabbitToRocket)
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'overwrite' => 'getOverwrite',
            'name' => 'getName',
            'type' => 'getType',
            'body' => 'getBody'
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
    const OVERWRITE_TRUE = 'true';
    const OVERWRITE_FALSE = 'false';
    const TYPE_ROCKETMQ = 'rocketmq';
    const TYPE_RABBIT_TO_ROCKET = 'rabbitToRocket';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOverwriteAllowableValues()
    {
        return [
            self::OVERWRITE_TRUE,
            self::OVERWRITE_FALSE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ROCKETMQ,
            self::TYPE_RABBIT_TO_ROCKET,
        ];
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['overwrite'] = isset($data['overwrite']) ? $data['overwrite'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
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
        if ($this->container['overwrite'] === null) {
            $invalidProperties[] = "'overwrite' can't be null";
        }
            $allowedValues = $this->getOverwriteAllowableValues();
                if (!is_null($this->container['overwrite']) && !in_array($this->container['overwrite'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'overwrite', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets instanceId
    *  实例ID。
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
    * @param string $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets overwrite
    *  true开启同名覆盖，会对已有的同名元数据的配置进行修改，false时当Topic或group已存在则会报错。
    *
    * @return string
    */
    public function getOverwrite()
    {
        return $this->container['overwrite'];
    }

    /**
    * Sets overwrite
    *
    * @param string $overwrite true开启同名覆盖，会对已有的同名元数据的配置进行修改，false时当Topic或group已存在则会报错。
    *
    * @return $this
    */
    public function setOverwrite($overwrite)
    {
        $this->container['overwrite'] = $overwrite;
        return $this;
    }

    /**
    * Gets name
    *  迁移任务名称，名称规则参考创建实例。
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
    * @param string $name 迁移任务名称，名称规则参考创建实例。
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
    *  迁移任务类型，分为自建RocketMQ上云(rocketmq)、自建RabbitMQ上云(rabbitToRocket)
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
    * @param string $type 迁移任务类型，分为自建RocketMQ上云(rocketmq)、自建RabbitMQ上云(rabbitToRocket)
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\CreateRocketMqMigrationTaskReq|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\CreateRocketMqMigrationTaskReq|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

