<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeviceCommandRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeviceCommandRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceId  **参数说明**：设备命令所属的设备服务ID，在设备关联的产品模型中定义。 **取值范围**：长度不超过64的字符串。
    * commandName  **参数说明**：设备命令名称，在设备关联的产品模型中定义。 **取值范围**：长度不超过128的字符串。
    * paras  **参数说明**：设备执行的命令，Json格式，里面是一个个键值对，如果serviceId不为空，每个键都是profile中命令的参数名（paraName）;如果serviceId为空则由用户自定义命令格式。设备命令示例：{\"value\":\"1\"}，具体格式需要应用和设备约定。此参数仅支持Json格式，暂不支持字符串。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceId' => 'string',
            'commandName' => 'string',
            'paras' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceId  **参数说明**：设备命令所属的设备服务ID，在设备关联的产品模型中定义。 **取值范围**：长度不超过64的字符串。
    * commandName  **参数说明**：设备命令名称，在设备关联的产品模型中定义。 **取值范围**：长度不超过128的字符串。
    * paras  **参数说明**：设备执行的命令，Json格式，里面是一个个键值对，如果serviceId不为空，每个键都是profile中命令的参数名（paraName）;如果serviceId为空则由用户自定义命令格式。设备命令示例：{\"value\":\"1\"}，具体格式需要应用和设备约定。此参数仅支持Json格式，暂不支持字符串。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceId' => null,
        'commandName' => null,
        'paras' => null
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
    * serviceId  **参数说明**：设备命令所属的设备服务ID，在设备关联的产品模型中定义。 **取值范围**：长度不超过64的字符串。
    * commandName  **参数说明**：设备命令名称，在设备关联的产品模型中定义。 **取值范围**：长度不超过128的字符串。
    * paras  **参数说明**：设备执行的命令，Json格式，里面是一个个键值对，如果serviceId不为空，每个键都是profile中命令的参数名（paraName）;如果serviceId为空则由用户自定义命令格式。设备命令示例：{\"value\":\"1\"}，具体格式需要应用和设备约定。此参数仅支持Json格式，暂不支持字符串。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceId' => 'service_id',
            'commandName' => 'command_name',
            'paras' => 'paras'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceId  **参数说明**：设备命令所属的设备服务ID，在设备关联的产品模型中定义。 **取值范围**：长度不超过64的字符串。
    * commandName  **参数说明**：设备命令名称，在设备关联的产品模型中定义。 **取值范围**：长度不超过128的字符串。
    * paras  **参数说明**：设备执行的命令，Json格式，里面是一个个键值对，如果serviceId不为空，每个键都是profile中命令的参数名（paraName）;如果serviceId为空则由用户自定义命令格式。设备命令示例：{\"value\":\"1\"}，具体格式需要应用和设备约定。此参数仅支持Json格式，暂不支持字符串。
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceId' => 'setServiceId',
            'commandName' => 'setCommandName',
            'paras' => 'setParas'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceId  **参数说明**：设备命令所属的设备服务ID，在设备关联的产品模型中定义。 **取值范围**：长度不超过64的字符串。
    * commandName  **参数说明**：设备命令名称，在设备关联的产品模型中定义。 **取值范围**：长度不超过128的字符串。
    * paras  **参数说明**：设备执行的命令，Json格式，里面是一个个键值对，如果serviceId不为空，每个键都是profile中命令的参数名（paraName）;如果serviceId为空则由用户自定义命令格式。设备命令示例：{\"value\":\"1\"}，具体格式需要应用和设备约定。此参数仅支持Json格式，暂不支持字符串。
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceId' => 'getServiceId',
            'commandName' => 'getCommandName',
            'paras' => 'getParas'
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
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['commandName'] = isset($data['commandName']) ? $data['commandName'] : null;
        $this->container['paras'] = isset($data['paras']) ? $data['paras'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['serviceId']) && (mb_strlen($this->container['serviceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'serviceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['commandName']) && (mb_strlen($this->container['commandName']) > 128)) {
                $invalidProperties[] = "invalid value for 'commandName', the character length must be smaller than or equal to 128.";
            }
        if ($this->container['paras'] === null) {
            $invalidProperties[] = "'paras' can't be null";
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
    * Gets serviceId
    *  **参数说明**：设备命令所属的设备服务ID，在设备关联的产品模型中定义。 **取值范围**：长度不超过64的字符串。
    *
    * @return string|null
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string|null $serviceId **参数说明**：设备命令所属的设备服务ID，在设备关联的产品模型中定义。 **取值范围**：长度不超过64的字符串。
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets commandName
    *  **参数说明**：设备命令名称，在设备关联的产品模型中定义。 **取值范围**：长度不超过128的字符串。
    *
    * @return string|null
    */
    public function getCommandName()
    {
        return $this->container['commandName'];
    }

    /**
    * Sets commandName
    *
    * @param string|null $commandName **参数说明**：设备命令名称，在设备关联的产品模型中定义。 **取值范围**：长度不超过128的字符串。
    *
    * @return $this
    */
    public function setCommandName($commandName)
    {
        $this->container['commandName'] = $commandName;
        return $this;
    }

    /**
    * Gets paras
    *  **参数说明**：设备执行的命令，Json格式，里面是一个个键值对，如果serviceId不为空，每个键都是profile中命令的参数名（paraName）;如果serviceId为空则由用户自定义命令格式。设备命令示例：{\"value\":\"1\"}，具体格式需要应用和设备约定。此参数仅支持Json格式，暂不支持字符串。
    *
    * @return object
    */
    public function getParas()
    {
        return $this->container['paras'];
    }

    /**
    * Sets paras
    *
    * @param object $paras **参数说明**：设备执行的命令，Json格式，里面是一个个键值对，如果serviceId不为空，每个键都是profile中命令的参数名（paraName）;如果serviceId为空则由用户自定义命令格式。设备命令示例：{\"value\":\"1\"}，具体格式需要应用和设备约定。此参数仅支持Json格式，暂不支持字符串。
    *
    * @return $this
    */
    public function setParas($paras)
    {
        $this->container['paras'] = $paras;
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

