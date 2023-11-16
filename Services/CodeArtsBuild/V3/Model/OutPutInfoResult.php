<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OutPutInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OutPutInfo_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * packageInfo  packageInfo
    * packageInfos  二方包信息
    * imageInfos  镜像包信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'packageInfo' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\OutPutResult',
            'packageInfos' => 'map[string,\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\OutPutResult]',
            'imageInfos' => 'map[string,\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\OutPutResult]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * packageInfo  packageInfo
    * packageInfos  二方包信息
    * imageInfos  镜像包信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'packageInfo' => null,
        'packageInfos' => null,
        'imageInfos' => null
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
    * packageInfo  packageInfo
    * packageInfos  二方包信息
    * imageInfos  镜像包信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'packageInfo' => 'package_info',
            'packageInfos' => 'package_infos',
            'imageInfos' => 'image_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * packageInfo  packageInfo
    * packageInfos  二方包信息
    * imageInfos  镜像包信息
    *
    * @var string[]
    */
    protected static $setters = [
            'packageInfo' => 'setPackageInfo',
            'packageInfos' => 'setPackageInfos',
            'imageInfos' => 'setImageInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * packageInfo  packageInfo
    * packageInfos  二方包信息
    * imageInfos  镜像包信息
    *
    * @var string[]
    */
    protected static $getters = [
            'packageInfo' => 'getPackageInfo',
            'packageInfos' => 'getPackageInfos',
            'imageInfos' => 'getImageInfos'
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
        $this->container['packageInfo'] = isset($data['packageInfo']) ? $data['packageInfo'] : null;
        $this->container['packageInfos'] = isset($data['packageInfos']) ? $data['packageInfos'] : null;
        $this->container['imageInfos'] = isset($data['imageInfos']) ? $data['imageInfos'] : null;
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
    * Gets packageInfo
    *  packageInfo
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\OutPutResult|null
    */
    public function getPackageInfo()
    {
        return $this->container['packageInfo'];
    }

    /**
    * Sets packageInfo
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\OutPutResult|null $packageInfo packageInfo
    *
    * @return $this
    */
    public function setPackageInfo($packageInfo)
    {
        $this->container['packageInfo'] = $packageInfo;
        return $this;
    }

    /**
    * Gets packageInfos
    *  二方包信息
    *
    * @return map[string,\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\OutPutResult]|null
    */
    public function getPackageInfos()
    {
        return $this->container['packageInfos'];
    }

    /**
    * Sets packageInfos
    *
    * @param map[string,\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\OutPutResult]|null $packageInfos 二方包信息
    *
    * @return $this
    */
    public function setPackageInfos($packageInfos)
    {
        $this->container['packageInfos'] = $packageInfos;
        return $this;
    }

    /**
    * Gets imageInfos
    *  镜像包信息
    *
    * @return map[string,\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\OutPutResult]|null
    */
    public function getImageInfos()
    {
        return $this->container['imageInfos'];
    }

    /**
    * Sets imageInfos
    *
    * @param map[string,\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\OutPutResult]|null $imageInfos 镜像包信息
    *
    * @return $this
    */
    public function setImageInfos($imageInfos)
    {
        $this->container['imageInfos'] = $imageInfos;
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

