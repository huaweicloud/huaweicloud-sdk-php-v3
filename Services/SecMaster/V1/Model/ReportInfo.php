<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReportInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReportInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  报告id
    * reportName  报告名称
    * reportPeriod  报告周期 weekly, daily, annual, monthly
    * reportRange  reportRange
    * language  语言
    * notificationTask  通知任务id
    * layoutId  布局id
    * status  报告状态 enable, disable
    * isGenerated  报告是否已生成
    * reportRuleInfos  报告发送规则
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'reportName' => 'string',
            'reportPeriod' => 'string',
            'reportRange' => '\HuaweiCloud\SDK\SecMaster\V1\Model\CreateReportRequestBodyReportRange',
            'language' => 'string',
            'notificationTask' => 'string',
            'layoutId' => 'string',
            'status' => 'string',
            'isGenerated' => 'bool',
            'reportRuleInfos' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ReportRuleInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  报告id
    * reportName  报告名称
    * reportPeriod  报告周期 weekly, daily, annual, monthly
    * reportRange  reportRange
    * language  语言
    * notificationTask  通知任务id
    * layoutId  布局id
    * status  报告状态 enable, disable
    * isGenerated  报告是否已生成
    * reportRuleInfos  报告发送规则
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'reportName' => null,
        'reportPeriod' => null,
        'reportRange' => null,
        'language' => null,
        'notificationTask' => null,
        'layoutId' => null,
        'status' => null,
        'isGenerated' => null,
        'reportRuleInfos' => null
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
    * id  报告id
    * reportName  报告名称
    * reportPeriod  报告周期 weekly, daily, annual, monthly
    * reportRange  reportRange
    * language  语言
    * notificationTask  通知任务id
    * layoutId  布局id
    * status  报告状态 enable, disable
    * isGenerated  报告是否已生成
    * reportRuleInfos  报告发送规则
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'reportName' => 'report_name',
            'reportPeriod' => 'report_period',
            'reportRange' => 'report_range',
            'language' => 'language',
            'notificationTask' => 'notification_task',
            'layoutId' => 'layout_id',
            'status' => 'status',
            'isGenerated' => 'is_generated',
            'reportRuleInfos' => 'report_rule_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  报告id
    * reportName  报告名称
    * reportPeriod  报告周期 weekly, daily, annual, monthly
    * reportRange  reportRange
    * language  语言
    * notificationTask  通知任务id
    * layoutId  布局id
    * status  报告状态 enable, disable
    * isGenerated  报告是否已生成
    * reportRuleInfos  报告发送规则
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'reportName' => 'setReportName',
            'reportPeriod' => 'setReportPeriod',
            'reportRange' => 'setReportRange',
            'language' => 'setLanguage',
            'notificationTask' => 'setNotificationTask',
            'layoutId' => 'setLayoutId',
            'status' => 'setStatus',
            'isGenerated' => 'setIsGenerated',
            'reportRuleInfos' => 'setReportRuleInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  报告id
    * reportName  报告名称
    * reportPeriod  报告周期 weekly, daily, annual, monthly
    * reportRange  reportRange
    * language  语言
    * notificationTask  通知任务id
    * layoutId  布局id
    * status  报告状态 enable, disable
    * isGenerated  报告是否已生成
    * reportRuleInfos  报告发送规则
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'reportName' => 'getReportName',
            'reportPeriod' => 'getReportPeriod',
            'reportRange' => 'getReportRange',
            'language' => 'getLanguage',
            'notificationTask' => 'getNotificationTask',
            'layoutId' => 'getLayoutId',
            'status' => 'getStatus',
            'isGenerated' => 'getIsGenerated',
            'reportRuleInfos' => 'getReportRuleInfos'
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
    const REPORT_PERIOD_WEEKLY = 'weekly';
    const REPORT_PERIOD_DAILY = 'daily';
    const REPORT_PERIOD_ANNUAL = 'annual';
    const REPORT_PERIOD_MONTHLY = 'monthly';
    const STATUS_ENABLE = 'enable';
    const STATUS_DISABLE = 'disable';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReportPeriodAllowableValues()
    {
        return [
            self::REPORT_PERIOD_WEEKLY,
            self::REPORT_PERIOD_DAILY,
            self::REPORT_PERIOD_ANNUAL,
            self::REPORT_PERIOD_MONTHLY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLE,
            self::STATUS_DISABLE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['reportName'] = isset($data['reportName']) ? $data['reportName'] : null;
        $this->container['reportPeriod'] = isset($data['reportPeriod']) ? $data['reportPeriod'] : null;
        $this->container['reportRange'] = isset($data['reportRange']) ? $data['reportRange'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['notificationTask'] = isset($data['notificationTask']) ? $data['notificationTask'] : null;
        $this->container['layoutId'] = isset($data['layoutId']) ? $data['layoutId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['isGenerated'] = isset($data['isGenerated']) ? $data['isGenerated'] : null;
        $this->container['reportRuleInfos'] = isset($data['reportRuleInfos']) ? $data['reportRuleInfos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if (!preg_match("/[a-f0-9]{32}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-f0-9]{32}/.";
            }
        if ($this->container['reportName'] === null) {
            $invalidProperties[] = "'reportName' can't be null";
        }
            if ((mb_strlen($this->container['reportName']) > 256)) {
                $invalidProperties[] = "invalid value for 'reportName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['reportName']) < 1)) {
                $invalidProperties[] = "invalid value for 'reportName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['reportPeriod'] === null) {
            $invalidProperties[] = "'reportPeriod' can't be null";
        }
            $allowedValues = $this->getReportPeriodAllowableValues();
                if (!is_null($this->container['reportPeriod']) && !in_array($this->container['reportPeriod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reportPeriod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['reportRange'] === null) {
            $invalidProperties[] = "'reportRange' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
            if ((mb_strlen($this->container['language']) > 16)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['language']) < 1)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['notificationTask'] === null) {
            $invalidProperties[] = "'notificationTask' can't be null";
        }
            if (!preg_match("/[a-f0-9]{32}/", $this->container['notificationTask'])) {
                $invalidProperties[] = "invalid value for 'notificationTask', must be conform to the pattern /[a-f0-9]{32}/.";
            }
        if ($this->container['layoutId'] === null) {
            $invalidProperties[] = "'layoutId' can't be null";
        }
            if (!preg_match("/[a-f0-9]{32}/", $this->container['layoutId'])) {
                $invalidProperties[] = "invalid value for 'layoutId', must be conform to the pattern /[a-f0-9]{32}/.";
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

        if ($this->container['isGenerated'] === null) {
            $invalidProperties[] = "'isGenerated' can't be null";
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
    * Gets id
    *  报告id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 报告id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets reportName
    *  报告名称
    *
    * @return string
    */
    public function getReportName()
    {
        return $this->container['reportName'];
    }

    /**
    * Sets reportName
    *
    * @param string $reportName 报告名称
    *
    * @return $this
    */
    public function setReportName($reportName)
    {
        $this->container['reportName'] = $reportName;
        return $this;
    }

    /**
    * Gets reportPeriod
    *  报告周期 weekly, daily, annual, monthly
    *
    * @return string
    */
    public function getReportPeriod()
    {
        return $this->container['reportPeriod'];
    }

    /**
    * Sets reportPeriod
    *
    * @param string $reportPeriod 报告周期 weekly, daily, annual, monthly
    *
    * @return $this
    */
    public function setReportPeriod($reportPeriod)
    {
        $this->container['reportPeriod'] = $reportPeriod;
        return $this;
    }

    /**
    * Gets reportRange
    *  reportRange
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\CreateReportRequestBodyReportRange
    */
    public function getReportRange()
    {
        return $this->container['reportRange'];
    }

    /**
    * Sets reportRange
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\CreateReportRequestBodyReportRange $reportRange reportRange
    *
    * @return $this
    */
    public function setReportRange($reportRange)
    {
        $this->container['reportRange'] = $reportRange;
        return $this;
    }

    /**
    * Gets language
    *  语言
    *
    * @return string
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string $language 语言
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets notificationTask
    *  通知任务id
    *
    * @return string
    */
    public function getNotificationTask()
    {
        return $this->container['notificationTask'];
    }

    /**
    * Sets notificationTask
    *
    * @param string $notificationTask 通知任务id
    *
    * @return $this
    */
    public function setNotificationTask($notificationTask)
    {
        $this->container['notificationTask'] = $notificationTask;
        return $this;
    }

    /**
    * Gets layoutId
    *  布局id
    *
    * @return string
    */
    public function getLayoutId()
    {
        return $this->container['layoutId'];
    }

    /**
    * Sets layoutId
    *
    * @param string $layoutId 布局id
    *
    * @return $this
    */
    public function setLayoutId($layoutId)
    {
        $this->container['layoutId'] = $layoutId;
        return $this;
    }

    /**
    * Gets status
    *  报告状态 enable, disable
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
    * @param string $status 报告状态 enable, disable
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets isGenerated
    *  报告是否已生成
    *
    * @return bool
    */
    public function getIsGenerated()
    {
        return $this->container['isGenerated'];
    }

    /**
    * Sets isGenerated
    *
    * @param bool $isGenerated 报告是否已生成
    *
    * @return $this
    */
    public function setIsGenerated($isGenerated)
    {
        $this->container['isGenerated'] = $isGenerated;
        return $this;
    }

    /**
    * Gets reportRuleInfos
    *  报告发送规则
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ReportRuleInfo[]|null
    */
    public function getReportRuleInfos()
    {
        return $this->container['reportRuleInfos'];
    }

    /**
    * Sets reportRuleInfos
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ReportRuleInfo[]|null $reportRuleInfos 报告发送规则
    *
    * @return $this
    */
    public function setReportRuleInfos($reportRuleInfos)
    {
        $this->container['reportRuleInfos'] = $reportRuleInfos;
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

