<?php

namespace HuaweiCloud\SDK\Ims\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportImageRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportImageRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucketUrl' => 'string',
            'fileFormat' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucketUrl' => null,
        'fileFormat' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucketUrl' => 'bucket_url',
            'fileFormat' => 'file_format'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'bucketUrl' => 'setBucketUrl',
            'fileFormat' => 'setFileFormat'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'bucketUrl' => 'getBucketUrl',
            'fileFormat' => 'getFileFormat'
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
    const FILE_FORMAT_QCOW2 = 'qcow2';
    const FILE_FORMAT_VHD = 'vhd';
    const FILE_FORMAT_ZVHD = 'zvhd';
    const FILE_FORMAT_VMDK = 'vmdk';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFileFormatAllowableValues()
    {
        return [
            self::FILE_FORMAT_QCOW2,
            self::FILE_FORMAT_VHD,
            self::FILE_FORMAT_ZVHD,
            self::FILE_FORMAT_VMDK,
        ];
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
        $this->container['bucketUrl'] = isset($data['bucketUrl']) ? $data['bucketUrl'] : null;
        $this->container['fileFormat'] = isset($data['fileFormat']) ? $data['fileFormat'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['bucketUrl'] === null) {
            $invalidProperties[] = "'bucketUrl' can't be null";
        }
        if ($this->container['fileFormat'] === null) {
            $invalidProperties[] = "'fileFormat' can't be null";
        }
            $allowedValues = $this->getFileFormatAllowableValues();
                if (!is_null($this->container['fileFormat']) && !in_array($this->container['fileFormat'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'fileFormat', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets bucketUrl
    *
    * @return string
    */
    public function getBucketUrl()
    {
        return $this->container['bucketUrl'];
    }

    /**
    * Sets bucketUrl
    *
    * @param string $bucketUrl 目的文件的URL，格式：<bucket>:<file>。 说明：此处的OBS桶和镜像文件的存储类别必须是OBS标准存储。
    *
    * @return $this
    */
    public function setBucketUrl($bucketUrl)
    {
        $this->container['bucketUrl'] = $bucketUrl;
        return $this;
    }

    /**
    * Gets fileFormat
    *
    * @return string
    */
    public function getFileFormat()
    {
        return $this->container['fileFormat'];
    }

    /**
    * Sets fileFormat
    *
    * @param string $fileFormat 文件格式，支持qcow2、vhd、zvhd和vmdk。
    *
    * @return $this
    */
    public function setFileFormat($fileFormat)
    {
        $this->container['fileFormat'] = $fileFormat;
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

