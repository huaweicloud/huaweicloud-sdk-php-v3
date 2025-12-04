<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteShareFilesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteShareFilesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverIds  云手机服务器ID列表。
    * filePaths  所需删除的共享存储文件绝对路径。以/开头，最大长度4096字节，目前只支持大小写字母、数字、点（.）、斜线（/）、中划线（-）、空格、下划线（_）、等号（=），不支持中文。路径中不能包含.. 上层目录路径，防止跨目录攻击。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverIds' => 'string[]',
            'filePaths' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverIds  云手机服务器ID列表。
    * filePaths  所需删除的共享存储文件绝对路径。以/开头，最大长度4096字节，目前只支持大小写字母、数字、点（.）、斜线（/）、中划线（-）、空格、下划线（_）、等号（=），不支持中文。路径中不能包含.. 上层目录路径，防止跨目录攻击。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverIds' => null,
        'filePaths' => null
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
    * serverIds  云手机服务器ID列表。
    * filePaths  所需删除的共享存储文件绝对路径。以/开头，最大长度4096字节，目前只支持大小写字母、数字、点（.）、斜线（/）、中划线（-）、空格、下划线（_）、等号（=），不支持中文。路径中不能包含.. 上层目录路径，防止跨目录攻击。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverIds' => 'server_ids',
            'filePaths' => 'file_paths'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverIds  云手机服务器ID列表。
    * filePaths  所需删除的共享存储文件绝对路径。以/开头，最大长度4096字节，目前只支持大小写字母、数字、点（.）、斜线（/）、中划线（-）、空格、下划线（_）、等号（=），不支持中文。路径中不能包含.. 上层目录路径，防止跨目录攻击。
    *
    * @var string[]
    */
    protected static $setters = [
            'serverIds' => 'setServerIds',
            'filePaths' => 'setFilePaths'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverIds  云手机服务器ID列表。
    * filePaths  所需删除的共享存储文件绝对路径。以/开头，最大长度4096字节，目前只支持大小写字母、数字、点（.）、斜线（/）、中划线（-）、空格、下划线（_）、等号（=），不支持中文。路径中不能包含.. 上层目录路径，防止跨目录攻击。
    *
    * @var string[]
    */
    protected static $getters = [
            'serverIds' => 'getServerIds',
            'filePaths' => 'getFilePaths'
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
        $this->container['serverIds'] = isset($data['serverIds']) ? $data['serverIds'] : null;
        $this->container['filePaths'] = isset($data['filePaths']) ? $data['filePaths'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serverIds'] === null) {
            $invalidProperties[] = "'serverIds' can't be null";
        }
        if ($this->container['filePaths'] === null) {
            $invalidProperties[] = "'filePaths' can't be null";
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
    * Gets filePaths
    *  所需删除的共享存储文件绝对路径。以/开头，最大长度4096字节，目前只支持大小写字母、数字、点（.）、斜线（/）、中划线（-）、空格、下划线（_）、等号（=），不支持中文。路径中不能包含.. 上层目录路径，防止跨目录攻击。
    *
    * @return string[]
    */
    public function getFilePaths()
    {
        return $this->container['filePaths'];
    }

    /**
    * Sets filePaths
    *
    * @param string[] $filePaths 所需删除的共享存储文件绝对路径。以/开头，最大长度4096字节，目前只支持大小写字母、数字、点（.）、斜线（/）、中划线（-）、空格、下划线（_）、等号（=），不支持中文。路径中不能包含.. 上层目录路径，防止跨目录攻击。
    *
    * @return $this
    */
    public function setFilePaths($filePaths)
    {
        $this->container['filePaths'] = $filePaths;
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

