<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageScanPolicyRespInfoRegistryList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageScanPolicyRespInfo_registry_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSelected  是否已经选择
    * registryName  镜像仓库名称
    * registryId  镜像仓库id
    * registryType  镜像仓库类型 | SwrPrivate:swr私有 SwrShared:swr共享 SwrEnterprise:swr企业 Harbor:harbor仓库 Jfrog:jfrog仓库 Other:其他仓库
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSelected' => 'bool',
            'registryName' => 'string',
            'registryId' => 'string',
            'registryType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSelected  是否已经选择
    * registryName  镜像仓库名称
    * registryId  镜像仓库id
    * registryType  镜像仓库类型 | SwrPrivate:swr私有 SwrShared:swr共享 SwrEnterprise:swr企业 Harbor:harbor仓库 Jfrog:jfrog仓库 Other:其他仓库
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSelected' => null,
        'registryName' => null,
        'registryId' => null,
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
    * isSelected  是否已经选择
    * registryName  镜像仓库名称
    * registryId  镜像仓库id
    * registryType  镜像仓库类型 | SwrPrivate:swr私有 SwrShared:swr共享 SwrEnterprise:swr企业 Harbor:harbor仓库 Jfrog:jfrog仓库 Other:其他仓库
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSelected' => 'is_selected',
            'registryName' => 'registry_name',
            'registryId' => 'registry_id',
            'registryType' => 'registry_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSelected  是否已经选择
    * registryName  镜像仓库名称
    * registryId  镜像仓库id
    * registryType  镜像仓库类型 | SwrPrivate:swr私有 SwrShared:swr共享 SwrEnterprise:swr企业 Harbor:harbor仓库 Jfrog:jfrog仓库 Other:其他仓库
    *
    * @var string[]
    */
    protected static $setters = [
            'isSelected' => 'setIsSelected',
            'registryName' => 'setRegistryName',
            'registryId' => 'setRegistryId',
            'registryType' => 'setRegistryType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSelected  是否已经选择
    * registryName  镜像仓库名称
    * registryId  镜像仓库id
    * registryType  镜像仓库类型 | SwrPrivate:swr私有 SwrShared:swr共享 SwrEnterprise:swr企业 Harbor:harbor仓库 Jfrog:jfrog仓库 Other:其他仓库
    *
    * @var string[]
    */
    protected static $getters = [
            'isSelected' => 'getIsSelected',
            'registryName' => 'getRegistryName',
            'registryId' => 'getRegistryId',
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
        $this->container['isSelected'] = isset($data['isSelected']) ? $data['isSelected'] : null;
        $this->container['registryName'] = isset($data['registryName']) ? $data['registryName'] : null;
        $this->container['registryId'] = isset($data['registryId']) ? $data['registryId'] : null;
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
    * Gets isSelected
    *  是否已经选择
    *
    * @return bool|null
    */
    public function getIsSelected()
    {
        return $this->container['isSelected'];
    }

    /**
    * Sets isSelected
    *
    * @param bool|null $isSelected 是否已经选择
    *
    * @return $this
    */
    public function setIsSelected($isSelected)
    {
        $this->container['isSelected'] = $isSelected;
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
    * Gets registryId
    *  镜像仓库id
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
    * @param string|null $registryId 镜像仓库id
    *
    * @return $this
    */
    public function setRegistryId($registryId)
    {
        $this->container['registryId'] = $registryId;
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

