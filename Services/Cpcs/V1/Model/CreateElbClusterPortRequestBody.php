<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateElbClusterPortRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateElbClusterPortRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群id
    * elbId  elb id。端口映射将会在该elb中创建
    * mode  新增的端口的模式。除了VPN外，其他类型的服务只支持 PROXY
    * lbListenerPort  将在elb中为代理通道创建的监听器的端口
    * serverPort  将在elb中为代理通道创建的后端服务组中后端服务器的端口。无默认值。
    * tunnelLbListenerPort  将在elb中给VPN隧道创建的监听器的端口。当mode=TUNNEL时，必填
    * tunnelServerPort  将在elb中给VPN隧道创建的后端服务组中后端服务器的端口。 当mode=TUNNEL时，必填，有默认值:20706。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'elbId' => 'string',
            'mode' => 'string',
            'lbListenerPort' => 'int',
            'serverPort' => 'int',
            'tunnelLbListenerPort' => 'int',
            'tunnelServerPort' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群id
    * elbId  elb id。端口映射将会在该elb中创建
    * mode  新增的端口的模式。除了VPN外，其他类型的服务只支持 PROXY
    * lbListenerPort  将在elb中为代理通道创建的监听器的端口
    * serverPort  将在elb中为代理通道创建的后端服务组中后端服务器的端口。无默认值。
    * tunnelLbListenerPort  将在elb中给VPN隧道创建的监听器的端口。当mode=TUNNEL时，必填
    * tunnelServerPort  将在elb中给VPN隧道创建的后端服务组中后端服务器的端口。 当mode=TUNNEL时，必填，有默认值:20706。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'elbId' => null,
        'mode' => null,
        'lbListenerPort' => 'int32',
        'serverPort' => 'int32',
        'tunnelLbListenerPort' => 'int32',
        'tunnelServerPort' => 'int32'
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
    * clusterId  集群id
    * elbId  elb id。端口映射将会在该elb中创建
    * mode  新增的端口的模式。除了VPN外，其他类型的服务只支持 PROXY
    * lbListenerPort  将在elb中为代理通道创建的监听器的端口
    * serverPort  将在elb中为代理通道创建的后端服务组中后端服务器的端口。无默认值。
    * tunnelLbListenerPort  将在elb中给VPN隧道创建的监听器的端口。当mode=TUNNEL时，必填
    * tunnelServerPort  将在elb中给VPN隧道创建的后端服务组中后端服务器的端口。 当mode=TUNNEL时，必填，有默认值:20706。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'elbId' => 'elb_id',
            'mode' => 'mode',
            'lbListenerPort' => 'lb_listener_port',
            'serverPort' => 'server_port',
            'tunnelLbListenerPort' => 'tunnel_lb_listener_port',
            'tunnelServerPort' => 'tunnel_server_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群id
    * elbId  elb id。端口映射将会在该elb中创建
    * mode  新增的端口的模式。除了VPN外，其他类型的服务只支持 PROXY
    * lbListenerPort  将在elb中为代理通道创建的监听器的端口
    * serverPort  将在elb中为代理通道创建的后端服务组中后端服务器的端口。无默认值。
    * tunnelLbListenerPort  将在elb中给VPN隧道创建的监听器的端口。当mode=TUNNEL时，必填
    * tunnelServerPort  将在elb中给VPN隧道创建的后端服务组中后端服务器的端口。 当mode=TUNNEL时，必填，有默认值:20706。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'elbId' => 'setElbId',
            'mode' => 'setMode',
            'lbListenerPort' => 'setLbListenerPort',
            'serverPort' => 'setServerPort',
            'tunnelLbListenerPort' => 'setTunnelLbListenerPort',
            'tunnelServerPort' => 'setTunnelServerPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群id
    * elbId  elb id。端口映射将会在该elb中创建
    * mode  新增的端口的模式。除了VPN外，其他类型的服务只支持 PROXY
    * lbListenerPort  将在elb中为代理通道创建的监听器的端口
    * serverPort  将在elb中为代理通道创建的后端服务组中后端服务器的端口。无默认值。
    * tunnelLbListenerPort  将在elb中给VPN隧道创建的监听器的端口。当mode=TUNNEL时，必填
    * tunnelServerPort  将在elb中给VPN隧道创建的后端服务组中后端服务器的端口。 当mode=TUNNEL时，必填，有默认值:20706。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'elbId' => 'getElbId',
            'mode' => 'getMode',
            'lbListenerPort' => 'getLbListenerPort',
            'serverPort' => 'getServerPort',
            'tunnelLbListenerPort' => 'getTunnelLbListenerPort',
            'tunnelServerPort' => 'getTunnelServerPort'
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
    const MODE_TUNNEL = 'TUNNEL';
    const MODE_PROXY = 'PROXY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_TUNNEL,
            self::MODE_PROXY,
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['elbId'] = isset($data['elbId']) ? $data['elbId'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['lbListenerPort'] = isset($data['lbListenerPort']) ? $data['lbListenerPort'] : null;
        $this->container['serverPort'] = isset($data['serverPort']) ? $data['serverPort'] : null;
        $this->container['tunnelLbListenerPort'] = isset($data['tunnelLbListenerPort']) ? $data['tunnelLbListenerPort'] : null;
        $this->container['tunnelServerPort'] = isset($data['tunnelServerPort']) ? $data['tunnelServerPort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
            if ((mb_strlen($this->container['clusterId']) > 32)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['clusterId']) < 32)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['elbId'] === null) {
            $invalidProperties[] = "'elbId' can't be null";
        }
            if ((mb_strlen($this->container['elbId']) > 36)) {
                $invalidProperties[] = "invalid value for 'elbId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['elbId']) < 32)) {
                $invalidProperties[] = "invalid value for 'elbId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['lbListenerPort'] === null) {
            $invalidProperties[] = "'lbListenerPort' can't be null";
        }
            if (($this->container['lbListenerPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'lbListenerPort', must be smaller than or equal to 65535.";
            }
            if (($this->container['lbListenerPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'lbListenerPort', must be bigger than or equal to 1.";
            }
        if ($this->container['serverPort'] === null) {
            $invalidProperties[] = "'serverPort' can't be null";
        }
            if (($this->container['serverPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'serverPort', must be smaller than or equal to 65535.";
            }
            if (($this->container['serverPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'serverPort', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tunnelLbListenerPort']) && ($this->container['tunnelLbListenerPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'tunnelLbListenerPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['tunnelLbListenerPort']) && ($this->container['tunnelLbListenerPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'tunnelLbListenerPort', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tunnelServerPort']) && ($this->container['tunnelServerPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'tunnelServerPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['tunnelServerPort']) && ($this->container['tunnelServerPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'tunnelServerPort', must be bigger than or equal to 1.";
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
    * Gets clusterId
    *  集群id
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets elbId
    *  elb id。端口映射将会在该elb中创建
    *
    * @return string
    */
    public function getElbId()
    {
        return $this->container['elbId'];
    }

    /**
    * Sets elbId
    *
    * @param string $elbId elb id。端口映射将会在该elb中创建
    *
    * @return $this
    */
    public function setElbId($elbId)
    {
        $this->container['elbId'] = $elbId;
        return $this;
    }

    /**
    * Gets mode
    *  新增的端口的模式。除了VPN外，其他类型的服务只支持 PROXY
    *
    * @return string
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string $mode 新增的端口的模式。除了VPN外，其他类型的服务只支持 PROXY
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets lbListenerPort
    *  将在elb中为代理通道创建的监听器的端口
    *
    * @return int
    */
    public function getLbListenerPort()
    {
        return $this->container['lbListenerPort'];
    }

    /**
    * Sets lbListenerPort
    *
    * @param int $lbListenerPort 将在elb中为代理通道创建的监听器的端口
    *
    * @return $this
    */
    public function setLbListenerPort($lbListenerPort)
    {
        $this->container['lbListenerPort'] = $lbListenerPort;
        return $this;
    }

    /**
    * Gets serverPort
    *  将在elb中为代理通道创建的后端服务组中后端服务器的端口。无默认值。
    *
    * @return int
    */
    public function getServerPort()
    {
        return $this->container['serverPort'];
    }

    /**
    * Sets serverPort
    *
    * @param int $serverPort 将在elb中为代理通道创建的后端服务组中后端服务器的端口。无默认值。
    *
    * @return $this
    */
    public function setServerPort($serverPort)
    {
        $this->container['serverPort'] = $serverPort;
        return $this;
    }

    /**
    * Gets tunnelLbListenerPort
    *  将在elb中给VPN隧道创建的监听器的端口。当mode=TUNNEL时，必填
    *
    * @return int|null
    */
    public function getTunnelLbListenerPort()
    {
        return $this->container['tunnelLbListenerPort'];
    }

    /**
    * Sets tunnelLbListenerPort
    *
    * @param int|null $tunnelLbListenerPort 将在elb中给VPN隧道创建的监听器的端口。当mode=TUNNEL时，必填
    *
    * @return $this
    */
    public function setTunnelLbListenerPort($tunnelLbListenerPort)
    {
        $this->container['tunnelLbListenerPort'] = $tunnelLbListenerPort;
        return $this;
    }

    /**
    * Gets tunnelServerPort
    *  将在elb中给VPN隧道创建的后端服务组中后端服务器的端口。 当mode=TUNNEL时，必填，有默认值:20706。
    *
    * @return int|null
    */
    public function getTunnelServerPort()
    {
        return $this->container['tunnelServerPort'];
    }

    /**
    * Sets tunnelServerPort
    *
    * @param int|null $tunnelServerPort 将在elb中给VPN隧道创建的后端服务组中后端服务器的端口。 当mode=TUNNEL时，必填，有默认值:20706。
    *
    * @return $this
    */
    public function setTunnelServerPort($tunnelServerPort)
    {
        $this->container['tunnelServerPort'] = $tunnelServerPort;
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

