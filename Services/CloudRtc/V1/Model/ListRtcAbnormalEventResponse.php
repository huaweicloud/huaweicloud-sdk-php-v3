<?php

namespace HuaweiCloud\SDK\CloudRTC\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRtcAbnormalEventResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRtcAbnormalEventResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roomId  房间ID
    * uid  用户ID
    * expId  体验ID
    * abnormalList  异常信息列表。注意：此字段可能返回null，表示取不到有效值。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roomId' => 'string',
            'uid' => 'string',
            'expId' => 'string',
            'abnormalList' => '\HuaweiCloud\SDK\CloudRTC\V1\Model\RTCCause[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roomId  房间ID
    * uid  用户ID
    * expId  体验ID
    * abnormalList  异常信息列表。注意：此字段可能返回null，表示取不到有效值。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roomId' => null,
        'uid' => null,
        'expId' => null,
        'abnormalList' => null,
        'xRequestId' => null
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
    * roomId  房间ID
    * uid  用户ID
    * expId  体验ID
    * abnormalList  异常信息列表。注意：此字段可能返回null，表示取不到有效值。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roomId' => 'room_id',
            'uid' => 'uid',
            'expId' => 'exp_id',
            'abnormalList' => 'abnormal_list',
            'xRequestId' => 'X-request-id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roomId  房间ID
    * uid  用户ID
    * expId  体验ID
    * abnormalList  异常信息列表。注意：此字段可能返回null，表示取不到有效值。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'roomId' => 'setRoomId',
            'uid' => 'setUid',
            'expId' => 'setExpId',
            'abnormalList' => 'setAbnormalList',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roomId  房间ID
    * uid  用户ID
    * expId  体验ID
    * abnormalList  异常信息列表。注意：此字段可能返回null，表示取不到有效值。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'roomId' => 'getRoomId',
            'uid' => 'getUid',
            'expId' => 'getExpId',
            'abnormalList' => 'getAbnormalList',
            'xRequestId' => 'getXRequestId'
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
        $this->container['roomId'] = isset($data['roomId']) ? $data['roomId'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['expId'] = isset($data['expId']) ? $data['expId'] : null;
        $this->container['abnormalList'] = isset($data['abnormalList']) ? $data['abnormalList'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) > 64)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['uid']) && (mb_strlen($this->container['uid']) > 64)) {
                $invalidProperties[] = "invalid value for 'uid', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['uid']) && (mb_strlen($this->container['uid']) < 1)) {
                $invalidProperties[] = "invalid value for 'uid', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['expId']) && (mb_strlen($this->container['expId']) > 64)) {
                $invalidProperties[] = "invalid value for 'expId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['expId']) && (mb_strlen($this->container['expId']) < 1)) {
                $invalidProperties[] = "invalid value for 'expId', the character length must be bigger than or equal to 1.";
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
    * Gets roomId
    *  房间ID
    *
    * @return string|null
    */
    public function getRoomId()
    {
        return $this->container['roomId'];
    }

    /**
    * Sets roomId
    *
    * @param string|null $roomId 房间ID
    *
    * @return $this
    */
    public function setRoomId($roomId)
    {
        $this->container['roomId'] = $roomId;
        return $this;
    }

    /**
    * Gets uid
    *  用户ID
    *
    * @return string|null
    */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
    * Sets uid
    *
    * @param string|null $uid 用户ID
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets expId
    *  体验ID
    *
    * @return string|null
    */
    public function getExpId()
    {
        return $this->container['expId'];
    }

    /**
    * Sets expId
    *
    * @param string|null $expId 体验ID
    *
    * @return $this
    */
    public function setExpId($expId)
    {
        $this->container['expId'] = $expId;
        return $this;
    }

    /**
    * Gets abnormalList
    *  异常信息列表。注意：此字段可能返回null，表示取不到有效值。
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V1\Model\RTCCause[]|null
    */
    public function getAbnormalList()
    {
        return $this->container['abnormalList'];
    }

    /**
    * Sets abnormalList
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V1\Model\RTCCause[]|null $abnormalList 异常信息列表。注意：此字段可能返回null，表示取不到有效值。
    *
    * @return $this
    */
    public function setAbnormalList($abnormalList)
    {
        $this->container['abnormalList'] = $abnormalList;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

