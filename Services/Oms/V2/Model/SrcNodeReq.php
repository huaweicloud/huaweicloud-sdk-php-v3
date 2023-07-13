<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SrcNodeReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SrcNodeReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudType  源端云服务提供商，task_type为非url_list时，本参数为URLSource。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、URLSource或者UCloud。默认值为Aliyun。
    * region  源端桶所处的区域，task_type为非url_list时，本参数为必选。
    * ak  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * sk  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * securityToken  源端桶的临时Token（最大长度16384个字符）
    * appId  当源端为腾讯云时，需要填写此参数。
    * bucket  源端桶的名称，task_type为非url_list时，本参数为必选。
    * objectKey  任务类型为对象迁移任务时，表示待迁移对象名称（以“/”结尾的字符串代表待迁移的文件夹，非“/”结尾的字符串代表待迁移的文件。）； 任务类型为前缀迁移任务时，表示待迁移前缀。 整桶迁移时，此参数设置为[\"\"]。
    * listFile  listFile
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudType' => 'string',
            'region' => 'string',
            'ak' => 'string',
            'sk' => 'string',
            'securityToken' => 'string',
            'appId' => 'string',
            'bucket' => 'string',
            'objectKey' => 'string[]',
            'listFile' => '\HuaweiCloud\SDK\Oms\V2\Model\ListFile'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudType  源端云服务提供商，task_type为非url_list时，本参数为URLSource。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、URLSource或者UCloud。默认值为Aliyun。
    * region  源端桶所处的区域，task_type为非url_list时，本参数为必选。
    * ak  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * sk  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * securityToken  源端桶的临时Token（最大长度16384个字符）
    * appId  当源端为腾讯云时，需要填写此参数。
    * bucket  源端桶的名称，task_type为非url_list时，本参数为必选。
    * objectKey  任务类型为对象迁移任务时，表示待迁移对象名称（以“/”结尾的字符串代表待迁移的文件夹，非“/”结尾的字符串代表待迁移的文件。）； 任务类型为前缀迁移任务时，表示待迁移前缀。 整桶迁移时，此参数设置为[\"\"]。
    * listFile  listFile
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudType' => null,
        'region' => null,
        'ak' => null,
        'sk' => null,
        'securityToken' => null,
        'appId' => null,
        'bucket' => null,
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
    * cloudType  源端云服务提供商，task_type为非url_list时，本参数为URLSource。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、URLSource或者UCloud。默认值为Aliyun。
    * region  源端桶所处的区域，task_type为非url_list时，本参数为必选。
    * ak  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * sk  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * securityToken  源端桶的临时Token（最大长度16384个字符）
    * appId  当源端为腾讯云时，需要填写此参数。
    * bucket  源端桶的名称，task_type为非url_list时，本参数为必选。
    * objectKey  任务类型为对象迁移任务时，表示待迁移对象名称（以“/”结尾的字符串代表待迁移的文件夹，非“/”结尾的字符串代表待迁移的文件。）； 任务类型为前缀迁移任务时，表示待迁移前缀。 整桶迁移时，此参数设置为[\"\"]。
    * listFile  listFile
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudType' => 'cloud_type',
            'region' => 'region',
            'ak' => 'ak',
            'sk' => 'sk',
            'securityToken' => 'security_token',
            'appId' => 'app_id',
            'bucket' => 'bucket',
            'objectKey' => 'object_key',
            'listFile' => 'list_file'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudType  源端云服务提供商，task_type为非url_list时，本参数为URLSource。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、URLSource或者UCloud。默认值为Aliyun。
    * region  源端桶所处的区域，task_type为非url_list时，本参数为必选。
    * ak  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * sk  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * securityToken  源端桶的临时Token（最大长度16384个字符）
    * appId  当源端为腾讯云时，需要填写此参数。
    * bucket  源端桶的名称，task_type为非url_list时，本参数为必选。
    * objectKey  任务类型为对象迁移任务时，表示待迁移对象名称（以“/”结尾的字符串代表待迁移的文件夹，非“/”结尾的字符串代表待迁移的文件。）； 任务类型为前缀迁移任务时，表示待迁移前缀。 整桶迁移时，此参数设置为[\"\"]。
    * listFile  listFile
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudType' => 'setCloudType',
            'region' => 'setRegion',
            'ak' => 'setAk',
            'sk' => 'setSk',
            'securityToken' => 'setSecurityToken',
            'appId' => 'setAppId',
            'bucket' => 'setBucket',
            'objectKey' => 'setObjectKey',
            'listFile' => 'setListFile'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudType  源端云服务提供商，task_type为非url_list时，本参数为URLSource。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、URLSource或者UCloud。默认值为Aliyun。
    * region  源端桶所处的区域，task_type为非url_list时，本参数为必选。
    * ak  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * sk  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * securityToken  源端桶的临时Token（最大长度16384个字符）
    * appId  当源端为腾讯云时，需要填写此参数。
    * bucket  源端桶的名称，task_type为非url_list时，本参数为必选。
    * objectKey  任务类型为对象迁移任务时，表示待迁移对象名称（以“/”结尾的字符串代表待迁移的文件夹，非“/”结尾的字符串代表待迁移的文件。）； 任务类型为前缀迁移任务时，表示待迁移前缀。 整桶迁移时，此参数设置为[\"\"]。
    * listFile  listFile
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudType' => 'getCloudType',
            'region' => 'getRegion',
            'ak' => 'getAk',
            'sk' => 'getSk',
            'securityToken' => 'getSecurityToken',
            'appId' => 'getAppId',
            'bucket' => 'getBucket',
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
        $this->container['cloudType'] = isset($data['cloudType']) ? $data['cloudType'] : 'Aliyun';
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['ak'] = isset($data['ak']) ? $data['ak'] : null;
        $this->container['sk'] = isset($data['sk']) ? $data['sk'] : null;
        $this->container['securityToken'] = isset($data['securityToken']) ? $data['securityToken'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
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
            if (!is_null($this->container['cloudType']) && !preg_match("/^(AWS|Azure|Aliyun|Tencent|HuaweiCloud|QingCloud|KingsoftCloud|Baidu|Qiniu|URLSource|UCloud)$/", $this->container['cloudType'])) {
                $invalidProperties[] = "invalid value for 'cloudType', must be conform to the pattern /^(AWS|Azure|Aliyun|Tencent|HuaweiCloud|QingCloud|KingsoftCloud|Baidu|Qiniu|URLSource|UCloud)$/.";
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
            if (!is_null($this->container['securityToken']) && (mb_strlen($this->container['securityToken']) > 16384)) {
                $invalidProperties[] = "invalid value for 'securityToken', the character length must be smaller than or equal to 16384.";
            }
            if (!is_null($this->container['securityToken']) && (mb_strlen($this->container['securityToken']) < 0)) {
                $invalidProperties[] = "invalid value for 'securityToken', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['securityToken']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['securityToken'])) {
                $invalidProperties[] = "invalid value for 'securityToken', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
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
            if (!is_null($this->container['bucket']) && (mb_strlen($this->container['bucket']) > 1024)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['bucket']) && (mb_strlen($this->container['bucket']) < 0)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bucket']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['bucket'])) {
                $invalidProperties[] = "invalid value for 'bucket', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
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
    * Gets cloudType
    *  源端云服务提供商，task_type为非url_list时，本参数为URLSource。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、URLSource或者UCloud。默认值为Aliyun。
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
    * @param string|null $cloudType 源端云服务提供商，task_type为非url_list时，本参数为URLSource。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、URLSource或者UCloud。默认值为Aliyun。
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
    *  源端桶所处的区域，task_type为非url_list时，本参数为必选。
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
    * @param string|null $region 源端桶所处的区域，task_type为非url_list时，本参数为必选。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
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
    * Gets securityToken
    *  源端桶的临时Token（最大长度16384个字符）
    *
    * @return string|null
    */
    public function getSecurityToken()
    {
        return $this->container['securityToken'];
    }

    /**
    * Sets securityToken
    *
    * @param string|null $securityToken 源端桶的临时Token（最大长度16384个字符）
    *
    * @return $this
    */
    public function setSecurityToken($securityToken)
    {
        $this->container['securityToken'] = $securityToken;
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
    * Gets bucket
    *  源端桶的名称，task_type为非url_list时，本参数为必选。
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
    * @param string|null $bucket 源端桶的名称，task_type为非url_list时，本参数为必选。
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets objectKey
    *  任务类型为对象迁移任务时，表示待迁移对象名称（以“/”结尾的字符串代表待迁移的文件夹，非“/”结尾的字符串代表待迁移的文件。）； 任务类型为前缀迁移任务时，表示待迁移前缀。 整桶迁移时，此参数设置为[\"\"]。
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
    * @param string[]|null $objectKey 任务类型为对象迁移任务时，表示待迁移对象名称（以“/”结尾的字符串代表待迁移的文件夹，非“/”结尾的字符串代表待迁移的文件。）； 任务类型为前缀迁移任务时，表示待迁移前缀。 整桶迁移时，此参数设置为[\"\"]。
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

