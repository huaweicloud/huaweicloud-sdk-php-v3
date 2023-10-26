<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowImageWatermarkByAddressRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowImageWatermarkByAddressRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionId  项目所在region的id，如：xx-xx-1。
    * srcFile  待提取文字暗水印的图片地址，当前只支持华为云OBS，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.png**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.png为对象全路径名。
    * markLen  指定待提取水印的长度，最小0，最大32.。设置后可以提升水印提取性能。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionId' => 'string',
            'srcFile' => 'string',
            'markLen' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionId  项目所在region的id，如：xx-xx-1。
    * srcFile  待提取文字暗水印的图片地址，当前只支持华为云OBS，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.png**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.png为对象全路径名。
    * markLen  指定待提取水印的长度，最小0，最大32.。设置后可以提升水印提取性能。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionId' => null,
        'srcFile' => null,
        'markLen' => 'int32'
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
    * regionId  项目所在region的id，如：xx-xx-1。
    * srcFile  待提取文字暗水印的图片地址，当前只支持华为云OBS，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.png**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.png为对象全路径名。
    * markLen  指定待提取水印的长度，最小0，最大32.。设置后可以提升水印提取性能。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionId' => 'region_id',
            'srcFile' => 'src_file',
            'markLen' => 'mark_len'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionId  项目所在region的id，如：xx-xx-1。
    * srcFile  待提取文字暗水印的图片地址，当前只支持华为云OBS，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.png**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.png为对象全路径名。
    * markLen  指定待提取水印的长度，最小0，最大32.。设置后可以提升水印提取性能。
    *
    * @var string[]
    */
    protected static $setters = [
            'regionId' => 'setRegionId',
            'srcFile' => 'setSrcFile',
            'markLen' => 'setMarkLen'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionId  项目所在region的id，如：xx-xx-1。
    * srcFile  待提取文字暗水印的图片地址，当前只支持华为云OBS，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.png**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.png为对象全路径名。
    * markLen  指定待提取水印的长度，最小0，最大32.。设置后可以提升水印提取性能。
    *
    * @var string[]
    */
    protected static $getters = [
            'regionId' => 'getRegionId',
            'srcFile' => 'getSrcFile',
            'markLen' => 'getMarkLen'
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
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['srcFile'] = isset($data['srcFile']) ? $data['srcFile'] : null;
        $this->container['markLen'] = isset($data['markLen']) ? $data['markLen'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
        if ($this->container['srcFile'] === null) {
            $invalidProperties[] = "'srcFile' can't be null";
        }
            if (!is_null($this->container['markLen']) && ($this->container['markLen'] > 32)) {
                $invalidProperties[] = "invalid value for 'markLen', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['markLen']) && ($this->container['markLen'] < 0)) {
                $invalidProperties[] = "invalid value for 'markLen', must be bigger than or equal to 0.";
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
    * Gets regionId
    *  项目所在region的id，如：xx-xx-1。
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId 项目所在region的id，如：xx-xx-1。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets srcFile
    *  待提取文字暗水印的图片地址，当前只支持华为云OBS，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.png**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.png为对象全路径名。
    *
    * @return string
    */
    public function getSrcFile()
    {
        return $this->container['srcFile'];
    }

    /**
    * Sets srcFile
    *
    * @param string $srcFile 待提取文字暗水印的图片地址，当前只支持华为云OBS，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.png**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.png为对象全路径名。
    *
    * @return $this
    */
    public function setSrcFile($srcFile)
    {
        $this->container['srcFile'] = $srcFile;
        return $this;
    }

    /**
    * Gets markLen
    *  指定待提取水印的长度，最小0，最大32.。设置后可以提升水印提取性能。
    *
    * @return int|null
    */
    public function getMarkLen()
    {
        return $this->container['markLen'];
    }

    /**
    * Sets markLen
    *
    * @param int|null $markLen 指定待提取水印的长度，最小0，最大32.。设置后可以提升水印提取性能。
    *
    * @return $this
    */
    public function setMarkLen($markLen)
    {
        $this->container['markLen'] = $markLen;
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

