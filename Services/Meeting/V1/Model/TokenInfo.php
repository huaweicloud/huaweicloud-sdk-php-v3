<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TokenInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TokenInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * token  会控Token。有效期半个小时。
    * tmpWsToken  会控WebSocket建链鉴权Token。
    * wsUrl  会控WebSocket建链URL。
    * role  会议中的角色。 * 0 ：普通与会者 * 1 ：会议主持人
    * expireTime  会控Token过期时间戳（单位：毫秒）。
    * userId  会议预定者的用户UUID。
    * orgId  会议所属企业ID。
    * participantId  终端请求时，返回终端入会后会场ID。 > 该参数将废弃，请勿使用。
    * confTokenExpireTime  会控Token有效时长（单位秒）。
    * vmrCurrentConfId  云会议室会议的当前会议ID。
    * supportNotifyType  会控WebSocket消息推送支持类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'token' => 'string',
            'tmpWsToken' => 'string',
            'wsUrl' => 'string',
            'role' => 'int',
            'expireTime' => 'int',
            'userId' => 'string',
            'orgId' => 'string',
            'participantId' => 'string',
            'confTokenExpireTime' => 'int',
            'vmrCurrentConfId' => 'string',
            'supportNotifyType' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * token  会控Token。有效期半个小时。
    * tmpWsToken  会控WebSocket建链鉴权Token。
    * wsUrl  会控WebSocket建链URL。
    * role  会议中的角色。 * 0 ：普通与会者 * 1 ：会议主持人
    * expireTime  会控Token过期时间戳（单位：毫秒）。
    * userId  会议预定者的用户UUID。
    * orgId  会议所属企业ID。
    * participantId  终端请求时，返回终端入会后会场ID。 > 该参数将废弃，请勿使用。
    * confTokenExpireTime  会控Token有效时长（单位秒）。
    * vmrCurrentConfId  云会议室会议的当前会议ID。
    * supportNotifyType  会控WebSocket消息推送支持类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'token' => null,
        'tmpWsToken' => null,
        'wsUrl' => null,
        'role' => 'int32',
        'expireTime' => 'int64',
        'userId' => null,
        'orgId' => null,
        'participantId' => null,
        'confTokenExpireTime' => 'int32',
        'vmrCurrentConfId' => null,
        'supportNotifyType' => null
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
    * token  会控Token。有效期半个小时。
    * tmpWsToken  会控WebSocket建链鉴权Token。
    * wsUrl  会控WebSocket建链URL。
    * role  会议中的角色。 * 0 ：普通与会者 * 1 ：会议主持人
    * expireTime  会控Token过期时间戳（单位：毫秒）。
    * userId  会议预定者的用户UUID。
    * orgId  会议所属企业ID。
    * participantId  终端请求时，返回终端入会后会场ID。 > 该参数将废弃，请勿使用。
    * confTokenExpireTime  会控Token有效时长（单位秒）。
    * vmrCurrentConfId  云会议室会议的当前会议ID。
    * supportNotifyType  会控WebSocket消息推送支持类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'token' => 'token',
            'tmpWsToken' => 'tmpWsToken',
            'wsUrl' => 'wsURL',
            'role' => 'role',
            'expireTime' => 'expireTime',
            'userId' => 'userID',
            'orgId' => 'orgID',
            'participantId' => 'participantID',
            'confTokenExpireTime' => 'confTokenExpireTime',
            'vmrCurrentConfId' => 'vmrCurrentConfID',
            'supportNotifyType' => 'supportNotifyType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * token  会控Token。有效期半个小时。
    * tmpWsToken  会控WebSocket建链鉴权Token。
    * wsUrl  会控WebSocket建链URL。
    * role  会议中的角色。 * 0 ：普通与会者 * 1 ：会议主持人
    * expireTime  会控Token过期时间戳（单位：毫秒）。
    * userId  会议预定者的用户UUID。
    * orgId  会议所属企业ID。
    * participantId  终端请求时，返回终端入会后会场ID。 > 该参数将废弃，请勿使用。
    * confTokenExpireTime  会控Token有效时长（单位秒）。
    * vmrCurrentConfId  云会议室会议的当前会议ID。
    * supportNotifyType  会控WebSocket消息推送支持类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'token' => 'setToken',
            'tmpWsToken' => 'setTmpWsToken',
            'wsUrl' => 'setWsUrl',
            'role' => 'setRole',
            'expireTime' => 'setExpireTime',
            'userId' => 'setUserId',
            'orgId' => 'setOrgId',
            'participantId' => 'setParticipantId',
            'confTokenExpireTime' => 'setConfTokenExpireTime',
            'vmrCurrentConfId' => 'setVmrCurrentConfId',
            'supportNotifyType' => 'setSupportNotifyType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * token  会控Token。有效期半个小时。
    * tmpWsToken  会控WebSocket建链鉴权Token。
    * wsUrl  会控WebSocket建链URL。
    * role  会议中的角色。 * 0 ：普通与会者 * 1 ：会议主持人
    * expireTime  会控Token过期时间戳（单位：毫秒）。
    * userId  会议预定者的用户UUID。
    * orgId  会议所属企业ID。
    * participantId  终端请求时，返回终端入会后会场ID。 > 该参数将废弃，请勿使用。
    * confTokenExpireTime  会控Token有效时长（单位秒）。
    * vmrCurrentConfId  云会议室会议的当前会议ID。
    * supportNotifyType  会控WebSocket消息推送支持类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'token' => 'getToken',
            'tmpWsToken' => 'getTmpWsToken',
            'wsUrl' => 'getWsUrl',
            'role' => 'getRole',
            'expireTime' => 'getExpireTime',
            'userId' => 'getUserId',
            'orgId' => 'getOrgId',
            'participantId' => 'getParticipantId',
            'confTokenExpireTime' => 'getConfTokenExpireTime',
            'vmrCurrentConfId' => 'getVmrCurrentConfId',
            'supportNotifyType' => 'getSupportNotifyType'
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
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['tmpWsToken'] = isset($data['tmpWsToken']) ? $data['tmpWsToken'] : null;
        $this->container['wsUrl'] = isset($data['wsUrl']) ? $data['wsUrl'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['orgId'] = isset($data['orgId']) ? $data['orgId'] : null;
        $this->container['participantId'] = isset($data['participantId']) ? $data['participantId'] : null;
        $this->container['confTokenExpireTime'] = isset($data['confTokenExpireTime']) ? $data['confTokenExpireTime'] : null;
        $this->container['vmrCurrentConfId'] = isset($data['vmrCurrentConfId']) ? $data['vmrCurrentConfId'] : null;
        $this->container['supportNotifyType'] = isset($data['supportNotifyType']) ? $data['supportNotifyType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['role']) && ($this->container['role'] > 1)) {
                $invalidProperties[] = "invalid value for 'role', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['role']) && ($this->container['role'] < 0)) {
                $invalidProperties[] = "invalid value for 'role', must be bigger than or equal to 0.";
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
    * Gets token
    *  会控Token。有效期半个小时。
    *
    * @return string|null
    */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
    * Sets token
    *
    * @param string|null $token 会控Token。有效期半个小时。
    *
    * @return $this
    */
    public function setToken($token)
    {
        $this->container['token'] = $token;
        return $this;
    }

    /**
    * Gets tmpWsToken
    *  会控WebSocket建链鉴权Token。
    *
    * @return string|null
    */
    public function getTmpWsToken()
    {
        return $this->container['tmpWsToken'];
    }

    /**
    * Sets tmpWsToken
    *
    * @param string|null $tmpWsToken 会控WebSocket建链鉴权Token。
    *
    * @return $this
    */
    public function setTmpWsToken($tmpWsToken)
    {
        $this->container['tmpWsToken'] = $tmpWsToken;
        return $this;
    }

    /**
    * Gets wsUrl
    *  会控WebSocket建链URL。
    *
    * @return string|null
    */
    public function getWsUrl()
    {
        return $this->container['wsUrl'];
    }

    /**
    * Sets wsUrl
    *
    * @param string|null $wsUrl 会控WebSocket建链URL。
    *
    * @return $this
    */
    public function setWsUrl($wsUrl)
    {
        $this->container['wsUrl'] = $wsUrl;
        return $this;
    }

    /**
    * Gets role
    *  会议中的角色。 * 0 ：普通与会者 * 1 ：会议主持人
    *
    * @return int|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param int|null $role 会议中的角色。 * 0 ：普通与会者 * 1 ：会议主持人
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets expireTime
    *  会控Token过期时间戳（单位：毫秒）。
    *
    * @return int|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int|null $expireTime 会控Token过期时间戳（单位：毫秒）。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets userId
    *  会议预定者的用户UUID。
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
    * @param string|null $userId 会议预定者的用户UUID。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets orgId
    *  会议所属企业ID。
    *
    * @return string|null
    */
    public function getOrgId()
    {
        return $this->container['orgId'];
    }

    /**
    * Sets orgId
    *
    * @param string|null $orgId 会议所属企业ID。
    *
    * @return $this
    */
    public function setOrgId($orgId)
    {
        $this->container['orgId'] = $orgId;
        return $this;
    }

    /**
    * Gets participantId
    *  终端请求时，返回终端入会后会场ID。 > 该参数将废弃，请勿使用。
    *
    * @return string|null
    */
    public function getParticipantId()
    {
        return $this->container['participantId'];
    }

    /**
    * Sets participantId
    *
    * @param string|null $participantId 终端请求时，返回终端入会后会场ID。 > 该参数将废弃，请勿使用。
    *
    * @return $this
    */
    public function setParticipantId($participantId)
    {
        $this->container['participantId'] = $participantId;
        return $this;
    }

    /**
    * Gets confTokenExpireTime
    *  会控Token有效时长（单位秒）。
    *
    * @return int|null
    */
    public function getConfTokenExpireTime()
    {
        return $this->container['confTokenExpireTime'];
    }

    /**
    * Sets confTokenExpireTime
    *
    * @param int|null $confTokenExpireTime 会控Token有效时长（单位秒）。
    *
    * @return $this
    */
    public function setConfTokenExpireTime($confTokenExpireTime)
    {
        $this->container['confTokenExpireTime'] = $confTokenExpireTime;
        return $this;
    }

    /**
    * Gets vmrCurrentConfId
    *  云会议室会议的当前会议ID。
    *
    * @return string|null
    */
    public function getVmrCurrentConfId()
    {
        return $this->container['vmrCurrentConfId'];
    }

    /**
    * Sets vmrCurrentConfId
    *
    * @param string|null $vmrCurrentConfId 云会议室会议的当前会议ID。
    *
    * @return $this
    */
    public function setVmrCurrentConfId($vmrCurrentConfId)
    {
        $this->container['vmrCurrentConfId'] = $vmrCurrentConfId;
        return $this;
    }

    /**
    * Gets supportNotifyType
    *  会控WebSocket消息推送支持类型。
    *
    * @return string[]|null
    */
    public function getSupportNotifyType()
    {
        return $this->container['supportNotifyType'];
    }

    /**
    * Sets supportNotifyType
    *
    * @param string[]|null $supportNotifyType 会控WebSocket消息推送支持类型。
    *
    * @return $this
    */
    public function setSupportNotifyType($supportNotifyType)
    {
        $this->container['supportNotifyType'] = $supportNotifyType;
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

