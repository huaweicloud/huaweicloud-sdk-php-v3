<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ArtifactsPublish implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ArtifactsPublish';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isCkpt  是否是中间产物，false-是模型产物，true-是中间产物
    * artifactId  断点ID,ckpt发布时使用
    * assetName  模型产物发布后资产名称，默认{源模型名字}-{训练类型}-{训练时间}
    * visibility  全局可见性，用来控制资产是当前空间可见或者全部空间可见，取值current|all。
    * description  发布资产描述信息，{任务名}的最终产出模型
    * publishAssetType  模型发布方式
    * assetSourceType  资产来源
    * assetCode  选择模型。
    * assetVersion  版本号。
    * versionDescription  版本描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isCkpt' => 'bool',
            'artifactId' => 'string',
            'assetName' => 'string',
            'visibility' => 'string',
            'description' => 'string',
            'publishAssetType' => 'string',
            'assetSourceType' => 'string',
            'assetCode' => 'string',
            'assetVersion' => 'string',
            'versionDescription' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isCkpt  是否是中间产物，false-是模型产物，true-是中间产物
    * artifactId  断点ID,ckpt发布时使用
    * assetName  模型产物发布后资产名称，默认{源模型名字}-{训练类型}-{训练时间}
    * visibility  全局可见性，用来控制资产是当前空间可见或者全部空间可见，取值current|all。
    * description  发布资产描述信息，{任务名}的最终产出模型
    * publishAssetType  模型发布方式
    * assetSourceType  资产来源
    * assetCode  选择模型。
    * assetVersion  版本号。
    * versionDescription  版本描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isCkpt' => null,
        'artifactId' => null,
        'assetName' => null,
        'visibility' => null,
        'description' => null,
        'publishAssetType' => null,
        'assetSourceType' => null,
        'assetCode' => null,
        'assetVersion' => null,
        'versionDescription' => null
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
    * isCkpt  是否是中间产物，false-是模型产物，true-是中间产物
    * artifactId  断点ID,ckpt发布时使用
    * assetName  模型产物发布后资产名称，默认{源模型名字}-{训练类型}-{训练时间}
    * visibility  全局可见性，用来控制资产是当前空间可见或者全部空间可见，取值current|all。
    * description  发布资产描述信息，{任务名}的最终产出模型
    * publishAssetType  模型发布方式
    * assetSourceType  资产来源
    * assetCode  选择模型。
    * assetVersion  版本号。
    * versionDescription  版本描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isCkpt' => 'is_ckpt',
            'artifactId' => 'artifact_id',
            'assetName' => 'asset_name',
            'visibility' => 'visibility',
            'description' => 'description',
            'publishAssetType' => 'publish_asset_type',
            'assetSourceType' => 'asset_source_type',
            'assetCode' => 'asset_code',
            'assetVersion' => 'asset_version',
            'versionDescription' => 'version_description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isCkpt  是否是中间产物，false-是模型产物，true-是中间产物
    * artifactId  断点ID,ckpt发布时使用
    * assetName  模型产物发布后资产名称，默认{源模型名字}-{训练类型}-{训练时间}
    * visibility  全局可见性，用来控制资产是当前空间可见或者全部空间可见，取值current|all。
    * description  发布资产描述信息，{任务名}的最终产出模型
    * publishAssetType  模型发布方式
    * assetSourceType  资产来源
    * assetCode  选择模型。
    * assetVersion  版本号。
    * versionDescription  版本描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'isCkpt' => 'setIsCkpt',
            'artifactId' => 'setArtifactId',
            'assetName' => 'setAssetName',
            'visibility' => 'setVisibility',
            'description' => 'setDescription',
            'publishAssetType' => 'setPublishAssetType',
            'assetSourceType' => 'setAssetSourceType',
            'assetCode' => 'setAssetCode',
            'assetVersion' => 'setAssetVersion',
            'versionDescription' => 'setVersionDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isCkpt  是否是中间产物，false-是模型产物，true-是中间产物
    * artifactId  断点ID,ckpt发布时使用
    * assetName  模型产物发布后资产名称，默认{源模型名字}-{训练类型}-{训练时间}
    * visibility  全局可见性，用来控制资产是当前空间可见或者全部空间可见，取值current|all。
    * description  发布资产描述信息，{任务名}的最终产出模型
    * publishAssetType  模型发布方式
    * assetSourceType  资产来源
    * assetCode  选择模型。
    * assetVersion  版本号。
    * versionDescription  版本描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'isCkpt' => 'getIsCkpt',
            'artifactId' => 'getArtifactId',
            'assetName' => 'getAssetName',
            'visibility' => 'getVisibility',
            'description' => 'getDescription',
            'publishAssetType' => 'getPublishAssetType',
            'assetSourceType' => 'getAssetSourceType',
            'assetCode' => 'getAssetCode',
            'assetVersion' => 'getAssetVersion',
            'versionDescription' => 'getVersionDescription'
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
        $this->container['isCkpt'] = isset($data['isCkpt']) ? $data['isCkpt'] : null;
        $this->container['artifactId'] = isset($data['artifactId']) ? $data['artifactId'] : null;
        $this->container['assetName'] = isset($data['assetName']) ? $data['assetName'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['publishAssetType'] = isset($data['publishAssetType']) ? $data['publishAssetType'] : null;
        $this->container['assetSourceType'] = isset($data['assetSourceType']) ? $data['assetSourceType'] : null;
        $this->container['assetCode'] = isset($data['assetCode']) ? $data['assetCode'] : null;
        $this->container['assetVersion'] = isset($data['assetVersion']) ? $data['assetVersion'] : null;
        $this->container['versionDescription'] = isset($data['versionDescription']) ? $data['versionDescription'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['artifactId']) && (mb_strlen($this->container['artifactId']) > 100)) {
                $invalidProperties[] = "invalid value for 'artifactId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['artifactId']) && (mb_strlen($this->container['artifactId']) < 0)) {
                $invalidProperties[] = "invalid value for 'artifactId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetName']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9-_.]{1,128}$/", $this->container['assetName'])) {
                $invalidProperties[] = "invalid value for 'assetName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9-_.]{1,128}$/.";
            }
            if (!is_null($this->container['visibility']) && !preg_match("/current|all/", $this->container['visibility'])) {
                $invalidProperties[] = "invalid value for 'visibility', must be conform to the pattern /current|all/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publishAssetType']) && !preg_match("/NEW_ASSET|NEW_VERSION/", $this->container['publishAssetType'])) {
                $invalidProperties[] = "invalid value for 'publishAssetType', must be conform to the pattern /NEW_ASSET|NEW_VERSION/.";
            }
            if (!is_null($this->container['assetSourceType']) && !preg_match("/preset|preset_train|custom_train/", $this->container['assetSourceType'])) {
                $invalidProperties[] = "invalid value for 'assetSourceType', must be conform to the pattern /preset|preset_train|custom_train/.";
            }
            if (!is_null($this->container['assetCode']) && (mb_strlen($this->container['assetCode']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetCode', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetCode']) && (mb_strlen($this->container['assetCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetVersion']) && (mb_strlen($this->container['assetVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetVersion']) && (mb_strlen($this->container['assetVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['versionDescription']) && (mb_strlen($this->container['versionDescription']) > 256)) {
                $invalidProperties[] = "invalid value for 'versionDescription', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['versionDescription']) && (mb_strlen($this->container['versionDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'versionDescription', the character length must be bigger than or equal to 0.";
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
    * Gets isCkpt
    *  是否是中间产物，false-是模型产物，true-是中间产物
    *
    * @return bool|null
    */
    public function getIsCkpt()
    {
        return $this->container['isCkpt'];
    }

    /**
    * Sets isCkpt
    *
    * @param bool|null $isCkpt 是否是中间产物，false-是模型产物，true-是中间产物
    *
    * @return $this
    */
    public function setIsCkpt($isCkpt)
    {
        $this->container['isCkpt'] = $isCkpt;
        return $this;
    }

    /**
    * Gets artifactId
    *  断点ID,ckpt发布时使用
    *
    * @return string|null
    */
    public function getArtifactId()
    {
        return $this->container['artifactId'];
    }

    /**
    * Sets artifactId
    *
    * @param string|null $artifactId 断点ID,ckpt发布时使用
    *
    * @return $this
    */
    public function setArtifactId($artifactId)
    {
        $this->container['artifactId'] = $artifactId;
        return $this;
    }

    /**
    * Gets assetName
    *  模型产物发布后资产名称，默认{源模型名字}-{训练类型}-{训练时间}
    *
    * @return string|null
    */
    public function getAssetName()
    {
        return $this->container['assetName'];
    }

    /**
    * Sets assetName
    *
    * @param string|null $assetName 模型产物发布后资产名称，默认{源模型名字}-{训练类型}-{训练时间}
    *
    * @return $this
    */
    public function setAssetName($assetName)
    {
        $this->container['assetName'] = $assetName;
        return $this;
    }

    /**
    * Gets visibility
    *  全局可见性，用来控制资产是当前空间可见或者全部空间可见，取值current|all。
    *
    * @return string|null
    */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
    * Sets visibility
    *
    * @param string|null $visibility 全局可见性，用来控制资产是当前空间可见或者全部空间可见，取值current|all。
    *
    * @return $this
    */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;
        return $this;
    }

    /**
    * Gets description
    *  发布资产描述信息，{任务名}的最终产出模型
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 发布资产描述信息，{任务名}的最终产出模型
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets publishAssetType
    *  模型发布方式
    *
    * @return string|null
    */
    public function getPublishAssetType()
    {
        return $this->container['publishAssetType'];
    }

    /**
    * Sets publishAssetType
    *
    * @param string|null $publishAssetType 模型发布方式
    *
    * @return $this
    */
    public function setPublishAssetType($publishAssetType)
    {
        $this->container['publishAssetType'] = $publishAssetType;
        return $this;
    }

    /**
    * Gets assetSourceType
    *  资产来源
    *
    * @return string|null
    */
    public function getAssetSourceType()
    {
        return $this->container['assetSourceType'];
    }

    /**
    * Sets assetSourceType
    *
    * @param string|null $assetSourceType 资产来源
    *
    * @return $this
    */
    public function setAssetSourceType($assetSourceType)
    {
        $this->container['assetSourceType'] = $assetSourceType;
        return $this;
    }

    /**
    * Gets assetCode
    *  选择模型。
    *
    * @return string|null
    */
    public function getAssetCode()
    {
        return $this->container['assetCode'];
    }

    /**
    * Sets assetCode
    *
    * @param string|null $assetCode 选择模型。
    *
    * @return $this
    */
    public function setAssetCode($assetCode)
    {
        $this->container['assetCode'] = $assetCode;
        return $this;
    }

    /**
    * Gets assetVersion
    *  版本号。
    *
    * @return string|null
    */
    public function getAssetVersion()
    {
        return $this->container['assetVersion'];
    }

    /**
    * Sets assetVersion
    *
    * @param string|null $assetVersion 版本号。
    *
    * @return $this
    */
    public function setAssetVersion($assetVersion)
    {
        $this->container['assetVersion'] = $assetVersion;
        return $this;
    }

    /**
    * Gets versionDescription
    *  版本描述。
    *
    * @return string|null
    */
    public function getVersionDescription()
    {
        return $this->container['versionDescription'];
    }

    /**
    * Sets versionDescription
    *
    * @param string|null $versionDescription 版本描述。
    *
    * @return $this
    */
    public function setVersionDescription($versionDescription)
    {
        $this->container['versionDescription'] = $versionDescription;
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

