<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TranscodeDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TranscodeDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * multitaskInfo  一进多出情况下部分转码失败的情况。
    * inputFile  inputFile
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'multitaskInfo' => '\HuaweiCloud\SDK\Mpc\V1\Model\MultiTaskInfo[]',
            'inputFile' => '\HuaweiCloud\SDK\Mpc\V1\Model\SourceInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * multitaskInfo  一进多出情况下部分转码失败的情况。
    * inputFile  inputFile
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'multitaskInfo' => null,
        'inputFile' => null
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
    * multitaskInfo  一进多出情况下部分转码失败的情况。
    * inputFile  inputFile
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'multitaskInfo' => 'multitask_info',
            'inputFile' => 'input_file'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * multitaskInfo  一进多出情况下部分转码失败的情况。
    * inputFile  inputFile
    *
    * @var string[]
    */
    protected static $setters = [
            'multitaskInfo' => 'setMultitaskInfo',
            'inputFile' => 'setInputFile'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * multitaskInfo  一进多出情况下部分转码失败的情况。
    * inputFile  inputFile
    *
    * @var string[]
    */
    protected static $getters = [
            'multitaskInfo' => 'getMultitaskInfo',
            'inputFile' => 'getInputFile'
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
        $this->container['multitaskInfo'] = isset($data['multitaskInfo']) ? $data['multitaskInfo'] : null;
        $this->container['inputFile'] = isset($data['inputFile']) ? $data['inputFile'] : null;
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
    * Gets multitaskInfo
    *  一进多出情况下部分转码失败的情况。
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\MultiTaskInfo[]|null
    */
    public function getMultitaskInfo()
    {
        return $this->container['multitaskInfo'];
    }

    /**
    * Sets multitaskInfo
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\MultiTaskInfo[]|null $multitaskInfo 一进多出情况下部分转码失败的情况。
    *
    * @return $this
    */
    public function setMultitaskInfo($multitaskInfo)
    {
        $this->container['multitaskInfo'] = $multitaskInfo;
        return $this;
    }

    /**
    * Gets inputFile
    *  inputFile
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\SourceInfo|null
    */
    public function getInputFile()
    {
        return $this->container['inputFile'];
    }

    /**
    * Sets inputFile
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\SourceInfo|null $inputFile inputFile
    *
    * @return $this
    */
    public function setInputFile($inputFile)
    {
        $this->container['inputFile'] = $inputFile;
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

