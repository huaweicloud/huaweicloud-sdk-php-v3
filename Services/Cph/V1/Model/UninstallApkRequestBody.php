<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UninstallApkRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UninstallApkRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * command  卸载应用固定填写uninstall。
    * content  待卸载的APP名称。  最大长度为1024字节，只支持大小写字母、数字、下划线（_）、点（.）、斜线（/）、冒号（:）、中划线（-）。
    * phoneIds  云手机ID列表。 server_ids参数不存在时必选，同时存在只处理phone_ids。
    * serverIds  云手机服务器ID列表。 phone_ids参数不存在时必选，同时存在只处理phone_ids。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'command' => 'string',
            'content' => 'string',
            'phoneIds' => 'string[]',
            'serverIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * command  卸载应用固定填写uninstall。
    * content  待卸载的APP名称。  最大长度为1024字节，只支持大小写字母、数字、下划线（_）、点（.）、斜线（/）、冒号（:）、中划线（-）。
    * phoneIds  云手机ID列表。 server_ids参数不存在时必选，同时存在只处理phone_ids。
    * serverIds  云手机服务器ID列表。 phone_ids参数不存在时必选，同时存在只处理phone_ids。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'command' => null,
        'content' => null,
        'phoneIds' => null,
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
    * command  卸载应用固定填写uninstall。
    * content  待卸载的APP名称。  最大长度为1024字节，只支持大小写字母、数字、下划线（_）、点（.）、斜线（/）、冒号（:）、中划线（-）。
    * phoneIds  云手机ID列表。 server_ids参数不存在时必选，同时存在只处理phone_ids。
    * serverIds  云手机服务器ID列表。 phone_ids参数不存在时必选，同时存在只处理phone_ids。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'command' => 'command',
            'content' => 'content',
            'phoneIds' => 'phone_ids',
            'serverIds' => 'server_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * command  卸载应用固定填写uninstall。
    * content  待卸载的APP名称。  最大长度为1024字节，只支持大小写字母、数字、下划线（_）、点（.）、斜线（/）、冒号（:）、中划线（-）。
    * phoneIds  云手机ID列表。 server_ids参数不存在时必选，同时存在只处理phone_ids。
    * serverIds  云手机服务器ID列表。 phone_ids参数不存在时必选，同时存在只处理phone_ids。
    *
    * @var string[]
    */
    protected static $setters = [
            'command' => 'setCommand',
            'content' => 'setContent',
            'phoneIds' => 'setPhoneIds',
            'serverIds' => 'setServerIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * command  卸载应用固定填写uninstall。
    * content  待卸载的APP名称。  最大长度为1024字节，只支持大小写字母、数字、下划线（_）、点（.）、斜线（/）、冒号（:）、中划线（-）。
    * phoneIds  云手机ID列表。 server_ids参数不存在时必选，同时存在只处理phone_ids。
    * serverIds  云手机服务器ID列表。 phone_ids参数不存在时必选，同时存在只处理phone_ids。
    *
    * @var string[]
    */
    protected static $getters = [
            'command' => 'getCommand',
            'content' => 'getContent',
            'phoneIds' => 'getPhoneIds',
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
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['phoneIds'] = isset($data['phoneIds']) ? $data['phoneIds'] : null;
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
        if ($this->container['command'] === null) {
            $invalidProperties[] = "'command' can't be null";
        }
            if ((mb_strlen($this->container['command']) > 9)) {
                $invalidProperties[] = "invalid value for 'command', the character length must be smaller than or equal to 9.";
            }
            if ((mb_strlen($this->container['command']) < 9)) {
                $invalidProperties[] = "invalid value for 'command', the character length must be bigger than or equal to 9.";
            }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
            if ((mb_strlen($this->container['content']) > 1024)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['content']) < 0)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 0.";
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
    * Gets command
    *  卸载应用固定填写uninstall。
    *
    * @return string
    */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
    * Sets command
    *
    * @param string $command 卸载应用固定填写uninstall。
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
        return $this;
    }

    /**
    * Gets content
    *  待卸载的APP名称。  最大长度为1024字节，只支持大小写字母、数字、下划线（_）、点（.）、斜线（/）、冒号（:）、中划线（-）。
    *
    * @return string
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string $content 待卸载的APP名称。  最大长度为1024字节，只支持大小写字母、数字、下划线（_）、点（.）、斜线（/）、冒号（:）、中划线（-）。
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets phoneIds
    *  云手机ID列表。 server_ids参数不存在时必选，同时存在只处理phone_ids。
    *
    * @return string[]|null
    */
    public function getPhoneIds()
    {
        return $this->container['phoneIds'];
    }

    /**
    * Sets phoneIds
    *
    * @param string[]|null $phoneIds 云手机ID列表。 server_ids参数不存在时必选，同时存在只处理phone_ids。
    *
    * @return $this
    */
    public function setPhoneIds($phoneIds)
    {
        $this->container['phoneIds'] = $phoneIds;
        return $this;
    }

    /**
    * Gets serverIds
    *  云手机服务器ID列表。 phone_ids参数不存在时必选，同时存在只处理phone_ids。
    *
    * @return string[]|null
    */
    public function getServerIds()
    {
        return $this->container['serverIds'];
    }

    /**
    * Sets serverIds
    *
    * @param string[]|null $serverIds 云手机服务器ID列表。 phone_ids参数不存在时必选，同时存在只处理phone_ids。
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

