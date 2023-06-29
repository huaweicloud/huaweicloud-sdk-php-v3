<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MultiConcatInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MultiConcatInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * inputs  拼接任务输入源地址。
    * transTemplateIds  拼接完成后转码对应的转码模板ID
    * avParameters  转码参数。 设置“trans_template_id”和此参数，则优先使用此参数进行转码。
    * output  output
    * imageWatermarkSettings  水印信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'inputs' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo[]',
            'transTemplateIds' => 'int[]',
            'avParameters' => '\HuaweiCloud\SDK\Mpc\V1\Model\AvParameters[]',
            'output' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'imageWatermarkSettings' => '\HuaweiCloud\SDK\Mpc\V1\Model\ImageWatermarkSetting[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * inputs  拼接任务输入源地址。
    * transTemplateIds  拼接完成后转码对应的转码模板ID
    * avParameters  转码参数。 设置“trans_template_id”和此参数，则优先使用此参数进行转码。
    * output  output
    * imageWatermarkSettings  水印信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'inputs' => null,
        'transTemplateIds' => null,
        'avParameters' => null,
        'output' => null,
        'imageWatermarkSettings' => null
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
    * inputs  拼接任务输入源地址。
    * transTemplateIds  拼接完成后转码对应的转码模板ID
    * avParameters  转码参数。 设置“trans_template_id”和此参数，则优先使用此参数进行转码。
    * output  output
    * imageWatermarkSettings  水印信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'inputs' => 'inputs',
            'transTemplateIds' => 'trans_template_ids',
            'avParameters' => 'av_parameters',
            'output' => 'output',
            'imageWatermarkSettings' => 'image_watermark_settings'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * inputs  拼接任务输入源地址。
    * transTemplateIds  拼接完成后转码对应的转码模板ID
    * avParameters  转码参数。 设置“trans_template_id”和此参数，则优先使用此参数进行转码。
    * output  output
    * imageWatermarkSettings  水印信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'inputs' => 'setInputs',
            'transTemplateIds' => 'setTransTemplateIds',
            'avParameters' => 'setAvParameters',
            'output' => 'setOutput',
            'imageWatermarkSettings' => 'setImageWatermarkSettings'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * inputs  拼接任务输入源地址。
    * transTemplateIds  拼接完成后转码对应的转码模板ID
    * avParameters  转码参数。 设置“trans_template_id”和此参数，则优先使用此参数进行转码。
    * output  output
    * imageWatermarkSettings  水印信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'inputs' => 'getInputs',
            'transTemplateIds' => 'getTransTemplateIds',
            'avParameters' => 'getAvParameters',
            'output' => 'getOutput',
            'imageWatermarkSettings' => 'getImageWatermarkSettings'
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
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['transTemplateIds'] = isset($data['transTemplateIds']) ? $data['transTemplateIds'] : null;
        $this->container['avParameters'] = isset($data['avParameters']) ? $data['avParameters'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['imageWatermarkSettings'] = isset($data['imageWatermarkSettings']) ? $data['imageWatermarkSettings'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['inputs'] === null) {
            $invalidProperties[] = "'inputs' can't be null";
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
    * Gets inputs
    *  拼接任务输入源地址。
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo[]
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo[] $inputs 拼接任务输入源地址。
    *
    * @return $this
    */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;
        return $this;
    }

    /**
    * Gets transTemplateIds
    *  拼接完成后转码对应的转码模板ID
    *
    * @return int[]|null
    */
    public function getTransTemplateIds()
    {
        return $this->container['transTemplateIds'];
    }

    /**
    * Sets transTemplateIds
    *
    * @param int[]|null $transTemplateIds 拼接完成后转码对应的转码模板ID
    *
    * @return $this
    */
    public function setTransTemplateIds($transTemplateIds)
    {
        $this->container['transTemplateIds'] = $transTemplateIds;
        return $this;
    }

    /**
    * Gets avParameters
    *  转码参数。 设置“trans_template_id”和此参数，则优先使用此参数进行转码。
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
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\AvParameters[]|null $avParameters 转码参数。 设置“trans_template_id”和此参数，则优先使用此参数进行转码。
    *
    * @return $this
    */
    public function setAvParameters($avParameters)
    {
        $this->container['avParameters'] = $avParameters;
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

