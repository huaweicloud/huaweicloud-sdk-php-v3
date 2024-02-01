<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserForCreation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserForCreation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  数据库用户名称。 数据库帐号名称在1到32个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。 - 若数据库版本为MySQL5.6，帐号长度为1～16个字符。 - 若数据库版本为MySQL5.7和8.0，帐号长度为1～32个字符。
    * password  数据库帐号密码。  取值范围：  非空，由大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&组成，长度8~32个字符，不能和数据库帐号“name”或“name”的逆序相同。  建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    * comment  数据库用户备注。 取值范围：长度1~512个字符。目前仅支持MySQL 8.0.25及以上版本。
    * isPrivilege  是否创建高权限用户。 • 若为true，则不用传hosts、databases参数。
    * hosts  授权用户登录主机IP列表 • 若IP地址为%，则表示允许所有地址访问MySQL实例。 • 若IP地址为“10.10.10.%”，则表示10.10.10.X的IP地址都可以访问该MySQL实例。 • 支持添加多个IP地址。
    * databases  授权用户数据库权限
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'password' => 'string',
            'comment' => 'string',
            'isPrivilege' => 'bool',
            'hosts' => 'string[]',
            'databases' => '\HuaweiCloud\SDK\Rds\V3\Model\DatabaseWithPrivilegeObject[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  数据库用户名称。 数据库帐号名称在1到32个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。 - 若数据库版本为MySQL5.6，帐号长度为1～16个字符。 - 若数据库版本为MySQL5.7和8.0，帐号长度为1～32个字符。
    * password  数据库帐号密码。  取值范围：  非空，由大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&组成，长度8~32个字符，不能和数据库帐号“name”或“name”的逆序相同。  建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    * comment  数据库用户备注。 取值范围：长度1~512个字符。目前仅支持MySQL 8.0.25及以上版本。
    * isPrivilege  是否创建高权限用户。 • 若为true，则不用传hosts、databases参数。
    * hosts  授权用户登录主机IP列表 • 若IP地址为%，则表示允许所有地址访问MySQL实例。 • 若IP地址为“10.10.10.%”，则表示10.10.10.X的IP地址都可以访问该MySQL实例。 • 支持添加多个IP地址。
    * databases  授权用户数据库权限
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'password' => null,
        'comment' => null,
        'isPrivilege' => null,
        'hosts' => null,
        'databases' => null
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
    * name  数据库用户名称。 数据库帐号名称在1到32个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。 - 若数据库版本为MySQL5.6，帐号长度为1～16个字符。 - 若数据库版本为MySQL5.7和8.0，帐号长度为1～32个字符。
    * password  数据库帐号密码。  取值范围：  非空，由大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&组成，长度8~32个字符，不能和数据库帐号“name”或“name”的逆序相同。  建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    * comment  数据库用户备注。 取值范围：长度1~512个字符。目前仅支持MySQL 8.0.25及以上版本。
    * isPrivilege  是否创建高权限用户。 • 若为true，则不用传hosts、databases参数。
    * hosts  授权用户登录主机IP列表 • 若IP地址为%，则表示允许所有地址访问MySQL实例。 • 若IP地址为“10.10.10.%”，则表示10.10.10.X的IP地址都可以访问该MySQL实例。 • 支持添加多个IP地址。
    * databases  授权用户数据库权限
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'password' => 'password',
            'comment' => 'comment',
            'isPrivilege' => 'is_privilege',
            'hosts' => 'hosts',
            'databases' => 'databases'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  数据库用户名称。 数据库帐号名称在1到32个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。 - 若数据库版本为MySQL5.6，帐号长度为1～16个字符。 - 若数据库版本为MySQL5.7和8.0，帐号长度为1～32个字符。
    * password  数据库帐号密码。  取值范围：  非空，由大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&组成，长度8~32个字符，不能和数据库帐号“name”或“name”的逆序相同。  建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    * comment  数据库用户备注。 取值范围：长度1~512个字符。目前仅支持MySQL 8.0.25及以上版本。
    * isPrivilege  是否创建高权限用户。 • 若为true，则不用传hosts、databases参数。
    * hosts  授权用户登录主机IP列表 • 若IP地址为%，则表示允许所有地址访问MySQL实例。 • 若IP地址为“10.10.10.%”，则表示10.10.10.X的IP地址都可以访问该MySQL实例。 • 支持添加多个IP地址。
    * databases  授权用户数据库权限
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'password' => 'setPassword',
            'comment' => 'setComment',
            'isPrivilege' => 'setIsPrivilege',
            'hosts' => 'setHosts',
            'databases' => 'setDatabases'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  数据库用户名称。 数据库帐号名称在1到32个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。 - 若数据库版本为MySQL5.6，帐号长度为1～16个字符。 - 若数据库版本为MySQL5.7和8.0，帐号长度为1～32个字符。
    * password  数据库帐号密码。  取值范围：  非空，由大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&组成，长度8~32个字符，不能和数据库帐号“name”或“name”的逆序相同。  建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    * comment  数据库用户备注。 取值范围：长度1~512个字符。目前仅支持MySQL 8.0.25及以上版本。
    * isPrivilege  是否创建高权限用户。 • 若为true，则不用传hosts、databases参数。
    * hosts  授权用户登录主机IP列表 • 若IP地址为%，则表示允许所有地址访问MySQL实例。 • 若IP地址为“10.10.10.%”，则表示10.10.10.X的IP地址都可以访问该MySQL实例。 • 支持添加多个IP地址。
    * databases  授权用户数据库权限
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'password' => 'getPassword',
            'comment' => 'getComment',
            'isPrivilege' => 'getIsPrivilege',
            'hosts' => 'getHosts',
            'databases' => 'getDatabases'
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
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['isPrivilege'] = isset($data['isPrivilege']) ? $data['isPrivilege'] : null;
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
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
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
            if ((mb_strlen($this->container['password']) > 32)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['password']) < 8)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 8.";
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
    *  数据库用户名称。 数据库帐号名称在1到32个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。 - 若数据库版本为MySQL5.6，帐号长度为1～16个字符。 - 若数据库版本为MySQL5.7和8.0，帐号长度为1～32个字符。
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
    * @param string $name 数据库用户名称。 数据库帐号名称在1到32个字符之间，由字母、数字、中划线或下划线组成，不能包含其他特殊字符。 - 若数据库版本为MySQL5.6，帐号长度为1～16个字符。 - 若数据库版本为MySQL5.7和8.0，帐号长度为1～32个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets password
    *  数据库帐号密码。  取值范围：  非空，由大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&组成，长度8~32个字符，不能和数据库帐号“name”或“name”的逆序相同。  建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    *
    * @return string
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string $password 数据库帐号密码。  取值范围：  非空，由大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&组成，长度8~32个字符，不能和数据库帐号“name”或“name”的逆序相同。  建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets comment
    *  数据库用户备注。 取值范围：长度1~512个字符。目前仅支持MySQL 8.0.25及以上版本。
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 数据库用户备注。 取值范围：长度1~512个字符。目前仅支持MySQL 8.0.25及以上版本。
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets isPrivilege
    *  是否创建高权限用户。 • 若为true，则不用传hosts、databases参数。
    *
    * @return bool|null
    */
    public function getIsPrivilege()
    {
        return $this->container['isPrivilege'];
    }

    /**
    * Sets isPrivilege
    *
    * @param bool|null $isPrivilege 是否创建高权限用户。 • 若为true，则不用传hosts、databases参数。
    *
    * @return $this
    */
    public function setIsPrivilege($isPrivilege)
    {
        $this->container['isPrivilege'] = $isPrivilege;
        return $this;
    }

    /**
    * Gets hosts
    *  授权用户登录主机IP列表 • 若IP地址为%，则表示允许所有地址访问MySQL实例。 • 若IP地址为“10.10.10.%”，则表示10.10.10.X的IP地址都可以访问该MySQL实例。 • 支持添加多个IP地址。
    *
    * @return string[]|null
    */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
    * Sets hosts
    *
    * @param string[]|null $hosts 授权用户登录主机IP列表 • 若IP地址为%，则表示允许所有地址访问MySQL实例。 • 若IP地址为“10.10.10.%”，则表示10.10.10.X的IP地址都可以访问该MySQL实例。 • 支持添加多个IP地址。
    *
    * @return $this
    */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;
        return $this;
    }

    /**
    * Gets databases
    *  授权用户数据库权限
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\DatabaseWithPrivilegeObject[]|null
    */
    public function getDatabases()
    {
        return $this->container['databases'];
    }

    /**
    * Sets databases
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\DatabaseWithPrivilegeObject[]|null $databases 授权用户数据库权限
    *
    * @return $this
    */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;
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

