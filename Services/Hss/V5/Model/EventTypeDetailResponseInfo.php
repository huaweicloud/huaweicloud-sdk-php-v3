<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventTypeDetailResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventTypeDetailResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventTypeName  大类别对应的名字:   - malicious_software：恶意软件   - \"exploit_attack\"：漏洞利用   - \"system_abnormal_behavior\"：系统异常行为   - \"user_abnormal_behavior\"：用户异常行为   - \"network_abnormal_access\"：网络异常访问   - \"resource_recon\"：资源侦查   - \"risk_audit\"：风险审计   - \"information_destroy\"：信息破坏   - \"denial_of_service\"：拒绝服务攻击   - \"advanced_threat\"：高级威胁   - \"extend\"：其余未列出的，里面的类别显示到外层中
    * eventTypeNum  事件类别的总数量
    * eventTypeList  小类别对应的名称与数量列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventTypeName' => 'string',
            'eventTypeNum' => 'int',
            'eventTypeList' => '\HuaweiCloud\SDK\Hss\V5\Model\EventTypeResponseInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventTypeName  大类别对应的名字:   - malicious_software：恶意软件   - \"exploit_attack\"：漏洞利用   - \"system_abnormal_behavior\"：系统异常行为   - \"user_abnormal_behavior\"：用户异常行为   - \"network_abnormal_access\"：网络异常访问   - \"resource_recon\"：资源侦查   - \"risk_audit\"：风险审计   - \"information_destroy\"：信息破坏   - \"denial_of_service\"：拒绝服务攻击   - \"advanced_threat\"：高级威胁   - \"extend\"：其余未列出的，里面的类别显示到外层中
    * eventTypeNum  事件类别的总数量
    * eventTypeList  小类别对应的名称与数量列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventTypeName' => null,
        'eventTypeNum' => 'int32',
        'eventTypeList' => null
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
    * eventTypeName  大类别对应的名字:   - malicious_software：恶意软件   - \"exploit_attack\"：漏洞利用   - \"system_abnormal_behavior\"：系统异常行为   - \"user_abnormal_behavior\"：用户异常行为   - \"network_abnormal_access\"：网络异常访问   - \"resource_recon\"：资源侦查   - \"risk_audit\"：风险审计   - \"information_destroy\"：信息破坏   - \"denial_of_service\"：拒绝服务攻击   - \"advanced_threat\"：高级威胁   - \"extend\"：其余未列出的，里面的类别显示到外层中
    * eventTypeNum  事件类别的总数量
    * eventTypeList  小类别对应的名称与数量列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventTypeName' => 'event_type_name',
            'eventTypeNum' => 'event_type_num',
            'eventTypeList' => 'event_type_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventTypeName  大类别对应的名字:   - malicious_software：恶意软件   - \"exploit_attack\"：漏洞利用   - \"system_abnormal_behavior\"：系统异常行为   - \"user_abnormal_behavior\"：用户异常行为   - \"network_abnormal_access\"：网络异常访问   - \"resource_recon\"：资源侦查   - \"risk_audit\"：风险审计   - \"information_destroy\"：信息破坏   - \"denial_of_service\"：拒绝服务攻击   - \"advanced_threat\"：高级威胁   - \"extend\"：其余未列出的，里面的类别显示到外层中
    * eventTypeNum  事件类别的总数量
    * eventTypeList  小类别对应的名称与数量列表
    *
    * @var string[]
    */
    protected static $setters = [
            'eventTypeName' => 'setEventTypeName',
            'eventTypeNum' => 'setEventTypeNum',
            'eventTypeList' => 'setEventTypeList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventTypeName  大类别对应的名字:   - malicious_software：恶意软件   - \"exploit_attack\"：漏洞利用   - \"system_abnormal_behavior\"：系统异常行为   - \"user_abnormal_behavior\"：用户异常行为   - \"network_abnormal_access\"：网络异常访问   - \"resource_recon\"：资源侦查   - \"risk_audit\"：风险审计   - \"information_destroy\"：信息破坏   - \"denial_of_service\"：拒绝服务攻击   - \"advanced_threat\"：高级威胁   - \"extend\"：其余未列出的，里面的类别显示到外层中
    * eventTypeNum  事件类别的总数量
    * eventTypeList  小类别对应的名称与数量列表
    *
    * @var string[]
    */
    protected static $getters = [
            'eventTypeName' => 'getEventTypeName',
            'eventTypeNum' => 'getEventTypeNum',
            'eventTypeList' => 'getEventTypeList'
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
    const EVENT_TYPE_NAME_MALICIOUS_SOFTWARE = 'malicious_software';
    const EVENT_TYPE_NAME_EXPLOIT_ATTACK = 'exploit_attack';
    const EVENT_TYPE_NAME_SYSTEM_ABNORMAL_BEHAVIOR = 'system_abnormal_behavior';
    const EVENT_TYPE_NAME_USER_ABNORMAL_BEHAVIOR = 'user_abnormal_behavior';
    const EVENT_TYPE_NAME_NETWORK_ABNORMAL_ACCESS = 'network_abnormal_access';
    const EVENT_TYPE_NAME_RESOURCE_RECON = 'resource_recon';
    const EVENT_TYPE_NAME_RISK_AUDIT = 'risk_audit';
    const EVENT_TYPE_NAME_INFORMATION_DESTROY = 'information_destroy';
    const EVENT_TYPE_NAME_DENIAL_OF_SERVICE = 'denial_of_service';
    const EVENT_TYPE_NAME_ADVANCED_THREAT = 'advanced_threat';
    const EVENT_TYPE_NAME_EXTEND = 'extend';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventTypeNameAllowableValues()
    {
        return [
            self::EVENT_TYPE_NAME_MALICIOUS_SOFTWARE,
            self::EVENT_TYPE_NAME_EXPLOIT_ATTACK,
            self::EVENT_TYPE_NAME_SYSTEM_ABNORMAL_BEHAVIOR,
            self::EVENT_TYPE_NAME_USER_ABNORMAL_BEHAVIOR,
            self::EVENT_TYPE_NAME_NETWORK_ABNORMAL_ACCESS,
            self::EVENT_TYPE_NAME_RESOURCE_RECON,
            self::EVENT_TYPE_NAME_RISK_AUDIT,
            self::EVENT_TYPE_NAME_INFORMATION_DESTROY,
            self::EVENT_TYPE_NAME_DENIAL_OF_SERVICE,
            self::EVENT_TYPE_NAME_ADVANCED_THREAT,
            self::EVENT_TYPE_NAME_EXTEND,
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
        $this->container['eventTypeName'] = isset($data['eventTypeName']) ? $data['eventTypeName'] : null;
        $this->container['eventTypeNum'] = isset($data['eventTypeNum']) ? $data['eventTypeNum'] : null;
        $this->container['eventTypeList'] = isset($data['eventTypeList']) ? $data['eventTypeList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getEventTypeNameAllowableValues();
                if (!is_null($this->container['eventTypeName']) && !in_array($this->container['eventTypeName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'eventTypeName', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['eventTypeNum']) && ($this->container['eventTypeNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'eventTypeNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['eventTypeNum']) && ($this->container['eventTypeNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'eventTypeNum', must be bigger than or equal to 0.";
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
    * Gets eventTypeName
    *  大类别对应的名字:   - malicious_software：恶意软件   - \"exploit_attack\"：漏洞利用   - \"system_abnormal_behavior\"：系统异常行为   - \"user_abnormal_behavior\"：用户异常行为   - \"network_abnormal_access\"：网络异常访问   - \"resource_recon\"：资源侦查   - \"risk_audit\"：风险审计   - \"information_destroy\"：信息破坏   - \"denial_of_service\"：拒绝服务攻击   - \"advanced_threat\"：高级威胁   - \"extend\"：其余未列出的，里面的类别显示到外层中
    *
    * @return string|null
    */
    public function getEventTypeName()
    {
        return $this->container['eventTypeName'];
    }

    /**
    * Sets eventTypeName
    *
    * @param string|null $eventTypeName 大类别对应的名字:   - malicious_software：恶意软件   - \"exploit_attack\"：漏洞利用   - \"system_abnormal_behavior\"：系统异常行为   - \"user_abnormal_behavior\"：用户异常行为   - \"network_abnormal_access\"：网络异常访问   - \"resource_recon\"：资源侦查   - \"risk_audit\"：风险审计   - \"information_destroy\"：信息破坏   - \"denial_of_service\"：拒绝服务攻击   - \"advanced_threat\"：高级威胁   - \"extend\"：其余未列出的，里面的类别显示到外层中
    *
    * @return $this
    */
    public function setEventTypeName($eventTypeName)
    {
        $this->container['eventTypeName'] = $eventTypeName;
        return $this;
    }

    /**
    * Gets eventTypeNum
    *  事件类别的总数量
    *
    * @return int|null
    */
    public function getEventTypeNum()
    {
        return $this->container['eventTypeNum'];
    }

    /**
    * Sets eventTypeNum
    *
    * @param int|null $eventTypeNum 事件类别的总数量
    *
    * @return $this
    */
    public function setEventTypeNum($eventTypeNum)
    {
        $this->container['eventTypeNum'] = $eventTypeNum;
        return $this;
    }

    /**
    * Gets eventTypeList
    *  小类别对应的名称与数量列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\EventTypeResponseInfo[]|null
    */
    public function getEventTypeList()
    {
        return $this->container['eventTypeList'];
    }

    /**
    * Sets eventTypeList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\EventTypeResponseInfo[]|null $eventTypeList 小类别对应的名称与数量列表
    *
    * @return $this
    */
    public function setEventTypeList($eventTypeList)
    {
        $this->container['eventTypeList'] = $eventTypeList;
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

