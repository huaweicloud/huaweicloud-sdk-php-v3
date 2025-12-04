<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StorageInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StorageInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phoneId  云手机ID。
    * includeFiles  需要导出数据的存储路径，绝对路径，最大长度4096字节。仅支持导出/data和、cache目录下的数据。目前只支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、星号（*）、波浪号（~）、等号这些字符，星号只能在文件路径末尾。[文件导出打包时仅保留路径最后一级的文件权限、属主、标签等元数据，如对文件的上层目录权限有要求，建议参考[云手机数据备份与恢复](https://support.huaweicloud.com/api-cph/cph_api_0801.html)。](tag:hws)
    * excludeFiles  不能导出数据的存储路径。exclude_files优先级比include_files高，如果冲突，exclude_files生效。 路径要求同include_files。
    * bucketName  导出数据存储的OBS桶名。 合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点（.）组成。
    * objectPath  导出数据存储的OBS路径名。 符合OBS的路径名规范，最大长度1024字符。目前只支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号这些字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phoneId' => 'string',
            'includeFiles' => 'string[]',
            'excludeFiles' => 'string[]',
            'bucketName' => 'string',
            'objectPath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phoneId  云手机ID。
    * includeFiles  需要导出数据的存储路径，绝对路径，最大长度4096字节。仅支持导出/data和、cache目录下的数据。目前只支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、星号（*）、波浪号（~）、等号这些字符，星号只能在文件路径末尾。[文件导出打包时仅保留路径最后一级的文件权限、属主、标签等元数据，如对文件的上层目录权限有要求，建议参考[云手机数据备份与恢复](https://support.huaweicloud.com/api-cph/cph_api_0801.html)。](tag:hws)
    * excludeFiles  不能导出数据的存储路径。exclude_files优先级比include_files高，如果冲突，exclude_files生效。 路径要求同include_files。
    * bucketName  导出数据存储的OBS桶名。 合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点（.）组成。
    * objectPath  导出数据存储的OBS路径名。 符合OBS的路径名规范，最大长度1024字符。目前只支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号这些字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phoneId' => null,
        'includeFiles' => null,
        'excludeFiles' => null,
        'bucketName' => null,
        'objectPath' => null
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
    * phoneId  云手机ID。
    * includeFiles  需要导出数据的存储路径，绝对路径，最大长度4096字节。仅支持导出/data和、cache目录下的数据。目前只支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、星号（*）、波浪号（~）、等号这些字符，星号只能在文件路径末尾。[文件导出打包时仅保留路径最后一级的文件权限、属主、标签等元数据，如对文件的上层目录权限有要求，建议参考[云手机数据备份与恢复](https://support.huaweicloud.com/api-cph/cph_api_0801.html)。](tag:hws)
    * excludeFiles  不能导出数据的存储路径。exclude_files优先级比include_files高，如果冲突，exclude_files生效。 路径要求同include_files。
    * bucketName  导出数据存储的OBS桶名。 合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点（.）组成。
    * objectPath  导出数据存储的OBS路径名。 符合OBS的路径名规范，最大长度1024字符。目前只支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号这些字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phoneId' => 'phone_id',
            'includeFiles' => 'include_files',
            'excludeFiles' => 'exclude_files',
            'bucketName' => 'bucket_name',
            'objectPath' => 'object_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phoneId  云手机ID。
    * includeFiles  需要导出数据的存储路径，绝对路径，最大长度4096字节。仅支持导出/data和、cache目录下的数据。目前只支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、星号（*）、波浪号（~）、等号这些字符，星号只能在文件路径末尾。[文件导出打包时仅保留路径最后一级的文件权限、属主、标签等元数据，如对文件的上层目录权限有要求，建议参考[云手机数据备份与恢复](https://support.huaweicloud.com/api-cph/cph_api_0801.html)。](tag:hws)
    * excludeFiles  不能导出数据的存储路径。exclude_files优先级比include_files高，如果冲突，exclude_files生效。 路径要求同include_files。
    * bucketName  导出数据存储的OBS桶名。 合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点（.）组成。
    * objectPath  导出数据存储的OBS路径名。 符合OBS的路径名规范，最大长度1024字符。目前只支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号这些字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'phoneId' => 'setPhoneId',
            'includeFiles' => 'setIncludeFiles',
            'excludeFiles' => 'setExcludeFiles',
            'bucketName' => 'setBucketName',
            'objectPath' => 'setObjectPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phoneId  云手机ID。
    * includeFiles  需要导出数据的存储路径，绝对路径，最大长度4096字节。仅支持导出/data和、cache目录下的数据。目前只支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、星号（*）、波浪号（~）、等号这些字符，星号只能在文件路径末尾。[文件导出打包时仅保留路径最后一级的文件权限、属主、标签等元数据，如对文件的上层目录权限有要求，建议参考[云手机数据备份与恢复](https://support.huaweicloud.com/api-cph/cph_api_0801.html)。](tag:hws)
    * excludeFiles  不能导出数据的存储路径。exclude_files优先级比include_files高，如果冲突，exclude_files生效。 路径要求同include_files。
    * bucketName  导出数据存储的OBS桶名。 合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点（.）组成。
    * objectPath  导出数据存储的OBS路径名。 符合OBS的路径名规范，最大长度1024字符。目前只支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号这些字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'phoneId' => 'getPhoneId',
            'includeFiles' => 'getIncludeFiles',
            'excludeFiles' => 'getExcludeFiles',
            'bucketName' => 'getBucketName',
            'objectPath' => 'getObjectPath'
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
        $this->container['phoneId'] = isset($data['phoneId']) ? $data['phoneId'] : null;
        $this->container['includeFiles'] = isset($data['includeFiles']) ? $data['includeFiles'] : null;
        $this->container['excludeFiles'] = isset($data['excludeFiles']) ? $data['excludeFiles'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['objectPath'] = isset($data['objectPath']) ? $data['objectPath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['phoneId'] === null) {
            $invalidProperties[] = "'phoneId' can't be null";
        }
            if ((mb_strlen($this->container['phoneId']) > 32)) {
                $invalidProperties[] = "invalid value for 'phoneId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['phoneId']) < 32)) {
                $invalidProperties[] = "invalid value for 'phoneId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['includeFiles'] === null) {
            $invalidProperties[] = "'includeFiles' can't be null";
        }
        if ($this->container['bucketName'] === null) {
            $invalidProperties[] = "'bucketName' can't be null";
        }
            if ((mb_strlen($this->container['bucketName']) > 64)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['bucketName']) < 0)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['objectPath'] === null) {
            $invalidProperties[] = "'objectPath' can't be null";
        }
            if ((mb_strlen($this->container['objectPath']) > 1024)) {
                $invalidProperties[] = "invalid value for 'objectPath', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['objectPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'objectPath', the character length must be bigger than or equal to 0.";
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
    * Gets phoneId
    *  云手机ID。
    *
    * @return string
    */
    public function getPhoneId()
    {
        return $this->container['phoneId'];
    }

    /**
    * Sets phoneId
    *
    * @param string $phoneId 云手机ID。
    *
    * @return $this
    */
    public function setPhoneId($phoneId)
    {
        $this->container['phoneId'] = $phoneId;
        return $this;
    }

    /**
    * Gets includeFiles
    *  需要导出数据的存储路径，绝对路径，最大长度4096字节。仅支持导出/data和、cache目录下的数据。目前只支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、星号（*）、波浪号（~）、等号这些字符，星号只能在文件路径末尾。[文件导出打包时仅保留路径最后一级的文件权限、属主、标签等元数据，如对文件的上层目录权限有要求，建议参考[云手机数据备份与恢复](https://support.huaweicloud.com/api-cph/cph_api_0801.html)。](tag:hws)
    *
    * @return string[]
    */
    public function getIncludeFiles()
    {
        return $this->container['includeFiles'];
    }

    /**
    * Sets includeFiles
    *
    * @param string[] $includeFiles 需要导出数据的存储路径，绝对路径，最大长度4096字节。仅支持导出/data和、cache目录下的数据。目前只支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、星号（*）、波浪号（~）、等号这些字符，星号只能在文件路径末尾。[文件导出打包时仅保留路径最后一级的文件权限、属主、标签等元数据，如对文件的上层目录权限有要求，建议参考[云手机数据备份与恢复](https://support.huaweicloud.com/api-cph/cph_api_0801.html)。](tag:hws)
    *
    * @return $this
    */
    public function setIncludeFiles($includeFiles)
    {
        $this->container['includeFiles'] = $includeFiles;
        return $this;
    }

    /**
    * Gets excludeFiles
    *  不能导出数据的存储路径。exclude_files优先级比include_files高，如果冲突，exclude_files生效。 路径要求同include_files。
    *
    * @return string[]|null
    */
    public function getExcludeFiles()
    {
        return $this->container['excludeFiles'];
    }

    /**
    * Sets excludeFiles
    *
    * @param string[]|null $excludeFiles 不能导出数据的存储路径。exclude_files优先级比include_files高，如果冲突，exclude_files生效。 路径要求同include_files。
    *
    * @return $this
    */
    public function setExcludeFiles($excludeFiles)
    {
        $this->container['excludeFiles'] = $excludeFiles;
        return $this;
    }

    /**
    * Gets bucketName
    *  导出数据存储的OBS桶名。 合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点（.）组成。
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
    * @param string $bucketName 导出数据存储的OBS桶名。 合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点（.）组成。
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets objectPath
    *  导出数据存储的OBS路径名。 符合OBS的路径名规范，最大长度1024字符。目前只支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号这些字符。
    *
    * @return string
    */
    public function getObjectPath()
    {
        return $this->container['objectPath'];
    }

    /**
    * Sets objectPath
    *
    * @param string $objectPath 导出数据存储的OBS路径名。 符合OBS的路径名规范，最大长度1024字符。目前只支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号这些字符。
    *
    * @return $this
    */
    public function setObjectPath($objectPath)
    {
        $this->container['objectPath'] = $objectPath;
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

