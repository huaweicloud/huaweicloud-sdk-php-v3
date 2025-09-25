<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateManualImageScanTaskReqInfoImageInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateManualImageScanTaskReqInfo_image_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * imageId  image id
    * imageDigest  镜像digest
    * registryId  镜像仓库ID
    * registryName  镜像仓库名称
    * imageName  镜像名称
    * imageVersion  镜像版本
    * namespace  命名空间
    * instanceId  企业实例ID
    * instanceUrl  下载企业镜像URL
    * registryType  **参数解释**: 镜像仓库类型 **约束限制**: 不涉及 **取值范围**: - SwrPrivate：swr私有。 - SwrShared：swr共享。 - SwrEnterprise：swr企业。 - Harbor：harbor仓库。 - Jfrog：jfrog仓库。 - Other：其他仓库。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'imageId' => 'string',
            'imageDigest' => 'string',
            'registryId' => 'string',
            'registryName' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'namespace' => 'string',
            'instanceId' => 'string',
            'instanceUrl' => 'string',
            'registryType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * imageId  image id
    * imageDigest  镜像digest
    * registryId  镜像仓库ID
    * registryName  镜像仓库名称
    * imageName  镜像名称
    * imageVersion  镜像版本
    * namespace  命名空间
    * instanceId  企业实例ID
    * instanceUrl  下载企业镜像URL
    * registryType  **参数解释**: 镜像仓库类型 **约束限制**: 不涉及 **取值范围**: - SwrPrivate：swr私有。 - SwrShared：swr共享。 - SwrEnterprise：swr企业。 - Harbor：harbor仓库。 - Jfrog：jfrog仓库。 - Other：其他仓库。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'imageId' => null,
        'imageDigest' => null,
        'registryId' => null,
        'registryName' => null,
        'imageName' => null,
        'imageVersion' => null,
        'namespace' => null,
        'instanceId' => null,
        'instanceUrl' => null,
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
    * id  id
    * imageId  image id
    * imageDigest  镜像digest
    * registryId  镜像仓库ID
    * registryName  镜像仓库名称
    * imageName  镜像名称
    * imageVersion  镜像版本
    * namespace  命名空间
    * instanceId  企业实例ID
    * instanceUrl  下载企业镜像URL
    * registryType  **参数解释**: 镜像仓库类型 **约束限制**: 不涉及 **取值范围**: - SwrPrivate：swr私有。 - SwrShared：swr共享。 - SwrEnterprise：swr企业。 - Harbor：harbor仓库。 - Jfrog：jfrog仓库。 - Other：其他仓库。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'imageId' => 'image_id',
            'imageDigest' => 'image_digest',
            'registryId' => 'registry_id',
            'registryName' => 'registry_name',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'namespace' => 'namespace',
            'instanceId' => 'instance_id',
            'instanceUrl' => 'instance_url',
            'registryType' => 'registry_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * imageId  image id
    * imageDigest  镜像digest
    * registryId  镜像仓库ID
    * registryName  镜像仓库名称
    * imageName  镜像名称
    * imageVersion  镜像版本
    * namespace  命名空间
    * instanceId  企业实例ID
    * instanceUrl  下载企业镜像URL
    * registryType  **参数解释**: 镜像仓库类型 **约束限制**: 不涉及 **取值范围**: - SwrPrivate：swr私有。 - SwrShared：swr共享。 - SwrEnterprise：swr企业。 - Harbor：harbor仓库。 - Jfrog：jfrog仓库。 - Other：其他仓库。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'imageId' => 'setImageId',
            'imageDigest' => 'setImageDigest',
            'registryId' => 'setRegistryId',
            'registryName' => 'setRegistryName',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'namespace' => 'setNamespace',
            'instanceId' => 'setInstanceId',
            'instanceUrl' => 'setInstanceUrl',
            'registryType' => 'setRegistryType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * imageId  image id
    * imageDigest  镜像digest
    * registryId  镜像仓库ID
    * registryName  镜像仓库名称
    * imageName  镜像名称
    * imageVersion  镜像版本
    * namespace  命名空间
    * instanceId  企业实例ID
    * instanceUrl  下载企业镜像URL
    * registryType  **参数解释**: 镜像仓库类型 **约束限制**: 不涉及 **取值范围**: - SwrPrivate：swr私有。 - SwrShared：swr共享。 - SwrEnterprise：swr企业。 - Harbor：harbor仓库。 - Jfrog：jfrog仓库。 - Other：其他仓库。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'imageId' => 'getImageId',
            'imageDigest' => 'getImageDigest',
            'registryId' => 'getRegistryId',
            'registryName' => 'getRegistryName',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'namespace' => 'getNamespace',
            'instanceId' => 'getInstanceId',
            'instanceUrl' => 'getInstanceUrl',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageDigest'] = isset($data['imageDigest']) ? $data['imageDigest'] : null;
        $this->container['registryId'] = isset($data['registryId']) ? $data['registryId'] : null;
        $this->container['registryName'] = isset($data['registryName']) ? $data['registryName'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceUrl'] = isset($data['instanceUrl']) ? $data['instanceUrl'] : null;
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
            if (!is_null($this->container['id']) && ($this->container['id'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && !preg_match("/^.*$/", $this->container['imageId'])) {
                $invalidProperties[] = "invalid value for 'imageId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageDigest']) && (mb_strlen($this->container['imageDigest']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageDigest', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageDigest']) && (mb_strlen($this->container['imageDigest']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageDigest', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageDigest']) && !preg_match("/^.*$/", $this->container['imageDigest'])) {
                $invalidProperties[] = "invalid value for 'imageDigest', must be conform to the pattern /^.*$/.";
            }
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
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageName']) && !preg_match("/^.*$/", $this->container['imageName'])) {
                $invalidProperties[] = "invalid value for 'imageName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageVersion']) && !preg_match("/^.*$/", $this->container['imageVersion'])) {
                $invalidProperties[] = "invalid value for 'imageVersion', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 256)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^.*$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && !preg_match("/^.*$/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['instanceUrl']) && (mb_strlen($this->container['instanceUrl']) > 256)) {
                $invalidProperties[] = "invalid value for 'instanceUrl', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['instanceUrl']) && (mb_strlen($this->container['instanceUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceUrl']) && !preg_match("/^.*$/", $this->container['instanceUrl'])) {
                $invalidProperties[] = "invalid value for 'instanceUrl', must be conform to the pattern /^.*$/.";
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
    * Gets id
    *  id
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
    * @param int|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets imageId
    *  image id
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
    * @param string|null $imageId image id
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets imageDigest
    *  镜像digest
    *
    * @return string|null
    */
    public function getImageDigest()
    {
        return $this->container['imageDigest'];
    }

    /**
    * Sets imageDigest
    *
    * @param string|null $imageDigest 镜像digest
    *
    * @return $this
    */
    public function setImageDigest($imageDigest)
    {
        $this->container['imageDigest'] = $imageDigest;
        return $this;
    }

    /**
    * Gets registryId
    *  镜像仓库ID
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
    * @param string|null $registryId 镜像仓库ID
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
    * Gets imageName
    *  镜像名称
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
    * @param string|null $imageName 镜像名称
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
    *  镜像版本
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
    * @param string|null $imageVersion 镜像版本
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
    *  命名空间
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
    * @param string|null $namespace 命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets instanceId
    *  企业实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 企业实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceUrl
    *  下载企业镜像URL
    *
    * @return string|null
    */
    public function getInstanceUrl()
    {
        return $this->container['instanceUrl'];
    }

    /**
    * Sets instanceUrl
    *
    * @param string|null $instanceUrl 下载企业镜像URL
    *
    * @return $this
    */
    public function setInstanceUrl($instanceUrl)
    {
        $this->container['instanceUrl'] = $instanceUrl;
        return $this;
    }

    /**
    * Gets registryType
    *  **参数解释**: 镜像仓库类型 **约束限制**: 不涉及 **取值范围**: - SwrPrivate：swr私有。 - SwrShared：swr共享。 - SwrEnterprise：swr企业。 - Harbor：harbor仓库。 - Jfrog：jfrog仓库。 - Other：其他仓库。  **默认取值**: 不涉及
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
    * @param string|null $registryType **参数解释**: 镜像仓库类型 **约束限制**: 不涉及 **取值范围**: - SwrPrivate：swr私有。 - SwrShared：swr共享。 - SwrEnterprise：swr企业。 - Harbor：harbor仓库。 - Jfrog：jfrog仓库。 - Other：其他仓库。  **默认取值**: 不涉及
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

