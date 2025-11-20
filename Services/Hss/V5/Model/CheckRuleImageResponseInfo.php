<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckRuleImageResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckRuleImageResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-64
    * imageDigest  **参数解释**: 镜像digest **取值范围**: 字符长度0-128
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-128
    * imageType  **参数解释**: 镜像类型 **取值范围**: - private_image：私有镜像 - shared_image：共享镜像 - instance_image：企业镜像 - harbor：Harbor镜像 - jfrog：Jfrog镜像 - cicd：cicd镜像
    * registryName  **参数解释**: 镜像仓库名称 **取值范围**: 字符长度0-128
    * imageSize  **参数解释**: 版本大小 **取值范围**: 大小0-2147483547
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'imageDigest' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'imageType' => 'string',
            'registryName' => 'string',
            'imageSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-64
    * imageDigest  **参数解释**: 镜像digest **取值范围**: 字符长度0-128
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-128
    * imageType  **参数解释**: 镜像类型 **取值范围**: - private_image：私有镜像 - shared_image：共享镜像 - instance_image：企业镜像 - harbor：Harbor镜像 - jfrog：Jfrog镜像 - cicd：cicd镜像
    * registryName  **参数解释**: 镜像仓库名称 **取值范围**: 字符长度0-128
    * imageSize  **参数解释**: 版本大小 **取值范围**: 大小0-2147483547
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'imageDigest' => null,
        'imageName' => null,
        'imageVersion' => null,
        'imageType' => null,
        'registryName' => null,
        'imageSize' => 'int32'
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
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-64
    * imageDigest  **参数解释**: 镜像digest **取值范围**: 字符长度0-128
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-128
    * imageType  **参数解释**: 镜像类型 **取值范围**: - private_image：私有镜像 - shared_image：共享镜像 - instance_image：企业镜像 - harbor：Harbor镜像 - jfrog：Jfrog镜像 - cicd：cicd镜像
    * registryName  **参数解释**: 镜像仓库名称 **取值范围**: 字符长度0-128
    * imageSize  **参数解释**: 版本大小 **取值范围**: 大小0-2147483547
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'imageDigest' => 'image_digest',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'imageType' => 'image_type',
            'registryName' => 'registry_name',
            'imageSize' => 'image_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-64
    * imageDigest  **参数解释**: 镜像digest **取值范围**: 字符长度0-128
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-128
    * imageType  **参数解释**: 镜像类型 **取值范围**: - private_image：私有镜像 - shared_image：共享镜像 - instance_image：企业镜像 - harbor：Harbor镜像 - jfrog：Jfrog镜像 - cicd：cicd镜像
    * registryName  **参数解释**: 镜像仓库名称 **取值范围**: 字符长度0-128
    * imageSize  **参数解释**: 版本大小 **取值范围**: 大小0-2147483547
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'imageDigest' => 'setImageDigest',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'imageType' => 'setImageType',
            'registryName' => 'setRegistryName',
            'imageSize' => 'setImageSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-64
    * imageDigest  **参数解释**: 镜像digest **取值范围**: 字符长度0-128
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-128
    * imageType  **参数解释**: 镜像类型 **取值范围**: - private_image：私有镜像 - shared_image：共享镜像 - instance_image：企业镜像 - harbor：Harbor镜像 - jfrog：Jfrog镜像 - cicd：cicd镜像
    * registryName  **参数解释**: 镜像仓库名称 **取值范围**: 字符长度0-128
    * imageSize  **参数解释**: 版本大小 **取值范围**: 大小0-2147483547
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'imageDigest' => 'getImageDigest',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'imageType' => 'getImageType',
            'registryName' => 'getRegistryName',
            'imageSize' => 'getImageSize'
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['imageDigest'] = isset($data['imageDigest']) ? $data['imageDigest'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['registryName'] = isset($data['registryName']) ? $data['registryName'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 64)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageDigest']) && (mb_strlen($this->container['imageDigest']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageDigest', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageDigest']) && (mb_strlen($this->container['imageDigest']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageDigest', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) > 32)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['registryName']) && (mb_strlen($this->container['registryName']) > 128)) {
                $invalidProperties[] = "invalid value for 'registryName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['registryName']) && (mb_strlen($this->container['registryName']) < 1)) {
                $invalidProperties[] = "invalid value for 'registryName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be bigger than or equal to 0.";
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
    * Gets namespace
    *  **参数解释**: 组织名称 **取值范围**: 字符长度0-64
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
    * @param string|null $namespace **参数解释**: 组织名称 **取值范围**: 字符长度0-64
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets imageDigest
    *  **参数解释**: 镜像digest **取值范围**: 字符长度0-128
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
    * @param string|null $imageDigest **参数解释**: 镜像digest **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setImageDigest($imageDigest)
    {
        $this->container['imageDigest'] = $imageDigest;
        return $this;
    }

    /**
    * Gets imageName
    *  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128
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
    * @param string|null $imageName **参数解释**: 镜像名称 **取值范围**: 字符长度0-128
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
    *  **参数解释**: 镜像版本 **取值范围**: 字符长度0-128
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
    * @param string|null $imageVersion **参数解释**: 镜像版本 **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setImageVersion($imageVersion)
    {
        $this->container['imageVersion'] = $imageVersion;
        return $this;
    }

    /**
    * Gets imageType
    *  **参数解释**: 镜像类型 **取值范围**: - private_image：私有镜像 - shared_image：共享镜像 - instance_image：企业镜像 - harbor：Harbor镜像 - jfrog：Jfrog镜像 - cicd：cicd镜像
    *
    * @return string|null
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string|null $imageType **参数解释**: 镜像类型 **取值范围**: - private_image：私有镜像 - shared_image：共享镜像 - instance_image：企业镜像 - harbor：Harbor镜像 - jfrog：Jfrog镜像 - cicd：cicd镜像
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets registryName
    *  **参数解释**: 镜像仓库名称 **取值范围**: 字符长度0-128
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
    * @param string|null $registryName **参数解释**: 镜像仓库名称 **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setRegistryName($registryName)
    {
        $this->container['registryName'] = $registryName;
        return $this;
    }

    /**
    * Gets imageSize
    *  **参数解释**: 版本大小 **取值范围**: 大小0-2147483547
    *
    * @return int|null
    */
    public function getImageSize()
    {
        return $this->container['imageSize'];
    }

    /**
    * Sets imageSize
    *
    * @param int|null $imageSize **参数解释**: 版本大小 **取值范围**: 大小0-2147483547
    *
    * @return $this
    */
    public function setImageSize($imageSize)
    {
        $this->container['imageSize'] = $imageSize;
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

