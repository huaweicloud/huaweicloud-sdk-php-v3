<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListImagesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListImagesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * needUploadUpgradePlugin  是否需要上传升级后版本的插件。
    * imageInfoList  imageInfoList
    * totalSize  目标镜像数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'needUploadUpgradePlugin' => 'bool',
            'imageInfoList' => '\HuaweiCloud\SDK\Css\V1\Model\GetTargetImageIdDetail[]',
            'totalSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * needUploadUpgradePlugin  是否需要上传升级后版本的插件。
    * imageInfoList  imageInfoList
    * totalSize  目标镜像数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'needUploadUpgradePlugin' => null,
        'imageInfoList' => null,
        'totalSize' => null
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
    * needUploadUpgradePlugin  是否需要上传升级后版本的插件。
    * imageInfoList  imageInfoList
    * totalSize  目标镜像数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'needUploadUpgradePlugin' => 'needUploadUpgradePlugin',
            'imageInfoList' => 'imageInfoList',
            'totalSize' => 'totalSize'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * needUploadUpgradePlugin  是否需要上传升级后版本的插件。
    * imageInfoList  imageInfoList
    * totalSize  目标镜像数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'needUploadUpgradePlugin' => 'setNeedUploadUpgradePlugin',
            'imageInfoList' => 'setImageInfoList',
            'totalSize' => 'setTotalSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * needUploadUpgradePlugin  是否需要上传升级后版本的插件。
    * imageInfoList  imageInfoList
    * totalSize  目标镜像数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'needUploadUpgradePlugin' => 'getNeedUploadUpgradePlugin',
            'imageInfoList' => 'getImageInfoList',
            'totalSize' => 'getTotalSize'
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
        $this->container['needUploadUpgradePlugin'] = isset($data['needUploadUpgradePlugin']) ? $data['needUploadUpgradePlugin'] : null;
        $this->container['imageInfoList'] = isset($data['imageInfoList']) ? $data['imageInfoList'] : null;
        $this->container['totalSize'] = isset($data['totalSize']) ? $data['totalSize'] : null;
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
    * Gets needUploadUpgradePlugin
    *  是否需要上传升级后版本的插件。
    *
    * @return bool|null
    */
    public function getNeedUploadUpgradePlugin()
    {
        return $this->container['needUploadUpgradePlugin'];
    }

    /**
    * Sets needUploadUpgradePlugin
    *
    * @param bool|null $needUploadUpgradePlugin 是否需要上传升级后版本的插件。
    *
    * @return $this
    */
    public function setNeedUploadUpgradePlugin($needUploadUpgradePlugin)
    {
        $this->container['needUploadUpgradePlugin'] = $needUploadUpgradePlugin;
        return $this;
    }

    /**
    * Gets imageInfoList
    *  imageInfoList
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\GetTargetImageIdDetail[]|null
    */
    public function getImageInfoList()
    {
        return $this->container['imageInfoList'];
    }

    /**
    * Sets imageInfoList
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\GetTargetImageIdDetail[]|null $imageInfoList imageInfoList
    *
    * @return $this
    */
    public function setImageInfoList($imageInfoList)
    {
        $this->container['imageInfoList'] = $imageInfoList;
        return $this;
    }

    /**
    * Gets totalSize
    *  目标镜像数量。
    *
    * @return int|null
    */
    public function getTotalSize()
    {
        return $this->container['totalSize'];
    }

    /**
    * Sets totalSize
    *
    * @param int|null $totalSize 目标镜像数量。
    *
    * @return $this
    */
    public function setTotalSize($totalSize)
    {
        $this->container['totalSize'] = $totalSize;
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

