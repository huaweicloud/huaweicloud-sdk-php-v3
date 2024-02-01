<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskGroupSrcNodeResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskGroupSrcNodeResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucket  源端桶的名称。
    * cloudType  源端云服务提供商。  可选值有AWS、AZURE、ALIYUN、TENCENT、HUAWEICLOUD、QINGCLOUD、KINGSOFTCLOUD、BAIDU、QINIU、GOOGLE、URLSOURCE或者UCLOUD。默认值为ALIYUN。
    * region  源端桶所处的区域。
    * appId  当源端为腾讯云时，会返回此参数。
    * objectKey  任务组类型为前缀迁移任务时，表示待迁移前缀。
    * listFile  listFile
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucket' => 'string',
            'cloudType' => 'string',
            'region' => 'string',
            'appId' => 'string',
            'objectKey' => 'string[]',
            'listFile' => '\HuaweiCloud\SDK\Oms\V2\Model\ListFile'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucket  源端桶的名称。
    * cloudType  源端云服务提供商。  可选值有AWS、AZURE、ALIYUN、TENCENT、HUAWEICLOUD、QINGCLOUD、KINGSOFTCLOUD、BAIDU、QINIU、GOOGLE、URLSOURCE或者UCLOUD。默认值为ALIYUN。
    * region  源端桶所处的区域。
    * appId  当源端为腾讯云时，会返回此参数。
    * objectKey  任务组类型为前缀迁移任务时，表示待迁移前缀。
    * listFile  listFile
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucket' => null,
        'cloudType' => null,
        'region' => null,
        'appId' => null,
        'objectKey' => null,
        'listFile' => null
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
    * bucket  源端桶的名称。
    * cloudType  源端云服务提供商。  可选值有AWS、AZURE、ALIYUN、TENCENT、HUAWEICLOUD、QINGCLOUD、KINGSOFTCLOUD、BAIDU、QINIU、GOOGLE、URLSOURCE或者UCLOUD。默认值为ALIYUN。
    * region  源端桶所处的区域。
    * appId  当源端为腾讯云时，会返回此参数。
    * objectKey  任务组类型为前缀迁移任务时，表示待迁移前缀。
    * listFile  listFile
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucket' => 'bucket',
            'cloudType' => 'cloud_type',
            'region' => 'region',
            'appId' => 'app_id',
            'objectKey' => 'object_key',
            'listFile' => 'list_file'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucket  源端桶的名称。
    * cloudType  源端云服务提供商。  可选值有AWS、AZURE、ALIYUN、TENCENT、HUAWEICLOUD、QINGCLOUD、KINGSOFTCLOUD、BAIDU、QINIU、GOOGLE、URLSOURCE或者UCLOUD。默认值为ALIYUN。
    * region  源端桶所处的区域。
    * appId  当源端为腾讯云时，会返回此参数。
    * objectKey  任务组类型为前缀迁移任务时，表示待迁移前缀。
    * listFile  listFile
    *
    * @var string[]
    */
    protected static $setters = [
            'bucket' => 'setBucket',
            'cloudType' => 'setCloudType',
            'region' => 'setRegion',
            'appId' => 'setAppId',
            'objectKey' => 'setObjectKey',
            'listFile' => 'setListFile'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucket  源端桶的名称。
    * cloudType  源端云服务提供商。  可选值有AWS、AZURE、ALIYUN、TENCENT、HUAWEICLOUD、QINGCLOUD、KINGSOFTCLOUD、BAIDU、QINIU、GOOGLE、URLSOURCE或者UCLOUD。默认值为ALIYUN。
    * region  源端桶所处的区域。
    * appId  当源端为腾讯云时，会返回此参数。
    * objectKey  任务组类型为前缀迁移任务时，表示待迁移前缀。
    * listFile  listFile
    *
    * @var string[]
    */
    protected static $getters = [
            'bucket' => 'getBucket',
            'cloudType' => 'getCloudType',
            'region' => 'getRegion',
            'appId' => 'getAppId',
            'objectKey' => 'getObjectKey',
            'listFile' => 'getListFile'
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
    const CLOUD_TYPE_AWS = 'AWS';
    const CLOUD_TYPE_AZURE = 'AZURE';
    const CLOUD_TYPE_ALIYUN = 'ALIYUN';
    const CLOUD_TYPE_TENCENT = 'TENCENT';
    const CLOUD_TYPE_HUAWEICLOUD = 'HUAWEICLOUD';
    const CLOUD_TYPE_QINGCLOUD = 'QINGCLOUD';
    const CLOUD_TYPE_KINGSOFTCLOUD = 'KINGSOFTCLOUD';
    const CLOUD_TYPE_BAIDU = 'BAIDU';
    const CLOUD_TYPE_QINIU = 'QINIU';
    const CLOUD_TYPE_URLSOURCE = 'URLSOURCE';
    const CLOUD_TYPE_UCLOUD = 'UCLOUD';
    const CLOUD_TYPE_GOOGLE = 'GOOGLE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCloudTypeAllowableValues()
    {
        return [
            self::CLOUD_TYPE_AWS,
            self::CLOUD_TYPE_AZURE,
            self::CLOUD_TYPE_ALIYUN,
            self::CLOUD_TYPE_TENCENT,
            self::CLOUD_TYPE_HUAWEICLOUD,
            self::CLOUD_TYPE_QINGCLOUD,
            self::CLOUD_TYPE_KINGSOFTCLOUD,
            self::CLOUD_TYPE_BAIDU,
            self::CLOUD_TYPE_QINIU,
            self::CLOUD_TYPE_URLSOURCE,
            self::CLOUD_TYPE_UCLOUD,
            self::CLOUD_TYPE_GOOGLE,
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
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['cloudType'] = isset($data['cloudType']) ? $data['cloudType'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['objectKey'] = isset($data['objectKey']) ? $data['objectKey'] : null;
        $this->container['listFile'] = isset($data['listFile']) ? $data['listFile'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['bucket']) && (mb_strlen($this->container['bucket']) > 1024)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['bucket']) && (mb_strlen($this->container['bucket']) < 0)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bucket']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]$/", $this->container['bucket'])) {
                $invalidProperties[] = "invalid value for 'bucket', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]$/.";
            }
            $allowedValues = $this->getCloudTypeAllowableValues();
                if (!is_null($this->container['cloudType']) && !in_array($this->container['cloudType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'cloudType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 100)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['region']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]$/", $this->container['region'])) {
                $invalidProperties[] = "invalid value for 'region', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]$/.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) > 255)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) < 0)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appId']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]$/", $this->container['appId'])) {
                $invalidProperties[] = "invalid value for 'appId', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]$/.";
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
    * Gets bucket
    *  源端桶的名称。
    *
    * @return string|null
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param string|null $bucket 源端桶的名称。
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets cloudType
    *  源端云服务提供商。  可选值有AWS、AZURE、ALIYUN、TENCENT、HUAWEICLOUD、QINGCLOUD、KINGSOFTCLOUD、BAIDU、QINIU、GOOGLE、URLSOURCE或者UCLOUD。默认值为ALIYUN。
    *
    * @return string|null
    */
    public function getCloudType()
    {
        return $this->container['cloudType'];
    }

    /**
    * Sets cloudType
    *
    * @param string|null $cloudType 源端云服务提供商。  可选值有AWS、AZURE、ALIYUN、TENCENT、HUAWEICLOUD、QINGCLOUD、KINGSOFTCLOUD、BAIDU、QINIU、GOOGLE、URLSOURCE或者UCLOUD。默认值为ALIYUN。
    *
    * @return $this
    */
    public function setCloudType($cloudType)
    {
        $this->container['cloudType'] = $cloudType;
        return $this;
    }

    /**
    * Gets region
    *  源端桶所处的区域。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 源端桶所处的区域。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets appId
    *  当源端为腾讯云时，会返回此参数。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 当源端为腾讯云时，会返回此参数。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets objectKey
    *  任务组类型为前缀迁移任务时，表示待迁移前缀。
    *
    * @return string[]|null
    */
    public function getObjectKey()
    {
        return $this->container['objectKey'];
    }

    /**
    * Sets objectKey
    *
    * @param string[]|null $objectKey 任务组类型为前缀迁移任务时，表示待迁移前缀。
    *
    * @return $this
    */
    public function setObjectKey($objectKey)
    {
        $this->container['objectKey'] = $objectKey;
        return $this;
    }

    /**
    * Gets listFile
    *  listFile
    *
    * @return \HuaweiCloud\SDK\Oms\V2\Model\ListFile|null
    */
    public function getListFile()
    {
        return $this->container['listFile'];
    }

    /**
    * Sets listFile
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\ListFile|null $listFile listFile
    *
    * @return $this
    */
    public function setListFile($listFile)
    {
        $this->container['listFile'] = $listFile;
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

