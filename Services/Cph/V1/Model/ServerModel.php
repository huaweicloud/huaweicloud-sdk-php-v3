<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverModelName  云手机服务器的规格名称，不超过64字节。
    * serverType  云手机服务器的型号，如Hi1616。不超过32字节。
    * cpu  云手机服务器的CPU核数。
    * memory  云手机服务器的内存大小，单位G。
    * extendSpec  extendSpec
    * diskMaxNum  云手机服务器最大挂载磁盘数量。值为0时表示该机型磁盘为本地盘。
    * productType  产品类型。 - 0：云手机 - 1：云手游
    * freeSize  服务器磁盘的免费配额，单位G。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverModelName' => 'string',
            'serverType' => 'string',
            'cpu' => 'int',
            'memory' => 'int',
            'extendSpec' => '\HuaweiCloud\SDK\Cph\V1\Model\ServerModelExtendSpec',
            'diskMaxNum' => 'int',
            'productType' => 'int',
            'freeSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverModelName  云手机服务器的规格名称，不超过64字节。
    * serverType  云手机服务器的型号，如Hi1616。不超过32字节。
    * cpu  云手机服务器的CPU核数。
    * memory  云手机服务器的内存大小，单位G。
    * extendSpec  extendSpec
    * diskMaxNum  云手机服务器最大挂载磁盘数量。值为0时表示该机型磁盘为本地盘。
    * productType  产品类型。 - 0：云手机 - 1：云手游
    * freeSize  服务器磁盘的免费配额，单位G。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverModelName' => null,
        'serverType' => null,
        'cpu' => 'int32',
        'memory' => 'int32',
        'extendSpec' => null,
        'diskMaxNum' => 'int32',
        'productType' => 'int32',
        'freeSize' => 'int32'
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
    * serverModelName  云手机服务器的规格名称，不超过64字节。
    * serverType  云手机服务器的型号，如Hi1616。不超过32字节。
    * cpu  云手机服务器的CPU核数。
    * memory  云手机服务器的内存大小，单位G。
    * extendSpec  extendSpec
    * diskMaxNum  云手机服务器最大挂载磁盘数量。值为0时表示该机型磁盘为本地盘。
    * productType  产品类型。 - 0：云手机 - 1：云手游
    * freeSize  服务器磁盘的免费配额，单位G。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverModelName' => 'server_model_name',
            'serverType' => 'server_type',
            'cpu' => 'cpu',
            'memory' => 'memory',
            'extendSpec' => 'extend_spec',
            'diskMaxNum' => 'disk_max_num',
            'productType' => 'product_type',
            'freeSize' => 'free_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverModelName  云手机服务器的规格名称，不超过64字节。
    * serverType  云手机服务器的型号，如Hi1616。不超过32字节。
    * cpu  云手机服务器的CPU核数。
    * memory  云手机服务器的内存大小，单位G。
    * extendSpec  extendSpec
    * diskMaxNum  云手机服务器最大挂载磁盘数量。值为0时表示该机型磁盘为本地盘。
    * productType  产品类型。 - 0：云手机 - 1：云手游
    * freeSize  服务器磁盘的免费配额，单位G。
    *
    * @var string[]
    */
    protected static $setters = [
            'serverModelName' => 'setServerModelName',
            'serverType' => 'setServerType',
            'cpu' => 'setCpu',
            'memory' => 'setMemory',
            'extendSpec' => 'setExtendSpec',
            'diskMaxNum' => 'setDiskMaxNum',
            'productType' => 'setProductType',
            'freeSize' => 'setFreeSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverModelName  云手机服务器的规格名称，不超过64字节。
    * serverType  云手机服务器的型号，如Hi1616。不超过32字节。
    * cpu  云手机服务器的CPU核数。
    * memory  云手机服务器的内存大小，单位G。
    * extendSpec  extendSpec
    * diskMaxNum  云手机服务器最大挂载磁盘数量。值为0时表示该机型磁盘为本地盘。
    * productType  产品类型。 - 0：云手机 - 1：云手游
    * freeSize  服务器磁盘的免费配额，单位G。
    *
    * @var string[]
    */
    protected static $getters = [
            'serverModelName' => 'getServerModelName',
            'serverType' => 'getServerType',
            'cpu' => 'getCpu',
            'memory' => 'getMemory',
            'extendSpec' => 'getExtendSpec',
            'diskMaxNum' => 'getDiskMaxNum',
            'productType' => 'getProductType',
            'freeSize' => 'getFreeSize'
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
        $this->container['serverModelName'] = isset($data['serverModelName']) ? $data['serverModelName'] : null;
        $this->container['serverType'] = isset($data['serverType']) ? $data['serverType'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['extendSpec'] = isset($data['extendSpec']) ? $data['extendSpec'] : null;
        $this->container['diskMaxNum'] = isset($data['diskMaxNum']) ? $data['diskMaxNum'] : null;
        $this->container['productType'] = isset($data['productType']) ? $data['productType'] : null;
        $this->container['freeSize'] = isset($data['freeSize']) ? $data['freeSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['serverModelName']) && (mb_strlen($this->container['serverModelName']) > 64)) {
                $invalidProperties[] = "invalid value for 'serverModelName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['serverModelName']) && (mb_strlen($this->container['serverModelName']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverModelName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serverType']) && (mb_strlen($this->container['serverType']) > 32)) {
                $invalidProperties[] = "invalid value for 'serverType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['serverType']) && (mb_strlen($this->container['serverType']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cpu']) && ($this->container['cpu'] > 8096)) {
                $invalidProperties[] = "invalid value for 'cpu', must be smaller than or equal to 8096.";
            }
            if (!is_null($this->container['cpu']) && ($this->container['cpu'] < 0)) {
                $invalidProperties[] = "invalid value for 'cpu', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memory']) && ($this->container['memory'] > 8096)) {
                $invalidProperties[] = "invalid value for 'memory', must be smaller than or equal to 8096.";
            }
            if (!is_null($this->container['memory']) && ($this->container['memory'] < 0)) {
                $invalidProperties[] = "invalid value for 'memory', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['diskMaxNum']) && ($this->container['diskMaxNum'] > 500)) {
                $invalidProperties[] = "invalid value for 'diskMaxNum', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['diskMaxNum']) && ($this->container['diskMaxNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'diskMaxNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['productType']) && ($this->container['productType'] > 128)) {
                $invalidProperties[] = "invalid value for 'productType', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['productType']) && ($this->container['productType'] < 0)) {
                $invalidProperties[] = "invalid value for 'productType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['freeSize']) && ($this->container['freeSize'] > 100000)) {
                $invalidProperties[] = "invalid value for 'freeSize', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['freeSize']) && ($this->container['freeSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'freeSize', must be bigger than or equal to 0.";
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
    * Gets serverModelName
    *  云手机服务器的规格名称，不超过64字节。
    *
    * @return string|null
    */
    public function getServerModelName()
    {
        return $this->container['serverModelName'];
    }

    /**
    * Sets serverModelName
    *
    * @param string|null $serverModelName 云手机服务器的规格名称，不超过64字节。
    *
    * @return $this
    */
    public function setServerModelName($serverModelName)
    {
        $this->container['serverModelName'] = $serverModelName;
        return $this;
    }

    /**
    * Gets serverType
    *  云手机服务器的型号，如Hi1616。不超过32字节。
    *
    * @return string|null
    */
    public function getServerType()
    {
        return $this->container['serverType'];
    }

    /**
    * Sets serverType
    *
    * @param string|null $serverType 云手机服务器的型号，如Hi1616。不超过32字节。
    *
    * @return $this
    */
    public function setServerType($serverType)
    {
        $this->container['serverType'] = $serverType;
        return $this;
    }

    /**
    * Gets cpu
    *  云手机服务器的CPU核数。
    *
    * @return int|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param int|null $cpu 云手机服务器的CPU核数。
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets memory
    *  云手机服务器的内存大小，单位G。
    *
    * @return int|null
    */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
    * Sets memory
    *
    * @param int|null $memory 云手机服务器的内存大小，单位G。
    *
    * @return $this
    */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;
        return $this;
    }

    /**
    * Gets extendSpec
    *  extendSpec
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\ServerModelExtendSpec|null
    */
    public function getExtendSpec()
    {
        return $this->container['extendSpec'];
    }

    /**
    * Sets extendSpec
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\ServerModelExtendSpec|null $extendSpec extendSpec
    *
    * @return $this
    */
    public function setExtendSpec($extendSpec)
    {
        $this->container['extendSpec'] = $extendSpec;
        return $this;
    }

    /**
    * Gets diskMaxNum
    *  云手机服务器最大挂载磁盘数量。值为0时表示该机型磁盘为本地盘。
    *
    * @return int|null
    */
    public function getDiskMaxNum()
    {
        return $this->container['diskMaxNum'];
    }

    /**
    * Sets diskMaxNum
    *
    * @param int|null $diskMaxNum 云手机服务器最大挂载磁盘数量。值为0时表示该机型磁盘为本地盘。
    *
    * @return $this
    */
    public function setDiskMaxNum($diskMaxNum)
    {
        $this->container['diskMaxNum'] = $diskMaxNum;
        return $this;
    }

    /**
    * Gets productType
    *  产品类型。 - 0：云手机 - 1：云手游
    *
    * @return int|null
    */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
    * Sets productType
    *
    * @param int|null $productType 产品类型。 - 0：云手机 - 1：云手游
    *
    * @return $this
    */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;
        return $this;
    }

    /**
    * Gets freeSize
    *  服务器磁盘的免费配额，单位G。
    *
    * @return int|null
    */
    public function getFreeSize()
    {
        return $this->container['freeSize'];
    }

    /**
    * Sets freeSize
    *
    * @param int|null $freeSize 服务器磁盘的免费配额，单位G。
    *
    * @return $this
    */
    public function setFreeSize($freeSize)
    {
        $this->container['freeSize'] = $freeSize;
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

