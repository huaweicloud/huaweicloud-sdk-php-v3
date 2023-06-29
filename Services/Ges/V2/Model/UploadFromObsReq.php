<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UploadFromObsReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UploadFromObsReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metadataPath  元数据存储地址。
    * name  元数据的名字。
    * description  对元数据的描述。
    * encryption  encryption
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metadataPath' => 'string',
            'name' => 'string',
            'description' => 'string',
            'encryption' => '\HuaweiCloud\SDK\Ges\V2\Model\UploadFromObsReqEncryption'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metadataPath  元数据存储地址。
    * name  元数据的名字。
    * description  对元数据的描述。
    * encryption  encryption
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metadataPath' => null,
        'name' => null,
        'description' => null,
        'encryption' => null
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
    * metadataPath  元数据存储地址。
    * name  元数据的名字。
    * description  对元数据的描述。
    * encryption  encryption
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metadataPath' => 'metadata_path',
            'name' => 'name',
            'description' => 'description',
            'encryption' => 'encryption'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metadataPath  元数据存储地址。
    * name  元数据的名字。
    * description  对元数据的描述。
    * encryption  encryption
    *
    * @var string[]
    */
    protected static $setters = [
            'metadataPath' => 'setMetadataPath',
            'name' => 'setName',
            'description' => 'setDescription',
            'encryption' => 'setEncryption'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metadataPath  元数据存储地址。
    * name  元数据的名字。
    * description  对元数据的描述。
    * encryption  encryption
    *
    * @var string[]
    */
    protected static $getters = [
            'metadataPath' => 'getMetadataPath',
            'name' => 'getName',
            'description' => 'getDescription',
            'encryption' => 'getEncryption'
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
        $this->container['metadataPath'] = isset($data['metadataPath']) ? $data['metadataPath'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['encryption'] = isset($data['encryption']) ? $data['encryption'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['metadataPath'] === null) {
            $invalidProperties[] = "'metadataPath' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets metadataPath
    *  元数据存储地址。
    *
    * @return string
    */
    public function getMetadataPath()
    {
        return $this->container['metadataPath'];
    }

    /**
    * Sets metadataPath
    *
    * @param string $metadataPath 元数据存储地址。
    *
    * @return $this
    */
    public function setMetadataPath($metadataPath)
    {
        $this->container['metadataPath'] = $metadataPath;
        return $this;
    }

    /**
    * Gets name
    *  元数据的名字。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 元数据的名字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  对元数据的描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 对元数据的描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets encryption
    *  encryption
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\UploadFromObsReqEncryption|null
    */
    public function getEncryption()
    {
        return $this->container['encryption'];
    }

    /**
    * Sets encryption
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\UploadFromObsReqEncryption|null $encryption encryption
    *
    * @return $this
    */
    public function setEncryption($encryption)
    {
        $this->container['encryption'] = $encryption;
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

