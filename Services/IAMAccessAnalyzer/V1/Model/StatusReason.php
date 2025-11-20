<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatusReason implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatusReason';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  分析器当前状态的原因。 - delegated_administrator_deregistered：委托管理员未注册 - trusted_service_disabled：可信服务未开启 - internal_error：内部错误 - organization_deleted：组织已删除 - service_linked_agency_creation_failed：服务关联委托创建失败
    * details  分析器当前状态的详细原因。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'details' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  分析器当前状态的原因。 - delegated_administrator_deregistered：委托管理员未注册 - trusted_service_disabled：可信服务未开启 - internal_error：内部错误 - organization_deleted：组织已删除 - service_linked_agency_creation_failed：服务关联委托创建失败
    * details  分析器当前状态的详细原因。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'details' => null
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
    * code  分析器当前状态的原因。 - delegated_administrator_deregistered：委托管理员未注册 - trusted_service_disabled：可信服务未开启 - internal_error：内部错误 - organization_deleted：组织已删除 - service_linked_agency_creation_failed：服务关联委托创建失败
    * details  分析器当前状态的详细原因。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'details' => 'details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  分析器当前状态的原因。 - delegated_administrator_deregistered：委托管理员未注册 - trusted_service_disabled：可信服务未开启 - internal_error：内部错误 - organization_deleted：组织已删除 - service_linked_agency_creation_failed：服务关联委托创建失败
    * details  分析器当前状态的详细原因。
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'details' => 'setDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  分析器当前状态的原因。 - delegated_administrator_deregistered：委托管理员未注册 - trusted_service_disabled：可信服务未开启 - internal_error：内部错误 - organization_deleted：组织已删除 - service_linked_agency_creation_failed：服务关联委托创建失败
    * details  分析器当前状态的详细原因。
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'details' => 'getDetails'
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
    const CODE_DELEGATED_ADMINISTRATOR_DEREGISTERED = 'delegated_administrator_deregistered';
    const CODE_TRUSTED_SERVICE_DISABLED = 'trusted_service_disabled';
    const CODE_INTERNAL_ERROR = 'internal_error';
    const CODE_ORGANIZATION_DELETED = 'organization_deleted';
    const CODE_SERVICE_LINKED_AGENCY_CREATION_FAILED = 'service_linked_agency_creation_failed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_DELEGATED_ADMINISTRATOR_DEREGISTERED,
            self::CODE_TRUSTED_SERVICE_DISABLED,
            self::CODE_INTERNAL_ERROR,
            self::CODE_ORGANIZATION_DELETED,
            self::CODE_SERVICE_LINKED_AGENCY_CREATION_FAILED,
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
            $allowedValues = $this->getCodeAllowableValues();
                if (!is_null($this->container['code']) && !in_array($this->container['code'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'code', must be one of '%s'",
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
    * Gets code
    *  分析器当前状态的原因。 - delegated_administrator_deregistered：委托管理员未注册 - trusted_service_disabled：可信服务未开启 - internal_error：内部错误 - organization_deleted：组织已删除 - service_linked_agency_creation_failed：服务关联委托创建失败
    *
    * @return string
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string $code 分析器当前状态的原因。 - delegated_administrator_deregistered：委托管理员未注册 - trusted_service_disabled：可信服务未开启 - internal_error：内部错误 - organization_deleted：组织已删除 - service_linked_agency_creation_failed：服务关联委托创建失败
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets details
    *  分析器当前状态的详细原因。
    *
    * @return string|null
    */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
    * Sets details
    *
    * @param string|null $details 分析器当前状态的详细原因。
    *
    * @return $this
    */
    public function setDetails($details)
    {
        $this->container['details'] = $details;
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

