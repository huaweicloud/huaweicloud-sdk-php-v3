<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EditSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EditSetting';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timelineStart  input指定源文件开始截取的时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点
    * timelineEnd  input指定源文件接受截取的时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    * transTemplateId  转码模板id
    * avParameter  avParameter
    * mosaics  马赛克（模糊处理）配置，会对input指定的源文件进行马赛克处理，马赛克基于视频左上角为参考位置
    * imageWatermarks  图片水印配置，会对input指定的源文件进行马赛克处理。水印设置参数里面的overlay_input字段不填
    * heads  头部文件列表，需要指定文件名。列表内文件会按照顺序拼接在input指定文件的前面
    * tails  尾部文件列表，需要指定文件名。列表内文件会按照顺序拼接在input指定文件的后面
    * output  output
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timelineStart' => 'string',
            'timelineEnd' => 'string',
            'transTemplateId' => 'int',
            'avParameter' => '\HuaweiCloud\SDK\Mpc\V1\Model\AvParameters',
            'mosaics' => '\HuaweiCloud\SDK\Mpc\V1\Model\MosaicInfo[]',
            'imageWatermarks' => '\HuaweiCloud\SDK\Mpc\V1\Model\ImageWatermarkSetting[]',
            'heads' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo[]',
            'tails' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo[]',
            'output' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timelineStart  input指定源文件开始截取的时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点
    * timelineEnd  input指定源文件接受截取的时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    * transTemplateId  转码模板id
    * avParameter  avParameter
    * mosaics  马赛克（模糊处理）配置，会对input指定的源文件进行马赛克处理，马赛克基于视频左上角为参考位置
    * imageWatermarks  图片水印配置，会对input指定的源文件进行马赛克处理。水印设置参数里面的overlay_input字段不填
    * heads  头部文件列表，需要指定文件名。列表内文件会按照顺序拼接在input指定文件的前面
    * tails  尾部文件列表，需要指定文件名。列表内文件会按照顺序拼接在input指定文件的后面
    * output  output
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timelineStart' => null,
        'timelineEnd' => null,
        'transTemplateId' => null,
        'avParameter' => null,
        'mosaics' => null,
        'imageWatermarks' => null,
        'heads' => null,
        'tails' => null,
        'output' => null
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
    * timelineStart  input指定源文件开始截取的时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点
    * timelineEnd  input指定源文件接受截取的时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    * transTemplateId  转码模板id
    * avParameter  avParameter
    * mosaics  马赛克（模糊处理）配置，会对input指定的源文件进行马赛克处理，马赛克基于视频左上角为参考位置
    * imageWatermarks  图片水印配置，会对input指定的源文件进行马赛克处理。水印设置参数里面的overlay_input字段不填
    * heads  头部文件列表，需要指定文件名。列表内文件会按照顺序拼接在input指定文件的前面
    * tails  尾部文件列表，需要指定文件名。列表内文件会按照顺序拼接在input指定文件的后面
    * output  output
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timelineStart' => 'timeline_start',
            'timelineEnd' => 'timeline_end',
            'transTemplateId' => 'trans_template_id',
            'avParameter' => 'av_parameter',
            'mosaics' => 'mosaics',
            'imageWatermarks' => 'image_watermarks',
            'heads' => 'heads',
            'tails' => 'tails',
            'output' => 'output'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timelineStart  input指定源文件开始截取的时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点
    * timelineEnd  input指定源文件接受截取的时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    * transTemplateId  转码模板id
    * avParameter  avParameter
    * mosaics  马赛克（模糊处理）配置，会对input指定的源文件进行马赛克处理，马赛克基于视频左上角为参考位置
    * imageWatermarks  图片水印配置，会对input指定的源文件进行马赛克处理。水印设置参数里面的overlay_input字段不填
    * heads  头部文件列表，需要指定文件名。列表内文件会按照顺序拼接在input指定文件的前面
    * tails  尾部文件列表，需要指定文件名。列表内文件会按照顺序拼接在input指定文件的后面
    * output  output
    *
    * @var string[]
    */
    protected static $setters = [
            'timelineStart' => 'setTimelineStart',
            'timelineEnd' => 'setTimelineEnd',
            'transTemplateId' => 'setTransTemplateId',
            'avParameter' => 'setAvParameter',
            'mosaics' => 'setMosaics',
            'imageWatermarks' => 'setImageWatermarks',
            'heads' => 'setHeads',
            'tails' => 'setTails',
            'output' => 'setOutput'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timelineStart  input指定源文件开始截取的时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点
    * timelineEnd  input指定源文件接受截取的时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    * transTemplateId  转码模板id
    * avParameter  avParameter
    * mosaics  马赛克（模糊处理）配置，会对input指定的源文件进行马赛克处理，马赛克基于视频左上角为参考位置
    * imageWatermarks  图片水印配置，会对input指定的源文件进行马赛克处理。水印设置参数里面的overlay_input字段不填
    * heads  头部文件列表，需要指定文件名。列表内文件会按照顺序拼接在input指定文件的前面
    * tails  尾部文件列表，需要指定文件名。列表内文件会按照顺序拼接在input指定文件的后面
    * output  output
    *
    * @var string[]
    */
    protected static $getters = [
            'timelineStart' => 'getTimelineStart',
            'timelineEnd' => 'getTimelineEnd',
            'transTemplateId' => 'getTransTemplateId',
            'avParameter' => 'getAvParameter',
            'mosaics' => 'getMosaics',
            'imageWatermarks' => 'getImageWatermarks',
            'heads' => 'getHeads',
            'tails' => 'getTails',
            'output' => 'getOutput'
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
        $this->container['timelineStart'] = isset($data['timelineStart']) ? $data['timelineStart'] : null;
        $this->container['timelineEnd'] = isset($data['timelineEnd']) ? $data['timelineEnd'] : null;
        $this->container['transTemplateId'] = isset($data['transTemplateId']) ? $data['transTemplateId'] : null;
        $this->container['avParameter'] = isset($data['avParameter']) ? $data['avParameter'] : null;
        $this->container['mosaics'] = isset($data['mosaics']) ? $data['mosaics'] : null;
        $this->container['imageWatermarks'] = isset($data['imageWatermarks']) ? $data['imageWatermarks'] : null;
        $this->container['heads'] = isset($data['heads']) ? $data['heads'] : null;
        $this->container['tails'] = isset($data['tails']) ? $data['tails'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['timelineStart']) && (mb_strlen($this->container['timelineStart']) > 32)) {
                $invalidProperties[] = "invalid value for 'timelineStart', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['timelineStart']) && (mb_strlen($this->container['timelineStart']) < 0)) {
                $invalidProperties[] = "invalid value for 'timelineStart', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['timelineEnd']) && (mb_strlen($this->container['timelineEnd']) > 32)) {
                $invalidProperties[] = "invalid value for 'timelineEnd', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['timelineEnd']) && (mb_strlen($this->container['timelineEnd']) < 0)) {
                $invalidProperties[] = "invalid value for 'timelineEnd', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['output'] === null) {
            $invalidProperties[] = "'output' can't be null";
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
    * Gets timelineStart
    *  input指定源文件开始截取的时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点
    *
    * @return string|null
    */
    public function getTimelineStart()
    {
        return $this->container['timelineStart'];
    }

    /**
    * Sets timelineStart
    *
    * @param string|null $timelineStart input指定源文件开始截取的时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点
    *
    * @return $this
    */
    public function setTimelineStart($timelineStart)
    {
        $this->container['timelineStart'] = $timelineStart;
        return $this;
    }

    /**
    * Gets timelineEnd
    *  input指定源文件接受截取的时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    *
    * @return string|null
    */
    public function getTimelineEnd()
    {
        return $this->container['timelineEnd'];
    }

    /**
    * Sets timelineEnd
    *
    * @param string|null $timelineEnd input指定源文件接受截取的时间，单位：秒。可以有正数或者负数，正数表示从开始往后的时间点，负数表示从结尾往前的时间点。
    *
    * @return $this
    */
    public function setTimelineEnd($timelineEnd)
    {
        $this->container['timelineEnd'] = $timelineEnd;
        return $this;
    }

    /**
    * Gets transTemplateId
    *  转码模板id
    *
    * @return int|null
    */
    public function getTransTemplateId()
    {
        return $this->container['transTemplateId'];
    }

    /**
    * Sets transTemplateId
    *
    * @param int|null $transTemplateId 转码模板id
    *
    * @return $this
    */
    public function setTransTemplateId($transTemplateId)
    {
        $this->container['transTemplateId'] = $transTemplateId;
        return $this;
    }

    /**
    * Gets avParameter
    *  avParameter
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\AvParameters|null
    */
    public function getAvParameter()
    {
        return $this->container['avParameter'];
    }

    /**
    * Sets avParameter
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\AvParameters|null $avParameter avParameter
    *
    * @return $this
    */
    public function setAvParameter($avParameter)
    {
        $this->container['avParameter'] = $avParameter;
        return $this;
    }

    /**
    * Gets mosaics
    *  马赛克（模糊处理）配置，会对input指定的源文件进行马赛克处理，马赛克基于视频左上角为参考位置
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\MosaicInfo[]|null
    */
    public function getMosaics()
    {
        return $this->container['mosaics'];
    }

    /**
    * Sets mosaics
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\MosaicInfo[]|null $mosaics 马赛克（模糊处理）配置，会对input指定的源文件进行马赛克处理，马赛克基于视频左上角为参考位置
    *
    * @return $this
    */
    public function setMosaics($mosaics)
    {
        $this->container['mosaics'] = $mosaics;
        return $this;
    }

    /**
    * Gets imageWatermarks
    *  图片水印配置，会对input指定的源文件进行马赛克处理。水印设置参数里面的overlay_input字段不填
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ImageWatermarkSetting[]|null
    */
    public function getImageWatermarks()
    {
        return $this->container['imageWatermarks'];
    }

    /**
    * Sets imageWatermarks
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ImageWatermarkSetting[]|null $imageWatermarks 图片水印配置，会对input指定的源文件进行马赛克处理。水印设置参数里面的overlay_input字段不填
    *
    * @return $this
    */
    public function setImageWatermarks($imageWatermarks)
    {
        $this->container['imageWatermarks'] = $imageWatermarks;
        return $this;
    }

    /**
    * Gets heads
    *  头部文件列表，需要指定文件名。列表内文件会按照顺序拼接在input指定文件的前面
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo[]|null
    */
    public function getHeads()
    {
        return $this->container['heads'];
    }

    /**
    * Sets heads
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo[]|null $heads 头部文件列表，需要指定文件名。列表内文件会按照顺序拼接在input指定文件的前面
    *
    * @return $this
    */
    public function setHeads($heads)
    {
        $this->container['heads'] = $heads;
        return $this;
    }

    /**
    * Gets tails
    *  尾部文件列表，需要指定文件名。列表内文件会按照顺序拼接在input指定文件的后面
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo[]|null
    */
    public function getTails()
    {
        return $this->container['tails'];
    }

    /**
    * Sets tails
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo[]|null $tails 尾部文件列表，需要指定文件名。列表内文件会按照顺序拼接在input指定文件的后面
    *
    * @return $this
    */
    public function setTails($tails)
    {
        $this->container['tails'] = $tails;
        return $this;
    }

    /**
    * Gets output
    *  output
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo $output output
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
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

