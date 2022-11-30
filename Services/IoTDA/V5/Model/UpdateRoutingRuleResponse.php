<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateRoutingRuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateRoutingRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleId  规则触发条件ID，用于唯一标识一个规则触发条件，在创建规则条件时由物联网平台分配获得。
    * ruleName  用户自定义的规则名称。
    * description  用户自定义的规则描述。
    * subject  subject
    * appType  租户规则的生效范围，取值如下： - GLOBAL：生效范围为租户级 - APP：生效范围为资源空间级。
    * appId  资源空间ID
    * select  用户自定义sql select语句，最大长度500，该参数仅供标准版和企业版用户使用。
    * where  用户自定义sql where语句，最大长度500，该参数仅供标准版和企业版用户使用。
    * active  规则条件的状态是否为激活。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleId' => 'string',
            'ruleName' => 'string',
            'description' => 'string',
            'subject' => '\HuaweiCloud\SDK\IoTDA\V5\Model\RoutingRuleSubject',
            'appType' => 'string',
            'appId' => 'string',
            'select' => 'string',
            'where' => 'string',
            'active' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleId  规则触发条件ID，用于唯一标识一个规则触发条件，在创建规则条件时由物联网平台分配获得。
    * ruleName  用户自定义的规则名称。
    * description  用户自定义的规则描述。
    * subject  subject
    * appType  租户规则的生效范围，取值如下： - GLOBAL：生效范围为租户级 - APP：生效范围为资源空间级。
    * appId  资源空间ID
    * select  用户自定义sql select语句，最大长度500，该参数仅供标准版和企业版用户使用。
    * where  用户自定义sql where语句，最大长度500，该参数仅供标准版和企业版用户使用。
    * active  规则条件的状态是否为激活。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleId' => null,
        'ruleName' => null,
        'description' => null,
        'subject' => null,
        'appType' => null,
        'appId' => null,
        'select' => null,
        'where' => null,
        'active' => null
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
    * ruleId  规则触发条件ID，用于唯一标识一个规则触发条件，在创建规则条件时由物联网平台分配获得。
    * ruleName  用户自定义的规则名称。
    * description  用户自定义的规则描述。
    * subject  subject
    * appType  租户规则的生效范围，取值如下： - GLOBAL：生效范围为租户级 - APP：生效范围为资源空间级。
    * appId  资源空间ID
    * select  用户自定义sql select语句，最大长度500，该参数仅供标准版和企业版用户使用。
    * where  用户自定义sql where语句，最大长度500，该参数仅供标准版和企业版用户使用。
    * active  规则条件的状态是否为激活。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleId' => 'rule_id',
            'ruleName' => 'rule_name',
            'description' => 'description',
            'subject' => 'subject',
            'appType' => 'app_type',
            'appId' => 'app_id',
            'select' => 'select',
            'where' => 'where',
            'active' => 'active'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleId  规则触发条件ID，用于唯一标识一个规则触发条件，在创建规则条件时由物联网平台分配获得。
    * ruleName  用户自定义的规则名称。
    * description  用户自定义的规则描述。
    * subject  subject
    * appType  租户规则的生效范围，取值如下： - GLOBAL：生效范围为租户级 - APP：生效范围为资源空间级。
    * appId  资源空间ID
    * select  用户自定义sql select语句，最大长度500，该参数仅供标准版和企业版用户使用。
    * where  用户自定义sql where语句，最大长度500，该参数仅供标准版和企业版用户使用。
    * active  规则条件的状态是否为激活。
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleId' => 'setRuleId',
            'ruleName' => 'setRuleName',
            'description' => 'setDescription',
            'subject' => 'setSubject',
            'appType' => 'setAppType',
            'appId' => 'setAppId',
            'select' => 'setSelect',
            'where' => 'setWhere',
            'active' => 'setActive'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleId  规则触发条件ID，用于唯一标识一个规则触发条件，在创建规则条件时由物联网平台分配获得。
    * ruleName  用户自定义的规则名称。
    * description  用户自定义的规则描述。
    * subject  subject
    * appType  租户规则的生效范围，取值如下： - GLOBAL：生效范围为租户级 - APP：生效范围为资源空间级。
    * appId  资源空间ID
    * select  用户自定义sql select语句，最大长度500，该参数仅供标准版和企业版用户使用。
    * where  用户自定义sql where语句，最大长度500，该参数仅供标准版和企业版用户使用。
    * active  规则条件的状态是否为激活。
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleId' => 'getRuleId',
            'ruleName' => 'getRuleName',
            'description' => 'getDescription',
            'subject' => 'getSubject',
            'appType' => 'getAppType',
            'appId' => 'getAppId',
            'select' => 'getSelect',
            'where' => 'getWhere',
            'active' => 'getActive'
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
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['select'] = isset($data['select']) ? $data['select'] : null;
        $this->container['where'] = isset($data['where']) ? $data['where'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ruleId']) && !preg_match("/^[a-zA-Z0-9_-]{1,36}$/", $this->container['ruleId'])) {
                $invalidProperties[] = "invalid value for 'ruleId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,36}$/.";
            }
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) > 256)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
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
    * Gets ruleId
    *  规则触发条件ID，用于唯一标识一个规则触发条件，在创建规则条件时由物联网平台分配获得。
    *
    * @return string|null
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string|null $ruleId 规则触发条件ID，用于唯一标识一个规则触发条件，在创建规则条件时由物联网平台分配获得。
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets ruleName
    *  用户自定义的规则名称。
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
    * @param string|null $ruleName 用户自定义的规则名称。
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
    *  用户自定义的规则描述。
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
    * @param string|null $description 用户自定义的规则描述。
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
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\RoutingRuleSubject|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\RoutingRuleSubject|null $subject subject
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
    *  租户规则的生效范围，取值如下： - GLOBAL：生效范围为租户级 - APP：生效范围为资源空间级。
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
    * @param string|null $appType 租户规则的生效范围，取值如下： - GLOBAL：生效范围为租户级 - APP：生效范围为资源空间级。
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
    *  资源空间ID
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
    * @param string|null $appId 资源空间ID
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
    *  用户自定义sql select语句，最大长度500，该参数仅供标准版和企业版用户使用。
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
    * @param string|null $select 用户自定义sql select语句，最大长度500，该参数仅供标准版和企业版用户使用。
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
    *  用户自定义sql where语句，最大长度500，该参数仅供标准版和企业版用户使用。
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
    * @param string|null $where 用户自定义sql where语句，最大长度500，该参数仅供标准版和企业版用户使用。
    *
    * @return $this
    */
    public function setWhere($where)
    {
        $this->container['where'] = $where;
        return $this;
    }

    /**
    * Gets active
    *  规则条件的状态是否为激活。
    *
    * @return bool|null
    */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
    * Sets active
    *
    * @param bool|null $active 规则条件的状态是否为激活。
    *
    * @return $this
    */
    public function setActive($active)
    {
        $this->container['active'] = $active;
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

