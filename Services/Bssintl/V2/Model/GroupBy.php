<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupBy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupBy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  tag：按照成本标签过滤cost_unit：按照成本单元过滤dimension：默认取值
    * key  如果type为tag，此处取值为tag的key。如果type为cost_unit，此处取值为cost_unit的key。如果type为dimension，此处取值如下：CLOUD_SERVICE_TYPE 产品类型RESOURCE_TYPE 产品ASSOCIATED_ACCOUNT 关联账号（企业主名下的所有企业子账号）REGION_CODE 区域AZ_CODE 可用区ENTERPRISE_PROJECT_ID 企业项目RES_SPEC_CODE 产品规格CHARGING_MODE 计费模式USAGE_TYPE 使用量类型BILL_TYPE 账单大类（billtype，前台需转换billdetailtype）BE_ID 运营实体（beid）PAYER_ACCOUNT_ID 支付账号RESOURCE_ID 资源
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'key' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  tag：按照成本标签过滤cost_unit：按照成本单元过滤dimension：默认取值
    * key  如果type为tag，此处取值为tag的key。如果type为cost_unit，此处取值为cost_unit的key。如果type为dimension，此处取值如下：CLOUD_SERVICE_TYPE 产品类型RESOURCE_TYPE 产品ASSOCIATED_ACCOUNT 关联账号（企业主名下的所有企业子账号）REGION_CODE 区域AZ_CODE 可用区ENTERPRISE_PROJECT_ID 企业项目RES_SPEC_CODE 产品规格CHARGING_MODE 计费模式USAGE_TYPE 使用量类型BILL_TYPE 账单大类（billtype，前台需转换billdetailtype）BE_ID 运营实体（beid）PAYER_ACCOUNT_ID 支付账号RESOURCE_ID 资源
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'key' => null
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
    * type  tag：按照成本标签过滤cost_unit：按照成本单元过滤dimension：默认取值
    * key  如果type为tag，此处取值为tag的key。如果type为cost_unit，此处取值为cost_unit的key。如果type为dimension，此处取值如下：CLOUD_SERVICE_TYPE 产品类型RESOURCE_TYPE 产品ASSOCIATED_ACCOUNT 关联账号（企业主名下的所有企业子账号）REGION_CODE 区域AZ_CODE 可用区ENTERPRISE_PROJECT_ID 企业项目RES_SPEC_CODE 产品规格CHARGING_MODE 计费模式USAGE_TYPE 使用量类型BILL_TYPE 账单大类（billtype，前台需转换billdetailtype）BE_ID 运营实体（beid）PAYER_ACCOUNT_ID 支付账号RESOURCE_ID 资源
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'key' => 'key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  tag：按照成本标签过滤cost_unit：按照成本单元过滤dimension：默认取值
    * key  如果type为tag，此处取值为tag的key。如果type为cost_unit，此处取值为cost_unit的key。如果type为dimension，此处取值如下：CLOUD_SERVICE_TYPE 产品类型RESOURCE_TYPE 产品ASSOCIATED_ACCOUNT 关联账号（企业主名下的所有企业子账号）REGION_CODE 区域AZ_CODE 可用区ENTERPRISE_PROJECT_ID 企业项目RES_SPEC_CODE 产品规格CHARGING_MODE 计费模式USAGE_TYPE 使用量类型BILL_TYPE 账单大类（billtype，前台需转换billdetailtype）BE_ID 运营实体（beid）PAYER_ACCOUNT_ID 支付账号RESOURCE_ID 资源
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'key' => 'setKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  tag：按照成本标签过滤cost_unit：按照成本单元过滤dimension：默认取值
    * key  如果type为tag，此处取值为tag的key。如果type为cost_unit，此处取值为cost_unit的key。如果type为dimension，此处取值如下：CLOUD_SERVICE_TYPE 产品类型RESOURCE_TYPE 产品ASSOCIATED_ACCOUNT 关联账号（企业主名下的所有企业子账号）REGION_CODE 区域AZ_CODE 可用区ENTERPRISE_PROJECT_ID 企业项目RES_SPEC_CODE 产品规格CHARGING_MODE 计费模式USAGE_TYPE 使用量类型BILL_TYPE 账单大类（billtype，前台需转换billdetailtype）BE_ID 运营实体（beid）PAYER_ACCOUNT_ID 支付账号RESOURCE_ID 资源
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'key' => 'getKey'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
            if ((mb_strlen($this->container['key']) > 64)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['key']) < 1)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 1.";
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
    * Gets type
    *  tag：按照成本标签过滤cost_unit：按照成本单元过滤dimension：默认取值
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type tag：按照成本标签过滤cost_unit：按照成本单元过滤dimension：默认取值
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets key
    *  如果type为tag，此处取值为tag的key。如果type为cost_unit，此处取值为cost_unit的key。如果type为dimension，此处取值如下：CLOUD_SERVICE_TYPE 产品类型RESOURCE_TYPE 产品ASSOCIATED_ACCOUNT 关联账号（企业主名下的所有企业子账号）REGION_CODE 区域AZ_CODE 可用区ENTERPRISE_PROJECT_ID 企业项目RES_SPEC_CODE 产品规格CHARGING_MODE 计费模式USAGE_TYPE 使用量类型BILL_TYPE 账单大类（billtype，前台需转换billdetailtype）BE_ID 运营实体（beid）PAYER_ACCOUNT_ID 支付账号RESOURCE_ID 资源
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
    * @param string $key 如果type为tag，此处取值为tag的key。如果type为cost_unit，此处取值为cost_unit的key。如果type为dimension，此处取值如下：CLOUD_SERVICE_TYPE 产品类型RESOURCE_TYPE 产品ASSOCIATED_ACCOUNT 关联账号（企业主名下的所有企业子账号）REGION_CODE 区域AZ_CODE 可用区ENTERPRISE_PROJECT_ID 企业项目RES_SPEC_CODE 产品规格CHARGING_MODE 计费模式USAGE_TYPE 使用量类型BILL_TYPE 账单大类（billtype，前台需转换billdetailtype）BE_ID 运营实体（beid）PAYER_ACCOUNT_ID 支付账号RESOURCE_ID 资源
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
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

