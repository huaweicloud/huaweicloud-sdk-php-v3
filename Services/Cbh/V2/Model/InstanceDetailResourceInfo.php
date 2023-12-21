<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceDetailResourceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceDetail_resource_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * specification  云堡垒机实例规格。
    * orderId  订单id。
    * resourceId  云堡垒机实例的资源id，UUID格式显示。
    * dataDiskSize  云堡垒机实例数据盘大小，单位TB。
    * diskResourceId  云堡垒机实例数据盘资源ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'specification' => 'string',
            'orderId' => 'string',
            'resourceId' => 'string',
            'dataDiskSize' => 'float',
            'diskResourceId' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * specification  云堡垒机实例规格。
    * orderId  订单id。
    * resourceId  云堡垒机实例的资源id，UUID格式显示。
    * dataDiskSize  云堡垒机实例数据盘大小，单位TB。
    * diskResourceId  云堡垒机实例数据盘资源ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'specification' => null,
        'orderId' => null,
        'resourceId' => null,
        'dataDiskSize' => null,
        'diskResourceId' => null
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
    * specification  云堡垒机实例规格。
    * orderId  订单id。
    * resourceId  云堡垒机实例的资源id，UUID格式显示。
    * dataDiskSize  云堡垒机实例数据盘大小，单位TB。
    * diskResourceId  云堡垒机实例数据盘资源ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'specification' => 'specification',
            'orderId' => 'order_id',
            'resourceId' => 'resource_id',
            'dataDiskSize' => 'data_disk_size',
            'diskResourceId' => 'disk_resource_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * specification  云堡垒机实例规格。
    * orderId  订单id。
    * resourceId  云堡垒机实例的资源id，UUID格式显示。
    * dataDiskSize  云堡垒机实例数据盘大小，单位TB。
    * diskResourceId  云堡垒机实例数据盘资源ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'specification' => 'setSpecification',
            'orderId' => 'setOrderId',
            'resourceId' => 'setResourceId',
            'dataDiskSize' => 'setDataDiskSize',
            'diskResourceId' => 'setDiskResourceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * specification  云堡垒机实例规格。
    * orderId  订单id。
    * resourceId  云堡垒机实例的资源id，UUID格式显示。
    * dataDiskSize  云堡垒机实例数据盘大小，单位TB。
    * diskResourceId  云堡垒机实例数据盘资源ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'specification' => 'getSpecification',
            'orderId' => 'getOrderId',
            'resourceId' => 'getResourceId',
            'dataDiskSize' => 'getDataDiskSize',
            'diskResourceId' => 'getDiskResourceId'
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
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['dataDiskSize'] = isset($data['dataDiskSize']) ? $data['dataDiskSize'] : null;
        $this->container['diskResourceId'] = isset($data['diskResourceId']) ? $data['diskResourceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['specification'] === null) {
            $invalidProperties[] = "'specification' can't be null";
        }
            if ((mb_strlen($this->container['specification']) > 36)) {
                $invalidProperties[] = "invalid value for 'specification', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['specification']) < 0)) {
                $invalidProperties[] = "invalid value for 'specification', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['orderId'] === null) {
            $invalidProperties[] = "'orderId' can't be null";
        }
            if ((mb_strlen($this->container['orderId']) > 64)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['orderId']) < 0)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if ((mb_strlen($this->container['resourceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['dataDiskSize'] === null) {
            $invalidProperties[] = "'dataDiskSize' can't be null";
        }
            if (($this->container['dataDiskSize'] > 3E+2)) {
                $invalidProperties[] = "invalid value for 'dataDiskSize', must be smaller than or equal to 3E+2.";
            }
            if (($this->container['dataDiskSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'dataDiskSize', must be bigger than or equal to 0.";
            }
        if ($this->container['diskResourceId'] === null) {
            $invalidProperties[] = "'diskResourceId' can't be null";
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
    * Gets specification
    *  云堡垒机实例规格。
    *
    * @return string
    */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
    * Sets specification
    *
    * @param string $specification 云堡垒机实例规格。
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
        return $this;
    }

    /**
    * Gets orderId
    *  订单id。
    *
    * @return string
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string $orderId 订单id。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets resourceId
    *  云堡垒机实例的资源id，UUID格式显示。
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 云堡垒机实例的资源id，UUID格式显示。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets dataDiskSize
    *  云堡垒机实例数据盘大小，单位TB。
    *
    * @return float
    */
    public function getDataDiskSize()
    {
        return $this->container['dataDiskSize'];
    }

    /**
    * Sets dataDiskSize
    *
    * @param float $dataDiskSize 云堡垒机实例数据盘大小，单位TB。
    *
    * @return $this
    */
    public function setDataDiskSize($dataDiskSize)
    {
        $this->container['dataDiskSize'] = $dataDiskSize;
        return $this;
    }

    /**
    * Gets diskResourceId
    *  云堡垒机实例数据盘资源ID。
    *
    * @return string[]
    */
    public function getDiskResourceId()
    {
        return $this->container['diskResourceId'];
    }

    /**
    * Sets diskResourceId
    *
    * @param string[] $diskResourceId 云堡垒机实例数据盘资源ID。
    *
    * @return $this
    */
    public function setDiskResourceId($diskResourceId)
    {
        $this->container['diskResourceId'] = $diskResourceId;
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

