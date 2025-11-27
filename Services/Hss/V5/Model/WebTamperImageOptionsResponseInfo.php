<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WebTamperImageOptionsResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WebTamperImageOptionsResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
    * imageFullName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-64位
    * imageVersionList  **参数解释**: 镜像版本列表 **约束限制**: 不涉及 **取值范围**: 最少0条，最多100条 **默认取值**: 不涉及
    * imageNamespace  **参数解释**: 仓库镜像的组织名称 **取值范围**: 字符长度0-512位
    * registryName  **参数解释**: 镜像仓库名称 **取值范围**: 字符长度1-128位
    * registryType  **参数解释**： 镜像仓库类型 **取值范围**： - SwrPrivate：swr私有。 - SwrShared：swr共享。 - SwrEnterprise：swr企业。 - Harbor：harbor仓库。 - Jfrog：jfrog仓库。 - Other：其他仓库。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageName' => 'string',
            'imageFullName' => 'string',
            'imageId' => 'string',
            'imageVersionList' => 'string[]',
            'imageNamespace' => 'string',
            'registryName' => 'string',
            'registryType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
    * imageFullName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-64位
    * imageVersionList  **参数解释**: 镜像版本列表 **约束限制**: 不涉及 **取值范围**: 最少0条，最多100条 **默认取值**: 不涉及
    * imageNamespace  **参数解释**: 仓库镜像的组织名称 **取值范围**: 字符长度0-512位
    * registryName  **参数解释**: 镜像仓库名称 **取值范围**: 字符长度1-128位
    * registryType  **参数解释**： 镜像仓库类型 **取值范围**： - SwrPrivate：swr私有。 - SwrShared：swr共享。 - SwrEnterprise：swr企业。 - Harbor：harbor仓库。 - Jfrog：jfrog仓库。 - Other：其他仓库。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageName' => null,
        'imageFullName' => null,
        'imageId' => null,
        'imageVersionList' => null,
        'imageNamespace' => null,
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
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
    * imageFullName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-64位
    * imageVersionList  **参数解释**: 镜像版本列表 **约束限制**: 不涉及 **取值范围**: 最少0条，最多100条 **默认取值**: 不涉及
    * imageNamespace  **参数解释**: 仓库镜像的组织名称 **取值范围**: 字符长度0-512位
    * registryName  **参数解释**: 镜像仓库名称 **取值范围**: 字符长度1-128位
    * registryType  **参数解释**： 镜像仓库类型 **取值范围**： - SwrPrivate：swr私有。 - SwrShared：swr共享。 - SwrEnterprise：swr企业。 - Harbor：harbor仓库。 - Jfrog：jfrog仓库。 - Other：其他仓库。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageName' => 'image_name',
            'imageFullName' => 'image_full_name',
            'imageId' => 'image_id',
            'imageVersionList' => 'image_version_list',
            'imageNamespace' => 'image_namespace',
            'registryName' => 'registry_name',
            'registryType' => 'registry_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
    * imageFullName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-64位
    * imageVersionList  **参数解释**: 镜像版本列表 **约束限制**: 不涉及 **取值范围**: 最少0条，最多100条 **默认取值**: 不涉及
    * imageNamespace  **参数解释**: 仓库镜像的组织名称 **取值范围**: 字符长度0-512位
    * registryName  **参数解释**: 镜像仓库名称 **取值范围**: 字符长度1-128位
    * registryType  **参数解释**： 镜像仓库类型 **取值范围**： - SwrPrivate：swr私有。 - SwrShared：swr共享。 - SwrEnterprise：swr企业。 - Harbor：harbor仓库。 - Jfrog：jfrog仓库。 - Other：其他仓库。
    *
    * @var string[]
    */
    protected static $setters = [
            'imageName' => 'setImageName',
            'imageFullName' => 'setImageFullName',
            'imageId' => 'setImageId',
            'imageVersionList' => 'setImageVersionList',
            'imageNamespace' => 'setImageNamespace',
            'registryName' => 'setRegistryName',
            'registryType' => 'setRegistryType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
    * imageFullName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-64位
    * imageVersionList  **参数解释**: 镜像版本列表 **约束限制**: 不涉及 **取值范围**: 最少0条，最多100条 **默认取值**: 不涉及
    * imageNamespace  **参数解释**: 仓库镜像的组织名称 **取值范围**: 字符长度0-512位
    * registryName  **参数解释**: 镜像仓库名称 **取值范围**: 字符长度1-128位
    * registryType  **参数解释**： 镜像仓库类型 **取值范围**： - SwrPrivate：swr私有。 - SwrShared：swr共享。 - SwrEnterprise：swr企业。 - Harbor：harbor仓库。 - Jfrog：jfrog仓库。 - Other：其他仓库。
    *
    * @var string[]
    */
    protected static $getters = [
            'imageName' => 'getImageName',
            'imageFullName' => 'getImageFullName',
            'imageId' => 'getImageId',
            'imageVersionList' => 'getImageVersionList',
            'imageNamespace' => 'getImageNamespace',
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
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageFullName'] = isset($data['imageFullName']) ? $data['imageFullName'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageVersionList'] = isset($data['imageVersionList']) ? $data['imageVersionList'] : null;
        $this->container['imageNamespace'] = isset($data['imageNamespace']) ? $data['imageNamespace'] : null;
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
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 512)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageFullName']) && (mb_strlen($this->container['imageFullName']) > 512)) {
                $invalidProperties[] = "invalid value for 'imageFullName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['imageFullName']) && (mb_strlen($this->container['imageFullName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageFullName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageNamespace']) && (mb_strlen($this->container['imageNamespace']) > 512)) {
                $invalidProperties[] = "invalid value for 'imageNamespace', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['imageNamespace']) && (mb_strlen($this->container['imageNamespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageNamespace', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['registryName']) && (mb_strlen($this->container['registryName']) > 128)) {
                $invalidProperties[] = "invalid value for 'registryName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['registryName']) && (mb_strlen($this->container['registryName']) < 1)) {
                $invalidProperties[] = "invalid value for 'registryName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['registryType']) && (mb_strlen($this->container['registryType']) > 256)) {
                $invalidProperties[] = "invalid value for 'registryType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['registryType']) && (mb_strlen($this->container['registryType']) < 1)) {
                $invalidProperties[] = "invalid value for 'registryType', the character length must be bigger than or equal to 1.";
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
    * Gets imageName
    *  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets imageFullName
    *  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
    *
    * @return string|null
    */
    public function getImageFullName()
    {
        return $this->container['imageFullName'];
    }

    /**
    * Sets imageFullName
    *
    * @param string|null $imageFullName **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
    *
    * @return $this
    */
    public function setImageFullName($imageFullName)
    {
        $this->container['imageFullName'] = $imageFullName;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释**: 镜像id **取值范围**: 字符长度0-64位
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId **参数解释**: 镜像id **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets imageVersionList
    *  **参数解释**: 镜像版本列表 **约束限制**: 不涉及 **取值范围**: 最少0条，最多100条 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getImageVersionList()
    {
        return $this->container['imageVersionList'];
    }

    /**
    * Sets imageVersionList
    *
    * @param string[]|null $imageVersionList **参数解释**: 镜像版本列表 **约束限制**: 不涉及 **取值范围**: 最少0条，最多100条 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageVersionList($imageVersionList)
    {
        $this->container['imageVersionList'] = $imageVersionList;
        return $this;
    }

    /**
    * Gets imageNamespace
    *  **参数解释**: 仓库镜像的组织名称 **取值范围**: 字符长度0-512位
    *
    * @return string|null
    */
    public function getImageNamespace()
    {
        return $this->container['imageNamespace'];
    }

    /**
    * Sets imageNamespace
    *
    * @param string|null $imageNamespace **参数解释**: 仓库镜像的组织名称 **取值范围**: 字符长度0-512位
    *
    * @return $this
    */
    public function setImageNamespace($imageNamespace)
    {
        $this->container['imageNamespace'] = $imageNamespace;
        return $this;
    }

    /**
    * Gets registryName
    *  **参数解释**: 镜像仓库名称 **取值范围**: 字符长度1-128位
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
    * @param string|null $registryName **参数解释**: 镜像仓库名称 **取值范围**: 字符长度1-128位
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
    *  **参数解释**： 镜像仓库类型 **取值范围**： - SwrPrivate：swr私有。 - SwrShared：swr共享。 - SwrEnterprise：swr企业。 - Harbor：harbor仓库。 - Jfrog：jfrog仓库。 - Other：其他仓库。
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
    * @param string|null $registryType **参数解释**： 镜像仓库类型 **取值范围**： - SwrPrivate：swr私有。 - SwrShared：swr共享。 - SwrEnterprise：swr企业。 - Harbor：harbor仓库。 - Jfrog：jfrog仓库。 - Other：其他仓库。
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

