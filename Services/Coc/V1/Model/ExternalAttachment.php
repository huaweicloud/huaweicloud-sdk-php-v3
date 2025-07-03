<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExternalAttachment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExternalAttachment';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * docId  附件唯一id。
    * docName  附件文件名。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'docId' => 'string',
            'docName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * docId  附件唯一id。
    * docName  附件文件名。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'docId' => null,
        'docName' => null
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
    * docId  附件唯一id。
    * docName  附件文件名。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'docId' => 'doc_id',
            'docName' => 'doc_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * docId  附件唯一id。
    * docName  附件文件名。
    *
    * @var string[]
    */
    protected static $setters = [
            'docId' => 'setDocId',
            'docName' => 'setDocName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * docId  附件唯一id。
    * docName  附件文件名。
    *
    * @var string[]
    */
    protected static $getters = [
            'docId' => 'getDocId',
            'docName' => 'getDocName'
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
        $this->container['docId'] = isset($data['docId']) ? $data['docId'] : null;
        $this->container['docName'] = isset($data['docName']) ? $data['docName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['docId']) && (mb_strlen($this->container['docId']) > 255)) {
                $invalidProperties[] = "invalid value for 'docId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['docId']) && (mb_strlen($this->container['docId']) < 0)) {
                $invalidProperties[] = "invalid value for 'docId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['docName']) && (mb_strlen($this->container['docName']) > 255)) {
                $invalidProperties[] = "invalid value for 'docName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['docName']) && (mb_strlen($this->container['docName']) < 0)) {
                $invalidProperties[] = "invalid value for 'docName', the character length must be bigger than or equal to 0.";
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
    * Gets docId
    *  附件唯一id。
    *
    * @return string|null
    */
    public function getDocId()
    {
        return $this->container['docId'];
    }

    /**
    * Sets docId
    *
    * @param string|null $docId 附件唯一id。
    *
    * @return $this
    */
    public function setDocId($docId)
    {
        $this->container['docId'] = $docId;
        return $this;
    }

    /**
    * Gets docName
    *  附件文件名。
    *
    * @return string|null
    */
    public function getDocName()
    {
        return $this->container['docName'];
    }

    /**
    * Sets docName
    *
    * @param string|null $docName 附件文件名。
    *
    * @return $this
    */
    public function setDocName($docName)
    {
        $this->container['docName'] = $docName;
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

