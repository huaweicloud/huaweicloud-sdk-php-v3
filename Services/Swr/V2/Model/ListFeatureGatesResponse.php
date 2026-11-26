<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFeatureGatesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFeatureGatesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableDomainName  是否开启域名管理
    * enableCombinationRetention  老化策略是否支持多条规则
    * enableArtifactScanning  是否支持制品扫描
    * enableArtifactGc  是否支持制品清理
    * enableRepositoryTag  仓库是否支持标签
    * enableNamespaceTag  创建命名空间时是否支持传入标签以及查询命名空间列表是否支持根据标签过滤
    * enableArtifactMetadata  是否支持查询制品的Manifest信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableDomainName' => 'bool',
            'enableCombinationRetention' => 'bool',
            'enableArtifactScanning' => 'bool',
            'enableArtifactGc' => 'bool',
            'enableRepositoryTag' => 'bool',
            'enableNamespaceTag' => 'bool',
            'enableArtifactMetadata' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableDomainName  是否开启域名管理
    * enableCombinationRetention  老化策略是否支持多条规则
    * enableArtifactScanning  是否支持制品扫描
    * enableArtifactGc  是否支持制品清理
    * enableRepositoryTag  仓库是否支持标签
    * enableNamespaceTag  创建命名空间时是否支持传入标签以及查询命名空间列表是否支持根据标签过滤
    * enableArtifactMetadata  是否支持查询制品的Manifest信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableDomainName' => null,
        'enableCombinationRetention' => null,
        'enableArtifactScanning' => null,
        'enableArtifactGc' => null,
        'enableRepositoryTag' => null,
        'enableNamespaceTag' => null,
        'enableArtifactMetadata' => null
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
    * enableDomainName  是否开启域名管理
    * enableCombinationRetention  老化策略是否支持多条规则
    * enableArtifactScanning  是否支持制品扫描
    * enableArtifactGc  是否支持制品清理
    * enableRepositoryTag  仓库是否支持标签
    * enableNamespaceTag  创建命名空间时是否支持传入标签以及查询命名空间列表是否支持根据标签过滤
    * enableArtifactMetadata  是否支持查询制品的Manifest信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableDomainName' => 'enableDomainName',
            'enableCombinationRetention' => 'enableCombinationRetention',
            'enableArtifactScanning' => 'enableArtifactScanning',
            'enableArtifactGc' => 'enableArtifactGc',
            'enableRepositoryTag' => 'enableRepositoryTag',
            'enableNamespaceTag' => 'enableNamespaceTag',
            'enableArtifactMetadata' => 'enableArtifactMetadata'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableDomainName  是否开启域名管理
    * enableCombinationRetention  老化策略是否支持多条规则
    * enableArtifactScanning  是否支持制品扫描
    * enableArtifactGc  是否支持制品清理
    * enableRepositoryTag  仓库是否支持标签
    * enableNamespaceTag  创建命名空间时是否支持传入标签以及查询命名空间列表是否支持根据标签过滤
    * enableArtifactMetadata  是否支持查询制品的Manifest信息
    *
    * @var string[]
    */
    protected static $setters = [
            'enableDomainName' => 'setEnableDomainName',
            'enableCombinationRetention' => 'setEnableCombinationRetention',
            'enableArtifactScanning' => 'setEnableArtifactScanning',
            'enableArtifactGc' => 'setEnableArtifactGc',
            'enableRepositoryTag' => 'setEnableRepositoryTag',
            'enableNamespaceTag' => 'setEnableNamespaceTag',
            'enableArtifactMetadata' => 'setEnableArtifactMetadata'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableDomainName  是否开启域名管理
    * enableCombinationRetention  老化策略是否支持多条规则
    * enableArtifactScanning  是否支持制品扫描
    * enableArtifactGc  是否支持制品清理
    * enableRepositoryTag  仓库是否支持标签
    * enableNamespaceTag  创建命名空间时是否支持传入标签以及查询命名空间列表是否支持根据标签过滤
    * enableArtifactMetadata  是否支持查询制品的Manifest信息
    *
    * @var string[]
    */
    protected static $getters = [
            'enableDomainName' => 'getEnableDomainName',
            'enableCombinationRetention' => 'getEnableCombinationRetention',
            'enableArtifactScanning' => 'getEnableArtifactScanning',
            'enableArtifactGc' => 'getEnableArtifactGc',
            'enableRepositoryTag' => 'getEnableRepositoryTag',
            'enableNamespaceTag' => 'getEnableNamespaceTag',
            'enableArtifactMetadata' => 'getEnableArtifactMetadata'
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
        $this->container['enableDomainName'] = isset($data['enableDomainName']) ? $data['enableDomainName'] : null;
        $this->container['enableCombinationRetention'] = isset($data['enableCombinationRetention']) ? $data['enableCombinationRetention'] : null;
        $this->container['enableArtifactScanning'] = isset($data['enableArtifactScanning']) ? $data['enableArtifactScanning'] : null;
        $this->container['enableArtifactGc'] = isset($data['enableArtifactGc']) ? $data['enableArtifactGc'] : null;
        $this->container['enableRepositoryTag'] = isset($data['enableRepositoryTag']) ? $data['enableRepositoryTag'] : null;
        $this->container['enableNamespaceTag'] = isset($data['enableNamespaceTag']) ? $data['enableNamespaceTag'] : null;
        $this->container['enableArtifactMetadata'] = isset($data['enableArtifactMetadata']) ? $data['enableArtifactMetadata'] : null;
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
    * Gets enableDomainName
    *  是否开启域名管理
    *
    * @return bool|null
    */
    public function getEnableDomainName()
    {
        return $this->container['enableDomainName'];
    }

    /**
    * Sets enableDomainName
    *
    * @param bool|null $enableDomainName 是否开启域名管理
    *
    * @return $this
    */
    public function setEnableDomainName($enableDomainName)
    {
        $this->container['enableDomainName'] = $enableDomainName;
        return $this;
    }

    /**
    * Gets enableCombinationRetention
    *  老化策略是否支持多条规则
    *
    * @return bool|null
    */
    public function getEnableCombinationRetention()
    {
        return $this->container['enableCombinationRetention'];
    }

    /**
    * Sets enableCombinationRetention
    *
    * @param bool|null $enableCombinationRetention 老化策略是否支持多条规则
    *
    * @return $this
    */
    public function setEnableCombinationRetention($enableCombinationRetention)
    {
        $this->container['enableCombinationRetention'] = $enableCombinationRetention;
        return $this;
    }

    /**
    * Gets enableArtifactScanning
    *  是否支持制品扫描
    *
    * @return bool|null
    */
    public function getEnableArtifactScanning()
    {
        return $this->container['enableArtifactScanning'];
    }

    /**
    * Sets enableArtifactScanning
    *
    * @param bool|null $enableArtifactScanning 是否支持制品扫描
    *
    * @return $this
    */
    public function setEnableArtifactScanning($enableArtifactScanning)
    {
        $this->container['enableArtifactScanning'] = $enableArtifactScanning;
        return $this;
    }

    /**
    * Gets enableArtifactGc
    *  是否支持制品清理
    *
    * @return bool|null
    */
    public function getEnableArtifactGc()
    {
        return $this->container['enableArtifactGc'];
    }

    /**
    * Sets enableArtifactGc
    *
    * @param bool|null $enableArtifactGc 是否支持制品清理
    *
    * @return $this
    */
    public function setEnableArtifactGc($enableArtifactGc)
    {
        $this->container['enableArtifactGc'] = $enableArtifactGc;
        return $this;
    }

    /**
    * Gets enableRepositoryTag
    *  仓库是否支持标签
    *
    * @return bool|null
    */
    public function getEnableRepositoryTag()
    {
        return $this->container['enableRepositoryTag'];
    }

    /**
    * Sets enableRepositoryTag
    *
    * @param bool|null $enableRepositoryTag 仓库是否支持标签
    *
    * @return $this
    */
    public function setEnableRepositoryTag($enableRepositoryTag)
    {
        $this->container['enableRepositoryTag'] = $enableRepositoryTag;
        return $this;
    }

    /**
    * Gets enableNamespaceTag
    *  创建命名空间时是否支持传入标签以及查询命名空间列表是否支持根据标签过滤
    *
    * @return bool|null
    */
    public function getEnableNamespaceTag()
    {
        return $this->container['enableNamespaceTag'];
    }

    /**
    * Sets enableNamespaceTag
    *
    * @param bool|null $enableNamespaceTag 创建命名空间时是否支持传入标签以及查询命名空间列表是否支持根据标签过滤
    *
    * @return $this
    */
    public function setEnableNamespaceTag($enableNamespaceTag)
    {
        $this->container['enableNamespaceTag'] = $enableNamespaceTag;
        return $this;
    }

    /**
    * Gets enableArtifactMetadata
    *  是否支持查询制品的Manifest信息
    *
    * @return bool|null
    */
    public function getEnableArtifactMetadata()
    {
        return $this->container['enableArtifactMetadata'];
    }

    /**
    * Sets enableArtifactMetadata
    *
    * @param bool|null $enableArtifactMetadata 是否支持查询制品的Manifest信息
    *
    * @return $this
    */
    public function setEnableArtifactMetadata($enableArtifactMetadata)
    {
        $this->container['enableArtifactMetadata'] = $enableArtifactMetadata;
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

