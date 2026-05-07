<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListUpgradePathsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListUpgradePathsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * versionInfos  **参数解释**: 版本信息详情
    * versionEdges  **参数解释**: 支持的升级路径列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'versionInfos' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\VersionInfosResult[]',
            'versionEdges' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\UpgradePathsResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * versionInfos  **参数解释**: 版本信息详情
    * versionEdges  **参数解释**: 支持的升级路径列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'versionInfos' => null,
        'versionEdges' => null
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
    * versionInfos  **参数解释**: 版本信息详情
    * versionEdges  **参数解释**: 支持的升级路径列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'versionInfos' => 'version_infos',
            'versionEdges' => 'version_edges'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * versionInfos  **参数解释**: 版本信息详情
    * versionEdges  **参数解释**: 支持的升级路径列表
    *
    * @var string[]
    */
    protected static $setters = [
            'versionInfos' => 'setVersionInfos',
            'versionEdges' => 'setVersionEdges'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * versionInfos  **参数解释**: 版本信息详情
    * versionEdges  **参数解释**: 支持的升级路径列表
    *
    * @var string[]
    */
    protected static $getters = [
            'versionInfos' => 'getVersionInfos',
            'versionEdges' => 'getVersionEdges'
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
        $this->container['versionInfos'] = isset($data['versionInfos']) ? $data['versionInfos'] : null;
        $this->container['versionEdges'] = isset($data['versionEdges']) ? $data['versionEdges'] : null;
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
    * Gets versionInfos
    *  **参数解释**: 版本信息详情
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\VersionInfosResult[]|null
    */
    public function getVersionInfos()
    {
        return $this->container['versionInfos'];
    }

    /**
    * Sets versionInfos
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\VersionInfosResult[]|null $versionInfos **参数解释**: 版本信息详情
    *
    * @return $this
    */
    public function setVersionInfos($versionInfos)
    {
        $this->container['versionInfos'] = $versionInfos;
        return $this;
    }

    /**
    * Gets versionEdges
    *  **参数解释**: 支持的升级路径列表
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\UpgradePathsResult[]|null
    */
    public function getVersionEdges()
    {
        return $this->container['versionEdges'];
    }

    /**
    * Sets versionEdges
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\UpgradePathsResult[]|null $versionEdges **参数解释**: 支持的升级路径列表
    *
    * @return $this
    */
    public function setVersionEdges($versionEdges)
    {
        $this->container['versionEdges'] = $versionEdges;
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

