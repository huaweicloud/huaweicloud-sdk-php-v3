<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CollectedWdrSnapshotInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CollectedWdrSnapshotInfoResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * wdrType  **参数解释**： 采集类型。 **取值范围**： - 实例级则为cluster。 - 组件级则为component。
    * fileSize  **参数解释**： 文件大小单位kb。当status为SUCCESS时，该值不为空。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 下发采集时填写的开始snapshot时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 下发采集时填写的结束snapshot时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。
    * downloadUrl  **参数解释**： 报告下载链接，有效时间为30分钟。当status为SUCCESS时，该值不为空。 **取值范围**： 不涉及。
    * status  **参数解释**： 采集状态。 **取值范围**: - SUCCESS：采集成功。 - FAILED：采集失败。 - EXPORTING：采集中。
    * notes  **参数解释**： 备注。采集类型为组件级时，内容包括采集的组件ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'wdrType' => 'string',
            'fileSize' => 'int',
            'startTime' => 'string',
            'endTime' => 'string',
            'downloadUrl' => 'string',
            'status' => 'string',
            'notes' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * wdrType  **参数解释**： 采集类型。 **取值范围**： - 实例级则为cluster。 - 组件级则为component。
    * fileSize  **参数解释**： 文件大小单位kb。当status为SUCCESS时，该值不为空。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 下发采集时填写的开始snapshot时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 下发采集时填写的结束snapshot时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。
    * downloadUrl  **参数解释**： 报告下载链接，有效时间为30分钟。当status为SUCCESS时，该值不为空。 **取值范围**： 不涉及。
    * status  **参数解释**： 采集状态。 **取值范围**: - SUCCESS：采集成功。 - FAILED：采集失败。 - EXPORTING：采集中。
    * notes  **参数解释**： 备注。采集类型为组件级时，内容包括采集的组件ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'wdrType' => null,
        'fileSize' => null,
        'startTime' => null,
        'endTime' => null,
        'downloadUrl' => null,
        'status' => null,
        'notes' => null
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
    * jobId  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * wdrType  **参数解释**： 采集类型。 **取值范围**： - 实例级则为cluster。 - 组件级则为component。
    * fileSize  **参数解释**： 文件大小单位kb。当status为SUCCESS时，该值不为空。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 下发采集时填写的开始snapshot时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 下发采集时填写的结束snapshot时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。
    * downloadUrl  **参数解释**： 报告下载链接，有效时间为30分钟。当status为SUCCESS时，该值不为空。 **取值范围**： 不涉及。
    * status  **参数解释**： 采集状态。 **取值范围**: - SUCCESS：采集成功。 - FAILED：采集失败。 - EXPORTING：采集中。
    * notes  **参数解释**： 备注。采集类型为组件级时，内容包括采集的组件ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'wdrType' => 'wdr_type',
            'fileSize' => 'file_size',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'downloadUrl' => 'download_url',
            'status' => 'status',
            'notes' => 'notes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * wdrType  **参数解释**： 采集类型。 **取值范围**： - 实例级则为cluster。 - 组件级则为component。
    * fileSize  **参数解释**： 文件大小单位kb。当status为SUCCESS时，该值不为空。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 下发采集时填写的开始snapshot时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 下发采集时填写的结束snapshot时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。
    * downloadUrl  **参数解释**： 报告下载链接，有效时间为30分钟。当status为SUCCESS时，该值不为空。 **取值范围**： 不涉及。
    * status  **参数解释**： 采集状态。 **取值范围**: - SUCCESS：采集成功。 - FAILED：采集失败。 - EXPORTING：采集中。
    * notes  **参数解释**： 备注。采集类型为组件级时，内容包括采集的组件ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'wdrType' => 'setWdrType',
            'fileSize' => 'setFileSize',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'downloadUrl' => 'setDownloadUrl',
            'status' => 'setStatus',
            'notes' => 'setNotes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * wdrType  **参数解释**： 采集类型。 **取值范围**： - 实例级则为cluster。 - 组件级则为component。
    * fileSize  **参数解释**： 文件大小单位kb。当status为SUCCESS时，该值不为空。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 下发采集时填写的开始snapshot时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 下发采集时填写的结束snapshot时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。
    * downloadUrl  **参数解释**： 报告下载链接，有效时间为30分钟。当status为SUCCESS时，该值不为空。 **取值范围**： 不涉及。
    * status  **参数解释**： 采集状态。 **取值范围**: - SUCCESS：采集成功。 - FAILED：采集失败。 - EXPORTING：采集中。
    * notes  **参数解释**： 备注。采集类型为组件级时，内容包括采集的组件ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'wdrType' => 'getWdrType',
            'fileSize' => 'getFileSize',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'downloadUrl' => 'getDownloadUrl',
            'status' => 'getStatus',
            'notes' => 'getNotes'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['wdrType'] = isset($data['wdrType']) ? $data['wdrType'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['downloadUrl'] = isset($data['downloadUrl']) ? $data['downloadUrl'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
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
    * Gets jobId
    *  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId **参数解释**： 任务ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets wdrType
    *  **参数解释**： 采集类型。 **取值范围**： - 实例级则为cluster。 - 组件级则为component。
    *
    * @return string|null
    */
    public function getWdrType()
    {
        return $this->container['wdrType'];
    }

    /**
    * Sets wdrType
    *
    * @param string|null $wdrType **参数解释**： 采集类型。 **取值范围**： - 实例级则为cluster。 - 组件级则为component。
    *
    * @return $this
    */
    public function setWdrType($wdrType)
    {
        $this->container['wdrType'] = $wdrType;
        return $this;
    }

    /**
    * Gets fileSize
    *  **参数解释**： 文件大小单位kb。当status为SUCCESS时，该值不为空。 **取值范围**： 不涉及。
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
    * @param int|null $fileSize **参数解释**： 文件大小单位kb。当status为SUCCESS时，该值不为空。 **取值范围**： 不涉及。
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
    *  **参数解释**： 下发采集时填写的开始snapshot时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime **参数解释**： 下发采集时填写的开始snapshot时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。
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
    *  **参数解释**： 下发采集时填写的结束snapshot时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime **参数解释**： 下发采集时填写的结束snapshot时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**： 不涉及。
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
    *  **参数解释**： 报告下载链接，有效时间为30分钟。当status为SUCCESS时，该值不为空。 **取值范围**： 不涉及。
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
    * @param string|null $downloadUrl **参数解释**： 报告下载链接，有效时间为30分钟。当status为SUCCESS时，该值不为空。 **取值范围**： 不涉及。
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
    *  **参数解释**： 采集状态。 **取值范围**: - SUCCESS：采集成功。 - FAILED：采集失败。 - EXPORTING：采集中。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**： 采集状态。 **取值范围**: - SUCCESS：采集成功。 - FAILED：采集失败。 - EXPORTING：采集中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets notes
    *  **参数解释**： 备注。采集类型为组件级时，内容包括采集的组件ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
    * Sets notes
    *
    * @param string|null $notes **参数解释**： 备注。采集类型为组件级时，内容包括采集的组件ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;
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

