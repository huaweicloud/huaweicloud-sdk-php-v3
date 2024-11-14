<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Metadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Metadata';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cryptKeyId  要创加密文件系统，该字段传KMS服务专业版密钥的ID。
    * dedicatedFlavor  创专属文件系统，要创建的虚拟机的规格。
    * dedicatedStorageId  创专属文件系统，要指定一个专属分布式存储的ID。
    * expandType  扩展类型；当文件系统正在创建时，该字段不返回。  - 创建增强型、20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB、HPC缓存型文件系统时，该参数必填。  - 创建增强型的文件系统，包括标准型-增强版和性能型-增强版，需要填写\"bandwidth\"。  - 创建20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB文件系统，需要填写\"hpc\"。  - 创建HPC缓存型，需要填写\"hpc_cache\"。
    * hpcBw  文件系统的带宽规格。  创建20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB、HPC缓存型文件系统时，该参数必填。  20MB/s/TiB，填写\"20M\"。 40MB/s/TiB，填写\"40M\"。 125MB/s/TiB，填写\"125M\"。 250MB/s/TiB，填写\"250M\"。 500MB/s/TiB，填写\"500M\"。 1000MB/s/TiB，填写\"1000M\"。 HPC缓存型，填写\"2G\"、\"4G\"、\"8G\"、\"16G\"、\"24G\"、\"32G\"或\"48G\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cryptKeyId' => 'string',
            'dedicatedFlavor' => 'string',
            'dedicatedStorageId' => 'string',
            'expandType' => 'string',
            'hpcBw' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cryptKeyId  要创加密文件系统，该字段传KMS服务专业版密钥的ID。
    * dedicatedFlavor  创专属文件系统，要创建的虚拟机的规格。
    * dedicatedStorageId  创专属文件系统，要指定一个专属分布式存储的ID。
    * expandType  扩展类型；当文件系统正在创建时，该字段不返回。  - 创建增强型、20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB、HPC缓存型文件系统时，该参数必填。  - 创建增强型的文件系统，包括标准型-增强版和性能型-增强版，需要填写\"bandwidth\"。  - 创建20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB文件系统，需要填写\"hpc\"。  - 创建HPC缓存型，需要填写\"hpc_cache\"。
    * hpcBw  文件系统的带宽规格。  创建20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB、HPC缓存型文件系统时，该参数必填。  20MB/s/TiB，填写\"20M\"。 40MB/s/TiB，填写\"40M\"。 125MB/s/TiB，填写\"125M\"。 250MB/s/TiB，填写\"250M\"。 500MB/s/TiB，填写\"500M\"。 1000MB/s/TiB，填写\"1000M\"。 HPC缓存型，填写\"2G\"、\"4G\"、\"8G\"、\"16G\"、\"24G\"、\"32G\"或\"48G\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cryptKeyId' => null,
        'dedicatedFlavor' => null,
        'dedicatedStorageId' => null,
        'expandType' => null,
        'hpcBw' => null
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
    * cryptKeyId  要创加密文件系统，该字段传KMS服务专业版密钥的ID。
    * dedicatedFlavor  创专属文件系统，要创建的虚拟机的规格。
    * dedicatedStorageId  创专属文件系统，要指定一个专属分布式存储的ID。
    * expandType  扩展类型；当文件系统正在创建时，该字段不返回。  - 创建增强型、20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB、HPC缓存型文件系统时，该参数必填。  - 创建增强型的文件系统，包括标准型-增强版和性能型-增强版，需要填写\"bandwidth\"。  - 创建20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB文件系统，需要填写\"hpc\"。  - 创建HPC缓存型，需要填写\"hpc_cache\"。
    * hpcBw  文件系统的带宽规格。  创建20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB、HPC缓存型文件系统时，该参数必填。  20MB/s/TiB，填写\"20M\"。 40MB/s/TiB，填写\"40M\"。 125MB/s/TiB，填写\"125M\"。 250MB/s/TiB，填写\"250M\"。 500MB/s/TiB，填写\"500M\"。 1000MB/s/TiB，填写\"1000M\"。 HPC缓存型，填写\"2G\"、\"4G\"、\"8G\"、\"16G\"、\"24G\"、\"32G\"或\"48G\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cryptKeyId' => 'crypt_key_id',
            'dedicatedFlavor' => 'dedicated_flavor',
            'dedicatedStorageId' => 'dedicated_storage_id',
            'expandType' => 'expand_type',
            'hpcBw' => 'hpc_bw'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cryptKeyId  要创加密文件系统，该字段传KMS服务专业版密钥的ID。
    * dedicatedFlavor  创专属文件系统，要创建的虚拟机的规格。
    * dedicatedStorageId  创专属文件系统，要指定一个专属分布式存储的ID。
    * expandType  扩展类型；当文件系统正在创建时，该字段不返回。  - 创建增强型、20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB、HPC缓存型文件系统时，该参数必填。  - 创建增强型的文件系统，包括标准型-增强版和性能型-增强版，需要填写\"bandwidth\"。  - 创建20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB文件系统，需要填写\"hpc\"。  - 创建HPC缓存型，需要填写\"hpc_cache\"。
    * hpcBw  文件系统的带宽规格。  创建20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB、HPC缓存型文件系统时，该参数必填。  20MB/s/TiB，填写\"20M\"。 40MB/s/TiB，填写\"40M\"。 125MB/s/TiB，填写\"125M\"。 250MB/s/TiB，填写\"250M\"。 500MB/s/TiB，填写\"500M\"。 1000MB/s/TiB，填写\"1000M\"。 HPC缓存型，填写\"2G\"、\"4G\"、\"8G\"、\"16G\"、\"24G\"、\"32G\"或\"48G\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'cryptKeyId' => 'setCryptKeyId',
            'dedicatedFlavor' => 'setDedicatedFlavor',
            'dedicatedStorageId' => 'setDedicatedStorageId',
            'expandType' => 'setExpandType',
            'hpcBw' => 'setHpcBw'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cryptKeyId  要创加密文件系统，该字段传KMS服务专业版密钥的ID。
    * dedicatedFlavor  创专属文件系统，要创建的虚拟机的规格。
    * dedicatedStorageId  创专属文件系统，要指定一个专属分布式存储的ID。
    * expandType  扩展类型；当文件系统正在创建时，该字段不返回。  - 创建增强型、20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB、HPC缓存型文件系统时，该参数必填。  - 创建增强型的文件系统，包括标准型-增强版和性能型-增强版，需要填写\"bandwidth\"。  - 创建20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB文件系统，需要填写\"hpc\"。  - 创建HPC缓存型，需要填写\"hpc_cache\"。
    * hpcBw  文件系统的带宽规格。  创建20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB、HPC缓存型文件系统时，该参数必填。  20MB/s/TiB，填写\"20M\"。 40MB/s/TiB，填写\"40M\"。 125MB/s/TiB，填写\"125M\"。 250MB/s/TiB，填写\"250M\"。 500MB/s/TiB，填写\"500M\"。 1000MB/s/TiB，填写\"1000M\"。 HPC缓存型，填写\"2G\"、\"4G\"、\"8G\"、\"16G\"、\"24G\"、\"32G\"或\"48G\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'cryptKeyId' => 'getCryptKeyId',
            'dedicatedFlavor' => 'getDedicatedFlavor',
            'dedicatedStorageId' => 'getDedicatedStorageId',
            'expandType' => 'getExpandType',
            'hpcBw' => 'getHpcBw'
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
        $this->container['cryptKeyId'] = isset($data['cryptKeyId']) ? $data['cryptKeyId'] : null;
        $this->container['dedicatedFlavor'] = isset($data['dedicatedFlavor']) ? $data['dedicatedFlavor'] : null;
        $this->container['dedicatedStorageId'] = isset($data['dedicatedStorageId']) ? $data['dedicatedStorageId'] : null;
        $this->container['expandType'] = isset($data['expandType']) ? $data['expandType'] : null;
        $this->container['hpcBw'] = isset($data['hpcBw']) ? $data['hpcBw'] : null;
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
    * Gets cryptKeyId
    *  要创加密文件系统，该字段传KMS服务专业版密钥的ID。
    *
    * @return string|null
    */
    public function getCryptKeyId()
    {
        return $this->container['cryptKeyId'];
    }

    /**
    * Sets cryptKeyId
    *
    * @param string|null $cryptKeyId 要创加密文件系统，该字段传KMS服务专业版密钥的ID。
    *
    * @return $this
    */
    public function setCryptKeyId($cryptKeyId)
    {
        $this->container['cryptKeyId'] = $cryptKeyId;
        return $this;
    }

    /**
    * Gets dedicatedFlavor
    *  创专属文件系统，要创建的虚拟机的规格。
    *
    * @return string|null
    */
    public function getDedicatedFlavor()
    {
        return $this->container['dedicatedFlavor'];
    }

    /**
    * Sets dedicatedFlavor
    *
    * @param string|null $dedicatedFlavor 创专属文件系统，要创建的虚拟机的规格。
    *
    * @return $this
    */
    public function setDedicatedFlavor($dedicatedFlavor)
    {
        $this->container['dedicatedFlavor'] = $dedicatedFlavor;
        return $this;
    }

    /**
    * Gets dedicatedStorageId
    *  创专属文件系统，要指定一个专属分布式存储的ID。
    *
    * @return string|null
    */
    public function getDedicatedStorageId()
    {
        return $this->container['dedicatedStorageId'];
    }

    /**
    * Sets dedicatedStorageId
    *
    * @param string|null $dedicatedStorageId 创专属文件系统，要指定一个专属分布式存储的ID。
    *
    * @return $this
    */
    public function setDedicatedStorageId($dedicatedStorageId)
    {
        $this->container['dedicatedStorageId'] = $dedicatedStorageId;
        return $this;
    }

    /**
    * Gets expandType
    *  扩展类型；当文件系统正在创建时，该字段不返回。  - 创建增强型、20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB、HPC缓存型文件系统时，该参数必填。  - 创建增强型的文件系统，包括标准型-增强版和性能型-增强版，需要填写\"bandwidth\"。  - 创建20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB文件系统，需要填写\"hpc\"。  - 创建HPC缓存型，需要填写\"hpc_cache\"。
    *
    * @return string|null
    */
    public function getExpandType()
    {
        return $this->container['expandType'];
    }

    /**
    * Sets expandType
    *
    * @param string|null $expandType 扩展类型；当文件系统正在创建时，该字段不返回。  - 创建增强型、20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB、HPC缓存型文件系统时，该参数必填。  - 创建增强型的文件系统，包括标准型-增强版和性能型-增强版，需要填写\"bandwidth\"。  - 创建20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB文件系统，需要填写\"hpc\"。  - 创建HPC缓存型，需要填写\"hpc_cache\"。
    *
    * @return $this
    */
    public function setExpandType($expandType)
    {
        $this->container['expandType'] = $expandType;
        return $this;
    }

    /**
    * Gets hpcBw
    *  文件系统的带宽规格。  创建20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB、HPC缓存型文件系统时，该参数必填。  20MB/s/TiB，填写\"20M\"。 40MB/s/TiB，填写\"40M\"。 125MB/s/TiB，填写\"125M\"。 250MB/s/TiB，填写\"250M\"。 500MB/s/TiB，填写\"500M\"。 1000MB/s/TiB，填写\"1000M\"。 HPC缓存型，填写\"2G\"、\"4G\"、\"8G\"、\"16G\"、\"24G\"、\"32G\"或\"48G\"。
    *
    * @return string|null
    */
    public function getHpcBw()
    {
        return $this->container['hpcBw'];
    }

    /**
    * Sets hpcBw
    *
    * @param string|null $hpcBw 文件系统的带宽规格。  创建20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB、HPC缓存型文件系统时，该参数必填。  20MB/s/TiB，填写\"20M\"。 40MB/s/TiB，填写\"40M\"。 125MB/s/TiB，填写\"125M\"。 250MB/s/TiB，填写\"250M\"。 500MB/s/TiB，填写\"500M\"。 1000MB/s/TiB，填写\"1000M\"。 HPC缓存型，填写\"2G\"、\"4G\"、\"8G\"、\"16G\"、\"24G\"、\"32G\"或\"48G\"。
    *
    * @return $this
    */
    public function setHpcBw($hpcBw)
    {
        $this->container['hpcBw'] = $hpcBw;
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

