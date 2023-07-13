<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestAllowWaitingParticipantReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestAllowWaitingParticipantReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * participantId  等候室成员标志。通过监听[[会议级事件推送中的“等候室成员列表信息”](https://support.huaweicloud.com/api-meeting/meeting_21_1507.html)](tag:hws)[[会议级事件推送中的“等候室成员列表信息”](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1507.html)](tag:hk)事件获得。
    * allowAll  允许所有等候者入会。 * false：指定等候者 * true：所有等候者入会
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'participantId' => 'string',
            'allowAll' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * participantId  等候室成员标志。通过监听[[会议级事件推送中的“等候室成员列表信息”](https://support.huaweicloud.com/api-meeting/meeting_21_1507.html)](tag:hws)[[会议级事件推送中的“等候室成员列表信息”](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1507.html)](tag:hk)事件获得。
    * allowAll  允许所有等候者入会。 * false：指定等候者 * true：所有等候者入会
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'participantId' => null,
        'allowAll' => null
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
    * participantId  等候室成员标志。通过监听[[会议级事件推送中的“等候室成员列表信息”](https://support.huaweicloud.com/api-meeting/meeting_21_1507.html)](tag:hws)[[会议级事件推送中的“等候室成员列表信息”](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1507.html)](tag:hk)事件获得。
    * allowAll  允许所有等候者入会。 * false：指定等候者 * true：所有等候者入会
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'participantId' => 'participantID',
            'allowAll' => 'allowAll'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * participantId  等候室成员标志。通过监听[[会议级事件推送中的“等候室成员列表信息”](https://support.huaweicloud.com/api-meeting/meeting_21_1507.html)](tag:hws)[[会议级事件推送中的“等候室成员列表信息”](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1507.html)](tag:hk)事件获得。
    * allowAll  允许所有等候者入会。 * false：指定等候者 * true：所有等候者入会
    *
    * @var string[]
    */
    protected static $setters = [
            'participantId' => 'setParticipantId',
            'allowAll' => 'setAllowAll'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * participantId  等候室成员标志。通过监听[[会议级事件推送中的“等候室成员列表信息”](https://support.huaweicloud.com/api-meeting/meeting_21_1507.html)](tag:hws)[[会议级事件推送中的“等候室成员列表信息”](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1507.html)](tag:hk)事件获得。
    * allowAll  允许所有等候者入会。 * false：指定等候者 * true：所有等候者入会
    *
    * @var string[]
    */
    protected static $getters = [
            'participantId' => 'getParticipantId',
            'allowAll' => 'getAllowAll'
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
        $this->container['participantId'] = isset($data['participantId']) ? $data['participantId'] : null;
        $this->container['allowAll'] = isset($data['allowAll']) ? $data['allowAll'] : null;
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
    * Gets participantId
    *  等候室成员标志。通过监听[[会议级事件推送中的“等候室成员列表信息”](https://support.huaweicloud.com/api-meeting/meeting_21_1507.html)](tag:hws)[[会议级事件推送中的“等候室成员列表信息”](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1507.html)](tag:hk)事件获得。
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
    * @param string|null $participantId 等候室成员标志。通过监听[[会议级事件推送中的“等候室成员列表信息”](https://support.huaweicloud.com/api-meeting/meeting_21_1507.html)](tag:hws)[[会议级事件推送中的“等候室成员列表信息”](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1507.html)](tag:hk)事件获得。
    *
    * @return $this
    */
    public function setParticipantId($participantId)
    {
        $this->container['participantId'] = $participantId;
        return $this;
    }

    /**
    * Gets allowAll
    *  允许所有等候者入会。 * false：指定等候者 * true：所有等候者入会
    *
    * @return bool|null
    */
    public function getAllowAll()
    {
        return $this->container['allowAll'];
    }

    /**
    * Sets allowAll
    *
    * @param bool|null $allowAll 允许所有等候者入会。 * false：指定等候者 * true：所有等候者入会
    *
    * @return $this
    */
    public function setAllowAll($allowAll)
    {
        $this->container['allowAll'] = $allowAll;
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

