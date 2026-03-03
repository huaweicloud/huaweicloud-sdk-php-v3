<?php

namespace HuaweiCloud\SDK\Cts\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckBucketRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckBucketRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucketName  标识OBS桶名称。由数字或字母开头，支持小写字母、数字、“-”、“.”，长度为3～63个字符。
    * bucketLocation  标识OBS桶位置。
    * kmsId  事件文件转储加密所采用的秘钥id，is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
    * isSupportTraceFilesEncryption  事件文件转储加密功能开关。 该参数必须与kms_id参数同时使用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucketName' => 'string',
            'bucketLocation' => 'string',
            'kmsId' => 'string',
            'isSupportTraceFilesEncryption' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucketName  标识OBS桶名称。由数字或字母开头，支持小写字母、数字、“-”、“.”，长度为3～63个字符。
    * bucketLocation  标识OBS桶位置。
    * kmsId  事件文件转储加密所采用的秘钥id，is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
    * isSupportTraceFilesEncryption  事件文件转储加密功能开关。 该参数必须与kms_id参数同时使用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucketName' => null,
        'bucketLocation' => null,
        'kmsId' => null,
        'isSupportTraceFilesEncryption' => null
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
    * bucketName  标识OBS桶名称。由数字或字母开头，支持小写字母、数字、“-”、“.”，长度为3～63个字符。
    * bucketLocation  标识OBS桶位置。
    * kmsId  事件文件转储加密所采用的秘钥id，is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
    * isSupportTraceFilesEncryption  事件文件转储加密功能开关。 该参数必须与kms_id参数同时使用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucketName' => 'bucket_name',
            'bucketLocation' => 'bucket_location',
            'kmsId' => 'kms_id',
            'isSupportTraceFilesEncryption' => 'is_support_trace_files_encryption'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucketName  标识OBS桶名称。由数字或字母开头，支持小写字母、数字、“-”、“.”，长度为3～63个字符。
    * bucketLocation  标识OBS桶位置。
    * kmsId  事件文件转储加密所采用的秘钥id，is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
    * isSupportTraceFilesEncryption  事件文件转储加密功能开关。 该参数必须与kms_id参数同时使用。
    *
    * @var string[]
    */
    protected static $setters = [
            'bucketName' => 'setBucketName',
            'bucketLocation' => 'setBucketLocation',
            'kmsId' => 'setKmsId',
            'isSupportTraceFilesEncryption' => 'setIsSupportTraceFilesEncryption'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucketName  标识OBS桶名称。由数字或字母开头，支持小写字母、数字、“-”、“.”，长度为3～63个字符。
    * bucketLocation  标识OBS桶位置。
    * kmsId  事件文件转储加密所采用的秘钥id，is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
    * isSupportTraceFilesEncryption  事件文件转储加密功能开关。 该参数必须与kms_id参数同时使用。
    *
    * @var string[]
    */
    protected static $getters = [
            'bucketName' => 'getBucketName',
            'bucketLocation' => 'getBucketLocation',
            'kmsId' => 'getKmsId',
            'isSupportTraceFilesEncryption' => 'getIsSupportTraceFilesEncryption'
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
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['bucketLocation'] = isset($data['bucketLocation']) ? $data['bucketLocation'] : null;
        $this->container['kmsId'] = isset($data['kmsId']) ? $data['kmsId'] : null;
        $this->container['isSupportTraceFilesEncryption'] = isset($data['isSupportTraceFilesEncryption']) ? $data['isSupportTraceFilesEncryption'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['bucketName'] === null) {
            $invalidProperties[] = "'bucketName' can't be null";
        }
            if ((mb_strlen($this->container['bucketName']) > 63)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['bucketName']) < 3)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['bucketLocation'] === null) {
            $invalidProperties[] = "'bucketLocation' can't be null";
        }
            if ((mb_strlen($this->container['bucketLocation']) > 32)) {
                $invalidProperties[] = "invalid value for 'bucketLocation', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['bucketLocation']) < 1)) {
                $invalidProperties[] = "invalid value for 'bucketLocation', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['kmsId']) && (mb_strlen($this->container['kmsId']) > 200)) {
                $invalidProperties[] = "invalid value for 'kmsId', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['kmsId']) && (mb_strlen($this->container['kmsId']) < 0)) {
                $invalidProperties[] = "invalid value for 'kmsId', the character length must be bigger than or equal to 0.";
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
    * Gets bucketName
    *  标识OBS桶名称。由数字或字母开头，支持小写字母、数字、“-”、“.”，长度为3～63个字符。
    *
    * @return string
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string $bucketName 标识OBS桶名称。由数字或字母开头，支持小写字母、数字、“-”、“.”，长度为3～63个字符。
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets bucketLocation
    *  标识OBS桶位置。
    *
    * @return string
    */
    public function getBucketLocation()
    {
        return $this->container['bucketLocation'];
    }

    /**
    * Sets bucketLocation
    *
    * @param string $bucketLocation 标识OBS桶位置。
    *
    * @return $this
    */
    public function setBucketLocation($bucketLocation)
    {
        $this->container['bucketLocation'] = $bucketLocation;
        return $this;
    }

    /**
    * Gets kmsId
    *  事件文件转储加密所采用的秘钥id，is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
    *
    * @return string|null
    */
    public function getKmsId()
    {
        return $this->container['kmsId'];
    }

    /**
    * Sets kmsId
    *
    * @param string|null $kmsId 事件文件转储加密所采用的秘钥id，is_support_trace_files_encryption\"参数值为“是”时，此参数为必选项。
    *
    * @return $this
    */
    public function setKmsId($kmsId)
    {
        $this->container['kmsId'] = $kmsId;
        return $this;
    }

    /**
    * Gets isSupportTraceFilesEncryption
    *  事件文件转储加密功能开关。 该参数必须与kms_id参数同时使用。
    *
    * @return bool|null
    */
    public function getIsSupportTraceFilesEncryption()
    {
        return $this->container['isSupportTraceFilesEncryption'];
    }

    /**
    * Sets isSupportTraceFilesEncryption
    *
    * @param bool|null $isSupportTraceFilesEncryption 事件文件转储加密功能开关。 该参数必须与kms_id参数同时使用。
    *
    * @return $this
    */
    public function setIsSupportTraceFilesEncryption($isSupportTraceFilesEncryption)
    {
        $this->container['isSupportTraceFilesEncryption'] = $isSupportTraceFilesEncryption;
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

