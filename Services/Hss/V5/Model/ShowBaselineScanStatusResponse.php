<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBaselineScanStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBaselineScanStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - neverscan: 未扫描 - scanning: 扫描中 - scanned: 扫描完成 - failed: 扫描失败  **默认取值**: 不涉及
    * scannedTime  **参数解释**: 扫描结束时间，单位毫秒 **约束限制**: 不涉及 **取值范围**: 大小0-4070880000000 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scanStatus' => 'string',
            'scannedTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - neverscan: 未扫描 - scanning: 扫描中 - scanned: 扫描完成 - failed: 扫描失败  **默认取值**: 不涉及
    * scannedTime  **参数解释**: 扫描结束时间，单位毫秒 **约束限制**: 不涉及 **取值范围**: 大小0-4070880000000 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scanStatus' => null,
        'scannedTime' => 'int64'
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
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - neverscan: 未扫描 - scanning: 扫描中 - scanned: 扫描完成 - failed: 扫描失败  **默认取值**: 不涉及
    * scannedTime  **参数解释**: 扫描结束时间，单位毫秒 **约束限制**: 不涉及 **取值范围**: 大小0-4070880000000 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scanStatus' => 'scan_status',
            'scannedTime' => 'scanned_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - neverscan: 未扫描 - scanning: 扫描中 - scanned: 扫描完成 - failed: 扫描失败  **默认取值**: 不涉及
    * scannedTime  **参数解释**: 扫描结束时间，单位毫秒 **约束限制**: 不涉及 **取值范围**: 大小0-4070880000000 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'scanStatus' => 'setScanStatus',
            'scannedTime' => 'setScannedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scanStatus  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - neverscan: 未扫描 - scanning: 扫描中 - scanned: 扫描完成 - failed: 扫描失败  **默认取值**: 不涉及
    * scannedTime  **参数解释**: 扫描结束时间，单位毫秒 **约束限制**: 不涉及 **取值范围**: 大小0-4070880000000 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'scanStatus' => 'getScanStatus',
            'scannedTime' => 'getScannedTime'
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
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['scannedTime'] = isset($data['scannedTime']) ? $data['scannedTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanStatus']) && !preg_match("/^(neverscan|scanning|scanned|scanned)$/", $this->container['scanStatus'])) {
                $invalidProperties[] = "invalid value for 'scanStatus', must be conform to the pattern /^(neverscan|scanning|scanned|scanned)$/.";
            }
            if (!is_null($this->container['scannedTime']) && ($this->container['scannedTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'scannedTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['scannedTime']) && ($this->container['scannedTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scannedTime', must be bigger than or equal to 0.";
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
    * Gets scanStatus
    *  **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - neverscan: 未扫描 - scanning: 扫描中 - scanned: 扫描完成 - failed: 扫描失败  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getScanStatus()
    {
        return $this->container['scanStatus'];
    }

    /**
    * Sets scanStatus
    *
    * @param string|null $scanStatus **参数解释**: 扫描状态 **约束限制**: 不涉及 **取值范围**: - neverscan: 未扫描 - scanning: 扫描中 - scanned: 扫描完成 - failed: 扫描失败  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setScanStatus($scanStatus)
    {
        $this->container['scanStatus'] = $scanStatus;
        return $this;
    }

    /**
    * Gets scannedTime
    *  **参数解释**: 扫描结束时间，单位毫秒 **约束限制**: 不涉及 **取值范围**: 大小0-4070880000000 **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getScannedTime()
    {
        return $this->container['scannedTime'];
    }

    /**
    * Sets scannedTime
    *
    * @param int|null $scannedTime **参数解释**: 扫描结束时间，单位毫秒 **约束限制**: 不涉及 **取值范围**: 大小0-4070880000000 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setScannedTime($scannedTime)
    {
        $this->container['scannedTime'] = $scannedTime;
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

