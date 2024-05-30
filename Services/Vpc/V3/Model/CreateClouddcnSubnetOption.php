<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateClouddcnSubnetOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateClouddcnSubnetOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  功能说明：clouddcn子网名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：clouddcn子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    * cidr  功能说明：clouddcn子网的网段 取值范围：必须在vpc对应cidr范围内，不能和同vpc下其他普通子网的网段冲突 约束：必须是cidr格式。掩码长度不能大于28
    * vpcId  clouddcn子网所在VPC标识
    * gatewayIp  功能说明：clouddcn子网的网关 取值范围：clouddcn子网网段中的IP地址 约束：必须是ip格式
    * dnsNameservers  功能说明：clouddcn子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集，不支持IPv6地址。 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * availabilityZone  功能说明：可用区
    * tags  功能说明：对接TMS
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'cidr' => 'string',
            'vpcId' => 'string',
            'gatewayIp' => 'string',
            'dnsNameservers' => 'string[]',
            'availabilityZone' => 'string',
            'tags' => '\HuaweiCloud\SDK\Vpc\V3\Model\TagEntity[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  功能说明：clouddcn子网名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：clouddcn子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    * cidr  功能说明：clouddcn子网的网段 取值范围：必须在vpc对应cidr范围内，不能和同vpc下其他普通子网的网段冲突 约束：必须是cidr格式。掩码长度不能大于28
    * vpcId  clouddcn子网所在VPC标识
    * gatewayIp  功能说明：clouddcn子网的网关 取值范围：clouddcn子网网段中的IP地址 约束：必须是ip格式
    * dnsNameservers  功能说明：clouddcn子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集，不支持IPv6地址。 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * availabilityZone  功能说明：可用区
    * tags  功能说明：对接TMS
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'cidr' => null,
        'vpcId' => null,
        'gatewayIp' => null,
        'dnsNameservers' => null,
        'availabilityZone' => null,
        'tags' => null
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
    * name  功能说明：clouddcn子网名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：clouddcn子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    * cidr  功能说明：clouddcn子网的网段 取值范围：必须在vpc对应cidr范围内，不能和同vpc下其他普通子网的网段冲突 约束：必须是cidr格式。掩码长度不能大于28
    * vpcId  clouddcn子网所在VPC标识
    * gatewayIp  功能说明：clouddcn子网的网关 取值范围：clouddcn子网网段中的IP地址 约束：必须是ip格式
    * dnsNameservers  功能说明：clouddcn子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集，不支持IPv6地址。 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * availabilityZone  功能说明：可用区
    * tags  功能说明：对接TMS
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'cidr' => 'cidr',
            'vpcId' => 'vpc_id',
            'gatewayIp' => 'gateway_ip',
            'dnsNameservers' => 'dns_nameservers',
            'availabilityZone' => 'availability_zone',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  功能说明：clouddcn子网名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：clouddcn子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    * cidr  功能说明：clouddcn子网的网段 取值范围：必须在vpc对应cidr范围内，不能和同vpc下其他普通子网的网段冲突 约束：必须是cidr格式。掩码长度不能大于28
    * vpcId  clouddcn子网所在VPC标识
    * gatewayIp  功能说明：clouddcn子网的网关 取值范围：clouddcn子网网段中的IP地址 约束：必须是ip格式
    * dnsNameservers  功能说明：clouddcn子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集，不支持IPv6地址。 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * availabilityZone  功能说明：可用区
    * tags  功能说明：对接TMS
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'cidr' => 'setCidr',
            'vpcId' => 'setVpcId',
            'gatewayIp' => 'setGatewayIp',
            'dnsNameservers' => 'setDnsNameservers',
            'availabilityZone' => 'setAvailabilityZone',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  功能说明：clouddcn子网名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：clouddcn子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    * cidr  功能说明：clouddcn子网的网段 取值范围：必须在vpc对应cidr范围内，不能和同vpc下其他普通子网的网段冲突 约束：必须是cidr格式。掩码长度不能大于28
    * vpcId  clouddcn子网所在VPC标识
    * gatewayIp  功能说明：clouddcn子网的网关 取值范围：clouddcn子网网段中的IP地址 约束：必须是ip格式
    * dnsNameservers  功能说明：clouddcn子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集，不支持IPv6地址。 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * availabilityZone  功能说明：可用区
    * tags  功能说明：对接TMS
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'cidr' => 'getCidr',
            'vpcId' => 'getVpcId',
            'gatewayIp' => 'getGatewayIp',
            'dnsNameservers' => 'getDnsNameservers',
            'availabilityZone' => 'getAvailabilityZone',
            'tags' => 'getTags'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['gatewayIp'] = isset($data['gatewayIp']) ? $data['gatewayIp'] : null;
        $this->container['dnsNameservers'] = isset($data['dnsNameservers']) ? $data['dnsNameservers'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['cidr'] === null) {
            $invalidProperties[] = "'cidr' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['gatewayIp'] === null) {
            $invalidProperties[] = "'gatewayIp' can't be null";
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
    *  功能说明：clouddcn子网名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    * @param string $name 功能说明：clouddcn子网名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    *  功能说明：clouddcn子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
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
    * @param string|null $description 功能说明：clouddcn子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets cidr
    *  功能说明：clouddcn子网的网段 取值范围：必须在vpc对应cidr范围内，不能和同vpc下其他普通子网的网段冲突 约束：必须是cidr格式。掩码长度不能大于28
    *
    * @return string
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string $cidr 功能说明：clouddcn子网的网段 取值范围：必须在vpc对应cidr范围内，不能和同vpc下其他普通子网的网段冲突 约束：必须是cidr格式。掩码长度不能大于28
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets vpcId
    *  clouddcn子网所在VPC标识
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
    * @param string $vpcId clouddcn子网所在VPC标识
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets gatewayIp
    *  功能说明：clouddcn子网的网关 取值范围：clouddcn子网网段中的IP地址 约束：必须是ip格式
    *
    * @return string
    */
    public function getGatewayIp()
    {
        return $this->container['gatewayIp'];
    }

    /**
    * Sets gatewayIp
    *
    * @param string $gatewayIp 功能说明：clouddcn子网的网关 取值范围：clouddcn子网网段中的IP地址 约束：必须是ip格式
    *
    * @return $this
    */
    public function setGatewayIp($gatewayIp)
    {
        $this->container['gatewayIp'] = $gatewayIp;
        return $this;
    }

    /**
    * Gets dnsNameservers
    *  功能说明：clouddcn子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集，不支持IPv6地址。 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    *
    * @return string[]|null
    */
    public function getDnsNameservers()
    {
        return $this->container['dnsNameservers'];
    }

    /**
    * Sets dnsNameservers
    *
    * @param string[]|null $dnsNameservers 功能说明：clouddcn子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集，不支持IPv6地址。 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    *
    * @return $this
    */
    public function setDnsNameservers($dnsNameservers)
    {
        $this->container['dnsNameservers'] = $dnsNameservers;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  功能说明：可用区
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone 功能说明：可用区
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets tags
    *  功能说明：对接TMS
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\TagEntity[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\TagEntity[]|null $tags 功能说明：对接TMS
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

