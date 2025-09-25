<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CycleImageScanPolicyReqInfoRegistryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CycleImageScanPolicyReqInfo_registry_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * registryId  镜像仓库Id
    * registryName  镜像仓库名称
    * registryType  镜像仓库类型 | SwrPrivate:swr私有 SwrShared:swr共享 SwrEnterprise:swr企业 Harbor:harbor仓库 Jfrog:jfrog仓库 Other:其他仓库
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'registryId' => 'string',
            'registryName' => 'string',
            'registryType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * registryId  镜像仓库Id
    * registryName  镜像仓库名称
    * registryType  镜像仓库类型 | SwrPrivate:swr私有 SwrShared:swr共享 SwrEnterprise:swr企业 Harbor:harbor仓库 Jfrog:jfrog仓库 Other:其他仓库
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'registryId' => null,
        'registryName' => null,
        'registryType' => null
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
    * registryId  镜像仓库Id
    * registryName  镜像仓库名称
    * registryType  镜像仓库类型 | SwrPrivate:swr私有 SwrShared:swr共享 SwrEnterprise:swr企业 Harbor:harbor仓库 Jfrog:jfrog仓库 Other:其他仓库
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'registryId' => 'registry_id',
            'registryName' => 'registry_name',
            'registryType' => 'registry_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * registryId  镜像仓库Id
    * registryName  镜像仓库名称
    * registryType  镜像仓库类型 | SwrPrivate:swr私有 SwrShared:swr共享 SwrEnterprise:swr企业 Harbor:harbor仓库 Jfrog:jfrog仓库 Other:其他仓库
    *
    * @var string[]
    */
    protected static $setters = [
            'registryId' => 'setRegistryId',
            'registryName' => 'setRegistryName',
            'registryType' => 'setRegistryType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * registryId  镜像仓库Id
    * registryName  镜像仓库名称
    * registryType  镜像仓库类型 | SwrPrivate:swr私有 SwrShared:swr共享 SwrEnterprise:swr企业 Harbor:harbor仓库 Jfrog:jfrog仓库 Other:其他仓库
    *
    * @var string[]
    */
    protected static $getters = [
            'registryId' => 'getRegistryId',
            'registryName' => 'getRegistryName',
            'registryType' => 'getRegistryType'
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
        $this->container['registryId'] = isset($data['registryId']) ? $data['registryId'] : null;
        $this->container['registryName'] = isset($data['registryName']) ? $data['registryName'] : null;
        $this->container['registryType'] = isset($data['registryType']) ? $data['registryType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['registryId']) && (mb_strlen($this->container['registryId']) > 256)) {
                $invalidProperties[] = "invalid value for 'registryId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['registryId']) && (mb_strlen($this->container['registryId']) < 1)) {
                $invalidProperties[] = "invalid value for 'registryId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['registryId']) && !preg_match("/^.*$/", $this->container['registryId'])) {
                $invalidProperties[] = "invalid value for 'registryId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['registryName']) && (mb_strlen($this->container['registryName']) > 128)) {
                $invalidProperties[] = "invalid value for 'registryName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['registryName']) && (mb_strlen($this->container['registryName']) < 1)) {
                $invalidProperties[] = "invalid value for 'registryName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['registryName']) && !preg_match("/^.*$/", $this->container['registryName'])) {
                $invalidProperties[] = "invalid value for 'registryName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['registryType']) && (mb_strlen($this->container['registryType']) > 256)) {
                $invalidProperties[] = "invalid value for 'registryType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['registryType']) && (mb_strlen($this->container['registryType']) < 1)) {
                $invalidProperties[] = "invalid value for 'registryType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['registryType']) && !preg_match("/^.*$/", $this->container['registryType'])) {
                $invalidProperties[] = "invalid value for 'registryType', must be conform to the pattern /^.*$/.";
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
    * Gets registryId
    *  镜像仓库Id
    *
    * @return string|null
    */
    public function getRegistryId()
    {
        return $this->container['registryId'];
    }

    /**
    * Sets registryId
    *
    * @param string|null $registryId 镜像仓库Id
    *
    * @return $this
    */
    public function setRegistryId($registryId)
    {
        $this->container['registryId'] = $registryId;
        return $this;
    }

    /**
    * Gets registryName
    *  镜像仓库名称
    *
    * @return string|null
    */
    public function getRegistryName()
    {
        return $this->container['registryName'];
    }

    /**
    * Sets registryName
    *
    * @param string|null $registryName 镜像仓库名称
    *
    * @return $this
    */
    public function setRegistryName($registryName)
    {
        $this->container['registryName'] = $registryName;
        return $this;
    }

    /**
    * Gets registryType
    *  镜像仓库类型 | SwrPrivate:swr私有 SwrShared:swr共享 SwrEnterprise:swr企业 Harbor:harbor仓库 Jfrog:jfrog仓库 Other:其他仓库
    *
    * @return string|null
    */
    public function getRegistryType()
    {
        return $this->container['registryType'];
    }

    /**
    * Sets registryType
    *
    * @param string|null $registryType 镜像仓库类型 | SwrPrivate:swr私有 SwrShared:swr共享 SwrEnterprise:swr企业 Harbor:harbor仓库 Jfrog:jfrog仓库 Other:其他仓库
    *
    * @return $this
    */
    public function setRegistryType($registryType)
    {
        $this->container['registryType'] = $registryType;
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

