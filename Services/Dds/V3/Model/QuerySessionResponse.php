<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuerySessionResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuerySessionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  会话ID。
    * active  当前会话是否活跃。 取值为“true”，表示活跃。 取值为“false”，表示不活跃。
    * operation  操作。
    * type  操作类型。
    * costTime  运行时间，单位为 us。
    * planSummary  执行计划描述。
    * host  主机。
    * client  客户端地址。
    * description  连接描述。
    * namespace  命名空间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'active' => 'bool',
            'operation' => 'string',
            'type' => 'string',
            'costTime' => 'string',
            'planSummary' => 'string',
            'host' => 'string',
            'client' => 'string',
            'description' => 'string',
            'namespace' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  会话ID。
    * active  当前会话是否活跃。 取值为“true”，表示活跃。 取值为“false”，表示不活跃。
    * operation  操作。
    * type  操作类型。
    * costTime  运行时间，单位为 us。
    * planSummary  执行计划描述。
    * host  主机。
    * client  客户端地址。
    * description  连接描述。
    * namespace  命名空间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'active' => null,
        'operation' => null,
        'type' => null,
        'costTime' => null,
        'planSummary' => null,
        'host' => null,
        'client' => null,
        'description' => null,
        'namespace' => null
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
    * id  会话ID。
    * active  当前会话是否活跃。 取值为“true”，表示活跃。 取值为“false”，表示不活跃。
    * operation  操作。
    * type  操作类型。
    * costTime  运行时间，单位为 us。
    * planSummary  执行计划描述。
    * host  主机。
    * client  客户端地址。
    * description  连接描述。
    * namespace  命名空间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'active' => 'active',
            'operation' => 'operation',
            'type' => 'type',
            'costTime' => 'cost_time',
            'planSummary' => 'plan_summary',
            'host' => 'host',
            'client' => 'client',
            'description' => 'description',
            'namespace' => 'namespace'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  会话ID。
    * active  当前会话是否活跃。 取值为“true”，表示活跃。 取值为“false”，表示不活跃。
    * operation  操作。
    * type  操作类型。
    * costTime  运行时间，单位为 us。
    * planSummary  执行计划描述。
    * host  主机。
    * client  客户端地址。
    * description  连接描述。
    * namespace  命名空间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'active' => 'setActive',
            'operation' => 'setOperation',
            'type' => 'setType',
            'costTime' => 'setCostTime',
            'planSummary' => 'setPlanSummary',
            'host' => 'setHost',
            'client' => 'setClient',
            'description' => 'setDescription',
            'namespace' => 'setNamespace'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  会话ID。
    * active  当前会话是否活跃。 取值为“true”，表示活跃。 取值为“false”，表示不活跃。
    * operation  操作。
    * type  操作类型。
    * costTime  运行时间，单位为 us。
    * planSummary  执行计划描述。
    * host  主机。
    * client  客户端地址。
    * description  连接描述。
    * namespace  命名空间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'active' => 'getActive',
            'operation' => 'getOperation',
            'type' => 'getType',
            'costTime' => 'getCostTime',
            'planSummary' => 'getPlanSummary',
            'host' => 'getHost',
            'client' => 'getClient',
            'description' => 'getDescription',
            'namespace' => 'getNamespace'
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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['costTime'] = isset($data['costTime']) ? $data['costTime'] : null;
        $this->container['planSummary'] = isset($data['planSummary']) ? $data['planSummary'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
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
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['operation'] === null) {
            $invalidProperties[] = "'operation' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['costTime'] === null) {
            $invalidProperties[] = "'costTime' can't be null";
        }
        if ($this->container['planSummary'] === null) {
            $invalidProperties[] = "'planSummary' can't be null";
        }
        if ($this->container['host'] === null) {
            $invalidProperties[] = "'host' can't be null";
        }
        if ($this->container['client'] === null) {
            $invalidProperties[] = "'client' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
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
    *  会话ID。
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
    * @param string $id 会话ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets active
    *  当前会话是否活跃。 取值为“true”，表示活跃。 取值为“false”，表示不活跃。
    *
    * @return bool
    */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
    * Sets active
    *
    * @param bool $active 当前会话是否活跃。 取值为“true”，表示活跃。 取值为“false”，表示不活跃。
    *
    * @return $this
    */
    public function setActive($active)
    {
        $this->container['active'] = $active;
        return $this;
    }

    /**
    * Gets operation
    *  操作。
    *
    * @return string
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string $operation 操作。
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets type
    *  操作类型。
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
    * @param string $type 操作类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets costTime
    *  运行时间，单位为 us。
    *
    * @return string
    */
    public function getCostTime()
    {
        return $this->container['costTime'];
    }

    /**
    * Sets costTime
    *
    * @param string $costTime 运行时间，单位为 us。
    *
    * @return $this
    */
    public function setCostTime($costTime)
    {
        $this->container['costTime'] = $costTime;
        return $this;
    }

    /**
    * Gets planSummary
    *  执行计划描述。
    *
    * @return string
    */
    public function getPlanSummary()
    {
        return $this->container['planSummary'];
    }

    /**
    * Sets planSummary
    *
    * @param string $planSummary 执行计划描述。
    *
    * @return $this
    */
    public function setPlanSummary($planSummary)
    {
        $this->container['planSummary'] = $planSummary;
        return $this;
    }

    /**
    * Gets host
    *  主机。
    *
    * @return string
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string $host 主机。
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets client
    *  客户端地址。
    *
    * @return string
    */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
    * Sets client
    *
    * @param string $client 客户端地址。
    *
    * @return $this
    */
    public function setClient($client)
    {
        $this->container['client'] = $client;
        return $this;
    }

    /**
    * Gets description
    *  连接描述。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 连接描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets namespace
    *  命名空间。
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 命名空间。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
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

