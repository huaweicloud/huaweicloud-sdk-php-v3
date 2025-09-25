<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMonthlyOperaReportNotifyInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMonthlyOperaReportNotifyInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  close:不显示弹框 open：显示弹框
    * title  称号 -vul-fix-master: 补洞大师 -vul-fix-expert: 漏洞修复小能手 -baseline-fix: 风险配置修复高手 -malware-file: 防病毒先锋 -ransomware-event: 防勒索达人 -web-tamper-event: 网站守卫
    * reportId  当前用户唯一标识，报告时间，返回字符串：2024-04
    * currentMonth  当前月份，6
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'title' => 'string',
            'reportId' => 'string',
            'currentMonth' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  close:不显示弹框 open：显示弹框
    * title  称号 -vul-fix-master: 补洞大师 -vul-fix-expert: 漏洞修复小能手 -baseline-fix: 风险配置修复高手 -malware-file: 防病毒先锋 -ransomware-event: 防勒索达人 -web-tamper-event: 网站守卫
    * reportId  当前用户唯一标识，报告时间，返回字符串：2024-04
    * currentMonth  当前月份，6
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'title' => null,
        'reportId' => null,
        'currentMonth' => 'int32'
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
    * status  close:不显示弹框 open：显示弹框
    * title  称号 -vul-fix-master: 补洞大师 -vul-fix-expert: 漏洞修复小能手 -baseline-fix: 风险配置修复高手 -malware-file: 防病毒先锋 -ransomware-event: 防勒索达人 -web-tamper-event: 网站守卫
    * reportId  当前用户唯一标识，报告时间，返回字符串：2024-04
    * currentMonth  当前月份，6
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'title' => 'title',
            'reportId' => 'report_id',
            'currentMonth' => 'current_month'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  close:不显示弹框 open：显示弹框
    * title  称号 -vul-fix-master: 补洞大师 -vul-fix-expert: 漏洞修复小能手 -baseline-fix: 风险配置修复高手 -malware-file: 防病毒先锋 -ransomware-event: 防勒索达人 -web-tamper-event: 网站守卫
    * reportId  当前用户唯一标识，报告时间，返回字符串：2024-04
    * currentMonth  当前月份，6
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'title' => 'setTitle',
            'reportId' => 'setReportId',
            'currentMonth' => 'setCurrentMonth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  close:不显示弹框 open：显示弹框
    * title  称号 -vul-fix-master: 补洞大师 -vul-fix-expert: 漏洞修复小能手 -baseline-fix: 风险配置修复高手 -malware-file: 防病毒先锋 -ransomware-event: 防勒索达人 -web-tamper-event: 网站守卫
    * reportId  当前用户唯一标识，报告时间，返回字符串：2024-04
    * currentMonth  当前月份，6
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'title' => 'getTitle',
            'reportId' => 'getReportId',
            'currentMonth' => 'getCurrentMonth'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['reportId'] = isset($data['reportId']) ? $data['reportId'] : null;
        $this->container['currentMonth'] = isset($data['currentMonth']) ? $data['currentMonth'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['status']) && !preg_match("/^close|open$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^close|open$/.";
            }
            if (!is_null($this->container['title']) && !preg_match("/^vul-fix-master|vul-fix-expert|baseline-fix|malware-file|ransomware-event|web-tamper-event$/", $this->container['title'])) {
                $invalidProperties[] = "invalid value for 'title', must be conform to the pattern /^vul-fix-master|vul-fix-expert|baseline-fix|malware-file|ransomware-event|web-tamper-event$/.";
            }
            if (!is_null($this->container['reportId']) && !preg_match("/^.*$/", $this->container['reportId'])) {
                $invalidProperties[] = "invalid value for 'reportId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['currentMonth']) && ($this->container['currentMonth'] > 12)) {
                $invalidProperties[] = "invalid value for 'currentMonth', must be smaller than or equal to 12.";
            }
            if (!is_null($this->container['currentMonth']) && ($this->container['currentMonth'] < 1)) {
                $invalidProperties[] = "invalid value for 'currentMonth', must be bigger than or equal to 1.";
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
    * Gets status
    *  close:不显示弹框 open：显示弹框
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
    * @param string|null $status close:不显示弹框 open：显示弹框
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets title
    *  称号 -vul-fix-master: 补洞大师 -vul-fix-expert: 漏洞修复小能手 -baseline-fix: 风险配置修复高手 -malware-file: 防病毒先锋 -ransomware-event: 防勒索达人 -web-tamper-event: 网站守卫
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 称号 -vul-fix-master: 补洞大师 -vul-fix-expert: 漏洞修复小能手 -baseline-fix: 风险配置修复高手 -malware-file: 防病毒先锋 -ransomware-event: 防勒索达人 -web-tamper-event: 网站守卫
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets reportId
    *  当前用户唯一标识，报告时间，返回字符串：2024-04
    *
    * @return string|null
    */
    public function getReportId()
    {
        return $this->container['reportId'];
    }

    /**
    * Sets reportId
    *
    * @param string|null $reportId 当前用户唯一标识，报告时间，返回字符串：2024-04
    *
    * @return $this
    */
    public function setReportId($reportId)
    {
        $this->container['reportId'] = $reportId;
        return $this;
    }

    /**
    * Gets currentMonth
    *  当前月份，6
    *
    * @return int|null
    */
    public function getCurrentMonth()
    {
        return $this->container['currentMonth'];
    }

    /**
    * Sets currentMonth
    *
    * @param int|null $currentMonth 当前月份，6
    *
    * @return $this
    */
    public function setCurrentMonth($currentMonth)
    {
        $this->container['currentMonth'] = $currentMonth;
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

