<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateLdapConfigRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateLdapConfigRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  ldap服务器的url
    * baseDn  数据库中的域
    * userDn  用户区别名
    * password  ldap认证密码
    * vpcId  vpc的id
    * filterCondition  过滤条件。保留字段，暂不支持
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'baseDn' => 'string',
            'userDn' => 'string',
            'password' => 'string',
            'vpcId' => 'string',
            'filterCondition' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  ldap服务器的url
    * baseDn  数据库中的域
    * userDn  用户区别名
    * password  ldap认证密码
    * vpcId  vpc的id
    * filterCondition  过滤条件。保留字段，暂不支持
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'baseDn' => null,
        'userDn' => null,
        'password' => null,
        'vpcId' => null,
        'filterCondition' => null
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
    * password  ldap认证密码
    * vpcId  vpc的id
    * filterCondition  过滤条件。保留字段，暂不支持
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'baseDn' => 'base_dn',
            'userDn' => 'user_dn',
            'password' => 'password',
            'vpcId' => 'vpc_id',
            'filterCondition' => 'filter_condition'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  ldap服务器的url
    * baseDn  数据库中的域
    * userDn  用户区别名
    * password  ldap认证密码
    * vpcId  vpc的id
    * filterCondition  过滤条件。保留字段，暂不支持
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'baseDn' => 'setBaseDn',
            'userDn' => 'setUserDn',
            'password' => 'setPassword',
            'vpcId' => 'setVpcId',
            'filterCondition' => 'setFilterCondition'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  ldap服务器的url
    * baseDn  数据库中的域
    * userDn  用户区别名
    * password  ldap认证密码
    * vpcId  vpc的id
    * filterCondition  过滤条件。保留字段，暂不支持
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'baseDn' => 'getBaseDn',
            'userDn' => 'getUserDn',
            'password' => 'getPassword',
            'vpcId' => 'getVpcId',
            'filterCondition' => 'getFilterCondition'
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
    * Gets password
    *  ldap认证密码
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
    * @param string|null $password ldap认证密码
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
    *  vpc的id
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
    * @param string|null $vpcId vpc的id
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

