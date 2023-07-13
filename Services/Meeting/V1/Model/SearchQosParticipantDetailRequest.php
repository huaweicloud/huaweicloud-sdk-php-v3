<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchQosParticipantDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchQosParticipantDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * confUuid  会议UUID。
    * confType  会议类别。 * online：在线会议，在召开的会议 * history：历史会议，已召开的会议
    * participantId  与会者标识。
    * qosType  Qos类型。 - audio：音频 - video：视频 - screen：屏幕共享 - cpu：cpu
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'confUuid' => 'string',
            'confType' => 'string',
            'participantId' => 'string',
            'qosType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * confUuid  会议UUID。
    * confType  会议类别。 * online：在线会议，在召开的会议 * history：历史会议，已召开的会议
    * participantId  与会者标识。
    * qosType  Qos类型。 - audio：音频 - video：视频 - screen：屏幕共享 - cpu：cpu
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'confUuid' => null,
        'confType' => null,
        'participantId' => null,
        'qosType' => null
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
    * confUuid  会议UUID。
    * confType  会议类别。 * online：在线会议，在召开的会议 * history：历史会议，已召开的会议
    * participantId  与会者标识。
    * qosType  Qos类型。 - audio：音频 - video：视频 - screen：屏幕共享 - cpu：cpu
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'confUuid' => 'confUUID',
            'confType' => 'confType',
            'participantId' => 'participantID',
            'qosType' => 'qosType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * confUuid  会议UUID。
    * confType  会议类别。 * online：在线会议，在召开的会议 * history：历史会议，已召开的会议
    * participantId  与会者标识。
    * qosType  Qos类型。 - audio：音频 - video：视频 - screen：屏幕共享 - cpu：cpu
    *
    * @var string[]
    */
    protected static $setters = [
            'confUuid' => 'setConfUuid',
            'confType' => 'setConfType',
            'participantId' => 'setParticipantId',
            'qosType' => 'setQosType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * confUuid  会议UUID。
    * confType  会议类别。 * online：在线会议，在召开的会议 * history：历史会议，已召开的会议
    * participantId  与会者标识。
    * qosType  Qos类型。 - audio：音频 - video：视频 - screen：屏幕共享 - cpu：cpu
    *
    * @var string[]
    */
    protected static $getters = [
            'confUuid' => 'getConfUuid',
            'confType' => 'getConfType',
            'participantId' => 'getParticipantId',
            'qosType' => 'getQosType'
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
    const CONF_TYPE_ONLINE = 'online';
    const CONF_TYPE_HISTORY = 'history';
    const QOS_TYPE_AUDIO = 'audio';
    const QOS_TYPE_VIDEO = 'video';
    const QOS_TYPE_SCREEN = 'screen';
    const QOS_TYPE_CPU = 'cpu';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConfTypeAllowableValues()
    {
        return [
            self::CONF_TYPE_ONLINE,
            self::CONF_TYPE_HISTORY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getQosTypeAllowableValues()
    {
        return [
            self::QOS_TYPE_AUDIO,
            self::QOS_TYPE_VIDEO,
            self::QOS_TYPE_SCREEN,
            self::QOS_TYPE_CPU,
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
        $this->container['confUuid'] = isset($data['confUuid']) ? $data['confUuid'] : null;
        $this->container['confType'] = isset($data['confType']) ? $data['confType'] : null;
        $this->container['participantId'] = isset($data['participantId']) ? $data['participantId'] : null;
        $this->container['qosType'] = isset($data['qosType']) ? $data['qosType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['confUuid'] === null) {
            $invalidProperties[] = "'confUuid' can't be null";
        }
        if ($this->container['confType'] === null) {
            $invalidProperties[] = "'confType' can't be null";
        }
            $allowedValues = $this->getConfTypeAllowableValues();
                if (!is_null($this->container['confType']) && !in_array($this->container['confType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'confType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['participantId'] === null) {
            $invalidProperties[] = "'participantId' can't be null";
        }
        if ($this->container['qosType'] === null) {
            $invalidProperties[] = "'qosType' can't be null";
        }
            $allowedValues = $this->getQosTypeAllowableValues();
                if (!is_null($this->container['qosType']) && !in_array($this->container['qosType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'qosType', must be one of '%s'",
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
    * Gets confUuid
    *  会议UUID。
    *
    * @return string
    */
    public function getConfUuid()
    {
        return $this->container['confUuid'];
    }

    /**
    * Sets confUuid
    *
    * @param string $confUuid 会议UUID。
    *
    * @return $this
    */
    public function setConfUuid($confUuid)
    {
        $this->container['confUuid'] = $confUuid;
        return $this;
    }

    /**
    * Gets confType
    *  会议类别。 * online：在线会议，在召开的会议 * history：历史会议，已召开的会议
    *
    * @return string
    */
    public function getConfType()
    {
        return $this->container['confType'];
    }

    /**
    * Sets confType
    *
    * @param string $confType 会议类别。 * online：在线会议，在召开的会议 * history：历史会议，已召开的会议
    *
    * @return $this
    */
    public function setConfType($confType)
    {
        $this->container['confType'] = $confType;
        return $this;
    }

    /**
    * Gets participantId
    *  与会者标识。
    *
    * @return string
    */
    public function getParticipantId()
    {
        return $this->container['participantId'];
    }

    /**
    * Sets participantId
    *
    * @param string $participantId 与会者标识。
    *
    * @return $this
    */
    public function setParticipantId($participantId)
    {
        $this->container['participantId'] = $participantId;
        return $this;
    }

    /**
    * Gets qosType
    *  Qos类型。 - audio：音频 - video：视频 - screen：屏幕共享 - cpu：cpu
    *
    * @return string
    */
    public function getQosType()
    {
        return $this->container['qosType'];
    }

    /**
    * Sets qosType
    *
    * @param string $qosType Qos类型。 - audio：音频 - video：视频 - screen：屏幕共享 - cpu：cpu
    *
    * @return $this
    */
    public function setQosType($qosType)
    {
        $this->container['qosType'] = $qosType;
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

