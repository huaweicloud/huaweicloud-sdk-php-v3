<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateConfTokenRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateConfTokenRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * conferenceId  会议ID。 > 创建会议时返回的conferenceID。不是vmrConferenceID。
    * xConferenceAuthorization  会控Token。 > * 仅会控Token保活场景需要携带 > * 如果会话已过期并且请求中携带了密码，则进行重新鉴权并回复新的会控Token
    * xPassword  会议的主持人密码。 > 对于会控Token保活场景，不对主持人密码鉴权。
    * xLoginType  请求类型。 - 1: 业务固定为1。
    * xNonce  用户临时nonce token。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'conferenceId' => 'string',
            'xConferenceAuthorization' => 'string',
            'xPassword' => 'string',
            'xLoginType' => 'int',
            'xNonce' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * conferenceId  会议ID。 > 创建会议时返回的conferenceID。不是vmrConferenceID。
    * xConferenceAuthorization  会控Token。 > * 仅会控Token保活场景需要携带 > * 如果会话已过期并且请求中携带了密码，则进行重新鉴权并回复新的会控Token
    * xPassword  会议的主持人密码。 > 对于会控Token保活场景，不对主持人密码鉴权。
    * xLoginType  请求类型。 - 1: 业务固定为1。
    * xNonce  用户临时nonce token。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'conferenceId' => null,
        'xConferenceAuthorization' => null,
        'xPassword' => 'password',
        'xLoginType' => 'int32',
        'xNonce' => null
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
    * conferenceId  会议ID。 > 创建会议时返回的conferenceID。不是vmrConferenceID。
    * xConferenceAuthorization  会控Token。 > * 仅会控Token保活场景需要携带 > * 如果会话已过期并且请求中携带了密码，则进行重新鉴权并回复新的会控Token
    * xPassword  会议的主持人密码。 > 对于会控Token保活场景，不对主持人密码鉴权。
    * xLoginType  请求类型。 - 1: 业务固定为1。
    * xNonce  用户临时nonce token。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'conferenceId' => 'conferenceID',
            'xConferenceAuthorization' => 'X-Conference-Authorization',
            'xPassword' => 'X-Password',
            'xLoginType' => 'X-Login-Type',
            'xNonce' => 'X-Nonce'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * conferenceId  会议ID。 > 创建会议时返回的conferenceID。不是vmrConferenceID。
    * xConferenceAuthorization  会控Token。 > * 仅会控Token保活场景需要携带 > * 如果会话已过期并且请求中携带了密码，则进行重新鉴权并回复新的会控Token
    * xPassword  会议的主持人密码。 > 对于会控Token保活场景，不对主持人密码鉴权。
    * xLoginType  请求类型。 - 1: 业务固定为1。
    * xNonce  用户临时nonce token。
    *
    * @var string[]
    */
    protected static $setters = [
            'conferenceId' => 'setConferenceId',
            'xConferenceAuthorization' => 'setXConferenceAuthorization',
            'xPassword' => 'setXPassword',
            'xLoginType' => 'setXLoginType',
            'xNonce' => 'setXNonce'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * conferenceId  会议ID。 > 创建会议时返回的conferenceID。不是vmrConferenceID。
    * xConferenceAuthorization  会控Token。 > * 仅会控Token保活场景需要携带 > * 如果会话已过期并且请求中携带了密码，则进行重新鉴权并回复新的会控Token
    * xPassword  会议的主持人密码。 > 对于会控Token保活场景，不对主持人密码鉴权。
    * xLoginType  请求类型。 - 1: 业务固定为1。
    * xNonce  用户临时nonce token。
    *
    * @var string[]
    */
    protected static $getters = [
            'conferenceId' => 'getConferenceId',
            'xConferenceAuthorization' => 'getXConferenceAuthorization',
            'xPassword' => 'getXPassword',
            'xLoginType' => 'getXLoginType',
            'xNonce' => 'getXNonce'
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
        $this->container['conferenceId'] = isset($data['conferenceId']) ? $data['conferenceId'] : null;
        $this->container['xConferenceAuthorization'] = isset($data['xConferenceAuthorization']) ? $data['xConferenceAuthorization'] : null;
        $this->container['xPassword'] = isset($data['xPassword']) ? $data['xPassword'] : null;
        $this->container['xLoginType'] = isset($data['xLoginType']) ? $data['xLoginType'] : null;
        $this->container['xNonce'] = isset($data['xNonce']) ? $data['xNonce'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['conferenceId'] === null) {
            $invalidProperties[] = "'conferenceId' can't be null";
        }
        if ($this->container['xPassword'] === null) {
            $invalidProperties[] = "'xPassword' can't be null";
        }
        if ($this->container['xLoginType'] === null) {
            $invalidProperties[] = "'xLoginType' can't be null";
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
    * Gets conferenceId
    *  会议ID。 > 创建会议时返回的conferenceID。不是vmrConferenceID。
    *
    * @return string
    */
    public function getConferenceId()
    {
        return $this->container['conferenceId'];
    }

    /**
    * Sets conferenceId
    *
    * @param string $conferenceId 会议ID。 > 创建会议时返回的conferenceID。不是vmrConferenceID。
    *
    * @return $this
    */
    public function setConferenceId($conferenceId)
    {
        $this->container['conferenceId'] = $conferenceId;
        return $this;
    }

    /**
    * Gets xConferenceAuthorization
    *  会控Token。 > * 仅会控Token保活场景需要携带 > * 如果会话已过期并且请求中携带了密码，则进行重新鉴权并回复新的会控Token
    *
    * @return string|null
    */
    public function getXConferenceAuthorization()
    {
        return $this->container['xConferenceAuthorization'];
    }

    /**
    * Sets xConferenceAuthorization
    *
    * @param string|null $xConferenceAuthorization 会控Token。 > * 仅会控Token保活场景需要携带 > * 如果会话已过期并且请求中携带了密码，则进行重新鉴权并回复新的会控Token
    *
    * @return $this
    */
    public function setXConferenceAuthorization($xConferenceAuthorization)
    {
        $this->container['xConferenceAuthorization'] = $xConferenceAuthorization;
        return $this;
    }

    /**
    * Gets xPassword
    *  会议的主持人密码。 > 对于会控Token保活场景，不对主持人密码鉴权。
    *
    * @return string
    */
    public function getXPassword()
    {
        return $this->container['xPassword'];
    }

    /**
    * Sets xPassword
    *
    * @param string $xPassword 会议的主持人密码。 > 对于会控Token保活场景，不对主持人密码鉴权。
    *
    * @return $this
    */
    public function setXPassword($xPassword)
    {
        $this->container['xPassword'] = $xPassword;
        return $this;
    }

    /**
    * Gets xLoginType
    *  请求类型。 - 1: 业务固定为1。
    *
    * @return int
    */
    public function getXLoginType()
    {
        return $this->container['xLoginType'];
    }

    /**
    * Sets xLoginType
    *
    * @param int $xLoginType 请求类型。 - 1: 业务固定为1。
    *
    * @return $this
    */
    public function setXLoginType($xLoginType)
    {
        $this->container['xLoginType'] = $xLoginType;
        return $this;
    }

    /**
    * Gets xNonce
    *  用户临时nonce token。
    *
    * @return string|null
    */
    public function getXNonce()
    {
        return $this->container['xNonce'];
    }

    /**
    * Sets xNonce
    *
    * @param string|null $xNonce 用户临时nonce token。
    *
    * @return $this
    */
    public function setXNonce($xNonce)
    {
        $this->container['xNonce'] = $xNonce;
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

