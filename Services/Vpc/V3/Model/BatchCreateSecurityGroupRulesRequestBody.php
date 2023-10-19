<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateSecurityGroupRulesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateSecurityGroupRulesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * securityGroupRules  待创建的安全组规则列表
    * ignoreDuplicate  创建时是否忽略重复的安全组规则 默认为false
    * dryRun  功能说明：是否只预检此次请求 取值范围： -true：发送检查请求，不会创建安全组规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应码202。 -false（默认值）：发送正常请求，并直接创建安全组规则。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'securityGroupRules' => '\HuaweiCloud\SDK\Vpc\V3\Model\BatchCreateSecurityGroupRulesOption[]',
            'ignoreDuplicate' => 'bool',
            'dryRun' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * securityGroupRules  待创建的安全组规则列表
    * ignoreDuplicate  创建时是否忽略重复的安全组规则 默认为false
    * dryRun  功能说明：是否只预检此次请求 取值范围： -true：发送检查请求，不会创建安全组规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应码202。 -false（默认值）：发送正常请求，并直接创建安全组规则。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'securityGroupRules' => null,
        'ignoreDuplicate' => null,
        'dryRun' => null
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
    * securityGroupRules  待创建的安全组规则列表
    * ignoreDuplicate  创建时是否忽略重复的安全组规则 默认为false
    * dryRun  功能说明：是否只预检此次请求 取值范围： -true：发送检查请求，不会创建安全组规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应码202。 -false（默认值）：发送正常请求，并直接创建安全组规则。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'securityGroupRules' => 'security_group_rules',
            'ignoreDuplicate' => 'ignore_duplicate',
            'dryRun' => 'dry_run'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * securityGroupRules  待创建的安全组规则列表
    * ignoreDuplicate  创建时是否忽略重复的安全组规则 默认为false
    * dryRun  功能说明：是否只预检此次请求 取值范围： -true：发送检查请求，不会创建安全组规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应码202。 -false（默认值）：发送正常请求，并直接创建安全组规则。
    *
    * @var string[]
    */
    protected static $setters = [
            'securityGroupRules' => 'setSecurityGroupRules',
            'ignoreDuplicate' => 'setIgnoreDuplicate',
            'dryRun' => 'setDryRun'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * securityGroupRules  待创建的安全组规则列表
    * ignoreDuplicate  创建时是否忽略重复的安全组规则 默认为false
    * dryRun  功能说明：是否只预检此次请求 取值范围： -true：发送检查请求，不会创建安全组规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应码202。 -false（默认值）：发送正常请求，并直接创建安全组规则。
    *
    * @var string[]
    */
    protected static $getters = [
            'securityGroupRules' => 'getSecurityGroupRules',
            'ignoreDuplicate' => 'getIgnoreDuplicate',
            'dryRun' => 'getDryRun'
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
        $this->container['securityGroupRules'] = isset($data['securityGroupRules']) ? $data['securityGroupRules'] : null;
        $this->container['ignoreDuplicate'] = isset($data['ignoreDuplicate']) ? $data['ignoreDuplicate'] : null;
        $this->container['dryRun'] = isset($data['dryRun']) ? $data['dryRun'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['securityGroupRules'] === null) {
            $invalidProperties[] = "'securityGroupRules' can't be null";
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
    * Gets securityGroupRules
    *  待创建的安全组规则列表
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\BatchCreateSecurityGroupRulesOption[]
    */
    public function getSecurityGroupRules()
    {
        return $this->container['securityGroupRules'];
    }

    /**
    * Sets securityGroupRules
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\BatchCreateSecurityGroupRulesOption[] $securityGroupRules 待创建的安全组规则列表
    *
    * @return $this
    */
    public function setSecurityGroupRules($securityGroupRules)
    {
        $this->container['securityGroupRules'] = $securityGroupRules;
        return $this;
    }

    /**
    * Gets ignoreDuplicate
    *  创建时是否忽略重复的安全组规则 默认为false
    *
    * @return bool|null
    */
    public function getIgnoreDuplicate()
    {
        return $this->container['ignoreDuplicate'];
    }

    /**
    * Sets ignoreDuplicate
    *
    * @param bool|null $ignoreDuplicate 创建时是否忽略重复的安全组规则 默认为false
    *
    * @return $this
    */
    public function setIgnoreDuplicate($ignoreDuplicate)
    {
        $this->container['ignoreDuplicate'] = $ignoreDuplicate;
        return $this;
    }

    /**
    * Gets dryRun
    *  功能说明：是否只预检此次请求 取值范围： -true：发送检查请求，不会创建安全组规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应码202。 -false（默认值）：发送正常请求，并直接创建安全组规则。
    *
    * @return bool|null
    */
    public function getDryRun()
    {
        return $this->container['dryRun'];
    }

    /**
    * Sets dryRun
    *
    * @param bool|null $dryRun 功能说明：是否只预检此次请求 取值范围： -true：发送检查请求，不会创建安全组规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应码202。 -false（默认值）：发送正常请求，并直接创建安全组规则。
    *
    * @return $this
    */
    public function setDryRun($dryRun)
    {
        $this->container['dryRun'] = $dryRun;
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

