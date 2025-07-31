<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTasksResponseInfoIacScanInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTasksResponseInfo_iac_scan_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileType  文件类型，包含如下   - dockerfile：Dockerfile文件   - k8s_yaml：k8s yaml文件
    * scanFileNum  当前任务扫描的文件总数
    * successFileNum  当前任务扫描成功的文件数量
    * failedFileNum  当前任务扫描失败的文件数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileType' => 'string',
            'scanFileNum' => 'int',
            'successFileNum' => 'int',
            'failedFileNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileType  文件类型，包含如下   - dockerfile：Dockerfile文件   - k8s_yaml：k8s yaml文件
    * scanFileNum  当前任务扫描的文件总数
    * successFileNum  当前任务扫描成功的文件数量
    * failedFileNum  当前任务扫描失败的文件数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileType' => null,
        'scanFileNum' => 'int32',
        'successFileNum' => 'int32',
        'failedFileNum' => 'int32'
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
    * fileType  文件类型，包含如下   - dockerfile：Dockerfile文件   - k8s_yaml：k8s yaml文件
    * scanFileNum  当前任务扫描的文件总数
    * successFileNum  当前任务扫描成功的文件数量
    * failedFileNum  当前任务扫描失败的文件数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileType' => 'file_type',
            'scanFileNum' => 'scan_file_num',
            'successFileNum' => 'success_file_num',
            'failedFileNum' => 'failed_file_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileType  文件类型，包含如下   - dockerfile：Dockerfile文件   - k8s_yaml：k8s yaml文件
    * scanFileNum  当前任务扫描的文件总数
    * successFileNum  当前任务扫描成功的文件数量
    * failedFileNum  当前任务扫描失败的文件数量
    *
    * @var string[]
    */
    protected static $setters = [
            'fileType' => 'setFileType',
            'scanFileNum' => 'setScanFileNum',
            'successFileNum' => 'setSuccessFileNum',
            'failedFileNum' => 'setFailedFileNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileType  文件类型，包含如下   - dockerfile：Dockerfile文件   - k8s_yaml：k8s yaml文件
    * scanFileNum  当前任务扫描的文件总数
    * successFileNum  当前任务扫描成功的文件数量
    * failedFileNum  当前任务扫描失败的文件数量
    *
    * @var string[]
    */
    protected static $getters = [
            'fileType' => 'getFileType',
            'scanFileNum' => 'getScanFileNum',
            'successFileNum' => 'getSuccessFileNum',
            'failedFileNum' => 'getFailedFileNum'
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
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['scanFileNum'] = isset($data['scanFileNum']) ? $data['scanFileNum'] : null;
        $this->container['successFileNum'] = isset($data['successFileNum']) ? $data['successFileNum'] : null;
        $this->container['failedFileNum'] = isset($data['failedFileNum']) ? $data['failedFileNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileType']) && !preg_match("/^dockerfile|k8s_yaml$/", $this->container['fileType'])) {
                $invalidProperties[] = "invalid value for 'fileType', must be conform to the pattern /^dockerfile|k8s_yaml$/.";
            }
            if (!is_null($this->container['scanFileNum']) && ($this->container['scanFileNum'] > 100)) {
                $invalidProperties[] = "invalid value for 'scanFileNum', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['scanFileNum']) && ($this->container['scanFileNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'scanFileNum', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['successFileNum']) && ($this->container['successFileNum'] > 100)) {
                $invalidProperties[] = "invalid value for 'successFileNum', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['successFileNum']) && ($this->container['successFileNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'successFileNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedFileNum']) && ($this->container['failedFileNum'] > 100)) {
                $invalidProperties[] = "invalid value for 'failedFileNum', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['failedFileNum']) && ($this->container['failedFileNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'failedFileNum', must be bigger than or equal to 0.";
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
    * Gets fileType
    *  文件类型，包含如下   - dockerfile：Dockerfile文件   - k8s_yaml：k8s yaml文件
    *
    * @return string|null
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string|null $fileType 文件类型，包含如下   - dockerfile：Dockerfile文件   - k8s_yaml：k8s yaml文件
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets scanFileNum
    *  当前任务扫描的文件总数
    *
    * @return int|null
    */
    public function getScanFileNum()
    {
        return $this->container['scanFileNum'];
    }

    /**
    * Sets scanFileNum
    *
    * @param int|null $scanFileNum 当前任务扫描的文件总数
    *
    * @return $this
    */
    public function setScanFileNum($scanFileNum)
    {
        $this->container['scanFileNum'] = $scanFileNum;
        return $this;
    }

    /**
    * Gets successFileNum
    *  当前任务扫描成功的文件数量
    *
    * @return int|null
    */
    public function getSuccessFileNum()
    {
        return $this->container['successFileNum'];
    }

    /**
    * Sets successFileNum
    *
    * @param int|null $successFileNum 当前任务扫描成功的文件数量
    *
    * @return $this
    */
    public function setSuccessFileNum($successFileNum)
    {
        $this->container['successFileNum'] = $successFileNum;
        return $this;
    }

    /**
    * Gets failedFileNum
    *  当前任务扫描失败的文件数量
    *
    * @return int|null
    */
    public function getFailedFileNum()
    {
        return $this->container['failedFileNum'];
    }

    /**
    * Sets failedFileNum
    *
    * @param int|null $failedFileNum 当前任务扫描失败的文件数量
    *
    * @return $this
    */
    public function setFailedFileNum($failedFileNum)
    {
        $this->container['failedFileNum'] = $failedFileNum;
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

