<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatisticResourceDataItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatisticResourceDataItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * time  日期/月份。
    * vmrParties  VMR方数。 category = used_vmr_info时有效。
    * maxConcurrencyVmrCount  VMR并发使用数。 category = used_vmr_info时有效。
    * livePortUsedCount  直播端口并发使用数。 category = used_live_info时有效。
    * recordUsedSize  录播使用空间(G)。 category = used_record_info时有效。
    * pstnUsedDuration  PSTN外呼时长(分钟)。 category = used_pstn_info时有效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'time' => 'string',
            'vmrParties' => 'string',
            'maxConcurrencyVmrCount' => 'string',
            'livePortUsedCount' => 'string',
            'recordUsedSize' => 'string',
            'pstnUsedDuration' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * time  日期/月份。
    * vmrParties  VMR方数。 category = used_vmr_info时有效。
    * maxConcurrencyVmrCount  VMR并发使用数。 category = used_vmr_info时有效。
    * livePortUsedCount  直播端口并发使用数。 category = used_live_info时有效。
    * recordUsedSize  录播使用空间(G)。 category = used_record_info时有效。
    * pstnUsedDuration  PSTN外呼时长(分钟)。 category = used_pstn_info时有效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'time' => null,
        'vmrParties' => null,
        'maxConcurrencyVmrCount' => null,
        'livePortUsedCount' => null,
        'recordUsedSize' => null,
        'pstnUsedDuration' => null
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
    * time  日期/月份。
    * vmrParties  VMR方数。 category = used_vmr_info时有效。
    * maxConcurrencyVmrCount  VMR并发使用数。 category = used_vmr_info时有效。
    * livePortUsedCount  直播端口并发使用数。 category = used_live_info时有效。
    * recordUsedSize  录播使用空间(G)。 category = used_record_info时有效。
    * pstnUsedDuration  PSTN外呼时长(分钟)。 category = used_pstn_info时有效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'time' => 'time',
            'vmrParties' => 'vmrParties',
            'maxConcurrencyVmrCount' => 'maxConcurrencyVmrCount',
            'livePortUsedCount' => 'livePortUsedCount',
            'recordUsedSize' => 'recordUsedSize',
            'pstnUsedDuration' => 'pstnUsedDuration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * time  日期/月份。
    * vmrParties  VMR方数。 category = used_vmr_info时有效。
    * maxConcurrencyVmrCount  VMR并发使用数。 category = used_vmr_info时有效。
    * livePortUsedCount  直播端口并发使用数。 category = used_live_info时有效。
    * recordUsedSize  录播使用空间(G)。 category = used_record_info时有效。
    * pstnUsedDuration  PSTN外呼时长(分钟)。 category = used_pstn_info时有效。
    *
    * @var string[]
    */
    protected static $setters = [
            'time' => 'setTime',
            'vmrParties' => 'setVmrParties',
            'maxConcurrencyVmrCount' => 'setMaxConcurrencyVmrCount',
            'livePortUsedCount' => 'setLivePortUsedCount',
            'recordUsedSize' => 'setRecordUsedSize',
            'pstnUsedDuration' => 'setPstnUsedDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * time  日期/月份。
    * vmrParties  VMR方数。 category = used_vmr_info时有效。
    * maxConcurrencyVmrCount  VMR并发使用数。 category = used_vmr_info时有效。
    * livePortUsedCount  直播端口并发使用数。 category = used_live_info时有效。
    * recordUsedSize  录播使用空间(G)。 category = used_record_info时有效。
    * pstnUsedDuration  PSTN外呼时长(分钟)。 category = used_pstn_info时有效。
    *
    * @var string[]
    */
    protected static $getters = [
            'time' => 'getTime',
            'vmrParties' => 'getVmrParties',
            'maxConcurrencyVmrCount' => 'getMaxConcurrencyVmrCount',
            'livePortUsedCount' => 'getLivePortUsedCount',
            'recordUsedSize' => 'getRecordUsedSize',
            'pstnUsedDuration' => 'getPstnUsedDuration'
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
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['vmrParties'] = isset($data['vmrParties']) ? $data['vmrParties'] : null;
        $this->container['maxConcurrencyVmrCount'] = isset($data['maxConcurrencyVmrCount']) ? $data['maxConcurrencyVmrCount'] : null;
        $this->container['livePortUsedCount'] = isset($data['livePortUsedCount']) ? $data['livePortUsedCount'] : null;
        $this->container['recordUsedSize'] = isset($data['recordUsedSize']) ? $data['recordUsedSize'] : null;
        $this->container['pstnUsedDuration'] = isset($data['pstnUsedDuration']) ? $data['pstnUsedDuration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['time']) && (mb_strlen($this->container['time']) > 128)) {
                $invalidProperties[] = "invalid value for 'time', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['time']) && (mb_strlen($this->container['time']) < 1)) {
                $invalidProperties[] = "invalid value for 'time', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vmrParties']) && (mb_strlen($this->container['vmrParties']) > 128)) {
                $invalidProperties[] = "invalid value for 'vmrParties', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['vmrParties']) && (mb_strlen($this->container['vmrParties']) < 1)) {
                $invalidProperties[] = "invalid value for 'vmrParties', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maxConcurrencyVmrCount']) && (mb_strlen($this->container['maxConcurrencyVmrCount']) > 128)) {
                $invalidProperties[] = "invalid value for 'maxConcurrencyVmrCount', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['maxConcurrencyVmrCount']) && (mb_strlen($this->container['maxConcurrencyVmrCount']) < 1)) {
                $invalidProperties[] = "invalid value for 'maxConcurrencyVmrCount', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['livePortUsedCount']) && (mb_strlen($this->container['livePortUsedCount']) > 128)) {
                $invalidProperties[] = "invalid value for 'livePortUsedCount', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['livePortUsedCount']) && (mb_strlen($this->container['livePortUsedCount']) < 1)) {
                $invalidProperties[] = "invalid value for 'livePortUsedCount', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['recordUsedSize']) && (mb_strlen($this->container['recordUsedSize']) > 128)) {
                $invalidProperties[] = "invalid value for 'recordUsedSize', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['recordUsedSize']) && (mb_strlen($this->container['recordUsedSize']) < 1)) {
                $invalidProperties[] = "invalid value for 'recordUsedSize', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pstnUsedDuration']) && (mb_strlen($this->container['pstnUsedDuration']) > 128)) {
                $invalidProperties[] = "invalid value for 'pstnUsedDuration', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['pstnUsedDuration']) && (mb_strlen($this->container['pstnUsedDuration']) < 1)) {
                $invalidProperties[] = "invalid value for 'pstnUsedDuration', the character length must be bigger than or equal to 1.";
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
    * Gets time
    *  日期/月份。
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 日期/月份。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets vmrParties
    *  VMR方数。 category = used_vmr_info时有效。
    *
    * @return string|null
    */
    public function getVmrParties()
    {
        return $this->container['vmrParties'];
    }

    /**
    * Sets vmrParties
    *
    * @param string|null $vmrParties VMR方数。 category = used_vmr_info时有效。
    *
    * @return $this
    */
    public function setVmrParties($vmrParties)
    {
        $this->container['vmrParties'] = $vmrParties;
        return $this;
    }

    /**
    * Gets maxConcurrencyVmrCount
    *  VMR并发使用数。 category = used_vmr_info时有效。
    *
    * @return string|null
    */
    public function getMaxConcurrencyVmrCount()
    {
        return $this->container['maxConcurrencyVmrCount'];
    }

    /**
    * Sets maxConcurrencyVmrCount
    *
    * @param string|null $maxConcurrencyVmrCount VMR并发使用数。 category = used_vmr_info时有效。
    *
    * @return $this
    */
    public function setMaxConcurrencyVmrCount($maxConcurrencyVmrCount)
    {
        $this->container['maxConcurrencyVmrCount'] = $maxConcurrencyVmrCount;
        return $this;
    }

    /**
    * Gets livePortUsedCount
    *  直播端口并发使用数。 category = used_live_info时有效。
    *
    * @return string|null
    */
    public function getLivePortUsedCount()
    {
        return $this->container['livePortUsedCount'];
    }

    /**
    * Sets livePortUsedCount
    *
    * @param string|null $livePortUsedCount 直播端口并发使用数。 category = used_live_info时有效。
    *
    * @return $this
    */
    public function setLivePortUsedCount($livePortUsedCount)
    {
        $this->container['livePortUsedCount'] = $livePortUsedCount;
        return $this;
    }

    /**
    * Gets recordUsedSize
    *  录播使用空间(G)。 category = used_record_info时有效。
    *
    * @return string|null
    */
    public function getRecordUsedSize()
    {
        return $this->container['recordUsedSize'];
    }

    /**
    * Sets recordUsedSize
    *
    * @param string|null $recordUsedSize 录播使用空间(G)。 category = used_record_info时有效。
    *
    * @return $this
    */
    public function setRecordUsedSize($recordUsedSize)
    {
        $this->container['recordUsedSize'] = $recordUsedSize;
        return $this;
    }

    /**
    * Gets pstnUsedDuration
    *  PSTN外呼时长(分钟)。 category = used_pstn_info时有效。
    *
    * @return string|null
    */
    public function getPstnUsedDuration()
    {
        return $this->container['pstnUsedDuration'];
    }

    /**
    * Sets pstnUsedDuration
    *
    * @param string|null $pstnUsedDuration PSTN外呼时长(分钟)。 category = used_pstn_info时有效。
    *
    * @return $this
    */
    public function setPstnUsedDuration($pstnUsedDuration)
    {
        $this->container['pstnUsedDuration'] = $pstnUsedDuration;
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

