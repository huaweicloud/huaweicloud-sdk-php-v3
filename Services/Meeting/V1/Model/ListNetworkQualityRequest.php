<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNetworkQualityRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNetworkQualityRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * conferenceid  会议id
    * confToken  会控Token，通过[[获取会控token](https://support.huaweicloud.com/api-meeting/meeting_21_0027.html)](tag:hws)[[获取会控token](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0027.html)](tag:hk)接口获得。
    * appid  会议的appId
    * confuuid  会议UUID，MMR房间ID
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'conferenceid' => 'string',
            'confToken' => 'string',
            'appid' => 'string',
            'confuuid' => 'string',
            'body' => '\HuaweiCloud\SDK\Meeting\V1\Model\RestQosRequestDTO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * conferenceid  会议id
    * confToken  会控Token，通过[[获取会控token](https://support.huaweicloud.com/api-meeting/meeting_21_0027.html)](tag:hws)[[获取会控token](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0027.html)](tag:hk)接口获得。
    * appid  会议的appId
    * confuuid  会议UUID，MMR房间ID
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'conferenceid' => null,
        'confToken' => null,
        'appid' => null,
        'confuuid' => null,
        'body' => null
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
    * conferenceid  会议id
    * confToken  会控Token，通过[[获取会控token](https://support.huaweicloud.com/api-meeting/meeting_21_0027.html)](tag:hws)[[获取会控token](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0027.html)](tag:hk)接口获得。
    * appid  会议的appId
    * confuuid  会议UUID，MMR房间ID
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'conferenceid' => 'conferenceid',
            'confToken' => 'confToken',
            'appid' => 'appid',
            'confuuid' => 'confuuid',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * conferenceid  会议id
    * confToken  会控Token，通过[[获取会控token](https://support.huaweicloud.com/api-meeting/meeting_21_0027.html)](tag:hws)[[获取会控token](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0027.html)](tag:hk)接口获得。
    * appid  会议的appId
    * confuuid  会议UUID，MMR房间ID
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'conferenceid' => 'setConferenceid',
            'confToken' => 'setConfToken',
            'appid' => 'setAppid',
            'confuuid' => 'setConfuuid',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * conferenceid  会议id
    * confToken  会控Token，通过[[获取会控token](https://support.huaweicloud.com/api-meeting/meeting_21_0027.html)](tag:hws)[[获取会控token](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0027.html)](tag:hk)接口获得。
    * appid  会议的appId
    * confuuid  会议UUID，MMR房间ID
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'conferenceid' => 'getConferenceid',
            'confToken' => 'getConfToken',
            'appid' => 'getAppid',
            'confuuid' => 'getConfuuid',
            'body' => 'getBody'
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
        $this->container['conferenceid'] = isset($data['conferenceid']) ? $data['conferenceid'] : null;
        $this->container['confToken'] = isset($data['confToken']) ? $data['confToken'] : null;
        $this->container['appid'] = isset($data['appid']) ? $data['appid'] : null;
        $this->container['confuuid'] = isset($data['confuuid']) ? $data['confuuid'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['conferenceid'] === null) {
            $invalidProperties[] = "'conferenceid' can't be null";
        }
            if ((mb_strlen($this->container['conferenceid']) > 9)) {
                $invalidProperties[] = "invalid value for 'conferenceid', the character length must be smaller than or equal to 9.";
            }
            if ((mb_strlen($this->container['conferenceid']) < 7)) {
                $invalidProperties[] = "invalid value for 'conferenceid', the character length must be bigger than or equal to 7.";
            }
        if ($this->container['confToken'] === null) {
            $invalidProperties[] = "'confToken' can't be null";
        }
        if ($this->container['confuuid'] === null) {
            $invalidProperties[] = "'confuuid' can't be null";
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
    * Gets conferenceid
    *  会议id
    *
    * @return string
    */
    public function getConferenceid()
    {
        return $this->container['conferenceid'];
    }

    /**
    * Sets conferenceid
    *
    * @param string $conferenceid 会议id
    *
    * @return $this
    */
    public function setConferenceid($conferenceid)
    {
        $this->container['conferenceid'] = $conferenceid;
        return $this;
    }

    /**
    * Gets confToken
    *  会控Token，通过[[获取会控token](https://support.huaweicloud.com/api-meeting/meeting_21_0027.html)](tag:hws)[[获取会控token](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0027.html)](tag:hk)接口获得。
    *
    * @return string
    */
    public function getConfToken()
    {
        return $this->container['confToken'];
    }

    /**
    * Sets confToken
    *
    * @param string $confToken 会控Token，通过[[获取会控token](https://support.huaweicloud.com/api-meeting/meeting_21_0027.html)](tag:hws)[[获取会控token](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0027.html)](tag:hk)接口获得。
    *
    * @return $this
    */
    public function setConfToken($confToken)
    {
        $this->container['confToken'] = $confToken;
        return $this;
    }

    /**
    * Gets appid
    *  会议的appId
    *
    * @return string|null
    */
    public function getAppid()
    {
        return $this->container['appid'];
    }

    /**
    * Sets appid
    *
    * @param string|null $appid 会议的appId
    *
    * @return $this
    */
    public function setAppid($appid)
    {
        $this->container['appid'] = $appid;
        return $this;
    }

    /**
    * Gets confuuid
    *  会议UUID，MMR房间ID
    *
    * @return string
    */
    public function getConfuuid()
    {
        return $this->container['confuuid'];
    }

    /**
    * Sets confuuid
    *
    * @param string $confuuid 会议UUID，MMR房间ID
    *
    * @return $this
    */
    public function setConfuuid($confuuid)
    {
        $this->container['confuuid'] = $confuuid;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\RestQosRequestDTO|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\RestQosRequestDTO|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

