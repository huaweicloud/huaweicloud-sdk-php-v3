<?php

namespace HuaweiCloud\SDK\Cts\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrackerObsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrackerObsInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucketName  标识OBS桶名称。由数字或字母开头，支持小写字母、数字、“-”、“.”，长度为3～63个字符。
    * filePrefixName  标识需要存储于OBS的日志文件前缀，0-9，a-z，A-Z，'-'，'.'，'_'长度为0～64字符。
    * isObsCreated  是否支持新建OBS桶。   值为“true”时，表示新创建OBS桶存储事件文件；   值为“false”时，选择已存在的OBS桶存储事件文件。
    * bucketLifecycle  标识配置桶内对象存储周期。 当\"tracker_type\"参数值为\"data\"时该参数值有效。
    * compressType  压缩类型。包括不压缩（json），压缩（gzip）两种状态。默认为gzip格式。
    * isSortByService  路径按云服务划分，打开后转储文件路径中将增加云服务名。默认为true。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucketName' => 'string',
            'filePrefixName' => 'string',
            'isObsCreated' => 'bool',
            'bucketLifecycle' => 'int',
            'compressType' => 'string',
            'isSortByService' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucketName  标识OBS桶名称。由数字或字母开头，支持小写字母、数字、“-”、“.”，长度为3～63个字符。
    * filePrefixName  标识需要存储于OBS的日志文件前缀，0-9，a-z，A-Z，'-'，'.'，'_'长度为0～64字符。
    * isObsCreated  是否支持新建OBS桶。   值为“true”时，表示新创建OBS桶存储事件文件；   值为“false”时，选择已存在的OBS桶存储事件文件。
    * bucketLifecycle  标识配置桶内对象存储周期。 当\"tracker_type\"参数值为\"data\"时该参数值有效。
    * compressType  压缩类型。包括不压缩（json），压缩（gzip）两种状态。默认为gzip格式。
    * isSortByService  路径按云服务划分，打开后转储文件路径中将增加云服务名。默认为true。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucketName' => null,
        'filePrefixName' => null,
        'isObsCreated' => null,
        'bucketLifecycle' => null,
        'compressType' => null,
        'isSortByService' => null
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
    * filePrefixName  标识需要存储于OBS的日志文件前缀，0-9，a-z，A-Z，'-'，'.'，'_'长度为0～64字符。
    * isObsCreated  是否支持新建OBS桶。   值为“true”时，表示新创建OBS桶存储事件文件；   值为“false”时，选择已存在的OBS桶存储事件文件。
    * bucketLifecycle  标识配置桶内对象存储周期。 当\"tracker_type\"参数值为\"data\"时该参数值有效。
    * compressType  压缩类型。包括不压缩（json），压缩（gzip）两种状态。默认为gzip格式。
    * isSortByService  路径按云服务划分，打开后转储文件路径中将增加云服务名。默认为true。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucketName' => 'bucket_name',
            'filePrefixName' => 'file_prefix_name',
            'isObsCreated' => 'is_obs_created',
            'bucketLifecycle' => 'bucket_lifecycle',
            'compressType' => 'compress_type',
            'isSortByService' => 'is_sort_by_service'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucketName  标识OBS桶名称。由数字或字母开头，支持小写字母、数字、“-”、“.”，长度为3～63个字符。
    * filePrefixName  标识需要存储于OBS的日志文件前缀，0-9，a-z，A-Z，'-'，'.'，'_'长度为0～64字符。
    * isObsCreated  是否支持新建OBS桶。   值为“true”时，表示新创建OBS桶存储事件文件；   值为“false”时，选择已存在的OBS桶存储事件文件。
    * bucketLifecycle  标识配置桶内对象存储周期。 当\"tracker_type\"参数值为\"data\"时该参数值有效。
    * compressType  压缩类型。包括不压缩（json），压缩（gzip）两种状态。默认为gzip格式。
    * isSortByService  路径按云服务划分，打开后转储文件路径中将增加云服务名。默认为true。
    *
    * @var string[]
    */
    protected static $setters = [
            'bucketName' => 'setBucketName',
            'filePrefixName' => 'setFilePrefixName',
            'isObsCreated' => 'setIsObsCreated',
            'bucketLifecycle' => 'setBucketLifecycle',
            'compressType' => 'setCompressType',
            'isSortByService' => 'setIsSortByService'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucketName  标识OBS桶名称。由数字或字母开头，支持小写字母、数字、“-”、“.”，长度为3～63个字符。
    * filePrefixName  标识需要存储于OBS的日志文件前缀，0-9，a-z，A-Z，'-'，'.'，'_'长度为0～64字符。
    * isObsCreated  是否支持新建OBS桶。   值为“true”时，表示新创建OBS桶存储事件文件；   值为“false”时，选择已存在的OBS桶存储事件文件。
    * bucketLifecycle  标识配置桶内对象存储周期。 当\"tracker_type\"参数值为\"data\"时该参数值有效。
    * compressType  压缩类型。包括不压缩（json），压缩（gzip）两种状态。默认为gzip格式。
    * isSortByService  路径按云服务划分，打开后转储文件路径中将增加云服务名。默认为true。
    *
    * @var string[]
    */
    protected static $getters = [
            'bucketName' => 'getBucketName',
            'filePrefixName' => 'getFilePrefixName',
            'isObsCreated' => 'getIsObsCreated',
            'bucketLifecycle' => 'getBucketLifecycle',
            'compressType' => 'getCompressType',
            'isSortByService' => 'getIsSortByService'
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
    const COMPRESS_TYPE_GZIP = 'gzip';
    const COMPRESS_TYPE_JSON = 'json';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCompressTypeAllowableValues()
    {
        return [
            self::COMPRESS_TYPE_GZIP,
            self::COMPRESS_TYPE_JSON,
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
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['filePrefixName'] = isset($data['filePrefixName']) ? $data['filePrefixName'] : null;
        $this->container['isObsCreated'] = isset($data['isObsCreated']) ? $data['isObsCreated'] : null;
        $this->container['bucketLifecycle'] = isset($data['bucketLifecycle']) ? $data['bucketLifecycle'] : null;
        $this->container['compressType'] = isset($data['compressType']) ? $data['compressType'] : null;
        $this->container['isSortByService'] = isset($data['isSortByService']) ? $data['isSortByService'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['bucketName']) && (mb_strlen($this->container['bucketName']) > 63)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['bucketName']) && (mb_strlen($this->container['bucketName']) < 3)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['filePrefixName']) && (mb_strlen($this->container['filePrefixName']) > 64)) {
                $invalidProperties[] = "invalid value for 'filePrefixName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['filePrefixName']) && (mb_strlen($this->container['filePrefixName']) < 0)) {
                $invalidProperties[] = "invalid value for 'filePrefixName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bucketLifecycle']) && ($this->container['bucketLifecycle'] > 5000)) {
                $invalidProperties[] = "invalid value for 'bucketLifecycle', must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['bucketLifecycle']) && ($this->container['bucketLifecycle'] < 0)) {
                $invalidProperties[] = "invalid value for 'bucketLifecycle', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getCompressTypeAllowableValues();
                if (!is_null($this->container['compressType']) && !in_array($this->container['compressType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'compressType', must be one of '%s'",
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
    * Gets bucketName
    *  标识OBS桶名称。由数字或字母开头，支持小写字母、数字、“-”、“.”，长度为3～63个字符。
    *
    * @return string|null
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string|null $bucketName 标识OBS桶名称。由数字或字母开头，支持小写字母、数字、“-”、“.”，长度为3～63个字符。
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets filePrefixName
    *  标识需要存储于OBS的日志文件前缀，0-9，a-z，A-Z，'-'，'.'，'_'长度为0～64字符。
    *
    * @return string|null
    */
    public function getFilePrefixName()
    {
        return $this->container['filePrefixName'];
    }

    /**
    * Sets filePrefixName
    *
    * @param string|null $filePrefixName 标识需要存储于OBS的日志文件前缀，0-9，a-z，A-Z，'-'，'.'，'_'长度为0～64字符。
    *
    * @return $this
    */
    public function setFilePrefixName($filePrefixName)
    {
        $this->container['filePrefixName'] = $filePrefixName;
        return $this;
    }

    /**
    * Gets isObsCreated
    *  是否支持新建OBS桶。   值为“true”时，表示新创建OBS桶存储事件文件；   值为“false”时，选择已存在的OBS桶存储事件文件。
    *
    * @return bool|null
    */
    public function getIsObsCreated()
    {
        return $this->container['isObsCreated'];
    }

    /**
    * Sets isObsCreated
    *
    * @param bool|null $isObsCreated 是否支持新建OBS桶。   值为“true”时，表示新创建OBS桶存储事件文件；   值为“false”时，选择已存在的OBS桶存储事件文件。
    *
    * @return $this
    */
    public function setIsObsCreated($isObsCreated)
    {
        $this->container['isObsCreated'] = $isObsCreated;
        return $this;
    }

    /**
    * Gets bucketLifecycle
    *  标识配置桶内对象存储周期。 当\"tracker_type\"参数值为\"data\"时该参数值有效。
    *
    * @return int|null
    */
    public function getBucketLifecycle()
    {
        return $this->container['bucketLifecycle'];
    }

    /**
    * Sets bucketLifecycle
    *
    * @param int|null $bucketLifecycle 标识配置桶内对象存储周期。 当\"tracker_type\"参数值为\"data\"时该参数值有效。
    *
    * @return $this
    */
    public function setBucketLifecycle($bucketLifecycle)
    {
        $this->container['bucketLifecycle'] = $bucketLifecycle;
        return $this;
    }

    /**
    * Gets compressType
    *  压缩类型。包括不压缩（json），压缩（gzip）两种状态。默认为gzip格式。
    *
    * @return string|null
    */
    public function getCompressType()
    {
        return $this->container['compressType'];
    }

    /**
    * Sets compressType
    *
    * @param string|null $compressType 压缩类型。包括不压缩（json），压缩（gzip）两种状态。默认为gzip格式。
    *
    * @return $this
    */
    public function setCompressType($compressType)
    {
        $this->container['compressType'] = $compressType;
        return $this;
    }

    /**
    * Gets isSortByService
    *  路径按云服务划分，打开后转储文件路径中将增加云服务名。默认为true。
    *
    * @return bool|null
    */
    public function getIsSortByService()
    {
        return $this->container['isSortByService'];
    }

    /**
    * Sets isSortByService
    *
    * @param bool|null $isSortByService 路径按云服务划分，打开后转储文件路径中将增加云服务名。默认为true。
    *
    * @return $this
    */
    public function setIsSortByService($isSortByService)
    {
        $this->container['isSortByService'] = $isSortByService;
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

