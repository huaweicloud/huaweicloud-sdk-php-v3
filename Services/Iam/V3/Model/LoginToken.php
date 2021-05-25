<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoginToken implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoginToken';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  账号ID。
    * expiresAt  logintoken的过期时间，默认10min。
    * method  认证方法。当认证用户为华为云用户时，该字段内容为“token”，当认证用户为自定义代理用户时，该字段内容为“federation_proxy”。
    * userId  用户ID。
    * userName  用户名。
    * sessionId  会话ID。
    * sessionName  自定义代理用户名。 > - [通过委托获取临时访问密钥和securitytoken](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product=IAM&api=CreateTemporaryAccessKeyByAgency)且请求体中填写session_user.name参数时，会返回该字段。该字段的值即为session_user.name所填写的值。
    * assumedBy  assumedBy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'expiresAt' => 'string',
            'method' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'sessionId' => 'string',
            'sessionName' => 'string',
            'assumedBy' => '\HuaweiCloud\SDK\Iam\V3\Model\LoginTokenAssumedBy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  账号ID。
    * expiresAt  logintoken的过期时间，默认10min。
    * method  认证方法。当认证用户为华为云用户时，该字段内容为“token”，当认证用户为自定义代理用户时，该字段内容为“federation_proxy”。
    * userId  用户ID。
    * userName  用户名。
    * sessionId  会话ID。
    * sessionName  自定义代理用户名。 > - [通过委托获取临时访问密钥和securitytoken](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product=IAM&api=CreateTemporaryAccessKeyByAgency)且请求体中填写session_user.name参数时，会返回该字段。该字段的值即为session_user.name所填写的值。
    * assumedBy  assumedBy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'expiresAt' => null,
        'method' => null,
        'userId' => null,
        'userName' => null,
        'sessionId' => null,
        'sessionName' => null,
        'assumedBy' => null
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
    * domainId  账号ID。
    * expiresAt  logintoken的过期时间，默认10min。
    * method  认证方法。当认证用户为华为云用户时，该字段内容为“token”，当认证用户为自定义代理用户时，该字段内容为“federation_proxy”。
    * userId  用户ID。
    * userName  用户名。
    * sessionId  会话ID。
    * sessionName  自定义代理用户名。 > - [通过委托获取临时访问密钥和securitytoken](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product=IAM&api=CreateTemporaryAccessKeyByAgency)且请求体中填写session_user.name参数时，会返回该字段。该字段的值即为session_user.name所填写的值。
    * assumedBy  assumedBy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'expiresAt' => 'expires_at',
            'method' => 'method',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'sessionId' => 'session_id',
            'sessionName' => 'session_name',
            'assumedBy' => 'assumed_by'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  账号ID。
    * expiresAt  logintoken的过期时间，默认10min。
    * method  认证方法。当认证用户为华为云用户时，该字段内容为“token”，当认证用户为自定义代理用户时，该字段内容为“federation_proxy”。
    * userId  用户ID。
    * userName  用户名。
    * sessionId  会话ID。
    * sessionName  自定义代理用户名。 > - [通过委托获取临时访问密钥和securitytoken](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product=IAM&api=CreateTemporaryAccessKeyByAgency)且请求体中填写session_user.name参数时，会返回该字段。该字段的值即为session_user.name所填写的值。
    * assumedBy  assumedBy
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'expiresAt' => 'setExpiresAt',
            'method' => 'setMethod',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'sessionId' => 'setSessionId',
            'sessionName' => 'setSessionName',
            'assumedBy' => 'setAssumedBy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  账号ID。
    * expiresAt  logintoken的过期时间，默认10min。
    * method  认证方法。当认证用户为华为云用户时，该字段内容为“token”，当认证用户为自定义代理用户时，该字段内容为“federation_proxy”。
    * userId  用户ID。
    * userName  用户名。
    * sessionId  会话ID。
    * sessionName  自定义代理用户名。 > - [通过委托获取临时访问密钥和securitytoken](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product=IAM&api=CreateTemporaryAccessKeyByAgency)且请求体中填写session_user.name参数时，会返回该字段。该字段的值即为session_user.name所填写的值。
    * assumedBy  assumedBy
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'expiresAt' => 'getExpiresAt',
            'method' => 'getMethod',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'sessionId' => 'getSessionId',
            'sessionName' => 'getSessionName',
            'assumedBy' => 'getAssumedBy'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['expiresAt'] = isset($data['expiresAt']) ? $data['expiresAt'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['sessionName'] = isset($data['sessionName']) ? $data['sessionName'] : null;
        $this->container['assumedBy'] = isset($data['assumedBy']) ? $data['assumedBy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['expiresAt'] === null) {
            $invalidProperties[] = "'expiresAt' can't be null";
        }
        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
        if ($this->container['sessionId'] === null) {
            $invalidProperties[] = "'sessionId' can't be null";
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
    * Gets domainId
    *  账号ID。
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 账号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets expiresAt
    *  logintoken的过期时间，默认10min。
    *
    * @return string
    */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
    * Sets expiresAt
    *
    * @param string $expiresAt logintoken的过期时间，默认10min。
    *
    * @return $this
    */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;
        return $this;
    }

    /**
    * Gets method
    *  认证方法。当认证用户为华为云用户时，该字段内容为“token”，当认证用户为自定义代理用户时，该字段内容为“federation_proxy”。
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
    * @param string $method 认证方法。当认证用户为华为云用户时，该字段内容为“token”，当认证用户为自定义代理用户时，该字段内容为“federation_proxy”。
    *
    * @return $this
    */
    public function setMethod($method)
    {
        $this->container['method'] = $method;
        return $this;
    }

    /**
    * Gets userId
    *  用户ID。
    *
    * @return string
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string $userId 用户ID。
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
    *  用户名。
    *
    * @return string
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string $userName 用户名。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets sessionId
    *  会话ID。
    *
    * @return string
    */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
    * Sets sessionId
    *
    * @param string $sessionId 会话ID。
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
    }

    /**
    * Gets sessionName
    *  自定义代理用户名。 > - [通过委托获取临时访问密钥和securitytoken](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product=IAM&api=CreateTemporaryAccessKeyByAgency)且请求体中填写session_user.name参数时，会返回该字段。该字段的值即为session_user.name所填写的值。
    *
    * @return string|null
    */
    public function getSessionName()
    {
        return $this->container['sessionName'];
    }

    /**
    * Sets sessionName
    *
    * @param string|null $sessionName 自定义代理用户名。 > - [通过委托获取临时访问密钥和securitytoken](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product=IAM&api=CreateTemporaryAccessKeyByAgency)且请求体中填写session_user.name参数时，会返回该字段。该字段的值即为session_user.name所填写的值。
    *
    * @return $this
    */
    public function setSessionName($sessionName)
    {
        $this->container['sessionName'] = $sessionName;
        return $this;
    }

    /**
    * Gets assumedBy
    *  assumedBy
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\LoginTokenAssumedBy|null
    */
    public function getAssumedBy()
    {
        return $this->container['assumedBy'];
    }

    /**
    * Sets assumedBy
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\LoginTokenAssumedBy|null $assumedBy assumedBy
    *
    * @return $this
    */
    public function setAssumedBy($assumedBy)
    {
        $this->container['assumedBy'] = $assumedBy;
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

