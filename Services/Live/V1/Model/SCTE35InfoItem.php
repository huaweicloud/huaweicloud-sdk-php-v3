<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SCTE35InfoItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SCTE35InfoItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  信号类型，splice_insert/time_signal。
    * eventId  广告信号的Event ID，Time Signal打印数组第一个。
    * startDate  广告信号的执行时间，unix time，单位：秒。
    * duration  广告信号时长，-1表示没有携带,单位：秒。
    * segmentationType  // Splice Insert填空\"-\"； // Time Signal，支持0x30，0x31，0x32，0x33，0x34，0x35，0x36，0x37 // 0x30: ProviderAdvertisementStart // 0x31: ProviderAdvertisementEnd // 0x32: DistributorAdvertisementStart // 0x33: DistributorAdvertisementEnd // 0x34: ProviderPlacementOpportunityStart // 0x35: ProviderPlacementOpportunityEnd // 0x36: DistributorPlacementOpportunityStart // 0x37: DistributorPlacementOpportunityEnd
    * base64Data  广告信号原始数据的base64值。
    * rawSplice  广告信号全量信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'eventId' => 'int',
            'startDate' => 'int',
            'duration' => 'int',
            'segmentationType' => 'string',
            'base64Data' => 'string',
            'rawSplice' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  信号类型，splice_insert/time_signal。
    * eventId  广告信号的Event ID，Time Signal打印数组第一个。
    * startDate  广告信号的执行时间，unix time，单位：秒。
    * duration  广告信号时长，-1表示没有携带,单位：秒。
    * segmentationType  // Splice Insert填空\"-\"； // Time Signal，支持0x30，0x31，0x32，0x33，0x34，0x35，0x36，0x37 // 0x30: ProviderAdvertisementStart // 0x31: ProviderAdvertisementEnd // 0x32: DistributorAdvertisementStart // 0x33: DistributorAdvertisementEnd // 0x34: ProviderPlacementOpportunityStart // 0x35: ProviderPlacementOpportunityEnd // 0x36: DistributorPlacementOpportunityStart // 0x37: DistributorPlacementOpportunityEnd
    * base64Data  广告信号原始数据的base64值。
    * rawSplice  广告信号全量信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'eventId' => 'int32',
        'startDate' => 'int64',
        'duration' => 'int32',
        'segmentationType' => null,
        'base64Data' => null,
        'rawSplice' => null
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
    * type  信号类型，splice_insert/time_signal。
    * eventId  广告信号的Event ID，Time Signal打印数组第一个。
    * startDate  广告信号的执行时间，unix time，单位：秒。
    * duration  广告信号时长，-1表示没有携带,单位：秒。
    * segmentationType  // Splice Insert填空\"-\"； // Time Signal，支持0x30，0x31，0x32，0x33，0x34，0x35，0x36，0x37 // 0x30: ProviderAdvertisementStart // 0x31: ProviderAdvertisementEnd // 0x32: DistributorAdvertisementStart // 0x33: DistributorAdvertisementEnd // 0x34: ProviderPlacementOpportunityStart // 0x35: ProviderPlacementOpportunityEnd // 0x36: DistributorPlacementOpportunityStart // 0x37: DistributorPlacementOpportunityEnd
    * base64Data  广告信号原始数据的base64值。
    * rawSplice  广告信号全量信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'eventId' => 'event_id',
            'startDate' => 'start_date',
            'duration' => 'duration',
            'segmentationType' => 'segmentation_type',
            'base64Data' => 'base64_data',
            'rawSplice' => 'raw_splice'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  信号类型，splice_insert/time_signal。
    * eventId  广告信号的Event ID，Time Signal打印数组第一个。
    * startDate  广告信号的执行时间，unix time，单位：秒。
    * duration  广告信号时长，-1表示没有携带,单位：秒。
    * segmentationType  // Splice Insert填空\"-\"； // Time Signal，支持0x30，0x31，0x32，0x33，0x34，0x35，0x36，0x37 // 0x30: ProviderAdvertisementStart // 0x31: ProviderAdvertisementEnd // 0x32: DistributorAdvertisementStart // 0x33: DistributorAdvertisementEnd // 0x34: ProviderPlacementOpportunityStart // 0x35: ProviderPlacementOpportunityEnd // 0x36: DistributorPlacementOpportunityStart // 0x37: DistributorPlacementOpportunityEnd
    * base64Data  广告信号原始数据的base64值。
    * rawSplice  广告信号全量信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'eventId' => 'setEventId',
            'startDate' => 'setStartDate',
            'duration' => 'setDuration',
            'segmentationType' => 'setSegmentationType',
            'base64Data' => 'setBase64Data',
            'rawSplice' => 'setRawSplice'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  信号类型，splice_insert/time_signal。
    * eventId  广告信号的Event ID，Time Signal打印数组第一个。
    * startDate  广告信号的执行时间，unix time，单位：秒。
    * duration  广告信号时长，-1表示没有携带,单位：秒。
    * segmentationType  // Splice Insert填空\"-\"； // Time Signal，支持0x30，0x31，0x32，0x33，0x34，0x35，0x36，0x37 // 0x30: ProviderAdvertisementStart // 0x31: ProviderAdvertisementEnd // 0x32: DistributorAdvertisementStart // 0x33: DistributorAdvertisementEnd // 0x34: ProviderPlacementOpportunityStart // 0x35: ProviderPlacementOpportunityEnd // 0x36: DistributorPlacementOpportunityStart // 0x37: DistributorPlacementOpportunityEnd
    * base64Data  广告信号原始数据的base64值。
    * rawSplice  广告信号全量信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'eventId' => 'getEventId',
            'startDate' => 'getStartDate',
            'duration' => 'getDuration',
            'segmentationType' => 'getSegmentationType',
            'base64Data' => 'getBase64Data',
            'rawSplice' => 'getRawSplice'
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
    const TYPE_SPLICE_INSERT = 'splice_insert';
    const TYPE_TIME_SIGNAL = 'time_signal';
    const SEGMENTATION_TYPE_MINUS = '-';
    const SEGMENTATION_TYPE_PROVIDER_ADVERTISEMENT_START = 'ProviderAdvertisementStart';
    const SEGMENTATION_TYPE_PROVIDER_ADVERTISEMENT_END = 'ProviderAdvertisementEnd';
    const SEGMENTATION_TYPE_DISTRIBUTOR_ADVERTISEMENT_START = 'DistributorAdvertisementStart';
    const SEGMENTATION_TYPE_DISTRIBUTOR_ADVERTISEMENT_END = 'DistributorAdvertisementEnd';
    const SEGMENTATION_TYPE_PROVIDER_PLACEMENT_OPPORTUNITY_START = 'ProviderPlacementOpportunityStart';
    const SEGMENTATION_TYPE_PROVIDER_PLACEMENT_OPPORTUNITY_END = 'ProviderPlacementOpportunityEnd';
    const SEGMENTATION_TYPE_DISTRIBUTOR_PLACEMENT_OPPORTUNITY_START = 'DistributorPlacementOpportunityStart';
    const SEGMENTATION_TYPE_DISTRIBUTOR_PLACEMENT_OPPORTUNITY_END = 'DistributorPlacementOpportunityEnd';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SPLICE_INSERT,
            self::TYPE_TIME_SIGNAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSegmentationTypeAllowableValues()
    {
        return [
            self::SEGMENTATION_TYPE_MINUS,
            self::SEGMENTATION_TYPE_PROVIDER_ADVERTISEMENT_START,
            self::SEGMENTATION_TYPE_PROVIDER_ADVERTISEMENT_END,
            self::SEGMENTATION_TYPE_DISTRIBUTOR_ADVERTISEMENT_START,
            self::SEGMENTATION_TYPE_DISTRIBUTOR_ADVERTISEMENT_END,
            self::SEGMENTATION_TYPE_PROVIDER_PLACEMENT_OPPORTUNITY_START,
            self::SEGMENTATION_TYPE_PROVIDER_PLACEMENT_OPPORTUNITY_END,
            self::SEGMENTATION_TYPE_DISTRIBUTOR_PLACEMENT_OPPORTUNITY_START,
            self::SEGMENTATION_TYPE_DISTRIBUTOR_PLACEMENT_OPPORTUNITY_END,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['segmentationType'] = isset($data['segmentationType']) ? $data['segmentationType'] : null;
        $this->container['base64Data'] = isset($data['base64Data']) ? $data['base64Data'] : null;
        $this->container['rawSplice'] = isset($data['rawSplice']) ? $data['rawSplice'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['type']) > 16)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['eventId'] === null) {
            $invalidProperties[] = "'eventId' can't be null";
        }
            if (($this->container['eventId'] > 2147483648)) {
                $invalidProperties[] = "invalid value for 'eventId', must be smaller than or equal to 2147483648.";
            }
            if (($this->container['eventId'] < 1)) {
                $invalidProperties[] = "invalid value for 'eventId', must be bigger than or equal to 1.";
            }
        if ($this->container['startDate'] === null) {
            $invalidProperties[] = "'startDate' can't be null";
        }
            if (($this->container['startDate'] > 4294967295)) {
                $invalidProperties[] = "invalid value for 'startDate', must be smaller than or equal to 4294967295.";
            }
            if (($this->container['startDate'] < 1)) {
                $invalidProperties[] = "invalid value for 'startDate', must be bigger than or equal to 1.";
            }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
            if (($this->container['duration'] > 2147483648)) {
                $invalidProperties[] = "invalid value for 'duration', must be smaller than or equal to 2147483648.";
            }
            if (($this->container['duration'] < -1)) {
                $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to -1.";
            }
        if ($this->container['segmentationType'] === null) {
            $invalidProperties[] = "'segmentationType' can't be null";
        }
            $allowedValues = $this->getSegmentationTypeAllowableValues();
                if (!is_null($this->container['segmentationType']) && !in_array($this->container['segmentationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'segmentationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['segmentationType']) > 128)) {
                $invalidProperties[] = "invalid value for 'segmentationType', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['segmentationType']) < 1)) {
                $invalidProperties[] = "invalid value for 'segmentationType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['base64Data'] === null) {
            $invalidProperties[] = "'base64Data' can't be null";
        }
            if ((mb_strlen($this->container['base64Data']) > 1024)) {
                $invalidProperties[] = "invalid value for 'base64Data', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['base64Data']) < 1)) {
                $invalidProperties[] = "invalid value for 'base64Data', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['rawSplice'] === null) {
            $invalidProperties[] = "'rawSplice' can't be null";
        }
            if ((mb_strlen($this->container['rawSplice']) > 8096)) {
                $invalidProperties[] = "invalid value for 'rawSplice', the character length must be smaller than or equal to 8096.";
            }
            if ((mb_strlen($this->container['rawSplice']) < 1)) {
                $invalidProperties[] = "invalid value for 'rawSplice', the character length must be bigger than or equal to 1.";
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
    * Gets type
    *  信号类型，splice_insert/time_signal。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 信号类型，splice_insert/time_signal。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets eventId
    *  广告信号的Event ID，Time Signal打印数组第一个。
    *
    * @return int
    */
    public function getEventId()
    {
        return $this->container['eventId'];
    }

    /**
    * Sets eventId
    *
    * @param int $eventId 广告信号的Event ID，Time Signal打印数组第一个。
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
        return $this;
    }

    /**
    * Gets startDate
    *  广告信号的执行时间，unix time，单位：秒。
    *
    * @return int
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param int $startDate 广告信号的执行时间，unix time，单位：秒。
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets duration
    *  广告信号时长，-1表示没有携带,单位：秒。
    *
    * @return int
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int $duration 广告信号时长，-1表示没有携带,单位：秒。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets segmentationType
    *  // Splice Insert填空\"-\"； // Time Signal，支持0x30，0x31，0x32，0x33，0x34，0x35，0x36，0x37 // 0x30: ProviderAdvertisementStart // 0x31: ProviderAdvertisementEnd // 0x32: DistributorAdvertisementStart // 0x33: DistributorAdvertisementEnd // 0x34: ProviderPlacementOpportunityStart // 0x35: ProviderPlacementOpportunityEnd // 0x36: DistributorPlacementOpportunityStart // 0x37: DistributorPlacementOpportunityEnd
    *
    * @return string
    */
    public function getSegmentationType()
    {
        return $this->container['segmentationType'];
    }

    /**
    * Sets segmentationType
    *
    * @param string $segmentationType // Splice Insert填空\"-\"； // Time Signal，支持0x30，0x31，0x32，0x33，0x34，0x35，0x36，0x37 // 0x30: ProviderAdvertisementStart // 0x31: ProviderAdvertisementEnd // 0x32: DistributorAdvertisementStart // 0x33: DistributorAdvertisementEnd // 0x34: ProviderPlacementOpportunityStart // 0x35: ProviderPlacementOpportunityEnd // 0x36: DistributorPlacementOpportunityStart // 0x37: DistributorPlacementOpportunityEnd
    *
    * @return $this
    */
    public function setSegmentationType($segmentationType)
    {
        $this->container['segmentationType'] = $segmentationType;
        return $this;
    }

    /**
    * Gets base64Data
    *  广告信号原始数据的base64值。
    *
    * @return string
    */
    public function getBase64Data()
    {
        return $this->container['base64Data'];
    }

    /**
    * Sets base64Data
    *
    * @param string $base64Data 广告信号原始数据的base64值。
    *
    * @return $this
    */
    public function setBase64Data($base64Data)
    {
        $this->container['base64Data'] = $base64Data;
        return $this;
    }

    /**
    * Gets rawSplice
    *  广告信号全量信息。
    *
    * @return string
    */
    public function getRawSplice()
    {
        return $this->container['rawSplice'];
    }

    /**
    * Sets rawSplice
    *
    * @param string $rawSplice 广告信号全量信息。
    *
    * @return $this
    */
    public function setRawSplice($rawSplice)
    {
        $this->container['rawSplice'] = $rawSplice;
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

