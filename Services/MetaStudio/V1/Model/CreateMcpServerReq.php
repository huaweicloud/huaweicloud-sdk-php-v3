<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateMcpServerReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateMcpServerReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  MCP服务端对接配置名称。
    * mcpServerUrl  MCP服务端地址。
    * authHeaderName  鉴权头域名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'mcpServerUrl' => 'string',
            'authHeaderName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  MCP服务端对接配置名称。
    * mcpServerUrl  MCP服务端地址。
    * authHeaderName  鉴权头域名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'mcpServerUrl' => null,
        'authHeaderName' => null
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
    * name  MCP服务端对接配置名称。
    * mcpServerUrl  MCP服务端地址。
    * authHeaderName  鉴权头域名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'mcpServerUrl' => 'mcp_server_url',
            'authHeaderName' => 'auth_header_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  MCP服务端对接配置名称。
    * mcpServerUrl  MCP服务端地址。
    * authHeaderName  鉴权头域名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'mcpServerUrl' => 'setMcpServerUrl',
            'authHeaderName' => 'setAuthHeaderName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  MCP服务端对接配置名称。
    * mcpServerUrl  MCP服务端地址。
    * authHeaderName  鉴权头域名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'mcpServerUrl' => 'getMcpServerUrl',
            'authHeaderName' => 'getAuthHeaderName'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['mcpServerUrl'] = isset($data['mcpServerUrl']) ? $data['mcpServerUrl'] : null;
        $this->container['authHeaderName'] = isset($data['authHeaderName']) ? $data['authHeaderName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['mcpServerUrl'] === null) {
            $invalidProperties[] = "'mcpServerUrl' can't be null";
        }
            if ((mb_strlen($this->container['mcpServerUrl']) > 512)) {
                $invalidProperties[] = "invalid value for 'mcpServerUrl', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['mcpServerUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'mcpServerUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['authHeaderName']) && (mb_strlen($this->container['authHeaderName']) > 64)) {
                $invalidProperties[] = "invalid value for 'authHeaderName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['authHeaderName']) && (mb_strlen($this->container['authHeaderName']) < 0)) {
                $invalidProperties[] = "invalid value for 'authHeaderName', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  MCP服务端对接配置名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name MCP服务端对接配置名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets mcpServerUrl
    *  MCP服务端地址。
    *
    * @return string
    */
    public function getMcpServerUrl()
    {
        return $this->container['mcpServerUrl'];
    }

    /**
    * Sets mcpServerUrl
    *
    * @param string $mcpServerUrl MCP服务端地址。
    *
    * @return $this
    */
    public function setMcpServerUrl($mcpServerUrl)
    {
        $this->container['mcpServerUrl'] = $mcpServerUrl;
        return $this;
    }

    /**
    * Gets authHeaderName
    *  鉴权头域名称。
    *
    * @return string|null
    */
    public function getAuthHeaderName()
    {
        return $this->container['authHeaderName'];
    }

    /**
    * Sets authHeaderName
    *
    * @param string|null $authHeaderName 鉴权头域名称。
    *
    * @return $this
    */
    public function setAuthHeaderName($authHeaderName)
    {
        $this->container['authHeaderName'] = $authHeaderName;
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

