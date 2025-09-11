<?php

namespace HuaweiCloud\SDK\IoTDM\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceFlavor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceFlavor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceType  **参数说明**：创建的实例类型。实例类型说明参见[[产品规格说明](https://support.huaweicloud.com/productdesc-iothub/iot_04_0014.html)](tag:hws)[[产品规格说明](https://support.huaweicloud.com/intl/zh-cn/productdesc-iothub/iot_04_0014.html)](tag:hws_hk)。 **取值范围**： - standard：标准版实例 - enterprise：企业版实例
    * type  **参数说明**：设备接入实例的规格名称。详情请参见[[产品规格说明](https://support.huaweicloud.com/productdesc-iothub/iot_04_0014.html)](tag:hws)[[产品规格说明](https://support.huaweicloud.com/intl/zh-cn/productdesc-iothub/iot_04_0014.html)](tag:hws_hk)中的规格编码。
    * status  **参数说明**：实例规格的在售状态。 **取值范围**： - normal：在售 - sellout：已售罄
    * chargeModes  **参数说明**：实例规格支持的付费方式列表。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceType' => 'string',
            'type' => 'string',
            'status' => 'string',
            'chargeModes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceType  **参数说明**：创建的实例类型。实例类型说明参见[[产品规格说明](https://support.huaweicloud.com/productdesc-iothub/iot_04_0014.html)](tag:hws)[[产品规格说明](https://support.huaweicloud.com/intl/zh-cn/productdesc-iothub/iot_04_0014.html)](tag:hws_hk)。 **取值范围**： - standard：标准版实例 - enterprise：企业版实例
    * type  **参数说明**：设备接入实例的规格名称。详情请参见[[产品规格说明](https://support.huaweicloud.com/productdesc-iothub/iot_04_0014.html)](tag:hws)[[产品规格说明](https://support.huaweicloud.com/intl/zh-cn/productdesc-iothub/iot_04_0014.html)](tag:hws_hk)中的规格编码。
    * status  **参数说明**：实例规格的在售状态。 **取值范围**： - normal：在售 - sellout：已售罄
    * chargeModes  **参数说明**：实例规格支持的付费方式列表。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceType' => null,
        'type' => null,
        'status' => null,
        'chargeModes' => null
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
    * instanceType  **参数说明**：创建的实例类型。实例类型说明参见[[产品规格说明](https://support.huaweicloud.com/productdesc-iothub/iot_04_0014.html)](tag:hws)[[产品规格说明](https://support.huaweicloud.com/intl/zh-cn/productdesc-iothub/iot_04_0014.html)](tag:hws_hk)。 **取值范围**： - standard：标准版实例 - enterprise：企业版实例
    * type  **参数说明**：设备接入实例的规格名称。详情请参见[[产品规格说明](https://support.huaweicloud.com/productdesc-iothub/iot_04_0014.html)](tag:hws)[[产品规格说明](https://support.huaweicloud.com/intl/zh-cn/productdesc-iothub/iot_04_0014.html)](tag:hws_hk)中的规格编码。
    * status  **参数说明**：实例规格的在售状态。 **取值范围**： - normal：在售 - sellout：已售罄
    * chargeModes  **参数说明**：实例规格支持的付费方式列表。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceType' => 'instance_type',
            'type' => 'type',
            'status' => 'status',
            'chargeModes' => 'charge_modes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceType  **参数说明**：创建的实例类型。实例类型说明参见[[产品规格说明](https://support.huaweicloud.com/productdesc-iothub/iot_04_0014.html)](tag:hws)[[产品规格说明](https://support.huaweicloud.com/intl/zh-cn/productdesc-iothub/iot_04_0014.html)](tag:hws_hk)。 **取值范围**： - standard：标准版实例 - enterprise：企业版实例
    * type  **参数说明**：设备接入实例的规格名称。详情请参见[[产品规格说明](https://support.huaweicloud.com/productdesc-iothub/iot_04_0014.html)](tag:hws)[[产品规格说明](https://support.huaweicloud.com/intl/zh-cn/productdesc-iothub/iot_04_0014.html)](tag:hws_hk)中的规格编码。
    * status  **参数说明**：实例规格的在售状态。 **取值范围**： - normal：在售 - sellout：已售罄
    * chargeModes  **参数说明**：实例规格支持的付费方式列表。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceType' => 'setInstanceType',
            'type' => 'setType',
            'status' => 'setStatus',
            'chargeModes' => 'setChargeModes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceType  **参数说明**：创建的实例类型。实例类型说明参见[[产品规格说明](https://support.huaweicloud.com/productdesc-iothub/iot_04_0014.html)](tag:hws)[[产品规格说明](https://support.huaweicloud.com/intl/zh-cn/productdesc-iothub/iot_04_0014.html)](tag:hws_hk)。 **取值范围**： - standard：标准版实例 - enterprise：企业版实例
    * type  **参数说明**：设备接入实例的规格名称。详情请参见[[产品规格说明](https://support.huaweicloud.com/productdesc-iothub/iot_04_0014.html)](tag:hws)[[产品规格说明](https://support.huaweicloud.com/intl/zh-cn/productdesc-iothub/iot_04_0014.html)](tag:hws_hk)中的规格编码。
    * status  **参数说明**：实例规格的在售状态。 **取值范围**： - normal：在售 - sellout：已售罄
    * chargeModes  **参数说明**：实例规格支持的付费方式列表。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceType' => 'getInstanceType',
            'type' => 'getType',
            'status' => 'getStatus',
            'chargeModes' => 'getChargeModes'
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
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['chargeModes'] = isset($data['chargeModes']) ? $data['chargeModes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceType'] === null) {
            $invalidProperties[] = "'instanceType' can't be null";
        }
            if (!preg_match("/(standard|enterprise|valueaddedservice)/", $this->container['instanceType'])) {
                $invalidProperties[] = "invalid value for 'instanceType', must be conform to the pattern /(standard|enterprise|valueaddedservice)/.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if (!preg_match("/^[A-Za-z0-9-.]{1,64}$/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^[A-Za-z0-9-.]{1,64}$/.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['chargeModes'] === null) {
            $invalidProperties[] = "'chargeModes' can't be null";
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
    * Gets instanceType
    *  **参数说明**：创建的实例类型。实例类型说明参见[[产品规格说明](https://support.huaweicloud.com/productdesc-iothub/iot_04_0014.html)](tag:hws)[[产品规格说明](https://support.huaweicloud.com/intl/zh-cn/productdesc-iothub/iot_04_0014.html)](tag:hws_hk)。 **取值范围**： - standard：标准版实例 - enterprise：企业版实例
    *
    * @return string
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string $instanceType **参数说明**：创建的实例类型。实例类型说明参见[[产品规格说明](https://support.huaweicloud.com/productdesc-iothub/iot_04_0014.html)](tag:hws)[[产品规格说明](https://support.huaweicloud.com/intl/zh-cn/productdesc-iothub/iot_04_0014.html)](tag:hws_hk)。 **取值范围**： - standard：标准版实例 - enterprise：企业版实例
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets type
    *  **参数说明**：设备接入实例的规格名称。详情请参见[[产品规格说明](https://support.huaweicloud.com/productdesc-iothub/iot_04_0014.html)](tag:hws)[[产品规格说明](https://support.huaweicloud.com/intl/zh-cn/productdesc-iothub/iot_04_0014.html)](tag:hws_hk)中的规格编码。
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
    * @param string $type **参数说明**：设备接入实例的规格名称。详情请参见[[产品规格说明](https://support.huaweicloud.com/productdesc-iothub/iot_04_0014.html)](tag:hws)[[产品规格说明](https://support.huaweicloud.com/intl/zh-cn/productdesc-iothub/iot_04_0014.html)](tag:hws_hk)中的规格编码。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  **参数说明**：实例规格的在售状态。 **取值范围**： - normal：在售 - sellout：已售罄
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status **参数说明**：实例规格的在售状态。 **取值范围**： - normal：在售 - sellout：已售罄
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets chargeModes
    *  **参数说明**：实例规格支持的付费方式列表。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    *
    * @return string[]
    */
    public function getChargeModes()
    {
        return $this->container['chargeModes'];
    }

    /**
    * Sets chargeModes
    *
    * @param string[] $chargeModes **参数说明**：实例规格支持的付费方式列表。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    *
    * @return $this
    */
    public function setChargeModes($chargeModes)
    {
        $this->container['chargeModes'] = $chargeModes;
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

