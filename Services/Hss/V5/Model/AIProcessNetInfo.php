<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AIProcessNetInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AIProcessNetInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * listenIp  **参数解释**： 应用进程监听IP **取值范围**： 取值0-2147483647
    * listenProtocol  **参数解释**： 应用进程监听对应的网络协议 **取值范围**： - tcp：tcp协议 - udp：udp协议
    * listenPort  **参数解释**： 应用进程监听端口 **取值范围**： 取值0-2147483647
    * listenStatus  **参数解释**： 应用进程监听状态 **取值范围**： - established：已建立连接 - closed：连接已关闭 - listening：监听中 - other：连接中间态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'listenIp' => 'string',
            'listenProtocol' => 'string',
            'listenPort' => 'int',
            'listenStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * listenIp  **参数解释**： 应用进程监听IP **取值范围**： 取值0-2147483647
    * listenProtocol  **参数解释**： 应用进程监听对应的网络协议 **取值范围**： - tcp：tcp协议 - udp：udp协议
    * listenPort  **参数解释**： 应用进程监听端口 **取值范围**： 取值0-2147483647
    * listenStatus  **参数解释**： 应用进程监听状态 **取值范围**： - established：已建立连接 - closed：连接已关闭 - listening：监听中 - other：连接中间态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'listenIp' => null,
        'listenProtocol' => null,
        'listenPort' => 'int64',
        'listenStatus' => null
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
    * listenIp  **参数解释**： 应用进程监听IP **取值范围**： 取值0-2147483647
    * listenProtocol  **参数解释**： 应用进程监听对应的网络协议 **取值范围**： - tcp：tcp协议 - udp：udp协议
    * listenPort  **参数解释**： 应用进程监听端口 **取值范围**： 取值0-2147483647
    * listenStatus  **参数解释**： 应用进程监听状态 **取值范围**： - established：已建立连接 - closed：连接已关闭 - listening：监听中 - other：连接中间态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'listenIp' => 'listen_ip',
            'listenProtocol' => 'listen_protocol',
            'listenPort' => 'listen_port',
            'listenStatus' => 'listen_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * listenIp  **参数解释**： 应用进程监听IP **取值范围**： 取值0-2147483647
    * listenProtocol  **参数解释**： 应用进程监听对应的网络协议 **取值范围**： - tcp：tcp协议 - udp：udp协议
    * listenPort  **参数解释**： 应用进程监听端口 **取值范围**： 取值0-2147483647
    * listenStatus  **参数解释**： 应用进程监听状态 **取值范围**： - established：已建立连接 - closed：连接已关闭 - listening：监听中 - other：连接中间态
    *
    * @var string[]
    */
    protected static $setters = [
            'listenIp' => 'setListenIp',
            'listenProtocol' => 'setListenProtocol',
            'listenPort' => 'setListenPort',
            'listenStatus' => 'setListenStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * listenIp  **参数解释**： 应用进程监听IP **取值范围**： 取值0-2147483647
    * listenProtocol  **参数解释**： 应用进程监听对应的网络协议 **取值范围**： - tcp：tcp协议 - udp：udp协议
    * listenPort  **参数解释**： 应用进程监听端口 **取值范围**： 取值0-2147483647
    * listenStatus  **参数解释**： 应用进程监听状态 **取值范围**： - established：已建立连接 - closed：连接已关闭 - listening：监听中 - other：连接中间态
    *
    * @var string[]
    */
    protected static $getters = [
            'listenIp' => 'getListenIp',
            'listenProtocol' => 'getListenProtocol',
            'listenPort' => 'getListenPort',
            'listenStatus' => 'getListenStatus'
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
        $this->container['listenIp'] = isset($data['listenIp']) ? $data['listenIp'] : null;
        $this->container['listenProtocol'] = isset($data['listenProtocol']) ? $data['listenProtocol'] : null;
        $this->container['listenPort'] = isset($data['listenPort']) ? $data['listenPort'] : null;
        $this->container['listenStatus'] = isset($data['listenStatus']) ? $data['listenStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['listenIp']) && (mb_strlen($this->container['listenIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'listenIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['listenIp']) && (mb_strlen($this->container['listenIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'listenIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['listenProtocol']) && (mb_strlen($this->container['listenProtocol']) > 64)) {
                $invalidProperties[] = "invalid value for 'listenProtocol', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['listenProtocol']) && (mb_strlen($this->container['listenProtocol']) < 1)) {
                $invalidProperties[] = "invalid value for 'listenProtocol', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['listenPort']) && ($this->container['listenPort'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'listenPort', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['listenPort']) && ($this->container['listenPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'listenPort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['listenStatus']) && (mb_strlen($this->container['listenStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'listenStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['listenStatus']) && (mb_strlen($this->container['listenStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'listenStatus', the character length must be bigger than or equal to 1.";
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
    * Gets listenIp
    *  **参数解释**： 应用进程监听IP **取值范围**： 取值0-2147483647
    *
    * @return string|null
    */
    public function getListenIp()
    {
        return $this->container['listenIp'];
    }

    /**
    * Sets listenIp
    *
    * @param string|null $listenIp **参数解释**： 应用进程监听IP **取值范围**： 取值0-2147483647
    *
    * @return $this
    */
    public function setListenIp($listenIp)
    {
        $this->container['listenIp'] = $listenIp;
        return $this;
    }

    /**
    * Gets listenProtocol
    *  **参数解释**： 应用进程监听对应的网络协议 **取值范围**： - tcp：tcp协议 - udp：udp协议
    *
    * @return string|null
    */
    public function getListenProtocol()
    {
        return $this->container['listenProtocol'];
    }

    /**
    * Sets listenProtocol
    *
    * @param string|null $listenProtocol **参数解释**： 应用进程监听对应的网络协议 **取值范围**： - tcp：tcp协议 - udp：udp协议
    *
    * @return $this
    */
    public function setListenProtocol($listenProtocol)
    {
        $this->container['listenProtocol'] = $listenProtocol;
        return $this;
    }

    /**
    * Gets listenPort
    *  **参数解释**： 应用进程监听端口 **取值范围**： 取值0-2147483647
    *
    * @return int|null
    */
    public function getListenPort()
    {
        return $this->container['listenPort'];
    }

    /**
    * Sets listenPort
    *
    * @param int|null $listenPort **参数解释**： 应用进程监听端口 **取值范围**： 取值0-2147483647
    *
    * @return $this
    */
    public function setListenPort($listenPort)
    {
        $this->container['listenPort'] = $listenPort;
        return $this;
    }

    /**
    * Gets listenStatus
    *  **参数解释**： 应用进程监听状态 **取值范围**： - established：已建立连接 - closed：连接已关闭 - listening：监听中 - other：连接中间态
    *
    * @return string|null
    */
    public function getListenStatus()
    {
        return $this->container['listenStatus'];
    }

    /**
    * Sets listenStatus
    *
    * @param string|null $listenStatus **参数解释**： 应用进程监听状态 **取值范围**： - established：已建立连接 - closed：连接已关闭 - listening：监听中 - other：连接中间态
    *
    * @return $this
    */
    public function setListenStatus($listenStatus)
    {
        $this->container['listenStatus'] = $listenStatus;
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

