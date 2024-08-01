<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateEndpointRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateEndpointRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subnetId  创建连接Interface类型终端节点服务的终端节点时，此参数必选。 需要指定vpc_id对应VPC下已创建的网络（network）的ID，UUID格式。 说明： - VPC的子网网段不能与198.19.128.0/17重叠 - VPC路由表中自定义路由的目的地址不能与198.19.128.0/17重叠
    * endpointServiceId  终端节点服务的ID。 可以通过查询终端节点服务概 要获取要连接的终端节点服务 ID。
    * vpcId  终端节点所在的VPC的ID。
    * enableDns  是否创建域名。  - true：创建域名  - false：不创建域名 默认值为false。 说明 当创建gateway类型终端节点服务的终端节点时， “enable_dns”设置为true或者false，均不创建域名。
    * tags  标签列表，没有标签默认为空数组。
    * routetables  路由表ID列表。 创建gateway类型终端节点服务的终端节点时，此参数必选。 不设置此参数时，选择默认路由表。
    * portIp  访问所连接的终端节点服务的IP。 创建终端节点时，可以指定访问所连接的终端节点服务的IP，目前只支持IPv4类型 。 创建连接Interface类型终端节点服务的终端节点时，此参数必选。
    * whitelist  添加用于控制访问终端节点的白名单。 创建终端节点时，支持访问控制，使用此参数可以添加IPv4或CIDR，默认空列表。 仅当创建连接Interface类型终端节点服务的终端节点时，支持设置此参数。
    * enableWhitelist  是否开启网络ACL隔离。
    * description  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    * policyStatement  终端节点策略信息
    * policyDocument  iam 5.0 策略
    * ipVersion  指定终端节点的IP版本，仅专业型终端节点支持此参数。  - ipv4,  IPv4 - dualstack, 双栈
    * ipv6Address  访问所连接的终端节点服务的IPv6的地址。  创建终端节点时，可以指定访问所连接的终端节点服务的IP，不指定的情况下，会使用系统生成的一个地址。  仅专业型终端节点支持此参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subnetId' => 'string',
            'endpointServiceId' => 'string',
            'vpcId' => 'string',
            'enableDns' => 'bool',
            'tags' => '\HuaweiCloud\SDK\Vpcep\V1\Model\TagList[]',
            'routetables' => 'string[]',
            'portIp' => 'string',
            'whitelist' => 'string[]',
            'enableWhitelist' => 'bool',
            'description' => 'string',
            'policyStatement' => '\HuaweiCloud\SDK\Vpcep\V1\Model\PolicyStatement[]',
            'policyDocument' => 'object',
            'ipVersion' => 'string',
            'ipv6Address' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subnetId  创建连接Interface类型终端节点服务的终端节点时，此参数必选。 需要指定vpc_id对应VPC下已创建的网络（network）的ID，UUID格式。 说明： - VPC的子网网段不能与198.19.128.0/17重叠 - VPC路由表中自定义路由的目的地址不能与198.19.128.0/17重叠
    * endpointServiceId  终端节点服务的ID。 可以通过查询终端节点服务概 要获取要连接的终端节点服务 ID。
    * vpcId  终端节点所在的VPC的ID。
    * enableDns  是否创建域名。  - true：创建域名  - false：不创建域名 默认值为false。 说明 当创建gateway类型终端节点服务的终端节点时， “enable_dns”设置为true或者false，均不创建域名。
    * tags  标签列表，没有标签默认为空数组。
    * routetables  路由表ID列表。 创建gateway类型终端节点服务的终端节点时，此参数必选。 不设置此参数时，选择默认路由表。
    * portIp  访问所连接的终端节点服务的IP。 创建终端节点时，可以指定访问所连接的终端节点服务的IP，目前只支持IPv4类型 。 创建连接Interface类型终端节点服务的终端节点时，此参数必选。
    * whitelist  添加用于控制访问终端节点的白名单。 创建终端节点时，支持访问控制，使用此参数可以添加IPv4或CIDR，默认空列表。 仅当创建连接Interface类型终端节点服务的终端节点时，支持设置此参数。
    * enableWhitelist  是否开启网络ACL隔离。
    * description  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    * policyStatement  终端节点策略信息
    * policyDocument  iam 5.0 策略
    * ipVersion  指定终端节点的IP版本，仅专业型终端节点支持此参数。  - ipv4,  IPv4 - dualstack, 双栈
    * ipv6Address  访问所连接的终端节点服务的IPv6的地址。  创建终端节点时，可以指定访问所连接的终端节点服务的IP，不指定的情况下，会使用系统生成的一个地址。  仅专业型终端节点支持此参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subnetId' => null,
        'endpointServiceId' => null,
        'vpcId' => null,
        'enableDns' => null,
        'tags' => null,
        'routetables' => null,
        'portIp' => null,
        'whitelist' => null,
        'enableWhitelist' => null,
        'description' => null,
        'policyStatement' => null,
        'policyDocument' => null,
        'ipVersion' => null,
        'ipv6Address' => 'ipv6'
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
    * subnetId  创建连接Interface类型终端节点服务的终端节点时，此参数必选。 需要指定vpc_id对应VPC下已创建的网络（network）的ID，UUID格式。 说明： - VPC的子网网段不能与198.19.128.0/17重叠 - VPC路由表中自定义路由的目的地址不能与198.19.128.0/17重叠
    * endpointServiceId  终端节点服务的ID。 可以通过查询终端节点服务概 要获取要连接的终端节点服务 ID。
    * vpcId  终端节点所在的VPC的ID。
    * enableDns  是否创建域名。  - true：创建域名  - false：不创建域名 默认值为false。 说明 当创建gateway类型终端节点服务的终端节点时， “enable_dns”设置为true或者false，均不创建域名。
    * tags  标签列表，没有标签默认为空数组。
    * routetables  路由表ID列表。 创建gateway类型终端节点服务的终端节点时，此参数必选。 不设置此参数时，选择默认路由表。
    * portIp  访问所连接的终端节点服务的IP。 创建终端节点时，可以指定访问所连接的终端节点服务的IP，目前只支持IPv4类型 。 创建连接Interface类型终端节点服务的终端节点时，此参数必选。
    * whitelist  添加用于控制访问终端节点的白名单。 创建终端节点时，支持访问控制，使用此参数可以添加IPv4或CIDR，默认空列表。 仅当创建连接Interface类型终端节点服务的终端节点时，支持设置此参数。
    * enableWhitelist  是否开启网络ACL隔离。
    * description  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    * policyStatement  终端节点策略信息
    * policyDocument  iam 5.0 策略
    * ipVersion  指定终端节点的IP版本，仅专业型终端节点支持此参数。  - ipv4,  IPv4 - dualstack, 双栈
    * ipv6Address  访问所连接的终端节点服务的IPv6的地址。  创建终端节点时，可以指定访问所连接的终端节点服务的IP，不指定的情况下，会使用系统生成的一个地址。  仅专业型终端节点支持此参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subnetId' => 'subnet_id',
            'endpointServiceId' => 'endpoint_service_id',
            'vpcId' => 'vpc_id',
            'enableDns' => 'enable_dns',
            'tags' => 'tags',
            'routetables' => 'routetables',
            'portIp' => 'port_ip',
            'whitelist' => 'whitelist',
            'enableWhitelist' => 'enable_whitelist',
            'description' => 'description',
            'policyStatement' => 'policy_statement',
            'policyDocument' => 'policy_document',
            'ipVersion' => 'ip_version',
            'ipv6Address' => 'ipv6_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subnetId  创建连接Interface类型终端节点服务的终端节点时，此参数必选。 需要指定vpc_id对应VPC下已创建的网络（network）的ID，UUID格式。 说明： - VPC的子网网段不能与198.19.128.0/17重叠 - VPC路由表中自定义路由的目的地址不能与198.19.128.0/17重叠
    * endpointServiceId  终端节点服务的ID。 可以通过查询终端节点服务概 要获取要连接的终端节点服务 ID。
    * vpcId  终端节点所在的VPC的ID。
    * enableDns  是否创建域名。  - true：创建域名  - false：不创建域名 默认值为false。 说明 当创建gateway类型终端节点服务的终端节点时， “enable_dns”设置为true或者false，均不创建域名。
    * tags  标签列表，没有标签默认为空数组。
    * routetables  路由表ID列表。 创建gateway类型终端节点服务的终端节点时，此参数必选。 不设置此参数时，选择默认路由表。
    * portIp  访问所连接的终端节点服务的IP。 创建终端节点时，可以指定访问所连接的终端节点服务的IP，目前只支持IPv4类型 。 创建连接Interface类型终端节点服务的终端节点时，此参数必选。
    * whitelist  添加用于控制访问终端节点的白名单。 创建终端节点时，支持访问控制，使用此参数可以添加IPv4或CIDR，默认空列表。 仅当创建连接Interface类型终端节点服务的终端节点时，支持设置此参数。
    * enableWhitelist  是否开启网络ACL隔离。
    * description  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    * policyStatement  终端节点策略信息
    * policyDocument  iam 5.0 策略
    * ipVersion  指定终端节点的IP版本，仅专业型终端节点支持此参数。  - ipv4,  IPv4 - dualstack, 双栈
    * ipv6Address  访问所连接的终端节点服务的IPv6的地址。  创建终端节点时，可以指定访问所连接的终端节点服务的IP，不指定的情况下，会使用系统生成的一个地址。  仅专业型终端节点支持此参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'subnetId' => 'setSubnetId',
            'endpointServiceId' => 'setEndpointServiceId',
            'vpcId' => 'setVpcId',
            'enableDns' => 'setEnableDns',
            'tags' => 'setTags',
            'routetables' => 'setRoutetables',
            'portIp' => 'setPortIp',
            'whitelist' => 'setWhitelist',
            'enableWhitelist' => 'setEnableWhitelist',
            'description' => 'setDescription',
            'policyStatement' => 'setPolicyStatement',
            'policyDocument' => 'setPolicyDocument',
            'ipVersion' => 'setIpVersion',
            'ipv6Address' => 'setIpv6Address'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subnetId  创建连接Interface类型终端节点服务的终端节点时，此参数必选。 需要指定vpc_id对应VPC下已创建的网络（network）的ID，UUID格式。 说明： - VPC的子网网段不能与198.19.128.0/17重叠 - VPC路由表中自定义路由的目的地址不能与198.19.128.0/17重叠
    * endpointServiceId  终端节点服务的ID。 可以通过查询终端节点服务概 要获取要连接的终端节点服务 ID。
    * vpcId  终端节点所在的VPC的ID。
    * enableDns  是否创建域名。  - true：创建域名  - false：不创建域名 默认值为false。 说明 当创建gateway类型终端节点服务的终端节点时， “enable_dns”设置为true或者false，均不创建域名。
    * tags  标签列表，没有标签默认为空数组。
    * routetables  路由表ID列表。 创建gateway类型终端节点服务的终端节点时，此参数必选。 不设置此参数时，选择默认路由表。
    * portIp  访问所连接的终端节点服务的IP。 创建终端节点时，可以指定访问所连接的终端节点服务的IP，目前只支持IPv4类型 。 创建连接Interface类型终端节点服务的终端节点时，此参数必选。
    * whitelist  添加用于控制访问终端节点的白名单。 创建终端节点时，支持访问控制，使用此参数可以添加IPv4或CIDR，默认空列表。 仅当创建连接Interface类型终端节点服务的终端节点时，支持设置此参数。
    * enableWhitelist  是否开启网络ACL隔离。
    * description  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    * policyStatement  终端节点策略信息
    * policyDocument  iam 5.0 策略
    * ipVersion  指定终端节点的IP版本，仅专业型终端节点支持此参数。  - ipv4,  IPv4 - dualstack, 双栈
    * ipv6Address  访问所连接的终端节点服务的IPv6的地址。  创建终端节点时，可以指定访问所连接的终端节点服务的IP，不指定的情况下，会使用系统生成的一个地址。  仅专业型终端节点支持此参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'subnetId' => 'getSubnetId',
            'endpointServiceId' => 'getEndpointServiceId',
            'vpcId' => 'getVpcId',
            'enableDns' => 'getEnableDns',
            'tags' => 'getTags',
            'routetables' => 'getRoutetables',
            'portIp' => 'getPortIp',
            'whitelist' => 'getWhitelist',
            'enableWhitelist' => 'getEnableWhitelist',
            'description' => 'getDescription',
            'policyStatement' => 'getPolicyStatement',
            'policyDocument' => 'getPolicyDocument',
            'ipVersion' => 'getIpVersion',
            'ipv6Address' => 'getIpv6Address'
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
    const IP_VERSION_IPV4 = 'ipv4';
    const IP_VERSION_DUALSTACK = 'dualstack';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIpVersionAllowableValues()
    {
        return [
            self::IP_VERSION_IPV4,
            self::IP_VERSION_DUALSTACK,
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
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['endpointServiceId'] = isset($data['endpointServiceId']) ? $data['endpointServiceId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['enableDns'] = isset($data['enableDns']) ? $data['enableDns'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['routetables'] = isset($data['routetables']) ? $data['routetables'] : null;
        $this->container['portIp'] = isset($data['portIp']) ? $data['portIp'] : null;
        $this->container['whitelist'] = isset($data['whitelist']) ? $data['whitelist'] : null;
        $this->container['enableWhitelist'] = isset($data['enableWhitelist']) ? $data['enableWhitelist'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['policyStatement'] = isset($data['policyStatement']) ? $data['policyStatement'] : null;
        $this->container['policyDocument'] = isset($data['policyDocument']) ? $data['policyDocument'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['ipv6Address'] = isset($data['ipv6Address']) ? $data['ipv6Address'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['subnetId']) && (mb_strlen($this->container['subnetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['subnetId']) && (mb_strlen($this->container['subnetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['endpointServiceId'] === null) {
            $invalidProperties[] = "'endpointServiceId' can't be null";
        }
            if ((mb_strlen($this->container['endpointServiceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'endpointServiceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['endpointServiceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'endpointServiceId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if ((mb_strlen($this->container['vpcId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['vpcId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['portIp']) && (mb_strlen($this->container['portIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'portIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['portIp']) && (mb_strlen($this->container['portIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'portIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getIpVersionAllowableValues();
                if (!is_null($this->container['ipVersion']) && !in_array($this->container['ipVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ipVersion', must be one of '%s'",
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
    * Gets subnetId
    *  创建连接Interface类型终端节点服务的终端节点时，此参数必选。 需要指定vpc_id对应VPC下已创建的网络（network）的ID，UUID格式。 说明： - VPC的子网网段不能与198.19.128.0/17重叠 - VPC路由表中自定义路由的目的地址不能与198.19.128.0/17重叠
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 创建连接Interface类型终端节点服务的终端节点时，此参数必选。 需要指定vpc_id对应VPC下已创建的网络（network）的ID，UUID格式。 说明： - VPC的子网网段不能与198.19.128.0/17重叠 - VPC路由表中自定义路由的目的地址不能与198.19.128.0/17重叠
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets endpointServiceId
    *  终端节点服务的ID。 可以通过查询终端节点服务概 要获取要连接的终端节点服务 ID。
    *
    * @return string
    */
    public function getEndpointServiceId()
    {
        return $this->container['endpointServiceId'];
    }

    /**
    * Sets endpointServiceId
    *
    * @param string $endpointServiceId 终端节点服务的ID。 可以通过查询终端节点服务概 要获取要连接的终端节点服务 ID。
    *
    * @return $this
    */
    public function setEndpointServiceId($endpointServiceId)
    {
        $this->container['endpointServiceId'] = $endpointServiceId;
        return $this;
    }

    /**
    * Gets vpcId
    *  终端节点所在的VPC的ID。
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
    * @param string $vpcId 终端节点所在的VPC的ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets enableDns
    *  是否创建域名。  - true：创建域名  - false：不创建域名 默认值为false。 说明 当创建gateway类型终端节点服务的终端节点时， “enable_dns”设置为true或者false，均不创建域名。
    *
    * @return bool|null
    */
    public function getEnableDns()
    {
        return $this->container['enableDns'];
    }

    /**
    * Sets enableDns
    *
    * @param bool|null $enableDns 是否创建域名。  - true：创建域名  - false：不创建域名 默认值为false。 说明 当创建gateway类型终端节点服务的终端节点时， “enable_dns”设置为true或者false，均不创建域名。
    *
    * @return $this
    */
    public function setEnableDns($enableDns)
    {
        $this->container['enableDns'] = $enableDns;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表，没有标签默认为空数组。
    *
    * @return \HuaweiCloud\SDK\Vpcep\V1\Model\TagList[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\TagList[]|null $tags 标签列表，没有标签默认为空数组。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets routetables
    *  路由表ID列表。 创建gateway类型终端节点服务的终端节点时，此参数必选。 不设置此参数时，选择默认路由表。
    *
    * @return string[]|null
    */
    public function getRoutetables()
    {
        return $this->container['routetables'];
    }

    /**
    * Sets routetables
    *
    * @param string[]|null $routetables 路由表ID列表。 创建gateway类型终端节点服务的终端节点时，此参数必选。 不设置此参数时，选择默认路由表。
    *
    * @return $this
    */
    public function setRoutetables($routetables)
    {
        $this->container['routetables'] = $routetables;
        return $this;
    }

    /**
    * Gets portIp
    *  访问所连接的终端节点服务的IP。 创建终端节点时，可以指定访问所连接的终端节点服务的IP，目前只支持IPv4类型 。 创建连接Interface类型终端节点服务的终端节点时，此参数必选。
    *
    * @return string|null
    */
    public function getPortIp()
    {
        return $this->container['portIp'];
    }

    /**
    * Sets portIp
    *
    * @param string|null $portIp 访问所连接的终端节点服务的IP。 创建终端节点时，可以指定访问所连接的终端节点服务的IP，目前只支持IPv4类型 。 创建连接Interface类型终端节点服务的终端节点时，此参数必选。
    *
    * @return $this
    */
    public function setPortIp($portIp)
    {
        $this->container['portIp'] = $portIp;
        return $this;
    }

    /**
    * Gets whitelist
    *  添加用于控制访问终端节点的白名单。 创建终端节点时，支持访问控制，使用此参数可以添加IPv4或CIDR，默认空列表。 仅当创建连接Interface类型终端节点服务的终端节点时，支持设置此参数。
    *
    * @return string[]|null
    */
    public function getWhitelist()
    {
        return $this->container['whitelist'];
    }

    /**
    * Sets whitelist
    *
    * @param string[]|null $whitelist 添加用于控制访问终端节点的白名单。 创建终端节点时，支持访问控制，使用此参数可以添加IPv4或CIDR，默认空列表。 仅当创建连接Interface类型终端节点服务的终端节点时，支持设置此参数。
    *
    * @return $this
    */
    public function setWhitelist($whitelist)
    {
        $this->container['whitelist'] = $whitelist;
        return $this;
    }

    /**
    * Gets enableWhitelist
    *  是否开启网络ACL隔离。
    *
    * @return bool|null
    */
    public function getEnableWhitelist()
    {
        return $this->container['enableWhitelist'];
    }

    /**
    * Sets enableWhitelist
    *
    * @param bool|null $enableWhitelist 是否开启网络ACL隔离。
    *
    * @return $this
    */
    public function setEnableWhitelist($enableWhitelist)
    {
        $this->container['enableWhitelist'] = $enableWhitelist;
        return $this;
    }

    /**
    * Gets description
    *  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
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
    * @param string|null $description 描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets policyStatement
    *  终端节点策略信息
    *
    * @return \HuaweiCloud\SDK\Vpcep\V1\Model\PolicyStatement[]|null
    */
    public function getPolicyStatement()
    {
        return $this->container['policyStatement'];
    }

    /**
    * Sets policyStatement
    *
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\PolicyStatement[]|null $policyStatement 终端节点策略信息
    *
    * @return $this
    */
    public function setPolicyStatement($policyStatement)
    {
        $this->container['policyStatement'] = $policyStatement;
        return $this;
    }

    /**
    * Gets policyDocument
    *  iam 5.0 策略
    *
    * @return object|null
    */
    public function getPolicyDocument()
    {
        return $this->container['policyDocument'];
    }

    /**
    * Sets policyDocument
    *
    * @param object|null $policyDocument iam 5.0 策略
    *
    * @return $this
    */
    public function setPolicyDocument($policyDocument)
    {
        $this->container['policyDocument'] = $policyDocument;
        return $this;
    }

    /**
    * Gets ipVersion
    *  指定终端节点的IP版本，仅专业型终端节点支持此参数。  - ipv4,  IPv4 - dualstack, 双栈
    *
    * @return string|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param string|null $ipVersion 指定终端节点的IP版本，仅专业型终端节点支持此参数。  - ipv4,  IPv4 - dualstack, 双栈
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets ipv6Address
    *  访问所连接的终端节点服务的IPv6的地址。  创建终端节点时，可以指定访问所连接的终端节点服务的IP，不指定的情况下，会使用系统生成的一个地址。  仅专业型终端节点支持此参数。
    *
    * @return string|null
    */
    public function getIpv6Address()
    {
        return $this->container['ipv6Address'];
    }

    /**
    * Sets ipv6Address
    *
    * @param string|null $ipv6Address 访问所连接的终端节点服务的IPv6的地址。  创建终端节点时，可以指定访问所连接的终端节点服务的IP，不指定的情况下，会使用系统生成的一个地址。  仅专业型终端节点支持此参数。
    *
    * @return $this
    */
    public function setIpv6Address($ipv6Address)
    {
        $this->container['ipv6Address'] = $ipv6Address;
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

