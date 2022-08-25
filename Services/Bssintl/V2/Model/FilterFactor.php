<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FilterFactor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FilterFactor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  维度分组条件。CLOUD_SERVICE_TYPE：产品类型ASSOCIATED_ACCOUNT：关联账号REGION_CODE：区域RES_SPEC_CODE：规格编码USAGE_TYPE：使用量类型ENTERPRISE_PROJECT_ID：企业项目RESOURCE_ID：资源CHARGING_MODE：计费模式BILL_TYPE：账单类型RESOURCE_TYPE：产品AZ_CODE：可用区BE_ID：运营实体（beid）PAYER_ACCOUNT_ID：交易账号RESOURCE_TAG：成本标签COST_UNIT：成本单元
    * value  过滤器值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'value' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  维度分组条件。CLOUD_SERVICE_TYPE：产品类型ASSOCIATED_ACCOUNT：关联账号REGION_CODE：区域RES_SPEC_CODE：规格编码USAGE_TYPE：使用量类型ENTERPRISE_PROJECT_ID：企业项目RESOURCE_ID：资源CHARGING_MODE：计费模式BILL_TYPE：账单类型RESOURCE_TYPE：产品AZ_CODE：可用区BE_ID：运营实体（beid）PAYER_ACCOUNT_ID：交易账号RESOURCE_TAG：成本标签COST_UNIT：成本单元
    * value  过滤器值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'value' => null
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
    * key  维度分组条件。CLOUD_SERVICE_TYPE：产品类型ASSOCIATED_ACCOUNT：关联账号REGION_CODE：区域RES_SPEC_CODE：规格编码USAGE_TYPE：使用量类型ENTERPRISE_PROJECT_ID：企业项目RESOURCE_ID：资源CHARGING_MODE：计费模式BILL_TYPE：账单类型RESOURCE_TYPE：产品AZ_CODE：可用区BE_ID：运营实体（beid）PAYER_ACCOUNT_ID：交易账号RESOURCE_TAG：成本标签COST_UNIT：成本单元
    * value  过滤器值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  维度分组条件。CLOUD_SERVICE_TYPE：产品类型ASSOCIATED_ACCOUNT：关联账号REGION_CODE：区域RES_SPEC_CODE：规格编码USAGE_TYPE：使用量类型ENTERPRISE_PROJECT_ID：企业项目RESOURCE_ID：资源CHARGING_MODE：计费模式BILL_TYPE：账单类型RESOURCE_TYPE：产品AZ_CODE：可用区BE_ID：运营实体（beid）PAYER_ACCOUNT_ID：交易账号RESOURCE_TAG：成本标签COST_UNIT：成本单元
    * value  过滤器值
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  维度分组条件。CLOUD_SERVICE_TYPE：产品类型ASSOCIATED_ACCOUNT：关联账号REGION_CODE：区域RES_SPEC_CODE：规格编码USAGE_TYPE：使用量类型ENTERPRISE_PROJECT_ID：企业项目RESOURCE_ID：资源CHARGING_MODE：计费模式BILL_TYPE：账单类型RESOURCE_TYPE：产品AZ_CODE：可用区BE_ID：运营实体（beid）PAYER_ACCOUNT_ID：交易账号RESOURCE_TAG：成本标签COST_UNIT：成本单元
    * value  过滤器值
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'value' => 'getValue'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
            if ((mb_strlen($this->container['key']) > 256)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['key']) < 1)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
    * Gets key
    *  维度分组条件。CLOUD_SERVICE_TYPE：产品类型ASSOCIATED_ACCOUNT：关联账号REGION_CODE：区域RES_SPEC_CODE：规格编码USAGE_TYPE：使用量类型ENTERPRISE_PROJECT_ID：企业项目RESOURCE_ID：资源CHARGING_MODE：计费模式BILL_TYPE：账单类型RESOURCE_TYPE：产品AZ_CODE：可用区BE_ID：运营实体（beid）PAYER_ACCOUNT_ID：交易账号RESOURCE_TAG：成本标签COST_UNIT：成本单元
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key 维度分组条件。CLOUD_SERVICE_TYPE：产品类型ASSOCIATED_ACCOUNT：关联账号REGION_CODE：区域RES_SPEC_CODE：规格编码USAGE_TYPE：使用量类型ENTERPRISE_PROJECT_ID：企业项目RESOURCE_ID：资源CHARGING_MODE：计费模式BILL_TYPE：账单类型RESOURCE_TYPE：产品AZ_CODE：可用区BE_ID：运营实体（beid）PAYER_ACCOUNT_ID：交易账号RESOURCE_TAG：成本标签COST_UNIT：成本单元
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets value
    *  过滤器值
    *
    * @return string[]
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string[] $value 过滤器值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

