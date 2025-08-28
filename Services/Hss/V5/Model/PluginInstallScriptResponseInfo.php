<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginInstallScriptResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginInstallScriptResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * packageType  **参数解释**： 安装包类型 **取值范围**： 字符长度0-128位
    * cmd  **参数解释**： 命令cmd **取值范围**： 字符长度1-256位
    * packageDownloadUrl  **参数解释**： 包下载地址 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'packageType' => 'string',
            'cmd' => 'string',
            'packageDownloadUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * packageType  **参数解释**： 安装包类型 **取值范围**： 字符长度0-128位
    * cmd  **参数解释**： 命令cmd **取值范围**： 字符长度1-256位
    * packageDownloadUrl  **参数解释**： 包下载地址 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'packageType' => null,
        'cmd' => null,
        'packageDownloadUrl' => null
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
    * packageType  **参数解释**： 安装包类型 **取值范围**： 字符长度0-128位
    * cmd  **参数解释**： 命令cmd **取值范围**： 字符长度1-256位
    * packageDownloadUrl  **参数解释**： 包下载地址 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'packageType' => 'package_type',
            'cmd' => 'cmd',
            'packageDownloadUrl' => 'package_download_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * packageType  **参数解释**： 安装包类型 **取值范围**： 字符长度0-128位
    * cmd  **参数解释**： 命令cmd **取值范围**： 字符长度1-256位
    * packageDownloadUrl  **参数解释**： 包下载地址 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $setters = [
            'packageType' => 'setPackageType',
            'cmd' => 'setCmd',
            'packageDownloadUrl' => 'setPackageDownloadUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * packageType  **参数解释**： 安装包类型 **取值范围**： 字符长度0-128位
    * cmd  **参数解释**： 命令cmd **取值范围**： 字符长度1-256位
    * packageDownloadUrl  **参数解释**： 包下载地址 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $getters = [
            'packageType' => 'getPackageType',
            'cmd' => 'getCmd',
            'packageDownloadUrl' => 'getPackageDownloadUrl'
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
        $this->container['packageType'] = isset($data['packageType']) ? $data['packageType'] : null;
        $this->container['cmd'] = isset($data['cmd']) ? $data['cmd'] : null;
        $this->container['packageDownloadUrl'] = isset($data['packageDownloadUrl']) ? $data['packageDownloadUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['packageType']) && (mb_strlen($this->container['packageType']) > 128)) {
                $invalidProperties[] = "invalid value for 'packageType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['packageType']) && (mb_strlen($this->container['packageType']) < 0)) {
                $invalidProperties[] = "invalid value for 'packageType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cmd']) && (mb_strlen($this->container['cmd']) > 256)) {
                $invalidProperties[] = "invalid value for 'cmd', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['cmd']) && (mb_strlen($this->container['cmd']) < 1)) {
                $invalidProperties[] = "invalid value for 'cmd', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['packageDownloadUrl']) && (mb_strlen($this->container['packageDownloadUrl']) > 256)) {
                $invalidProperties[] = "invalid value for 'packageDownloadUrl', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['packageDownloadUrl']) && (mb_strlen($this->container['packageDownloadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'packageDownloadUrl', the character length must be bigger than or equal to 1.";
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
    * Gets packageType
    *  **参数解释**： 安装包类型 **取值范围**： 字符长度0-128位
    *
    * @return string|null
    */
    public function getPackageType()
    {
        return $this->container['packageType'];
    }

    /**
    * Sets packageType
    *
    * @param string|null $packageType **参数解释**： 安装包类型 **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setPackageType($packageType)
    {
        $this->container['packageType'] = $packageType;
        return $this;
    }

    /**
    * Gets cmd
    *  **参数解释**： 命令cmd **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getCmd()
    {
        return $this->container['cmd'];
    }

    /**
    * Sets cmd
    *
    * @param string|null $cmd **参数解释**： 命令cmd **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setCmd($cmd)
    {
        $this->container['cmd'] = $cmd;
        return $this;
    }

    /**
    * Gets packageDownloadUrl
    *  **参数解释**： 包下载地址 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getPackageDownloadUrl()
    {
        return $this->container['packageDownloadUrl'];
    }

    /**
    * Sets packageDownloadUrl
    *
    * @param string|null $packageDownloadUrl **参数解释**： 包下载地址 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setPackageDownloadUrl($packageDownloadUrl)
    {
        $this->container['packageDownloadUrl'] = $packageDownloadUrl;
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

