<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EngineAssetInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EngineAssetInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * relativePath  引擎资产的相对路径信息
    * assetType  引擎资产的类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'relativePath' => 'string',
            'assetType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * relativePath  引擎资产的相对路径信息
    * assetType  引擎资产的类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'relativePath' => null,
        'assetType' => null
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
    * relativePath  引擎资产的相对路径信息
    * assetType  引擎资产的类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'relativePath' => 'relative_path',
            'assetType' => 'asset_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * relativePath  引擎资产的相对路径信息
    * assetType  引擎资产的类型
    *
    * @var string[]
    */
    protected static $setters = [
            'relativePath' => 'setRelativePath',
            'assetType' => 'setAssetType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * relativePath  引擎资产的相对路径信息
    * assetType  引擎资产的类型
    *
    * @var string[]
    */
    protected static $getters = [
            'relativePath' => 'getRelativePath',
            'assetType' => 'getAssetType'
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
        $this->container['relativePath'] = isset($data['relativePath']) ? $data['relativePath'] : null;
        $this->container['assetType'] = isset($data['assetType']) ? $data['assetType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['relativePath']) && (mb_strlen($this->container['relativePath']) > 1024)) {
                $invalidProperties[] = "invalid value for 'relativePath', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['relativePath']) && (mb_strlen($this->container['relativePath']) < 0)) {
                $invalidProperties[] = "invalid value for 'relativePath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetType']) && (mb_strlen($this->container['assetType']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetType']) && (mb_strlen($this->container['assetType']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetType', the character length must be bigger than or equal to 0.";
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
    * Gets relativePath
    *  引擎资产的相对路径信息
    *
    * @return string|null
    */
    public function getRelativePath()
    {
        return $this->container['relativePath'];
    }

    /**
    * Sets relativePath
    *
    * @param string|null $relativePath 引擎资产的相对路径信息
    *
    * @return $this
    */
    public function setRelativePath($relativePath)
    {
        $this->container['relativePath'] = $relativePath;
        return $this;
    }

    /**
    * Gets assetType
    *  引擎资产的类型
    *
    * @return string|null
    */
    public function getAssetType()
    {
        return $this->container['assetType'];
    }

    /**
    * Sets assetType
    *
    * @param string|null $assetType 引擎资产的类型
    *
    * @return $this
    */
    public function setAssetType($assetType)
    {
        $this->container['assetType'] = $assetType;
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

