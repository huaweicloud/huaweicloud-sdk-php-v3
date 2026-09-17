<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSqlLimitingInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSqlLimitingInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * canUse  实例能否使用SQL限流功能
    * caseSensitive  是否大小写敏感
    * expire  是否支持展示过期
    * errorMsg  当canUse为False时展示错误信息
    * instanceType  实例类型
    * instanceDetailVersion  实例详细版本号
    * canReadonlySetRule  只读实例是否可以添加、删除限流规则
    * readonlySetRuleMsg  当canReadonlySetRule为False时展示的提示
    * maxRuleLimit  最大可用SQL限流规则数
    * canAddInsertType  是否支持添加insert类型sql
    * supportKeyStr  实例能否使用关键字自治限流功能
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'canUse' => 'bool',
            'caseSensitive' => 'bool',
            'expire' => 'bool',
            'errorMsg' => 'string',
            'instanceType' => 'string',
            'instanceDetailVersion' => 'string',
            'canReadonlySetRule' => 'bool',
            'readonlySetRuleMsg' => 'string',
            'maxRuleLimit' => 'int',
            'canAddInsertType' => 'bool',
            'supportKeyStr' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * canUse  实例能否使用SQL限流功能
    * caseSensitive  是否大小写敏感
    * expire  是否支持展示过期
    * errorMsg  当canUse为False时展示错误信息
    * instanceType  实例类型
    * instanceDetailVersion  实例详细版本号
    * canReadonlySetRule  只读实例是否可以添加、删除限流规则
    * readonlySetRuleMsg  当canReadonlySetRule为False时展示的提示
    * maxRuleLimit  最大可用SQL限流规则数
    * canAddInsertType  是否支持添加insert类型sql
    * supportKeyStr  实例能否使用关键字自治限流功能
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'canUse' => null,
        'caseSensitive' => null,
        'expire' => null,
        'errorMsg' => null,
        'instanceType' => null,
        'instanceDetailVersion' => null,
        'canReadonlySetRule' => null,
        'readonlySetRuleMsg' => null,
        'maxRuleLimit' => 'int32',
        'canAddInsertType' => null,
        'supportKeyStr' => null
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
    * canUse  实例能否使用SQL限流功能
    * caseSensitive  是否大小写敏感
    * expire  是否支持展示过期
    * errorMsg  当canUse为False时展示错误信息
    * instanceType  实例类型
    * instanceDetailVersion  实例详细版本号
    * canReadonlySetRule  只读实例是否可以添加、删除限流规则
    * readonlySetRuleMsg  当canReadonlySetRule为False时展示的提示
    * maxRuleLimit  最大可用SQL限流规则数
    * canAddInsertType  是否支持添加insert类型sql
    * supportKeyStr  实例能否使用关键字自治限流功能
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'canUse' => 'can_use',
            'caseSensitive' => 'case_sensitive',
            'expire' => 'expire',
            'errorMsg' => 'error_msg',
            'instanceType' => 'instance_type',
            'instanceDetailVersion' => 'instance_detail_version',
            'canReadonlySetRule' => 'can_readonly_set_rule',
            'readonlySetRuleMsg' => 'readonly_set_rule_msg',
            'maxRuleLimit' => 'max_rule_limit',
            'canAddInsertType' => 'can_add_insert_type',
            'supportKeyStr' => 'support_key_str'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * canUse  实例能否使用SQL限流功能
    * caseSensitive  是否大小写敏感
    * expire  是否支持展示过期
    * errorMsg  当canUse为False时展示错误信息
    * instanceType  实例类型
    * instanceDetailVersion  实例详细版本号
    * canReadonlySetRule  只读实例是否可以添加、删除限流规则
    * readonlySetRuleMsg  当canReadonlySetRule为False时展示的提示
    * maxRuleLimit  最大可用SQL限流规则数
    * canAddInsertType  是否支持添加insert类型sql
    * supportKeyStr  实例能否使用关键字自治限流功能
    *
    * @var string[]
    */
    protected static $setters = [
            'canUse' => 'setCanUse',
            'caseSensitive' => 'setCaseSensitive',
            'expire' => 'setExpire',
            'errorMsg' => 'setErrorMsg',
            'instanceType' => 'setInstanceType',
            'instanceDetailVersion' => 'setInstanceDetailVersion',
            'canReadonlySetRule' => 'setCanReadonlySetRule',
            'readonlySetRuleMsg' => 'setReadonlySetRuleMsg',
            'maxRuleLimit' => 'setMaxRuleLimit',
            'canAddInsertType' => 'setCanAddInsertType',
            'supportKeyStr' => 'setSupportKeyStr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * canUse  实例能否使用SQL限流功能
    * caseSensitive  是否大小写敏感
    * expire  是否支持展示过期
    * errorMsg  当canUse为False时展示错误信息
    * instanceType  实例类型
    * instanceDetailVersion  实例详细版本号
    * canReadonlySetRule  只读实例是否可以添加、删除限流规则
    * readonlySetRuleMsg  当canReadonlySetRule为False时展示的提示
    * maxRuleLimit  最大可用SQL限流规则数
    * canAddInsertType  是否支持添加insert类型sql
    * supportKeyStr  实例能否使用关键字自治限流功能
    *
    * @var string[]
    */
    protected static $getters = [
            'canUse' => 'getCanUse',
            'caseSensitive' => 'getCaseSensitive',
            'expire' => 'getExpire',
            'errorMsg' => 'getErrorMsg',
            'instanceType' => 'getInstanceType',
            'instanceDetailVersion' => 'getInstanceDetailVersion',
            'canReadonlySetRule' => 'getCanReadonlySetRule',
            'readonlySetRuleMsg' => 'getReadonlySetRuleMsg',
            'maxRuleLimit' => 'getMaxRuleLimit',
            'canAddInsertType' => 'getCanAddInsertType',
            'supportKeyStr' => 'getSupportKeyStr'
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
        $this->container['canUse'] = isset($data['canUse']) ? $data['canUse'] : null;
        $this->container['caseSensitive'] = isset($data['caseSensitive']) ? $data['caseSensitive'] : null;
        $this->container['expire'] = isset($data['expire']) ? $data['expire'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['instanceDetailVersion'] = isset($data['instanceDetailVersion']) ? $data['instanceDetailVersion'] : null;
        $this->container['canReadonlySetRule'] = isset($data['canReadonlySetRule']) ? $data['canReadonlySetRule'] : null;
        $this->container['readonlySetRuleMsg'] = isset($data['readonlySetRuleMsg']) ? $data['readonlySetRuleMsg'] : null;
        $this->container['maxRuleLimit'] = isset($data['maxRuleLimit']) ? $data['maxRuleLimit'] : null;
        $this->container['canAddInsertType'] = isset($data['canAddInsertType']) ? $data['canAddInsertType'] : null;
        $this->container['supportKeyStr'] = isset($data['supportKeyStr']) ? $data['supportKeyStr'] : null;
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
    * Gets canUse
    *  实例能否使用SQL限流功能
    *
    * @return bool|null
    */
    public function getCanUse()
    {
        return $this->container['canUse'];
    }

    /**
    * Sets canUse
    *
    * @param bool|null $canUse 实例能否使用SQL限流功能
    *
    * @return $this
    */
    public function setCanUse($canUse)
    {
        $this->container['canUse'] = $canUse;
        return $this;
    }

    /**
    * Gets caseSensitive
    *  是否大小写敏感
    *
    * @return bool|null
    */
    public function getCaseSensitive()
    {
        return $this->container['caseSensitive'];
    }

    /**
    * Sets caseSensitive
    *
    * @param bool|null $caseSensitive 是否大小写敏感
    *
    * @return $this
    */
    public function setCaseSensitive($caseSensitive)
    {
        $this->container['caseSensitive'] = $caseSensitive;
        return $this;
    }

    /**
    * Gets expire
    *  是否支持展示过期
    *
    * @return bool|null
    */
    public function getExpire()
    {
        return $this->container['expire'];
    }

    /**
    * Sets expire
    *
    * @param bool|null $expire 是否支持展示过期
    *
    * @return $this
    */
    public function setExpire($expire)
    {
        $this->container['expire'] = $expire;
        return $this;
    }

    /**
    * Gets errorMsg
    *  当canUse为False时展示错误信息
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 当canUse为False时展示错误信息
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets instanceType
    *  实例类型
    *
    * @return string|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string|null $instanceType 实例类型
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets instanceDetailVersion
    *  实例详细版本号
    *
    * @return string|null
    */
    public function getInstanceDetailVersion()
    {
        return $this->container['instanceDetailVersion'];
    }

    /**
    * Sets instanceDetailVersion
    *
    * @param string|null $instanceDetailVersion 实例详细版本号
    *
    * @return $this
    */
    public function setInstanceDetailVersion($instanceDetailVersion)
    {
        $this->container['instanceDetailVersion'] = $instanceDetailVersion;
        return $this;
    }

    /**
    * Gets canReadonlySetRule
    *  只读实例是否可以添加、删除限流规则
    *
    * @return bool|null
    */
    public function getCanReadonlySetRule()
    {
        return $this->container['canReadonlySetRule'];
    }

    /**
    * Sets canReadonlySetRule
    *
    * @param bool|null $canReadonlySetRule 只读实例是否可以添加、删除限流规则
    *
    * @return $this
    */
    public function setCanReadonlySetRule($canReadonlySetRule)
    {
        $this->container['canReadonlySetRule'] = $canReadonlySetRule;
        return $this;
    }

    /**
    * Gets readonlySetRuleMsg
    *  当canReadonlySetRule为False时展示的提示
    *
    * @return string|null
    */
    public function getReadonlySetRuleMsg()
    {
        return $this->container['readonlySetRuleMsg'];
    }

    /**
    * Sets readonlySetRuleMsg
    *
    * @param string|null $readonlySetRuleMsg 当canReadonlySetRule为False时展示的提示
    *
    * @return $this
    */
    public function setReadonlySetRuleMsg($readonlySetRuleMsg)
    {
        $this->container['readonlySetRuleMsg'] = $readonlySetRuleMsg;
        return $this;
    }

    /**
    * Gets maxRuleLimit
    *  最大可用SQL限流规则数
    *
    * @return int|null
    */
    public function getMaxRuleLimit()
    {
        return $this->container['maxRuleLimit'];
    }

    /**
    * Sets maxRuleLimit
    *
    * @param int|null $maxRuleLimit 最大可用SQL限流规则数
    *
    * @return $this
    */
    public function setMaxRuleLimit($maxRuleLimit)
    {
        $this->container['maxRuleLimit'] = $maxRuleLimit;
        return $this;
    }

    /**
    * Gets canAddInsertType
    *  是否支持添加insert类型sql
    *
    * @return bool|null
    */
    public function getCanAddInsertType()
    {
        return $this->container['canAddInsertType'];
    }

    /**
    * Sets canAddInsertType
    *
    * @param bool|null $canAddInsertType 是否支持添加insert类型sql
    *
    * @return $this
    */
    public function setCanAddInsertType($canAddInsertType)
    {
        $this->container['canAddInsertType'] = $canAddInsertType;
        return $this;
    }

    /**
    * Gets supportKeyStr
    *  实例能否使用关键字自治限流功能
    *
    * @return bool|null
    */
    public function getSupportKeyStr()
    {
        return $this->container['supportKeyStr'];
    }

    /**
    * Sets supportKeyStr
    *
    * @param bool|null $supportKeyStr 实例能否使用关键字自治限流功能
    *
    * @return $this
    */
    public function setSupportKeyStr($supportKeyStr)
    {
        $this->container['supportKeyStr'] = $supportKeyStr;
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

