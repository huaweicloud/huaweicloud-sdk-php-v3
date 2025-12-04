<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PremiumWafServer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PremiumWafServer';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * frontProtocol  **参数解释：** 客户端请求访问防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    * backProtocol  **参数解释：** WAF转发客户端请求到防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    * weight  源站权重，负载均衡算法将按该权重将请求分配给源站，默认值是1，云模式的冗余字段
    * address  客户端访问的源站服务器的IP地址
    * port  WAF转发客户端请求到源站服务的业务端口
    * type  源站地址为ipv4或ipv6
    * vpcId  VPC id,通过以下步骤获取VPC id：   - 1.找到独享引擎所在的虚拟私有云名称，VPC\\子网这一列就是VPC的名称：登录WAF的控制台->单击系统管理->独享引擎->VPC\\子网   - 2.登录虚拟私有云 VPC控制台->虚拟私有云->单击虚拟私有云的名称->基本信息的ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'frontProtocol' => 'string',
            'backProtocol' => 'string',
            'weight' => 'int',
            'address' => 'string',
            'port' => 'int',
            'type' => 'string',
            'vpcId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * frontProtocol  **参数解释：** 客户端请求访问防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    * backProtocol  **参数解释：** WAF转发客户端请求到防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    * weight  源站权重，负载均衡算法将按该权重将请求分配给源站，默认值是1，云模式的冗余字段
    * address  客户端访问的源站服务器的IP地址
    * port  WAF转发客户端请求到源站服务的业务端口
    * type  源站地址为ipv4或ipv6
    * vpcId  VPC id,通过以下步骤获取VPC id：   - 1.找到独享引擎所在的虚拟私有云名称，VPC\\子网这一列就是VPC的名称：登录WAF的控制台->单击系统管理->独享引擎->VPC\\子网   - 2.登录虚拟私有云 VPC控制台->虚拟私有云->单击虚拟私有云的名称->基本信息的ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'frontProtocol' => null,
        'backProtocol' => null,
        'weight' => 'int32',
        'address' => null,
        'port' => null,
        'type' => null,
        'vpcId' => null
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
    * frontProtocol  **参数解释：** 客户端请求访问防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    * backProtocol  **参数解释：** WAF转发客户端请求到防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    * weight  源站权重，负载均衡算法将按该权重将请求分配给源站，默认值是1，云模式的冗余字段
    * address  客户端访问的源站服务器的IP地址
    * port  WAF转发客户端请求到源站服务的业务端口
    * type  源站地址为ipv4或ipv6
    * vpcId  VPC id,通过以下步骤获取VPC id：   - 1.找到独享引擎所在的虚拟私有云名称，VPC\\子网这一列就是VPC的名称：登录WAF的控制台->单击系统管理->独享引擎->VPC\\子网   - 2.登录虚拟私有云 VPC控制台->虚拟私有云->单击虚拟私有云的名称->基本信息的ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'frontProtocol' => 'front_protocol',
            'backProtocol' => 'back_protocol',
            'weight' => 'weight',
            'address' => 'address',
            'port' => 'port',
            'type' => 'type',
            'vpcId' => 'vpc_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * frontProtocol  **参数解释：** 客户端请求访问防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    * backProtocol  **参数解释：** WAF转发客户端请求到防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    * weight  源站权重，负载均衡算法将按该权重将请求分配给源站，默认值是1，云模式的冗余字段
    * address  客户端访问的源站服务器的IP地址
    * port  WAF转发客户端请求到源站服务的业务端口
    * type  源站地址为ipv4或ipv6
    * vpcId  VPC id,通过以下步骤获取VPC id：   - 1.找到独享引擎所在的虚拟私有云名称，VPC\\子网这一列就是VPC的名称：登录WAF的控制台->单击系统管理->独享引擎->VPC\\子网   - 2.登录虚拟私有云 VPC控制台->虚拟私有云->单击虚拟私有云的名称->基本信息的ID
    *
    * @var string[]
    */
    protected static $setters = [
            'frontProtocol' => 'setFrontProtocol',
            'backProtocol' => 'setBackProtocol',
            'weight' => 'setWeight',
            'address' => 'setAddress',
            'port' => 'setPort',
            'type' => 'setType',
            'vpcId' => 'setVpcId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * frontProtocol  **参数解释：** 客户端请求访问防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    * backProtocol  **参数解释：** WAF转发客户端请求到防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    * weight  源站权重，负载均衡算法将按该权重将请求分配给源站，默认值是1，云模式的冗余字段
    * address  客户端访问的源站服务器的IP地址
    * port  WAF转发客户端请求到源站服务的业务端口
    * type  源站地址为ipv4或ipv6
    * vpcId  VPC id,通过以下步骤获取VPC id：   - 1.找到独享引擎所在的虚拟私有云名称，VPC\\子网这一列就是VPC的名称：登录WAF的控制台->单击系统管理->独享引擎->VPC\\子网   - 2.登录虚拟私有云 VPC控制台->虚拟私有云->单击虚拟私有云的名称->基本信息的ID
    *
    * @var string[]
    */
    protected static $getters = [
            'frontProtocol' => 'getFrontProtocol',
            'backProtocol' => 'getBackProtocol',
            'weight' => 'getWeight',
            'address' => 'getAddress',
            'port' => 'getPort',
            'type' => 'getType',
            'vpcId' => 'getVpcId'
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
    const FRONT_PROTOCOL_HTTP = 'HTTP';
    const FRONT_PROTOCOL_HTTPS = 'HTTPS';
    const BACK_PROTOCOL_HTTP = 'HTTP';
    const BACK_PROTOCOL_HTTPS = 'HTTPS';
    const TYPE_IPV4 = 'ipv4';
    const TYPE_IPV6 = 'ipv6';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFrontProtocolAllowableValues()
    {
        return [
            self::FRONT_PROTOCOL_HTTP,
            self::FRONT_PROTOCOL_HTTPS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBackProtocolAllowableValues()
    {
        return [
            self::BACK_PROTOCOL_HTTP,
            self::BACK_PROTOCOL_HTTPS,
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
            self::TYPE_IPV4,
            self::TYPE_IPV6,
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
        $this->container['frontProtocol'] = isset($data['frontProtocol']) ? $data['frontProtocol'] : null;
        $this->container['backProtocol'] = isset($data['backProtocol']) ? $data['backProtocol'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['frontProtocol'] === null) {
            $invalidProperties[] = "'frontProtocol' can't be null";
        }
            $allowedValues = $this->getFrontProtocolAllowableValues();
                if (!is_null($this->container['frontProtocol']) && !in_array($this->container['frontProtocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'frontProtocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['backProtocol'] === null) {
            $invalidProperties[] = "'backProtocol' can't be null";
        }
            $allowedValues = $this->getBackProtocolAllowableValues();
                if (!is_null($this->container['backProtocol']) && !in_array($this->container['backProtocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'backProtocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
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

        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
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
    * Gets frontProtocol
    *  **参数解释：** 客户端请求访问防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getFrontProtocol()
    {
        return $this->container['frontProtocol'];
    }

    /**
    * Sets frontProtocol
    *
    * @param string $frontProtocol **参数解释：** 客户端请求访问防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setFrontProtocol($frontProtocol)
    {
        $this->container['frontProtocol'] = $frontProtocol;
        return $this;
    }

    /**
    * Gets backProtocol
    *  **参数解释：** WAF转发客户端请求到防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getBackProtocol()
    {
        return $this->container['backProtocol'];
    }

    /**
    * Sets backProtocol
    *
    * @param string $backProtocol **参数解释：** WAF转发客户端请求到防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setBackProtocol($backProtocol)
    {
        $this->container['backProtocol'] = $backProtocol;
        return $this;
    }

    /**
    * Gets weight
    *  源站权重，负载均衡算法将按该权重将请求分配给源站，默认值是1，云模式的冗余字段
    *
    * @return int|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int|null $weight 源站权重，负载均衡算法将按该权重将请求分配给源站，默认值是1，云模式的冗余字段
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets address
    *  客户端访问的源站服务器的IP地址
    *
    * @return string
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string $address 客户端访问的源站服务器的IP地址
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets port
    *  WAF转发客户端请求到源站服务的业务端口
    *
    * @return int
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int $port WAF转发客户端请求到源站服务的业务端口
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets type
    *  源站地址为ipv4或ipv6
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
    * @param string $type 源站地址为ipv4或ipv6
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets vpcId
    *  VPC id,通过以下步骤获取VPC id：   - 1.找到独享引擎所在的虚拟私有云名称，VPC\\子网这一列就是VPC的名称：登录WAF的控制台->单击系统管理->独享引擎->VPC\\子网   - 2.登录虚拟私有云 VPC控制台->虚拟私有云->单击虚拟私有云的名称->基本信息的ID
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId VPC id,通过以下步骤获取VPC id：   - 1.找到独享引擎所在的虚拟私有云名称，VPC\\子网这一列就是VPC的名称：登录WAF的控制台->单击系统管理->独享引擎->VPC\\子网   - 2.登录虚拟私有云 VPC控制台->虚拟私有云->单击虚拟私有云的名称->基本信息的ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
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

