<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCdnInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCdnInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSameCloudType  是否相同云类型
    * isDownloadAvailable  是否下载可用
    * checkedKeys  返回的已检查的对象数组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSameCloudType' => 'bool',
            'isDownloadAvailable' => 'bool',
            'checkedKeys' => '\HuaweiCloud\SDK\Oms\V2\Model\CheckedKey[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSameCloudType  是否相同云类型
    * isDownloadAvailable  是否下载可用
    * checkedKeys  返回的已检查的对象数组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSameCloudType' => null,
        'isDownloadAvailable' => null,
        'checkedKeys' => null
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
    * isSameCloudType  是否相同云类型
    * isDownloadAvailable  是否下载可用
    * checkedKeys  返回的已检查的对象数组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSameCloudType' => 'is_same_cloud_type',
            'isDownloadAvailable' => 'is_download_available',
            'checkedKeys' => 'checked_keys'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSameCloudType  是否相同云类型
    * isDownloadAvailable  是否下载可用
    * checkedKeys  返回的已检查的对象数组
    *
    * @var string[]
    */
    protected static $setters = [
            'isSameCloudType' => 'setIsSameCloudType',
            'isDownloadAvailable' => 'setIsDownloadAvailable',
            'checkedKeys' => 'setCheckedKeys'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSameCloudType  是否相同云类型
    * isDownloadAvailable  是否下载可用
    * checkedKeys  返回的已检查的对象数组
    *
    * @var string[]
    */
    protected static $getters = [
            'isSameCloudType' => 'getIsSameCloudType',
            'isDownloadAvailable' => 'getIsDownloadAvailable',
            'checkedKeys' => 'getCheckedKeys'
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
        $this->container['isSameCloudType'] = isset($data['isSameCloudType']) ? $data['isSameCloudType'] : null;
        $this->container['isDownloadAvailable'] = isset($data['isDownloadAvailable']) ? $data['isDownloadAvailable'] : null;
        $this->container['checkedKeys'] = isset($data['checkedKeys']) ? $data['checkedKeys'] : null;
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
    * Gets isSameCloudType
    *  是否相同云类型
    *
    * @return bool|null
    */
    public function getIsSameCloudType()
    {
        return $this->container['isSameCloudType'];
    }

    /**
    * Sets isSameCloudType
    *
    * @param bool|null $isSameCloudType 是否相同云类型
    *
    * @return $this
    */
    public function setIsSameCloudType($isSameCloudType)
    {
        $this->container['isSameCloudType'] = $isSameCloudType;
        return $this;
    }

    /**
    * Gets isDownloadAvailable
    *  是否下载可用
    *
    * @return bool|null
    */
    public function getIsDownloadAvailable()
    {
        return $this->container['isDownloadAvailable'];
    }

    /**
    * Sets isDownloadAvailable
    *
    * @param bool|null $isDownloadAvailable 是否下载可用
    *
    * @return $this
    */
    public function setIsDownloadAvailable($isDownloadAvailable)
    {
        $this->container['isDownloadAvailable'] = $isDownloadAvailable;
        return $this;
    }

    /**
    * Gets checkedKeys
    *  返回的已检查的对象数组
    *
    * @return \HuaweiCloud\SDK\Oms\V2\Model\CheckedKey[]|null
    */
    public function getCheckedKeys()
    {
        return $this->container['checkedKeys'];
    }

    /**
    * Sets checkedKeys
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\CheckedKey[]|null $checkedKeys 返回的已检查的对象数组
    *
    * @return $this
    */
    public function setCheckedKeys($checkedKeys)
    {
        $this->container['checkedKeys'] = $checkedKeys;
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

