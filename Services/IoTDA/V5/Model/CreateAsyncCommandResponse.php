<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAsyncCommandResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAsyncCommandResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deviceId  设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获得。
    * commandId  设备命令ID，用于唯一标识一条命令，在下发设备命令时由物联网平台分配获得。
    * serviceId  设备命令所属的设备服务ID，在设备关联的产品模型中定义。
    * commandName  设备命令名称，在设备关联的产品模型中定义。
    * paras  设备执行的命令，Json格式，里面是一个个健值对，如果service_id不为空，每个健都是profile中命令的参数名（paraName）;如果service_id为空则由用户自定义命令格式。设备命令示例：{\"value\":\"1\"}，具体格式需要应用和设备约定。
    * expireTime  物联网平台缓存命令的时长， 单位秒。
    * status  设备命令状态,如果命令被缓存，返回PENDING, 如果命令下发给设备，返回SENT。
    * createdTime  命令的创建时间，\"yyyyMMdd'T'HHmmss'Z'\"格式的UTC字符串。
    * sendStrategy  下发策略， immediately表示立即下发，delay表示缓存起来，等数据上报或者设备上线之后下发。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deviceId' => 'string',
            'commandId' => 'string',
            'serviceId' => 'string',
            'commandName' => 'string',
            'paras' => 'object',
            'expireTime' => 'int',
            'status' => 'string',
            'createdTime' => 'string',
            'sendStrategy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deviceId  设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获得。
    * commandId  设备命令ID，用于唯一标识一条命令，在下发设备命令时由物联网平台分配获得。
    * serviceId  设备命令所属的设备服务ID，在设备关联的产品模型中定义。
    * commandName  设备命令名称，在设备关联的产品模型中定义。
    * paras  设备执行的命令，Json格式，里面是一个个健值对，如果service_id不为空，每个健都是profile中命令的参数名（paraName）;如果service_id为空则由用户自定义命令格式。设备命令示例：{\"value\":\"1\"}，具体格式需要应用和设备约定。
    * expireTime  物联网平台缓存命令的时长， 单位秒。
    * status  设备命令状态,如果命令被缓存，返回PENDING, 如果命令下发给设备，返回SENT。
    * createdTime  命令的创建时间，\"yyyyMMdd'T'HHmmss'Z'\"格式的UTC字符串。
    * sendStrategy  下发策略， immediately表示立即下发，delay表示缓存起来，等数据上报或者设备上线之后下发。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deviceId' => null,
        'commandId' => null,
        'serviceId' => null,
        'commandName' => null,
        'paras' => null,
        'expireTime' => 'int32',
        'status' => null,
        'createdTime' => null,
        'sendStrategy' => null
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
    * deviceId  设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获得。
    * commandId  设备命令ID，用于唯一标识一条命令，在下发设备命令时由物联网平台分配获得。
    * serviceId  设备命令所属的设备服务ID，在设备关联的产品模型中定义。
    * commandName  设备命令名称，在设备关联的产品模型中定义。
    * paras  设备执行的命令，Json格式，里面是一个个健值对，如果service_id不为空，每个健都是profile中命令的参数名（paraName）;如果service_id为空则由用户自定义命令格式。设备命令示例：{\"value\":\"1\"}，具体格式需要应用和设备约定。
    * expireTime  物联网平台缓存命令的时长， 单位秒。
    * status  设备命令状态,如果命令被缓存，返回PENDING, 如果命令下发给设备，返回SENT。
    * createdTime  命令的创建时间，\"yyyyMMdd'T'HHmmss'Z'\"格式的UTC字符串。
    * sendStrategy  下发策略， immediately表示立即下发，delay表示缓存起来，等数据上报或者设备上线之后下发。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deviceId' => 'device_id',
            'commandId' => 'command_id',
            'serviceId' => 'service_id',
            'commandName' => 'command_name',
            'paras' => 'paras',
            'expireTime' => 'expire_time',
            'status' => 'status',
            'createdTime' => 'created_time',
            'sendStrategy' => 'send_strategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deviceId  设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获得。
    * commandId  设备命令ID，用于唯一标识一条命令，在下发设备命令时由物联网平台分配获得。
    * serviceId  设备命令所属的设备服务ID，在设备关联的产品模型中定义。
    * commandName  设备命令名称，在设备关联的产品模型中定义。
    * paras  设备执行的命令，Json格式，里面是一个个健值对，如果service_id不为空，每个健都是profile中命令的参数名（paraName）;如果service_id为空则由用户自定义命令格式。设备命令示例：{\"value\":\"1\"}，具体格式需要应用和设备约定。
    * expireTime  物联网平台缓存命令的时长， 单位秒。
    * status  设备命令状态,如果命令被缓存，返回PENDING, 如果命令下发给设备，返回SENT。
    * createdTime  命令的创建时间，\"yyyyMMdd'T'HHmmss'Z'\"格式的UTC字符串。
    * sendStrategy  下发策略， immediately表示立即下发，delay表示缓存起来，等数据上报或者设备上线之后下发。
    *
    * @var string[]
    */
    protected static $setters = [
            'deviceId' => 'setDeviceId',
            'commandId' => 'setCommandId',
            'serviceId' => 'setServiceId',
            'commandName' => 'setCommandName',
            'paras' => 'setParas',
            'expireTime' => 'setExpireTime',
            'status' => 'setStatus',
            'createdTime' => 'setCreatedTime',
            'sendStrategy' => 'setSendStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deviceId  设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获得。
    * commandId  设备命令ID，用于唯一标识一条命令，在下发设备命令时由物联网平台分配获得。
    * serviceId  设备命令所属的设备服务ID，在设备关联的产品模型中定义。
    * commandName  设备命令名称，在设备关联的产品模型中定义。
    * paras  设备执行的命令，Json格式，里面是一个个健值对，如果service_id不为空，每个健都是profile中命令的参数名（paraName）;如果service_id为空则由用户自定义命令格式。设备命令示例：{\"value\":\"1\"}，具体格式需要应用和设备约定。
    * expireTime  物联网平台缓存命令的时长， 单位秒。
    * status  设备命令状态,如果命令被缓存，返回PENDING, 如果命令下发给设备，返回SENT。
    * createdTime  命令的创建时间，\"yyyyMMdd'T'HHmmss'Z'\"格式的UTC字符串。
    * sendStrategy  下发策略， immediately表示立即下发，delay表示缓存起来，等数据上报或者设备上线之后下发。
    *
    * @var string[]
    */
    protected static $getters = [
            'deviceId' => 'getDeviceId',
            'commandId' => 'getCommandId',
            'serviceId' => 'getServiceId',
            'commandName' => 'getCommandName',
            'paras' => 'getParas',
            'expireTime' => 'getExpireTime',
            'status' => 'getStatus',
            'createdTime' => 'getCreatedTime',
            'sendStrategy' => 'getSendStrategy'
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
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['commandId'] = isset($data['commandId']) ? $data['commandId'] : null;
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['commandName'] = isset($data['commandName']) ? $data['commandName'] : null;
        $this->container['paras'] = isset($data['paras']) ? $data['paras'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['sendStrategy'] = isset($data['sendStrategy']) ? $data['sendStrategy'] : null;
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
    * Gets deviceId
    *  设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获得。
    *
    * @return string|null
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string|null $deviceId 设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获得。
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets commandId
    *  设备命令ID，用于唯一标识一条命令，在下发设备命令时由物联网平台分配获得。
    *
    * @return string|null
    */
    public function getCommandId()
    {
        return $this->container['commandId'];
    }

    /**
    * Sets commandId
    *
    * @param string|null $commandId 设备命令ID，用于唯一标识一条命令，在下发设备命令时由物联网平台分配获得。
    *
    * @return $this
    */
    public function setCommandId($commandId)
    {
        $this->container['commandId'] = $commandId;
        return $this;
    }

    /**
    * Gets serviceId
    *  设备命令所属的设备服务ID，在设备关联的产品模型中定义。
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
    * @param string|null $serviceId 设备命令所属的设备服务ID，在设备关联的产品模型中定义。
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
    *  设备命令名称，在设备关联的产品模型中定义。
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
    * @param string|null $commandName 设备命令名称，在设备关联的产品模型中定义。
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
    *  设备执行的命令，Json格式，里面是一个个健值对，如果service_id不为空，每个健都是profile中命令的参数名（paraName）;如果service_id为空则由用户自定义命令格式。设备命令示例：{\"value\":\"1\"}，具体格式需要应用和设备约定。
    *
    * @return object|null
    */
    public function getParas()
    {
        return $this->container['paras'];
    }

    /**
    * Sets paras
    *
    * @param object|null $paras 设备执行的命令，Json格式，里面是一个个健值对，如果service_id不为空，每个健都是profile中命令的参数名（paraName）;如果service_id为空则由用户自定义命令格式。设备命令示例：{\"value\":\"1\"}，具体格式需要应用和设备约定。
    *
    * @return $this
    */
    public function setParas($paras)
    {
        $this->container['paras'] = $paras;
        return $this;
    }

    /**
    * Gets expireTime
    *  物联网平台缓存命令的时长， 单位秒。
    *
    * @return int|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int|null $expireTime 物联网平台缓存命令的时长， 单位秒。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets status
    *  设备命令状态,如果命令被缓存，返回PENDING, 如果命令下发给设备，返回SENT。
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
    * @param string|null $status 设备命令状态,如果命令被缓存，返回PENDING, 如果命令下发给设备，返回SENT。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdTime
    *  命令的创建时间，\"yyyyMMdd'T'HHmmss'Z'\"格式的UTC字符串。
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 命令的创建时间，\"yyyyMMdd'T'HHmmss'Z'\"格式的UTC字符串。
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets sendStrategy
    *  下发策略， immediately表示立即下发，delay表示缓存起来，等数据上报或者设备上线之后下发。
    *
    * @return string|null
    */
    public function getSendStrategy()
    {
        return $this->container['sendStrategy'];
    }

    /**
    * Sets sendStrategy
    *
    * @param string|null $sendStrategy 下发策略， immediately表示立即下发，delay表示缓存起来，等数据上报或者设备上线之后下发。
    *
    * @return $this
    */
    public function setSendStrategy($sendStrategy)
    {
        $this->container['sendStrategy'] = $sendStrategy;
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

