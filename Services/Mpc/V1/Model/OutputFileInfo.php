<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OutputFileInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OutputFileInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * outputFileName  输出文件名。
    * execDescription  处理信息。
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'outputFileName' => 'string',
            'execDescription' => 'string',
            'metaData' => '\HuaweiCloud\SDK\Mpc\V1\Model\SourceInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * outputFileName  输出文件名。
    * execDescription  处理信息。
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'outputFileName' => null,
        'execDescription' => null,
        'metaData' => null
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
    * outputFileName  输出文件名。
    * execDescription  处理信息。
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'outputFileName' => 'output_file_name',
            'execDescription' => 'exec_description',
            'metaData' => 'meta_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * outputFileName  输出文件名。
    * execDescription  处理信息。
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $setters = [
            'outputFileName' => 'setOutputFileName',
            'execDescription' => 'setExecDescription',
            'metaData' => 'setMetaData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * outputFileName  输出文件名。
    * execDescription  处理信息。
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $getters = [
            'outputFileName' => 'getOutputFileName',
            'execDescription' => 'getExecDescription',
            'metaData' => 'getMetaData'
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
        $this->container['outputFileName'] = isset($data['outputFileName']) ? $data['outputFileName'] : null;
        $this->container['execDescription'] = isset($data['execDescription']) ? $data['execDescription'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['outputFileName']) && (mb_strlen($this->container['outputFileName']) > 256)) {
                $invalidProperties[] = "invalid value for 'outputFileName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['outputFileName']) && (mb_strlen($this->container['outputFileName']) < 0)) {
                $invalidProperties[] = "invalid value for 'outputFileName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['execDescription']) && (mb_strlen($this->container['execDescription']) > 256)) {
                $invalidProperties[] = "invalid value for 'execDescription', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['execDescription']) && (mb_strlen($this->container['execDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'execDescription', the character length must be bigger than or equal to 0.";
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
    * Gets outputFileName
    *  输出文件名。
    *
    * @return string|null
    */
    public function getOutputFileName()
    {
        return $this->container['outputFileName'];
    }

    /**
    * Sets outputFileName
    *
    * @param string|null $outputFileName 输出文件名。
    *
    * @return $this
    */
    public function setOutputFileName($outputFileName)
    {
        $this->container['outputFileName'] = $outputFileName;
        return $this;
    }

    /**
    * Gets execDescription
    *  处理信息。
    *
    * @return string|null
    */
    public function getExecDescription()
    {
        return $this->container['execDescription'];
    }

    /**
    * Sets execDescription
    *
    * @param string|null $execDescription 处理信息。
    *
    * @return $this
    */
    public function setExecDescription($execDescription)
    {
        $this->container['execDescription'] = $execDescription;
        return $this;
    }

    /**
    * Gets metaData
    *  metaData
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\SourceInfo|null
    */
    public function getMetaData()
    {
        return $this->container['metaData'];
    }

    /**
    * Sets metaData
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\SourceInfo|null $metaData metaData
    *
    * @return $this
    */
    public function setMetaData($metaData)
    {
        $this->container['metaData'] = $metaData;
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

