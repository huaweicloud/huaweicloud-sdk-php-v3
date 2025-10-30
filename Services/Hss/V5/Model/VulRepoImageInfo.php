<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulRepoImageInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulRepoImageInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-65535位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * appName  **参数解释**: 应用名称 **取值范围**: 字符长度0-65535位
    * version  **参数解释**: 版本信息 **取值范围**: 字符长度0-65535位
    * tagCount  **参数解释**: 镜像版本数 **取值范围**: 最小值0，最大值65535
    * imageType  **参数解释**: 镜像类型 **取值范围**: - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。
    * dataList  **参数解释**: tag版本总数 **取值范围**: 最小值0，最大值65535
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'imageId' => 'string',
            'imageName' => 'string',
            'appName' => 'string',
            'version' => 'string',
            'tagCount' => 'int',
            'imageType' => 'string',
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\VulRepoImagesTagInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-65535位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * appName  **参数解释**: 应用名称 **取值范围**: 字符长度0-65535位
    * version  **参数解释**: 版本信息 **取值范围**: 字符长度0-65535位
    * tagCount  **参数解释**: 镜像版本数 **取值范围**: 最小值0，最大值65535
    * imageType  **参数解释**: 镜像类型 **取值范围**: - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。
    * dataList  **参数解释**: tag版本总数 **取值范围**: 最小值0，最大值65535
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'imageId' => null,
        'imageName' => null,
        'appName' => null,
        'version' => null,
        'tagCount' => 'int32',
        'imageType' => null,
        'dataList' => null
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
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-65535位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * appName  **参数解释**: 应用名称 **取值范围**: 字符长度0-65535位
    * version  **参数解释**: 版本信息 **取值范围**: 字符长度0-65535位
    * tagCount  **参数解释**: 镜像版本数 **取值范围**: 最小值0，最大值65535
    * imageType  **参数解释**: 镜像类型 **取值范围**: - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。
    * dataList  **参数解释**: tag版本总数 **取值范围**: 最小值0，最大值65535
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'imageId' => 'image_id',
            'imageName' => 'image_name',
            'appName' => 'app_name',
            'version' => 'version',
            'tagCount' => 'tag_count',
            'imageType' => 'image_type',
            'dataList' => 'data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-65535位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * appName  **参数解释**: 应用名称 **取值范围**: 字符长度0-65535位
    * version  **参数解释**: 版本信息 **取值范围**: 字符长度0-65535位
    * tagCount  **参数解释**: 镜像版本数 **取值范围**: 最小值0，最大值65535
    * imageType  **参数解释**: 镜像类型 **取值范围**: - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。
    * dataList  **参数解释**: tag版本总数 **取值范围**: 最小值0，最大值65535
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'imageId' => 'setImageId',
            'imageName' => 'setImageName',
            'appName' => 'setAppName',
            'version' => 'setVersion',
            'tagCount' => 'setTagCount',
            'imageType' => 'setImageType',
            'dataList' => 'setDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-65535位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * appName  **参数解释**: 应用名称 **取值范围**: 字符长度0-65535位
    * version  **参数解释**: 版本信息 **取值范围**: 字符长度0-65535位
    * tagCount  **参数解释**: 镜像版本数 **取值范围**: 最小值0，最大值65535
    * imageType  **参数解释**: 镜像类型 **取值范围**: - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。
    * dataList  **参数解释**: tag版本总数 **取值范围**: 最小值0，最大值65535
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'imageId' => 'getImageId',
            'imageName' => 'getImageName',
            'appName' => 'getAppName',
            'version' => 'getVersion',
            'tagCount' => 'getTagCount',
            'imageType' => 'getImageType',
            'dataList' => 'getDataList'
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
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['tagCount'] = isset($data['tagCount']) ? $data['tagCount'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 65535)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 65535)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 0)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 65535)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tagCount']) && ($this->container['tagCount'] > 65535)) {
                $invalidProperties[] = "invalid value for 'tagCount', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['tagCount']) && ($this->container['tagCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'tagCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) > 32)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 1.";
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
    *  **参数解释**: 组织名称 **取值范围**: 字符长度0-65535位
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
    * @param string|null $namespace **参数解释**: 组织名称 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释**: 镜像id **取值范围**: 字符长度0-65535位
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
    * @param string|null $imageId **参数解释**: 镜像id **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets imageName
    *  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
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
    * @param string|null $imageName **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets appName
    *  **参数解释**: 应用名称 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName **参数解释**: 应用名称 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**: 版本信息 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释**: 版本信息 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets tagCount
    *  **参数解释**: 镜像版本数 **取值范围**: 最小值0，最大值65535
    *
    * @return int|null
    */
    public function getTagCount()
    {
        return $this->container['tagCount'];
    }

    /**
    * Sets tagCount
    *
    * @param int|null $tagCount **参数解释**: 镜像版本数 **取值范围**: 最小值0，最大值65535
    *
    * @return $this
    */
    public function setTagCount($tagCount)
    {
        $this->container['tagCount'] = $tagCount;
        return $this;
    }

    /**
    * Gets imageType
    *  **参数解释**: 镜像类型 **取值范围**: - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。
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
    * @param string|null $imageType **参数解释**: 镜像类型 **取值范围**: - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets dataList
    *  **参数解释**: tag版本总数 **取值范围**: 最小值0，最大值65535
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulRepoImagesTagInfo[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulRepoImagesTagInfo[]|null $dataList **参数解释**: tag版本总数 **取值范围**: 最小值0，最大值65535
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
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

