<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthReportTableSpaceStat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthReportTableSpaceStat';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sizeTop  表大小Top列表。
    * rowsTop  表行数量Top列表。
    * sizeIncrTop  表大小增长Top列表。
    * rowsIncrTop  表行数量增长Top列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sizeTop' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceInfo[]',
            'rowsTop' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceInfo[]',
            'sizeIncrTop' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceIncrInfo[]',
            'rowsIncrTop' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceIncrInfo[]',
            'analyzeSuccess' => 'bool',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sizeTop  表大小Top列表。
    * rowsTop  表行数量Top列表。
    * sizeIncrTop  表大小增长Top列表。
    * rowsIncrTop  表行数量增长Top列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sizeTop' => null,
        'rowsTop' => null,
        'sizeIncrTop' => null,
        'rowsIncrTop' => null,
        'analyzeSuccess' => null,
        'errorMessage' => null
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
    * sizeTop  表大小Top列表。
    * rowsTop  表行数量Top列表。
    * sizeIncrTop  表大小增长Top列表。
    * rowsIncrTop  表行数量增长Top列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sizeTop' => 'size_top',
            'rowsTop' => 'rows_top',
            'sizeIncrTop' => 'size_incr_top',
            'rowsIncrTop' => 'rows_incr_top',
            'analyzeSuccess' => 'analyze_success',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sizeTop  表大小Top列表。
    * rowsTop  表行数量Top列表。
    * sizeIncrTop  表大小增长Top列表。
    * rowsIncrTop  表行数量增长Top列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'sizeTop' => 'setSizeTop',
            'rowsTop' => 'setRowsTop',
            'sizeIncrTop' => 'setSizeIncrTop',
            'rowsIncrTop' => 'setRowsIncrTop',
            'analyzeSuccess' => 'setAnalyzeSuccess',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sizeTop  表大小Top列表。
    * rowsTop  表行数量Top列表。
    * sizeIncrTop  表大小增长Top列表。
    * rowsIncrTop  表行数量增长Top列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'sizeTop' => 'getSizeTop',
            'rowsTop' => 'getRowsTop',
            'sizeIncrTop' => 'getSizeIncrTop',
            'rowsIncrTop' => 'getRowsIncrTop',
            'analyzeSuccess' => 'getAnalyzeSuccess',
            'errorMessage' => 'getErrorMessage'
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
        $this->container['sizeTop'] = isset($data['sizeTop']) ? $data['sizeTop'] : null;
        $this->container['rowsTop'] = isset($data['rowsTop']) ? $data['rowsTop'] : null;
        $this->container['sizeIncrTop'] = isset($data['sizeIncrTop']) ? $data['sizeIncrTop'] : null;
        $this->container['rowsIncrTop'] = isset($data['rowsIncrTop']) ? $data['rowsIncrTop'] : null;
        $this->container['analyzeSuccess'] = isset($data['analyzeSuccess']) ? $data['analyzeSuccess'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sizeTop'] === null) {
            $invalidProperties[] = "'sizeTop' can't be null";
        }
        if ($this->container['rowsTop'] === null) {
            $invalidProperties[] = "'rowsTop' can't be null";
        }
        if ($this->container['sizeIncrTop'] === null) {
            $invalidProperties[] = "'sizeIncrTop' can't be null";
        }
        if ($this->container['rowsIncrTop'] === null) {
            $invalidProperties[] = "'rowsIncrTop' can't be null";
        }
        if ($this->container['analyzeSuccess'] === null) {
            $invalidProperties[] = "'analyzeSuccess' can't be null";
        }
        if ($this->container['errorMessage'] === null) {
            $invalidProperties[] = "'errorMessage' can't be null";
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
    * Gets sizeTop
    *  表大小Top列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceInfo[]
    */
    public function getSizeTop()
    {
        return $this->container['sizeTop'];
    }

    /**
    * Sets sizeTop
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceInfo[] $sizeTop 表大小Top列表。
    *
    * @return $this
    */
    public function setSizeTop($sizeTop)
    {
        $this->container['sizeTop'] = $sizeTop;
        return $this;
    }

    /**
    * Gets rowsTop
    *  表行数量Top列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceInfo[]
    */
    public function getRowsTop()
    {
        return $this->container['rowsTop'];
    }

    /**
    * Sets rowsTop
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceInfo[] $rowsTop 表行数量Top列表。
    *
    * @return $this
    */
    public function setRowsTop($rowsTop)
    {
        $this->container['rowsTop'] = $rowsTop;
        return $this;
    }

    /**
    * Gets sizeIncrTop
    *  表大小增长Top列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceIncrInfo[]
    */
    public function getSizeIncrTop()
    {
        return $this->container['sizeIncrTop'];
    }

    /**
    * Sets sizeIncrTop
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceIncrInfo[] $sizeIncrTop 表大小增长Top列表。
    *
    * @return $this
    */
    public function setSizeIncrTop($sizeIncrTop)
    {
        $this->container['sizeIncrTop'] = $sizeIncrTop;
        return $this;
    }

    /**
    * Gets rowsIncrTop
    *  表行数量增长Top列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceIncrInfo[]
    */
    public function getRowsIncrTop()
    {
        return $this->container['rowsIncrTop'];
    }

    /**
    * Sets rowsIncrTop
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceIncrInfo[] $rowsIncrTop 表行数量增长Top列表。
    *
    * @return $this
    */
    public function setRowsIncrTop($rowsIncrTop)
    {
        $this->container['rowsIncrTop'] = $rowsIncrTop;
        return $this;
    }

    /**
    * Gets analyzeSuccess
    *  统计分析是否成功。
    *
    * @return bool
    */
    public function getAnalyzeSuccess()
    {
        return $this->container['analyzeSuccess'];
    }

    /**
    * Sets analyzeSuccess
    *
    * @param bool $analyzeSuccess 统计分析是否成功。
    *
    * @return $this
    */
    public function setAnalyzeSuccess($analyzeSuccess)
    {
        $this->container['analyzeSuccess'] = $analyzeSuccess;
        return $this;
    }

    /**
    * Gets errorMessage
    *  错误信息。
    *
    * @return string
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string $errorMessage 错误信息。
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
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

