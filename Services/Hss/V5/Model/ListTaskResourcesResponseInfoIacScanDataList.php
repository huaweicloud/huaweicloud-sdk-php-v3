<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTaskResourcesResponseInfoIacScanDataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTaskResourcesResponseInfo_iac_scan_data_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileName  文件名称
    * fileType  文件类型，包含如下   - dockerfile：Dockerfile文件   - k8s_yaml：k8s yaml文件
    * chartName  chart包名称
    * fileId  文件ID，服务生成的文件唯一ID
    * fileSize  文件大小
    * scanStatus  文件的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    * failedReason  扫描失败的原因
    * startTime  扫描开始的时间
    * endTime  扫描结束的时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileName' => 'string',
            'fileType' => 'string',
            'chartName' => 'string',
            'fileId' => 'string',
            'fileSize' => 'int',
            'scanStatus' => 'string',
            'failedReason' => 'string',
            'startTime' => 'int',
            'endTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileName  文件名称
    * fileType  文件类型，包含如下   - dockerfile：Dockerfile文件   - k8s_yaml：k8s yaml文件
    * chartName  chart包名称
    * fileId  文件ID，服务生成的文件唯一ID
    * fileSize  文件大小
    * scanStatus  文件的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    * failedReason  扫描失败的原因
    * startTime  扫描开始的时间
    * endTime  扫描结束的时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileName' => null,
        'fileType' => null,
        'chartName' => null,
        'fileId' => null,
        'fileSize' => 'int32',
        'scanStatus' => null,
        'failedReason' => null,
        'startTime' => 'int64',
        'endTime' => 'int64'
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
    * fileName  文件名称
    * fileType  文件类型，包含如下   - dockerfile：Dockerfile文件   - k8s_yaml：k8s yaml文件
    * chartName  chart包名称
    * fileId  文件ID，服务生成的文件唯一ID
    * fileSize  文件大小
    * scanStatus  文件的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    * failedReason  扫描失败的原因
    * startTime  扫描开始的时间
    * endTime  扫描结束的时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileName' => 'file_name',
            'fileType' => 'file_type',
            'chartName' => 'chart_name',
            'fileId' => 'file_id',
            'fileSize' => 'file_size',
            'scanStatus' => 'scan_status',
            'failedReason' => 'failed_reason',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileName  文件名称
    * fileType  文件类型，包含如下   - dockerfile：Dockerfile文件   - k8s_yaml：k8s yaml文件
    * chartName  chart包名称
    * fileId  文件ID，服务生成的文件唯一ID
    * fileSize  文件大小
    * scanStatus  文件的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    * failedReason  扫描失败的原因
    * startTime  扫描开始的时间
    * endTime  扫描结束的时间
    *
    * @var string[]
    */
    protected static $setters = [
            'fileName' => 'setFileName',
            'fileType' => 'setFileType',
            'chartName' => 'setChartName',
            'fileId' => 'setFileId',
            'fileSize' => 'setFileSize',
            'scanStatus' => 'setScanStatus',
            'failedReason' => 'setFailedReason',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileName  文件名称
    * fileType  文件类型，包含如下   - dockerfile：Dockerfile文件   - k8s_yaml：k8s yaml文件
    * chartName  chart包名称
    * fileId  文件ID，服务生成的文件唯一ID
    * fileSize  文件大小
    * scanStatus  文件的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    * failedReason  扫描失败的原因
    * startTime  扫描开始的时间
    * endTime  扫描结束的时间
    *
    * @var string[]
    */
    protected static $getters = [
            'fileName' => 'getFileName',
            'fileType' => 'getFileType',
            'chartName' => 'getChartName',
            'fileId' => 'getFileId',
            'fileSize' => 'getFileSize',
            'scanStatus' => 'getScanStatus',
            'failedReason' => 'getFailedReason',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['chartName'] = isset($data['chartName']) ? $data['chartName'] : null;
        $this->container['fileId'] = isset($data['fileId']) ? $data['fileId'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 512)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileType']) && !preg_match("/^dockerfile|k8s_yaml$/", $this->container['fileType'])) {
                $invalidProperties[] = "invalid value for 'fileType', must be conform to the pattern /^dockerfile|k8s_yaml$/.";
            }
            if (!is_null($this->container['chartName']) && (mb_strlen($this->container['chartName']) > 512)) {
                $invalidProperties[] = "invalid value for 'chartName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['chartName']) && (mb_strlen($this->container['chartName']) < 1)) {
                $invalidProperties[] = "invalid value for 'chartName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileId']) && (mb_strlen($this->container['fileId']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fileId']) && (mb_strlen($this->container['fileId']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileSize']) && ($this->container['fileSize'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'fileSize', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['fileSize']) && ($this->container['fileSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'fileSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedReason']) && (mb_strlen($this->container['failedReason']) > 256)) {
                $invalidProperties[] = "invalid value for 'failedReason', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['failedReason']) && (mb_strlen($this->container['failedReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'failedReason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
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
    * Gets fileName
    *  文件名称
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 文件名称
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
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
    * Gets chartName
    *  chart包名称
    *
    * @return string|null
    */
    public function getChartName()
    {
        return $this->container['chartName'];
    }

    /**
    * Sets chartName
    *
    * @param string|null $chartName chart包名称
    *
    * @return $this
    */
    public function setChartName($chartName)
    {
        $this->container['chartName'] = $chartName;
        return $this;
    }

    /**
    * Gets fileId
    *  文件ID，服务生成的文件唯一ID
    *
    * @return string|null
    */
    public function getFileId()
    {
        return $this->container['fileId'];
    }

    /**
    * Sets fileId
    *
    * @param string|null $fileId 文件ID，服务生成的文件唯一ID
    *
    * @return $this
    */
    public function setFileId($fileId)
    {
        $this->container['fileId'] = $fileId;
        return $this;
    }

    /**
    * Gets fileSize
    *  文件大小
    *
    * @return int|null
    */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
    * Sets fileSize
    *
    * @param int|null $fileSize 文件大小
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
        return $this;
    }

    /**
    * Gets scanStatus
    *  文件的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
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
    * @param string|null $scanStatus 文件的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    *
    * @return $this
    */
    public function setScanStatus($scanStatus)
    {
        $this->container['scanStatus'] = $scanStatus;
        return $this;
    }

    /**
    * Gets failedReason
    *  扫描失败的原因
    *
    * @return string|null
    */
    public function getFailedReason()
    {
        return $this->container['failedReason'];
    }

    /**
    * Sets failedReason
    *
    * @param string|null $failedReason 扫描失败的原因
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
        return $this;
    }

    /**
    * Gets startTime
    *  扫描开始的时间
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 扫描开始的时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  扫描结束的时间
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 扫描结束的时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

