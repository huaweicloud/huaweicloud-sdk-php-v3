<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DefaultCertsResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DefaultCertsResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileName  证书名称。
    * fileLocation  证书路径。
    * status  证书状态。
    * column  描述列。
    * desc  证书描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileName' => 'string',
            'fileLocation' => 'string',
            'status' => 'string',
            'column' => 'string',
            'desc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileName  证书名称。
    * fileLocation  证书路径。
    * status  证书状态。
    * column  描述列。
    * desc  证书描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileName' => null,
        'fileLocation' => null,
        'status' => null,
        'column' => null,
        'desc' => null
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
    * fileName  证书名称。
    * fileLocation  证书路径。
    * status  证书状态。
    * column  描述列。
    * desc  证书描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileName' => 'fileName',
            'fileLocation' => 'fileLocation',
            'status' => 'status',
            'column' => 'column',
            'desc' => 'desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileName  证书名称。
    * fileLocation  证书路径。
    * status  证书状态。
    * column  描述列。
    * desc  证书描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'fileName' => 'setFileName',
            'fileLocation' => 'setFileLocation',
            'status' => 'setStatus',
            'column' => 'setColumn',
            'desc' => 'setDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileName  证书名称。
    * fileLocation  证书路径。
    * status  证书状态。
    * column  描述列。
    * desc  证书描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'fileName' => 'getFileName',
            'fileLocation' => 'getFileLocation',
            'status' => 'getStatus',
            'column' => 'getColumn',
            'desc' => 'getDesc'
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
        $this->container['fileLocation'] = isset($data['fileLocation']) ? $data['fileLocation'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['column'] = isset($data['column']) ? $data['column'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
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
    * Gets fileName
    *  证书名称。
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 证书名称。
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets fileLocation
    *  证书路径。
    *
    * @return string|null
    */
    public function getFileLocation()
    {
        return $this->container['fileLocation'];
    }

    /**
    * Sets fileLocation
    *
    * @param string|null $fileLocation 证书路径。
    *
    * @return $this
    */
    public function setFileLocation($fileLocation)
    {
        $this->container['fileLocation'] = $fileLocation;
        return $this;
    }

    /**
    * Gets status
    *  证书状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 证书状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets column
    *  描述列。
    *
    * @return string|null
    */
    public function getColumn()
    {
        return $this->container['column'];
    }

    /**
    * Sets column
    *
    * @param string|null $column 描述列。
    *
    * @return $this
    */
    public function setColumn($column)
    {
        $this->container['column'] = $column;
        return $this;
    }

    /**
    * Gets desc
    *  证书描述。
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 证书描述。
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
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

