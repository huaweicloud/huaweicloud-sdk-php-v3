<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeviceDataCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeviceDataCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deviceId  设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获得。当rule_type为DEVICE_LINKAGE时，该参数值和product_id不能同时为空。如果该参数和product_id同时存在时，以该参数值对应的设备进行条件过滤。
    * productId  设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。当rule_type为DEVICE_LINKAGE时，该参数值和device_id不能同时为空。如果该参数和device_id同时存在时，以device_id参数值对应的设备进行条件过滤。
    * filters  数据过滤条件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deviceId' => 'string',
            'productId' => 'string',
            'filters' => '\HuaweiCloud\SDK\IoTDA\V5\Model\PropertyFilter[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deviceId  设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获得。当rule_type为DEVICE_LINKAGE时，该参数值和product_id不能同时为空。如果该参数和product_id同时存在时，以该参数值对应的设备进行条件过滤。
    * productId  设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。当rule_type为DEVICE_LINKAGE时，该参数值和device_id不能同时为空。如果该参数和device_id同时存在时，以device_id参数值对应的设备进行条件过滤。
    * filters  数据过滤条件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deviceId' => null,
        'productId' => null,
        'filters' => null
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
    * deviceId  设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获得。当rule_type为DEVICE_LINKAGE时，该参数值和product_id不能同时为空。如果该参数和product_id同时存在时，以该参数值对应的设备进行条件过滤。
    * productId  设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。当rule_type为DEVICE_LINKAGE时，该参数值和device_id不能同时为空。如果该参数和device_id同时存在时，以device_id参数值对应的设备进行条件过滤。
    * filters  数据过滤条件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deviceId' => 'device_id',
            'productId' => 'product_id',
            'filters' => 'filters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deviceId  设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获得。当rule_type为DEVICE_LINKAGE时，该参数值和product_id不能同时为空。如果该参数和product_id同时存在时，以该参数值对应的设备进行条件过滤。
    * productId  设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。当rule_type为DEVICE_LINKAGE时，该参数值和device_id不能同时为空。如果该参数和device_id同时存在时，以device_id参数值对应的设备进行条件过滤。
    * filters  数据过滤条件
    *
    * @var string[]
    */
    protected static $setters = [
            'deviceId' => 'setDeviceId',
            'productId' => 'setProductId',
            'filters' => 'setFilters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deviceId  设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获得。当rule_type为DEVICE_LINKAGE时，该参数值和product_id不能同时为空。如果该参数和product_id同时存在时，以该参数值对应的设备进行条件过滤。
    * productId  设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。当rule_type为DEVICE_LINKAGE时，该参数值和device_id不能同时为空。如果该参数和device_id同时存在时，以device_id参数值对应的设备进行条件过滤。
    * filters  数据过滤条件
    *
    * @var string[]
    */
    protected static $getters = [
            'deviceId' => 'getDeviceId',
            'productId' => 'getProductId',
            'filters' => 'getFilters'
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
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['deviceId']) && !preg_match("/^[a-zA-Z0-9_-]{1,128}$/", $this->container['deviceId'])) {
                $invalidProperties[] = "invalid value for 'deviceId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,128}$/.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) > 128)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be smaller than or equal to 128.";
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
    * Gets deviceId
    *  设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获得。当rule_type为DEVICE_LINKAGE时，该参数值和product_id不能同时为空。如果该参数和product_id同时存在时，以该参数值对应的设备进行条件过滤。
    *
    * @return string|null
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string|null $deviceId 设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获得。当rule_type为DEVICE_LINKAGE时，该参数值和product_id不能同时为空。如果该参数和product_id同时存在时，以该参数值对应的设备进行条件过滤。
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets productId
    *  设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。当rule_type为DEVICE_LINKAGE时，该参数值和device_id不能同时为空。如果该参数和device_id同时存在时，以device_id参数值对应的设备进行条件过滤。
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。当rule_type为DEVICE_LINKAGE时，该参数值和device_id不能同时为空。如果该参数和device_id同时存在时，以device_id参数值对应的设备进行条件过滤。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets filters
    *  数据过滤条件
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\PropertyFilter[]|null
    */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
    * Sets filters
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\PropertyFilter[]|null $filters 数据过滤条件
    *
    * @return $this
    */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;
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

