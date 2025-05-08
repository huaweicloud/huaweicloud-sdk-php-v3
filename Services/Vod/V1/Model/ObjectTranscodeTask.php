<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObjectTranscodeTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObjectTranscodeTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * transTemplateId  转码模板ID
    * outputName  转码输出文件名
    * output  output
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'transTemplateId' => 'string',
            'outputName' => 'string',
            'output' => '\HuaweiCloud\SDK\Vod\V1\Model\ObsInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * transTemplateId  转码模板ID
    * outputName  转码输出文件名
    * output  output
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'transTemplateId' => null,
        'outputName' => null,
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
    * transTemplateId  转码模板ID
    * outputName  转码输出文件名
    * output  output
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'transTemplateId' => 'trans_template_id',
            'outputName' => 'output_name',
            'output' => 'output'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * transTemplateId  转码模板ID
    * outputName  转码输出文件名
    * output  output
    *
    * @var string[]
    */
    protected static $setters = [
            'transTemplateId' => 'setTransTemplateId',
            'outputName' => 'setOutputName',
            'output' => 'setOutput'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * transTemplateId  转码模板ID
    * outputName  转码输出文件名
    * output  output
    *
    * @var string[]
    */
    protected static $getters = [
            'transTemplateId' => 'getTransTemplateId',
            'outputName' => 'getOutputName',
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
        $this->container['transTemplateId'] = isset($data['transTemplateId']) ? $data['transTemplateId'] : null;
        $this->container['outputName'] = isset($data['outputName']) ? $data['outputName'] : null;
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
        if ($this->container['transTemplateId'] === null) {
            $invalidProperties[] = "'transTemplateId' can't be null";
        }
            if ((mb_strlen($this->container['transTemplateId']) > 128)) {
                $invalidProperties[] = "invalid value for 'transTemplateId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['transTemplateId']) < 0)) {
                $invalidProperties[] = "invalid value for 'transTemplateId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['outputName']) && (mb_strlen($this->container['outputName']) > 180)) {
                $invalidProperties[] = "invalid value for 'outputName', the character length must be smaller than or equal to 180.";
            }
            if (!is_null($this->container['outputName']) && (mb_strlen($this->container['outputName']) < 0)) {
                $invalidProperties[] = "invalid value for 'outputName', the character length must be bigger than or equal to 0.";
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
    * Gets transTemplateId
    *  转码模板ID
    *
    * @return string
    */
    public function getTransTemplateId()
    {
        return $this->container['transTemplateId'];
    }

    /**
    * Sets transTemplateId
    *
    * @param string $transTemplateId 转码模板ID
    *
    * @return $this
    */
    public function setTransTemplateId($transTemplateId)
    {
        $this->container['transTemplateId'] = $transTemplateId;
        return $this;
    }

    /**
    * Gets outputName
    *  转码输出文件名
    *
    * @return string|null
    */
    public function getOutputName()
    {
        return $this->container['outputName'];
    }

    /**
    * Sets outputName
    *
    * @param string|null $outputName 转码输出文件名
    *
    * @return $this
    */
    public function setOutputName($outputName)
    {
        $this->container['outputName'] = $outputName;
        return $this;
    }

    /**
    * Gets output
    *  output
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo|null
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo|null $output output
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

