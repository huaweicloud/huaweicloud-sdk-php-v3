<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdateNotificationMaskTimeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdateNotificationMaskTimeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * notificationMaskIds  关联编号
    * maskType  maskType
    * startDate  屏蔽起始日期，yyyy-MM-dd。
    * startTime  屏蔽起始时间，HH:mm:ss。
    * endDate  屏蔽截止日期，yyyy-MM-dd。
    * endTime  屏蔽截止时间，HH:mm:ss。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'notificationMaskIds' => 'string[]',
            'maskType' => '\HuaweiCloud\SDK\Ces\V2\Model\MaskType',
            'startDate' => '\DateTime',
            'startTime' => 'string',
            'endDate' => '\DateTime',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * notificationMaskIds  关联编号
    * maskType  maskType
    * startDate  屏蔽起始日期，yyyy-MM-dd。
    * startTime  屏蔽起始时间，HH:mm:ss。
    * endDate  屏蔽截止日期，yyyy-MM-dd。
    * endTime  屏蔽截止时间，HH:mm:ss。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'notificationMaskIds' => null,
        'maskType' => null,
        'startDate' => 'date',
        'startTime' => null,
        'endDate' => 'date',
        'endTime' => null
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
    * notificationMaskIds  关联编号
    * maskType  maskType
    * startDate  屏蔽起始日期，yyyy-MM-dd。
    * startTime  屏蔽起始时间，HH:mm:ss。
    * endDate  屏蔽截止日期，yyyy-MM-dd。
    * endTime  屏蔽截止时间，HH:mm:ss。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'notificationMaskIds' => 'notification_mask_ids',
            'maskType' => 'mask_type',
            'startDate' => 'start_date',
            'startTime' => 'start_time',
            'endDate' => 'end_date',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * notificationMaskIds  关联编号
    * maskType  maskType
    * startDate  屏蔽起始日期，yyyy-MM-dd。
    * startTime  屏蔽起始时间，HH:mm:ss。
    * endDate  屏蔽截止日期，yyyy-MM-dd。
    * endTime  屏蔽截止时间，HH:mm:ss。
    *
    * @var string[]
    */
    protected static $setters = [
            'notificationMaskIds' => 'setNotificationMaskIds',
            'maskType' => 'setMaskType',
            'startDate' => 'setStartDate',
            'startTime' => 'setStartTime',
            'endDate' => 'setEndDate',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * notificationMaskIds  关联编号
    * maskType  maskType
    * startDate  屏蔽起始日期，yyyy-MM-dd。
    * startTime  屏蔽起始时间，HH:mm:ss。
    * endDate  屏蔽截止日期，yyyy-MM-dd。
    * endTime  屏蔽截止时间，HH:mm:ss。
    *
    * @var string[]
    */
    protected static $getters = [
            'notificationMaskIds' => 'getNotificationMaskIds',
            'maskType' => 'getMaskType',
            'startDate' => 'getStartDate',
            'startTime' => 'getStartTime',
            'endDate' => 'getEndDate',
            'endTime' => 'getEndTime'
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
        $this->container['notificationMaskIds'] = isset($data['notificationMaskIds']) ? $data['notificationMaskIds'] : null;
        $this->container['maskType'] = isset($data['maskType']) ? $data['maskType'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['notificationMaskIds'] === null) {
            $invalidProperties[] = "'notificationMaskIds' can't be null";
        }
        if ($this->container['maskType'] === null) {
            $invalidProperties[] = "'maskType' can't be null";
        }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 8)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 8)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 8.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 8)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 8)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 8.";
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
    * Gets notificationMaskIds
    *  关联编号
    *
    * @return string[]
    */
    public function getNotificationMaskIds()
    {
        return $this->container['notificationMaskIds'];
    }

    /**
    * Sets notificationMaskIds
    *
    * @param string[] $notificationMaskIds 关联编号
    *
    * @return $this
    */
    public function setNotificationMaskIds($notificationMaskIds)
    {
        $this->container['notificationMaskIds'] = $notificationMaskIds;
        return $this;
    }

    /**
    * Gets maskType
    *  maskType
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\MaskType
    */
    public function getMaskType()
    {
        return $this->container['maskType'];
    }

    /**
    * Sets maskType
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\MaskType $maskType maskType
    *
    * @return $this
    */
    public function setMaskType($maskType)
    {
        $this->container['maskType'] = $maskType;
        return $this;
    }

    /**
    * Gets startDate
    *  屏蔽起始日期，yyyy-MM-dd。
    *
    * @return \DateTime|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param \DateTime|null $startDate 屏蔽起始日期，yyyy-MM-dd。
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets startTime
    *  屏蔽起始时间，HH:mm:ss。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 屏蔽起始时间，HH:mm:ss。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endDate
    *  屏蔽截止日期，yyyy-MM-dd。
    *
    * @return \DateTime|null
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param \DateTime|null $endDate 屏蔽截止日期，yyyy-MM-dd。
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
        return $this;
    }

    /**
    * Gets endTime
    *  屏蔽截止时间，HH:mm:ss。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 屏蔽截止时间，HH:mm:ss。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

