<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KeystoneShowSecurityComplianceByOptionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KeystoneShowSecurityComplianceByOptionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  待查询的账号ID，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * option  查询条件。该字段内容为：password_regex或password_regex_description。    password_regex：密码强度策略的正则表达式；password_regex_description：密码强度策略的描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'option' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  待查询的账号ID，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * option  查询条件。该字段内容为：password_regex或password_regex_description。    password_regex：密码强度策略的正则表达式；password_regex_description：密码强度策略的描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'option' => null
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
    * domainId  待查询的账号ID，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * option  查询条件。该字段内容为：password_regex或password_regex_description。    password_regex：密码强度策略的正则表达式；password_regex_description：密码强度策略的描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'option' => 'option'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  待查询的账号ID，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * option  查询条件。该字段内容为：password_regex或password_regex_description。    password_regex：密码强度策略的正则表达式；password_regex_description：密码强度策略的描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'option' => 'setOption'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  待查询的账号ID，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * option  查询条件。该字段内容为：password_regex或password_regex_description。    password_regex：密码强度策略的正则表达式；password_regex_description：密码强度策略的描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'option' => 'getOption'
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
    const OPTION_PASSWORD_REGEX = 'password_regex';
    const OPTION_PASSWORD_REGEX_DESCRIPTION = 'password_regex_description';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOptionAllowableValues()
    {
        return [
            self::OPTION_PASSWORD_REGEX,
            self::OPTION_PASSWORD_REGEX_DESCRIPTION,
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['option'] = isset($data['option']) ? $data['option'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['option'] === null) {
            $invalidProperties[] = "'option' can't be null";
        }
            $allowedValues = $this->getOptionAllowableValues();
                if (!is_null($this->container['option']) && !in_array($this->container['option'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'option', must be one of '%s'",
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
    * Gets domainId
    *  待查询的账号ID，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 待查询的账号ID，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets option
    *  查询条件。该字段内容为：password_regex或password_regex_description。    password_regex：密码强度策略的正则表达式；password_regex_description：密码强度策略的描述。
    *
    * @return string
    */
    public function getOption()
    {
        return $this->container['option'];
    }

    /**
    * Sets option
    *
    * @param string $option 查询条件。该字段内容为：password_regex或password_regex_description。    password_regex：密码强度策略的正则表达式；password_regex_description：密码强度策略的描述。
    *
    * @return $this
    */
    public function setOption($option)
    {
        $this->container['option'] = $option;
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

