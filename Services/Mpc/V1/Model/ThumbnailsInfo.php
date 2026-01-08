<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ThumbnailsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ThumbnailsInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * picInfo  截图文件信息。
    * output  output
    * outputName  截图压缩包名。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'picInfo' => '\HuaweiCloud\SDK\Mpc\V1\Model\PicInfo[]',
            'output' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'outputName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * picInfo  截图文件信息。
    * output  output
    * outputName  截图压缩包名。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'picInfo' => null,
        'output' => null,
        'outputName' => null
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
    * picInfo  截图文件信息。
    * output  output
    * outputName  截图压缩包名。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'picInfo' => 'pic_info',
            'output' => 'output',
            'outputName' => 'output_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * picInfo  截图文件信息。
    * output  output
    * outputName  截图压缩包名。
    *
    * @var string[]
    */
    protected static $setters = [
            'picInfo' => 'setPicInfo',
            'output' => 'setOutput',
            'outputName' => 'setOutputName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * picInfo  截图文件信息。
    * output  output
    * outputName  截图压缩包名。
    *
    * @var string[]
    */
    protected static $getters = [
            'picInfo' => 'getPicInfo',
            'output' => 'getOutput',
            'outputName' => 'getOutputName'
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
        $this->container['picInfo'] = isset($data['picInfo']) ? $data['picInfo'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['outputName'] = isset($data['outputName']) ? $data['outputName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['outputName']) && (mb_strlen($this->container['outputName']) > 256)) {
                $invalidProperties[] = "invalid value for 'outputName', the character length must be smaller than or equal to 256.";
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
    * Gets picInfo
    *  截图文件信息。
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\PicInfo[]|null
    */
    public function getPicInfo()
    {
        return $this->container['picInfo'];
    }

    /**
    * Sets picInfo
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\PicInfo[]|null $picInfo 截图文件信息。
    *
    * @return $this
    */
    public function setPicInfo($picInfo)
    {
        $this->container['picInfo'] = $picInfo;
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
    * Gets outputName
    *  截图压缩包名。
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
    * @param string|null $outputName 截图压缩包名。
    *
    * @return $this
    */
    public function setOutputName($outputName)
    {
        $this->container['outputName'] = $outputName;
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

