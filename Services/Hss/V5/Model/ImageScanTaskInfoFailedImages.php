<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageScanTaskInfoFailedImages implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageScanTaskInfo_failed_images';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 失败镜像ID **取值范围**： 最小值0，最大值9223372036854775807
    * registryId  **参数解释**： 镜像仓库ID **取值范围**： 字符长度0-128位
    * registryName  **参数解释**： 镜像仓库名称 **取值范围**： 字符长度0-128位
    * imageName  **参数解释**： 镜像名称 **取值范围**： 字符长度0-128位
    * imageVersion  **参数解释**： 镜像版本 **取值范围**： 字符长度0-128位
    * namespace  **参数解释**： 命名空间 **取值范围**： 字符长度0-128位
    * registryType  **参数解释**： 镜像仓库类型 **取值范围**： - SwrPrivate：swr私有。 - SwrShared：swr共享。 - SwrEnterprise：swr企业。 - Harbor：harbor仓库。 - Jfrog：jfrog仓库。 - Other：其他仓库。
    * failedReason  **参数解释**： 失败原因 **取值范围**： 字符长度0-128位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'registryId' => 'string',
            'registryName' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'namespace' => 'string',
            'registryType' => 'string',
            'failedReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 失败镜像ID **取值范围**： 最小值0，最大值9223372036854775807
    * registryId  **参数解释**： 镜像仓库ID **取值范围**： 字符长度0-128位
    * registryName  **参数解释**： 镜像仓库名称 **取值范围**： 字符长度0-128位
    * imageName  **参数解释**： 镜像名称 **取值范围**： 字符长度0-128位
    * imageVersion  **参数解释**： 镜像版本 **取值范围**： 字符长度0-128位
    * namespace  **参数解释**： 命名空间 **取值范围**： 字符长度0-128位
    * registryType  **参数解释**： 镜像仓库类型 **取值范围**： - SwrPrivate：swr私有。 - SwrShared：swr共享。 - SwrEnterprise：swr企业。 - Harbor：harbor仓库。 - Jfrog：jfrog仓库。 - Other：其他仓库。
    * failedReason  **参数解释**： 失败原因 **取值范围**： 字符长度0-128位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'registryId' => null,
        'registryName' => null,
        'imageName' => null,
        'imageVersion' => null,
        'namespace' => null,
        'registryType' => null,
        'failedReason' => null
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
    * id  **参数解释**： 失败镜像ID **取值范围**： 最小值0，最大值9223372036854775807
    * registryId  **参数解释**： 镜像仓库ID **取值范围**： 字符长度0-128位
    * registryName  **参数解释**： 镜像仓库名称 **取值范围**： 字符长度0-128位
    * imageName  **参数解释**： 镜像名称 **取值范围**： 字符长度0-128位
    * imageVersion  **参数解释**： 镜像版本 **取值范围**： 字符长度0-128位
    * namespace  **参数解释**： 命名空间 **取值范围**： 字符长度0-128位
    * registryType  **参数解释**： 镜像仓库类型 **取值范围**： - SwrPrivate：swr私有。 - SwrShared：swr共享。 - SwrEnterprise：swr企业。 - Harbor：harbor仓库。 - Jfrog：jfrog仓库。 - Other：其他仓库。
    * failedReason  **参数解释**： 失败原因 **取值范围**： 字符长度0-128位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'registryId' => 'registry_id',
            'registryName' => 'registry_name',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'namespace' => 'namespace',
            'registryType' => 'registry_type',
            'failedReason' => 'failed_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 失败镜像ID **取值范围**： 最小值0，最大值9223372036854775807
    * registryId  **参数解释**： 镜像仓库ID **取值范围**： 字符长度0-128位
    * registryName  **参数解释**： 镜像仓库名称 **取值范围**： 字符长度0-128位
    * imageName  **参数解释**： 镜像名称 **取值范围**： 字符长度0-128位
    * imageVersion  **参数解释**： 镜像版本 **取值范围**： 字符长度0-128位
    * namespace  **参数解释**： 命名空间 **取值范围**： 字符长度0-128位
    * registryType  **参数解释**： 镜像仓库类型 **取值范围**： - SwrPrivate：swr私有。 - SwrShared：swr共享。 - SwrEnterprise：swr企业。 - Harbor：harbor仓库。 - Jfrog：jfrog仓库。 - Other：其他仓库。
    * failedReason  **参数解释**： 失败原因 **取值范围**： 字符长度0-128位
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'registryId' => 'setRegistryId',
            'registryName' => 'setRegistryName',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'namespace' => 'setNamespace',
            'registryType' => 'setRegistryType',
            'failedReason' => 'setFailedReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 失败镜像ID **取值范围**： 最小值0，最大值9223372036854775807
    * registryId  **参数解释**： 镜像仓库ID **取值范围**： 字符长度0-128位
    * registryName  **参数解释**： 镜像仓库名称 **取值范围**： 字符长度0-128位
    * imageName  **参数解释**： 镜像名称 **取值范围**： 字符长度0-128位
    * imageVersion  **参数解释**： 镜像版本 **取值范围**： 字符长度0-128位
    * namespace  **参数解释**： 命名空间 **取值范围**： 字符长度0-128位
    * registryType  **参数解释**： 镜像仓库类型 **取值范围**： - SwrPrivate：swr私有。 - SwrShared：swr共享。 - SwrEnterprise：swr企业。 - Harbor：harbor仓库。 - Jfrog：jfrog仓库。 - Other：其他仓库。
    * failedReason  **参数解释**： 失败原因 **取值范围**： 字符长度0-128位
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'registryId' => 'getRegistryId',
            'registryName' => 'getRegistryName',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'namespace' => 'getNamespace',
            'registryType' => 'getRegistryType',
            'failedReason' => 'getFailedReason'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['registryId'] = isset($data['registryId']) ? $data['registryId'] : null;
        $this->container['registryName'] = isset($data['registryName']) ? $data['registryName'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['registryType'] = isset($data['registryType']) ? $data['registryType'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['registryId']) && (mb_strlen($this->container['registryId']) > 128)) {
                $invalidProperties[] = "invalid value for 'registryId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['registryId']) && (mb_strlen($this->container['registryId']) < 0)) {
                $invalidProperties[] = "invalid value for 'registryId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['registryName']) && (mb_strlen($this->container['registryName']) > 128)) {
                $invalidProperties[] = "invalid value for 'registryName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['registryName']) && (mb_strlen($this->container['registryName']) < 0)) {
                $invalidProperties[] = "invalid value for 'registryName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 128)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['failedReason']) && (mb_strlen($this->container['failedReason']) > 128)) {
                $invalidProperties[] = "invalid value for 'failedReason', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['failedReason']) && (mb_strlen($this->container['failedReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'failedReason', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  **参数解释**： 失败镜像ID **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释**： 失败镜像ID **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets registryId
    *  **参数解释**： 镜像仓库ID **取值范围**： 字符长度0-128位
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
    * @param string|null $registryId **参数解释**： 镜像仓库ID **取值范围**： 字符长度0-128位
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
    *  **参数解释**： 镜像仓库名称 **取值范围**： 字符长度0-128位
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
    * @param string|null $registryName **参数解释**： 镜像仓库名称 **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setRegistryName($registryName)
    {
        $this->container['registryName'] = $registryName;
        return $this;
    }

    /**
    * Gets imageName
    *  **参数解释**： 镜像名称 **取值范围**： 字符长度0-128位
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
    * @param string|null $imageName **参数解释**： 镜像名称 **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets imageVersion
    *  **参数解释**： 镜像版本 **取值范围**： 字符长度0-128位
    *
    * @return string|null
    */
    public function getImageVersion()
    {
        return $this->container['imageVersion'];
    }

    /**
    * Sets imageVersion
    *
    * @param string|null $imageVersion **参数解释**： 镜像版本 **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setImageVersion($imageVersion)
    {
        $this->container['imageVersion'] = $imageVersion;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**： 命名空间 **取值范围**： 字符长度0-128位
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释**： 命名空间 **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
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
    * Gets failedReason
    *  **参数解释**： 失败原因 **取值范围**： 字符长度0-128位
    *
    * @return string|null
    */
    public function getFailedReason()
    {
        return $this->container['failedReason'];
    }

    /**
    * Sets failedReason
    *
    * @param string|null $failedReason **参数解释**： 失败原因 **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
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

