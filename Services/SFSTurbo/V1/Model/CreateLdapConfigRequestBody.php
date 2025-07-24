<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateLdapConfigRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateLdapConfigRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  LDAP服务器的url，固定格式为 ldap://{ip_address}:{port_number} 或 ldaps://{ip_address}:{port_number}，例如ldap://192.168.xx.xx:60000
    * baseDn  数据库中的域
    * userDn  用户区别名
    * password  LDAP认证密码
    * vpcId  一般不涉及。仅在SFS Turbo支持多VPC的场景下，需要指定LDAP服务器可连通的VPC的id。
    * filterCondition  过滤条件。保留字段，暂不支持
    * backupUrl  LDAP备节点的url，固定格式为 ldap://{ip_address}:{port_number} 或 ldaps://{ip_address}:{port_number}，例如ldap://192.168.xx.xx:60000
    * schema  LDAP的schema，不填写则默认为RFC2307
    * searchTimeout  LDAP搜索的超时时间，单位为秒。不填写则默认为3秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'baseDn' => 'string',
            'userDn' => 'string',
            'password' => 'string',
            'vpcId' => 'string',
            'filterCondition' => 'string',
            'backupUrl' => 'string',
            'schema' => 'string',
            'searchTimeout' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  LDAP服务器的url，固定格式为 ldap://{ip_address}:{port_number} 或 ldaps://{ip_address}:{port_number}，例如ldap://192.168.xx.xx:60000
    * baseDn  数据库中的域
    * userDn  用户区别名
    * password  LDAP认证密码
    * vpcId  一般不涉及。仅在SFS Turbo支持多VPC的场景下，需要指定LDAP服务器可连通的VPC的id。
    * filterCondition  过滤条件。保留字段，暂不支持
    * backupUrl  LDAP备节点的url，固定格式为 ldap://{ip_address}:{port_number} 或 ldaps://{ip_address}:{port_number}，例如ldap://192.168.xx.xx:60000
    * schema  LDAP的schema，不填写则默认为RFC2307
    * searchTimeout  LDAP搜索的超时时间，单位为秒。不填写则默认为3秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'baseDn' => null,
        'userDn' => null,
        'password' => null,
        'vpcId' => null,
        'filterCondition' => null,
        'backupUrl' => null,
        'schema' => null,
        'searchTimeout' => 'int32'
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
    * url  LDAP服务器的url，固定格式为 ldap://{ip_address}:{port_number} 或 ldaps://{ip_address}:{port_number}，例如ldap://192.168.xx.xx:60000
    * baseDn  数据库中的域
    * userDn  用户区别名
    * password  LDAP认证密码
    * vpcId  一般不涉及。仅在SFS Turbo支持多VPC的场景下，需要指定LDAP服务器可连通的VPC的id。
    * filterCondition  过滤条件。保留字段，暂不支持
    * backupUrl  LDAP备节点的url，固定格式为 ldap://{ip_address}:{port_number} 或 ldaps://{ip_address}:{port_number}，例如ldap://192.168.xx.xx:60000
    * schema  LDAP的schema，不填写则默认为RFC2307
    * searchTimeout  LDAP搜索的超时时间，单位为秒。不填写则默认为3秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'baseDn' => 'base_dn',
            'userDn' => 'user_dn',
            'password' => 'password',
            'vpcId' => 'vpc_id',
            'filterCondition' => 'filter_condition',
            'backupUrl' => 'backup_url',
            'schema' => 'schema',
            'searchTimeout' => 'search_timeout'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  LDAP服务器的url，固定格式为 ldap://{ip_address}:{port_number} 或 ldaps://{ip_address}:{port_number}，例如ldap://192.168.xx.xx:60000
    * baseDn  数据库中的域
    * userDn  用户区别名
    * password  LDAP认证密码
    * vpcId  一般不涉及。仅在SFS Turbo支持多VPC的场景下，需要指定LDAP服务器可连通的VPC的id。
    * filterCondition  过滤条件。保留字段，暂不支持
    * backupUrl  LDAP备节点的url，固定格式为 ldap://{ip_address}:{port_number} 或 ldaps://{ip_address}:{port_number}，例如ldap://192.168.xx.xx:60000
    * schema  LDAP的schema，不填写则默认为RFC2307
    * searchTimeout  LDAP搜索的超时时间，单位为秒。不填写则默认为3秒
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'baseDn' => 'setBaseDn',
            'userDn' => 'setUserDn',
            'password' => 'setPassword',
            'vpcId' => 'setVpcId',
            'filterCondition' => 'setFilterCondition',
            'backupUrl' => 'setBackupUrl',
            'schema' => 'setSchema',
            'searchTimeout' => 'setSearchTimeout'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  LDAP服务器的url，固定格式为 ldap://{ip_address}:{port_number} 或 ldaps://{ip_address}:{port_number}，例如ldap://192.168.xx.xx:60000
    * baseDn  数据库中的域
    * userDn  用户区别名
    * password  LDAP认证密码
    * vpcId  一般不涉及。仅在SFS Turbo支持多VPC的场景下，需要指定LDAP服务器可连通的VPC的id。
    * filterCondition  过滤条件。保留字段，暂不支持
    * backupUrl  LDAP备节点的url，固定格式为 ldap://{ip_address}:{port_number} 或 ldaps://{ip_address}:{port_number}，例如ldap://192.168.xx.xx:60000
    * schema  LDAP的schema，不填写则默认为RFC2307
    * searchTimeout  LDAP搜索的超时时间，单位为秒。不填写则默认为3秒
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'baseDn' => 'getBaseDn',
            'userDn' => 'getUserDn',
            'password' => 'getPassword',
            'vpcId' => 'getVpcId',
            'filterCondition' => 'getFilterCondition',
            'backupUrl' => 'getBackupUrl',
            'schema' => 'getSchema',
            'searchTimeout' => 'getSearchTimeout'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['baseDn'] = isset($data['baseDn']) ? $data['baseDn'] : null;
        $this->container['userDn'] = isset($data['userDn']) ? $data['userDn'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['filterCondition'] = isset($data['filterCondition']) ? $data['filterCondition'] : null;
        $this->container['backupUrl'] = isset($data['backupUrl']) ? $data['backupUrl'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['searchTimeout'] = isset($data['searchTimeout']) ? $data['searchTimeout'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['baseDn'] === null) {
            $invalidProperties[] = "'baseDn' can't be null";
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
    * Gets url
    *  LDAP服务器的url，固定格式为 ldap://{ip_address}:{port_number} 或 ldaps://{ip_address}:{port_number}，例如ldap://192.168.xx.xx:60000
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url LDAP服务器的url，固定格式为 ldap://{ip_address}:{port_number} 或 ldaps://{ip_address}:{port_number}，例如ldap://192.168.xx.xx:60000
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets baseDn
    *  数据库中的域
    *
    * @return string
    */
    public function getBaseDn()
    {
        return $this->container['baseDn'];
    }

    /**
    * Sets baseDn
    *
    * @param string $baseDn 数据库中的域
    *
    * @return $this
    */
    public function setBaseDn($baseDn)
    {
        $this->container['baseDn'] = $baseDn;
        return $this;
    }

    /**
    * Gets userDn
    *  用户区别名
    *
    * @return string|null
    */
    public function getUserDn()
    {
        return $this->container['userDn'];
    }

    /**
    * Sets userDn
    *
    * @param string|null $userDn 用户区别名
    *
    * @return $this
    */
    public function setUserDn($userDn)
    {
        $this->container['userDn'] = $userDn;
        return $this;
    }

    /**
    * Gets password
    *  LDAP认证密码
    *
    * @return string|null
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string|null $password LDAP认证密码
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets vpcId
    *  一般不涉及。仅在SFS Turbo支持多VPC的场景下，需要指定LDAP服务器可连通的VPC的id。
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 一般不涉及。仅在SFS Turbo支持多VPC的场景下，需要指定LDAP服务器可连通的VPC的id。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets filterCondition
    *  过滤条件。保留字段，暂不支持
    *
    * @return string|null
    */
    public function getFilterCondition()
    {
        return $this->container['filterCondition'];
    }

    /**
    * Sets filterCondition
    *
    * @param string|null $filterCondition 过滤条件。保留字段，暂不支持
    *
    * @return $this
    */
    public function setFilterCondition($filterCondition)
    {
        $this->container['filterCondition'] = $filterCondition;
        return $this;
    }

    /**
    * Gets backupUrl
    *  LDAP备节点的url，固定格式为 ldap://{ip_address}:{port_number} 或 ldaps://{ip_address}:{port_number}，例如ldap://192.168.xx.xx:60000
    *
    * @return string|null
    */
    public function getBackupUrl()
    {
        return $this->container['backupUrl'];
    }

    /**
    * Sets backupUrl
    *
    * @param string|null $backupUrl LDAP备节点的url，固定格式为 ldap://{ip_address}:{port_number} 或 ldaps://{ip_address}:{port_number}，例如ldap://192.168.xx.xx:60000
    *
    * @return $this
    */
    public function setBackupUrl($backupUrl)
    {
        $this->container['backupUrl'] = $backupUrl;
        return $this;
    }

    /**
    * Gets schema
    *  LDAP的schema，不填写则默认为RFC2307
    *
    * @return string|null
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param string|null $schema LDAP的schema，不填写则默认为RFC2307
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets searchTimeout
    *  LDAP搜索的超时时间，单位为秒。不填写则默认为3秒
    *
    * @return int|null
    */
    public function getSearchTimeout()
    {
        return $this->container['searchTimeout'];
    }

    /**
    * Sets searchTimeout
    *
    * @param int|null $searchTimeout LDAP搜索的超时时间，单位为秒。不填写则默认为3秒
    *
    * @return $this
    */
    public function setSearchTimeout($searchTimeout)
    {
        $this->container['searchTimeout'] = $searchTimeout;
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

