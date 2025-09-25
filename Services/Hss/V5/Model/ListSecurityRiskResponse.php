<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecurityRiskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecurityRiskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmRisk  alarmRisk
    * baselineRisk  baselineRisk
    * assetRisk  assetRisk
    * securityProtectRisk  securityProtectRisk
    * vulRisk  vulRisk
    * imageRisk  imageRisk
    * totalRiskNum  **参数解释**： 总风险数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmRisk' => '\HuaweiCloud\SDK\Hss\V5\Model\AlarmRiskInfo',
            'baselineRisk' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityRiskResponseBaselineRisk',
            'assetRisk' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityRiskResponseAssetRisk',
            'securityProtectRisk' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityRiskResponseSecurityProtectRisk',
            'vulRisk' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityRiskResponseVulRisk',
            'imageRisk' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityRiskResponseImageRisk',
            'totalRiskNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmRisk  alarmRisk
    * baselineRisk  baselineRisk
    * assetRisk  assetRisk
    * securityProtectRisk  securityProtectRisk
    * vulRisk  vulRisk
    * imageRisk  imageRisk
    * totalRiskNum  **参数解释**： 总风险数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmRisk' => null,
        'baselineRisk' => null,
        'assetRisk' => null,
        'securityProtectRisk' => null,
        'vulRisk' => null,
        'imageRisk' => null,
        'totalRiskNum' => 'int32'
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
    * alarmRisk  alarmRisk
    * baselineRisk  baselineRisk
    * assetRisk  assetRisk
    * securityProtectRisk  securityProtectRisk
    * vulRisk  vulRisk
    * imageRisk  imageRisk
    * totalRiskNum  **参数解释**： 总风险数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmRisk' => 'alarm_risk',
            'baselineRisk' => 'baseline_risk',
            'assetRisk' => 'asset_risk',
            'securityProtectRisk' => 'security_protect_risk',
            'vulRisk' => 'vul_risk',
            'imageRisk' => 'image_risk',
            'totalRiskNum' => 'total_risk_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmRisk  alarmRisk
    * baselineRisk  baselineRisk
    * assetRisk  assetRisk
    * securityProtectRisk  securityProtectRisk
    * vulRisk  vulRisk
    * imageRisk  imageRisk
    * totalRiskNum  **参数解释**： 总风险数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmRisk' => 'setAlarmRisk',
            'baselineRisk' => 'setBaselineRisk',
            'assetRisk' => 'setAssetRisk',
            'securityProtectRisk' => 'setSecurityProtectRisk',
            'vulRisk' => 'setVulRisk',
            'imageRisk' => 'setImageRisk',
            'totalRiskNum' => 'setTotalRiskNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmRisk  alarmRisk
    * baselineRisk  baselineRisk
    * assetRisk  assetRisk
    * securityProtectRisk  securityProtectRisk
    * vulRisk  vulRisk
    * imageRisk  imageRisk
    * totalRiskNum  **参数解释**： 总风险数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmRisk' => 'getAlarmRisk',
            'baselineRisk' => 'getBaselineRisk',
            'assetRisk' => 'getAssetRisk',
            'securityProtectRisk' => 'getSecurityProtectRisk',
            'vulRisk' => 'getVulRisk',
            'imageRisk' => 'getImageRisk',
            'totalRiskNum' => 'getTotalRiskNum'
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
        $this->container['alarmRisk'] = isset($data['alarmRisk']) ? $data['alarmRisk'] : null;
        $this->container['baselineRisk'] = isset($data['baselineRisk']) ? $data['baselineRisk'] : null;
        $this->container['assetRisk'] = isset($data['assetRisk']) ? $data['assetRisk'] : null;
        $this->container['securityProtectRisk'] = isset($data['securityProtectRisk']) ? $data['securityProtectRisk'] : null;
        $this->container['vulRisk'] = isset($data['vulRisk']) ? $data['vulRisk'] : null;
        $this->container['imageRisk'] = isset($data['imageRisk']) ? $data['imageRisk'] : null;
        $this->container['totalRiskNum'] = isset($data['totalRiskNum']) ? $data['totalRiskNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalRiskNum']) && ($this->container['totalRiskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalRiskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalRiskNum']) && ($this->container['totalRiskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalRiskNum', must be bigger than or equal to 0.";
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
    * Gets alarmRisk
    *  alarmRisk
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AlarmRiskInfo|null
    */
    public function getAlarmRisk()
    {
        return $this->container['alarmRisk'];
    }

    /**
    * Sets alarmRisk
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AlarmRiskInfo|null $alarmRisk alarmRisk
    *
    * @return $this
    */
    public function setAlarmRisk($alarmRisk)
    {
        $this->container['alarmRisk'] = $alarmRisk;
        return $this;
    }

    /**
    * Gets baselineRisk
    *  baselineRisk
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityRiskResponseBaselineRisk|null
    */
    public function getBaselineRisk()
    {
        return $this->container['baselineRisk'];
    }

    /**
    * Sets baselineRisk
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityRiskResponseBaselineRisk|null $baselineRisk baselineRisk
    *
    * @return $this
    */
    public function setBaselineRisk($baselineRisk)
    {
        $this->container['baselineRisk'] = $baselineRisk;
        return $this;
    }

    /**
    * Gets assetRisk
    *  assetRisk
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityRiskResponseAssetRisk|null
    */
    public function getAssetRisk()
    {
        return $this->container['assetRisk'];
    }

    /**
    * Sets assetRisk
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityRiskResponseAssetRisk|null $assetRisk assetRisk
    *
    * @return $this
    */
    public function setAssetRisk($assetRisk)
    {
        $this->container['assetRisk'] = $assetRisk;
        return $this;
    }

    /**
    * Gets securityProtectRisk
    *  securityProtectRisk
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityRiskResponseSecurityProtectRisk|null
    */
    public function getSecurityProtectRisk()
    {
        return $this->container['securityProtectRisk'];
    }

    /**
    * Sets securityProtectRisk
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityRiskResponseSecurityProtectRisk|null $securityProtectRisk securityProtectRisk
    *
    * @return $this
    */
    public function setSecurityProtectRisk($securityProtectRisk)
    {
        $this->container['securityProtectRisk'] = $securityProtectRisk;
        return $this;
    }

    /**
    * Gets vulRisk
    *  vulRisk
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityRiskResponseVulRisk|null
    */
    public function getVulRisk()
    {
        return $this->container['vulRisk'];
    }

    /**
    * Sets vulRisk
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityRiskResponseVulRisk|null $vulRisk vulRisk
    *
    * @return $this
    */
    public function setVulRisk($vulRisk)
    {
        $this->container['vulRisk'] = $vulRisk;
        return $this;
    }

    /**
    * Gets imageRisk
    *  imageRisk
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityRiskResponseImageRisk|null
    */
    public function getImageRisk()
    {
        return $this->container['imageRisk'];
    }

    /**
    * Sets imageRisk
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityRiskResponseImageRisk|null $imageRisk imageRisk
    *
    * @return $this
    */
    public function setImageRisk($imageRisk)
    {
        $this->container['imageRisk'] = $imageRisk;
        return $this;
    }

    /**
    * Gets totalRiskNum
    *  **参数解释**： 总风险数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getTotalRiskNum()
    {
        return $this->container['totalRiskNum'];
    }

    /**
    * Sets totalRiskNum
    *
    * @param int|null $totalRiskNum **参数解释**： 总风险数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setTotalRiskNum($totalRiskNum)
    {
        $this->container['totalRiskNum'] = $totalRiskNum;
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

