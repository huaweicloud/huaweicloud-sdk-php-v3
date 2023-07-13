<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MpcMultiAudio implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MpcMultiAudio';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * output  output
    * audioFiles  音频文件列表
    * outputFilename  输出文件名。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'output' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'audioFiles' => '\HuaweiCloud\SDK\Mpc\V1\Model\AudioFile[]',
            'outputFilename' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * output  output
    * audioFiles  音频文件列表
    * outputFilename  输出文件名。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'output' => null,
        'audioFiles' => null,
        'outputFilename' => null
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
    * output  output
    * audioFiles  音频文件列表
    * outputFilename  输出文件名。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'output' => 'output',
            'audioFiles' => 'audio_files',
            'outputFilename' => 'output_filename'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * output  output
    * audioFiles  音频文件列表
    * outputFilename  输出文件名。
    *
    * @var string[]
    */
    protected static $setters = [
            'output' => 'setOutput',
            'audioFiles' => 'setAudioFiles',
            'outputFilename' => 'setOutputFilename'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * output  output
    * audioFiles  音频文件列表
    * outputFilename  输出文件名。
    *
    * @var string[]
    */
    protected static $getters = [
            'output' => 'getOutput',
            'audioFiles' => 'getAudioFiles',
            'outputFilename' => 'getOutputFilename'
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
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['audioFiles'] = isset($data['audioFiles']) ? $data['audioFiles'] : null;
        $this->container['outputFilename'] = isset($data['outputFilename']) ? $data['outputFilename'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['outputFilename']) && (mb_strlen($this->container['outputFilename']) > 256)) {
                $invalidProperties[] = "invalid value for 'outputFilename', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['outputFilename']) && (mb_strlen($this->container['outputFilename']) < 0)) {
                $invalidProperties[] = "invalid value for 'outputFilename', the character length must be bigger than or equal to 0.";
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
    * Gets output
    *  output
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null $output output
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
        return $this;
    }

    /**
    * Gets audioFiles
    *  音频文件列表
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\AudioFile[]|null
    */
    public function getAudioFiles()
    {
        return $this->container['audioFiles'];
    }

    /**
    * Sets audioFiles
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\AudioFile[]|null $audioFiles 音频文件列表
    *
    * @return $this
    */
    public function setAudioFiles($audioFiles)
    {
        $this->container['audioFiles'] = $audioFiles;
        return $this;
    }

    /**
    * Gets outputFilename
    *  输出文件名。
    *
    * @return string|null
    */
    public function getOutputFilename()
    {
        return $this->container['outputFilename'];
    }

    /**
    * Sets outputFilename
    *
    * @param string|null $outputFilename 输出文件名。
    *
    * @return $this
    */
    public function setOutputFilename($outputFilename)
    {
        $this->container['outputFilename'] = $outputFilename;
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

