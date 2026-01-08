<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTranscodingReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTranscodingReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * input  input
    * output  output
    * transTemplateId  转码模板ID，没带av_parameter参数时，必须带该参数，数组，每一路转码输出对应一个转码配置模板ID，最多支持9个模板ID。  多个转码模板中如下参数可变，其他都必须一致：  视频bitrate，height，width。
    * transTemplateList  转码模板数组
    * avParameters  转码参数。  若同时设置“trans_template_id”和此参数，则优先使用此参数进行转码，不带trans_template_id时，该参数必选。
    * additionalManifests  主索引定制参数。
    * outputFilenames  输出文件名称，每一路转码输出对应一个名称，需要与转码模板ID数组的顺序对应。  - 若设置该参数，表示输出文件按该参数命名。 - 若不设置该参数，表示输出文件按默认方式命名。
    * userData  用户自定义数据，该字段可在查询接口或消息通知中按原内容透传给用户。
    * watermarks  图片水印参数，数组，最多支持20个成员。
    * thumbnail  thumbnail
    * thumbnails  多截图任务，数组，最多支持20个成员。
    * imageSprites  雪碧图参数，数组，最多支持20个成员。
    * pipelineId  
    * priority  任务优先级，取值如下： - 9代表高优先级。 - 6代表中优先级，默认为6。  暂时只支持6和9。
    * subtitle  subtitle
    * encryption  encryption
    * crop  crop
    * audioTrack  audioTrack
    * multiAudio  multiAudio
    * videoProcess  videoProcess
    * audioProcess  audioProcess
    * metadata  metadata设置，默认只支持AIGC
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'input' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'output' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'transTemplateId' => 'int[]',
            'transTemplateList' => '\HuaweiCloud\SDK\Mpc\V1\Model\TransIdTemplate[]',
            'avParameters' => '\HuaweiCloud\SDK\Mpc\V1\Model\AvParameters[]',
            'additionalManifests' => '\HuaweiCloud\SDK\Mpc\V1\Model\AdditionalManifests[]',
            'outputFilenames' => 'string[]',
            'userData' => 'string',
            'watermarks' => '\HuaweiCloud\SDK\Mpc\V1\Model\WatermarkRequest[]',
            'thumbnail' => '\HuaweiCloud\SDK\Mpc\V1\Model\Thumbnail',
            'thumbnails' => '\HuaweiCloud\SDK\Mpc\V1\Model\Thumbnail[]',
            'imageSprites' => '\HuaweiCloud\SDK\Mpc\V1\Model\ImageSprite[]',
            'pipelineId' => 'string',
            'priority' => 'int',
            'subtitle' => '\HuaweiCloud\SDK\Mpc\V1\Model\Subtitle',
            'encryption' => '\HuaweiCloud\SDK\Mpc\V1\Model\Encryption',
            'crop' => '\HuaweiCloud\SDK\Mpc\V1\Model\Crop',
            'audioTrack' => '\HuaweiCloud\SDK\Mpc\V1\Model\AudioTrack',
            'multiAudio' => '\HuaweiCloud\SDK\Mpc\V1\Model\MultiAudio',
            'videoProcess' => '\HuaweiCloud\SDK\Mpc\V1\Model\VideoProcess',
            'audioProcess' => '\HuaweiCloud\SDK\Mpc\V1\Model\AudioProcess',
            'metadata' => '\HuaweiCloud\SDK\Mpc\V1\Model\FileMetaData[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * input  input
    * output  output
    * transTemplateId  转码模板ID，没带av_parameter参数时，必须带该参数，数组，每一路转码输出对应一个转码配置模板ID，最多支持9个模板ID。  多个转码模板中如下参数可变，其他都必须一致：  视频bitrate，height，width。
    * transTemplateList  转码模板数组
    * avParameters  转码参数。  若同时设置“trans_template_id”和此参数，则优先使用此参数进行转码，不带trans_template_id时，该参数必选。
    * additionalManifests  主索引定制参数。
    * outputFilenames  输出文件名称，每一路转码输出对应一个名称，需要与转码模板ID数组的顺序对应。  - 若设置该参数，表示输出文件按该参数命名。 - 若不设置该参数，表示输出文件按默认方式命名。
    * userData  用户自定义数据，该字段可在查询接口或消息通知中按原内容透传给用户。
    * watermarks  图片水印参数，数组，最多支持20个成员。
    * thumbnail  thumbnail
    * thumbnails  多截图任务，数组，最多支持20个成员。
    * imageSprites  雪碧图参数，数组，最多支持20个成员。
    * pipelineId  
    * priority  任务优先级，取值如下： - 9代表高优先级。 - 6代表中优先级，默认为6。  暂时只支持6和9。
    * subtitle  subtitle
    * encryption  encryption
    * crop  crop
    * audioTrack  audioTrack
    * multiAudio  multiAudio
    * videoProcess  videoProcess
    * audioProcess  audioProcess
    * metadata  metadata设置，默认只支持AIGC
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'input' => null,
        'output' => null,
        'transTemplateId' => null,
        'transTemplateList' => null,
        'avParameters' => null,
        'additionalManifests' => null,
        'outputFilenames' => null,
        'userData' => null,
        'watermarks' => null,
        'thumbnail' => null,
        'thumbnails' => null,
        'imageSprites' => null,
        'pipelineId' => null,
        'priority' => 'int32',
        'subtitle' => null,
        'encryption' => null,
        'crop' => null,
        'audioTrack' => null,
        'multiAudio' => null,
        'videoProcess' => null,
        'audioProcess' => null,
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
    * input  input
    * output  output
    * transTemplateId  转码模板ID，没带av_parameter参数时，必须带该参数，数组，每一路转码输出对应一个转码配置模板ID，最多支持9个模板ID。  多个转码模板中如下参数可变，其他都必须一致：  视频bitrate，height，width。
    * transTemplateList  转码模板数组
    * avParameters  转码参数。  若同时设置“trans_template_id”和此参数，则优先使用此参数进行转码，不带trans_template_id时，该参数必选。
    * additionalManifests  主索引定制参数。
    * outputFilenames  输出文件名称，每一路转码输出对应一个名称，需要与转码模板ID数组的顺序对应。  - 若设置该参数，表示输出文件按该参数命名。 - 若不设置该参数，表示输出文件按默认方式命名。
    * userData  用户自定义数据，该字段可在查询接口或消息通知中按原内容透传给用户。
    * watermarks  图片水印参数，数组，最多支持20个成员。
    * thumbnail  thumbnail
    * thumbnails  多截图任务，数组，最多支持20个成员。
    * imageSprites  雪碧图参数，数组，最多支持20个成员。
    * pipelineId  
    * priority  任务优先级，取值如下： - 9代表高优先级。 - 6代表中优先级，默认为6。  暂时只支持6和9。
    * subtitle  subtitle
    * encryption  encryption
    * crop  crop
    * audioTrack  audioTrack
    * multiAudio  multiAudio
    * videoProcess  videoProcess
    * audioProcess  audioProcess
    * metadata  metadata设置，默认只支持AIGC
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'input' => 'input',
            'output' => 'output',
            'transTemplateId' => 'trans_template_id',
            'transTemplateList' => 'trans_template_list',
            'avParameters' => 'av_parameters',
            'additionalManifests' => 'additional_manifests',
            'outputFilenames' => 'output_filenames',
            'userData' => 'user_data',
            'watermarks' => 'watermarks',
            'thumbnail' => 'thumbnail',
            'thumbnails' => 'thumbnails',
            'imageSprites' => 'image_sprites',
            'pipelineId' => 'pipeline_id',
            'priority' => 'priority',
            'subtitle' => 'subtitle',
            'encryption' => 'encryption',
            'crop' => 'crop',
            'audioTrack' => 'audio_track',
            'multiAudio' => 'multi_audio',
            'videoProcess' => 'video_process',
            'audioProcess' => 'audio_process',
            'metadata' => 'metadata'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * input  input
    * output  output
    * transTemplateId  转码模板ID，没带av_parameter参数时，必须带该参数，数组，每一路转码输出对应一个转码配置模板ID，最多支持9个模板ID。  多个转码模板中如下参数可变，其他都必须一致：  视频bitrate，height，width。
    * transTemplateList  转码模板数组
    * avParameters  转码参数。  若同时设置“trans_template_id”和此参数，则优先使用此参数进行转码，不带trans_template_id时，该参数必选。
    * additionalManifests  主索引定制参数。
    * outputFilenames  输出文件名称，每一路转码输出对应一个名称，需要与转码模板ID数组的顺序对应。  - 若设置该参数，表示输出文件按该参数命名。 - 若不设置该参数，表示输出文件按默认方式命名。
    * userData  用户自定义数据，该字段可在查询接口或消息通知中按原内容透传给用户。
    * watermarks  图片水印参数，数组，最多支持20个成员。
    * thumbnail  thumbnail
    * thumbnails  多截图任务，数组，最多支持20个成员。
    * imageSprites  雪碧图参数，数组，最多支持20个成员。
    * pipelineId  
    * priority  任务优先级，取值如下： - 9代表高优先级。 - 6代表中优先级，默认为6。  暂时只支持6和9。
    * subtitle  subtitle
    * encryption  encryption
    * crop  crop
    * audioTrack  audioTrack
    * multiAudio  multiAudio
    * videoProcess  videoProcess
    * audioProcess  audioProcess
    * metadata  metadata设置，默认只支持AIGC
    *
    * @var string[]
    */
    protected static $setters = [
            'input' => 'setInput',
            'output' => 'setOutput',
            'transTemplateId' => 'setTransTemplateId',
            'transTemplateList' => 'setTransTemplateList',
            'avParameters' => 'setAvParameters',
            'additionalManifests' => 'setAdditionalManifests',
            'outputFilenames' => 'setOutputFilenames',
            'userData' => 'setUserData',
            'watermarks' => 'setWatermarks',
            'thumbnail' => 'setThumbnail',
            'thumbnails' => 'setThumbnails',
            'imageSprites' => 'setImageSprites',
            'pipelineId' => 'setPipelineId',
            'priority' => 'setPriority',
            'subtitle' => 'setSubtitle',
            'encryption' => 'setEncryption',
            'crop' => 'setCrop',
            'audioTrack' => 'setAudioTrack',
            'multiAudio' => 'setMultiAudio',
            'videoProcess' => 'setVideoProcess',
            'audioProcess' => 'setAudioProcess',
            'metadata' => 'setMetadata'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * input  input
    * output  output
    * transTemplateId  转码模板ID，没带av_parameter参数时，必须带该参数，数组，每一路转码输出对应一个转码配置模板ID，最多支持9个模板ID。  多个转码模板中如下参数可变，其他都必须一致：  视频bitrate，height，width。
    * transTemplateList  转码模板数组
    * avParameters  转码参数。  若同时设置“trans_template_id”和此参数，则优先使用此参数进行转码，不带trans_template_id时，该参数必选。
    * additionalManifests  主索引定制参数。
    * outputFilenames  输出文件名称，每一路转码输出对应一个名称，需要与转码模板ID数组的顺序对应。  - 若设置该参数，表示输出文件按该参数命名。 - 若不设置该参数，表示输出文件按默认方式命名。
    * userData  用户自定义数据，该字段可在查询接口或消息通知中按原内容透传给用户。
    * watermarks  图片水印参数，数组，最多支持20个成员。
    * thumbnail  thumbnail
    * thumbnails  多截图任务，数组，最多支持20个成员。
    * imageSprites  雪碧图参数，数组，最多支持20个成员。
    * pipelineId  
    * priority  任务优先级，取值如下： - 9代表高优先级。 - 6代表中优先级，默认为6。  暂时只支持6和9。
    * subtitle  subtitle
    * encryption  encryption
    * crop  crop
    * audioTrack  audioTrack
    * multiAudio  multiAudio
    * videoProcess  videoProcess
    * audioProcess  audioProcess
    * metadata  metadata设置，默认只支持AIGC
    *
    * @var string[]
    */
    protected static $getters = [
            'input' => 'getInput',
            'output' => 'getOutput',
            'transTemplateId' => 'getTransTemplateId',
            'transTemplateList' => 'getTransTemplateList',
            'avParameters' => 'getAvParameters',
            'additionalManifests' => 'getAdditionalManifests',
            'outputFilenames' => 'getOutputFilenames',
            'userData' => 'getUserData',
            'watermarks' => 'getWatermarks',
            'thumbnail' => 'getThumbnail',
            'thumbnails' => 'getThumbnails',
            'imageSprites' => 'getImageSprites',
            'pipelineId' => 'getPipelineId',
            'priority' => 'getPriority',
            'subtitle' => 'getSubtitle',
            'encryption' => 'getEncryption',
            'crop' => 'getCrop',
            'audioTrack' => 'getAudioTrack',
            'multiAudio' => 'getMultiAudio',
            'videoProcess' => 'getVideoProcess',
            'audioProcess' => 'getAudioProcess',
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
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['transTemplateId'] = isset($data['transTemplateId']) ? $data['transTemplateId'] : null;
        $this->container['transTemplateList'] = isset($data['transTemplateList']) ? $data['transTemplateList'] : null;
        $this->container['avParameters'] = isset($data['avParameters']) ? $data['avParameters'] : null;
        $this->container['additionalManifests'] = isset($data['additionalManifests']) ? $data['additionalManifests'] : null;
        $this->container['outputFilenames'] = isset($data['outputFilenames']) ? $data['outputFilenames'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['watermarks'] = isset($data['watermarks']) ? $data['watermarks'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['thumbnails'] = isset($data['thumbnails']) ? $data['thumbnails'] : null;
        $this->container['imageSprites'] = isset($data['imageSprites']) ? $data['imageSprites'] : null;
        $this->container['pipelineId'] = isset($data['pipelineId']) ? $data['pipelineId'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['subtitle'] = isset($data['subtitle']) ? $data['subtitle'] : null;
        $this->container['encryption'] = isset($data['encryption']) ? $data['encryption'] : null;
        $this->container['crop'] = isset($data['crop']) ? $data['crop'] : null;
        $this->container['audioTrack'] = isset($data['audioTrack']) ? $data['audioTrack'] : null;
        $this->container['multiAudio'] = isset($data['multiAudio']) ? $data['multiAudio'] : null;
        $this->container['videoProcess'] = isset($data['videoProcess']) ? $data['videoProcess'] : null;
        $this->container['audioProcess'] = isset($data['audioProcess']) ? $data['audioProcess'] : null;
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
        if ($this->container['output'] === null) {
            $invalidProperties[] = "'output' can't be null";
        }
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) > 65535)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) < 0)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pipelineId']) && (mb_strlen($this->container['pipelineId']) > 128)) {
                $invalidProperties[] = "invalid value for 'pipelineId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['pipelineId']) && (mb_strlen($this->container['pipelineId']) < 0)) {
                $invalidProperties[] = "invalid value for 'pipelineId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['priority']) && ($this->container['priority'] > 9)) {
                $invalidProperties[] = "invalid value for 'priority', must be smaller than or equal to 9.";
            }
            if (!is_null($this->container['priority']) && ($this->container['priority'] < 0)) {
                $invalidProperties[] = "invalid value for 'priority', must be bigger than or equal to 0.";
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
    * Gets transTemplateId
    *  转码模板ID，没带av_parameter参数时，必须带该参数，数组，每一路转码输出对应一个转码配置模板ID，最多支持9个模板ID。  多个转码模板中如下参数可变，其他都必须一致：  视频bitrate，height，width。
    *
    * @return int[]|null
    */
    public function getTransTemplateId()
    {
        return $this->container['transTemplateId'];
    }

    /**
    * Sets transTemplateId
    *
    * @param int[]|null $transTemplateId 转码模板ID，没带av_parameter参数时，必须带该参数，数组，每一路转码输出对应一个转码配置模板ID，最多支持9个模板ID。  多个转码模板中如下参数可变，其他都必须一致：  视频bitrate，height，width。
    *
    * @return $this
    */
    public function setTransTemplateId($transTemplateId)
    {
        $this->container['transTemplateId'] = $transTemplateId;
        return $this;
    }

    /**
    * Gets transTemplateList
    *  转码模板数组
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\TransIdTemplate[]|null
    */
    public function getTransTemplateList()
    {
        return $this->container['transTemplateList'];
    }

    /**
    * Sets transTemplateList
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\TransIdTemplate[]|null $transTemplateList 转码模板数组
    *
    * @return $this
    */
    public function setTransTemplateList($transTemplateList)
    {
        $this->container['transTemplateList'] = $transTemplateList;
        return $this;
    }

    /**
    * Gets avParameters
    *  转码参数。  若同时设置“trans_template_id”和此参数，则优先使用此参数进行转码，不带trans_template_id时，该参数必选。
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\AvParameters[]|null
    */
    public function getAvParameters()
    {
        return $this->container['avParameters'];
    }

    /**
    * Sets avParameters
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\AvParameters[]|null $avParameters 转码参数。  若同时设置“trans_template_id”和此参数，则优先使用此参数进行转码，不带trans_template_id时，该参数必选。
    *
    * @return $this
    */
    public function setAvParameters($avParameters)
    {
        $this->container['avParameters'] = $avParameters;
        return $this;
    }

    /**
    * Gets additionalManifests
    *  主索引定制参数。
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\AdditionalManifests[]|null
    */
    public function getAdditionalManifests()
    {
        return $this->container['additionalManifests'];
    }

    /**
    * Sets additionalManifests
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\AdditionalManifests[]|null $additionalManifests 主索引定制参数。
    *
    * @return $this
    */
    public function setAdditionalManifests($additionalManifests)
    {
        $this->container['additionalManifests'] = $additionalManifests;
        return $this;
    }

    /**
    * Gets outputFilenames
    *  输出文件名称，每一路转码输出对应一个名称，需要与转码模板ID数组的顺序对应。  - 若设置该参数，表示输出文件按该参数命名。 - 若不设置该参数，表示输出文件按默认方式命名。
    *
    * @return string[]|null
    */
    public function getOutputFilenames()
    {
        return $this->container['outputFilenames'];
    }

    /**
    * Sets outputFilenames
    *
    * @param string[]|null $outputFilenames 输出文件名称，每一路转码输出对应一个名称，需要与转码模板ID数组的顺序对应。  - 若设置该参数，表示输出文件按该参数命名。 - 若不设置该参数，表示输出文件按默认方式命名。
    *
    * @return $this
    */
    public function setOutputFilenames($outputFilenames)
    {
        $this->container['outputFilenames'] = $outputFilenames;
        return $this;
    }

    /**
    * Gets userData
    *  用户自定义数据，该字段可在查询接口或消息通知中按原内容透传给用户。
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
    * @param string|null $userData 用户自定义数据，该字段可在查询接口或消息通知中按原内容透传给用户。
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
        return $this;
    }

    /**
    * Gets watermarks
    *  图片水印参数，数组，最多支持20个成员。
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\WatermarkRequest[]|null
    */
    public function getWatermarks()
    {
        return $this->container['watermarks'];
    }

    /**
    * Sets watermarks
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\WatermarkRequest[]|null $watermarks 图片水印参数，数组，最多支持20个成员。
    *
    * @return $this
    */
    public function setWatermarks($watermarks)
    {
        $this->container['watermarks'] = $watermarks;
        return $this;
    }

    /**
    * Gets thumbnail
    *  thumbnail
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\Thumbnail|null
    */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
    * Sets thumbnail
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\Thumbnail|null $thumbnail thumbnail
    *
    * @return $this
    */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;
        return $this;
    }

    /**
    * Gets thumbnails
    *  多截图任务，数组，最多支持20个成员。
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\Thumbnail[]|null
    */
    public function getThumbnails()
    {
        return $this->container['thumbnails'];
    }

    /**
    * Sets thumbnails
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\Thumbnail[]|null $thumbnails 多截图任务，数组，最多支持20个成员。
    *
    * @return $this
    */
    public function setThumbnails($thumbnails)
    {
        $this->container['thumbnails'] = $thumbnails;
        return $this;
    }

    /**
    * Gets imageSprites
    *  雪碧图参数，数组，最多支持20个成员。
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ImageSprite[]|null
    */
    public function getImageSprites()
    {
        return $this->container['imageSprites'];
    }

    /**
    * Sets imageSprites
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ImageSprite[]|null $imageSprites 雪碧图参数，数组，最多支持20个成员。
    *
    * @return $this
    */
    public function setImageSprites($imageSprites)
    {
        $this->container['imageSprites'] = $imageSprites;
        return $this;
    }

    /**
    * Gets pipelineId
    *  
    *
    * @return string|null
    */
    public function getPipelineId()
    {
        return $this->container['pipelineId'];
    }

    /**
    * Sets pipelineId
    *
    * @param string|null $pipelineId 
    *
    * @return $this
    */
    public function setPipelineId($pipelineId)
    {
        $this->container['pipelineId'] = $pipelineId;
        return $this;
    }

    /**
    * Gets priority
    *  任务优先级，取值如下： - 9代表高优先级。 - 6代表中优先级，默认为6。  暂时只支持6和9。
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 任务优先级，取值如下： - 9代表高优先级。 - 6代表中优先级，默认为6。  暂时只支持6和9。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets subtitle
    *  subtitle
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\Subtitle|null
    */
    public function getSubtitle()
    {
        return $this->container['subtitle'];
    }

    /**
    * Sets subtitle
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\Subtitle|null $subtitle subtitle
    *
    * @return $this
    */
    public function setSubtitle($subtitle)
    {
        $this->container['subtitle'] = $subtitle;
        return $this;
    }

    /**
    * Gets encryption
    *  encryption
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\Encryption|null
    */
    public function getEncryption()
    {
        return $this->container['encryption'];
    }

    /**
    * Sets encryption
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\Encryption|null $encryption encryption
    *
    * @return $this
    */
    public function setEncryption($encryption)
    {
        $this->container['encryption'] = $encryption;
        return $this;
    }

    /**
    * Gets crop
    *  crop
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\Crop|null
    */
    public function getCrop()
    {
        return $this->container['crop'];
    }

    /**
    * Sets crop
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\Crop|null $crop crop
    *
    * @return $this
    */
    public function setCrop($crop)
    {
        $this->container['crop'] = $crop;
        return $this;
    }

    /**
    * Gets audioTrack
    *  audioTrack
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\AudioTrack|null
    */
    public function getAudioTrack()
    {
        return $this->container['audioTrack'];
    }

    /**
    * Sets audioTrack
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\AudioTrack|null $audioTrack audioTrack
    *
    * @return $this
    */
    public function setAudioTrack($audioTrack)
    {
        $this->container['audioTrack'] = $audioTrack;
        return $this;
    }

    /**
    * Gets multiAudio
    *  multiAudio
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\MultiAudio|null
    */
    public function getMultiAudio()
    {
        return $this->container['multiAudio'];
    }

    /**
    * Sets multiAudio
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\MultiAudio|null $multiAudio multiAudio
    *
    * @return $this
    */
    public function setMultiAudio($multiAudio)
    {
        $this->container['multiAudio'] = $multiAudio;
        return $this;
    }

    /**
    * Gets videoProcess
    *  videoProcess
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\VideoProcess|null
    */
    public function getVideoProcess()
    {
        return $this->container['videoProcess'];
    }

    /**
    * Sets videoProcess
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\VideoProcess|null $videoProcess videoProcess
    *
    * @return $this
    */
    public function setVideoProcess($videoProcess)
    {
        $this->container['videoProcess'] = $videoProcess;
        return $this;
    }

    /**
    * Gets audioProcess
    *  audioProcess
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\AudioProcess|null
    */
    public function getAudioProcess()
    {
        return $this->container['audioProcess'];
    }

    /**
    * Sets audioProcess
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\AudioProcess|null $audioProcess audioProcess
    *
    * @return $this
    */
    public function setAudioProcess($audioProcess)
    {
        $this->container['audioProcess'] = $audioProcess;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata设置，默认只支持AIGC
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
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\FileMetaData[]|null $metadata metadata设置，默认只支持AIGC
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

