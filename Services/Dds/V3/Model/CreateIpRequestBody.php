<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateIpRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateIpRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  待打开IP开关的对象类型。 - 扩容shard组时，取值为“shard”。 - 扩容config组时，取值为“config”。
    * targetId  Shard组ID 注意：   1. 第一次添加Shard/Config IP时，该参数不传。   2. 对于已经添加过Shard IP的实例，需要传入该参数为新扩容的Shard组添加IP。
    * password  打开集群开关设置的密码。 注意：该密码暂不支持修改，请谨慎操作。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'targetId' => 'string',
            'password' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  待打开IP开关的对象类型。 - 扩容shard组时，取值为“shard”。 - 扩容config组时，取值为“config”。
    * targetId  Shard组ID 注意：   1. 第一次添加Shard/Config IP时，该参数不传。   2. 对于已经添加过Shard IP的实例，需要传入该参数为新扩容的Shard组添加IP。
    * password  打开集群开关设置的密码。 注意：该密码暂不支持修改，请谨慎操作。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'targetId' => null,
        'password' => null
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
    * type  待打开IP开关的对象类型。 - 扩容shard组时，取值为“shard”。 - 扩容config组时，取值为“config”。
    * targetId  Shard组ID 注意：   1. 第一次添加Shard/Config IP时，该参数不传。   2. 对于已经添加过Shard IP的实例，需要传入该参数为新扩容的Shard组添加IP。
    * password  打开集群开关设置的密码。 注意：该密码暂不支持修改，请谨慎操作。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'targetId' => 'target_id',
            'password' => 'password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  待打开IP开关的对象类型。 - 扩容shard组时，取值为“shard”。 - 扩容config组时，取值为“config”。
    * targetId  Shard组ID 注意：   1. 第一次添加Shard/Config IP时，该参数不传。   2. 对于已经添加过Shard IP的实例，需要传入该参数为新扩容的Shard组添加IP。
    * password  打开集群开关设置的密码。 注意：该密码暂不支持修改，请谨慎操作。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'targetId' => 'setTargetId',
            'password' => 'setPassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  待打开IP开关的对象类型。 - 扩容shard组时，取值为“shard”。 - 扩容config组时，取值为“config”。
    * targetId  Shard组ID 注意：   1. 第一次添加Shard/Config IP时，该参数不传。   2. 对于已经添加过Shard IP的实例，需要传入该参数为新扩容的Shard组添加IP。
    * password  打开集群开关设置的密码。 注意：该密码暂不支持修改，请谨慎操作。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'targetId' => 'getTargetId',
            'password' => 'getPassword'
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
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
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
    * Gets type
    *  待打开IP开关的对象类型。 - 扩容shard组时，取值为“shard”。 - 扩容config组时，取值为“config”。
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
    * @param string $type 待打开IP开关的对象类型。 - 扩容shard组时，取值为“shard”。 - 扩容config组时，取值为“config”。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets targetId
    *  Shard组ID 注意：   1. 第一次添加Shard/Config IP时，该参数不传。   2. 对于已经添加过Shard IP的实例，需要传入该参数为新扩容的Shard组添加IP。
    *
    * @return string|null
    */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
    * Sets targetId
    *
    * @param string|null $targetId Shard组ID 注意：   1. 第一次添加Shard/Config IP时，该参数不传。   2. 对于已经添加过Shard IP的实例，需要传入该参数为新扩容的Shard组添加IP。
    *
    * @return $this
    */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;
        return $this;
    }

    /**
    * Gets password
    *  打开集群开关设置的密码。 注意：该密码暂不支持修改，请谨慎操作。
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
    * @param string $password 打开集群开关设置的密码。 注意：该密码暂不支持修改，请谨慎操作。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
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

