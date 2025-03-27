<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventResponseExecuteOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventResponse_execute_options';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * device  本地盘设备名
    * wwn  本地盘挂载唯一标识
    * serialNumber  本地盘序列号
    * resizeTargetFlavorId  flavorID
    * migratePolicy  实例迁移策略
    * executor  执行器
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'device' => 'string',
            'wwn' => 'string',
            'serialNumber' => 'string',
            'resizeTargetFlavorId' => 'string',
            'migratePolicy' => 'string',
            'executor' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * device  本地盘设备名
    * wwn  本地盘挂载唯一标识
    * serialNumber  本地盘序列号
    * resizeTargetFlavorId  flavorID
    * migratePolicy  实例迁移策略
    * executor  执行器
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'device' => null,
        'wwn' => null,
        'serialNumber' => null,
        'resizeTargetFlavorId' => null,
        'migratePolicy' => null,
        'executor' => null
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
    * device  本地盘设备名
    * wwn  本地盘挂载唯一标识
    * serialNumber  本地盘序列号
    * resizeTargetFlavorId  flavorID
    * migratePolicy  实例迁移策略
    * executor  执行器
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'device' => 'device',
            'wwn' => 'wwn',
            'serialNumber' => 'serial_number',
            'resizeTargetFlavorId' => 'resize_target_flavor_id',
            'migratePolicy' => 'migrate_policy',
            'executor' => 'executor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * device  本地盘设备名
    * wwn  本地盘挂载唯一标识
    * serialNumber  本地盘序列号
    * resizeTargetFlavorId  flavorID
    * migratePolicy  实例迁移策略
    * executor  执行器
    *
    * @var string[]
    */
    protected static $setters = [
            'device' => 'setDevice',
            'wwn' => 'setWwn',
            'serialNumber' => 'setSerialNumber',
            'resizeTargetFlavorId' => 'setResizeTargetFlavorId',
            'migratePolicy' => 'setMigratePolicy',
            'executor' => 'setExecutor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * device  本地盘设备名
    * wwn  本地盘挂载唯一标识
    * serialNumber  本地盘序列号
    * resizeTargetFlavorId  flavorID
    * migratePolicy  实例迁移策略
    * executor  执行器
    *
    * @var string[]
    */
    protected static $getters = [
            'device' => 'getDevice',
            'wwn' => 'getWwn',
            'serialNumber' => 'getSerialNumber',
            'resizeTargetFlavorId' => 'getResizeTargetFlavorId',
            'migratePolicy' => 'getMigratePolicy',
            'executor' => 'getExecutor'
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
        $this->container['device'] = isset($data['device']) ? $data['device'] : null;
        $this->container['wwn'] = isset($data['wwn']) ? $data['wwn'] : null;
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $data['serialNumber'] : null;
        $this->container['resizeTargetFlavorId'] = isset($data['resizeTargetFlavorId']) ? $data['resizeTargetFlavorId'] : null;
        $this->container['migratePolicy'] = isset($data['migratePolicy']) ? $data['migratePolicy'] : null;
        $this->container['executor'] = isset($data['executor']) ? $data['executor'] : null;
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
    * Gets device
    *  本地盘设备名
    *
    * @return string|null
    */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
    * Sets device
    *
    * @param string|null $device 本地盘设备名
    *
    * @return $this
    */
    public function setDevice($device)
    {
        $this->container['device'] = $device;
        return $this;
    }

    /**
    * Gets wwn
    *  本地盘挂载唯一标识
    *
    * @return string|null
    */
    public function getWwn()
    {
        return $this->container['wwn'];
    }

    /**
    * Sets wwn
    *
    * @param string|null $wwn 本地盘挂载唯一标识
    *
    * @return $this
    */
    public function setWwn($wwn)
    {
        $this->container['wwn'] = $wwn;
        return $this;
    }

    /**
    * Gets serialNumber
    *  本地盘序列号
    *
    * @return string|null
    */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
    * Sets serialNumber
    *
    * @param string|null $serialNumber 本地盘序列号
    *
    * @return $this
    */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;
        return $this;
    }

    /**
    * Gets resizeTargetFlavorId
    *  flavorID
    *
    * @return string|null
    */
    public function getResizeTargetFlavorId()
    {
        return $this->container['resizeTargetFlavorId'];
    }

    /**
    * Sets resizeTargetFlavorId
    *
    * @param string|null $resizeTargetFlavorId flavorID
    *
    * @return $this
    */
    public function setResizeTargetFlavorId($resizeTargetFlavorId)
    {
        $this->container['resizeTargetFlavorId'] = $resizeTargetFlavorId;
        return $this;
    }

    /**
    * Gets migratePolicy
    *  实例迁移策略
    *
    * @return string|null
    */
    public function getMigratePolicy()
    {
        return $this->container['migratePolicy'];
    }

    /**
    * Sets migratePolicy
    *
    * @param string|null $migratePolicy 实例迁移策略
    *
    * @return $this
    */
    public function setMigratePolicy($migratePolicy)
    {
        $this->container['migratePolicy'] = $migratePolicy;
        return $this;
    }

    /**
    * Gets executor
    *  执行器
    *
    * @return string|null
    */
    public function getExecutor()
    {
        return $this->container['executor'];
    }

    /**
    * Sets executor
    *
    * @param string|null $executor 执行器
    *
    * @return $this
    */
    public function setExecutor($executor)
    {
        $this->container['executor'] = $executor;
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

