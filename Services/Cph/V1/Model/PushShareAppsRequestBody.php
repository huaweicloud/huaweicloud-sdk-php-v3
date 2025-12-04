<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PushShareAppsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PushShareAppsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * packageName  合法的应用包名。
    * preInstallApp  是否预装应用。 - 1：预装 - 0：不预装；默认不预装
    * bucketName  合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点组成
    * objectPath  合法的OBS对象key，最大长度1024字符。仅支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号等这些字符。 推送的文件只支持tar文件类型。推送时，按tar文件解压后的文件目录结构推送到手机。
    * serverIds  云手机服务器ID列表。传入的服务器id个数范围为[1, 100]。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'packageName' => 'string',
            'preInstallApp' => 'int',
            'bucketName' => 'string',
            'objectPath' => 'string',
            'serverIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * packageName  合法的应用包名。
    * preInstallApp  是否预装应用。 - 1：预装 - 0：不预装；默认不预装
    * bucketName  合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点组成
    * objectPath  合法的OBS对象key，最大长度1024字符。仅支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号等这些字符。 推送的文件只支持tar文件类型。推送时，按tar文件解压后的文件目录结构推送到手机。
    * serverIds  云手机服务器ID列表。传入的服务器id个数范围为[1, 100]。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'packageName' => null,
        'preInstallApp' => 'int32',
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
    * packageName  合法的应用包名。
    * preInstallApp  是否预装应用。 - 1：预装 - 0：不预装；默认不预装
    * bucketName  合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点组成
    * objectPath  合法的OBS对象key，最大长度1024字符。仅支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号等这些字符。 推送的文件只支持tar文件类型。推送时，按tar文件解压后的文件目录结构推送到手机。
    * serverIds  云手机服务器ID列表。传入的服务器id个数范围为[1, 100]。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'packageName' => 'package_name',
            'preInstallApp' => 'pre_install_app',
            'bucketName' => 'bucket_name',
            'objectPath' => 'object_path',
            'serverIds' => 'server_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * packageName  合法的应用包名。
    * preInstallApp  是否预装应用。 - 1：预装 - 0：不预装；默认不预装
    * bucketName  合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点组成
    * objectPath  合法的OBS对象key，最大长度1024字符。仅支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号等这些字符。 推送的文件只支持tar文件类型。推送时，按tar文件解压后的文件目录结构推送到手机。
    * serverIds  云手机服务器ID列表。传入的服务器id个数范围为[1, 100]。
    *
    * @var string[]
    */
    protected static $setters = [
            'packageName' => 'setPackageName',
            'preInstallApp' => 'setPreInstallApp',
            'bucketName' => 'setBucketName',
            'objectPath' => 'setObjectPath',
            'serverIds' => 'setServerIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * packageName  合法的应用包名。
    * preInstallApp  是否预装应用。 - 1：预装 - 0：不预装；默认不预装
    * bucketName  合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点组成
    * objectPath  合法的OBS对象key，最大长度1024字符。仅支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号等这些字符。 推送的文件只支持tar文件类型。推送时，按tar文件解压后的文件目录结构推送到手机。
    * serverIds  云手机服务器ID列表。传入的服务器id个数范围为[1, 100]。
    *
    * @var string[]
    */
    protected static $getters = [
            'packageName' => 'getPackageName',
            'preInstallApp' => 'getPreInstallApp',
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
        $this->container['packageName'] = isset($data['packageName']) ? $data['packageName'] : null;
        $this->container['preInstallApp'] = isset($data['preInstallApp']) ? $data['preInstallApp'] : null;
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
        if ($this->container['packageName'] === null) {
            $invalidProperties[] = "'packageName' can't be null";
        }
            if ((mb_strlen($this->container['packageName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'packageName', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['packageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'packageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['preInstallApp']) && ($this->container['preInstallApp'] > 128)) {
                $invalidProperties[] = "invalid value for 'preInstallApp', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['preInstallApp']) && ($this->container['preInstallApp'] < -128)) {
                $invalidProperties[] = "invalid value for 'preInstallApp', must be bigger than or equal to -128.";
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
    * Gets packageName
    *  合法的应用包名。
    *
    * @return string
    */
    public function getPackageName()
    {
        return $this->container['packageName'];
    }

    /**
    * Sets packageName
    *
    * @param string $packageName 合法的应用包名。
    *
    * @return $this
    */
    public function setPackageName($packageName)
    {
        $this->container['packageName'] = $packageName;
        return $this;
    }

    /**
    * Gets preInstallApp
    *  是否预装应用。 - 1：预装 - 0：不预装；默认不预装
    *
    * @return int|null
    */
    public function getPreInstallApp()
    {
        return $this->container['preInstallApp'];
    }

    /**
    * Sets preInstallApp
    *
    * @param int|null $preInstallApp 是否预装应用。 - 1：预装 - 0：不预装；默认不预装
    *
    * @return $this
    */
    public function setPreInstallApp($preInstallApp)
    {
        $this->container['preInstallApp'] = $preInstallApp;
        return $this;
    }

    /**
    * Gets bucketName
    *  合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点组成
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
    * @param string $bucketName 合法的OBS桶名，3-63个字符，只能由小写字母、数字、中划线（-）和小数点组成
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
    *  合法的OBS对象key，最大长度1024字符。仅支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号等这些字符。 推送的文件只支持tar文件类型。推送时，按tar文件解压后的文件目录结构推送到手机。
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
    * @param string $objectPath 合法的OBS对象key，最大长度1024字符。仅支持大小写字母、数字、小数点（.）、斜线（/）、中划线（-）、下划线（_）、加号（+）、井号（#）、等号等这些字符。 推送的文件只支持tar文件类型。推送时，按tar文件解压后的文件目录结构推送到手机。
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
    *  云手机服务器ID列表。传入的服务器id个数范围为[1, 100]。
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
    * @param string[] $serverIds 云手机服务器ID列表。传入的服务器id个数范围为[1, 100]。
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

