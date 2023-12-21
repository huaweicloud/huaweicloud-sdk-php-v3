<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CbsGetSpecInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CbsGetSpecInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceSpecCode  云堡垒机规格名称。
    * ecsSystemDataSize  云堡垒机系统盘磁盘大小，单位GB。
    * cpu  云堡垒机CPU核心数。
    * ram  云堡垒机内存大小，单位GB。
    * asset  云堡垒机资产数量。
    * connection  云堡垒机最大连接数。
    * type  云堡垒机规格类型。 - basic：标准版 - enhance：专业版
    * dataDiskSize  云堡垒机数据盘大小，单位TB。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceSpecCode' => 'string',
            'ecsSystemDataSize' => 'int',
            'cpu' => 'int',
            'ram' => 'int',
            'asset' => 'int',
            'connection' => 'int',
            'type' => 'string',
            'dataDiskSize' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceSpecCode  云堡垒机规格名称。
    * ecsSystemDataSize  云堡垒机系统盘磁盘大小，单位GB。
    * cpu  云堡垒机CPU核心数。
    * ram  云堡垒机内存大小，单位GB。
    * asset  云堡垒机资产数量。
    * connection  云堡垒机最大连接数。
    * type  云堡垒机规格类型。 - basic：标准版 - enhance：专业版
    * dataDiskSize  云堡垒机数据盘大小，单位TB。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceSpecCode' => null,
        'ecsSystemDataSize' => null,
        'cpu' => null,
        'ram' => null,
        'asset' => null,
        'connection' => null,
        'type' => null,
        'dataDiskSize' => null
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
    * resourceSpecCode  云堡垒机规格名称。
    * ecsSystemDataSize  云堡垒机系统盘磁盘大小，单位GB。
    * cpu  云堡垒机CPU核心数。
    * ram  云堡垒机内存大小，单位GB。
    * asset  云堡垒机资产数量。
    * connection  云堡垒机最大连接数。
    * type  云堡垒机规格类型。 - basic：标准版 - enhance：专业版
    * dataDiskSize  云堡垒机数据盘大小，单位TB。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceSpecCode' => 'resource_spec_code',
            'ecsSystemDataSize' => 'ecs_system_data_size',
            'cpu' => 'cpu',
            'ram' => 'ram',
            'asset' => 'asset',
            'connection' => 'connection',
            'type' => 'type',
            'dataDiskSize' => 'data_disk_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceSpecCode  云堡垒机规格名称。
    * ecsSystemDataSize  云堡垒机系统盘磁盘大小，单位GB。
    * cpu  云堡垒机CPU核心数。
    * ram  云堡垒机内存大小，单位GB。
    * asset  云堡垒机资产数量。
    * connection  云堡垒机最大连接数。
    * type  云堡垒机规格类型。 - basic：标准版 - enhance：专业版
    * dataDiskSize  云堡垒机数据盘大小，单位TB。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceSpecCode' => 'setResourceSpecCode',
            'ecsSystemDataSize' => 'setEcsSystemDataSize',
            'cpu' => 'setCpu',
            'ram' => 'setRam',
            'asset' => 'setAsset',
            'connection' => 'setConnection',
            'type' => 'setType',
            'dataDiskSize' => 'setDataDiskSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceSpecCode  云堡垒机规格名称。
    * ecsSystemDataSize  云堡垒机系统盘磁盘大小，单位GB。
    * cpu  云堡垒机CPU核心数。
    * ram  云堡垒机内存大小，单位GB。
    * asset  云堡垒机资产数量。
    * connection  云堡垒机最大连接数。
    * type  云堡垒机规格类型。 - basic：标准版 - enhance：专业版
    * dataDiskSize  云堡垒机数据盘大小，单位TB。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceSpecCode' => 'getResourceSpecCode',
            'ecsSystemDataSize' => 'getEcsSystemDataSize',
            'cpu' => 'getCpu',
            'ram' => 'getRam',
            'asset' => 'getAsset',
            'connection' => 'getConnection',
            'type' => 'getType',
            'dataDiskSize' => 'getDataDiskSize'
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
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['ecsSystemDataSize'] = isset($data['ecsSystemDataSize']) ? $data['ecsSystemDataSize'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['asset'] = isset($data['asset']) ? $data['asset'] : null;
        $this->container['connection'] = isset($data['connection']) ? $data['connection'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['dataDiskSize'] = isset($data['dataDiskSize']) ? $data['dataDiskSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceSpecCode'] === null) {
            $invalidProperties[] = "'resourceSpecCode' can't be null";
        }
            if ((mb_strlen($this->container['resourceSpecCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['resourceSpecCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['ecsSystemDataSize'] === null) {
            $invalidProperties[] = "'ecsSystemDataSize' can't be null";
        }
            if (($this->container['ecsSystemDataSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'ecsSystemDataSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['ecsSystemDataSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'ecsSystemDataSize', must be bigger than or equal to 0.";
            }
        if ($this->container['cpu'] === null) {
            $invalidProperties[] = "'cpu' can't be null";
        }
            if (($this->container['cpu'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'cpu', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['cpu'] < 0)) {
                $invalidProperties[] = "invalid value for 'cpu', must be bigger than or equal to 0.";
            }
        if ($this->container['ram'] === null) {
            $invalidProperties[] = "'ram' can't be null";
        }
            if (($this->container['ram'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'ram', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['ram'] < 0)) {
                $invalidProperties[] = "invalid value for 'ram', must be bigger than or equal to 0.";
            }
        if ($this->container['asset'] === null) {
            $invalidProperties[] = "'asset' can't be null";
        }
            if (($this->container['asset'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'asset', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['asset'] < 0)) {
                $invalidProperties[] = "invalid value for 'asset', must be bigger than or equal to 0.";
            }
        if ($this->container['connection'] === null) {
            $invalidProperties[] = "'connection' can't be null";
        }
            if (($this->container['connection'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'connection', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['connection'] < 0)) {
                $invalidProperties[] = "invalid value for 'connection', must be bigger than or equal to 0.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['dataDiskSize'] === null) {
            $invalidProperties[] = "'dataDiskSize' can't be null";
        }
            if (($this->container['dataDiskSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'dataDiskSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['dataDiskSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'dataDiskSize', must be bigger than or equal to 0.";
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
    * Gets resourceSpecCode
    *  云堡垒机规格名称。
    *
    * @return string
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string $resourceSpecCode 云堡垒机规格名称。
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets ecsSystemDataSize
    *  云堡垒机系统盘磁盘大小，单位GB。
    *
    * @return int
    */
    public function getEcsSystemDataSize()
    {
        return $this->container['ecsSystemDataSize'];
    }

    /**
    * Sets ecsSystemDataSize
    *
    * @param int $ecsSystemDataSize 云堡垒机系统盘磁盘大小，单位GB。
    *
    * @return $this
    */
    public function setEcsSystemDataSize($ecsSystemDataSize)
    {
        $this->container['ecsSystemDataSize'] = $ecsSystemDataSize;
        return $this;
    }

    /**
    * Gets cpu
    *  云堡垒机CPU核心数。
    *
    * @return int
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param int $cpu 云堡垒机CPU核心数。
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets ram
    *  云堡垒机内存大小，单位GB。
    *
    * @return int
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param int $ram 云堡垒机内存大小，单位GB。
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets asset
    *  云堡垒机资产数量。
    *
    * @return int
    */
    public function getAsset()
    {
        return $this->container['asset'];
    }

    /**
    * Sets asset
    *
    * @param int $asset 云堡垒机资产数量。
    *
    * @return $this
    */
    public function setAsset($asset)
    {
        $this->container['asset'] = $asset;
        return $this;
    }

    /**
    * Gets connection
    *  云堡垒机最大连接数。
    *
    * @return int
    */
    public function getConnection()
    {
        return $this->container['connection'];
    }

    /**
    * Sets connection
    *
    * @param int $connection 云堡垒机最大连接数。
    *
    * @return $this
    */
    public function setConnection($connection)
    {
        $this->container['connection'] = $connection;
        return $this;
    }

    /**
    * Gets type
    *  云堡垒机规格类型。 - basic：标准版 - enhance：专业版
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
    * @param string $type 云堡垒机规格类型。 - basic：标准版 - enhance：专业版
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets dataDiskSize
    *  云堡垒机数据盘大小，单位TB。
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
    * @param float $dataDiskSize 云堡垒机数据盘大小，单位TB。
    *
    * @return $this
    */
    public function setDataDiskSize($dataDiskSize)
    {
        $this->container['dataDiskSize'] = $dataDiskSize;
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

