<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BeforeHbaConfOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BeforeHbaConfOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释** 客户端连接类型。 **约束限制**: 不涉及。 **取值范围** - host：表示这条记录既接受一个普通的TCP/IP套接字连接，也接受一个经过SSL加密的TCP/IP套接字连接。 - hostssl：表示这条记录只接受一个经过SSL加密的TCP/IP套接字连接。 - hostnossl：表示这条记录只接受一个普通的TCP/IP套接字连接。  **默认取值**: 不涉及。
    * database  **参数解释** 声明记录所匹配且允许访问的数据库，多租特性场景下该参数声明记录所匹配且允许访问的PDB。 - 值replication表示如果请求一个复制连接，则匹配，但复制连接不表示任何特定的数据库。如需使用名为replication的数据库，需在database列使用记录“replication”作为数据库名。 - 多租数据库下， 值replication_pdb1表示如果请求一个名为pdb1数据库的复制连接，则匹配成功。值replication方式只生效Non-PDB。 - PDB复制连接生效配置方式为replication_[pdbname]，pdbname为用户创建PDB数据库时候的名字。 - 如需使用名为replication_pdb1的数据库，需在database列使用记录“replication_pdb1”作为数据库名。  **约束限制**: 不涉及。 **取值范围** - all：表示该记录匹配所有数据库。 - 特定的数据库名称或者用逗号分隔的数据库列表。  **默认取值**: 不涉及。
    * user  **参数解释** 声明记录所匹配且允许访问的数据库用户。 **约束限制** 不支持系统用户。 **取值范围** - all：表明该记录匹配所有用户。 - 特定的数据库用户名或者用逗号分隔的用户列表。 **默认取值**: 不涉及。
    * address  **参数解释** 指定与记录匹配且允许访问的IP地址范围。 **约束限制** 当前仅支持IP地址/掩码长度格式。 数据库引擎版本为V2.0-8.1.0及以上支持address配置IPv6的IP。 **取值范围** 支持IPv4和IPv6，可以使用如下形式来表示： IP地址/掩码长度。例如，10.10.0.0/24、2001:250:250:250:250:250:250:175/128。 **默认取值**: 不涉及。
    * method  **参数解释** 声明连接时使用的认证方法。 **约束限制**: 不涉及。 **取值范围** - reject：无条件地拒绝连接。常用于过滤某些主机。 - md5：MD5加密算法安全性低，存在安全风险，不推荐使用，建议使用更安全的加密算法。默认不支持，可通过password_encryption_type参数配置。 - sha256：要求客户端提供一个sha256算法加密的口令进行认证，该口令在传送过程中结合salt（服务器发送给客户端的随机数）的单向sha256加密，增强了安全性。 - sm3：要求客户端提供一个sm3算法加密口令进行认证，该口令在传送过程中结合salt（服务器发送给客户端的随机数）的单向sm3加密，增加了安全性。 - cert：客户端证书认证模式，此模式需进行SSL连接配置且需要客户端提供有效的SSL证书，不需要提供用户密码。cert认证方式只支持hostssl类型的规则。  **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'database' => 'string',
            'user' => 'string',
            'address' => 'string',
            'method' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释** 客户端连接类型。 **约束限制**: 不涉及。 **取值范围** - host：表示这条记录既接受一个普通的TCP/IP套接字连接，也接受一个经过SSL加密的TCP/IP套接字连接。 - hostssl：表示这条记录只接受一个经过SSL加密的TCP/IP套接字连接。 - hostnossl：表示这条记录只接受一个普通的TCP/IP套接字连接。  **默认取值**: 不涉及。
    * database  **参数解释** 声明记录所匹配且允许访问的数据库，多租特性场景下该参数声明记录所匹配且允许访问的PDB。 - 值replication表示如果请求一个复制连接，则匹配，但复制连接不表示任何特定的数据库。如需使用名为replication的数据库，需在database列使用记录“replication”作为数据库名。 - 多租数据库下， 值replication_pdb1表示如果请求一个名为pdb1数据库的复制连接，则匹配成功。值replication方式只生效Non-PDB。 - PDB复制连接生效配置方式为replication_[pdbname]，pdbname为用户创建PDB数据库时候的名字。 - 如需使用名为replication_pdb1的数据库，需在database列使用记录“replication_pdb1”作为数据库名。  **约束限制**: 不涉及。 **取值范围** - all：表示该记录匹配所有数据库。 - 特定的数据库名称或者用逗号分隔的数据库列表。  **默认取值**: 不涉及。
    * user  **参数解释** 声明记录所匹配且允许访问的数据库用户。 **约束限制** 不支持系统用户。 **取值范围** - all：表明该记录匹配所有用户。 - 特定的数据库用户名或者用逗号分隔的用户列表。 **默认取值**: 不涉及。
    * address  **参数解释** 指定与记录匹配且允许访问的IP地址范围。 **约束限制** 当前仅支持IP地址/掩码长度格式。 数据库引擎版本为V2.0-8.1.0及以上支持address配置IPv6的IP。 **取值范围** 支持IPv4和IPv6，可以使用如下形式来表示： IP地址/掩码长度。例如，10.10.0.0/24、2001:250:250:250:250:250:250:175/128。 **默认取值**: 不涉及。
    * method  **参数解释** 声明连接时使用的认证方法。 **约束限制**: 不涉及。 **取值范围** - reject：无条件地拒绝连接。常用于过滤某些主机。 - md5：MD5加密算法安全性低，存在安全风险，不推荐使用，建议使用更安全的加密算法。默认不支持，可通过password_encryption_type参数配置。 - sha256：要求客户端提供一个sha256算法加密的口令进行认证，该口令在传送过程中结合salt（服务器发送给客户端的随机数）的单向sha256加密，增强了安全性。 - sm3：要求客户端提供一个sm3算法加密口令进行认证，该口令在传送过程中结合salt（服务器发送给客户端的随机数）的单向sm3加密，增加了安全性。 - cert：客户端证书认证模式，此模式需进行SSL连接配置且需要客户端提供有效的SSL证书，不需要提供用户密码。cert认证方式只支持hostssl类型的规则。  **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'database' => null,
        'user' => null,
        'address' => null,
        'method' => null
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
    * type  **参数解释** 客户端连接类型。 **约束限制**: 不涉及。 **取值范围** - host：表示这条记录既接受一个普通的TCP/IP套接字连接，也接受一个经过SSL加密的TCP/IP套接字连接。 - hostssl：表示这条记录只接受一个经过SSL加密的TCP/IP套接字连接。 - hostnossl：表示这条记录只接受一个普通的TCP/IP套接字连接。  **默认取值**: 不涉及。
    * database  **参数解释** 声明记录所匹配且允许访问的数据库，多租特性场景下该参数声明记录所匹配且允许访问的PDB。 - 值replication表示如果请求一个复制连接，则匹配，但复制连接不表示任何特定的数据库。如需使用名为replication的数据库，需在database列使用记录“replication”作为数据库名。 - 多租数据库下， 值replication_pdb1表示如果请求一个名为pdb1数据库的复制连接，则匹配成功。值replication方式只生效Non-PDB。 - PDB复制连接生效配置方式为replication_[pdbname]，pdbname为用户创建PDB数据库时候的名字。 - 如需使用名为replication_pdb1的数据库，需在database列使用记录“replication_pdb1”作为数据库名。  **约束限制**: 不涉及。 **取值范围** - all：表示该记录匹配所有数据库。 - 特定的数据库名称或者用逗号分隔的数据库列表。  **默认取值**: 不涉及。
    * user  **参数解释** 声明记录所匹配且允许访问的数据库用户。 **约束限制** 不支持系统用户。 **取值范围** - all：表明该记录匹配所有用户。 - 特定的数据库用户名或者用逗号分隔的用户列表。 **默认取值**: 不涉及。
    * address  **参数解释** 指定与记录匹配且允许访问的IP地址范围。 **约束限制** 当前仅支持IP地址/掩码长度格式。 数据库引擎版本为V2.0-8.1.0及以上支持address配置IPv6的IP。 **取值范围** 支持IPv4和IPv6，可以使用如下形式来表示： IP地址/掩码长度。例如，10.10.0.0/24、2001:250:250:250:250:250:250:175/128。 **默认取值**: 不涉及。
    * method  **参数解释** 声明连接时使用的认证方法。 **约束限制**: 不涉及。 **取值范围** - reject：无条件地拒绝连接。常用于过滤某些主机。 - md5：MD5加密算法安全性低，存在安全风险，不推荐使用，建议使用更安全的加密算法。默认不支持，可通过password_encryption_type参数配置。 - sha256：要求客户端提供一个sha256算法加密的口令进行认证，该口令在传送过程中结合salt（服务器发送给客户端的随机数）的单向sha256加密，增强了安全性。 - sm3：要求客户端提供一个sm3算法加密口令进行认证，该口令在传送过程中结合salt（服务器发送给客户端的随机数）的单向sm3加密，增加了安全性。 - cert：客户端证书认证模式，此模式需进行SSL连接配置且需要客户端提供有效的SSL证书，不需要提供用户密码。cert认证方式只支持hostssl类型的规则。  **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'database' => 'database',
            'user' => 'user',
            'address' => 'address',
            'method' => 'method'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释** 客户端连接类型。 **约束限制**: 不涉及。 **取值范围** - host：表示这条记录既接受一个普通的TCP/IP套接字连接，也接受一个经过SSL加密的TCP/IP套接字连接。 - hostssl：表示这条记录只接受一个经过SSL加密的TCP/IP套接字连接。 - hostnossl：表示这条记录只接受一个普通的TCP/IP套接字连接。  **默认取值**: 不涉及。
    * database  **参数解释** 声明记录所匹配且允许访问的数据库，多租特性场景下该参数声明记录所匹配且允许访问的PDB。 - 值replication表示如果请求一个复制连接，则匹配，但复制连接不表示任何特定的数据库。如需使用名为replication的数据库，需在database列使用记录“replication”作为数据库名。 - 多租数据库下， 值replication_pdb1表示如果请求一个名为pdb1数据库的复制连接，则匹配成功。值replication方式只生效Non-PDB。 - PDB复制连接生效配置方式为replication_[pdbname]，pdbname为用户创建PDB数据库时候的名字。 - 如需使用名为replication_pdb1的数据库，需在database列使用记录“replication_pdb1”作为数据库名。  **约束限制**: 不涉及。 **取值范围** - all：表示该记录匹配所有数据库。 - 特定的数据库名称或者用逗号分隔的数据库列表。  **默认取值**: 不涉及。
    * user  **参数解释** 声明记录所匹配且允许访问的数据库用户。 **约束限制** 不支持系统用户。 **取值范围** - all：表明该记录匹配所有用户。 - 特定的数据库用户名或者用逗号分隔的用户列表。 **默认取值**: 不涉及。
    * address  **参数解释** 指定与记录匹配且允许访问的IP地址范围。 **约束限制** 当前仅支持IP地址/掩码长度格式。 数据库引擎版本为V2.0-8.1.0及以上支持address配置IPv6的IP。 **取值范围** 支持IPv4和IPv6，可以使用如下形式来表示： IP地址/掩码长度。例如，10.10.0.0/24、2001:250:250:250:250:250:250:175/128。 **默认取值**: 不涉及。
    * method  **参数解释** 声明连接时使用的认证方法。 **约束限制**: 不涉及。 **取值范围** - reject：无条件地拒绝连接。常用于过滤某些主机。 - md5：MD5加密算法安全性低，存在安全风险，不推荐使用，建议使用更安全的加密算法。默认不支持，可通过password_encryption_type参数配置。 - sha256：要求客户端提供一个sha256算法加密的口令进行认证，该口令在传送过程中结合salt（服务器发送给客户端的随机数）的单向sha256加密，增强了安全性。 - sm3：要求客户端提供一个sm3算法加密口令进行认证，该口令在传送过程中结合salt（服务器发送给客户端的随机数）的单向sm3加密，增加了安全性。 - cert：客户端证书认证模式，此模式需进行SSL连接配置且需要客户端提供有效的SSL证书，不需要提供用户密码。cert认证方式只支持hostssl类型的规则。  **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'database' => 'setDatabase',
            'user' => 'setUser',
            'address' => 'setAddress',
            'method' => 'setMethod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释** 客户端连接类型。 **约束限制**: 不涉及。 **取值范围** - host：表示这条记录既接受一个普通的TCP/IP套接字连接，也接受一个经过SSL加密的TCP/IP套接字连接。 - hostssl：表示这条记录只接受一个经过SSL加密的TCP/IP套接字连接。 - hostnossl：表示这条记录只接受一个普通的TCP/IP套接字连接。  **默认取值**: 不涉及。
    * database  **参数解释** 声明记录所匹配且允许访问的数据库，多租特性场景下该参数声明记录所匹配且允许访问的PDB。 - 值replication表示如果请求一个复制连接，则匹配，但复制连接不表示任何特定的数据库。如需使用名为replication的数据库，需在database列使用记录“replication”作为数据库名。 - 多租数据库下， 值replication_pdb1表示如果请求一个名为pdb1数据库的复制连接，则匹配成功。值replication方式只生效Non-PDB。 - PDB复制连接生效配置方式为replication_[pdbname]，pdbname为用户创建PDB数据库时候的名字。 - 如需使用名为replication_pdb1的数据库，需在database列使用记录“replication_pdb1”作为数据库名。  **约束限制**: 不涉及。 **取值范围** - all：表示该记录匹配所有数据库。 - 特定的数据库名称或者用逗号分隔的数据库列表。  **默认取值**: 不涉及。
    * user  **参数解释** 声明记录所匹配且允许访问的数据库用户。 **约束限制** 不支持系统用户。 **取值范围** - all：表明该记录匹配所有用户。 - 特定的数据库用户名或者用逗号分隔的用户列表。 **默认取值**: 不涉及。
    * address  **参数解释** 指定与记录匹配且允许访问的IP地址范围。 **约束限制** 当前仅支持IP地址/掩码长度格式。 数据库引擎版本为V2.0-8.1.0及以上支持address配置IPv6的IP。 **取值范围** 支持IPv4和IPv6，可以使用如下形式来表示： IP地址/掩码长度。例如，10.10.0.0/24、2001:250:250:250:250:250:250:175/128。 **默认取值**: 不涉及。
    * method  **参数解释** 声明连接时使用的认证方法。 **约束限制**: 不涉及。 **取值范围** - reject：无条件地拒绝连接。常用于过滤某些主机。 - md5：MD5加密算法安全性低，存在安全风险，不推荐使用，建议使用更安全的加密算法。默认不支持，可通过password_encryption_type参数配置。 - sha256：要求客户端提供一个sha256算法加密的口令进行认证，该口令在传送过程中结合salt（服务器发送给客户端的随机数）的单向sha256加密，增强了安全性。 - sm3：要求客户端提供一个sm3算法加密口令进行认证，该口令在传送过程中结合salt（服务器发送给客户端的随机数）的单向sm3加密，增加了安全性。 - cert：客户端证书认证模式，此模式需进行SSL连接配置且需要客户端提供有效的SSL证书，不需要提供用户密码。cert认证方式只支持hostssl类型的规则。  **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'database' => 'getDatabase',
            'user' => 'getUser',
            'address' => 'getAddress',
            'method' => 'getMethod'
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
    const TYPE_HOST = 'host';
    const TYPE_HOSTNOSSL = 'hostnossl';
    const TYPE_HOSTSSL = 'hostssl';
    const METHOD_REJECT = 'reject';
    const METHOD_MD5 = 'md5';
    const METHOD_SHA256 = 'sha256';
    const METHOD_SM3 = 'sm3';
    const METHOD_CERT = 'cert';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_HOST,
            self::TYPE_HOSTNOSSL,
            self::TYPE_HOSTSSL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMethodAllowableValues()
    {
        return [
            self::METHOD_REJECT,
            self::METHOD_MD5,
            self::METHOD_SHA256,
            self::METHOD_SM3,
            self::METHOD_CERT,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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

        if ($this->container['database'] === null) {
            $invalidProperties[] = "'database' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
            $allowedValues = $this->getMethodAllowableValues();
                if (!is_null($this->container['method']) && !in_array($this->container['method'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'method', must be one of '%s'",
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
    * Gets type
    *  **参数解释** 客户端连接类型。 **约束限制**: 不涉及。 **取值范围** - host：表示这条记录既接受一个普通的TCP/IP套接字连接，也接受一个经过SSL加密的TCP/IP套接字连接。 - hostssl：表示这条记录只接受一个经过SSL加密的TCP/IP套接字连接。 - hostnossl：表示这条记录只接受一个普通的TCP/IP套接字连接。  **默认取值**: 不涉及。
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
    * @param string $type **参数解释** 客户端连接类型。 **约束限制**: 不涉及。 **取值范围** - host：表示这条记录既接受一个普通的TCP/IP套接字连接，也接受一个经过SSL加密的TCP/IP套接字连接。 - hostssl：表示这条记录只接受一个经过SSL加密的TCP/IP套接字连接。 - hostnossl：表示这条记录只接受一个普通的TCP/IP套接字连接。  **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets database
    *  **参数解释** 声明记录所匹配且允许访问的数据库，多租特性场景下该参数声明记录所匹配且允许访问的PDB。 - 值replication表示如果请求一个复制连接，则匹配，但复制连接不表示任何特定的数据库。如需使用名为replication的数据库，需在database列使用记录“replication”作为数据库名。 - 多租数据库下， 值replication_pdb1表示如果请求一个名为pdb1数据库的复制连接，则匹配成功。值replication方式只生效Non-PDB。 - PDB复制连接生效配置方式为replication_[pdbname]，pdbname为用户创建PDB数据库时候的名字。 - 如需使用名为replication_pdb1的数据库，需在database列使用记录“replication_pdb1”作为数据库名。  **约束限制**: 不涉及。 **取值范围** - all：表示该记录匹配所有数据库。 - 特定的数据库名称或者用逗号分隔的数据库列表。  **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string $database **参数解释** 声明记录所匹配且允许访问的数据库，多租特性场景下该参数声明记录所匹配且允许访问的PDB。 - 值replication表示如果请求一个复制连接，则匹配，但复制连接不表示任何特定的数据库。如需使用名为replication的数据库，需在database列使用记录“replication”作为数据库名。 - 多租数据库下， 值replication_pdb1表示如果请求一个名为pdb1数据库的复制连接，则匹配成功。值replication方式只生效Non-PDB。 - PDB复制连接生效配置方式为replication_[pdbname]，pdbname为用户创建PDB数据库时候的名字。 - 如需使用名为replication_pdb1的数据库，需在database列使用记录“replication_pdb1”作为数据库名。  **约束限制**: 不涉及。 **取值范围** - all：表示该记录匹配所有数据库。 - 特定的数据库名称或者用逗号分隔的数据库列表。  **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets user
    *  **参数解释** 声明记录所匹配且允许访问的数据库用户。 **约束限制** 不支持系统用户。 **取值范围** - all：表明该记录匹配所有用户。 - 特定的数据库用户名或者用逗号分隔的用户列表。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string $user **参数解释** 声明记录所匹配且允许访问的数据库用户。 **约束限制** 不支持系统用户。 **取值范围** - all：表明该记录匹配所有用户。 - 特定的数据库用户名或者用逗号分隔的用户列表。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets address
    *  **参数解释** 指定与记录匹配且允许访问的IP地址范围。 **约束限制** 当前仅支持IP地址/掩码长度格式。 数据库引擎版本为V2.0-8.1.0及以上支持address配置IPv6的IP。 **取值范围** 支持IPv4和IPv6，可以使用如下形式来表示： IP地址/掩码长度。例如，10.10.0.0/24、2001:250:250:250:250:250:250:175/128。 **默认取值**: 不涉及。
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
    * @param string $address **参数解释** 指定与记录匹配且允许访问的IP地址范围。 **约束限制** 当前仅支持IP地址/掩码长度格式。 数据库引擎版本为V2.0-8.1.0及以上支持address配置IPv6的IP。 **取值范围** 支持IPv4和IPv6，可以使用如下形式来表示： IP地址/掩码长度。例如，10.10.0.0/24、2001:250:250:250:250:250:250:175/128。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets method
    *  **参数解释** 声明连接时使用的认证方法。 **约束限制**: 不涉及。 **取值范围** - reject：无条件地拒绝连接。常用于过滤某些主机。 - md5：MD5加密算法安全性低，存在安全风险，不推荐使用，建议使用更安全的加密算法。默认不支持，可通过password_encryption_type参数配置。 - sha256：要求客户端提供一个sha256算法加密的口令进行认证，该口令在传送过程中结合salt（服务器发送给客户端的随机数）的单向sha256加密，增强了安全性。 - sm3：要求客户端提供一个sm3算法加密口令进行认证，该口令在传送过程中结合salt（服务器发送给客户端的随机数）的单向sm3加密，增加了安全性。 - cert：客户端证书认证模式，此模式需进行SSL连接配置且需要客户端提供有效的SSL证书，不需要提供用户密码。cert认证方式只支持hostssl类型的规则。  **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
    * Sets method
    *
    * @param string $method **参数解释** 声明连接时使用的认证方法。 **约束限制**: 不涉及。 **取值范围** - reject：无条件地拒绝连接。常用于过滤某些主机。 - md5：MD5加密算法安全性低，存在安全风险，不推荐使用，建议使用更安全的加密算法。默认不支持，可通过password_encryption_type参数配置。 - sha256：要求客户端提供一个sha256算法加密的口令进行认证，该口令在传送过程中结合salt（服务器发送给客户端的随机数）的单向sha256加密，增强了安全性。 - sm3：要求客户端提供一个sm3算法加密口令进行认证，该口令在传送过程中结合salt（服务器发送给客户端的随机数）的单向sm3加密，增加了安全性。 - cert：客户端证书认证模式，此模式需进行SSL连接配置且需要客户端提供有效的SSL证书，不需要提供用户密码。cert认证方式只支持hostssl类型的规则。  **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setMethod($method)
    {
        $this->container['method'] = $method;
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

