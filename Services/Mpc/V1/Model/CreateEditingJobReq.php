<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateEditingJobReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateEditingJobReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * editType  剪辑任务类型。取值如下：\"CLIP\",\"CONCAT\",\"CONCATS\",\"MIX\"。
    * clips  剪切信息
    * concats  多拼接任务信息，支持多个拼接输出，与concat参数只能二选一。
    * concat  concat
    * mix  mix
    * input  input
    * outputSetting  outputSetting
    * imageWatermarkSettings  水印信息。
    * editSettings  媒体处理配置，当edit_type为空时该参数生效。会根据该参数配置，对input参数指定的源文件进行处理
    * userData  用户自定义数据。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'editType' => 'string[]',
            'clips' => '\HuaweiCloud\SDK\Mpc\V1\Model\ClipInfo[]',
            'concats' => '\HuaweiCloud\SDK\Mpc\V1\Model\MultiConcatInfo[]',
            'concat' => '\HuaweiCloud\SDK\Mpc\V1\Model\ConcatInfo',
            'mix' => '\HuaweiCloud\SDK\Mpc\V1\Model\MixInfo',
            'input' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'outputSetting' => '\HuaweiCloud\SDK\Mpc\V1\Model\OutputSetting',
            'imageWatermarkSettings' => '\HuaweiCloud\SDK\Mpc\V1\Model\ImageWatermarkSetting[]',
            'editSettings' => '\HuaweiCloud\SDK\Mpc\V1\Model\EditSetting[]',
            'userData' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * editType  剪辑任务类型。取值如下：\"CLIP\",\"CONCAT\",\"CONCATS\",\"MIX\"。
    * clips  剪切信息
    * concats  多拼接任务信息，支持多个拼接输出，与concat参数只能二选一。
    * concat  concat
    * mix  mix
    * input  input
    * outputSetting  outputSetting
    * imageWatermarkSettings  水印信息。
    * editSettings  媒体处理配置，当edit_type为空时该参数生效。会根据该参数配置，对input参数指定的源文件进行处理
    * userData  用户自定义数据。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'editType' => null,
        'clips' => null,
        'concats' => null,
        'concat' => null,
        'mix' => null,
        'input' => null,
        'outputSetting' => null,
        'imageWatermarkSettings' => null,
        'editSettings' => null,
        'userData' => null
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
    * editType  剪辑任务类型。取值如下：\"CLIP\",\"CONCAT\",\"CONCATS\",\"MIX\"。
    * clips  剪切信息
    * concats  多拼接任务信息，支持多个拼接输出，与concat参数只能二选一。
    * concat  concat
    * mix  mix
    * input  input
    * outputSetting  outputSetting
    * imageWatermarkSettings  水印信息。
    * editSettings  媒体处理配置，当edit_type为空时该参数生效。会根据该参数配置，对input参数指定的源文件进行处理
    * userData  用户自定义数据。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'editType' => 'edit_type',
            'clips' => 'clips',
            'concats' => 'concats',
            'concat' => 'concat',
            'mix' => 'mix',
            'input' => 'input',
            'outputSetting' => 'output_setting',
            'imageWatermarkSettings' => 'image_watermark_settings',
            'editSettings' => 'edit_settings',
            'userData' => 'user_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * editType  剪辑任务类型。取值如下：\"CLIP\",\"CONCAT\",\"CONCATS\",\"MIX\"。
    * clips  剪切信息
    * concats  多拼接任务信息，支持多个拼接输出，与concat参数只能二选一。
    * concat  concat
    * mix  mix
    * input  input
    * outputSetting  outputSetting
    * imageWatermarkSettings  水印信息。
    * editSettings  媒体处理配置，当edit_type为空时该参数生效。会根据该参数配置，对input参数指定的源文件进行处理
    * userData  用户自定义数据。
    *
    * @var string[]
    */
    protected static $setters = [
            'editType' => 'setEditType',
            'clips' => 'setClips',
            'concats' => 'setConcats',
            'concat' => 'setConcat',
            'mix' => 'setMix',
            'input' => 'setInput',
            'outputSetting' => 'setOutputSetting',
            'imageWatermarkSettings' => 'setImageWatermarkSettings',
            'editSettings' => 'setEditSettings',
            'userData' => 'setUserData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * editType  剪辑任务类型。取值如下：\"CLIP\",\"CONCAT\",\"CONCATS\",\"MIX\"。
    * clips  剪切信息
    * concats  多拼接任务信息，支持多个拼接输出，与concat参数只能二选一。
    * concat  concat
    * mix  mix
    * input  input
    * outputSetting  outputSetting
    * imageWatermarkSettings  水印信息。
    * editSettings  媒体处理配置，当edit_type为空时该参数生效。会根据该参数配置，对input参数指定的源文件进行处理
    * userData  用户自定义数据。
    *
    * @var string[]
    */
    protected static $getters = [
            'editType' => 'getEditType',
            'clips' => 'getClips',
            'concats' => 'getConcats',
            'concat' => 'getConcat',
            'mix' => 'getMix',
            'input' => 'getInput',
            'outputSetting' => 'getOutputSetting',
            'imageWatermarkSettings' => 'getImageWatermarkSettings',
            'editSettings' => 'getEditSettings',
            'userData' => 'getUserData'
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
        $this->container['editType'] = isset($data['editType']) ? $data['editType'] : null;
        $this->container['clips'] = isset($data['clips']) ? $data['clips'] : null;
        $this->container['concats'] = isset($data['concats']) ? $data['concats'] : null;
        $this->container['concat'] = isset($data['concat']) ? $data['concat'] : null;
        $this->container['mix'] = isset($data['mix']) ? $data['mix'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['outputSetting'] = isset($data['outputSetting']) ? $data['outputSetting'] : null;
        $this->container['imageWatermarkSettings'] = isset($data['imageWatermarkSettings']) ? $data['imageWatermarkSettings'] : null;
        $this->container['editSettings'] = isset($data['editSettings']) ? $data['editSettings'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) > 65535)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) < 0)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be bigger than or equal to 0.";
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
    * Gets editType
    *  剪辑任务类型。取值如下：\"CLIP\",\"CONCAT\",\"CONCATS\",\"MIX\"。
    *
    * @return string[]|null
    */
    public function getEditType()
    {
        return $this->container['editType'];
    }

    /**
    * Sets editType
    *
    * @param string[]|null $editType 剪辑任务类型。取值如下：\"CLIP\",\"CONCAT\",\"CONCATS\",\"MIX\"。
    *
    * @return $this
    */
    public function setEditType($editType)
    {
        $this->container['editType'] = $editType;
        return $this;
    }

    /**
    * Gets clips
    *  剪切信息
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ClipInfo[]|null
    */
    public function getClips()
    {
        return $this->container['clips'];
    }

    /**
    * Sets clips
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ClipInfo[]|null $clips 剪切信息
    *
    * @return $this
    */
    public function setClips($clips)
    {
        $this->container['clips'] = $clips;
        return $this;
    }

    /**
    * Gets concats
    *  多拼接任务信息，支持多个拼接输出，与concat参数只能二选一。
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\MultiConcatInfo[]|null
    */
    public function getConcats()
    {
        return $this->container['concats'];
    }

    /**
    * Sets concats
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\MultiConcatInfo[]|null $concats 多拼接任务信息，支持多个拼接输出，与concat参数只能二选一。
    *
    * @return $this
    */
    public function setConcats($concats)
    {
        $this->container['concats'] = $concats;
        return $this;
    }

    /**
    * Gets concat
    *  concat
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ConcatInfo|null
    */
    public function getConcat()
    {
        return $this->container['concat'];
    }

    /**
    * Sets concat
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ConcatInfo|null $concat concat
    *
    * @return $this
    */
    public function setConcat($concat)
    {
        $this->container['concat'] = $concat;
        return $this;
    }

    /**
    * Gets mix
    *  mix
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\MixInfo|null
    */
    public function getMix()
    {
        return $this->container['mix'];
    }

    /**
    * Sets mix
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\MixInfo|null $mix mix
    *
    * @return $this
    */
    public function setMix($mix)
    {
        $this->container['mix'] = $mix;
        return $this;
    }

    /**
    * Gets input
    *  input
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null $input input
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets outputSetting
    *  outputSetting
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\OutputSetting|null
    */
    public function getOutputSetting()
    {
        return $this->container['outputSetting'];
    }

    /**
    * Sets outputSetting
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\OutputSetting|null $outputSetting outputSetting
    *
    * @return $this
    */
    public function setOutputSetting($outputSetting)
    {
        $this->container['outputSetting'] = $outputSetting;
        return $this;
    }

    /**
    * Gets imageWatermarkSettings
    *  水印信息。
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ImageWatermarkSetting[]|null
    */
    public function getImageWatermarkSettings()
    {
        return $this->container['imageWatermarkSettings'];
    }

    /**
    * Sets imageWatermarkSettings
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ImageWatermarkSetting[]|null $imageWatermarkSettings 水印信息。
    *
    * @return $this
    */
    public function setImageWatermarkSettings($imageWatermarkSettings)
    {
        $this->container['imageWatermarkSettings'] = $imageWatermarkSettings;
        return $this;
    }

    /**
    * Gets editSettings
    *  媒体处理配置，当edit_type为空时该参数生效。会根据该参数配置，对input参数指定的源文件进行处理
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\EditSetting[]|null
    */
    public function getEditSettings()
    {
        return $this->container['editSettings'];
    }

    /**
    * Sets editSettings
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\EditSetting[]|null $editSettings 媒体处理配置，当edit_type为空时该参数生效。会根据该参数配置，对input参数指定的源文件进行处理
    *
    * @return $this
    */
    public function setEditSettings($editSettings)
    {
        $this->container['editSettings'] = $editSettings;
        return $this;
    }

    /**
    * Gets userData
    *  用户自定义数据。
    *
    * @return string|null
    */
    public function getUserData()
    {
        return $this->container['userData'];
    }

    /**
    * Sets userData
    *
    * @param string|null $userData 用户自定义数据。
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
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

