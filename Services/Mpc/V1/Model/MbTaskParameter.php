<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MbTaskParameter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MbTaskParameter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * statusDescription  具体状态描述，FAILED时可用于分析问题。
    * outputFilename  输出文件名称。
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'statusDescription' => 'string',
            'outputFilename' => 'string',
            'metadata' => '\HuaweiCloud\SDK\Mpc\V1\Model\MetaData'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * statusDescription  具体状态描述，FAILED时可用于分析问题。
    * outputFilename  输出文件名称。
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'statusDescription' => null,
        'outputFilename' => null,
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
    * statusDescription  具体状态描述，FAILED时可用于分析问题。
    * outputFilename  输出文件名称。
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'statusDescription' => 'status_description',
            'outputFilename' => 'output_filename',
            'metadata' => 'metadata'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * statusDescription  具体状态描述，FAILED时可用于分析问题。
    * outputFilename  输出文件名称。
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $setters = [
            'statusDescription' => 'setStatusDescription',
            'outputFilename' => 'setOutputFilename',
            'metadata' => 'setMetadata'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * statusDescription  具体状态描述，FAILED时可用于分析问题。
    * outputFilename  输出文件名称。
    * metadata  metadata
    *
    * @var string[]
    */
    protected static $getters = [
            'statusDescription' => 'getStatusDescription',
            'outputFilename' => 'getOutputFilename',
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
        $this->container['statusDescription'] = isset($data['statusDescription']) ? $data['statusDescription'] : null;
        $this->container['outputFilename'] = isset($data['outputFilename']) ? $data['outputFilename'] : null;
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
            if (!is_null($this->container['statusDescription']) && (mb_strlen($this->container['statusDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'statusDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['statusDescription']) && (mb_strlen($this->container['statusDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'statusDescription', the character length must be bigger than or equal to 0.";
            }
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
    * Gets statusDescription
    *  具体状态描述，FAILED时可用于分析问题。
    *
    * @return string|null
    */
    public function getStatusDescription()
    {
        return $this->container['statusDescription'];
    }

    /**
    * Sets statusDescription
    *
    * @param string|null $statusDescription 具体状态描述，FAILED时可用于分析问题。
    *
    * @return $this
    */
    public function setStatusDescription($statusDescription)
    {
        $this->container['statusDescription'] = $statusDescription;
        return $this;
    }

    /**
    * Gets outputFilename
    *  输出文件名称。
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
    * @param string|null $outputFilename 输出文件名称。
    *
    * @return $this
    */
    public function setOutputFilename($outputFilename)
    {
        $this->container['outputFilename'] = $outputFilename;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\MetaData|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\MetaData|null $metadata metadata
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

