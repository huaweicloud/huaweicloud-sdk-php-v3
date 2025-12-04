<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PushShareFilesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PushShareFilesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucketName  合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点组成。仅推送共享存储接口使用。
    * objectPath  合法的OBS对象路径，最大长度1024字符。仅支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号等这些字符。 推送的文件只支持tar文件类型。推送时，按tar文件解压后的文件目录结构推送到手机。当前只支持/data和/cache目录推送。仅推送共享存储接口使用。
    * serverIds  云手机服务器ID列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucketName' => 'string',
            'objectPath' => 'string',
            'serverIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucketName  合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点组成。仅推送共享存储接口使用。
    * objectPath  合法的OBS对象路径，最大长度1024字符。仅支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号等这些字符。 推送的文件只支持tar文件类型。推送时，按tar文件解压后的文件目录结构推送到手机。当前只支持/data和/cache目录推送。仅推送共享存储接口使用。
    * serverIds  云手机服务器ID列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucketName' => null,
        'objectPath' => null,
        'serverIds' => null
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
    * bucketName  合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点组成。仅推送共享存储接口使用。
    * objectPath  合法的OBS对象路径，最大长度1024字符。仅支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号等这些字符。 推送的文件只支持tar文件类型。推送时，按tar文件解压后的文件目录结构推送到手机。当前只支持/data和/cache目录推送。仅推送共享存储接口使用。
    * serverIds  云手机服务器ID列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucketName' => 'bucket_name',
            'objectPath' => 'object_path',
            'serverIds' => 'server_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucketName  合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点组成。仅推送共享存储接口使用。
    * objectPath  合法的OBS对象路径，最大长度1024字符。仅支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号等这些字符。 推送的文件只支持tar文件类型。推送时，按tar文件解压后的文件目录结构推送到手机。当前只支持/data和/cache目录推送。仅推送共享存储接口使用。
    * serverIds  云手机服务器ID列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'bucketName' => 'setBucketName',
            'objectPath' => 'setObjectPath',
            'serverIds' => 'setServerIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucketName  合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点组成。仅推送共享存储接口使用。
    * objectPath  合法的OBS对象路径，最大长度1024字符。仅支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号等这些字符。 推送的文件只支持tar文件类型。推送时，按tar文件解压后的文件目录结构推送到手机。当前只支持/data和/cache目录推送。仅推送共享存储接口使用。
    * serverIds  云手机服务器ID列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'bucketName' => 'getBucketName',
            'objectPath' => 'getObjectPath',
            'serverIds' => 'getServerIds'
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
        $this->container['objectPath'] = isset($data['objectPath']) ? $data['objectPath'] : null;
        $this->container['serverIds'] = isset($data['serverIds']) ? $data['serverIds'] : null;
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
        if ($this->container['serverIds'] === null) {
            $invalidProperties[] = "'serverIds' can't be null";
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
    *  合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点组成。仅推送共享存储接口使用。
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
    * @param string $bucketName 合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点组成。仅推送共享存储接口使用。
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
    *  合法的OBS对象路径，最大长度1024字符。仅支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号等这些字符。 推送的文件只支持tar文件类型。推送时，按tar文件解压后的文件目录结构推送到手机。当前只支持/data和/cache目录推送。仅推送共享存储接口使用。
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
    * @param string $objectPath 合法的OBS对象路径，最大长度1024字符。仅支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号等这些字符。 推送的文件只支持tar文件类型。推送时，按tar文件解压后的文件目录结构推送到手机。当前只支持/data和/cache目录推送。仅推送共享存储接口使用。
    *
    * @return $this
    */
    public function setObjectPath($objectPath)
    {
        $this->container['objectPath'] = $objectPath;
        return $this;
    }

    /**
    * Gets serverIds
    *  云手机服务器ID列表。
    *
    * @return string[]
    */
    public function getServerIds()
    {
        return $this->container['serverIds'];
    }

    /**
    * Sets serverIds
    *
    * @param string[] $serverIds 云手机服务器ID列表。
    *
    * @return $this
    */
    public function setServerIds($serverIds)
    {
        $this->container['serverIds'] = $serverIds;
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

