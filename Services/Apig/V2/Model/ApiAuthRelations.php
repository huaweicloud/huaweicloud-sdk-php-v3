<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiAuthRelations implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiAuthRelations';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apiId  API编号
    * authResult  authResult
    * authTime  授权时间
    * id  授权关系编号
    * appId  APP编号
    * authRole  授权者 - PROVIDER：API提供者授权 - CONSUMER：API消费者授权
    * authTunnel  授权通道类型 - NORMAL：普通通道 - GREEN：绿色通道  暂不支持，默认NORMAL
    * authWhitelist  绿色通道的白名单配置
    * authBlacklist  绿色通道的黑名单配置
    * visitParams  访问参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apiId' => 'string',
            'authResult' => '\HuaweiCloud\SDK\Apig\V2\Model\AuthResult',
            'authTime' => '\DateTime',
            'id' => 'string',
            'appId' => 'string',
            'authRole' => 'string',
            'authTunnel' => 'string',
            'authWhitelist' => 'string[]',
            'authBlacklist' => 'string[]',
            'visitParams' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apiId  API编号
    * authResult  authResult
    * authTime  授权时间
    * id  授权关系编号
    * appId  APP编号
    * authRole  授权者 - PROVIDER：API提供者授权 - CONSUMER：API消费者授权
    * authTunnel  授权通道类型 - NORMAL：普通通道 - GREEN：绿色通道  暂不支持，默认NORMAL
    * authWhitelist  绿色通道的白名单配置
    * authBlacklist  绿色通道的黑名单配置
    * visitParams  访问参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apiId' => null,
        'authResult' => null,
        'authTime' => 'date-time',
        'id' => null,
        'appId' => null,
        'authRole' => null,
        'authTunnel' => null,
        'authWhitelist' => null,
        'authBlacklist' => null,
        'visitParams' => null
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
    * apiId  API编号
    * authResult  authResult
    * authTime  授权时间
    * id  授权关系编号
    * appId  APP编号
    * authRole  授权者 - PROVIDER：API提供者授权 - CONSUMER：API消费者授权
    * authTunnel  授权通道类型 - NORMAL：普通通道 - GREEN：绿色通道  暂不支持，默认NORMAL
    * authWhitelist  绿色通道的白名单配置
    * authBlacklist  绿色通道的黑名单配置
    * visitParams  访问参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apiId' => 'api_id',
            'authResult' => 'auth_result',
            'authTime' => 'auth_time',
            'id' => 'id',
            'appId' => 'app_id',
            'authRole' => 'auth_role',
            'authTunnel' => 'auth_tunnel',
            'authWhitelist' => 'auth_whitelist',
            'authBlacklist' => 'auth_blacklist',
            'visitParams' => 'visit_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apiId  API编号
    * authResult  authResult
    * authTime  授权时间
    * id  授权关系编号
    * appId  APP编号
    * authRole  授权者 - PROVIDER：API提供者授权 - CONSUMER：API消费者授权
    * authTunnel  授权通道类型 - NORMAL：普通通道 - GREEN：绿色通道  暂不支持，默认NORMAL
    * authWhitelist  绿色通道的白名单配置
    * authBlacklist  绿色通道的黑名单配置
    * visitParams  访问参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'apiId' => 'setApiId',
            'authResult' => 'setAuthResult',
            'authTime' => 'setAuthTime',
            'id' => 'setId',
            'appId' => 'setAppId',
            'authRole' => 'setAuthRole',
            'authTunnel' => 'setAuthTunnel',
            'authWhitelist' => 'setAuthWhitelist',
            'authBlacklist' => 'setAuthBlacklist',
            'visitParams' => 'setVisitParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apiId  API编号
    * authResult  authResult
    * authTime  授权时间
    * id  授权关系编号
    * appId  APP编号
    * authRole  授权者 - PROVIDER：API提供者授权 - CONSUMER：API消费者授权
    * authTunnel  授权通道类型 - NORMAL：普通通道 - GREEN：绿色通道  暂不支持，默认NORMAL
    * authWhitelist  绿色通道的白名单配置
    * authBlacklist  绿色通道的黑名单配置
    * visitParams  访问参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'apiId' => 'getApiId',
            'authResult' => 'getAuthResult',
            'authTime' => 'getAuthTime',
            'id' => 'getId',
            'appId' => 'getAppId',
            'authRole' => 'getAuthRole',
            'authTunnel' => 'getAuthTunnel',
            'authWhitelist' => 'getAuthWhitelist',
            'authBlacklist' => 'getAuthBlacklist',
            'visitParams' => 'getVisitParams'
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
    const AUTH_ROLE_PROVIDER = 'PROVIDER';
    const AUTH_ROLE_CONSUMER = 'CONSUMER';
    const AUTH_TUNNEL_NORMAL = 'NORMAL';
    const AUTH_TUNNEL_GREEN = 'GREEN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthRoleAllowableValues()
    {
        return [
            self::AUTH_ROLE_PROVIDER,
            self::AUTH_ROLE_CONSUMER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthTunnelAllowableValues()
    {
        return [
            self::AUTH_TUNNEL_NORMAL,
            self::AUTH_TUNNEL_GREEN,
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
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
        $this->container['authResult'] = isset($data['authResult']) ? $data['authResult'] : null;
        $this->container['authTime'] = isset($data['authTime']) ? $data['authTime'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['authRole'] = isset($data['authRole']) ? $data['authRole'] : null;
        $this->container['authTunnel'] = isset($data['authTunnel']) ? $data['authTunnel'] : null;
        $this->container['authWhitelist'] = isset($data['authWhitelist']) ? $data['authWhitelist'] : null;
        $this->container['authBlacklist'] = isset($data['authBlacklist']) ? $data['authBlacklist'] : null;
        $this->container['visitParams'] = isset($data['visitParams']) ? $data['visitParams'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAuthRoleAllowableValues();
                if (!is_null($this->container['authRole']) && !in_array($this->container['authRole'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authRole', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAuthTunnelAllowableValues();
                if (!is_null($this->container['authTunnel']) && !in_array($this->container['authTunnel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authTunnel', must be one of '%s'",
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
    * Gets apiId
    *  API编号
    *
    * @return string|null
    */
    public function getApiId()
    {
        return $this->container['apiId'];
    }

    /**
    * Sets apiId
    *
    * @param string|null $apiId API编号
    *
    * @return $this
    */
    public function setApiId($apiId)
    {
        $this->container['apiId'] = $apiId;
        return $this;
    }

    /**
    * Gets authResult
    *  authResult
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\AuthResult|null
    */
    public function getAuthResult()
    {
        return $this->container['authResult'];
    }

    /**
    * Sets authResult
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\AuthResult|null $authResult authResult
    *
    * @return $this
    */
    public function setAuthResult($authResult)
    {
        $this->container['authResult'] = $authResult;
        return $this;
    }

    /**
    * Gets authTime
    *  授权时间
    *
    * @return \DateTime|null
    */
    public function getAuthTime()
    {
        return $this->container['authTime'];
    }

    /**
    * Sets authTime
    *
    * @param \DateTime|null $authTime 授权时间
    *
    * @return $this
    */
    public function setAuthTime($authTime)
    {
        $this->container['authTime'] = $authTime;
        return $this;
    }

    /**
    * Gets id
    *  授权关系编号
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 授权关系编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets appId
    *  APP编号
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId APP编号
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets authRole
    *  授权者 - PROVIDER：API提供者授权 - CONSUMER：API消费者授权
    *
    * @return string|null
    */
    public function getAuthRole()
    {
        return $this->container['authRole'];
    }

    /**
    * Sets authRole
    *
    * @param string|null $authRole 授权者 - PROVIDER：API提供者授权 - CONSUMER：API消费者授权
    *
    * @return $this
    */
    public function setAuthRole($authRole)
    {
        $this->container['authRole'] = $authRole;
        return $this;
    }

    /**
    * Gets authTunnel
    *  授权通道类型 - NORMAL：普通通道 - GREEN：绿色通道  暂不支持，默认NORMAL
    *
    * @return string|null
    */
    public function getAuthTunnel()
    {
        return $this->container['authTunnel'];
    }

    /**
    * Sets authTunnel
    *
    * @param string|null $authTunnel 授权通道类型 - NORMAL：普通通道 - GREEN：绿色通道  暂不支持，默认NORMAL
    *
    * @return $this
    */
    public function setAuthTunnel($authTunnel)
    {
        $this->container['authTunnel'] = $authTunnel;
        return $this;
    }

    /**
    * Gets authWhitelist
    *  绿色通道的白名单配置
    *
    * @return string[]|null
    */
    public function getAuthWhitelist()
    {
        return $this->container['authWhitelist'];
    }

    /**
    * Sets authWhitelist
    *
    * @param string[]|null $authWhitelist 绿色通道的白名单配置
    *
    * @return $this
    */
    public function setAuthWhitelist($authWhitelist)
    {
        $this->container['authWhitelist'] = $authWhitelist;
        return $this;
    }

    /**
    * Gets authBlacklist
    *  绿色通道的黑名单配置
    *
    * @return string[]|null
    */
    public function getAuthBlacklist()
    {
        return $this->container['authBlacklist'];
    }

    /**
    * Sets authBlacklist
    *
    * @param string[]|null $authBlacklist 绿色通道的黑名单配置
    *
    * @return $this
    */
    public function setAuthBlacklist($authBlacklist)
    {
        $this->container['authBlacklist'] = $authBlacklist;
        return $this;
    }

    /**
    * Gets visitParams
    *  访问参数。
    *
    * @return string|null
    */
    public function getVisitParams()
    {
        return $this->container['visitParams'];
    }

    /**
    * Sets visitParams
    *
    * @param string|null $visitParams 访问参数。
    *
    * @return $this
    */
    public function setVisitParams($visitParams)
    {
        $this->container['visitParams'] = $visitParams;
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

