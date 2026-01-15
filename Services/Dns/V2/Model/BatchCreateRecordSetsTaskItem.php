<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateRecordSetsTaskItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateRecordSetsTaskItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释：** 主机记录或域名。 末尾有点则认为是完整域名，如果不包含点，则认为是域名前缀。例如： 输入\"www\"，创建成功后域名显示为\"www.example.com.\" 输入\"www.example.com.\"（注意域名末尾有点），创建成功后域名显示为\"www.example.com.\" 输入\"www.example.com\"（注意域名末尾没有点），创建成功后域名显示为\"www.example.com.example.com.\" **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * type  **参数解释：** 记录集的类型。 **约束限制：** 不涉及。 **取值范围：** - A：将域名解析到指定的IPv4地址。 - AAAA：将域名解析到指定的IPv6地址。 - MX：指定域名对应的邮件服务器。 - CNAME：将域名解析到另一域名，或者多个域名映射到同一域名上。 - TXT：用于对域名进行标识和说明。 - SRV：用于记录某台服务器对外提供了哪些服务。 - NS：指定域名的权威DNS服务器，当前接口仅支持公网域名解析。 - REDIRECT_URL：显性URL转发，仅支持公网域名解析。 - FORWARD_URL：隐性URL转发，仅支持公网域名解析。 - CAA：指定为域名颁发HTTPS证书的授权CA机构，仅支持公网域名解析。 - PTR：指定IP地址反向解析记录，仅支持内网域名解析。  **默认取值：** 不涉及。
    * line  **参数解释：** 解析线路ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ttl  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **约束限制：** 不涉及。 **取值范围：** 1~2147483647。 **默认取值：** 300
    * weight  **参数解释：** 解析记录的权重。 **约束限制：** MX记录集不支持权重，创建时会忽略权重字段，如果您的MX记录集有多个值，在一条记录集里写多个值即可。(若存在多条同主机记录、同线路类型的MX记录，会自动合并为一条创建) **取值范围：** 0~1000。 **默认取值：** 不涉及。
    * records  **参数解释：** 解析记录的值。不同类型解析记录对应的值的规则不同。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * status  **参数解释：** 解析记录的状态。 **约束限制：** 不涉及。 **取值范围：** - ENABLE：启用解析 - DISABLE：暂停解析  **默认取值：** ENABLE。
    * description  **参数解释：** 记录集的描述信息。 **约束限制：** 不涉及。 **取值范围：** 长度不超过255个字符。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'line' => 'string',
            'ttl' => 'int',
            'weight' => 'int',
            'records' => 'string[]',
            'status' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释：** 主机记录或域名。 末尾有点则认为是完整域名，如果不包含点，则认为是域名前缀。例如： 输入\"www\"，创建成功后域名显示为\"www.example.com.\" 输入\"www.example.com.\"（注意域名末尾有点），创建成功后域名显示为\"www.example.com.\" 输入\"www.example.com\"（注意域名末尾没有点），创建成功后域名显示为\"www.example.com.example.com.\" **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * type  **参数解释：** 记录集的类型。 **约束限制：** 不涉及。 **取值范围：** - A：将域名解析到指定的IPv4地址。 - AAAA：将域名解析到指定的IPv6地址。 - MX：指定域名对应的邮件服务器。 - CNAME：将域名解析到另一域名，或者多个域名映射到同一域名上。 - TXT：用于对域名进行标识和说明。 - SRV：用于记录某台服务器对外提供了哪些服务。 - NS：指定域名的权威DNS服务器，当前接口仅支持公网域名解析。 - REDIRECT_URL：显性URL转发，仅支持公网域名解析。 - FORWARD_URL：隐性URL转发，仅支持公网域名解析。 - CAA：指定为域名颁发HTTPS证书的授权CA机构，仅支持公网域名解析。 - PTR：指定IP地址反向解析记录，仅支持内网域名解析。  **默认取值：** 不涉及。
    * line  **参数解释：** 解析线路ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ttl  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **约束限制：** 不涉及。 **取值范围：** 1~2147483647。 **默认取值：** 300
    * weight  **参数解释：** 解析记录的权重。 **约束限制：** MX记录集不支持权重，创建时会忽略权重字段，如果您的MX记录集有多个值，在一条记录集里写多个值即可。(若存在多条同主机记录、同线路类型的MX记录，会自动合并为一条创建) **取值范围：** 0~1000。 **默认取值：** 不涉及。
    * records  **参数解释：** 解析记录的值。不同类型解析记录对应的值的规则不同。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * status  **参数解释：** 解析记录的状态。 **约束限制：** 不涉及。 **取值范围：** - ENABLE：启用解析 - DISABLE：暂停解析  **默认取值：** ENABLE。
    * description  **参数解释：** 记录集的描述信息。 **约束限制：** 不涉及。 **取值范围：** 长度不超过255个字符。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'line' => null,
        'ttl' => 'int32',
        'weight' => 'int32',
        'records' => null,
        'status' => null,
        'description' => null
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
    * name  **参数解释：** 主机记录或域名。 末尾有点则认为是完整域名，如果不包含点，则认为是域名前缀。例如： 输入\"www\"，创建成功后域名显示为\"www.example.com.\" 输入\"www.example.com.\"（注意域名末尾有点），创建成功后域名显示为\"www.example.com.\" 输入\"www.example.com\"（注意域名末尾没有点），创建成功后域名显示为\"www.example.com.example.com.\" **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * type  **参数解释：** 记录集的类型。 **约束限制：** 不涉及。 **取值范围：** - A：将域名解析到指定的IPv4地址。 - AAAA：将域名解析到指定的IPv6地址。 - MX：指定域名对应的邮件服务器。 - CNAME：将域名解析到另一域名，或者多个域名映射到同一域名上。 - TXT：用于对域名进行标识和说明。 - SRV：用于记录某台服务器对外提供了哪些服务。 - NS：指定域名的权威DNS服务器，当前接口仅支持公网域名解析。 - REDIRECT_URL：显性URL转发，仅支持公网域名解析。 - FORWARD_URL：隐性URL转发，仅支持公网域名解析。 - CAA：指定为域名颁发HTTPS证书的授权CA机构，仅支持公网域名解析。 - PTR：指定IP地址反向解析记录，仅支持内网域名解析。  **默认取值：** 不涉及。
    * line  **参数解释：** 解析线路ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ttl  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **约束限制：** 不涉及。 **取值范围：** 1~2147483647。 **默认取值：** 300
    * weight  **参数解释：** 解析记录的权重。 **约束限制：** MX记录集不支持权重，创建时会忽略权重字段，如果您的MX记录集有多个值，在一条记录集里写多个值即可。(若存在多条同主机记录、同线路类型的MX记录，会自动合并为一条创建) **取值范围：** 0~1000。 **默认取值：** 不涉及。
    * records  **参数解释：** 解析记录的值。不同类型解析记录对应的值的规则不同。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * status  **参数解释：** 解析记录的状态。 **约束限制：** 不涉及。 **取值范围：** - ENABLE：启用解析 - DISABLE：暂停解析  **默认取值：** ENABLE。
    * description  **参数解释：** 记录集的描述信息。 **约束限制：** 不涉及。 **取值范围：** 长度不超过255个字符。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'line' => 'line',
            'ttl' => 'ttl',
            'weight' => 'weight',
            'records' => 'records',
            'status' => 'status',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释：** 主机记录或域名。 末尾有点则认为是完整域名，如果不包含点，则认为是域名前缀。例如： 输入\"www\"，创建成功后域名显示为\"www.example.com.\" 输入\"www.example.com.\"（注意域名末尾有点），创建成功后域名显示为\"www.example.com.\" 输入\"www.example.com\"（注意域名末尾没有点），创建成功后域名显示为\"www.example.com.example.com.\" **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * type  **参数解释：** 记录集的类型。 **约束限制：** 不涉及。 **取值范围：** - A：将域名解析到指定的IPv4地址。 - AAAA：将域名解析到指定的IPv6地址。 - MX：指定域名对应的邮件服务器。 - CNAME：将域名解析到另一域名，或者多个域名映射到同一域名上。 - TXT：用于对域名进行标识和说明。 - SRV：用于记录某台服务器对外提供了哪些服务。 - NS：指定域名的权威DNS服务器，当前接口仅支持公网域名解析。 - REDIRECT_URL：显性URL转发，仅支持公网域名解析。 - FORWARD_URL：隐性URL转发，仅支持公网域名解析。 - CAA：指定为域名颁发HTTPS证书的授权CA机构，仅支持公网域名解析。 - PTR：指定IP地址反向解析记录，仅支持内网域名解析。  **默认取值：** 不涉及。
    * line  **参数解释：** 解析线路ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ttl  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **约束限制：** 不涉及。 **取值范围：** 1~2147483647。 **默认取值：** 300
    * weight  **参数解释：** 解析记录的权重。 **约束限制：** MX记录集不支持权重，创建时会忽略权重字段，如果您的MX记录集有多个值，在一条记录集里写多个值即可。(若存在多条同主机记录、同线路类型的MX记录，会自动合并为一条创建) **取值范围：** 0~1000。 **默认取值：** 不涉及。
    * records  **参数解释：** 解析记录的值。不同类型解析记录对应的值的规则不同。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * status  **参数解释：** 解析记录的状态。 **约束限制：** 不涉及。 **取值范围：** - ENABLE：启用解析 - DISABLE：暂停解析  **默认取值：** ENABLE。
    * description  **参数解释：** 记录集的描述信息。 **约束限制：** 不涉及。 **取值范围：** 长度不超过255个字符。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'line' => 'setLine',
            'ttl' => 'setTtl',
            'weight' => 'setWeight',
            'records' => 'setRecords',
            'status' => 'setStatus',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释：** 主机记录或域名。 末尾有点则认为是完整域名，如果不包含点，则认为是域名前缀。例如： 输入\"www\"，创建成功后域名显示为\"www.example.com.\" 输入\"www.example.com.\"（注意域名末尾有点），创建成功后域名显示为\"www.example.com.\" 输入\"www.example.com\"（注意域名末尾没有点），创建成功后域名显示为\"www.example.com.example.com.\" **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * type  **参数解释：** 记录集的类型。 **约束限制：** 不涉及。 **取值范围：** - A：将域名解析到指定的IPv4地址。 - AAAA：将域名解析到指定的IPv6地址。 - MX：指定域名对应的邮件服务器。 - CNAME：将域名解析到另一域名，或者多个域名映射到同一域名上。 - TXT：用于对域名进行标识和说明。 - SRV：用于记录某台服务器对外提供了哪些服务。 - NS：指定域名的权威DNS服务器，当前接口仅支持公网域名解析。 - REDIRECT_URL：显性URL转发，仅支持公网域名解析。 - FORWARD_URL：隐性URL转发，仅支持公网域名解析。 - CAA：指定为域名颁发HTTPS证书的授权CA机构，仅支持公网域名解析。 - PTR：指定IP地址反向解析记录，仅支持内网域名解析。  **默认取值：** 不涉及。
    * line  **参数解释：** 解析线路ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ttl  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **约束限制：** 不涉及。 **取值范围：** 1~2147483647。 **默认取值：** 300
    * weight  **参数解释：** 解析记录的权重。 **约束限制：** MX记录集不支持权重，创建时会忽略权重字段，如果您的MX记录集有多个值，在一条记录集里写多个值即可。(若存在多条同主机记录、同线路类型的MX记录，会自动合并为一条创建) **取值范围：** 0~1000。 **默认取值：** 不涉及。
    * records  **参数解释：** 解析记录的值。不同类型解析记录对应的值的规则不同。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * status  **参数解释：** 解析记录的状态。 **约束限制：** 不涉及。 **取值范围：** - ENABLE：启用解析 - DISABLE：暂停解析  **默认取值：** ENABLE。
    * description  **参数解释：** 记录集的描述信息。 **约束限制：** 不涉及。 **取值范围：** 长度不超过255个字符。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'line' => 'getLine',
            'ttl' => 'getTtl',
            'weight' => 'getWeight',
            'records' => 'getRecords',
            'status' => 'getStatus',
            'description' => 'getDescription'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 254)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 254.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 20)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 20.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['line']) && !preg_match("/[0-9a-zA-Z-_]{1,64}/", $this->container['line'])) {
                $invalidProperties[] = "invalid value for 'line', must be conform to the pattern /[0-9a-zA-Z-_]{1,64}/.";
            }
            if (!is_null($this->container['ttl']) && ($this->container['ttl'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ttl', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ttl']) && ($this->container['ttl'] < 1)) {
                $invalidProperties[] = "invalid value for 'ttl', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['weight']) && ($this->container['weight'] > 1000)) {
                $invalidProperties[] = "invalid value for 'weight', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['weight']) && ($this->container['weight'] < 0)) {
                $invalidProperties[] = "invalid value for 'weight', must be bigger than or equal to 0.";
            }
        if ($this->container['records'] === null) {
            $invalidProperties[] = "'records' can't be null";
        }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 10)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    *  **参数解释：** 主机记录或域名。 末尾有点则认为是完整域名，如果不包含点，则认为是域名前缀。例如： 输入\"www\"，创建成功后域名显示为\"www.example.com.\" 输入\"www.example.com.\"（注意域名末尾有点），创建成功后域名显示为\"www.example.com.\" 输入\"www.example.com\"（注意域名末尾没有点），创建成功后域名显示为\"www.example.com.example.com.\" **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $name **参数解释：** 主机记录或域名。 末尾有点则认为是完整域名，如果不包含点，则认为是域名前缀。例如： 输入\"www\"，创建成功后域名显示为\"www.example.com.\" 输入\"www.example.com.\"（注意域名末尾有点），创建成功后域名显示为\"www.example.com.\" 输入\"www.example.com\"（注意域名末尾没有点），创建成功后域名显示为\"www.example.com.example.com.\" **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 记录集的类型。 **约束限制：** 不涉及。 **取值范围：** - A：将域名解析到指定的IPv4地址。 - AAAA：将域名解析到指定的IPv6地址。 - MX：指定域名对应的邮件服务器。 - CNAME：将域名解析到另一域名，或者多个域名映射到同一域名上。 - TXT：用于对域名进行标识和说明。 - SRV：用于记录某台服务器对外提供了哪些服务。 - NS：指定域名的权威DNS服务器，当前接口仅支持公网域名解析。 - REDIRECT_URL：显性URL转发，仅支持公网域名解析。 - FORWARD_URL：隐性URL转发，仅支持公网域名解析。 - CAA：指定为域名颁发HTTPS证书的授权CA机构，仅支持公网域名解析。 - PTR：指定IP地址反向解析记录，仅支持内网域名解析。  **默认取值：** 不涉及。
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
    * @param string $type **参数解释：** 记录集的类型。 **约束限制：** 不涉及。 **取值范围：** - A：将域名解析到指定的IPv4地址。 - AAAA：将域名解析到指定的IPv6地址。 - MX：指定域名对应的邮件服务器。 - CNAME：将域名解析到另一域名，或者多个域名映射到同一域名上。 - TXT：用于对域名进行标识和说明。 - SRV：用于记录某台服务器对外提供了哪些服务。 - NS：指定域名的权威DNS服务器，当前接口仅支持公网域名解析。 - REDIRECT_URL：显性URL转发，仅支持公网域名解析。 - FORWARD_URL：隐性URL转发，仅支持公网域名解析。 - CAA：指定为域名颁发HTTPS证书的授权CA机构，仅支持公网域名解析。 - PTR：指定IP地址反向解析记录，仅支持内网域名解析。  **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets line
    *  **参数解释：** 解析线路ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getLine()
    {
        return $this->container['line'];
    }

    /**
    * Sets line
    *
    * @param string|null $line **参数解释：** 解析线路ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setLine($line)
    {
        $this->container['line'] = $line;
        return $this;
    }

    /**
    * Gets ttl
    *  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **约束限制：** 不涉及。 **取值范围：** 1~2147483647。 **默认取值：** 300
    *
    * @return int|null
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param int|null $ttl **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **约束限制：** 不涉及。 **取值范围：** 1~2147483647。 **默认取值：** 300
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
        return $this;
    }

    /**
    * Gets weight
    *  **参数解释：** 解析记录的权重。 **约束限制：** MX记录集不支持权重，创建时会忽略权重字段，如果您的MX记录集有多个值，在一条记录集里写多个值即可。(若存在多条同主机记录、同线路类型的MX记录，会自动合并为一条创建) **取值范围：** 0~1000。 **默认取值：** 不涉及。
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
    * @param int|null $weight **参数解释：** 解析记录的权重。 **约束限制：** MX记录集不支持权重，创建时会忽略权重字段，如果您的MX记录集有多个值，在一条记录集里写多个值即可。(若存在多条同主机记录、同线路类型的MX记录，会自动合并为一条创建) **取值范围：** 0~1000。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets records
    *  **参数解释：** 解析记录的值。不同类型解析记录对应的值的规则不同。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string[]
    */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
    * Sets records
    *
    * @param string[] $records **参数解释：** 解析记录的值。不同类型解析记录对应的值的规则不同。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRecords($records)
    {
        $this->container['records'] = $records;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 解析记录的状态。 **约束限制：** 不涉及。 **取值范围：** - ENABLE：启用解析 - DISABLE：暂停解析  **默认取值：** ENABLE。
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
    * @param string|null $status **参数解释：** 解析记录的状态。 **约束限制：** 不涉及。 **取值范围：** - ENABLE：启用解析 - DISABLE：暂停解析  **默认取值：** ENABLE。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 记录集的描述信息。 **约束限制：** 不涉及。 **取值范围：** 长度不超过255个字符。 **默认取值：** 不涉及。
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
    * @param string|null $description **参数解释：** 记录集的描述信息。 **约束限制：** 不涉及。 **取值范围：** 长度不超过255个字符。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

