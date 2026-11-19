<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSecurityRiskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSecurityRiskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostRiskInfo  hostRiskInfo
    * containerRiskInfo  containerRiskInfo
    * trendDataList  **参数解释**: 安全风险趋势 **取值范围**: 取值0-30个TrendRiskInfo对象
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostRiskInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\HostRiskInfo',
            'containerRiskInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ContainerRiskInfo',
            'trendDataList' => '\HuaweiCloud\SDK\Hss\V5\Model\TrendRiskInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostRiskInfo  hostRiskInfo
    * containerRiskInfo  containerRiskInfo
    * trendDataList  **参数解释**: 安全风险趋势 **取值范围**: 取值0-30个TrendRiskInfo对象
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostRiskInfo' => null,
        'containerRiskInfo' => null,
        'trendDataList' => null
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
    * hostRiskInfo  hostRiskInfo
    * containerRiskInfo  containerRiskInfo
    * trendDataList  **参数解释**: 安全风险趋势 **取值范围**: 取值0-30个TrendRiskInfo对象
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostRiskInfo' => 'host_risk_info',
            'containerRiskInfo' => 'container_risk_info',
            'trendDataList' => 'trend_data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostRiskInfo  hostRiskInfo
    * containerRiskInfo  containerRiskInfo
    * trendDataList  **参数解释**: 安全风险趋势 **取值范围**: 取值0-30个TrendRiskInfo对象
    *
    * @var string[]
    */
    protected static $setters = [
            'hostRiskInfo' => 'setHostRiskInfo',
            'containerRiskInfo' => 'setContainerRiskInfo',
            'trendDataList' => 'setTrendDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostRiskInfo  hostRiskInfo
    * containerRiskInfo  containerRiskInfo
    * trendDataList  **参数解释**: 安全风险趋势 **取值范围**: 取值0-30个TrendRiskInfo对象
    *
    * @var string[]
    */
    protected static $getters = [
            'hostRiskInfo' => 'getHostRiskInfo',
            'containerRiskInfo' => 'getContainerRiskInfo',
            'trendDataList' => 'getTrendDataList'
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
        $this->container['hostRiskInfo'] = isset($data['hostRiskInfo']) ? $data['hostRiskInfo'] : null;
        $this->container['containerRiskInfo'] = isset($data['containerRiskInfo']) ? $data['containerRiskInfo'] : null;
        $this->container['trendDataList'] = isset($data['trendDataList']) ? $data['trendDataList'] : null;
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
    * Gets hostRiskInfo
    *  hostRiskInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\HostRiskInfo|null
    */
    public function getHostRiskInfo()
    {
        return $this->container['hostRiskInfo'];
    }

    /**
    * Sets hostRiskInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HostRiskInfo|null $hostRiskInfo hostRiskInfo
    *
    * @return $this
    */
    public function setHostRiskInfo($hostRiskInfo)
    {
        $this->container['hostRiskInfo'] = $hostRiskInfo;
        return $this;
    }

    /**
    * Gets containerRiskInfo
    *  containerRiskInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ContainerRiskInfo|null
    */
    public function getContainerRiskInfo()
    {
        return $this->container['containerRiskInfo'];
    }

    /**
    * Sets containerRiskInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ContainerRiskInfo|null $containerRiskInfo containerRiskInfo
    *
    * @return $this
    */
    public function setContainerRiskInfo($containerRiskInfo)
    {
        $this->container['containerRiskInfo'] = $containerRiskInfo;
        return $this;
    }

    /**
    * Gets trendDataList
    *  **参数解释**: 安全风险趋势 **取值范围**: 取值0-30个TrendRiskInfo对象
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\TrendRiskInfo[]|null
    */
    public function getTrendDataList()
    {
        return $this->container['trendDataList'];
    }

    /**
    * Sets trendDataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\TrendRiskInfo[]|null $trendDataList **参数解释**: 安全风险趋势 **取值范围**: 取值0-30个TrendRiskInfo对象
    *
    * @return $this
    */
    public function setTrendDataList($trendDataList)
    {
        $this->container['trendDataList'] = $trendDataList;
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

