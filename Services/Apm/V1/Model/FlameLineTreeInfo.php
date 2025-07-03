<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlameLineTreeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlameLineTreeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * from  开始时间，比如1704271204595
    * to  结束时间, 比如1704275169491
    * type  数据类型, CPU 或者 LATENCY
    * instanceId  实例id
    * api  api的url,比如: GET_/user/{id}
    * region  实例所在区域
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'from' => 'int',
            'to' => 'int',
            'type' => 'string',
            'instanceId' => 'int',
            'api' => 'string',
            'region' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * from  开始时间，比如1704271204595
    * to  结束时间, 比如1704275169491
    * type  数据类型, CPU 或者 LATENCY
    * instanceId  实例id
    * api  api的url,比如: GET_/user/{id}
    * region  实例所在区域
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'from' => 'int64',
        'to' => 'int64',
        'type' => null,
        'instanceId' => 'int64',
        'api' => null,
        'region' => null
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
    * from  开始时间，比如1704271204595
    * to  结束时间, 比如1704275169491
    * type  数据类型, CPU 或者 LATENCY
    * instanceId  实例id
    * api  api的url,比如: GET_/user/{id}
    * region  实例所在区域
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'from' => 'from',
            'to' => 'to',
            'type' => 'type',
            'instanceId' => 'instance_id',
            'api' => 'api',
            'region' => 'region'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * from  开始时间，比如1704271204595
    * to  结束时间, 比如1704275169491
    * type  数据类型, CPU 或者 LATENCY
    * instanceId  实例id
    * api  api的url,比如: GET_/user/{id}
    * region  实例所在区域
    *
    * @var string[]
    */
    protected static $setters = [
            'from' => 'setFrom',
            'to' => 'setTo',
            'type' => 'setType',
            'instanceId' => 'setInstanceId',
            'api' => 'setApi',
            'region' => 'setRegion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * from  开始时间，比如1704271204595
    * to  结束时间, 比如1704275169491
    * type  数据类型, CPU 或者 LATENCY
    * instanceId  实例id
    * api  api的url,比如: GET_/user/{id}
    * region  实例所在区域
    *
    * @var string[]
    */
    protected static $getters = [
            'from' => 'getFrom',
            'to' => 'getTo',
            'type' => 'getType',
            'instanceId' => 'getInstanceId',
            'api' => 'getApi',
            'region' => 'getRegion'
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
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['api'] = isset($data['api']) ? $data['api'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['api'] === null) {
            $invalidProperties[] = "'api' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
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
    * Gets from
    *  开始时间，比如1704271204595
    *
    * @return int
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int $from 开始时间，比如1704271204595
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  结束时间, 比如1704275169491
    *
    * @return int
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param int $to 结束时间, 比如1704275169491
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets type
    *  数据类型, CPU 或者 LATENCY
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
    * @param string $type 数据类型, CPU 或者 LATENCY
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id
    *
    * @return int
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param int $instanceId 实例id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets api
    *  api的url,比如: GET_/user/{id}
    *
    * @return string
    */
    public function getApi()
    {
        return $this->container['api'];
    }

    /**
    * Sets api
    *
    * @param string $api api的url,比如: GET_/user/{id}
    *
    * @return $this
    */
    public function setApi($api)
    {
        $this->container['api'] = $api;
        return $this;
    }

    /**
    * Gets region
    *  实例所在区域
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 实例所在区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
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

