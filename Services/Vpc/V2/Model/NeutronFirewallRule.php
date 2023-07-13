<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronFirewallRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronFirewallRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  功能说明：网络ACL规则的uuid标识。
    * name  功能说明：网络ACL规则名称。 取值范围：0-255个字符
    * description  功能说明：网络ACL规则描述 取值范围：0-255个字符长度
    * action  功能说明：对通过网络ACL的流量执行的操作。 取值范围：DENY（拒绝）/ALLOW（允许）
    * protocol  功能说明：IP协议 取值范围：支持TCP,UDP,ICMP, ICMPV6或者IP协议号（0-255）
    * ipVersion  功能说明：IP协议版本 取值范围：Ipv4/Ipv6
    * enabled  功能说明：是否使能网络ACL规则。 取值范围：true/false
    * public  功能说明：是否支持跨租户共享 取值范围：true/false
    * destinationIpAddress  功能说明：目的地址或者CIDR。
    * destinationPort  功能说明：目的端口号或者一段端口范围。
    * sourceIpAddress  功能说明：源地址或者CIDR。
    * sourcePort  功能说明：源端口号或者一段端口范围。
    * tenantId  功能说明：项目ID
    * projectId  功能说明：项目ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'action' => 'string',
            'protocol' => 'string',
            'ipVersion' => 'int',
            'enabled' => 'bool',
            'public' => 'bool',
            'destinationIpAddress' => 'string',
            'destinationPort' => 'string',
            'sourceIpAddress' => 'string',
            'sourcePort' => 'string',
            'tenantId' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  功能说明：网络ACL规则的uuid标识。
    * name  功能说明：网络ACL规则名称。 取值范围：0-255个字符
    * description  功能说明：网络ACL规则描述 取值范围：0-255个字符长度
    * action  功能说明：对通过网络ACL的流量执行的操作。 取值范围：DENY（拒绝）/ALLOW（允许）
    * protocol  功能说明：IP协议 取值范围：支持TCP,UDP,ICMP, ICMPV6或者IP协议号（0-255）
    * ipVersion  功能说明：IP协议版本 取值范围：Ipv4/Ipv6
    * enabled  功能说明：是否使能网络ACL规则。 取值范围：true/false
    * public  功能说明：是否支持跨租户共享 取值范围：true/false
    * destinationIpAddress  功能说明：目的地址或者CIDR。
    * destinationPort  功能说明：目的端口号或者一段端口范围。
    * sourceIpAddress  功能说明：源地址或者CIDR。
    * sourcePort  功能说明：源端口号或者一段端口范围。
    * tenantId  功能说明：项目ID
    * projectId  功能说明：项目ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'action' => null,
        'protocol' => null,
        'ipVersion' => 'int32',
        'enabled' => null,
        'public' => null,
        'destinationIpAddress' => null,
        'destinationPort' => null,
        'sourceIpAddress' => null,
        'sourcePort' => null,
        'tenantId' => null,
        'projectId' => null
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
    * id  功能说明：网络ACL规则的uuid标识。
    * name  功能说明：网络ACL规则名称。 取值范围：0-255个字符
    * description  功能说明：网络ACL规则描述 取值范围：0-255个字符长度
    * action  功能说明：对通过网络ACL的流量执行的操作。 取值范围：DENY（拒绝）/ALLOW（允许）
    * protocol  功能说明：IP协议 取值范围：支持TCP,UDP,ICMP, ICMPV6或者IP协议号（0-255）
    * ipVersion  功能说明：IP协议版本 取值范围：Ipv4/Ipv6
    * enabled  功能说明：是否使能网络ACL规则。 取值范围：true/false
    * public  功能说明：是否支持跨租户共享 取值范围：true/false
    * destinationIpAddress  功能说明：目的地址或者CIDR。
    * destinationPort  功能说明：目的端口号或者一段端口范围。
    * sourceIpAddress  功能说明：源地址或者CIDR。
    * sourcePort  功能说明：源端口号或者一段端口范围。
    * tenantId  功能说明：项目ID
    * projectId  功能说明：项目ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'action' => 'action',
            'protocol' => 'protocol',
            'ipVersion' => 'ip_version',
            'enabled' => 'enabled',
            'public' => 'public',
            'destinationIpAddress' => 'destination_ip_address',
            'destinationPort' => 'destination_port',
            'sourceIpAddress' => 'source_ip_address',
            'sourcePort' => 'source_port',
            'tenantId' => 'tenant_id',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  功能说明：网络ACL规则的uuid标识。
    * name  功能说明：网络ACL规则名称。 取值范围：0-255个字符
    * description  功能说明：网络ACL规则描述 取值范围：0-255个字符长度
    * action  功能说明：对通过网络ACL的流量执行的操作。 取值范围：DENY（拒绝）/ALLOW（允许）
    * protocol  功能说明：IP协议 取值范围：支持TCP,UDP,ICMP, ICMPV6或者IP协议号（0-255）
    * ipVersion  功能说明：IP协议版本 取值范围：Ipv4/Ipv6
    * enabled  功能说明：是否使能网络ACL规则。 取值范围：true/false
    * public  功能说明：是否支持跨租户共享 取值范围：true/false
    * destinationIpAddress  功能说明：目的地址或者CIDR。
    * destinationPort  功能说明：目的端口号或者一段端口范围。
    * sourceIpAddress  功能说明：源地址或者CIDR。
    * sourcePort  功能说明：源端口号或者一段端口范围。
    * tenantId  功能说明：项目ID
    * projectId  功能说明：项目ID
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'action' => 'setAction',
            'protocol' => 'setProtocol',
            'ipVersion' => 'setIpVersion',
            'enabled' => 'setEnabled',
            'public' => 'setPublic',
            'destinationIpAddress' => 'setDestinationIpAddress',
            'destinationPort' => 'setDestinationPort',
            'sourceIpAddress' => 'setSourceIpAddress',
            'sourcePort' => 'setSourcePort',
            'tenantId' => 'setTenantId',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  功能说明：网络ACL规则的uuid标识。
    * name  功能说明：网络ACL规则名称。 取值范围：0-255个字符
    * description  功能说明：网络ACL规则描述 取值范围：0-255个字符长度
    * action  功能说明：对通过网络ACL的流量执行的操作。 取值范围：DENY（拒绝）/ALLOW（允许）
    * protocol  功能说明：IP协议 取值范围：支持TCP,UDP,ICMP, ICMPV6或者IP协议号（0-255）
    * ipVersion  功能说明：IP协议版本 取值范围：Ipv4/Ipv6
    * enabled  功能说明：是否使能网络ACL规则。 取值范围：true/false
    * public  功能说明：是否支持跨租户共享 取值范围：true/false
    * destinationIpAddress  功能说明：目的地址或者CIDR。
    * destinationPort  功能说明：目的端口号或者一段端口范围。
    * sourceIpAddress  功能说明：源地址或者CIDR。
    * sourcePort  功能说明：源端口号或者一段端口范围。
    * tenantId  功能说明：项目ID
    * projectId  功能说明：项目ID
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'action' => 'getAction',
            'protocol' => 'getProtocol',
            'ipVersion' => 'getIpVersion',
            'enabled' => 'getEnabled',
            'public' => 'getPublic',
            'destinationIpAddress' => 'getDestinationIpAddress',
            'destinationPort' => 'getDestinationPort',
            'sourceIpAddress' => 'getSourceIpAddress',
            'sourcePort' => 'getSourcePort',
            'tenantId' => 'getTenantId',
            'projectId' => 'getProjectId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['destinationIpAddress'] = isset($data['destinationIpAddress']) ? $data['destinationIpAddress'] : null;
        $this->container['destinationPort'] = isset($data['destinationPort']) ? $data['destinationPort'] : null;
        $this->container['sourceIpAddress'] = isset($data['sourceIpAddress']) ? $data['sourceIpAddress'] : null;
        $this->container['sourcePort'] = isset($data['sourcePort']) ? $data['sourcePort'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
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
            if (!preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['ipVersion'] === null) {
            $invalidProperties[] = "'ipVersion' can't be null";
        }
            if (($this->container['ipVersion'] > 6)) {
                $invalidProperties[] = "invalid value for 'ipVersion', must be smaller than or equal to 6.";
            }
            if (($this->container['ipVersion'] < 4)) {
                $invalidProperties[] = "invalid value for 'ipVersion', must be bigger than or equal to 4.";
            }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['public'] === null) {
            $invalidProperties[] = "'public' can't be null";
        }
        if ($this->container['destinationIpAddress'] === null) {
            $invalidProperties[] = "'destinationIpAddress' can't be null";
        }
        if ($this->container['destinationPort'] === null) {
            $invalidProperties[] = "'destinationPort' can't be null";
        }
        if ($this->container['sourceIpAddress'] === null) {
            $invalidProperties[] = "'sourceIpAddress' can't be null";
        }
        if ($this->container['sourcePort'] === null) {
            $invalidProperties[] = "'sourcePort' can't be null";
        }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{32}/", $this->container['tenantId'])) {
                $invalidProperties[] = "invalid value for 'tenantId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
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
    *  功能说明：网络ACL规则的uuid标识。
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
    * @param string $id 功能说明：网络ACL规则的uuid标识。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  功能说明：网络ACL规则名称。 取值范围：0-255个字符
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
    * @param string $name 功能说明：网络ACL规则名称。 取值范围：0-255个字符
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
    *  功能说明：网络ACL规则描述 取值范围：0-255个字符长度
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
    * @param string $description 功能说明：网络ACL规则描述 取值范围：0-255个字符长度
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets action
    *  功能说明：对通过网络ACL的流量执行的操作。 取值范围：DENY（拒绝）/ALLOW（允许）
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 功能说明：对通过网络ACL的流量执行的操作。 取值范围：DENY（拒绝）/ALLOW（允许）
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets protocol
    *  功能说明：IP协议 取值范围：支持TCP,UDP,ICMP, ICMPV6或者IP协议号（0-255）
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 功能说明：IP协议 取值范围：支持TCP,UDP,ICMP, ICMPV6或者IP协议号（0-255）
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets ipVersion
    *  功能说明：IP协议版本 取值范围：Ipv4/Ipv6
    *
    * @return int
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int $ipVersion 功能说明：IP协议版本 取值范围：Ipv4/Ipv6
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets enabled
    *  功能说明：是否使能网络ACL规则。 取值范围：true/false
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled 功能说明：是否使能网络ACL规则。 取值范围：true/false
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets public
    *  功能说明：是否支持跨租户共享 取值范围：true/false
    *
    * @return bool
    */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
    * Sets public
    *
    * @param bool $public 功能说明：是否支持跨租户共享 取值范围：true/false
    *
    * @return $this
    */
    public function setPublic($public)
    {
        $this->container['public'] = $public;
        return $this;
    }

    /**
    * Gets destinationIpAddress
    *  功能说明：目的地址或者CIDR。
    *
    * @return string
    */
    public function getDestinationIpAddress()
    {
        return $this->container['destinationIpAddress'];
    }

    /**
    * Sets destinationIpAddress
    *
    * @param string $destinationIpAddress 功能说明：目的地址或者CIDR。
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
    *  功能说明：目的端口号或者一段端口范围。
    *
    * @return string
    */
    public function getDestinationPort()
    {
        return $this->container['destinationPort'];
    }

    /**
    * Sets destinationPort
    *
    * @param string $destinationPort 功能说明：目的端口号或者一段端口范围。
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
    *  功能说明：源地址或者CIDR。
    *
    * @return string
    */
    public function getSourceIpAddress()
    {
        return $this->container['sourceIpAddress'];
    }

    /**
    * Sets sourceIpAddress
    *
    * @param string $sourceIpAddress 功能说明：源地址或者CIDR。
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
    *  功能说明：源端口号或者一段端口范围。
    *
    * @return string
    */
    public function getSourcePort()
    {
        return $this->container['sourcePort'];
    }

    /**
    * Sets sourcePort
    *
    * @param string $sourcePort 功能说明：源端口号或者一段端口范围。
    *
    * @return $this
    */
    public function setSourcePort($sourcePort)
    {
        $this->container['sourcePort'] = $sourcePort;
        return $this;
    }

    /**
    * Gets tenantId
    *  功能说明：项目ID
    *
    * @return string
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string $tenantId 功能说明：项目ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets projectId
    *  功能说明：项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 功能说明：项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

