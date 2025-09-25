<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityCheckHostResultResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityCheckHostResultResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostInfo  hostInfo
    * severity  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    * riskRating  **参数解释**： 风险评分 **取值范围**： 不涉及
    * riskNum  **参数解释**： 风险数量 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckHostInfo',
            'severity' => 'string',
            'riskRating' => 'int',
            'riskNum' => 'int',
            'scanTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostInfo  hostInfo
    * severity  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    * riskRating  **参数解释**： 风险评分 **取值范围**： 不涉及
    * riskNum  **参数解释**： 风险数量 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostInfo' => null,
        'severity' => null,
        'riskRating' => 'int32',
        'riskNum' => 'int32',
        'scanTime' => 'int64'
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
    * hostInfo  hostInfo
    * severity  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    * riskRating  **参数解释**： 风险评分 **取值范围**： 不涉及
    * riskNum  **参数解释**： 风险数量 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostInfo' => 'host_info',
            'severity' => 'severity',
            'riskRating' => 'risk_rating',
            'riskNum' => 'risk_num',
            'scanTime' => 'scan_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostInfo  hostInfo
    * severity  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    * riskRating  **参数解释**： 风险评分 **取值范围**： 不涉及
    * riskNum  **参数解释**： 风险数量 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'hostInfo' => 'setHostInfo',
            'severity' => 'setSeverity',
            'riskRating' => 'setRiskRating',
            'riskNum' => 'setRiskNum',
            'scanTime' => 'setScanTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostInfo  hostInfo
    * severity  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    * riskRating  **参数解释**： 风险评分 **取值范围**： 不涉及
    * riskNum  **参数解释**： 风险数量 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'hostInfo' => 'getHostInfo',
            'severity' => 'getSeverity',
            'riskRating' => 'getRiskRating',
            'riskNum' => 'getRiskNum',
            'scanTime' => 'getScanTime'
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
        $this->container['hostInfo'] = isset($data['hostInfo']) ? $data['hostInfo'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['riskRating'] = isset($data['riskRating']) ? $data['riskRating'] : null;
        $this->container['riskNum'] = isset($data['riskNum']) ? $data['riskNum'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
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
    * Gets hostInfo
    *  hostInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckHostInfo|null
    */
    public function getHostInfo()
    {
        return $this->container['hostInfo'];
    }

    /**
    * Sets hostInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckHostInfo|null $hostInfo hostInfo
    *
    * @return $this
    */
    public function setHostInfo($hostInfo)
    {
        $this->container['hostInfo'] = $hostInfo;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets riskRating
    *  **参数解释**： 风险评分 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getRiskRating()
    {
        return $this->container['riskRating'];
    }

    /**
    * Sets riskRating
    *
    * @param int|null $riskRating **参数解释**： 风险评分 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRiskRating($riskRating)
    {
        $this->container['riskRating'] = $riskRating;
        return $this;
    }

    /**
    * Gets riskNum
    *  **参数解释**： 风险数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getRiskNum()
    {
        return $this->container['riskNum'];
    }

    /**
    * Sets riskNum
    *
    * @param int|null $riskNum **参数解释**： 风险数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRiskNum($riskNum)
    {
        $this->container['riskNum'] = $riskNum;
        return $this;
    }

    /**
    * Gets scanTime
    *  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getScanTime()
    {
        return $this->container['scanTime'];
    }

    /**
    * Sets scanTime
    *
    * @param int|null $scanTime **参数解释**： 最新检测时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
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

