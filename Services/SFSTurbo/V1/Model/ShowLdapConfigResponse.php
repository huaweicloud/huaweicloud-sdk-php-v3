<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLdapConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLdapConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  ldap服务器的url
    * baseDn  数据库中的域
    * userDn  用户区别名
    * filterCondition  过滤条件。保留字段，暂不支持
    * backupUrl  ldap备节点的url
    * schema  ldap的schema，不填写则默认为RFC2307
    * searchTimeout  ldap搜索的超时时间，单位为秒。不填写则默认为3秒
    * allowLocalUser  访问ldap服务器失败后是否允许使用本地用户鉴权
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'baseDn' => 'string',
            'userDn' => 'string',
            'filterCondition' => 'string',
            'backupUrl' => 'string',
            'schema' => 'string',
            'searchTimeout' => 'int',
            'allowLocalUser' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  ldap服务器的url
    * baseDn  数据库中的域
    * userDn  用户区别名
    * filterCondition  过滤条件。保留字段，暂不支持
    * backupUrl  ldap备节点的url
    * schema  ldap的schema，不填写则默认为RFC2307
    * searchTimeout  ldap搜索的超时时间，单位为秒。不填写则默认为3秒
    * allowLocalUser  访问ldap服务器失败后是否允许使用本地用户鉴权
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'baseDn' => null,
        'userDn' => null,
        'filterCondition' => null,
        'backupUrl' => null,
        'schema' => null,
        'searchTimeout' => null,
        'allowLocalUser' => null
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
    * url  ldap服务器的url
    * baseDn  数据库中的域
    * userDn  用户区别名
    * filterCondition  过滤条件。保留字段，暂不支持
    * backupUrl  ldap备节点的url
    * schema  ldap的schema，不填写则默认为RFC2307
    * searchTimeout  ldap搜索的超时时间，单位为秒。不填写则默认为3秒
    * allowLocalUser  访问ldap服务器失败后是否允许使用本地用户鉴权
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'baseDn' => 'base_dn',
            'userDn' => 'user_dn',
            'filterCondition' => 'filter_condition',
            'backupUrl' => 'backup_url',
            'schema' => 'schema',
            'searchTimeout' => 'search_timeout',
            'allowLocalUser' => 'allow_local_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  ldap服务器的url
    * baseDn  数据库中的域
    * userDn  用户区别名
    * filterCondition  过滤条件。保留字段，暂不支持
    * backupUrl  ldap备节点的url
    * schema  ldap的schema，不填写则默认为RFC2307
    * searchTimeout  ldap搜索的超时时间，单位为秒。不填写则默认为3秒
    * allowLocalUser  访问ldap服务器失败后是否允许使用本地用户鉴权
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'baseDn' => 'setBaseDn',
            'userDn' => 'setUserDn',
            'filterCondition' => 'setFilterCondition',
            'backupUrl' => 'setBackupUrl',
            'schema' => 'setSchema',
            'searchTimeout' => 'setSearchTimeout',
            'allowLocalUser' => 'setAllowLocalUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  ldap服务器的url
    * baseDn  数据库中的域
    * userDn  用户区别名
    * filterCondition  过滤条件。保留字段，暂不支持
    * backupUrl  ldap备节点的url
    * schema  ldap的schema，不填写则默认为RFC2307
    * searchTimeout  ldap搜索的超时时间，单位为秒。不填写则默认为3秒
    * allowLocalUser  访问ldap服务器失败后是否允许使用本地用户鉴权
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'baseDn' => 'getBaseDn',
            'userDn' => 'getUserDn',
            'filterCondition' => 'getFilterCondition',
            'backupUrl' => 'getBackupUrl',
            'schema' => 'getSchema',
            'searchTimeout' => 'getSearchTimeout',
            'allowLocalUser' => 'getAllowLocalUser'
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
        $this->container['filterCondition'] = isset($data['filterCondition']) ? $data['filterCondition'] : null;
        $this->container['backupUrl'] = isset($data['backupUrl']) ? $data['backupUrl'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['searchTimeout'] = isset($data['searchTimeout']) ? $data['searchTimeout'] : null;
        $this->container['allowLocalUser'] = isset($data['allowLocalUser']) ? $data['allowLocalUser'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  ldap服务器的url
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url ldap服务器的url
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
    * @return string|null
    */
    public function getBaseDn()
    {
        return $this->container['baseDn'];
    }

    /**
    * Sets baseDn
    *
    * @param string|null $baseDn 数据库中的域
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
    *  ldap备节点的url
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
    * @param string|null $backupUrl ldap备节点的url
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
    *  ldap的schema，不填写则默认为RFC2307
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
    * @param string|null $schema ldap的schema，不填写则默认为RFC2307
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
    *  ldap搜索的超时时间，单位为秒。不填写则默认为3秒
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
    * @param int|null $searchTimeout ldap搜索的超时时间，单位为秒。不填写则默认为3秒
    *
    * @return $this
    */
    public function setSearchTimeout($searchTimeout)
    {
        $this->container['searchTimeout'] = $searchTimeout;
        return $this;
    }

    /**
    * Gets allowLocalUser
    *  访问ldap服务器失败后是否允许使用本地用户鉴权
    *
    * @return string|null
    */
    public function getAllowLocalUser()
    {
        return $this->container['allowLocalUser'];
    }

    /**
    * Sets allowLocalUser
    *
    * @param string|null $allowLocalUser 访问ldap服务器失败后是否允许使用本地用户鉴权
    *
    * @return $this
    */
    public function setAllowLocalUser($allowLocalUser)
    {
        $this->container['allowLocalUser'] = $allowLocalUser;
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

