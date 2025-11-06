<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlarmHistoriesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlarmHistoriesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmHistories  **参数解释**： 一条或者多条告警历史详细信息
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmHistories' => '\HuaweiCloud\SDK\Ces\V1\Model\AlarmHistoryInfoResp[]',
            'metaData' => '\HuaweiCloud\SDK\Ces\V1\Model\MetaDataForAlarmHistoryResp'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmHistories  **参数解释**： 一条或者多条告警历史详细信息
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmHistories' => null,
        'metaData' => null
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
    * alarmHistories  **参数解释**： 一条或者多条告警历史详细信息
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmHistories' => 'alarm_histories',
            'metaData' => 'meta_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmHistories  **参数解释**： 一条或者多条告警历史详细信息
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmHistories' => 'setAlarmHistories',
            'metaData' => 'setMetaData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmHistories  **参数解释**： 一条或者多条告警历史详细信息
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmHistories' => 'getAlarmHistories',
            'metaData' => 'getMetaData'
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
        $this->container['alarmHistories'] = isset($data['alarmHistories']) ? $data['alarmHistories'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
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
    * Gets alarmHistories
    *  **参数解释**： 一条或者多条告警历史详细信息
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\AlarmHistoryInfoResp[]|null
    */
    public function getAlarmHistories()
    {
        return $this->container['alarmHistories'];
    }

    /**
    * Sets alarmHistories
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\AlarmHistoryInfoResp[]|null $alarmHistories **参数解释**： 一条或者多条告警历史详细信息
    *
    * @return $this
    */
    public function setAlarmHistories($alarmHistories)
    {
        $this->container['alarmHistories'] = $alarmHistories;
        return $this;
    }

    /**
    * Gets metaData
    *  metaData
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\MetaDataForAlarmHistoryResp|null
    */
    public function getMetaData()
    {
        return $this->container['metaData'];
    }

    /**
    * Sets metaData
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\MetaDataForAlarmHistoryResp|null $metaData metaData
    *
    * @return $this
    */
    public function setMetaData($metaData)
    {
        $this->container['metaData'] = $metaData;
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

