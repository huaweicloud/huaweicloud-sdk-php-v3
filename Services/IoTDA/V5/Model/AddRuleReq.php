<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddRuleReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddRuleReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleName  **参数说明**：规则名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * description  **参数说明**：用户自定义的规则描述。
    * subject  subject
    * appType  **参数说明**：租户规则的生效范围，默认GLOBAL，。 **取值范围**： - GLOBAL：生效范围为租户级。 - APP：生效范围为资源空间级。如果类型为APP，创建的规则生效范围为携带的app_id指定的资源空间，不携带app_id则创建规则生效范围为[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)。
    * appId  **参数说明**：资源空间ID。。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * select  **参数说明**：用户自定义sql select语句，最大长度500，该参数仅供标准版和企业版用户使用。
    * where  **参数说明**：用户自定义sql where语句，最大长度500，该参数仅供标准版和企业版用户使用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleName' => 'string',
            'description' => 'string',
            'subject' => '\HuaweiCloud\SDK\IoTDA\V5\Model\RoutingRuleSubject',
            'appType' => 'string',
            'appId' => 'string',
            'select' => 'string',
            'where' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleName  **参数说明**：规则名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * description  **参数说明**：用户自定义的规则描述。
    * subject  subject
    * appType  **参数说明**：租户规则的生效范围，默认GLOBAL，。 **取值范围**： - GLOBAL：生效范围为租户级。 - APP：生效范围为资源空间级。如果类型为APP，创建的规则生效范围为携带的app_id指定的资源空间，不携带app_id则创建规则生效范围为[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)。
    * appId  **参数说明**：资源空间ID。。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * select  **参数说明**：用户自定义sql select语句，最大长度500，该参数仅供标准版和企业版用户使用。
    * where  **参数说明**：用户自定义sql where语句，最大长度500，该参数仅供标准版和企业版用户使用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleName' => null,
        'description' => null,
        'subject' => null,
        'appType' => null,
        'appId' => null,
        'select' => null,
        'where' => null
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
    * ruleName  **参数说明**：规则名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * description  **参数说明**：用户自定义的规则描述。
    * subject  subject
    * appType  **参数说明**：租户规则的生效范围，默认GLOBAL，。 **取值范围**： - GLOBAL：生效范围为租户级。 - APP：生效范围为资源空间级。如果类型为APP，创建的规则生效范围为携带的app_id指定的资源空间，不携带app_id则创建规则生效范围为[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)。
    * appId  **参数说明**：资源空间ID。。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * select  **参数说明**：用户自定义sql select语句，最大长度500，该参数仅供标准版和企业版用户使用。
    * where  **参数说明**：用户自定义sql where语句，最大长度500，该参数仅供标准版和企业版用户使用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleName' => 'rule_name',
            'description' => 'description',
            'subject' => 'subject',
            'appType' => 'app_type',
            'appId' => 'app_id',
            'select' => 'select',
            'where' => 'where'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleName  **参数说明**：规则名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * description  **参数说明**：用户自定义的规则描述。
    * subject  subject
    * appType  **参数说明**：租户规则的生效范围，默认GLOBAL，。 **取值范围**： - GLOBAL：生效范围为租户级。 - APP：生效范围为资源空间级。如果类型为APP，创建的规则生效范围为携带的app_id指定的资源空间，不携带app_id则创建规则生效范围为[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)。
    * appId  **参数说明**：资源空间ID。。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * select  **参数说明**：用户自定义sql select语句，最大长度500，该参数仅供标准版和企业版用户使用。
    * where  **参数说明**：用户自定义sql where语句，最大长度500，该参数仅供标准版和企业版用户使用。
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleName' => 'setRuleName',
            'description' => 'setDescription',
            'subject' => 'setSubject',
            'appType' => 'setAppType',
            'appId' => 'setAppId',
            'select' => 'setSelect',
            'where' => 'setWhere'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleName  **参数说明**：规则名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * description  **参数说明**：用户自定义的规则描述。
    * subject  subject
    * appType  **参数说明**：租户规则的生效范围，默认GLOBAL，。 **取值范围**： - GLOBAL：生效范围为租户级。 - APP：生效范围为资源空间级。如果类型为APP，创建的规则生效范围为携带的app_id指定的资源空间，不携带app_id则创建规则生效范围为[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)。
    * appId  **参数说明**：资源空间ID。。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * select  **参数说明**：用户自定义sql select语句，最大长度500，该参数仅供标准版和企业版用户使用。
    * where  **参数说明**：用户自定义sql where语句，最大长度500，该参数仅供标准版和企业版用户使用。
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleName' => 'getRuleName',
            'description' => 'getDescription',
            'subject' => 'getSubject',
            'appType' => 'getAppType',
            'appId' => 'getAppId',
            'select' => 'getSelect',
            'where' => 'getWhere'
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
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['select'] = isset($data['select']) ? $data['select'] : null;
        $this->container['where'] = isset($data['where']) ? $data['where'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) > 256)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ruleName']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_?'#()\\.,&%@!-]*$/", $this->container['ruleName'])) {
                $invalidProperties[] = "invalid value for 'ruleName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_?'#()\\.,&%@!-]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
            if (!is_null($this->container['appType']) && !preg_match("/(GLOBAL|APP)/", $this->container['appType'])) {
                $invalidProperties[] = "invalid value for 'appType', must be conform to the pattern /(GLOBAL|APP)/.";
            }
            if (!is_null($this->container['appId']) && !preg_match("/^[a-zA-Z0-9_-]{1,36}$/", $this->container['appId'])) {
                $invalidProperties[] = "invalid value for 'appId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,36}$/.";
            }
            if (!is_null($this->container['select']) && (mb_strlen($this->container['select']) > 2500)) {
                $invalidProperties[] = "invalid value for 'select', the character length must be smaller than or equal to 2500.";
            }
            if (!is_null($this->container['select']) && (mb_strlen($this->container['select']) < 0)) {
                $invalidProperties[] = "invalid value for 'select', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['where']) && (mb_strlen($this->container['where']) > 2500)) {
                $invalidProperties[] = "invalid value for 'where', the character length must be smaller than or equal to 2500.";
            }
            if (!is_null($this->container['where']) && (mb_strlen($this->container['where']) < 0)) {
                $invalidProperties[] = "invalid value for 'where', the character length must be bigger than or equal to 0.";
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
    * Gets ruleName
    *  **参数说明**：规则名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName **参数说明**：规则名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets description
    *  **参数说明**：用户自定义的规则描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数说明**：用户自定义的规则描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets subject
    *  subject
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\RoutingRuleSubject
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\RoutingRuleSubject $subject subject
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets appType
    *  **参数说明**：租户规则的生效范围，默认GLOBAL，。 **取值范围**： - GLOBAL：生效范围为租户级。 - APP：生效范围为资源空间级。如果类型为APP，创建的规则生效范围为携带的app_id指定的资源空间，不携带app_id则创建规则生效范围为[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)。
    *
    * @return string|null
    */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
    * Sets appType
    *
    * @param string|null $appType **参数说明**：租户规则的生效范围，默认GLOBAL，。 **取值范围**： - GLOBAL：生效范围为租户级。 - APP：生效范围为资源空间级。如果类型为APP，创建的规则生效范围为携带的app_id指定的资源空间，不携带app_id则创建规则生效范围为[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)。
    *
    * @return $this
    */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;
        return $this;
    }

    /**
    * Gets appId
    *  **参数说明**：资源空间ID。。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId **参数说明**：资源空间ID。。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets select
    *  **参数说明**：用户自定义sql select语句，最大长度500，该参数仅供标准版和企业版用户使用。
    *
    * @return string|null
    */
    public function getSelect()
    {
        return $this->container['select'];
    }

    /**
    * Sets select
    *
    * @param string|null $select **参数说明**：用户自定义sql select语句，最大长度500，该参数仅供标准版和企业版用户使用。
    *
    * @return $this
    */
    public function setSelect($select)
    {
        $this->container['select'] = $select;
        return $this;
    }

    /**
    * Gets where
    *  **参数说明**：用户自定义sql where语句，最大长度500，该参数仅供标准版和企业版用户使用。
    *
    * @return string|null
    */
    public function getWhere()
    {
        return $this->container['where'];
    }

    /**
    * Sets where
    *
    * @param string|null $where **参数说明**：用户自定义sql where语句，最大长度500，该参数仅供标准版和企业版用户使用。
    *
    * @return $this
    */
    public function setWhere($where)
    {
        $this->container['where'] = $where;
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

