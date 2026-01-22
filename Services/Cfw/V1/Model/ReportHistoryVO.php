<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReportHistoryVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReportHistoryVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reportId  **参数解释**： 报告ID **取值范围**： 不涉及
    * sendTime  **参数解释**： 发送时间 **取值范围**： 不涉及
    * statisticPeriod  statisticPeriod
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reportId' => 'string',
            'sendTime' => 'int',
            'statisticPeriod' => '\HuaweiCloud\SDK\Cfw\V1\Model\StatisticPeriod'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reportId  **参数解释**： 报告ID **取值范围**： 不涉及
    * sendTime  **参数解释**： 发送时间 **取值范围**： 不涉及
    * statisticPeriod  statisticPeriod
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reportId' => null,
        'sendTime' => 'int64',
        'statisticPeriod' => null
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
    * reportId  **参数解释**： 报告ID **取值范围**： 不涉及
    * sendTime  **参数解释**： 发送时间 **取值范围**： 不涉及
    * statisticPeriod  statisticPeriod
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reportId' => 'report_id',
            'sendTime' => 'send_time',
            'statisticPeriod' => 'statistic_period'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reportId  **参数解释**： 报告ID **取值范围**： 不涉及
    * sendTime  **参数解释**： 发送时间 **取值范围**： 不涉及
    * statisticPeriod  statisticPeriod
    *
    * @var string[]
    */
    protected static $setters = [
            'reportId' => 'setReportId',
            'sendTime' => 'setSendTime',
            'statisticPeriod' => 'setStatisticPeriod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reportId  **参数解释**： 报告ID **取值范围**： 不涉及
    * sendTime  **参数解释**： 发送时间 **取值范围**： 不涉及
    * statisticPeriod  statisticPeriod
    *
    * @var string[]
    */
    protected static $getters = [
            'reportId' => 'getReportId',
            'sendTime' => 'getSendTime',
            'statisticPeriod' => 'getStatisticPeriod'
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
        $this->container['reportId'] = isset($data['reportId']) ? $data['reportId'] : null;
        $this->container['sendTime'] = isset($data['sendTime']) ? $data['sendTime'] : null;
        $this->container['statisticPeriod'] = isset($data['statisticPeriod']) ? $data['statisticPeriod'] : null;
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
    * Gets reportId
    *  **参数解释**： 报告ID **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getReportId()
    {
        return $this->container['reportId'];
    }

    /**
    * Sets reportId
    *
    * @param string|null $reportId **参数解释**： 报告ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setReportId($reportId)
    {
        $this->container['reportId'] = $reportId;
        return $this;
    }

    /**
    * Gets sendTime
    *  **参数解释**： 发送时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getSendTime()
    {
        return $this->container['sendTime'];
    }

    /**
    * Sets sendTime
    *
    * @param int|null $sendTime **参数解释**： 发送时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSendTime($sendTime)
    {
        $this->container['sendTime'] = $sendTime;
        return $this;
    }

    /**
    * Gets statisticPeriod
    *  statisticPeriod
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\StatisticPeriod|null
    */
    public function getStatisticPeriod()
    {
        return $this->container['statisticPeriod'];
    }

    /**
    * Sets statisticPeriod
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\StatisticPeriod|null $statisticPeriod statisticPeriod
    *
    * @return $this
    */
    public function setStatisticPeriod($statisticPeriod)
    {
        $this->container['statisticPeriod'] = $statisticPeriod;
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

