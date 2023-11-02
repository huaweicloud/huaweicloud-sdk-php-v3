<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApigIamUserDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApigIamUserDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userId  用户id
    * userName  用户名
    * domainId  租户id
    * domainName  租户名
    * isDomainOwner  是否是空间拥有者
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userId' => 'string',
            'userName' => 'string',
            'domainId' => 'string',
            'domainName' => 'string',
            'isDomainOwner' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userId  用户id
    * userName  用户名
    * domainId  租户id
    * domainName  租户名
    * isDomainOwner  是否是空间拥有者
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userId' => null,
        'userName' => null,
        'domainId' => null,
        'domainName' => null,
        'isDomainOwner' => null
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
    * userId  用户id
    * userName  用户名
    * domainId  租户id
    * domainName  租户名
    * isDomainOwner  是否是空间拥有者
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userId' => 'user_id',
            'userName' => 'user_name',
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'isDomainOwner' => 'is_domain_owner'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userId  用户id
    * userName  用户名
    * domainId  租户id
    * domainName  租户名
    * isDomainOwner  是否是空间拥有者
    *
    * @var string[]
    */
    protected static $setters = [
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'isDomainOwner' => 'setIsDomainOwner'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userId  用户id
    * userName  用户名
    * domainId  租户id
    * domainName  租户名
    * isDomainOwner  是否是空间拥有者
    *
    * @var string[]
    */
    protected static $getters = [
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'isDomainOwner' => 'getIsDomainOwner'
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['isDomainOwner'] = isset($data['isDomainOwner']) ? $data['isDomainOwner'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['userId']) && !preg_match("/^[a-z0-9]{32}$/", $this->container['userId'])) {
                $invalidProperties[] = "invalid value for 'userId', must be conform to the pattern /^[a-z0-9]{32}$/.";
            }
            if (!is_null($this->container['userName']) && !preg_match("/^[A-Za-z0-9_\\-]{1,255}$/", $this->container['userName'])) {
                $invalidProperties[] = "invalid value for 'userName', must be conform to the pattern /^[A-Za-z0-9_\\-]{1,255}$/.";
            }
            if (!is_null($this->container['domainId']) && !preg_match("/^[a-z0-9]{32}$/", $this->container['domainId'])) {
                $invalidProperties[] = "invalid value for 'domainId', must be conform to the pattern /^[a-z0-9]{32}$/.";
            }
            if (!is_null($this->container['domainName']) && !preg_match("/^[A-Za-z0-9_\\-]{1,255}$/", $this->container['domainName'])) {
                $invalidProperties[] = "invalid value for 'domainName', must be conform to the pattern /^[A-Za-z0-9_\\-]{1,255}$/.";
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
    * Gets userId
    *  用户id
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户id
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets domainId
    *  租户id
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets domainName
    *  租户名
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 租户名
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets isDomainOwner
    *  是否是空间拥有者
    *
    * @return bool|null
    */
    public function getIsDomainOwner()
    {
        return $this->container['isDomainOwner'];
    }

    /**
    * Sets isDomainOwner
    *
    * @param bool|null $isDomainOwner 是否是空间拥有者
    *
    * @return $this
    */
    public function setIsDomainOwner($isDomainOwner)
    {
        $this->container['isDomainOwner'] = $isDomainOwner;
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

