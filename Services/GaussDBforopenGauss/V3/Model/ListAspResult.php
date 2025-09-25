<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAspResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAspResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  **参数解释**: 任务ID。 **取值范围**: 不涉及。
    * fileSize  **参数解释**: 文件大小单位KB。 **取值范围**: 当status为SUCCESS时，该值不为空。
    * startTime  **参数解释**: 开始采集时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 结束采集时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    * downloadUrl  **参数解释**: 报告下载链接，有效时间为30分钟。 **取值范围**: 当status为SUCCESS时，该值不为空。
    * status  **参数解释**: 采集状态。 **取值范围**: - SUCCESS：成功。 - FAILED：失败。 - EXPORTING：采集中。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'fileSize' => 'int',
            'startTime' => 'string',
            'endTime' => 'string',
            'downloadUrl' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  **参数解释**: 任务ID。 **取值范围**: 不涉及。
    * fileSize  **参数解释**: 文件大小单位KB。 **取值范围**: 当status为SUCCESS时，该值不为空。
    * startTime  **参数解释**: 开始采集时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 结束采集时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    * downloadUrl  **参数解释**: 报告下载链接，有效时间为30分钟。 **取值范围**: 当status为SUCCESS时，该值不为空。
    * status  **参数解释**: 采集状态。 **取值范围**: - SUCCESS：成功。 - FAILED：失败。 - EXPORTING：采集中。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'fileSize' => null,
        'startTime' => null,
        'endTime' => null,
        'downloadUrl' => null,
        'status' => null
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
    * jobId  **参数解释**: 任务ID。 **取值范围**: 不涉及。
    * fileSize  **参数解释**: 文件大小单位KB。 **取值范围**: 当status为SUCCESS时，该值不为空。
    * startTime  **参数解释**: 开始采集时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 结束采集时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    * downloadUrl  **参数解释**: 报告下载链接，有效时间为30分钟。 **取值范围**: 当status为SUCCESS时，该值不为空。
    * status  **参数解释**: 采集状态。 **取值范围**: - SUCCESS：成功。 - FAILED：失败。 - EXPORTING：采集中。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'fileSize' => 'file_size',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'downloadUrl' => 'download_url',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  **参数解释**: 任务ID。 **取值范围**: 不涉及。
    * fileSize  **参数解释**: 文件大小单位KB。 **取值范围**: 当status为SUCCESS时，该值不为空。
    * startTime  **参数解释**: 开始采集时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 结束采集时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    * downloadUrl  **参数解释**: 报告下载链接，有效时间为30分钟。 **取值范围**: 当status为SUCCESS时，该值不为空。
    * status  **参数解释**: 采集状态。 **取值范围**: - SUCCESS：成功。 - FAILED：失败。 - EXPORTING：采集中。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'fileSize' => 'setFileSize',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'downloadUrl' => 'setDownloadUrl',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  **参数解释**: 任务ID。 **取值范围**: 不涉及。
    * fileSize  **参数解释**: 文件大小单位KB。 **取值范围**: 当status为SUCCESS时，该值不为空。
    * startTime  **参数解释**: 开始采集时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 结束采集时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    * downloadUrl  **参数解释**: 报告下载链接，有效时间为30分钟。 **取值范围**: 当status为SUCCESS时，该值不为空。
    * status  **参数解释**: 采集状态。 **取值范围**: - SUCCESS：成功。 - FAILED：失败。 - EXPORTING：采集中。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'fileSize' => 'getFileSize',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'downloadUrl' => 'getDownloadUrl',
            'status' => 'getStatus'
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
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_FAILED = 'FAILED';
    const STATUS_EXPORTING = 'EXPORTING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_FAILED,
            self::STATUS_EXPORTING,
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['downloadUrl'] = isset($data['downloadUrl']) ? $data['downloadUrl'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
            if ((mb_strlen($this->container['jobId']) > 32)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9]{1,32}$/", $this->container['jobId'])) {
                $invalidProperties[] = "invalid value for 'jobId', must be conform to the pattern /^[a-zA-Z0-9]{1,32}$/.";
            }
            if (!is_null($this->container['fileSize']) && ($this->container['fileSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'fileSize', must be bigger than or equal to 0.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if ((mb_strlen($this->container['startTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['startTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if ((mb_strlen($this->container['endTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['endTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['downloadUrl']) && (mb_strlen($this->container['downloadUrl']) > 1024)) {
                $invalidProperties[] = "invalid value for 'downloadUrl', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['downloadUrl']) && (mb_strlen($this->container['downloadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'downloadUrl', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets jobId
    *  **参数解释**: 任务ID。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId **参数解释**: 任务ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets fileSize
    *  **参数解释**: 文件大小单位KB。 **取值范围**: 当status为SUCCESS时，该值不为空。
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
    * @param int|null $fileSize **参数解释**: 文件大小单位KB。 **取值范围**: 当status为SUCCESS时，该值不为空。
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**: 开始采集时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime **参数解释**: 开始采集时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
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
    *  **参数解释**: 结束采集时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime **参数解释**: 结束采集时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets downloadUrl
    *  **参数解释**: 报告下载链接，有效时间为30分钟。 **取值范围**: 当status为SUCCESS时，该值不为空。
    *
    * @return string|null
    */
    public function getDownloadUrl()
    {
        return $this->container['downloadUrl'];
    }

    /**
    * Sets downloadUrl
    *
    * @param string|null $downloadUrl **参数解释**: 报告下载链接，有效时间为30分钟。 **取值范围**: 当status为SUCCESS时，该值不为空。
    *
    * @return $this
    */
    public function setDownloadUrl($downloadUrl)
    {
        $this->container['downloadUrl'] = $downloadUrl;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 采集状态。 **取值范围**: - SUCCESS：成功。 - FAILED：失败。 - EXPORTING：采集中。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status **参数解释**: 采集状态。 **取值范围**: - SUCCESS：成功。 - FAILED：失败。 - EXPORTING：采集中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

