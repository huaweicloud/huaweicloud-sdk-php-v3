<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSubnetOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSubnetOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  功能说明：子网名称 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    * ipv6Enable  功能说明：是否创建ipv6子网 取值范围：true（开启），false（关闭）
    * dhcpEnable  功能说明：子网是否开启dhcp功能 取值范围：true（开启），false（关闭） 约束：不填时默认为true。当设置为false时，会导致新创建的ECS无法获取IP地址，cloudinit无法注入账号密码，请谨慎操作。
    * primaryDns  功能说明：子网dns服务器地址1 约束：ip格式 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * secondaryDns  功能说明：子网dns服务器地址2 约束：ip格式 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * dnsList  功能说明：子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段。 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * extraDhcpOpts  子网配置的NTP地址或租约时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'ipv6Enable' => 'bool',
            'dhcpEnable' => 'bool',
            'primaryDns' => 'string',
            'secondaryDns' => 'string',
            'dnsList' => 'string[]',
            'extraDhcpOpts' => '\HuaweiCloud\SDK\Vpc\V2\Model\ExtraDhcpOption[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  功能说明：子网名称 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    * ipv6Enable  功能说明：是否创建ipv6子网 取值范围：true（开启），false（关闭）
    * dhcpEnable  功能说明：子网是否开启dhcp功能 取值范围：true（开启），false（关闭） 约束：不填时默认为true。当设置为false时，会导致新创建的ECS无法获取IP地址，cloudinit无法注入账号密码，请谨慎操作。
    * primaryDns  功能说明：子网dns服务器地址1 约束：ip格式 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * secondaryDns  功能说明：子网dns服务器地址2 约束：ip格式 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * dnsList  功能说明：子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段。 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * extraDhcpOpts  子网配置的NTP地址或租约时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'ipv6Enable' => null,
        'dhcpEnable' => null,
        'primaryDns' => null,
        'secondaryDns' => null,
        'dnsList' => null,
        'extraDhcpOpts' => null
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
    * name  功能说明：子网名称 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    * ipv6Enable  功能说明：是否创建ipv6子网 取值范围：true（开启），false（关闭）
    * dhcpEnable  功能说明：子网是否开启dhcp功能 取值范围：true（开启），false（关闭） 约束：不填时默认为true。当设置为false时，会导致新创建的ECS无法获取IP地址，cloudinit无法注入账号密码，请谨慎操作。
    * primaryDns  功能说明：子网dns服务器地址1 约束：ip格式 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * secondaryDns  功能说明：子网dns服务器地址2 约束：ip格式 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * dnsList  功能说明：子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段。 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * extraDhcpOpts  子网配置的NTP地址或租约时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'ipv6Enable' => 'ipv6_enable',
            'dhcpEnable' => 'dhcp_enable',
            'primaryDns' => 'primary_dns',
            'secondaryDns' => 'secondary_dns',
            'dnsList' => 'dnsList',
            'extraDhcpOpts' => 'extra_dhcp_opts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  功能说明：子网名称 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    * ipv6Enable  功能说明：是否创建ipv6子网 取值范围：true（开启），false（关闭）
    * dhcpEnable  功能说明：子网是否开启dhcp功能 取值范围：true（开启），false（关闭） 约束：不填时默认为true。当设置为false时，会导致新创建的ECS无法获取IP地址，cloudinit无法注入账号密码，请谨慎操作。
    * primaryDns  功能说明：子网dns服务器地址1 约束：ip格式 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * secondaryDns  功能说明：子网dns服务器地址2 约束：ip格式 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * dnsList  功能说明：子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段。 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * extraDhcpOpts  子网配置的NTP地址或租约时间
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'ipv6Enable' => 'setIpv6Enable',
            'dhcpEnable' => 'setDhcpEnable',
            'primaryDns' => 'setPrimaryDns',
            'secondaryDns' => 'setSecondaryDns',
            'dnsList' => 'setDnsList',
            'extraDhcpOpts' => 'setExtraDhcpOpts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  功能说明：子网名称 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    * ipv6Enable  功能说明：是否创建ipv6子网 取值范围：true（开启），false（关闭）
    * dhcpEnable  功能说明：子网是否开启dhcp功能 取值范围：true（开启），false（关闭） 约束：不填时默认为true。当设置为false时，会导致新创建的ECS无法获取IP地址，cloudinit无法注入账号密码，请谨慎操作。
    * primaryDns  功能说明：子网dns服务器地址1 约束：ip格式 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * secondaryDns  功能说明：子网dns服务器地址2 约束：ip格式 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * dnsList  功能说明：子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段。 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * extraDhcpOpts  子网配置的NTP地址或租约时间
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'ipv6Enable' => 'getIpv6Enable',
            'dhcpEnable' => 'getDhcpEnable',
            'primaryDns' => 'getPrimaryDns',
            'secondaryDns' => 'getSecondaryDns',
            'dnsList' => 'getDnsList',
            'extraDhcpOpts' => 'getExtraDhcpOpts'
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
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
        $this->container['dhcpEnable'] = isset($data['dhcpEnable']) ? $data['dhcpEnable'] : null;
        $this->container['primaryDns'] = isset($data['primaryDns']) ? $data['primaryDns'] : null;
        $this->container['secondaryDns'] = isset($data['secondaryDns']) ? $data['secondaryDns'] : null;
        $this->container['dnsList'] = isset($data['dnsList']) ? $data['dnsList'] : null;
        $this->container['extraDhcpOpts'] = isset($data['extraDhcpOpts']) ? $data['extraDhcpOpts'] : null;
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
    *  功能说明：子网名称 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    * @param string $name 功能说明：子网名称 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    *  功能说明：子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
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
    * @param string|null $description 功能说明：子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets ipv6Enable
    *  功能说明：是否创建ipv6子网 取值范围：true（开启），false（关闭）
    *
    * @return bool|null
    */
    public function getIpv6Enable()
    {
        return $this->container['ipv6Enable'];
    }

    /**
    * Sets ipv6Enable
    *
    * @param bool|null $ipv6Enable 功能说明：是否创建ipv6子网 取值范围：true（开启），false（关闭）
    *
    * @return $this
    */
    public function setIpv6Enable($ipv6Enable)
    {
        $this->container['ipv6Enable'] = $ipv6Enable;
        return $this;
    }

    /**
    * Gets dhcpEnable
    *  功能说明：子网是否开启dhcp功能 取值范围：true（开启），false（关闭） 约束：不填时默认为true。当设置为false时，会导致新创建的ECS无法获取IP地址，cloudinit无法注入账号密码，请谨慎操作。
    *
    * @return bool|null
    */
    public function getDhcpEnable()
    {
        return $this->container['dhcpEnable'];
    }

    /**
    * Sets dhcpEnable
    *
    * @param bool|null $dhcpEnable 功能说明：子网是否开启dhcp功能 取值范围：true（开启），false（关闭） 约束：不填时默认为true。当设置为false时，会导致新创建的ECS无法获取IP地址，cloudinit无法注入账号密码，请谨慎操作。
    *
    * @return $this
    */
    public function setDhcpEnable($dhcpEnable)
    {
        $this->container['dhcpEnable'] = $dhcpEnable;
        return $this;
    }

    /**
    * Gets primaryDns
    *  功能说明：子网dns服务器地址1 约束：ip格式 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    *
    * @return string|null
    */
    public function getPrimaryDns()
    {
        return $this->container['primaryDns'];
    }

    /**
    * Sets primaryDns
    *
    * @param string|null $primaryDns 功能说明：子网dns服务器地址1 约束：ip格式 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    *
    * @return $this
    */
    public function setPrimaryDns($primaryDns)
    {
        $this->container['primaryDns'] = $primaryDns;
        return $this;
    }

    /**
    * Gets secondaryDns
    *  功能说明：子网dns服务器地址2 约束：ip格式 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    *
    * @return string|null
    */
    public function getSecondaryDns()
    {
        return $this->container['secondaryDns'];
    }

    /**
    * Sets secondaryDns
    *
    * @param string|null $secondaryDns 功能说明：子网dns服务器地址2 约束：ip格式 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    *
    * @return $this
    */
    public function setSecondaryDns($secondaryDns)
    {
        $this->container['secondaryDns'] = $secondaryDns;
        return $this;
    }

    /**
    * Gets dnsList
    *  功能说明：子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段。 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    *
    * @return string[]|null
    */
    public function getDnsList()
    {
        return $this->container['dnsList'];
    }

    /**
    * Sets dnsList
    *
    * @param string[]|null $dnsList 功能说明：子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段。 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    *
    * @return $this
    */
    public function setDnsList($dnsList)
    {
        $this->container['dnsList'] = $dnsList;
        return $this;
    }

    /**
    * Gets extraDhcpOpts
    *  子网配置的NTP地址或租约时间
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\ExtraDhcpOption[]|null
    */
    public function getExtraDhcpOpts()
    {
        return $this->container['extraDhcpOpts'];
    }

    /**
    * Sets extraDhcpOpts
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\ExtraDhcpOption[]|null $extraDhcpOpts 子网配置的NTP地址或租约时间
    *
    * @return $this
    */
    public function setExtraDhcpOpts($extraDhcpOpts)
    {
        $this->container['extraDhcpOpts'] = $extraDhcpOpts;
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

