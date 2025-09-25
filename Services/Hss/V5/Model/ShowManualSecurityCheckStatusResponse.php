<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowManualSecurityCheckStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowManualSecurityCheckStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scanStatus  体检状态
    * totalHostNum  本次体检服务器数量
    * scanedHostNum  体检完成的服务器数量
    * contentNum  体检内容数量
    * scanProgress  体检进度百分比
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scanStatus' => 'string',
            'totalHostNum' => 'int',
            'scanedHostNum' => 'int',
            'contentNum' => 'int',
            'scanProgress' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scanStatus  体检状态
    * totalHostNum  本次体检服务器数量
    * scanedHostNum  体检完成的服务器数量
    * contentNum  体检内容数量
    * scanProgress  体检进度百分比
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scanStatus' => null,
        'totalHostNum' => 'int32',
        'scanedHostNum' => 'int32',
        'contentNum' => 'int32',
        'scanProgress' => 'int32'
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
    * scanStatus  体检状态
    * totalHostNum  本次体检服务器数量
    * scanedHostNum  体检完成的服务器数量
    * contentNum  体检内容数量
    * scanProgress  体检进度百分比
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scanStatus' => 'scan_status',
            'totalHostNum' => 'total_host_num',
            'scanedHostNum' => 'scaned_host_num',
            'contentNum' => 'content_num',
            'scanProgress' => 'scan_progress'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scanStatus  体检状态
    * totalHostNum  本次体检服务器数量
    * scanedHostNum  体检完成的服务器数量
    * contentNum  体检内容数量
    * scanProgress  体检进度百分比
    *
    * @var string[]
    */
    protected static $setters = [
            'scanStatus' => 'setScanStatus',
            'totalHostNum' => 'setTotalHostNum',
            'scanedHostNum' => 'setScanedHostNum',
            'contentNum' => 'setContentNum',
            'scanProgress' => 'setScanProgress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scanStatus  体检状态
    * totalHostNum  本次体检服务器数量
    * scanedHostNum  体检完成的服务器数量
    * contentNum  体检内容数量
    * scanProgress  体检进度百分比
    *
    * @var string[]
    */
    protected static $getters = [
            'scanStatus' => 'getScanStatus',
            'totalHostNum' => 'getTotalHostNum',
            'scanedHostNum' => 'getScanedHostNum',
            'contentNum' => 'getContentNum',
            'scanProgress' => 'getScanProgress'
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
    const SCAN_STATUS_SCANNING = 'scanning';
    const SCAN_STATUS_SCANED = 'scaned';
    const SCAN_STATUS_FAILED = 'failed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScanStatusAllowableValues()
    {
        return [
            self::SCAN_STATUS_SCANNING,
            self::SCAN_STATUS_SCANED,
            self::SCAN_STATUS_FAILED,
        ];
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
        $this->container['totalHostNum'] = isset($data['totalHostNum']) ? $data['totalHostNum'] : null;
        $this->container['scanedHostNum'] = isset($data['scanedHostNum']) ? $data['scanedHostNum'] : null;
        $this->container['contentNum'] = isset($data['contentNum']) ? $data['contentNum'] : null;
        $this->container['scanProgress'] = isset($data['scanProgress']) ? $data['scanProgress'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getScanStatusAllowableValues();
                if (!is_null($this->container['scanStatus']) && !in_array($this->container['scanStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scanStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  体检状态
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
    * @param string|null $scanStatus 体检状态
    *
    * @return $this
    */
    public function setScanStatus($scanStatus)
    {
        $this->container['scanStatus'] = $scanStatus;
        return $this;
    }

    /**
    * Gets totalHostNum
    *  本次体检服务器数量
    *
    * @return int|null
    */
    public function getTotalHostNum()
    {
        return $this->container['totalHostNum'];
    }

    /**
    * Sets totalHostNum
    *
    * @param int|null $totalHostNum 本次体检服务器数量
    *
    * @return $this
    */
    public function setTotalHostNum($totalHostNum)
    {
        $this->container['totalHostNum'] = $totalHostNum;
        return $this;
    }

    /**
    * Gets scanedHostNum
    *  体检完成的服务器数量
    *
    * @return int|null
    */
    public function getScanedHostNum()
    {
        return $this->container['scanedHostNum'];
    }

    /**
    * Sets scanedHostNum
    *
    * @param int|null $scanedHostNum 体检完成的服务器数量
    *
    * @return $this
    */
    public function setScanedHostNum($scanedHostNum)
    {
        $this->container['scanedHostNum'] = $scanedHostNum;
        return $this;
    }

    /**
    * Gets contentNum
    *  体检内容数量
    *
    * @return int|null
    */
    public function getContentNum()
    {
        return $this->container['contentNum'];
    }

    /**
    * Sets contentNum
    *
    * @param int|null $contentNum 体检内容数量
    *
    * @return $this
    */
    public function setContentNum($contentNum)
    {
        $this->container['contentNum'] = $contentNum;
        return $this;
    }

    /**
    * Gets scanProgress
    *  体检进度百分比
    *
    * @return int|null
    */
    public function getScanProgress()
    {
        return $this->container['scanProgress'];
    }

    /**
    * Sets scanProgress
    *
    * @param int|null $scanProgress 体检进度百分比
    *
    * @return $this
    */
    public function setScanProgress($scanProgress)
    {
        $this->container['scanProgress'] = $scanProgress;
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

