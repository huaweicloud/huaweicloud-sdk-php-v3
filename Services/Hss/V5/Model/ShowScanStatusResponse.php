<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowScanStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowScanStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scanStatus  **参数解释**： 手动检测状态 **取值范围**： - neverscan：无扫描任务 - scanning：扫描中 - scaned：扫描完成 - failed：扫描失败 - over_time：扫描超时（扫描时间超过30分钟） - longscanning：扫描超时（扫描时间超过60分钟）
    * scanedTime  **参数解释**： 检测完成时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scanStatus' => 'string',
            'scanedTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scanStatus  **参数解释**： 手动检测状态 **取值范围**： - neverscan：无扫描任务 - scanning：扫描中 - scaned：扫描完成 - failed：扫描失败 - over_time：扫描超时（扫描时间超过30分钟） - longscanning：扫描超时（扫描时间超过60分钟）
    * scanedTime  **参数解释**： 检测完成时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scanStatus' => null,
        'scanedTime' => 'int64'
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
    * scanStatus  **参数解释**： 手动检测状态 **取值范围**： - neverscan：无扫描任务 - scanning：扫描中 - scaned：扫描完成 - failed：扫描失败 - over_time：扫描超时（扫描时间超过30分钟） - longscanning：扫描超时（扫描时间超过60分钟）
    * scanedTime  **参数解释**： 检测完成时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scanStatus' => 'scan_status',
            'scanedTime' => 'scaned_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scanStatus  **参数解释**： 手动检测状态 **取值范围**： - neverscan：无扫描任务 - scanning：扫描中 - scaned：扫描完成 - failed：扫描失败 - over_time：扫描超时（扫描时间超过30分钟） - longscanning：扫描超时（扫描时间超过60分钟）
    * scanedTime  **参数解释**： 检测完成时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'scanStatus' => 'setScanStatus',
            'scanedTime' => 'setScanedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scanStatus  **参数解释**： 手动检测状态 **取值范围**： - neverscan：无扫描任务 - scanning：扫描中 - scaned：扫描完成 - failed：扫描失败 - over_time：扫描超时（扫描时间超过30分钟） - longscanning：扫描超时（扫描时间超过60分钟）
    * scanedTime  **参数解释**： 检测完成时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'scanStatus' => 'getScanStatus',
            'scanedTime' => 'getScanedTime'
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
        $this->container['scanedTime'] = isset($data['scanedTime']) ? $data['scanedTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**： 手动检测状态 **取值范围**： - neverscan：无扫描任务 - scanning：扫描中 - scaned：扫描完成 - failed：扫描失败 - over_time：扫描超时（扫描时间超过30分钟） - longscanning：扫描超时（扫描时间超过60分钟）
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
    * @param string|null $scanStatus **参数解释**： 手动检测状态 **取值范围**： - neverscan：无扫描任务 - scanning：扫描中 - scaned：扫描完成 - failed：扫描失败 - over_time：扫描超时（扫描时间超过30分钟） - longscanning：扫描超时（扫描时间超过60分钟）
    *
    * @return $this
    */
    public function setScanStatus($scanStatus)
    {
        $this->container['scanStatus'] = $scanStatus;
        return $this;
    }

    /**
    * Gets scanedTime
    *  **参数解释**： 检测完成时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getScanedTime()
    {
        return $this->container['scanedTime'];
    }

    /**
    * Sets scanedTime
    *
    * @param int|null $scanedTime **参数解释**： 检测完成时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setScanedTime($scanedTime)
    {
        $this->container['scanedTime'] = $scanedTime;
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

