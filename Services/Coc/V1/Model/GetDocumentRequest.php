<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetDocumentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetDocumentRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * documentId  作业uuid
    * version  作业版本号，示例值v1、v2，不传默认查询最新版本
    * documentType  执行的作业类型 枚举：PUBLIC/PRIVATE 默认PRIVATE
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'documentId' => 'string',
            'version' => 'string',
            'documentType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * documentId  作业uuid
    * version  作业版本号，示例值v1、v2，不传默认查询最新版本
    * documentType  执行的作业类型 枚举：PUBLIC/PRIVATE 默认PRIVATE
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'documentId' => null,
        'version' => null,
        'documentType' => null
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
    * documentId  作业uuid
    * version  作业版本号，示例值v1、v2，不传默认查询最新版本
    * documentType  执行的作业类型 枚举：PUBLIC/PRIVATE 默认PRIVATE
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'documentId' => 'document_id',
            'version' => 'version',
            'documentType' => 'document_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * documentId  作业uuid
    * version  作业版本号，示例值v1、v2，不传默认查询最新版本
    * documentType  执行的作业类型 枚举：PUBLIC/PRIVATE 默认PRIVATE
    *
    * @var string[]
    */
    protected static $setters = [
            'documentId' => 'setDocumentId',
            'version' => 'setVersion',
            'documentType' => 'setDocumentType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * documentId  作业uuid
    * version  作业版本号，示例值v1、v2，不传默认查询最新版本
    * documentType  执行的作业类型 枚举：PUBLIC/PRIVATE 默认PRIVATE
    *
    * @var string[]
    */
    protected static $getters = [
            'documentId' => 'getDocumentId',
            'version' => 'getVersion',
            'documentType' => 'getDocumentType'
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
        $this->container['documentId'] = isset($data['documentId']) ? $data['documentId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['documentType'] = isset($data['documentType']) ? $data['documentType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['documentId'] === null) {
            $invalidProperties[] = "'documentId' can't be null";
        }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 128)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['documentType']) && (mb_strlen($this->container['documentType']) > 32)) {
                $invalidProperties[] = "invalid value for 'documentType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['documentType']) && (mb_strlen($this->container['documentType']) < 0)) {
                $invalidProperties[] = "invalid value for 'documentType', the character length must be bigger than or equal to 0.";
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
    * Gets documentId
    *  作业uuid
    *
    * @return string
    */
    public function getDocumentId()
    {
        return $this->container['documentId'];
    }

    /**
    * Sets documentId
    *
    * @param string $documentId 作业uuid
    *
    * @return $this
    */
    public function setDocumentId($documentId)
    {
        $this->container['documentId'] = $documentId;
        return $this;
    }

    /**
    * Gets version
    *  作业版本号，示例值v1、v2，不传默认查询最新版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 作业版本号，示例值v1、v2，不传默认查询最新版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets documentType
    *  执行的作业类型 枚举：PUBLIC/PRIVATE 默认PRIVATE
    *
    * @return string|null
    */
    public function getDocumentType()
    {
        return $this->container['documentType'];
    }

    /**
    * Sets documentType
    *
    * @param string|null $documentType 执行的作业类型 枚举：PUBLIC/PRIVATE 默认PRIVATE
    *
    * @return $this
    */
    public function setDocumentType($documentType)
    {
        $this->container['documentType'] = $documentType;
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

