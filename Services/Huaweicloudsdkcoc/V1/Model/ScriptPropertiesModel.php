<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScriptPropertiesModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScriptPropertiesModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * riskLevel  风险等级 LOW:低风险 MEDIUM:中风险 HIGH:高风险
    * version  脚本版本号
    * reviewers  审批人，不填写不需要审批
    * protocol  审批消息通知协议，用于通知审批人 DEFAULT：默认 SMS：短信 EMAIL：邮件 DING_TALK：钉钉 WE_LINK：welink WECHAT:微信 CALLNOTIFY：语言 NOT_TO_NOTIFY：不通知
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'riskLevel' => 'string',
            'version' => 'string',
            'reviewers' => '\HuaweiCloud\SDK\Coc\V1\Model\ReviewerInfo[]',
            'protocol' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * riskLevel  风险等级 LOW:低风险 MEDIUM:中风险 HIGH:高风险
    * version  脚本版本号
    * reviewers  审批人，不填写不需要审批
    * protocol  审批消息通知协议，用于通知审批人 DEFAULT：默认 SMS：短信 EMAIL：邮件 DING_TALK：钉钉 WE_LINK：welink WECHAT:微信 CALLNOTIFY：语言 NOT_TO_NOTIFY：不通知
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'riskLevel' => null,
        'version' => null,
        'reviewers' => null,
        'protocol' => null
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
    * riskLevel  风险等级 LOW:低风险 MEDIUM:中风险 HIGH:高风险
    * version  脚本版本号
    * reviewers  审批人，不填写不需要审批
    * protocol  审批消息通知协议，用于通知审批人 DEFAULT：默认 SMS：短信 EMAIL：邮件 DING_TALK：钉钉 WE_LINK：welink WECHAT:微信 CALLNOTIFY：语言 NOT_TO_NOTIFY：不通知
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'riskLevel' => 'risk_level',
            'version' => 'version',
            'reviewers' => 'reviewers',
            'protocol' => 'protocol'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * riskLevel  风险等级 LOW:低风险 MEDIUM:中风险 HIGH:高风险
    * version  脚本版本号
    * reviewers  审批人，不填写不需要审批
    * protocol  审批消息通知协议，用于通知审批人 DEFAULT：默认 SMS：短信 EMAIL：邮件 DING_TALK：钉钉 WE_LINK：welink WECHAT:微信 CALLNOTIFY：语言 NOT_TO_NOTIFY：不通知
    *
    * @var string[]
    */
    protected static $setters = [
            'riskLevel' => 'setRiskLevel',
            'version' => 'setVersion',
            'reviewers' => 'setReviewers',
            'protocol' => 'setProtocol'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * riskLevel  风险等级 LOW:低风险 MEDIUM:中风险 HIGH:高风险
    * version  脚本版本号
    * reviewers  审批人，不填写不需要审批
    * protocol  审批消息通知协议，用于通知审批人 DEFAULT：默认 SMS：短信 EMAIL：邮件 DING_TALK：钉钉 WE_LINK：welink WECHAT:微信 CALLNOTIFY：语言 NOT_TO_NOTIFY：不通知
    *
    * @var string[]
    */
    protected static $getters = [
            'riskLevel' => 'getRiskLevel',
            'version' => 'getVersion',
            'reviewers' => 'getReviewers',
            'protocol' => 'getProtocol'
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
    const RISK_LEVEL_LOW = 'LOW';
    const RISK_LEVEL_MEDIUM = 'MEDIUM';
    const RISK_LEVEL_HIGH = 'HIGH';
    const PROTOCOL__DEFAULT = 'DEFAULT';
    const PROTOCOL_SMS = 'SMS';
    const PROTOCOL_EMAIL = 'EMAIL';
    const PROTOCOL_DING_TALK = 'DING_TALK';
    const PROTOCOL_WE_LINK = 'WE_LINK';
    const PROTOCOL_WECHAT = 'WECHAT';
    const PROTOCOL_CALLNOTIFY = 'CALLNOTIFY';
    const PROTOCOL_NOT_TO_NOTIFY = 'NOT_TO_NOTIFY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRiskLevelAllowableValues()
    {
        return [
            self::RISK_LEVEL_LOW,
            self::RISK_LEVEL_MEDIUM,
            self::RISK_LEVEL_HIGH,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL__DEFAULT,
            self::PROTOCOL_SMS,
            self::PROTOCOL_EMAIL,
            self::PROTOCOL_DING_TALK,
            self::PROTOCOL_WE_LINK,
            self::PROTOCOL_WECHAT,
            self::PROTOCOL_CALLNOTIFY,
            self::PROTOCOL_NOT_TO_NOTIFY,
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
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['reviewers'] = isset($data['reviewers']) ? $data['reviewers'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['riskLevel'] === null) {
            $invalidProperties[] = "'riskLevel' can't be null";
        }
            $allowedValues = $this->getRiskLevelAllowableValues();
                if (!is_null($this->container['riskLevel']) && !in_array($this->container['riskLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'riskLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
            if ((mb_strlen($this->container['version']) > 10)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
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
    * Gets riskLevel
    *  风险等级 LOW:低风险 MEDIUM:中风险 HIGH:高风险
    *
    * @return string
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param string $riskLevel 风险等级 LOW:低风险 MEDIUM:中风险 HIGH:高风险
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets version
    *  脚本版本号
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 脚本版本号
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets reviewers
    *  审批人，不填写不需要审批
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ReviewerInfo[]|null
    */
    public function getReviewers()
    {
        return $this->container['reviewers'];
    }

    /**
    * Sets reviewers
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ReviewerInfo[]|null $reviewers 审批人，不填写不需要审批
    *
    * @return $this
    */
    public function setReviewers($reviewers)
    {
        $this->container['reviewers'] = $reviewers;
        return $this;
    }

    /**
    * Gets protocol
    *  审批消息通知协议，用于通知审批人 DEFAULT：默认 SMS：短信 EMAIL：邮件 DING_TALK：钉钉 WE_LINK：welink WECHAT:微信 CALLNOTIFY：语言 NOT_TO_NOTIFY：不通知
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 审批消息通知协议，用于通知审批人 DEFAULT：默认 SMS：短信 EMAIL：邮件 DING_TALK：钉钉 WE_LINK：welink WECHAT:微信 CALLNOTIFY：语言 NOT_TO_NOTIFY：不通知
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
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

