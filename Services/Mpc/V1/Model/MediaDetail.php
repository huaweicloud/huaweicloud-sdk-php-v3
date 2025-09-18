<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MediaDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MediaDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * features  任务名称
    * originPara  originPara
    * outputVideoParas  多路输出片源信息
    * replaceSubIndex  被替换的子索引文件
    * outputThumbnailPara  outputThumbnailPara
    * outputWatermarkParas  outputWatermarkParas
    * metadata  输出文件的metadata信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'features' => 'string[]',
            'originPara' => '\HuaweiCloud\SDK\Mpc\V1\Model\OriginPara',
            'outputVideoParas' => '\HuaweiCloud\SDK\Mpc\V1\Model\OutputVideoPara[]',
            'replaceSubIndex' => 'string[]',
            'outputThumbnailPara' => '\HuaweiCloud\SDK\Mpc\V1\Model\OutputThumbnailPara',
            'outputWatermarkParas' => '\HuaweiCloud\SDK\Mpc\V1\Model\OutputWatermarkPara',
            'metadata' => '\HuaweiCloud\SDK\Mpc\V1\Model\FileMetaData[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * features  任务名称
    * originPara  originPara
    * outputVideoParas  多路输出片源信息
    * replaceSubIndex  被替换的子索引文件
    * outputThumbnailPara  outputThumbnailPara
    * outputWatermarkParas  outputWatermarkParas
    * metadata  输出文件的metadata信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'features' => null,
        'originPara' => null,
        'outputVideoParas' => null,
        'replaceSubIndex' => null,
        'outputThumbnailPara' => null,
        'outputWatermarkParas' => null,
        'metadata' => null
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
    * features  任务名称
    * originPara  originPara
    * outputVideoParas  多路输出片源信息
    * replaceSubIndex  被替换的子索引文件
    * outputThumbnailPara  outputThumbnailPara
    * outputWatermarkParas  outputWatermarkParas
    * metadata  输出文件的metadata信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'features' => 'features',
            'originPara' => 'origin_para',
            'outputVideoParas' => 'output_video_paras',
            'replaceSubIndex' => 'replace_sub_index',
            'outputThumbnailPara' => 'output_thumbnail_para',
            'outputWatermarkParas' => 'output_watermark_paras',
            'metadata' => 'metadata'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * features  任务名称
    * originPara  originPara
    * outputVideoParas  多路输出片源信息
    * replaceSubIndex  被替换的子索引文件
    * outputThumbnailPara  outputThumbnailPara
    * outputWatermarkParas  outputWatermarkParas
    * metadata  输出文件的metadata信息
    *
    * @var string[]
    */
    protected static $setters = [
            'features' => 'setFeatures',
            'originPara' => 'setOriginPara',
            'outputVideoParas' => 'setOutputVideoParas',
            'replaceSubIndex' => 'setReplaceSubIndex',
            'outputThumbnailPara' => 'setOutputThumbnailPara',
            'outputWatermarkParas' => 'setOutputWatermarkParas',
            'metadata' => 'setMetadata'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * features  任务名称
    * originPara  originPara
    * outputVideoParas  多路输出片源信息
    * replaceSubIndex  被替换的子索引文件
    * outputThumbnailPara  outputThumbnailPara
    * outputWatermarkParas  outputWatermarkParas
    * metadata  输出文件的metadata信息
    *
    * @var string[]
    */
    protected static $getters = [
            'features' => 'getFeatures',
            'originPara' => 'getOriginPara',
            'outputVideoParas' => 'getOutputVideoParas',
            'replaceSubIndex' => 'getReplaceSubIndex',
            'outputThumbnailPara' => 'getOutputThumbnailPara',
            'outputWatermarkParas' => 'getOutputWatermarkParas',
            'metadata' => 'getMetadata'
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
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['originPara'] = isset($data['originPara']) ? $data['originPara'] : null;
        $this->container['outputVideoParas'] = isset($data['outputVideoParas']) ? $data['outputVideoParas'] : null;
        $this->container['replaceSubIndex'] = isset($data['replaceSubIndex']) ? $data['replaceSubIndex'] : null;
        $this->container['outputThumbnailPara'] = isset($data['outputThumbnailPara']) ? $data['outputThumbnailPara'] : null;
        $this->container['outputWatermarkParas'] = isset($data['outputWatermarkParas']) ? $data['outputWatermarkParas'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
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
    * Gets features
    *  任务名称
    *
    * @return string[]|null
    */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
    * Sets features
    *
    * @param string[]|null $features 任务名称
    *
    * @return $this
    */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;
        return $this;
    }

    /**
    * Gets originPara
    *  originPara
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\OriginPara|null
    */
    public function getOriginPara()
    {
        return $this->container['originPara'];
    }

    /**
    * Sets originPara
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\OriginPara|null $originPara originPara
    *
    * @return $this
    */
    public function setOriginPara($originPara)
    {
        $this->container['originPara'] = $originPara;
        return $this;
    }

    /**
    * Gets outputVideoParas
    *  多路输出片源信息
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\OutputVideoPara[]|null
    */
    public function getOutputVideoParas()
    {
        return $this->container['outputVideoParas'];
    }

    /**
    * Sets outputVideoParas
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\OutputVideoPara[]|null $outputVideoParas 多路输出片源信息
    *
    * @return $this
    */
    public function setOutputVideoParas($outputVideoParas)
    {
        $this->container['outputVideoParas'] = $outputVideoParas;
        return $this;
    }

    /**
    * Gets replaceSubIndex
    *  被替换的子索引文件
    *
    * @return string[]|null
    */
    public function getReplaceSubIndex()
    {
        return $this->container['replaceSubIndex'];
    }

    /**
    * Sets replaceSubIndex
    *
    * @param string[]|null $replaceSubIndex 被替换的子索引文件
    *
    * @return $this
    */
    public function setReplaceSubIndex($replaceSubIndex)
    {
        $this->container['replaceSubIndex'] = $replaceSubIndex;
        return $this;
    }

    /**
    * Gets outputThumbnailPara
    *  outputThumbnailPara
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\OutputThumbnailPara|null
    */
    public function getOutputThumbnailPara()
    {
        return $this->container['outputThumbnailPara'];
    }

    /**
    * Sets outputThumbnailPara
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\OutputThumbnailPara|null $outputThumbnailPara outputThumbnailPara
    *
    * @return $this
    */
    public function setOutputThumbnailPara($outputThumbnailPara)
    {
        $this->container['outputThumbnailPara'] = $outputThumbnailPara;
        return $this;
    }

    /**
    * Gets outputWatermarkParas
    *  outputWatermarkParas
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\OutputWatermarkPara|null
    */
    public function getOutputWatermarkParas()
    {
        return $this->container['outputWatermarkParas'];
    }

    /**
    * Sets outputWatermarkParas
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\OutputWatermarkPara|null $outputWatermarkParas outputWatermarkParas
    *
    * @return $this
    */
    public function setOutputWatermarkParas($outputWatermarkParas)
    {
        $this->container['outputWatermarkParas'] = $outputWatermarkParas;
        return $this;
    }

    /**
    * Gets metadata
    *  输出文件的metadata信息
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\FileMetaData[]|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\FileMetaData[]|null $metadata 输出文件的metadata信息
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
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

