<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageSprite implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageSprite';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * params  params
    * output  output
    * outputObjectName  截取雪碧图后，雪碧图图片文件的输出文件名，如果不填，则默认为：{inputName}_imageSprite_{雪碧图id}_{number}.{format}.{雪碧图id}和{number}从0开始递增
    * webvttObjectName  截取雪碧图后，Web VTT 文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：{inputName}_imageSprite_{雪碧图_id}.vtt
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'params' => '\HuaweiCloud\SDK\Mpc\V1\Model\ImageSpritePara',
            'output' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'outputObjectName' => 'string',
            'webvttObjectName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * params  params
    * output  output
    * outputObjectName  截取雪碧图后，雪碧图图片文件的输出文件名，如果不填，则默认为：{inputName}_imageSprite_{雪碧图id}_{number}.{format}.{雪碧图id}和{number}从0开始递增
    * webvttObjectName  截取雪碧图后，Web VTT 文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：{inputName}_imageSprite_{雪碧图_id}.vtt
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'params' => null,
        'output' => null,
        'outputObjectName' => null,
        'webvttObjectName' => null
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
    * params  params
    * output  output
    * outputObjectName  截取雪碧图后，雪碧图图片文件的输出文件名，如果不填，则默认为：{inputName}_imageSprite_{雪碧图id}_{number}.{format}.{雪碧图id}和{number}从0开始递增
    * webvttObjectName  截取雪碧图后，Web VTT 文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：{inputName}_imageSprite_{雪碧图_id}.vtt
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'params' => 'params',
            'output' => 'output',
            'outputObjectName' => 'output_object_name',
            'webvttObjectName' => 'webvtt_object_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * params  params
    * output  output
    * outputObjectName  截取雪碧图后，雪碧图图片文件的输出文件名，如果不填，则默认为：{inputName}_imageSprite_{雪碧图id}_{number}.{format}.{雪碧图id}和{number}从0开始递增
    * webvttObjectName  截取雪碧图后，Web VTT 文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：{inputName}_imageSprite_{雪碧图_id}.vtt
    *
    * @var string[]
    */
    protected static $setters = [
            'params' => 'setParams',
            'output' => 'setOutput',
            'outputObjectName' => 'setOutputObjectName',
            'webvttObjectName' => 'setWebvttObjectName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * params  params
    * output  output
    * outputObjectName  截取雪碧图后，雪碧图图片文件的输出文件名，如果不填，则默认为：{inputName}_imageSprite_{雪碧图id}_{number}.{format}.{雪碧图id}和{number}从0开始递增
    * webvttObjectName  截取雪碧图后，Web VTT 文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：{inputName}_imageSprite_{雪碧图_id}.vtt
    *
    * @var string[]
    */
    protected static $getters = [
            'params' => 'getParams',
            'output' => 'getOutput',
            'outputObjectName' => 'getOutputObjectName',
            'webvttObjectName' => 'getWebvttObjectName'
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
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['outputObjectName'] = isset($data['outputObjectName']) ? $data['outputObjectName'] : null;
        $this->container['webvttObjectName'] = isset($data['webvttObjectName']) ? $data['webvttObjectName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['params'] === null) {
            $invalidProperties[] = "'params' can't be null";
        }
            if (!is_null($this->container['outputObjectName']) && (mb_strlen($this->container['outputObjectName']) > 180)) {
                $invalidProperties[] = "invalid value for 'outputObjectName', the character length must be smaller than or equal to 180.";
            }
            if (!is_null($this->container['outputObjectName']) && (mb_strlen($this->container['outputObjectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'outputObjectName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['webvttObjectName']) && (mb_strlen($this->container['webvttObjectName']) > 180)) {
                $invalidProperties[] = "invalid value for 'webvttObjectName', the character length must be smaller than or equal to 180.";
            }
            if (!is_null($this->container['webvttObjectName']) && (mb_strlen($this->container['webvttObjectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'webvttObjectName', the character length must be bigger than or equal to 0.";
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
    * Gets params
    *  params
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ImageSpritePara
    */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
    * Sets params
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ImageSpritePara $params params
    *
    * @return $this
    */
    public function setParams($params)
    {
        $this->container['params'] = $params;
        return $this;
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
    * Gets outputObjectName
    *  截取雪碧图后，雪碧图图片文件的输出文件名，如果不填，则默认为：{inputName}_imageSprite_{雪碧图id}_{number}.{format}.{雪碧图id}和{number}从0开始递增
    *
    * @return string|null
    */
    public function getOutputObjectName()
    {
        return $this->container['outputObjectName'];
    }

    /**
    * Sets outputObjectName
    *
    * @param string|null $outputObjectName 截取雪碧图后，雪碧图图片文件的输出文件名，如果不填，则默认为：{inputName}_imageSprite_{雪碧图id}_{number}.{format}.{雪碧图id}和{number}从0开始递增
    *
    * @return $this
    */
    public function setOutputObjectName($outputObjectName)
    {
        $this->container['outputObjectName'] = $outputObjectName;
        return $this;
    }

    /**
    * Gets webvttObjectName
    *  截取雪碧图后，Web VTT 文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：{inputName}_imageSprite_{雪碧图_id}.vtt
    *
    * @return string|null
    */
    public function getWebvttObjectName()
    {
        return $this->container['webvttObjectName'];
    }

    /**
    * Sets webvttObjectName
    *
    * @param string|null $webvttObjectName 截取雪碧图后，Web VTT 文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：{inputName}_imageSprite_{雪碧图_id}.vtt
    *
    * @return $this
    */
    public function setWebvttObjectName($webvttObjectName)
    {
        $this->container['webvttObjectName'] = $webvttObjectName;
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

