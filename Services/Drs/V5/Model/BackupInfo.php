<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileSource  备份文件来源：（全部大写） - OBS：存放在OBS中的备份文件。 - RDS：RDS实例的备份文件。
    * bucketName  OBS桶名称，使用OBS桶备份文件恢复时必填。 约束：长度范围为3～63个字符，仅支持小写字母、数字、中划线（-）、点（.），且只能以字母或数字开头和结尾，禁止使用IP地址。 如果选择从OBS桶获取备份文件必填，参考登录[客户端登录](https://support.huaweicloud.com/clientogw-obs/zh-cn_topic_0045829058.html)OBS Browser客户端，首页为OBS桶列表，可以获取到备份文件所在桶的名称。
    * files  备份文件信息列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileSource' => 'string',
            'bucketName' => 'string',
            'files' => '\HuaweiCloud\SDK\Drs\V5\Model\BackupFileInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileSource  备份文件来源：（全部大写） - OBS：存放在OBS中的备份文件。 - RDS：RDS实例的备份文件。
    * bucketName  OBS桶名称，使用OBS桶备份文件恢复时必填。 约束：长度范围为3～63个字符，仅支持小写字母、数字、中划线（-）、点（.），且只能以字母或数字开头和结尾，禁止使用IP地址。 如果选择从OBS桶获取备份文件必填，参考登录[客户端登录](https://support.huaweicloud.com/clientogw-obs/zh-cn_topic_0045829058.html)OBS Browser客户端，首页为OBS桶列表，可以获取到备份文件所在桶的名称。
    * files  备份文件信息列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileSource' => null,
        'bucketName' => null,
        'files' => null
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
    * fileSource  备份文件来源：（全部大写） - OBS：存放在OBS中的备份文件。 - RDS：RDS实例的备份文件。
    * bucketName  OBS桶名称，使用OBS桶备份文件恢复时必填。 约束：长度范围为3～63个字符，仅支持小写字母、数字、中划线（-）、点（.），且只能以字母或数字开头和结尾，禁止使用IP地址。 如果选择从OBS桶获取备份文件必填，参考登录[客户端登录](https://support.huaweicloud.com/clientogw-obs/zh-cn_topic_0045829058.html)OBS Browser客户端，首页为OBS桶列表，可以获取到备份文件所在桶的名称。
    * files  备份文件信息列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileSource' => 'file_source',
            'bucketName' => 'bucket_name',
            'files' => 'files'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileSource  备份文件来源：（全部大写） - OBS：存放在OBS中的备份文件。 - RDS：RDS实例的备份文件。
    * bucketName  OBS桶名称，使用OBS桶备份文件恢复时必填。 约束：长度范围为3～63个字符，仅支持小写字母、数字、中划线（-）、点（.），且只能以字母或数字开头和结尾，禁止使用IP地址。 如果选择从OBS桶获取备份文件必填，参考登录[客户端登录](https://support.huaweicloud.com/clientogw-obs/zh-cn_topic_0045829058.html)OBS Browser客户端，首页为OBS桶列表，可以获取到备份文件所在桶的名称。
    * files  备份文件信息列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'fileSource' => 'setFileSource',
            'bucketName' => 'setBucketName',
            'files' => 'setFiles'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileSource  备份文件来源：（全部大写） - OBS：存放在OBS中的备份文件。 - RDS：RDS实例的备份文件。
    * bucketName  OBS桶名称，使用OBS桶备份文件恢复时必填。 约束：长度范围为3～63个字符，仅支持小写字母、数字、中划线（-）、点（.），且只能以字母或数字开头和结尾，禁止使用IP地址。 如果选择从OBS桶获取备份文件必填，参考登录[客户端登录](https://support.huaweicloud.com/clientogw-obs/zh-cn_topic_0045829058.html)OBS Browser客户端，首页为OBS桶列表，可以获取到备份文件所在桶的名称。
    * files  备份文件信息列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'fileSource' => 'getFileSource',
            'bucketName' => 'getBucketName',
            'files' => 'getFiles'
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
    const FILE_SOURCE_OBS = 'OBS';
    const FILE_SOURCE_RDS = 'RDS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFileSourceAllowableValues()
    {
        return [
            self::FILE_SOURCE_OBS,
            self::FILE_SOURCE_RDS,
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
        $this->container['fileSource'] = isset($data['fileSource']) ? $data['fileSource'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fileSource'] === null) {
            $invalidProperties[] = "'fileSource' can't be null";
        }
            $allowedValues = $this->getFileSourceAllowableValues();
                if (!is_null($this->container['fileSource']) && !in_array($this->container['fileSource'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'fileSource', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['fileSource']) > 128)) {
                $invalidProperties[] = "invalid value for 'fileSource', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['fileSource']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileSource', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['bucketName']) && (mb_strlen($this->container['bucketName']) > 64)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['bucketName']) && (mb_strlen($this->container['bucketName']) < 1)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['files'] === null) {
            $invalidProperties[] = "'files' can't be null";
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
    * Gets fileSource
    *  备份文件来源：（全部大写） - OBS：存放在OBS中的备份文件。 - RDS：RDS实例的备份文件。
    *
    * @return string
    */
    public function getFileSource()
    {
        return $this->container['fileSource'];
    }

    /**
    * Sets fileSource
    *
    * @param string $fileSource 备份文件来源：（全部大写） - OBS：存放在OBS中的备份文件。 - RDS：RDS实例的备份文件。
    *
    * @return $this
    */
    public function setFileSource($fileSource)
    {
        $this->container['fileSource'] = $fileSource;
        return $this;
    }

    /**
    * Gets bucketName
    *  OBS桶名称，使用OBS桶备份文件恢复时必填。 约束：长度范围为3～63个字符，仅支持小写字母、数字、中划线（-）、点（.），且只能以字母或数字开头和结尾，禁止使用IP地址。 如果选择从OBS桶获取备份文件必填，参考登录[客户端登录](https://support.huaweicloud.com/clientogw-obs/zh-cn_topic_0045829058.html)OBS Browser客户端，首页为OBS桶列表，可以获取到备份文件所在桶的名称。
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
    * @param string|null $bucketName OBS桶名称，使用OBS桶备份文件恢复时必填。 约束：长度范围为3～63个字符，仅支持小写字母、数字、中划线（-）、点（.），且只能以字母或数字开头和结尾，禁止使用IP地址。 如果选择从OBS桶获取备份文件必填，参考登录[客户端登录](https://support.huaweicloud.com/clientogw-obs/zh-cn_topic_0045829058.html)OBS Browser客户端，首页为OBS桶列表，可以获取到备份文件所在桶的名称。
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets files
    *  备份文件信息列表。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\BackupFileInfo[]
    */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
    * Sets files
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\BackupFileInfo[] $files 备份文件信息列表。
    *
    * @return $this
    */
    public function setFiles($files)
    {
        $this->container['files'] = $files;
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

