<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAttackLogAlarmConfigDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAttackLogAlarmConfigDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountName  账户名称
    * alarmId  账户名称ID.
    * alarmTimePeriod  告警周期，0：全天，1：8时到22时，为必传参数
    * alarmType  告警类型 0：攻击告警; 1：流量超额预警; 2：EIP未防护告警; 3：异常外联告警，为必传参数
    * enableStatus  告警状态 0：失效; 1：生效，为必传参数
    * frequencyCount  告警触发频次，为必传参数
    * frequencyTime  告警频次时间范围，以分钟为单位，为必传参数
    * language  告警语言，zh-cn为中文，en-us为英文
    * severity  告警等级，当type为0和4时，severity为CRITICAL,HIGH,MEDIUM,LOW四种等级的组合字符串，当type为1时，severity为2；当type为2时，severity固定为3，为必传参数
    * topicUrn  告警urn，为必传参数
    * username  用户名称，为cfw，为必传参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountName' => 'string',
            'alarmId' => 'string',
            'alarmTimePeriod' => 'int',
            'alarmType' => 'int',
            'enableStatus' => 'int',
            'frequencyCount' => 'int',
            'frequencyTime' => 'int',
            'language' => 'string',
            'severity' => 'string',
            'topicUrn' => 'string',
            'username' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountName  账户名称
    * alarmId  账户名称ID.
    * alarmTimePeriod  告警周期，0：全天，1：8时到22时，为必传参数
    * alarmType  告警类型 0：攻击告警; 1：流量超额预警; 2：EIP未防护告警; 3：异常外联告警，为必传参数
    * enableStatus  告警状态 0：失效; 1：生效，为必传参数
    * frequencyCount  告警触发频次，为必传参数
    * frequencyTime  告警频次时间范围，以分钟为单位，为必传参数
    * language  告警语言，zh-cn为中文，en-us为英文
    * severity  告警等级，当type为0和4时，severity为CRITICAL,HIGH,MEDIUM,LOW四种等级的组合字符串，当type为1时，severity为2；当type为2时，severity固定为3，为必传参数
    * topicUrn  告警urn，为必传参数
    * username  用户名称，为cfw，为必传参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountName' => null,
        'alarmId' => null,
        'alarmTimePeriod' => null,
        'alarmType' => null,
        'enableStatus' => null,
        'frequencyCount' => null,
        'frequencyTime' => null,
        'language' => null,
        'severity' => null,
        'topicUrn' => null,
        'username' => null
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
    * accountName  账户名称
    * alarmId  账户名称ID.
    * alarmTimePeriod  告警周期，0：全天，1：8时到22时，为必传参数
    * alarmType  告警类型 0：攻击告警; 1：流量超额预警; 2：EIP未防护告警; 3：异常外联告警，为必传参数
    * enableStatus  告警状态 0：失效; 1：生效，为必传参数
    * frequencyCount  告警触发频次，为必传参数
    * frequencyTime  告警频次时间范围，以分钟为单位，为必传参数
    * language  告警语言，zh-cn为中文，en-us为英文
    * severity  告警等级，当type为0和4时，severity为CRITICAL,HIGH,MEDIUM,LOW四种等级的组合字符串，当type为1时，severity为2；当type为2时，severity固定为3，为必传参数
    * topicUrn  告警urn，为必传参数
    * username  用户名称，为cfw，为必传参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountName' => 'account_name',
            'alarmId' => 'alarm_id',
            'alarmTimePeriod' => 'alarm_time_period',
            'alarmType' => 'alarm_type',
            'enableStatus' => 'enable_status',
            'frequencyCount' => 'frequency_count',
            'frequencyTime' => 'frequency_time',
            'language' => 'language',
            'severity' => 'severity',
            'topicUrn' => 'topic_urn',
            'username' => 'username'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountName  账户名称
    * alarmId  账户名称ID.
    * alarmTimePeriod  告警周期，0：全天，1：8时到22时，为必传参数
    * alarmType  告警类型 0：攻击告警; 1：流量超额预警; 2：EIP未防护告警; 3：异常外联告警，为必传参数
    * enableStatus  告警状态 0：失效; 1：生效，为必传参数
    * frequencyCount  告警触发频次，为必传参数
    * frequencyTime  告警频次时间范围，以分钟为单位，为必传参数
    * language  告警语言，zh-cn为中文，en-us为英文
    * severity  告警等级，当type为0和4时，severity为CRITICAL,HIGH,MEDIUM,LOW四种等级的组合字符串，当type为1时，severity为2；当type为2时，severity固定为3，为必传参数
    * topicUrn  告警urn，为必传参数
    * username  用户名称，为cfw，为必传参数
    *
    * @var string[]
    */
    protected static $setters = [
            'accountName' => 'setAccountName',
            'alarmId' => 'setAlarmId',
            'alarmTimePeriod' => 'setAlarmTimePeriod',
            'alarmType' => 'setAlarmType',
            'enableStatus' => 'setEnableStatus',
            'frequencyCount' => 'setFrequencyCount',
            'frequencyTime' => 'setFrequencyTime',
            'language' => 'setLanguage',
            'severity' => 'setSeverity',
            'topicUrn' => 'setTopicUrn',
            'username' => 'setUsername'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountName  账户名称
    * alarmId  账户名称ID.
    * alarmTimePeriod  告警周期，0：全天，1：8时到22时，为必传参数
    * alarmType  告警类型 0：攻击告警; 1：流量超额预警; 2：EIP未防护告警; 3：异常外联告警，为必传参数
    * enableStatus  告警状态 0：失效; 1：生效，为必传参数
    * frequencyCount  告警触发频次，为必传参数
    * frequencyTime  告警频次时间范围，以分钟为单位，为必传参数
    * language  告警语言，zh-cn为中文，en-us为英文
    * severity  告警等级，当type为0和4时，severity为CRITICAL,HIGH,MEDIUM,LOW四种等级的组合字符串，当type为1时，severity为2；当type为2时，severity固定为3，为必传参数
    * topicUrn  告警urn，为必传参数
    * username  用户名称，为cfw，为必传参数
    *
    * @var string[]
    */
    protected static $getters = [
            'accountName' => 'getAccountName',
            'alarmId' => 'getAlarmId',
            'alarmTimePeriod' => 'getAlarmTimePeriod',
            'alarmType' => 'getAlarmType',
            'enableStatus' => 'getEnableStatus',
            'frequencyCount' => 'getFrequencyCount',
            'frequencyTime' => 'getFrequencyTime',
            'language' => 'getLanguage',
            'severity' => 'getSeverity',
            'topicUrn' => 'getTopicUrn',
            'username' => 'getUsername'
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
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['alarmId'] = isset($data['alarmId']) ? $data['alarmId'] : null;
        $this->container['alarmTimePeriod'] = isset($data['alarmTimePeriod']) ? $data['alarmTimePeriod'] : null;
        $this->container['alarmType'] = isset($data['alarmType']) ? $data['alarmType'] : null;
        $this->container['enableStatus'] = isset($data['enableStatus']) ? $data['enableStatus'] : null;
        $this->container['frequencyCount'] = isset($data['frequencyCount']) ? $data['frequencyCount'] : null;
        $this->container['frequencyTime'] = isset($data['frequencyTime']) ? $data['frequencyTime'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
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
    * Gets accountName
    *  账户名称
    *
    * @return string|null
    */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
    * Sets accountName
    *
    * @param string|null $accountName 账户名称
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
        return $this;
    }

    /**
    * Gets alarmId
    *  账户名称ID.
    *
    * @return string|null
    */
    public function getAlarmId()
    {
        return $this->container['alarmId'];
    }

    /**
    * Sets alarmId
    *
    * @param string|null $alarmId 账户名称ID.
    *
    * @return $this
    */
    public function setAlarmId($alarmId)
    {
        $this->container['alarmId'] = $alarmId;
        return $this;
    }

    /**
    * Gets alarmTimePeriod
    *  告警周期，0：全天，1：8时到22时，为必传参数
    *
    * @return int|null
    */
    public function getAlarmTimePeriod()
    {
        return $this->container['alarmTimePeriod'];
    }

    /**
    * Sets alarmTimePeriod
    *
    * @param int|null $alarmTimePeriod 告警周期，0：全天，1：8时到22时，为必传参数
    *
    * @return $this
    */
    public function setAlarmTimePeriod($alarmTimePeriod)
    {
        $this->container['alarmTimePeriod'] = $alarmTimePeriod;
        return $this;
    }

    /**
    * Gets alarmType
    *  告警类型 0：攻击告警; 1：流量超额预警; 2：EIP未防护告警; 3：异常外联告警，为必传参数
    *
    * @return int|null
    */
    public function getAlarmType()
    {
        return $this->container['alarmType'];
    }

    /**
    * Sets alarmType
    *
    * @param int|null $alarmType 告警类型 0：攻击告警; 1：流量超额预警; 2：EIP未防护告警; 3：异常外联告警，为必传参数
    *
    * @return $this
    */
    public function setAlarmType($alarmType)
    {
        $this->container['alarmType'] = $alarmType;
        return $this;
    }

    /**
    * Gets enableStatus
    *  告警状态 0：失效; 1：生效，为必传参数
    *
    * @return int|null
    */
    public function getEnableStatus()
    {
        return $this->container['enableStatus'];
    }

    /**
    * Sets enableStatus
    *
    * @param int|null $enableStatus 告警状态 0：失效; 1：生效，为必传参数
    *
    * @return $this
    */
    public function setEnableStatus($enableStatus)
    {
        $this->container['enableStatus'] = $enableStatus;
        return $this;
    }

    /**
    * Gets frequencyCount
    *  告警触发频次，为必传参数
    *
    * @return int|null
    */
    public function getFrequencyCount()
    {
        return $this->container['frequencyCount'];
    }

    /**
    * Sets frequencyCount
    *
    * @param int|null $frequencyCount 告警触发频次，为必传参数
    *
    * @return $this
    */
    public function setFrequencyCount($frequencyCount)
    {
        $this->container['frequencyCount'] = $frequencyCount;
        return $this;
    }

    /**
    * Gets frequencyTime
    *  告警频次时间范围，以分钟为单位，为必传参数
    *
    * @return int|null
    */
    public function getFrequencyTime()
    {
        return $this->container['frequencyTime'];
    }

    /**
    * Sets frequencyTime
    *
    * @param int|null $frequencyTime 告警频次时间范围，以分钟为单位，为必传参数
    *
    * @return $this
    */
    public function setFrequencyTime($frequencyTime)
    {
        $this->container['frequencyTime'] = $frequencyTime;
        return $this;
    }

    /**
    * Gets language
    *  告警语言，zh-cn为中文，en-us为英文
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 告警语言，zh-cn为中文，en-us为英文
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets severity
    *  告警等级，当type为0和4时，severity为CRITICAL,HIGH,MEDIUM,LOW四种等级的组合字符串，当type为1时，severity为2；当type为2时，severity固定为3，为必传参数
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity 告警等级，当type为0和4时，severity为CRITICAL,HIGH,MEDIUM,LOW四种等级的组合字符串，当type为1时，severity为2；当type为2时，severity固定为3，为必传参数
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets topicUrn
    *  告警urn，为必传参数
    *
    * @return string|null
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string|null $topicUrn 告警urn，为必传参数
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets username
    *  用户名称，为cfw，为必传参数
    *
    * @return string|null
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string|null $username 用户名称，为cfw，为必传参数
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
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

