<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskOutPut implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskOutPut';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * obsInfo  obsInfo
    * metaData  metaData
    * fileUrl  输出文件播放地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'obsInfo' => '\HuaweiCloud\SDK\Vod\V1\Model\ObsInfo',
            'metaData' => '\HuaweiCloud\SDK\Vod\V1\Model\ObjectMetaData',
            'fileUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * obsInfo  obsInfo
    * metaData  metaData
    * fileUrl  输出文件播放地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'obsInfo' => null,
        'metaData' => null,
        'fileUrl' => null
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
    * obsInfo  obsInfo
    * metaData  metaData
    * fileUrl  输出文件播放地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'obsInfo' => 'obs_info',
            'metaData' => 'meta_data',
            'fileUrl' => 'file_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * obsInfo  obsInfo
    * metaData  metaData
    * fileUrl  输出文件播放地址
    *
    * @var string[]
    */
    protected static $setters = [
            'obsInfo' => 'setObsInfo',
            'metaData' => 'setMetaData',
            'fileUrl' => 'setFileUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * obsInfo  obsInfo
    * metaData  metaData
    * fileUrl  输出文件播放地址
    *
    * @var string[]
    */
    protected static $getters = [
            'obsInfo' => 'getObsInfo',
            'metaData' => 'getMetaData',
            'fileUrl' => 'getFileUrl'
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
        $this->container['obsInfo'] = isset($data['obsInfo']) ? $data['obsInfo'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
        $this->container['fileUrl'] = isset($data['fileUrl']) ? $data['fileUrl'] : null;
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
    * Gets obsInfo
    *  obsInfo
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo|null
    */
    public function getObsInfo()
    {
        return $this->container['obsInfo'];
    }

    /**
    * Sets obsInfo
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo|null $obsInfo obsInfo
    *
    * @return $this
    */
    public function setObsInfo($obsInfo)
    {
        $this->container['obsInfo'] = $obsInfo;
        return $this;
    }

    /**
    * Gets metaData
    *  metaData
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ObjectMetaData|null
    */
    public function getMetaData()
    {
        return $this->container['metaData'];
    }

    /**
    * Sets metaData
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ObjectMetaData|null $metaData metaData
    *
    * @return $this
    */
    public function setMetaData($metaData)
    {
        $this->container['metaData'] = $metaData;
        return $this;
    }

    /**
    * Gets fileUrl
    *  输出文件播放地址
    *
    * @return string|null
    */
    public function getFileUrl()
    {
        return $this->container['fileUrl'];
    }

    /**
    * Sets fileUrl
    *
    * @param string|null $fileUrl 输出文件播放地址
    *
    * @return $this
    */
    public function setFileUrl($fileUrl)
    {
        $this->container['fileUrl'] = $fileUrl;
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

