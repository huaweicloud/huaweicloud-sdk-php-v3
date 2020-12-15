<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronCreateFirewallRuleOption implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronCreateFirewallRuleOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'protocol' => 'string',
            'action' => 'string',
            'ipVersion' => 'int',
            'destinationIpAddress' => 'string',
            'destinationPort' => 'string',
            'sourceIpAddress' => 'string',
            'sourcePort' => 'string',
            'enabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'protocol' => null,
        'action' => null,
        'ipVersion' => 'int32',
        'destinationIpAddress' => null,
        'destinationPort' => null,
        'sourceIpAddress' => null,
        'sourcePort' => null,
        'enabled' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'protocol' => 'protocol',
            'action' => 'action',
            'ipVersion' => 'ip_version',
            'destinationIpAddress' => 'destination_ip_address',
            'destinationPort' => 'destination_port',
            'sourceIpAddress' => 'source_ip_address',
            'sourcePort' => 'source_port',
            'enabled' => 'enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'protocol' => 'setProtocol',
            'action' => 'setAction',
            'ipVersion' => 'setIpVersion',
            'destinationIpAddress' => 'setDestinationIpAddress',
            'destinationPort' => 'setDestinationPort',
            'sourceIpAddress' => 'setSourceIpAddress',
            'sourcePort' => 'setSourcePort',
            'enabled' => 'setEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'protocol' => 'getProtocol',
            'action' => 'getAction',
            'ipVersion' => 'getIpVersion',
            'destinationIpAddress' => 'getDestinationIpAddress',
            'destinationPort' => 'getDestinationPort',
            'sourceIpAddress' => 'getSourceIpAddress',
            'sourcePort' => 'getSourcePort',
            'enabled' => 'getEnabled'
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
    const ACTION_DENY = 'DENY';
    const ACTION_ALLOW = 'ALLOW';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_DENY,
            self::ACTION_ALLOW,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : 'DENY';
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : 4;
        $this->container['destinationIpAddress'] = isset($data['destinationIpAddress']) ? $data['destinationIpAddress'] : null;
        $this->container['destinationPort'] = isset($data['destinationPort']) ? $data['destinationPort'] : null;
        $this->container['sourceIpAddress'] = isset($data['sourceIpAddress']) ? $data['sourceIpAddress'] : null;
        $this->container['sourcePort'] = isset($data['sourcePort']) ? $data['sourcePort'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : true;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
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
    * Gets name
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
    * @param string|null $name 功能说明：网络ACL规则名称 取值范围：0-255个字符
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
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
    * @param string|null $description 功能说明：网络ACL规则描述 取值范围：0-255个字符
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets protocol
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 功能说明：IP协议 取值范围：支持TCP,UDP,ICMP, ICMPV6或者ip协议号（0-255）
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets action
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 功能说明：对通过网络ACL的流量执行的操作 取值范围：DENY（拒绝）/ALLOW（允许）
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets ipVersion
    *
    * @return int|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int|null $ipVersion 功能说明：IP协议版本
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets destinationIpAddress
    *
    * @return string|null
    */
    public function getDestinationIpAddress()
    {
        return $this->container['destinationIpAddress'];
    }

    /**
    * Sets destinationIpAddress
    *
    * @param string|null $destinationIpAddress 功能说明：目的地址或者CIDR
    *
    * @return $this
    */
    public function setDestinationIpAddress($destinationIpAddress)
    {
        $this->container['destinationIpAddress'] = $destinationIpAddress;
        return $this;
    }

    /**
    * Gets destinationPort
    *
    * @return string|null
    */
    public function getDestinationPort()
    {
        return $this->container['destinationPort'];
    }

    /**
    * Sets destinationPort
    *
    * @param string|null $destinationPort 功能说明：目的端口号或者一段端口范围
    *
    * @return $this
    */
    public function setDestinationPort($destinationPort)
    {
        $this->container['destinationPort'] = $destinationPort;
        return $this;
    }

    /**
    * Gets sourceIpAddress
    *
    * @return string|null
    */
    public function getSourceIpAddress()
    {
        return $this->container['sourceIpAddress'];
    }

    /**
    * Sets sourceIpAddress
    *
    * @param string|null $sourceIpAddress 功能说明：源地址或者CIDR
    *
    * @return $this
    */
    public function setSourceIpAddress($sourceIpAddress)
    {
        $this->container['sourceIpAddress'] = $sourceIpAddress;
        return $this;
    }

    /**
    * Gets sourcePort
    *
    * @return string|null
    */
    public function getSourcePort()
    {
        return $this->container['sourcePort'];
    }

    /**
    * Sets sourcePort
    *
    * @param string|null $sourcePort 功能说明：源端口号或者一段端口范围
    *
    * @return $this
    */
    public function setSourcePort($sourcePort)
    {
        $this->container['sourcePort'] = $sourcePort;
        return $this;
    }

    /**
    * Gets enabled
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 功能说明：是否使能网络ACL防火墙规则。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
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

