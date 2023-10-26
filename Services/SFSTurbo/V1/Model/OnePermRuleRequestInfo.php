<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OnePermRuleRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OnePermRuleRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ipCidr  授权对象的IP地址或网段
    * rwType  -| 授权对象的读写权限 rw：默认选项，以读写的方式共享 ro：以只读的方式共享
    * userType  -| 授权对象的系统用户对文件系统的访问权限。取值如下： no_root_squash：客户端使用的是root用户时，映射到NFS服务器的用户依然为root用户。 root_squash：客户端使用的是root用户时，映射到NFS服务器的用户为NFS的匿名用户（nfsnobody）。 all_squash：默认选项。所有访问NFS服务器的客户端的用户都映射为匿名用户。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ipCidr' => 'string',
            'rwType' => 'string',
            'userType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ipCidr  授权对象的IP地址或网段
    * rwType  -| 授权对象的读写权限 rw：默认选项，以读写的方式共享 ro：以只读的方式共享
    * userType  -| 授权对象的系统用户对文件系统的访问权限。取值如下： no_root_squash：客户端使用的是root用户时，映射到NFS服务器的用户依然为root用户。 root_squash：客户端使用的是root用户时，映射到NFS服务器的用户为NFS的匿名用户（nfsnobody）。 all_squash：默认选项。所有访问NFS服务器的客户端的用户都映射为匿名用户。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ipCidr' => null,
        'rwType' => null,
        'userType' => null
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
    * ipCidr  授权对象的IP地址或网段
    * rwType  -| 授权对象的读写权限 rw：默认选项，以读写的方式共享 ro：以只读的方式共享
    * userType  -| 授权对象的系统用户对文件系统的访问权限。取值如下： no_root_squash：客户端使用的是root用户时，映射到NFS服务器的用户依然为root用户。 root_squash：客户端使用的是root用户时，映射到NFS服务器的用户为NFS的匿名用户（nfsnobody）。 all_squash：默认选项。所有访问NFS服务器的客户端的用户都映射为匿名用户。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ipCidr' => 'ip_cidr',
            'rwType' => 'rw_type',
            'userType' => 'user_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ipCidr  授权对象的IP地址或网段
    * rwType  -| 授权对象的读写权限 rw：默认选项，以读写的方式共享 ro：以只读的方式共享
    * userType  -| 授权对象的系统用户对文件系统的访问权限。取值如下： no_root_squash：客户端使用的是root用户时，映射到NFS服务器的用户依然为root用户。 root_squash：客户端使用的是root用户时，映射到NFS服务器的用户为NFS的匿名用户（nfsnobody）。 all_squash：默认选项。所有访问NFS服务器的客户端的用户都映射为匿名用户。
    *
    * @var string[]
    */
    protected static $setters = [
            'ipCidr' => 'setIpCidr',
            'rwType' => 'setRwType',
            'userType' => 'setUserType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ipCidr  授权对象的IP地址或网段
    * rwType  -| 授权对象的读写权限 rw：默认选项，以读写的方式共享 ro：以只读的方式共享
    * userType  -| 授权对象的系统用户对文件系统的访问权限。取值如下： no_root_squash：客户端使用的是root用户时，映射到NFS服务器的用户依然为root用户。 root_squash：客户端使用的是root用户时，映射到NFS服务器的用户为NFS的匿名用户（nfsnobody）。 all_squash：默认选项。所有访问NFS服务器的客户端的用户都映射为匿名用户。
    *
    * @var string[]
    */
    protected static $getters = [
            'ipCidr' => 'getIpCidr',
            'rwType' => 'getRwType',
            'userType' => 'getUserType'
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
        $this->container['ipCidr'] = isset($data['ipCidr']) ? $data['ipCidr'] : null;
        $this->container['rwType'] = isset($data['rwType']) ? $data['rwType'] : null;
        $this->container['userType'] = isset($data['userType']) ? $data['userType'] : null;
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
    * Gets ipCidr
    *  授权对象的IP地址或网段
    *
    * @return string|null
    */
    public function getIpCidr()
    {
        return $this->container['ipCidr'];
    }

    /**
    * Sets ipCidr
    *
    * @param string|null $ipCidr 授权对象的IP地址或网段
    *
    * @return $this
    */
    public function setIpCidr($ipCidr)
    {
        $this->container['ipCidr'] = $ipCidr;
        return $this;
    }

    /**
    * Gets rwType
    *  -| 授权对象的读写权限 rw：默认选项，以读写的方式共享 ro：以只读的方式共享
    *
    * @return string|null
    */
    public function getRwType()
    {
        return $this->container['rwType'];
    }

    /**
    * Sets rwType
    *
    * @param string|null $rwType -| 授权对象的读写权限 rw：默认选项，以读写的方式共享 ro：以只读的方式共享
    *
    * @return $this
    */
    public function setRwType($rwType)
    {
        $this->container['rwType'] = $rwType;
        return $this;
    }

    /**
    * Gets userType
    *  -| 授权对象的系统用户对文件系统的访问权限。取值如下： no_root_squash：客户端使用的是root用户时，映射到NFS服务器的用户依然为root用户。 root_squash：客户端使用的是root用户时，映射到NFS服务器的用户为NFS的匿名用户（nfsnobody）。 all_squash：默认选项。所有访问NFS服务器的客户端的用户都映射为匿名用户。
    *
    * @return string|null
    */
    public function getUserType()
    {
        return $this->container['userType'];
    }

    /**
    * Sets userType
    *
    * @param string|null $userType -| 授权对象的系统用户对文件系统的访问权限。取值如下： no_root_squash：客户端使用的是root用户时，映射到NFS服务器的用户依然为root用户。 root_squash：客户端使用的是root用户时，映射到NFS服务器的用户为NFS的匿名用户（nfsnobody）。 all_squash：默认选项。所有访问NFS服务器的客户端的用户都映射为匿名用户。
    *
    * @return $this
    */
    public function setUserType($userType)
    {
        $this->container['userType'] = $userType;
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

