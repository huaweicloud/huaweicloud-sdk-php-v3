<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccessKeyInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccessKeyInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessKeyId  访问密钥ID
    * keyName  访问密钥名称
    * accessKey  访问密钥AK
    * appName  访问密钥所属的应用名称
    * status  访问密钥状态
    * createTime  应用的创建时间，UNIX时间戳，单位毫秒
    * downloadTime  下载时间
    * isDownloaded  是否下载
    * isImported  是否导入
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessKeyId' => 'string',
            'keyName' => 'string',
            'accessKey' => 'string',
            'appName' => 'string',
            'status' => 'string',
            'createTime' => 'int',
            'downloadTime' => 'int',
            'isDownloaded' => 'bool',
            'isImported' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessKeyId  访问密钥ID
    * keyName  访问密钥名称
    * accessKey  访问密钥AK
    * appName  访问密钥所属的应用名称
    * status  访问密钥状态
    * createTime  应用的创建时间，UNIX时间戳，单位毫秒
    * downloadTime  下载时间
    * isDownloaded  是否下载
    * isImported  是否导入
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessKeyId' => null,
        'keyName' => null,
        'accessKey' => null,
        'appName' => null,
        'status' => null,
        'createTime' => 'int64',
        'downloadTime' => 'int64',
        'isDownloaded' => null,
        'isImported' => null
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
    * accessKeyId  访问密钥ID
    * keyName  访问密钥名称
    * accessKey  访问密钥AK
    * appName  访问密钥所属的应用名称
    * status  访问密钥状态
    * createTime  应用的创建时间，UNIX时间戳，单位毫秒
    * downloadTime  下载时间
    * isDownloaded  是否下载
    * isImported  是否导入
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessKeyId' => 'access_key_id',
            'keyName' => 'key_name',
            'accessKey' => 'access_key',
            'appName' => 'app_name',
            'status' => 'status',
            'createTime' => 'create_time',
            'downloadTime' => 'download_time',
            'isDownloaded' => 'is_downloaded',
            'isImported' => 'is_imported'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessKeyId  访问密钥ID
    * keyName  访问密钥名称
    * accessKey  访问密钥AK
    * appName  访问密钥所属的应用名称
    * status  访问密钥状态
    * createTime  应用的创建时间，UNIX时间戳，单位毫秒
    * downloadTime  下载时间
    * isDownloaded  是否下载
    * isImported  是否导入
    *
    * @var string[]
    */
    protected static $setters = [
            'accessKeyId' => 'setAccessKeyId',
            'keyName' => 'setKeyName',
            'accessKey' => 'setAccessKey',
            'appName' => 'setAppName',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'downloadTime' => 'setDownloadTime',
            'isDownloaded' => 'setIsDownloaded',
            'isImported' => 'setIsImported'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessKeyId  访问密钥ID
    * keyName  访问密钥名称
    * accessKey  访问密钥AK
    * appName  访问密钥所属的应用名称
    * status  访问密钥状态
    * createTime  应用的创建时间，UNIX时间戳，单位毫秒
    * downloadTime  下载时间
    * isDownloaded  是否下载
    * isImported  是否导入
    *
    * @var string[]
    */
    protected static $getters = [
            'accessKeyId' => 'getAccessKeyId',
            'keyName' => 'getKeyName',
            'accessKey' => 'getAccessKey',
            'appName' => 'getAppName',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'downloadTime' => 'getDownloadTime',
            'isDownloaded' => 'getIsDownloaded',
            'isImported' => 'getIsImported'
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
        $this->container['accessKeyId'] = isset($data['accessKeyId']) ? $data['accessKeyId'] : null;
        $this->container['keyName'] = isset($data['keyName']) ? $data['keyName'] : null;
        $this->container['accessKey'] = isset($data['accessKey']) ? $data['accessKey'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['downloadTime'] = isset($data['downloadTime']) ? $data['downloadTime'] : null;
        $this->container['isDownloaded'] = isset($data['isDownloaded']) ? $data['isDownloaded'] : null;
        $this->container['isImported'] = isset($data['isImported']) ? $data['isImported'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accessKeyId'] === null) {
            $invalidProperties[] = "'accessKeyId' can't be null";
        }
        if ($this->container['keyName'] === null) {
            $invalidProperties[] = "'keyName' can't be null";
        }
        if ($this->container['accessKey'] === null) {
            $invalidProperties[] = "'accessKey' can't be null";
        }
        if ($this->container['appName'] === null) {
            $invalidProperties[] = "'appName' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['isDownloaded'] === null) {
            $invalidProperties[] = "'isDownloaded' can't be null";
        }
        if ($this->container['isImported'] === null) {
            $invalidProperties[] = "'isImported' can't be null";
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
    * Gets accessKeyId
    *  访问密钥ID
    *
    * @return string
    */
    public function getAccessKeyId()
    {
        return $this->container['accessKeyId'];
    }

    /**
    * Sets accessKeyId
    *
    * @param string $accessKeyId 访问密钥ID
    *
    * @return $this
    */
    public function setAccessKeyId($accessKeyId)
    {
        $this->container['accessKeyId'] = $accessKeyId;
        return $this;
    }

    /**
    * Gets keyName
    *  访问密钥名称
    *
    * @return string
    */
    public function getKeyName()
    {
        return $this->container['keyName'];
    }

    /**
    * Sets keyName
    *
    * @param string $keyName 访问密钥名称
    *
    * @return $this
    */
    public function setKeyName($keyName)
    {
        $this->container['keyName'] = $keyName;
        return $this;
    }

    /**
    * Gets accessKey
    *  访问密钥AK
    *
    * @return string
    */
    public function getAccessKey()
    {
        return $this->container['accessKey'];
    }

    /**
    * Sets accessKey
    *
    * @param string $accessKey 访问密钥AK
    *
    * @return $this
    */
    public function setAccessKey($accessKey)
    {
        $this->container['accessKey'] = $accessKey;
        return $this;
    }

    /**
    * Gets appName
    *  访问密钥所属的应用名称
    *
    * @return string
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string $appName 访问密钥所属的应用名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets status
    *  访问密钥状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 访问密钥状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  应用的创建时间，UNIX时间戳，单位毫秒
    *
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 应用的创建时间，UNIX时间戳，单位毫秒
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets downloadTime
    *  下载时间
    *
    * @return int|null
    */
    public function getDownloadTime()
    {
        return $this->container['downloadTime'];
    }

    /**
    * Sets downloadTime
    *
    * @param int|null $downloadTime 下载时间
    *
    * @return $this
    */
    public function setDownloadTime($downloadTime)
    {
        $this->container['downloadTime'] = $downloadTime;
        return $this;
    }

    /**
    * Gets isDownloaded
    *  是否下载
    *
    * @return bool
    */
    public function getIsDownloaded()
    {
        return $this->container['isDownloaded'];
    }

    /**
    * Sets isDownloaded
    *
    * @param bool $isDownloaded 是否下载
    *
    * @return $this
    */
    public function setIsDownloaded($isDownloaded)
    {
        $this->container['isDownloaded'] = $isDownloaded;
        return $this;
    }

    /**
    * Gets isImported
    *  是否导入
    *
    * @return bool
    */
    public function getIsImported()
    {
        return $this->container['isImported'];
    }

    /**
    * Sets isImported
    *
    * @param bool $isImported 是否导入
    *
    * @return $this
    */
    public function setIsImported($isImported)
    {
        $this->container['isImported'] = $isImported;
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

