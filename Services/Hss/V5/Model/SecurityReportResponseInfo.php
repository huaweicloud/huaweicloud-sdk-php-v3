<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityReportResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityReportResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reportId  **参数解释**: 报告ID **取值范围**: 字符长度10-2147483647位
    * reportSubId  **参数解释**: 报告子ID **取值范围**: 字符长度10-2147483647位
    * defaultReport  **参数解释**: 是否是默认的，默认的不能删除 **取值范围**: - true ：是。 - false ：否。
    * latestCreateTime  **参数解释**： 最近生成时间，毫秒(如果返回值为null，代表暂未生成) **取值范围**: 不涉及
    * reportName  **参数解释**: 报告名称 **取值范围**: 字符长度1-128位
    * reportCategory  **参数解释**: 报告类别 **取值范围**: - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
    * reportStatus  **参数解释**: 报告开启状态 **取值范围**:   - opened：开启   - closed：关闭
    * reportCreateTime  **参数解释**： 报告创建时间 **取值范围**: 不涉及
    * sendingPeriod  **参数解释**: 报告发送的时间段 **取值范围**:   - morning：代表0点到6点   - noon：代表6点到12点   - afternoon：代表12点到18点   - evening：代表18点到24点
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reportId' => 'int',
            'reportSubId' => 'int',
            'defaultReport' => 'bool',
            'latestCreateTime' => 'int',
            'reportName' => 'string',
            'reportCategory' => 'string',
            'reportStatus' => 'string',
            'reportCreateTime' => 'int',
            'sendingPeriod' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reportId  **参数解释**: 报告ID **取值范围**: 字符长度10-2147483647位
    * reportSubId  **参数解释**: 报告子ID **取值范围**: 字符长度10-2147483647位
    * defaultReport  **参数解释**: 是否是默认的，默认的不能删除 **取值范围**: - true ：是。 - false ：否。
    * latestCreateTime  **参数解释**： 最近生成时间，毫秒(如果返回值为null，代表暂未生成) **取值范围**: 不涉及
    * reportName  **参数解释**: 报告名称 **取值范围**: 字符长度1-128位
    * reportCategory  **参数解释**: 报告类别 **取值范围**: - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
    * reportStatus  **参数解释**: 报告开启状态 **取值范围**:   - opened：开启   - closed：关闭
    * reportCreateTime  **参数解释**： 报告创建时间 **取值范围**: 不涉及
    * sendingPeriod  **参数解释**: 报告发送的时间段 **取值范围**:   - morning：代表0点到6点   - noon：代表6点到12点   - afternoon：代表12点到18点   - evening：代表18点到24点
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reportId' => 'int32',
        'reportSubId' => 'int32',
        'defaultReport' => null,
        'latestCreateTime' => 'int64',
        'reportName' => null,
        'reportCategory' => null,
        'reportStatus' => null,
        'reportCreateTime' => 'int64',
        'sendingPeriod' => null
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
    * reportId  **参数解释**: 报告ID **取值范围**: 字符长度10-2147483647位
    * reportSubId  **参数解释**: 报告子ID **取值范围**: 字符长度10-2147483647位
    * defaultReport  **参数解释**: 是否是默认的，默认的不能删除 **取值范围**: - true ：是。 - false ：否。
    * latestCreateTime  **参数解释**： 最近生成时间，毫秒(如果返回值为null，代表暂未生成) **取值范围**: 不涉及
    * reportName  **参数解释**: 报告名称 **取值范围**: 字符长度1-128位
    * reportCategory  **参数解释**: 报告类别 **取值范围**: - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
    * reportStatus  **参数解释**: 报告开启状态 **取值范围**:   - opened：开启   - closed：关闭
    * reportCreateTime  **参数解释**： 报告创建时间 **取值范围**: 不涉及
    * sendingPeriod  **参数解释**: 报告发送的时间段 **取值范围**:   - morning：代表0点到6点   - noon：代表6点到12点   - afternoon：代表12点到18点   - evening：代表18点到24点
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reportId' => 'report_id',
            'reportSubId' => 'report_sub_id',
            'defaultReport' => 'default_report',
            'latestCreateTime' => 'latest_create_time',
            'reportName' => 'report_name',
            'reportCategory' => 'report_category',
            'reportStatus' => 'report_status',
            'reportCreateTime' => 'report_create_time',
            'sendingPeriod' => 'sending_period'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reportId  **参数解释**: 报告ID **取值范围**: 字符长度10-2147483647位
    * reportSubId  **参数解释**: 报告子ID **取值范围**: 字符长度10-2147483647位
    * defaultReport  **参数解释**: 是否是默认的，默认的不能删除 **取值范围**: - true ：是。 - false ：否。
    * latestCreateTime  **参数解释**： 最近生成时间，毫秒(如果返回值为null，代表暂未生成) **取值范围**: 不涉及
    * reportName  **参数解释**: 报告名称 **取值范围**: 字符长度1-128位
    * reportCategory  **参数解释**: 报告类别 **取值范围**: - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
    * reportStatus  **参数解释**: 报告开启状态 **取值范围**:   - opened：开启   - closed：关闭
    * reportCreateTime  **参数解释**： 报告创建时间 **取值范围**: 不涉及
    * sendingPeriod  **参数解释**: 报告发送的时间段 **取值范围**:   - morning：代表0点到6点   - noon：代表6点到12点   - afternoon：代表12点到18点   - evening：代表18点到24点
    *
    * @var string[]
    */
    protected static $setters = [
            'reportId' => 'setReportId',
            'reportSubId' => 'setReportSubId',
            'defaultReport' => 'setDefaultReport',
            'latestCreateTime' => 'setLatestCreateTime',
            'reportName' => 'setReportName',
            'reportCategory' => 'setReportCategory',
            'reportStatus' => 'setReportStatus',
            'reportCreateTime' => 'setReportCreateTime',
            'sendingPeriod' => 'setSendingPeriod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reportId  **参数解释**: 报告ID **取值范围**: 字符长度10-2147483647位
    * reportSubId  **参数解释**: 报告子ID **取值范围**: 字符长度10-2147483647位
    * defaultReport  **参数解释**: 是否是默认的，默认的不能删除 **取值范围**: - true ：是。 - false ：否。
    * latestCreateTime  **参数解释**： 最近生成时间，毫秒(如果返回值为null，代表暂未生成) **取值范围**: 不涉及
    * reportName  **参数解释**: 报告名称 **取值范围**: 字符长度1-128位
    * reportCategory  **参数解释**: 报告类别 **取值范围**: - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
    * reportStatus  **参数解释**: 报告开启状态 **取值范围**:   - opened：开启   - closed：关闭
    * reportCreateTime  **参数解释**： 报告创建时间 **取值范围**: 不涉及
    * sendingPeriod  **参数解释**: 报告发送的时间段 **取值范围**:   - morning：代表0点到6点   - noon：代表6点到12点   - afternoon：代表12点到18点   - evening：代表18点到24点
    *
    * @var string[]
    */
    protected static $getters = [
            'reportId' => 'getReportId',
            'reportSubId' => 'getReportSubId',
            'defaultReport' => 'getDefaultReport',
            'latestCreateTime' => 'getLatestCreateTime',
            'reportName' => 'getReportName',
            'reportCategory' => 'getReportCategory',
            'reportStatus' => 'getReportStatus',
            'reportCreateTime' => 'getReportCreateTime',
            'sendingPeriod' => 'getSendingPeriod'
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
        $this->container['reportId'] = isset($data['reportId']) ? $data['reportId'] : null;
        $this->container['reportSubId'] = isset($data['reportSubId']) ? $data['reportSubId'] : null;
        $this->container['defaultReport'] = isset($data['defaultReport']) ? $data['defaultReport'] : null;
        $this->container['latestCreateTime'] = isset($data['latestCreateTime']) ? $data['latestCreateTime'] : null;
        $this->container['reportName'] = isset($data['reportName']) ? $data['reportName'] : null;
        $this->container['reportCategory'] = isset($data['reportCategory']) ? $data['reportCategory'] : null;
        $this->container['reportStatus'] = isset($data['reportStatus']) ? $data['reportStatus'] : null;
        $this->container['reportCreateTime'] = isset($data['reportCreateTime']) ? $data['reportCreateTime'] : null;
        $this->container['sendingPeriod'] = isset($data['sendingPeriod']) ? $data['sendingPeriod'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['reportId']) && ($this->container['reportId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'reportId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['reportId']) && ($this->container['reportId'] < 0)) {
                $invalidProperties[] = "invalid value for 'reportId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reportSubId']) && ($this->container['reportSubId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'reportSubId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['reportSubId']) && ($this->container['reportSubId'] < 0)) {
                $invalidProperties[] = "invalid value for 'reportSubId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestCreateTime']) && ($this->container['latestCreateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'latestCreateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['latestCreateTime']) && ($this->container['latestCreateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestCreateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reportName']) && (mb_strlen($this->container['reportName']) > 128)) {
                $invalidProperties[] = "invalid value for 'reportName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['reportName']) && (mb_strlen($this->container['reportName']) < 1)) {
                $invalidProperties[] = "invalid value for 'reportName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reportName']) && !preg_match("/^.*$/", $this->container['reportName'])) {
                $invalidProperties[] = "invalid value for 'reportName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['reportCategory']) && (mb_strlen($this->container['reportCategory']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'reportCategory', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['reportCategory']) && (mb_strlen($this->container['reportCategory']) < 0)) {
                $invalidProperties[] = "invalid value for 'reportCategory', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reportCategory']) && !preg_match("/^.*$/", $this->container['reportCategory'])) {
                $invalidProperties[] = "invalid value for 'reportCategory', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['reportStatus']) && (mb_strlen($this->container['reportStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'reportStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['reportStatus']) && (mb_strlen($this->container['reportStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'reportStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reportStatus']) && !preg_match("/^.*$/", $this->container['reportStatus'])) {
                $invalidProperties[] = "invalid value for 'reportStatus', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['reportCreateTime']) && ($this->container['reportCreateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'reportCreateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['reportCreateTime']) && ($this->container['reportCreateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'reportCreateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sendingPeriod']) && (mb_strlen($this->container['sendingPeriod']) > 32)) {
                $invalidProperties[] = "invalid value for 'sendingPeriod', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sendingPeriod']) && (mb_strlen($this->container['sendingPeriod']) < 0)) {
                $invalidProperties[] = "invalid value for 'sendingPeriod', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sendingPeriod']) && !preg_match("/^.*$/", $this->container['sendingPeriod'])) {
                $invalidProperties[] = "invalid value for 'sendingPeriod', must be conform to the pattern /^.*$/.";
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
    * Gets reportId
    *  **参数解释**: 报告ID **取值范围**: 字符长度10-2147483647位
    *
    * @return int|null
    */
    public function getReportId()
    {
        return $this->container['reportId'];
    }

    /**
    * Sets reportId
    *
    * @param int|null $reportId **参数解释**: 报告ID **取值范围**: 字符长度10-2147483647位
    *
    * @return $this
    */
    public function setReportId($reportId)
    {
        $this->container['reportId'] = $reportId;
        return $this;
    }

    /**
    * Gets reportSubId
    *  **参数解释**: 报告子ID **取值范围**: 字符长度10-2147483647位
    *
    * @return int|null
    */
    public function getReportSubId()
    {
        return $this->container['reportSubId'];
    }

    /**
    * Sets reportSubId
    *
    * @param int|null $reportSubId **参数解释**: 报告子ID **取值范围**: 字符长度10-2147483647位
    *
    * @return $this
    */
    public function setReportSubId($reportSubId)
    {
        $this->container['reportSubId'] = $reportSubId;
        return $this;
    }

    /**
    * Gets defaultReport
    *  **参数解释**: 是否是默认的，默认的不能删除 **取值范围**: - true ：是。 - false ：否。
    *
    * @return bool|null
    */
    public function getDefaultReport()
    {
        return $this->container['defaultReport'];
    }

    /**
    * Sets defaultReport
    *
    * @param bool|null $defaultReport **参数解释**: 是否是默认的，默认的不能删除 **取值范围**: - true ：是。 - false ：否。
    *
    * @return $this
    */
    public function setDefaultReport($defaultReport)
    {
        $this->container['defaultReport'] = $defaultReport;
        return $this;
    }

    /**
    * Gets latestCreateTime
    *  **参数解释**： 最近生成时间，毫秒(如果返回值为null，代表暂未生成) **取值范围**: 不涉及
    *
    * @return int|null
    */
    public function getLatestCreateTime()
    {
        return $this->container['latestCreateTime'];
    }

    /**
    * Sets latestCreateTime
    *
    * @param int|null $latestCreateTime **参数解释**： 最近生成时间，毫秒(如果返回值为null，代表暂未生成) **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setLatestCreateTime($latestCreateTime)
    {
        $this->container['latestCreateTime'] = $latestCreateTime;
        return $this;
    }

    /**
    * Gets reportName
    *  **参数解释**: 报告名称 **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getReportName()
    {
        return $this->container['reportName'];
    }

    /**
    * Sets reportName
    *
    * @param string|null $reportName **参数解释**: 报告名称 **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setReportName($reportName)
    {
        $this->container['reportName'] = $reportName;
        return $this;
    }

    /**
    * Gets reportCategory
    *  **参数解释**: 报告类别 **取值范围**: - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
    *
    * @return string|null
    */
    public function getReportCategory()
    {
        return $this->container['reportCategory'];
    }

    /**
    * Sets reportCategory
    *
    * @param string|null $reportCategory **参数解释**: 报告类别 **取值范围**: - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
    *
    * @return $this
    */
    public function setReportCategory($reportCategory)
    {
        $this->container['reportCategory'] = $reportCategory;
        return $this;
    }

    /**
    * Gets reportStatus
    *  **参数解释**: 报告开启状态 **取值范围**:   - opened：开启   - closed：关闭
    *
    * @return string|null
    */
    public function getReportStatus()
    {
        return $this->container['reportStatus'];
    }

    /**
    * Sets reportStatus
    *
    * @param string|null $reportStatus **参数解释**: 报告开启状态 **取值范围**:   - opened：开启   - closed：关闭
    *
    * @return $this
    */
    public function setReportStatus($reportStatus)
    {
        $this->container['reportStatus'] = $reportStatus;
        return $this;
    }

    /**
    * Gets reportCreateTime
    *  **参数解释**： 报告创建时间 **取值范围**: 不涉及
    *
    * @return int|null
    */
    public function getReportCreateTime()
    {
        return $this->container['reportCreateTime'];
    }

    /**
    * Sets reportCreateTime
    *
    * @param int|null $reportCreateTime **参数解释**： 报告创建时间 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setReportCreateTime($reportCreateTime)
    {
        $this->container['reportCreateTime'] = $reportCreateTime;
        return $this;
    }

    /**
    * Gets sendingPeriod
    *  **参数解释**: 报告发送的时间段 **取值范围**:   - morning：代表0点到6点   - noon：代表6点到12点   - afternoon：代表12点到18点   - evening：代表18点到24点
    *
    * @return string|null
    */
    public function getSendingPeriod()
    {
        return $this->container['sendingPeriod'];
    }

    /**
    * Sets sendingPeriod
    *
    * @param string|null $sendingPeriod **参数解释**: 报告发送的时间段 **取值范围**:   - morning：代表0点到6点   - noon：代表6点到12点   - afternoon：代表12点到18点   - evening：代表18点到24点
    *
    * @return $this
    */
    public function setSendingPeriod($sendingPeriod)
    {
        $this->container['sendingPeriod'] = $sendingPeriod;
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

