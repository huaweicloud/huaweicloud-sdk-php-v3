<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteShareAppsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteShareAppsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * packageName  所需删除的共享应用的合法包名。最大长度128字节。只支持包含大小写字母、数字、下划线、点，其中不允许以数字和下划线开头，点不能作为结尾且包名中至少有一个点。
    * serverIds  云手机服务器ID列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'packageName' => 'string',
            'serverIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * packageName  所需删除的共享应用的合法包名。最大长度128字节。只支持包含大小写字母、数字、下划线、点，其中不允许以数字和下划线开头，点不能作为结尾且包名中至少有一个点。
    * serverIds  云手机服务器ID列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'packageName' => null,
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
    * packageName  所需删除的共享应用的合法包名。最大长度128字节。只支持包含大小写字母、数字、下划线、点，其中不允许以数字和下划线开头，点不能作为结尾且包名中至少有一个点。
    * serverIds  云手机服务器ID列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'packageName' => 'package_name',
            'serverIds' => 'server_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * packageName  所需删除的共享应用的合法包名。最大长度128字节。只支持包含大小写字母、数字、下划线、点，其中不允许以数字和下划线开头，点不能作为结尾且包名中至少有一个点。
    * serverIds  云手机服务器ID列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'packageName' => 'setPackageName',
            'serverIds' => 'setServerIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * packageName  所需删除的共享应用的合法包名。最大长度128字节。只支持包含大小写字母、数字、下划线、点，其中不允许以数字和下划线开头，点不能作为结尾且包名中至少有一个点。
    * serverIds  云手机服务器ID列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'packageName' => 'getPackageName',
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
    *  所需删除的共享应用的合法包名。最大长度128字节。只支持包含大小写字母、数字、下划线、点，其中不允许以数字和下划线开头，点不能作为结尾且包名中至少有一个点。
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
    * @param string $packageName 所需删除的共享应用的合法包名。最大长度128字节。只支持包含大小写字母、数字、下划线、点，其中不允许以数字和下划线开头，点不能作为结尾且包名中至少有一个点。
    *
    * @return $this
    */
    public function setPackageName($packageName)
    {
        $this->container['packageName'] = $packageName;
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

