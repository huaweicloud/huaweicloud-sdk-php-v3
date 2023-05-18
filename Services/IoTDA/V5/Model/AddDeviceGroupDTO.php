<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddDeviceGroupDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddDeviceGroupDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数说明**：设备组名称，单个资源空间下不可重复。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
    * description  **参数说明**：设备组描述。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
    * superGroupId  **参数说明**：父设备组ID，携带该参数时表示在该设备组下创建一个子设备组。 **取值范围**：长度不超过36，十六进制字符串和连接符（-）的组合。
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的设备组归属到哪个资源空间下，否则创建的设备组将会归属到[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * groupType  **参数说明**：设备组类型，默认为静态设备组；当设备组类型为动态设备组时，需要填写动态设备组组规则
    * dynamicGroupRule  **参数说明**：动态设备组规则语法和高级搜索保持一致，只需要填写where 子句内容，其余子句无需填写，todo补充说明
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'superGroupId' => 'string',
            'appId' => 'string',
            'groupType' => 'string',
            'dynamicGroupRule' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数说明**：设备组名称，单个资源空间下不可重复。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
    * description  **参数说明**：设备组描述。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
    * superGroupId  **参数说明**：父设备组ID，携带该参数时表示在该设备组下创建一个子设备组。 **取值范围**：长度不超过36，十六进制字符串和连接符（-）的组合。
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的设备组归属到哪个资源空间下，否则创建的设备组将会归属到[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * groupType  **参数说明**：设备组类型，默认为静态设备组；当设备组类型为动态设备组时，需要填写动态设备组组规则
    * dynamicGroupRule  **参数说明**：动态设备组规则语法和高级搜索保持一致，只需要填写where 子句内容，其余子句无需填写，todo补充说明
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'superGroupId' => null,
        'appId' => null,
        'groupType' => null,
        'dynamicGroupRule' => null
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
    * name  **参数说明**：设备组名称，单个资源空间下不可重复。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
    * description  **参数说明**：设备组描述。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
    * superGroupId  **参数说明**：父设备组ID，携带该参数时表示在该设备组下创建一个子设备组。 **取值范围**：长度不超过36，十六进制字符串和连接符（-）的组合。
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的设备组归属到哪个资源空间下，否则创建的设备组将会归属到[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * groupType  **参数说明**：设备组类型，默认为静态设备组；当设备组类型为动态设备组时，需要填写动态设备组组规则
    * dynamicGroupRule  **参数说明**：动态设备组规则语法和高级搜索保持一致，只需要填写where 子句内容，其余子句无需填写，todo补充说明
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'superGroupId' => 'super_group_id',
            'appId' => 'app_id',
            'groupType' => 'group_type',
            'dynamicGroupRule' => 'dynamic_group_rule'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数说明**：设备组名称，单个资源空间下不可重复。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
    * description  **参数说明**：设备组描述。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
    * superGroupId  **参数说明**：父设备组ID，携带该参数时表示在该设备组下创建一个子设备组。 **取值范围**：长度不超过36，十六进制字符串和连接符（-）的组合。
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的设备组归属到哪个资源空间下，否则创建的设备组将会归属到[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * groupType  **参数说明**：设备组类型，默认为静态设备组；当设备组类型为动态设备组时，需要填写动态设备组组规则
    * dynamicGroupRule  **参数说明**：动态设备组规则语法和高级搜索保持一致，只需要填写where 子句内容，其余子句无需填写，todo补充说明
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'superGroupId' => 'setSuperGroupId',
            'appId' => 'setAppId',
            'groupType' => 'setGroupType',
            'dynamicGroupRule' => 'setDynamicGroupRule'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数说明**：设备组名称，单个资源空间下不可重复。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
    * description  **参数说明**：设备组描述。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
    * superGroupId  **参数说明**：父设备组ID，携带该参数时表示在该设备组下创建一个子设备组。 **取值范围**：长度不超过36，十六进制字符串和连接符（-）的组合。
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的设备组归属到哪个资源空间下，否则创建的设备组将会归属到[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * groupType  **参数说明**：设备组类型，默认为静态设备组；当设备组类型为动态设备组时，需要填写动态设备组组规则
    * dynamicGroupRule  **参数说明**：动态设备组规则语法和高级搜索保持一致，只需要填写where 子句内容，其余子句无需填写，todo补充说明
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'superGroupId' => 'getSuperGroupId',
            'appId' => 'getAppId',
            'groupType' => 'getGroupType',
            'dynamicGroupRule' => 'getDynamicGroupRule'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['superGroupId'] = isset($data['superGroupId']) ? $data['superGroupId'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
        $this->container['dynamicGroupRule'] = isset($data['dynamicGroupRule']) ? $data['dynamicGroupRule'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_? '#()\\.,&%@!-]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_? '#()\\.,&%@!-]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 64)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_? '#()\\.,&%@!-]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_? '#()\\.,&%@!-]*$/.";
            }
            if (!is_null($this->container['superGroupId']) && !preg_match("/^[a-fA-F0-9-]{1,36}$/", $this->container['superGroupId'])) {
                $invalidProperties[] = "invalid value for 'superGroupId', must be conform to the pattern /^[a-fA-F0-9-]{1,36}$/.";
            }
            if (!is_null($this->container['appId']) && !preg_match("/^[a-zA-Z0-9_-]{1,36}$/", $this->container['appId'])) {
                $invalidProperties[] = "invalid value for 'appId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,36}$/.";
            }
            if (!is_null($this->container['groupType']) && !preg_match("/DYNAMIC|STATIC/", $this->container['groupType'])) {
                $invalidProperties[] = "invalid value for 'groupType', must be conform to the pattern /DYNAMIC|STATIC/.";
            }
            if (!is_null($this->container['dynamicGroupRule']) && !preg_match("/^[一-龥a-zA-Z0-9_?'#()., &%@!*=<>:-]{1,200}$/", $this->container['dynamicGroupRule'])) {
                $invalidProperties[] = "invalid value for 'dynamicGroupRule', must be conform to the pattern /^[一-龥a-zA-Z0-9_?'#()., &%@!*=<>:-]{1,200}$/.";
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
    * Gets name
    *  **参数说明**：设备组名称，单个资源空间下不可重复。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数说明**：设备组名称，单个资源空间下不可重复。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数说明**：设备组描述。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
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
    * @param string|null $description **参数说明**：设备组描述。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets superGroupId
    *  **参数说明**：父设备组ID，携带该参数时表示在该设备组下创建一个子设备组。 **取值范围**：长度不超过36，十六进制字符串和连接符（-）的组合。
    *
    * @return string|null
    */
    public function getSuperGroupId()
    {
        return $this->container['superGroupId'];
    }

    /**
    * Sets superGroupId
    *
    * @param string|null $superGroupId **参数说明**：父设备组ID，携带该参数时表示在该设备组下创建一个子设备组。 **取值范围**：长度不超过36，十六进制字符串和连接符（-）的组合。
    *
    * @return $this
    */
    public function setSuperGroupId($superGroupId)
    {
        $this->container['superGroupId'] = $superGroupId;
        return $this;
    }

    /**
    * Gets appId
    *  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的设备组归属到哪个资源空间下，否则创建的设备组将会归属到[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
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
    * @param string|null $appId **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的设备组归属到哪个资源空间下，否则创建的设备组将会归属到[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets groupType
    *  **参数说明**：设备组类型，默认为静态设备组；当设备组类型为动态设备组时，需要填写动态设备组组规则
    *
    * @return string|null
    */
    public function getGroupType()
    {
        return $this->container['groupType'];
    }

    /**
    * Sets groupType
    *
    * @param string|null $groupType **参数说明**：设备组类型，默认为静态设备组；当设备组类型为动态设备组时，需要填写动态设备组组规则
    *
    * @return $this
    */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;
        return $this;
    }

    /**
    * Gets dynamicGroupRule
    *  **参数说明**：动态设备组规则语法和高级搜索保持一致，只需要填写where 子句内容，其余子句无需填写，todo补充说明
    *
    * @return string|null
    */
    public function getDynamicGroupRule()
    {
        return $this->container['dynamicGroupRule'];
    }

    /**
    * Sets dynamicGroupRule
    *
    * @param string|null $dynamicGroupRule **参数说明**：动态设备组规则语法和高级搜索保持一致，只需要填写where 子句内容，其余子句无需填写，todo补充说明
    *
    * @return $this
    */
    public function setDynamicGroupRule($dynamicGroupRule)
    {
        $this->container['dynamicGroupRule'] = $dynamicGroupRule;
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

