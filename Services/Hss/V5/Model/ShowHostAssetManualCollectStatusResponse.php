<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowHostAssetManualCollectStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowHostAssetManualCollectStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scanStatus  手动检测状态
    * scannedTime  检测完成时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scanStatus' => 'string',
            'scannedTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scanStatus  手动检测状态
    * scannedTime  检测完成时间
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
    * scanStatus  手动检测状态
    * scannedTime  检测完成时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scanStatus' => 'scan_status',
            'scannedTime' => 'scanned_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scanStatus  手动检测状态
    * scannedTime  检测完成时间
    *
    * @var string[]
    */
    protected static $setters = [
            'scanStatus' => 'setScanStatus',
            'scannedTime' => 'setScannedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scanStatus  手动检测状态
    * scannedTime  检测完成时间
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
            if (!is_null($this->container['scanStatus']) && !preg_match("/^neverscan|scanning|scanned|failed|longscanning$/", $this->container['scanStatus'])) {
                $invalidProperties[] = "invalid value for 'scanStatus', must be conform to the pattern /^neverscan|scanning|scanned|failed|longscanning$/.";
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
    *  手动检测状态
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
    * @param string|null $scanStatus 手动检测状态
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
    *  检测完成时间
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
    * @param int|null $scannedTime 检测完成时间
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

