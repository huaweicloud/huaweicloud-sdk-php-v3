<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckPrefixReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckPrefixReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudType  云类型 AWS：亚马逊 Aliyun：阿里云 Qiniu：七牛云 QingCloud：青云 Tencent：腾讯云 Baidu：百度云 KingsoftCloud：金山云 Azure：微软云 UCloud：优刻得 HuaweiCloud：华为云 Google: 谷歌云 URLSource：URL HEC：HEC
    * ak  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * sk  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * jsonAuthFile  用于谷歌云Cloud Storage鉴权
    * connectionString  连接字符串，用于微软云Blob鉴权
    * appId  当源端为腾讯云时，会返回此参数。
    * bucketName  桶名
    * fileName  前缀名称
    * dataCenter  数据中心，区域
    * securityToken  安全令牌
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudType' => 'string',
            'ak' => 'string',
            'sk' => 'string',
            'jsonAuthFile' => 'string',
            'connectionString' => 'string',
            'appId' => 'string',
            'bucketName' => 'string',
            'fileName' => 'string',
            'dataCenter' => 'string',
            'securityToken' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudType  云类型 AWS：亚马逊 Aliyun：阿里云 Qiniu：七牛云 QingCloud：青云 Tencent：腾讯云 Baidu：百度云 KingsoftCloud：金山云 Azure：微软云 UCloud：优刻得 HuaweiCloud：华为云 Google: 谷歌云 URLSource：URL HEC：HEC
    * ak  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * sk  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * jsonAuthFile  用于谷歌云Cloud Storage鉴权
    * connectionString  连接字符串，用于微软云Blob鉴权
    * appId  当源端为腾讯云时，会返回此参数。
    * bucketName  桶名
    * fileName  前缀名称
    * dataCenter  数据中心，区域
    * securityToken  安全令牌
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudType' => null,
        'ak' => null,
        'sk' => null,
        'jsonAuthFile' => null,
        'connectionString' => null,
        'appId' => null,
        'bucketName' => null,
        'fileName' => null,
        'dataCenter' => null,
        'securityToken' => null
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
    * cloudType  云类型 AWS：亚马逊 Aliyun：阿里云 Qiniu：七牛云 QingCloud：青云 Tencent：腾讯云 Baidu：百度云 KingsoftCloud：金山云 Azure：微软云 UCloud：优刻得 HuaweiCloud：华为云 Google: 谷歌云 URLSource：URL HEC：HEC
    * ak  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * sk  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * jsonAuthFile  用于谷歌云Cloud Storage鉴权
    * connectionString  连接字符串，用于微软云Blob鉴权
    * appId  当源端为腾讯云时，会返回此参数。
    * bucketName  桶名
    * fileName  前缀名称
    * dataCenter  数据中心，区域
    * securityToken  安全令牌
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudType' => 'cloud_type',
            'ak' => 'ak',
            'sk' => 'sk',
            'jsonAuthFile' => 'json_auth_file',
            'connectionString' => 'connection_string',
            'appId' => 'app_id',
            'bucketName' => 'bucket_name',
            'fileName' => 'file_name',
            'dataCenter' => 'data_center',
            'securityToken' => 'security_token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudType  云类型 AWS：亚马逊 Aliyun：阿里云 Qiniu：七牛云 QingCloud：青云 Tencent：腾讯云 Baidu：百度云 KingsoftCloud：金山云 Azure：微软云 UCloud：优刻得 HuaweiCloud：华为云 Google: 谷歌云 URLSource：URL HEC：HEC
    * ak  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * sk  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * jsonAuthFile  用于谷歌云Cloud Storage鉴权
    * connectionString  连接字符串，用于微软云Blob鉴权
    * appId  当源端为腾讯云时，会返回此参数。
    * bucketName  桶名
    * fileName  前缀名称
    * dataCenter  数据中心，区域
    * securityToken  安全令牌
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudType' => 'setCloudType',
            'ak' => 'setAk',
            'sk' => 'setSk',
            'jsonAuthFile' => 'setJsonAuthFile',
            'connectionString' => 'setConnectionString',
            'appId' => 'setAppId',
            'bucketName' => 'setBucketName',
            'fileName' => 'setFileName',
            'dataCenter' => 'setDataCenter',
            'securityToken' => 'setSecurityToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudType  云类型 AWS：亚马逊 Aliyun：阿里云 Qiniu：七牛云 QingCloud：青云 Tencent：腾讯云 Baidu：百度云 KingsoftCloud：金山云 Azure：微软云 UCloud：优刻得 HuaweiCloud：华为云 Google: 谷歌云 URLSource：URL HEC：HEC
    * ak  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * sk  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * jsonAuthFile  用于谷歌云Cloud Storage鉴权
    * connectionString  连接字符串，用于微软云Blob鉴权
    * appId  当源端为腾讯云时，会返回此参数。
    * bucketName  桶名
    * fileName  前缀名称
    * dataCenter  数据中心，区域
    * securityToken  安全令牌
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudType' => 'getCloudType',
            'ak' => 'getAk',
            'sk' => 'getSk',
            'jsonAuthFile' => 'getJsonAuthFile',
            'connectionString' => 'getConnectionString',
            'appId' => 'getAppId',
            'bucketName' => 'getBucketName',
            'fileName' => 'getFileName',
            'dataCenter' => 'getDataCenter',
            'securityToken' => 'getSecurityToken'
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
        $this->container['cloudType'] = isset($data['cloudType']) ? $data['cloudType'] : null;
        $this->container['ak'] = isset($data['ak']) ? $data['ak'] : null;
        $this->container['sk'] = isset($data['sk']) ? $data['sk'] : null;
        $this->container['jsonAuthFile'] = isset($data['jsonAuthFile']) ? $data['jsonAuthFile'] : null;
        $this->container['connectionString'] = isset($data['connectionString']) ? $data['connectionString'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['dataCenter'] = isset($data['dataCenter']) ? $data['dataCenter'] : null;
        $this->container['securityToken'] = isset($data['securityToken']) ? $data['securityToken'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['cloudType'] === null) {
            $invalidProperties[] = "'cloudType' can't be null";
        }
            if ((mb_strlen($this->container['cloudType']) > 100)) {
                $invalidProperties[] = "invalid value for 'cloudType', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['cloudType']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudType', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^(AWS|Azure|Aliyun|Tencent|HuaweiCloud|QingCloud|KingsoftCloud|Baidu|Qiniu|Google|URLSource|UCloud|HEC)$/", $this->container['cloudType'])) {
                $invalidProperties[] = "invalid value for 'cloudType', must be conform to the pattern /^(AWS|Azure|Aliyun|Tencent|HuaweiCloud|QingCloud|KingsoftCloud|Baidu|Qiniu|Google|URLSource|UCloud|HEC)$/.";
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
            if (!is_null($this->container['jsonAuthFile']) && (mb_strlen($this->container['jsonAuthFile']) > 65535)) {
                $invalidProperties[] = "invalid value for 'jsonAuthFile', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['jsonAuthFile']) && (mb_strlen($this->container['jsonAuthFile']) < 0)) {
                $invalidProperties[] = "invalid value for 'jsonAuthFile', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['connectionString']) && (mb_strlen($this->container['connectionString']) > 2048)) {
                $invalidProperties[] = "invalid value for 'connectionString', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['connectionString']) && (mb_strlen($this->container['connectionString']) < 0)) {
                $invalidProperties[] = "invalid value for 'connectionString', the character length must be bigger than or equal to 0.";
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
        if ($this->container['bucketName'] === null) {
            $invalidProperties[] = "'bucketName' can't be null";
        }
            if ((mb_strlen($this->container['bucketName']) > 100)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['bucketName']) < 0)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['bucketName'])) {
                $invalidProperties[] = "invalid value for 'bucketName', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
        if ($this->container['fileName'] === null) {
            $invalidProperties[] = "'fileName' can't be null";
        }
            if ((mb_strlen($this->container['fileName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['fileName']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['dataCenter'] === null) {
            $invalidProperties[] = "'dataCenter' can't be null";
        }
            if ((mb_strlen($this->container['dataCenter']) > 100)) {
                $invalidProperties[] = "invalid value for 'dataCenter', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['dataCenter']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataCenter', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['securityToken']) && (mb_strlen($this->container['securityToken']) > 16384)) {
                $invalidProperties[] = "invalid value for 'securityToken', the character length must be smaller than or equal to 16384.";
            }
            if (!is_null($this->container['securityToken']) && (mb_strlen($this->container['securityToken']) < 0)) {
                $invalidProperties[] = "invalid value for 'securityToken', the character length must be bigger than or equal to 0.";
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
    *  云类型 AWS：亚马逊 Aliyun：阿里云 Qiniu：七牛云 QingCloud：青云 Tencent：腾讯云 Baidu：百度云 KingsoftCloud：金山云 Azure：微软云 UCloud：优刻得 HuaweiCloud：华为云 Google: 谷歌云 URLSource：URL HEC：HEC
    *
    * @return string
    */
    public function getCloudType()
    {
        return $this->container['cloudType'];
    }

    /**
    * Sets cloudType
    *
    * @param string $cloudType 云类型 AWS：亚马逊 Aliyun：阿里云 Qiniu：七牛云 QingCloud：青云 Tencent：腾讯云 Baidu：百度云 KingsoftCloud：金山云 Azure：微软云 UCloud：优刻得 HuaweiCloud：华为云 Google: 谷歌云 URLSource：URL HEC：HEC
    *
    * @return $this
    */
    public function setCloudType($cloudType)
    {
        $this->container['cloudType'] = $cloudType;
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
    * Gets connectionString
    *  连接字符串，用于微软云Blob鉴权
    *
    * @return string|null
    */
    public function getConnectionString()
    {
        return $this->container['connectionString'];
    }

    /**
    * Sets connectionString
    *
    * @param string|null $connectionString 连接字符串，用于微软云Blob鉴权
    *
    * @return $this
    */
    public function setConnectionString($connectionString)
    {
        $this->container['connectionString'] = $connectionString;
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
    * Gets bucketName
    *  桶名
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
    * @param string $bucketName 桶名
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets fileName
    *  前缀名称
    *
    * @return string
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string $fileName 前缀名称
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets dataCenter
    *  数据中心，区域
    *
    * @return string
    */
    public function getDataCenter()
    {
        return $this->container['dataCenter'];
    }

    /**
    * Sets dataCenter
    *
    * @param string $dataCenter 数据中心，区域
    *
    * @return $this
    */
    public function setDataCenter($dataCenter)
    {
        $this->container['dataCenter'] = $dataCenter;
        return $this;
    }

    /**
    * Gets securityToken
    *  安全令牌
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
    * @param string|null $securityToken 安全令牌
    *
    * @return $this
    */
    public function setSecurityToken($securityToken)
    {
        $this->container['securityToken'] = $securityToken;
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

