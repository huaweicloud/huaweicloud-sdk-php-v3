<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RiskHandleInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RiskHandleInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * freeReportInfo  freeReportInfo
    * vulInfo  vulInfo
    * baseLineInfo  baseLineInfo
    * alarmInfo  alarmInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'freeReportInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\RiskHandleInfoFreeReportInfo',
            'vulInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\RiskHandleInfoVulInfo',
            'baseLineInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\RiskHandleInfoBaseLineInfo',
            'alarmInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\RiskHandleInfoAlarmInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * freeReportInfo  freeReportInfo
    * vulInfo  vulInfo
    * baseLineInfo  baseLineInfo
    * alarmInfo  alarmInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'freeReportInfo' => null,
        'vulInfo' => null,
        'baseLineInfo' => null,
        'alarmInfo' => null
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
    * freeReportInfo  freeReportInfo
    * vulInfo  vulInfo
    * baseLineInfo  baseLineInfo
    * alarmInfo  alarmInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'freeReportInfo' => 'free_report_info',
            'vulInfo' => 'vul_info',
            'baseLineInfo' => 'base_line_info',
            'alarmInfo' => 'alarm_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * freeReportInfo  freeReportInfo
    * vulInfo  vulInfo
    * baseLineInfo  baseLineInfo
    * alarmInfo  alarmInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'freeReportInfo' => 'setFreeReportInfo',
            'vulInfo' => 'setVulInfo',
            'baseLineInfo' => 'setBaseLineInfo',
            'alarmInfo' => 'setAlarmInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * freeReportInfo  freeReportInfo
    * vulInfo  vulInfo
    * baseLineInfo  baseLineInfo
    * alarmInfo  alarmInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'freeReportInfo' => 'getFreeReportInfo',
            'vulInfo' => 'getVulInfo',
            'baseLineInfo' => 'getBaseLineInfo',
            'alarmInfo' => 'getAlarmInfo'
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
        $this->container['freeReportInfo'] = isset($data['freeReportInfo']) ? $data['freeReportInfo'] : null;
        $this->container['vulInfo'] = isset($data['vulInfo']) ? $data['vulInfo'] : null;
        $this->container['baseLineInfo'] = isset($data['baseLineInfo']) ? $data['baseLineInfo'] : null;
        $this->container['alarmInfo'] = isset($data['alarmInfo']) ? $data['alarmInfo'] : null;
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
    * Gets freeReportInfo
    *  freeReportInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\RiskHandleInfoFreeReportInfo|null
    */
    public function getFreeReportInfo()
    {
        return $this->container['freeReportInfo'];
    }

    /**
    * Sets freeReportInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\RiskHandleInfoFreeReportInfo|null $freeReportInfo freeReportInfo
    *
    * @return $this
    */
    public function setFreeReportInfo($freeReportInfo)
    {
        $this->container['freeReportInfo'] = $freeReportInfo;
        return $this;
    }

    /**
    * Gets vulInfo
    *  vulInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\RiskHandleInfoVulInfo|null
    */
    public function getVulInfo()
    {
        return $this->container['vulInfo'];
    }

    /**
    * Sets vulInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\RiskHandleInfoVulInfo|null $vulInfo vulInfo
    *
    * @return $this
    */
    public function setVulInfo($vulInfo)
    {
        $this->container['vulInfo'] = $vulInfo;
        return $this;
    }

    /**
    * Gets baseLineInfo
    *  baseLineInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\RiskHandleInfoBaseLineInfo|null
    */
    public function getBaseLineInfo()
    {
        return $this->container['baseLineInfo'];
    }

    /**
    * Sets baseLineInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\RiskHandleInfoBaseLineInfo|null $baseLineInfo baseLineInfo
    *
    * @return $this
    */
    public function setBaseLineInfo($baseLineInfo)
    {
        $this->container['baseLineInfo'] = $baseLineInfo;
        return $this;
    }

    /**
    * Gets alarmInfo
    *  alarmInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\RiskHandleInfoAlarmInfo|null
    */
    public function getAlarmInfo()
    {
        return $this->container['alarmInfo'];
    }

    /**
    * Sets alarmInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\RiskHandleInfoAlarmInfo|null $alarmInfo alarmInfo
    *
    * @return $this
    */
    public function setAlarmInfo($alarmInfo)
    {
        $this->container['alarmInfo'] = $alarmInfo;
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

