<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CertsRecordsDatastore implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CertsRecordsDatastore';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  证书记录ID。
    * status  证书状态。
    * fileLocation  证书记录文件位置。
    * fileName  证书记录文件名称。
    * updateAt  证书记录更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'fileLocation' => 'string',
            'fileName' => 'bool',
            'updateAt' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  证书记录ID。
    * status  证书状态。
    * fileLocation  证书记录文件位置。
    * fileName  证书记录文件名称。
    * updateAt  证书记录更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'fileLocation' => null,
        'fileName' => null,
        'updateAt' => null
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
    * id  证书记录ID。
    * status  证书状态。
    * fileLocation  证书记录文件位置。
    * fileName  证书记录文件名称。
    * updateAt  证书记录更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'fileLocation' => 'fileLocation',
            'fileName' => 'fileName',
            'updateAt' => 'updateAt'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  证书记录ID。
    * status  证书状态。
    * fileLocation  证书记录文件位置。
    * fileName  证书记录文件名称。
    * updateAt  证书记录更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'fileLocation' => 'setFileLocation',
            'fileName' => 'setFileName',
            'updateAt' => 'setUpdateAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  证书记录ID。
    * status  证书状态。
    * fileLocation  证书记录文件位置。
    * fileName  证书记录文件名称。
    * updateAt  证书记录更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'fileLocation' => 'getFileLocation',
            'fileName' => 'getFileName',
            'updateAt' => 'getUpdateAt'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['fileLocation'] = isset($data['fileLocation']) ? $data['fileLocation'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
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
    * Gets id
    *  证书记录ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 证书记录ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets fileLocation
    *  证书记录文件位置。
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
    * @param string|null $fileLocation 证书记录文件位置。
    *
    * @return $this
    */
    public function setFileLocation($fileLocation)
    {
        $this->container['fileLocation'] = $fileLocation;
        return $this;
    }

    /**
    * Gets fileName
    *  证书记录文件名称。
    *
    * @return bool|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param bool|null $fileName 证书记录文件名称。
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets updateAt
    *  证书记录更新时间。
    *
    * @return bool|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param bool|null $updateAt 证书记录更新时间。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
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

