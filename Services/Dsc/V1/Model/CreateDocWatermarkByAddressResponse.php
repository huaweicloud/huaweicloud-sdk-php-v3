<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDocWatermarkByAddressResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDocWatermarkByAddressResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionId  当前项目所在region的id，如：xx-xx-1。
    * watermarkedFile  添加水印后的文档地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.doc**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.doc为对象全路径名。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionId' => 'string',
            'watermarkedFile' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionId  当前项目所在region的id，如：xx-xx-1。
    * watermarkedFile  添加水印后的文档地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.doc**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.doc为对象全路径名。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionId' => null,
        'watermarkedFile' => null
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
    * regionId  当前项目所在region的id，如：xx-xx-1。
    * watermarkedFile  添加水印后的文档地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.doc**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.doc为对象全路径名。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionId' => 'region_id',
            'watermarkedFile' => 'watermarked_file'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionId  当前项目所在region的id，如：xx-xx-1。
    * watermarkedFile  添加水印后的文档地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.doc**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.doc为对象全路径名。
    *
    * @var string[]
    */
    protected static $setters = [
            'regionId' => 'setRegionId',
            'watermarkedFile' => 'setWatermarkedFile'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionId  当前项目所在region的id，如：xx-xx-1。
    * watermarkedFile  添加水印后的文档地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.doc**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.doc为对象全路径名。
    *
    * @var string[]
    */
    protected static $getters = [
            'regionId' => 'getRegionId',
            'watermarkedFile' => 'getWatermarkedFile'
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
        $this->container['watermarkedFile'] = isset($data['watermarkedFile']) ? $data['watermarkedFile'] : null;
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
    * Gets regionId
    *  当前项目所在region的id，如：xx-xx-1。
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 当前项目所在region的id，如：xx-xx-1。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets watermarkedFile
    *  添加水印后的文档地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.doc**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.doc为对象全路径名。
    *
    * @return string|null
    */
    public function getWatermarkedFile()
    {
        return $this->container['watermarkedFile'];
    }

    /**
    * Sets watermarkedFile
    *
    * @param string|null $watermarkedFile 添加水印后的文档地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.doc**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.doc为对象全路径名。
    *
    * @return $this
    */
    public function setWatermarkedFile($watermarkedFile)
    {
        $this->container['watermarkedFile'] = $watermarkedFile;
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

