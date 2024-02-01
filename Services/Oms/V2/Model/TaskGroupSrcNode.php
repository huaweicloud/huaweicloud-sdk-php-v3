<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskGroupSrcNode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskGroupSrcNode';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ak  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * sk  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * jsonAuthFile  用于谷歌云Cloud Storage鉴权
    * appId  当源端为腾讯云时，需要填写此参数。
    * region  源端桶所处的区域，task_type为非URL_LIST时，本参数为必选。
    * objectKey  任务类型为前缀迁移任务时，表示待迁移前缀。 整桶迁移时，此参数设置为[\"\"]。
    * bucket  源端所在桶
    * cloudType  源端云服务提供商，当task_type为URL_LIST时，本参数为URLSource且必选。可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、URLSource、Google或者UCloud。默认值为Aliyun。
    * listFile  listFile
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ak' => 'string',
            'sk' => 'string',
            'jsonAuthFile' => 'string',
            'appId' => 'string',
            'region' => 'string',
            'objectKey' => 'string[]',
            'bucket' => 'string',
            'cloudType' => 'string',
            'listFile' => '\HuaweiCloud\SDK\Oms\V2\Model\ListFile'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ak  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * sk  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * jsonAuthFile  用于谷歌云Cloud Storage鉴权
    * appId  当源端为腾讯云时，需要填写此参数。
    * region  源端桶所处的区域，task_type为非URL_LIST时，本参数为必选。
    * objectKey  任务类型为前缀迁移任务时，表示待迁移前缀。 整桶迁移时，此参数设置为[\"\"]。
    * bucket  源端所在桶
    * cloudType  源端云服务提供商，当task_type为URL_LIST时，本参数为URLSource且必选。可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、URLSource、Google或者UCloud。默认值为Aliyun。
    * listFile  listFile
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ak' => null,
        'sk' => null,
        'jsonAuthFile' => null,
        'appId' => null,
        'region' => null,
        'objectKey' => null,
        'bucket' => null,
        'cloudType' => null,
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
    * ak  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * sk  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * jsonAuthFile  用于谷歌云Cloud Storage鉴权
    * appId  当源端为腾讯云时，需要填写此参数。
    * region  源端桶所处的区域，task_type为非URL_LIST时，本参数为必选。
    * objectKey  任务类型为前缀迁移任务时，表示待迁移前缀。 整桶迁移时，此参数设置为[\"\"]。
    * bucket  源端所在桶
    * cloudType  源端云服务提供商，当task_type为URL_LIST时，本参数为URLSource且必选。可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、URLSource、Google或者UCloud。默认值为Aliyun。
    * listFile  listFile
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ak' => 'ak',
            'sk' => 'sk',
            'jsonAuthFile' => 'json_auth_file',
            'appId' => 'app_id',
            'region' => 'region',
            'objectKey' => 'object_key',
            'bucket' => 'bucket',
            'cloudType' => 'cloud_type',
            'listFile' => 'list_file'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ak  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * sk  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * jsonAuthFile  用于谷歌云Cloud Storage鉴权
    * appId  当源端为腾讯云时，需要填写此参数。
    * region  源端桶所处的区域，task_type为非URL_LIST时，本参数为必选。
    * objectKey  任务类型为前缀迁移任务时，表示待迁移前缀。 整桶迁移时，此参数设置为[\"\"]。
    * bucket  源端所在桶
    * cloudType  源端云服务提供商，当task_type为URL_LIST时，本参数为URLSource且必选。可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、URLSource、Google或者UCloud。默认值为Aliyun。
    * listFile  listFile
    *
    * @var string[]
    */
    protected static $setters = [
            'ak' => 'setAk',
            'sk' => 'setSk',
            'jsonAuthFile' => 'setJsonAuthFile',
            'appId' => 'setAppId',
            'region' => 'setRegion',
            'objectKey' => 'setObjectKey',
            'bucket' => 'setBucket',
            'cloudType' => 'setCloudType',
            'listFile' => 'setListFile'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ak  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * sk  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * jsonAuthFile  用于谷歌云Cloud Storage鉴权
    * appId  当源端为腾讯云时，需要填写此参数。
    * region  源端桶所处的区域，task_type为非URL_LIST时，本参数为必选。
    * objectKey  任务类型为前缀迁移任务时，表示待迁移前缀。 整桶迁移时，此参数设置为[\"\"]。
    * bucket  源端所在桶
    * cloudType  源端云服务提供商，当task_type为URL_LIST时，本参数为URLSource且必选。可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、URLSource、Google或者UCloud。默认值为Aliyun。
    * listFile  listFile
    *
    * @var string[]
    */
    protected static $getters = [
            'ak' => 'getAk',
            'sk' => 'getSk',
            'jsonAuthFile' => 'getJsonAuthFile',
            'appId' => 'getAppId',
            'region' => 'getRegion',
            'objectKey' => 'getObjectKey',
            'bucket' => 'getBucket',
            'cloudType' => 'getCloudType',
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
        $this->container['ak'] = isset($data['ak']) ? $data['ak'] : null;
        $this->container['sk'] = isset($data['sk']) ? $data['sk'] : null;
        $this->container['jsonAuthFile'] = isset($data['jsonAuthFile']) ? $data['jsonAuthFile'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['objectKey'] = isset($data['objectKey']) ? $data['objectKey'] : null;
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['cloudType'] = isset($data['cloudType']) ? $data['cloudType'] : null;
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
            if (!is_null($this->container['ak']) && (mb_strlen($this->container['ak']) > 100)) {
                $invalidProperties[] = "invalid value for 'ak', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['ak']) && (mb_strlen($this->container['ak']) < 0)) {
                $invalidProperties[] = "invalid value for 'ak', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ak']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['ak'])) {
                $invalidProperties[] = "invalid value for 'ak', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            if (!is_null($this->container['sk']) && (mb_strlen($this->container['sk']) > 100)) {
                $invalidProperties[] = "invalid value for 'sk', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['sk']) && (mb_strlen($this->container['sk']) < 0)) {
                $invalidProperties[] = "invalid value for 'sk', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sk']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['sk'])) {
                $invalidProperties[] = "invalid value for 'sk', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            if (!is_null($this->container['jsonAuthFile']) && (mb_strlen($this->container['jsonAuthFile']) > 65535)) {
                $invalidProperties[] = "invalid value for 'jsonAuthFile', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['jsonAuthFile']) && (mb_strlen($this->container['jsonAuthFile']) < 0)) {
                $invalidProperties[] = "invalid value for 'jsonAuthFile', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) > 255)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) < 0)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appId']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['appId'])) {
                $invalidProperties[] = "invalid value for 'appId', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 100)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['region']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['region'])) {
                $invalidProperties[] = "invalid value for 'region', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            if (!is_null($this->container['bucket']) && (mb_strlen($this->container['bucket']) > 1024)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['bucket']) && (mb_strlen($this->container['bucket']) < 0)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bucket']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['bucket'])) {
                $invalidProperties[] = "invalid value for 'bucket', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            if (!is_null($this->container['cloudType']) && (mb_strlen($this->container['cloudType']) > 100)) {
                $invalidProperties[] = "invalid value for 'cloudType', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['cloudType']) && (mb_strlen($this->container['cloudType']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cloudType']) && !preg_match("/^(AWS|Azure|Aliyun|Tencent|HuaweiCloud|QingCloud|KingsoftCloud|Baidu|Qiniu|URLSource|Google|UCloud)$/", $this->container['cloudType'])) {
                $invalidProperties[] = "invalid value for 'cloudType', must be conform to the pattern /^(AWS|Azure|Aliyun|Tencent|HuaweiCloud|QingCloud|KingsoftCloud|Baidu|Qiniu|URLSource|Google|UCloud)$/.";
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
    * Gets ak
    *  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    *
    * @return string|null
    */
    public function getAk()
    {
        return $this->container['ak'];
    }

    /**
    * Sets ak
    *
    * @param string|null $ak 源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    *
    * @return $this
    */
    public function setAk($ak)
    {
        $this->container['ak'] = $ak;
        return $this;
    }

    /**
    * Gets sk
    *  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    *
    * @return string|null
    */
    public function getSk()
    {
        return $this->container['sk'];
    }

    /**
    * Sets sk
    *
    * @param string|null $sk 源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    *
    * @return $this
    */
    public function setSk($sk)
    {
        $this->container['sk'] = $sk;
        return $this;
    }

    /**
    * Gets jsonAuthFile
    *  用于谷歌云Cloud Storage鉴权
    *
    * @return string|null
    */
    public function getJsonAuthFile()
    {
        return $this->container['jsonAuthFile'];
    }

    /**
    * Sets jsonAuthFile
    *
    * @param string|null $jsonAuthFile 用于谷歌云Cloud Storage鉴权
    *
    * @return $this
    */
    public function setJsonAuthFile($jsonAuthFile)
    {
        $this->container['jsonAuthFile'] = $jsonAuthFile;
        return $this;
    }

    /**
    * Gets appId
    *  当源端为腾讯云时，需要填写此参数。
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
    * @param string|null $appId 当源端为腾讯云时，需要填写此参数。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets region
    *  源端桶所处的区域，task_type为非URL_LIST时，本参数为必选。
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
    * @param string|null $region 源端桶所处的区域，task_type为非URL_LIST时，本参数为必选。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets objectKey
    *  任务类型为前缀迁移任务时，表示待迁移前缀。 整桶迁移时，此参数设置为[\"\"]。
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
    * @param string[]|null $objectKey 任务类型为前缀迁移任务时，表示待迁移前缀。 整桶迁移时，此参数设置为[\"\"]。
    *
    * @return $this
    */
    public function setObjectKey($objectKey)
    {
        $this->container['objectKey'] = $objectKey;
        return $this;
    }

    /**
    * Gets bucket
    *  源端所在桶
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
    * @param string|null $bucket 源端所在桶
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
    *  源端云服务提供商，当task_type为URL_LIST时，本参数为URLSource且必选。可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、URLSource、Google或者UCloud。默认值为Aliyun。
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
    * @param string|null $cloudType 源端云服务提供商，当task_type为URL_LIST时，本参数为URLSource且必选。可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、URLSource、Google或者UCloud。默认值为Aliyun。
    *
    * @return $this
    */
    public function setCloudType($cloudType)
    {
        $this->container['cloudType'] = $cloudType;
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

