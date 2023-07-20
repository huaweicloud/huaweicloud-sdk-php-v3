<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AomMappingfilesInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AomMappingfilesInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileName  路径名
    * logStreamInfo  logStreamInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileName' => 'string',
            'logStreamInfo' => '\HuaweiCloud\SDK\Lts\V2\Model\AomMappingLogStreamInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileName  路径名
    * logStreamInfo  logStreamInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileName' => null,
        'logStreamInfo' => null
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
    * fileName  路径名
    * logStreamInfo  logStreamInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileName' => 'file_name',
            'logStreamInfo' => 'log_stream_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileName  路径名
    * logStreamInfo  logStreamInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'fileName' => 'setFileName',
            'logStreamInfo' => 'setLogStreamInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileName  路径名
    * logStreamInfo  logStreamInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'fileName' => 'getFileName',
            'logStreamInfo' => 'getLogStreamInfo'
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
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['logStreamInfo'] = isset($data['logStreamInfo']) ? $data['logStreamInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fileName'] === null) {
            $invalidProperties[] = "'fileName' can't be null";
        }
            if (!preg_match("/^\/[A-Za-z0-9.*_\/-]+|stdout\\.log|/", $this->container['fileName'])) {
                $invalidProperties[] = "invalid value for 'fileName', must be conform to the pattern /^\/[A-Za-z0-9.*_\/-]+|stdout\\.log|/.";
            }
        if ($this->container['logStreamInfo'] === null) {
            $invalidProperties[] = "'logStreamInfo' can't be null";
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
    * Gets fileName
    *  路径名
    *
    * @return string
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string $fileName 路径名
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets logStreamInfo
    *  logStreamInfo
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\AomMappingLogStreamInfo
    */
    public function getLogStreamInfo()
    {
        return $this->container['logStreamInfo'];
    }

    /**
    * Sets logStreamInfo
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\AomMappingLogStreamInfo $logStreamInfo logStreamInfo
    *
    * @return $this
    */
    public function setLogStreamInfo($logStreamInfo)
    {
        $this->container['logStreamInfo'] = $logStreamInfo;
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

